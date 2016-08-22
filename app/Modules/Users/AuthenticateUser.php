<?php


namespace MyTailor\Modules\Users;

use Laravel\Socialite\Contracts\Factory as Socialite;
use MyTailor\Repositories\UsersRepositoryInterface;
use Illuminate\Contracts\Auth\Guard as Authenticator;
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
    private $auth;

    public function __construct(UsersRepositoryInterface $users, Socialite $socialite, Authenticator $authenticator )
    {

        $this->users = $users;
        $this->socialite = $socialite;
        $this->auth = $authenticator;
    }

    /**
     * Authenticate a user or redirect them to social plathform.
     *
     * @param $provider
     * @param $hasCode
     * @param $listener
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function execute($provider, $hasCode, $listener)
    {
        if(! $hasCode) return $this->getAuthorizationFirst($provider);

            $user = $this->users->findByEmailOrCreate($this->getProvidedUser($provider));
            $this->auth->login($user);

            return $listener->userHasLoggedIn($user);
        
    }

    /**
     * Redirect to social to get authorization.
     *
     * @param $provider
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    private function getAuthorizationFirst($provider)
    {
        return $this->socialite->driver($provider)->redirect();
    }

    /**
     * Get data about a user from social plathform.
     *
     * @param $provider
     * @return \Laravel\Socialite\Contracts\User
     */
    private function getProvidedUser($provider)
    {
        return $this->socialite->driver($provider)->user();
    }
}