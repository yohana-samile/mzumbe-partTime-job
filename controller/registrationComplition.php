<?php

// Uploads files
require_once('dbConn.php');
if(isset($_POST['complite'])): // if save button on the form is clicked
    // name of the uploaded file
    
    $uId = $_POST['uId'];
    $filename = $_FILES['seekerCv']['name'];

    // destination of the file on the server
    $destination = '../upload/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['seekerCv']['tmp_name'];
    $size = $_FILES['seekerCv']['size'];

    if (!in_array($extension, ['pdf'])):
        $_SESSION['error'] = "You file extension must be .pdf";
        header('location:../view/jobPosted.php?key=error');

    elseif ($_FILES['seekerCv']['size'] > 1000000): // file shouldn't be larger than 1Megabyte
        $_SESSION['error'] = "File too large!"; 
        header('location:../view/jobPosted.php?key=error');

    else: 
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)):
            $conn->query("INSERT INTO jobseekerprofile VALUES (null, '$uId', '$filename') ");
            $postJob = $conn->query("UPDATE user set complationStatus = 'yesFinish' where userId = '$uId' ");
            if($postJob):
                $_SESSION['success'] = "Your Registration Complite";
                header('location:../view/jobPosted.php?key=success');
            else:
                $_SESSION['error'] = "Fail";
                header('location:../view/jobPosted.php?key=error');
            endif;
        endif;
    endif;
endif;
?>