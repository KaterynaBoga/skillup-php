<?php
setcookie('age', mt_rand(10, 70), time()+3*3600);
?>
<a href="readcookie.php">Узнать значение cookie</a>