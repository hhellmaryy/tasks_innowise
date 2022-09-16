<?php

namespace src;

class Task3
{
    public static function main(int $number): int
    {
        if ($number < 0 || strlen($number) < 2) {
            throw new \InvalidArgumentException('Wrong number was written as argument. Number must be positive and contain more than 2 characters');
        }
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
