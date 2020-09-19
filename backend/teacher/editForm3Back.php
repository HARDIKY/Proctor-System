<?php
    session_start();
    $val = $_SESSION['std_rollno'];
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $databaseName = "student"; 

    $conn = mysqli_connect($serverName, $userName, $password, $databaseName);
    if(isset($_POST["sscbtn"])){
        $rollno = $_POST['rollno'];
        $sscdate = $_POST['sscdate'];
    
        $q1 = "UPDATE qualidetail SET sscdate = '$sscdate' WHERE std_rollno = '$rollno';";
        mysqli_query($conn, $q1);
        header("location:editForm3.php?fbtn=success");
    }
    if (isset($_POST["sem1btn"])) {
    
        $sem1attd = $_POST['sem1attd'];
        $sem1date = $_POST['sem1date'];
        $sem1sub = $_POST['sem1sub'];
        
            $q3 = "UPDATE qualidetail SET sem1attd = '$sem1attd', sem1date = '$sem1date', sem1sub = '$sem1sub' WHERE std_rollno = '$val';";
            mysqli_query($conn, $q3);  
            header("location:editForm3.php?sem1=success");  
        
    }
    if (isset($_POST["2"])) {
    
        $sem2attd = $_POST['sem2attd'];
        $sem2date = $_POST['sem2date'];
        $sem2sub = $_POST['sem2sub'];
        
            $q3 = "UPDATE qualidetail SET sem2attd = '$sem2attd', sem2date = '$sem2date', sem2sub = '$sem2sub' WHERE std_rollno = '$val';";
            mysqli_query($conn, $q3);  
            header("location:editForm3.php?sem2=success");  
        
    }
    if (isset($_POST["sem3btn"])) {
    
        $sem3attd = $_POST['sem3attd'];
        $sem3date = $_POST['sem3date'];
        $sem3sub = $_POST['sem3sub'];
        
            $q3 = "UPDATE qualidetail SET sem3attd = '$sem3attd', sem3date = '$sem3date', sem3sub = '$sem3sub' WHERE std_rollno = '$val';";
            mysqli_query($conn, $q3);  
            header("location:editForm3.php?sem3=success");  
        
    }
    if (isset($_POST["sem4btn"])) {
    
        $sem4attd = $_POST['sem4attd'];
        $sem4date = $_POST['sem4date'];
        $sem4sub = $_POST['sem4sub'];
        
            $q3 = "UPDATE qualidetail SET sem4attd = '$sem4attd', sem4date = '$sem4date', sem4sub = '$sem4sub' WHERE std_rollno = '$val';";
            mysqli_query($conn, $q3);  
            header("location:editForm3.php?sem4=success");  
        
    }
    if (isset($_POST["sem5btn"])) {
    
        $sem5attd = $_POST['sem5attd'];
        $sem5date = $_POST['sem5date'];
        $sem5sub = $_POST['sem5sub'];
        
            $q3 = "UPDATE qualidetail SET sem5attd = '$sem5attd', sem5date = '$sem5date', sem5sub = '$sem5sub' WHERE std_rollno = '$val';";
            mysqli_query($conn, $q3);  
            header("location:editForm3.php?sem5=success");  
        
    }
    if (isset($_POST["sem6btn"])) {
    
        $sem6attd = $_POST['sem6attd'];
        $sem6date = $_POST['sem6date'];
        $sem6sub = $_POST['sem6sub'];
        
            $q3 = "UPDATE qualidetail SET sem6attd = '$sem6attd', sem6date = '$sem6date', sem6sub = '$sem6sub' WHERE std_rollno = '$val';";
            mysqli_query($conn, $q3);  
            header("location:editForm3.php?sem6=success");  
        
    }
    if (isset($_POST["sem7btn"])) {
    
        $sem7attd = $_POST['sem7attd'];
        $sem7date = $_POST['sem7date'];
        $sem7sub = $_POST['sem7sub'];
        
            $q3 = "UPDATE qualidetail SET sem7attd = '$sem7attd', sem7date = '$sem7date', sem7sub = '$sem7sub' WHERE std_rollno = '$val';";
            mysqli_query($conn, $q3);  
            header("location:editForm3.php?sem7=success");  
        
    }
    if (isset($_POST["sem8btn"])) {
    
        $sem8attd = $_POST['sem8attd'];
        $sem8date = $_POST['sem8date'];
        $sem8sub = $_POST['sem8sub'];
        
            $q3 = "UPDATE qualidetail SET sem8attd = '$sem8attd', sem8date = '$sem8date', sem8sub = '$sem8sub' WHERE std_rollno = '$val';";
            mysqli_query($conn, $q3);  
            header("location:editForm3.php?sem8=success");  
        
    }

    
    if(isset($_POST["makepdf"])) {
        require_once __DIR__ . '/vendor/autoload.php';
        $rollno = $_POST['rollno'];
        $sscdate = $_POST['sscdate'];
        $sscyear = $_POST['sscyear']; 
        $sem1attd = $_POST['sem1attd'];
        $sem1date = $_POST['sem1date'];
        $sem1sub = $_POST['sem1sub']; 
        $sem2attd = $_POST['sem2attd'];
        $sem2date = $_POST['sem2date'];
        $sem2sub = $_POST['sem2sub'];
        $sem3attd = $_POST['sem3attd'];
        $sem3date = $_POST['sem3date'];
        $sem3sub = $_POST['sem3sub'];
        $sem4attd = $_POST['sem4attd'];
        $sem4date = $_POST['sem4date'];
        $sem4sub = $_POST['sem4sub'];
        $sem5attd = $_POST['sem5attd'];
        $sem5date = $_POST['sem5date'];
        $sem5sub = $_POST['sem5sub'];
        $sem6attd = $_POST['sem6attd'];
        $sem6date = $_POST['sem6date'];
        $sem6sub = $_POST['sem6sub'];
        $sem7attd = $_POST['sem7attd'];
        $sem7date = $_POST['sem7date'];
        $sem7sub = $_POST['sem7sub'];
        $sem8attd = $_POST['sem8attd'];
        $sem8date = $_POST['sem8date'];
        $sem8sub = $_POST['sem8sub'];  
        
        
        //create new pdf instance
        $mpdf = new \Mpdf\Mpdf();

        $data = '';

        $data .= '<h1>Qualification Details</h1><br>';
        $data .= '<h2>School Details</h2>';
        $data .= '<p>roll no : <small>'.$rollno.'</small></p>';
        $data .= '<p>school passing date : <small>'.$sscdate.'</small></p><br>';
        
        $data .= '<h2>Semester 1</h2>';
        $data .= '<p>attendance : <small>'.$sem1attd.'</small></p>';
        $data .= '<p>passing date : <small>'.$sem1date.'</small></p>';
        $data .= '<p>carried forward subjects : <small>'.$sem1sub.'</small></p>';
        
        $data .= '<h2>Semester 2</h2>';
        $data .= '<p>attendance : <small>'.$sem2attd.'</small></p>';
        $data .= '<p>passing date : <small>'.$sem2date.'</small></p>';
        $data .= '<p>carried forward subjects : <small>'.$sem2sub.'</small></p>';
        
        $data .= '<h2>Semester 3</h2>';
        $data .= '<p>attendance : <small>'.$sem3attd.'</small></p>';
        $data .= '<p>passing date : <small>'.$sem3date.'</small></p>';
        $data .= '<p>carried forward subjects : <small>'.$sem3sub.'</small></p>';

        $data .= '<h2>Semester 4</h2>';
        $data .= '<p>attendance : <small>'.$sem4attd.'</small></p>';
        $data .= '<p>passing date : <small>'.$sem4date.'</small></p>';
        $data .= '<p>carried forward subjects : <small>'.$sem4sub.'</small></p>';
        
        $data .= '<h2>Semester 5</h2>';
        $data .= '<p>attendance : <small>'.$sem5attd.'</small></p>';
        $data .= '<p>passing date : <small>'.$sem5date.'</small></p>';
        $data .= '<p>carried forward subjects : <small>'.$sem5sub.'</small></p>';
        
        $data .= '<h2>Semester 6</h2>';
        $data .= '<p>attendance : <small>'.$sem6attd.'</small></p>';
        $data .= '<p>passing date : <small>'.$sem6date.'</small></p>';
        $data .= '<p>carried forward subjects : <small>'.$sem6sub.'</small></p>';
        
        $data .= '<h2>Semester 7</h2>';
        $data .= '<p>attendance : <small>'.$sem7attd.'</small></p>';
        $data .= '<p>passing date : <small>'.$sem7date.'</small></p>';
        $data .= '<p>carried forward subjects : <small>'.$sem7sub.'</small></p>';
        
        $data .= '<h2>Semester 8</h2>';
        $data .= '<p>attendance : <small>'.$sem8attd.'</small></p>';
        $data .= '<p>passing date : <small>'.$sem8date.'</small></p>';
        $data .= '<p>carried forward subjects : <small>'.$sem8sub.'</small></p>';
        
        $mpdf->WriteHTML($data);
        $mpdf->Output('qualificationdetails.pdf', 'D');
    
    }



?>