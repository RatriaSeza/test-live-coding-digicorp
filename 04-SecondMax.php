<?php

function secondMax(array $numbers)
{
    $max = $numbers[0];
    $secondMax = null;
    foreach ($numbers as $number) {
        if ($number > $max) { 
            $secondMax = $max;
            $max = $number;
        } else if ($number > $secondMax) {
            $secondMax = $number;
        }
    }

    return $secondMax;
}

const numbers1 = array(1, 2, 3, 4, 5);
const numbers2 = array(4, -1, -43, 12, 14);

echo secondMax(numbers1) . PHP_EOL;
echo secondMax(numbers2);