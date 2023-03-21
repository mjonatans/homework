<?php
$number = (int) readline("Enter your number: ");

if ($number >= 0 and $number <= 100){
    echo 'Number is in range.';
} else {
    echo 'Number is not in range';
}