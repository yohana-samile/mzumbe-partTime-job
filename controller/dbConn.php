<?php
    $conn = mysqli_connect("127.0.0.1", "root", "", "muptj");
    if(!$conn):
        die("connection Refused". mysqli_error($conn));
    endif;
    // $conn = mysqli_select_db($conn, "muptj");
    //     if(!$conn):
    //         die("Database Not Selected". mysqli_error($conn));
    //     endif;
    session_start();
?>