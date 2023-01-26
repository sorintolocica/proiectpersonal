<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "php_app";

$sql = mysqli_connect($host, $username, $password, $database) or die ('Nu se poate conecta');

$id = $_GET['id'];

$result = mysqli_query($sql, "DELETE FROM posts WHERE id=$id");

if ($result) {
    echo "Postarea a fost stearsa cu succes!";
} else {
    echo "Postarea n-a putut fi stearsa.";
}

header("Location: refresh.php");

?>