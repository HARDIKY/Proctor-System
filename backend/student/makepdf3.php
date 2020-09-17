<?php
    require_once __DIR__ . '/vendor/autoload.php';
    if(isset($_POST["mkpdf3"])) {
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