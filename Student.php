<?php
/**
 * Created by PhpStorm.
 * User: BKN1402
 * Date: 14.11.2017
 * Time: 23:56
 */

class Student extends User
{
    private $scholarship = 0;
    private $course = 0;

    public function getScholarship()
    {
        return $this->scholarship;
    }

    public function setScholarship($scholarship)
    {
        $this->scholarship = $scholarship;
    }

    public function getCourse()
    {
        return $this->course;
    }

    public function setCourse($course)
    {
        $this->course = $course;
    }
}

$student1 = new Student();
$student1->setScholarship('2500');
$student1->setCourse(5);


$student2 = new Student();
$student2->setScholarship('2700');
$student2->setCourse(6);

