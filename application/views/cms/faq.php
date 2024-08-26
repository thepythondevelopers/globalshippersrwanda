<!-- <section>
        <div class="container-fluid bg-breadcrumb d-flex  align-items-end" style="background-image: url('<?php echo base_url()?>assets/cms/img/prohibited-bg.jpg');">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInDown;">FAQ's</h3>
                <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInDown;">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-primary">FAQ</li>
                </ol>    
            </div>
        </div>
    </section> -->

    <section>
<div class="container-fluid py-5">
    <div class="container">
        <div class="mx-auto text-center mb-5" style="max-width: 1000px;">
            <h2 class="display-5"><?php echo $title->title;?></h2>
            <p class="fs-5 text-center text-primary"><?php echo $title->details;?></p>
        </div>
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <div class="accordion" id="accordionFAQ1">
                    <?php 
                    $i=0;
                    foreach($desc as $faq){
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

                    <?php $i++; } ?>
                   

                    <!-- <div class="accordion-item wow fadeIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <?php echo $desc[1]->question;?>
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionFAQ1" style="">
                            <div class="accordion-body">
                            <?php echo $desc[1]->answer;?>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="accordion-item wow fadeIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <?php echo $desc[2]->question;?>
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionFAQ1" style="">
                            <div class="accordion-body">
                            <?php echo $desc[2]->answer;?>
                            </div>
                        </div>
                    </div> -->
                    
                    
                    
                </div>
            </div>
            <div class="col-lg-2"></div>
            <!-- <div class="col-lg-6">
                <div class="accordion" id="accordionFAQ2">
                    <div class="accordion-item wow fadeIn" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            <?php echo $desc[3]->question;?>
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionFAQ2" style="">
                            <div class="accordion-body">
                            <?php echo $desc[3]->answer;?>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item wow fadeIn" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">
                        <h2 class="accordion-header" id="headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            <?php echo $desc[4]->question;?>
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionFAQ2" style="">
                            <div class="accordion-body">
                            <?php echo $desc[4]->answer;?>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item wow fadeIn" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">
                        <h2 class="accordion-header" id="headingSeven">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                            <?php echo $desc[5]->question;?>
                            </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionFAQ2" style="">
                            <div class="accordion-body">
                            <?php echo $desc[5]->answer;?>
                            </div>
                        </div>
                    </div>   
                    
                </div>
            </div> -->
        </div>
    </div>
</div>

</section>