<?php

namespace MyTailor\Http\Controllers\Admin;

use MyTailor\Shot;
use Illuminate\Http\Request;
use MyTailor\Http\Requests;
use MyTailor\Modules\Shots\UploadServer;

class ShotsController extends Controller    {

    protected $shots;

    /**
     * ShotsController constructor.
     * @param Shot $shots
     */
    public function __construct(Shot $shots) {
        $this->shots = $shots;
        parent::__construct();
    }

    /**
     *  show me a list of shots
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index() {

        $shots = $this->shots
                        ->orderBy('shots.created_at', 'desc')->paginate(15);
        return view('admin.shots.index', compact('shots'));
}

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create() {
        return view('admin.shots.upload');
    }

    /**
     *
     */
    public function store() {

        $name = (new UploadServer)->get_name();

        /**
         * Store it in the model now
         */
        $shot = new Shot();
        $shot->file_name = $name;
        $shot->published_by = \Auth::user()->id;
        $shot->published_as = 1;
        $shot->save();

    }

    /**
     * @param $id
     * @return mixed
     */
    public function show($id) {
         $shot = Shot::find($id);

//       $tags = [];
//        foreach($shot->tags as $tag){
//            $tags [] = $tag->tag_name;
//        }
//
//        unset($shot->tags);
//        $shot->setAttribute('tags', $tags);

        return $shot;

    }

    /**
     * Update a shot.
     * @param Requests\UpdateShotRequest $request
     * @param $id
     * @return string
     */
    public function update(Requests\UpdateShotRequest $request, $id) {

        $shot = $this->shots->findOrFail($id);

        $shot->fill($request->only('title', 'category', 'featured', 'published', 'views', 'source_url', 'description'))->save();
       return 'Shot was successfully updated !';

    }

    /**
     * @return string
     */
    public function destroy($id){

        $file = new UploadServer();
        $file->delete(false, $id);

        $this->shots->where('file_name', '=', $id)->delete();

        
    }
}
