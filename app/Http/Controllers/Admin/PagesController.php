<?php

namespace MyTailor\Http\Controllers\admin;

use Illuminate\Http\Request;

use MyTailor\Http\Requests;
use MyTailor\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function index() {
        return view('admin.pages.index');
    }
}
