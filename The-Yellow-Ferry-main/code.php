<?php
session_start();

    require 'dbcon.php';

    if(isset($_POST['save'])){
        $name = mysqli_real_escape_string($con, $_POST['name']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $number = mysqli_real_escape_string($con, $_POST['number']);
        $address = mysqli_real_escape_string($con, $_POST['address']);

        $query = "INSERT INTO students (name,email,number,address) VALUES 
            ('$name','$email','$number','$address')";

        $query_run = mysqli_query($con, $query);


        if($query_run){
            $_SESSION['message'] = "Student Added Succesfully";
            header("Location: student-create.php");
            exit(0);
        }
        else{
            $_SESSION['message'] = "Student Not Added Succesfully";
            header("Location: student-create.php");
            exit(0);
        }
        
    }
?>