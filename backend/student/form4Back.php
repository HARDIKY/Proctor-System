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

if(isset($_POST["submit"])) {
    $query1 = "SELECT * FROM futureplans WHERE std_rollno = '$val';";
    $result = mysqli_query($conn, $query1);
    $rowcount = mysqli_num_rows($result);   
}
if($rowcount == 1) {
    $query2 = "UPDATE futureplans SET std_rollno = '$val', cat = '$cat', cet = '$cet', gate = '$gate', gre = '$gre', tofel = '$tofel', others = '$others', aos = '$aos' WHERE std_rollno = '$val';";
    mysqli_query($conn, $query2);
    header("location:studentHome.php?form4=completed");
}else {
    $query3 = "INSERT INTO futureplans (std_rollno, cat, cet, gate, gre, tofel, others, aos) VALUES ('$val', '$cat', '$cet', '$gate', '$gre', '$tofel', '$others', '$aos');";
    mysqli_query($conn, $query3);
    header("location:studentHome.php?form4=completed");
}   



?>