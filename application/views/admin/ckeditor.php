
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Blog CMS</h1>
          </div>
       <!--    <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
            </ol>
          </div> -->
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
           <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->

            <div class="card card-primary">
            <!--   <div class="card-header">
                <h3 class="card-title">Section One</h3>
              </div> -->
              <!-- /.card-header -->
              <!-- form start -->
<form method="post" enctype = "multipart/form-data" action="<?php echo base_url('Admin/Admin/blogsec1insert')?>" >  
              <input type="hidden" name="id" value="<?php echo $sec1->id;?>">
                <div class="card-body">
                  <a class="add_row " id="addblogdiv">
                  <i class="fa fa-plus"></i>Add a Section</a>     
         <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Section 1 Title*</label>
                <input type="text" class="form-control" name="sec1_title1" placeholder="Enter your first name" value="<?php echo $sec1->title;?>">
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
           <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->

      <div class="card card-primary">
     
     <form method="post" enctype = "multipart/form-data" action="<?php echo base_url('Admin/Admin/blogsec2insert')?>" > 
     <div class="card-body">
      <div class="row createdrow">

          <div class="col-md-6 ">  
            <div class="form-group">
              <label>ImagePath*</label>
              <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="exampleInputFile" name="imgpath[]" value="">
                      <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                      <span class="input-group-text">Upload</span>
                    </div>
                  </div>
            </div>
          
            <!-- <div class="form-group">
              <label>Comments*</label>               
              <textarea class="form-control" name="points[]" placeholder="Enter Comments"></textarea>    
          </div> -->
          </div>
          <div class="col-md-6">
          <div class="form-group">
              <label>Title*</label>
              <input type="text" class="form-control" name="sec2_title[]" placeholder="Enter Title" value="">
          </div>
          <div class="form-group">
              <label>description*</label>               
              <textarea class="form-control" name="description[]" placeholder="Enter description"></textarea>    
          </div>
          </div>
          <!-- <div class="col-md-6">
          <div class="form-group">
            <lable>Date</lable>
            <input type="date" class="form-control"name="date[]" value="">
         </div>
          </div> -->
  </div>
  <div class="blogrow card-body"></div>
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
  <!--ckeditor-->
<script type="text/javascript" src="/asset/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="/asset/ckfinder/ckfinder.js"></script>
<!--end ckeditor-->