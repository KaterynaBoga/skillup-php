<?php

if(!empty($_REQUEST['email'])) {
    session_start(); //стартуем сессию
    $_SESSION['email'] = $_REQUEST['email'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        label {
            display: block;
            margin: 15px;
        }
    </style>

</head>
<body>
Введите Ваш e-mail
<form method="post">

    <label>
        E-mail
        <input type="email" name="email">
    </label>

    <button type="submit">Login</button>
</form>
</body>
</html>
