<?php

namespace MyTailor;

use Illuminate\Database\Eloquent\Model;

class Shot extends Model {

    protected $fillable = ['title', 'category', 'featured', 'published', 'views', 'source_url', 'description',
                            'published_by', 'published_as'
                            ];


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
    public function publisher() {

        return $this->belongsTo(User::class, 'published_by')
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

}
