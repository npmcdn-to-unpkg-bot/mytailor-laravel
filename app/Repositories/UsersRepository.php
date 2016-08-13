<?php


namespace MyTailor\Repositories;
use MyTailor\User;

class UsersRepository
{

    public function findByEmailOrCreate($userData)
    {
        return User::firstOrCreate([
            'email' => $userData->email
        ])->with('profile', [
            'username' => $userData->nickname,
            'avatar' => $userData->avatar
        ]);
    }
}