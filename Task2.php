<?php

namespace src;

class Task2
{
    public static function main(string $date): int
    {
        $arrForDate = explode('-', $date);
        list($month, $day, $year) = $arrForDate;
        if (checkdate($day, $month, $year) === false) {
            throw new \InvalidArgumentException('Date format is wrong. The date format must follows DD-MM-YYYY. Your date format '.$date);
        }
        $birthDate = strtotime($date);
        $now = time();

        return abs(floor(($now - $birthDate) / (60 * 60 * 24)));
    }
}
