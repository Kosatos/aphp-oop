<?php

namespace Classes\Staff;

use Classes\Interfaces\WebinarSpeakerInterface;
use Classes\Person;

class Employee extends Person implements WebinarSpeakerInterface
{

    public function getFullName(): string
    {
        // TODO: Implement getFullName() method.
        return "$this->name $this->surName";
    }

    public function getProfession(): string
    {
        // TODO: Implement getProfession() method.
        return "Позиция: $this->profession";
    }

    public function getSalary(): int
    {
        // TODO: Implement getSalary() method.
        return 55000;
    }

    public function moreInfo(): string
    {
        // TODO: Implement moreInfo() method.
        return "Может проводить вебинары на любые доступные темы.";
    }

    public function getFullInfo(): void
    {
        // TODO: Implement getFullInfo() method.
        echo $this->getFullName() . PHP_EOL . $this->getProfession() . PHP_EOL . "Зарплата: " . $this->getSalary() . ' руб.' . PHP_EOL . $this->moreInfo() . PHP_EOL;
    }
}