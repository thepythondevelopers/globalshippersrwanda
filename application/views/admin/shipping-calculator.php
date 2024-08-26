<script type="text/javascript"
  src="/extra-assets/ckeditor/ckeditor.js"></script>
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Shipping Calculator CMS</h1>
        </div>
      
      </div>

    </div>
    <!-- <div class="col-sm-6">
          <a href="<?php echo base_url('cms/blog-list')?>" style="color:black;">View Blog List</a>
        </div> -->
  </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary">

              <form method="post" enctype="multipart/form-data"
                action="<?php echo base_url('Admin/Admin/updateshipping')?>">
                <input type="hidden" name="id" value="<?php echo $ship->id;?>">
                <div class="card-body">
                  <div class="row createdrow">

                  
                    <div class="col-md-12">
                   
                    <label>Description*</label>
                    <textarea type="text" id="content"
                      class="form-control" name="description"
                      placeholder="Enter description"><?php echo $ship->description;?>
                      </textarea>
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

  <script type="text/javascript">
    $(function(){
      CKEDITOR.replace('content');
    });

</script>