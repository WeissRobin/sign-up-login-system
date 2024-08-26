<?php
    require_once "includes/config.session.inc.php";
    require_once "./views/login_view.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <title>Login</title>
</head>
<body>
    <div class='form-section'>
        <div class='form-wrapper'>
            <form action="./includes/login.inc.php" method="post" class="submit-form">
                <h2>Login</h2>
                <input type="text" name="username" class="form-input" placeholder="Username">
                <input type="password" name="password" class="form-input" placeholder="Password">
                <label for="remember">
                    <input type="checkbox" name="terms">
                    Remember me
                </label>
                <input type="submit" value="Login" class="form-submit">
                <a class='acc-link' href="./index.php">Doesn't have an account?</a>
            </form>
            <?php
    	        check_login_error();
                is_logged();
            ?>
        </div>
    </div>
    <div class='bg-logo'>
        <img width='500px' src="./assets/logo.png" alt="Logo">
        <h1>HEYGEN STUDIO</h1>
    </div>
</body>
</html>