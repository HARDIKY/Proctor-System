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
    <style>
    body{
      background-color: #37af75;
    }
    </style>
</head>
<body>

<?php 
      if (isset($_GET['form4'])) {
        if ($_GET['form4'] == 'notsuccess') {
          echo '<script>alert("Something wrong with you data")</script>';

        }
        
      }
    
    ?>


<div class="container mt-5">
  <br>
  <h1>Future Plans</h1>
  <br>
    <form action="form4Back.php" method="POST" >
        <br>
        <div class="form-group">
         <label for="exampleInputEmail1">MBA : </label><br>
         <div class="form-group">
            <label for="cat">Are You Planning to do CAT:</label>
            <select name="cat" class="form-control" id="cat">
                <option value="yes">YES</option>
                <option value="no">NO</option>
            </select>
        </div>
        <div class="form-group">
            <label for="cet">Are You Planning to do CET:</label>
            <select name="cet" class="form-control" id="cet">
                <option value="yes">YES</option>
                <option value="no">NO</option>
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
                <option value="yes">YES</option>
                <option value="no">NO</option>
            </select>
        </div>
        </div> 
        <br>
        <div class="form-group">
         <label for="exampleInputEmail1">MS : </label><br>
         <div class="form-group">
            <label for="gre">GRE :</label>
            <select name="gre" class="form-control" id="gre">
                <option value="yes">YES</option>
                <option value="no">NO</option>
            </select>
        </div>
        <div class="form-group">
            <label for="tofel">TOFEL : </label>
            <select name="tofel" class="form-control" id="tofel">
                <option value="yes">YES</option>
                <option value="no">NO</option>
            </select>
        </div>
        </div> 
        <br>
        <div class="form-group">
         <label for="exampleInputEmail1">Others : </label>
         <input type="text" name="others" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Mention your other future plans">
         </div>
         <br>
         <div class="form-group">
         <label for="exampleInputEmail1">Area Of Service</label>
         <input type="text" name="aos" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Industry/Education/Others">
         </div>
         <br>
         <br>
        <input type="submit" name="submit" value="      Submit        " class="btn btn-primary ">
        <a href="studentHome.php" class="btn btn-primary">Go Home</a>
    </form>
    <br>    
    <br>
</div>
</body>
</html>
