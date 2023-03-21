<?php

class GameElement {
    public string $name;
    public array $beats;

    function __construct($name,$beats){
        $this->name = $name;
        $this->beats = $beats;
    }
}

$elementList = [
    "rock" => $rock = new GameElement("Rock",[]),
    "paper" => $paper = new GameElement("Paper",[]),
    "scissors" => $scissors = new GameElement("Scissors",[]),
    "lizard" => $lizard = new GameElement("Lizard",[]),
    "spock" => $spock = new GameElement("Spock",[])
];

array_push($rock->beats,$scissors->name,$lizard->name);
array_push($paper->beats,$rock->name,$spock->name);
array_push($scissors->beats, $paper->name,$lizard->name);
array_push($lizard->beats,$spock->name,$paper->name);
array_push($spock->beats,$scissors->name,$rock->name);

$computerChoiceIndex = rand(0,sizeof($elementList)-1);
$computerChoice = null;

$index = 0;
foreach($elementList as $element){
    if ($index == $computerChoiceIndex){
        $computerChoice = $element;
        break;
    }
    $index++;
}

echo "Welcome to rock paper scissors! (and some extras lol)\n";
echo "========================================================\n";

$playerChoice = null;
while ($playerChoice == null) {
    echo "Available choices: \n";
    foreach ($elementList as $key => $element) {
        echo "[$key] " . $element->name . PHP_EOL;
    }

    $prompt = strtolower(readline("Choose your element: "));

    if (!array_key_exists($prompt, $elementList)) {
        echo "========================================================\n";
        echo "There is no such element. Choose again." . PHP_EOL;
        continue;
    }
    $playerChoice = $elementList[$prompt];
}

echo "========================================================\n";
if ($computerChoice === $playerChoice){
    echo "Game is a draw." . PHP_EOL;
}
else {
    if (in_array($computerChoice->name,$playerChoice->beats)){
        echo "Player wins!" . PHP_EOL;
    } else {
        echo "Computer wins!" . PHP_EOL;
    }
}

echo "Player chose $playerChoice->name" . PHP_EOL;
echo "Computer chose $computerChoice->name" . PHP_EOL;


