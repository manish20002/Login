<?php 
$server = "127.0.0.1:3325";
$username = "root";
$password = "";
$database = "reg1";

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn){
    die("Error". mysqli_connect_error());
}

?>