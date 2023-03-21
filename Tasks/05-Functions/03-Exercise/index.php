<?php

$john = new stdClass();
$john->name = "John";
$john->surname = "Doe";
$john->age = 10;

function checkAgeOf($person){
    if ($person->age < 18){
        echo "Person is underage";
    } else {
        echo "Person is an adult";
    }
}

checkAgeOf($john);