<?php
    session_start();
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
<?php

if (isset($_GET['form4'])) {
        if ($_GET['form4'] == 'success') {
        echo '<script>alert("Details Updated successfully ")</script>';
        }
        if ($_GET['form4'] == 'notSuccess') {
        echo '<script>alert("There is something erong with your data !")</script>';
        }
        
      }
      ?>
<div class="container mt-5">
<br>
<h2>Future Plans</h2>
<br>
<?php 
    $val = $_SESSION['std_rollno'];
    $conn = mysqli_connect('localhost', 'root', '', 'student');
    $query = "SELECT * FROM futureplans WHERE std_rollno = '$val';";
    $result = mysqli_query($conn, $query);
    
    while($row = mysqli_fetch_array($result))
        {
            ?>
        <form action="editForm4Back.php" method="POST">
        
        <div class="form-group">
         <label for="exampleInputEmail1">MBA : </label><br>
         <div class="form-group">
            <label for="cat">Are You Planning to do CAT:</label>
            <input type="text" name="cat" value="<?php echo $row['cat']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="cet">Are You Planning to do CET:</label>
            <input type="text" name="cet" value="<?php echo $row['cet']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        </div> 
        <br>
        <br>
        <div class="form-group">
         <label for="exampleInputEmail1">ME/M-TECH : </label><br>
         <div class="form-group">
            <label for="gate">GATE exam:</label>
            <input type="text" name="gate" value="<?php echo $row['gate']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        </div> 
        <br>
        <div class="form-group">
         <label for="exampleInputEmail1">MS : </label><br>
         <div class="form-group">
            <label for="gre">GRE :</label>
            <input type="text" name="gre" value="<?php echo $row['gre']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="tofel">TOFEL : </label>
            <input type="text" name="tofel" value="<?php echo $row['tofel']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        </div> 
        <br>
        <div class="form-group">
         <label for="exampleInputEmail1">Others : </label>
         <input type="text" name="others" value="<?php echo $row['others']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Mention your other future plans">
         </div>
         <br>
         <div class="form-group">
         <label for="exampleInputEmail1">Area Of Service</label>
         <input type="text" name="aos" value="<?php echo $row['aos']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Industry/Education/Others">
         </div>
         <br>
         <input type="submit" name="subform4" class="btn btn-primary" value="Save">
<br>
         
         
    <?php
        }
    ?>
    <br>
<input type="submit" name="makepdf" class="btn btn-primary" value=" Download Pdf">

    <a href="teacherHome.php" class="btn btn-primary">Cancel</a>
    <br>
    </form>
    
      
    <br>
</div>
</body>
</html>
