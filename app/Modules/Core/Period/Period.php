<?php



namespace MyTailor\Modules\Core\Period;

use Carbon\Carbon;
use DateTime;

class Period
{
    /** @var \DateTime */
    public $startDate;
    /** @var \DateTime */
    public $endDate;

    public static function create(DateTime $startDate, $endDate)
    {
        return new static($startDate, $endDate);
    }

    public static function days($numberOfDays)
    {
        $endDate = Carbon::today();
        $startDate = Carbon::today()->subDays($numberOfDays)->startOfDay();
        return new static($startDate, $endDate);
    }
    public function __construct($startDate, $endDate)
    {
//        if ($startDate > $endDate) {
//            //throw InvalidPeriod::startDateCannotBeAfterEndDate($startDate, $endDate);
//        }
        $this->startDate = $startDate;
        $this->endDate = $endDate;
    }

    public static function raw($startDate, $endDate)
    {
        return new static($startDate, $endDate);
    }

    public static function today()
    {
        return new static($startDate = 'today', $endDate = 'today');
    }

    public static function month()
    {
        $startDate = Carbon::today()->subDays(31)->startOfDay()->toDateString();
        $endDate = 'today';

        return new static($startDate, $endDate);
    }

    public static function week()
    {
        $startDate = '7daysAgo';
        $endDate = 'yesterday';

        return new static($startDate, $endDate);
    }
}