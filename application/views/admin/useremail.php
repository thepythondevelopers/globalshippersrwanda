<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="card card-default">
      <div class="card-header">
        <h3 class="card-title">Login With User Email</h3>

        <div class="card-tools">
        <?php if($this->session->flashdata('message'))
                    {
                        echo "<div class = 'alert alert-success'>".$this->session->flashdata('message')."</div>";
                    }?>
        </div>
      </div>
      <div class="card-body">
        <form action="<?php echo base_url('Admin/Admin/userlogin')?>" method="post">
          <div class="row">
              <div class="form-group">
                <label>Email Address*</label>
                <input type="email" class="form-control" name="email" placeholder="Enter your email address"
                  value="">
              </div>
              <?php echo form_error('email','<div class="text-danger">','</div>'); ?>
            </div>
          </div>
          <!-- <div class="row">
            <div class="col-12 col-sm-6">
              <div class="form-group">
                <label>Password*</label>
              </div>

            </div>
          </div> -->
          <div class="col-md-6">
            <button class="btn btn-dark" type="submit" name="submit" style="margin-top:20px;">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </section>
</div>