<?php


namespace MyTailor\Templates;
use Illuminate\Http\Request;
use Illuminate\View\View;
use MyTailor\Shot;
use Carbon\Carbon;
use MyTailor\Repositories\ShotsRepositoryInterface;
use SEOMeta;
use OpenGraph;
use Twitter;
class ShotsTemplate extends AbstractTemplate   {


    protected $view = 'shots';
    /**
     * @var
     */
    private $shots;

    /**
     * HTTP request for retrieving user input
     *
     * @var Request
     */
    private $request;

    /**
     * HomeTemplate constructor.
     * @param ShotsRepositoryInterface|Shot $shots
     * @param Request $request
     */
    public function __construct(ShotsRepositoryInterface $shots, Request $request) {

        $this->shots = $shots;
        $this->request = $request;
    }

    public function prepare(View $view, array $parameters)
    {

        $sort = array_key_exists ( 'sort' , $parameters) ? $parameters['sort'] : 'latest';
        $cat = $this->request->get('cat') ? $this->request->get('cat') : '';

        $this->seoMake($cat);


            switch($sort){

                case 'featured':
                    $shots = $this->shots->featured($cat);
                    break;
                case 'trending':
                    $shots = $this->shots->trending($cat);
                    break;
                Default:
                    $shots = $this->shots->latest($cat);

        }

        $view->with('shots', $shots);
    }

    protected function seoMake($cat)
    {
        {
            switch($cat){
                case 'ma':
                    SEOMeta::setDescription('you want males');
                    break;
                case 'fm':
                    SEOMeta::setDescription('you want females');
                    break;
                case 'cu':
                    SEOMeta::setDescription('you want couples');
                    break;
                case 'ki':
                    SEOMeta::setDescription('you want kids');
                    break;
                case 'ac':
                    SEOMeta::setDescription('you want Accessories');
                    break;
                Default:
                    SEOMeta::setDescription('See what\'s trending in African Fashion. From cultural, modern to classic office wears.');
                    OpenGraph::setDescription('See what\'s trending in African Fashion. From cultural, modern to classic office wears.');
            }
        }
        SEOMeta::setTitle('Shots');

        //SEOMeta::setCanonical('https://codecasts.com.br/lesson');

        OpenGraph::setTitle('Shots');
        OpenGraph::setUrl('http://mytailor.me/shots');
        OpenGraph::addProperty('type', 'business.fashion');

        Twitter::setTitle('Home');
        Twitter::setSite('@LuizVinicius73');
    }
}