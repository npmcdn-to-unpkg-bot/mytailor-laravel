<?php

namespace MyTailor;

use Illuminate\Database\Eloquent\Model;
use Laracasts\Presenter\PresentableTrait;
class page extends Model {
    use PresentableTrait;

    /**
     * Page URI for pages view
     * @var string
     */
    protected $presenter = 'MyTailor\Presenters\PagesPresenter';


    protected $fillable = ['title', 'name', 'uri', 'content', 'template'];
}
