<?php

    $time = strtotime ('tomorrow');
    $time = strtotime('+2 day - 1 hour', $time);

    //echo $time . '<br>';

    echo date('d.m.Y H:i:s',  $time);