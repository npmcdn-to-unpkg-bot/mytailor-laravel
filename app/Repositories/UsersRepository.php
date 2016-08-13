<?php


namespace MyTailor\Repositories;
use MyTailor\User;

class UsersRepository
{

    public function findByEmailOrCreate($userData)
    {

        //find if theres a user and return

        $user = User::where('email', $userData->email)->first();

        if(!$user){

            $user = User::create(['email' => $userData->email]);
            $profile = new Profile(
                [
                    'username' => $userData->nickname,
                    'avatar' => $userData->avatar
            ]);
            $user->profile()->save($profile);
        }

    }
}