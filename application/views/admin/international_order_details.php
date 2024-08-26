<style>
.wrappers{
    width:auto;
    height: auto;
    overflow-x: scroll;
    overflow-y: scroll;
  }
  .btn a i{
  color:white;
}
.text-center a{
color:black;
}
tr td a{
  color:black;
}
.paginate_button {
   /* border: 2px solid rgb(190, 190, 199);*/
    padding: 5px;
    margin: 2px;
    color: #080808;
}
.page-item.active .page-link {
    z-index: 3;
    color: #fff;
    background-color: #060606;
    border-color: #0c0c0c;
}
.buttons-pdf {
  background: black;
}
 .buttons-print{
  background: black;
 }
 table.dataTable.dtr-inline.collapsed>tbody>tr.parent>td.dtr-control:before, table.dataTable.dtr-inline.collapsed>tbody>tr.parent>th.dtr-control:before {
    content: "-";
    background-color: #000;
}

table.dataTable.dtr-inline.collapsed>tbody>tr>td.dtr-control:before, table.dataTable.dtr-inline.collapsed>tbody>tr>th.dtr-control:before {
    top: 50%;
    left: 5px;
    height: 1em;
    width: 1em;
    margin-top: -9px;
    display: block;
    position: absolute;
    color: white;
    border: .15em solid white;
    border-radius: 1em;
    box-shadow: 0 0 .2em #444;
    box-sizing: content-box;
    text-align: center;
    text-indent: 0 !important;
    font-family: "Courier New", Courier, monospace;
    line-height: 1em;
    content: "+";
    background-color: #000;
}
</style>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Order Details</h1>
        </div>
        <div class="col-sm-6">
          <!-- <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">DataTables</li>
                </ol> -->
        </div>
      </div>
    </div><!-- /.container-fluid -->
        <?php if ($this->session->flashdata('msg')) { ?>

        <div class="alert alert-success">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
            <strong><?php echo $this->session->flashdata('msg'); ?></strong>
        </div>

<?php } ?>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">

            <!-- /.card-header -->

            <!-- /.card-body -->
          </div>
          <!-- /.card -->

          <div class="card">
            <!-- <div class="card-header">
              <h3 class="card-title">Item Details</h3>
            </div> -->
            <form action="<?php echo base_url('international-update-order-status');?>" method="post">
            <input type="hidden" name ="id" value="<?php echo $userdetails->id;?>">
              <input type="hidden" name ="fname" value="<?php echo $userdetails->fname;?>">
              <input type="hidden" name ="lname" value="<?php echo $userdetails->lname;?>">
              <input type="hidden" name ="email" value="<?php echo $userdetails->email;?>">
              <input type="hidden" name ="phone" value="<?php echo $userdetails->phone;?>">
              <input type="hidden" name="adminemail" value="<?php echo $adminemail->email;?>">
            <input type="hidden" name="user_id" value="<?php print_r($item_records[0]->user_id); ?>">
            <button type="submit" class="float-right btn btn-dark"name="submit" value="<?php print_r($item_records[0]->international_id); ?>">Save</button>
           
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Item Type</th>
                    <th>Item Name</th>
                    <th>Item Price</th>
                    <th>Quantity</th>
                    <th>Item Status</th>
                    <th>Select Status</th>
                    <th>Update Item</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($item_records as $item){?>
                  <tr>
                    <td>
                      <?php echo $item->item_type_name;?>
                    </td>
                    <td>
                      <?php echo $item->product_name;?>
                    </td>
                    <td>
                      <?php echo $item->total_amount;?>
                    </td>
                    <td>
                      <?php echo $item->quantity;?>
                    </td>
                    <td><?php echo ($item->order_status==1)?'Pending':(($item->order_status==2)?'Progress':(($item->order_status==3)?'Shipment':'Completed'));?></td>
                    <td>
                    <input type="hidden"class="selected_item" name="id[]" value="<?php echo $item->id; ?>">

                          <select value="select" class="form-control" name="item_receive[]">
                            <option value="1">Pending</option>
                            <option value="2">Progress</option>
                            <option value="3">Shipment</option>
                            <option value="4">Completed</option>
                          </select>
                  </td>
                   <td><a href="<?php echo base_url('pickup-shipments/').$item->order_id;?>"><button type="button" class="btn btn-dark">Update Item</button></a> </td>
                  </tr>
                  <?php } ?>
                  
                 
                </tbody>
              </table>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="container">
    <div class="row">
  <section class="content-payment">
    <div class="container">
      <div class="row">
        <!-- <div class="col-md-6"> -->
        <div class="col-lg-6 payment-table">
          <div class="card wrappers">
            <div class="card-header">
            <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal" style="margin-left:10px;">
            <i class="fa fa-plus" aria-hidden="true"></i>
                  </button>
              <h3 class="card-title">Payment Details</h3>
            </div>
            <div class="card-body">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Payment Id</th>
                    <th>Status</th>
                    <th>Type</th>
                    <th>Invoice</th>
                      <th>Pdf</th>
                    <th>Update</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    //   echo '<pre>';
                    // print_r($pay_details);
                    // die;
                  foreach($pay_details as $pay){?>
                  <tr> 
                  <td><a href="<?php echo ($pay->paymentmethod==1)?"https://buy.stripe.com/".$pay->payment_id:"https://www.paypal.com/".$pay->payment_id;?>"><?php echo ($pay->paymentmethod==1)?"https://buy.stripe.com/".$pay->payment_id:"https://www.paypal.com/".$pay->payment_id;?></a></td>
                    <td><?php echo ($pay->status==1)?'Pending':(($pay->status==2)?'Paid':'Rejected');?></td>
                    <td><?php echo $pay->type;?></td>
                    <td>
                          <a href="<?php echo base_url().'Admin/Admin/international_invoice/'.$item->international_id.'/'.$pay->id;?>" target="_blank" class="btn btn-dark inbtn">Invoice</a>
                        </td>
                        <td><a href="<?php echo base_url().'Admin/Admin/international_pdf/'.$item->international_id.'/'.$pay->id;?>" target="_blank" class="btn btn-dark inbtn">
                        <i class="fa fa-download"></i></a>
                      </td>
                        <td><button class="btn btn-dark"><a href="<?php echo base_url().'Admin/international-edit-payment/'.$pay->order_id.'/'.$pay->id;?>"><i class="fa fa-edit"></i></a></button></td>
                        <td><button class="btn btn-dark"><a href="<?php echo base_url().'Admin/international-delete-payment/'.$pay->order_id.'/'.$pay->id;?>"><i class="fa fa-trash"></i></a></button></td>
                  </tr>
                  <?php }?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!-- </div> -->
        <!-- <div class="chat-admin"> -->
        <!-- <div class="col-md-6">
          <div class="card  card-outline direct-chat direct-chat-success">
            <div class="card-header">
              <h3 class="card-title">Messages</h3>
            </div>
            <div class="card-body">
              <div class="direct-chat-messages left">
                <ul class="direct-chat-msg left">
                  <?php foreach($msg as $message){
                                    if($message->send_by_admin == 1){
                                ?>
                  <li class="direct-chat-text float-right mychat myChat1">
                    <div class="chatrep">
                      <?php echo $message->message_type;?>
                    </div>
                    <div class="chat-cont">
                      <p>
                        <?php echo $message->message;?>
                      </p>
                      <span class="reptxt">
                        <?php echo "Reply By: Admin";?>
                      </span>
                      <span class="chattime">
                        <?php echo $message->created_date?>
                      </span>
                      <span id="chatview">Seen</span>
                    </div>
                  </li>
                  <?php }
                                  else
                                  {?>
                  <li class="direct-chat-text float-left mychat myChat1" style="background:skyblue;">
                    <div class="chatrep">
                      <?php echo $message->message_type;?>
                    </div>
                    <div class="chat-cont">
                      <p>
                        <?php echo $message->message;?>
                      </p>
                      <span class="reptxt">
                        <?php echo "Reply By: You";?>
                      </span>
                      <span class="chattime">
                        <?php echo $message->created_date?>
                      </span>
                      <span id="chatview">Seen</span>
                    </div>
                  </li>
                  <div id="counter"></div>
                  <?php }
                                 }?>
                </ul>
              </div>
            </div>
            <div class="card-footer">
              <div class="input-group" class="mb-3">
                <select class="form-control chatselect" name="message_type" id="message_type">
                  <option value="" selected="">Select</option>
                  <?php foreach($item_records as $item){?>
                  <option value="<?php echo $item->product_name?>"><?php echo $item->product_name;?></option>
                  <?php }?>
                  <option value="All">All</option>
                </select>
              </div>
              <input type="hidden" name="to_id" value="<?php echo $delivery_address->user_id;?>" id="to_id">
              <div class="input-group">
                <input type="text" name="message" placeholder="Type Message ..." class="form-control" id="message">
                <span class="input-group-append">
                  <button type="button" class="btn btn-dark" name="submit" id="send"
                    value="<?php echo $item->international_id;?>">Send</button>
                </span>
              </div>
            </div>
          </div>
        </div> -->
        <div class="col-md-6">
        <div class="itemhdr delivery-div">
                  <h5 class="itemtitle mb-0">Order Documents</h5>
                </div>
                <a class="imagename" href="<?php echo base_url().$pickup_address->image_path1?>" target="_blank"
                  style="color:#000"><?php echo $pickup_address->image_path1?></a
                >
                <a class="imagename" href="<?php echo base_url().$pickup_address->image_path2?>" target="_blank"
                style="color:#000"><?php echo $pickup_address->image_path2?></a
                >
      </div>
        </div>
        
      </div>
  </section>
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <form action="<?php echo base_url('Admin/international-payment')?>" method="post">
            <input type="hidden" name ="id" value="<?php echo $userdetails->id;?>">
              <input type="hidden" name ="fname" value="<?php echo $userdetails->fname;?>">
              <input type="hidden" name ="lname" value="<?php echo $userdetails->lname;?>">
              <input type="hidden" name ="email" value="<?php echo $userdetails->email;?>">
              <input type="hidden" name ="phone" value="<?php echo $userdetails->phone;?>">
              <input type="hidden" name="adminemail" value="<?php echo $adminemail->email;?>">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Enter Payment Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
              </div>
              <div class="modal-body">
                <div class="row">
                  <div class="form-group">
                    <label>Payment Id*</label>
                    <input type="text" class="form-control" name="payment" placeholder="Enter your payment id">
                  </div> 
                  <div class="form-group">
                    <label>Invoice Amount*</label>
                    <input type="text" class="form-control" name="invoiceAmt" placeholder="Enter your Invoice Amount">
                  </div>
                  <div class="form-group">
                    <label>Select Payment Method </label>
                    <select class="form-control" name="paymentmethod">
                        <option value="1">Stripe</option>
                        <option value="2">Paypal</option>
                  </select>
                  </div>
                  <div class="form-group">
                    <label>Shipment Type*</label>
                    <select class="form-control" name="type">
                        <option value="international">International</option>
                  </select>
                  </div>
                  <div class="form-group">
                    <label>Status*</label>
                    <select value="select" class="form-control" name="status">
                            <option value="1">Pending</option>
                            <option value="2">Paid</option>
                            <option value="3">Rejected</option>
                          </select>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-dark" name="submit"value="<?php echo $order_id?>">Save</button>
              </div>
            </form>
          </div>
        </div>
      </div>
</div>
</div>
  <div class="container">
    <div class="row">
    <section class="content-payment">
    <div class="container">
      <div class="row">
        <!-- <div class="col-md-2"></div> -->
        <!-- <div class="col-md-6"> -->
          <div class="payment-table col-md-6" >
            <div class="card wrappers">
              <div class="card-header">
              <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#shipmentModal" style="margin-left:10px;">
              <i class="fa fa-plus" aria-hidden="true"></i>
                  </button>
                <h3 class="card-title">Shipment Details</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Shipping Carrier</th>
                      <th>Tracking Number</th>
                      <th>Tracking URL</th>
                      <th>Shipping</th>
                      <th>Update</th>
                      <th>Delete</th>
                      <!-- <th>Pdf</th> -->
                    </tr>
                  </thead>
                  <tbody>
                    <?php 

                    foreach($shipment_details as $shipment){?>
                    <tr>
                    <td><?php echo $shipment->shipping_carrier;?></td>
                        <td><?php echo $shipment->tracking_number;?></td>
                       <td><a href="<?php echo $shipment->tracking_url?>" target="_blank"> 
                            <?php echo $shipment->tracking_url;?>
                            <i class="align-middle mr-2 fas fa-fw fa-external-link-alt"></i>
                          </a>
                        </td> 
                        <td><?php echo $shipment->shipping;?></td>
                        <td><button class="btn btn-dark"><a href="<?php echo base_url().'Admin/international-edit-shipment/'.$shipment->order_id.'/'.$shipment->id;?>"><i class="fa fa-edit"></i></a></button></td>
                        <td><button class="btn btn-dark"><a href="<?php echo base_url().'Admin/international-delete-shipment/'.$shipment->order_id.'/'.$shipment->id;?>"><i class="fa fa-trash"></i></a></button></td>
                      <!-- <td></td> -->
                    </tr>
                    <?php }?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card">
            <div class="card-body">
              <h5 class="card-title"><b>Order Details</b></h5>
              <div class="cardbox">
                  <table class="table">
                    <tbody>
                      <tr>
                        <td colspan="2">Order ID:</td>
                        <td colspan="2"><?php echo $item->international_id;?></td>
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
                        <td colspan="2"><?php echo $item_records[0]->height;?></td>
                      </tr>
                      <tr>
                        <td colspan="2">Width:</td>
                        <td colspan="2"><?php echo $item_records[0]->width;?></td>
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
          </div>
        </div>
        <!-- </div> -->
      </div>
    </div>
  </section>
    <div class="modal fade" id="shipmentModal" tabindex="-1" role="dialog" aria-labelledby="shipmentModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <form action="<?php echo base_url('Admin/international-shipment')?>" method="post">
            <input type="hidden" name ="id" value="<?php echo $userdetails->id;?>">
              <input type="hidden" name ="fname" value="<?php echo $userdetails->fname;?>">
              <input type="hidden" name ="lname" value="<?php echo $userdetails->lname;?>">
              <input type="hidden" name ="email" value="<?php echo $userdetails->email;?>">
              <input type="hidden" name ="phone" value="<?php echo $userdetails->phone;?>">
              <input type="hidden" name="adminemail" value="<?php echo $adminemail->email;?>">
              <div class="modal-header">
                <h5 class="modal-title" id="shipmentModal">Enter Shipment Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
              </div>
              <div class="modal-body">
                <div class="row">
                  <div class="form-group">
                    <label>Shipping Carrier*</label>
                    <input type="text" class="form-control" name="shipping_carrier"
                      placeholder="Enter yShipping carrier">
                  </div>
                  <div class="form-group">
                    <label>Tracking Number*</label>
                    <input type="text" class="form-control" name="tracking_number" placeholder="Enter tracking number">
                  </div>
                  <div class="form-group">
                    <label>Tracking URL*</label>
                    <input type="text" class="form-control" name="tracking_url" placeholder="Enter tracking url">
                  </div>
                  <div class="form-group">
                    <label>Shipping*</label>
                    <select class="form-control" name="shipping">
                      <option value="international">International</option>
                </select>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-dark"name="submit" value="<?php echo $order_id;?>">Save</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
 
  <div class="content">
    <div class="container">
      <div class="row">
        <!-- <div class="col-lg-2"></div> -->
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title"><b>Delivery Address</b></h5>
              <ul class="delivery_address" style="margin-top: 10% !important;">
                <li class="user_details">
                  <b>Name:</b>
                  <p>
                    <?php echo $delivery_address->fname." ".$delivery_address->lname;?>
                  </p>
                </li>
                <li class="user_details">
                  <b>Phone:</b>
                  <p>
                    <?php echo $delivery_address->mobile_number;?>
                  </p>
                </li>
                <li class="user_details">
                  <b>Address:</b>
                  <p>
                    <?php echo $delivery_address->street_address;?>
                  </p>
                </li>
                </li>
                <li class="user_details">
                  <b>City:</b>
                  <p>
                    <?php echo $delivery_address->city;?>
                  </p>
                </li>
                <li class="user_details">
                  <b>State:</b>
                  <p>
                    <?php echo $delivery_address->state;?>
                  </p>
                </li>
                <li class="user_details">
                  <b>Country:</b>
                  <p>
                    <?php echo $delivery_address->country;?>
                  </p>
                </li>
                <li class="user_details">
                  <b>Pincode:</b>
                  <p>
                    <?php echo $delivery_address->pin_code?>
                  </p>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title"><b>Pickup Address</b></h5>
              <ul class="delivery_address" style="margin-top: 10% !important;">
                <li class="user_details">
                  <b>Name:</b>
                  <p>
                    <?php echo $pickup_address->fname." ".$pickup_address->lname;?>
                  </p>
                </li>
                <li class="user_details">
                  <b>Phone:</b>
                  <p>
                    <?php echo $pickup_address->mobile_number;?>
                  </p>
                </li>
                <li class="user_details">
                  <b>Address:</b>
                  <p>
                    <?php echo $pickup_address->street_address;?>
                  </p>
                </li>
                </li>
                <li class="user_details">
                  <b>City:</b>
                  <p>
                    <?php echo $pickup_address->city;?>
                  </p>
                </li>
                <li class="user_details">
                  <b>State:</b>
                  <p>
                    <?php echo $pickup_address->state;?>
                  </p>
                </li>
                <li class="user_details">
                  <b>Country:</b>
                  <p>
                    <?php echo $pickup_address->country;?>
                  </p>
                </li>
                <li class="user_details">
                  <b>Pincode:</b>
                  <p>
                    <?php echo $pickup_address->pin_code?>
                  </p>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="content">
    <div class="container">
      <div class="row">
      
      </div>
    </div>
  </div>
</div>
</div>
  </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function () {
        $("#send").on("click", function () {
          $value = $("#message").val();
          $message_type = $("#message_type").val();
          $to_id = $("#to_id").val();
          //alert($to_id);
          $order_id = $("#send").val();
          var dt = new Date();
          var time = dt.getHours() + ":" + dt.getMinutes() + ":" + dt.getSeconds();
          $msg = '  <li class="direct-chat-text float-left mychat myChat1"> <div class="chatrep">' + $message_type + '</div> <div class="chat-cont"><p>' + $value + '</p> <span class="reptxt">Replied By : Admin </span> <span class="chattime">' + time + '</span></div></li>';
         // $(".myChat1").append($msg);
         $("#counter").append($msg);
          $("#message").val('');
          $("#message_type").val();
          $("#to_id").val();
          $msg = '';

          $.ajax({
            url: '<?php echo base_url().'Admin/international-insert-message'?>',
            type: 'POST',
            data: 'message=' + $value + '&message_type=' + $message_type + '&created_date=' + time + '&order_id=' + $order_id + '&to_id=' + $to_id,
            success: function (result) {
              $replay = '<li class="direct-chat-text float-left mychat myChat1"><div class="chatrep">' + $result + '</div><div class="chat-cont"><p>' + $result + '</p> <span class="reptxt">Replied By : Admin </span> <span class="chattime">' + $result.created_date + '</span></div></li>';
             // $(".myChat1").append($replay);
             $("#counter").append($replay);
              //$(".myChat1").scrollTop($(".mychat")[0].scrollHeight);
            }
                });
      });  
        });



        
    </script>