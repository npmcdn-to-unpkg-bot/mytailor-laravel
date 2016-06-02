<?php
namespace MyTailor\View\Composers;
use Illuminate\View\View;
use MyTailor\Page;

class InjectPages   {

    protected $pages;

    public function __construct(Page $page)  {

        $this->pages = $page;
    }

    public function compose(View $view){

        $pages = $this->pages->all();

        $view->with('pages', $pages);
    }

}