
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit About Us Section4</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
     <section class="content">
     <div class="container-fluid">
        <div class="row">
           <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->

      <div class="card card-primary">
     
     <form method="post" enctype = "multipart/form-data" action="<?php echo base_url('Admin/Admin/editaboutsec4')?>" > 
        <input type="hidden" name="sec4id" value="<?php echo $data->id;?>">
     <div class="card-body">
      <div class="row createdrow">

          <div class="col-md-6 ">  
            <div class="form-group">
              <label>ImagePath*</label>
              <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="exampleInputFile" name="imgpath" value="">

                      <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                      <span class="input-group-text">Upload</span>
                    </div>
                  </div>
            </div>
          <img src="<?php echo base_url().$data->imgpath;?>" style="width:100px;height:100">
          </div>
          <div class="col-md-6">
          <div class="form-group">
              <label>Title*</label>
              <input type="text" class="form-control" name="sec4title" placeholder="Enter Title" value="<?php echo $data->title;?>">
          </div>
          <div class="form-group">
              <label>description*</label>               
              <textarea class="form-control" name="sec4desc" placeholder="Enter description"><?php echo $data->description;?></textarea>    
          </div>
          </div>
  </div>
     <div class="card-footer">
                  <input type="submit" name="submit" class="btn btn-dark">
                </div>
                </div>
</form>

</div>
</div>
</div>
</div>
     </section>
  </div>