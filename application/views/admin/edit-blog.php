<script type="text/javascript"
  src="/extra-assets/ckeditor/ckeditor.js"></script>
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Update Blog CMS</h1>
        </div>
      </div>
    </div>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary">

              <form method="post" enctype="multipart/form-data"
                action="<?php echo base_url('Admin/Admin/updateblog')?>">
                <input type="hidden" name="blogid" value="<?php echo $record->id?>">
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
                        <img src="<?php echo base_url().$record->imgpath;?>" width="100" height="100">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Heading*</label>
                        <input type="text" class="form-control"
                          name="heading" placeholder="Enter Heading" value="<?php echo $record->heading?>">
                      </div>
                      <div class="form-group">
                        <label>Title*</label>
                        <textarea class="form-control" name="title"
                          placeholder="Enter title"><?php echo $record->title;?></textarea>
                      </div>
                    </div>
                    <label>Description*</label>
                    <textarea type="text" id="content"
                      class="form-control" name="description"
                      placeholder="Enter description"><?php echo $record->description;?>
                      </textarea>
                  </div>
                  <!-- <div class="blogrow card-body"></div> -->
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

  <script type="text/javascript">
    $(function(){
      CKEDITOR.replace('content');
    });

</script>