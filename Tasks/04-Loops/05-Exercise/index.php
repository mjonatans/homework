<?php


$john = new stdClass();
$john->name = "John";
$john->surname = "Doe";
$john->age = 50;
$john->birthday = "06/02/1973";

$jane = new stdClass();
$jane->name = "Jane";
$jane->surname = "Doe";
$jane->age = 40;
$jane->birthday = "04/08/1983";

$jack = new stdClass();
$jack->name = "Jane";
$jack->surname = "Hill";
$jack->age = 30;
$jack->birthday = "07/22/1993";

$sarah = new stdClass();
$sarah->name = "Sarah";
$sarah->surname = "Connor";
$sarah->age = 20;
$sarah->birthday = "07/22/2003";

$persons = [
    'Group 1' => [
        $john,
        $jane,
        $jack
    ],
    'Group 2' => [
        $sarah,
        $jack
    ],
];

//var_dump($persons);

foreach ($persons as $group){

    echo "Group data:\n";

    foreach($group as $person) {
        foreach ($person as $info){
            echo "$info ";
        }
        echo "\n";
    }
    echo "\n";
}
