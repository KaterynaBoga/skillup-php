<?php
include 'Worker.php';

$pdo = new PDO('mysql:host=localhost;dbname=skillup;charset=utf8','root','');

/**$sql = 'SELECT * FROM workers WHERE id = :id'; */
/**$sql = 'SELECT * FROM workers WHERE salary = :salary'; */
$sql = 'SELECT * FROM workers WHERE age = :age';

/** @var @PDOStatement $result */
$result = $pdo->prepare($sql);

/**$result->execute(['id' => 3]); */
/**$result->execute(['salary' => 1000]); */
$result->execute(['age' => 23]);

while ($row = $result->fetchObject(Worker::class)) {
    var_dump($row);
}
