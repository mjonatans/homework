<?php

/*
    Write a program that creates an array of ten integers.
    It should put ten random numbers from 1 to 100 in the array.
    It should copy all the elements of that array into another array of the same size.

    Then display the contents of both arrays. To get the output to look like this,
    you'll need a several for loops.

    Create an array of ten integers
    Fill the array with ten random numbers (1-100)
    Copy the array into another array of the same capacity
    Change the last value in the first array to a -7
    Display the contents of both arrays
 */


$emptyArray = str_split(str_repeat(" ",10));

$firstArray = array_map (
    function() { return rand(1,100); },
    $emptyArray
);

$secondArray = array_merge($firstArray);
$secondArray[sizeof($secondArray)-1] = -7;

foreach ($firstArray as $number) {
    echo $number . " ";
}

echo PHP_EOL;

foreach ($secondArray as $number) {
    echo $number . " ";
}



