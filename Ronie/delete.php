<?php

if(isset($_GET['id'])){
    $id = $_GET['id'];
    include("dbConnection.php");

    $sql = "DELETE FROM students WHERE id = $id";

    if(mysqli_query($connection, $sql)){
        echo "Successfully Deleted Students!";
    }
    else{
        die("Not Delete Students Something Wrong!!");
    }
}

?>