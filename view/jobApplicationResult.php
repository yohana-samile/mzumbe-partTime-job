<?php require_once('../asset/templates/sidebar.php'); ?>
<h3 class="text-center text-capitalize">Your Job Applicants Results</h3>
<?php if(isset($_GET['key'])){} ?>
<div class="row animated--grow-in">
    <div class="col-xl-12">
        <div class="card card-body">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <div></div>
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-hover dt-responsive display nowrap" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>S/N</th>
                        <th>Job Title</th>
                        <th>Time Applied</th>
                        <th>Applicant Result Status</th>
                        <th>Interview Date</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php
                            $sn = 1;
                            $jobSeeker_record = $conn->query("SELECT * FROM jobapplication, job WHERE
                                jobapplication.jobId = job.jobId AND
                                jobapplication.userId = {$_SESSION['userData']['userId']} ");
                            $jobSekeer_result = mysqli_num_rows($jobSeeker_record);
                            while($jobSekeer_result = mysqli_fetch_array($jobSeeker_record)):
                                if($jobSekeer_result > 0): ?>
                                    <tr>
                                        <td><?php echo $sn++; ?> </td>
                                        <td><?php echo $jobSekeer_result['jobTitle']; ?> </td>
                                        <td><?php echo $jobSekeer_result['dateApplied']; ?> </td>
                                        <td><?php echo $jobSekeer_result['statusResult']; ?> </td>
                                        <td class="badge badge-primary"><?php echo $jobSekeer_result['interviewDate']; ?> <i class="fa fa-check"></i> </td>
                                <?php endif;
                            endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php
    require_once('../modal/modal.php'); 
    require_once('../asset/templates/footer.php');
?>