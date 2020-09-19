<?php

session_start();

$conn = mysqli_connect('localhost', 'root', '', 'student');

$dept = $_POST['dept'];
$year = $_POST['year'];

echo $dept;
echo $year;

if ($dept == 'IT') {
    $query1 = "SELECT std_rollno, name FROM studentinfo WHERE dept = '$dept' AND currentyear = '$year';"; 
    $result = mysqli_query($conn, $query1);
}


// $query1 = "SELECT * FROM studentinfo WHERE rollno = '$rollno';";
//     $result = mysqli_query($conn, $query1);
//     $rowcount = mysqli_num_rows($result);   

//header("location:form1.php?form1=notCompleted");
        // $query = "SELECT std_rollno, name FROM studentinfo WHERE dept = '$rollno';";
        // mysqli_query($conn, $query1);
        // header("location:studentHome.php?form1=completed");
        
  
    

?>