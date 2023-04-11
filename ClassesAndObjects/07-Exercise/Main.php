<?php

require "Dog.php";
class Main
{
    public function __construct() {
        $lady = new Dog('Lady', 'female');
        $molly = new Dog('Molly', 'female');
        $sam = new Dog('Sam', 'male');
        $sparky = new Dog('Sparky', 'male');
        $rocky = new Dog('Rocky', 'male', $molly, $sam);
        $max = new Dog('Max', 'male', $lady, $rocky);
        $buster = new Dog('Buster', 'male', $lady, $sparky);
        $coco = new Dog('Coco', 'female', $molly, $buster);

        echo $coco->fathersName() . PHP_EOL;
        echo $sparky->fathersName() . PHP_EOL;

        echo $coco->hasSameMotherAs($buster) . PHP_EOL;
        echo $coco->hasSameMotherAs($rocky) . PHP_EOL;
    }
}

new Main;