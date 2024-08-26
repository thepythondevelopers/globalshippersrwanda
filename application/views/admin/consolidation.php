
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Consolidation CMS</h1>
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
              <!-- <h3 class=" ">Section One</h3> -->
            </div>
            <form method="post" enctype="multipart/form-data"
              action="<?php echo base_url('Admin/Admin/consolidationinsertsec1')?>">
              <input type ="hidden" name="id" value="<?php echo $sec1->id;?>">

              <div class="card-body">
                <a class="add_row " id="addconsolidationsec2div">
                  <i class="fa fa-plus"></i>Add a Section2</a>
                <a class="add_row " id="addconsolidationsec4div">
                  <i class="fa fa-plus"></i>Add a Section4</a>
                <div class="row">
                  <div class="col-md-6">
                    <!-- <div class="form-group">
                      <label>Image*</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input"
                            id="exampleInputFile" name="img" value="<?php echo $sec1->imgpath?>">
                          <label class="custom-file-label"
                            for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="input-group-append">
                          <span class="input-group-text">Upload</span>
                        </div>
                      </div>
                    </div> -->
                    <div class="form-group">
                      <label>Section1 Description*</label>
                      <textarea type="text" class="form-control"
                        name="sec1_desc"
                        placeholder="Enter your desc"><?php echo $sec1->description;?></textarea>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Section1 Title*</label>
                    <input type="text" class="form-control" name="sec1_title"
                      placeholder="Enter your title" value="<?php echo $sec1->title;?>">
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
              action="<?php echo base_url('Admin/Admin/consolidationinsertsec2')?>">
              <div class="card-body">
                <div class="row createdrow">
                  <div class="col-md-6 ">
                    <div class="form-group">
                      <label>ImagePath*</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input"
                            id="exampleInputFile" name="imgpath[]" value>
                          <label class="custom-file-label"
                            for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="input-group-append">
                          <span class="input-group-text">Upload</span>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Title*</label>
                      <input type="text" class="form-control"
                        name="sec2_title[]" placeholder="Enter Title" value>
                    </div>
                  </div>
                  <div class="col-md-6">

                    <div class="form-group">
                      <label>description*</label>
                      <textarea class="form-control" name="sec2description[]"
                        placeholder="Enter description"></textarea>
                    </div>
                  </div>
                </div>
                <div class="consolidationsec2 card-body"></div>
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

  <!--section3-->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class>
              <!-- <h3 class="">Section Two</h3> -->
            </div>
            <form method="post" enctype="multipart/form-data"
              action="<?php echo base_url('Admin/Admin/consolidationinsertsec3')?>">
              <input type="hidden" name="id" value="<?php echo $sec3->id?>">
              <div class="card-body">
                <div class="row createdrow">
                  <div class="col-md-6 ">
                    <!-- <div class="form-group">
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
            </div> -->
                    <div class="form-group">
                      <label>Section3 Title*</label>
                      <input type="text" class="form-control" name="sec3_title"
                        placeholder="Enter Title" value="<?php echo $sec3->title;?>">
                    </div>
                  </div>
                  <div class="col-md-6">

                    <!-- <div class="form-group">
                      <label>Sectin3 Description*</label>
                      <textarea class="form-control" name="sec3description"
                        placeholder="Enter description"><?php echo $sec3->description;?></textarea>
                    </div> -->
                  </div>
                </div>

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

  <!--section4-->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class>
              <!-- <h3 class="">Section Two</h3> -->
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
  </section>

</div>