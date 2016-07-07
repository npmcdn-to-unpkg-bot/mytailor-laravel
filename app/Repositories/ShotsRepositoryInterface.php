<?php namespace MyTailor\Repositories;
use MyTailor\Shot;

interface ShotsRepositoryInterface
{
    public function latest($cat);

    public function trending($cat);

    public function featured($cat);


}