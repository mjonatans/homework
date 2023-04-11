<?php

class Date {
    private int $month;
    private int $day;
    private int $year;

    function __construct(int $month, int $day, int $year)
    {
        $this->month = $month;
        $this->day = $day;
        $this->year = $year;
    }

    function setMonth(int $month): void
    {
        $this->month = $month;
    }

    function getMonth(): int
    {
        return $this->month;
    }

    function setDay(int $day): void
    {
        $this->day = $day;
    }

    function getDay(): int
    {
        return $this->day;
    }

    function setYear(int $year): void
    {
        $this->year = $year;
    }

    function getYear(): int
    {
        return $this->year;
    }

    function DisplayDate(): void
    {
        echo $this->month . '/' . $this->day . '/' . $this->year . PHP_EOL;
    }
}