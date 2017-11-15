<?php
/**
 * Created by PhpStorm.
 * User: BKN1402
 * Date: 14.11.2017
 * Time: 19:27
 */

class User
{
    protected $name;
    protected $age;

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
        $this->age = $age;
    }

}

class Worker extends User
{
    private $salary;

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
$worker1->setSalary(1000);
$worker1->setName('Коля');
$worker1->setAge(25);

$worker2 = new Worker();
$worker2->setSalary(2000);
$worker2->setName('Вася');
$worker2->setAge(26);

echo $worker1->getSalary() + $worker2->getSalary() . PHP_EOL;

class Student extends User
{
    private $course;
    private $cash;

    public function getCourse()
    {
        return $this->course;
    }

    public function setCourse($course)
    {
        $this->course = $course;
    }

    public function getCash()
    {
        return $this->cash;
    }

    public function setCash($cash)
    {
        $this->cash = $cash;
    }

}

$student1 = new Student();
$student1->setName('Коля');
$student1->setAge(25);
$student1->setCourse(3);
$student1->setCash(1200);

$student2 = new Student();
$student2->setName('Вася');
$student2->setAge(26);
$student2->setCourse(4);
$student2->setCash(1600);

echo $student1->getName();
echo $student1->getAge();
echo $student1->getCourse();
echo $student1->getCash() . PHP_EOL;

echo $student2->getName();
echo $student2->getAge();
echo $student2->getCourse();
echo $student2->getCash() . PHP_EOL;


class Driver extends Worker
{
    private $experience;
    private $category;

    public function getExperience()
    {
        return $this->experience;
    }

    public function setExperience($experience)
    {
        $this->experience = $experience;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function setCategory($category)
    {
        $this->category = $category;
    }
}

$driver = new Driver();
$driver->setExperience(14);
$driver->setCategory('C');


echo $driver->getExperience() . PHP_EOL;
echo $driver->getCategory() . PHP_EOL;