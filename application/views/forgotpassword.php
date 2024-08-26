<div class="login-page">
        <div class="container">
    
            <div class="login">
                
                <div class="logo-img">
                    <img src="<?php echo base_url()?>assets/imgs/logo.png" alt="logo" />
                </div>
                <form action="<?php echo base_url('Home/forgot_pass')?>" method="post" class="loginForm">

                    <div class="form-floating">
                        <input type="text" class="form-control" id="email" placeholder="Email" name="email" required>
                        <label for="email">Email</label>
                    </div>
                    <a href="<?php echo base_url('Home/reset_password')?>" class="trans-btn">Forgot Password</a>
                </form>
            </div>
        </div>
        <div class="important-menus">
            <ul class="d-flex justify-content-center align-items-center">
                <li><a href="javascript:void(0);">Contact Us</a></li>
                <li><a href="javascript:void(0);">Privacy</a></li>
                <li><a href="javascript:void(0);">Legal</a></li>
                <li><a href="javascript:void(0);">Policy updates</a></li>
                <li><a href="javascript:void(0);">Worldwide</a></li>
            </ul>
        </div>
    </div>