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
</style>
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <!-- <h1>Payment </h1> -->
              </div>
              <div class="col-sm-6">
                <!-- <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Payment Listing</li>
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
                    <h3 class="card-title">Payment List</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                      <th>Date</th>
                      <th>Payment Id</th>
                        <th>User Id</th>
                        <th>Amount</th>
                        <th>Status</th>
                        <!-- <th>Update Plan</th> -->
                      </thead>
                      <tbody>
                        <?php foreach($pay_success as $payment){?>
                      <tr>
                        <td><?php echo $payment->purchase_date; ?></td>
                        <td><?php echo $payment->payment_id; ?></td>
                        <td><?php echo $payment->user_id;?></td>
                        <td><?php echo $payment->paid_amount;?></td>
                        <td><?php echo ($payment->payment_status ==1)?'Success':'Failed'; ?></td>
                        <!-- <td><?php //$status = $pay[0]->status;
                            //if($status ==1){
                              ?>
                    <a href="http://dev.globalshippersrwanda.com/StripeController/update_status?$plan_id=<?php echo $pay[0]->plan_id?>&$val=<?php echo $status?>"
                    class="btn btn-success">Active</a>
                  <?php
                            //}else{
                              ?>
                  <a href="http://dev.globalshippersrwanda.com/StripeController/update_status?$plan_id=<?php echo $pay[0]->plan_id?>&$val=<?php echo $status?>"
                    class="btn btn-danger">Deactivate</a>
                  <?php
                            //}
                          ?></td> -->
                        
                      </tr>
                      <?php } ?>
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