<?php
    require_once('asset/templates/header.php');
    require_once('asset/include/messages.php');
    require_once('controller/dbConn.php');
?>
<div class="container bg-white"><br><br>
    <?php
        $setting = $conn->query("SELECT * FROM syestemsetting ");
        if(mysqli_num_rows($setting) > 0):
            $settingResult = mysqli_fetch_array($setting);
            echo $settingResult['aboutUs'];
        ?>
            <div class="row">
                <div class="col-md-4"><br><br>
                    <h4 class="text-center"><u>You Can Contact Us Via</u></h4>
                    <p>Call Us: <?php echo $settingResult['phoneNo1']; ?> <i class="fa fa-phone text-primary"></i></p>
                    <p>Call Us: <?php echo $settingResult['phoneNo2']; ?> <i class="fa fa-phone text-primary"></i></p>
                    <p>Email Us: <?php echo $settingResult['email']; ?> <i class="fa fa-envelope text-primary"></i></p>
                </div>
                <div class="col-md-8"><br><br>
                    <h4 class="text-center"><u>Use This Map To Reach To Our Office</u></h4>
                    <div class="container-fluid">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15843.115369584953!2d37.5707376!3d-6.9170233!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x185a68afca4fbe83%3A0x1b8214390e04e50b!2sChuo%20Kikuu%20Mzumbe!5e0!3m2!1sen!2stz!4v1683219061411!5m2!1sen!2stz" width="600" height="450" style="border:0; float: right;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>       
                    </div>
                </div>
            </div><br><br>
    </div>
    <?php endif; ?>
</div>