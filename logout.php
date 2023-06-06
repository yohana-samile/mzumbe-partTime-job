<?php
    require_once('controller/dbConn.php');
    // if($_SESSION['userData']):
        session_unset();
        session_destroy();
        header('location:index.php');
    // endif;