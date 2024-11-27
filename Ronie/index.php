<?php include('header.php'); ?>
<?php include('dbConnection.php'); ?>

        <div class="box1">
        <h2>ALL STUDENTS</h2>
        <button class="btn btn-primary"><a class = "addText" href="addStudent.php">Add Student</a></button>
        </div>
    <table class = "table table-hover table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Fullname</th>
                <th>Position</th>
                <th>Salary</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $query = "SELECT * FROM `students`";

                $result = mysqli_query($connection, $query);

                if(!$result){
                    die("Query Failed".mysqli_error());
                }
                else{

                    while($row = mysqli_fetch_assoc($result)){
                        ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['fullname']; ?></td>
                            <td><?php echo $row['positiom']; ?></td>
                            <td><?php echo $row['salary']; ?></td>

                            <td>
                                <a href="edit.php?id=<?php echo $row["id"]; ?>" class = "btn btn-warning">Update Employee</a>
                                <a href="delete.php?id=<?php echo $row["id"]; ?>" class = "btn btn-danger">Delete Employee</a>
                            </td>
                
                        </tr>
                        <?php

                    }
                }


            ?>
            
        </tbody>
     </table>

     

     

     <?php include('footer.php'); ?>
        

    