<?php
    session_start();
    
    
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $databaseName = "student"; 

    $conn = mysqli_connect($serverName, $userName, $password, $databaseName);
    
    
    $rollno = $_POST['rollno'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];    
    

    $query1 = "SELECT * FROM register WHERE std_rollno = '$rollno';";
    $result = mysqli_query($conn, $query1);
    $rowcount = mysqli_num_rows($result);   
    
    if($rowcount == 1) {
        header("location:student.php?signup=not");
    
    }else {
        $query2 = "INSERT INTO register (std_rollno, std_name, std_email, std_pass) VALUES ('$rollno', '$name', '$email', '$password');";
        mysqli_query($conn, $query2);
        header("location:student.php?signup=success");
    }



?>