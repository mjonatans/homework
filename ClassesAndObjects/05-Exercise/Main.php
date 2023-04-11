<?php

require "Date.php";
class Main
{
    public function __construct() {
        $date = new Date(4, 9, 2023);
        $date->setDay(8);
        $date->setMonth(11);
        $date->setYear(2022);
        $date->DisplayDate();
    }
}

new Main;