<?php


namespace MyTailor\Templates;

use Illuminate\View\View;
use MyTailor\Shot;
use Carbon\Carbon;
use SEOMeta;
use OpenGraph;
use Twitter;

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

    /**
     * @param View $view
     * @param array $parameters
     */
    public function prepare(View $view, array $parameters)
    {
        $this->seoMake();

        $shots = $this->shots
                        ->where("featured",'=',1)
                        ->orderByRaw("RAND()")
                        ->limit(20)
                        ->get();

        $view->with('shots', $shots);
    }

    protected function seoMake()
    {
        SEOMeta::setTitle('MyTailor');
        //SEOMeta::setDescription('This is my page description');
        //SEOMeta::setCanonical('https://codecasts.com.br/lesson');

        OpenGraph::setDescription('This is my page description');
        OpenGraph::setTitle('Home');
        OpenGraph::setUrl('http://mytailor.me');
        OpenGraph::addProperty('type', 'business.fashion');

        Twitter::setTitle('Home');
        Twitter::setSite('@LuizVinicius73');
    }
}