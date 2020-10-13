<?php

session_start();
    if (!isset($_SESSION['rollnol'])) {
        header("location:index.php");
    }

$conn = mysqli_connect('localhost', 'root', '', 'student');

$val = $_SESSION['rollnol'];
$cat = $_POST['cat'];
$cet = $_POST['cet'];
$gate = $_POST['gate'];
$gre = $_POST['gre'];
$tofel = $_POST['tofel'];
$others = $_POST['others'];
$aos = $_POST['aos'];

if(isset($_POST["subForm4"])) {
    $query1 = "SELECT * FROM futureplans WHERE rollno = '$val';";
    $result = mysqli_query($conn, $query1);
    $rowcount = mysqli_num_rows($result);   
    if($rowcount == 1) {
        $query2 = "UPDATE futureplans SET rollno = '$val', cat = '$cat', cet = '$cet', gate = '$gate', gre = '$gre', tofel = '$tofel', others = '$others', aos = '$aos' WHERE rollno = '$val';";
        mysqli_query($conn, $query2);
        header("location:form4.php?form4=updated");
    }else {
        $query3 = "INSERT INTO futureplans (rollno, cat, cet, gate, gre, tofel, others, aos) VALUES ('$val', '$cat', '$cet', '$gate', '$gre', '$tofel', '$others', '$aos');";
        mysqli_query($conn, $query3);
        ("location:form4.php?form4=completed");
    } 
}  


// For PDF 
if(isset($_POST["mkpdf4"])){
    require_once __DIR__ . '/vendor/autoload.php';

        //create new pdf instance
    $mpdf = new \Mpdf\Mpdf();

    $data = '';

    $data .= '<h1>Future Plans</h1>';
    $data .= '<h4>Are You planning to do : </h4>';
    $data .= '<strong>&#8226; CAT : </strong>'.$cat.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>&#8226; CET : </strong>'.$cet.'<br><br>';
    $data .= '<strong>&#8226; GRE : </strong>'.$gre.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>&#8226; TOFEL : </strong>'.$tofel.'<br><br>';
    $data .= '<strong>&#8226; GATE : </strong>'.$gate.'<br><br>';
    $data .= '<hr><br><br>';

    $data .= '<h4>Other Information : </h4>';
    $data .= '<strong>&#8226; Future Plans : </strong>'.$others.'<br><br>';
    $data .= '<strong>&#8226; Preffered Area Of Service : </strong>'.$aos.'<br><br>';
    $data .= '<hr><br><br>';
    
    $mpdf->WriteHTML($data);
    $mpdf->Output('FuturePlans.pdf', 'D');
    
}

?>