<?php

    $sqrt = sqrt (1000);
	$arr = [$sqrt, floor($sqrt), ceil($sqrt)];
	echo $sqrt. PHP_EOL;
    echo floor($sqrt) . PHP_EOL;
    echo ceil($sqrt) . PHP_EOL;

    $a = 10;
    $b = 3;
    echo $a % $b . PHP_EOL;

    $arr = [4, 2, 5, 19, 13, 0, 10];
    $sum = [];



    $arr = [4, -2, 5, 19, -130, 0, 10];
    echo max($arr) . PHP_EOL;
    echo min($arr) . PHP_EOL;

    $str = "html css php";
    $res_str = explode(' ', $str);
    print_r($res_str);

    $arr = ['a', 'b', 'c', 'd', 'e'];
    $arr = array_map('strtoupper', $arr);
    var_dump($arr);

    $arr = [1, 2, 3, 4, 5];
    $result = array_slice($arr, 1, 3);
    var_dump($result);

    $arr = [1, 2, 3, 4, 5];
    array_splice($arr, 1, 2);
    var_dump($arr);

    $arr = [1, 2, 3, 4, 5];
    array_splice($arr, 3, 0, ['a', 'b', 'c']);
    var_dump($arr);

    $arr = [2, 4, 6, 8, 5, -7];
    $result = array_sum($arr)/count($arr);
    echo $result . PHP_EOL;

    $arr = range(1, 100);
    $result = array_sum($arr);
    var_dump($result);

    $arr = range(1, 100);
    $str = implode('<br>', $arr);
    echo $str . PHP_EOL;

    $arr = array_fill(0, 10, 'x');
    var_dump($arr);

    $arr = range(1, 10);
    shuffle($arr);
    var_dump($arr);

    $arr = range(1, 5);
    $result = array_product($arr);
    var_dump($result);

    $str = 96;
    $arr = str_split($str, 2);
    $sum = array_sum($arr);
    var_dump($sum);

    $str = 'olleh';
    $str = strrev($str);
    $str = ucfirst($str);
    $str = strrev($str);
    echo $str . PHP_EOL;

    $arr = [9, 16, 4];
    $result = array_map('sqrt', $arr);
    var_dump($result);

    $keys = range ('a', 'z');
    $elem = range(1, 26);
    $arr = array_combine($keys, $elem);
    var_dump($arr);

    $str = 1234567890;
    $arr = str_split($str, 2);
    $sum = array_sum($arr);
    echo $sum;
