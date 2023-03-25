<?php

namespace Classes\Staff;

use Classes\Interfaces\ApplicationCreatorInterface;
use Classes\Interfaces\WebinarSpeakerInterface;
use Classes\Person;

class Programmer extends  Person implements WebinarSpeakerInterface, ApplicationCreatorInterface
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
        return 75000;
    }

    public function moreInfo(): string
    {
        // TODO: Implement moreInfo() method.
        return "Занимается разработкой приложения, а также может проводить вебинары на тему разработки.";
    }
    public function getFullInfo(): void
    {
        // TODO: Implement getFullInfo() method.
        echo $this->getFullName() . PHP_EOL . $this->getProfession() . PHP_EOL . "Зарплата: " . $this->getSalary() . ' руб.' . PHP_EOL . $this->moreInfo() . PHP_EOL;
    }
}