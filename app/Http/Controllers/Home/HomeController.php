<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Socialite;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use App\Role;

class HomeController extends Controller
{
    public function index()
    {
    	return view('index');
    }

    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from Social.
     *
     * @return Response
     */
    public function handle($provider)
    {
        $user = Socialite::driver($provider)->stateless()->user();

        $socialUser = null;

        //Check is this email present
        $userCheck = User::where('email', '=', $user->email)->first();

        if (!empty($userCheck)) {
            $socialUser = $userCheck;
        } else {

            $sameSocialId = Social::where('social_id', '=', $user->id)
            ->where('provider', '=', $provider)
            ->first();
            
            if (empty($sameSocialId)) {

                //There is no combination of this social id and provider, so create new one
                $newSocialUser = new User;

                if (!$user->email) {
                    $email = 'missing' . str_random(10);
                } else {
                    $email = $user->email;
                }

                $newSocialUser->email= $email;

                $newSocialUser->full_name = $user->name;
                $newSocialUser->password = bcrypt(str_random(16));
                $newSocialUser->save();

                $socialData = new Social;
                $socialData->social_id = $user->id;
                $socialData->provider= $provider;
                $newSocialUser->social()->save($socialData);

                // Add role
                $userRole         = Role::whereName('user')->first();
                $newSocialUser->assignRole($userRole);

                $socialUser = $newSocialUser;

            } else {
                //Load this existing social user
                $socialUser = $sameSocialId->user;
            }
        }

        return response()->json(compact('token'));
    }
}
