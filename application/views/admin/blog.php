<script type="text/javascript"
  src="/extra-assets/ckeditor/ckeditor.js"></script>
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Blog CMS</h1>
        </div>
      
      </div>

    </div>
    <div class="col-sm-6">
          <a href="<?php echo base_url('cms/blog-list')?>" style="color:black;">View Blog List</a>
        </div>
  </section>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">

          <div class="card card-primary">
            <form method="post" enctype="multipart/form-data"
              action="<?php echo base_url('Admin/Admin/blogsec1insert')?>">
              <input type="hidden" name="id" value="<?php echo $sec1->id;?>">
              <div class="card-body">
                <!-- <a class="add_row " id="addblogdiv">
                  <i class="fa fa-plus"></i>Add a Section</a> -->
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Section 1 Title*</label>
                      <input type="text" class="form-control" name="sec1_title1"
                        placeholder="Enter your first name"
                        value="<?php echo $sec1->title;?>">
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <input type="submit" name="submit" class="btn btn-dark">
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

              <form method="post" enctype="multipart/form-data"
                action="<?php echo base_url('Admin/Admin/blogsec2insert')?>">
                <div class="card-body">
                  <div class="row createdrow">

                    <div class="col-md-6 ">
                      <div class="form-group">
                        <label>ImagePath*</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input"
                              id="exampleInputFile" name="imgpath" value>
                            <label class="custom-file-label"
                              for="exampleInputFile">Choose file</label>
                          </div>
                          <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Heading*</label>
                        <input type="text" class="form-control"
                          name="heading" placeholder="Enter Heading" value>
                      </div>
                      <div class="form-group">
                        <label>Title*</label>
                        <textarea class="form-control" name="title"
                          placeholder="Enter title"></textarea>
                      </div>
                    </div>
                    <label>Description*</label>
                    <textarea type="text" id="content"
                      class="form-control" name="description"
                      placeholder="Enter description">
                      </textarea>
                  </div>
                  <!-- <div class="blogrow card-body"></div> -->
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

  <script type="text/javascript">
    $(function(){
      CKEDITOR.replace('content');
    });

</script>