<?php


namespace MyTailor\Modules\Users\Registration;

use Laracasts\Commander\CommandHandler;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Laracasts\Commander\Events\DispatchableTrait;
use MyTailor\Repositories\UsersRepositoryInterface;

class RegisterUserCommandHandler implements CommandHandler
{
    use AuthenticatesAndRegistersUsers, DispatchableTrait;

    /**
     * @var UsersRepositoryInterface
     */
    private $users;

    /**
     * RegisterUserCommandHandler constructor.
     * @param UsersRepositoryInterface $users
     */
    public function __construct(UsersRepositoryInterface $users)
    {

        $this->users = $users;
    }
    /**
     * Handles registering a new user.
     *
     * @param $command
     * @return mixed
     */
    public function handle($command) {

        $user = $this->create($command);
        Auth::guard($this->getGuard())->login($user);

        $this->dispatchEventsFor($user);

    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param $data
     * @return User
     * @internal param array $data
     */
    protected function create($data)
    {
        return $this->users->create($data);

    }


}