<?php

namespace MyTailor;

use Illuminate\Database\Eloquent\Model;

class Shot extends Model    {

        /**
         * fields we can use from our table ?
         * @var array
         */
        protected $fillable = ['title', 'category', 'featured', 'published', 'views', 'source_url', 'description'];

        /**
         * @param $value
         * Convert published attribute to a boolean value
         * @return bool
         */
        public  function getPublishedAttribute($value){
                return (boolean) $value;
        }

        /**
         * @param $value
         * Convert featured attribute to a boolean value
         * @return bool
         */
        public  function getFeaturedAttribute($value){
                return (boolean) $value;
        }
}
