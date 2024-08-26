<div class="login-page forgot-page">
        <div class="container">
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
                <form action="<?php echo base_url('Forgotpassword/recover_password')?>" method="post" class="loginForm">
               <?php echo $this->session->flashdata('email_sent'); ?>
                    
                    <input type="hidden" name="fname" value="">
                    <input type="hidden" name="lname" value="">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="email" placeholder="Email" name="email" required>
                        <label for="email">Email</label>
                    </div>
                    <div class="form-floating">
                    <button type="submit" class="btn blue-btn">Send Mail</button>
                    </div>
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