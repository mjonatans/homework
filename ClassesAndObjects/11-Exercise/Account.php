<?php

class Account {
    private string $name;
    private int $balance;

    public function __construct(string $name, int $balance)
    {
        $this->name = $name;
        $this->balance = $balance;
    }

    public static function transfer(Account $from, Account $to, int $amount) : void
    {
        if ($from->getBalance() < $amount) {
            echo $from->getName() . " has insufficient funds for transfer" . PHP_EOL;
        } else {
            $from->withdraw($amount);
            $to->deposit($amount);
        }
    }
    public function withdraw(int $amount) : void
    {
        $this->setBalance($this->getBalance()-$amount);
    }

    public function deposit(int $amount) : void
    {
        $this->setBalance($this->getBalance()+$amount);
    }
    public function printDetails() : void
    {
        echo $this->getName() . " balance is: " . $this->getBalance() . PHP_EOL;
    }

    private function getName(): string
    {
        return $this->name;
    }
    private function setName(string $name): void
    {
        $this->name = $name;
    }
    private function getBalance(): int
    {
        return $this->balance;
    }
    private function setBalance(int $balance): void
    {
        $this->balance = $balance;
    }
}