<?php

$john = new stdClass();
$john->name = "John";
$john->surname = "Doe";
$john->age = 18;

$jane = new stdClass();
$jane->name = "Jane";
$jane->surname = "Doe";
$jane->age = 17;

$jack = new stdClass();
$jack->name = "Jane";
$jack->surname = "Hill";
$jack->age = 22;

$sarah = new stdClass();
$sarah->name = "Sarah";
$sarah->surname = "Connor";
$sarah->age = 16;

$persons = [
    $john,
    $jane,
    $jack,
    $sarah
];
function checkAgeOf($person){
    if ($person->age < 18){
        echo "Person is underage\n";
    } else {
        echo "Person is an adult\n";
    }
}

foreach ($persons as $person){
    checkAgeOf($person);
}