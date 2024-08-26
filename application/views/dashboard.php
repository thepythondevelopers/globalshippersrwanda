<div class="main">
    <div class="shopship-div py-5">
        <div class="container">
            <h1 class="mb-3">Dashboard</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="<?php echo base_url();?>"><i class="fa fa-home"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    <li class="breadcrumb-item active" aria-current="page">Unique ID:
                        <?php echo $email->id;?>
                    </li>
                </ol>
            </nav>

            <div class="row">
                <div class="col-md-8">
                    <div class="row scardboxes">
                        <div class="col-sm-6 col-md-4 col-xl d-flex dashbox">
                            <div class="card flex-fill">
                                <div class="card-body py-4">
                                    <h4 class="mb-2">
                                        <a href="<?php echo base_url('shopnship');?>">Consolidate Shipments</a>
                                    </h4>
                                    <div class="mb-1">
                                        <div class="d-flex justify-content-between">
                                            <strong>
                                                Total Orders
                                            </strong>
                                            <div class="text-dark">
                                                <?php print_r($order_count[0]->order_count);?>
                                            </div>
                                        </div>
                                        <strong>
                                            <a href="<?php echo base_url('shopnship-create-order');?>"
                                                class="createbtn11">
                                                Create Order
                                            </a>
                                        </strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-xl d-flex dashbox">
                            <div class="card flex-fill">
                                <div class="card-body py-4">
                                    <h4 class="mb-2">
                                        <a href="<?php echo base_url('assisted-sns');?>">Buy For Me</a>
                                    </h4>
                                    <div class="mb-1">
                                        <div class="d-flex justify-content-between">
                                            <strong>
                                                Total Orders
                                            </strong>
                                            <div class="text-dark">
                                                <?php print_r($assis_order_count[0]->order_count);?>
                                            </div>
                                        </div>
                                        <strong>
                                            <a href="<?php echo base_url('assisted-create-order')?>"
                                                class="createbtn11">
                                                Create Order
                                            </a>
                                        </strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-xl d-flex dashbox">
                            <div class="card flex-fill">
                                <div class="card-body py-4">
                                    <h4 class="mb-2">
                                        <a href="<?php echo base_url('international-shipment')?>">Pickup Shipments</a>
                                    </h4>
                                    <div class="mb-1">
                                        <div class="d-flex justify-content-between">
                                            <strong>
                                                Total Orders
                                            </strong>
                                            <div class="text-dark">
                                                <?php print_r($inter_order_count[0]->order_count);?>
                                            </div>
                                        </div>
                                        <strong>
                                            <a href="<?php echo base_url('international-create-order')?>"
                                                class="createbtn11">
                                                Create Order
                                            </a>
                                        </strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="owl-carousel owl-theme logo-slider">
                        <div class="item">
                            <figure>
                                <img src="<?php echo base_url()?>assets/imgs/flip-2.png" class="logo-1"
                                    alt="flipkart" />
                            </figure>
                            <!-- <span>Flipkart</span> -->
                        </div>
                        <div class="item">
                            <figure>
                                <img src="<?php echo base_url()?>assets/imgs/amazon.png" class="logo-1"
                                    alt="amazon.in" />
                            </figure>
                            <!-- <span>Amazon.in</span> -->
                        </div>
                        <div class="item">
                            <figure>
                                <img src="<?php echo base_url()?>assets/imgs/apple.png" class="logo-1" alt="nykaa" />
                            </figure>
                            <!-- <span>Nykaa</span> -->
                        </div>
                        <div class="item">
                            <figure>
                                <img src="<?php echo base_url()?>assets/imgs/buy-1.png" class="logo-1" alt="myntra" />
                            </figure>
                            <!-- <span>Myntra</span> -->
                        </div>
                        <div class="item">
                            <figure>
                                <img src="<?php echo base_url()?>assets/imgs/ebay-3.png" class="logo-1"
                                    alt="ajio.com" />
                            </figure>
                            <!-- <span>Ajio.com</span> -->
                        </div>
                        <div class="item">
                            <figure>
                                <img src="<?php echo base_url()?>assets/imgs/walmart-1.png" class="logo-1"
                                    alt="firstcry.com" />
                            </figure>
                            <!-- <span>Firstcry.in</span> -->
                        </div>
                        <div class="item">
                            <figure>
                                <img src="<?php echo base_url()?>assets/imgs/alibaba.png" class="logo-1"
                                    alt="firstcry.com" />
                            </figure>
                            <!-- <span>Firstcry.in</span> -->
                        </div>
                        <div class="item">
                            <figure>
                                <img src="<?php echo base_url()?>assets/imgs/sum-3.png" class="logo-1"
                                    alt="firstcry.com" />
                            </figure>
                            <!-- <span>Firstcry.in</span> -->
                        </div>
                        <div class="item">
                            <figure>
                                <img src="<?php echo base_url()?>assets/imgs/sonylogo.png" class="logo-1"
                                    alt="firstcry.com" />
                            </figure>
                            <!-- <span>Firstcry.in</span> -->
                        </div>
                        <div class="item">
                            <figure>
                                <img src="<?php echo base_url()?>assets/imgs/dell-2.png" class="logo-1"
                                    alt="firstcry.com" />
                            </figure>
                            <!-- <span>Firstcry.in</span> -->
                        </div>
                        <div class="item">
                            <figure>
                                <img src="<?php echo base_url()?>assets/imgs/bh-1.png" class="logo-1"
                                    alt="firstcry.com" />
                            </figure>
                            <!-- <span>Firstcry.in</span> -->
                        </div>
                        <div class="item">
                            <figure>
                                <img src="<?php echo base_url()?>assets/imgs/trendyol-3.png" class="logo-1"
                                    alt="firstcry.com" />
                            </figure>
                            <!-- <span>Firstcry.in</span> -->
                        </div>
                    </div>
                </div>

                <div class="col-md-4 scardboxes uadd">
                    <div class="card flex-fill userpr">
                        <div class="card-body py-4">
                            <h4 class="mb-2">
                                <?php echo $email->fname.' '.$email->lname?>
                            </h4>
                            <div class="mb-1">
                                <ul>
                                    <li><span>Unique ID: </span>
                                        <?php echo $email->id?>
                                    </li>
                                    <li><span><i class="fas fa-mobile"></i> </span>
                                        <?php echo $email->phone?><b><i class="fas fa-check-circle"></i></b>
                                    </li>

                                    <li><span><i class="fas fa-envelope"></i> </span>
                                        <?php echo $email->email?><b><i class="fas fa-check-circle"></i></b>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="card flex-fill v-card">
                        <div class="card-header d-flex justify-content-between">
                            <h5 class="card-title mb-0">Your Virtual Address</h5>
                            <a href="javascript:void(0);" class="infoicon" data-bs-toggle="modal" data-bs-target="#infoModal" style="color:#000;">
                                <i class="fas fa-info"></i>
                            </a>
                            <!-- The infoModal -->
                            <div class="modal fade" id="infoModal">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Unleash Your Global Shopping Spree with Our Super Address!
                                            </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body">
                                            <h6>Ever craved that amazing gadget from China or those trendy clothes from the US? But stopped short because international shipping seemed like a hassle?</h6>
                                            <p>fret no more!</p>
                                            <p>We at Global Shippers Rwanda are here to be your <strong>shopping superpower</strong>. We provide a special <strong>warehouse address</strong> that acts like your very own mailbox in 7 different countries: China, USA, India, Japan, Turkey, Germany and even Rwanda!</p>
                                            <h6>Why is this awesome, you ask?</h6>
                                            <p>Because most online stores only ship within their own country. This magic address lets you use it as your delivery address while shopping online, anywhere in those 7 countries!</p>
                                            <h6>So, how does it work? It's easy-peasy! Here's the magic: </h6>
                                            <ol type="1">
                                                <li><b>Find your dream item:</b> Search any online store in those 7 countries and use our warehouse address as your delivery address during checkout. </li> 
                                                <li><b>Relax, your shopping hero is on the job!</b> We'll receive your item at our secure facility, completely FREE for 30 days. This gives you time to keep shopping and fill your virtual shopping cart!</li>
                                                <li><b>Ready to ship? You're in control!</b> Once you're done shopping, just let us know, and we'll combine all your treasures from different stores into one big, happy box.</li>
                                                <li><b>Shipping bliss!</b> We'll send your consolidated package straight to your doorstep, saving you a whopping <strong>50-80% on shipping costs!</strong> That's right, more money for amazing finds!</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- The infoModal End -->
                        </div>
                        <ul class="addcont">
                               <li>
                                <label>Shipping Countries</label>
                                <span>
                            <select id="admin_country" class="form-control search_item select2-hidden-accessible">
                                <option value="">Please Select Country </option>
                                <option value="1">INDIA</option>
                                <option value="2">USA</option>
                                <option value="3">CHINA</option>
                                <option value="4">GERMANY</option>
                                <option value="5">JAPAN</option>
                                <option value="6">TURKEY</option>
                                <option value="7">RWANDA</option>
                            </select>
                                </span>
                             <!--    <button class="btn btn-dark" onclick="nameFunction()">
                                    <i class="fa fa-copy"></i>
                                </button> -->
                            </li>
                            <li>
                                <label>Name</label>
                                <span>
                                    <input type="text" class="copy" readonly=""
                                        value="<?php echo $address->fname.' '.$address->lname;?>" id="myInput">
                                </span>
                                <button class="btn btn-dark" onclick="nameFunction()">
                                    <i class="fa fa-copy"></i>
                                </button>
                            </li>
                            <li>
                                <label>Address Line 1</label>
                                <textarea class="copy" readonly=""
                                    id="myInputAddress"><?php echo $address->address;?></textarea>
                                <button class="btn btn-dark" onclick="addressFunction()">
                                    <i class="fa fa-copy"></i>
                                </button>
                            </li>
                            <li>
                                <label>Landmark</label>
                                <input type="text" class="copy" readonly="" value="<?php echo $address->landmark;?>"
                                    id="myInputLandmary">
                                <button class="btn btn-dark" onclick="landFunction()">
                                    <i class="fa fa-copy"></i>
                                </button>
                            </li>

                            <li>
                                <label>Zipcode</label>
                                <input type="text" class="copy" readonly="" value="<?php echo $address->zipcode;?>"
                                    id="myInputZipcode">
                                <button class="btn btn-dark"  onclick="zipFunction()">
                                    <i class="fa fa-copy"></i>
                                </button>
                            </li>

                            <li>
                                <label>State</label>
                                <input type="text" class="copy" readonly="" value="<?php echo $address->state;?> "
                                    id="myInputState">
                                <button class="btn btn-dark" onclick="stateFunction()">
                                    <i class="fa fa-copy"></i>
                                </button>
                            </li>

                            <li>
                                <label>City</label>
                                <input type="text" class="copy" readonly="" value="<?php  echo $address->city;?>"
                                    id="myInputCity">
                                <button class="btn btn-dark" onclick="cityFunction()">
                                    <i class="fa fa-copy"></i>
                                </button>
                            </li>

                            <li>
                                <label>Delivery Phone Number</label>
                                <input type="text" class="copy" readonly="" value="<?php echo $address->phone;?>"
                                    id="myInputPhone">
                                <button class="btn btn-dark" onclick="contactFunction()"> 
                                    <i class="fa fa-copy"></i>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo base_url()?>assets/js/owl.carousel.min.js"></script>
<script>
    $('.logo-slider').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        dots: false,
        autoplay:true,
        autoplayTimeout:1000,
        responsive: {
            0: {
                items: 2,
                nav: false,
            },
            600: {
                items: 3,
                nav: false,
            },
            1000: {
                items: 5
            }
        }
    });
    // logo-slider JS End


    function nameFunction(){
      var copyText = document.getElementById("myInput");
    //   copyText.select();
    //   copyText.setSelectionRange(0, 99999);
    //   navigator.clipboard.writeText(copyText.value);
    //   alert("Copied the text: " + copyText.value);

      copyText.select();
        copyText.setSelectionRange(0, 99999)
        document.execCommand("copy");
      
    }

    function addressFunction(){
      var copyText = document.getElementById("myInputAddress");
      copyText.select();
        copyText.setSelectionRange(0, 99999)
        document.execCommand("copy");
    }
    function landFunction(){
      var copyText = document.getElementById("myInputLandmary");
      copyText.select();
        copyText.setSelectionRange(0, 99999)
        document.execCommand("copy");
    }
    function zipFunction(){
      var copyText = document.getElementById("myInputZipcode");
      copyText.select();
        copyText.setSelectionRange(0, 99999)
        document.execCommand("copy");
    }
    function cityFunction(){
      var copyText = document.getElementById("myInputCity");
      copyText.select();
        copyText.setSelectionRange(0, 99999)
        document.execCommand("copy");
    }

    function stateFunction(){
      var copyText = document.getElementById("myInputState");
      copyText.select();
        copyText.setSelectionRange(0, 99999)
        document.execCommand("copy");
    }

    function contactFunction(){
      var copyText = document.getElementById("myInputPhone");
      copyText.select();
        copyText.setSelectionRange(0, 99999)
        document.execCommand("copy");
    }

$('#admin_country').on('change',function(){
    $.ajax({
      type: "POST",
      url: "<?php echo base_url();?>get-admin-address",
      data: {'country_id':this.value},
      dataType: "json",
      encode: true,
    }).done(function (data) {
      $('#myInput').val(data.fname+' '+data.lname);
      $('#addressfname').val(data.fname);
      $('#addressLastname').val(data.lname);
      $('#myInputAddress').val(data.address);
      $('#myInputLandmary').val(data.landmark);
      $('#myInputZipcode').val(data.zipcode);
      $('#myInputState').val(data.state);
      $('#myInputCity').val(data.city);
      $('#myInputPhone').val(data.phone);
    });
    });

</script>