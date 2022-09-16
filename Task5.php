<?php

namespace src;

class Task5
{
    public static function main(int $n): string
    {
        if ($n < 1) {
            throw new \InvalidArgumentException('Invalid quantity of characters. Quantity of characters must be more than 0. Your quantity:'.$n);
        }
        $firstVar = '0';
        $secondVar = '1';
        $fibValue = '0';
        while (strlen($fibValue) < $n) {
            $fibValue = '';
            $transfer = false;
            $secondVar = strrev($secondVar);
            $firstVar = strrev($firstVar);
            for ($i = 0; $i < strlen($secondVar); $i++) {
                $tempVar = @intval($firstVar[$i]) + @intval($secondVar[$i]);
                if ($transfer) {
                    $tempVar++;
                }
                if ($tempVar >= 10) {
                    $transfer = true;
                    $fibValue .= $tempVar % 10;
                } else {
                    $transfer = false;
                    $fibValue .= $tempVar;
                }
            }
            if ($transfer) {
                $fibValue .= 1;
            }
            $fibValue = strrev($fibValue);
            $secondVar = strrev($secondVar);
            $firstVar = $secondVar;
            $secondVar = $fibValue;
        }

        return $fibValue;
    }
}
