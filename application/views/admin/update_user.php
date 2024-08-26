<div class="content-wrapper">
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
      <div class="card-body">
        <form action="<?php echo base_url('Admin/update-users-data')?>" method="post">
          <input type="hidden" id="id" name="id" value="<?php echo $data->id;?>">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>First Name*</label>
                <input type="text" class="form-control" name="first_name" placeholder="Enter your first name"
                  value="<?php echo $data->fname;?>">
              </div>
              <?php echo form_error('first_name','<div class="text-danger">','</div>'); ?>
              <div class="form-group">
                <label>Phone number*</label>
                <input type="text" class="form-control" name="phone_number" placeholder="Enter your phone number"
                  value="<?php echo $data->phone;?>">
              </div>
              <?php echo form_error('phone_number','<div class="text-danger">','</div>'); ?>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Last Name*</label>
                <input type="text" class="form-control" name="last_name" placeholder="Enter your last name"
                  value="<?php echo $data->lname;?>">
              </div>
              <?php echo form_error('last_name','<div class="text-danger">','</div>'); ?>
              <div class="form-group">
                <label>Email Address*</label>
                <input type="text" class="form-control" name="email" placeholder="Enter your email address"
                  value="<?php echo $data->email;?>">
              </div>
              <?php echo form_error('email','<div class="text-danger">','</div>'); ?>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-sm-6">
              <div class="form-group">
                <label>Password*</label>
                <input type="password" class="form-control" name="password" placeholder="Enter your password"
                  value="<?php echo $data->password;?>">
              </div>
              <?php echo form_error('password','<div class="text-danger">','</div>'); ?>
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