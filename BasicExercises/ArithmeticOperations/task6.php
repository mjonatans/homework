<?php

$limit = 110;

for ($i = 1; $i <= $limit; $i++) {
    $output = "";

    if ($i % 3 == 0) $output = $output . "Coza";
    if ($i % 5 == 0) $output = $output . "Loza";
    if ($i % 7 == 0) $output = $output . "Woza";

    if ($output == "") $output = $i;

    echo $i % 11 == 0 ? $output . PHP_EOL : $output . " ";
}