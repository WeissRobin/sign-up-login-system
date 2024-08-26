<?php

$dbn = 'mysql:host=localhost;dbname=lesson_php';
$dbUsername = 'root';
$dbPassword = '';

try {
    $pdo = new PDO($dbn, $dbUsername, $dbPassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

?>