<?php
    session_start();
    // $conn = mysqli_connect('localhost', 'root', '', 'student');
    require_once './connect.php';

    $t_emaill = $_POST['t_emaill'];
    $t_namel = $_POST['t_namel'];
    $t_passwordl = $_POST['t_passwordl'];
    $query1 = "SELECT * FROM teacher WHERE t_email = '$t_emaill' AND t_pass = '$t_passwordl';";
    $result = mysqli_query($conn, $query1);
    $rowcount = mysqli_num_rows($result);
    
    if($rowcount == 1) {
        $_SESSION['t_emaill'] = $t_emaill;
        $_SESSION['t_namel'] = $t_namel;
        header("location:teacherHome.php");
    }else {
        header("location:teacher.php?login=wrongInfo");
    }

?>
