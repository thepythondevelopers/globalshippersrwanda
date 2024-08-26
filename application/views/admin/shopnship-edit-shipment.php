<div class="content-wrapper">
  <section class="content-header">
    <div class="card card-default">
      <div class="card-header">
        <h3 class="card-title">Update Shipment Details</h3>
        <div class="card-tools">
        </div>
      </div>   
      <div class="card-body">
        <form action="<?php echo base_url('Admin/shopnship-update-shipment')?>" method="post">
        <input type="hidden" name ="id" value="<?php echo $payupdateusers->id;?>">
              <input type="hidden" name ="fname" value="<?php echo $payupdateusers->fname;?>">
              <input type="hidden" name ="lname" value="<?php echo $payupdateusers->lname;?>">
              <input type="hidden" name ="email" value="<?php echo $payupdateusers->email;?>">
              <input type="hidden" name ="phone" value="<?php echo $payupdateusers->phone;?>">
              <input type="hidden" name="adminemail" value="<?php echo $adminemail->email;?>">
        <input type="hidden" name="id" value="<?php echo $shipment->order_id;?>">
        <input type="hidden" name="shipmentid" value="<?php echo $shipment->id;?>">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Shipping Carrier*</label>
                <input type="text" class="form-control" name="carrier" placeholder="Enter your carrier " value="<?php echo $shipment->shipping_carrier;?>">
              </div>
              <div class="col-md-6">
              <div class="form-group">
                <label>Tracking Number*</label>
                <input type="text" class="form-control" name="tracking" placeholder="Enter your tracking number" value="<?php echo $shipment->tracking_number;?>">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Tracking url*</label>
                <input type="text" class="form-control" name="url" placeholder="Enter your tracking url" value="<?php echo $shipment->tracking_url;?>">
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