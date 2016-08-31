<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 8/31/2016
 * Time: 12:57 PM
 */

namespace MyTailor\Repositories;


interface AnalyticsRepositoryInterface
{
    public function pageViews($period);

    public function users($period);

    public function newUsers($period);


}