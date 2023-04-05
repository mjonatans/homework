<?php
$lowestNumber = 1;
$highestNumber = 100;
$sum = 0;
for ($i = $lowestNumber; $i <= $highestNumber; $i++) {
    $sum += $i;
}

echo "The sum of 1 to 100 is $sum". PHP_EOL;
echo "The average is " . $sum / ($lowestNumber - $highestNumber + 1);