
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>FAQ CMS</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->

     <section class="content">
     <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
      <div class="card card-primary">
     <form method="post" action="<?php echo base_url('Admin/Admin/update_faq')?>" > 
      <input type="hidden" name="id" value="<?php echo $record->id?>">
     <div class="card-body">
        <div class="row createdrow">
          <div class="col-md-6">
          <div class="form-group">
              <label>Question*</label>
              <input type="text" class="form-control" name="ques" placeholder="Enter Question" value="<?php echo $record->question;?>">
          </div>
          <div class="form-group">
              <label>Answer*</label>               
              <textarea class="form-control" name="ans" placeholder="Enter Answer"><?php echo $record->answer;?></textarea>    
          </div>
          </div>
        </div>
  <div class="faq card-body"></div>
     <div class="card-footer">
                  <input type="submit" name="submit" class="btn btn-primary">
                </div>
                </div>
</form>

</div>
</div>
</div>
</div>
     </section>
  </div>