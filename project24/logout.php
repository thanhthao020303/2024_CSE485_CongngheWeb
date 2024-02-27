<?php
session_start();
session_regenerate_id(true); 
session_destroy();
setcookie('logged_in', "", 1, "/", true, true, "HttpOnly");
header('Location: login.php');
?>
