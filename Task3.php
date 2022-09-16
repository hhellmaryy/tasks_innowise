<?php

namespace src;

class Task3
{
    public static function main(int $number): int
    {
        $number = abs($number);
        $sum = 0;
        while ($number > 0) {
            $sum += ($number % 10);
            $number /= 10;
        }
        if (strlen($sum) > 1) {
            return Task3::main($sum);
        } else {
            return $sum;
        }
    }
}
