<?php $server = 'http://' . $_SERVER['SERVER_NAME'] . '/jobPortal/' ; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MU-PTJ</title>
        <link href="asset/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="asset/css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            .btn, .bg{
                background-color: #fd876d;
            }
            #btn{
                background-color: #fd876d;
            }
        </style>
    </head>
    <body class="bg-white">
        <header class="d-flex w-100">
            <nav class="navbar navbar-expand-lg w-100 bg-light">
                <div class="navbar-collapse collapse justify-content-between">
                    <h2><img src="image/mulogo.jpg" alt="mu-logo" width="100px"><a href="" class="text-dark">Mzumbe Part Time Job</a> </h2>
                </div>
                <ul class="navbar-nav">
                    <li class="nav-item save mr-4">
                        <a class="nav-link my-4 custom-btn-primary" href="<?php echo $server; ?>index.php">
                            <span class="">Home </span>
                            <i class="fa fa-home" style="font-size: 18px;"></i>
                        </a>
                    </li>
                    <li class="nav-item save mr-4">
                        <a class="nav-link my-4 custom-btn-primary" href="<?php echo $server; ?>aboutUs.php">
                            <span class="">About & Contact </span>
                            <i class="fa fa-phone" style="font-size: 18px;"></i>
                        </a>
                    </li>
                    <li class="nav-item save mr-4">
                        <a class="nav-link my-4 custom-btn-primary" href="<?php echo $server; ?>signup.php">
                            <span class="">Sign Up </span>
                            <i class="fa fa-sign-out" style="font-size: 18px;"></i>
                        </a>
                    </li>
                    <li class="nav-item save mr-4">
                        <a class="nav-link btn btn-block  my-4 custom-btn-primary" href="<?php echo $server; ?>login.php">
                            <span class="text-white">Sign In </span>
                            <i class="fa fa-sign-in text-white" style="font-size: 18px;"></i>
                        </a>
                    </li>
                </ul>
            </nav>
        </header>
        <body>