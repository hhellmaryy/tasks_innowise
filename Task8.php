<?php

namespace src;

class Task8
{
    public static function main(string $json): string
    {
        if (json_decode($json, true) === null) {
            throw new \InvalidArgumentException('String is not json. Your string is: '.$json);
        }
        $arr = json_decode($json, true);
        $str = '';
        foreach ($arr as $key => $value) {
            if (is_array($value)) {
                $value = Task8::main(json_encode($value));
                $str .= $value;
            } else {
                $str .= $key.': '.$value.chr(10).chr(13);
            }
        }

        return $str;
    }
}
