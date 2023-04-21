<?php

require_once "vendor/autoload.php";

require "app/ApiClient.php";
require "app/CryptoCoin.php";

$client = new ApiClient();
$coins = $client->getData();

foreach ($coins as $coin){
    $coin->showInfo();
}

