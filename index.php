<?php
     require_once('asset/templates/header.php');
     require_once('asset/include/messages.php');
     require_once('controller/dbConn.php');
?>
<div class="col-xl-12">
	<div class="row main-section">
        <?php
            $jobPosted_record = $conn->query("SELECT * FROM job where status = 'yesPublish' ");
            $num_of_rows = mysqli_num_rows($jobPosted_record);
            if ($num_of_rows > 0):
                // output data of each row
                while($num_of_rows > 0):
                    $num_of_rows--;
                    $jobResult = mysqli_fetch_assoc($jobPosted_record); ?>
                        <div class="col-md-4 col-sm-6 my-2">
                            <div class="card m-auto job" style="width: 20rem;">
                                <div class="card-body">
                                    <h4 class="card-title"><?php echo $jobResult['jobTitle']; ?></h4>
                                    <p class="card-text"><?php echo $jobResult['jobDiscription']; ?></p>
                                    <p class="card-text badge badge-primary company"  style="background-color: #525f7f;">Deadline <?php echo $jobResult['endOfApllication']; ?></p>
                                   
                                    <?php  if($jobResult['endOfApllication'] <= date('Y-m-d')): ?>
                                        <div class="alert alert-danger">
                                            <p>Application Closed</p>
                                        </div>
                                    <?php else: ?>
                                        <!-- Button apply jobs -->
                                        <a href="" class="btn apply-button" data-target="#applyModal" data-toggle="modal">
                                            <span class="text-white">
                                                Apply
                                            </span>
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        
                <?php
                require_once('modal/modal.php');
                endwhile;
            endif;
        ?>
    </div>
</div>

    <!-- Page level custom scripts -->
    <script src="asset/js/jquery.min.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>
</body>