<?php
const light = array('merah', 'kuning', 'hijau');

function trafficLight()
{
    static $index = 0;
    $light = light[$index];
    $index = ($index + 1) % 3;
    return $light;
}

echo trafficLight() . PHP_EOL; // merah
echo trafficLight() . PHP_EOL; // kuning
echo trafficLight() . PHP_EOL; // hijau
echo trafficLight() . PHP_EOL; // merah