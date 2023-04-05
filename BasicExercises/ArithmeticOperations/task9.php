<?php
$weight = readline("Enter your weight in kilograms: ");
$height = readline("Enter your height in meters: ");

$bmi = $weight / ($height * $height);

if ($bmi < 18.5) {
    echo "Underweight";
} else if ($bmi > 25) {
    echo "Overweight";
} else {
    echo "Optimal weight";
}
