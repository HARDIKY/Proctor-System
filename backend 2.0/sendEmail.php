<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Forgot Password</title>
    <style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
  
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
  text-decoration: none;
}
</style>
</head>
<body>
<ul>
  <li><a class="active" href="#">PROCTOR SYSTEM</a></li>
  <li><a href="student.php">Home</a></li>
  <li><a href="help.php">Help</a></li>
</ul>
<div class="container mt-5">
    <form action="sendEmailBack.php" method="POST">
        <div class="form-group">
         <label for="exampleInputEmail1">Name</label>
         <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
        </div>
        <div class="form-group">
         <label for="exampleInputEmail1">ID-Card No.</label>
         <input type="text" name="rollno" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ID card no">
        </div>
        <div class="form-group">
         <label for="exampleInputEmail1">Email ID</label>
         <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Registered Email ID">
         <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <button type="submit" class="btn btn-primary">SEND EMAIL</button>
</div>        
        
        
    </form>

</body>
</html>

