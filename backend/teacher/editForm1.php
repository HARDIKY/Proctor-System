<?php
    session_start();
    $_SESSION["std_rollno"] = $_POST['editbtn'];
    

?>
<!DOCTYPE html>  
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Edit Form1</title>
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
    if (isset($_POST["editstd"])) {
        $id = $_POST['editbtn'];
    $conn = mysqli_connect('localhost', 'root', '', 'student');
    $query = "SELECT * FROM studentinfo WHERE std_rollno = '$id';";
    $result = mysqli_query($conn, $query);
    
    while($row = mysqli_fetch_array($result))
        {
            ?>
        <form action="editForm1Back.php" method="POST">
         <div class="form-group">
         <label>Id No : </label>
         <input type="text" name="rollno" value="<?php echo $row['std_rollno']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" readonly>
         </div>
         <div class="form-group">
         <label>Name : </label>
         <input type="text" name="name" value="<?php echo $row['name']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
         </div>
         <div class="form-group">
         <label>Mobile : </label>
         <input type="text" name="mobile" value="<?php echo $row['mobile']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
         </div>
         <div class="form-group">
         <label>Department : </label>
         <input type="text" name="dept" value="<?php echo $row['dept']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
         </div>
         <div class="form-group">
         <label>Current Year : </label>
         <input type="text" name="currentyear" value="<?php echo $row['currentyear']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
         </div>
         <div class="form-group">
         <label>Address : </label>
         <input type="text" name="address" value="<?php echo $row['address']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
         </div>
         <div class="form-group">
         <label>Blood Group : </label>
         <input type="text" name="bg" value="<?php echo $row['bg']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
         </div>
         <div class="form-group">
         <label>Email : </label>
         <input type="text" name="email" value="<?php echo $row['email']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
         </div>
         <div class="form-group">
         <label>BirthDate : </label>
         <input type="date" name="birthdate" value="<?php echo $row['birthdate']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
         </div>
         <div class="form-group">
         <label>Date of Admission : </label>
         <input type="date" name="myad" value="<?php echo $row['monthaddm']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
         </div>
         <div class="form-group">
         <label>Hobbies : </label>
         <input type="text" name="hobbies" value="<?php echo $row['hobbies']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
         </div>
         <div class="form-group">
         <label>Sports : </label>
         <input type="text" name="sports" value="<?php echo $row['sports']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
         </div>
         <div class="form-group">
         <label>Health Problems : </label>
         <input type="text" name="health" value="<?php echo $row['health']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
         </div>
         <br>
        <input type="submit" name="editform1" class="btn btn-primary" value="Save">
        
        <a href="editForm2.php?id='<?php echo $row['std_rollno']; ?>'" class="btn btn-primary">Next Form</a>
         
    <?php
        }
    }
    ?>
    
    <input type="submit" name="makepdf" class="btn btn-primary" value=" Download Pdf">
    <a href="teacherHome.php" class="btn btn-primary">Cancel</a>
    <br>
    </form>
    
      
    <br>
</div>
</body>
</html>