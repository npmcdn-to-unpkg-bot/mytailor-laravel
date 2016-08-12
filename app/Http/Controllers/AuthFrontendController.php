<?php

namespace MyTailor\Http\Controllers;

use Illuminate\Http\Request;
use MyTailor\Http\Requests;

class AuthFrontendController extends Controller
{

    /**
     * Redirect user to login to thirdparty.
     *
     * @param null $provider
     * @return mixed
     */
    public function getSocialAuth($provider = null)
    {
        if (!config("services.$provider")) abort('404'); //just to handle providers that doesn't exist

        return \Socialite::with($provider)->redirect();
    }


    /**
     * Okay handle logged in user
     * @param null $provider
     * @return string
     */
    public function getSocialAuthCallback($provider = null)
    {
        if ($user = \Socialite::with($provider)->user()) {
            dd($user);
        } else {
            return 'something went wrong';
        }
    }
}
