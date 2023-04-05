<?php

$number = rand(1, 100);

$guess = readline("Guess a number from 1 to 100: ");
if ($guess > $number) {
    echo "Too high. Number was $number." . PHP_EOL;
} else if ($guess < $number) {
    echo "Too low. Number was $number." . PHP_EOL;
} else {
    echo "You guessed the number";
}
