<!doctype html>
<html lang="en">


<!-- Mirrored from themesdesign.in/lexa-ajax/layouts/red/pages-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Jun 2022 18:19:37 GMT -->
<head>

        <meta charset="utf-8" />
        <title>LBNS </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo base_url("assets/images/favicon.ico");?>">

        <!-- Bootstrap Css -->
        <link href="<?php echo base_url("assets/css/bootstrap.min.css");?>" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="<?php echo base_url("assets/css/icons.min.css");?>" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="<?php echo base_url("assets/css/app.min.css");?>" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body>
        <div class="account-pages my-5 pt-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card overflow-hidden">
                            <div class="card-body pt-0">
                                <h3 class="text-center mt-5 mb-4">
                                    <a href="index.html" class="d-block auth-logo">
                                      <h2>LBNS</h2>
                                    </a>
                                </h3>
                                <div class="p-3">
                                    <h4 class="text-muted font-size-18 mb-1 text-center">Free Register</h4>
                                    <p class="text-muted text-center">Get your free LBNS account now.</p>
                                    <?php echo form_open_multipart('users/store',$attributes); ?>
                                    <form class="form-horizontal mt-4" action="post">

                                        <div class="mb-3">
                                            <label for="useremail">Fist Name</label>
                                            <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter fist name">
                                        </div><?php echo form_error('fname'); ?>
                                        <div class="mb-3">
                                            <label for="useremail">Last Name</label>
                                            <input type="text" id="lname"  name="lname" class="form-control"  placeholder="Enter last name">
                                        </div><?php echo form_error('lname'); ?>
                                        <div class="mb-3">
                                            <label for="useremail">Username</label>
                                            <input type="text" id="username" name="username" class="form-control"  placeholder="Enter username">
                                        </div><?php echo form_error('username'); ?>

                                        <div class="mb-3">
                                            <label for="userpassword">Password</label>
                                            <input type="password"  id="password" name="password" class="form-control"  placeholder="Enter password">
                                        </div>
                                        <div class="mb-3">
                                            <label for="username">Confirm Password</label>
                                            <input type="password" id="cpassword" name="cpassword"  class="form-control"  placeholder="Enter confirm password">
                                        </div><?php echo form_error('cpassword'); ?>
                                        <div class="mb-3">
                                            <label for="useremail">Email</label>
                                            <input type="email"  id="email" name="email" class="form-control" placeholder="Enter email">
                                        </div><?php echo form_error('email'); ?>
                                        <div class="mb-3">
                                            <label for="useremail">Contact Number</label>
                                            <input type="number"  id="phone" name="phone" class="form-control"  placeholder="Enter phone number">
                                        </div><?php echo form_error('phone'); ?>

                                        <div class="mb-3 row mt-4">
                                            <div class="col-12 text-end">
                                                <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Saveing</button>
                                                <a href="<?php echo base_url('index.php/users/');?>"><button type="button" class="btn btn-outline-warning waves-effect waves-light">Go back</button></a>

                                            </div>
                                        </div>


                                        <div class="mb-0 row">
                                            <div class="col-12 mt-4">
                                                <p class="text-muted mb-0 font-size-14">By registering you agree to the LBNS <a href="#" class="text-primary">Terms of Use</a></p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 text-center">

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- JAVASCRIPT -->
        <script src="<?php echo base_url("assets/libs/jquery/jquery.min.js");?>"></script>
        <script src="<?php echo base_url("");?>assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo base_url("assets/libs/metismenu/metisMenu.min.js");?>"></script>
        <script src="<?php echo base_url("assets/libs/simplebar/simplebar.min.js");?>"></script>
        <script src="<?php echo base_url("assets/libs/node-waves/waves.min.js");?>"></script>
        <script src="<?php echo base_url("assets/libs/jquery-sparkline/jquery.sparkline.min.js");?>"></script>
        <!-- App js -->
        <script src="<?php echo base_url("assets/js/app.js");?>"></script>
    </body>


<!-- Mirrored from themesdesign.in/lexa-ajax/layouts/red/pages-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Jun 2022 18:19:37 GMT -->
</html>
