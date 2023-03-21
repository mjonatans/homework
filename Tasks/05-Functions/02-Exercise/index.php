<?php

$number = 10;
function multiply($base, $multiplier){
    if ($base !== (int)$base || $multiplier !== (int)$multiplier) {
        echo "Passed values are not numbers\n";
        return 0;
    }
    return $base * $multiplier;
}

$result = multiply(10,5);
echo $result;