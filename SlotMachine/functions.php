<?php
function generateBoard($board,$symbols) : array {
    for ($i = 0; $i < 3;$i++){
        for ($j = 0; $j < 4;$j++){
            $slots = array_values($symbols);
            $symbol = $slots[rand(0,sizeof($slots)-1)];
            $board[$i][$j] = $symbol->name;
        }
    }
    return $board;
}