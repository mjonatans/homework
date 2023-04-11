<?php

class Dog {
    private string $name;
    private string $sex;
    private ?Dog $mother;
    private ?Dog $father;

    public function __construct(string $name, string $sex, ?Dog $mother = null, ?Dog $father = null) {
        $this->name = $name;
        $this->sex = $sex;
        $this->mother = $mother;
        $this->father = $father;
    }

    public function getName(): string {
        return $this->name;
    }
    public function getSex(): string {
        return $this->sex;
    }

    public function fathersName(): string {
        return $this->father === null ? "Unknown" : $this->father->getName();

    }
    public function hasSameMotherAs(Dog $otherDog): string {
        return $this->mother === $otherDog->mother ? "Same mother" : "Different mother";
    }
}