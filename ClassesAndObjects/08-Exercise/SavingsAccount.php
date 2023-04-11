<?php

class SavingsAccount {
    private float $startingBalance;
    private float $monthlyInterestRate = 0;
    private float $interestEarned = 0;
    private int $totalDeposit = 0;
    private int $totalWithdrawal = 0;

    public function __construct(int $startingBalance) {
        $this->startingBalance = $startingBalance;
    }

    public function setInterestRates(int $annualRate) {
        $this->monthlyInterestRate = $annualRate / 12;
    }

    public function withdrawal(int $amount) {
        $this->startingBalance -= $amount;
        $this->totalWithdrawal += $amount;
    }

    public function getTotalWithdrawal(): int {
        return $this->totalWithdrawal;
    }

    public function deposit(int $amount) {
        $this->startingBalance += $amount;
        $this->totalDeposit += $amount;
    }

    public function getTotalDeposit(): int {
        return $this->totalDeposit;
    }

    public function calculateMonthlyInterest() {
        $monthlyInterest = $this->startingBalance * $this->monthlyInterestRate;
        $this->startingBalance += $monthlyInterest;
        $this->interestEarned += $monthlyInterest;
    }

    public function getInterestEarned(): float {
        return $this->interestEarned;
    }

    public function getBalance(): float {
        return $this->startingBalance;
    }
}