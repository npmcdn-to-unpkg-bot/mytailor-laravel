<?php

namespace MyTailor\Http\Controllers\Admin;

use Illuminate\Http\Request;
use MyTailor\Http\Requests;
use MyTailor\User;

class UsersController extends Controller  {

    protected $users;

    public function __construct(User $users) {
        $this->users = $users;

        parent::__construct();
    }

    public function index(){
        $users = $this->users->all();

        return view('admin.users.index', compact('users'));

    }
}
