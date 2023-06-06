<div class="col-md-4 col-sm-6 my-2">
	<div class="card m-auto job" style="width: 20rem;">
		<div class="card-body">
			<h4 class="card-title"><?php echo $jobResult['jobTitle']; ?></h4>
			<p class="card-text"><?php echo $jobResult['jobDiscription']; ?></p>
			<p class="card-text badge badge-primary company">End Of Application <?php echo $jobResult['endOfApllication']; ?></p>


			<div style="display: flex; justify-content: space-between; align-items: center;">
				<div style="font-weight: 600;">Tsh <span class="salary"><?php echo $jobResult['jobSalary']; ?></span> /=</div>

				<?php
					if($_SESSION['userData']['role'] == "is_admin"): 
						if($jobResult['endOfApllication'] <= date('Y-m-d')): ?>
							<div class="alert alert-danger">
								<p>Application Closed</p>
							</div><br>
							<a href="" data-target="#ExtendApplication<?php echo $jobResult['jobId']; ?>" data-toggle="modal">Extend</a>
						<?php else: ?>
						<div class="row">
							<div class="col-md-6">
								<!-- Button Delete jobs -->
								<button type="button" class="btn apply-button"
									data-pid="<?php echo $jobResult['jobId']; ?>"
									data-target="#deleteJob<?php echo $jobResult['jobId']; ?>" data-toggle="modal">
									<span class="text-white">
										Delete
									</span>
								</button>
							</div>
							<div class="col-md-6">
								<!-- Button Publish jobs -->
								<button type="button" class="btn btn-primary apply-button"
									data-pid="<?php echo $jobResult['jobId']; ?>"
									data-target="#publishJob<?php echo $jobResult['jobId']; ?>" data-toggle="modal">
									<span class="text-white">
										Publish
									</span>
								</button>
							</div>
						</div>
				<?php endif; else:
					if($jobResult['endOfApllication'] <= date('Y-m-d')): ?>
						<div class="alert alert-danger">
							<p>Application Closed</p>
						</div>
					<?php else: ?>
						<!-- Button apply jobs -->
						<button type="button" class="btn apply-button"
							data-pid="<?php echo $jobResult['jobId']; ?>"
							data-target="#applyModal<?php echo $jobResult['jobId']; ?>" data-toggle="modal">
							<span class="text-white">
								Apply
							</span>
						</button>
				<?php endif; endif; ?>
				<!-- Extend Application -->
				<div class="modal fade" id="ExtendApplication<?php echo $jobResult['jobId']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenteredLabel" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalCenteredLabel">Extend Job Application Date</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form action="../controller/jobModification.php?extend=<?php echo $jobResult['jobId']; ?>" method="post">
									<div class="form-group">
										<label for="date">Enter End Date</label>
										<input type="date" class="form-control" name="endOfApllication">
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
									<button type="submit" name="extendThisJob" class="btn btn-primary">Yes</button>
								</div>
							</form>
						</div>
					</div>
				</div>

				<!-- publication modal -->
				<div class="modal fade" id="publishJob<?php echo $jobResult['jobId']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenteredLabel" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalCenteredLabel">Publish This Job Application</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form action="../controller/jobModification.php" method="post">
									<div class="form-group" hidden>
										<input type="text" class="form-control" name="jobId" value="<?php echo $jobResult['jobId']; ?>" placeholder="your full name">
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Not Yet</button>
									<button type="submit" name="publishJob" class="btn btn-primary">Yes</button>
								</div>
							</form>
						</div>
					</div>
				</div>
				<!-- Deletion modal -->
				<div class="modal fade" id="deleteJob<?php echo $jobResult['jobId']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenteredLabel" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalCenteredLabel">Are You Sure Want Delete This Job Application</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form action="../controller/jobModification.php" method="post">
									<div class="form-group" hidden>
										<label for="job"></label>
										<input type="text" class="form-control" id="job" name="jobId" value="<?php echo $jobResult['jobId']; ?>" placeholder="your full name">
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">No Close</button>
									<button type="submit" name="deleteJob" class="btn btn-primary">Yes Delete</button>
								</div>
							</form>
						</div>
					</div>
				</div>
				
				<?php if(($_SESSION['userData']['role'] == 'is_staff')): ?>
					<div class="modal fade" id="applyModal<?php echo $jobResult['jobId']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenteredLabel" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalCenteredLabel">Are You Sure Want Apply To This Job</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<form action="../controller/jobModification.php" method="post">
										<div class="form-group" hidden>
											<label for="job"></label>
											<input type="number" class="form-control" id="job" name="jobId" value="<?php echo $_SESSION['userData']['userId']; ?>" placeholder="your">
											<input type="number" class="form-control" id="job" name="userId" value="<?php echo $_SESSION['userData']['userId']; ?>" placeholder="your">
											<input type="date" class="form-control" id="job" name="dateApplied">
										</div>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">No Close</button>
										<button type="submit" name="applyJob" class="btn btn-primary">Yes Apply</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>