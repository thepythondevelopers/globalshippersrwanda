<div class="shopship-div shop_order_page py-5">
        <div class="container">
            <h1 class="mb-3">Order Details</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="javascript:void(0);"><i class="fa fa-home"></i></a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="<?php echo base_url('shopnship');?>">Consolidated Shipments</a>
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
                    <!-- <label>Search:<input type="search" class="form-control form-control-sm" placeholder="Search" aria-controls="dataTable" id="search_key"></label>
                    <div><button type="button"class="btn btn-info" id="searchBtn">Search</button></div> -->
                    
                </div>
                <!-- table start  -->
                <div class="table-responsive">
                    <table class="table newtable dataTable no-footer" id="table" role="grid" aria-describedby="dataTable_info">
                        <thead>
                            <tr role="row">
                                <th class="sorting_asc">Store Order Id</th>
                                <th class="sorting">Item Type</th>
                                <th class="sorting">Item Name</th>
                                <th class="sorting">Store</th>
                                <th class="sorting">Item Price</th>
                                <th class="sorting">Quantity</th>
                                <th class="sorting">Color</th>
                                <th class="sizecol sorting">Size</th>
                                <th class="sorting">Arrived Status</th>
                                <th class="sorting">Action</th>
                            </tr>
                        </thead>         
                     <tbody id ="listdata">
                            <!-- <tr role="row" class="odd">      
                                <td class="sorting_1">1950058990 </td>
                                <td class="">Other</td>
                                <td class="">Scriber7.1-2" Made Of Steel</td>
                                <td class="store">
                                    <span>Anjani Courier</span>
                                    <a class="storean" href="javascript:void(0)">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a class="storean1" href="javascript:void(0)">
                                        <i class="fa fa-eye-slash"></i>
                                    </a>
                                </td>
                                <td>8</td>
                                <td>250</td>
                                <td>NA</td>
                                <td class="sizecol">NA</td>
                                <td> Arrived</td>
                                <td>
                                    <button type="button" class="btn imgbtn">View Image</button>
                                    <ul class="docs-pictures clearfix images">
                                        <li>
                                            <img src="<?php ?>">
                                        </li>
                                    </ul>                                                                                                                                                                                       
                                </td>
                            </tr> -->


                        <?php //if(!empty('shopnship_item_details'))
                            //{
                            ?>
                            <?php foreach($item_records as $lists){
     
                                ?>
                                <tr>
                                    <td><?php echo $lists->order_id;?></td>
                                    <td><?php echo $lists->product_type;?></td>
                                    <td><?php echo $lists->product_name;?></td>
                                    <td><?php echo $lists->store;?></td>
                                    <td><?php echo $lists->total_amount;?></td>
                                    <td><?php echo $lists->quantity;?></td>
                                    <td><?php echo $lists->color;?></td>
                                    <td><?php echo $lists->size;?></td>
                                    <td></td>
                                    <td><a href="javascript:void(0);"> <i class="fa fa-edit"></i></a></td>
                                </tr>
                                <?php } ?>
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
                            <!-- <div class="dataTables_info" >Showing 1 to 4 of 4 entries</div> -->
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
                                    </li> -->
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
                            <table class="table newtable dataTable no-footer" id="dataTable" role="grid" aria-describedby="dataTable_info">
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
                                    <tr>
                                        <td>pi_3NcTJEI1eTE4YULd1...</td>

                                        <td>Paid</td>
                                        <td>Shipping Payment</td>
                                        <td>
                                            <a href="javascript:void(0);" target="_blank" class="btn btn-primary inbtn">Invoice</a>
                                        </td>
                                        <td>
                                            <a href="<?php echo base_url().'Shopnship/shopnshippdf/'.$lists->shopnship_id;?>">
                                                <i class="fa fa-download"></i>
                                            </a>
                                        </td>
                                        <td>SAS001</td>                                   
                                        <td>
                                            <a href="javascript:void(0);"> 
                                                <i class="align-middle mr-2 fas fa-fw fa-external-link-alt"></i>
                                            </a>
                                        </td>
                                    </tr>                                   
                                </tbody>
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
                                    <tr>
                                        <td>FedEx</td>
                                        <td>772979776640</td>         
                                        <td class="aligncenter">
                                            <a href="javascript:void(0);" target="_blank"> 
                                                <i class="align-middle mr-2 fas fa-fw fa-external-link-alt"></i>
                                            </a>
                                        </td>
                                        <td>-</td>  
                                    </tr>                                   
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
                                <p><?php

                                // echo "<pre>";
                                // echo($user_address);
                                // die;
                                echo $user_address->fname." ".$user_address->lname ;?></p>
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
                    
                </div>
                <div class="col-12 col-lg-6">
                    <div class="srch-table chat-section1">
                        <div class="itemhdr chatheader">
                            <h5 class="itemtitle mb-0">Messages</h5>                   
                        </div>
                        <ul class="chat-list" >
                        <?php //foreach($msg_data as $message){?>
                            <!-- <li class="chatli myChat">
                            
                                <div class="chatrep"><?php //echo $message->message_type;?></div>
                                <div class="chat-cont">
                                  
                                    <p><?php //echo $message->message;?></p>
                                    <span class="reptxt"><?php //echo "Reply by you"; ?></span>
                                    <span class="chattime"><?php //echo $message->created_date;?></span>
                                   
                                </div>
                              
                            </li>
                            <?php// }?> -->
                            <li class="chatli myChat myChat1">
                            </li>
                            <?php //foreach($msg as $message){?>
                            <!-- <li class="chatli yourChat">
                                <div class="chatrep"><?php //echo $message->message_type;?></div>
                                <div class="chat-cont">
                                     <a href="https://myxborder.com/uploads/image/zuPiR0vT2atCQDel.jpg" class="linkimg" target="_blank">zuPiR0vT2atCQDel.jpg</a>  -->
                                     <!-- <p><?php //echo $message->message;?></p>
                                    <span class="reptxt"><?php //echo "Reply by Admin"?></span>
                                    <span class="chattime"><?php //echo $message->created_date;?></span>
                                </div>  
                            </li>  -->
                            <li class="chatli yourChat yourChat1">
                            </li>
                            <?php// }?>
                            <!-- <li class="chatli myChat">
                                <div class="chatrep">Scriber7.1-2" Made Of Steel</div>
                                <div class="chat-cont">
                                    <p>ok its fine let its price continue to stay like that</p>
                                    <span class="reptxt">Reply By: You</span>
                                    <span class="chattime">2023-08-07 11:57:22</span>
                                </div>
                            </li> -->
                            <!-- <li class="chatli myChat">
                                <div class="chatrep">Scriber7.1-2" Made Of Steel</div>
                                <div class="chat-cont">
                                    <p>so when will you give me payment button to pay shipping cost</p>
                                    <span class="reptxt">Reply By: You</span>
                                    <span class="chattime">2023-08-07 11:57:44</span>
                                </div>
                            </li> -->
                            <!-- <li class="chatli yourChat">
                                <div class="chatrep">All</div>
                                <div class="chat-cont">
                                    <p>Payment sent</p>
                                    <span class="reptxt">Reply By: Admin</span>
                                    <span class="chattime">2023-08-07 12:37:20</span>
                                </div>
                            </li> -->
                        </ul>
                        <div class="chatinput-sec">
                            <form action ="<?php echo base_url('Shopnship/shopnship_insert_message')?>" method="post">
                            <select class="chatselect" name="message_type" id="message_type">
                                <option value="" selected="" >Select</option>
                                <option value="Scriber7.1-2 Made Of Steel">
                                    Scriber7.1-2" Made Of Steel
                                </option>
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
                                <button type="submit" name="submit" value="<?php echo $order_id;?>"id="save">
                                    <i class="fas fa-paper-plane" ></i>Send
                                </button>
                            </div>
                            </form>
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
                $message_type = $("#message_type").val();
                $order_id = $("#save").val();
                $from_id = $("#from_id").val();
                var dt = new Date();
                var time = dt.getHours() + ":" + dt.getMinutes() + ":" + dt.getSeconds();
                $msg = ' <li class="chatli myChat myChat1"><div class="chatrep">' + $message_type + '</div> <div class="chat-cont"><p>'+$value+'</p> <span class="reptxt">Replied By : You </span> <span class="chattime">'+time+'</span></div></li>';
                $(".myChat1").append($msg);
                $("#message").val('');
                $("#message_type").val();
                $msg = '';
                
                // start ajax code
                $.ajax({
                    url: '<?php echo base_url().'Shopnship/shopnship_insert_message'?>',
                    type: 'POST',
                    data: 'textarea='+$value+'&message_type='+$message_type+'&created_date='+time+'&order_id='+$order_id+'&from_id='+$from_id,
                    success: function(result){
                        $replay = ' <li class="chatli myChat myChat1"><div class="chatrep">' + $result + '</div><div class="chat-cont"><p>'+$result+'</p> <span class="reptxt">Replied By : You </span> <span class="chattime">'+$result.created_date +'</span></div></li>';
                        $(".myChat1").append($replay);
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
</script>   