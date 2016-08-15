<?php

namespace MyTailor\Http\Controllers\Admin;

use Illuminate\Routing\Controller as BaseController;


class Controller extends BaseController
{
    public function __construct(){

        $this->middleware('admin');
    }
}
