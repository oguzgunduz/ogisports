<?php

$sname= "localhost";
$unmae= "root";
$password = "oguz12345";

$db_name = "ogisports";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Bağlantı hatası!";
}