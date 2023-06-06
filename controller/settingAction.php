<?php
    require_once('dbConn.php');
    // about
    if(isset($_POST['feedAbout'])):
        $aboutUs = $_POST['aboutUs'];

        $updateSetting = $conn->query("UPDATE syestemsetting SET aboutUs = '$aboutUs' where settingId = 1 ");
        if($updateSetting):
            $_SESSION['success'] = "About Us Updated";
            header('location:../view/contactAboutUs.php?key=success');
        else:
            $_SESSION['error'] = "Fail";
            header('location:../view/contactAboutUs.php?key=error');
        endif;

    // contact
    elseif(isset($_POST['FeedContact'])):
        $phoneNo1 = $_POST['phoneNo1'];
        $phoneNo2 = $_POST['phoneNo2'];
        $email = $_POST['email'];

        $updateSetting = $conn->query("UPDATE syestemsetting SET phoneNo1 = '$phoneNo1', phoneNo2 = '$phoneNo2', phoneNo1 = '$phoneNo1', email = '$email' where settingId = 1 ");
        if($updateSetting):
            $_SESSION['success'] = "Contact Us Updated";
            header('location:../view/contactAboutUs.php?key=success');
        else:
            $_SESSION['error'] = "Fail";
            header('location:../view/contactAboutUs.php?key=error');
        endif;
    endif;
?>