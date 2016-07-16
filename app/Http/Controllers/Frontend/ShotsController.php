<?php

namespace MyTailor\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use MyTailor\Http\Controllers\Controller;
use MyTailor\Shot;
use MyTailor\Profile;
use MyTailor\Http\Requests;

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

        $shot->publishable->profile = Profile::find([$shot->publishable->profile_id])->first();

        if($request->ajax() || $request->wantsJson()){
            return $shot;
        }

        return view('frontend.shot', compact('shot'));

    }

    /**
     * Increment views for $this shot
     *
     * @param $id
     * @return string
     */
    public function viewed($id)
    {
        $this->shot->where(\DB::raw(
            "left(file_name, length(file_name) - LOCATE('.', Reverse(file_name)))"),
            '=',
            $id)->increment('views');

        return 'Done...';
        // I just viewed a shot can you tell the DB
    }
}
