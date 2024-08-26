<!DOCTYPE html>
<html lang="en">
  <head>
    <style>

      .navbar-nav{
        width: 100%;
        justify-content: flex-end;
        
      }
      /* .navbar-nav li{
        color: #2da298;
        font-weight: 500;
      } */
      
   
      </style>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php (!empty($title )) ? $title : ('Global Shipperswanda');?></title>
    <!-- Latest compiled and minified CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
    />
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
    <link rel="stylesheet" href="<?php echo base_url()?>assets/prohibited/css/style.css" />
    <link rel="stylesheet" href="<?php echo base_url()?>assets/prohibited/css/responsive.css" />
  </head>
  <body>
    <!-- HEADER START -->
    <header class="p-header">
      <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="<?php echo base_url('membership')?>">
            <img src="<?php echo base_url()?>assets/prohibited/imgs/logo.png" alt="logo" />
          </a>
          <!-- <div class="btn-box">
            <div class="dropdown">
              <button
                class="signindropdown dropdown-toggle"
                type="button"
                data-bs-toggle="dropdown"
              >
               <?php //echo $email->email;?>
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="<?php //echo base_url('dashboard')?>">Dashboard</a>
                <a class="dropdown-item" href="<?php //echo base_url()?>">Sign Out</a>
              </div>
            </div>
          </div> -->
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#collapsibleNavbar"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav align-items-center w-100">
              <!-- <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  role="button"
                  data-bs-toggle="dropdown"
                  >About</a
                >
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">About Us</a></li>
                  <li>
                    <a class="dropdown-item" href="#">Terms & Conditions</a>
                  </li>
                  <li><a class="dropdown-item" href="#">Privacy Policy</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  role="button"
                  data-bs-toggle="dropdown"
                  >Services</a
                >
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Shop N Ship</a></li>
                  <li>
                    <a class="dropdown-item" href="#">Assisted Shop N Ship</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">Seller Assistance</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">International Shipment</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Offers</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Shipping Rates</a>
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  role="button"
                  data-bs-toggle="dropdown"
                  >How it works</a
                >
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="<?php //echo base_url('Prohibited/how_it_works_sns')?>">Shop N Ship</a></li>
                  <li>
                    <a class="dropdown-item" href="<?php //echo base_url('Prohibited/how_it_works_assisted')?>">Assisted Shop N Ship</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Indian Stores</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php //echo base_url('Prohibited/faq');?>">FAQ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Duty & Taxes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php //echo base_url('dashboard')?>">Dashboard</a>
              </li> -->
              <li> <a href="<?php echo base_url('contact-us')?>">Contact</a></li>
               <li> <a href="<?php echo base_url('login')?>">Sign In</a></li>
              <li> <a href="<?php echo base_url('signup')?>">Create Account</a></li>
              
            </ul> 
          </div>
        </div>
      </nav>
    </header>