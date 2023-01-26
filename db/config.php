<?php
//Conexiunea baza de date

$host = "localhost";
$username = "root";
$password = "";
$database = "php_app";

$sql = mysqli_connect($host, $username, $password, $database) or die ('Nu se poate conecta');
?>

