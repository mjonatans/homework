<?php

class Weapon {
    public string $name;
    public string $license;
    public int $price;

    function __construct(string $name,string $license,int $price){
        $this->name = $name;
        $this->license =$license;
        $this->price = $price;
    }
}

$person = new stdClass();
$person->name = "John";
$person->licenses = ['A','B','F'];
$person->cash = 156042;

$weaponsList = [
    "glock" => $glock = new Weapon("Glock","A",50000),
    "knife" => $knife = new Weapon("Knife","B",2500),
    "ak47" => $ak47 = new Weapon("EPIC AK47","C",700099),
    "rpg" => $rpg = new Weapon("Bazooka","F",30056746),
    "nuke" => $nuke = new Weapon("GAME OVER BUTTON","Z",99999999)
];

$cash = $person->cash / 100;
$licenseInfo = implode(",",$person->licenses);

echo("Welcome to the store\n");
echo("You have $cash$\n");
echo("Your gun licenses are: [$licenseInfo]\n");
echo("=========================================================\n");

foreach ($weaponsList as $key => $weapon) {
    $price = $weapon->price / 100;
    echo "[$key] $weapon->name | $weapon->license | $price$\n";
}

$selection = readline("Choose which weapon to buy: ");

if (!array_key_exists($selection,$weaponsList)){
    echo "Weapon not found";
    exit;
}

$selectedWeapon = $weaponsList[$selection];

if (!in_array($selectedWeapon->license,$person->licenses)){
    echo "Incorrect license";
    exit;
}

if ($person->cash<$selectedWeapon->price){
    echo "Insufficient funds";
    exit;
}

$person->cash -= $selectedWeapon->price;

echo("You have purchased a $selectedWeapon->name. You have " . $person->cash / 100 . "$ left.");



