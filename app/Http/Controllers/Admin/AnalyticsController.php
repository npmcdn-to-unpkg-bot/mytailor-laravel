<?php

namespace MyTailor\Http\Controllers\Admin;

use Illuminate\Http\Request;

use MyTailor\Http\Requests;
use MyTailor\Repositories\AnalyticsRepositoryInterface;

class AnalyticsController extends Controller
{
    /**
     * @var AnalyticsRepositoryInterface
     */
    private $analytics;

    public function __construct(AnalyticsRepositoryInterface $analytics)
    {

        $this->analytics = $analytics;
    }

    public function getPageViews(Request $request)
    {
        return $this->analytics->pageViews(Period::days(7));
    }

    /**
     * Gets Activity of the users
     *
     * @param null $period
     * @return array
     */
    public function getUsers($period = null)
    {
       return $data = [
           'new_users' => $this->analytics->newUsers(Period::days(7)),
           'monthly_users' => $this->analytics->users(Period::days(31)),
           'todays_users' => $this->analytics->users(Period::days(1))
        ];
    }
}
