<?php

session_start();
    if (!isset($_SESSION['rollnol'])) {
        header("location:student.php");
    }

$conn = mysqli_connect('localhost', 'root', '', 'student');

$val = $_SESSION['rollnol'];
$rollno = $_POST['rollno'];
$cat = $_POST['cat'];
$cet = $_POST['cet'];
$gate = $_POST['gate'];
$gre = $_POST['gre'];
$tofel = $_POST['tofel'];
$others = $_POST['others'];
$aos = $_POST['aos'];


if(isset($_POST["submit"])){
    $query1 = "INSERT INTO futureplans (std_rollno, cat, cet, gate, gre, tofel, others, aos) VALUES ('$val', '$cat', '$cet', '$gate', '$gre', '$tofel', '$others', '$aos');";
    mysqli_query($conn, $query1);
    header("location:form5.php?form4=completed");
}else {
    header("location:form4.php?form4=notsuccess");
}   



?>