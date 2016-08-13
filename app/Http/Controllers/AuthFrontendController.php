<?php

namespace MyTailor\Http\Controllers;

use Illuminate\Http\Request;
use MyTailor\Http\Requests;
use MyTailor\Modules\Users\AuthenticateUser;

class AuthFrontendController extends Controller
{

    /**
     * Redirect user to login to thirdparty.
     *
     * @param null $provider
     * @param AuthenticateUser $authenticateUser
     * @param Request $request
     * @return mixed
     */
    public function getSocialAuth($provider = null, AuthenticateUser $authenticateUser, Request $request)
    {
        if (!config("services.$provider")) abort('404');

        return $authenticateUser->execute($provider, $request->has('code'));


    }



    public function store()
    {
        dd('okay i\'ll see');
    }
}
