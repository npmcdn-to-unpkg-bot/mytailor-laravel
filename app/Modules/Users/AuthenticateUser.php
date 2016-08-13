<?php


namespace MyTailor\Modules\Users;

use Laravel\Socialite\Contracts\Factory as Socialite;
use Illuminate\Contracts\Auth\Authenticator;
use MyTailor\Repositories\UsersRepository;

class AuthenticateUser{

    /**
     * @var UserRepository
     */
    private $users;
    /**
     * @var Socialite
     */
    private $socialite;
    /**
     * @var Authenticator
     */
    private $authenticator;

    public function __construct(UsersRepository $users, Socialite $socialite, Authenticator $authenticator)
    {

        $this->users = $users;
        $this->socialite = $socialite;
        $this->authenticator = $authenticator;
    }

    public function execute($provider, $hasCode)
    {
        if(! $hasCode) return $this->getAuthorizationFirst($provider);

        $user = $this->socialite->driver($provider)->user();

        dd($user);
        
    }

    private function getAuthorizationFirst($provider)
    {
        return $this->socialite->driver($provider)->redirect();
    }
}