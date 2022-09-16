<?php

namespace src;

class Task6
{
    public static function main(int $year, int $lastYear, int $month, int $lastMonth, string $day = 'Monday'): int
    {
        $counter = 0;
        if (strtotime('01-'.$month.'-'.$year) === false || strtotime('01-'.$lastMonth.'-'.$lastYear) === false) {
            throw new \InvalidArgumentException('Date format is wrong');
        }
        $firstDate = strtotime('01-'.$month.'-'.$year);
        $lastDate = strtotime('01-'.$lastMonth.'-'.$lastYear);
        if ($firstDate > $lastDate) {
            throw new \InvalidArgumentException('Start date is greater or than end date. Your start date: '.$firstDate.' Your end date: '.$lastDate);
        }
        $day = trim($day);
        if (!($day === 'Monday'
            || $day === 'Tuesday'
            || $day === 'Wednesday'
            || $day === 'Thursday'
            || $day === 'Friday'
            || $day === 'Saturday'
            || $day === 'Sunday')) {
            throw new \InvalidArgumentException('Day must be between Monday and Sunday. Your day is: '.$day);
        }
        while ($firstDate <= $lastDate) {
            if (date('l', $firstDate) === $day) {
                $counter++;
            }
            $firstDate = strtotime('+1 month', $firstDate);
        }

        return $counter;
    }
}
