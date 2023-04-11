<?php

class Point {

    public int $x;
    public int $y;

    public function __construct(int $firstPoint, int $secondPoint)
    {
        $this->x = $firstPoint;
        $this->y = $secondPoint;
    }

    function swapPoints(Point $first, Point $second) : void {

        $tempX = $first->x;
        $tempY = $first->y;

        $first->x = $second->x;
        $first->y = $second ->y;

        $second->x = $tempX;
        $second->y = $tempY;
    }

}