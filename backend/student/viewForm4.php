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
<h2>Future Plans</h2>
<br>
<?php 
    $val = $_SESSION['rollnol'];
    $conn = mysqli_connect('localhost', 'root', '', 'student');
    $query = "SELECT * FROM futureplans WHERE std_rollno = '$val';";
    $result = mysqli_query($conn, $query);
    
    while($row = mysqli_fetch_array($result))
        {
            ?>
        <form action="makepdf4.php" method="POST">
        
        <div class="form-group">
         <label for="exampleInputEmail1">MBA : </label><br>
         <div class="form-group">
            <label for="cat">Are You Planning to do CAT:</label>
            <select name="cat" class="form-control" id="cat" readonly>
                <option value="yes" name="cat"><?php echo $row['cat']; ?></option>
                
            </select>
        </div>
        <div class="form-group">
            <label for="cet">Are You Planning to do CET:</label>
            <select name="cet" class="form-control" id="cet">
                <option value="yes" name="cet"><?php echo $row['cet']; ?></option>
                
            </select>
        </div>
        </div> 
        <br>
        <br>
        <div class="form-group">
         <label for="exampleInputEmail1">ME/M-TECH : </label><br>
         <div class="form-group">
            <label for="gate">GATE exam:</label>
            <select name="gate" class="form-control" id="gate">
                <option value="yes" name="gate"><?php echo $row['gate']; ?></option>
                
            </select>
        </div>
        </div> 
        <br>
        <div class="form-group">
         <label for="exampleInputEmail1">MS : </label><br>
         <div class="form-group">
            <label for="gre">GRE :</label>
            <select name="gre" class="form-control" id="gre">
                <option value="yes" name="gre"><?php echo $row['gre']; ?></option>
               
            </select>
        </div>
        <div class="form-group">
            <label for="tofel">TOFEL : </label>
            <select name="tofel" class="form-control" id="tofel">
                <option value="yes" name="tofel"><?php echo $row['tofel']; ?></option>
                
            </select>
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

         
         
    <?php
        }
    ?>
    <br>
    <input type="submit" name="mkpdf4" class="btn btn-primary" value="Download Pdf">
    <a href="studentHome.php" class="btn btn-primary">Go Home</a>
    <br>
    </form>
    
      
    <br>
</div>
</body>
</html>
