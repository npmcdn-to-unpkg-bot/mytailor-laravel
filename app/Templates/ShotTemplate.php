<?php namespace MyTailor\Templates;

use Illuminate\View\View;
use MyTailor\Repositories\ShotsRepositoryInterface;
use SEOMeta;
use OpenGraph;
use Twitter;
use MyTailor\Profile;
class ShotTemplate extends AbstractTemplate{

    /**
     * @var string
     */
    protected $view = 'shot';
    /**
     * @var ShotsRepositoryInterface
     */
    private $shots;

    /**
     * ShotTemplate constructor.
     * @param ShotsRepositoryInterface $shots
     */
    public function __construct(ShotsRepositoryInterface $shots) {

        $this->shots = $shots;

    }

    /**
     * Here us where it all happens
     *
     * @param View $view
     * @param array $parameters
     * @return \Illuminate\Http\Response
     */
    public function prepare(View $view, array $parameters)
    {
        $id = array_key_exists ( 'id' , $parameters) ? $parameters['id'] : null;
        $shot = $this->shots->findByName($id);

        if($shot) {

            $this->getProfile($shot);
            $this->seoMake($shot);

            $shot->related = $this->shots->related($shot);

            $view->with('shot', $shot);

        }
        return response()->view('errors.frontend.shot404', [], 404);
    }

    private function seoMake($shot)
    {
        SEOMeta::setTitle('MyTailor | ' . substr($shot->title, 0, 30));
        SEOMeta::setDescription(substr($shot->description, 0, 60));
        SEOMeta::addMeta('product:published_time', $shot->date, 'property');
        SEOMeta::addMeta('product:section', $shot->category, 'property');
        SEOMeta::addKeyword($shot->tags->lists('tag_name'));

        OpenGraph::setDescription($shot->description);
        OpenGraph::setTitle($shot->title);
        OpenGraph::setUrl('http://mytailor.me/shot/' . pathinfo($shot->file_name, PATHINFO_FILENAME));
        OpenGraph::addProperty('type', 'product.item');
        //OpenGraph::addProperty('locale', 'pt-br');
        //OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);
        //Carbon::parse($shot->updated_at)->subMinutes(2)->diffForHumans()
    }

    /**
     * @param $shot
     */
    protected function getProfile($shot)
    {
        $shot->publishable->profile = Profile::find([$shot->publishable->profile_id])->first();
        $shot->date = $shot->created_at->diffForHumans();
    }
}