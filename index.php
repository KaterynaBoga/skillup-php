<?php
include 'Worker.php';

error_reporting(E_ALL);
ini_set('display_errors', true);

   /*     function bd ($pdo){
        $sql = 'SELECT * FROM workers';
        $result=$pdo->prepare($sql);
        $result->execute();
        return $result;
        }
    */
$pdo = new PDO('mysql:host=localhost;dbname=skillup;charset=utf8','root','');
        echo 'Выбрать работника с id = 3';
        $sql = 'SELECT * FROM workers WHERE id = :id';
        $result = $pdo->prepare($sql);
        $result->execute(['id' => 3]);
        while ($row = $result->fetchObject(Worker::class)) {
            var_dump($row);
        }

        echo ' Выбрать работников с зарплатой 1000$';
        $sql = 'SELECT * FROM workers WHERE salary = :salary';
        $result = $pdo->prepare($sql);
        $result->execute(['salary' => 1000]);
        while ($row = $result->fetchObject(Worker::class)) {
        var_dump($row);
        }

        echo 'Выбрать работников в возрасте 23 года';
        $sql = 'SELECT * FROM workers WHERE age = :age';
        $result = $pdo->prepare($sql);
        $result->execute(['age' => 23]);
        while ($row = $result->fetchObject(Worker::class)) {
            var_dump($row);
        }

        echo 'Выбрать работников с зарплатой более 400$.';
        $sql = 'SELECT * FROM workers WHERE salary > :salary';
        $result = $pdo->prepare($sql);
        $result->execute(['salary' => 400]);
        while ($row = $result->fetchObject(Worker::class)) {
            var_dump($row);
        }

        echo 'Выбрать работников с зарплатой равной или большей 500$';
        $sql = 'SELECT * FROM workers WHERE salary >= :salary';
        $result = $pdo->prepare($sql);
        $result->execute(['salary' => 500]);
        while ($row = $result->fetchObject(Worker::class)) {
            var_dump($row);
        }

        echo 'Выбрать работников с зарплатой НЕ равной 500$';
        $sql = 'SELECT * FROM workers WHERE salary <> :salary';
        $result = $pdo->prepare($sql);
        $result->execute(['salary' => 500]);
        while ($row = $result->fetchObject(Worker::class)) {
            var_dump($row);
        }

        echo 'Выбрать работников с зарплатой равной или меньшей 900$';
        $sql = 'SELECT * FROM workers WHERE salary <= :salary';
        $result = $pdo->prepare($sql);
        $result->execute(['salary' => 900]);
        while ($row = $result->fetchObject(Worker::class)) {
            var_dump($row);
        }

        echo 'Узнайте зарплату и возраст Васи';
        $sql = 'SELECT id, name, age, salary FROM workers WHERE name = :name';
        $result = $pdo->prepare($sql);
        $result->execute(['name' => 'Vasya']);
        while ($row = $result->fetchObject(Worker::class)) {
            var_dump($row);
        }

        echo 'Выбрать работников в возрасте от 25 (не включительно) до 28 лет (включительно)';
        $sql = 'SELECT * FROM workers WHERE age > :age1 AND age <= :age2';
        $result = $pdo->prepare($sql);
        $result->execute(['age1' => 25, 'age2' => 28]);
        while ($row = $result->fetchObject(Worker::class)) {
            var_dump($row);
        }

        echo 'Выбрать работника Петю';
        $sql = 'SELECT * FROM workers WHERE name = :name';
        $result = $pdo->prepare($sql);
        $result->execute(['name' => 'Petya']);
        while ($row = $result->fetchObject(Worker::class)) {
            var_dump($row);
        }
        echo 'Выбрать работников Петю и Васю';
        $sql = 'SELECT * FROM workers WHERE name = :name1 OR name = :name2';
        $result = $pdo->prepare($sql);
        $result->execute(['name1' => 'Petya', 'name2' => 'Vasya']);
        while ($row = $result->fetchObject(Worker::class)) {
            var_dump($row);
        }

        echo 'Выбрать всех, кроме работника Петя';
        $sql = 'SELECT * FROM workers WHERE name != :name';
        $result = $pdo->prepare($sql);
        $result->execute(['name' => 'Petya']);
        while ($row = $result->fetchObject(Worker::class)) {
            var_dump($row);
        }

        echo 'Выбрать всех работников в возрасте 27 лет или с зарплатой 1000$';
        $sql = 'SELECT * FROM workers WHERE age = :age OR salary = :salary';
        $result = $pdo->prepare($sql);
        $result->execute(['age' => 27, 'salary' => 1000]);
        while ($row = $result->fetchObject(Worker::class)) {
            var_dump($row);
        }


        echo 'Выбрать всех работников в возрасте от 23 лет (включительно) до 27 лет (не включительно) или с зарплатой 1000$';
        $sql = 'SELECT * FROM workers WHERE (age >= :age1 AND age < :age2) OR salary = :salary';
        $result = $pdo->prepare($sql);
        $result->execute(['age1' => 23, 'age2' => 27, 'salary' => 1000]);
        while ($row = $result->fetchObject(Worker::class)) {
            var_dump($row);
        }

        echo 'Выбрать всех работников в возрасте от 23 лет до 27 лет или с зарплатой от 400$ до 1000$';
        $sql = 'SELECT * FROM workers WHERE (age > :age1 AND age < :age2) OR (salary > :salary1 AND salary < :salary2)';
        $result = $pdo->prepare($sql);
        $result->execute(['age1' => 23, 'age2' => 27, 'salary1' => 400, 'salary2' => 1000]);
        while ($row = $result->fetchObject(Worker::class)) {
            var_dump($row);
        }

        echo 'Выбрать всех работников в возрасте 27 лет или с зарплатой не равной 400$';
        $sql = 'SELECT * FROM workers WHERE age =:age OR salary != :salary';
        $result = $pdo->prepare($sql);
        $result->execute(['age' => 27, 'salary' => 400]);
        while ($row = $result->fetchObject(Worker::class)) {
            var_dump($row);
        }

/*        echo 'Добавьте нового работника Никиту, 26 лет, зарплата 300$';
        $sql = 'INSERT INTO workers SET name = :name, age =:age, salary = :salary';
        $result = $pdo->prepare($sql);
        $result->execute(['name' => 'Nikita', 'age' => 26, 'salary' => 300]);
        $result = bd($pdo);
        while ($row = $result->fetchObject(Worker::class)) {
            var_dump($row);
        }

        echo 'Добавьте нового работника Светлану с зарплатой 1200$';
        $sql = 'INSERT INTO workers (name, age, salary) VALUES (:name, :age, :salary)';
        $result = $pdo->prepare($sql);
        $result->execute(['name' => 'Светлана', 'age' => 22, 'salary' => 1200]);
        $result = bd($pdo);
        while ($row = $result->fetchObject(Worker::class)) {
            var_dump($row);
        }

        echo 'Добавьте двух новых работников одним запросом: Ярослава с зарплатой 1200$ и возрастом 30, Петра с зарплатой 1000$ и возрастом 31';
        $sql = 'INSERT INTO workers (name, age, salary) VALUES (:name1, :age1, :salary1), VALUES (:name2, :age2, :salary2)';
        $result = $pdo->prepare($sql);
        $result->execute(['name1' => 'Ярослава', 'age1' => 30, 'salary1' => 1200, 'name2' => 'Petya', 'age2' => 31, 'salary2' => 1000]);
        $result = bd($pdo);
        while ($row = $result->fetchObject(Worker::class)) {
            var_dump($row);
        }

        echo 'Удалите работника с id=7';
        $sql = 'DELETE FROM workers WHERE id = :id';
        $result = $pdo->prepare($sql);
        $result->execute(['id' => 7]);
        $result = bd($pdo);
        while ($row = $result->fetchObject(Worker::class)) {
            var_dump($row);
        }

        echo 'Удалите Колю';
        $sql = 'DELETE FROM workers WHERE name = :name';
        $result = $pdo->prepare($sql);
        $result->execute(['name' => 'Kolya']);
        $result = bd($pdo);
        while ($row = $result->fetchObject(Worker::class)) {
            var_dump($row);
        }

        echo 'Удалите всех работников, у которых возраст 23 года';
        $sql = 'DELETE FROM workers WHERE age = :age';
        $result = $pdo->prepare($sql);
        $result->execute(['age' => 23]);
        $result = bd($pdo);
        while ($row = $result->fetchObject(Worker::class)) {
            var_dump($row);
        }

        echo 'Поставьте Васе зарплату в 200$.';
        $sql = 'UPDATE workers SET salary = :salary  WHERE name = :name';
        $result = $pdo->prepare($sql);
        $result->execute(['salary' => 200, 'name' => 'Vasya']);
        $result = bd($pdo);
        while ($row = $result->fetchObject(Worker::class)) {
            var_dump($row);
        }
*/

        echo 'Работнику с id=4 поставьте возраст 35 лет.';
        $sql = 'UPDATE workers SET age = :age  WHERE id = :id';
        $result = $pdo->prepare($sql);
        $result->execute(['age' => 35, 'id' => 4]);
        while ($row = $result->fetchObject(Worker::class)) {
            var_dump($row);
        }

        echo 'Всем, у кого зарплата 500$ сделайте ее 700$.';
        $sql = 'UPDATE workers SET salary = :salary700  WHERE salary = :salary500';
        $result = $pdo->prepare($sql);
        $result->execute(['salary700' => 700, 'salary500' => 500]);
        while ($row = $result->fetchObject(Worker::class)) {
            var_dump($row);
        }

        echo 'Работникам с id больше 2 и меньше 5 включительно поставьте возраст 23';
        $sql = 'UPDATE workers SET age = :age WHERE id > :id1 AND id <= :id2';
        $result = $pdo->prepare($sql);
        $result->execute(['age' => 23, 'id1' => 2, 'id2' => 5]);
        while ($row = $result->fetchObject(Worker::class)) {
            var_dump($row);
        }

        echo 'Поменяйте Васю на Женю и прибавьте ему зарплату до 900$';
        $sql = 'UPDATE workers SET name = :name, salary = :salary WHERE name = :name1';
        $result = $pdo->prepare($sql);
        $result->execute(['name' => 'Evgen', 'salary' => 900, 'name' => 'Vasya']);
        while ($row = $result->fetchObject(Worker::class)) {
            var_dump($row);
        }