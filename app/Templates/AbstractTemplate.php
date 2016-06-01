<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 5/31/2016
 * Time: 1:52 PM
 */

namespace MyTailor\Templates;

use Illuminate\View\View;
abstract class AbstractTemplate
{

    protected $view;

    abstract public function prepare(View $view, array $parameters);

    public function getView()
    {
        return $this->view;
    }
}