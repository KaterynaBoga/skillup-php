<?php

$str = 'fgn <ghmv>  h. m km.v jn. <vhjk.> admin@g-mail.com.ua  general@gmail.com chj,vjhk,  ghkmhj, xfhjvhjdtyjcuv  cfhyjcg hm ';
$res = preg_match_all('/[\w-\.]+@[\w-]+(\.[\w-]+)+/m', $str, $match);

echo $res ? 'Найдено' : 'Не найдено';
var_dump($match);

$replaced = preg_replace('/(\.[\w-]+)+/', '.info', $str);
echo $replaced . PHP_EOL;

$replaced = preg_replace('/<(.*)>/iuU', '($1)', $str);
echo $replaced;