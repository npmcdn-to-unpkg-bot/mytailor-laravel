<?php
namespace MyTailor\Templates;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Carbon\Carbon;
use MyTailor\Designer;
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
     * @param Designer $designers
     * @param Request $request
     */
    public function __construct(Designer $designers, Request $request) {

        $this->designers = $designers;
        $this->request = $request;
    }

    public function prepare(View $view, array $parameters)
    {
        $this->seoMake();

//        $manager = new ImageManager(array('driver' => 'gd'));
//        $image = $manager->make(public_path().'/uploads/mt_e2237df2e55364d07d4547d7e7d51217.jpg');
//
//        $palette = Palette::generate($image);
//        $bg = $palette->getLightVibrantSwatch()->getColor();


        $designers = $this->designers->with('user', 'profile')
            ->orderByRaw("id")
            ->limit(20)
            ->get();

        $view->with('designers', $designers);
    }

    protected function seoMake()
    {
        SEOMeta::setTitle('Designers | MyTailor African Fashion Designers');
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