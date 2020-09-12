<?php
    session_start();
    if (!isset($_SESSION['rollnol'])) {
        header("location:student.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container mt-5">
    <h1>welcome <?php echo $_SESSION['rollnol']; ?></h1>
    <a href="studentLogout.php">Logout</a>
    
    
        <form action="makpdf.php" method="POST">
            <input type="text" name="fname" placeholder="Enter Firstname" class="form-control" required>
            <input type="text" name="lname" placeholder="Enter Lastname" class="form-control" required>
            <input type="text" name="email" placeholder="Enter E-mail" class="form-control" required>
            <button type="submit" class="btn btn-success btn-lg btn-block">Ceate PDF</button>
        </form>
    
    </div>
</body>
</html>