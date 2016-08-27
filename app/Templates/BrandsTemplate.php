<?php namespace MyTailor\Templates;

use Illuminate\View\View;
use SEOMeta;
use OpenGraph;
use Twitter;
class BrandsTemplate extends AbstractTemplate{

    /**
     * @var string
     */
    protected $view = 'brands';

    public function __construct() {


    }

    public function prepare(View $view, array $parameters)
    {
        $this->seoMake();

//        $shots = $this->shots
//            ->where("featured",'=',1)
//            ->orderByRaw("RAND()")
//            ->limit(20)
//            ->get();
//
//        $view->with('shots', $shots);
    }

    protected function seoMake()
    {
        SEOMeta::setTitle('Brands');
        //SEOMeta::setDescription('This is my page description');
        //SEOMeta::setCanonical('https://codecasts.com.br/lesson');

        OpenGraph::setDescription('This is my page description');
        OpenGraph::setTitle('Brands');
        OpenGraph::setUrl('http://mytailor.me');
        OpenGraph::addProperty('type', 'business.fashion');

        Twitter::setTitle('Home');
        Twitter::setSite('@LuizVinicius73');
    }
}