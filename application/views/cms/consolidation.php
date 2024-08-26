<section>
        
            <div class="container pt-5">
            <div class="row align-items-center">
              <div class="col-lg-3">
                <h3 class="text-dark display-6 mb-4 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInDown;"><?php echo $consec1->title;?></h3>  
              </div> 
              <div class="col-lg-9 wow fadeInUp" data-wow-delay="0.1s">
                <h5><strong><?php echo $consec1->description;?></strong></h5> 
              </div>  
            </div>   

    </section>
    <section>
        <!-- <div class="container py-5">
        <figure class="hero-right-img wow zoomInUp" data-wow-delay="0.5s">
                    <img src="<?php //echo $consec1->imgpath;?>" alt="img">
                </figure> 
        </div> -->
    </section>
    <section class="choose-us-sec py-5">
        <?php
    $j=1;
            foreach($consec2 as $record){
                
                if($record->id % 2 != 0){
                    ?>
        <div class="container overflow-hidden px-lg-0 mb-5">
            <div class="container quote px-lg-0">
                <div class="row g-0 mx-lg-0">
                    <div class="col-lg-6 ps-lg-0" style="min-height: 400px;">
                        <div class="position-relative h-100 border-rounded-10 wow zoomInUp" data-wow-delay="0.5s">
                            <img class="position-absolute img-fluid w-100 h-100" src="<?php echo base_url().$record->imgpath;?>" style="object-fit: cover;" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 quote-text-right wow fadeUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">
                        <div class="p-lg-5 pt-5 pe-lg-0">
                            <div class="bg-primary mb-3 text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;"><?php echo $j;?></div>
                            <h2 class="display-6 mb-4"><?php echo $record->title;?></h2>
                            <h3 class="mb-4 fs-4 pb-2"><?php echo $record->description;?></h3>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php   }else {
                ?>
        <div class="container bg-light overflow-hidden px-lg-0 mb-5">
            <div class="container quote px-lg-0">
                <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 quote-text-right wow fadeUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">
                        <div class="p-lg-5 pt-5 pe-lg-0">
                            <div class="bg-primary mb-3 text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;"><?php echo $j;?></div>
                            <h2 class="display-6 mb-4"><?php echo $record->title;?></h2>
                            <h3 class="mb-4 fs-4 pb-2"><?php echo $record->description;?></h3>
                            
                        </div>
                    </div>
                    <div class="col-lg-6 ps-lg-0" style="min-height: 400px;">
                        <div class="position-relative h-100 border-rounded-10 wow zoomInUp" data-wow-delay="0.5s">
                            <img class="position-absolute img-fluid w-100 h-100" src="<?php echo base_url().$record->imgpath?>" style="object-fit: cover;" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php }

$j++;
            }?>
        <!-- <div class="container overflow-hidden px-lg-0">
            <div class="container quote px-lg-0">
                <div class="row g-0 mx-lg-0">
                    <div class="col-lg-6 ps-lg-0" style="min-height: 400px;">
                        <div class="position-relative h-100 border-rounded-10 wow zoomInUp" data-wow-delay="0.5s">
                            <img class="position-absolute img-fluid w-100 h-100" src="<?php echo base_url()?>assets/imgs/imgpsh_fullsize_anim.png" style="object-fit: cover;" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 quote-text-right wow fadeUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">
                    <div class="p-lg-5 pt-5 pe-lg-0">
                            <div class="bg-primary mb-3 text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">03</div>
                            <h2 class="display-6 mb-4"><?php echo $consec2->title;?></h2>
                            <h3 class="mb-4 fs-4 pb-2"><?php echo $consec2->description;?></h3>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </section>


    <section class="bg-light py-5">
<div class="container-fluid">
    <div class="container">
        <div class="mx-auto text-center mb-5" style="max-width: 1000px;">
            <h2 class="display-5"> <?php echo $consec3->title;?></h2>
            <p class="fs-4 text-center text-primary"><?php //echo $consec3->description;?></p>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="accordion" id="accordionFAQ1">
                    <?php 
                     $i=0;
                    foreach ($consec4 as $faq) { 
                        
                        ?>

                         <div class="accordion-item wow fadeIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
                         <h2 class="accordion-header" id="heading<?php echo $i;?>">
                             <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $i;?>" aria-expanded="<?php $i>1?false : true?>" aria-controls="collapse<?php echo $i;?>">
                             <?php echo $faq->question;?>
                             </button>
                         </h2>
                         <div id="collapse<?php echo $i;?>" class="accordion-collapse collapse" aria-labelledby="heading<?php echo $i;?>" data-bs-parent="#accordion<?php echo $i;?>" style="">
                             <div class="accordion-body">
                                <?php echo $faq->answer;?>
                             </div>
                         </div>
                     </div>
                   <?php $i++;  }?>
                   
                   
                    <!-- <div class="accordion-item wow fadeIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            How does GSR's package consolidation service work?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionFAQ1" style="">
                            <div class="accordion-body">
                                Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam sed sed magna et magna diam aliquyam amet dolore ipsum erat duo. Sit rebum magna duo labore no diam.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item wow fadeIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            How do I request package consolidation?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionFAQ1" style="">
                            <div class="accordion-body">
                                Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam sed sed magna et magna diam aliquyam amet dolore ipsum erat duo. Sit rebum magna duo labore no diam.
                            </div>
                        </div>
                    </div> 
                    <div class="accordion-item wow fadeIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            How much time does it take to consolidate packages?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionFAQ1" style="">
                            <div class="accordion-body">
                                Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam sed sed magna et magna diam aliquyam amet dolore ipsum erat duo. Sit rebum magna duo labore no diam.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item wow fadeIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            Will package consolidation affect my package's delivery time?
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionFAQ1" style="">
                            <div class="accordion-body">
                                Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam sed sed magna et magna diam aliquyam amet dolore ipsum erat duo. Sit rebum magna duo labore no diam.
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>

</section> 