<?php

namespace src;

class Task7
{
    public static function main(array $arr, int $position): array
    {
        if (empty($arr)) {
            throw new \InvalidArgumentException('Array is empty');
        }
        if (!array_key_exists($position, $arr)) {
            throw new \InvalidArgumentException('Such element for this position does not exist. Your position is '.$position);
        }
        $newArr = [];
        for ($i = 0; $i < count($arr); $i++) {
            if ($i === $position) {
                continue;
            }
            $newArr[] = $arr[$i];
        }

        return $newArr;
    }
}
