<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="card card-default">
      <div class="card-header">
        <h3 class="card-title">Update Users</h3>

        <div class="card-tools">
          <!-- <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button> -->
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <form action="<?php echo base_url('Admin/update_users_data')?>" method="post">
          <input type="hidden" id="id" name="id" value="<?php echo $data->admin_users_id;?>">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>First Name*</label>
                <!-- <select class="form-control select2" style="width: 100%;">
                      <option selected="selected">Alabama</option>
                      <option>Alaska</option>
                      <option>California</option>
                      <option>Delaware</option>
                      <option>Tennessee</option>
                      <option>Texas</option>
                      <option>Washington</option>
                    </select> -->
                <input type="text" class="form-control" name="first_name" placeholder="Enter your first name"
                  value="<?php echo $data->fname;?>">
              </div>
              <?php echo form_error('first_name','<div class="text-danger">','</div>'); ?>
              <!-- /.form-group -->
              <div class="form-group">
                <label>Phone number*</label>
                <!-- <select class="form-control select2" disabled="disabled" style="width: 100%;">
                      <option selected="selected">Alabama</option>
                      <option>Alaska</option>
                      <option>California</option>
                      <option>Delaware</option>
                      <option>Tennessee</option>
                      <option>Texas</option>
                      <option>Washington</option>
                    </select> -->
                <input type="text" class="form-control" name="phone_number" placeholder="Enter your phone number"
                  value="<?php echo $data->phone;?>">
              </div>
              <?php echo form_error('phone_number','<div class="text-danger">','</div>'); ?>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
            <div class="col-md-6">
              <div class="form-group">
                <label>Last Name*</label>
                <!-- <select class="select2" multiple="multiple" data-placeholder="Select a State" style="width: 100%;">
                      <option>Alabama</option>
                      <option>Alaska</option>
                      <option>California</option>
                      <option>Delaware</option>
                      <option>Tennessee</option>
                      <option>Texas</option>
                      <option>Washington</option>
                    </select> -->
                <input type="text" class="form-control" name="last_name" placeholder="Enter your last name"
                  value="<?php echo $data->lname;?>">
              </div>
              <?php echo form_error('last_name','<div class="text-danger">','</div>'); ?>
              <!-- /.form-group -->
              <div class="form-group">
                <label>Email Address*</label>
                <!-- <select class="form-control select2" style="width: 100%;">
                      <option selected="selected">Alabama</option>
                      <option>Alaska</option>
                      <option disabled="disabled">California (disabled)</option>
                      <option>Delaware</option>
                      <option>Tennessee</option>
                      <option>Texas</option>
                      <option>Washington</option>
                    </select>  -->
                <input type="text" class="form-control" name="email" placeholder="Enter your email address"
                  value="<?php echo $data->email;?>">
              </div>
              <?php echo form_error('email','<div class="text-danger">','</div>'); ?>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
          <div class="row">
            <div class="col-12 col-sm-6">
              <div class="form-group">
                <label>Password*</label>
                <!-- <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;">
                      <option selected="selected">Alabama</option>
                      <option>Alaska</option>
                      <option>California</option>
                      <option>Delaware</option>
                      <option>Tennessee</option>
                      <option>Texas</option>
                      <option>Washington</option>
                    </select> -->
                <input type="password" class="form-control" name="password" placeholder="Enter your password"
                  value="<?php echo $data->password;?>">
              </div>
              <?php echo form_error('password','<div class="text-danger">','</div>'); ?>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
            <!-- <div class="col-12 col-sm-6">
                  <div class="form-group">
                    <label>Confirm Password*</label>
                    <div class="select2-purple"> -->
            <!-- <select class="select2" multiple="multiple" data-placeholder="Select a State" data-dropdown-css-class="select2-purple" style="width: 100%;">
                        <option>Alabama</option>
                        <option>Alaska</option>
                        <option>California</option>
                        <option>Delaware</option>
                        <option>Tennessee</option>
                        <option>Texas</option>
                        <option>Washington</option>
                      </select> -->
            <!-- <input type="password" class="form-control" name="cpassword" placeholder="Enter your confirm password">
                    </div>
                    <?php echo form_error('cpassword','<div class="text-danger">','</div>'); ?>
                  </div> -->
            <!-- /.form-group -->
            <!-- </div> -->
            <!-- /.col -->
          </div>
          <!-- <div class="col-md-6">
                    <div class="select2-purple">
                    <label>Status*</label> -->
          <!-- <select class="" multiple="multiple" data-placeholder="Select a State" style="width: 100%;">
                        <option value="">Please Select Status</option>
                        <option value="inactive">Inactive</option>
                        <option value="active">active</option>
                    </select> -->
          <!-- <select class="select2" name="status" data-placeholder="Select a status" data-dropdown-css-class="select2-purple" style="width: 100%;" value="<?php echo $data->status;?>">
                      <option value="">Please Select Status</option>
                      <option value="inactive">Inactive</option>
                      <option value="active">Active</option>
                    </select>
                    </div>
                    <?php //echo form_error('status','<div class="text-danger">','</div>'); ?>
              </div> -->
          <div class="col-md-6">
            <button class="btn btn-primary" type="submit" name="submit" style="margin-top:20px;">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </section>
</div>