<?php

namespace MyTailor\Http\Controllers\Admin;

use Illuminate\Http\Request;

use MyTailor\Http\Requests;
use MyTailor\Modules\Core\Period\Period;
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

             'todays_users' => $this->analytics->users(Period::today()),
             'monthly_users' => $this->analytics->users(Period::month()),
             'new_users' => $this->analytics->newusers(Period::week()),
             'mon_visits' => $this->analytics->sessions(Period::month()),
             'nvr_session' => $this->getNewVsReturning(),
             'pageViewsAndVisitors' => $this->getPageViewsAndVisitors()

        ];
    }

    /**
     * Gets new versus Returning visitors in percentage %
     *
     * @return array
     */
    private function getNewVsReturning()
    {
       $data = $this->analytics->NewVsReturning(Period::month());

        $new = $data->rows[0][1];
        $returning = $data->rows[1][1];

        $total = $new + $returning;

        $data = [
          'new' => round($new/$total * 100, 2),
          'returning' => round($returning/$total * 100, 2)
        ];
        return $data;
    }

    /**
     * gets page Views and Visitors
     * @return array
     */
    private function getPageViewsAndVisitors()
    {
        $pageViews = ['PageViews'];
        $visitors = ['visitors'];

        $data = $this->analytics->PageViews(Period::month());

        foreach($data as $item){

            array_push($pageViews, $item['pageViews']);
            array_push($visitors, $item['visitors']);
        }

        return [
            'pageViews' => $pageViews,
            'visitors' => $visitors
        ];
    }


}
