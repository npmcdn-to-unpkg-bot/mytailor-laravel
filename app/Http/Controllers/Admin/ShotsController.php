<?php

namespace MyTailor\Http\Controllers\Admin;

use MyTailor\Shot;
use Illuminate\Http\Request;
use MyTailor\Http\Requests;

class ShotsController extends Controller    {

    protected $shots;

    public function __construct(Shot $shots)   {
        $this->shots = $shots;
        parent::__construct();
    }

    public function index(){
        $shots = $this->shots->all();

        return view('admin.shots.index', compact('shots'));
    }
}
