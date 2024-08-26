<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>
    <?php (!empty($title )) ? $title : ('Global Shipperswanda');?>
  </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url()?>plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url()?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>build/scss/_layout.scss">

  <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    />
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>dist/css/adminlte.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

  <style>
    body:not(.layout-fixed) {
      .main-sidebar {
        height: inherit;
        min-height: 700px;
        position: fixed;
        top: 0;
      }

      .font-weight-light a {
        text-decoration: none;
      }

      /* .sidebar {
        overflow-y: auto;
      } */

    }

    .delivery_address {
      margin-top: 20px;
      /* display: inline; */
      list-style: none;

    }
    .user_details p{

      padding-left:10px;
    }

    /*.card-title {
      float: right;
    }*/

    .user_details {
      display: flex;
      flex-direction: row;
    }
    .v-card .card-header {
    padding: 1rem 1.25rem;
    margin-bottom: 0;
    background-color: #fff;
    border-bottom: 0 solid transparent;
}
.addcont li label {
    font-size: 13px;
    display: block;
    color: #8e8e8e;
    margin-bottom: 0px;
    font-weight: 500;
}
.uadd .addcont li:nth-child(1), .uadd .addcont li:nth-child(5), .uadd .addcont li:nth-child(6) {
    width: 100%;
}
.copy {
    width: calc(100% - 51px);
    border: white;
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
    display: inline-block;
    resize: none;
}
ul li{
  list-style:none;
}
.brand-link{
  background:white;
  font-size:1.75rem;
}
  </style>
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a  href="<?php echo base_url('admin/notifications')?>">
            <i class="fas fa-bell  start-0 translate-middle" style="font-size:30px;margin-top:20px;color:#003948"></i>
                            <span class="badge badge-danger navbar-badge badge rounded-pill mt-1 start-10 translate-middle">
                                <?php echo $count->count_notification;?>
                                <span class="visually-hidden">unread messages</span>
                            </span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-item dropdown-header"><?php echo $count->count_notification;?></span>
            <div class="dropdown-divider">
              
            </div>
          </div> 
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="<?php echo base_url('Admin/dashboard')?>" class="brand-link">
        <img src="<?php echo base_url()?>assets/imgs/logo-black.png" alt=" Logo"
          class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Global Shipperswanda</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div> -->
        <!-- <div class="info">
              <a href="#" class="d-block">Global Shipperswanda</a>
            </div> -->
     

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="<?php echo base_url('Admin/dashboard')?>" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>

          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class=" fas fa-user"></i>
              <p>
                User
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('user-list');?>" class="nav-link">
                  <p>User List</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('payment-list')?>" class="nav-link">
              <i class="fa fa-credit-card" aria-hidden="true"></i>
              <p>
                Payment History
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Orders
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('order/shopnship')?>" class="nav-link">
                  <!-- <i class="far fa-circle nav-icon"></i> -->
                  <p>Consolidate Shipments</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('order/assisted')?>" class="nav-link">
                  <p>Buy For Me</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('order/international')?>" class="nav-link">
                  <!-- <i class="far fa-circle nav-icon"></i> -->
                  <p>Pickup Shipments</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item" >
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                CMS Pages
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="overflow-y: auto;">
              <li class="nav-item">
                <a href="<?php echo base_url('cms/homepage')?>" class="nav-link">
                  <!-- <i class="far fa-circle nav-icon"></i> -->
                  <p>Homepage</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('cms/how-it-works-list')?>" class="nav-link">
                  <!-- <i class="far fa-circle nav-icon"></i> -->
                  <p>How it Works</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('cms/about-us')?>" class="nav-link">
                  <!-- <i class="far fa-circle nav-icon"></i> -->
                  <p>About Us</p>
                </a>
              </li>  
              <li class="nav-item">
                <a href="<?php echo base_url('cms/restrictions-listing')?>" class="nav-link">
                  <!-- <i class="far fa-circle nav-icon"></i> -->
                  <p>Restrictions</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('cms/help-centre-listing')?>" class="nav-link">
                  <!-- <i class="far fa-circle nav-icon"></i> -->
                  <p>Help-Centre</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('cms/faq-listing')?>" class="nav-link">
                  <!-- <i class="far fa-circle nav-icon"></i> -->
                  <p>FAQ</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('cms/contact-us')?>" class="nav-link">
                  <!-- <i class="far fa-circle nav-icon"></i> -->
                  <p>Contact Us</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('cms/shipping')?>" class="nav-link">
                  <!-- <i class="far fa-circle nav-icon"></i> -->
                  <p>Shipping Calculator</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('cms/blog-list')?>" class="nav-link">
                  <!-- <i class="far fa-circle nav-icon"></i> -->
                  <p>Blog</p>
                </a>
              </li>
             
              <li class="nav-item">
                <a href="<?php echo base_url('cms/consolidation-listing')?>" class="nav-link">
                  <!-- <i class="far fa-circle nav-icon"></i> -->
                  <p>Consolidation</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('Admin/Admin/privacy')?>" class="nav-link">
                  <!-- <i class="far fa-circle nav-icon"></i> -->
                  <p>Privacy Policy</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('Admin/Admin/terms')?>" class="nav-link">
                  <!-- <i class="far fa-circle nav-icon"></i> -->
                  <p>Terms & Conditions</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Automation
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('admin/automate-consolidate-shipments')?>" class="nav-link">
                  <!-- <i class="far fa-circle nav-icon"></i> -->
                  <p>Consolidate Shipments</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <!-- <i class="nav-icon fas fa-lock"></i> -->
            <a href="<?php echo base_url('Admin/logout')?>" class="nav-link">
              <i class="nav-icon fas fa-lock"></i>
              <p>Logout</p>
            </a>
          </li>
          <li class="nav-item">
            <!-- <i class="nav-icon fas fa-lock"></i> -->
            <a href="<?php echo base_url('Admin/edit-mail')?>" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>Edit Mail</p>
            </a>
          </li>
          <li class="nav-item">
            <!-- <i class="nav-icon fas fa-lock"></i> -->
            <a href="<?php echo base_url('admin/user-email')?>" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>Admin create order</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->

  </aside>
  <!-- </div> -->