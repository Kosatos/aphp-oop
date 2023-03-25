<?php

namespace Classes\Staff;

use Classes\Interfaces\LeadInterface;
use Classes\Interfaces\WebinarSpeakerInterface;
use Classes\Person;

class Director extends Person implements LeadInterface, WebinarSpeakerInterface
{

    public function moreInfo(): string
    {
        // TODO: Implement moreInfo() method.
        return "Является управляющим лицом компании, а также может проводить вебинары по управлению бизнесом.";
    }

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
        return 140000;
    }
    public function getFullInfo(): void
    {
        // TODO: Implement getFullInfo() method.
        echo $this->getFullName() . PHP_EOL . $this->getProfession() . PHP_EOL . "Зарплата: " . $this->getSalary() . ' руб.' . PHP_EOL . $this->moreInfo() . PHP_EOL;
    }
}