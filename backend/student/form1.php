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
    <title>Form1</title>
    <style>
    body{
      background-color: #37af75;
    }
    </style>
</head>
<body>

<?php 
      if (isset($_GET['form1'])) {
        if ($_GET['form1'] == 'notCompleted') {
          echo '<script>alert("There is something wrong with your data")</script>';
        }
      }
    
    ?>


<div class="container mt-5">
  
  <br>
  <h1>Student Form</h1>
    <form action="form1Back.php" method="POST"  >
        <div class="form-group">
         <label for="exampleInputEmail1">Id No</label>
         <input type="text" name="rollno" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
         <small id="emailHelp" class="form-text text-dark">mentioned in College's ID Card</small>
        </div>
        
        <div class="form-group">
         <label for="exampleInputEmail1">Name</label>
         <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Name">
        </div> 
        <div class="form-group">
         <label for="exampleInputEmail1">Mobile</label>
         <input type="text" name="phone_no" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Mobile No">
        </div>
        <div class="form-group">
         <label for="exampleInputEmail1">Address</label>
         <input type="text" name="address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Address">
        </div>
        <div class="form-group">
         <label for="exampleInputEmail1">Blood Group</label>
         <input type="text" name="bg" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Bloodgroup">
        </div>
        <div class="form-group">
         <label for="exampleInputEmail1">Email</label>
         <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Email">
        </div>
        <div class="form-group">
         <label for="exampleInputEmail1">Birthdate</label>
         <input type="date" name="bdate" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Birthdate">
        </div>
        <div class="form-group">
         <label for="exampleInputEmail1">Admission Date</label>
         <input type="date" name="myad" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Admission Date ">
        </div>
        <label for="cars">To:</label>

        <select name="year">
          <option value="first">First</option>
          <option value="second">Direct Second</option>
        </select>

        <div class="form-group">
         <label for="exampleInputEmail1">Hobbies</label>
         <input type="text" name="hobbies" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter New Hobbies">
        </div>
        <div class="form-group">
         <label for="exampleInputEmail1">Sports</label>
         <input type="text" name="sports" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
         <label for="exampleInputEmail1">Any Health Problems</label>
         <input type="text" name="health" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">      
          </div>
        
        
        <br>
        <input type="submit" name="submit" value="      Submit        " class="btn btn-primary">
        <a href="studentHome.php" class="btn btn-primary">Go Home</a>
        
                
    </form>
    <!-- <input type="submit" name="pdf" value="      Pdf        " class="btn btn-primary"> -->
    
    <br>    <br><br><br>
</div>
</body>
</html>
