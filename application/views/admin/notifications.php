<style>
    
.notification-div .list-group {
    margin-bottom: 10px;
    background:#ffff;
}
.list-group{
    background:#ffff;
}
.list-group-item:first-child {
    border-top-left-radius: 0.25rem;
    border-top-right-radius: 0.25rem;
    
}
.notification-div .list-group-item .notiremove i {
    color: #fff;
    font-size: 15px;
    padding-left: 0;
}
a {
    text-decoration: none;
}
.activeNotification {
    background-color: #f7f2f2;
}
.notiremove {
    border-radius: 50%;
    background: #000;
    float: right;
    padding: 0.15rem 0.5rem;
    font-size: .75rem;
    height: 25px;
    width: 25px;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all .3s ease-in-out;
}
.notification-div .list-group-item i {
    font-size: 28px;
    margin: auto;
    display: block;
    padding-left: 20px;
    color: #0c0c0c;
}
.row {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
}

.list-group-item {
    position: relative;
    display: block;
    padding: 0.75rem 1.25rem;
    margin-bottom: -1px;
    background-color: #fff;
    border: 1px solid rgba(0,0,0,.125);
    background-color: #f7f2f2;
}

</style>
<div class="content-wrapper">
            <div class="content-header">
            <div class="notification-div">
            <div class="container">
                <div class="d-flex justify-content-between align-items-start pt-5">
                    <h1 class="mb-3">Notifications</h1>
                    <a onclick="return confirm('Are you sure?')" href="<?php echo base_url().'Admin/Admin/delete_all_notification/'?>" class="btn btn-dark btn-sm">Clear All</a>
                </div>
                <div class="row">
                    <div class="col-md-12 col-xl-12">
                        <div class="list-group">
                            <?php 
                               
                                foreach($message as $msg) {
                                $order_message = $msg->content;
                                $shipment = $msg->order_type;
                                switch($shipment){
                                case 1:

                                    $url= 'shopnship-order-details/'.$msg->order_id.'/'.$msg->id;
                                    break;
                                case 2:
                                    $url= 'assisted-order-details/'.$msg->order_id.'/'.$msg->id;
                                    break;
                                case 3:
                                    $url= 'international-order-details/'.$msg->order_id.'/'.$msg->id;
                                    break;
                               
                                }
                                ?>
                            <div class="activeNotification list-group-item">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-1">
                                        <i class="fas fa-bell"></i>
                                    </div>
                                    <div class="col-10">
                                        <a href="<?php echo base_url().$url;  ?>">
                                            <div class="text-muted small mt-1"><?php echo $order_message.' '.$msg->order_id;?></div>
                                            <div class="text-dark"><?php echo $order_message.' ';echo($shipment==1)?'Consolidation shipments':(($shipment==2)?'Buy For Me':'Pickup Shipments');?></div>
                                            <div class="text-muted small mt-1"><?php 
                                            $convertdate = date("d M y H:i A",strtotime($msg->created_time));
                                        echo $convertdate;?>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="col-1"> 
                                        <a onclick="return confirm('Are you sure?')" href="<?php echo base_url().'Admin/Admin/delete_notification/'.$msg->order_id;?>" class="notiremove">
                                            <i class="fa fa-remove"></i>
                                        </a>
                                    </div>
                                </div>
                            </div> 
                            <?php  } ?>
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
                    <!-- <nav>
                        <ul class="pagination mb-3">
                            <li class="page-item disabled" aria-disabled="true" aria-label="« Previous">
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
                            </li>
                        </ul>
                    </nav> -->
                    <p><?php //echo $links; ?></p>
                </div>
            </div> 
        </div>
            </div>
        </div>