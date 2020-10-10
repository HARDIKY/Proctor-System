<?php

session_start();
if (!isset($_SESSION['rollnol'])) {
    header("location:index.php");
}
$conn = mysqli_connect('localhost', 'root', '', 'student');

$val = $_SESSION['rollnol'];
$f_fname = $_POST['f_fname'];
$f_mname = $_POST['f_mname'];
$f_lname = $_POST['f_lname'];
$f_email = $_POST['f_email'];
$f_mob = $_POST['f_mob'];
$f_age = $_POST['f_age'];
$f_qua = $_POST['f_qua'];
$f_occ = $_POST['f_occ'];
// mother
$m_fname = $_POST['m_fname'];
$m_mname = $_POST['m_mname'];
$m_lname = $_POST['m_lname'];
$m_email = $_POST['m_email'];
$m_mob = $_POST['m_mob'];
$m_age = $_POST['m_age'];
$m_qua = $_POST['m_qua'];
$m_occ = $_POST['m_occ'];
// sib1
$s1_fname = $_POST['s1_fname'];
$s1_mname = $_POST['s1_mname'];
$s1_lname = $_POST['s1_lname'];
$s1_email = $_POST['s1_email'];
$s1_mob = $_POST['s1_mob'];
$s1_age = $_POST['s1_age'];
$s1_qua = $_POST['s1_qua'];
$s1_occ = $_POST['s1_occ'];
// sib2
$s2_fname = $_POST['s2_fname'];
$s2_mname = $_POST['s2_mname'];
$s2_lname = $_POST['s2_lname'];
$s2_email = $_POST['s2_email'];
$s2_mob = $_POST['s2_mob'];
$s2_age = $_POST['s2_age'];
$s2_qua = $_POST['s2_qua'];
$s2_occ = $_POST['s2_occ'];
// sib3
$s3_fname = $_POST['s3_fname'];
$s3_mname = $_POST['s3_mname'];
$s3_lname = $_POST['s3_lname'];
$s3_email = $_POST['s3_email'];
$s3_mob = $_POST['s3_mob'];
$s3_age = $_POST['s3_age'];
$s3_qua = $_POST['s3_qua'];
$s3_occ = $_POST['s3_occ'];


if(isset($_POST["subForm2"])) {
    $query1 = "SELECT * FROM familiydetail WHERE std_rollno = '$val';";
    $result = mysqli_query($conn, $query1);
    $rowcount = mysqli_num_rows($result);   
    if($rowcount == 1) {
        $query2 = "UPDATE familiydetail SET std_rollno = '$val', f_fname = '$f_fname', f_mname = '$f_mname', f_lname = '$f_lname', f_email = '$f_email', f_mob = '$f_mob', f_age = '$f_age', f_qua = '$f_qua', f_occ = '$f_occ', m_fname = '$m_fname', m_mname = '$m_mname', m_lname = '$m_lname', m_email = '$m_email', m_mob = '$m_mob', m_age = '$m_age', m_qua = '$m_qua', m_occ = '$m_occ', s1_fname = '$s1_fname', s1_mname = '$s1_mname', s1_lname = '$s1_lname', s1_email = '$s1_email', s1_mob = '$s1_mob', s1_age = '$s1_age', s1_qua = '$s1_qua', s1_occ = '$s1_occ', s2_fname = '$s2_fname', s2_mname = '$s2_mname', s2_lname = '$s2_lname', s2_email = '$s2_email', s2_mob = '$s2_mob', s2_age = '$s2_age', s2_qua = '$s2_qua', s2_occ = '$s2_occ', s3_fname = '$s3_fname', s3_mname = '$s3_mname', s3_lname = '$s3_lname', s3_email = '$s3_email', s3_mob = '$s3_mob', s3_age = '$s3_age', s3_qua = '$s3_qua', s3_occ = '$s3_occ' WHERE std_rollno = '$val';";
        $result = mysqli_query($conn, $query2);
        header("location:form2.php?form2=updated");
    }else {
        $query3 = "INSERT INTO familiydetail ( std_rollno , f_fname, f_mname, f_lname, f_email, f_mob, f_age, f_qua, f_occ, m_fname, m_mname, m_lname, m_email, m_mob, m_age, m_qua, m_occ, s1_fname, s1_mname, s1_lname, s1_email, s1_mob, s1_age, s1_qua, s1_occ, s2_fname, s2_mname, s2_lname, s2_email, s2_mob, s2_age, s2_qua, s2_occ, s3_fname, s3_mname, s3_lname, s3_email, s3_mob, s3_age, s3_qua, s3_occ) VALUES ('$val', '$f_fname', '$f_mname', '$f_lname', '$f_email', '$f_mob', '$f_age', '$f_qua', '$f_occ', '$m_fname', '$m_mname', '$m_lname', '$m_email', '$m_mob', '$m_age', '$m_qua', '$m_occ', '$s1_fname', '$s1_mname', '$s1_lname', '$s1_email', '$s1_mob', '$s1_age', '$s1_qua', '$s1_occ', '$s2_fname', '$s2_mname', '$s2_lname', '$s2_email', '$s2_mob', '$s2_age', '$s2_qua', '$s2_occ', '$s3_fname', '$s3_mname', '$s3_lname', '$s3_email', '$s3_mob', '$s3_age', '$s3_qua', '$s3_occ');";
        mysqli_query($conn, $query3);
        header("location:form2.php?form2=completed");
    }
}


// FOR PDF
if(isset($_POST["mkpdf2"])) {
    require_once __DIR__ . '/vendor/autoload.php';

        //create new pdf instance
        $mpdf = new \Mpdf\Mpdf();

        $data = '';

        $data .= '<h1>Family Details</h1>';
        
        $data .= '<h4>Father&#39;s Information</h4>';
        $data .= '<strong>&#8226; Name : </strong>'.$f_fname.'&nbsp;&nbsp;'.$f_mname.'&nbsp;&nbsp;'.$f_lname.'<br><br>';
        $data .= '<strong>&#8226; Email : </strong>'.$f_email.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>&#8226; Mobile No : </strong>'.$f_mob.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>&#8226; Age : </strong>'.$f_age.'<br><br>';
        $data .= '<strong>&#8226; Qualification : </strong>'.$f_qua.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>&#8226; Occupation : </strong>'.$f_occ.'<br><br>';
        $data .= '<hr><br><br>';
        
        $data .= '<h4>Mother&#39;s Information</h4>';
        $data .= '<strong>&#8226; Name : </strong>'.$m_fname.'&nbsp;'.$m_mname.'&nbsp;'.$m_lname.'<br><br>';
        $data .= '<strong>&#8226; Email : </strong>'.$m_email.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>&#8226; Mobile No : </strong>'.$m_mob.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>&#8226; Age : </strong>'.$m_age.'<br><br>';
        $data .= '<strong>&#8226; Qualification : </strong>'.$m_qua.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>&#8226; Occupation : </strong>'.$m_occ.'<br><br>';
        $data .= '<hr><br><br>';
        
        $data .= '<h4>Sibling&#39;s Information</h4>';
        $data .= '<h5>&#8226; sibling 1</h5>';
        $data .= '<strong>&#8226; Name : </strong>'.$s1_fname.'&nbsp;'.$s1_mname.'&nbsp;'.$s1_lname.'<br><br>';
        $data .= '<strong>&#8226; Email : </strong>'.$s1_email.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>&#8226; Mobile No : </strong>'.$s1_mob.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>&#8226; Age : </strong>'.$s1_age.'<br><br>';
        $data .= '<strong>&#8226; Qualification : </strong>'.$s1_qua.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>&#8226; Occupation : </strong>'.$s1_occ.'<br><br>';
        $data .= '<hr>';

        $data .= '<h5>&#8226; sibling 2</h5>';
        $data .= '<strong>&#8226; Name : </strong>'.$s2_fname.'&nbsp;'.$s2_mname.'&nbsp;'.$s2_lname.'<br><br>';
        $data .= '<strong>&#8226; Email : </strong>'.$s2_email.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>&#8226; Mobile No : </strong>'.$s2_mob.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>&#8226; Age : </strong>'.$s2_age.'<br><br>';
        $data .= '<strong>&#8226; Qualification : </strong>'.$s2_qua.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>&#8226; Occupation : </strong>'.$s2_occ.'<br><br>';
        $data .= '<hr>';

        $data .= '<h5>&#8226; sibling 3</h5>';
        $data .= '<strong>&#8226; Name : </strong>'.$s3_fname.'&nbsp;'.$s3_mname.'&nbsp;'.$s3_lname.'<br><br>';
        $data .= '<strong>&#8226; Email : </strong>'.$s3_email.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>&#8226; Mobile No : </strong>'.$s3_mob.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>&#8226; Age : </strong>'.$s3_age.'<br><br>';
        $data .= '<strong>&#8226; Qualification : </strong>'.$s3_qua.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>&#8226; Occupation : </strong>'.$s3_occ.'<br><br>';
        $data .= '<hr>';

        $mpdf->WriteHTML($data);
        $mpdf->Output('FamilyDetails.pdf', 'D');
    
        }

?>


