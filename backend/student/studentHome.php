<?php
    session_start();
    if (!isset($_SESSION['rollnol'])) {
        header("location:student.php");
    }
?>
<!DOCTYPE html>  
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Form4</title>
</head>
<body>
<?php 
      if (isset($_GET['form1'])) {
        if ($_GET['form1'] == 'completed') {
          echo '<script>alert("Student Details submitted successfully")</script>';
          unset($_GET['form1']);
        }
      }
      if (isset($_GET['form2'])) {
        if ($_GET['form2'] == 'completed') {
          echo '<script>alert("Family Details submitted successfully")</script>';

        }
      }
      if (isset($_GET['form3'])) {
        if ($_GET['form3'] == 'completed') {
          echo '<script>alert("Qualification Details submitted successfully")</script>';

        }
      }
      if (isset($_GET['form4'])) {
        if ($_GET['form4'] == 'completed') {
          echo '<script>alert("Future Form Details submitted successfully")</script>';

        }
      }
        
    ?>
<div class="jumbotron">
  <h1 class="display-4">Hello ..</h1>
  <p class="lead">Welcome to Procotor System</p>
  <p class="lead">Your ID-Card No is : <?php echo $_SESSION['rollnol']?> </p>
  <hr class="my-4">
  <a class="btn btn-danger btn-lg" href="studentLogout.php" role="button">Log Out</a>
  <br>
  <br>
  <!-- <p><a class="btn btn-primary" href="form1.php" role="button">Start Filling Form&raquo;</a></p> -->
  <select class="btn btn-primary" name="forma" onchange="location = this.value;">
    <option>Start Filling Form</option>
    <option value="form1.php">Student Detalis Form</option>
    <option value="form2.php">Family Detalis Form</option>
    <option value="form3.php">Qualification Detalis Form</option>
    <option value="form4.php">Future Plan Detalis Form</option>
  </select>
  <select class="btn btn-dark" name="forma" onchange="location = this.value;">
    <option>View Submitted Form</option>
    <option value="viewForm1.php">Student Detalis Form</option>
    <option value="viewForm2.php">Family Detalis Form</option>
    <option value="viewForm3.php">Qualification Detalis Form</option>
    <option value="viewForm4.php">Future Plan Detalis Form</option>
  </select>
    
  
  
</div>
</body>
</html>
