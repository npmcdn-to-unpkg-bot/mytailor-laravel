<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 5/8/2016
 * Time: 3:50 PM
 */
namespace MyTailor\Http\Controllers\frontend;

use Illuminate\Routing\Controller as BaseController;


class HomeController extends BaseController {

    public function index(){
        return view('index');
    }

}

