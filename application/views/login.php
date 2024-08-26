<!-- <div class="login-page">
        <div class="container"> -->
            <!-- <div class="alert alert-success alert-dismissible fade show" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <span>Registration Successfull!</span>
            </div> -->
            <!-- <div class="login">
            <div>
                    <?php if($this->session->flashdata('message'))
                    {
                        echo "<div class = 'alert alert-success'>".$this->session->flashdata('message')."</div>";
                    }
                    // else{
                    //     echo "<div class= 'alert alert-success'>".$this->session->flashdata('message')."</div>";
                    // }
                    ?>
                </div>
                <div class="logo-img">
                    <img src="<?php echo base_url()?>assets/imgs/logo.png" alt="logo" />
                </div>
                <form action="<?php echo base_url('users/login')?>" method="post" class="loginForm">

                    <div class="form-floating">
                        <input type="text" class="form-control" id="email" placeholder="Email" name="email">
                        <label for="email">Email</label>
                        <small><?php echo form_error('email'); ?></small>
                    </div>
                        
                    <div class="form-floating">
                        <input type="password" class="form-control" id="pwd" placeholder="Enter your password" name="pwd">
                        <label for="pwd">Enter your password</label>
                        <small><?php echo form_error('pwd'); ?></small>
                    </div>

                    <a href="<?php echo base_url()."users/forgot"?>" class="forgot-pswd">Forgot password?</a>

                    <button type="submit" class="btn blue-btn">Log In</button>
                </form>
                <span>or</span>
                <a href="<?php echo base_url('signup')?>" class="trans-btn">Sign Up</a>
            </div>
        </div> -->
        <!-- <div class="important-menus">
            <ul class="d-flex justify-content-center align-items-center">
                <li><a href="javascript:void(0);">Contact Us</a></li>
                <li><a href="javascript:void(0);">Privacy</a></li>
                <li><a href="javascript:void(0);">Legal</a></li>
                <li><a href="javascript:void(0);">Policy updates</a></li>
                <li><a href="javascript:void(0);">Worldwide</a></li>
            </ul>
        </div> -->
    <!-- </div> -->


<style>
    .login-form{
        min-height: 100vh;
        display: flex;
        align-items: center;
    }
    .login-form .text-bg-primary {
    background: #000 !important;
}
.login-form .text-bg-primary img {
    max-height: 75px;
    width: auto;
    transition: all 0.4s ease-in-out;
    filter: brightness(0) invert(1);
}
.cstm-row{
  min-height: 600px;
  display: flex;
  flex-wrap: wrap;
}
.login-form .form-control {
    height: 48px;
}
.login-form .form-control:focus{
    box-shadow: none;
    border: 1px solid #000;
}
.blue-btn{
    background: #000;
    border: 1px solid #000;
}
.blue-btn:hover, .blue-btn:focus{
    background: #fff;
    color: #000;
    border-color: #000;
}
.forgot-pswd{
  color: #000;
}
.blue-btn img{
  height:25px;
  /* width:80px; */
  /* background-color:#ffff;  */
}
@media(max-width: 767px){
  .h1, h1 {
    font-size: 30px;
    }
    .card.border-light-subtle.shadow-sm {
    border: none !important;
    box-shadow: none !important;
    }
    .cst-p-0{
      padding: 0px !important;
    }
}
</style>

<section class="login-form p-3 p-md-4 p-xl-5">
  <div class="container">
    <div class="card border-light-subtle shadow-sm">
      <div class="row g-0 cstm-row">
        <div class="col-12 col-md-6 text-bg-primary">
          <div class="d-flex align-items-center justify-content-center h-100">
            <div class="col-12 col-lg-10 py-3">
              <a href="<?php echo base_url();?>">
                <img class="img-fluid rounded mb-4" loading="lazy" src="<?php echo base_url()?>assets/imgs/logo.png" width="245" alt="Logo">
              </a>
              <hr class="border-primary-subtle mb-4">
              <h2 class="h1 mb-5">Navigate The World Of Shipping With Ease</h2>
              <p class="lead-1 m-0">Optimize your international shipping experience with our package shipping process at significant costs</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 cst-p-0">
          <div class="card-body p-3 p-md-4 p-xl-5">
            <div class="row">
            <?php if($this->session->flashdata('message'))
                    {
                        echo "<p class = 'alert alert-success'>".$this->session->flashdata('message')."</p>";
                    }
                 
                    ?>
              <div class="col-12">
            
                   
               
                  <div class="d-flex align-items-center justify-content-center mb-4">
                      <h2 class="mb-0">Log in</h2>
                    </div>
                
              </div>
              
              <form action="<?php echo base_url('users/login')?>" method="post" class="loginForm">

<div class="form-group mb-4">
   <label for="email">Email</label>
    <input type="text" class="form-control" id="email" placeholder="Email" name="email">
    <small><?php echo form_error('email'); ?></small>
</div>
    
<div class="form-group mb-4">
  <label for="pwd">Enter your password</label>
    <input type="password" class="form-control" id="pwd" placeholder="Enter your password" name="pwd">
    <small><?php echo form_error('pwd'); ?></small>
</div>

<a href="<?php echo base_url()."users/forgot"?>" class="forgot-pswd">Forgot password?</a>

<button type="submit" class="btn blue-btn">Log In</button>
<!-- <a href="<?php echo base_url('signup-testing'); ?>" class="btn blue-btn" style="background:#fff;color:#000">
  <img src="<?php echo base_url()?>assets/imgs/g1.png" >
   Login With Google
</a> -->
</form>
            </div>
          
            
            <div class="row">
              <div class="col-12">
                <hr class="mt-3 mb-3 border-secondary-subtle">
                <div class="d-flex gap-2 gap-md-4 flex-column flex-md-row justify-content-between align-items-center">
                  <label>Have not account?</label> <a href="<?php echo base_url('signup')?>" class="btn blue-btn" style="width: auto;">Create new account</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>