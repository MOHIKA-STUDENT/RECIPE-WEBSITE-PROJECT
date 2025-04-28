<?php
session_start();
if (isset($_SESSION['user_session'])) {
    header("Sign up.php");
}
session_start();
session_unset();
session_destroy();
header('Location: Sign up.php');
?>