<?php

namespace src;

class Task9
{
    public static function main(array $arr, int $number): array
    {
        if (count($arr) < 3) {
            throw new \InvalidArgumentException('Array does not have enough elements. Your array has only '.count($arr).' elements');
        }
        $firstEl = 0;
        $secondEl = 0;
        $thirdEl = 0;
        $isFound = false;
        $result = [];
        for ($i = 0; $i < count($arr) - 2; $i++) {
            $firstEl = $arr[$i];
            $secondEl = $arr[$i + 1];
            $thirdEl = $arr[$i + 2];
            if ($firstEl + $secondEl + $thirdEl === $number) {
                $result[] = $firstEl.' + '.$secondEl.' + '.$thirdEl.' = '.$number;
                $isFound = true;
            }
        }
        if (!$isFound) {
            throw new \InvalidArgumentException('Array does not have elements which can make '.$number);
        }

        return $result;
    }
}
