<?php
$server = "localhost:3307";
$username = "root";
$password = "";
$database = "erp";

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn){
    die("Error". mysqli_connect_error());
}

?>