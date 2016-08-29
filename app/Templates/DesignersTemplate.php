<?php
namespace MyTailor\Templates;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Carbon\Carbon;
use MyTailor\Repositories\DesignersRepositoryInterface;
use SEOMeta;
use OpenGraph;
use Twitter;
use marijnvdwerf\palette\Palette;
use Intervention\Image\ImageManager;


class DesignersTemplate extends AbstractTemplate{

    /**
     * @var string
     */
    protected $view = 'designers';

    private $designers;

    /**
     * HTTP request for retrieving user input
     *
     * @var Request
     */
    private $request;


    /**
     * DesignersTemplate constructor.
     *
     * @param DesignersRepositoryInterface $designers
     * @param Request $request
     */
    public function __construct(DesignersRepositoryInterface $designers, Request $request) {

        $this->designers = $designers;
        $this->request = $request;
    }

    public function prepare(View $view, array $parameters)
    {
        $this->seoMake();

        $designers = $this->designers->favorites('fav');

        $view->with('designers', $designers);
    }

    protected function seoMake()
    {
        SEOMeta::setTitle('Designers | MyTailor African Fashion Designers');
        SEOMeta::setDescription('This is my page description');
        SEOMeta::setCanonical('https://codecasts.com.br/lesson');

        OpenGraph::setDescription('This is my page description');
        OpenGraph::setTitle('Designers');
        OpenGraph::setUrl('http://mytailorafrica.com/designers');
        OpenGraph::addProperty('type', 'business.fashion');

        Twitter::setTitle('Designers');
        Twitter::setSite('@LuizVinicius73');
    }

}