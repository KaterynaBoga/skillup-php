<?php
/**
 * Created by PhpStorm.
 * User: BKN1402
 * Date: 14.11.2017
 * Time: 19:27
 */

class Worker
{

    private $name = '';

    private $age = 0;

    private $salary = 0;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        if ($this->checkAge($age)) {
            $this->age = $age;
        }
    }

    private function checkAge($age)
    {
        if ($age > 1 && $age < 100) {
            return true;
        } else {
            return false;
        }
    }

    public function getSalary()
    {
        return $this->salary;
    }

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }


}

$user1 = new Worker;
$user1->setName('Ivan');
$user1->setAge(255);
$user1->setSalary(1000);

$user2 = new Worker;
$user2->setName('Vasya');
$user2->setAge(26);
$user2->setSalary(2000);


echo $user1->getSalary() + $user2->getSalary() . PHP_EOL;
echo $user1->getAge() + $user2->getAge() . PHP_EOL;
?>