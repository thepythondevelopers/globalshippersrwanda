
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Restrictions CMS</h1>
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
<form method="post" enctype = "multipart/form-data" action="<?php echo base_url('cms/restriction-section1')?>" >  
  <input type="hidden" value="" name="id">
                <div class="card-body">
                  <a class="add_row " id="addrestrictiondiv">
                  <i class="fa fa-plus"></i>Add a Section</a>
                <!-- /.card-body -->
                
         <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Section 1 Title*</label>
                <input type="text" class="form-control" name="sec1_title1" placeholder="Enter your first name" value="">
              </div>
            </div>
            <div class="col-md-6">
            <div class="form-group">
                <label>Section1 Details*</label>
                <input type="text" class="form-control" name="sec1_details" placeholder="Enter your last name" value="">
            </div>
            </div>
          </div>
          <div class="col-md-6">
             <div class="form-group">
                    <label for="exampleInputFile">Section1 Banner</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="banner" value="">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>       
                  
               </div>
           </div>

              <div class="card-footer">
                  <input type="submit" name="submit" class="btn btn-primary">
                </div>
              </form>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
          <!-- right column -->
          
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>

    <!-- /.content -->
     <section class="content">
     <div class="container-fluid">
        <div class="row">
           <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->

      <div class="card card-primary">
     
     <form method="post" enctype = "multipart/form-data" action="<?php echo base_url('cms/restriction-section2')?>" > 
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
          
            <div class="form-group">
              <label>points*</label>               
              <textarea class="form-control" name="points[]" placeholder="Enter points"></textarea>    
          </div>
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
          <!-- <div class="form-group crossgr">
      <a class="delete_row btn btn-danger pull-right onclick='delete_row($(this))">
          <i class="fa fa-remove"></i>
      </a>
      
  </div> -->
  </div>
  <div class="testing card-body"></div>
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