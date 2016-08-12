<?php

namespace MyTailor\Http\Controllers\Frontend;

use Illuminate\Http\Request;

use MyTailor\Http\Requests;
use MyTailor\Http\Controllers\Controller;
class RegistrationController extends Controller
{
    protected $socialite;
    public function __construct(\Socialite $socialite)
    {
        $this->socialite = $socialite;
        parent::construct();
    }


    public function getSocialAuth($provider = null)
    {
        if (!config("services.$provider")) abort('404'); //just to handle providers that doesn't exist

        return $this->socialite->with($provider)->redirect();
    }


    public function getSocialAuthCallback($provider = null)
    {
        if ($user = $this->socialite->with($provider)->user()) {
            dd($user);
        } else {
            return 'something went wrong';
        }
    }
}
