<?php

    session_start();
    if (!isset($_SESSION['rollnol'])) {
        header("location:student.php");
    }

    $conn = mysqli_connect('localhost', 'root', '', 'student');
    $val = $_SESSION['rollnol'];
    $rollno = $_POST['rollno'];
    $sscmarks = $_POST['sscmarks'];
    $sscdate = $_POST['sscdate'];
    $sscboard = $_POST['sscboard'];
    $dipmarks = $_POST['dipmarks'];
    $dipdate = $_POST['dipdate'];
    

    if(isset($_POST["fbtn"])){
        $query = "SELECT std_rollno FROM qualidetail WHERE std_rollno = '$val';";
        $result = mysqli_query($conn, $query);
        $rowcount = mysqli_num_rows($result);   
    }
    if($rowcount == 1) {
        $q1 = "UPDATE qualidetail SET sscmarks = '$sscmarks', sscdate = '$sscdate', sscboard = '$sscboard', dipmarks = '$dipmarks', dipdate = '$dipdate' WHERE std_rollno = '$val';";
        mysqli_query($conn, $q1);
        header("location:form3.php?fbtn=success");
    }else {
        $q2 = "INSERT INTO qualidetail (std_rollno, sscmarks, sscdate, sscboard, dipmarks, dipdate) VALUES ('$val', '$sscdate', '$sscboard', '$dipmarks', '$dipdate');";
        mysqli_query($conn, $q2);
        header("location:form3.php?fbtn=success");
        }
        
        //FOR SEM1    
    if (isset($_POST["sem1btn"])) {
        $sem1per = $_POST['sem1per'];
        $sem1attd = $_POST['sem1attd'];
        $sem1date = $_POST['sem1date'];
        $sem1sub = $_POST['sem1sub'];
        if (empty($val) == false) {
            $q3 = "UPDATE qualidetail SET sem1per = '$sem1per', sem1attd = '$sem1attd', sem1date = '$sem1date', sem1sub = '$sem1sub' WHERE std_rollno = '$val';";
            mysqli_query($conn, $q3);  
            header("location:form3.php?sem1=success");  
        }else {
            header("location:form3.php?sem1=notsuccess");
        }
    }
    if (isset($_POST["sem2btn"])) {
        $sem2per = $_POST['sem2per'];
        $sem2attd = $_POST['sem2attd'];
        $sem2date = $_POST['sem2date'];
        $sem2sub = $_POST['sem2sub'];
        if (empty($val) == false) {
            $q4 = "UPDATE qualidetail SET sem2per = '$sem2per', sem2attd = '$sem2attd', sem2date = '$sem2date', sem2sub = '$sem2sub' WHERE std_rollno = '$val';";
            mysqli_query($conn, $q4);  
            header("location:form3.php?sem2=success"); 
        }else{
            header("location:form3.php?sem2=notsuccess"); 
        } 
    }
    if (isset($_POST["sem3btn"])) {
        $sem3per = $_POST['sem3per'];
        $sem3attd = $_POST['sem3attd'];
        $sem3date = $_POST['sem3date'];
        $sem3sub = $_POST['sem3sub'];
        if (empty($val) == false) {
            $q5 = "UPDATE qualidetail SET sem3per = '$sem3per', sem3attd = '$sem3attd', sem3date = '$sem3date', sem3sub = '$sem3sub' WHERE std_rollno = '$val';";
            mysqli_query($conn, $q5);  
            header("location:form3.php?sem3=success");
        }else {
            header("location:form3.php?sem3=notsuccess");
        }  
    }
    if (isset($_POST["sem4btn"])) {
        $sem4per = $_POST['sem4per'];
        $sem4attd = $_POST['sem4attd'];
        $sem4date = $_POST['sem4date'];
        $sem4sub = $_POST['sem4sub'];
        if (empty($val) == false) {
            $q6 = "UPDATE qualidetail SET sem1per = '$sem4per', sem4attd = '$sem4attd', sem4date = '$sem4date', sem4sub = '$sem4sub' WHERE std_rollno = '$val';";
            mysqli_query($conn, $q6);  
            header("location:form3.php?sem4=success");  
        }else {
            header("location:form3.php?sem4=notsuccess");
        }
    }
    if (isset($_POST["sem5btn"])) {
        $sem5per = $_POST['sem5per'];
        $sem5attd = $_POST['sem5attd'];
        $sem5date = $_POST['sem5date'];
        $sem5sub = $_POST['sem5sub'];
        if (empty($val) == false) {
            $q7 = "UPDATE qualidetail SET sem4per = '$sem5per', sem5attd = '$sem5attd', sem5date = '$sem5date', sem5sub = '$sem5sub' WHERE std_rollno = '$val';";
            mysqli_query($conn, $q7);  
            header("location:form3.php?sem5=success"); 
        }else {
            header("location:form3.php?sem5=notsuccess");
        } 
    }
    if (isset($_POST["sem6btn"])) {
        $sem6per = $_POST['sem6per'];
        $sem6attd = $_POST['sem6attd'];
        $sem6date = $_POST['sem6date'];
        $sem6sub = $_POST['sem6sub'];
        if (empty($val) == false) {
            $q8 = "UPDATE qualidetail SET sem6per = '$sem6per', sem6attd = '$sem6attd', sem6date = '$sem6date', sem6sub = '$sem6sub' WHERE std_rollno = '$val';";
            mysqli_query($conn, $q8);  
            header("location:form3.php?sem6=success");  
        }else {
            header("location:form3.php?sem6=notsuccess");
        }
          
    }
    if (isset($_POST["sem7btn"])) {
        $sem7per = $_POST['sem7per'];
        $sem7attd = $_POST['sem7attd'];
        $sem7date = $_POST['sem7date'];
        $sem7sub = $_POST['sem7sub'];
        if (empty($val) == false) {
            $q9 = "UPDATE qualidetail SET sem7per = '$sem7per', sem7attd = '$sem7attd', sem7date = '$sem7date', sem7sub = '$sem7sub' WHERE std_rollno = '$val';";
            mysqli_query($conn, $q9);  
            header("location:form3.php?sem7=success");  
        }else {
            header("location:form3.php?sem7=notsuccess");
        }
    }
    if (isset($_POST["sem8btn"])) {
        $sem8per = $_POST['sem8per'];
        $sem8attd = $_POST['sem8attd'];
        $sem8date = $_POST['sem8date'];
        $sem8sub = $_POST['sem8sub'];
        if (empty($val) == false) {
            $q10 = "UPDATE qualidetail SET sem8per = '$sem8per', sem8attd = '$sem8attd', sem8date = '$sem8date', sem8sub = '$sem8sub' WHERE std_rollno = '$val';";
            mysqli_query($conn, $q10);  
            header("location:form3.php?sem8=success");  
        }else {
            header("location:form3.php?sem8=notsuccess");
        }
    }

?>