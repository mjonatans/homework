<?php

require "Account.php";
class Main
{
    public function __construct()
    {
        $accounts = [
            $mattsAccount = new Account("Matt's account",1000),
            $myAccount = new Account("My account",0),
            $a = new Account("A",100),
            $b = new Account("B",0),
            $c = new Account("C",0)
        ];

        $mattsAccount->withdraw(100);
        $myAccount->deposit(100);

        Account::transfer($a,$b,50);
        Account::transfer($b,$c,25);

        foreach ($accounts as $account) $account->printDetails();
    }

}

new Main;