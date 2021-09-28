<?php 
function beverage(string $type = '', float $cost = 0, string $temperature = '')
{
    $temperature_setting = (in_array($temperature, ['hot', 'cold', 'warm'])) ? $temperature : 'warm';
    return 'Your ' . $type . ' beverage will cost ' . $cost . ' and will be served ' . $temperature;
}

$drink = beverage(
    cost: 5.67,
    temperature: 'hot'
);

print ("<p>{$drink}</p>");

