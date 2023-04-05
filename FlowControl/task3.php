<?php
$number = readline("Enter a positive integer: ");

$counter = 0;
while ($number > 0) {
    $number = (int)($number / 10);
    $counter++;
}
echo "Number has $counter digits";