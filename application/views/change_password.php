<div class="login-page">
        <div class="container">
        <?php //print_r( $temp_pass);exit;?>
            <!-- <div class="alert alert-success alert-dismissible fade show" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <span>Registration Successfull!</span>
            </div> -->
            <?php if($this->session->flashdata('message'))
                    {
                        echo "<p class = 'alert alert-success'>".$this->session->flashdata('message')."</p>";
                    }
                 
                    ?>
            <div class="login">
            <a class="" href="<?php echo base_url();?>">
                <div class="logo-img">
                    <img src="<?php echo base_url()?>assets/cms/img/logo-black.png" alt="logo" />
                </div>
</a>
                <form action="<?php echo base_url('Forgotpassword/update_password')?>" method="post" class="loginForm">
                    <input type="hidden" id="id" name="temp_password" value="<?php print_r($temp_pass) ;?>">
                    <div class="form-floating">
                        <input type="password" class="form-control" id="pass" placeholder="password" name="pass" required>
                        <label for="pass">New Password</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="cpass" placeholder="cpassword" name="cpass" required>
                        <label for="cpass">Confirm Password</label>
                    </div>
                    <div class="form-floating">
                        <button type="submit" class="btn blue-btn" name="change_pass">Update</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- <div class="important-menus">
            <ul class="d-flex justify-content-center align-items-center">
                <li><a href="javascript:void(0);">Contact Us</a></li>
                <li><a href="javascript:void(0);">Privacy</a></li>
                <li><a href="javascript:void(0);">Legal</a></li>
                <li><a href="javascript:void(0);">Policy updates</a></li>
                <li><a href="javascript:void(0);">Worldwide</a></li>
            </ul>
        </div> -->
    </div>