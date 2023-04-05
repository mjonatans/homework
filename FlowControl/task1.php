<?php

$firstNumber = readline("Input the 1st number: ");
$secondNumber = readline("Input the 2nd number: ");
$thirdNumber = readline("Input the 3rd number: ");

if ($firstNumber > $secondNumber && $secondNumber > $thirdNumber) {
    echo "The largest number is: $firstNumber";
} else if ($secondNumber > $firstNumber && $secondNumber > $thirdNumber) {
    echo "The largest number is: $secondNumber";
} else {
    echo "The largest number is: $thirdNumber";
}