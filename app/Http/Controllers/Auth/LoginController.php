<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Socialite;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use App\Role;

class LoginController extends Controller
{
    public function redirect($provider)
    {
        return Socialite::driver($provider)->stateless()->redirect();

        //return response()->json(compact('token'));
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
