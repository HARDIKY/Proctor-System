<?php

$conn = mysqli_connect('localhost', 'root', '', 'student');

$delid = $_POST['delbtn'];


$query = "DELETE FROM studentinfo WHERE std_rollno = '$delid';";
    $query_run = mysqli_query($conn, $query);
    if ($query_run) {
        header("location:teacherHome.php?delForm=success");
    }else {
        header("location:teacherHome.php?delForm=notsuccess");
    } 



?>