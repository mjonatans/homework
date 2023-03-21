<?php

$listOfValues = [1,8,12,0.35,"hello"];

function doubleNumber($number): int{
    if ($number !== (int)$number){
        return 0;
    }
    return $number * 2;
}

for ($i = 0; $i<count($listOfValues); $i++){
    echo doubleNumber($listOfValues[$i]) . "\n";
}
