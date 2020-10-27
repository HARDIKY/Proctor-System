<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>sendEmailBack</title>
    <style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
  
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
  text-decoration: none;
}
.send-back a {
    margin-top:25px;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  background-color: #4CAF50;
  border-radius:20px;
}
</style>
</head>
<body>
<ul>
  <li><a class="active" href="#">PROCTOR SYSTEM</a></li>
  <li><a href="index.php">Home</a></li>
  <li><a href="help.php">Help</a></li>
</ul>
<div class="send-back">
<a href="sendEmail.php">Go Back </a>
</div>
</body>
</html>



<?php

$serverName = "localhost";
$userName = "root";
$password = "";
$databaseName = "student"; 

$conn = mysqli_connect($serverName, $userName, $password, $databaseName);


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


$mail = new PHPMailer(true);
$emailid = $_POST['emailid'];
$rollnoid = $_POST['rollnoid'];

$query1 = "SELECT * FROM register WHERE std_email = '$emailid';";
$result = mysqli_query($conn, $query1);
$rowcount = mysqli_num_rows($result);
 
if($rowcount == 1){
    try {
        $mail->isSMTP();                                      
        $mail->Host       = 'smtp.gmail.com'; 
        $mail->SMTPAuth   = true;    
        $mail->Username   = 'akshay.morre@gmail.com';      
        $mail->Password   = 'Akshay@725';     
        $mail->SMTPSecure = 'tls';  
        $mail->Port       = 587;

        $mail->setFrom('akshay.morre@gmail.com', 'Proctor Form VCET');
        $mail->addAddress($emailid); 
        $mail->addReplyTo('no-reply@gmail.com', 'NO Reply');

        $mail->isHTML(true);
        $mail->Subject = 'Change Password';
        $mail->Body    = 'Click this link to change password"\n"<b>Click here !</b> http://localhost/proctor/changePass ';
        $mail->AltBody = 'This is the plain text for non-HTML mail clients sending from VCET';

        $mail->send();
        echo 'Email  has been sent to your email address';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}else {
        echo '<script>alert("Please enter registered email Address !")</script>';
}
?>