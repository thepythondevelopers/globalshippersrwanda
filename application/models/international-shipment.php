<div class="shopship-div py-5">
        <div class="container">
            <h1 class="mb-3">International Shipment</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="javascript:void(0);"><i class="fa fa-home"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">International Shipment</li>
                </ol>
            </nav>
            <a class="btn btn-pill btn-primary" href="<?php echo base_url('international-create-order');?>">
                <i class="fa fa-plus"></i> Create Order
            </a>
            <div class="row scardboxes">
                <div class="col-12 col-md-6 col-xl d-flex">
                    <div class="card flex-fill">
                        <a href="<?php echo base_url('international-shipment');?>" class="active">
                            <div class="card-body py-4">
                                <div class="d-flex justify-content-between">
                                    <h4 class="mb-2">All Orders</h4>
                                    <div class="success"><?php print_r($inter_order_count[0]->order_count);?></div>
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
                        <a href="<?php echo base_url().'Home/international_shipment/?order-status=1'?>" class="card-body py-4 ">
                            <div class="d-flex justify-content-between">
                                <h4 class="mb-2">Order in progress</h4>
                                <div class="float-right text-danger"><?php print_r($progess_status[0]->status);?></div>
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
                    <div class="card flex-fill">
                        <a href="<?php echo base_url().'Home/international_shipment/?order-status=2'?>">
                            <div class="card-body py-4">
                                <div class="d-flex justify-content-between">
                                    <h4 class="mb-2">Orders in shipment</h4>
                                    <div class="success"><?php print_r($shipment_status[0]->status);?></div>
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
                        <a href="<?php echo base_url().'Home/international_shipment/?order-status=3'?>">
                            <div class="card-body py-4">
                                <div class="d-flex justify-content-between">
                                    <h4 class="mb-2">Order completed</h4>
                                    <div class="float-right text-danger">
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

            <!-- <div class="notfound">
                <img src="<?php echo base_url()?>assets/imgs/parcel.png">
                <h3>No orders available</h3>
            </div> -->
            <?php if($inter_order_count[0]->order_count > 0){?>
            <div class="srch-table">
            <div id="dataTable_filter" class="dataTables_filter">
              <!-- <label
                >Search:<input
                  type="search"
                  class="form-control form-control-sm"
                  placeholder=""
                  aria-controls="dataTable"
              /></label> -->
            </div>
            <!-- table start  -->
            <div class="table-responsive">
              <table
                class="table newtable dataTable no-footer"
                id="table"
                role="grid"
                aria-describedby="dataTable_info"
              >
                <thead>
                  <tr role="row">
                    <th
                      class="sorting"
                      tabindex="0"
                      aria-controls="dataTable"
                      rowspan="1"
                      colspan="1"
                      aria-label="Date: activate to sort column ascending"
                    >
                      Date
                    </th>
                    <th
                      class="sorting"
                      tabindex="0"
                      aria-controls="dataTable"
                      rowspan="1"
                      colspan="1"
                      aria-label="MXB-Order Id: activate to sort column ascending"
                    >
                    GSR-Order Id
                    </th>
                    <th
                      class="sorting_desc"
                      tabindex="0"
                      aria-controls="dataTable"
                      rowspan="1"
                      colspan="1"
                      aria-label="Client Order ID: activate to sort column ascending"
                      aria-sort="descending"
                    >
                      Client Order ID
                    </th>
                    <th
                      class="sorting"
                      tabindex="0"
                      aria-controls="dataTable"
                      rowspan="1"
                      colspan="1"
                      aria-label="Order Type: activate to sort column ascending"
                    >
                      Order Type
                    </th>
                    <th
                      class="sorting"
                      tabindex="0"
                      aria-controls="dataTable"
                      rowspan="1"
                      colspan="1"
                      aria-label="Tracking Number: activate to sort column ascending"
                    >
                      Tracking Number
                    </th>
                    <th
                      class="sorting"
                      tabindex="0"
                      aria-controls="dataTable"
                      rowspan="1"
                      colspan="1"
                      aria-label="MXB-Order Status: activate to sort column ascending"
                    >
                    GSR-Order Status
                    </th>
                    <th
                      class="sorting"
                      tabindex="0"
                      aria-controls="dataTable"
                      rowspan="1"
                      colspan="1"
                      aria-label="Payment Status: activate to sort column ascending"
                    >
                      Payment Status
                    </th>
                    <th
                      class="sorting"
                      tabindex="0"
                      aria-controls="dataTable"
                      rowspan="1"
                      colspan="1"
                      aria-label="Action: activate to sort column ascending"
                    >
                      Action
                    </th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach($item_records as $lists){
                               
                               ?>
                               
                               <tr>
                                   <td><?php 
                                        $convertdate = date("d M,y",strtotime($lists->created_date));
                                        echo $convertdate;?></td>
                                   <td><?php echo $lists->order_id;?></td>
                                   <td><?php echo $lists->client_order_id;?></td>
                                   <td><?php echo $lists->order_type;?></td>
                                   <td><?php echo $lists->tracking_number;?></td>
                                   <td><?php echo ($lists->order_status==1)?'Pending':(($lists->order_status==2)?'Progress':(($lists->order_status==3)?'Shipment':'Completed'));?></td>
                                   
                                   <td><?php echo ($lists->status==1)?'Pending':(($lists->status==2)?'Paid':'Rejected');?></td>
                                   <td><a href="<?php echo base_url().'users/international-order-details/'.$lists->order_id;?>"><i class="fa fa-eye"></i></a></td>
                               </tr>
                               <?php }
                               ?>
                </tbody>
              </table>
            </div>
            <!-- table end  -->

            <!-- Pagination Start  -->
            <!-- PAGINATION AND ENTRIES -->
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
 <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
 <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>



 <script>
    $(document).ready(function() {
    $('#table').DataTable( {
        dom: 'Bfrtip',
        buttons: [
             'pdf'
        ]
    } );
} );

// $(document).ready(function() {
// $(".card.flex-fill").click(function () {
//     $(".card.flex-fill a").removeClass("active");
//     $(".card.flex-fill a").addClass("active");        
// });
// });
$(document).ready(function() {
    $(".scardboxes .card a ").click(function () {
        $(".scardboxes .card a").removeClass("active");
        $(".scardboxes .card a").addClass("active");     
    });
});
</script>