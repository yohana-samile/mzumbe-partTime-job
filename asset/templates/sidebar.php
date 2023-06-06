<?php 
  require_once('../asset/templates/sourceFile.php');
  require_once('../asset/include/messages.php');
?>
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar" class="active bg-dark">
				<p>
          <img src="../image/logo.jfif" class="mx-auto d-block img-thumbnail" alt="logo" width="80px">
          <a href="<?php echo $server; ?>view/" class="logo">MU-PTJ</a></p>
        <ul class="list-unstyled components mb-5">
          <li class="active">
            <a href="<?php echo $server; ?>view/"><span class="fa fa-home"></span> Home</a>
          </li>
          <?php
            if($_SESSION['userData']['role'] == "is_admin"): ?>
              <li>
                  <a href="<?php echo $server; ?>view/jobSeeker.php"><span class="fa fa-user"></span> Seeker</a>
              </li>
              <li>
                  <a href="<?php echo $server; ?>view/jobApplication.php"><span class="fa fa-envelope"></span> Application</a>
              </li>                                
              <li>
                <a class="nav-link" href="<?php echo $server; ?>view/contactAboutUs.php"><i class="fa fa-phone"> About Us</i></a>
              </li> 
            <?php else: ?>              
                  <li>
                    <a href="<?php echo $server; ?>view/jobApplicationResult.php"><span class="fa fa-envelope"></span> Application</a>
                  </li>    
            
            <?php endif; ?>
          <li>
            <a href="<?php echo $server; ?>view/jobPosted.php"><span class="fa fa-database"></span> Jobs</a>
          </li>
          <li>
            <a href="<?php echo $server; ?>logout.php"><span class="fa fa-sign-out"></span> Logout</a>
          </li>
        </ul>

        <div class="footer">
        	<p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved. <br> Mzumbe part time job </p>
        </div>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
          <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-light">
              <i class="fa fa-bars"></i>
              <span class="sr-only">Toggle Menu</span>
            </button> <p> Welcome Dear <b><?php echo $_SESSION['userData']['fullName']; ?></b></p>
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="nav navbar-nav ml-auto">
                <?php if($_SESSION['userData']['role'] == "is_staff"): ?>
                    <li class="nav-item">
                      <a class="nav-link" href="contactAboutUs.php"><i class="fa-fa-pencil-square-ot"> About Us</i></a>
                  </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Portfolio</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="contactAboutUs.php"><i class="fa-fa-pencil-square-ot"> Contact Us </i></a>
                  </li>                 
                <?php else: ?>                
                  <li class="nav-item">
                      <a class="nav-link" href="" data-toggle="modal" data-darget="#feedAboutUs"><i class="fa-fa-pencil-square-ot">Feed About Us</i></a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="" data-toggle="modal" data-darget="#feedContactUs"><i class="fa-fa-pencil-square-ot">Feed Contact Us </i></a>
                  </li>
                <?php endif; ?>
              </ul>
            </div>
          </div>
        </nav>