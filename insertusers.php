<?php

try{
    $pdo = new PDO("mysql:host=localhost;dbname=php_app", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Nu se poate conecta. " . $e->getMessage());
}

try{

    $sql = "INSERT INTO users (client, imageclient, status, locurivizitate, parerea) VALUES (:client, :imageclient, :status, :locurivizitate, :parerea)";
    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':client', $_REQUEST['client']);
    $stmt->bindParam(':imageclient', $_REQUEST['imageclient']);
    $stmt->bindParam(':status', $_REQUEST['status']);
    $stmt->bindParam(':locurivizitate', $_REQUEST['locurivizitate']);
    $stmt->bindParam(':parerea', $_REQUEST['parerea']);

    $stmt->execute();
    echo "Postarea realizata cu succes!";
} catch(PDOException $e){
    die("Eroare! N-a putut fi executat $sql. " . $e->getMessage());
}

header("Location:users.php");

// Close connection
unset($pdo);
?>