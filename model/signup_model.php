<?php

declare(strict_types = 1);

function get_username(object $pdo, string $username) {
    $query = "SELECT * FROM users WHERE username = ?";

    $stmt = $pdo->prepare($query);
    $stmt->execute([$username]);

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function get_email(object $pdo, string $email) {
    $query = "SELECT * FROM users WHERE email = ?";

    $stmt = $pdo->prepare($query);
    $stmt->execute([$email]);

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function set_user(object $pdo, string $username, string $password, string $email) {
    require_once "../includes/hash.inc.php";

    try {
        $query = "INSERT INTO users (username, password, email) VALUES (?, ?, ?)";

        $hashedPassword = hash_proc($password);

        $stmt = $pdo->prepare($query);
        $stmt->execute([$username, $hashedPassword, $email]);
    }
    catch (PDOException $e) {
        echo "Query failed: " . $e->getMessage();
    }
}

?>