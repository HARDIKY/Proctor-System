<?php

    require_once __DIR__ . '/vendor/autoload.php';

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    
    //create new pdf instance
    $mpdf = new \Mpdf\Mpdf();

    $data = '';

    $data .= '<h1>Your Proctor Form</h1>';
    $data .= '<strong>First Name : </strong>'.$fname.'<br>';
    $data .= '<strong>Last Name : </strong>'.$lname.'<br>';
    $data .= '<strong>Email id : </strong>'.$email.'<br>';

    $mpdf->WriteHTML($data);
    $mpdf->Output('Proctorform.pdf', 'D');

?>