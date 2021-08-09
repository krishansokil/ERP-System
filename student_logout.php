<?php
session_start();

session_unset();
session_destroy();

header("location: student_login.php");
exit;
?>