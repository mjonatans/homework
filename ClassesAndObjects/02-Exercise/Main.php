<?php

require "Point.php";
class Main
{
    public function __construct() {
        $p1 = new Point(5, 2);
        $p2 = new Point(-3, 6);

        $p1->swapPoints($p1, $p2);

        echo "(" . $p1->x . ", " . $p1->y . ")" . PHP_EOL;
        echo "(" . $p2->x . ", " . $p2->y . ")";
    }
}

new Main;