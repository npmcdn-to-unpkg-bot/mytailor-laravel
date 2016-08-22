<?php

namespace MyTailor\Modules\Users\Registration\Events;

use MyTailor\User;
class UserRegistered
{
    public $user;

    function __construct(User $user)
    {
        $this->user = $user;
    }
}