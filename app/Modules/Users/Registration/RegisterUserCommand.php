<?php


namespace MyTailor\Modules\Users\Registration;


class RegisterUserCommand
{
    public $username;
    public $email;
    public $password;
    public $avatar;

    /**
     * RegisterUserCommand constructor.
     *
     * @param $username
     * @param $email
     * @param $password
     * @param $avatar
     */
    public function __construct($username, $email, $password, $avatar) {

        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->avatar = $avatar;
    }
}