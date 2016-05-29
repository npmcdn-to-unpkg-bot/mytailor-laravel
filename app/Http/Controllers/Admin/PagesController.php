<?php

namespace MyTailor\Http\Controllers\admin;
use MyTailor\page;
use Illuminate\Http\Request;

use MyTailor\Http\Requests;

class PagesController extends Controller   {

    public function __construct(Page $pages)  {

        parent::__construct();
    }

    public function index() {
        return view('admin.pages.index');
    }

}
