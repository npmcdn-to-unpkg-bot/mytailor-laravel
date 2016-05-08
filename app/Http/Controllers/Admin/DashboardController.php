<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 5/8/2016
 * Time: 6:04 PM
 */

namespace App\Http\Controllers\Admin;


class DashboardController extends Controller {

    public function index(){
        return view('admin.dashboard');
    }

}