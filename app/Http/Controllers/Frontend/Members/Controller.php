<?php

namespace MyTailor\Http\Controllers\Frontend\Members;

use Illuminate\Routing\Controller as BaseController;


abstract class Controller extends BaseController
{
    public function __construct(){
        $this->middleware('members_only');
    }
}
