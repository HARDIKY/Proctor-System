<?php
    session_start();
    if (!isset($_SESSION['t_emaill'])) {
        header("location:teacher.php");
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
      /* Style the button that is used to open and close the collapsible content */
      .collapsible {
        background-color: #777;
        color: white;
        cursor: pointer;
        margin-left:3px;
        margin-top:10px;
        /* padding: 0 0px;  */
        width: 30%;
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
      .pp {
        margin-top: 20px;
      }

    </style>
  </head>
<body>
<!-- FOR ALERT msg -->
<?php
  if (isset($_GET['form1'])) {
    if ($_GET['form1'] == 'completed') {
        echo '<script>alert("Student Details submitted successfully")</script>';
    }
    if ($_GET['form1'] == 'updated') {
        echo '<script>alert("Student Details updated successfully")</script>';
    }
    if ($_GET['form1'] == 'notupdated') {
      echo '<script>alert("There is some problem with your data")</script>';
  }
  }
?>

<!-- FORM STARTS -->
<div class="container mt-3">
<br />
<h1>Student Form</h1>
<ul class="b">
  <li><p class="lead">ID-Card No : <?php echo $_POST['std_rollno']?> </p></li>
</ul>
<hr class="my-4">
<?php 
  $val = $_POST['std_rollno'];
  $conn = mysqli_connect('localhost', 'root', '', 'student');
  $query1 = "SELECT * FROM studentinfo WHERE rollno = '$val';";
  $result = mysqli_query($conn, $query1);
                
  while($row = mysqli_fetch_array($result))
    {
  ?>
  <form action="form1Back.php" method="POST" enctype="multipart/form-data">
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
          type="text"
          name="rollno"
          class="form-control"
          id="exampleInputEmail1"
          placeholder="Mentioned On Id Card"
          value="<?php echo $row['rollno']; ?>"
          readonly
        />
      </div>
      <div class="form-group col-md-4">
        <label for="inputPassword4">Upload The Id card</label>
        <input
          type="file"
          name="pdf_file"
          id="pdf_file"
          accept="application/pdf"
          style="padding-top: 5px"
        />
        <label><?php echo $row['idcard']; ?></label>
        <br />
        <!-- -------------------------Upload Button------------------------- -->
        <!-- <button name="Uploadp" type="submit" value="Upload">Upload</button> -->
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
          type="text"
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

<!-- ======Admission Information========================================================================================= -->
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
          min="2005-01-02"
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
          <option value="First">First</option>
          <option value="Second">Direct Second</option>
        </select>
      </div>
      <div class="form-group col-md-3">
        <label for="dept" style="padding-top:17px;">Currently in:</label>
        <select name="currentyear">
          <option value="<?php echo $row['currentyear']; ?>"><?php echo $row['currentyear']; ?></option>
          <option value="First">First</option>
          <option value="Second">Second</option>
          <option value="Third">Third</option>
          <option value="Fourth">Fourth</option>
        </select>
      </div>
      <div class="form-group col-md-3">
        <label for="dept" style="padding-top:17px;">Currently in Sem:</label>
        <select name="currentsem">
            <option value="<?php echo $row['currentsem']; ?>"><?php echo $row['currentsem']; ?></option>
            <option value="SEM 1">SEM 1</option>
            <option value="SEM 2">SEM 2</option>
            <option value="SEM 3">SEM 3</option>
            <option value="SEM 4">SEM 4</option>
            <option value="SEM 5">SEM 5</option>
            <option value="SEM 6">SEM 6</option>
            <option value="SEM 7">SEM 7</option>
            <option value="SEM 8">SEM 8</option>
        </select>
      </div>
    </div>
  </div>

<!-- ==========Personal Information========================================================================================= -->
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
      <div class="form-group col-md-2">
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
        <label for="inputPassword4">Any Health Problems ?</label>
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
        <label for="inputPassword4">Upload Doctor's Documents</label>
        <input
          type="file"
          name="doc_pdf"
          id="doc_pdf"
          accept="application/pdf"
          style="padding-top: 5px"
        />
        <label><?php echo $row['doc_cert']; ?></label>
        <!-- <button type="submit" name="fbtn2" id="fbtn_2">Upload</button> -->
      </div>
    </div>
    <hr>
    <div class="form-row">

      <div class="form-group col-md-3">
        <label for="inputEmail4">Hobbies ?</label>
        <input
          type="text"
          name="hobbies"
          class="form-control"
          id="NameInfo2"
           aria-describedby="emailHelp"
          placeholder="Hobbies"
          value="<?php echo $row['hobbies']; ?>"
        />
      </div>
      <div class="form-group col-md-4">
        <label for="inputPassword4">Upload Certificate:</label>
        <input
          type="file"
          name="hob_pdf"
          id="hob_pdf"
          accept="application/pdf"
          style="padding-top: 5px"
        />
        <label><?php echo $row['hob1_cert']; ?></label>
        <!-- ----------------btn here------------------ -->
         <!-- <button type="submit" name="fbtn3" id="fbtn_3">Upload</button> -->
      </div> 
    </div>
    <!-- ADD MORE BUTTON FOR HOBBIES-->
    <button type="button" class="collapsible" >more hobbies</button>
    <div class="content">
      <div class="form-row">
        <div class="form-group col-md-3">
          <label for="inputEmail4" style="padding-top: 5px"></label>
          <input
            type="text"
            name="hobbie2"
            class="form-control"
            id="hob2_pdf"
            aria-describedby="emailHelp"
            placeholder="Hobbie 1"
            value="<?php echo $row['hobbie2']; ?>"
          />
        </div>
        <div class="form-group col-md-7 pp">
          <label for="inputPassword4">&nbsp;&nbsp;Upload Certificate:</label>
          <input
            type="file"
            name="hob2_pdf"
            id="hob2_pdf"
            accept="application/pdf"
            style="padding-top: 5px"
          />
          <label><?php echo $row['hob2_cert']; ?></label>
          <!-- ----------------btn here------------------ -->
         <!-- <button type="submit" name="fbtn4" id="fbtn_4">Upload</button> -->
        </div>
        <div class="form-group col-md-3">
          <label for="inputEmail4" style="padding-top: 5px"></label>
          <input
            type="text"
            name="hobbie3"
            class="form-control"
            id="NameInfo2"
            aria-describedby="emailHelp"
            placeholder="Hobbie 2 "
            value="<?php echo $row['hobbie3']; ?>"
          />

        </div>
        <div class="form-group col-md-7 pp">
          <label for="inputPassword4">&nbsp;&nbsp;Upload Certificate:</label>
          <input
            type="file"
            name="hob3_pdf"
            id="hob3_pdf"
            accept="application/pdf"
            style="padding-top: 5px"
          />
          <label><?php echo $row['hob3_cert']; ?></label>
          <!-- ----------------btn here------------------ -->
         <!-- <button type="submit" name="fbtn5" id="fbtn_5">Upload</button> -->
        </div> 
      </div> 
    </div>
  <hr>
  <div class="form-row">
    <div class="form-group col-md-3">
      <label for="inputEmail4">Any Sports Activity ?</label>
        <input
          type="text"
          name="sports"
          class="form-control"
          id="NameInfo2"
          aria-describedby="emailHelp"
          placeholder="Sports"
          value="<?php echo $row['sports']; ?>"
        />
    </div>
    <div class="form-group col-md-4">
      <label for="inputPassword4">Upload Certificate:</label>
        <input
          type="file"
          name="sp_pdf"
          id="sp_pdf"
          accept="application/pdf"
          style="padding-top: 5px"
        />
        <label><?php echo $row['sport1_cert']; ?></label>
        <!-- ----------------btn here------------------ -->
         <!-- <button type="submit" name="fbtn4" id="fbtn_4">Upload</button> -->
    </div> 
  </div>
  <!-- ADD MORE BUTTON FOR SPORTS -->
  <button type="button" class="collapsible" >more sports</button>
  <div class="content">
    <div class="form-row">
      <div class="form-group col-md-3">
        <label for="inputEmail4" style="padding-top: 5px"></label>
        <input
          type="text"
          name="sport2"
          class="form-control"
          id="NameInfo2"
          aria-describedby="emailHelp"
          placeholder="Sport 2"
          value="<?php echo $row['sport2']; ?>"
        />
      </div>
      <div class="form-group col-md-7 pp">
        <label for="inputPassword4">Upload Certificate:</label>
        <input
          type="file"
          name="sp2_pdf"
          id="sp2_pdf"
          accept="application/pdf"
          style="padding-top: 5px"
        />
        <label><?php echo $row['sport2_cert']; ?></label>
        <!-- ----------------btn here------------------ -->
         <!-- <button type="submit" name="fbtn6" id="fbtn_6">Upload</button> -->
      </div>
      <div class="form-group col-md-3">
        <label for="inputEmail4" style="padding-top: 5px"></label>
        <input
          type="text"
          name="sport3"
          class="form-control"
          id="NameInfo2"
          aria-describedby="emailHelp"
          placeholder="Sport 3"
          value="<?php echo $row['sport3']; ?>"
        />
      </div>
      <div class="form-group col-md-7 pp">
        <label for="inputPassword4">Upload Certificate:</label>
        <input
          type="file"
          name="sp3_pdf"
          id="sp3_pdf"
          accept="application/pdf"
          style="padding-top: 5px"
        />
        <label><?php echo $row['sport3_cert']; ?></label>
        <!-- ----------------btn here------------------ -->
         <!-- <button type="submit" name="fbtn7" id="fbtn_7">Upload</button> -->
      </div> 
    </div> 
  </div>
  <br>
  </div>
  <br>
  &nbsp; <input type="submit" name="subForm1" value="Submit" class="btn btn-dark"> &nbsp; &nbsp;
  <input type="submit" name="mkpdf1" value="Download pdf" class="btn btn-dark"> &nbsp; &nbsp;
  <a href="editForm2.php" class="btn btn-dark">Next Form</a>
  <a href="teacherHome.php" class="btn btn-dark">Go Home</a>
  <br>
  </div>
  <?php
      }
  ?>
  </form>
  <br />
  <br/>
</div>


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