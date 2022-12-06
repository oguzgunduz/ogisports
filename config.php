<?php 

$server = "localhost";
$username = "root";
$password = "oguz12345";
$database = "ogisports";

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) { 
    die("<script>alert('Connection Failed.')</script>");
}

?>