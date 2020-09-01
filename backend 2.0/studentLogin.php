<?php

    /*if (isset($_POST['submit'])) {
        $rollnol = $_POST['rollnol'];
        $passwordl = $_POST['passwordl'];
        
        $errorEmpty = false;
        if (empty($rollnol) || empty($passwordl)) {
            header('location:index.php?login=not');
            //echo "<span>Fill in all fields</span>";
            $errorEmpty = true;
        }
        else {*/
            session_start();
    
    
            $serverName = "localhost";
            $userName = "root";
            $password = "";
            $databaseName = "student";

            $conn = mysqli_connect($serverName, $userName, $password, $databaseName);
    
    
            $rollnol = $_POST['rollnol'];
            $passwordl = $_POST['passwordl'];
            $query1 = "SELECT * FROM register WHERE std_rollno = '$rollnol' AND std_pass = '$passwordl';";
            $result = mysqli_query($conn, $query1);
            $rowcount = mysqli_num_rows($result);
            $msg = null;
            if($rowcount == 1) {
                $_SESSION['rollnol'] = $rollnol;
                header("location:form.php");
    
            }else {
                header("location:student.php");
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
