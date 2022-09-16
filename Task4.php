<?php

namespace src;

class Task4
{
    public static function main(string $input): string
    {
        $newString = '';
        $wasCharacter = false;
        for ($i = 0; $i < mb_strlen($input);$i++) {
            if ($input[$i] === ' ' || $input[$i] === '-' || $input[$i] === '_') {
                $wasCharacter = true;

                continue;
            }
            if ($wasCharacter) {
                $input[$i] = mb_strtoupper($input[$i]);
            }
            $newString .= $input[$i];
            $wasCharacter = false;
        }

        return $newString;
    }
}
