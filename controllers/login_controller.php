<?php

declare(strict_types = 1);

require_once '../model/login_model.php';

function is_input_empty(string $username, string $password) {
    if (empty($username) || empty($password)) {
        return true;
    }
    return false;
}

function is_username_wrong(bool|array $result) {
    if (!$result) {
        return true;
    }
    return false;
}

function is_password_wrong($password, $hashedPassword) {
    if(!password_verify($password, $hashedPassword)) {
        return true;
    }
    return false;
}

?>