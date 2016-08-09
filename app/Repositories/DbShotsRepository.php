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
     * Shots users view the most/trending
     * @param $cat
     * @return mixed
     */
    public function trending($cat){
        return $shots = $this->shots
            ->select(\DB::raw('AVG(DATEDIFF(NOW(), updated_at/views)) as Popularity, shots.*'))
            ->category($cat)
            ->orderBy('Popularity', 'desc')
            ->where('published', '=', 1)
            ->groupBy('id')
            ->paginate(5);
    }

    /**
     * Featured shots on out page
     * @param $cat
     * @return mixed
     */
    public function featured($cat){
        return $shots = $this->shots
            ->category($cat)
            ->orderBy('views', 'desc')
            ->orderBy('id', 'desc')
            ->where('published', '=', 1)
            ->paginate(5);
    }



}