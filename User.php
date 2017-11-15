<?php
/**
 * Created by PhpStorm.
 * User: BKN1402
 * Date: 14.11.2017
 * Time: 19:27
 */
include 'Worker.php';
include 'Student.php';

class User
{

    protected $name = '';

    protected $age = 0;

    public function getName()
    {
        return $this->age;
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

