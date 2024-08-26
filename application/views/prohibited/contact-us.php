<script src='https://www.google.com/recaptcha/api.js'></script>
<style>
    .contactform .form-group {
    margin-bottom: 20px;
}
.contactform .form-control{
    min-height: 50px;
}
.contactform textarea.form-control{
    min-height: 130px;
}
.contactform label {
    color: #000;
    margin-bottom: 7px;
}
</style>
<div class="container-fluid bg-breadcrumb" style="background: #000;">
                <div class="container text-center py-3" style="max-width: 900px;">
                    <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInDown;">Contact Us</h3>
                        <h4 class="text-white">Feel free to contact us</h4>   
                </div>
            </div>
<!-- PAGE HEADING START  -->
 <!-- <div class="page-title-area">
      <div class="container">
        <div class="page-title-content">
          <h2>Contact Us</h2>
          <p>Feel free to contact us</p>
        </div>
      </div>
    </div> -->
    <!-- PAGE HEADING END  -->

    <!-- CONTACTDET START -->
    <div class="contactdet">
      <div class="container">
        <div class="row">
        <div class="col-12">
                        <!-- <div class="row g-4">
                            <div class="col-lg-4">
                                <div class="d-inline-flex bg-light w-100 border border-primary p-4 rounded">
                                    <i class="fas fa-map-marker-alt fa-2x text-primary me-4"></i>
                                    <div>
                                        <h4>Location</h4>
                                        <p class="mb-0"><?php echo $contact->location;?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="d-inline-flex bg-light w-100 border border-primary p-4 rounded">
                                    <i class="fas fa-envelope fa-2x text-primary me-4"></i>
                                    <div>
                                        <h4>Mail Us</h4>
                                        <p class="mb-0"><?php echo $contact->email;?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="d-inline-flex bg-light w-100 border border-primary p-4 rounded">
                                    <i class="fa fa-phone-alt fa-2x text-primary me-4"></i>
                                    <div>
                                        <h4>Telephone</h4>
                                        <p class="mb-0"><?php echo $contact->contact;?></p>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <div>
                    <?php if($this->session->flashdata('message'))
                    {
                        echo "<div class = 'alert alert-success'>".$this->session->flashdata('message')."</div>";
                    }
                    ?>
                  
                </div>
            <div class="col-md-12">
            <?php if(!empty($status)){ ?>
                <div class="status <?php echo $status['type']; ?>"><?php echo $status['msg']; ?></div>
                <?php } ?>
                <div class="contactform card bg-light p-4 mt-5">
                    <!-- <h2 class="display-5 text-center mb-4">Request Callback</h2> -->
                    
                    <form method="POST" class="row" action="<?php echo base_url('contact-us')?>">
                    <input type="hidden" name="adminemail" value="<?php echo $adminemail->email;?>">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Full Name</label>
                                <input type="text" class="form-control" name="fname" id="fname" placeholder="Enter your name" >
                                <?php echo form_error('fname','<p class="field-error text-danger">','</p>'); ?>
                            </div>
                        </div>
                    
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email address" >
                                <?php echo form_error('email','<p class="field-error text-danger">','</p>'); ?>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Mobile Number</label>
                                <input type="number" class="form-control" name="mob"  id="mob" placeholder="" >
                                <?php echo form_error('mob','<p class="field-error text-danger">','</p>'); ?>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Your Message</label>
                                <textarea row="4" class="form-control" name="message" id="message" placeholder="Enter your message " ></textarea>
                                <?php echo form_error('message','<p class="field-error text-danger">','</p>'); ?>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="g-recaptcha" data-sitekey="6LefsQkqAAAAAI5rcqxQk6mdK6b2CcjO2Yr3pTj-"></div>
                            </div>
                        </div>
                        <div class="form-group d-flex justify-content-center">
                            <input class="btn btn-primary btn-primary-outline-0 rounded-pill py-3 px-4 ms-4" type="submit" name="submit"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
      </div>
    </div>