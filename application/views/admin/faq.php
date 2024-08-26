
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>FAQ CMS</h1>
          </div>
          <div class="col-sm-6">
            <!-- <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
            </ol> -->
            
          </div>
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
<form method="post" enctype = "multipart/form-data" action="<?php echo base_url('Admin/Admin/faqsec1insert')?>" > 
  <input type="hidden" name="id" value="<?php echo $data->id;?>">
  
                <div class="card-body">
                  <a class="add_row " id="addfaqsdiv">
                  <i class="fa fa-plus"></i>Add a Section</a>
                  <a href="<?php echo base_url('cms/faq-listing');?>" style="color:#000">View Faq Section 2 List</a>
                
         <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Section 1 Title*</label>
                <input type="text" class="form-control" name="sec1_title1" placeholder="Enter your title" value="<?php echo $data->title;?>">
              </div>
            </div>
            <div class="col-md-6">
            <div class="form-group">
                <label>Section1 Details*</label>
                <input type="text" class="form-control" name="sec1_details" placeholder="Enter details" value="<?php echo $data->details;?>">
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
     <form method="post" action="<?php echo base_url('Admin/Admin/faqsec2insert')?>" > 
      <!-- <input type="hidden" name="id" value="<?php //echo $record[0]->id?>"> -->
     <div class="card-body">
        <div class="row createdrow">
          <div class="col-md-6">
          <div class="form-group">
              <label>Question*</label>
              <input type="text" class="form-control" name="sec2_title[]" placeholder="Enter Question" value="<?php //echo $record[0]->question;?>">
          </div>
          <div class="form-group">
              <label>Answer*</label>               
              <textarea class="form-control" name="description[]" placeholder="Enter Answer"><?php //echo $record[0]->answer;?></textarea>    
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