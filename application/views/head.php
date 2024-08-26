<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php (!empty($title )) ? $title : ('Global Shipperswanda');?></title>
    <!-- Latest compiled and minified CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
    />
    <link rel="canonical" href="<?php echo $canonical_tags;?>">
    <link rel="icon" type="image/png" href="<?php echo base_url();?>assets/cms/img/logo-black.png">
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="location/to/intl-tel-input/css/intlTelInput.css">
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    />
    <link href= "https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.dataTables.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/css/intlTelInput.css"
    />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css" />
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/responsive.css" />

  </head>
  <body>
  <!-- <div class="dashboard-page">
         Dashboard Header Code Start  -->
        <!-- <div class="dashboard-header">
            <nav class="navbar navbar-expand p-0">
                <div class="container">
                    <a class="navbar-brand" href="#">
                        <img src="<?php echo base_url()?>assets/imgs/logo.png" alt="logo" />
                    </a>
                   
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end align-items-center" id="collapsibleNavbar">
                    <ul class="navbar-nav align-items-center">  -->
                        <!-- <li class="nav-item">
                        <a class="nav-link" href="#">Upgrade Plan</a>
                        </li> -->
                        <!-- <li class="nav-item">
                            <a class="nav-icon" href="#" >
                                <div class="cart-img">
                                    <span> Make Payment</span>
                                    <span class="cart-value">1</span>
                                </div>
                            </a>
                        </li> -->
                        <!-- <li class="nav-item shipping">
                            <div class="cart-img">
                                <button class="cart-btn d-flex align-items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="">
                                        <path d="M8 20c-1.103 0-2-.897-2-2s.897-2 2-2 2 .897 2 2-.897 2-2 2zm0-3c-.551 0-1 .449-1 1s.449 1 1 1 1-.449 1-1-.449-1-1-1zM15 20c-1.103 0-2-.897-2-2s.897-2 2-2 2 .897 2 2-.897 2-2 2zm0-3c-.551 0-1 .449-1 1s.449 1 1 1 1-.449 1-1-.449-1-1-1zM17.539 4.467A1.351 1.351 0 0016.5 4H4.257l-.099-.596A1.718 1.718 0 002.5 2h-1a.5.5 0 000 1h1c.307 0 .621.266.671.569l1.671 10.027A1.718 1.718 0 006.5 15h10a.5.5 0 000-1h-10a.724.724 0 01-.671-.569l-.247-1.48 9.965-.867c.775-.067 1.483-.721 1.611-1.489l.671-4.027a1.354 1.354 0 00-.289-1.102zm-.697.937l-.671 4.027c-.053.316-.391.629-.711.657l-10.043.873-.994-5.962h12.076c.117 0 .215.04.276.113s.085.176.066.291z"></path>
                                    </svg> 
                                    <div class="cart-value">0</div>
                                </button>
                            </div>
                            <div class="shipping-order">
                                <span class="" role="none">Your shipping order</span>
                                <div class="text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="">
                                        <path d="M8 20c-1.103 0-2-.897-2-2s.897-2 2-2 2 .897 2 2-.897 2-2 2zm0-3c-.551 0-1 .449-1 1s.449 1 1 1 1-.449 1-1-.449-1-1-1zM15 20c-1.103 0-2-.897-2-2s.897-2 2-2 2 .897 2 2-.897 2-2 2zm0-3c-.551 0-1 .449-1 1s.449 1 1 1 1-.449 1-1-.449-1-1-1zM17.539 4.467A1.351 1.351 0 0016.5 4H4.257l-.099-.596A1.718 1.718 0 002.5 2h-1a.5.5 0 000 1h1c.307 0 .621.266.671.569l1.671 10.027A1.718 1.718 0 006.5 15h10a.5.5 0 000-1h-10a.724.724 0 01-.671-.569l-.247-1.48 9.965-.867c.775-.067 1.483-.721 1.611-1.489l.671-4.027a1.354 1.354 0 00-.289-1.102zm-.697.937l-.671 4.027c-.053.316-.391.629-.711.657l-10.043.873-.994-5.962h12.076c.117 0 .215.04.276.113s.085.176.066.291z"></path>
                                    </svg> 
                                    Your bag is empty.
                                </div>
                            </div>
                        </li> -->
                        <?php //if($this->session->userdata('id')){?>
                           <!-- <li> <a href="<?php echo base_url('logout')?>">Sign Out</a></li> -->
                        <?php// } else { ?>
                            <!-- <li> <a href="<?php echo base_url('signup')?>">Sign Up</a></li> -->
                       <?php// }?>
                        
                        
                        <?php //if($this->session->userdata('id')){?>
                        <!-- <li class="nav-item shipping">
                        <a class="nav-link user-profile" href="#">
                            <img src="<?php echo base_url()?>assets/imgs/user.webp" class="user-img" loading="lazy" alt="avatar">
                        </a>
                        
                        <div class="profile-items">
                       
                           
                            <div class="membership-box">
                                <span class="membership-mail" >wideshop1@gmail.com</span>
                                <span class="membership-plan" >free Plan</span>
                                <a href="javascript:void(0);">Manage Membership</a>
                            </div>
                            <a title="Edit Profile" class="" href="javascript:void(0);">Edit Profile</a>
                            <a href="<?php echo base_url('dashboard')?>">Dashboard</a>
                            <a title="Edit Profile" class="" href="javascript:void(0);">Edit Profile</a> -->
                            <!--<a title="Change Password" class="" href="javascript:void(0);">Change Password</a>
                            <a title="Payment Methods" class="" href="<?php echo base_url('my-stripe');?>">Payment Methods</a>
                            <a title="Address Book" class="" href="javascript:void(0);">Address Book</a>
                            <a href="<?php echo base_url('notifications')?>">Notifications</a>
                            <a href="<?php echo base_url('membership')?>">Membership</a>
                            <a title="Invite Friends" class="" href="javascript:void(0);">Invite Friends</a>
                            <a href="<?php //echo base_url()."Home/logout"?>"><button class="">Sign Out</button></a>-->
                        <!-- </div>
                       
                        </li>  -->
                        <?php
                        //}
                        ?>
                    <!-- </ul> -->
                <!-- </div>
                </div>
            </nav>
        </div> -->