<?php
    session_start();
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $databaseName = "student"; 

    $conn = mysqli_connect($serverName, $userName, $password, $databaseName);

    if(isset($_POST["subform4"])) {

        $val = $_SESSION['rollnol'];
        //$rollno = $_POST['rollno'];
        $cat = $_POST['cat'];
        $cet = $_POST['cet'];
        $gate = $_POST['gate'];
        $gre = $_POST['gre'];
        $tofel = $_POST['tofel'];
        $others = $_POST['others'];
        $aos = $_POST['aos'];

    
    $query2 = "UPDATE futureplans SET std_rollno = '$val', cat = '$cat', cet = '$cet', gate = '$gate', gre = '$gre', tofel = '$tofel', others = '$others', aos = '$aos' WHERE std_rollno = '$val' ;";
    $query_run = mysqli_query($conn, $query2);
    if ($query_run) {
        header("location:editForm4.php?form4=success");
    }else {
        header("location:editForm4.php?form4=notSuccess");
    }
   
}

if(isset($_POST["makepdf"])) {
    require_once __DIR__ . '/vendor/autoload.php';
        $cat = $_POST['cat'];
        $cet = $_POST['cet'];
        $gate = $_POST['gate'];
        $gre = $_POST['gre'];
        $tofel = $_POST['tofel'];
        $others = $_POST['others'];
        $aos = $_POST['aos'];
    
        //create new pdf instance
        $mpdf = new \Mpdf\Mpdf();

        $data = '';

        $data .= '<h1>Future Plans</h1><br>';
        $data .= '<strong>CAT : </strong>'.$cat.'<br><br>';
        $data .= '<strong>CET : </strong>'.$cet.'<br><br>';
        $data .= '<strong>GATE : </strong>'.$gate.'<br><br>';
        $data .= '<strong>GRE : </strong>'.$gre.'<br><br>';
        $data .= '<strong>TOFEL : </strong>'.$tofel.'<br><br>';
        $data .= '<strong>Others : </strong>'.$others.'<br><br>';
        $data .= '<strong>Area of service : </strong>'.$aos.'<br><br>';
        
        $mpdf->WriteHTML($data);
        $mpdf->Output('futureplans.pdf', 'D');
    
    }



?>