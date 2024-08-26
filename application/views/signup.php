<script src='https://www.google.com/recaptcha/api.js'></script>
<!-- <div class="login-page signup-page">
        <div class="container">
            <div class="login signup">
                <div class="logo-img">
                    <img src="<?php echo base_url()?>assets/imgs/logo.png" alt="logo" />
                </div>
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
                <h2 class="text-center">Create an account</h2>

                <form action="<?php echo base_url()."users/signup";?>" method="post" class="signForm">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="fname" placeholder="First name" name="fname">
                                <label for="fname">First name</label>
                                <small><?php echo form_error('fname'); ?></small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="lname" placeholder="Last name" name="lname" >
                                <label for="lname">Last name</label>
                                <small><?php echo form_error('lname'); ?></small>
                            </div>
                        </div>
                    </div>

                    <div class="form-floating">
                        <input type="email" class="form-control" id="email" placeholder="Email Address" name="email" >
                        <label for="email-phone">Email</label>
                        <small><?php echo form_error('email'); ?></small>
                    </div>
                    
                    <div class="form-floating">
                        <input type="text" class="form-control" id="phone" placeholder="Mobile number" name="phone" >
                        <label for="phone">Mobile number</label>
                        <small><?php echo form_error('phone'); ?></small>
                    </div>

                    <div class="form-floating">
                        <input type="password" class="form-control" id="pswd" placeholder="Create password" name="pswd" >
                        <label for="pswd">Create password</label>
                        <small><?php echo form_error('pswd'); ?></small>
                    </div>

                    <div class="form-floating">
                        <input type="password" class="form-control" id="cpwd" placeholder="Confirm password" name="cpwd" >
                        <label for="cpwd">Confirm password</label>
                        <small><?php echo form_error('cpwd'); ?></small>
                        
                    </div>

                    <button type="submit" class="btn blue-btn" name="submit">Sign Up</button>
                </form>
                <span>or</span>
                <a href="<?php echo base_url('login')?>" class="trans-btn">Log In</a>
            </div>
        </div>
        <div class="important-menus">
        </div>
    </div>  -->










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
              <div class="col-12">
              <div class="d-flex align-items-center justify-content-center mb-4">
                  <h2 class="mb-0 mt-0">Create an account</h2>
                </div>
              </div>
              <?php if($this->session->flashdata('message'))
                    {
                        echo "<p class = 'alert alert-success'>".$this->session->flashdata('message')."</p>";
                    }
                 
                    ?>
            </div>
            <form action="<?php echo base_url()."users/signup";?>" method="post" class="signForm">
            <input type="hidden" name="adminemail" value="<?php echo $adminmail->email;?>">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-4">
                            <label for="fname">First name</label>
                                <input type="text" class="form-control" id="fname" placeholder="First name" name="fname">
                                <small><?php echo form_error('fname'); ?></small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-4">
                            <label for="lname">Last name</label>
                                <input type="text" class="form-control" id="lname" placeholder="Last name" name="lname" >
                                
                                <small><?php echo form_error('lname'); ?></small>
                            </div>
                        </div>
                    </div>

                    <div class="form-group mb-4">
                    <label for="email-phone">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Email Address" name="email" >
                        
                        <small><?php echo form_error('email'); ?></small>
                    </div>
                    
                    <div class="form-group mb-4">
                    <label for="phone">Mobile number</label>
                        <input type="text" class="form-control" id="phone" placeholder="Mobile number" name="phone" >
                        
                        <small><?php echo form_error('phone'); ?></small>
                    </div>

                    <div class="form-group mb-4">
                    <label for="pswd">Create password</label>
                        <input type="password" class="form-control" id="pswd" placeholder="Create password" name="pswd" >
                       
                        <small><?php echo form_error('pswd'); ?></small>
                    </div>

                    <div class="form-group mb-4">
                    <label for="cpwd">Confirm password</label>
                        <input type="password" class="form-control" id="cpwd" placeholder="Confirm password" name="cpwd" >
                        
                        <small><?php echo form_error('cpwd'); ?></small>
                        
                    </div>
                    <div class="col-md-12">
                            <div class="form-group">
                                <div class="g-recaptcha" data-sitekey="6LefsQkqAAAAAI5rcqxQk6mdK6b2CcjO2Yr3pTj-"></div>
                            </div>
                        </div>
                    <button type="submit" class="btn blue-btn" name="submit">Sign Up</button>
                </form>
            <div class="row">
              <div class="col-12">
                <hr class="mt-3 mb-3 border-secondary-subtle">
                <div class="d-flex gap-2 gap-md-4 flex-column flex-md-row justify-content-between align-items-center">
                  <label>Have account?</label> <a href="<?php echo base_url('login')?>" class="btn blue-btn" style="width: auto;">Log In</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>