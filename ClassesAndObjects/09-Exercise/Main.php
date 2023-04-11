<?php

require "BankAccount.php";
class Main {
    public function __construct() {
        $ben = new BankAccount("Benson", -17.5);
        echo $ben->showBalance();
    }
}

new Main;