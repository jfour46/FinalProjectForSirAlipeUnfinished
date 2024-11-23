<?php
include ("dbConnection.php");

if(isset($_POST["create"])){
    $firstname = $_POST["firstName"];
    $lastname = $_POST["lastName"];
    $age = $_POST["age"];

    if($firstname == "" || empty($firstname)){
        header('location:index.php?message=You need to fill in the first name!');
    }
    else{
        $query= "INSERT INTO students (first_name,last_name,age) values('$firstname','$lastname', '$age')";

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
    $firstname = $_POST["firstName"];
    $lastname = $_POST["lastName"];
    $age = $_POST["age"];
    $id = $_POST["id"];

    if($firstname == "" || empty($firstname)){
        header('location:index.php?message=You need to fill in the first name!');
    }
    else{
        $query= "UPDATE students set first_name = '$firstname', last_name = '$lastname', age = '$age' WHERE id = $id";

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