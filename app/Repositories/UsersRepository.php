<?php


namespace MyTailor\Repositories;
use MyTailor\User;
use MyTailor\Profile;
class UsersRepository
{

    public function findByEmailOrCreate($userData)
    {

        //find if theres a user and return

        $user = User::where('email', $userData->email)->first();

        if(! $user){

            $profile = new Profile();
            $profile->avatar = $userData->avatar;
            $profile->username = $userData->avatar;
            $profile->save();

            $user = new User();
            $user->email = $userData->email;
            $user->profile_id = $profile->id;
            $user->save();
            $user->assignRole(4);

        }

        return $user;

    }
}