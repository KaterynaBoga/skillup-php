<?php

if (!isset($_COOKIE['Ind_Counter'])) $_COOKIE['Ind_Counter'] = 0;
    $_COOKIE['Ind_Counter']++;
    SetCookie('Ind_Counter', $_COOKIE['Ind_Counter'], 0x6FFFFFFF);
    echo "Вы посетили сайт - " . $_COOKIE['Ind_Counter'] . ' раз ';
