<?php
/**
 * Created by PhpStorm.
 * User: BKN1402
 * Date: 14.11.2017
 * Time: 19:27
 */

class Worker
{

    public $name = '';

    public $age = '';

    public $salary = '';
}

$user1 = new Worker;
$user1->name = 'Ivan';
$user1->age = 25;
$user1->salary = 1000;

$user2 = new Worker;
$user2->name = 'Vasya';
$user2->age = 26;
$user2->salary = 2000;

echo $user1->salary + $user2->salary . PHP_EOL;
echo $user1->age + $user2->age;

?>