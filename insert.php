<?php

try{
    $pdo = new PDO("mysql:host=localhost;dbname=php_app", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Nu se poate conecta. " . $e->getMessage());
}

try{

    $sql = "INSERT INTO posts (denumirea, imagine, tipul, culinara, hobby, localitate, pretul) VALUES (:denumirea, :imagine, :tipul, :culinara,:hobby, :localitate,:pretul)";
    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':denumirea', $_REQUEST['denumirea']);
    $stmt->bindParam(':imagine', $_REQUEST['imagine']);
    $stmt->bindParam(':tipul', $_REQUEST['tipul']);
    $stmt->bindParam(':culinara', $_REQUEST['culinara']);
    $stmt->bindParam(':hobby', $_REQUEST['hobby']);
    $stmt->bindParam(':localitate', $_REQUEST['localitate']);
    $stmt->bindParam(':pretul', $_REQUEST['pretul']);

    $stmt->execute();
    echo "Postarea realizata cu succes!";
} catch(PDOException $e){
    die("Eroare! N-a putut fi executat $sql. " . $e->getMessage());
}

header("Location:refresh.php");

// Close connection
unset($pdo);
?>