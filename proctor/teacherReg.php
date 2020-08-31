<?php
    session_start();
    header("location:teacher.php");
    
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $databaseName = "student";

    $conn = mysqli_connect($serverName, $userName, $password, $databaseName);
    
    
    $t_name = $_POST['t_name'];
    $t_email = $_POST['t_email'];
    $t_password = $_POST['t_password'];

    $query1 = "SELECT * FROM teacher WHERE t_email = '$t_email';";
    $result = mysqli_query($conn, $query1);
    $rowcount = mysqli_num_rows($result);
    $msg = null;
    if($rowcount == 1) {
    echo 'user already registered';
        
    }else {
        $query2 = "INSERT INTO teacher (t_name, t_email, t_pass) VALUES ('$t_name', '$t_email', '$t_password');";
        mysqli_query($conn, $query2);
    }



?>