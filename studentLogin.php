<?php
        
    session_start();
    // $conn = mysqli_connect('localhost', 'root', '', 'student');
    require_once './connect.php';
    
    $rollnol = $_POST['rollnol'];
    $name = $_POST['name'];
    $passwordl = $_POST['passwordl'];
    $query1 = "SELECT * FROM register WHERE std_rollno = '$rollnol' AND std_pass = '$passwordl';";
    $result = mysqli_query($conn, $query1);
    $rowcount = mysqli_num_rows($result);
    
    if($rowcount == 1) {
        $_SESSION['rollnol'] = $rollnol;
        $_SESSION['name'] = $name;
        header("location:studentHome.php");
    }else {
        header("location:index.php?login=wrongInfo");
    }

?>
