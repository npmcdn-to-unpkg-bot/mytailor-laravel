<?php

namespace MyTailor\Http\Controllers\Admin;

use MyTailor\Shot;
use Illuminate\Http\Request;
use MyTailor\Http\Requests;

class ShotsController extends Controller    {

    protected $shots;

    public function __construct(Shot $shots) {
        $this->shots = $shots;
        parent::__construct();
    }

    public function index(Request $request) {
        if ($request->ajax()){
            $shots = $this->shots->paginate(15);
            return $shots;
        }
        $shots = $this->shots->paginate(15);
        return view('admin.shots.index', compact('shots'));
}

    public function upload() {
        return view('admin.shots.upload');
    }

    public static function store($data) {

        foreach($data as $item){
            $shot = new Shot();
            $shot->file_name       = $item["name"];
            $shot->file_type      = $item["type"];
            $shot->save();
        }

    }

    public function show($id) {
        return Shot::find($id);

    }

    public function update(Requests\UpdateShotRequest $request, $id) {

        $shot = $this->shots->findOrFail($id);

        $shot->fill($request->only('title', 'category', 'featured', 'published', 'views', 'source_url', 'description'))->save();
       return 'Shot was updated !';

    }
}
