<?php
    session_start();
?>
<!DOCTYPE html>  
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>View Form2</title>
    <style>
    body{
      background-color: #37af75;
    }
    </style>
</head>
<body>
<?php 
    if (isset($_GET['form1'])) {
        if ($_GET['form1'] == 'completed') {
            echo '<script>alert("Changes Saved successfully ")</script>';
        }
    }
?>
<div class="container mt-5">
<br>
<br>
<h2>Family Details</h2>
<br>
<?php 
    $val = $_SESSION['std_rollno'];
    //echo $val;
    $conn = mysqli_connect('localhost', 'root', '', 'student');
    $query = "SELECT * FROM familiydetail WHERE std_rollno = '$val';";
    $result = mysqli_query($conn, $query);
    
    while($row = mysqli_fetch_array($result))
        {
            ?>
        <form action="editForm2Back.php" method="POST">
        <div class="form-group">
         <label for="exampleInputEmail1">Roll No</label>
         <input type="text" name="rollno" value="<?php echo $row['std_rollno']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" readonly>
        </div>
        <div class="form-group">
         <label for="exampleInputEmail1">Father's Name</label>
         <input type="text" name="fname" value="<?php echo $row['fname']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
         <label for="exampleInputEmail1">Mother's Name</label>
         <input type="text" name="mname" value="<?php echo $row['mname']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div> 
        <div class="form-group">
         <label for="exampleInputEmail1">Sibling's Name</label>
         <input type="text" name="sname" value="<?php echo $row['sname']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
         <label for="exampleInputEmail1">Age : </label>
         <input type="text" name="fage" value="<?php echo $row['fage']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"><br>
         <input type="text" name="mage" value="<?php echo $row['mage']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"><br>
         <input type="text" name="sage" value="<?php echo $row['sage']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"><br>
        </div>
        <div class="form-group">
         <label for="exampleInputEmail1">Qualification : </label>
         <input type="text" name="fqua" value="<?php echo $row['fqua']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"><br>
         <input type="text" name="mqua" value="<?php echo $row['mqua']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"><br>
         <input type="text" name="squa" value="<?php echo $row['squa']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"><br>
        </div>
        <div class="form-group">
         <label for="exampleInputEmail1">Occupation : </label>
         <input type="text" name="focc" value="<?php echo $row['focc']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"><br>
         <input type="text" name="mocc" value="<?php echo $row['mocc']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"><br>
         <input type="text" name="socc" value="<?php echo $row['socc']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"><br>
        </div>
        <div class="form-group">
         <label for="exampleInputEmail1">Mobile No : </label>
         <input type="text" name="fph" value="<?php echo $row['fph']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"><br>
         <input type="text" name="mph" value="<?php echo $row['mph']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"><br>
         <input type="text" name="sph" value="<?php echo $row['sph']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"><br>
        </div>
        <div class="form-group">
         <label for="exampleInputEmail1">Email Id : </label>
         <input type="text" name="femail" value="<?php echo $row['femail']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"><br>
         <input type="text" name="memail" value="<?php echo $row['memail']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"><br>
         <input type="text" name="semail" value="<?php echo $row['semail']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"><br>
        </div>
         <br>

         <input type="submit" name="editform2" class="btn btn-primary" value="Save">
        <a href="editForm3.php" class="btn btn-primary">Next Form</a>
         
    <?php
        }
    ?>
    <input type="submit" name="makepdf" class="btn btn-primary" value=" Download Pdf">
    <a href="teacherHome.php" class="btn btn-primary">Cancel</a>
    </form>
    
      
    <br>
</div>
</body>
</html>

?>



    