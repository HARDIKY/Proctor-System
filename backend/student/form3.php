<?php
    session_start();
    if (!isset($_SESSION['rollnol'])) {
        header("location:index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
      integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
      crossorigin="anonymous"
    />
    <title>Student Form</title>
    <style>
      body {
        background-color: #bebebe;
      }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  </head>
  <body>
  <!-- FOR ALERT msg -->
  <?php
    if (isset($_GET['form3'])) {
      if ($_GET['form3'] == 'completed') {
        echo '<script>alert("Qualification Details submitted successfully")</script>';
      }
      if ($_GET['form3'] == 'updated') {
        echo '<script>alert("Qualification Details updated successfully")</script>';
      }
    }
  ?>

    <div class="container mt-3">
      <br />
      <!-- =================================================Educational Qualification form========================================================================================= -->

      <h1>Educational Qualification form</h1>
      <ul class="b">
        <li><p class="lead">ID-Card No : <?php echo $_SESSION['rollnol']?> </p></li>
        <li><p class="lead">Name : <?php echo $_SESSION['name']?> </p></li>
      </ul>
      <hr class="my-4">
      <br />
      <?php 
        $val = $_SESSION['rollnol'];
        $conn = mysqli_connect('localhost', 'root', '', 'student');
        $query = "SELECT * FROM qualidetail WHERE std_rollno = '$val';";
        $result = mysqli_query($conn, $query);
    
        while($row = mysqli_fetch_array($result))
        {
            ?>

      <form action="form3Back.php" method="POST">
        
        <h4>Higher Secondary Qualification Information</h4>
        <div class="forborder" style="border: solid; padding: 15px; border-radius: 15px ">
          <div class="form-row">
            <div class="form-group col-md-2">
              <label for="inputEmail4">10th Marks</label>
              <input
                type="text"
                name="sscmarks"
                class="form-control"
                id="NameInfo1"
                aria-describedby="emailHelp"
                placeholder="10th Marks in %"
                value="<?php echo $row['std_rollno']; ?>"
                required
              />
            </div>
            <div class="form-group col-md-3">
              <label for="exampleInputEmail1">Leaving Date</label>
              <input
                type="date"
                name="sscdate"
                class="form-control"
                id="exampleInputEmail1"
                aria-describedby="emailHelp"
                placeholder="Enter Your Leaving Date"
                value="<?php echo $row['sscdate']; ?>"
                required
                min="2005-01-02"

              />
            </div>
            <div class="form-group col-md-3">
              <label for="dept" style="padding-top: 5px">10th BOARD</label>
              <select name="sscboard" required>
                <option value="<?php echo $row['sscboard']; ?>"><?php echo $row['sscboard']; ?></option>
                <option value="SSC">State Board Maharashtra</option>
                <option value="CBSC">CBSE</option>
                <option value="ICSE">ICSE</option>
              </select>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="inputPassword4"
                >Upload The Leaving Certificate:</label
              >
              <input
                type="file"
                name="idpdf"
                id="pdf_file"
                accept="application/pdf"
                style="padding-top: 5px"
                
              />
              <br /><br />
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-2">
              <label for="inputEmail4">HSC/Diploma Marks</label>
              <input
                type="text"
                name="dipmarks"
                class="form-control"
                id="NameInfo1"
                aria-describedby="emailHelp"
                placeholder="HSC/Diploma % "
                value="<?php echo $row['dipmarks']; ?>"
                required
              />
            </div>
            <div class="form-group col-md-2">
              <label for="exampleInputEmail1">Leaving Date</label>
              <input
                type="date"
                name="dipdate"
                class="form-control"
                id="exampleInputEmail1"
                aria-describedby="emailHelp"
                placeholder="Enter Your Birthdate"
                value="<?php echo $row['dipdate']; ?>"
                required
                min="2005-01-02"

              />
            </div>

            <div class="form-group col-md-6">
              <label for="inputPassword4"
                >Upload The Leaving Certificate:</label
              >
              <input
                type="file"
                name="idpdf"
                id="pdf_file"
                accept="application/pdf"
                style="padding-top: 35px"
               
              />
            </div>
          </div>
        </div>

        <!-- =================================================Semester 1 Information Information========================================================================================= -->

        <br /><br />
        <h4>Semester 1 Information</h4>
        <div class="forborder" style="border: solid; padding: 15px; border-radius: 15px ">
          <div class="form-row">
            <div class="form-group col-md-2">
              <label for="inputEmail4">SEM 1 Marks :</label>
              <input
                type="text"
                name="sem1per"
                class="form-control"
                id="NameInfo1"
                aria-describedby="emailHelp"
                placeholder="Sem1 % "
                value="<?php echo $row['sem1per']; ?>"
              />
            </div>
            <div class="form-group col-md-2">
              <label for="exampleInputEmail1">Sem1 Passing Date :</label>
              <input
                type="date"
                name="sem1date"
                class="form-control"
                id="exampleInputEmail1"
                aria-describedby="emailHelp"
                placeholder="Enter Your Birthdate"
                value="<?php echo $row['sem1date']; ?>"
                min="2005-01-02"
              />
            </div>
            <div class="form-group col-md-2">
              <label for="inputEmail4">SEM 1 Attendance :</label>
              <input
                type="text"
                name="sem1attd"
                class="form-control"
                id="NameInfo1"
                aria-describedby="emailHelp"
                placeholder="Attendance in % "
                value="<?php echo $row['sem1attd']; ?>"
              />
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-2">
              <label for="inputEmail4">Any Subject Backlog ?</label>
              <input
                type="text"
                name="sem1sub"
                class="form-control"
                id="NameInfo1"
                aria-describedby="emailHelp"
                placeholder="Mention if Any"
                value="<?php echo $row['sem1sub']; ?>"
              />
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Upload Sem 1 Marksheet :</label>
              <input
                type="file"
                name="idpdf"
                id="pdf_file"
                accept="application/pdf"
                style="padding-top: 35px"
              />
            </div>
          </div>
        </div>

        <!-- =================================================Semester 2 Information Information========================================================================================= -->

        <br /><br />
        <h4>Semester 2 Information</h4>
        <div class="forborder" style="border: solid; padding: 15px; border-radius: 15px ">
          <div class="form-row">
            <div class="form-group col-md-2">
              <label for="inputEmail4">SEM 2 Marks :</label>
              <input
                type="text"
                name="sem2per"
                class="form-control"
                id="NameInfo1"
                aria-describedby="emailHelp"
                placeholder="Sem2 % "
                value="<?php echo $row['sem2per']; ?>"
              />
            </div>
            <div class="form-group col-md-2">
              <label for="exampleInputEmail1">Sem2 Passing Date :</label>
              <input
                type="date"
                name="sem2date"
                class="form-control"
                id="exampleInputEmail1"
                aria-describedby="emailHelp"
                placeholder="Enter Your Birthdate"
                min="2005-01-02"
                value="<?php echo $row['sem2date']; ?>"

              />
            </div>
            <div class="form-group col-md-2">
              <label for="inputEmail4">SEM 2 Attendance :</label>
              <input
                type="text"
                name="sem2attd"
                class="form-control"
                id="NameInfo1"
                aria-describedby="emailHelp"
                placeholder="Attendance in % "
                value="<?php echo $row['sem2attd']; ?>"
              />
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-2">
              <label for="inputEmail4">Any Subject Backlog ?</label>
              <input
                type="text"
                name="sem2sub"
                class="form-control"
                id="NameInfo1"
                aria-describedby="emailHelp"
                placeholder="Mention if Any"
                value="<?php echo $row['sem2sub']; ?>"
              />
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Upload Sem 2 Marksheet :</label>
              <input
                type="file"
                name="idpdf"
                id="pdf_file"
                accept="application/pdf"
                style="padding-top: 35px"
              />
            </div>
          </div>
        </div>

        <!-- =================================================Semester 3 Information Information========================================================================================= -->

        <br /><br />
        <h4>Semester 3 Information</h4>
        <div class="forborder" style="border: solid; padding: 15px; border-radius: 15px ">
          <div class="form-row">
            <div class="form-group col-md-2">
              <label for="inputEmail4">SEM 3 Marks :</label>
              <input
                type="text"
                name="sem3per"
                class="form-control"
                id="NameInfo1"
                aria-describedby="emailHelp"
                placeholder="Sem3 % "
                value="<?php echo $row['sem3per']; ?>"
              />
            </div>
            <div class="form-group col-md-2">
              <label for="exampleInputEmail1">Sem3 Passing Date :</label>
              <input
                type="date"
                name="sem3date"
                class="form-control"
                id="exampleInputEmail1"
                aria-describedby="emailHelp"
                placeholder="Enter Your Birthdate"
                min="2005-01-02"
                value="<?php echo $row['sem3date']; ?>"
              />
            </div>
            <div class="form-group col-md-2">
              <label for="inputEmail4">SEM 3 Attendance :</label>
              <input
                type="text"
                name="sem3attd"
                class="form-control"
                id="NameInfo1"
                aria-describedby="emailHelp"
                placeholder="Attendance in % "
                value="<?php echo $row['sem3attd']; ?>"
              />
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-2">
              <label for="inputEmail4">Any Subject Backlog ?</label>
              <input
                type="text"
                name="sem3sub"
                class="form-control"
                id="NameInfo1"
                aria-describedby="emailHelp"
                placeholder="Mention if Any"
                value="<?php echo $row['sem3sub']; ?>"
              />
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Upload Sem 3 Marksheet :</label>
              <input
                type="file"
                name="idpdf"
                id="pdf_file"
                accept="application/pdf"
                style="padding-top: 35px"
              />
            </div>
          </div>
        </div>

        <!-- =================================================Semester 4 Information Information========================================================================================= -->

        <br /><br />
        <h4>Semester 4 Information</h4>
        <div class="forborder" style="border: solid; padding: 15px; border-radius: 15px ">
          <div class="form-row">
            <div class="form-group col-md-2">
              <label for="inputEmail4">SEM 4 Marks :</label>
              <input
                type="text"
                name="sem4per"
                class="form-control"
                id="NameInfo1"
                aria-describedby="emailHelp"
                placeholder="Sem4 % "
                value="<?php echo $row['sem4per']; ?>"
              />
            </div>
            <div class="form-group col-md-2">
              <label for="exampleInputEmail1">Sem4 Passing Date :</label>
              <input
                type="date"
                name="sem4date"
                class="form-control"
                id="exampleInputEmail1"
                aria-describedby="emailHelp"
                placeholder="Enter Your Passing Date"
                min="2005-01-02"
                value="<?php echo $row['sem4date']; ?>"
              />
            </div>
            <div class="form-group col-md-2">
              <label for="inputEmail4">SEM 4 Attendance :</label>
              <input
                type="text"
                name="sem4attd"
                class="form-control"
                id="NameInfo1"
                aria-describedby="emailHelp"
                placeholder="Attendance in % "
                value="<?php echo $row['sem4attd']; ?>"
              />
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-2">
              <label for="inputEmail4">Any Subject Backlog ?</label>
              <input
                type="text"
                name="sem4sub"
                class="form-control"
                id="NameInfo1"
                aria-describedby="emailHelp"
                placeholder="Mention if Any"
                value="<?php echo $row['sem1sub']; ?>"
              />
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Upload Sem 4 Marksheet :</label>
              <input
                type="file"
                name="idpdf"
                id="pdf_file"
                accept="application/pdf"
                style="padding-top: 35px"
              />
            </div>
          </div>
        </div>

        <!-- =================================================Semester 5 Information Information========================================================================================= -->

        <br /><br />
        <h4>Semester 5 Information</h4>
        <div class="forborder" style="border: solid; padding: 15px; border-radius: 15px ">
          <div class="form-row">
            <div class="form-group col-md-2">
              <label for="inputEmail4">SEM 5 Marks :</label>
              <input
                type="text"
                name="sem5per"
                class="form-control"
                id="NameInfo1"
                aria-describedby="emailHelp"
                placeholder="Sem5 % "
                value="<?php echo $row['sem5per']; ?>"
              />
            </div>
            <div class="form-group col-md-2">
              <label for="exampleInputEmail1">Sem5 Passing Date :</label>
              <input
                type="date"
                name="sem5date"
                class="form-control"
                id="exampleInputEmail1"
                aria-describedby="emailHelp"
                placeholder="Enter Your Birthdate"
                min="2005-01-02"
                value="<?php echo $row['sem5date']; ?>"

              />
            </div>
            <div class="form-group col-md-2">
              <label for="inputEmail4">SEM 5 Attendance :</label>
              <input
                type="text"
                name="sem5attd"
                class="form-control"
                id="NameInfo1"
                aria-describedby="emailHelp"
                placeholder="Attendance in % "
                value="<?php echo $row['sem5attd']; ?>"
              />
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-2">
              <label for="inputEmail4">Any Subject Backlog ?</label>
              <input
                type="text"
                name="sem5sub"
                class="form-control"
                id="NameInfo1"
                aria-describedby="emailHelp"
                placeholder="Mention if Any"
                value="<?php echo $row['sem5sub']; ?>"
              />
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Upload Sem 5 Marksheet :</label>
              <input
                type="file"
                name="idpdf"
                id="pdf_file"
                accept="application/pdf"
                style="padding-top: 35px"
              />
            </div>
          </div>
        </div>

        <!-- =================================================Semester 6 Information Information========================================================================================= -->

        <br /><br />
        <h4>Semester 6 Information</h4>
        <div class="forborder" style="border: solid; padding: 15px; border-radius: 15px ">
          <div class="form-row">
            <div class="form-group col-md-2">
              <label for="inputEmail4">SEM 6 Marks :</label>
              <input
                type="text"
                name="sem6per"
                class="form-control"
                id="NameInfo1"
                aria-describedby="emailHelp"
                placeholder="Sem6 % "
                value="<?php echo $row['sem6per']; ?>"
              />
            </div>
            <div class="form-group col-md-2">
              <label for="exampleInputEmail1">Sem6 Passing Date :</label>
              <input
                type="date"
                name="sem6date"
                class="form-control"
                id="exampleInputEmail1"
                aria-describedby="emailHelp"
                placeholder="Enter Your Birthdate"
                min="2005-01-02"
                value="<?php echo $row['sem6date']; ?>"
              />
            </div>
            <div class="form-group col-md-2">
              <label for="inputEmail4">SEM 6 Attendance :</label>
              <input
                type="text"
                name="sem6attd"
                class="form-control"
                id="NameInfo1"
                aria-describedby="emailHelp"
                placeholder="Attendance in % "
                value="<?php echo $row['sem6attd']; ?>"
              />
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-2">
              <label for="inputEmail4">Any Subject Backlog ?</label>
              <input
                type="text"
                name="sem6sub"
                class="form-control"
                id="NameInfo1"
                aria-describedby="emailHelp"
                placeholder="Mention if Any"
                value="<?php echo $row['sem6sub']; ?>"
              />
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Upload Sem 6 Marksheet :</label>
              <input
                type="file"
                name="idpdf"
                id="pdf_file"
                accept="application/pdf"
                style="padding-top: 35px"
              />
            </div>
          </div>
        </div>
        <!-- =================================================Semester 7 Information Information========================================================================================= -->

        <br /><br />
        <h4>Semester 7 Information</h4>
        <div class="forborder" style="border: solid; padding: 15px; border-radius: 15px ">
          <div class="form-row">
            <div class="form-group col-md-2">
              <label for="inputEmail4">SEM 7 Marks :</label>
              <input
                type="text"
                name="sem7per"
                class="form-control"
                id="NameInfo1"
                aria-describedby="emailHelp"
                placeholder="Sem7 % "
                value="<?php echo $row['sem7per']; ?>"
              />
            </div>
            <div class="form-group col-md-2">
              <label for="exampleInputEmail1">Sem7 Passing Date :</label>
              <input
                type="date"
                name="sem7date"
                class="form-control"
                id="exampleInputEmail1"
                aria-describedby="emailHelp"
                placeholder="Enter Your Birthdate"
                min="2005-01-02"
                value="<?php echo $row['sem7date']; ?>"
              />
            </div>
            <div class="form-group col-md-2">
              <label for="inputEmail4">SEM 7 Attendance :</label>
              <input
                type="text"
                name="sem7attd"
                class="form-control"
                id="NameInfo1"
                aria-describedby="emailHelp"
                placeholder="Attendance in % "
                value="<?php echo $row['sem7attd']; ?>"
              />
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-2">
              <label for="inputEmail4">Any Subject Backlog ?</label>
              <input
                type="text"
                name="sem7sub"
                class="form-control"
                id="NameInfo1"
                aria-describedby="emailHelp"
                placeholder="Mention if Any"
                value="<?php echo $row['sem7sub']; ?>"
              />
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Upload Sem 7 Marksheet :</label>
              <input
                type="file"
                name="idpdf"
                id="pdf_file"
                accept="application/pdf"
                style="padding-top: 35px"
              />
            </div>
          </div>
        </div>

        <!-- =================================================Semester 8 Information Information========================================================================================= -->

        <br /><br />
        <h4>Semester 8 Information</h4>
        <div class="forborder" style="border: solid; padding: 15px; border-radius: 15px ">
          <div class="form-row">
            <div class="form-group col-md-2">
              <label for="inputEmail4">SEM 8 Marks :</label>
              <input
                type="text"
                name="sem8per"
                class="form-control"
                id="NameInfo1"
                aria-describedby="emailHelp"
                placeholder="Sem8 % "
                value="<?php echo $row['sem8per']; ?>"
              />
            </div>
            <div class="form-group col-md-2">
              <label for="exampleInputEmail1">Sem8 Passing Date :</label>
              <input
                type="date"
                name="sem8date"
                class="form-control"
                id="exampleInputEmail1"
                aria-describedby="emailHelp"
                placeholder="Enter Your Birthdate"
                min="2005-01-02"
                value="<?php echo $row['sem8date']; ?>"
              />
            </div>
            <div class="form-group col-md-2">
              <label for="inputEmail4">SEM 8 Attendance :</label>
              <input
                type="text"
                name="sem8attd"
                class="form-control"
                id="NameInfo1"
                aria-describedby="emailHelp"
                placeholder="Attendance in % "
                value="<?php echo $row['sem8attd']; ?>"
              />
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-2">
              <label for="inputEmail4">Any Subject Backlog ?</label>
              <input
                type="text"
                name="sem8sub"
                class="form-control"
                id="NameInfo1"
                aria-describedby="emailHelp"
                placeholder="Mention if Any"
                value="<?php echo $row['sem8sub']; ?>"
              />
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Upload Sem 8 Marksheet :</label>
              <input
                type="file"
                name="idpdf"
                id="pdf_file"
                accept="application/pdf"
                style="padding-top: 35px"
              />
            </div>
          </div>
        </div>
        <br>
        <br>
        &nbsp; <input type="submit" name="subForm3" value="Submit" class="btn btn-dark"> &nbsp; &nbsp;
        <input type="submit" name="mkpdf3" value="Download pdf" class="btn btn-dark"> &nbsp; &nbsp;
        <a href="studentHome.php" class="btn btn-dark">Go Home</a>
        <?php
            }
        ?>
      </form>
    </div>
    <br><br><br>
  </body>
</html>
