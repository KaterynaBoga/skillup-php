<?php
/**
 * Created by PhpStorm.
 * User: BKN1402
 * Date: 15.11.2017
 * Time: 20:32
 */


class Worker extends User
{
    private $salary = 0;

    public function getSalary()
    {
        return $this->salary;
    }

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }
}
$worker1 = new Worker();
$worker1->setName('Ivan');
$worker1->setAge(25);
$worker1->setSalary(1000);

$worker2 = new Worker();
$worker2->setName('Vasya');
$worker2->setAge(26);
$worker2->setSalary(2000);

echo $worker1->setSalary() + $worker2->setSalary() . PHP_EOL;
