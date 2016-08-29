<?php


namespace MyTailor\Templates;

use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
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
        SEOMeta::setTitle('MyTailor | African Fashion Designers.');
        SEOMeta::setDescription('Check out top African designers and their inspiring attires, prints, fabrics, shoes and more. Find out what to wear.');
        SEOMeta::setCanonical('https://mytailorafrica.com/home');

        OpenGraph::setDescription('Check out top African designers and their inspiring attires, prints, fabrics, shoes and more. Find out what to wear.');
        OpenGraph::setTitle('MyTailor | African Fashion Designers.');
        OpenGraph::setUrl('http://mytailorafrica.com/home');
        OpenGraph::addProperty('type', 'business.fashion');

        Twitter::setTitle('Home');
        Twitter::setSite('@MyTailor_Africa');
    }
}