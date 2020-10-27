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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Teacher Panel</title>
</head>

<body>
<?php
if (isset($_GET['delForm'])) {
  if ($_GET['delForm'] == 'success') {
    echo '<script>alert("Forms Deleted Successfully")</script>';
  }
  if ($_GET['delForm'] == 'notsuccess') {
    echo '<script>alert("Forms Cannot be Deleted ")</script>';
  }
}

?>
<!-- FrontEnd For Home Page -->
<div class="jumbotron" style="height: 100vh;">
  <h1 class="display-4">Hello <?php echo $_SESSION['t_namel']?> ..</h1>
  <p class="lead">Welcome to Procotor System </p>
  <a class="btn btn-danger btn-lg" href="teacherLogout.php" role="button">Log Out</a>
  <hr class="my-4">
  <form action="" method="GET">
    <div class="form-group col-md-4">
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
    <div class="form-group col-md-4">
      <label for="inputState">Year : </label>
      <select name="year" id="inputState" class="form-control">
        <option >Select Year</option>
        <option value="First">First Year</option>
        <option value="Second">Second Year</option>
        <option value="Third">Third Year</option>
        <option value="Fourth">Fourth Year</option>
      </select>
    </div>
    <div class="form-group col-md-4">
    <input type="submit" name="submit" value="Get Students" class="btn btn-dark">
    </div>
    </form>
    <hr class="my-4">

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
                <form action="sHome.php" method="POST">
                  <input type="hidden" name="std_rollno" value="<?php echo $row['rollno'] ?>" >
                  <?php
                    $val = $row['rollno'];
                    $_SESSION['roll'] = $val;
                  ?>
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
    <br><br><br><br><br><br><br>
  </div>
</body>
</html>
