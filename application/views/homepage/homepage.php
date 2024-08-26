        <!-- Carousel Start -->
        <div class="carousel-header px-0">
            <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carouselId" data-bs-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">

                <img src="<?php echo base_url().$value->sec1_sliderImage1;?>" class="img-fluid" alt="Image">
                        <div class="carousel-caption">
                            <div class="p-3" style="max-width: 900px;">
                                <h4 class="text-white text-uppercase mb-3"><?php echo $value->sec1_title1;?></h4>
                                <h2 class="display-6 text-capitalize text-white mb-3"><?php echo $value->sec1_main1;?></h2>
                                <p class="mx-md-5 fs-5 px-4 mb-5 text-white"><?php echo $value->sec1_endtitle1;?></p>
                                <div class="d-flex align-items-center justify-content-center">
                                    <a class="btn btn-light btn-light-outline-0 rounded-pill py-3 px-5 me-4" href="<?php echo base_url('signup');?>">Get Started</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo base_url().$value->sec1_sliderImage2;?>" class="img-fluid" alt="Image">
                        <div class="carousel-caption">
                            <div class="p-3" style="max-width: 900px;">
                                <h4 class="text-white text-uppercase mb-3"><?php echo $value->sec1_title2;?></h4>
                                <h2 class="display-6 text-capitalize text-white mb-3"><?php echo $value->sec1_main2;?></h2>
                                <p class="mx-md-5 fs-5 px-4 mb-5 text-white"><?php echo $value->sec1_endtitle2;?></p>
                                <div class="d-flex align-items-center justify-content-center">
                                    <a class="btn btn-light btn-light-outline-0 rounded-pill py-3 px-5 me-4" href="<?php echo base_url('signup');?>">Get Started</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo base_url().$value->sec1_sliderImage3;?>" class="img-fluid" alt="Image">
                        <div class="carousel-caption">
                            <div class="p-3" style="max-width: 900px;">
                                <h4 class="text-white text-uppercase mb-3"><?php echo $value->sec1_title3;?></h4>
                                <h2 class="display-6 text-capitalize text-white mb-3"><?php echo $value->sec1_main3;?></h2>
                                <p class="mx-md-5 fs-5 px-4 mb-5 text-white"><?php echo $value->sec1_endtitle3;?></p>
                                <div class="d-flex align-items-center justify-content-center">
                                    <a class="btn btn-light btn-light-outline-0 rounded-pill py-3 px-5 me-4" href="<?php echo base_url('signup');?>">Get Started</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- Carousel End -->
        <!-- About Start -->
        <div class="container-fluid about py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="video">
                            <img src="<?php echo base_url().$value->sec2_bannerImage;?>" class="img-fluid rounded" alt="">
                            <div class="position-absolute rounded border-5 border-top border-start border-white" style="bottom: 0; right: 0;;">
                                <!-- <img src="img/about-2.jpg" class="img-fluid rounded" alt=""> -->
                            </div>
                            <button type="button" class="btn btn-play" data-bs-toggle="modal" data-bs-target="#videoModal" data-src="<?php echo $value->sec2_modalvideo;?>">
                                <span></span>
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <!-- <p class="fs-5 text-uppercase text-primary"><?php echo $value->sec2_title;?></p> -->
                        <h2 class="display-6 mb-4"><?php echo $value->sec2_title;?></h2>
                        <p class="mb-4"> <?php echo $value->sec2_desc;// Global Shippers Rwanda is your trusted partner to shop from the top brands in different countries like the USA, China, India, Turkey, Japan, Germany, and Rwanda and save on tax. As the top shipping company, we provide your personal address so that you can shop tax-free from your trusted online brands like Amazon, Walmart, Gap, John Lewis, Boots, ASOS, and other platforms and get your shipment delivered to your global address.?></p>
                      
                        <h5 class="mb-3">
                            <!-- <i class="far fa-check-circle text-success me-3"></i>Get your local address -->
                            <?php echo $value->aboutuspoints;?>
                          </h5>
                          <!-- <h5 class="mb-3">
                            <i class="far fa-check-circle text-success me-3"></i>Visit your trusted online shopping portal<?php //echo $value->sec2_heading2;?>
                          </h5> 
                          <h5 class="mb-3">
                            <i class="far fa-check-circle text-success me-3"></i>Add products to the cart<?php //echo $value->sec2_heading3;?>
                          </h5>  -->
                          <!-- <h5 class="mb-3">
                            <i class="far fa-check-circle text-success me-3"></i><?php echo $value->sec2_heading4;?>
                          </h5> 
                          <h5 class="mb-3">
                            <i class="far fa-check-circle text-success me-3"></i><?php echo $value->sec2_heading5;?>
                          </h5>  -->
                        <a href="<?php echo base_url('about-us');?>" class="btn btn-primary btn-primary-outline-0 rounded-pill py-3 px-5">Explore More</a>
                    </div> 
                </div>
            </div>
        </div>
        <!-- Modal Video -->
        <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">About Us Video</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- 16:9 aspect ratio -->
                        <div class="ratio ratio-16x9">
                            <iframe class="embed-responsive-item" src="https://youtu.be/OpvcXKn20Os?si=mb8Hi3F52OVSG4FI" id="video" allowfullscreen allowscriptaccess="always" allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Services Start -->
        <div class="container-fluid services">
            <div class="container">
                <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                    <p class="fs-5 text-uppercase text-center text-primary"><?php echo $value->sec3_title;?></p>
                    <h2 class="display-6"><?php echo $value->sec3_main;?></h2>
                </div>
                <div class="how-works-slider owl-carousel feature">
                    <div class="slider-item" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                        <div class="feature-item p-4">
                                <div class="feature-icon mb-4">
                                    <div class="p-3 d-inline-flex bg-white rounded">
                                        <i class="fas fa-user fa-4x text-primary"></i>
                                    </div>
                                    <span class="step-count display-2">1</span>
                                </div>
                                <div class="feature-content d-flex flex-column">
                                    <h5 class="mb-4"><?php 
                                    echo  $value->sec3_step1title;?></h5>
                                    <p class="mb-0"><?php 
                                    echo 
                                    $value->sec3_step1desc;?></p>
                                </div>
                            </div>
                    </div>
                    <div class="slider-item" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                        <div class="feature-item p-4">
                           
                                <div class="feature-icon mb-4">
                                    <div class="p-3 d-inline-flex bg-white rounded">
                                        <i class="fas fa-truck fa-4x text-primary"></i>
                                    </div>
                                    <span class="step-count display-2">2</span>
                                </div>
                                <div class="feature-content d-flex flex-column">
                                    <h5 class="mb-4"><?php 
                               echo $value->sec3_step2title;?></h5>
                                    <p class="mb-0"><?php
                                    echo  $value->sec3_step2desc;?></p>
                                </div>
                            </div>
                      
                    </div>
                    <div class="slider-item" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                        <div class="feature-item p-4">
                                <div class="feature-icon mb-4">
                                    <div class="p-3 d-inline-flex bg-white rounded">
                                        <i class="fas fa-box-open fa-4x text-primary"></i>
                                    </div>
                                    <span class="step-count display-2">3</span>
                                </div>
                                <div class="feature-content d-flex flex-column">
                                    <h5 class="mb-4"><?php echo 
                                    $value->sec3_step3title;?></h5>
                                    <p class="mb-0"><?php 
                                    echo $value->sec3_step3desc;?></p>
                                </div>
                            </div>
                    </div>
                    <div class="slider-item" data-wow-delay="0.7s" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;">
                        <div class="row-cols-1 feature-item p-4">
                                <div class="feature-icon mb-4">
                                    <div class="p-3 d-inline-flex bg-white rounded">
                                        <i class="fas fa-laptop-house fa-4x text-primary"></i>
                                    </div>
                                    <span class="step-count display-2">4</span>
                                </div>
                                <div class="feature-content d-flex flex-column">
                                    <h5 class="mb-4"><?php echo $value->sec3_step4title;?></h5>
                                    <p class="mb-0"><?php echo $value->sec3_step4desc;?></p>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="col-12 text-center wow fadeInUp mt-5" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        <a href="<?php echo base_url('how-it-works')?>" class="btn btn-primary rounded-pill py-3 px-5">More Details</a>
                    </div>
            </div>
        </div>
        <!-- Services End -->
       
    <section class="choose-us-sec pt-5">
        <div class="container">
            <div class="text-center mx-auto mb-4" style="max-width: 800px;">
                <p class="fs-5 text-uppercase text-primary"><?php echo $value->sec4_title;?></p>
                <h2 class="display-6 mb-4"><?php echo $value->sec4_main;?></h2>
            </div>
        </div>
        <div class="container overflow-hidden py-lg-4">
            <div class="container quote px-lg-0">
                <div class="row g-0 mx-lg-0">
                    <div class="col-lg-6 ps-lg-0 md-order-2" style="min-height: 250px;">
                        <div class="position-relative h-100">
                            <img class="position-absolute img-fluid w-100 h-100" src="<?php echo base_url().$value->sec4_part1Img1;?>" style="object-fit: cover;" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 quote-text-right wow fadeIn" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">
                    <div class="p-4 px-0 ps-md-4">
                            <div class="bg-primary mb-3" style="width: 60px; height: 2px;"></div>
                            <h2 class="display-6 mb-4"><?php echo $value->sec4_part1title1;?></h2>
                            <p class="mb-4 pb-2"><?php echo $value->sec4_part1description;?></p>
                            
                            <h5 class="mb-3">
                            <?php echo $value->sec4_part1points;?>
                                <!-- <i class="far fa-check-circle text-primary me-3"></i>Low Carrier Rates -->
                              </h5>
                              <!-- <h5 class="mb-3">
                                <i class="far fa-check-circle text-primary me-3"></i>Secure Packing
                              </h5> 
                              <h5 class="mb-3">
                                <i class="far fa-check-circle text-primary me-3"></i>24/7 Customer Support
                              </h5> 
                              <h5 class="mb-3">
                                <i class="far fa-check-circle text-primary me-3"></i>Hassle-free Shop & Ship
                              </h5>  -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container overflow-hidden">
            <div class="container quote px-lg-0">
                <div class="row g-0 mx-lg-0">
                    <div class="col-lg-6 quote-text-left wow fadeIn" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">
                    <div class="p-4 px-0 pe-md-4">
                            <div class="bg-primary mb-3" style="width: 60px; height: 2px;"></div>
                            <h2 class="display-6 mb-4"><?php echo $value->sec4_part2title;?></h2>
                            <p class="mb-4 pb-2"><?php echo $value->sec4_part2description;?></p>
                            
                            <h5 class="mb-3">
                            <?php echo $value->sec4_part2points;?>
                                <!-- <i class="far fa-check-circle text-primary me-3"></i>No Sales Tax -->
                              </h5>
                              <!-- <h5 class="mb-3">
                                <i class="far fa-check-circle text-primary me-3"></i>Real-time order tracking
                              </h5> 
                              <h5 class="mb-3">
                                <i class="far fa-check-circle text-primary me-3"></i>Multi-carrier options
                              </h5> 
                              <h5 class="mb-3">
                                <i class="far fa-check-circle text-primary me-3"></i>Shopping assistance
                              </h5>  -->
                        </div>
                    </div>
                    <div class="col-lg-6 ps-lg-0" style="min-height: 250px;">
                        <div class="position-relative h-100">
                            <img class="position-absolute img-fluid w-100 h-100" src="<?php echo base_url().$value->sec4_part2Img;?>" style="object-fit: cover;" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container overflow-hidden py-lg-4">
            <div class="container quote px-lg-0">
                <div class="row g-0 mx-lg-0">
                    <div class="col-lg-6 ps-lg-0 md-order-2" style="min-height: 250px;">
                        <div class="position-relative h-100">
                            <img class="position-absolute img-fluid w-100 h-100" src="<?php echo base_url().$value->sec4_part3Img;?>" style="object-fit: cover;" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 quote-text-right wow fadeIn" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">
                    <div class="p-4 px-0 ps-md-4">
                            <div class="bg-primary mb-3" style="width: 60px; height: 2px;"></div>
                            <h2 class="display-6 mb-4"><?php echo $value->sec4_part3title;?></h2>
                            <p class="mb-4 pb-2"><?php echo $value->sec4_part3description;?></p>
                            
                            <h5 class="mb-3">
                            <?php echo $value->sec4_part3points;?>
                                <!-- <i class="far fa-check-circle text-primary me-3"></i>Manage your packages -->
                              </h5>
                              <!-- <h5 class="mb-3">
                                <i class="far fa-check-circle text-primary me-3"></i>Save money by consolidating items
                              </h5> 
                              <h5 class="mb-3">
                                <i class="far fa-check-circle text-primary me-3"></i>Pay for the shipping fees online
                              </h5>  -->
                              <!-- <h5 class="mb-3">
                                <i class="far fa-check-circle text-primary me-3"></i>Lorem ipsum point dummy text 4
                              </h5>  -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

 <!-- Team Start -->
 <div class="container team py-5">
    <div class="container">
        <div class="text-left mx-auto mb-5">
            <p class="fs-5 text-uppercase text-primary"><?php echo $value->sec5_title;?></p>
            <h2 class="display-6 mb-4"><?php echo $value->sec5_desc;?></h2>
        </div>
        <div class="trending-slider owl-carousel">
            <div class="trending-item">
                <div class="team-item">
                    <div class="team-img rounded-top">
                        <img src="<?php echo base_url().$value->sec5_slider_Image1;?>" class="img-fluid w-100 rounded-top bg-light" alt="">
                    </div>
                    <div class="team-text rounded-bottom text-center p-4">
                        <h4 class="text-primary"><?php echo $value->sec5_domain1;?></h4>
                        <a href="Javascript:void(0);" class="text-muted" data-bs-toggle="modal" data-bs-target="#amazon"><?php echo $value->sec5_text1;?></a>
                    </div>
                    <!-- <div class="team-social">
                        <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle mb-2" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle mb-2" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle mb-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle" href="#"><i class="fab fa-instagram"></i></a>
                    </div> -->
                </div>
            </div>
            <div class="trending-item">
                <div class="team-item">
                    <div class="team-img rounded-top">
                        <img src="<?php echo base_url().$value->sec5_slider_Image2;?>" class="img-fluid w-100 rounded-top bg-light" alt="">
                    </div>
                    <div class="team-text rounded-bottom text-center p-4">
                        <h4 class="text-primary"><?php echo $value->sec5_domain2;?></h4>
                        <a href="Javascript:void(0);" class="text-muted" data-bs-toggle="modal" data-bs-target="#alibaba"><?php echo $value->sec5_text2;?></a>
                    </div>
                    <!-- <div class="team-social">
                        <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle mb-2" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle mb-2" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle mb-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle" href="#"><i class="fab fa-instagram"></i></a>
                    </div> -->
                </div>
            </div>
            <div class="trending-item">
                <div class="team-item">
                    <div class="team-img rounded-top">
                        <img src="<?php echo base_url().$value->sec5_slider_Image3;?>" class="img-fluid w-100 rounded-top bg-light" alt="">
                    </div>
                    <div class="team-text rounded-bottom text-center p-4">
                        <h4 class="text-primary"><?php echo $value->sec5_domain3;?></h4>
                       <a href="Javascript:void(0);" class="text-muted" data-bs-toggle="modal" data-bs-target="#walmart"><?php echo $value->sec5_text3;?></a>
                    </div>
                    <!-- <div class="team-social">
                        <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle mb-2" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle mb-2" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle mb-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle" href="#"><i class="fab fa-instagram"></i></a>
                    </div> -->
                </div>
            </div>
            <div class="trending-item">
                <div class="team-item">
                    <div class="team-img rounded-top">
                        <img src="<?php echo base_url().$value->sec5_slider_Image4;?>" class="img-fluid w-100 rounded-top bg-light" alt="">
                    </div>
                    <div class="team-text rounded-bottom text-center p-4">
                        <h4 class="text-primary"><?php echo $value->sec5_domain4;?></h4>
                      <a href="Javascript:void(0);" class="text-muted" data-bs-toggle="modal" data-bs-target="#eBay"><?php echo $value->sec5_text4;?></a>
                    </div>
                    <!-- <div class="team-social">
                        <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle mb-2" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle mb-2" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle mb-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle" href="#"><i class="fab fa-instagram"></i></a>
                    </div> -->
                </div>
            </div>
            <div class="trending-item">
                <div class="team-item">
                    <div class="team-img rounded-top">
                        <img src="<?php echo base_url().$value->sec5_slider_Image5;?>" class="img-fluid w-100 rounded-top bg-light" alt="">
                    </div>
                    <div class="team-text rounded-bottom text-center p-4">
                        <h4 class="text-primary"><?php echo $value->sec5_domain5;?></h4>
                       <a href="Javascript:void(0);" class="text-muted" data-bs-toggle="modal" data-bs-target="#apple"><?php echo $value->sec5_text5;?></a>
                    </div>
                    <!-- <div class="team-social">
                        <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle mb-2" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle mb-2" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle mb-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle" href="#"><i class="fab fa-instagram"></i></a>
                    </div> -->
                </div>
            </div>
            
           

            <!-- <div class="trending-item">
                <div class="team-item">
                    <div class="team-img rounded-top">
                        <img src="<?php echo base_url().$value->sec5_slider_Image6;?>" class="img-fluid w-100 rounded-top bg-light" alt="">
                    </div>
                    <div class="team-text rounded-bottom text-center p-4">
                        <h4 class="text-primary">trendyol.com</h4>
                       <a href="Javascript:void(0);" class="text-muted" data-bs-toggle="modal" data-bs-target="#trendyol">Browse Deals</a>
                    </div> -->
                    <!-- <div class="team-social">
                        <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle mb-2" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle mb-2" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle mb-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle" href="#"><i class="fab fa-instagram"></i></a>
                    </div> -->
                <!-- </div>
            </div> -->


            <div class="trending-item">
                <div class="team-item">
                    <div class="team-img rounded-top">
                        <img src="<?php echo base_url().$value->sec5_slider_Image6;?>" class="img-fluid w-100 rounded-top bg-light" alt="">
                    </div>
                    <div class="team-text rounded-bottom text-center p-4">
                        <h4 class="text-primary"><?php echo $value->sec5_domain6;?></h4>
                       <a href="Javascript:void(0);" class="text-muted" data-bs-toggle="modal" data-bs-target="#bestbuy"><?php echo $value->sec5_text6;?></a>
                    </div>
                    <!-- <div class="team-social">
                        <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle mb-2" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle mb-2" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle mb-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle" href="#"><i class="fab fa-instagram"></i></a>
                    </div> -->
                </div>
            </div>

            <div class="trending-item">
                <div class="team-item">
                    <div class="team-img rounded-top">
                        <img src="<?php echo base_url().$value->sec5_slider_Image7;?>" class="img-fluid w-100 rounded-top bg-light" alt="">
                    </div>
                    <div class="team-text rounded-bottom text-center p-4">
                        <h4 class="text-primary"><?php echo $value->sec5_domain7;?></h4>
                       <a href="Javascript:void(0);" class="text-muted" data-bs-toggle="modal" data-bs-target="#target"><?php echo $value->sec5_text7;?></a>
                    </div>
                    <!-- <div class="team-social">
                        <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle mb-2" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle mb-2" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle mb-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle" href="#"><i class="fab fa-instagram"></i></a>
                    </div> -->
                </div>
            </div>
            
            <div class="trending-item">
                <div class="team-item">
                    <div class="team-img rounded-top">
                        <img src="<?php echo base_url().$value->sec5_slider_Image8;?>" class="img-fluid w-100 rounded-top bg-light" alt="">
                    </div>
                    <div class="team-text rounded-bottom text-center p-4">
                        <h4 class="text-primary"><?php echo $value->sec5_domain8;?></h4>
                       <a href="Javascript:void(0);" class="text-muted" data-bs-toggle="modal" data-bs-target="#etsy"><?php echo $value->sec5_text8;?></a>
                    </div>
                    <!-- <div class="team-social">
                        <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle mb-2" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle mb-2" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle mb-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle" href="#"><i class="fab fa-instagram"></i></a>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->

 <!-- Browse Deal -->
        <div class="modal fade" id="amazon" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><?php echo $value->sec5_modal_main?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                       <div class="row row-cols-1 row-cols-md-1 g-4">
                          <div class="col">
                          <div class="card">
                              <img src="<?php echo base_url().$value->sec5_modal_img1?>"  class="card-img-top" alt="Hollywood Sign on The Hill" style="max-height: 400px; object-fit: contain; object-position: center;" />
                              <div class="card-body">
                                <h5 class="card-title"><?php echo $value->sec5_modal_heading1;?></h5>
                                <p class="card-text">
                                <?php echo $value->sec5_modal_text1;?>
                                </p>
                                <a href="https://www.amazon.com/" class="btn btn-primary btn-primary-outline-0 rounded-pill py-3 px-5" target="blank">Shop Now</a>
                              </div>
                            </div>
                          </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" id="alibaba" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><?php echo $value->sec5_modal_main?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                       <div class="row row-cols-1 row-cols-md-1 g-4">
                          <div class="col">
                            <div class="card">
                              <img src="<?php echo base_url().$value->sec5_modal_img2?>" class="card-img-top" alt="Hollywood Sign on The Hill" style="max-height: 400px; object-fit: contain; object-position: center;" />
                              <div class="card-body">
                                <h5 class="card-title"><?php echo $value->sec5_modal_heading2;?></h5>
                                <p class="card-text">
                                <?php echo $value->sec5_modal_text2;?>
                                </p>
                                <a href="https://www.alibaba.com/" class="btn btn-primary btn-primary-outline-0 rounded-pill py-3 px-5" target="blank">Shop Now</a>
                              </div>
                            </div>
                          </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" id="walmart" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><?php echo $value->sec5_modal_main?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                       <div class="row row-cols-1 row-cols-md-1 g-4">
                          <div class="col">
                            <div class="card">
                              <img src="<?php echo base_url().$value->sec5_modal_img3?>" class="card-img-top" alt="Hollywood Sign on The Hill" style="max-height: 400px; object-fit: contain; object-position: center;" />
                              <div class="card-body">
                                <h5 class="card-title"><?php echo $value->sec5_modal_heading3;?></h5>
                                <p class="card-text">
                                <?php echo $value->sec5_modal_text3;?>
                                </p>
                                <a href="https://www.walmart.com/" class="btn btn-primary btn-primary-outline-0 rounded-pill py-3 px-5" target="blank">Shop Now</a>
                              </div>
                            </div>
                          </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" id="eBay" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><?php echo $value->sec5_modal_main?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                       <div class="row row-cols-1 row-cols-md-1 g-4">
                          <div class="col">
                            <div class="card">
                              <img src="<?php echo base_url().$value->sec5_modal_img4?>" class="card-img-top" alt="Hollywood Sign on The Hill" style="max-height: 400px; object-fit: contain; object-position: center;" />
                              <div class="card-body">
                                <h5 class="card-title"><?php echo $value->sec5_modal_heading4;?></h5>
                                <p class="card-text">
                                <?php echo $value->sec5_modal_text4;?>
                                </p>
                                <a href="https://www.ebay.com/" class="btn btn-primary btn-primary-outline-0 rounded-pill py-3 px-5" target="blank">Shop Now</a>
                              </div>
                            </div>
                          </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="modal fade" id="apple" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><?php echo $value->sec5_modal_main?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                       <div class="row row-cols-1 row-cols-md-1 g-4">
                          <div class="col">
                            <div class="card">
                              <img src="<?php echo base_url().$value->sec5_modal_img5?>" class="card-img-top" alt="Hollywood Sign on The Hill" style="max-height: 400px; object-fit: contain; object-position: center;" />
                              <div class="card-body">
                                <h5 class="card-title"><?php echo $value->sec5_modal_heading5;?></h5>
                                <p class="card-text">
                                <?php echo $value->sec5_modal_text5;?>
                                </p>
                                <a href="https://www.apple.com/" class="btn btn-primary btn-primary-outline-0 rounded-pill py-3 px-5" target="blank">Shop Now</a>
                              </div>
                            </div>
                          </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- <div class="modal fade" id="trendyol" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><?php echo $value->sec5_modal_main?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                       <div class="row row-cols-1 row-cols-md-1 g-4">
                          <div class="col">
                            <div class="card">
                              <img src="<?php echo base_url()?>assets/imgs/imgpsh_fullsize_anim.png" class="card-img-top" alt="Hollywood Sign on The Hill" style="max-height: 400px; object-fit: contain; object-position: center;" />
                              <div class="card-body">
                                <h5 class="card-title">Trendyol</h5>
                                <p class="card-text">
                                Looking for the latest fashion trends? Trendyol is a Turkish online marketplace known for trendy clothing, accessories, and homeware. They cater specifically to the Turkish market, offering a curated selection and potentially faster shipping within the region.
                                </p>
                                <a href="https://www.trendyol.com/" class="btn btn-primary btn-primary-outline-0 rounded-pill py-3 px-5" target="blank">Shop Now</a>
                              </div>
                            </div>
                          </div>
                       </div>
                    </div>
                </div>
            </div>
        </div> -->

        <div class="modal fade" id="bestbuy" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><?php echo $value->sec5_modal_main?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                       <div class="row row-cols-1 row-cols-md-1 g-4">
                          <div class="col">
                            <div class="card">
                              <img src="<?php echo base_url().$value->sec5_modal_img6?>" class="card-img-top" alt="Hollywood Sign on The Hill" style="max-height: 400px; object-fit: contain; object-position: center;" />
                              <div class="card-body">
                                <h5 class="card-title"><?php echo $value->sec5_modal_heading6;?></h5>
                                <p class="card-text">
                                <?php echo $value->sec5_modal_text6;?>
                                </p>
                                <a href="https://www.bestbuy.com/" class="btn btn-primary btn-primary-outline-0 rounded-pill py-3 px-5" target="blank">Shop Now</a>
                              </div>
                            </div>
                          </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="target" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><?php echo $value->sec5_modal_main?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                       <div class="row row-cols-1 row-cols-md-1 g-4">
                          <div class="col">
                            <div class="card">
                              <img src="<?php echo base_url().$value->sec5_modal_img7?>" class="card-img-top" alt="Hollywood Sign on The Hill" style="max-height: 400px; object-fit: contain; object-position: center;" />
                              <div class="card-body">
                                <h5 class="card-title"><?php echo $value->sec5_modal_heading7;?></h5>
                                <p class="card-text">
                                <?php echo $value->sec5_modal_text7;?>
                                </p>
                                <a href="https://www.target.com/" class="btn btn-primary btn-primary-outline-0 rounded-pill py-3 px-5" target="blank">Shop Now</a>
                              </div>
                            </div>
                          </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="etsy" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><?php echo $value->sec5_modal_main?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                       <div class="row row-cols-1 row-cols-md-1 g-4">
                          <div class="col">
                            <div class="card">
                              <img src="<?php echo base_url().$value->sec5_modal_img8?>" class="card-img-top" alt="Hollywood Sign on The Hill" style="max-height: 400px; object-fit: contain; object-position: center;" />
                              <div class="card-body">
                                <h5 class="card-title"><?php echo $value->sec5_modal_heading8;?></h5>
                                <p class="card-text">
                                <?php echo $value->sec5_modal_text8;?>
                                </p>
                                <a href="https://www.etsy.com/" class="btn btn-primary btn-primary-outline-0 rounded-pill py-3 px-5" target="blank">Shop Now</a>
                              </div>
                            </div>
                          </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Testimonial Start -->
        <div class="container-fluid testimonial py-3">
            <div class="container py-3">
                <div class="text-center mx-auto mb-5" style="max-width: 900px;">
                    <p class="fs-5 text-uppercase text-white"><?php echo $value->sec6_title;?></p>
                    <h2 class="display-6 mb-4 text-white"><?php echo $value->sec6_desc;?></h2>
                </div>
                <div class="owl-carousel testimonial-carousel">
                    <div class="testimonial-item rounded p-4">
                        <div class="row">
                            <!-- <div class="col-4">
                                <div class="d-flex flex-column mx-auto">
                                    <div class="rounded-circle mb-4" style="border: dashed; border-color: var(--bs-white);">
                                        <img src="<?php echo base_url()?>assets/homepage/img/testimonial-1.jpg" class="img-fluid rounded-circle" alt="">
                                    </div>
                                    <div class="text-center">
                                        <h4 class="mb-2 text-white">Person Name</h4>
                                        <p class="m-0 text-white">Profession</p>
                                    </div>
                                </div>
                            </div> -->
                            <div class="col-md-8">
                                <div class="position-absolute" style="top: 20px; right: 25px;">
                                    <i class="fa fa-quote-right fa-2x text-muted"></i>
                                </div>
                                <div class="testimonial-content">
                                <a href="https://g.co/kgs/nzMa1M6">
                                    <div class="d-flex mb-4">
                                        <i class="fas fa-star text-white"></i>
                                        <i class="fas fa-star text-white"></i>
                                        <i class="fas fa-star text-white"></i>
                                        <i class="fas fa-star text-white"></i>
                                        <i class="fas fa-star text-white"></i>
                                    </div>
                                    </a>
                                    <a href="https://g.co/kgs/nzMa1M6">
                                    <p class="fs-5 mb-0 text-white">
                                    <?php echo $value->sec6_review1;?>
                                    </p>
                            </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item rounded p-4">
                        <div class="row">
                            <!-- <div class="col-4">
                                <div class="d-flex flex-column mx-auto">
                                    <div class="rounded-circle mb-4" style="border: dashed; border-color: var(--bs-white);">
                                        <img src="<?php echo base_url()?>assets/homepage/img/testimonial-2.jpg" class="img-fluid rounded-circle" alt="">
                                    </div>
                                    <div class="text-center">
                                        <h4 class="mb-2 text-white">Person Name</h4>
                                        <p class="m-0 text-white">Profession</p>
                                    </div>
                                </div>
                            </div> -->
                            <div class="col-md-8">
                                <div class="position-absolute" style="top: 20px; right: 25px;">
                                    <i class="fa fa-quote-right fa-2x text-muted"></i>
                                </div>
                                <a href="https://g.co/kgs/nzMa1M6">
                                <div class="testimonial-content">
                                    <div class="d-flex mb-4">
                                        <i class="fas fa-star text-white"></i>
                                        <i class="fas fa-star text-white"></i>
                                        <i class="fas fa-star text-white"></i>
                                        <i class="fas fa-star text-white"></i>
                                        <i class="fas fa-star text-white"></i>
                                    </div>
                                 </a>
                                    <a href="https://g.co/kgs/nzMa1M6">
                                    <p class="fs-5 mb-0 text-white">
                                    <?php echo $value->sec6_review2;?>
                                    </p>
                                  </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item rounded p-4">
                        <div class="row">
                            <!-- <div class="col-4">
                                <div class="d-flex flex-column mx-auto">
                                    <div class="rounded-circle mb-4" style="border: dashed; border-color: var(--bs-white);">
                                        <img src="<?php echo base_url()?>assets/homepage/img/testimonial-3.jpg" class="img-fluid rounded-circle" alt="">
                                    </div>
                                    <div class="text-center">
                                        <h4 class="mb-2 text-white">Person Name</h4>
                                        <p class="m-0 text-white">Profession</p>
                                    </div>
                                </div>
                            </div> -->
                            <div class="col-md-8">
                                <div class="position-absolute" style="top: 20px; right: 25px;">
                                    <i class="fa fa-quote-right fa-2x text-muted"></i>
                                </div>
                                <a href="https://g.co/kgs/nzMa1M6">
                                <div class="testimonial-content">
                                    <div class="d-flex mb-4">
                                        <i class="fas fa-star text-white"></i>
                                        <i class="fas fa-star text-white"></i>
                                        <i class="fas fa-star text-white"></i>
                                        <i class="fas fa-star text-white"></i>
                                        <i class="fas fa-star text-white"></i>
                                    </div>
                            </a>
                                    <a href="https://g.co/kgs/nzMa1M6">
                                    <p class="fs-5 mb-0 text-white">
                                    <?php echo $value->sec6_review3;?>
                                    </p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->
        <section class="partners-sec py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5" style="max-width: 800px;">
                    <p class="fs-5 text-uppercase text-primary">We're your one-stop shop for online shopping, with exceptional customer service to match<?php //echo $value->sec7_title;?></p>
                    <h2 class="display-6 mb-4">More Than Just a Marketplace<?php //echo $value->sec7_main;?></h2>
                </div>
            </div>
        <div id="clients" class="clients">
            <div class="container-fluid">
      
              <div class="row no-gutters clients-wrap clearfix">
      
                <div class="col-lg-2 col-md-4 col-4">
                  <div class="client-logo">
                    <img src="<?php echo base_url()?>assets/imgs/abt.png" class="img-fluid" alt="">
                  </div>
                </div>
      
                <div class="col-lg-2 col-md-4 col-4">
                  <div class="client-logo">
                    <img src="<?php echo base_url()?>assets/imgs/akakce.jpg" class="img-fluid" alt="">
                  </div>
                </div>
      
                <div class="col-lg-2 col-md-4 col-4">
                  <div class="client-logo">
                    <img src="<?php echo base_url()?>assets/imgs/ali.jpg" class="img-fluid" alt="">
                  </div>
                </div>
      
                <div class="col-lg-2 col-md-4 col-4">
                  <div class="client-logo">
                    <img src="<?php echo base_url()?>assets/imgs/apple.jpg" class="img-fluid" alt="">
                  </div>
                </div>
      
                <div class="col-lg-2 col-md-4 col-4">
                  <div class="client-logo">
                    <img src="<?php echo base_url()?>assets/imgs/bhphoto.jpg" class="img-fluid" alt="">
                  </div>
                </div>
      
                <div class="col-lg-2 col-md-4 col-4">
                  <div class="client-logo">
                    <img src="<?php echo base_url()?>assets/imgs/best.jpg" class="img-fluid" alt="">
                  </div>
                </div>
      
                <div class="col-lg-2 col-md-4 col-4">
                  <div class="client-logo">
                    <img src="<?php echo base_url()?>assets/imgs/cimrilogo.jpg" class="img-fluid" alt="">
                  </div>
                </div>
      
                <div class="col-lg-2 col-md-4 col-4">
                  <div class="client-logo">
                    <img src="<?php echo base_url()?>assets/imgs/Costco_Logo-1.png" class="img-fluid" alt="">
                  </div>
                </div>
                <div class="col-lg-2 col-md-4 col-4">
                    <div class="client-logo">
                      <img src="<?php echo base_url()?>assets/imgs/dell.jpg" class="img-fluid" alt="">
                    </div>
                  </div>
        
                  <div class="col-lg-2 col-md-4 col-4">
                    <div class="client-logo">
                      <img src="<?php echo base_url()?>assets/imgs/ebaylogo.png" class="img-fluid" alt="">
                    </div>
                  </div>
        
                  <div class="col-lg-2 col-md-4 col-4">
                    <div class="client-logo">
                      <img src="<?php echo base_url()?>assets/imgs/gittigidiyor.jpg" class="img-fluid" alt="">
                    </div>
                  </div>
        
                  <div class="col-lg-2 col-md-4 col-4">
                    <div class="client-logo">
                      <img src="<?php echo base_url()?>assets/imgs/hepsi.jpg" class="img-fluid" alt="">
                    </div>
                  </div>

                  <div class="col-lg-2 col-md-4 col-4">
                    <div class="client-logo">
                      <img src="<?php echo base_url()?>assets/imgs/hp.jpg" class="img-fluid" alt="">
                    </div>
                  </div>
        
                  <div class="col-lg-2 col-md-4 col-4">
                    <div class="client-logo">
                      <img src="<?php echo base_url()?>assets/imgs/letgo.jpg" class="img-fluid" alt="">
                    </div>
                  </div>
        
                  <div class="col-lg-2 col-md-4 col-4">
                    <div class="client-logo">
                      <img src="<?php echo base_url()?>assets/imgs/lg.jpg" class="img-fluid" alt="">
                    </div>
                  </div>
        
                  <div class="col-lg-2 col-md-4 col-4">
                    <div class="client-logo">
                      <img src="<?php echo base_url()?>assets/imgs/Newegg-logo.png" class="img-fluid" alt="">
                    </div>
                  </div>
        
                  <div class="col-lg-2 col-md-4 col-4">
                    <div class="client-logo">
                      <img src="<?php echo base_url()?>assets/imgs/overstock.png" class="img-fluid" alt="">
                    </div>
                  </div>
        
                  <div class="col-lg-2 col-md-4 col-4">
                    <div class="client-logo">
                      <img src="<?php echo base_url()?>assets/imgs/samsung.jpg" class="img-fluid" alt="">
                    </div>
                  </div>
      
                  <div class="col-lg-2 col-md-4 col-4">
                    <div class="client-logo">
                      <img src="<?php echo base_url()?>assets/imgs/sonylogo.png" class="img-fluid" alt="">
                    </div>
                  </div>
                
                  <div class="col-lg-2 col-md-4 col-4">
                    <div class="client-logo">
                      <img src="<?php echo base_url()?>assets/imgs/staples.jpg" class="img-fluid" alt="">
                    </div>
                  </div>

                  <div class="col-lg-2 col-md-4 col-4">
                    <div class="client-logo">
                      <img src="<?php echo base_url()?>assets/imgs/targetlogo.png" class="img-fluid" alt="">
                    </div>
                  </div>

                  <div class="col-lg-2 col-md-4 col-4">
                    <div class="client-logo">
                      <img src="<?php echo base_url()?>assets/imgs/tigerdirect.jpg" class="img-fluid" alt="">
                    </div>
                  </div>

                  <div class="col-lg-2 col-md-4 col-4">
                    <div class="client-logo">
                      <img src="<?php echo base_url()?>assets/imgs/trendyol.jpg" class="img-fluid" alt="">
                    </div>
                  </div>

                  <div class="col-lg-2 col-md-4 col-4">
                    <div class="client-logo">
                      <img src="<?php echo base_url()?>assets/imgs/alib.jpg" class="img-fluid" alt="">
                    </div>
                  </div>

                  <div class="col-lg-2 col-md-4 col-4">
                    <div class="client-logo">
                      <img src="<?php echo base_url()?>assets/imgs/backmarket.svg" class="img-fluid" alt="">
                    </div>
                  </div>

                  <div class="col-lg-2 col-md-4 col-4">
                    <div class="client-logo">
                      <img src="<?php echo base_url()?>assets/imgs/crutchfield.svg" class="img-fluid" alt="">
                    </div>
                  </div>

                  <div class="col-lg-2 col-md-4 col-4">
                    <div class="client-logo">
                      <img src="<?php echo base_url()?>assets/imgs/flip.svg" class="img-fluid" alt="">
                    </div>
                  </div>

                  <div class="col-lg-2 col-md-4 col-4">
                    <div class="client-logo">
                      <img src="<?php echo base_url()?>assets/imgs/micro.png" class="img-fluid" alt="">
                    </div>
                  </div>

                  <div class="col-lg-2 col-md-4 col-4">
                    <div class="client-logo">
                      <img src="<?php echo base_url()?>assets/imgs/n11.svg" class="img-fluid" alt="">
                    </div>
                  </div>

                  <div class="col-lg-2 col-md-4 col-4">
                    <div class="client-logo">
                      <img src="<?php echo base_url()?>assets/imgs/sears.png" class="img-fluid" alt="">
                    </div>
                  </div>

                  <div class="col-lg-2 col-md-4 col-4">
                    <div class="client-logo">
                      <img src="<?php echo base_url()?>assets/imgs/shopclues.svg" class="img-fluid" alt="">
                    </div>
                  </div>

                  <div class="col-lg-2 col-md-4 col-4">
                    <div class="client-logo">
                      <img src="<?php echo base_url()?>assets/imgs/woot.svg" class="img-fluid" alt="">
                    </div>
                  </div>

                  <div class="col-lg-2 col-md-4 col-4">
                    <div class="client-logo">
                      <img src="<?php echo base_url()?>assets/imgs/cdwlogo.png" class="img-fluid" alt="">
                    </div>
                  </div>

                  <div class="col-lg-2 col-md-4 col-4">
                    <div class="client-logo">
                      <img src="<?php echo base_url()?>assets/imgs/amazon.png" class="img-fluid" alt="">
                    </div>
                  </div>

                  <div class="col-lg-2 col-md-4 col-4">
                    <div class="client-logo">
                      <img src="<?php echo base_url()?>assets/imgs/walmart.jpg" class="img-fluid" alt="">
                    </div>
                  </div>

                  <div class="col-lg-2 col-md-4 col-4">
                    <div class="client-logo">
                      <img src="<?php echo base_url()?>assets/imgs/adorama.jpg" class="img-fluid" alt="">
                    </div>
                  </div>

              </div>
      
            </div>
        </div>
</section>

        <!-- Contact Start -->
<section class="imp-partner-sec py-4 bg-primary">
        <div class="container-fluid ">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="row align-items-center">
                            <div class="col-lg-5">
                                <h2 class="display-7 text-white">We're proud to partner with </h2>   
                            </div>
                            <div class="col-lg-7 clients">
                                <div class="row no-gutters clearfix align-items-center">
      
                                    <div class="col-3">
                                      <div class="client-logo">
                                        <img src="<?php echo base_url()?>assets/imgs/fedex-express-6-logo.png" class="img-fluid" alt="">
                                      </div>
                                    </div>
                          
                                    <div class="col-3">
                                      <div class="client-logo">
                                        <img src="<?php echo base_url()?>assets/imgs/dhl-logo.svg" class="img-fluid" alt="">
                                      </div>
                                    </div>
                          
                                    <div class="col-3">
                                      <div class="client-logo">
                                        <img src="<?php echo base_url()?>assets/imgs/paypal.svg" class="img-fluid" alt="">
                                      </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="client-logo">
                                          <img src="<?php echo base_url()?>assets/imgs/stripe-logo.png" class="img-fluid" alt="">
                                        </div>
                                      </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
        <!-- Contact End -->
