<?php
    require_once('dbConn.php');
    if(isset($_POST['registerMe'])):
        $fullName = $_POST['fullName'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];
        $gender = $_POST['gender'];

        if(empty($fullName) && empty($email) && empty($password) && empty($confirmPassword)):
            $_SESSION['error'] = "all field are mandatory";
            header('location:../signUp.php?key=error');
            elseif($password == $confirmPassword):
                $registerUSer = $conn->query("INSERT INTO user VALUES (null, '$fullName', '$email', '$password', 'is_staff', '$gender', 'notFinish') ");
                if($registerUSer):
                    // $_SESSION['success'] = "registration Done";
                    header('location:../login.php?key=success');
                    else:
                        echo mysqli_error($conn);
                endif;
            else:
                $_SESSION['error'] = "pass not match";
                header('location:../signUp.php?key=error');
        endif;
    endif;
?>