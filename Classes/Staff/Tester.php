<?php

namespace Classes\Staff;

use Classes\Interfaces\ApplicationCreatorInterface;
use Classes\Interfaces\WebinarSpeakerInterface;
use Classes\Person;

class Tester extends Person implements WebinarSpeakerInterface, ApplicationCreatorInterface
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
        return 60000;
    }

    public function moreInfo(): string
    {
        // TODO: Implement moreInfo() method.
        return "Тестирует приложение на этапе рахработке, а также может проводить вебинары на тему тестирования.";
    }
    public function getFullInfo(): void
    {
        // TODO: Implement getFullInfo() method.
        echo $this->getFullName() . PHP_EOL . $this->getProfession() . PHP_EOL . "Зарплата: " . $this->getSalary() . ' руб.' . PHP_EOL . $this->moreInfo() . PHP_EOL;
    }
}