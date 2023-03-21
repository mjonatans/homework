<?php
$number = readline("Enter your number: ");

switch ($number){
    case $number < 50 :
        echo 'low';
        break;
    case $number >= 50 and $number <= 100 :
        echo 'mid';
        break;
    case $number > 100 :
        echo 'high';
        break;
    default :
        echo 'not a number';
        break;
}