<?php
error_reporting(E_ALL);
ini_set('display_errors', true);

include 'lib.php';
include  'User.php';
include  'PremiumUser.php';

$user = new PremiumUser('Test');
$user->firstName = 'Petya';


$errors=[];

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $errors = $user->processRequest($_POST);

    if (!$errors) {
        saveUser2($user);

        header('Location: /sucsess.html');
        exit();
    }
}

include 'form.php';