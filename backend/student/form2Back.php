<?php

session_start();
$serverName = "localhost";
$userName = "root";
$password = "";
$databaseName = "student"; 
    
$conn = mysqli_connect($serverName, $userName, $password, $databaseName);
// INSERT INTO familiydetail (std_rollno, fname, mnae, sname, fage, mage, sage, fqua, mqua, squa, focc, mocc, socc, fph, mph, sph, femail, memail, semail) VALUES ('$rollno','$fname','$mname','$sname','$fage','$mage','$sage', '$fqua','$mqua','$squa','$focc','$mocc','$socc','$fph','$mph', '$sph','$femail','$memail','$semail');

$rollno = $_POST['rollno'];
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$sname = $_POST['sname'];
$fage = $_POST['fage'];
$mage = $_POST['mage'];
$sage = $_POST['sage'];
$fqua = $_POST['fqua'];
$mqua = $_POST['mqua'];
$squa = $_POST['squa'];
$focc = $_POST['focc'];
$mocc = $_POST['mocc'];
$socc = $_POST['socc'];
$fph = $_POST['fph'];
$mph = $_POST['mph'];
$sph = $_POST['sph'];
$femail = $_POST['femail'];
$memail = $_POST['memail'];
$semail = $_POST['semail'];


$query1 = "SELECT * FROM familiydetail WHERE std_rollno = '$rollno';";
$result = mysqli_query($conn, $query1);
$rowcount = mysqli_num_rows($result);

if ($rowcount == 1) {
    header("location:form2.php?form2=notCompleted");
}else {
    $query2 = "INSERT INTO familiydetail (std_rollno, fname, mname, sname, fage, mage, sage, fqua, mqua, squa, focc, mocc, socc, fph, mph, sph, femail, memail, semail) VALUES ('$rollno','$fname','$mname','$sname','$fage','$mage','$sage', '$fqua','$mqua','$squa','$focc','$mocc','$socc','$fph','$mph', '$sph','$femail','$memail','$semail');";
    mysqli_query($conn, $query2);
    header("location:studentHome.php?form2=completed");  
}


    

  

?>


