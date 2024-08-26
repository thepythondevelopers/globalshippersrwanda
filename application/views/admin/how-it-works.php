
<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>How it works CMS</h1>
          </div>
        </div>
      </div>
    </section>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="">
                <!-- <h3 class=" ">Section One</h3> -->
              </div>
                <form method="post" enctype = "multipart/form-data" action="<?php echo base_url('Admin/Admin/howitworksinsertsec1')?>" >  
                  <input type="hidden" name="id" value="<?php echo $datasec1->id;?>">
                <div class="card-body">
                  <a class="add_row " id="addhowitworkdiv">
                  <i class="fa fa-plus"></i>Add a Section</a>     
         <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Section 1 Title*</label>
                <input type="text" class="form-control" name="sec1_title1" placeholder="Enter your title" value="<?php echo $datasec1->title;?>">
              </div>
            </div>
            <div class="col-md-6">
            <div class="form-group">
                <label>Section1 Details*</label>
                <input type="text" class="form-control" name="sec1_details" placeholder="Enter your details" value="<?php echo $datasec1->details;?>">
            </div>
            </div>
          </div>

              <div class="card-footer">
                  <input type="submit" name="submit" class="btn btn-primary">
                </div>
              </form>
            </div>

          </div>
        </div>
      </div>
    </section>
     <section class="content">
     <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
      <div class="card card-primary">
      <div class="">
        <!-- <h3 class="">Section Two</h3> -->
      </div>
     <form method="post" enctype = "multipart/form-data" action="<?php echo base_url('Admin/Admin/howitworksinsertsec2')?>" > 
     <!-- <input type="hidden" name="sec2id[]" value="<?php //echo $datasec2[0]->id;?>"> -->
     <div class="card-body">
      <?php// foreach($datasec2 as $data){
        ?>
      <div class="row createdrow">
      <input type="hidden" name="sec2id[]" value="<?php //echo $data->id;?>">
          <div class="col-md-6 ">  
            <div class="form-group">
              <label>ImagePath*</label>
              <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="exampleInputFile" name="imgpath[]" value="<?php //echo $datasec2[0]->imgpath;?>">
                     
                      <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                      <span class="input-group-text">Upload</span>
                    </div>
                  </div>
                  <img src="<?php //echo base_url().$data->imgpath;?>" style="width:100px;height:100">
            </div>
            <div class="form-group">
              <label>Title*</label>
              <input type="text" class="form-control" name="sec2_title[]" placeholder="Enter Title" value="<?php //echo $data->title;?>">
          </div>
          </div>
          <div class="col-md-6">

          <div class="form-group">
              <label>description*</label>               
              <textarea class="form-control" name="sec2description[]" placeholder="Enter description"><?php //echo $data->description;?></textarea>    
          </div>
          </div>
  </div>
  <?php// } ?>
  <div class="howitwork card-body"></div>
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