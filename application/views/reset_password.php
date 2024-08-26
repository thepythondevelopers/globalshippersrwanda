<div class="login-page">
        <div class="container">

            <div class="login">
                
                <div class="logo-img">
                    <img src="<?php echo base_url()?>assets/imgs/logo.png" alt="logo" />
                </div>
                <form action="<?php echo base_url('Reset/password?hash='.$hash)?>" method="post" class="loginForm">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="new_pass" placeholder="New password" name="new_pass" required>
                        <label for="new_pass">New Password</label>
                    </div>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="cpass" placeholder="Confirm Password" name="cpass" required>
                        <label for="cpass">Confirm Password</label>
                    </div>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="email" placeholder="Email" name="email" required>
                        <label for="email">Email</label>
                    </div>
                    <div class="form-floating">
                       <?php if($this->session->userdata('error')){?>
                        <p class ="text-danger"> <?php $this->session->userdata('error')?></p>
                        <?php
                       
                        }?>
                        <?php if($this->session->userdata('success')){?>
                            <p class="text-success"><?php $this->session->userdata('success')?></p>
                            <?php }?>
                            <p class="text-danger"><?php echo validation_error();?></p>
                    </div>
                    <button type="submit" class="btn blue-btn" name="forgot_pass">Forgot</button>
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