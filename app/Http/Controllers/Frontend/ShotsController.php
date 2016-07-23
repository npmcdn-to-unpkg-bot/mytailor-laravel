<?php

namespace MyTailor\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use MyTailor\Http\Controllers\Controller;
use MyTailor\Shot;
use MyTailor\Profile;
use MyTailor\Http\Requests;
use Carbon\Carbon;
use SEOMeta;
use OpenGraph;
use Twitter;

class ShotsController extends Controller
{
    /**
     * @var Shot
     */
    private $shot;

    /**
     * shotsController constructor.
     *
     * @param Shot $shot
     */
    public function __construct(Shot $shot){

        $this->shot = $shot;
    }

    /**
     * Gets info about a shot and response in Json
     *
     * @param $id
     * @param Request $request
     * @return mixed
     */
    public function show($id, Request $request )
    {


       $shot = Shot::with('publishable')->where(

                           \DB::raw("left(file_name, length(file_name) - LOCATE('.', Reverse(file_name)))"
                                   ), '=', $id)
                                   ->first();
        if($shot) {

            $shot->publishable->profile = Profile::find([$shot->publishable->profile_id])->first();
            $this->seoMake($shot);

            if ($request->ajax() || $request->wantsJson()) {
                return $shot;
            }
            return view('frontend.shot', compact('shot'));

        }
        return response()->view('errors.frontend.shot404', [], 404);

    }

    /**
     * Increment views for $this shot
     *
     * @param $id
     * @return string
     */
    public function viewed($id)
    {
        $shot = $this->shot->where(\DB::raw(
            "left(file_name, length(file_name) - LOCATE('.', Reverse(file_name)))"),
            '=',
            $id)->first();

        $shot->views++;
        $shot->timestamps = false;
        $shot->save();
        $shot->timestamps = true;

        return 'Done...';
    }

    private function seoMake($shot)
    {
        SEOMeta::setTitle('MyTailor | ' . substr($shot->title, 0, 30));
        SEOMeta::setDescription(substr($shot->description, 0, 60));
        SEOMeta::addMeta('product:published_time', Carbon::parse($shot->updated_at)->subMinutes(2)->diffForHumans(), 'property');
        SEOMeta::addMeta('product:section', $shot->category, 'property');
        //SEOMeta::addKeyword(['key1', 'key2', 'key3']);

        OpenGraph::setDescription($shot->description);
        OpenGraph::setTitle($shot->title);
        OpenGraph::setUrl('http://mytailor.me/shot/' . pathinfo($shot->file_name, PATHINFO_FILENAME));
        OpenGraph::addProperty('type', 'product.item');
        //OpenGraph::addProperty('locale', 'pt-br');
        //OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);
    }
}
