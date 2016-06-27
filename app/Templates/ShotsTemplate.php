<?php


namespace MyTailor\Templates;
use Illuminate\Http\Request;
use Illuminate\View\View;
use MyTailor\Shot;
use Carbon\Carbon;
use MyTailor\Repositories\ShotsRepositoryInterface;

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
}