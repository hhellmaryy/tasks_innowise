<?php

namespace src;

class Task2
{
    public static function main(string $date): int
    {
        if (strtotime($date) === false) {
            throw new \InvalidArgumentException('Date format is wrong. The date format must follows DD-MM-YYYY. Your date format '.$date);
        }
        $birthDate = strtotime($date);
        $now = time();

        return floor(($now - $birthDate) / (60 * 60 * 24));
    }
}
