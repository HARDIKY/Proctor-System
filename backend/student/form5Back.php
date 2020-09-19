<?php
// connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'student');

$sql = "SELECT * FROM files";
$result = mysqli_query($conn, $sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Uploads files
if (isset($_POST['Upload1'])) { // if upload button on the form is clicked
    // name of the uploaded file
    $filename = $_FILES['pdf_file']['name'];

    // destination of the file on the server
    $destination = 'uploads/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['pdf_file']['tmp_name'];
    $size = $_FILES['pdf_file']['size'];

    if (!in_array($extension, ['pdf']))
     {
        echo "You file extension must be  .pdf ";
    } 
    else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO files (pdf_file) VALUES ('$filename')";
            if (mysqli_query($conn, $sql)) {
                header("location:form5.php?upload=success");
            }
        } else {
            header("location:form5.php?upload=notsuccess");
        }
    }
}

if (isset($_POST['Upload2'])) { // if save button on the form is clicked
    // name of the uploaded file
    $filename = $_FILES['pdf_file2']['name'];

    // destination of the file on the server
    $destination = 'uploads/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['pdf_file2']['tmp_name'];
    $size = $_FILES['pdf_file2']['size'];

    if (!in_array($extension, ['pdf']))
     {
        echo "You file extension must be  .pdf ";
    } 
    else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO files (pdf_file) VALUES ('$filename')";
            if (mysqli_query($conn, $sql)) {
                header("location:form5.php?upload=success");
            }
        } else {
            header("location:form5.php?upload=notsuccess");
        }
    }
}

if (isset($_POST['Upload3'])) { // if save button on the form is clicked
    // name of the uploaded file
    $filename = $_FILES['pdf_file3']['name'];

    // destination of the file on the server
    $destination = 'uploads/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['pdf_file3']['tmp_name'];
    $size = $_FILES['pdf_file3']['size'];

    if (!in_array($extension, ['pdf']))
     {
        echo "You file extension must be  .pdf ";
    } 
    else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO files (pdf_file) VALUES ('$filename')";
            if (mysqli_query($conn, $sql)) {
                header("location:form5.php?upload=success");
            }
        } else {
            header("location:form5.php?upload=notsuccess");
        }
    }
}

if (isset($_POST['Upload4'])) { // if save button on the form is clicked
    // name of the uploaded file
    $filename = $_FILES['pdf_file4']['name'];

    // destination of the file on the server
    $destination = 'uploads/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['pdf_file4']['tmp_name'];
    $size = $_FILES['pdf_file4']['size'];

    if (!in_array($extension, ['pdf']))
     {
        echo "You file extension must be  .pdf ";
    } 
    else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO files (pdf_file) VALUES ('$filename')";
            if (mysqli_query($conn, $sql)) {
                header("location:form5.php?upload=success");
            }
        } else {
            header("location:form5.php?upload=notsuccess");
        }
    }
}

if (isset($_POST['Upload5'])) { // if save button on the form is clicked
    // name of the uploaded file
    $filename = $_FILES['pdf_file5']['name'];

    // destination of the file on the server
    $destination = 'uploads/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['pdf_file5']['tmp_name'];
    $size = $_FILES['pdf_file5']['size'];

    if (!in_array($extension, ['pdf']))
     {
        echo "You file extension must be  .pdf ";
    } 
    else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO files (pdf_file) VALUES ('$filename')";
            if (mysqli_query($conn, $sql)) {
                header("location:form5.php?upload=success");
            }
        } else {
            header("location:form5.php?upload=notsuccess");
        }
    }
}

if (isset($_POST['Upload6'])) { // if save button on the form is clicked
    // name of the uploaded file
    $filename = $_FILES['pdf_file6']['name'];

    // destination of the file on the server
    $destination = 'uploads/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['pdf_file6']['tmp_name'];
    $size = $_FILES['pdf_file6']['size'];

    if (!in_array($extension, ['pdf']))
     {
        echo "You file extension must be  .pdf ";
    } 
    else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO files (pdf_file) VALUES ('$filename')";
            if (mysqli_query($conn, $sql)) {
                header("location:form5.php?upload=success");
            }
        } else {
            header("location:form5.php?upload=notsuccess");
        }
    }
}

?>