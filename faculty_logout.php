<?php
session_start();

session_unset();
session_destroy();

header("location: faculty_login.php");
exit;
?>