<?php

if(isset($_GET['cod'])){
    $cod = $_GET['cod'];
    @include "../db1/config1.php";
    $conn = mysqli_connect('localhost','root','','php_app');


    $sql = "DELETE FROM `lista_turistilor` WHERE cod='$cod'  ";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "A fost sters cu succes!";
        header("location:../dashboard/vezi_turisti.php");
    }
    else{
        die(mysqli_error($conn));
    }
}


?>
