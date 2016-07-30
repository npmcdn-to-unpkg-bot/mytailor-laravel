<?php

namespace MyTailor\Http\Controllers\Admin;

use Illuminate\Http\Request;
use MyTailor\Http\Requests;
use MyTailor\Tag;

class TagsController extends Controller
{
    public function index(Request $request){

        if ($request->ajax() || $request->wantsJson()) {

            $tags = Tag::all('tag_name', 'id');

            return $tags;
        }

    }
}
