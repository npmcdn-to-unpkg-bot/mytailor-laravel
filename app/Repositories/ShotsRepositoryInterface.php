<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 6/26/2016
 * Time: 4:59 AM
 */

namespace MyTailor\Repositories;
use MyTailor\Shot;

interface ShotsRepositoryInterface
{
    public function latest($cat);

    public function trending($cat);

    public function featured($cat);


}