<?php


namespace MyTailor\Templates;

use Illuminate\View\View;
use MyTailor\Shot;
use Carbon\Carbon;

class HomeTemplate extends AbstractTemplate {

    protected $view = 'home';
    /**
     * @var
     */
    private $shots;

    /**
     * HomeTemplate constructor.
     * @param Shot $shots
     */
    public function __construct(Shot $shots) {

        $this->shots = $shots;
    }

    public function prepare(View $view, array $parameters)
    {
        $shots = $this->shots
                        ->where("featured",'=',1)
                        ->orderByRaw("RAND()")
                        ->limit(20)
                        ->get();

        $view->with('shots', $shots);
    }
}