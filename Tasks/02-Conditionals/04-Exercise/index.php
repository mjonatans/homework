<?php
$temperature = (integer) readline('Enter a temperature value in celsius: ');

if ($temperature > 30) {
    echo "it's hot outside.";
} else if ($temperature >= 10 and $temperature <= 30){
    echo "it's warm outside.";
} else {
    echo "it's cold outside.";
}