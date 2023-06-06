<?php
    require_once('dbConn.php');
    if(isset($_POST['accept'])):
        $sendFeedBack = $conn->query("UPDATE jobapplication set statusResult = 'accepted' where appId = {$_GET['key']} ");
        if($sendFeedBack):
            $_SESSION['success'] = "Application Accepted";
            header('location:../view/jobApplication.php?key=success');
        else:
            $_SESSION['error'] = "Fail";
            header('location:../view/jobApplication.php?key=success');
        endif;
    elseif(isset($_POST['deny'])):
        $sendFeedBack = $conn->query("UPDATE jobapplication set statusResult = 'deny' where appId = {$_GET['key']} ");
        if($sendFeedBack):
            $_SESSION['success'] = "Application Accepted";
            header('location:../view/jobApplication.php?key=success');
        else:
            $_SESSION['error'] = "Fail";
            header('location:../view/jobApplication.php?key=success');
        endif;
    endif;
?>