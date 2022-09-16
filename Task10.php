<?php

namespace src;

class Task10
{
    public static function main(int $input): array
    {
        if ($input < 1) {
            throw new \InvalidArgumentException('Number must be positive. Your number is '.$input);
        }
        $result = [];
        $result[] = $input;
        do {
            if ($input % 2 === 0) {
                $input /= 2;
            } else {
                $input = $input * 3 + 1;
            }
            $result[] = $input;
        } while ($input !== 1);

        return $result;
    }
}
