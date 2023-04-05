<?php

$firstNumber = (int) readline("Enter first number: ");
$secondNumber = (int) readline("Enter second number: ");

$expectedValue = 15;

$isEqual = $firstNumber == $secondNumber;
$isSumEqual = $firstNumber + $secondNumber == $expectedValue;
$isDifferenceEqual = $firstNumber - $expectedValue == $secondNumber;

$result = $isEqual || $isSumEqual || $isDifferenceEqual ? "True" : "False";
echo $result;

