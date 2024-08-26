
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Update Consolidation Section 2</h1>
        </div>
      </div>
    </div>
  </section>


  <!--section2-->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class>
              <!-- <h3 class="">Section Two</h3> -->
            </div>
            <form method="post" enctype="multipart/form-data"
              action="<?php echo base_url('Admin/Admin/consolidationupdatesec2')?>">
              <input type="hidden" name="sec2id" value="<?php echo $data->id; ?>">
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
                      <img src="<?php echo base_url().$data->imgpath?>" style="width:100px; height:100px">
                    </div>
                    <div class="form-group">
                      <label>Title*</label>
                      <input type="text" class="form-control"
                        name="sec2_title" placeholder="Enter Title" value ="<?php echo $data->title;?>">
                    </div>
                  </div>
                  <div class="col-md-6">

                    <div class="form-group">
                      <label>description*</label>
                      <textarea class="form-control" name="sec2description"
                        placeholder="Enter description"><?php echo $data->description?></textarea>
                    </div>
                  </div>
                </div>
                <div class="consolidationsec2 card-body"></div>
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

  <!--section4-->
  <!-- <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class>
            </div>
            <form method="post" enctype="multipart/form-data"
              action="<?php echo base_url('Admin/Admin/consolidationinsertsec4')?>">
              <div class="card-body">
                <div class="row createdrows">
                  <div class="col-md-6 ">
                    <div class="form-group">
                      <label>Question*</label>
                      <input type="text" class="form-control" name="question[]"
                        placeholder="Enter question" value>
                    </div>
                  </div>
                  <div class="col-md-6">

                    <div class="form-group">
                      <label>Answer*</label>
                      <textarea class="form-control" name="answee[]"
                        placeholder="Enter answer"></textarea>
                    </div>
                  </div>
                </div>
                <div class="consolidationsec4 card-body"></div>
                <div class="card-footer">
                  <input type="submit" name="submit" class="btn btn-primary">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section> -->

</div>