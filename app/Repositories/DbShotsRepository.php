<?php

namespace MyTailor\Repositories;

use MyTailor\Shot;

class DbShotsRepository implements ShotsRepositoryInterface{

    protected $shots;

    /**
     * DbShotsRepository constructor.
     * @param Shot $shots
     */
    public function __construct(Shot $shots){

        $this->shots = $shots;


    }

    /**
     * latest shots from our storage
     * @param $cat
     * @return mixed
     */
    public function latest($cat) {
        return $shots = $this->shots
            ->category($cat)
            ->orderBy('updated_at', 'desc')
            ->orderBy('views', 'desc')
            ->orderBy('id', 'desc')
            ->where('published', '=', 1)
            ->paginate(5);

    }

    /**
     * Shots users view the most/trending.
     *
     * Reddit's Algorithm
     *
     * @param $cat
     * @return mixed
     */
    public function trending($cat){
        return $shots = $this->shots

            ->select(\DB::raw( '((views - 1) / (TIMESTAMPDIFF(HOUR, updated_at, NOW()) + 2)^1.5) as Popularity, shots.*'))
            ->category($cat)
            ->orderBy('Popularity', 'desc')
            ->where('published', '=', 1)
            ->groupBy('id')
            ->paginate(5);
    }
    /**
     * Gets shots that are featured orderd by popularity.
     *
     * @param $cat
     * @return mixed
     */
    public function featured($cat){
        return $shots = $this->shots
            ->category($cat)
            ->orderBy('views', 'desc')
            ->orderBy('updated_at', 'desc')
            ->where('published', '=', 1)
            ->paginate(5);
    }

    /**
     * Find a shot by its file_name.
     *
     * @param $name
     * @return \Illuminate\Database\Eloquent\Model|null|static
     */
    public function findByName($name)
    {
       return Shot::with('publishable', 'tags')->where(

            \DB::raw("left(file_name, length(file_name) - LOCATE('.', Reverse(file_name)))"
            ), '=', $name)
            ->first();
    }

    /**
     * Get Related shots and order by popularity.
     *
     * @param $shot
     * @return mixed
     */
    public function related($shot)
    {
        $tag_ids = $shot->tags()->lists('id');

        return Shot::whereHas('tags', function($q) use ($tag_ids) {
            $q->whereIn('id', $tag_ids);
        })
            ->select(\DB::raw( '((views - 1) / (TIMESTAMPDIFF(HOUR, updated_at, NOW()) + 2)^1.5) as Popularity, shots.*'))
            ->orderBy('Popularity', 'desc')
            ->whereNotIn('id', [$shot->id])
            ->paginate(8);
    }

}