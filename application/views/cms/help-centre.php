<section class="hero-section" style="background-color: #000;">
        <div class="container-fluid">
            <div class="container py-5">
                <h3 class="text-white display-6  wow fadeInDown" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInDown;">Welcome to the Globalshipperswanda Help Center
                </h3>
                <!-- <form method="get" class="custom-form mt-4 pt-2 mb-lg-0 mb-5" role="search">
                    <div class="input-group input-group-lg rounded-pill">
                        <span class="input-group-text bi-search" id="basic-addon1">
                            
                        </span>

                        <input name="keyword" type="search" class="form-control" id="keyword" placeholder="Search for answers..." aria-label="Search">

                        <button type="submit" class="form-control rounded-pill">Search</button>
                    </div>
                </form>    -->
            </div>
        </div>
    </section>

<section>
        <div class="container-fluid help-center-sec py-5 bg-light">
            <div class="container">
                <!-- <div class="mx-auto text-center mb-5" style="max-width: 1000px;">
                    <p class="fs-4 text-uppercase text-center text-primary">Prohibited and limited items</p>
                    <h1 class="display-3">Review restricted items before ordering from the U.S.</h1>
                </div> -->
                <div class="row g-4 justify-content-center help-center-cards">
                
                <?php  

                foreach ($category as $key => $value) {
                        ?>
                      <div class="col-md-6 col-lg-6 wow fadeInUp d-flex" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                     
                      <div class="card p-4">
                            
                                <h3 class="mb-3"><?php echo $value->cat_name;?></h3>
                             <ul class="help-list">
                             <?php 
                               foreach ($response[$value->cat_id] as $key => $v){
                                     ?>
                                <!-- <li><a href="javascript:void()0;" class="link">15 articles</a></li> -->
                                <li><a href="<?php echo base_url('help-centre/'.$v->qna_id);?>" class="link"><?php print_r($v->cat_question);?></a></li>
                                <?php }?>
                             </ul>
                             <!-- <a href="javascript:void(0);" class="cstm-link"><strong> View all <span>15</span> articles</strong></a> -->
                        </div>
                       
                    </div>
                    <?php }?>
                  
                    <!-- <div class="col-md-6 col-lg-6 wow fadeInUp d-flex" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                        <div class="card p-4">
                            <h3 class="mb-3">Getting Started</h3>
                             <ul class="help-list">
                                <li><a href="javascript:void()0;" class="link">15 articles</a></li>
                                <li><a href="javascript:void()0;" class="link">Do I have to pay to sign up?</a></li>
                                <li><a href="javascript:void()0;" class="link">Creating an account</a></li>
                                <li><a href="javascript:void()0;" class="link">What U.S. address will be provided?</a></li>
                                <li><a href="javascript:void()0;" class="link">How do I use my Forwardme address on a retailer...</a></li>
                                <li><a href="javascript:void()0;" class="link">What happens if the retail doesn't ship to Forw...</a></li>
                             </ul>
                             <a href="javascript:void(0);" class="cstm-link"><strong> View all <span>15</span> articles</strong></a>
                        </div>
                    </div> -->
                    <!-- <div class="col-md-6 col-lg-6 wow fadeInUp d-flex" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                        <div class="card p-4">
                            <h3 class="mb-3">Getting Started</h3>
                             <ul class="help-list">
                                <li><a href="javascript:void()0;" class="link">15 articles</a></li>
                                <li><a href="javascript:void()0;" class="link">Do I have to pay to sign up?</a></li>
                                <li><a href="javascript:void()0;" class="link">Creating an account</a></li>
                                <li><a href="javascript:void()0;" class="link">What U.S. address will be provided?</a></li>
                                <li><a href="javascript:void()0;" class="link">How do I use my Forwardme address on a retailer...</a></li>
                                <li><a href="javascript:void()0;" class="link">What happens if the retail doesn't ship to Forw...</a></li>
                             </ul>
                             <a href="javascript:void(0);" class="cstm-link"><strong> View all <span>15</span> articles</strong></a>
                        </div>
                    </div> -->
                    <!-- <div class="col-md-6 col-lg-6 wow fadeInUp d-flex" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                        <div class="card p-4">
                            <h3 class="mb-3">Getting Started</h3>
                             <ul class="help-list">
                                <li><a href="javascript:void()0;" class="link">15 articles</a></li>
                                <li><a href="javascript:void()0;" class="link">Do I have to pay to sign up?</a></li>
                                <li><a href="javascript:void()0;" class="link">Creating an account</a></li>
                                <li><a href="javascript:void()0;" class="link">What U.S. address will be provided?</a></li>
                                <li><a href="javascript:void()0;" class="link">How do I use my Forwardme address on a retailer...</a></li>
                                <li><a href="javascript:void()0;" class="link">What happens if the retail doesn't ship to Forw...</a></li>
                             </ul>
                             <a href="javascript:void(0);" class="cstm-link"><strong> View all <span>15</span> articles</strong></a>
                        </div>
                    </div> -->
                    <!-- <div class="col-md-6 col-lg-6 wow fadeInUp d-flex" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                        <div class="card p-4">
                            <h3 class="mb-3">Getting Started</h3>
                             <ul class="help-list">
                                <li><a href="javascript:void()0;" class="link">15 articles</a></li>
                                <li><a href="javascript:void()0;" class="link">Do I have to pay to sign up?</a></li>
                                <li><a href="javascript:void()0;" class="link">Creating an account</a></li>
                                <li><a href="javascript:void()0;" class="link">What U.S. address will be provided?</a></li>
                                <li><a href="javascript:void()0;" class="link">How do I use my Forwardme address on a retailer...</a></li>
                                <li><a href="javascript:void()0;" class="link">What happens if the retail doesn't ship to Forw...</a></li>
                             </ul>
                             <a href="javascript:void(0);" class="cstm-link"><strong> View all <span>15</span> articles</strong></a>
                        </div>
                    </div> -->
                    <!-- <div class="col-md-6 col-lg-6 wow fadeInUp d-flex" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                        <div class="card p-4">
                            <h3 class="mb-3">Getting Started</h3>
                             <ul class="help-list">
                                <li><a href="javascript:void()0;" class="link">15 articles</a></li>
                                <li><a href="javascript:void()0;" class="link">Do I have to pay to sign up?</a></li>
                                <li><a href="javascript:void()0;" class="link">Creating an account</a></li>
                                <li><a href="javascript:void()0;" class="link">What U.S. address will be provided?</a></li>
                                <li><a href="javascript:void()0;" class="link">How do I use my Forwardme address on a retailer...</a></li>
                                <li><a href="javascript:void()0;" class="link">What happens if the retail doesn't ship to Forw...</a></li>
                             </ul>
                             <a href="javascript:void(0);" class="cstm-link"><strong> View all <span>15</span> articles</strong></a>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        </section>