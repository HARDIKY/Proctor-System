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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
      integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
      crossorigin="anonymous"
    />
    
    <title>Form 2</title>
    <style>
      body {
        background-color: #bebebe;
      }
      ul.b {
        list-style-type: square;
      }
      .collapsible {
        background-color: #777;
        color: white;
        cursor: pointer;
        margin-left:20px;
        margin-top:20px;
        /* padding: 0 18px; */
        width: 32%;
        height: 30px;
        border: none;
        border-radius: 10px;
        text-align: left;
        outline: none;
        font-size: 12px;
      }

      .active, .collapsible:hover {
        background-color: #555;
      }

      .collapsible:after {
        content: '\002B';
        color: white;
        font-weight: bold;
        float: right;
        margin-left: 5px;
      }
      
      .active:after {
        content: "\2212";
      }

      .content {
        padding: 0 18px;
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.2s ease-out;
        background-color: #bebebe;
      }

    </style>
  </head>

  <body>
  <!-- For Alert msg -->
  <?php
    if (isset($_GET['form2'])) {
      if ($_GET['form2'] == 'completed') {
        echo '<script>alert("Family Details submitted successfully")</script>';
      }
      if ($_GET['form2'] == 'updated') {
        echo '<script>alert("Family Details updated successfully")</script>';
      }
      }
?>

    <div class="container mt-3">
      <br />
      <h1>Family Information Form</h1>
      <ul class="b">
        <li><p class="lead">ID-Card No : <?php echo $_SESSION['rollnol']?> </p></li>
        <li><p class="lead">Name : <?php echo $_SESSION['name']?> </p></li>
      </ul>
      <hr class="my-4">
      <br />
      <?php 
        $val = $_SESSION['rollnol'];
        $conn = mysqli_connect('localhost', 'root', '', 'student');
        $query1 = "SELECT * FROM familiydetail WHERE std_rollno = '$val';";
        $result = mysqli_query($conn, $query1);
                
    
        while($row = mysqli_fetch_array($result))
        {
            ?>
      <form action="form2Back.php" method="POST">
        
        <!-- ===================================Father Section====================================================== -->
        <h4>Father's Information</h4>
        <div
          class="forborder"
          style="border: solid; padding: 10px; border-radius: 15px"
        >
          <div class="form-row">
            <div class="form-group col-md-3">
              <label for="inputEmail4">Name</label>
              <input
                type="text"
                name="f_fname"
                class="form-control"
                id="NameInfo1"
                aria-describedby="emailHelp"
                placeholder="First Name"
                value="<?php echo $row['f_fname']; ?>"
              />
            </div>
            <div class="form-group col-md-3">
              <label for="inputEmail4" style="padding-top: 17px"></label>
              <input
                type="text"
                name="f_mname"
                class="form-control"
                id="NameInfo2"
                aria-describedby="emailHelp"
                placeholder="Middle Name"
                value="<?php echo $row['f_mname']; ?>"
              />
            </div>
            <div class="form-group col-md-3">
              <label for="inputEmail4" style="padding-top: 17px"></label>
              <input
                type="text"
                name="f_lname"
                class="form-control"
                id="NameInfo3"
                aria-describedby="emailHelp"
                placeholder="Last Name"
                value="<?php echo $row['f_lname']; ?>"
              />
            </div>
          </div>
          <!-- ======================================================================= -->
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="exampleInputEmail1">Email</label>
              <input
                type="email"
                name="f_email"
                class="form-control"
                id="exampleInputEmail1"
                aria-describedby="emailHelp"
                placeholder="Enter Father's Email"
                value="<?php echo $row['f_email']; ?>"
              />
            </div>
            <div class="form-group col-md-3">
              <label for="exampleInputEmail1">Mobile</label>
              <input
                type="text"
                name="m_mob"
                class="form-control"
                id="exampleInputEmail1"
                aria-describedby="emailHelp"
                placeholder="Enter Father's Mobile Number "
                value="<?php echo $row['f_mob']; ?>"
              />
            </div>
            <div class="form-group col-md-1">
              <label for="inputPassword4"> Age:</label>
              <input
                type="text"
                name="f_age"
                class="form-control"
                id="exampleInputEmail1"
                placeholder="Age"
                value="<?php echo $row['f_age']; ?>"
              />
            </div>
          </div>

          <!-- ========================================================================= -->

          <div class="form-row">
            <div class="form-group col-md-3">
              <label for="inputPassword4"> Qualification:</label>
              <input
                type="text"
                name="f_qua"
                class="form-control"
                id="exampleInputEmail1"
                placeholder=" Father's Qualification Details"
                value="<?php echo $row['f_qua']; ?>"
              />
            </div>
            <div class="form-group col-md-3">
              <label for="inputPassword4"> Occupation:</label>
              <input
                type="text"
                name="f_occ"
                class="form-control"
                id="exampleInputEmail1"
                placeholder=" Father's Occupation"
                value="<?php echo $row['f_occ']; ?>"
              />
            </div>
          </div>
        </div>

        <!-- ===================================Mothers Section====================================================== -->

        <br /><br />
        <h4>Mother's Information</h4>

        <div
          class="forborder"
          style="border: solid; padding: 10px; border-radius: 15px"
        >
          <div class="form-row">
            <div class="form-group col-md-3">
              <label for="inputEmail4">Name</label>
              <input
                type="text"
                name="m_fname"
                class="form-control"
                id="NameInfo1"
                aria-describedby="emailHelp"
                placeholder="First Name"
                value="<?php echo $row['m_fname']; ?>"
              />
            </div>
            <div class="form-group col-md-3">
              <label for="inputEmail4" style="padding-top: 17px"></label>
              <input
                type="text"
                name="m_mname"
                class="form-control"
                id="NameInfo2"
                aria-describedby="emailHelp"
                placeholder="Middle Name"
                value="<?php echo $row['m_mname']; ?>"
              />
            </div>
            <div class="form-group col-md-3">
              <label for="inputEmail4" style="padding-top: 17px"></label>
              <input
                type="text"
                name="m_lname"
                class="form-control"
                id="NameInfo3"
                aria-describedby="emailHelp"
                placeholder="Last Name"
                value="<?php echo $row['m_lname']; ?>"
              />
            </div>
          </div>
          <!-- ======================================================================= -->
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="exampleInputEmail1">Email</label>
              <input
                type="email"
                name="m_email"
                class="form-control"
                id="exampleInputEmail1"
                aria-describedby="emailHelp"
                placeholder="Enter Mother's Email"
                value="<?php echo $row['m_email']; ?>"
              />
            </div>
            <div class="form-group col-md-3">
              <label for="exampleInputEmail1">Mobile</label>
              <input
                type="text"
                name="m_mob"
                class="form-control"
                id="exampleInputEmail1"
                aria-describedby="emailHelp"
                placeholder="Enter Mother's Mobile Number "
                value="<?php echo $row['m_mob']; ?>"
              />
            </div>
            <div class="form-group col-md-1">
              <label for="inputPassword4"> Age:</label>
              <input
                type="text"
                name="m_age"
                class="form-control"
                id="exampleInputEmail1"
                placeholder="Age"
                value="<?php echo $row['m_age']; ?>"
              />
            </div>
          </div>

          <!-- ========================================================================= -->

          <div class="form-row">
            <div class="form-group col-md-3">
              <label for="inputPassword4"> Qualification:</label>
              <input
                type="text"
                name="m_qua"
                class="form-control"
                id="exampleInputEmail1"
                placeholder=" Mother's Qualification Details"
                value="<?php echo $row['m_qua']; ?>"
              />
            </div>
            <div class="form-group col-md-3">
              <label for="inputPassword4"> Occupation:</label>
              <input
                type="text"
                name="m_occ"
                class="form-control"
                id="exampleInputEmail1"
                placeholder=" Mother's Occupation"
                value="<?php echo $row['m_occ']; ?>"
              />
            </div>
          </div>
        </div>

        <!-- ===================================Sibling 1 Section====================================================== -->

        <br /><br />
        <h4>Sibling's Information</h4>
        <div
          class="forborder"
          style="border: solid; padding: 10px; border-radius: 15px"
        >
          <div class="form-row">
            <div class="form-group col-md-3">
              <label for="inputEmail4">Name</label>
              <input
                type="text"
                name="s1_fname"
                class="form-control"
                id="NameInfo1"
                aria-describedby="emailHelp"
                placeholder="First Name"
                value="<?php echo $row['s1_fname']; ?>"
              />
            </div>
            <div class="form-group col-md-3">
              <label for="inputEmail4" style="padding-top: 17px"></label>
              <input
                type="text"
                name="s1_mname"
                class="form-control"
                id="NameInfo2"
                aria-describedby="emailHelp"
                placeholder="Middle Name"
                value="<?php echo $row['s1_mname']; ?>"
              />
            </div>
            <div class="form-group col-md-3">
              <label for="inputEmail4" style="padding-top: 17px"></label>
              <input
                type="text"
                name="s1_lname"
                class="form-control"
                id="NameInfo3"
                aria-describedby="emailHelp"
                placeholder="Last Name"
                value="<?php echo $row['s1_lname']; ?>"
              />
            </div>
          </div>
          <!-- ======================================================================= -->
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="exampleInputEmail1">Email</label>
              <input
                type="email"
                name="s1_email"
                class="form-control"
                id="exampleInputEmail1"
                aria-describedby="emailHelp"
                placeholder="Enter Sibling's Email"
                value="<?php echo $row['s1_email']; ?>"
              />
            </div>
            <div class="form-group col-md-3">
              <label for="exampleInputEmail1">Mobile</label>
              <input
                type="text"
                name="s1_mob"
                class="form-control"
                id="exampleInputEmail1"
                aria-describedby="emailHelp"
                placeholder="Enter Sibling's Mobile Number "
                value="<?php echo $row['s1_mob']; ?>"
              />
            </div>
            <div class="form-group col-md-1">
              <label for="inputPassword4"> Age:</label>
              <input
                type="text"
                name="s1_age"
                class="form-control"
                id="exampleInputEmail1"
                placeholder="Age"
                value="<?php echo $row['s1_age']; ?>"
              />
            </div>
          </div>

          <!-- ========================================================================= -->

          <div class="form-row">
            <div class="form-group col-md-3">
              <label for="inputPassword4"> Qualification:</label>
              <input
                type="text"
                name="s1_qua"
                class="form-control"
                id="exampleInputEmail1"
                placeholder=" Sibling's Qualification Details"
                value="<?php echo $row['s1_qua']; ?>"
              />
            </div>
            <div class="form-group col-md-3">
              <label for="inputPassword4"> Occupation:</label>
              <input
                type="text"
                name="s1_occ"
                class="form-control"
                id="exampleInputEmail1"
                placeholder=" Sibling's Occupation"
                value="<?php echo $row['s1_occ']; ?>"
              />
            </div>
          </div>
        </div>
        
        <button type="button" class="collapsible" >Add more Siblings</button>
        
        <!-- After Add Sibling button -->
        <div class="content">
        <br>
        <div
          class="forborder"
          style="border: solid; padding: 10px; border-radius: 15px"
        >

        <!-- 2nd Sibling -->
        <h5>&#8226; Sibling 2 </h5>
          <div class="form-row">
            <div class="form-group col-md-3">
              <label for="inputEmail4">Name</label>
              <input
                type="text"
                name="s2_fname"
                class="form-control"
                id="NameInfo1"
                aria-describedby="emailHelp"
                placeholder="First Name"
                value="<?php echo $row['s2_fname']; ?>"
              />
            </div>
            <div class="form-group col-md-3">
              <label for="inputEmail4" style="padding-top: 17px"></label>
              <input
                type="text"
                name="s2_mname"
                class="form-control"
                id="NameInfo2"
                aria-describedby="emailHelp"
                placeholder="Middle Name"
                value="<?php echo $row['s2_mname']; ?>"
              />
            </div>
            <div class="form-group col-md-3">
              <label for="inputEmail4" style="padding-top: 17px"></label>
              <input
                type="text"
                name="s2_lname"
                class="form-control"
                id="NameInfo3"
                aria-describedby="emailHelp"
                placeholder="Last Name"
                value="<?php echo $row['s2_lname']; ?>"
              />
            </div>
          </div>
          <!-- ======================================================================= -->
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="exampleInputEmail1">Email</label>
              <input
                type="email"
                name="s2_email"
                class="form-control"
                id="exampleInputEmail1"
                aria-describedby="emailHelp"
                placeholder="Enter Email"
                value="<?php echo $row['s2_email']; ?>"
              />
            </div>
            <div class="form-group col-md-3">
              <label for="exampleInputEmail1">Mobile</label>
              <input
                type="text"
                name="s2_mob"
                class="form-control"
                id="exampleInputEmail1"
                aria-describedby="emailHelp"
                placeholder="Enter Mobile Number "
                value="<?php echo $row['s2_mob']; ?>"
              />
            </div>
            <div class="form-group col-md-1">
              <label for="inputPassword4"> Age:</label>
              <input
                type="text"
                name="s2_age"
                class="form-control"
                id="exampleInputEmail1"
                placeholder="Age"
                value="<?php echo $row['s2_age']; ?>"
              />
            </div>
          </div>

          <!-- ========================================================================= -->

          <div class="form-row">
            <div class="form-group col-md-3">
              <label for="inputPassword4"> Qualification:</label>
              <input
                type="text"
                name="s2_qua"
                class="form-control"
                id="exampleInputEmail1"
                placeholder=" Qualification Details"
                value="<?php echo $row['s2_qua']; ?>"
              />
            </div>
            <div class="form-group col-md-3">
              <label for="inputPassword4"> Occupation:</label>
              <input
                type="text"
                name="s2_occ"
                class="form-control"
                id="exampleInputEmail1"
                placeholder=" Occupation"
                value="<?php echo $row['s2_occ']; ?>"
              />
            </div>
        </div>
        <br>
        <hr>
        <!-- 3rd sibling -->
        <h5>&#8226; Sibling 3</h5>
          <div class="form-row">
            <div class="form-group col-md-3">
              <label for="inputEmail4">Name</label>
              <input
                type="text"
                name="s3_fname"
                class="form-control"
                id="NameInfo1"
                aria-describedby="emailHelp"
                placeholder="First Name"
                value="<?php echo $row['s3_fname']; ?>"
              />
            </div>
            <div class="form-group col-md-3">
              <label for="inputEmail4" style="padding-top: 17px"></label>
              <input
                type="text"
                name="s3_mname"
                class="form-control"
                id="NameInfo2"
                aria-describedby="emailHelp"
                placeholder="Middle Name"
                value="<?php echo $row['s3_mname']; ?>"
              />
            </div>
            <div class="form-group col-md-3">
              <label for="inputEmail4" style="padding-top: 17px"></label>
              <input
                type="text"
                name="s3_lname"
                class="form-control"
                id="NameInfo3"
                aria-describedby="emailHelp"
                placeholder="Last Name"
                value="<?php echo $row['s3_lname']; ?>"
              />
            </div>
          </div>
          <!-- ======================================================================= -->
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="exampleInputEmail1">Email</label>
              <input
                type="email"
                name="s3_email"
                class="form-control"
                id="exampleInputEmail1"
                aria-describedby="emailHelp"
                placeholder="Enter Email"
                value="<?php echo $row['s3_email']; ?>"
              />
            </div>
            <div class="form-group col-md-3">
              <label for="exampleInputEmail1">Mobile</label>
              <input
                type="text"
                name="s3_mob"
                class="form-control"
                id="exampleInputEmail1"
                aria-describedby="emailHelp"
                placeholder="Enter Mobile Number "
                value="<?php echo $row['s3_mob']; ?>"
              />
            </div>
            <div class="form-group col-md-1">
              <label for="inputPassword4"> Age:</label>
              <input
                type="text"
                name="s3_age"
                class="form-control"
                id="exampleInputEmail1"
                placeholder="Age"
                value="<?php echo $row['s3_age']; ?>"
              />
            </div>
          </div>

          <!-- ========================================================================= -->

          <div class="form-row">
            <div class="form-group col-md-3">
              <label for="inputPassword4"> Qualification:</label>
              <input
                type="text"
                name="s3_qua"
                class="form-control"
                id="exampleInputEmail1"
                placeholder=" Qualification Details"
                value="<?php echo $row['s3_qua']; ?>"
              />
            </div>
            <div class="form-group col-md-3">
              <label for="inputPassword4"> Occupation:</label>
              <input
                type="text"
                name="s3_occ"
                class="form-control"
                id="exampleInputEmail1"
                placeholder=" Occupation"
                value="<?php echo $row['s3_occ']; ?>"
              />
            </div>
          </div>
          <p>*You can only add 3 siblings</p>
         </div>
        </div>
        
<!-- finish line -->
  <hr>
  <br>
    &nbsp; <input type="submit" name="subForm2" value="Submit" class="btn btn-dark"> &nbsp; &nbsp;
    <input type="submit" name="mkpdf2" value="Download pdf" class="btn btn-dark"> &nbsp; &nbsp;
    <a href="studentHome.php" class="btn btn-dark">Go Home</a>
    <?php
            }
          
        ?>
  </form>
    
</div>
<br>
<br>
<br>

<!-- JS for Add Sibling Button -->
<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}

</script>

</body>
</html>
