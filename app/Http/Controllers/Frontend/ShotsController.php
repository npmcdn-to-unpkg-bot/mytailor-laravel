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

       $shot = Shot::with('publishable', 'tags')->where(

                           \DB::raw("left(file_name, length(file_name) - LOCATE('.', Reverse(file_name)))"
                                   ), '=', $id)
                                   ->first();
        if($shot) {

            $shot->publishable->profile = Profile::find([$shot->publishable->profile_id])->first();
            $shot->date = $shot->created_at->diffForHumans();

            if ($request->ajax() || $request->wantsJson()) {

                return $shot->toArray();
            }

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

}
