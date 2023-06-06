<?php require_once('../asset/templates/sidebar.php'); ?>
<h3 class="text-center text-capitalize">This is list of registered Employee</h3>
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
                        <th>Applicant Name</th>
                        <th>Email ID</th>
                        <th>Gender</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php
                            $sn = 1;
                            $jobSeeker_record = $conn->query("SELECT * FROM user WHERE role = 'is_staff' ");
                            $jobSekeer_result = mysqli_num_rows($jobSeeker_record);
                            while($jobSekeer_result = mysqli_fetch_array($jobSeeker_record)):
                                if($jobSekeer_result > 0): ?>
                                    <tr>
                                        <td><?php echo $sn++; ?> </td>
                                        <td><?php echo $jobSekeer_result['fullName']; ?> </td>
                                        <td><?php echo $jobSekeer_result['email']; ?> </td>
                                        <td><?php echo $jobSekeer_result['gender']; ?> </td>
                                        <td><a href="">View Cv</a></td>
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