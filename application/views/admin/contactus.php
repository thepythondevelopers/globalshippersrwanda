
<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Contact Us CMS</h1>
          </div>
        </div>
      </div>
    </section>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
              <form method="post" enctype = "multipart/form-data" action="<?php echo base_url('Admin/Admin/updatecontact')?>">  
                <input type="hidden" name="id" value="<?php echo $contact->id;?>">
                <div class="card-body">
                  <!-- <a class="add_row " id="addaboutusdiv">
                  <i class="fa fa-plus"></i>Add a Section</a> -->
         <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Heading*</label>
                <input  type="text" class="form-control" name="heading" placeholder="Enter your heading" value="<?php echo $contact->heading;?>">
              </div>
            </div>
            <div class="col-md-6">
            <div class="form-group">
                <label>Text*</label>
                <input type="text" class="form-control" name="text" placeholder="Enter your text" value="<?php echo $contact->text;?>">
            </div>
            </div>
          </div>
          <!-- <div class="col-md-6">
             <div class="form-group">
                    <label for="exampleInputFile">Contact*</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="banner" value="">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                    <input type="text" class="form-control" name="contact" placeholder="Enter your contact" value="<?php echo $contact->contact;?>">
                  </div>       
                  
               </div>
           </div> -->

              <div class="card-footer">
                  <input type="submit" name="submit" class="btn btn-primary">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>