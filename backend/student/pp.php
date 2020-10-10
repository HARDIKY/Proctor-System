<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <title>pp</title>
</head>
<body>
<br>

    <form action="" method="post">
    <div class="container">
    <div class="form-group ">
      <label for="inputState">Department</label>
      <select name="dept" id="inputState" class="form-control">
        <option >Select Department</option>
        <option value="IT" >Information Technology </option>
        <option value="CO">Computer Enginnering</option>
        <option value="EC">Electronic Enginnering</option>
      </select>
    </div>
    <div class="form-group">
      <label for="inputState">Year</label>
      <select name="year" id="inputState" class="form-control">
        <option >Select Department</option>
        <option value="first">First Year</option>
        <option value="second">Second Year</option>
        <option value="third">Third Year</option>
        <option value="fourth">Fourth Year</option>
      </select>
    </div>
    
    <input type="submit" name="submit" value="Get Students" class="btn btn-success">
    </div>
    </form>
    <br>
    <br>
    <br>
    <table class="table">
        <thead class="thead-dark">
         <tr>
          <th scope="col">Roll No</th>
          <th scope="col">Name</th>
          <th scope="col">View</th>
         </tr>
        </thead>
        <tbody>
        <?php
        if (isset($_POST["submit"])) {
            session_start();

            $conn = mysqli_connect('localhost', 'root', '', 'student');

            $dept = $_POST['dept'];
            $year = $_POST['year'];

            $query1 = "SELECT * FROM studentinfo WHERE dept = '$dept' AND currentyear = '$year';"; 
            $result = mysqli_query($conn, $query1);
            while($row = mysqli_fetch_array($result))
            {
                ?>
            <tr>
              <td><?php echo $row['std_rollno'] ?></td>
              <td><?php echo $row['name'] ?></td>
              <td>
                <form action="../teacher/editForm1.php" method="POST">
                  <input type="hidden" name="editbtn" value="<?php echo $row['std_rollno'] ?>" >
                  <button type="submit" name="editstd" class="btn btn-primary">Edit</button>
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
</body>
</html>