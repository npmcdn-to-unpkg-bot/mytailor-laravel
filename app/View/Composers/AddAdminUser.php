<?php

namespace MyTailor\View\Composers;

use Illuminate\View\View;

class AddAdminUser  {

    public function compose(view $view) {
        $view->with('admin', auth()->user());
    }

}