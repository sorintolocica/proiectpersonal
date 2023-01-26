<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "php_app";

$sql = mysqli_connect($host, $username, $password, $database) or die ('Nu se poate conecta');

$idclient = $_GET['idclient'];

$result = mysqli_query($sql, "DELETE FROM users WHERE idclient=$idclient");

if ($result) {
    echo "Userul a fost sters!";
} else {
    echo "Userul n-a putut fi sters.";
}

header("Location: users.php");

?>