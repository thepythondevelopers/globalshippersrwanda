<div class="notification-div">
    <div class="container">
        <div class="d-flex justify-content-between align-items-start pt-5">
            <h1 class="mb-3">Notifications</h1>
            <a onclick="return confirm('Are you sure?')" href="<?php echo base_url().'Home/delete_all_notification/'?>"
                class="btn btn-danger btn-sm">Clear All</a>
        </div>
        <div class="row">
            <div class="col-md-12 col-xl-12">
                <div class="list-group">
                    <?php foreach($message as $msg) {
                
                      $shipment = $msg->order_type;
                        switch($shipment){
                        case 1:
                            $url= 'users/shopnship-order-details/'.$msg->order_id.'/'.$msg->id;
                           
                            break;
                        case 2:
                            $url= 'users/assisted-order-details/'.$msg->order_id.'/'.$msg->id;
                            break;
                        case 3:
                            $url= 'users/international-order-details/'.$msg->order_id.'/'.$msg->id;
                            break;
                        }
                        ?>

                    <div class="activeNotification list-group-item">
                        <div class="row no-gutters align-items-center">
                            <div class="col-1">
                                <i class="fas fa-bell"></i>
                            </div>
                            <div class="col-10">
                                <input type="hidden" name="noti_id" value="<?php echo $msg->id;?>">
                                <a href="<?php echo base_url().$url?>" id="status">
                                    <div class="text-muted small mt-1">
                                        <?php echo($shipment==1)?'Consolidation shipments':(($shipment==2)?'Buy For Me':'Pickup Shipments');echo ' '.$msg->order_id;?>
                                    </div>
                                    <div class="text-dark">
                                        <?php echo "Your Order ".' ';echo ($msg->content==2)?'in progress':(($msg->content==3)?'in shipment':'delivered');?>
                                    </div>
                                    <div class="text-muted small mt-1"><?php 
                                   //$date = print_r(strtotime($msg->created_time)) 
                                            $convertdate = date("d M y H:i A",strtotime($msg->created_time));
                                        echo $convertdate;?>
                                        </div>
                                </a>
                            </div>
                            <div class="col-1">
                                <a onclick="return confirm('Are you sure?')"
                                    href="<?php echo base_url().'Home/delete_notification/'.$msg->order_id;?>"
                                    class="notiremove">
                                    <i class="fa fa-remove"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <!-- <div class="activeNotification list-group-item">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-1">
                                        <i class="fas fa-bell"></i>
                                    </div>
                                    <div class="col-10">
                                        <a href="javascript:void(0);">
                                            <div class="text-dark">Order completed SNS2152</div>
                                            <div class="text-muted small mt-1">MyXBorder team has completed your order SNS2152</div>
                                            <div class="text-muted small mt-1">21-Aug-23</div>
                                        </a>
                                    </div>
                                    <div class="col-1">
                                        <a onclick="return confirm('Are you sure?')" href="javascript:void(0);" class="notiremove">
                                            <i class="fa fa-remove"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>  -->
                    <!-- <div class="list-group-item">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-1">
                                        <i class="fas fa-bell"></i>
                                    </div>
                                    <div class="col-10">
                                        <a href="javascript:void(0);">
                                            <div class="text-dark">Shipping Create</div>
                                            <div class="text-muted small mt-1">Congratulation! Order has been shipped through FedEx SNS2152</div>
                                            <div class="text-muted small mt-1">08-Aug-23</div>
                                        </a>
                                    </div>
                                    <div class="col-1">
                                        <a onclick="return confirm('Are you sure?')" href="javascript:void(0);" class="notiremove">
                                            <i class="fa fa-remove"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>    -->
                    <!-- <div class="list-group-item">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-1">
                                        <i class="fas fa-bell"></i>
                                    </div>
                                    <div class="col-10">
                                        <a href="javascript:void(0);">
                                            <div class="text-dark">New Payment added</div>
                                            <div class="text-muted small mt-1">Payment request for shippment SNS2152 please click here to make payment</div>
                                            <div class="text-muted small mt-1">07-Aug-23</div>
                                        </a>
                                    </div>
                                    <div class="col-1">
                                        <a onclick="return confirm('Are you sure?')" href="javascript:void(0);" class="notiremove">
                                            <i class="fa fa-remove"></i>
                                        </a>
                                    </div>
                                </div>
                            </div> -->
                    <!-- <div class=" activeNotification  list-group-item">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-1">
                                        <i class="fas fa-bell"></i>
                                    </div>
                                    <div class="col-10">
                                        <a href="javascript:void(0);">
                                            <div class="text-dark">New Payment added</div>
                                            <div class="text-muted small mt-1">Payment request for shippment SNS2152 please click here to make payment</div>
                                            <div class="text-muted small mt-1">07-Aug-23</div>
                                        </a>
                                    </div>
                                    <div class="col-1">
                                        <a onclick="return confirm('Are you sure?')" href="javascript:void(0);" class="notiremove">
                                            <i class="fa fa-remove"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>  -->
                    <!-- <div class="list-group-item">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-1">
                                        <i class="fas fa-bell"></i>
                                    </div>
                                    <div class="col-10">
                                        <a href="javascript:void(0);">
                                            <div class="text-dark">New Order added</div>
                                            <div class="text-muted small mt-1">MyXBorder Team has created a new shop n ship order : SNS2152</div>
                                            <div class="text-muted small mt-1">05-Aug-23</div>
                                        </a>
                                    </div>
                                    <div class="col-1">
                                        <a onclick="return confirm('Are you sure?')" href="javascript:void(0);" class="notiremove">
                                            <i class="fa fa-remove"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>  -->
                    <!-- <div class=" activeNotification  list-group-item">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-1">
                                        <i class="fas fa-bell"></i>
                                    </div> -->
                    <!-- <div class="col-10">
                                        <a href="javascript:void(0);">
                                            <div class="text-dark">Order completed AST1735</div>
                                            <div class="text-muted small mt-1">MyXBorder team has completed your order AST1735</div>
                                            <div class="text-muted small mt-1">05-May-23</div>
                                        </a>
                                    </div> -->
                    <!-- <div class="col-1">
                                        <a onclick="return confirm('Are you sure?')" href="javascript:void(0);" class="notiremove">
                                            <i class="fa fa-remove"></i>
                                        </a>
                                    </div> -->
                    <!-- </div>
                            </div>   -->

                </div>
            </div>
            <nav>
                        <ul class="pagination mb-3">
                            <!-- <li class="page-item disabled" aria-disabled="true" aria-label="« Previous">
                                <span class="page-link" aria-hidden="true">‹</span>
                            </li>
                            <li class="page-item active" aria-current="page">
                                <span class="page-link">1</span>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0);">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0);">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0);" rel="next" aria-label="Next »">›</a>
                            </li> -->
                            <?php //echo $links; ?>
                        </ul>
                    </nav>
                    <p><?php// echo $links; ?></p>
        </div>
        
    </div>
</div>
<script>
     $('#status').click(function() {
    var noti_id = $('input[name="noti_id"]').val();
   // alert(noti_id);
    var url = "<?php echo base_url().'Home/notifications'?>";
   //alert(url);
    $.ajax({
        url:  url,
        type: 'GET',
        data: {'id': $noti_id},
        dataType: 'JSON',
        success: function(data) {    

        }
    });
});

</script>