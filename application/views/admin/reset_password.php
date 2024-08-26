<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php (!empty($title )) ? $title : ('Global Shipperswanda');?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url()?>plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url()?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>dist/css/adminlte.min.css">
  <style>
    .login-logo img{
        width:100px;
        height:100px;
        border-radius:50%;
    }
  </style>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- <div class="login-logo">
    <a href="#"><img src="<?php echo base_url()?>docs/assets/img/o-logo.png"></a>
  </div> -->
  <div class="card">
    <div class="card-body login-card-body">
    <?php //if($this->session->flashdata('message'))
                    // {
                    //     echo "<div class = 'alert alert-danger'>".$this->session->flashdata('message')."</div>";
                    // }
     ?>
      <p class="login-box-msg">
      <div class="login-logo">
    <a href="#"><img src="<?php echo base_url()?>docs/assets/img/o-logo.png"></a>
  </div>
      </p>

      <form action="<?php echo base_url('Admin/Admin/update-password')?>" method="post">
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="New password" name="new_pass">
          <div class="input-group-append">
            <div class="input-group-text">
            <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <?php echo form_error('new_pass','<div class="text-danger">','</div>'); ?>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Confirm Password" name="cpass">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <?php echo form_error('cpass','<div class="text-danger">','</div>'); ?>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
            </div>
          </div>
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Update</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<script src="<?php echo base_url()?>plugins/jquery/jquery.min.js"></script>
<script src="<?php echo base_url()?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url()?>dist/js/adminlte.min.js"></script>
</body>
</html>
