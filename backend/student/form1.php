<?php
    session_start();
    if (!isset($_SESSION['rollnol'])) {
        header("location:student.php");
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
      ul.b {
  list-style-type: square;
}
    </style>
  </head>
  <body>
  <?php
    if (isset($_GET['form1'])) {
      if ($_GET['form1'] == 'completed') {
        echo '<script>alert("Student Details submitted successfully")</script>';
      }
      }
  ?>
    <div class="container mt-3">
      <br />
      <h1>Student Form</h1>
      <ul class="b">
        <li><p class="lead">ID-Card No : <?php echo $_SESSION['rollnol']?> </p></li>
        <li><p class="lead">Name : <?php echo $_SESSION['name']?> </p></li>
      </ul>
      <hr class="my-4">
      <?php 
        $val = $_SESSION['rollnol'];
        $conn = mysqli_connect('localhost', 'root', '', 'student');
        $query = "SELECT * FROM studentinfo WHERE std_rollno = '$val';";
        $result = mysqli_query($conn, $query);
    
        while($row = mysqli_fetch_array($result))
        {
            ?>
        <form action="form1Back.php" method="POST">
        <br />
        <h4>Contact Information</h4>
        <div class="forborder" style="border: solid; padding: 10px; border-radius: 15px">
          <div class="form-row">
            <div class="form-group col-md-3">
              <label for="inputEmail4">Name</label>
              <input
                type="text"
                name="name"
                class="form-control"
                id="NameInfo1"
                aria-describedby="emailHelp"
                placeholder="First Name"
                value="<?php echo $row['name']; ?>"
              />
            </div>
            <div class="form-group col-md-3">
              <label for="inputEmail4" style="padding-top: 17px"></label>
              <input
                type="text"
                name="m_name"
                class="form-control"
                id="NameInfo2"
                aria-describedby="emailHelp"
                placeholder="Middle Name"
                value="<?php echo $row['m_name']; ?>"
              />
            </div>
            <div class="form-group col-md-3">
              <label for="inputEmail4" style="padding-top: 17px"></label>
              <input
                type="text"
                name="l_name"
                class="form-control"
                id="NameInfo3"
                aria-describedby="emailHelp"
                placeholder="Last Name"
                value="<?php echo $row['l_name']; ?>"
              />
            </div>
            <div class="form-group col-md-4">
              <label for="inputPassword4">Enter Id Card Number</label>
              <input
                type="number"
                name="rollno"
                class="form-control"
                id="exampleInputEmail1"
                placeholder="Mentioned On Id Card"
                value="<?php echo $row['std_rollno']; ?>"
              />
            </div>
            <div class="form-group col-md-4">
              <label for="inputPassword4">Upload The Id card</label>
              <input
                type="file"
                name="idpdf"
                id="pdf_file"
                accept="application/pdf"
                style="padding-top: 5px"
              /><br /><br />
            </div>
          </div>
     
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="exampleInputEmail1">Email</label>
              <input
                type="email"
                name="email"
                class="form-control"
                id="exampleInputEmail1"
                aria-describedby="emailHelp"
                placeholder="Enter Your Email"
                value="<?php echo $row['email']; ?>"
              />
            </div>
            <div class="form-group col-md-3">
              <label for="exampleInputEmail1">Mobile</label>
              <input
                type="Number"
                name="phone_no"
                class="form-control"
                id="exampleInputEmail1"
                aria-describedby="emailHelp"
                placeholder="Enter Your Mobile Number "
                value="<?php echo $row['mobile']; ?>"
              />
            </div>
            
          
          <div class="form-group col-md-8">
            <label for="inputAddress2">Enter Your Address</label>
            <input
              type="text"
              name="address"
              class="form-control"
              id="inputAddress2"
              placeholder="Enter The Whole Adress"
              value="<?php echo $row['address']; ?>"
            />
          </div>
        </div>
        </div>
        <!-- =================================================Admission Information========================================================================================= -->

        <br /><br />
        <h4>Admission Information</h4>
        <div class="forborder" style="border: solid; padding: 10px; border-radius: 15px">
          <div class="form-row">
            <div class="form-group col-md-2" style="padding-top: 17px;">
              <label for="exampleInputEmail1">Admission Date</label>
              <input
                type="date"
                name="myad"
                class="form-control"
                id="exampleInputEmail1"
                aria-describedby="emailHelp"
                placeholder="Enter Your Birthdate"
                value="<?php echo $row['monthaddm']; ?>"
              />
            </div>
            <div class="form-group col-3">
              <label for="dept" style="padding-top:17px;">Department:</label>
              <select name="dept">
                <option value="<?php echo $row['dept']; ?>" ><?php echo $row['dept']; ?></option>
                <option value="Mechanical Engineering">Mechanical Engineering</option>
                <option value="Electronics And TeleCommunication Engineering">Electronics And TeleCommunication Engineering</option>
                <option value="Computer Engineering">Computer Engineering</option>
                <option value="Information Technology">Information Technology</option>
                <option value="Computer Engineering">Computer Engineering</option>
                <option value="Civil Engineering">Civil Engineering</option>
              </select>
            </div>
          </div>
 

          <div class="form-row">
            <div class="form-group col-md-3" style="padding-top: 17px;">
              <label for="year">Admined To:</label>
              <select name="year">
                <option value="<?php echo $row['year']; ?>"><?php echo $row['year']; ?></option>
                <option value="first">First</option>
                <option value="second">Direct Second</option>
              </select>
            </div>
            <div class="form-group col-md-3">
              <label for="dept" style="padding-top:17px;">Currently in:</label>
              <select name="currentyear">
                <option value="<?php echo $row['currentyear']; ?>"><?php echo $row['currentyear']; ?></option>
                <option value="first">First</option>
                <option value="second">Second</option>
                <option value="third">Third</option>
                <option value="fourth">Fourth</option>
              </select>
            </div>
            <div class="form-group col-md-3">
                <label for="dept" style="padding-top:17px;">Currently in Sem:</label>
                <select name="currentsem">
                    <option value="<?php echo $row['currentsem']; ?>"><?php echo $row['currentsem']; ?></option>
                    <option value="first">First</option>
                    <option value="second">Second</option>
                    <option value="third">Third</option>
                    <option value="fourth">Fourth</option>
                    <option value="first">Fifth</option>
                    <option value="second">Sixth</option>
                    <option value="third">Seventh</option>
                    <option value="fourth">Eight</option>
                  
                </select>
              </div>
        </div>
    </div>

        <!-- =================================================Personal Information========================================================================================= -->

        <br /><br />
        <h4>Personal Information</h4>
        <div class="forborder" style="border: solid; padding: 10px 10px; border-radius: 15px">
          <div class="form-row">
            <div class="form-group col-md-3">
              <label for="exampleInputEmail1">Birth Date</label>
              <input
                type="date"
                name="bdate"
                class="form-control"
                id="exampleInputEmail1"
                aria-describedby="emailHelp"
                placeholder="Enter Your Birthdate"
                value="<?php echo $row['birthdate']; ?>"
              />
            </div>
            <div class="form-group col-md-3">
              <label for="inputEmail4">Blood Group</label>
              <input
                type="text"
                name="bg"
                class="form-control"
                id="NameInfo2"
                aria-describedby="emailHelp"
                placeholder="Enter Your Blood Group"
                value="<?php echo $row['bg']; ?>"
              />
            </div>
         
            <div class="form-group col">
              <label for="inputPassword4">Any Health Problems?</label>
              <input
                type="text"
                name="health"
                class="form-control"
                id="exampleInputEmail1"
                placeholder="Mention if any"
                value="<?php echo $row['health']; ?>"
              />
            </div>
            <div class="form-group col-md-4">
              <label for="inputPassword4">Upload Dcotors Documents</label>
              <input
                type="file"
                name="idpdf"
                id="pdf_file"
                accept="application/pdf"
                style="padding-top: 5px"
              /><br /><br />
            </div>
          </div>


          <div class="form-row">
            <div class="form-group col-md-3">
              <label for="inputEmail4">Hobbies ?</label>
              <input
                type="text"
                name="hobbies"
                class="form-control"
                id="NameInfo1"
                aria-describedby="emailHelp"
                placeholder="Hobbie 1"
                value="<?php echo $row['hobbies']; ?>"
              />
            </div>
            <div class="form-group col-md-3">
              <label for="inputEmail4" style="padding-top: 17px"></label>
              <input
                type="text"
                name="hobbie2"
                class="form-control"
                id="NameInfo2"
                aria-describedby="emailHelp"
                placeholder="Hobbie 2"
                value="<?php echo $row['hobbie2']; ?>"
              />
            </div>
            <div class="form-group col-md-3">
              <label for="inputEmail4" style="padding-top: 17px"></label>
              <input
                type="text"
                name="hobbie3"
                class="form-control"
                id="NameInfo3"
                aria-describedby="emailHelp"
                placeholder="Hobbie 3"
                value="<?php echo $row['hobbie3']; ?>"
              />
            </div>
          </div>

          
          <div class="form-row">
            <div class="form-group col-md-3">
              <label for="inputEmail4">Any Sport Activites?</label>
              <input
                type="text"
                name="sports"
                class="form-control"
                id="NameInfo1"
                aria-describedby="emailHelp"
                placeholder="Sport 1"
                value="<?php echo $row['sports']; ?>"
              />
            </div>
            <div class="form-group col-md-3">
              <label for="inputEmail4">Upload Certificate:</label>
              <input
              type="file"
              name="idpdf"
              id="pdf_file"
              accept="application/pdf"
              style="padding-top: 5px"
            />
            </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-3">
                <label for="inputEmail4"></label>
                <input
                  type="text"
                  name="sport2"
                  class="form-control"
                  id="NameInfo1"
                  aria-describedby="emailHelp"
                  placeholder="Sport 2"
                  value="<?php echo $row['sport2']; ?>"
                />
              </div>
              <div class="form-group col-md-3">
                <label for="inputEmail4">Upload Certificate:</label>
                <input
                type="file"
                name="idpdf"
                id="pdf_file"
                accept="application/pdf"
                style="padding-top: 5px"
                />
             
              </div>
              </div>

          </div>
          <br>
          &nbsp; <input type="submit" name="subForm1" value="Submit" class="btn btn-dark"> &nbsp; &nbsp;
          <input type="submit" name="mkpdf1" value="Download pdf" class="btn btn-dark"> &nbsp; &nbsp;
          <a href="studentHome.php" class="btn btn-dark">Go Home</a>
          <br>
        </div>
        <?php
            }
        ?>
         
      </form>
      <br />
      <br />
    </div>
  </body>
</html>