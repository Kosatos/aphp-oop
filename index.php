<?php
require_once('autoload.php');

use Classes\Staff\Employee;
use Classes\Staff\Tester;
use Classes\Staff\Programmer;
use Classes\Staff\Manager;
use Classes\Staff\Director;
use Classes\Person;

$staff[] = new Employee('Андрей', 'Андреев', 'Сотрудник');
$staff[] = new Tester ('Антон', 'Антонов', 'Тестировщик');
$staff[] = new Programmer('Сергей', 'Сергеев', 'Программист');
$staff[] = new Manager('Алиса', 'Алисова', 'Менеджер');
$staff[] = new Director('Татьяна', 'Татьянова', 'Директор');

$totalStaffQuantity = count($staff);
$totalStaffSalary = array_reduce($staff, function ($prev, $cur) {
    $prev += $cur->getSalary();
    return $prev;
});

foreach ($staff as $person) {
    if ($person instanceof Person) {
        $person->getFullInfo();
        echo PHP_EOL;
    }
}

echo "Общее количество сотрудников в компании: $totalStaffQuantity" . PHP_EOL;
echo "Общая зарплата сотрудников на компанию: $totalStaffSalary руб." . PHP_EOL;

