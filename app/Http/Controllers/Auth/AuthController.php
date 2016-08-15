<?php

namespace MyTailor\Http\Controllers\Auth;

use Illuminate\Http\Request;
use MyTailor\Modules\Users\AuthenticateUser;
use MyTailor\User;
use Validator;
use MyTailor\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->redirectAfterLogout = route('auth.login');
        $this->redirectTo = route('admin.dashboard');

        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }


    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

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

        return $authenticateUser->execute($provider, $request->has('code'), $this);
    }

    public function userHasLoggedIn($user){

        return redirect('/');
    }
}
