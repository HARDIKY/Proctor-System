<?php
    require_once __DIR__ . '/vendor/autoload.php';
    if(isset($_POST["mkpdf4"])) {
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