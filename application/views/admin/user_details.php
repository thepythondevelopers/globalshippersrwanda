<div class="content-wrapper">
    <section class="content-header">
        <div class="card card-default">
            <div class="card-header">
              <h3 class="card-title">Create Users</h3>
              <div class="card-tools">
              </div>
            </div>
            <div class="card-body">
              <form action = "<?php echo base_url('Admin/insert-users')?>" method="post">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>First Name*</label>
                    <input type="text" class="form-control" name="first_name" placeholder="Enter your first name">
                  </div>
                  <?php echo form_error('first_name','<div class="text-danger">','</div>'); ?>
                  <div class="form-group">
                    <label>Phone number*</label>
                    <input type="text" class="form-control" name="phone_number" placeholder="Enter your phone number">
                  </div>
                  <?php echo form_error('phone_number','<div class="text-danger">','</div>'); ?>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Last Name*</label>
                    <input type="text" class="form-control" name="last_name" placeholder="Enter your last name">
                  </div>
                  <?php echo form_error('last_name','<div class="text-danger">','</div>'); ?>
                  <div class="form-group">
                     <label>Email Address*</label>
                    <input type="text" class="form-control" name="email" placeholder="Enter your email address">
                  </div>
                  <?php echo form_error('email','<div class="text-danger">','</div>'); ?>
                </div>
              </div>
              <div class="row">
                <div class="col-12 col-sm-6">
                  <div class="form-group">
                    <label>Password*</label>
                    <input type="password" class="form-control" name="password" placeholder="Enter your password">
                  </div> 
                  <?php echo form_error('password','<div class="text-danger">','</div>'); ?>
                </div> 
                <div class="col-12 col-sm-6">
                  <div class="form-group">
                    <label>Confirm Password*</label>
                    <div class="select2-purple">
                      <input type="password" class="form-control" name="cpassword" placeholder="Enter your confirm password">
                    </div>
                    <?php echo form_error('cpassword','<div class="text-danger">','</div>'); ?>
                  </div>
                </div>
               </div>
               <div class="col-12 col-sm-6">
                    <div class="form-group">
                    <label>Status*</label>
                    <select class="form-control" name="status" data-placeholder="Select a status" data-dropdown-css-class="select2-purple" style="width: 100%;" >
                      <option value="">Please Select Status</option>
                      <option value="1">Active</option>
                      <option value="0">Inactive</option>
                    </select>
                    </div>
                    <?php echo form_error('status','<div class="text-danger">','</div>'); ?>
              </div>
              <div class="col-md-6">
              <input class="btn btn-dark" type="submit" name="submit" style="margin-top:20px;"></input>
            </div>
              </form>
            </div>
          </div>
        </section>
  </div>