<?php
    session_start();
    require_once './connect.php';
    
    
    $t_name = $_POST['t_name'];
    $t_email = $_POST['t_email'];
    $t_password = $_POST['t_password'];

    $query1 = "SELECT * FROM teacher WHERE t_email = '$t_email';";
    $result = mysqli_query($conn, $query1);
    $rowcount = mysqli_num_rows($result);
    $msg = null;
    if($rowcount == 1) {
        header("location:teacher.php?signup=not");
    }else {
        $query2 = "INSERT INTO teacher (t_name, t_email, t_pass) VALUES ('$t_name', '$t_email', '$t_password');";
        mysqli_query($conn, $query2);
        header("location:teacher.php?signup=success");
    }



?>