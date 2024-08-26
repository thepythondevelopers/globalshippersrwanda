<script type="text/javascript" src="js/js/prototype.js"></script>
<script type="text/javascript" src="js/js/scriptaculous.js?load=effects,builder"></script>
<script type="text/javascript" src="js/js/lightbox.js"></script>
<link rel="stylesheet" href="css/css/lightbox.css" type="text/css" media="screen" />
<style>
  .wrappers {
    width: auto;
    height: auto;
    overflow-x: scroll;
    overflow-y: scroll;
  }

  .row>.column {
    padding: 0 8px;
  }

  .row:after {
    content: "";
    display: table;
    clear: both;
  }

  .column {
    /* float: left; */
    /* width: 100%;
  height:100%; */
    margin-left: 25rem;
    width: 100%;
  }

  .modal {
    display: none;
    position: fixed;
    /* z-index: 1; */
    padding-top: 100px;
    left: 0;
    top: 0;
    /* width: 100%;
  min-height: 100%; */
    overflow: auto;
    background-color: black;
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
  /* .demo {
  opacity: 0.6;
} */
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
          <!-- <h1>Assisted Item Details</h1> -->
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
          </div>
          <div class="card">
            <!-- <div class="card-header">
              <h3 class="card-title">Item Details</h3>
            </div> -->
            <form action="<?php echo base_url('assisted-update-order-status');?>" method="post">
            <input type="hidden" name ="id" value="<?php echo $userdetails->id;?>">
              <input type="hidden" name ="fname" value="<?php echo $userdetails->fname;?>">
              <input type="hidden" name ="lname" value="<?php echo $userdetails->lname;?>">
              <input type="hidden" name ="email" value="<?php echo $userdetails->email;?>">
              <input type="hidden" name ="phone" value="<?php echo $userdetails->phone;?>">
              <input type="hidden" name="adminemail" value="<?php echo $adminemail->email;?>">
              <input type="hidden" name="user_id" value="<?php print_r($item_records[0]->user_id); ?>">
              <button type="submit" class="float-right btn btn-dark" name="submit"
                value="<?php print_r($item_records[0]->assisted_id); ?>">Save</button>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>Item Type</th>
                      <th>Item Name</th>
                      <th>Online Store</th>
                      <th>Total Price</th>
                      <th>Quantity</th>
                      <th>color</th>
                      <th>Size</th>
                      <!-- <th>Image</th> -->
                      <th>Item Status</th>
                      <th>Select Status</th>
                      <th>Edit Item</th>
                      <!-- <th>Payment Status</th> -->
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    foreach($item_records as $item){ ?>
                    <tr>
                      <td>
                        <?php echo $item->item_type_name;?>
                      </td>
                      <td>
                        <?php echo $item->product_name;?>
                      </td>
                      <td>
                      <a href="<?php echo $item->store;?>" target="_blank"><?php echo $item->store;?></a>
                      </td>
                      <td>
                        <?php echo $item->total_amount;?>
                      </td>
                      <td>
                        <?php echo $item->quantity;?>
                      </td>
                      <td>
                        <?php echo $item->color;?>
                      </td>
                      <td>
                        <?php echo $item->size;?>
                      </td>
                      <td>
                        <?php echo ($item->order_status==1)?'Pending':(($item->order_status==2)?'Progress':(($item->order_status==3)?'Shipment':'Completed'));?>
                      </td>
                      <td>
    <input type="hidden" class="selected_item" name="id[]" value="<?php echo $item->id; ?>">
                        <select value="select" class="form-control" name="item_receive[]">
                          <option value="1">Pending</option>
                          <option value="2">Progress</option>
                          <option value="3">Shipment</option>
                          <option value="4">Completed</option>
                        </select>

                      </td>
                        <td><a href="<?php echo base_url('Admin/edit-buy-for-me/').$item->id;?>"><button type="button" class="btn btn-dark">Edit Item</button></a> </td>
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
            <div class="col-lg-6">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title"><b>Delivery Address</b></h5>
                  <ul class="delivery_address" style="margin-top: 10% !important;">
                    <li class="user_details">
                      <b>Name:</b>
                      <p>
                        <?php echo $user_address->fname.' '.$user_address->lname ;?>
                      </p>
                    </li>
                    <li class="user_details">
                      <b>Phone:</b>
                      <p>
                        <?php echo $user_address->phone_number ;?>
                      </p>
                    </li>
                    <li class="user_details">
                      <b>Address:</b>
                      <p>
                        <?php echo $user_address->street_address ;?>
                      </p>
                    </li>
                    <li class="user_details">
                      <b>Apt,Suit,Bldg,Gate code:</b>
                      <p>
                        <?php echo $user_address->gate_code ;?>
                      </p>
                    </li>
                    <li class="user_details">
                      <b>City:</b>
                      <p>
                        <?php echo $user_address->city ;?>
                      </p>
                    </li>
                    <li class="user_details"><b>State:</b>
                      <p>
                        <?php echo $user_address->state ;?>
                      </p>
                    </li>
                    <li class="user_details"><b>Country:</b>
                      <p>
                        <?php echo $user_address->country ;?>
                      </p>
                    </li>
                    <li class="user_details"><b>Pincode:</b>
                      <p>
                        <?php echo $user_address->pin_code ;?>
                      </p>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- </div> -->
            <!-- <div class="chat-admin"> -->
            <div class="col-lg-6">
            <div class="card">
            <div class="card-body">
              <h5 class="card-title"><b>Order Remark</b></h5>
              <div class="cardbox">
                  <table class="table">
                    <tbody>
                      <tr>
                        <td colspan="2">Remark:</td>
                        <td colspan="2"><?php echo $item->remark?></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
            </div>
          </div>
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
                      <div id="counter"></div>
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
                      <?php foreach($item_records as $item){ ?>
                      <option value="<?php echo $item->product_name;?>">
                        <?php echo $item->product_name;?>
                      </option>
                      <?php }?>
                      <option value="All">All</option>
                    </select>
                  </div>
                  <input type="hidden" name="to_id" value="<?php echo $user_address->user_id;?>" id="to_id">
                  <div class="input-group">
                    <input type="text" name="message" placeholder="Type Message ..." class="form-control" id="message">
                    <span class="input-group-append">
                      <button type="button" class="btn btn-dark" name="submit" id="send"
                        value="<?php echo $order_id;?>">Send</button>
                    </span>
                  </div>
                </div>
              </div>
            </div> -->
          </div>
      </section>
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <form action="<?php echo base_url('Admin/assisted-payment')?>" method="post">
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
                    <input type="text" class="form-control" name="payment" placeholder="Enter your payment id" required>
                  </div>
                      <div class="form-group">
                    <label>Invoice Amount*</label>
                    <input type="text" class="form-control" name="paymentAmt" placeholder="Enter your invoice amount" required>
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
                      <option value="assisted">Assisted</option>
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
                <button type="submit" class="btn btn-dark" name="submit"
                  value="<?php echo $order_id;?>">Save</button>
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
            <div class="col-md-6">
              <div class="payment-table">
                <div class="card wrappers">
                  <!-- <div class="card"> -->
                  <div class="card-header">
                    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#shipmentModal" style="margin-left:10px;">
                    <i class="fa fa-plus" aria-hidden="true"></i>
                    </button>
                    <h3 class="card-title">Shipment Details</h3>
                  </div>
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
                        </tr>

                      </thead>
                      <tbody>
                        <?php foreach($shipment_details as $shipment){?>
                        <tr>
                          <td>
                            <?php echo $shipment->shipping_carrier;?>
                          </td>
                          <td>
                            <?php echo $shipment->tracking_number;?>
                          </td>
                          <td class="text-center">
                            <a href="<?php echo $shipment->tracking_url?>" target="_blank">
                              <?php echo $shipment->tracking_url;?>
                              <i class="align-middle mr-2 fas fa-fw fa-external-link-alt"></i>
                            </a>
                          </td>
                          <td>
                            <?php echo $shipment->shipping;?>
                          </td>
                          <td><button class="btn btn-dark"><a
                                href="<?php echo base_url().'Admin/assisted-edit-shipment/'.$shipment->order_id.'/'.$shipment->id;?>"><i
                                  class="fa fa-edit"></i></a></button></td>
                          <td><button class="btn btn-dark"><a
                                href="<?php echo base_url().'Admin/assisted-delete-shipment/'.$shipment->order_id.'/'.$shipment->id;?>"><i
                                  class="fa fa-trash"></i></a></button></td>
                        </tr>
                        <?php }?>
                      </tbody>
                    </table>
                  </div>
                  <!-- </div> -->
                </div>
              </div>
            </div>

            <div class="col-lg-6 payment-table">
              <div class="card wrappers">
                <div class="card-header">
                  <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal" style="margin-left:10px;">
                  <i class="fa fa-plus"></i>
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
                      <?php foreach($pay_details as $pay) { ?>
                      <tr>
                      <td><a href="<?php echo ($pay->paymentmethod==1)?"https://buy.stripe.com/".$pay->payment_id:"https://www.paypal.com/".$pay->payment_id;?>"><?php echo ($pay->paymentmethod==1)?"https://buy.stripe.com/".$pay->payment_id:"https://www.paypal.com/".$pay->payment_id;?></a></td>
                          <td><?php echo ($pay->status==1)?'Pending':(($pay->status==2)?'Paid':'Rejected');?>
                        </td>
                        <td>
                          <?php echo $pay->type;?>
                        </td>
                        <td>
                          <a href="<?php echo base_url().'admin/assisted-invoice/'.$item->assisted_id.'/'.$pay->id;?>"
                            target="_blank" class="btn btn-dark inbtn">Invoice</a>
                        </td>
                        <td><a href="<?php echo base_url().'admin/assisted-pdf/'.$item->assisted_id.'/'.$pay->id;?>" target="_blank" class="btn btn-dark inbtn">
                        <i class="fa fa-download"></i></a></td>
                        <td><button class="btn btn-dark"><a
                              href="<?php echo base_url().'Admin/assisted-edit-payment/'.$pay->order_id.'/'.$pay->id;?>"><i
                                class="fa fa-edit"></i></a></button></td>
                        <td><button class="btn btn-dark"><a
                              href="<?php echo base_url().'Admin/assisted-delete-payment/'.$pay->order_id.'/'.$pay->id;?>"><i
                                class="fa fa-trash"></i></a></button></td>
                        <!-- <td><?php //echo $pay_details[0]->type;?></td>  -->
                      </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

          </div>
        </div>
       
      </section>
      <div class="modal fade" id="shipmentModal" tabindex="-1" role="dialog" aria-labelledby="shipmentModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <form action="<?php echo base_url('Admin/assisted-shipment')?>" method="post">
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
                    <input type="text" class="form-control" name="shipping_carrier" placeholder="Enter Shipping carrier"
                      require>
                  </div>
                  <div class="form-group">
                    <label>Tracking Number*</label>
                    <input type="text" class="form-control" name="tracking_number" placeholder="Enter tracking number"
                      require>
                  </div>
                  <div class="form-group">
                    <label>Tracking URL*</label>
                    <input type="text" class="form-control" name="tracking_url" placeholder="Enter tracking url"
                      require>
                  </div>
                  <div class="form-group">
                    <label>Shipping*</label>
                    <!-- <input type="text" class="form-control" name="shipping" placeholder="Enter shipping"> -->
                    <select class="form-control" name="shipping">
                      <!-- <option value="shopnship">Shopnship</option> -->
                      <option value="assisted">Assisted</option>
                      <!-- <option value="international">International</option> -->
                    </select>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-dark" name="submit" value="<?php echo $order_id?>">Save</button>
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
        <form action="<?php echo base_url('assisted-image-insert')?>" method="post" enctype="multipart/form-data">
        <div class="col-md-6 col-xs-12">
          <div class="input-images">
            <div class="image-uploader">
            <lable>Uplaod Image</lable>
              <input type="file" id="image" class="image" name="image1[]" multiple="multiple"
                accet="image/jpg,image/png,image/jpeg,application/pdf">
              <div class="uploaded">

              </div>
              <div class="upload-text">
                <!-- <i class="bi bi-cloud-arrow-up-fill"></i> -->
                <!-- <span>Click to browse (Total 10 files and 10 mb of size allowed).</span> -->
              </div>
            </div>
          </div>
        </div>
          <button type="submit" class="btn btn-dark" name="submit"value="<?php echo $order_id ?>">Submit</button>
        </form>
      </div>
    </div>
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
        url: '<?php echo base_url().'Admin/assisted-insert-message'?>',
        type: 'POST',
        data: 'message=' + $value + '&message_type=' + $message_type + '&created_date=' + time + '&order_id=' + $order_id + '&to_id=' + $to_id,
        success: function (result) {
          // alert(result);
          $replay = '  <li class="direct-chat-text float-left mychat myChat1"><div class="chatrep">' + $result + '</div><div class="chat-cont"><p>' + $result + '</p> <span class="reptxt">Replied By : Admin </span> <span class="chattime">' + $result.created_date + '</span></div></li>';
          // $(".myChat1").append($replay);
          $("#counter").append($replay);
          $(".myChat1").scrollTop($(".mychat")[0].scrollHeight);
        }
                });
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
    //   var dots = document.getElementsByClassName("demo");
    //   var captionText = document.getElementById("caption");
    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
    captionText.innerHTML = dots[slideIndex - 1].alt;
  }
</script>