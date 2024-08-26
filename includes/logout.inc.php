<?php

$_SESSION['is_logged'] = false;
session_destroy();
session_unset();
header('Location: ../login.php?logout=success');

?>