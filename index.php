<?php
    require_once "includes/config.session.inc.php";
    require_once "views/signup_view.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <title>Sign Up</title>
</head>
<body>
    <div class='form-section'>
        <div class='form-wrapper'>
            <form action="./includes/signup.inc.php" method="post" class="submit-form">
                <h2>Create Account</h2>
                <?php
                    sign_up_inputs();
                ?>
                <label for="terms">
                    <input type="checkbox" name="terms">
                    I accept terms & conditions
                </label>
                <input type="submit" value="Create Account" class="form-submit">
                <a class='acc-link' href="#">Forgot password?</a>
                <a class='acc-link' href="./login.php">Already have an account?</a>
            </form>
        </div>
        <?php
            check_signup_error();
        ?>
    </div>
    <div class='bg-logo'>
        <img width='500px' src="./assets/logo.png" alt="Logo">
        <h1>HEYGEN STUDIO</h1>
    </div>
</body>
</html>