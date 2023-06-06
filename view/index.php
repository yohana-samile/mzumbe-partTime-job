<?php require_once('../asset/templates/sidebar.php'); ?>        
        <?php if($_SESSION['userData']['role'] == "is_admin"): ?>
          <h2 class="text-center">Publish New Job</h2>
          <?php if(isset($_GET['key'])){} ?>
          <div class="container bg-white col-md-6">
            <form action="../controller/postJobAction.php" method="post">
              <div class="form-group">
                <label for="jobTitle">Enter Job Title</label>
                <input type="text" class="form-control" id="jobTitle" name="jobTitle" placeholder="Enter Job Title" required>
              </div>
              <div class="form-group">
                <label for="desc">Enter Job Discription</label>
                <textarea id="desc" name="jobDiscription" cols="10" rows="" class="form-control" required></textarea>
              </div>
              <div class="form-group">
                <label for="sulary">Enter Job sulary</label>
                <input type="number" class="form-control" id="sulary" name="jobSalary" placeholder="Enter Job sulary">
              </div>
              <div class="form-group" hidden>
                <label for="datePosted">date Posted</label>
                <input type="date" class="form-control" value="<?php echo date('Y-m-d'); ?>" id="datePosted" name="datePosted">
              </div>
              <div class="form-group">
                <label for="endOfApllication">end Of Apllication</label>
                <input type="date" class="form-control" id="endOfApllication" name="endOfApllication">
              </div>
              <div class="form-group" hidden>
                <label for="postedBy">postedBy</label>
                <input type="number" class="form-control" id="postedBy" name="postedBy" value="<?php echo $_SESSION['userData']['userId']; ?>">
              </div>
              <!-- <div class="form-check">
                <input type="checkbox" class="form-check-input" id="publishJob">
                <label class="form-check-label" name="status" for="publishJob">Publish</label>
              </div> -->
              <button type="submit" name="publishJob" id="btn" class="btn text-white float-right" style="">Submit</button>
            </form><br><br>
          </div>
        </div>
      <?php endif; ?>
		</div>
<?php
  require_once('../asset/templates/footer.php');
  require_once('../modal/modal.php'); 
?>