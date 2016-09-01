<?php


namespace MyTailor\Repositories;


use Spatie\LaravelAnalytics\LaravelAnalytics;

class GaAnalyticsRepository implements AnalyticsRepositoryInterface
{

    /**
     * @var Analytics
     */
    private $analytics;

    public function __construct(LaravelAnalytics $analytics)
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
     *
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

    public function sessions($period)
    {
        $metrics = 'ga:sessions';
        $data = $this->analytics->performQuery($period, $metrics);

        return $data;
    }
}