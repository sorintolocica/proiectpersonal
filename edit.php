<?php

// Connect to the database
$db = mysqli_connect('localhost', 'root', '', 'php_app');

// Check if the form has been submitted
if (isset($_POST['submit'])) {
    // Get the field values from the form
    $id = mysqli_real_escape_string($db, $_POST['id']);
    $denumirea = mysqli_real_escape_string($db, $_POST['denumirea']);
    $imagine = mysqli_real_escape_string($db, $_POST['imagine']);
    $tipul = mysqli_real_escape_string($db, $_POST['tipul']);
    $culinara = mysqli_real_escape_string($db, $_POST['culinara']);
    $hobby = mysqli_real_escape_string($db, $_POST['hobby']);
    $localitate = mysqli_real_escape_string($db, $_POST['localitate']);
    $pretul = mysqli_real_escape_string($db, $_POST['pretul']);

    // Construct the UPDATE statement
    $query = "UPDATE posts SET denumirea='$denumirea', imagine='$imagine', tipul='$tipul', culinara='$culinara', hobby='$hobby', localitate='$localitate', pretul='$pretul' WHERE id='$id'";

    // Execute the UPDATE statement
    mysqli_query($db, $query);

    if ($query) {
        echo "Update realizat!";
    } else {
        echo "Nu s-a putut efectua update";
    }
}

header("Location: refresh.php");

?>
