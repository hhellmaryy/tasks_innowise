<?php

namespace src;

class Task8
{
    public static function main(string $json): string
    {
        $arr = json_decode($json, true);
        if (json_last_error() !== JSON_ERROR_NONE || strpos($json, '{') === false) {
            throw new \InvalidArgumentException('String is not json. Your string is: '.$json);
        }
        var_dump($arr);
        $str = '';
        foreach ($arr as $key => $value) {
            if (is_array($value)) {
                $value = Task8::main(json_encode($value));
                $str .= $value;
            } else {
                $str .= $key.': '.$value.chr(10).chr(13);
            }
        }

        return trim($str);
    }
}
