<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete(); 

        $adminRole           = Role::whereName('admin')->first();
        $userRole            = Role::whereName('user')->first();

        $user = User::create(array(
            'name'      =>  'John Admin',
            'email'          =>  'test1@yahoo.com',
            'password'       =>  Hash::make('password')
        ));

        $user->assignRole($adminRole);

        $user = User::create(array(
            'name'      =>  'John User',
            'email'          =>  'test3@yahoo.com',
            'password'       =>  Hash::make('password')
        ));

        $user->assignRole($userRole);
    }
}
