<?php
     require_once('asset/templates/header.php');
     require_once('asset/include/messages.php');
?><div class="mx-auto d-flex justify-content-center col-md-10">
    <div class="col-lg-5 col-md-7">
        <div class="col-md-12">
            <div class="card bg-secondary shadow border-0 ">
                <div class="card-header bg-white pb-2">
                    <div class="row justify-content-md-center mu_logo">

                        <div class="text-muted text-center mb-3 navbar-brand">
                            <img src="image/mulogo.jpg" style="width: 100px">
                        </div>
                    </div>
                </div>     
                <div class="card-body bg-light">
                    <div class="text-center text-muted mb-4">
                        <?php if(isset($_GET['key'])){} ?>
                        <p><b>Fill Form Below To sign Up</b></p>
                    </div>
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
                        <div class="form-group">
                            <select name="gender" id="gender" class="form-control">
                                <option value="" hidden>Choose Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                        <div class="text-center">
                            <div class="form-group">
                                <button type="submit" name="registerMe" class="btn btn-block text-white custom-btn-primary my-4">Sign Up</button>
                            </div>
                        </div>
                        <a href="<?php echo $server; ?>">Sign In</a> Here
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>