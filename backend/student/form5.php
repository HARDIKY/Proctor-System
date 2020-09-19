<?php include 'form5Back.php';?>
<!DOCTYPE html>  
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Upload Dcouments</title>
    <style>
    body{
      background-color: #37af75;
    }
    </style>
</head>
<body>
<?php 
      if (isset($_GET['upload'])) {
        if ($_GET['upload'] == 'success') {
          echo '<script>alert("Data added Successfully")</script>';
        }
        if ($_GET['upload'] == 'notsuccess') {
          echo '<script>alert("Data Not added")</script>';
        }
      }
     ?>
<div class="container mt-5">

  <h1>Dcoument Upload Section </h1>
  <br>
  <br>
    <form action="form5Back.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
         <label for="exampleInputEmail1"><h3> 10th Certificate :</h3></label>
         <div class="form-group">
         <label for="myfile">Select a PDF File Only:</label>
         <input type="file" name="pdf_file" id="pdf_file" accept="application/pdf"/><br><br>
	       <button id="send" type="submit" name="Upload1">Upload</button>
        </div>
        <div class="form-group">
      
        </div>
        </div> 
        <br>
        <br>


        <div class="form-group">
         <label for="exampleInputEmail1"><h3> HSC Certificate:</h3></label>
         <div class="form-group">
         <label for="myfile">Select a PDF File Only:</label>
         <input type="file" name="pdf_file2" id="pdf_file" accept="application/pdf"/><br><br>
	       <button id="send" type="submit" name="Upload2">Upload</button>
        </div>
        <div class="form-group">
      
        </div>
        </div> 
        <br>
        <br>


        <div class="form-group">
         <label for="exampleInputEmail1"><h3> Diploma Certificate :</h3></label>
         <div class="form-group">
         <label for="myfile">Select a PDF File Only:</label>
         <input type="file" name="pdf_file3" id="pdf_file" accept="application/pdf"/><br><br>
	       <button id="send" type="submit" name="Upload3">Upload</button>
        </div>
        <div class="form-group">
      
        </div>
        </div> 
        <br>
        <br>
        
        <div class="form-group">
         <label for="exampleInputEmail1"><h3> MHTCET Certificate:</h3></label>
         <div class="form-group">
         <label for="myfile">Select a PDF File Only:</label>
         <input type="file" name="pdf_file4" id="pdf_file" accept="application/pdf"/><br><br>
	       <button id="send" type="submit" name="Upload4">Upload</button>
        </div>
        <div class="form-group">
      
        </div>
        </div> 
        <br>
        <br>


        <div class="form-group">
         <label for="exampleInputEmail1"><h3> Leaving Certificate from Last Organization :</h3></label>
         <div class="form-group">
         <label for="myfile">Select a PDF File Only:</label>
         <input type="file" name="pdf_file5" id="pdf_file" accept="application/pdf"/><br><br>
	       <button id="send" type="submit" name="Upload5">Upload</button>
        </div>
        <div class="form-group">
      
        </div>
        </div> 
        <br>
        <br>
       
        <div class="form-group">
         <label for="exampleInputEmail1"><h3> HSC Certificate:</h3></label>
         <div class="form-group">
         <label for="myfile">Select a PDF File Only:</label>
         <input type="file" name="pdf_file6" id="pdf_file" accept="application/pdf"/><br><br>
	       <button id="send" type="submit" name="Upload6">Upload</button>
        </div>
        <div class="form-group">
      
        </div>
        </div> 
        <br>
        <br>


         <br>
         <br>
        <a href="studentHome.php" class="btn btn-primary">Go Home</a>
    </form>
    <br>    
    <br>
    <br>
    <br>
</div>
</body>
</html>