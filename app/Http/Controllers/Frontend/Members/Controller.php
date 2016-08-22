<?php

namespace MyTailor\Http\Controllers\Frontend\Members;

use Illuminate\Routing\Controller as BaseController;


class Controller extends BaseController
{
    public function __construct(){

        $this->middleware('auth');
    }
}
