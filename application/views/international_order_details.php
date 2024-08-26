<div class="shopship-div shop_order_page py-5">
  <div class="container">
    <h1 class="mb-3">Order Details</h1>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="<?php echo base_url();?>">
            <i class="fa fa-home"></i>
          </a>
        </li>
        <li class="breadcrumb-item">
          <a href="<?php echo base_url('international-shipment')?>">Pickup
            Shipments </a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">
          Order Details
        </li>
      </ol>
    </nav>

    <div class="hist-div">
      <!-- <button type="button" class="btn btn-dark">
              Update Client Order ID
            </button> -->

      <!-- <a href="javascript:void(0);" class="btn histbtn" target="_blank">
              <i class="fas fa-history"></i>
              <span>Order History</span>
            </a> -->
    </div>

    <div class="srch-table mb-4">
      <div class="itemhdr">
        <h5 class="itemtitle mb-0">Item Detail</h5>
      </div>

      <div id="dataTable_filter" class="dataTables_filter">
        <!-- <label
                >Search:<input
                  type="search"
                  class="form-control form-control-sm"
                  placeholder=""
              /></label> -->
      </div>
      <!-- table start  -->
      <div class="table-responsive">
        <table class="table newtable dataTable no-footer" id="table">
          <thead>
            <tr role="row">
              <th
                class="sorting_desc"
                tabindex="0"
                aria-controls="dataTable"
                rowspan="1"
                colspan="1"
                aria-sort="descending"
                aria-label="Item Type: activate to sort column ascending">
                Item Type
              </th>
              <th
                class="sorting"
                tabindex="0"
                aria-controls="dataTable"
                rowspan="1"
                colspan="1"
                aria-label="Item Name: activate to sort column ascending">
                Item Name
              </th>
              <th
                class="sorting"
                tabindex="0"
                aria-controls="dataTable"
                rowspan="1"
                colspan="1"
                aria-label="Item Price: activate to sort column ascending">
                Item Price
              </th>
              <th
                class="sorting"
                tabindex="0"
                aria-controls="dataTable"
                rowspan="1"
                colspan="1"
                aria-label="Quantity: activate to sort column ascending">
                Quantity
              </th>
              <!--  <th
                      class="sorting"
                      tabindex="0"
                      aria-controls="dataTable"
                      rowspan="1"
                      colspan="1"
                      aria-label="Action: activate to sort column ascending"
                    >
                      Action
                    </th> -->
            </tr>
          </thead>
          <tbody>
            <?php foreach($item_records as $lists){

            ?>
            <tr>
              <td><?php echo $lists->item_type_name;?></td>
              <td><?php echo $lists->product_name;?></td>
              <td><?php echo $lists->total_amount;?></td>
              <td><?php echo $lists->quantity;?></td>
              <!-- <td> 
                          <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#productModal">
                            <i class="fa fa-edit"></i>
                          </button>
                        </td> -->
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
      <!-- table end  -->

      <!-- Pagination Start  -->
      <!-- ENTRIES AND PAGINATION -->
      <!-- Pagination End  -->
    </div>
    <div class="modal fade" id="productModal" tabindex="-1" role="dialog"
      aria-labelledby="productModal"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <form action="<?php echo base_url('customer/international-product')?>"
            method="post">
            <input type="hidden" name="id"
              value="<?php echo $lists->order_id;?>">
            <div class="modal-header">
              <h5 class="modal-title" id="productModal">Update Product
                details</h5>
              <button type="button" class="btn btn-close"
                data-bs-dismiss="modal">
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-md-6 form-group">
                  <label>Item Type*:</label>
                  <select
                    class="form-control package_name select2-hidden-accessible"
                    name="item_type[]" required
                    data-select2-id="select2-data-package_name" tabindex="-1"
                    aria-hidden="true" id="item_type">
                    <option value>Please select item type</option>
                    <option value="1">Books</option>
                    <option value="2">Cereals</option>
                    <option value="3">Cosmetics</option>
                    <option value="4">Crockery</option>
                    <option value="5">Electronics</option>
                    <option value="6">Food items</option>
                    <option value="7">Handricraft</option>
                  </select>
                </div>
                <div class="col-md-6 form-group">
                  <label>Item Name*:</label>
                  <input type="text" class="form-control" name="item_name[]"
                    value="<?php echo $lists->product_name;?>" required>
                </div>
                <div class="col-md-6 form-group">
                  <label>Quantity*</label>
                  <input type="text" class="form-control" name="quantity[]"
                    value="<?php echo $lists->quantity;?>" required>
                </div>
                <div class="col-md-6 form-group">
                  <label>Single Item Price*(INR)</label>
                  <input type="text" class="form-control" name="single_price[]"
                    value="<?php echo $lists->total_amount;?>" required>
                </div>
                <div class="col-md-6 form-group">
                  <label>Image</label>
                  <input type="file" class="form-control" name="file"
                    value="<?php //echo $lists->image_path1?>">
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-dark" name="submit"
                value>Save</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- <div class="modal fade" id="productModal">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <form action = "<?php //echo base_url('Shopnship/update_record')?>" method="post">
                                <input type="hidden" id="id" value="<?php //echo $email->id;?>" name="id">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Update Product</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                  </div>
                                  <div class="modal-body">
                                    <div class="row">
                                      <input type="hidden" name="did" value="" id="id">
                                        <div class="col-md-6 form-group mb-3">
                                        <label>Item Type*:</label>
                                        <input type="text" class="form-control" name="item_type"
                                          value="<?php echo $lists->item_type_name;?>">
                                        </div>

                                        <div class="col-md-6 form-group mb-3">
                                        <label>Item Name*:</label>
                                         <input type="text" class="form-control" name="item_name" value="<?php echo $lists->product_name;?>">
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                        <label>Quantity*</label>
                                        <input type="text" class="form-control" name="quantity" value="<?php echo $lists->quantity;?>">
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                           <label>Single Item Price*(INR)</label>
                    <input type="text" class="form-control" name="single_price" value="<?php echo $lists->total_amount;?>">
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="zipcode">Zipcode</label>
                                            <input type="text" name="zipcode" class="form-control" required="" value="<?php //echo $email->zipcode;?>" placeholder="Enter Last Name">
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="state">State</label>
                                            <input type="text" name="state" class="form-control" required="" value="<?php //echo $email->state;?>" placeholder="Enter Last Name">
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="city">City</label>
                                            <input type="text" name="city" class="form-control" required="" value="<?php //echo $email->city;?>" placeholder="Enter Last Name">
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="phone">Delivery Phone Number</label>
                                            <input type="text" name="phone_number" class="form-control" required="" value="<?php //echo $email->phone;?>" placeholder="Enter Last Name">
                                        </div>
                                         <div class="col-md-12 form-group mb-3">
                                            <label for="phone " class="supportline">*To change primary mobile number please <u>contact support</u>.</label>
                                            <input type="hidden" class="form-control" readonly="" value="globalshippersrwanda@gmail.com" placeholder="Enter Email">
                                        </div> -->

    <!-- </div>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="submit" class="btn btn-dark">Save Changes</button>
                                  </div>
                                  </form>
                                </div>
                              </div>  -->
    <div class="row">
      <div class="col-12 col-lg-6 oneflex">
        <div class="srch-table mb-4">
          <div class="itemhdr">
            <h5 class="itemtitle mb-0">Payment Detail</h5>
          </div>

          <!-- table start  -->
          <div class="table-responsive">
            <table class="table newtable dataTable no-footer" id="table"
              role="grid" aria-describedby="dataTable_info">
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
                <?php

                foreach($pay_details as $pay) { ?>
                <tr>
                <td><a href="<?php echo ($pay->paymentmethod==1)?"https://buy.stripe.com/".$pay->payment_id:"https://www.paypal.com/".$pay->payment_id;?>"><?php echo ($pay->paymentmethod==1)?"https://buy.stripe.com/".$pay->payment_id:"https://www.paypal.com/".$pay->payment_id;?></a></td>
                  <td><?php echo
                    ($pay->status==1)?'Pending':(($pay->status==2)?'Paid':'Rejected');?></td>
                  <td><?php echo $pay->type;?></td>
                  <td>
                    <a
                      href="<?php echo base_url().'user/international-invoice/'.$lists->international_id.'/'.$pay->id;?>"
                      target="_blank" class="btn btn-dark inbtn">Invoice</a>
                  </td>
                  <td>
                    <a
                      href="<?php echo base_url().'user/internationalshipmentpdf/'.$lists->international_id.'/'.$pay->id;?>">
                      <i class="fa fa-download"></i>
                    </a>
                  </td>
                </tr>
                <?php }?>
              </tbody>
              <!-- <tbody>
                                    <tr>
                                        <td>pi_3Ld91nI1eTE4YULd1...</td>
                                        <td>Paid</td>
                                        <td>Purchase Payment</td>
                                        <td>
                                            <a href="javascript:void(0);" target="_blank" class="btn btn-dark inbtn">Invoice</a>
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
            <table class="table newtable dataTable no-footer" id="dataTable"
              role="grid" aria-describedby="dataTable_info">
              <thead>
                <tr>
                  <th>Shipping Carrier</th>
                  <th>Tracking Number</th>
                  <th>Tracking URL</th>
                  <th>Shipping</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($shipment_details as $details) {?>

                <tr>

                  <td><?php echo $details->shipping_carrier;?></td>
                  <td><?php echo $details->tracking_number;?></td>
                  <td class="aligncenter">
                    <a href="#" target="_blank">
                      <?php echo $details->tracking_url;?>
                      <i
                        class="align-middle mr-2 fas fa-fw fa-external-link-alt"></i>
                    </a>
                  </td>
                  <td><?php echo $details->shipping;?></td>
                </tr>
                <?php }?>
              </tbody>
            </table>
          </div>
          <!-- table end  -->

        </div>
        <div class="srch-table delivery-table mb-4">
          <div class="itemhdr delivery-div">
            <h5 class="itemtitle mb-0">Order Details</h5>
          </div>
          <div class="cardbox">
            <table class="table">
              <tbody>
                <tr>
                  <td colspan="2">Order ID:</td>
                  <td colspan="2"><?php echo $lists->international_id;?></td>
                </tr>
                <tr>
                  <td colspan="2">No of Boxes:</td>
                  <td colspan="2"><?php echo $item_records[0]->no_of_box;?></td>
                </tr>
                <tr>
                  <td colspan="2">Weight of Package:</td>
                  <td colspan="2"><?php echo $item_records[0]->weight_box?></td>
                </tr>
                <tr>
                  <td colspan="2">Height:</td>
                  <td colspan="2"><?php echo $item_records[0]->height?></td>
                </tr>
                <tr>
                  <td colspan="2">Width:</td>
                  <td colspan="2"><?php echo $item_records[0]->width?></td>
                </tr>
                <tr>
                  <td colspan="2">Depth:</td>
                  <td colspan="2"><?php echo $item_records[0]->depth?></td>
                </tr>
                <tr>
                  <td colspan="2">Remark:</td>
                  <td colspan="2"><?php echo $item_records[0]->remark?></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

       

      <!-- <div class="srch-table pickup-table mb-4">
                <div class="itemhdr delivery-div">
                  <h5 class="itemtitle mb-0">Warehouse Details</h5>
                </div>
                <ul class="addcont">
                  <li>
                    <b>Name:</b>
                    <p>Kanpur Warehouse</p>
                  </li>
                  <li>
                    <b>Phone:</b>
                    <p>919554000808</p>
                  </li>
                  <li>
                    <b>Email:</b>
                    <p>myxborder@gmail.com</p>
                  </li>
                  <li>
                    <b>Address:</b>
                    <p>The Mall Road 66 /16, Hoolaganj</p>
                  </li>
                  <li>
                    <b>Landmark:</b>
                    <p>Near Police Station</p>
                  </li>
                  <li>
                    <b>City:</b>
                    <p>Kanpur</p>
                  </li>
                  <li>
                    <b>State:</b>
                    <p>Uttar Pradesh</p>
                  </li>
                  <li>
                    <b>Pincode:</b>
                    <p>208001</p>
                  </li>
                  <li>
                    <b>Pickup date & time:</b>
                    <p></p>
                  </li>
                </ul>
              </div> -->

      <div class="srch-table order-doc mb-4">
        <div class="itemhdr delivery-div">
          <h5 class="itemtitle mb-0">Order Documents</h5>
        </div>
        <a class="imagename"
          href="<?php echo base_url().$pickup_address->image_path1?>"
          target="_blank"><?php echo $pickup_address->image_path1?></a>
        <a class="imagename"
          href="<?php echo base_url().$pickup_address->image_path2?>"
          target="_blank"><?php echo $pickup_address->image_path2?></a>
      </div>
    </div>
    <div class="col-12 col-lg-6">
     <!-- <div class="srch-table chat-section1">
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
                                    {
                                      ?>
                                      <li class="chatli myChat myChat1 float-right">
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
                                  }
                                  ?>
                </ul>
                <div class="chatinput-sec">
                  <select class="chatselect" name="message_type" id="message_type">
                    <option selected="" disabled="">Select</option>
                    <?php foreach($item_records as $lists){?>
                    <option value="<?php echo $lists->product_name;?>"><?php echo $lists->product_name;?></option>
                    <?php }?>
                    <option value="All">All</option>
                  </select>
                  <input type="hidden" name="from_id" id="from_id" value="<?php echo $delivery_address->user_id;?>">
                  <textarea
                    name="message"
                    rows="4" 
                    placeholder="Enter your message"
                    maxlength="250" id="message"
                  ></textarea>
                  <div
                    class="d-flex justify-content-between align-items-center"
                  >
                    <span class="attach-file">
                    </span>
                    <button type="button" name="submit" style="background:black;" id="save" value="<?php echo $order_id;?>">
                      <i class="fas fa-paper-plane"></i>Send
                    </button>
                  </div>
            
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>-->
      <div class="srch-table delivery-table mb-4">
          <div class="itemhdr delivery-div">
            <h5 class="itemtitle mb-0">Delivery Address</h5>
          </div>
          <ul class="addcont">
            <li>
              <b>Name:</b>
              <p><?php echo
                $delivery_address->fname." ".$delivery_address->lname;?></p>
            </li>
            <li>
              <b>Phone:</b>
              <p><?php echo $delivery_address->mobile_number;?></p>
            </li>
            <li>
              <b>Address:</b>
              <p><?php echo $delivery_address->street_address;?></p>
            </li>
            <!-- <li>
                    <b>Apt,Suit,Bldg,Gate code:</b>
                    <p>Makuza Plaza building, First floor</p> -->
          </li>
          <li>
            <b>City:</b>
            <p><?php echo $delivery_address->city;?></p>
          </li>
          <li>
            <b>State:</b>
            <p><?php echo $delivery_address->state;?></p>
          </li>
          <li>
            <b>Country:</b>
            <p><?php echo $delivery_address->country;?></p>
          </li>
          <li>
            <b>Pincode:</b>
            <p><?php echo $delivery_address->pin_code?></p>
          </li>
        </ul>
      </div>

      <div class="srch-table pickup-table mb-4">
        <div class="itemhdr delivery-div">
          <h5 class="itemtitle mb-0">Pickup Address</h5>
        </div>
        <ul class="addcont">
          <li>
            <b>Name:</b>
            <p><?php echo
              $pickup_address->fname." ".$pickup_address->lname;?></p>
          </li>
          <li>
            <b>Phone:</b>
            <p><?php echo $pickup_address->mobile_number;?></p>
          </li>
          <li>
            <b>Email:</b>
            <p><?php echo $pickup_address->email;?></p>
          </li>
          <li>
            <b>Address:</b>
            <p><?php echo $pickup_address->street_address ?></p>
          </li>
          <!-- <li>
                    <b>Apt,Suit,Bldg,Gate code:</b>
                    <p>Makuza Plaza building, First floor</p>
                  </li> -->
          <li>
            <b>City:</b>
            <p><?php echo $pickup_address->city;?></p>
          </li>
          <li>
            <b>State:</b>
            <p><?php echo $pickup_address->state;?></p>
          </li>
          <li>
            <b>Country:</b>
            <p><?php echo $pickup_address->country;?></p>
          </li>
          <li>
            <b>Pincode:</b>
            <p><?php echo $pickup_address->pin_code;?></p>
          </li>
        </ul>
      </div>
    </div> 


<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
 
<script src="https://cdn.datatables.net/1.10.8/js/jquery.dataTables.min.js" defer="defer"></script>
<!-- <script src="assets/resource/tiny_mce.js"></script> -->


 <script>
  $(document).ready(function(){
    var count = 0;
            $("#save").on("click", function(){
              count++;
              //alert(count);
                $value = $("#message").val();
                //alert($value)
                $message_type = $("#message_type").val();
                $from_id = $("#from_id").val();
                $order_id = $("#save").val();
                var dt = new Date();
                var time = dt.getHours() + ":" + dt.getMinutes() + ":" + dt.getSeconds();
                $msg = ' <li class="chatli myChat myChat1"><div class="chatrep">' + $message_type + '</div> <div class="chat-cont"><p>'+$value+'</p> <span class="reptxt">Replied By : You </span> <span class="chattime">'+time+'</span></div></li>';
                $("#counter").append($msg);
                $("#message").val('');
                $("#message_type").val();
                $('#from_id').val();
                $msg = '';
                
                // start ajax code
                $.ajax({
                    url: '<?php echo base_url().'Shopnship/international_insert_message'?>',
                    type: 'POST',
                    data: 'textarea='+$value+'&message_type='+$message_type+'&created_date='+time+'&order_id='+$order_id+'&from_id='+$from_id,
                    success: function(result){
                        $replay = ' <li class="chatli myChat myChat1"><div class="chatrep">' + $result + '</div><div class="chat-cont"><p>'+$result+'</p> <span class="reptxt">Replied By : You </span> <span class="chattime">'+$result.created_date +'</span></div></li>';
                        //$(".myChat1").html($replay);
                        $("#counter").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        //$(".myChat1").scrollTop($(".myChat")[0].scrollHeight);
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
} );

</script>