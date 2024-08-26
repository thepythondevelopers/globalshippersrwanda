<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>
    <?php (!empty($title )) ? $title : ('Global Shipperswanda');?>
  </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url()?>plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url()?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>dist/css/adminlte.min.css">
  <style>
    .login-logo img {
      width: 100px;
      height: 100px;
      border-radius: 50%;
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
        <?php if($this->session->flashdata('message'))
                    {
                        echo "<div class = 'alert alert-danger'>".$this->session->flashdata('message')."</div>";
                    }
     ?>
        <p class="login-box-msg">
        <div class="login-logo">
          <a href="#"><img src="<?php echo base_url()?>docs/assets/img/o-logo.png"></a>
        </div>
        </p>

        <form action="<?php echo base_url('Admin/recover-password')?>" method="post">
          <div class="input-group mb-3">
            <input type="email" class="form-control" placeholder="Email" name="email">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <?php echo form_error('email','<div class="text-danger">','</div>'); ?>
          <?php //echo form_error('password','<div class="text-danger">','</div>'); ?>
          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
              </div>
            </div>
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">Send Link</button>
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