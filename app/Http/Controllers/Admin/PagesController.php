<?php

namespace MyTailor\Http\Controllers\admin;
use MyTailor\page;
use Illuminate\Http\Request;

use MyTailor\Http\Requests;

class PagesController extends Controller   {

    /*
     * @param page object
     */
    protected $pages;

    /*
     * @return \Illuminate\Http\Response
     */
    public function __construct(Page $pages)  {
        $this->pages = $pages;
        parent::__construct();
    }

    /**
     * Shows the main view with all pages
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function index() {
        $pages = $this->pages->all();
        $templates = $this->getPageTemplate();
        return view('admin.pages.index', compact('pages', 'templates'));
    }

    /**
     * Store a new page in our database
     *
     * @param Requests\StorePageRequest $request
     * @return string
     */
    public function store(Requests\StorePageRequest $request){
            $this->pages->create($request->only('title', 'uri', 'name', 'content', 'template'));
            return('Page was created successfully');
    }

    protected function getPageTemplate(){

        $templates = config('cms.templates');

        return['' => ''] + array_combine(array_keys($templates), array_keys($templates));

    }
}
