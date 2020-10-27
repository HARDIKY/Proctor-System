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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
      integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
      crossorigin="anonymous"
    />
    
    <title>Future Plans form</title>
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
<!-- FOR ALERT msg -->
<?php
  if (isset($_GET['form4'])) {
    if ($_GET['form4'] == 'completed') {
        echo '<script>alert("Future Plans Details submitted successfully")</script>';
    }
    if ($_GET['form4'] == 'updated') {
        echo '<script>alert("Future Plans Details updated successfully")</script>';
    }
  }
?>
  <div class="container mt-3">
    <br />
    <h1>Future Plans Form</h1>
    <ul class="b">
        <li><p class="lead">ID-Card No : <?php echo $_SESSION['rollnol']?> </p></li>
        <li><p class="lead">Name : <?php echo $_SESSION['name']?> </p></li>
    </ul>
    <hr class="my-4">
    <?php 
        $val = $_SESSION['rollnol'];
        require_once './connect.php';
        // $conn = mysqli_connect('localhost', 'root', '', 'student');
        $query1 = "SELECT * FROM futureplans WHERE rollno = '$val';";
        $result = mysqli_query($conn, $query1);
                
        while($row = mysqli_fetch_array($result))
            {
        ?>
    <form action="form4Back.php" method="POST">

  <!-- =================================================================================================== -->
      <br>  
    <h4>Are You planning to do:</h4>
    <br>
    <div class="forborder" style="border: solid; padding: 15px; border-radius: 15px ">
      <div class="form-row">
        <div class="form-group col-md-3">
          <label for="dept" style="padding-top: 5px">CAT</label>
              <select name="cat" >
                <option value="<?php echo $row['cat']; ?>" ><?php echo $row['cat']; ?></option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
                <option value="Maybe">Maybe</option>
              </select>
        </div>
        <div class="form-group col-md-3">
          <label for="dept" style="padding-top: 5px">CET</label>
              <select name="cet" >
                <option value="<?php echo $row['cet']; ?>" ><?php echo $row['cet']; ?></option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
                <option value="Maybe">Maybe</option>
              </select>
        </div>
    </div>  
</div>

<!-- ====================================================================================================== -->
<br>
<h4>MS:</h4>
<br>
<div class="forborder" style="border: solid; padding: 15px; border-radius: 15px ">
  <div class="form-row">
    <div class="form-group col-md-3">
      <label for="dept" style="padding-top: 5px">GRE</label>
          <select name="gre" >
            <option value="<?php echo $row['gre']; ?>" ><?php echo $row['gre']; ?></option>
            <option value="Yes">Yes</option>
            <option value="Yes">No</option>
            <option value="Maybe">Maybe</option>
          </select>
    </div>
    <div class="form-group col-md-3">
      <label for="dept" style="padding-top: 5px">TOFEL</label>
          <select name="tofel" >
            <option value="<?php echo $row['tofel']; ?>" ><?php echo $row['tofel']; ?></option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
            <option value="Maybe">Maybe</option>
          </select>
    </div>
  </div>  
</div>
<!-- =============================================================================================== -->
<br>
<h4>ME/MTECH :</h4>
<br>
<div class="forborder" style="border: solid; padding: 15px; border-radius: 15px ">
  <div class="form-row">
    <div class="form-group col-md-3">
      <label for="dept" style="padding-top: 5px">GATE:</label>
          <select name="gate" >
            <option value="<?php echo $row['gate']; ?>" ><?php echo $row['gate']; ?></option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
            <option value="Maybe">Maybe</option>
          </select>
    </div>
  </div>  
</div>

<!-- =============================================================================================== -->
<br>
<h4>Other Information :</h4>
<br>
<div class="forborder" style="border: solid; padding: 15px; border-radius: 15px ">
  <div class="form-row">
    <div class="form-group col-md-3">
      <label for="inputEmail4">Any Other Future Plans?</label>
              <input
                type="text"
                name="others"
                class="form-control"
                id="NameInfo1"
                aria-describedby="emailHelp"
                placeholder="Mention if Any"
                value="<?php echo $row['others']; ?>"
              />
    </div>
    <div class="form-group col-md-4">
      <label for="inputEmail4">Preffered Area Of Service?</label>
              <input
                type="text"
                name="aos"
                class="form-control"
                id="NameInfo1"
                aria-describedby="emailHelp"
                placeholder="Education/Entrepreneurship/Business/others"
                value="<?php echo $row['aos']; ?>"
              />
    </div>
  </div>  
</div>
<br>
&nbsp; <input type="submit" name="subForm4" value="Submit" class="btn btn-dark"> &nbsp; &nbsp;
  <input type="submit" name="mkpdf4" value="Download pdf" class="btn btn-dark"> <br><br>
  &nbsp;&nbsp;<a href="studentHome.php" class="btn btn-dark">Go Home</a>
  <br><br>
<?php
      }
  ?>

</form>
</div>
  </body>