<?php
include ("dbConnection.php");

if(isset($_POST["create"])){
    $fullname = $_POST["fullname"];
    $position = $_POST["position"];
    $salary = $_POST["salary"];

    if($firstname == "" || empty($firstname)){
        header('location:index.php?message=You need to fill in the first name!');
    }
    else{
        $query= "INSERT INTO students (fullname,positoion,salary) values('$fullname','$position', '$salary')";

        $result= mysqli_query($connection, $query);

        if(!$result){
            die("query failed".mysqli_error());
        }
        else{
            echo"Add Successfully!";
        }

    }
}

if(isset($_POST["edit"])){
    $fullname = $_POST["fullname"];
    $position = $_POST["position"];
    $salary = $_POST["salary"];
    $id = $_POST["id"];

    if($fullname == "" || empty($fullname)){
        header('location:index.php?message=You need to fill in the fullname!');
    }
    else{
        $query= "UPDATE students set fullname = '$fullname', position = '$position', salary = '$salary' WHERE id = $id";

        $result= mysqli_query($connection, $query);

        if(!$result){
            die("Query failed".mysqli_error());
        }
        else{
            echo"Update Successfully!";
        }

    }
}


?>