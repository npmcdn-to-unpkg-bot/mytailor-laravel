<?php

namespace MyTailor\Http\Controllers\admin;
use MyTailor\page;
use Illuminate\Http\Request;

use MyTailor\Http\Requests;

class PagesController extends Controller   {

    protected $pages;
    public function __construct(Page $pages)  {
        $this->pages = $pages;
        parent::__construct();
    }

    public function index() {
        $pages = $this->pages->all();
        return view('admin.pages.index', compact('pages'));
    }

}
