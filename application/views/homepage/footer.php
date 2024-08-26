
        <!-- Footer Start -->
        <div class="container-fluid footer">
            <div class="container py-5">
                <div class="row">
                    <div class="col-md-6 col-lg-6 col-xl-5">
                        <div class="footer-item">
                           <a href="<?php echo base_url();?>" class="navbar-brand">
                             <img src="<?php echo base_url()?>assets/cms/img/logo-black.png" alt="logo" style="max-height: 70px;">
                        </a>    
                            <p class="text-dark">Tax-Free Shopping from USA, China, India, Turkey, Japan, Germany, and Rwanda to anywhere Around the World!</p>
                        </div>
                    </div>
                    <!-- <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                           
                        </div>
                    </div> -->
                    <div class="col-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <!-- <h4 class="mb-4 text-white">Schedule</h4>
                            <p class="text-white mb-0">Monday: <span class="text-white"> 09:00 am – 10:00 pm</span></p>
                            <p class="text-white mb-0">Saturday: <span class="text-white"> 09:00 am – 08:00 pm</span></p>
                            <h4 class="my-4 text-white">Address</h4>
                            <p class="mb-0"><i class="fas fa-map-marker-alt text-white me-2"></i> KN 72 St, Kigali, Rwanda</p> -->
                            <a href="<?php echo base_url();?>"><i class="fas fa-angle-right me-2"></i> Home</a>
                            <a href="<?php echo base_url('about-us');?>"><i class="fas fa-angle-right me-2"></i> About</a>
                            <a href="<?php echo base_url('faq');?>"><i class="fas fa-angle-right me-2"></i> Faq</a>
                            <a href="<?php echo base_url('restrictions');?>"><i class="fas fa-angle-right me-2"></i> Restrictions</a>
                            <a href="<?php echo base_url('blog');?>"><i class="fas fa-angle-right me-2"></i> Blog</a>
                            <a href="<?php echo base_url('shipping-calculator');?>"><i class="fas fa-angle-right me-2"></i> Shipping calculator</a>

                        </div>
                    </div>
                    <div class="col-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                        <!-- <a href="<?php echo base_url('help-centre');?>"><i class="fas fa-angle-right me-2"></i> Help Centre</a> -->
                        <a href="<?php echo base_url('consolidation');?>"><i class="fas fa-angle-right me-2"></i> Consolidation</a>
                        <a href="<?php echo base_url('how-it-works');?>"><i class="fas fa-angle-right me-2"></i> How It Works</a>
                        <a href="<?php echo base_url('contact-us');?>"><i class="fas fa-angle-right me-2"></i> Contact</a>
                        <a href="<?php echo base_url('privacy');?>"><i class="fas fa-angle-right me-2"></i> Privacy Policy</a>
                        <a href="<?php echo base_url('terms');?>"><i class="fas fa-angle-right me-2"></i>Terms & Conditions</a>
                            <!-- <h4 class="mb-4 text-white">Follow Us</h4>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Faceboock</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Instagram</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Twitter</a>
                            <h4 class="my-4 text-white">Contact Us</h4>
                            <p class="mb-0"><i class="fas fa-envelope text-white me-2"></i>globalshippersrwanda@gmail.com</p>
                            <p class="mb-0"><i class="fas fa-phone text-white me-2"></i> +250 784 651 740</p> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->





        <!-- Back to Top -->
        <a id="mydiv"class="btn btn-primary btn-primary-outline-0 btn-md-square rounded-circle back-to-top" id="button"><i class="fa fa-arrow-up"></i></a>   
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.bootcss.com/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
    <script src="<?php echo base_url()?>assets/homepage/js/main.js"></script>
    <script>
    $(document).ready(function(){
            $("#mydiv").on("click", function() {
                //alert("top to scroll");
    $(window).scrollTop(0);
});
        })
        </script>
    </body>

</html>