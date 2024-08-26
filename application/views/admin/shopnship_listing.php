<style>
  .page-item.active .page-link {
    z-index: 3;
    color: #fff;
    background-color: #000;
    border-color: #000;
}
.page-link {
    position: relative;
    display: block;
    padding: var(--bs-pagination-padding-y) var(--bs-pagination-padding-x);
    font-size: var(--bs-pagination-font-size);
    color: #000;
    text-decoration: none;
    background-color: var(--bs-pagination-bg);
    border: var(--bs-pagination-border-width) solid var(--bs-pagination-border-color);
    transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
}
.buttons-pdf{
background:#000;
}
.buttons-print{
  background:#000;
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
          <h1>Consolidate Shipments</h1>
        </div>
        <div class="col-sm-6">
          <h1><?php //echo $users[0]->fname.' '.$users[0]->lname;?> </h1>
        </div>
        <div class="col-sm-6">
          <!-- <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">DataTables</li>
                </ol> -->
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">

            <!-- /.card-header -->

            <!-- /.card-body -->
          </div>
          <!-- /.card -->

          <div class="card">
            <div class="card-header">
              <h3 class="card-title"></h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Date</th>
                    <th>GSR-Order Id</th>
                    <th>Order Type</th>
                    <th>From Country</th>
                    <th>Tracking Number</th>
                    <th>Courier Type </th>
                    <th>Shipment Status</th>
                    <th>Total Item/ Item received</th>
                    <th>GSR-Order Status</th>
                    <th>Payment Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  if(!empty($shopnship_list['newarray'])){
                    foreach($shopnship_list['newarray'] as $list){ ?>
                      <tr>
                        <td>
                        <?php 
                        $date_time= $list->created_date;
                           $convertdate = date("d M,y",strtotime($date_time));
                           echo $convertdate;?>
                        </td>
                        <td>
                          <?php echo $list->shopnship_id;?>
                        </td>
                        <td>
                          <?php echo $list->order_sub_type;?>
                        </td>
                        <td>
                          <?php echo $list->from_country_name;?>
                        </td> 
                       
                        <td>
                          <?php echo $list->tracking_number;?>
                        </td>
                        <td>
                          <?php echo $list->courier_type;?>
                        </td>
                        <td><?php 
                if (in_array($list->shopnship_id, $shopnship_list['mydataavg'])) {
                        echo "Signed"; } else  { echo "Not Signed"; }
                ?></td>
                        <td>
                          <?php print_r($list->total_item.'/'.$list->count_item_received);?>
                        </td>
                        <td><?php echo ($list->order_status==1)?'Pending':(($list->order_status==2)?'Progress':(($list->order_status==3)?'Shipment':'Completed'));?></td>
                        <td><?php echo ($list->status==3)?'Rejected':(($list->status==2)?'Paid':'Pending');?></td>
                        <td><a href="<?php echo base_url().'shopnship-order-details/'.$list->shopnship_id;?>"><i
                              class="fa fa-eye" style="color:black;"></i></a></td>
                      </tr>
                      <?php }
                  }
                  else{
                   // echo "data is not found";
                  }
                   ?>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>