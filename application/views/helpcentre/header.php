<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?php (!empty($title )) ? $title : ('Global Shipperswanda');?></title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=PT+Serif:wght@400;700&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
        <link href="https://cdn.bootcss.com/OwlCarousel2/2.2.1/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/animatecss/3.5.2/animate.min.css" rel="stylesheet">
        <link href="<?php echo base_url()?>assets/cms/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url()?>assets/cms/css/style.css" rel="stylesheet">
       
        <!-- <link href="<?php echo base_url()?>assets/article/css/style.css" rel="stylesheet">
        <link href="<?php echo base_url()?>assets/article/css/blogdetails.css" rel="stylesheet"> -->
        <link href="<?php echo base_url()?>assets/helpcentre/css/helpcentrestyle.css" rel="stylesheet">


        </head>

<body>

    <!-- Spinner Start -->
   <!--  <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div> -->
    <!-- Spinner End -->


    <!-- Navbar start -->
    <div class="container-fluid sticky-top px-0">
        <div class="container-fluid">
            <div class="container px-0">
                <nav class="navbar navbar-light navbar-expand-xl">
                    <a href="<?php echo base_url();?>" class="navbar-brand">
                        <!-- <h1 class="text-primary display-5">Logo.</h1> -->
                        <img src="<?php echo base_url()?>assets/cms/img/logo-black.png" alt="logo" style="max-height: 70px;">
                    </a>
                    <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars text-primary"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav mx-auto border-top">
                           <a href="<?php echo base_url();?>" class="nav-item nav-link <?php echo ($high == '1')?'active':'';?>">Home</a>
                            <a href="<?php echo base_url('about-us');?>" class="nav-item nav-link <?php echo ($high == '2')?'active':'';?>">About</a>
                            <a href="<?php echo base_url('consolidation');?>" class="nav-item nav-link <?php echo ($high == '3')?'active':'';?>">Consolidation</a>
                            <a href="<?php echo base_url('contact-us');?>" class="nav-item nav-link <?php echo ($high == '4')?'active':'';?>">Contact Us</a>
                        </div>
                        <div class="d-flex align-items-center flex-nowrap pt-xl-0">
                            <!-- <button class="btn-search btn btn-primary btn-primary-outline-0 rounded-circle btn-lg-square" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search"></i></button> -->
                            <a href="<?php echo base_url('login');?>" class="btn btn-primary btn-primary-outline-0 rounded-pill py-3 px-4 ms-4">Sign In</a>

                        </div>
                        <div class="d-flex align-items-center flex-nowrap pt-xl-0">
                            <!-- <button class="btn-search btn btn-primary btn-primary-outline-0 rounded-circle btn-lg-square" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search"></i></button> -->
                            <a href="<?php echo base_url('signup');?>" class="btn btn-primary btn-primary-outline-0 rounded-pill py-3 px-4 ms-4">Sign Up</a>

                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Modal Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h4 class="modal-title mb-0" id="exampleModalLabel">Search by keyword</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center">
                    <div class="input-group w-75 mx-auto d-flex">
                        <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                        <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Search End -->