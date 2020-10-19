<?php
    session_start();
    
    
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $databaseName = "student";

    $conn = mysqli_connect($serverName, $userName, $password, $databaseName);
    
    
    $t_emaill = $_POST['t_emaill'];
    $t_passwordl = $_POST['t_passwordl'];
    $query1 = "SELECT * FROM teacher WHERE t_email = '$t_emaill' AND t_pass = '$t_passwordl';";
    $result = mysqli_query($conn, $query1);
    $rowcount = mysqli_num_rows($result);
    $msg = null;
    if($rowcount == 1) {
        $_SESSION['t_emaill'] = $t_emaill;
        header("location:teacherHome.php");
    
    }else {
        header("location:teacher.php");
    }

               

    
  /*
  
<script>
    var errorEmpty = "<?php echo $errorEmpty; ?>";

    if (errorEmpty == true) {
        $("#rollnol", "#passwordl").addClass("input-error");
    }
    if (errorEmpty == false) {
        $("#rollnol, #passwordl").val("");
    }
</script>
  */   
     
?>
