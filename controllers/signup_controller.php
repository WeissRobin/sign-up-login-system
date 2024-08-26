<?php

declare(strict_types = 1);
require_once "../model/signup_model.php";

function is_input_empty(string $username, string $password, string $email) {
    if (empty($username) || empty($password) || empty($email)) {
        return true;
    }
    return false;
}

function is_username_taken(object $pdo, string $username) {
    if (get_username($pdo, $username)) {
        return true;
    }
    return false;
}

function is_email_valid(string $email) {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    }
    return false;
}

function is_email_taken(object $pdo, string $username) {
    if (get_email($pdo, $username)) {
        return true;
    }
    return false;
}

function create_user(object $pdo, string $username, string $password, string $email) {
    set_user($pdo, $username, $password, $email);
}

?>