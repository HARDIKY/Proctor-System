<?php

    session_start();
    if (!isset($_SESSION['rollnol'])) {
        header("location:index.php");
    }

    $conn = mysqli_connect('localhost', 'root', '', 'student');
    $val = $_SESSION['rollnol'];
    $sscmarks = $_POST['sscmarks'];
    $sscdate = $_POST['sscdate'];
    $sscboard = $_POST['sscboard'];
    $dipmarks = $_POST['dipmarks'];
    $dipdate = $_POST['dipdate'];
    $sem1per = $_POST['sem1per'];
    $sem1attd = $_POST['sem1attd'];
    $sem1date = $_POST['sem1date'];
    $sem1sub = $_POST['sem1sub'];
    $sem2per = $_POST['sem2per'];
    $sem2attd = $_POST['sem2attd'];
    $sem2date = $_POST['sem2date'];
    $sem2sub = $_POST['sem2sub'];
    $sem3per = $_POST['sem3per'];
    $sem3attd = $_POST['sem3attd'];
    $sem3date = $_POST['sem3date'];
    $sem3sub = $_POST['sem3sub'];
    $sem4per = $_POST['sem4per'];
    $sem4attd = $_POST['sem4attd'];
    $sem4date = $_POST['sem4date'];
    $sem4sub = $_POST['sem4sub'];
    $sem5per = $_POST['sem5per'];
    $sem5attd = $_POST['sem5attd'];
    $sem5date = $_POST['sem5date'];
    $sem5sub = $_POST['sem5sub'];
    $sem6per = $_POST['sem6per'];
    $sem6attd = $_POST['sem6attd'];
    $sem6date = $_POST['sem6date'];
    $sem6sub = $_POST['sem6sub'];
    $sem7per = $_POST['sem7per'];
    $sem7attd = $_POST['sem7attd'];
    $sem7date = $_POST['sem7date'];
    $sem7sub = $_POST['sem7sub'];
    $sem8per = $_POST['sem8per'];
    $sem8attd = $_POST['sem8attd'];
    $sem8date = $_POST['sem8date'];
    $sem8sub = $_POST['sem8sub'];


    if(isset($_POST["subForm3"])){
        $query = "SELECT std_rollno FROM qualidetail WHERE std_rollno = '$val';";
        $result = mysqli_query($conn, $query);
        $rowcount = mysqli_num_rows($result);   
    if($rowcount == 1) {
        $q1 = "UPDATE qualidetail SET std_rollno = '$val', sscmarks = '$sscmarks', sscdate = '$sscdate', sscboard = '$sscboard', dipmarks = '$dipmarks', dipdate = '$dipdate', sem1attd = '$sem1attd', sem1date = '$sem1date', sem1sub = '$sem1sub', sem1per = '$sem1per', sem2attd = '$sem2attd', sem2date = '$sem2date', sem2sub = '$sem2sub', sem2per = '$sem2per', sem3attd = '$sem3attd', sem3date = '$sem3date', sem3sub = '$sem3sub', sem3per = '$sem3per', sem4attd = '$sem4attd', sem4date = '$sem4date', sem4sub = '$sem4sub',`sem4per`= '$sem4per',`sem5attd`= '$sem5attd',`sem5date`= '$sem5date',`sem5sub`= '$sem5sub',`sem5per`= '$sem5per',`sem6attd`= '$sem6attd',`sem6date`= '$sem6date',`sem6sub`= '$sem6sub',`sem6per`= '$sem6per',`sem7attd`= '$sem7attd',`sem7date`= '$sem7date',`sem7sub`= '$sem7sub',`sem7per`= '$sem7per',`sem8attd`= '$sem8attd',`sem8date`= '$sem8date',`sem8sub`= '$sem8sub',`sem8per`= '$sem8per' WHERE std_rollno = '$val';";
        mysqli_query($conn, $q1);
        header("location:form3.php?form3=updated");
    }else {
        $q2 = "INSERT INTO qualidetail (std_rollno, sscmarks, sscdate, sscboard, dipmarks, dipdate, sem1attd, sem1date, sem1sub, sem1per, sem2attd, sem2date, sem2sub, sem2per, sem3attd, sem3date, sem3sub, sem3per, sem4attd, sem4date, sem4sub, sem4per, sem5attd, sem5date, sem5sub, sem5per, sem6attd, sem6date, sem6sub, sem6per, sem7attd, sem7date, sem7sub, sem7per, sem8attd, sem8date, sem8sub, sem8per) VALUES ('$val','$sscmarks','$sscdate', '$sscboard', '$dipmarks', '$dipdate', '$sem1attd', '$sem1date', '$sem1sub','$sem1per', '$sem2attd', '$sem2date', '$sem2sub','$sem2per', '$sem3attd', '$sem3date', '$sem3sub','$sem3per', '$sem4attd', '$sem4date', '$sem4sub','$sem4per', '$sem5attd', '$sem5date', '$sem5sub','$sem5per', '$sem6attd', '$sem6date', '$sem6sub','$sem6per', '$sem7attd', '$sem7date', '$sem7sub','$sem7per', '$sem8attd', '$sem8date', '$sem8sub','$sem8per');";
        mysqli_query($conn, $q2);
        header("location:form3.php?form3=completed");
    }
} 


    // For PDF 
    if(isset($_POST["mkpdf3"])){
        require_once __DIR__ . '/vendor/autoload.php';

        //create new pdf instance
        $mpdf = new \Mpdf\Mpdf();

        $data = '';

        $data .= '<h1>Educational Qualification form</h1>';
        $data .= '<h4>Higher Secondary Qualification Information</h4>';
        $data .= '<strong>&#8226; 10th Marks : </strong>'.$sscmarks.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>&#8226; Leaving Date : </strong>'.$sscdate.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>&#8226; 10th BOARD : </strong>'.$sscboard.'<br><br>';
        $data .= '<strong>&#8226; HSC/Diploma Marks : </strong>'.$dipmarks.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>&#8226; Leaving Date : </strong>'.$dipdate.'<br><br>';
        $data .= '<hr><br><br>';

        $data .= '<h4>Semester 1 Information</h4>';
        $data .= '<strong>&#8226; SEM 1 Marks : </strong>'.$sem1per.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>&#8226; Sem 1 Passing Date </strong>'.$sem1date.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>&#8226; SEM 1 Attendance : </strong>'.$sem1attd.'<br><br>';
        $data .= '<strong>&#8226; SEM 1 Subject Backlog : </strong>'.$sem1sub.'<br><br>';
        $data .= '<hr><br><br>';

        $data .= '<h4>Semester 2 Information</h4>';
        $data .= '<strong>&#8226; SEM 2 Marks : </strong>'.$sem2per.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>&#8226; Sem 2 Passing Date </strong>'.$sem2date.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>&#8226; SEM 2 Attendance : </strong>'.$sem2attd.'<br><br>';
        $data .= '<strong>&#8226; SEM 2 Subject Backlog : </strong>'.$sem2sub.'<br><br>';
        $data .= '<hr><br><br>';

        $data .= '<h4>Semester 3 Information</h4>';
        $data .= '<strong>&#8226; SEM 3 Marks : </strong>'.$sem3per.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>&#8226; Sem 3 Passing Date </strong>'.$sem3date.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>&#8226; SEM 3 Attendance : </strong>'.$sem3attd.'<br><br>';
        $data .= '<strong>&#8226; SEM 3 Subject Backlog : </strong>'.$sem3sub.'<br><br>';
        $data .= '<hr><br><br>';

        $data .= '<h4>Semester 4 Information</h4>';
        $data .= '<strong>&#8226; SEM 4 Marks : </strong>'.$sem4per.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>&#8226; Sem 4 Passing Date </strong>'.$sem4date.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>&#8226; SEM 4 Attendance : </strong>'.$sem4attd.'<br><br>';
        $data .= '<strong>&#8226; SEM 4 Subject Backlog : </strong>'.$sem4sub.'<br><br>';
        $data .= '<hr><br><br>';

        $data .= '<h4>Semester 5 Information</h4>';
        $data .= '<strong>&#8226; SEM 5 Marks : </strong>'.$sem5per.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>&#8226; Sem 5 Passing Date </strong>'.$sem5date.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>&#8226; SEM 5 Attendance : </strong>'.$sem5attd.'<br><br>';
        $data .= '<strong>&#8226; SEM 5 Subject Backlog : </strong>'.$sem5sub.'<br><br>';
        $data .= '<hr><br><br>';

        $data .= '<h4>Semester 7 Information</h4>';
        $data .= '<strong>&#8226; SEM 7 Marks : </strong>'.$sem7per.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>&#8226; Sem 7 Passing Date </strong>'.$sem7date.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>&#8226; SEM 7 Attendance : </strong>'.$sem7attd.'<br><br>';
        $data .= '<strong>&#8226; SEM 7 Subject Backlog : </strong>'.$sem7sub.'<br><br>';
        $data .= '<hr><br><br>';

        $data .= '<h4>Semester 8 Information</h4>';
        $data .= '<strong>&#8226; SEM 8 Marks : </strong>'.$sem8per.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>&#8226; Sem 8 Passing Date </strong>'.$sem8date.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>&#8226; SEM 8 Attendance : </strong>'.$sem8attd.'<br><br>';
        $data .= '<strong>&#8226; SEM 8 Subject Backlog : </strong>'.$sem8sub.'<br><br>';
        $data .= '<hr><br><br>';

        

        $mpdf->WriteHTML($data);
        $mpdf->Output('QualificationDetails.pdf', 'D');
    
        }



        // ======================ssc marksheet Upload=================================
      if (isset($_POST['f3btn1'])) { // if upload button on the form is clicked
    // name of the uploaded file
    $filename = $_FILES['ssc_pdf']['name'];

    // destination of the file on the server
    $destination = 'uploads/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['ssc_pdf']['tmp_name'];
    // $size = $_FILES['pdf_file']['size'];

    if (!in_array($extension, ['pdf']))
     {
        echo "You file extension must be  .pdf ";
    } 
    else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO files (pdf_file) VALUES ('$filename')";
            if (mysqli_query($conn, $sql)) {
                header("location:form1.php?upload=success");
            }
        } else {
            header("location:form1.php?upload=notsuccess");
        }
    }
}  


// ================================Leaving Upload==============================
          if (isset($_POST['f3btn2'])) { // if upload button on the form is clicked
    // name of the uploaded file
    $filename = $_FILES['hscl_pdf']['name'];

    // destination of the file on the server
    $destination = 'uploads/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['hscl_pdf']['tmp_name'];
    // $size = $_FILES['pdf_file']['size'];

    if (!in_array($extension, ['pdf']))
     {
        echo "You file extension must be  .pdf ";
    } 
    else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO files (pdf_file) VALUES ('$filename')";
            if (mysqli_query($conn, $sql)) {
                header("location:form1.php?upload=success");
            }
        } else {
            header("location:form1.php?upload=notsuccess");
        }
    }
}  

// ==============================hsc marksheet Upload======================================
         if (isset($_POST['f3btn2'])) { // if upload button on the form is clicked
    // name of the uploaded file
    $filename = $_FILES['hscm_pdf']['name'];

    // destination of the file on the server
    $destination = 'uploads/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['hscm_pdf']['tmp_name'];
    // $size = $_FILES['pdf_file']['size'];

    if (!in_array($extension, ['pdf']))
     {
        echo "You file extension must be  .pdf ";
    } 
    else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO files (pdf_file) VALUES ('$filename')";
            if (mysqli_query($conn, $sql)) {
                header("location:form1.php?upload=success");
            }
        } else {
            header("location:form1.php?upload=notsuccess");
        }
    }
}  


// ========================================marksheet SEM 1=================================

        if (isset($_POST['f3btn2'])) { // if upload button on the form is clicked
    // name of the uploaded file
    $filename = $_FILES['sem1_pdf']['name'];

    // destination of the file on the server
    $destination = 'uploads/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['sem1_pdf']['tmp_name'];
    // $size = $_FILES['pdf_file']['size'];

    if (!in_array($extension, ['pdf']))
     {
        echo "You file extension must be  .pdf ";
    } 
    else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO files (pdf_file) VALUES ('$filename')";
            if (mysqli_query($conn, $sql)) {
                header("location:form1.php?upload=success");
            }
        } else {
            header("location:form1.php?upload=notsuccess");
        }
    }
}  
// ============================ sem 2Marksheet==================================
        if (isset($_POST['f3btn2'])) { // if upload button on the form is clicked
    // name of the uploaded file
    $filename = $_FILES['sem2_pdf']['name'];

    // destination of the file on the server
    $destination = 'uploads/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['sem2_pdf']['tmp_name'];
    // $size = $_FILES['pdf_file']['size'];

    if (!in_array($extension, ['pdf']))
     {
        echo "You file extension must be  .pdf ";
    } 
    else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO files (pdf_file) VALUES ('$filename')";
            if (mysqli_query($conn, $sql)) {
                header("location:form1.php?upload=success");
            }
        } else {
            header("location:form1.php?upload=notsuccess");
        }
    }
}  

// ==================================Sem 3 marksheet=================================
        if (isset($_POST['f3btn2'])) { // if upload button on the form is clicked
    // name of the uploaded file
    $filename = $_FILES['sem3_pdf']['name'];

    // destination of the file on the server
    $destination = 'uploads/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['sem3_pdf']['tmp_name'];
    // $size = $_FILES['pdf_file']['size'];

    if (!in_array($extension, ['pdf']))
     {
        echo "You file extension must be  .pdf ";
    } 
    else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO files (pdf_file) VALUES ('$filename')";
            if (mysqli_query($conn, $sql)) {
                header("location:form1.php?upload=success");
            }
        } else {
            header("location:form1.php?upload=notsuccess");
        }
    }
}  


// ======================================Sem 4 marksheet===============================
        if (isset($_POST['f3btn2'])) { // if upload button on the form is clicked
    // name of the uploaded file
    $filename = $_FILES['sem4_pdf']['name'];

    // destination of the file on the server
    $destination = 'uploads/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['sem4_pdf']['tmp_name'];
    // $size = $_FILES['pdf_file']['size'];

    if (!in_array($extension, ['pdf']))
     {
        echo "You file extension must be  .pdf ";
    } 
    else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO files (pdf_file) VALUES ('$filename')";
            if (mysqli_query($conn, $sql)) {
                header("location:form1.php?upload=success");
            }
        } else {
            header("location:form1.php?upload=notsuccess");
        }
    }
} 
// ================================Sem 5 marksheet===============================
        if (isset($_POST['f3btn2'])) { // if upload button on the form is clicked
    // name of the uploaded file
    $filename = $_FILES['sem5_pdf']['name'];

    // destination of the file on the server
    $destination = 'uploads/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['sem5_pdf']['tmp_name'];
    // $size = $_FILES['pdf_file']['size'];

    if (!in_array($extension, ['pdf']))
     {
        echo "You file extension must be  .pdf ";
    } 
    else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO files (pdf_file) VALUES ('$filename')";
            if (mysqli_query($conn, $sql)) {
                header("location:form1.php?upload=success");
            }
        } else {
            header("location:form1.php?upload=notsuccess");
        }
    }
}  

// ====================================Sem6 marksheet=================================
        if (isset($_POST['f3btn2'])) { // if upload button on the form is clicked
    // name of the uploaded file
    $filename = $_FILES['sem6_pdf']['name'];

    // destination of the file on the server
    $destination = 'uploads/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['sem6_pdf']['tmp_name'];
    // $size = $_FILES['pdf_file']['size'];

    if (!in_array($extension, ['pdf']))
     {
        echo "You file extension must be  .pdf ";
    } 
    else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO files (pdf_file) VALUES ('$filename')";
            if (mysqli_query($conn, $sql)) {
                header("location:form1.php?upload=success");
            }
        } else {
            header("location:form1.php?upload=notsuccess");
        }
    }
}  
// ====================================Sem 7 marksheet===============================
        if (isset($_POST['f3btn2'])) { // if upload button on the form is clicked
    // name of the uploaded file
    $filename = $_FILES['sem7_pdf']['name'];

    // destination of the file on the server
    $destination = 'uploads/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['sem7_pdf']['tmp_name'];
    // $size = $_FILES['pdf_file']['size'];

    if (!in_array($extension, ['pdf']))
     {
        echo "You file extension must be  .pdf ";
    } 
    else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO files (pdf_file) VALUES ('$filename')";
            if (mysqli_query($conn, $sql)) {
                header("location:form1.php?upload=success");
            }
        } else {
            header("location:form1.php?upload=notsuccess");
        }
    }
}  
// ==============================Sem 8 Marksheet=====================================
        if (isset($_POST['f3btn2'])) { // if upload button on the form is clicked
    // name of the uploaded file
    $filename = $_FILES['sem8_pdf']['name'];

    // destination of the file on the server
    $destination = 'uploads/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['sem8_pdf']['tmp_name'];
    // $size = $_FILES['pdf_file']['size'];

    if (!in_array($extension, ['pdf']))
     {
        echo "You file extension must be  .pdf ";
    } 
    else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO files (pdf_file) VALUES ('$filename')";
            if (mysqli_query($conn, $sql)) {
                header("location:form1.php?upload=success");
            }
        } else {
            header("location:form1.php?upload=notsuccess");
        }
    }
}  
?>