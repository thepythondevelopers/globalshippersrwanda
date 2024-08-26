<section class="hero-section">
        <div class="container d-flex  align-items-end">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-dark display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInDown;"><?php echo $title->title;?>
                </h3>
                <!-- <form method="get" class="custom-form mt-4 pt-2 mb-lg-0 mb-5" role="search">
                    <div class="input-group input-group-lg rounded-pill border">
                        <span class="input-group-text bi-search" id="basic-addon1">
                            
                        </span>

                        <input name="keyword" type="search" class="form-control" id="keyword" placeholder="Search for blog..." aria-label="Search">

                        <button type="submit" class="form-control rounded-pill">Search</button>
                    </div>
                </form>    -->
            </div>
        </div>
    </section>

<section>
        <div class="container-fluid services py-5">
            <div class="container">
                <div class="row g-4 justify-content-center">
                    <?php foreach($blog as $record){?>
                        <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                        <div class="blog-item rounded bg-light overflow-hidden">
                            <div class="blog-img">
                                <img src="<?php echo base_url().$record->imgpath;?>" class="img-fluid w-100" alt="Image">
                            </div>
                          
                            <div class="blog-centent p-4">
                                <div class="d-flex justify-content-between mb-4">  
                                    <p class="mb-0 text-muted"><i class="fa fa-calendar-alt text-primary"></i><?php 
                                    
                                    $datetime= strtotime($record->date_created);
                                    $convertdate = date("d M, y",$datetime);
                                    print_r($convertdate);
                                    ?></p>
                                    <!-- <a href="#" class="text-muted"><span class="fa fa-comments text-primary"></span> 3 Comments</a> -->
                                </div>
                                <a href="<?php echo base_url('blog/'.$record->id);?>" class="h4 one-line-text"><?php echo $record->heading;?></a>
                                <p class="my-4"><?php echo $record->title;?></p>
                                <!-- <a href="#" class="btn btn-primary rounded-pill py-2 px-4 mb-1">Read More</a> -->
                            </div>
                   
                        </div>
                    </div>
                    <?php
                    }?>
                  
                    <!-- <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                        <div class="blog-item rounded bg-light overflow-hidden">
                            <div class="blog-img">
                                <img src="https://placehold.co/600x300" class="img-fluid w-100" alt="Image">
                            </div>
                            <div class="blog-centent p-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <p class="mb-0 text-muted"><i class="fa fa-calendar-alt text-primary"></i> 01 Jan 2045</p>
                                    <a href="#" class="text-muted"><span class="fa fa-comments text-primary"></span> 3 Comments</a>
                                </div>
                                <a href="#" class="h4 one-line-text">2024 Ramadan Gift Ideas</a>
                                <p class="my-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium hic consequatur beatae architecto,</p>
                                
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                        <div class="blog-item rounded bg-light overflow-hidden">
                            <div class="blog-img">
                                <img src="https://placehold.co/600x300" class="img-fluid w-100" alt="Image">
                            </div>
                            <div class="blog-centent p-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <p class="mb-0 text-muted"><i class="fa fa-calendar-alt text-primary"></i> 01 Jan 2045</p>
                                    <a href="#" class="text-muted"><span class="fa fa-comments text-primary"></span> 3 Comments</a>
                                </div>
                                <a href="#" class="h4 one-line-text">How to Maximize Savings for Ramadan Shopping</a>
                                <p class="my-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium hic consequatur beatae architecto,</p>
                                
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                        <div class="blog-item rounded bg-light overflow-hidden">
                            <div class="blog-img">
                                <img src="https://placehold.co/600x300" class="img-fluid w-100" alt="Image">
                            </div>
                            <div class="blog-centent p-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <p class="mb-0 text-muted"><i class="fa fa-calendar-alt text-primary"></i> 01 Jan 2045</p>
                                    <a href="#" class="text-muted"><span class="fa fa-comments text-primary"></span> 3 Comments</a>
                                </div>
                                <a href="#" class="h4 one-line-text">How to Shop Internationally and Save with Stackry</a>
                                <p class="my-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium hic consequatur beatae architecto,</p>
                                
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                        <div class="blog-item rounded bg-light overflow-hidden">
                            <div class="blog-img">
                                <img src="https://placehold.co/600x300" class="img-fluid w-100" alt="Image">
                            </div>
                            <div class="blog-centent p-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <p class="mb-0 text-muted"><i class="fa fa-calendar-alt text-primary"></i> 01 Jan 2045</p>
                                    <a href="#" class="text-muted"><span class="fa fa-comments text-primary"></span> 3 Comments</a>
                                </div>
                                <a href="#" class="h4 one-line-text">2024 Ramadan Gift Ideas</a>
                                <p class="my-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium hic consequatur beatae architecto,</p>
                                
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                        <div class="blog-item rounded bg-light overflow-hidden">
                            <div class="blog-img">
                                <img src="https://placehold.co/600x300" class="img-fluid w-100" alt="Image">
                            </div>
                            <div class="blog-centent p-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <p class="mb-0 text-muted"><i class="fa fa-calendar-alt text-primary"></i> 01 Jan 2045</p>
                                    <a href="#" class="text-muted"><span class="fa fa-comments text-primary"></span> 3 Comments</a>
                                </div>
                                <a href="#" class="h4 one-line-text">How to Shop Internationally and Save with Stackry</a>
                                <p class="my-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium hic consequatur beatae architecto,</p>
                                
                            </div>
                        </div>
                    </div> -->
                    <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        <a href="#" class="btn btn-primary rounded-pill py-3 px-5">Load More</a>
                    </div>
                </div>
            </div>
        </div>
        </section>