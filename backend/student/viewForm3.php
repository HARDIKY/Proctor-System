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
    <title>View Form1</title>
    <style>
    body{
      background-color: #37af75;
    }
    </style>
</head>
<body>

<div class="container mt-5">
<br>
<h2>Student Details</h2>
<br>
<?php 
    $val = $_SESSION['rollnol'];
    $conn = mysqli_connect('localhost', 'root', '', 'student');
    $query = "SELECT * FROM qualidetail WHERE std_rollno = '$val';";
    $result = mysqli_query($conn, $query);
    
    while($row = mysqli_fetch_array($result))
        {
            ?>
        <form action="makepdf3.php" method="POST">
        <div class="form-group">
         <label for="exampleInputEmail1">Id No</label>
         <input type="text" name="rollno" value="<?php echo $row['std_rollno']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" readonly>
         
        </div>
        
        <div class="form-group">
         <label for="exampleInputEmail1">Passing date : </label>
         <input type="date" name="sscdate" value="<?php echo $row['sscdate']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" readonly>
         <br>
        </div> 
        
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
             <input type="text" name="sem1attd" value="<?php echo $row['sem1attd']; ?>" readonly>
             <br>
             <label>Passing Date:</label>
             <input type="date" name="sem1date" value="<?php echo $row['sem1date']; ?>" readonly>
             <br>
             <label>Carried forward subject</label>
             <input type="text" name="sem1sub" value="<?php echo $row['sem1sub']; ?>" readonly>
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
             <input type="text" name="sem2attd" value="<?php echo $row['sem2attd']; ?>" readonly>
             <br>
             <label>Passing Date:</label>
             <input type="date" name="sem2date" value="<?php echo $row['sem2date']; ?>" readonly>
             <br>
             <label>Carried forward subject</label>
             <input type="text" name="sem2sub" value="<?php echo $row['sem2sub']; ?>" readonly>
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
             <input type="text" name="sem3attd" value="<?php echo $row['sem3attd']; ?>" readonly>
             <br>
             <label>Passing Date:</label>
             <input type="date" name="sem3date" value="<?php echo $row['sem3date']; ?>" readonly>
             <br>
             <label>Carried forward subject</label>
             <input type="text" name="sem3sub" value="<?php echo $row['sem3sub']; ?>" readonly>
             <br>
             <br>
              readonly</div>
            </div>
            <br>
            <br>
            <div>
             <label>SEMESTER 4</label>
             <input type="radio" name="payment_type" id="credit">
             <div class="forcredit details">
             <label>Attendance:</label>
             <input type="text" name="sem4attd" value="<?php echo $row['sem4attd']; ?>" readonly>
             <br>
             <label>Passing Date:</label>
             <input type="date" name="sem4date" value="<?php echo $row['sem4date']; ?>" readonly>
             <br>
             <label>Carried forward subject</label>
             <input type="text" name="sem4sub" value="<?php echo $row['sem4sub']; ?>" readonly>
             <br>
             <br>
              readonly</div>
            </div>
            <br>
            <br>
            <div>
             <label>SEMESTER 5</label>
             <input type="radio" name="payment_type" id="credit">
             <div class="forcredit details">
             <label>Attendance:</label>
             <input type="text" name="sem5attd" value="<?php echo $row['sem5attd']; ?>" readonly>
             <br>
             <label>Passing Date:</label>
             <input type="date" name="sem5date" value="<?php echo $row['sem5date']; ?>" readonly>
             <br>
             <label>Carried forward subject</label>
             <input type="text" name="sem5sub" value="<?php echo $row['sem5sub']; ?>" readonly>
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
             <input type="text" name="sem6attd" value="<?php echo $row['sem6attd']; ?>" readonly>
             <br>
             <label>Passing Date:</label>
             <input type="date" name="sem6date" value="<?php echo $row['sem6date']; ?>" readonly>
             <br>
             <label>Carried forward subject</label>
             <input type="text" name="sem6sub" value="<?php echo $row['sem6sub']; ?>" readonly>
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
             <input type="text" name="sem7attd" value="<?php echo $row['sem7attd']; ?>" readonly>
             <br>
             <label>Passing Date:</label>
             <input type="date" name="sem7date" value="<?php echo $row['sem7date']; ?>" readonly>
             <br>
             <label>Carried forward subject</label>
             <input type="text" name="sem7sub" value="<?php echo $row['sem7sub']; ?>" readonly>
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
             <input type="text" name="sem8attd" value="<?php echo $row['sem8attd']; ?>" readonly>
             <br>
             <label>Passing Date:</label>
             <input type="date" name="sem8date" value="<?php echo $row['sem8date']; ?>" readonly>
             <br>
             <label>Carried forward subject</label>
             <input type="text" name="sem8sub" value="<?php echo $row['sem8sub']; ?>" readonly>
         <br>
         <br>
         
    <?php
        }
    ?>
    <br>
    <input type="submit" name="mkpdf3" class="btn btn-primary" value="Download Pdf">
    <a href="studentHome.php" class="btn btn-primary">Go Home</a>
    <br>
    </form>
    
      
    <br>
</div>
</body>
</html>
