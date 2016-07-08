<?php

namespace MyTailor\Listeners;

use Carbon\Carbon;

class UpdateLastLoginOnLogin
{
    public function handle($user){

        $user->last_login_at = Carbon::now();

        $user->save();
    }
}