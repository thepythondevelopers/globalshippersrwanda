<div class="content-wrapper">
  <section class="content-header">
    <div class="card card-default">
      <div class="card-header">
        <h3 class="card-title">Update Payment Details</h3>
        <div class="card-tools">
        </div>
      </div>
      <div class="card-body">
        <form action="<?php echo base_url('Admin/assisted-update-payment')?>" method="post">
          <input type="hidden" name="email" value="<?php echo $payupdateusers->email;?>">
          <input type="hidden" name="fname" value="<?php echo $payupdateusers->fname;?>">
          <input type="hidden" name="lname" value="<?php echo $payupdateusers->lname;?>">
          <input type="hidden"  name="phone" value="<?php echo $payupdateusers->phone;?>">
          <input type="hidden" name="adminemail" value="<?php echo $adminemail->email;?>">
        <input type="hidden" name="id" value="<?php echo $pay_details->order_id;?>">
        <input type="hidden" name="payid" value="<?php echo $pay_details->id;?>">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Payment Id*</label>
                <input type="text" class="form-control" name="payment" placeholder="Enter your payment id" value="<?php echo $pay_details->payment_id;?>">
              </div>
               <div class="form-group">
                <label>Invoice Amount*</label>
                <input type="text" class="form-control" name="invoiceAmt" placeholder="Enter your invoice amount" value="<?php echo $pay_details->invoiceamt;?>">
              </div>
              <div class="col-md-6">
              <div class="form-group">
                <label>Shipment Type*</label>
                <select class="form-control"name="type">
                  <option value="assisted">Assisted</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Status*</label>
                <select value="" class="form-control" name="status">
                            <option value="1">Pending</option>
                            <option value="2">Paid</option>
                            <option value="3">Rejected</option>
                          </select>
              </div>
            </div>
          </div>
          </div>
          <div class="col-md-6">
            <button class="btn btn-dark" type="submit" name="submit" style="margin-top:20px;">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </section>
</div>