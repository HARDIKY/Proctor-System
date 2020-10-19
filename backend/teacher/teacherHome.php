<?php
    session_start();
    if (!isset($_SESSION['t_emaill'])) {
        header("location:teacher.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <style>
    body {
      background-color: #52b788;
    }
    .thead-dark{
      background-color: #14213d;
      color: white;
    }
    .tbody {
      border-style: solid 1px;
    }
    </style>
    <title>pp</title>
</head>
<body>
<?php 
      if (isset($_GET['form1'])) {
        if ($_GET['form1'] == 'completed') {
          echo '<script>alert("Changes Saved Successfully !")</script>';
        }
        if ($_GET['form1'] == 'notCompleted') {
          echo '<script>alert("There is something wrong with your data")</script>';
        }
      }
      if (isset($_GET['delForm'])) {
        if ($_GET['delForm'] == 'success') {
          echo '<script>alert("Student Deleted Successfully !")</script>';
        }
        if ($_GET['delForm'] == 'notsuccess') {
          echo '<script>alert("There is something wrong with your data")</script>';
        }
      }
    ?>

<br>
<div class="container">
<h1 align="center"><b>Admin Panel</b> </h1>
<br>
<br>
    <form action="" method="GET">
    <div class="form-group ">
      <label for="inputState">Department : </label>
      <select name="dept" id="inputState" class="form-control">
        <option >Select Department</option>
        <option value="Mechanical Engineering">Mechanical Engineering</option>
        <option value="Electronics And TeleCommunication Engineering">Electronics And TeleCommunication Engineering</option>
        <option value="Computer Engineering">Computer Engineering</option>
        <option value="Information Technology">Information Technology</option>
        <option value="Computer Engineering">Computer Engineering</option>
        <option value="Civil Engineering">Civil Engineering</option>
      </select>
    </div> 
    <div class="form-group">
      <label for="inputState">Year : </label>
      <select name="year" id="inputState" class="form-control">
        <option >Select Year</option>
        <option value="First">First Year</option>
        <option value="Second">Second Year</option>
        <option value="Third">Third Year</option>
        <option value="Fourth">Fourth Year</option>
      </select>
    </div>
    <br>
    <input type="submit" name="submit" value="Get Students" class="btn btn-success">
    </div>
    </form>
    <hr>
    <br>
    <br>
    <br>
    <div class="container">
    <table class="table">
        <thead class="thead-dark">
         <tr>
          <th>Roll No</th>
          <th>Name</th>
          <th>Edit</th>
          <th>Delete</th>
         </tr>
        </thead>
        <tbody class="tbody">
        <?php
        if (isset($_GET["submit"])) {
            session_start();

            $conn = mysqli_connect('localhost', 'root', '', 'student');

            $dept = $_GET['dept'];
            $year = $_GET['year'];

            $query1 = "SELECT * FROM studentinfo WHERE dept = '$dept' AND currentyear = '$year';"; 
            $result = mysqli_query($conn, $query1);
            while($row = mysqli_fetch_array($result))
            {
                ?>
            <tr>
              <td><?php echo $row['rollno'] ?></td>
              <td><?php echo $row['name'] ?></td>
              <td>
                <form action="editForm1.php" method="POST">
                  <input type="hidden" name="std_rollno" value="<?php echo $row['rollno'] ?>" >
                  <button type="submit" name="edit-btn" class="btn btn-primary">Edit Form</button>
                </form>
              </td>
              <td>
                <form action="deleteForm.php" method="POST">
                  <input type="hidden" name="delbtn" value="<?php echo $row['rollno'] ?>" >
                  <button type="submit" name="del-btn" class="btn btn-danger">Delete</button>
                </form>
              </td>
              
            </tr>   
            
          <?php
        }
    ?>
<?php
    }
        ?>
    
    
      </tbody>
      
</table>
</div>
</body>
</html>