<?php

function mostCommonChar(string $string)
{
    $string = str_replace(' ', '', $string);
    $string = str_split($string);
    $result =  array_count_values($string);
    arsort($result);
    reset($result);
    return key($result) . ' ' . max($result) . 'x';
}

echo mostCommonChar('hello world') . PHP_EOL;
echo mostCommonChar('aabbbbbbbc') . PHP_EOL;
echo mostCommonChar('wellcome') . PHP_EOL;
echo mostCommonChar('strawberry') . PHP_EOL;
