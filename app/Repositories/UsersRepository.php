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

        if(!$user){


            $profile = new Profile(
                [
                    'username' => $userData->nickname,
                    'avatar' => $userData->avatar
            ]);
            $user = User::create(['email' => $userData->email]);
            $user->profile()->save($profile);

            return $user;
        }

    }
}