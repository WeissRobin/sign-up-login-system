<?php

declare(strict_types = 1);

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $remember = $_POST["remember"];

    try {
        require_once '../includes/dbc.inc.php';
        require_once '../controllers/login_controller.php';
        require_once '../model/login_model.php';

        $errors = [];
        $result = get_user($pdo, $username);

        if(is_input_empty($username, $password)) {
            $errors['input_empty'] = 'Fill up all the fields!';
        }
        if(is_username_wrong($result)) {
            $errors['username_wrong'] = 'Incorrect Login info!';
        }
        if(!is_username_wrong($result) && is_password_wrong($password, $result["password"])) {
            $errors['username_wrong'] = 'Incorrect Login info!';
        }

        require_once '../includes/config.session.inc.php';

        if($errors) {
            $_SESSION["login_errors"] = $errors;

            header('Location: ../login.php');
            die();
        }

        $_SESSION["username"] = $username;
        $_SESSION["is_logged"] = true;
        
        header('Location: ../login.php?login=success');
        die();

    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
} else {
    header("Location: ../login.php");
    die();
}

?>