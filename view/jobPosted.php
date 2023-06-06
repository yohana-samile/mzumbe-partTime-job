<?php require_once('../asset/templates/sidebar.php'); 
    $checkComplation = $conn->query("SELECT complationStatus from user where userId = {$_SESSION['userData']['userId']} and role = 'is_staff' ");
    $getResult = mysqli_fetch_assoc($checkComplation);
    if(@$getResult['complationStatus'] == 'notFinish'): ?>
        <div class="container-fluid">
            <div class="alert alert-danger">
                <p>Complite Your Registration <span><a href="" data-target="#regstrationComplation" data-toggle="modal">Complite</a></span></p>
            </div>
        </div>
<?php else:?>
    <h3 class="text-center text-capitalize">Jobs</h3>
    <?php if(isset($_GET['key'])){} ?>
    <div class="row animated--grow-in">
        <div class="col-xl-12">
        <div class="row main-section">
            <?php
                if($_SESSION['userData']['role'] == "is_admin"): 
                    $jobPosted_record = $conn->query("SELECT * FROM job ORDER BY datePosted DESC ");
                    $num_of_rows = mysqli_num_rows($jobPosted_record);
                    if ($num_of_rows > 0):
                        // output data of each row
                        while($num_of_rows > 0):
                            $num_of_rows--;
                            $jobResult = mysqli_fetch_assoc($jobPosted_record);
                            include('../asset/templates/viewJob.php');
                        endwhile;
                    endif;
                else:
                    $jobPosted_record = $conn->query("SELECT * FROM job where status = 'yesPublish' ");
                    $num_of_rows = mysqli_num_rows($jobPosted_record);
                    if ($num_of_rows > 0):
                        // output data of each row
                        while($num_of_rows > 0):
                            $num_of_rows--;
                            $jobResult = mysqli_fetch_assoc($jobPosted_record);
                            include('../asset/templates/viewJob.php');
                        endwhile;
                    endif;
                endif;
            ?>
        </div>
    </div>
<?php
endif;
    require_once('../modal/modal.php'); 
    require_once('../asset/templates/footer.php');
?>