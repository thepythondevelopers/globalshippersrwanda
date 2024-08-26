<div class="content-wrapper">
  <section class="content-header">
    <div class="card card-default">
      <div class="card-header">
        <h3 class="card-title">Address</h3>

        <div class="card-tools">
          <!-- <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button> -->
        </div>
      </div>
      <div class="card-body">
        <form action="<?php echo base_url('Admin/insert-address')?>" method="post">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>First Name*</label>
                <input type="text" class="form-control" name="first_name" placeholder="Enter your first name"
                  required>
              </div>
              <?php echo form_error('first_name','<div class="text-danger">','</div>'); ?>
              <div class="form-group">
                <label>Phone number*</label>
                <input type="text" class="form-control" name="phone_number" placeholder="Enter your phone number"
                required>
              </div>
              <?php echo form_error('phone_number','<div class="text-danger">','</div>'); ?>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Last Name*</label>
                <input type="text" class="form-control" name="last_name" placeholder="Enter your last name"
                required>
              </div>
              <?php echo form_error('last_name','<div class="text-danger">','</div>'); ?>
              <div class="form-group">
                <label>Address Line*</label>
                <input type="text" class="form-control" name="address" placeholder="Enter your address"
                required>
              </div>
              <?php echo form_error('email','<div class="text-danger">','</div>'); ?>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-sm-6">
              <div class="form-group">
                <label>Landmark*</label>
                <input type="text" class="form-control" name="landmark" placeholder="Enter your landmark"
                required>
              </div>
              <?php echo form_error('password','<div class="text-danger">','</div>'); ?>
            </div>
            <div class="col-12 col-sm-6">
              <div class="form-group">
                <label>State*</label>
                <input type="text" class="form-control" name="state" placeholder="Enter your state"
                required>
              </div>
              <?php echo form_error('password','<div class="text-danger">','</div>'); ?>
            </div>
            <div class="col-12 col-sm-6">
              <div class="form-group">
                <label>City*</label>
                <input type="text" class="form-control" name="city" placeholder="Enter your city"
                required>
              </div>
              <?php echo form_error('password','<div class="text-danger">','</div>'); ?>
            </div>
            <div class="col-12 col-sm-6">
              <div class="form-group">
                <label>zipcode*</label>
                <input type="text" class="form-control" name="zip" placeholder="Enter your Zipcode"
                required>
              </div>
              <?php echo form_error('password','<div class="text-danger">','</div>'); ?>
            </div>
          </div>
          <div class="col-md-6">
            <button class="btn btn-primary" type="submit" name="submit" style="margin-top:20px;">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </section>
</div>