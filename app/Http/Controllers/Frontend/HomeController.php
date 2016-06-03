<?php

namespace MyTailor\Http\Controllers\frontend;
use MyTailor\Shot;
use Illuminate\Routing\Controller as BaseController;


class HomeController extends BaseController {

    protected $shots;
    public function __construct(Shot $shots) {
        $this->shots = $shots;
    }
    public function index(){
        $shots = $this->shots->all();
        return view('frontend.index', compact('shots'));
    }

}

