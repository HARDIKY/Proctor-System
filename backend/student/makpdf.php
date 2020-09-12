<?php
    require_once __DIR__ . '/vendor/autoload.php';
    if(isset($_POST["pdf"])) {
    $rollno = $_POST['rollno'];
    $mobile = $_POST['mobile'];
    $name = $_POST['name'];
    $blood_group = $_POST['bg'];
    $email = $_POST['email'];
    $birthdate = $_POST['birthdate'];
    $monthaddm = $_POST['myad'];
    $hobbies = $_POST['hobbies'];
    $sports = $_POST['sports'];
    $health = $_POST['health'];
    $address = $_POST['address'];
    
    //create new pdf instance
    $mpdf = new \Mpdf\Mpdf();

    $data = '';

    $data .= '<h1>Your Proctor Form</h1><br>';
    $data .= '<strong>Name : </strong>'.$name.'<br><br>';
    $data .= '<strong>ID Card No : </strong>'.$rollno.'<br><br>';
    $data .= '<strong>Mobile No : </strong>'.$mobile.'<br><br>';
    $data .= '<strong>Address : </strong>'.$address.'<br><br>';
    $data .= '<strong>Blood Group : </strong>'.$bg.'<br><br>';
    $data .= '<strong>Email : </strong>'.$email.'<br><br>';
    $data .= '<strong>Birthdate : </strong>'.$birthdate.'<br><br>';
    $data .= '<strong>Date Of Admission : </strong>'.$monthaddm.'<br><br>';
    $data .= '<strong>Hobbies : </strong>'.$hobbies.'<br><br>';
    $data .= '<strong>Sports : </strong>'.$sports.'<br><br>';
    $data .= '<strong>Health Problems : </strong>'.$health.'<br><br>';

    $mpdf->WriteHTML($data);
    $mpdf->Output('Proctorform.pdf', 'D');
    
    }
?>