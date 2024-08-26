<script type="text/javascript"
  src="/extra-assets/ckeditor/ckeditor.js"></script>
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Privacy Policy CMS</h1>
        </div>
      </div>
    </div>
  </section>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class>
            </div>
           
            <div class="col-md-6"></div>
           
            <form method="post" enctype="multipart/form-data"
              action="<?php echo base_url("Admin/Admin/updateprivacy")?>">
             <input type="hidden" name="id" value="<?php echo $privacy->id;?>">
              <div class="card-body">
                <div class="row">
                  <lable >Enter Data</lable>
                  <textarea type="text" id="content"
                            class="form-control" name="description"
                            placeholder="enter description"><?php echo $privacy->description;?>
                      </textarea>
                  <div class="card-footer">
                    <input type="submit" name="submit" class="btn btn-dark">
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
