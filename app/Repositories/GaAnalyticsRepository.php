<?php


namespace MyTailor\Repositories;


use Spatie\Analytics\Analytics;

class GaAnalyticsRepository implements AnalyticsRepositoryInterface
{

    /**
     * @var Analytics
     */
    private $analytics;

    public function __construct(Analytics $analytics)
    {
        $this->analytics = $analytics;
    }


    /**
     * insights about users.
     *
     * @param $period
     * @return array|null. actually returns count
     */
    public function users($period)
    {
        $metrics = 'ga:users';
        $data = $this->analytics->performQuery($period, $metrics);

        return $data;
    }

    /**
     * insights about new users
     * @param $period
     * @return array|null. also returns count
     */
    public function newUsers($period)
    {
        $metrics = 'ga:newUsers';
        $data = $this->analytics->performQuery($period, $metrics);

        return $data;
    }

    public function pageViews($period)
    {

        $data = $this->analytics->fetchVisitorsAndPageViews($period);

        return $data;
    }
}