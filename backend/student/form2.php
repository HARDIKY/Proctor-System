<!DOCTYPE html>  
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Form 2</title>
    <style>
    body{
      background-color: #37af75;
    }
    </style>
</head>
<body>
<div class="container mt-5">
<br>
  <h1>Family Details</h1>
  <br>
    <form action="form2Back.php" method="POST" >
        <div class="form-group">
         <label for="exampleInputEmail1">Father's Name</label>
         <input type="text" name="fname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your father's name">
        </div>
        <div class="form-group">
         <label for="exampleInputEmail1">Mother's Name</label>
         <input type="text" name="mname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your mother's name">
        </div> 
        <div class="form-group">
         <label for="exampleInputEmail1">Sibling's Name</label>
         <input type="text" name="sname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your sibling's name:">
        </div>
        <div class="form-group">
         <label for="exampleInputEmail1">Age : </label>
         <input type="text" name="fage" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your father's age"><br>
         <input type="text" name="mage" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your mother's age"><br>
         <input type="text" name="sage" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your sibling's age"><br>
        </div>
        <div class="form-group">
         <label for="exampleInputEmail1">Qualification : </label>
         <input type="text" name="fqua" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Father's qualification"><br>
         <input type="text" name="mqua" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Mother's qualification"><br>
         <input type="text" name="squa" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Sibling's qualification"><br>
        </div>
        <div class="form-group">
         <label for="exampleInputEmail1">Occupation : </label>
         <input type="text" name="focc" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Father's occupation"><br>
         <input type="text" name="mocc" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Mother's occupation"><br>
         <input type="text" name="socc" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Sibling's occupation"><br>
        </div>
        <div class="form-group">
         <label for="exampleInputEmail1">Mobile No : </label>
         <input type="text" name="fph" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Father's Mobile No"><br>
         <input type="text" name="mph" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Mother's Mobile No"><br>
         <input type="text" name="sph" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Sibling's Mobile No"><br>
        </div>
        <div class="form-group">
         <label for="exampleInputEmail1">Email Id : </label>
         <input type="text" name="femail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Father's Email"><br>
         <input type="text" name="memail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Mother's Email"><br>
         <input type="text" name="semail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Sibling's Email"><br>
        </div>
        <br>
        <input type="submit" name="submit" value="      Submit        " class="btn btn-primary">
        <a href="studentHome.php" class="btn btn-primary">Go Home</a>
        </form>
    <br>
    <br>
</div>
</body>
</html>
