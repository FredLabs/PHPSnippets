<h1>Default and Named Arguments</h1>

<p>PHP allows us to specify <strong>default arguments</strong> to pass to our function as seen below</p>

<pre>
function beverage(string $type = '', float $cost = 0, string $temperature = '')
{
    $temperature_setting = (in_array($temperature, ['hot', 'cold', 'warm'])) ? $temperature : 'warm';
    return 'Your ' . $type . ' beverage will cost ' . $cost . ' and will be served ' . $temperature;
}
</pre>

<p>But what if the caller forgets to set the $type variable, and instead does the following:</p>

<pre>
$drink = beverage(4.99, 'hot');

print ("<p>{$drink}</p>");
</pre>

<p>In this situation we're out of luck as the argument is populated with the incorrect value.  PHP 8 addresses this issue by providing <strong>named arguments</strong>. 
Named arguments allows the caller to specify which values are assigned to what argument as follows:</p>

<pre>
$drink = beverage(
    cost: 5.67,
    temperature: 'hot'
);

print ("<p>{$drink}</p>");
</pre>

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

