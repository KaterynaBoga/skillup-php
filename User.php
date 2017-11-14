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

    public function __construct($name, $age, $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getAge()
    {
        return $this->age;
    }
    public function getSalary()
    {
        return $this->salary;
    }

}

$user = new Worker('Коля', 25, 1000);
echo $user->getAge() + $user->getSalary() . PHP_EOL;
?>