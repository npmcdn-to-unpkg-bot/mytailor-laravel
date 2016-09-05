<?php
namespace MyTailor\Repositories;

interface ShotsRepositoryInterface
{
    /**
     * @param $cat
     * @return mixed
     */
    public function latest($cat);

    /**
     * @param $cat
     * @return mixed
     */
    public function trending($cat);

    /**
     * @param $cat
     * @return mixed
     */
    public function featured($cat);

    /**
     * @param $slug
     * @return mixed
     */
    public function explore($slug, $cat);


}