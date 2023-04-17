<?php

require "vendor/autoload.php";

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

$city = readline("Enter city: ");
$key = '3afac02137b70e55cc0ee8097c52ca56';
$url = 'https://api.openweathermap.org/data/2.5/weather?q=' . $city . '&lang=en&units=metric&appid=' . $key;

$client = new Client(['verify' => false ]);
try {
    $response = $client->request('GET', $url);
} catch (GuzzleException $e) {
    echo $e . PHP_EOL;
}


$body = $response->getBody();
$weather = json_decode($body);

$temperature = $weather->main->temp;
$maxTemperature = $weather->main->temp_max;
$wind = $weather->wind->speed;
$feelsLike = $weather->main->feels_like;
$description = $weather->weather[0]->description;

echo "=========================" . PHP_EOL;
echo 'In ' . $city . ' current temperature is: ' . $temperature . '°C' . PHP_EOL;
echo "=========================" . PHP_EOL;
echo 'Max temp today: ' . $maxTemperature . '°C' . PHP_EOL;
echo "=========================" . PHP_EOL;
echo 'Feels like: ' . $feelsLike . '°C' . PHP_EOL;
echo "=========================" . PHP_EOL;
echo 'Wind speed today: ' . $wind . ' m/s' . PHP_EOL;
echo "=========================" . PHP_EOL;
echo 'Weather description today: ' . $description . PHP_EOL;
echo "=========================" . PHP_EOL;
