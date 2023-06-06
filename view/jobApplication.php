<?php require_once('../asset/templates/sidebar.php'); ?>
<h3 class="text-center text-capitalize">Job Posted Applicants</h3>
<div class="row animated--grow-in">
    <div class="col-xl-12">
        <div class="card card-body">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <div></div>
            </div>
            <div class="table-responsive">
                <?php if(isset($_GET['key'])){} ?>
                <table class="table table-striped table-hover dt-responsive display nowrap" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>S/N</th>
                        <th>Job Title</th>
                        <th>Time Applied</th>
                        <th>Applicant Name</th>
                        <th class="text-center">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php
                            $sn = 1;
                            $jobSeeker_record = $conn->query("SELECT * FROM jobapplication, job, user, jobseekerprofile WHERE
                                jobapplication.jobId = job.jobId AND
                                jobapplication.userId = user.userId AND
                                jobseekerprofile.seekerId = user.userId; ");
                            $jobSekeer_result = mysqli_num_rows($jobSeeker_record);
                            while($jobSekeer_result = mysqli_fetch_array($jobSeeker_record)):
                                $path = '../upload/';
                                if($jobSekeer_result > 0): ?>
                                    <tr>
                                        <td><?php echo $sn++; ?> </td>
                                        <td><?php echo $jobSekeer_result['jobTitle']; ?> </td>
                                        <td><?php echo $jobSekeer_result['dateApplied']; ?> </td>
                                        <td><?php echo $jobSekeer_result['fullName']; ?> </td>
                                        <td>
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <a target="_blank" href="<?php echo $path.$jobSekeer_result['seekerCv']; ?>" class="btn btn-primary">Applicant Cv</a>
                                                </div>
                                                <form action="../controller/feedBackAction.php?key=<?php echo $jobSekeer_result['appId']; ?>" method="post">
                                                    <?php if($jobSekeer_result['statusResult'] == 'accepted'): ?>
                                                        <a href="" class="btn btn-primary" data-target="#interview<?php echo $jobSekeer_result['appId']; ?>" data-toggle="modal">Invite Interview</a>
                                                        <?php else: ?>
                                                            <button type="submit" class="btn btn-primary" name="accept">Accept</button>
                                                        <?php endif; ?>
                                                        <button type="submit" class="btn btn-danger" name="deny">Deny</button>
                                                </form>
                                            </div>
                                        </td>
                                        <!-- interview invitation modal -->
                                        <div class="modal fade" id="interview<?php echo $jobSekeer_result['appId']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenteredLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalCenteredLabel">Send An Invitation For Interview</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="../controller/jobModification.php?interview=<?php echo $jobSekeer_result['appId']; ?>" method="post">
                                                            <div class="form-group">
                                                                <label for="">Invite For Interview</label>
                                                                <input type="date" class="form-control" name="interviewDate" required>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                                            <button type="submit" name="interview" class="btn btn-primary">Invite</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
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