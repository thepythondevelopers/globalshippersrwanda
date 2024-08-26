<!-- <section>
        <div class="container-fluid d-flex  align-items-end">
            <div class="container py-5">
                <div class="text-center mx-auto" style="max-width: 800px;">                    
                    <h1 class="display-4 mb-4"><?php echo $title->title;?></h1>
                    <p class="text-uppercase text-primary"><?php echo $title->details;?></p>
                </div>
            </div>
        </div>
    </section> -->

    <section class="choose-us-sec py-5">
    <div class="container">
                <div class="text-center mx-auto mb-5" style="max-width: 800px;">                    
                    <h2 class="display-5 mb-4"><?php echo $title->title;?></h2>
                    <p class="text-uppercase text-primary"><?php echo $title->details;?></p>
                </div>
            </div>
            <?php 
                $i=1;
            foreach($desc as $record){
              
                if($record->id % 2 != 0){
                    ?>
                    <div class="container overflow-hidden px-lg-0 mb-5">
                    <div class="container quote px-lg-0">
                        <div class="row g-0 mx-lg-0">
                            <div class="col-lg-6 ps-lg-0" style="min-height: 400px;">
                                <div class="position-relative h-100 border-rounded-10">
                                    <img class="position-absolute img-fluid w-100 h-100" src="<?php echo base_url().$record->imgpath?>" style="object-fit: cover;" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6 quote-text-right wow fadeIn" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">
                                <div class="p-lg-5 pt-4 pe-lg-0">
                                    <div class="bg-primary mb-3 text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;"><?php echo $i;?></div>
                                    <h2 class="display-6 mb-5"><?php echo $record->title;?></h2>
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
                     <div class="col-lg-6 quote-text-right wow fadeIn" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">
                             <div class="p-lg-5 pt-4 pe-lg-0">
                                 <div class="bg-primary mb-3 text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;"><?php echo $i;?></div>
                                 <h2 class="display-6 mb-5"><?php echo $record->title;?></h2>
                                 <h3 class="mb-4 fs-4 pb-2"><?php echo $record->description;?></h3>
                                 
                             </div>
                         </div>
                         <div class="col-lg-6 ps-lg-0" style="min-height: 400px;">
                             <div class="position-relative h-100 border-rounded-10">
                                 <img class="position-absolute img-fluid w-100 h-100" src="<?php echo base_url().$record->imgpath?>" style="object-fit: cover;" alt="">
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <?php }

            $i++;
            }
        
           // exit;?>
       
       
        <!-- <div class="container overflow-hidden px-lg-0">
            <div class="container quote px-lg-0">
                <div class="row g-0 mx-lg-0">
                    <div class="col-lg-6 ps-lg-0" style="min-height: 400px;">
                        <div class="position-relative h-100 border-rounded-10">
                            <img class="position-absolute img-fluid w-100 h-100" src="<?php echo base_url()?>assets/imgs/imgpsh_fullsize_anim.png" style="object-fit: cover;" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 quote-text-right wow fadeIn" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">
                    <div class="p-lg-5 pt-4 pe-lg-0">
                            <div class="bg-primary mb-3 text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">03</div>
                            <h2 class="display-6 mb-5"><?php echo $desc[2]->title;?></h2>
                            <h3 class="mb-4 fs-4 pb-2"><?php echo $desc[2]->description;?></h3>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </section>
