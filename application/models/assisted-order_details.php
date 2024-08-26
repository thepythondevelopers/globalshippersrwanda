<script type="text/javascript" src="js/js/prototype.js"></script>
<script type="text/javascript" src="js/js/scriptaculous.js?load=effects,builder"></script>
<script type="text/javascript" src="js/js/lightbox.js"></script>
<link rel="stylesheet" href="css/css/lightbox.css" type="text/css" media="screen" />
<style>
.row > .column {
  padding: 0 8px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

.column {
  /* float: left; */
  width: 100%;
  min-height:auto;
}
.modal {
  display: none;
  position: fixed;
  z-index: 1;
  padding-top: 100px;
  left: 0;
  top: 0;
  width: 100%;
  min-height: 100%;
  overflow: auto;
  background-color: black;
  opacity: 0.6;
}
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  width: 90%;
  max-width: 1200px;
}
.close {
  color: white;
  position: absolute;
  top: 10px;
  right: 25px;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #999;
  text-decoration: none;
  cursor: pointer;
}

.mySlides {
  display: none;
}

.cursor {
  cursor: pointer;
}
.prevs,
.nextb {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}
.nextb {
  right: 0;
  border-radius: 3px 0 0 3px;
}
.prevs:hover,
.nextb:hover {
  background-color: rgba(0, 0, 0, 0.8);
}
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}
img {
  margin-bottom: -4px;
}
/* .caption-container {
  text-align: center;
  background-color: black;
  padding: 2px 16px;
  color: white;
} */
.demo {
  opacity: 0.6;
}
.active,
.demo:hover {
  opacity: 1;
}
img.hover-shadow {
  transition: 0.3s;
}
.hover-shadow:hover {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
</style>
<div class="shopship-div shop_order_page py-5">
        <div class="container">
            <h1 class="mb-3">Order Details</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="javascript:void(0);">
                            <i class="fa fa-home"></i>
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="<?php echo base_url('assisted-sns');?>">Assisted Shop n Ship</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Order Details</li>
                </ol>
            </nav>

            <!-- <div class="hist-div">
                <a href="javascript:void(0);" class="btn histbtn" target="_blank">
                    <i class="fas fa-history" ></i>
                    <span>Order History</span>
                </a>
            </div> -->
                
            <div class="srch-table mb-4">

                <div class="itemhdr">
                    <h5 class="itemtitle mb-0">Item Detail</h5>                   
                </div>

                <div id="dataTable_filter" class="dataTables_filter">
                    <!-- <label>Search:<input type="search" class="form-control form-control-sm" placeholder="" id="search_key"></label>
                    <div><button type="submit"class="btn btn-info" id="searchBtn">Search</button></div> -->
                </div>
                <!-- table start  -->
                <div class="table-responsive">
                    <table class="table newtable dataTable no-footer" id="table">
                        <thead>
                            <tr role="row">
                                <th class="sorting_asc" aria-sort="ascending">Item Type</th>
                                <th class="sorting">Item Name</th>
                                <th class="sorting">Item Url</th>
                                <th class="sorting">Item Price</th>
                                <!-- <th class="sorting">Updated Item price</th> -->
                                <th class="sorting">Quantity</th>
                                <th class="sorting">Color</th>
                                <th class="sizecol sorting">Size</th>
                                <th class="sorting">Arrived Status</th>
                                <th class="sorting">Action</th>
                            </tr>
                        </thead>
                        <tbody id ="listdata">
                            <?php 
                            // $i=1;
                            // foreach($data as $row){

                            // echo "<pre>";
                            // print_r($row);
                            // exit;
                            ?>
                            <!-- <tr role="row" class="odd">
                                <td class="sorting_1">Electronics</td>
                                <td>MOTOROLA G22 64GB 4GB</td>
                                <td class="store">
                                    <span>
                                        <a href="javascript:void(0);" target="_blank">Product Link</a>
                                    </span>                                        
                                    <a class="storean" href="javascript:void(0)">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a class="storean1" href="javascript:void(0)">
                                        <i class="fa fa-eye-slash"></i>
                                    </a>
                                </td>
                                <td>10999</td>
                                 <td></td>
                                <td>1</td>
                                <td>Cosmic Black</td>
                                <td class="sizecol">6.5 inch</td>
                                <td> Arrived </td>
                                <td>
                                    <button type="button" class="btn imgbtn">
                                       View Image 
                                    </button>
                                    <ul class="docs-pictures clearfix images">
                                        <li>
                                            <img src="" >
                                        </li>
                                     </ul>
                                </td>
                            </tr>
                            <?php
                            // $i++;
                            // }
                            ?> -->

                         <?php //if(!empty('shopnship_item_details'))
                            //{
                            ?>
                            <?php foreach($item_records as $lists){
                               
                                ?>
                                 <tr>
                                    <td><?php echo $lists->item_type_name;?></td>
                                    <td><?php echo $lists->product_name;?></td>
                                    <td><a href="#" target="_blank"><?php echo $lists->store;?></a></td>
                                    <td><?php echo $lists->total_amount;?></td>
                                    <!-- <td><?php echo $lists->total_amount;?></td> -->
                                    <td><?php echo $lists->quantity;?></td>
                                    <td><?php echo $lists->color;?></td>
                                    <td><?php echo $lists->size;?></td>
                                    <td><?php echo ($lists->order_status==4)?'Arrived':'Pending';?></td> 
                                    <td>
                                        <button type="button" class="btn btn-success imgbtn" onclick="openModal()">
                                           View Image 
                                        </button>
                                        <!-- <ul class="docs-pictures clearfix images">
                                            <li>
                                                <img data-original="<?php echo base_url().$lists->image?>" src="<?php echo base_url().$lists->image?>"></li>
                                        </ul> -->
                                        <div id="myModal" class="modal">
                                            <span class="close cursor" onclick="closeModal()">&times;</span>
                                            <div class="modal-content">
                                                <a class="prevs" onclick="plusSlides(-1)">&#10094;</a>
                                                <a class="nextb" onclick="plusSlides(1)">&#10095;</a>
                                                <div class="column">
                                                <img class="demo cursor" src="<?php echo base_url().$lists->image?>" onclick="currentSlide(this)" alt="">
                                                </div>
                                              
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <?php }?>
                            <?php //}else{?>
                                <!-- <div class="alert alert-info">No Record found</div> -->
                                <?php //}?>
                        </tbody>
                    </table>
                </div>
                <!-- table end  -->

                <!-- Pagination Start  -->
                <div class="dataTables_paginate">
                    <div class="row">
                        <div class="col-sm-12 col-md-5">
                            <!-- <div class="dataTables_info" >Showing 1 to 1 of 1 entries</div> -->
                        </div>
                        <div class="col-sm-12 col-md-7">
                            <div class="paging_simple_numbers">
                                <ul class="pagination">
                                    <?php //echo $pagelinks; ?>
                                    <!-- <li class="paginate_button page-item previous disabled">
                                        <a href="#" class="page-link">Previous</a>
                                    </li>
                                    <li class="paginate_button page-item active">
                                        <a href="#" class="page-link">1</a>
                                    </li>
                                    <li class="paginate_button page-item next disabled" >
                                        <a href="#" aria-controls="dataTable" data-dt-idx="2" tabindex="0" class="page-link">Next</a>
                                    </li>  -->
                                   
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Pagination End  -->
            </div>

            <div class="row">
                <div class="col-12 col-lg-6 oneflex">
                    <div class="srch-table mb-4">

                        <div class="itemhdr">
                            <h5 class="itemtitle mb-0">Payment Detail</h5>                   
                        </div>
            
                        <!-- table start  -->
                        <div class="table-responsive">
                            <table class="table newtable dataTable no-footer" id="table" role="grid" aria-describedby="dataTable_info">
                                <thead>
                                    <tr>
                                        <th>Payment Id</th>
                                        <th>Status</th>
                                        <th>Type</th> 
                                        <th>Invoice</th> 
                                        <th>Pdf</th> 
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach($pay_details as $pay) { ?>
                                    <tr>
                                    <td><a href="<?php echo "https://buy.stripe.com/".$pay->payment_id?>"><?php echo "https://buy.stripe.com/".$pay->payment_id;?></a></td>
                                    <td><?php echo ($pay->status==1)?'Pending':(($pay->status==2)?'Paid':'Rejected');?></td>
                                    <td><?php echo $pay->type;?></td>
                                    <td>
                                            <a href="<?php echo base_url().'Shopnship/assisted_invoice/'.$lists->assisted_id;?>" target="_blank" class="btn btn-primary inbtn">Invoice</a>
                                        </td>
                                        <td>
                                            <a href="<?php echo base_url().'Shopnship/assistedpdf/'.$lists->assisted_id;?>">
                                                <i class="fa fa-download"></i>
                                            </a>
                                        </td>
                                        <!-- <td>
                                            <a href="<?php echo base_url().'Shopnship/assisted_pdf/'.$lists->assisted_id;?>">
                                                <i class="fa fa-download"></i>
                                            </a>
                                        </td> -->
                                    </tr>
                                    <?php }?>
                                </tbody>
                                <!-- <tbody>
                                    <tr>
                                        <td>pi_3Ld91nI1eTE4YULd1...</td>
                                        <td>Paid</td>
                                        <td>Purchase Payment</td>
                                        <td>
                                            <a href="javascript:void(0);" target="_blank" class="btn btn-primary inbtn">Invoice</a>
                                        </td>
                                        <td>
                                            <a href="<?php echo base_url().'Shopnship/assistedpdf/'.$lists->assisted_id;?>">
                                                <i class="fa fa-download"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody> -->
                            </table>
                        </div>
                        <!-- table end  -->
                        
                    </div>

                    <div class="srch-table shipTable mb-4">

                        <div class="itemhdr">
                            <h5 class="itemtitle mb-0">Shipment Details</h5>                   
                        </div>
            
                        <!-- table start  -->
                        <div class="table-responsive">
                            <table class="table newtable dataTable no-footer" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                <thead>
                                    <tr>
                                        <th>Shipping Carrier</th>
                                        <th>Tracking Number</th>
                                        <th>Tracking URL</th> 
                                        <th>Shipping</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach($shipment_details as $shipment){?>
                                    <tr>
                                    
                                    <td><?php echo $shipment->shipping_carrier;?></td>
                                    <td><?php echo $shipment->tracking_number;?></td>         
                                        <td class="aligncenter">
                                            <a href="<?php echo $shipment->tracking_url?>" target="_blank"> 
                                            <?php echo $shipment->tracking_url;?></
                                                <i class="align-middle mr-2 fas fa-fw fa-external-link-alt"></i>
                                            </a>
                                        </td>
                                        <td><?php echo $shipment->shipping;?></td> 
                                    </tr>  
                                    <?php }?>                                 
                                </tbody>
                            </table>
                        </div>
                        <!-- table end  -->
                        
                    </div>

                    <div class="srch-table delivery-table mb-4">
                        <div class="itemhdr delivery-div">
                            <h5 class="itemtitle mb-0">Delivery Address</h5>                   
                        </div>
                        <ul class="addcont">
                            <li>
                                <b>Name:</b> 
                                <p><?php echo $user_address->fname." ".$user_address->lname?></p>
                            </li>
                            <li>
                                <b>Phone:</b> 
                                <p><?php echo $user_address->phone_number ;?></p>
                            </li>
                            <li>
                                <b>Address:</b> 
                                <p><?php echo $user_address->street_address; ?></p>
                            </li>
                            <li>
                                <b>Apt,Suit,Bldg,Gate code:</b> 
                                <p><?php echo $user_address->gate_code; ?></p>
                            </li>
                            <li>
                                <b>City:</b> 
                                <p><?php echo $user_address->city; ?></p>
                            </li>
                            <li>
                                <b>State:</b> 
                                <p><?php echo $user_address->state; ?></p>
                            </li>
                            <li>
                                <b>Country:</b> 
                                <p><?php echo $user_address->country; ?></p>
                            </li>
                            <li>
                                <b>Pincode:</b>
                                <p> <?php echo $user_address->pin_code; ?></p>
                            </li>
                        </ul>
                    </div>

                    <div class="srch-table item-table mb-4">
                        <div class="itemhdr delivery-div">
                            <h5 class="itemtitle mb-0">Item Documents</h5>  

                        </div>
                        <?php foreach($item_records as $lists){
                           ?>
                                  <a class="imagename" href="<?php echo base_url().$lists->image?>" target="_blank"
                  ><?php echo $lists->image?></a> 
                           <?php 
                            }?>
                 
                    </div>
                    
                </div>
                <div class="col-12 col-lg-6">
                    <div class="srch-table chat-section1">
                        <div class="itemhdr chatheader">
                            <h5 class="itemtitle mb-0">Messages</h5>                   
                        </div>
                        <ul class="chat-list">
                        <?php foreach($msg as $message){
                                  if($message->send_by_admin == 1){
                                    ?>
                                   <li class="chatli yourchat yourchat1 float-left" style="background:#edf8ff;">
                                    <div class="chatrep"><?php echo $message->message_type;?></div>
                                      <div class="chat-cont">
                                      <p><?php echo $message->message;?></p>
                                      <span class="reptxt"><?php echo "Reply By: Admin";?></span>
                                      <span class="chattime"><?php echo $message->created_date?></span>
                                      <span id="chatview">Seen</span>
                                      </div>
                                    </li>
                                    <?php }
                                    else
                                    {?>
                                      <li class="chatli myChat myChat1 float-right" >
                                      <div class="chatrep"><?php echo $message->message_type;?></div>
                                      <div class="chat-cont">
                                      <p><?php echo $message->message;?></p>
                                      <span class="reptxt"><?php echo "Reply By: You";?></span>
                                      <span class="chattime"><?php echo $message->created_date?></span>
                                      <span id="chatview">Seen</span>
                                      </div>
                                      </li>
                                      <div id="counter"></div>
                                    <?php }
                                    }?>
                        </ul>
                        <div class="chatinput-sec">
                            <!-- <form action ="<?php //echo base_url('Shopnship/assisted_insert_message')?>" method="post"> -->
                            <select class="chatselect" name="message_type" id="message_type">
                                <option selected="" value="">Select</option>
                                <?php foreach($item_records as $lists){?>
                                <option value="<?php echo $lists->product_name;?>"><?php echo $lists->product_name;?></option>
                                <?php }?>
                                <option value="All">All</option>
                            </select>
                            <input type="hidden" name="from_id" id="from_id" value="<?php echo $user_address->user_id;?>">
                            <textarea name="message" rows="4" placeholder="Enter your message" maxlength="250" id="message"></textarea>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="attach-file">
                                    <!-- <input type="file" name="attechment" accept="image/png, image/jpeg" >
                                    <span class="attechicon">
                                        <i class="fas fa-paperclip"></i>
                                    </span> -->
                                </span>
                                <button type="button" name="submit" value="<?php echo $order_id;?>"id="save">
                                    <i class="fas fa-paper-plane" ></i>Send
                                </button>
                            </div>
                            <!-- </form> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
 <script src="https://cdn.datatables.net/1.10.8/js/jquery.dataTables.min.js" defer="defer"></script>
<script type="text/javascript">
  $(document).ready(function(){
            $("#save").on("click", function(){
                $value = $("#message").val();
                //alert($value)
                $message_type = $("#message_type").val();
                $from_id = $("#from_id").val();
                $order_id = $("#save").val();
                var dt = new Date();
                var time = dt.getHours() + ":" + dt.getMinutes() + ":" + dt.getSeconds();
                $msg = ' <li class="chatli myChat myChat1"><div class="chatrep">' + $message_type + '</div> <div class="chat-cont"><p>'+$value+'</p> <span class="reptxt">Replied By : You </span> <span class="chattime">'+time+'</span></div></li>';
                //$(".myChat1").append($msg);
                $("#counter").append($msg);
                $("#message").val('');
                $("#message_type").val();
                $('#from_id').val();
                $msg = '';
                
                // start ajax code
                $.ajax({
                    url: '<?php echo base_url().'Shopnship/assisted_insert_message'?>',
                    type: 'POST',
                    data: 'textarea='+$value+'&message_type='+$message_type+'&created_date='+time+'&order_id='+$order_id+'&from_id='+$from_id,
                    success: function(result){
                        $replay = ' <li class="chatli myChat myChat1"><div class="chatrep">' + result + '</div><div class="chat-cont"><p>'+result+'</p> <span class="reptxt">Replied By : You </span> <span class="chattime">'+result.created_date +'</span></div></li>';
                       // $(".myChat1").append($replay);
                        $("#counter").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".myChat1").scrollTop($(".myChat")[0].scrollHeight);
                    }
                });
            });
        });
    $(document).ready(function() {
    $('#table').DataTable( {
       
        dom: 'Bfrtip',
        buttons: [
             'pdf'
        ]
        
    } );
});


$(document).ready(function() {
    $(".imgbtn").click(function( event ) {
        $(".images").toggle();
    });
});



function openModal() {
  document.getElementById("myModal").style.display = "block";
}

function closeModal() {
  document.getElementById("myModal").style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
//   var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>  