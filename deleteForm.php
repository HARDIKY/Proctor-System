<?php
require_once './connect.php';
// $conn = mysqli_connect('localhost', 'root', '', 'student');

$delid = $_POST['delbtn'];


$query = "DELETE FROM studentinfo WHERE rollno = '$delid';";
    $query_run = mysqli_query($conn, $query);
    if ($query_run) {
        $query2 = "DELETE FROM familiydetail WHERE std_rollno = '$delid';";
        $query_run2 = mysqli_query($conn, $query2);
    }if ($query_run2) {
        $query3 = "DELETE FROM qualidetail WHERE std_rollno = '$delid';";
        $query_run3 = mysqli_query($conn, $query3);
    }if ($query_run3) {
        $query4 = "DELETE FROM futureplans WHERE rollno = '$delid';";
        $query_run4 = mysqli_query($conn, $query4);
        header("location:teacherHome.php?delForm=success");
    }else {
        header("location:teacherHome.php?delForm=notsuccess");
    } 
    
?>