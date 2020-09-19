<?php
    session_start();
   ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="../student/tp.css">
    <title>Edit Form3</title>
    <style>
    body{
      background-color: #37af75;
    }
    </style>
</head>
<body>
<?php 
    if (isset($_GET['form2'])) {
      if ($_GET['form2'] == 'completed') {
      echo '<script>alert("Changes Saved successfully ")</script>';
    }
  }
    
      
      if (isset($_GET['fbtn'])) {
        if ($_GET['fbtn'] == 'success') {
          echo '<script>alert("School Details Saved ")</script>';
          unset($_GET['fbtn']);
        }
      }
      if (isset($_GET['sem1'])) {
        if ($_GET['sem1'] == 'success') {
        echo '<script>alert("Semester 1 details submitted successfully ")</script>';
        }
      }
      if (isset($_GET['sem2'])) {
        if ($_GET['sem2'] == 'success') {
        echo '<script>alert("Semester 2 details submitted successfully ")</script>';
        }
        
      }
      if (isset($_GET['sem3'])) {
        if ($_GET['sem3'] == 'success') {
        echo '<script>alert("Semester 3 details  submitted successfully ")</script>';
        }
        
      }
      if (isset($_GET['sem4'])) {
        if ($_GET['sem4'] == 'success') {
        echo '<script>alert("Semester 4 details  submitted successfully ")</script>';
        }
        
      }
      if (isset($_GET['sem5'])) {
        if ($_GET['sem5'] == 'success') {
        echo '<script>alert("Semester 5 details  submitted successfully ")</script>';
        }
        
      }
      if (isset($_GET['sem6'])) {
        if ($_GET['sem6'] == 'success') {
        echo '<script>alert("Semester 6 details submitted successfully ")</script>';
        }
        
      }
      if (isset($_GET['sem7'])) {
        if ($_GET['sem7'] == 'success') {
        echo '<script>alert("Semester 7 details submitted successfully ")</script>';
        }
        
      }
      if (isset($_GET['sem8'])) {
        if ($_GET['sem8'] == 'success') {
        echo '<script>alert("Semester 8 details submitted successfully ")</script>';
        }
        
      }
    ?>
<div class="container mt-5">
<br>
<h2>Student Details</h2>
<br>
<?php 
    $val = $_SESSION['std_rollno'];
    $conn = mysqli_connect('localhost', 'root', '', 'student');
    $query = "SELECT * FROM qualidetail WHERE std_rollno = '$val';";
    $result = mysqli_query($conn, $query);
    
    while($row = mysqli_fetch_array($result))
        {
            ?>
        <form action="editForm3Back.php" method="POST">
        <div class="form-group">
         <label for="exampleInputEmail1">Id No</label>
         <input type="text" name="rollno" value="<?php echo $row['std_rollno']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" readonly>
         
        </div>
        
        <div class="form-group">
         <label for="exampleInputEmail1">Passing date : </label>
         <input type="date" name="sscdate" value="<?php echo $row['sscdate']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
         <br>
        </div> 
        <input type="submit" name="sscbtn" class="btn btn-primary" value="Save School details">
        <br>
          <div class="form-group">
          <h3>Acadamic records</h3>
          <br>
          <br>
          <div>
             <div>
             <label>SEMESTER 1</label>
             <input type="radio" name="payment_type" id="credit">
             <div class="forcredit details">
             <label>Attendance:</label>
             <input type="text" name="sem1attd" value="<?php echo $row['sem1attd']; ?>" >
             <br>
             <label>Passing Date:</label>
             <input type="date" name="sem1date" value="<?php echo $row['sem1date']; ?>" >
             <br>
             <label>Carried forward subject</label>
             <input type="text" name="sem1sub" value="<?php echo $row['sem1sub']; ?>" >
             <br>
             <input type="submit" name="sem1btn" class="btn btn-primary" value="Save Sem 1 details">
             <br>
             <br>
             </div>
            </div>
            <br>
            <br>
            <div>
             <label>SEMESTER 2</label>
             <input type="radio" name="payment_type" id="credit">
             <div class="forcredit details">
             <label>Attendance:</label>
             <input type="text" name="sem2attd" value="<?php echo $row['sem2attd']; ?>">
             <br>
             <label>Passing Date:</label>
             <input type="date" name="sem2date" value="<?php echo $row['sem2date']; ?>">
             <br>
             <label>Carried forward subject</label>
             <input type="text" name="sem2sub" value="<?php echo $row['sem2sub']; ?>">
             <br>
             <input type="submit" name="sem2btn" class="btn btn-primary" value="Save Sem 2 details">
             <br>
             <br>
             </div>
            </div>
            <br>
            <br>
            <div>
             <label>SEMESTER 3</label>
             <input type="radio" name="payment_type" id="credit">
             <div class="forcredit details">
             <!-- <input type="text" name="rollno3" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter yor roll No AGAIN !"> -->
             <br>
             <label>Attendance:</label>
             <input type="text" name="sem3attd" value="<?php echo $row['sem3attd']; ?>">
             <br>
             <label>Passing Date:</label>
             <input type="date" name="sem3date" value="<?php echo $row['sem3date']; ?>">
             <br>
             <label>Carried forward subject</label>
             <input type="text" name="sem3sub" value="<?php echo $row['sem3sub']; ?>">
             <br>
             <input type="submit" name="sem3btn" class="btn btn-primary" value="Save Sem 3 details">
             <br>
             <br>
            </div>
            </div>
            <br>
            <br>
            <div>
             <label>SEMESTER 4</label>
             <input type="radio" name="payment_type" id="credit">
             <div class="forcredit details">
             <label>Attendance:</label>
             <input type="text" name="sem4attd" value="<?php echo $row['sem4attd']; ?>">
             <br>
             <label>Passing Date:</label>
             <input type="date" name="sem4date" value="<?php echo $row['sem4date']; ?>">
             <br>
             <label>Carried forward subject</label>
             <input type="text" name="sem4sub" value="<?php echo $row['sem4sub']; ?>">
             <br>
             <input type="submit" name="sem4btn" class="btn btn-primary" value="Save Sem 3 details">
             <br>
             <br>
            </div>
            </div>
            <br>
            <br>
            <div>
             <label>SEMESTER 5</label>
             <input type="radio" name="payment_type" id="credit">
             <div class="forcredit details">
             <label>Attendance:</label>
             <input type="text" name="sem5attd" value="<?php echo $row['sem5attd']; ?>">
             <br>
             <label>Passing Date:</label>
             <input type="date" name="sem5date" value="<?php echo $row['sem5date']; ?>">
             <br>
             <label>Carried forward subject</label>
             <input type="text" name="sem5sub" value="<?php echo $row['sem5sub']; ?>">
             <br>
             <input type="submit" name="sem5btn" class="btn btn-primary" value="Save Sem 4 details">
             <br>
             <br>
             </div>
            </div>
            <br>
            <br>
            <div>
             <label>SEMESTER 6</label>
             <input type="radio" name="payment_type" id="credit">
             <div class="forcredit details">
             <label>Attendance:</label>
             <input type="text" name="sem6attd" value="<?php echo $row['sem6attd']; ?>" >
             <br>
             <label>Passing Date:</label>
             <input type="date" name="sem6date" value="<?php echo $row['sem6date']; ?>" >
             <br>
             <label>Carried forward subject</label>
             <input type="text" name="sem6sub" value="<?php echo $row['sem6sub']; ?>" >
             <br>
             <input type="submit" name="sem6btn" class="btn btn-primary" value="Save Sem 5 details">
             <br>
             <br>
             </div>
            </div>
            <br>
            <br>
            <div>
             <label>SEMESTER 7</label>
             <input type="radio" name="payment_type" id="credit">
             <div class="forcredit details">
             <label>Attendance:</label>
             <input type="text" name="sem7attd" value="<?php echo $row['sem7attd']; ?>">
             <br>
             <label>Passing Date:</label>
             <input type="date" name="sem7date" value="<?php echo $row['sem7date']; ?>">
             <br>
             <label>Carried forward subject</label>
             <input type="text" name="sem7sub" value="<?php echo $row['sem7sub']; ?>">
             <br>
             <input type="submit" name="sem7btn" class="btn btn-primary" value="Save Sem 7 details">
             <br>
             <br>
             </div>
            </div>
            <br>
            <br>
            <div>
             <label>SEMESTER 8</label>
             <input type="radio" name="payment_type" id="credit">
             <div class="forcredit details">
             <label>Attendance:</label>
             <input type="text" name="sem8attd" value="<?php echo $row['sem8attd']; ?>">
             <br>
             <label>Passing Date:</label>
             <input type="date" name="sem8date" value="<?php echo $row['sem8date']; ?>">
             <br>
             <label>Carried forward subject</label>
             <input type="text" name="sem8sub" value="<?php echo $row['sem8sub']; ?>">
            <br>
            <input type="submit" name="sem8btn" class="btn btn-primary" value="Save Sem 8 details">
         
    <?php
        }
    ?>
    </form>
    <br>
    
      
    <br>
</div>
<br>
<br>
<input type="submit" name="makepdf" class="btn btn-primary" value=" Download Pdf">
<a href="editForm4.php" class="btn btn-primary">Next Form</a>
<a href="editForm2.php" class="btn btn-primary">Previevs Form</a>
<a href="teacherHome.php" class="btn btn-primary">Cancel</a>

</body>
</html>












