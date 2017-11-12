<?php

define('USERS_FILE', __DIR__ . '/subscribers.txt.');

function processRequest(array $user) {
    foreach ( $user as $field => $value) {
        $user[$field] = isset($_POST[$field]) ? $_POST[$field] : '';
    }
    return $user;
}

function validateUser(array $user) {
    $errors = [];
    if (!$user['email']) {
        $errors[] = 'Введите email!';
    }
    return $errors;
}

function saveUser(array $user) {
    if (file_exists(USERS_FILE)) {
        $existing_users = file_get_contents(USERS_FILE);
    } else {
        $existing_users = '';
    }
    $user_info = implode("\t", $user);
    $existing_users .= $user_info . PHP_EOL;
    file_put_contents(USERS_FILE, $existing_users);
}

function saveUser2(array $user) {
    $file = fopen(USERS_FILE, 'a');
    $user_info = implode("\t", $user) . PHP_EOL;
    fputs($file, $user_info);
    fclose($file);
}