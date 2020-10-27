<?php
    session_start();
    if (!isset($_SESSION['rollnol'])) {
        header("location:index.php");
    }
    $val = $_SESSION['rollnol'];
    require_once './connect.php';
    // $conn = mysqli_connect('localhost', 'root', '', 'student');
    
    // for Student Table
    $query1 = "SELECT * FROM studentinfo WHERE rollno = '$val';";
    $result = mysqli_query($conn, $query1);
    $rowcount = mysqli_num_rows($result);
    if($rowcount == 0) {
      $q1 = "INSERT INTO studentinfo (rollno) VALUES ('$val');";
      mysqli_query($conn, $q1);
    }
    // for Family Table
    $query2 = "SELECT * FROM familiydetail WHERE std_rollno = '$val';";
    $result2 = mysqli_query($conn, $query2);
    $rowcount2 = mysqli_num_rows($result2);
    if($rowcount2 == 0) {
      $q2 = "INSERT INTO familiydetail (std_rollno) VALUES ('$val');";
      mysqli_query($conn, $q2);
    } 
    // for Qualification Table
    $query3 = "SELECT * FROM qualidetail WHERE std_rollno = '$val';";
    $result3 = mysqli_query($conn, $query3);
    $rowcount3 = mysqli_num_rows($result3);
    if($rowcount3 == 0) {
      $q3 = "INSERT INTO qualidetail (std_rollno) VALUES ('$val');";
      mysqli_query($conn, $q3);
    }
    // for Future Plans Table
    $query4 = "SELECT * FROM futureplans WHERE rollno = '$val';";
    $result4 = mysqli_query($conn, $query4);
    $rowcount4 = mysqli_num_rows($result4);
    if($rowcount4 == 0) {
      $q4 = "INSERT INTO futureplans (rollno) VALUES ('$val');";
      mysqli_query($conn, $q4);
    } 
?>


<!DOCTYPE html>  
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Student Home</title>
</head>

<body>

<!-- FrontEnd For Home Page -->
<div class="jumbotron" style="height: 100vh;">
  <h1 class="display-4">Hello ..</h1>
  <p class="lead">Welcome to Procotor System </p>
  <p class="lead">Your ID-Card No : <?php echo $_SESSION['rollnol']?> </p>
  <p class="lead">Your Name : <?php echo $_SESSION['name']?> </p>
  <hr class="my-4">
  <a class="btn btn-danger btn-lg" href="studentLogout.php" role="button">Log Out</a>
  <br>
  <br>
  <select class="btn btn-dark" name="forma" onchange="location = this.value;">
    <option>Select Form</option>
    <option value="form1.php" >Student Detalis Form</option>
    <option value="form2.php">Family Detalis Form</option>
    <option value="form3.php">Qualification Detalis Form</option>
    <option value="form4.php">Future Plan Detalis Form</option>
  </select>
  
</div>
</body>
</html>
