<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 5/14/2016
 * Time: 12:16 PM
 */

namespace MyTailor\View\Composers;

use Illuminate\View\View;

class AddAdminUser  {

    public function compose(view $view) {
        $view->with('admin', auth()->user());
    }

}