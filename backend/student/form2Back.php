<?php

session_start();
if (!isset($_SESSION['rollnol'])) {
    header("location:student.php");
}
$conn = mysqli_connect('localhost', 'root', '', 'student');

$val = $_SESSION['rollnol'];
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


if(isset($_POST["submit"])) {
    $query1 = "SELECT * FROM familiydetail WHERE std_rollno = '$val';";
    $result = mysqli_query($conn, $query1);
    $rowcount = mysqli_num_rows($result);   
}
if($rowcount == 1) {
    $query2 = "UPDATE familiydetail SET std_rollno = '$val', fname = '$fname', mname = '$mname', sname = '$sname', fage = '$fage', mage = '$mage', sage = '$sage', fqua = '$fqua', squa = '$squa', squa = '$squa', focc = '$focc', mocc = '$mocc', socc = '$socc', fph = '$fph', mph = '$mph', sph = '$sph', femail = '$femail', memail = '$memail', semail = '$semail' WHERE std_rollno = '$val';";
    $result = mysqli_query($conn, $query2);
    header("location:studentHome.php?form2=completed");
}else {
    $query3 = "INSERT INTO familiydetail (std_rollno, fname, mname, sname, fage, mage, sage, fqua, mqua, squa, focc, mocc, socc, fph, mph, sph, femail, memail, semail) VALUES ('$val','$fname','$mname','$sname','$fage','$mage','$sage', '$fqua','$mqua','$squa','$focc','$mocc','$socc','$fph','$mph', '$sph','$femail','$memail','$semail');";
    mysqli_query($conn, $query3);
    header("location:studentHome.php?form2=completed");

}



      



    

  

?>


