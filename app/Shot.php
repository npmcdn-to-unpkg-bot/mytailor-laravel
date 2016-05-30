<?php

namespace MyTailor;

use Illuminate\Database\Eloquent\Model;

class Shot extends Model    {
        protected $fillable = ['title', 'category', 'featured', 'published', 'views', 'source_url', 'description'];

}
