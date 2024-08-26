<script type="text/javascript"
  src="/extra-assets/ckeditor/ckeditor.js"></script>
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Update Helpcentre CMS</h1>
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
            <div class="col-md-2">
            <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addcategory">
                   Add category
            </button> -->
            </div>
            <div class="col-md-6"></div>
            <div class="col-md-2"><a href="<?php echo base_url('cms/help-centre-listing');?>">View Help Centre</a></div>
            <form method="post" enctype="multipart/form-data"
              action="<?php echo base_url('cms/update-help-centre')?>">
             <input type="hidden" name="editid" value="<?php echo $editrecord->qna_id; ?>">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Select Category*</label>
                     <select  class="form-control" name="category">
                      <?php foreach( $category as $categorydata){

                        ?>
                        
                        <option  name="catdata"
                               value= "<?php echo $categorydata->cat_id;?>"
                               <?php  if($categorydata->cat_id == $editrecord->cat_id) { ?>
                               selected ='selected';
                               <?php }
                                ?>><?php echo $categorydata->cat_name;?></option> 
                     <?php }?>
                       
                     </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Enter Question*</label>
                      <input type="text" class="form-control" name="question"
                        
                        value="<?php echo $editrecord->cat_question;?>">
                    </div>
                  </div>
                  <textarea type="text" id="content"
                            class="form-control" name="answer"
                            ><?php echo $editrecord->cat_answer;?>
                      </textarea>
                  <div class="card-footer">
                    <input type="submit" name="submit" class="btn btn-primary">
                  </div>
                </form>
              </div>

            </div>
          </div>
        </div>
      </section>
<!--select category modal -->
<!-- <section>
<div class="modal fade" id="addcategory" tabindex="-1" role="dialog" aria-labelledby="addcategoryLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <form action="<?php echo base_url('Admin/Admin/helpcentercatinsert')?>" method="post">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
              </div>
              <div class="modal-body">
                <div class="row createdrow">
                  <div class="form-group col-sm-6">
                  <label>Enter Category</label>
                  <input type="text" id='category' class="form-control" name="category" placeholder="Enter your category"
                  required value="">
                </div>
              </div>

              <div class="modal-footer">
                <button type="submit" class="btn btn-primary" name="submit" value="">Save</button>
              </div>
            </form>
          </div>
        </div>
      </div>
</section> -->
</div>

<script type="text/javascript">
    $(function(){
      CKEDITOR.replace('content');
    });

</script>
