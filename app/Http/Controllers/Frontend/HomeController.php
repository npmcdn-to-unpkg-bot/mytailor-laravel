<?php

namespace MyTailor\Http\Controllers\frontend;
use MyTailor\Shot;
use Illuminate\Routing\Controller as BaseController;


class HomeController extends BaseController {

    protected $shots;

    /**
     * HomeController constructor.
     * This will inject an instance of shot Model
     * @param Shot $shots
     */
    public function __construct(Shot $shots) {
        $this->shots = $shots;
    }

    /*
     * Take me to the HomePage
     * @return Var $shots and $View
     */
    public function index(){

        if(Auth::check()){
          echo 'welcome' .  Auth::user()->username; die();
        }

        $shots = $this->shots->all();
        return view('frontend.index', compact('shots'));
    }

}

