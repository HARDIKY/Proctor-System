<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>changePassBack</title>
    <style>
a:link, a:visited {
  background-color: #4CAF50;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: red;
}
</style>
</head>
<body>
  
</body>
</html>
<?php
    session_start();
    
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $databaseName = "student"; 

    $conn = mysqli_connect($serverName, $userName, $password, $databaseName);
    
    
    $newpass = $_POST['newpass'];
    $rollno = $_POST['rollno'];
    $connewpass = $_POST['connewpass'];

    
    if($newpass == $connewpass) {
        $query2 = "UPDATE register SET std_pass = '$newpass' WHERE std_rollno = '$rollno';";
        mysqli_query($conn, $query2);
        echo '<script>alert("Password changed go back to login page")</script>';
        echo '<a href="student.php">Go Back to login page</a>';
    }else {
        echo "Both password not matched";
    }
?>
