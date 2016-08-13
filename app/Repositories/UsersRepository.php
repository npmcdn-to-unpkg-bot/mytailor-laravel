<?php


namespace MyTailor\Repositories;
use MyTailor\User;

class UsersRepository
{

    public function findByEmailOrCreate($userData)
    {
        return User::firstOrCreate([
           'username' => $userData->nickname,
            'email' => $userData->email
        ])->with('profile', [
            'avatar' => $userData->avatar
        ]);
    }
}