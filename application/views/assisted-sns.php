<style>
    /* .flex-fill .active{
        border-top:4px solid red;
    }   */
    /* .scardboxes .flex-fill .active{
        border-top:4px solid red;
    } */
</style>
<div class="shopship-div assisted-div py-5">
            <div class="container">
                <h1 class="mb-3">Buy For Me</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="<?php echo base_url();?>"><i class="fa fa-home"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Buy For Me</li>
                    </ol>
                </nav>
                <div>
                    <?php if($this->session->flashdata('message'))
                    {
                        echo "<div class = 'alert alert-success'>".$this->session->flashdata('message')."</div>";
                    }
                    ?>
                  
                </div>
               
                <a class="btn btn-pill btn-primary" href="<?php echo base_url('assisted-create-order');?>">
                    <i class="fa fa-plus"></i> Create Order
                </a>
                <div class="row scardboxes">
                    <div class="col-12 col-md-6 col-xl d-flex">
                        <div class="card flex-fill">
                            <a href="<?php echo base_url('assisted-sns');?>" class="active ">
                                <div class="card-body py-4">
                                    <div class="d-flex justify-content-between">
                                        <h4 class="mb-2">All Orders</h4>
                                        <div class="success"><?php print_r($assis_order_count[0]->order_count);?></div>
                                    </div>
                                    <div class="mb-1">
                                        <strong>
                                            No. of Orders
                                        </strong> 
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl d-flex">
                        <div class="card flex-fill">
                            <a href="<?php echo base_url().'assisted-sns/?order-status=1'?>" class="card-body py-4">
                                <div class="d-flex justify-content-between">
                                    <h4 class="mb-2">Order in progress</h4>
                                    <div class="float-right text-dark"><?php print_r($progess_status[0]->status);?></div>
                                </div>
                                <div class="mb-1">
                                    <strong>
                                        No. of Orders
                                    </strong> 
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl d-flex">
                        <div class="card flex-fill ">
                            <a href="<?php echo base_url().'assisted-sns/?order-status=2'?>">
                                <div class="card-body py-4">
                                    <div class="d-flex justify-content-between">
                                        <h4 class="mb-2">Orders in shipment</h4>
                                        <div class="success"><?php print_r($shipment_status[0]->status);?> </div>
                                    </div>
                                    <div class="mb-1">
                                        <strong>
                                            No. of Orders
                                        </strong> 
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl d-flex">
                        <div class="card flex-fill">
                            <a href="<?php echo base_url().'assisted-sns/?order-status=3'?>">
                                <div class="card-body py-4">
                                    <div class="d-flex justify-content-between">
                                        <h4 class="mb-2">Order completed</h4>
                                        <div class="float-right text-dark">
                                            <?php print_r($completed_status[0]->status);?>
                                        </div>
                                    </div>
                                    <div class="mb-1">
                                        <strong>
                                            No. of Orders
                                        </strong>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <?php if($assis_order_count[0]->order_count > 0){?>
                <div class="srch-table">
                    <div id="dataTable_filter" class="dataTables_filter">
                        <!-- <label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="dataTable"></label>
                        <div><button type="button"class="btn btn-info" id="searchBtn">Search</button></div> -->
                    </div>
                    <!-- table start  -->
                    <div class="table-responsive">
                        <table class="table newtable dataTable no-footer" id="mytable" role="grid" aria-describedby="dataTable_info">
                            <thead>
                                <tr role="row">
                                    <th class="sorting_desc" >Date</th>
                                    <th class="sorting" >GSR-Order Id</th>
                                    <th class="sorting" >Order Type</th>
                                    <th class="sorting" >Tracking Number</th>
                                    <th class="sorting" >Courier Type</th>
                                    <th class="sorting" >Total Items/ Items Received</th>
                                    <th class="sorting" >GSR-Order Status</th>
                                    <th class="sorting" >Payment Status</th>
                                    <!-- <th class="sorting" >Purchase Payment Status</th> -->
                                    <th class="sorting" >Action</th></tr>
                            </thead>
                            <tbody id = "listdata">
                                <!-- <tr class="Updated odd" role="row">
                                    <td class="sorting_1">24 Aug, 23</td>
                                    <td>
                                        <a href="javascript:void(0);">AST2241</a>
                                    </td>
                                    <td>Commercial</td>
                                    <td>
                                        <a href="javascript:void(0);" target="_blank"></a>
                                    </td>
                                    <td>1 / 0</td>

                                    <td>
                                        <strong>Rejected</strong>
                                    </td>
                                    <td>
                                        <strong>Rejected</strong> 
                                    </td>
                                    <td>
                                        <strong>Not Created</strong>
                                    </td>
                                    <td><a href="javascript:void(0);"> <i="" class="fa fa-eye"></a></td>
                                </tr>
                                <tr class="even" role="row">
                                    <td class="sorting_1">31 Aug, 22</td>
                                    <td>
                                        <a href="javascript:void(0);">AST1061</a>
                                    </td>
                                    <td>Sample</td>
                                    <td>
                                        <a href="javascript:void(0);" target="_blank">777902399619</a>
                                    </td>
                                    <td>1 / 1</td>
                                    <td></td>
                                    <td><strong> Paid</strong></td>
                                    <td>Paid</td>
                                    <td><a href="javascript:void(0);"> <i="" class="fa fa-eye"></a></td>
                                </tr> -->
                        <!-- <?php //if(!empty('assisted_shopnship_item_details'))
                           // {
                            ?> -->
                            <?php if(!empty($display_pagination)){
                                   foreach($display_pagination as $lists){
     
                                    ?>
                                     <tr>
                                    
                                        <td><?php 
                                        $datetime = strtotime($lists->created_date);
                                        $convertdate = date("d M,y",$datetime);
                                       // echo "<pre>";
                                        print_r($convertdate);
                                       // exit;
                                        ?>
                                            
                                    </td>
                                        <td><?php echo $lists->assisted_id;?></td>
                                        <td><?php echo $lists->order_sub_type;?></td>
                                        <td><?php echo $lists->tracking_number;?></td>
                                        <td><?php echo ($lists->courier_type==1)?'Normal':'Premium';?></td>
                                        <td><?php print_r($lists->total_item.'/'.$lists->count_item_received);?></td>
                                        <td><?php echo ($lists->order_status==1)?'Pending':(($lists->order_status==2)?'Progress':(($lists->order_status==3)?'Shipment':'Completed'));?></td>
                                        <td><?php echo ($lists->status==3)?'Rejected':(($lists->status==2)?'Paid':'Pending');?></td>
                                        <td><a href="<?php echo base_url().'users/assisted-order-details/'.$lists->assisted_id;?>"><i class="fa fa-eye" style="color:#000;"></i></a></td>
                                    </tr>
                                    <?php }
                            }
                            else{
                               // echo "not found";
                            }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- table end  -->

                    <!-- Pagination Start  -->
                    <!-- <div class="dataTables_paginate">
                        <div class="row">
                            <div class="col-sm-12 col-md-5">
                                 <div class="dataTables_info" >Showing 1 to 4 of 4 entries</div> -->
                            <!-- </div>
                            <div class="col-sm-12 col-md-7">
                                <div class="paging_simple_numbers">
                                    <ul class="pagination"> -->
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
                                    <!-- </ul>
                                </div>
                            </div>
                        </div>
                    </div>  -->
                    <!-- Pagination End  -->
                </div>
                <?php } else{?>
                     <div class="notfound">
                     <img src="<?php echo base_url()?>assets/imgs/parcel.png">
                     <h3>No orders available</h3>
                 </div>
              <?php  }?>
            </div>
        </div>

<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
 <script src="https://cdn.datatables.net/1.10.8/js/jquery.dataTables.min.js" defer="defer"></script> 

        <script>

$(document).ready(function() {
    $('#mytable').DataTable( {
        dom: 'Bfrtip',
        order: [[0, 'desc']],
        buttons: [
             'pdf'
        ]
    } );
} );

$(document).ready(function() {
$(".scardboxes .card").click(function () {
    //alert("Hello");  
//     $(".scardboxes .card .active").removeClass("active");
//    $(".scardboxes .card > a").addClass("active");  
  // $(".scardboxes .card a").addClass('active')      
});
});
</script>

