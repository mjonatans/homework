<?php

require "functions.php";

$EMPTY_SYMBOL = "_";
$playField = str_split(str_repeat($EMPTY_SYMBOL,9));

$firstPlayer = readline("Enter first player's name: ");
$secondPlayer = readline("Enter second player's name: ");

echo "Welcome to Tic-Tac-Toe!" . PHP_EOL;

$playerList = [
    "X" => $firstPlayer,
    "O" => $secondPlayer
];

$turn = randomizeFirstTurn();
$winner = null;

while ($winner == null) {
    if (!in_array($EMPTY_SYMBOL,$playField)){
        echo "=========================" . PHP_EOL;
        echo "Game is a draw" . PHP_EOL;
        echo "=========================" . PHP_EOL;
        drawGame($playField);
        exit;
    }

    $currentPlayer = $playerList[$turn];
    echo "It's now $currentPlayer's turn. [$turn]" . PHP_EOL;

    drawGame($playField);

    $validInputs = range(1, sizeof($playField));
    $input = readline("Choose your square [Enter a number from 1-9]: ");

    if (!is_numeric($input) || !in_array((int)$input,$validInputs)) {
        echo "Invalid input. Make sure your input is a number between 1-9. Choose again." . PHP_EOL;
        continue;
    }
    if ($playField[$input-1] != $EMPTY_SYMBOL){
        echo "This square is already filled. Choose again." . PHP_EOL;
        continue;
    }
    $playField[$input-1] = $turn;

    if (findWinner($playField,$turn)){
        echo "=========================" . PHP_EOL;
        echo "$currentPlayer is the winner!" . PHP_EOL;
        echo "=========================" . PHP_EOL;
        $winner = $currentPlayer;
        drawGame($playField);
        break;
    }
    $turn == "X" ? $turn = "O" : $turn = "X";
}





