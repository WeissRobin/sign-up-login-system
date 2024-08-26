<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];

    try {
        require_once "./dbc.inc.php";
        require_once "../controllers/signup_controller.php";
        require_once "../model/signup_model.php";

        $errors = [];

        if(is_input_empty($username, $password, $email)) {
            $errors["input_empty"] = "Fill up all the fields!";
        }
        if(is_username_taken($pdo, $username)) {
            $errors["user_taken"] = "Username already taken!";
        }
        if(is_email_valid($email)) {
            $errors["email_invalid"] = "Email is not valid!";
        }
        if(is_email_taken($pdo, $email)) {
            $errors["email_taken"] = "Email is already taken!";
        }

        require_once "./config.session.inc.php";

        if($errors) {
            $_SESSION["errors"] = $errors;

            $signup_data = [
                'username' => $username,
                'email' => $email,
            ];

            $_SESSION["signup_data"] = $signup_data;
            
            header("Location: ../index.php");
            die();
        }

        create_user($pdo, $username, $password, $email);

        header("Location: ../index.php?signup=success");
        die();
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
} else {
    header("Location: ../index.php");
    die();
}

?>