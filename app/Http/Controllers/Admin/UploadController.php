<?php

namespace MyTailor\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use MyTailor\Http\Requests;
use MyTailor\Http\Controllers\Controller;
use MyTailor\Http\Controllers\Admin\ShotsController;
use MyTailor\Modules\Shots\UploadHandler;

class UploadController extends Controller {

    public function store(){

        error_reporting(E_ALL | E_STRICT);
        $upload_handler = new UploadHandler([
            'script_url' => route('admin.uploader.store')
        ]);


        $data = $upload_handler->data;

        ShotsController::store(compact('data'));
    }

}
