<?php

namespace MyTailor;

use Illuminate\Database\Eloquent\Model;

class Shot extends Model    {
        protected $fillable = ['title', 'category', 'featured', 'published', 'views', 'source_url', 'description'];

        public function tags()
        {
            return $this->belongsToMany('MyTailor\Tag');
        }

        public  function getPublishedAttribute($value){
                return (boolean) $value;
        }

        public  function getFeaturedAttribute($value){
                return (boolean) $value;
        }

        public function scopeCategory($query, $cat)
        {
                if ($cat) {
                        return $query->whereCategory($cat);
                }
                return $query;
        }

}
