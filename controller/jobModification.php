<?php
    require_once('dbConn.php');
    if(isset($_POST['publishJob'])):
        $jobId = $_POST['jobId'];
        
        $PublishJob = $conn->query("UPDATE job set status = 'yesPublish' where jobId = '$jobId' ");
        if($PublishJob):
            $_SESSION['success'] = "Job Published";
            header('location:../view/jobPosted.php?key=success');
        else:
            $_SESSION['error'] = "Fail";
            header('location:../view/jobPosted.php?key=success');
        endif;
    elseif (isset($_POST['deleteJob'])):
        $jobId = $_POST['jobId'];

        $PublishJob = $conn->query("DELETE FROM job where jobId = '$jobId' ");
        if($deleteJob):
            $_SESSION['success'] = "Job Delete";
            header('location:../view/jobPosted.php?key=success');
        else:
            $_SESSION['error'] = "Fail";
            header('location:../view/jobPosted.php?key=success');
        endif;
        
        // job application
    elseif (isset($_POST['applyJob'])):
        $jobId = $_POST['jobId'];
        $userId = $_POST['userId'];
        $dateApplied = $_POST['dateApplied'];
        $date =  $dateApplied = date("Y-m-d H:i:s");
        $date ;
        $PublishJob = $conn->query("INSERT INTO jobapplication VALUES (null, '$jobId', '$userId', '$date', 'pending', '00:00:00') ");
        if($PublishJob):
            $_SESSION['success'] = "Application Sent";
            header('location:../view/jobPosted.php?key=success');
        else:
            $_SESSION['error'] = "Fail";
            header('location:../view/jobPosted.php?key=success');
        endif;

        // interview invitation
    elseif (isset($_POST['interview'])):
        $interviewDate = $_POST['interviewDate'];

        $PublishJob = $conn->query("UPDATE jobapplication SET interviewDate = '$interviewDate' where appId = {$_GET['interview']} ");
        if($PublishJob):
            $_SESSION['success'] = "Invitation Sent";
            header('location:../view/jobApplication.php?key=success');
        else:
            $_SESSION['error'] = "Fail";
            header('location:../view/jobApplication.php?key=success');
        endif;

    // Extend Application
    elseif (isset($_POST['extendThisJob'])):
        $endOfApllication = $_POST['endOfApllication'];

        $extendThisJob = $conn->query("UPDATE job SET endOfApllication = '$endOfApllication' where jobId = {$_GET['extend']} ");
        if($extendThisJob):
            $_SESSION['success'] = "Date Extended";
            header('location:../view/jobPosted.php?key=success');
        else:
            $_SESSION['error'] = "Fail";
            header('location:../view/jobPosted.php?key=success');
        endif;
    endif;
?>