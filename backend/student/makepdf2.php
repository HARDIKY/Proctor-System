<?php
    require_once __DIR__ . '/vendor/autoload.php';
    if(isset($_POST["mkpdf2"])) {
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

    
        //create new pdf instance
        $mpdf = new \Mpdf\Mpdf();

        $data = '';

        $data .= '<h1>Family Details Form</h1><br>';
        $data .= '<strong>Father\'s Name : </strong>'.$fname.'<br>';
        $data .= '<p>Father\'s Email : <small>'.$femail.'</small></p>';
        $data .= '<p>Father\'s Age : <small>'.$fage.'</small></p>';
        $data .= '<p>Father\'s Qualification : <small>'.$fqua.'</small></p>';
        $data .= '<p>Father\'s Occupation : <small>'.$focc.'</small></p><br>';
        $data .= '<strong>Mother\'s Name : </strong>'.$fname.'<br>';
        $data .= '<p>Mother\'s Email : <small>'.$memail.'</small></p>';
        $data .= '<p>Mother\'s Age : <small>'.$mage.'</small></p>';
        $data .= '<p>Mother\'s Qualification : <small>'.$mqua.'</small></p>';
        $data .= '<p>Mother\'s Occupation : <small>'.$mocc.'</small></p><br>';
        $data .= '<strong>Sibling\'s Name : </strong>'.$sname.'<br>';
        $data .= '<p>Sibling\'s Email : <small>'.$semail.'</small></p>';
        $data .= '<p>Sibling\'s Age : <small>'.$sage.'</small></p>';
        $data .= '<p>Sibling\'s Qualification : <small>'.$squa.'</small></p>';
        $data .= '<p>Sibling\'s Occupation : <small>'.$socc.'</small></p>';
        

        $mpdf->WriteHTML($data);
        $mpdf->Output('familydetails.pdf', 'D');
    
    }
?>