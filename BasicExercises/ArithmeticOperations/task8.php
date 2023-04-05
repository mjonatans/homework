<?php

function calculatePay($hoursWorked, $hourlyRate)
{
    $overtimeHours = 0;
    $overtimeRate = 1.5;
    $minimumWage = 8.00;
    $maximumHours = 60;

    if ($hoursWorked > $maximumHours) {
        $hoursWorked = $maximumHours;
    }

    if ($hoursWorked > 40) {
        $overtimeHours = $hoursWorked - 40;
        $hoursWorked = 40;
    }

    $pay = $hoursWorked * $hourlyRate + $overtimeHours * $hourlyRate * $overtimeRate;

    if ($pay < $minimumWage) {
        $pay = $minimumWage;
    }

    return $pay;
}

function printPay($hoursWorked, $hourlyRate)
{
    $pay = calculatePay($hoursWorked, $hourlyRate);
    echo "Hours worked: $hoursWorked" . PHP_EOL;
    echo "Hourly rate: $hourlyRate" . PHP_EOL;
    echo "Pay: $pay" . PHP_EOL;
}

printPay(35, 7.50);
printPay(47, 8.20);
printPay(73, 10.00);