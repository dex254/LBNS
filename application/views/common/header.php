<!doctype html>
<html lang="en">


<!-- Mirrored from themesdesign.in/lexa-ajax/layouts/red/index-dark.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Jun 2022 18:07:21 GMT -->
<head>

        <meta charset="utf-8" />
        <title>LBNS</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo base_url("assets/images/favicon.ico");?>">

        <!-- Bootstrap Css -->
        <link href="<?php echo base_url("assets/css/bootstrap-dark.min.css");?>" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="<?php echo base_url("assets/css/icons.min.css");?>" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="<?php echo base_url("assets/css/app-dark.min.css");?>" id="app-style" rel="stylesheet" type="text/css" />

    </head>


    <body data-sidebar="dark">

    <!-- <body data-layout="horizontal" data-topbar="colored"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            <header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="<?php echo base_url("index.html");?>" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="<?php echo base_url("assets/images/logo-sm.png");?>" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="<?php echo base_url("assets/images/logo-dark.png");?>" alt="" height="17">
                    </span>
                </a>


                    <h2>LBNS</h2>


            </div>

            <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect vertical-menu-btn">
                <i class="mdi mdi-menu"></i>
            </button>

            <div class="d-none d-sm-block">
                <div class="dropdown dropdown-topbar pt-3 mt-1 d-inline-block">
                    <a class="btn btn-light dropdown-toggle"  href="<?php echo base_url('index.php/login/logout/');?>" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        get out    <i class="mdi mdi-chevron-down"></i>
                        </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex">

            <!-- App Search-->


            <div class="dropdown d-inline-block d-lg-none ms-2">
                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="mdi mdi-magnify"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                    aria-labelledby="page-header-search-dropdown">

                    <form class="p-3">
                        <div class="form-group m-0">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>





            <div class="dropdown d-none d-lg-inline-block">
                <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                    <i class="mdi mdi-fullscreen font-size-24"></i>
                </button>
            </div>

          



            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">


                        <span class="user-name"><?php echo $login['fullName'];?></span></a>
                </button>


                <div class="dropdown-menu dropdown-menu-end">

                    <!-- item-->

                    <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle font-size-17 text-muted align-middle me-1"></i> <?php echo $login['fullName'];?></a>

                    <a class="dropdown-item" href="#"><i class="mdi mdi-lock-open-outline font-size-17 text-muted align-middle me-1"></i> Lock screen</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="<?php echo base_url('index.php/login/logout/');?>"><i class="mdi mdi-power font-size-17 text-muted align-middle me-1 text-danger"></i> Logout</a>

                </div>
            </div>


            </div>

        </div>
    </div>
</header>
            <!-- ========== Left Sidebar Start ========== -->
