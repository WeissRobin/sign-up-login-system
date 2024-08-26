<?php

declare(strict_types=1);

function sign_up_inputs() {
    if (isset($_SESSION["signup_data"]["username"]) && !isset($_SESSION["errors"]["user_taken"])) {
        echo '<input type="text" name="username" class="form-input" placeholder="Username" value="' . $_SESSION["signup_data"]["username"] . '">';
    } else {
        echo '<input type="text" name="username" class="form-input" placeholder="Username">';
    }

    echo '<input type="password" name="password" class="form-input" placeholder="Password">';

    if (isset($_SESSION["signup_data"]["email"]) && !isset($_SESSION["errors"]["email_taken"]) && !isset($_SESSION["errors"]["email_invalid"])) {
        echo '<input type="email" name="email" class="form-input" placeholder="Email" value="' . $_SESSION["signup_data"]["email"] . '">';
    } else {
        echo '<input type="email" name="email" class="form-input" placeholder="Email">';
    }
}

function check_signup_error() {
    if (isset($_SESSION["errors"])) {
        $errors = $_SESSION["errors"];

        echo "<div class='signup-alert'>
                <ul class='message-list'>";
        
        foreach ($errors as $error) {
            echo '<li class="signup-error">' . htmlspecialchars($error) . '</li>';
        }
        
        echo "</ul>
            </div>";

        unset($_SESSION["errors"]);
        
    } else if (isset($_GET["signup"]) && $_GET["signup"] === "success") {
        echo "<div class='signup-alert'>
                <ul class='message-list'>
                    <li class='signup-success'>Signup success!</li>
                </ul>
            </div>";
    }
}

?>
