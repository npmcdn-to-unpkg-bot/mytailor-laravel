<?php

namespace MyTailor\Http\Controllers;

use MyTailor\Page;
use Illuminate\Http\Request;
use MyTailor\Http\Requests;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller {

    /**
     * @param Page $page
     * @param array $parameters
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Page $page, array $parameters){

        $this->prepareTemplate($page, $parameters);

        view()->share('user', Auth::user());
        return view('frontend.page', compact('page'));
    }

    /**
     * @param Page $page
     * @param array $parameters
     */
    protected function prepareTemplate(Page $page, array $parameters){

        $templates = config('cms.templates');

        if(! $page->template || ! isset($templates[$page->template])){
            return;
        }

            $template = app($templates[$page->template]);

            $view = sprintf('templates.%s', $template->getView());

        if(! view()->exists($view)){
            return;
        }

        $template->prepare($view = view($view), $parameters);

        $page->view = $view;
    }
}
