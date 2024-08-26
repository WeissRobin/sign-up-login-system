<?php

function is_user_logged() {
    if($_SESSION["is_logged"] == true) {
        echo "Hello, " . $_SESSION["username"] . "!";
    } else {
        header('Location: ./login.php');
    }
}

?>