<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Assisted Order</h1>
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
                        <th>Tracking Number</th>
                        <th>Total Item/ Item received</th>
                        <th>GSR-Order Status</th>
                        <th>Payment Status</th>
                        <th>Action</th>
                      </tr>
                      </thead>
                      <tbody>
                        
                        <?php 
                          if(!empty($assisted_list)){
                            foreach($assisted_list as $list){ ?> 
                              <tr>
                                <td><?php 
                                        $datatime= $list->created_date;
                                        $convert = strtotime($datatime);
                                        $convertdate = date("d M,y",$convert);
                                        print_r ($convertdate);?>
                                </td>
                                <td><?php echo $list->assisted_id;?></td>
                                <td><?php echo $list->order_sub_type;?></td>
                                <td><?php echo $list->tracking_number;?></td>
                                <td><?php print_r($list->total_item.'/'.$list->count_item_received);//print_r($assisted[0]->item_receive);?></td>
                                <td><?php echo ($list->order_status==1)?'Pending':(($list->order_status==2)?'Progress':(($list->order_status==3)?'Shipment':'Completed'));?></td>
                                <td><?php echo ($list->status==3)?'Rejected':(($list->status==2)?'Paid':'Pending');?></td>
                                <td><a href="<?php echo base_url().'assisted-order-details/'.$list->assisted_id;?>"><i class="fa fa-eye"></i></a></td>
                              </tr>
                              <?php }
                          }
                          else{
                            
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