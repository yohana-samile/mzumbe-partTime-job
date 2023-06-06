<!-- Application Modal -->
<div class="modal fade" id="applyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenteredLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenteredLabel">Sign Up To Appliy For This Post</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="controller/signUpAction.php" method="POST" autocomplete="off" role="form">
                    <div class="form-group mb-3">
                        <div class="input-group input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-user"></i></span>
                            </div>
                            <input type="text" name="fullName" class="form-control" placeholder="Full Name" maxlength="200" autofocus="on" required id="id_username">
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="input-group input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-user"></i></span>
                            </div>
                            <input type="text" name="email" class="form-control" placeholder="email OR Username" maxlength="200" autofocus="on" required id="id_username">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-lock ni-lock-circle-open"></i></span>
                            </div>
                            <input type="password" name="password" class="form-control" placeholder="Password" maxlength="200" required id="id_password">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-lock ni-lock-circle-open"></i></span>
                            </div>
                            <input type="password" name="confirmPassword" class="form-control" placeholder="Confirm Password" maxlength="200" required id="id_password">
                        </div>
                    </div>
                    <div class="text-center">
                        <div class="form-group">
                            <button type="submit" name="registerMe" class="btn btn-block text-white custom-btn-primary my-4">Sign Up</button>
                        </div>
                    </div>
                    <a href="<?php echo $server; ?>">Sign In</a> Here
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">close</button>
                <button type="button" class="btn btn-primary">submit</button>
            </div>
        </div>
    </div>
</div>

<!-- About modal -->
<div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenteredLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenteredLabel">Feed About Us Page</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="<?php echo $server; ?>controller/settingAction.php" method="POST" autocomplete="off" role="form">
                    <div class="form-group">
                        <textarea name="aboutUs" id="AboutUs" name="aboutUs" placeholder="Enter About Us Conte" cols="30" class="form-control" rows="10" required></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">close</button>
                    <button type="submit" name="feedAbout" class="btn btn-primary">submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- contact modal -->
<div class="modal fade" id="aboutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenteredLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenteredLabel">Feed Contact Us Page</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="<?php echo $server; ?>controller/settingAction.php" method="POST" autocomplete="off" role="form">
                    <div class="form-group">
                        <input type="number" name="phoneNo1" class="form-control" placeholder="Enter Phone Number One">
                    </div>
                    <div class="form-group">
                        <input type="number" name="phoneNo2" class="form-control" placeholder="Enter Phone Number Two">
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Enter email">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">close</button>
                    <button type="submit" name="FeedContact" class="btn btn-primary">submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Regstration Complation -->
<div class="modal fade" id="regstrationComplation" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenteredLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenteredLabel">Fill This Form To Complite Your Registration</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="<?php echo $server; ?>controller/registrationComplition.php" method="POST" autocomplete="off" role="form" enctype="multipart/form-data">
                    <div class="form-group" hidden>
                        <input type="number" name="uId" value="<?php echo $_SESSION['userData']['userId']; ?>" class="form-control" placeholder="Enter Phone Number Two">
                    </div>
                    <div class="form-group">
                        <label for="cv">Upload PDF CV Or Resume</label>
                        <input type="file" name="seekerCv" class="form-control" placeholder="Upload PDF CV">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">close</button>
                    <button type="submit" name="complite" class="btn btn-primary">complite</button>
                </div>
            </form>
        </div>
    </div>
</div>