<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Students</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href = "style.css">
</head>
<body>
    <div class="addContainer">
        <header class="d-flex justify-content-between my-4">
            <h1>Update Student</h1>
            <div>
                <a class = "btn btn-primary" href="index.php">Back</a>
            </div>

        </header>
        <?php
        if(isset($_GET["id"])){
            $id = $_GET["id"];
            include("dbConnection.php");

            $sql = "SELECT * FROM `students` WHERE id = $id";
            $result = mysqli_query($connection, $sql);

            $row = mysqli_fetch_array($result);
        }

        ?>
        <form action="insertProcess.php" method="post">
            <div class = "form-element my-4">
                <input type="text" class = "form-control" name = "fullname" value = "<?php echo $row["fullname"]; ?>" placeholder = "Fullname:">
            </div>
            <div class = "form-element my-4">
                <input type="text" class = "form-control" name = "position" value = "<?php echo $row["position"]; ?>" placeholder = "Position:">
            </div>
            <div class = "form-element my-4">
                <input type="text" class = "form-control" value = "<?php echo $row["salary"]; ?>" name = "salary" placeholder = "Salary:">
            </div>
            <input type="hidden" name="id" value = '<?php echo $row['id']; ?>'>
            <div class = "form-element">
                <input type="submit" class = "btn btn-success" name = "edit" value = "Update Employee">
            </div>
        </form>
        <?php

        ?>
        
        
    </div>
</body>
</html>