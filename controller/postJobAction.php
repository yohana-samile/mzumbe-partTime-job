<?php
    require_once('dbConn.php');
    if(isset($_POST['publishJob'])):
        $jobTitle = $_POST['jobTitle'];
        $jobDiscription = $_POST['jobDiscription'];
        $jobSalary = $_POST['jobSalary'];
        $datePosted = $_POST['datePosted'];
        $endOfApllication = $_POST['endOfApllication'];
        $postedBy = $_POST['postedBy'];
        // $interviewDate = $_POST['interviewDate'];

        $postJob = $conn->query("INSERT INTO job VALUES (null, '$jobTitle', '$jobDiscription', '$jobSalary', '$datePosted', '$endOfApllication', '$postedBy', 'noPublish') ");
        if($postJob):
            $_SESSION['success'] = "New Post Published";
            header('location:../view/?key=success');
        else:
            $_SESSION['error'] = "Job Not Published";
            header('location:../view/?key=error');
        endif;
    endif;
?>