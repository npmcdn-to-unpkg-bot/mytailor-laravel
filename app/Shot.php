<?php

namespace MyTailor;

use Illuminate\Database\Eloquent\Model;

class Shot extends Model {

    protected $fillable = ['title', 'category', 'featured', 'published', 'views', 'source_url', 'description',
                            'published_by', 'published_at'
    ];

    protected $dates = ['published_at'];

    protected $appends = array('alt');


    /**
     * Return null if published at is empty.
     *
     * @param $value
     */
    public function setPublishedAtAttribute($value){

        $this->attributes['published_at'] = $value ?: null;
    }


    /**
     * @param $value
     * @return string
     */
    public function getCategoryAttribute($value)
    {

        switch ($value) {
            case 'fm':
                $value = 'women';
                break;
            case 'ma':
                $value = 'men';
                break;
            case 'ki':
                $value = 'kids';
                break;
            case'cu':
                $value = 'couples';
                break;

            default:
                $value = 'not set';

        }
        return $value;
    }

    /**
     * @param $value
     * @return string
     */
    public function setCategoryAttribute($value)
    {

        switch ($value) {
            case 'women':
                $value = 'fm';
                break;
            case 'men':
                $value = 'ma';
                break;
            case 'kids':
                $value = 'ki';
                break;
            case'couples':
                $value = 'cu';
                break;

            default:
                $value = null;

        }
        $this->attributes['category'] =  $value;
    }
    /**
     * @return mixed
     */
    public function getAltAttribute(){

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
     * Get the tags associated with the given Shot.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags() {

        return $this->belongsToMany(Tag::class);
     }

    /**
     * Get a list of tag ids associated with the current shot.
     *
     * @return mixed
     */
    public function getTagListAttribute()
    {
        return $this->tags->lists('id');
    }

    private function displayAlt()
    {
        $title = $this->title;
        $desc = $this->desc;

        !empty($title) ?
            $alt = substr($title, 0, 30) : $alt = substr($desc, 0, 30);

        return $alt;
    }

    public function scopeSearch($query, $search)
    {
        return $query->where('title', 'LIKE', "%$search%");
    }

}
