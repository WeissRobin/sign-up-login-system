<?php

function check_login_error() {
    if (isset($_SESSION["login_errors"])) {
        $errors = $_SESSION["login_errors"];

        echo "<div class='login-alert'>
                <ul class='message-list'>";
        
        foreach ($errors as $error) {
            echo '<li class="login-error">' . htmlspecialchars($error) . '</li>';
        }
        
        echo "</ul>
            </div>";

        unset($_SESSION["login_errors"]);
    } else {
        if(isset($_GET["login"]) == "success") {
            echo "<div class='login-alert'>
                    <ul class='message-list'>
                        <li class='signup-success'>Login success! redirecting...</li>
                    </ul>
                </div>";
            $_SESSION["is_logged"] = true;
        }
        if (isset($_GET["logout"]) == "success") {
            $_SESSION["is_logged"] = false;
        }
    }
}

function is_logged() {
    if(isset($_SESSION["is_logged"]) == true) {
        header('Location: ./dashboard.php');
    }
}

?>