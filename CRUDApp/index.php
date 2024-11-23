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
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Age</th>
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
                            <td><?php echo $row['first_name']; ?></td>
                            <td><?php echo $row['last_name']; ?></td>
                            <td><?php echo $row['age']; ?></td>

                            <td>
                                <a href="edit.php?id=<?php echo $row["id"]; ?>" class = "btn btn-warning">Edit</a>
                                <a href="delete.php?id=<?php echo $row["id"]; ?>" class = "btn btn-danger">Delete</a>
                            </td>
                
                        </tr>
                        <?php

                    }
                }


            ?>
            
        </tbody>
     </table>

     

     

     <?php include('footer.php'); ?>
        

    