<?php

namespace MyTailor;

use Illuminate\Database\Eloquent\Model;

class Shot extends Model {

    protected $fillable = ['title', 'category', 'featured', 'published', 'views', 'source_url', 'description',
                            'published_by', 'published_as'
    ];

    protected $appends = array('alt');


    /**
     * @return mixed
     */
    public function getAltAttribute()
    {
        return $this->displayAlt();
    }

    /**
     * @return mixed
     */
    public function getDescriptionAttribute($desc)
    {
        if(empty($desc)){

            return 'Latest African fashion, Ankara, kitenge, African women dresses, African prints, African men\'s fashion, Nigerian style, Ghanaian fashion';
        }

        return $desc;
    }

    /**
     * Gets published_At attribute as a boolean.
     *
     * @param $value
     * @return bool
     */
    public  function getPublishedAttribute($value) {

                return (boolean) $value;
        }

    /**
     * Gets featured attribute to a boolean.
     *
     * @param $value
     * @return bool
     */
    public  function getFeaturedAttribute($value) {

                return (boolean) $value;
        }

    /**
     * if there is a where_clause we send it through.
     *
     *
     * @param $query
     * @param $cat
     * @return mixed
     */
    public function scopeCategory($query, $cat) {
            if ($cat) {

                return $query->whereCategory($cat);

            }
            return $query;
        }

    /**
     * A shot is owned by a publisher.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function publishable() {

        return $this->morphTo()
                    ->select(['id','profile_id']);
    }

    /**
     * A shot can have many Tags.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags() {

        return $this->belongsToMany('MyTailor\Tag');
     }

    private function displayAlt()
    {
        $title = $this->title;
        $desc = $this->desc;

        if(!empty($title)){
            $alt = substr($title, 0, 30);
        }else{
            $alt = substr($desc, 0, 30);
        }
        return $alt;
    }

}
