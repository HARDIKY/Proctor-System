<?php

    session_start();
    if (!isset($_SESSION['rollnol'])) {
        header("location:student.php");
    }

    $conn = mysqli_connect('localhost', 'root', '', 'student');
    $val = $_SESSION['rollnol'];
    $rollno = $_POST['rollno'];
    $sscdate = $_POST['sscdate'];
    $sscyear = $_POST['sscyear'];
    

    if(isset($_POST["fbtn"])){
        $query = "SELECT std_rollno FROM qualidetail WHERE std_rollno = '$val';";
        $result = mysqli_query($conn, $query);
        $rowcount = mysqli_num_rows($result);   
    }
    if($rowcount == 1) {
        $q1 = "UPDATE qualidetail SET sscdate = '$sscdate', sscyear = '$sscyear' WHERE std_rollno = '$val';";
        mysqli_query($conn, $q1);
        header("location:form3.php?fbtn=success");
    }else {
        $q2 = "INSERT INTO qualidetail (std_rollno, sscdate, sscyear) VALUES ('$val', '$sscdate', '$sscyear');";
        mysqli_query($conn, $q2);
        header("location:form3.php?fbtn=success");
        }
        //FOR SEM1 
    //$rollnoo = $_POST['rollnoo'];    
    if (isset($_POST["sem1btn"])) {
        //$rollnoo = $_POST['rollnoo'];
        $sem1attd = $_POST['sem1attd'];
        $sem1date = $_POST['sem1date'];
        $sem1sub = $_POST['sem1sub'];
        if (empty($val) == false) {
            $q3 = "UPDATE qualidetail SET sem1attd = '$sem1attd', sem1date = '$sem1date', sem1sub = '$sem1sub' WHERE std_rollno = '$val';";
            mysqli_query($conn, $q3);  
            header("location:form3.php?sem1=success");  
        }else {
            header("location:form3.php?sem1=notsuccess");
        }
    }
    if (isset($_POST["sem2btn"])) {
        //$rollnoo = $_POST['rollnoo'];
        $sem2attd = $_POST['sem2attd'];
        $sem2date = $_POST['sem2date'];
        $sem2sub = $_POST['sem2sub'];
        if (empty($val) == false) {
            $q4 = "UPDATE qualidetail SET sem2attd = '$sem2attd', sem2date = '$sem2date', sem2sub = '$sem2sub' WHERE std_rollno = '$val';";
            mysqli_query($conn, $q4);  
            header("location:form3.php?sem2=success"); 
        }else{
            header("location:form3.php?sem2=notsuccess"); 
        } 
    }
    if (isset($_POST["sem3btn"])) {
        //$rollno3 = $_POST['rollno3'];
        $sem3attd = $_POST['sem3attd'];
        $sem3date = $_POST['sem3date'];
        $sem3sub = $_POST['sem3sub'];
        if (empty($val) == false) {
            $q5 = "UPDATE qualidetail SET sem3attd = '$sem3attd', sem3date = '$sem3date', sem3sub = '$sem3sub' WHERE std_rollno = '$val';";
            mysqli_query($conn, $q5);  
            header("location:form3.php?sem3=success");
        }else {
            header("location:form3.php?sem3=notsuccess");
        }  
    }
    if (isset($_POST["sem4btn"])) {
        //$rollno3 = $_POST['rollno3'];
        $sem4attd = $_POST['sem4attd'];
        $sem4date = $_POST['sem4date'];
        $sem4sub = $_POST['sem4sub'];
        if (empty($val) == false) {
            $q6 = "UPDATE qualidetail SET sem4attd = '$sem4attd', sem4date = '$sem4date', sem4sub = '$sem4sub' WHERE std_rollno = '$val';";
            mysqli_query($conn, $q6);  
            header("location:form3.php?sem4=success");  
        }else {
            header("location:form3.php?sem4=notsuccess");
        }
    }
    if (isset($_POST["sem5btn"])) {
        //$rollno3 = $_POST['rollno3'];
        $sem5attd = $_POST['sem5attd'];
        $sem5date = $_POST['sem5date'];
        $sem5sub = $_POST['sem5sub'];
        if (empty($val) == false) {
            $q7 = "UPDATE qualidetail SET sem5attd = '$sem5attd', sem5date = '$sem5date', sem5sub = '$sem5sub' WHERE std_rollno = '$val';";
            mysqli_query($conn, $q7);  
            header("location:form3.php?sem5=success"); 
        }else {
            header("location:form3.php?sem5=notsuccess");
        } 
    }
    if (isset($_POST["sem6btn"])) {
        //$rollno3 = $_POST['rollno3'];
        $sem6attd = $_POST['sem6attd'];
        $sem6date = $_POST['sem6date'];
        $sem6sub = $_POST['sem6sub'];
        if (empty($val) == false) {
            $q8 = "UPDATE qualidetail SET sem6attd = '$sem6attd', sem6date = '$sem6date', sem6sub = '$sem6sub' WHERE std_rollno = '$val';";
            mysqli_query($conn, $q8);  
            header("location:form3.php?sem6=success");  
        }else {
            header("location:form3.php?sem6=notsuccess");
        }
          
    }
    if (isset($_POST["sem7btn"])) {
        //$rollno3 = $_POST['rollno3'];
        $sem7attd = $_POST['sem7attd'];
        $sem7date = $_POST['sem7date'];
        $sem7sub = $_POST['sem7sub'];
        if (empty($val) == false) {
            $q9 = "UPDATE qualidetail SET sem7attd = '$sem7attd', sem7date = '$sem7date', sem7sub = '$sem7sub' WHERE std_rollno = '$val';";
            mysqli_query($conn, $q9);  
            header("location:form3.php?sem7=success");  
        }else {
            header("location:form3.php?sem7=notsuccess");
        }
    }
    if (isset($_POST["sem8btn"])) {
        //$rollno3 = $_POST['rollno3'];
        $sem8attd = $_POST['sem8attd'];
        $sem8date = $_POST['sem8date'];
        $sem8sub = $_POST['sem8sub'];
        if (empty($val) == false) {
            $q10 = "UPDATE qualidetail SET sem8attd = '$sem8attd', sem8date = '$sem8date', sem8sub = '$sem8sub' WHERE std_rollno = '$val';";
            mysqli_query($conn, $q10);  
            header("location:form3.php?sem8=success");  
        }else {
            header("location:form3.php?sem8=notsuccess");
        }
    }

    

    
    
    // $rollno = $_POST['rollno'];
    // $sscdate = $_POST['sscdate'];
    // $sscyear = $_POST['sscyear'];
    // $sem1attd = $_POST['sem1attd'];
    // $sem1date = $_POST['sem1date'];
    // $sem1sub = $_POST['sem1sub'];
    // $sem2attd = $_POST['sem2attd'];
    // $sem2date = $_POST['sem2date'];
    // $sem2sub = $_POST['sem2sub'];
    // $sem3attd = $_POST['sem3attd'];
    // $sem3date = $_POST['sem3date'];
    // $sem3sub = $_POST['sem3sub'];
    // $sem4attd = $_POST['sem4attd'];
    // $sem4date = $_POST['sem4date'];
    // $sem4sub = $_POST['sem4sub'];
    // $sem5attd = $_POST['sem5attd'];
    // $sem5date = $_POST['sem5date'];
    // $sem5sub = $_POST['sem5sub'];
    // $sem6attd = $_POST['sem6attd'];
    // $sem6date = $_POST['sem6date'];
    // $sem6sub = $_POST['sem6sub'];
    // $sem7attd = $_POST['sem7attd'];
    // $sem7date = $_POST['sem7date'];
    // $sem7sub = $_POST['sem7sub'];
    // $sem8attd = $_POST['sem8attd'];
    // $sem8date = $_POST['sem8date'];
    // $sem8sub = $_POST['sem8sub'];

    
    
    // $query2 = "INSERT INTO qualidetail (std_rollno, sscdate, sscyear, sem1attd, sem1date, sem1sub, sem2attd, sem2date, sem2sub, sem3attd, sem3date, sem3sub, sem4attd, sem4date, sem4sub, sem5attd, sem5date, sem5sub, sem6attd, sem6date, sem6sub, sem7attd, sem7date, sem7sub, sem8attd, sem8date, sem8sub) VALUES ('$rollno', '$sscdate', '$sscyear', '$sem1attd', '$sem1date', '$sem1sub', '$sem2attd', '$sem2date', '$sem2sub', '$sem3attd', '$sem3date', '$sem3sub', '$sem4attd', '$sem4date', '$sem4sub', '$sem5attd', '$sem5date', '$sem5sub', '$sem6attd', '$sem6date', '$sem6sub', '$sem7attd', '$sem7date', '$sem7sub', '$sem8attd', '$sem8date', '$sem8sub');";
    // mysqli_query($conn, $query2);
    // header("location:form3.php?form3=completed");
   
    
    
    
    
    // --    sem2attd = '$sem2attd', sem2date = '$sem2date', sem2sub = '$sem2sub'
    // --    sem3attd = '$sem3attd', sem3date = '$sem3date', sem3sub = '$sem3sub'
    // --    sem4attd = '$sem4attd', sem4date = '$sem4date', sem4sub = '$sem4sub'
    // --    sem5attd = '$sem5attd', sem5date = '$sem5date', sem5sub = '$sem5sub'
    // --    sem6attd = '$sem6attd', sem6date = '$sem6date', sem6sub = '$sem6sub'
    // --    sem7attd = '$sem7attd', sem7date = '$sem7date', sem1sub = '$sem7sub'
    // --    sem8attd = '$sem8attd', sem8date = '$sem8date', sem8sub = '$sem8sub' 


?>