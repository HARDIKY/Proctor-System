<?php

    session_start();

    $conn = mysqli_connect('localhost', 'root', '', 'student');

    
    $rollno = $_POST['rollno'];
    $name = $_POST['name'];
    $mobile = $_POST['phone_no'];
    $dept = $_POST['dept'];
    $currentyear = $_POST['currentyear'];
    $address = $_POST['address'];
    $bg = $_POST['bg'];
    $email = $_POST['email'];
    $birthdate = $_POST['bdate'];
    $monthaddm = $_POST['myad'];
    $year = $_POST['year'];
    $hobbies = $_POST['hobbies'];
    $sports = $_POST['sports'];
    $health = $_POST['health'];

    if(isset($_POST["submit"])) {
        $query1 = "SELECT * FROM studentinfo WHERE std_rollno = '$rollno';";
        $result = mysqli_query($conn, $query1);
        $rowcount = mysqli_num_rows($result);   
    }
    if($rowcount == 1) {
        $query2 = "UPDATE studentinfo SET std_rollno = '$rollno', name = '$name', mobile = '$mobile', dept = '$dept', currentyear = '$currentyear', address = '$address', bg = '$bg', email = '$email', birthdate = '$birthdate', monthaddm = '$monthaddm', year = '$year', hobbies = '$hobbies', sports = '$sports', health = '$health' WHERE std_rollno = '$rollno';";
        $result = mysqli_query($conn, $query2);
        header("location:studentHome.php?form1=completed");
    }else {
        $query3 = "INSERT INTO studentinfo (std_rollno, name, mobile, dept, currentyear, address, bg, email, birthdate, monthaddm, year, hobbies, sports, health) VALUES ('$rollno', '$name', '$mobile', '$dept', '$currentyear', '$address', '$bg', '$email', '$birthdate', '$monthaddm', '$year', '$hobbies', '$sports', '$health');";
        mysqli_query($conn, $query3);
        header("location:studentHome.php?form1=completed");
    }
    
    

?>