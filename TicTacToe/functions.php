<?php
function drawGame($grid) : void {
    if (sizeof($grid) !== 9){
        echo "Play field must be a 3x3 grid." . PHP_EOL;
        exit;
    }
    $index = 0;
    for ($row = 0; $row < 3; $row++) {
        for ($col = 0; $col < 3; $col++) {
            echo "|$grid[$index]|";
            $index++;
        }
        echo PHP_EOL;
    }
}

function randomizeFirstTurn() : string {
    return rand(0,1) > 0 ? "X" : "O";
}


function findWinner($grid,$symbol) : bool {
    $winningList = [
        [0,1,2],
        [3,4,5],
        [6,7,8],
        [0,3,6],
        [1,4,7],
        [2,5,8],
        [0,4,8],
        [2,4,6]
    ];

    foreach ($winningList as $winningCombo){
        $correctSymbolCount = 0;
        foreach ($winningCombo as $comboIndex){
            if ($grid[$comboIndex] == $symbol){
                $correctSymbolCount ++;
            }
        }
        if ($correctSymbolCount == 3){
            break;
        }
    }
    return $correctSymbolCount == 3;
}