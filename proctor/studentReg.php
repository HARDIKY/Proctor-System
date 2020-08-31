<?php
    session_start();
    
    
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $databaseName = "student"; 

    $conn = mysqli_connect($serverName, $userName, $password, $databaseName);
    
    
    $rollno = $_POST['rollno'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $id = "moreakshay725@gmail.com";
    $subject = "Acoount Created";
    $body = "Your account created for proctor system";

    $query1 = "SELECT * FROM register WHERE std_rollno = '$rollno';";
    $result = mysqli_query($conn, $query1);
    $rowcount = mysqli_num_rows($result);
    $msg = null;
    if($rowcount == 1) {
        header("location:student.php?signup=not");
    
    }else {
        $query2 = "INSERT INTO register (std_rollno, std_email, std_pass) VALUES ('$rollno', '$email', '$password');";
        mysqli_query($conn, $query2);
        mail($id, $subject, $body);
        header("location:student.php?signup=success");
    }



?>