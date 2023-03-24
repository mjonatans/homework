<?php

$listOfWords = [
    "Codelex",
    "Hello World",
    "Programming",
    "Github",
    "Hangman"
];

$word = strtoupper($listOfWords[rand(0,sizeof($listOfWords)-1)]);
$word = str_replace(" ","",$word);
$wordLetters = str_split($word);

$guessedWord = str_repeat("_",strlen($word));
$guessedWordLetters = str_split($guessedWord);

$lives = 3;
$isGameWon = false;

echo "Welcome to hangman!" . PHP_EOL;
while($lives > 0) {
    if ($guessedWord == $word){
        $isGameWon = true;
        break;
    }
    echo "Your word to guess: $guessedWord" . PHP_EOL;
    echo "You have $lives lives" . PHP_EOL;

    $input = strtoupper(readline("Guess a letter: "));
    if (!in_array($input, $wordLetters)) {
        $lives -= 1;
    }

    $index = 0;
    foreach ($wordLetters as $letter){
        if ($input == $letter){
            $guessedWordLetters[$index] = $letter;
        }
        $index += 1;
    }
    $guessedWord = implode($guessedWordLetters);
}

if ($isGameWon) {
    echo "You guessed the word and get to live.";
} else {
    echo "You were hanged tragically. Boo hoo.";
}



