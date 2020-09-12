<?php

    session_start();


    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $databaseName = "student"; 

    $conn = mysqli_connect($serverName, $userName, $password, $databaseName);


    $rollno = $_POST['rollno'];
    $name = $_POST['name'];
    $mobile = $_POST['phone_no'];
    $address = $_POST['address'];
    $bg = $_POST['bg'];
    $email = $_POST['email'];
    $birthdate = $_POST['bdate'];
    $monthaddm = $_POST['myad'];
    $year = $_POST['year'];
    $hobbies = $_POST['hobbies'];
    $sports = $_POST['sports'];
    $health = $_POST['health'];

    $query1 = "SELECT * FROM studentinfo WHERE rollno = '$rollno';";
    $result = mysqli_query($conn, $query1);
    $rowcount = mysqli_num_rows($result);   
    
    if($rowcount == 1) {
        header("location:form1.php?form1=notCompleted");
    }else {
        $query2 = "INSERT INTO studentinfo (std_rollno, name, mobile, address, bg, email, birthdate, monthaddm, year, hobbies, sports, health) VALUES ('$rollno', '$name', '$mobile', '$address', '$bg', '$email', '$birthdate', '$monthaddm', '$year', '$hobbies', '$sports', '$health');";
        mysqli_query($conn, $query2);
        header("location:studentHome.php?form1=completed");
    
    }
    
    

?>