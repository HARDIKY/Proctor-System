<?php
  session_start();
  if (!isset($_SESSION['roll'])) {
    header("location:teacher.php");
    }
?>
<!DOCTYPE html>  
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Student Panel</title>
</head>
<body>
<?php
    $val = $_SESSION['roll']; 
    $conn = mysqli_connect('localhost', 'root', '', 'student');
    $query1 = "SELECT * FROM studentinfo WHERE rollno = '$val';";
    $result = mysqli_query($conn, $query1);
                
    while ($row = mysqli_fetch_array($result)) {
    ?>
    <!-- FrontEnd For Home Page -->
    <div class="jumbotron" style="height: 100vh;">
      <h1 class="display-4">Student Information ..</h1>
      <p class="lead">ID-Card No : <?php echo $row['rollno']?> </p>
      <p class="lead">Name : <?php echo $row['name']?> </p>
    <?php
        }
    ?>
    <hr class="my-4">
  
    <select class="btn btn-dark" name="forma" onchange="location = this.value;">
      <option>Select Forms</option>
      <option value="editForm1.php">Student Detalis Form</option>
      <option value="editForm2.php">Family Detalis Form</option>
      <option value="editForm3.php">Qualification Detalis Form</option>
      <option value="editForm4.php">Future Plan Detalis Form</option>
    </select>
    <br>
    <br>
    <br>  
    <a class="btn btn-secondary btn-lg" href="teacherHome.php" role="button">Go Back</a>
  </div>
</body>
</html>
