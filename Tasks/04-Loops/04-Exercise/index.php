<?php

$numbers = [34.2,55,22.2,3,60,24,26.23,10.5];

foreach ($numbers as $number) {
    if ($number % 3 == 0){
        echo "$number\n";
    }
}
