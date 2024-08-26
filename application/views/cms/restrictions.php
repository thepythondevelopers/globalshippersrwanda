<section>
    <div class="container">
        <!-- <div class="row align-items-center">
            <div class="col-lg-6">
                <P><?php echo $ressec1->title;?></p>
                <P><strong><?php echo $ressec1->details;?></strong></p>
            </div>
            <div class="col-lg-6">
                <figure class="hero-right-img">
                    <img src="<?php echo $ressec1->banner;?>" alt="img"/>
                </figure>
            </div>
        </div> -->
    </div>
        <!-- <div class="container-fluid bg-breadcrumb d-flex  align-items-end" style="background-image: url('<?php echo base_url()?>assets/cms/img/prohibited-bg.jpg');">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInDown;">Prohibited items</h3>
                <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInDown;">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-primary">prohibited</li>
                </ol>    
            </div>
        </div> -->
    </section>

<section>
        <div class="container-fluid services py-5 bg-light">
            <div class="container">
                <!-- <div class="mx-auto text-center mb-5" style="max-width: 1000px;">
                    <p class="fs-4 text-uppercase text-center text-primary">Prohibited and limited items</p>
                    <h1 class="display-3">Review restricted items before ordering from the U.S.</h1>
                </div> -->
                <div class="flexbox1">
                    <?php foreach($ressec2 as $sec2data){
                       
                        ?>
                        <div class="flexbox-item">
                        <div class="row-cols-1 feature-item p-4">
                            <div class="col-12">
                                <div class="feature-icon mb-4">
                                    <div class="p-3 d-inline-flex bg-white rounded">
                                        <!-- <i class="fas fa-user fa-3x text-primary"></i> -->
                                        <!-- <img src="<?php echo base_url()?>assets/imgs/Aerosols.svg" alt="img"/> -->
                                        <img alt="Shipping Aerosols" loading="lazy" width="50" height="50"  src="<?php echo $sec2data->imgpath;?>" style="color: transparent;">
                                    </div>
                                    
                                </div>
                                <div class="feature-content d-flex flex-column">
                                    <h4 class="mb-4"><?php echo $sec2data->sec2_title;?></h4>
                                    <p><?php echo $sec2data->description;?></p>
                                    <!-- <ul class="rest-list">
                                        <li>Hair Spray</li>
                                        <li>Shaving Cream</li>
                                        <li>Deodorant</li>
                                    </ul> -->
                                    <p><?php echo $sec2data->points;?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                   <?php }
                    ?>
                   
                    <!-- <div class="flexbox-item">
                        <div class="row-cols-1 feature-item p-4">
                            <div class="col-12">
                                <div class="feature-icon mb-4">
                                    <div class="p-3 d-inline-flex bg-white rounded">
                                        <i class="fas fa-user fa-3x text-primary"></i>
                                    </div>
                                </div>
                                <div class="feature-content d-flex flex-column">
                                    <h4 class="mb-4">Aerosols</h4>
                                    <p>Items requiring an ECCN (Export Control Classification Number) Items requiring an export license from the Department of Commerce, and dual-use items found on the Commerce Control List (CCL) often relating to navigation and avionics, computer parts, telecommunication devices, etc.</p>
                                    <ul class="rest-list">
                                        <li>Hair Spray</li>
                                        <li>Shaving Cream</li>
                                        <li>Deodorant</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flexbox-item">
                        <div class="row-cols-1 feature-item p-4">
                            <div class="col-12">
                                <div class="feature-icon mb-4">
                                    <div class="p-3 d-inline-flex bg-white rounded">
                                        <i class="fas fa-user fa-4x text-primary"></i>
                                    </div>
                                </div>
                                <div class="feature-content d-flex flex-column">
                                    <h4 class="mb-4">Ivory</h4>
                                    <p>A hard, creamy-white substance composing the main part of the tusks of an elephant, walrus, or narwhal, often (especially formerly) used to make ornaments and other articles. Tusk, Horns or Teeth from Elephants, Hippopotamus, Sperm Whales, Killer Whales, Narwhals, Wart Hog, and Elk</p>
                                    <ul class="rest-list">
                                        <li>Powdered ivory</li>
                                        <li>Jewelry</li>
                                        <li>Statues</li>
                                        <li>Boxes</li>
                                        <li>Raw ivory</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="flexbox-item">
                        <div class="row-cols-1 feature-item p-4">
                            <div class="col-12">
                                <div class="feature-icon mb-4">
                                    <div class="p-3 d-inline-flex bg-white rounded">
                                        <i class="fas fa-user fa-3x text-primary"></i>
                                    </div>
                                </div>
                                <div class="feature-content d-flex flex-column">
                                    <h4 class="mb-4">Political</h4>
                                    <p>Printed, audio, or visual material relating to the government or the public affairs of a country.</p>
                                    <ul class="rest-list">
                                        <li>Books</li>
                                        <li>Pamphlets</li>
                                        <li>Audio recordings</li>
                                        <li>Video recordings</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="flexbox-item">
                        <div class="row-cols-1 feature-item p-4">
                            <div class="col-12">
                                <div class="feature-icon mb-4">
                                    <div class="p-3 d-inline-flex bg-white rounded">
                                        <i class="fas fa-user fa-3x text-primary"></i>
                                    </div>
                                </div>
                                <div class="feature-content d-flex flex-column">
                                    <h4 class="mb-4">Agriculture</h4>
                                    <p>Items grown on farms or in gardens or items used when cultivating soil; planting; raising, and harvesting plants, crops, fruits and vegetables.</p>
                                    <ul class="rest-list">
                                        <li>Seeds</li>
                                        <li>Hay</li>
                                        <li>Corn</li>
                                        <li>Soybeans</li>
                                        <li>Soil</li>
                                        <li>Grain</li>
                                        <li>Feed</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="flexbox-item">
                        <div class="row-cols-1 feature-item p-4">
                            <div class="col-12">
                                <div class="feature-icon mb-4">
                                    <div class="p-3 d-inline-flex bg-white rounded">
                                        <i class="fas fa-user fa-3x text-primary"></i>
                                    </div>
                                </div>
                                <div class="feature-content d-flex flex-column">
                                    <h4 class="mb-4">Electric Bikes over 100Wh</h4>
                                    <p>A personal transporter, electric scooter, or battery-powered bicycle composed of two wheels held in a frame, one behind the other, is powered by a lithium battery.</p>
                                    <ul class="rest-list">
                                        <li>Electric bikes</li>
                                        <li>E-Scooters</li>
                                        <li>Electric </li>
                                        <li>skateboards </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="flexbox-item">
                        <div class="row-cols-1 feature-item p-4">
                            <div class="col-12">
                                <div class="feature-icon mb-4">
                                    <div class="p-3 d-inline-flex bg-white rounded">
                                        <i class="fas fa-user fa-3x text-primary"></i>
                                    </div>
                                </div>
                                <div class="feature-content d-flex flex-column">
                                    <h4 class="mb-4">Jewelry</h4>
                                    <p>Personal ornaments, such as necklaces, rings, or bracelets, that are typically made from or contain jewels and precious metal</p>
                                    <ul class="rest-list">
                                        <li>Hair Spray</li>
                                        <li>Shaving Cream</li>
                                        <li>Deodorant</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="flexbox-item">
                        <div class="row-cols-1 feature-item p-4">
                            <div class="col-12">
                                <div class="feature-icon mb-4">
                                    <div class="p-3 d-inline-flex bg-white rounded">
                                        <i class="fas fa-user fa-3x text-primary"></i>
                                    </div>
                                </div>
                                <div class="feature-content d-flex flex-column">
                                    <h4 class="mb-4">Agriculture</h4>
                                    <p>Items grown on farms or in gardens or items used when cultivating soil; planting; raising, and harvesting plants, crops, fruits and vegetables.</p>
                                    <ul class="rest-list">
                                        <li>Seeds</li>
                                        <li>Hay</li>
                                        <li>Corn</li>
                                        <li>Soybeans</li>
                                        <li>Soil</li>
                                        <li>Grain</li>
                                        <li>Feed</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        </section>