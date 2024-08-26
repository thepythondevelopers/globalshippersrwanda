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
    <link rel="icon" type="image/png" href="<?php echo base_url();?>assets/cms/img/logo-black.png">
    <link rel="stylesheet" href="location/to/intl-tel-input/css/intlTelInput.css">
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!-- 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" /> -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/css/intlTelInput.css"
    />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css" />
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/responsive.css" />
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/owl.theme.default.min.css" />
    <style>
            /* .sidebar-nav li.sidebar-item.active {
            border-right: 4px solid #FFF;
            background: rgb(255 255 255 / 21%);
        } */
    </style>
       
  </head>
  <body>

<div class="dashboard-page">
<div class="dasboard-bars">
    <div class="left-bar">
        <nav class="sidebar">
            <div class="simplebar-content-wrapper">
                <div class="simplebar-content">
                    <a class="sidebar-brand" href="<?php echo base_url('')?>">
                        <img src="<?php echo base_url()?>assets/imgs/logo-black.png" class="mainlogo">
                    </a>
                   
                    <ul class="sidebar-nav">
    
                    <li class="sidebar-item  <?php echo ($high == '4')?'active':'';?>">
                        <a class="sidebar-link" href="<?php echo base_url('dashboard')?>">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="feather feather-sliders align-middle"
                        >
                            <line x1="4" y1="21" x2="4" y2="14"></line>
                            <line x1="4" y1="10" x2="4" y2="3"></line>
                            <line x1="12" y1="21" x2="12" y2="12"></line>
                            <line x1="12" y1="8" x2="12" y2="3"></line>
                            <line x1="20" y1="21" x2="20" y2="16"></line>
                            <line x1="20" y1="12" x2="20" y2="3"></line>
                            <line x1="1" y1="14" x2="7" y2="14"></line>
                            <line x1="9" y1="8" x2="15" y2="8"></line>
                            <line x1="17" y1="16" x2="23" y2="16"></line>
                        </svg>
                        <span class="align-middle">Dashboard</span>
                        </a>
                    </li>
    
                    <li class="sidebar-header">Globalshippersrwanda Services</li>
    
                    <li class="sidebar-item <?php echo ($high == '1')?'active':'';?>">
                        <a href="<?php echo base_url('shopnship')?>" class="sidebar-link">
                        <i class="fa fa-shopping-basket"></i>
                        <span class="align-middle"> Consolidate Shipments</span>
                        </a>
                    </li>
    
                    <li class="sidebar-item <?php echo ($high == '2')?'active':'';?>">
                        <a href="<?php echo base_url('assisted-sns')?>" class="sidebar-link">
                        <i class="align-middle mr-2 fas fa-fw fa-handshake"></i>
                        <span class="align-middle"> Buy For Me</span>
                        </a>
                    </li>
    
                    <li class="sidebar-item <?php echo ($high == '3')?'active':'';?>">
                        <a
                        href="<?php echo base_url('international-shipment')?>" class="sidebar-link">
                        <i class="align-middle mr-2 fas fa-fw fa-plane-departure"></i>
                        <span class="align-middle">Pickup Shipments</span>
                        </a>
                    </li>
    
                    <li class="sidebar-header">Globalshippersrwanda Help</li>
    
                    <li class="sidebar-item <?php //echo ($high == '4')?'active':'';?>">
                        <a
                        href="https://globalshippersrwanda.com/restrictions/" target="_blank" class="sidebar-link">
                        <i class="align-middle fas fa-fw fa-ban"></i>
                        <span class="align-middle">Prohibited Items</span>
                        </a>
                    </li>
                    <li class="sidebar-item <?php //echo ($high == '5')?'active':'';?>">
                        <a
                        href="<?php echo base_url('contact-us')?>" target="_blank" class="sidebar-link">
                        <i class="align-middle fas fa-fw fa-exclamation-circle"></i>
                        <span class="align-middle"> Contact Us</span>
                        </a>
                    </li>
    
                    <li class="sidebar-item">
                        <a href="<?php echo base_url('shipping-calculator')?>" target="_blank" class="sidebar-link">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round" 
                            class="feather feather-help-circle align-middle"
                        >
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                            <line x1="12" y1="17" x2="12.01" y2="17"></line>
                        </svg>
                        <span class="align-middle">Shipping calculator</span>
                        </a>
                    </li>
    
                    <li class="sidebar-item">
                        <a href="https://globalshippersrwanda.com/how-it-works/" class="sidebar-link">
                        <i class="align-middle fas fa-fw fa-exclamation-circle"></i>
                        <span class="align-middle"> How It Works</span>
                        </a>
                    </li>
    
                    <li class="sidebar-header">Other</li>
    
                  <!--   <li class="sidebar-item">
                        <a href="javascript:void(0);" class="sidebar-link">
                        <i class="align-middle fas fa-fw fa-tags"></i>
                        <span class="align-middle"> Coupons</span>
                        </a>
                    </li> -->
    
                    <li class="sidebar-item <?php echo ($high == '6')?'active':'';?>">
                        <a
                        href="<?php echo base_url('users/address')?>" class="sidebar-link">
                        <i class="align-middle fas fa-fw fa-address-book"></i>
                        <span class="align-middle"> Address Book</span>
                        </a>
                    </li>
    
                    <!-- <li class="sidebar-header">Blog</li>
    
                    <li class="sidebar-item">
                        <a href="<?php echo base_url('blog')?>" target="_blank" class="sidebar-link">
                        <i class="align-middle fab fa-fw fa-blogger"></i>
                        <span class="align-middle"> Blog</span>
                        </a>
                    </li> -->
    
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="right-bar">
        <!-- Dashboard Header Code Start  -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand p-0">
                <div class="container">
                    <!-- <a class="navbar-brand" href="#">
                        <img src="imgs/logo.png" alt="logo" />
                    </a> -->
                    <div class="mob-bar">
                        <i class="fa-solid fa-bars-staggered"></i>
                    </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end align-items-center" id="collapsibleNavbar">
                <?php if($this->session->userdata('id')){?>
                    <ul class="navbar-nav align-items-center">
                        <!-- <li class="nav-item">
                        <a class="nav-link" href="<?php //echo base_url('membership');?>">Upgrade Plan</a>
                        </li> -->
                        <!-- <li class="nav-item">
                            <a class="nav-icon" href="#" >
                                <div class="cart-img">
                                    <span> Make Payment</span>
                                    <span class="cart-value">1</span>
                                </div>
                            </a>
                        </li> -->
                        <li class="nav-item shipping">
                        <a href=" <?php echo base_url('notifications')?>">
                            <!-- <div class="cart-img">
                                <button class="cart-btn d-flex align-items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="">
                                        <path d="M8 20c-1.103 0-2-.897-2-2s.897-2 2-2 2 .897 2 2-.897 2-2 2zm0-3c-.551 0-1 .449-1 1s.449 1 1 1 1-.449 1-1-.449-1-1-1zM15 20c-1.103 0-2-.897-2-2s.897-2 2-2 2 .897 2 2-.897 2-2 2zm0-3c-.551 0-1 .449-1 1s.449 1 1 1 1-.449 1-1-.449-1-1-1zM17.539 4.467A1.351 1.351 0 0016.5 4H4.257l-.099-.596A1.718 1.718 0 002.5 2h-1a.5.5 0 000 1h1c.307 0 .621.266.671.569l1.671 10.027A1.718 1.718 0 006.5 15h10a.5.5 0 000-1h-10a.724.724 0 01-.671-.569l-.247-1.48 9.965-.867c.775-.067 1.483-.721 1.611-1.489l.671-4.027a1.354 1.354 0 00-.289-1.102zm-.697.937l-.671 4.027c-.053.316-.391.629-.711.657l-10.043.873-.994-5.962h12.076c.117 0 .215.04.276.113s.085.176.066.291z"></path>
                                    </svg> 
                                    <div class="cart-value">0</div>
                                </button>
                            </div> -->
                            <!-- <div class="shipping-order">
                           
                                <span class="" role="none">Your shipping order</span>
                                <div class="text-center">
                                    
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="">
                                        <path d="M8 20c-1.103 0-2-.897-2-2s.897-2 2-2 2 .897 2 2-.897 2-2 2zm0-3c-.551 0-1 .449-1 1s.449 1 1 1 1-.449 1-1-.449-1-1-1zM15 20c-1.103 0-2-.897-2-2s.897-2 2-2 2 .897 2 2-.897 2-2 2zm0-3c-.551 0-1 .449-1 1s.449 1 1 1 1-.449 1-1-.449-1-1-1zM17.539 4.467A1.351 1.351 0 0016.5 4H4.257l-.099-.596A1.718 1.718 0 002.5 2h-1a.5.5 0 000 1h1c.307 0 .621.266.671.569l1.671 10.027A1.718 1.718 0 006.5 15h10a.5.5 0 000-1h-10a.724.724 0 01-.671-.569l-.247-1.48 9.965-.867c.775-.067 1.483-.721 1.611-1.489l.671-4.027a1.354 1.354 0 00-.289-1.102zm-.697.937l-.671 4.027c-.053.316-.391.629-.711.657l-10.043.873-.994-5.962h12.076c.117 0 .215.04.276.113s.085.176.066.291z"></path>
                                    </svg> 
                                 
                                    Your bag is empty.
                                </div>
                                <i class="fas fa-bell"></i>
                              
                            </div>  -->
                            
                        
                            <i class="fas fa-bell" style="font-size:20px; color:black;"></i>
                            <span class="position-absolute top-0 start-10 translate-middle badge rounded-pill bg-dark">
                                <?php echo $noti_count->count_noti;?>
                                <span class="visually-hidden">unread messages</span>
                            </span>
                            
                            </a>
                        </li>
                        
                        <li class="nav-item shipping">
                        <a class="nav-link user-profile" href="#">
                        <img src="<?php echo base_url()?>assets/imgs/user.webp" class="user-img" loading="lazy" alt="avatar">
                        </a>
                        <div class="profile-items">
                            <div class="membership-box">
                                <span class="membership-mail" ><?php echo $email->email;?></span>
                                <!-- <span class="membership-plan" >free Plan</span>
                                <a href="<?php //echo base_url('membership');?>">Manage Membership</a> -->
                            </div>
                            <!-- <a title="Edit Profile" class="" href="javascript:void(0);">Edit Profile</a> -->
                            <!-- <a title="Change Password" class="" href="javascript:void(0);">Change Password</a> -->
                            <!-- <a title="Payment Methods" class="" href="<?php echo base_url('my-stripe');?>">Payment Methods</a> -->
                            <!-- <a title="Address Book" class="" href="<?php //echo base_url('address');?>">Address Book</a> -->
                            <!-- <a title="Invite Friends" class="" href="<?php echo base_url('dashboard');?>">Dashboard</a> -->
                            <!-- <a title="Invite Friends" class="" href="<?php echo base_url('invite_friends');?>">Invite Friends</a> -->
                            <a title="User Profile" class="" href="<?php echo base_url('shopnship/profile');?>">Profile</a>
                            <a class="" href="<?php echo base_url('logout')?>">Sign Out</a>
                        </div>
                        </li>
                    </ul>
                    <?php } ?>
                </div>
                </div>
            </nav>
        </div>   

        <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script>
        $(document).ready(function() {
            // $(".sidebar-nav").click(function(){
            //    $(".sidebar-item ").removeClass("active");
            //    $(".sidebar-item ").addClass("active");
            // });
        })          
        </script>