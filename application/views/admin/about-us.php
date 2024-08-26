<script type="text/javascript"
  src="/extra-assets/ckeditor/ckeditor.js"></script>
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>About Us CMS</h1>
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
             action="<?php echo base_url('Admin/Admin/aboutusupdatesec1')?>">
              <input type="hidden" name="sec1id" value="<?php echo $sec1->id;?>">
              <div class="card-body">
                <a class="add_row " id="addaboutusdiv">
                  <i class="fa fa-plus"></i>Add a Section</a>
                  <a href="<?php echo base_url('cms/aboutus-sec-4-listing');?>">View About Us Section4</a>
                <!-- <a class="add_row " id="addaboutsec6div">
                  <i class="fa fa-plus"></i>Add a Section6</a>
                <a class="add_row " id="addaboutsec7div">
                  <i class="fa fa-plus"></i>Add a Section7</a> -->
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Section 1 description1*</label>
                      <input type="text" class="form-control" name="sec1_title1"
                        placeholder="Enter your description1" value ="<?php echo $sec1->title ?>">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Section1 description2*</label>
                      <input type="text" class="form-control"
                        name="sec1_details"
                        placeholder="Enter your description1" value = "<?php echo $sec1->description;?>">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputFile">Section1 Banner</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input"
                          id="exampleInputFile" name="banner" value>
                        <label class="custom-file-label"
                          for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  <img src="<?php echo base_url().$sec1->imgpath;?>" style="width:100px;height:100px;">
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
  <!--section2-->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <form method="post" enctype="multipart/form-data"
              action="<?php echo base_url('Admin/Admin/updateaboutsec2')?>">
              <input type="hidden" name="sec2id" value="<?php echo $sec2->id;?>">
              <div class="card-body">
                <div class="row createdrow">
                  <div class="col-md-6 ">
                    <div class="form-group">
                      <label>Section2 Title*</label>
                      <input type="text" class="form-control" name="sec2title"
                        placeholder="Enter title" value="<?php echo $sec2->title;?>">
                    </div>

                    <div class="form-group">
                      <label>Section2 Heading*</label>
                      <input type="text" class="form-control" name="sec2heading"
                        placeholder="Enter heading" value="<?php echo $sec2->heading;?>">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Section2 Description*</label>
                      <input type="text" class="form-control" name="sec2desc"
                        placeholder="Enter description" value = "<?php echo $sec2->description;?>">
                    </div>
                    <!-- <div class="form-group">
              <label>Section2 Points*</label>               
              <textarea class="form-control" name="sec2points" placeholder="Enter points"></textarea>    
          </div> -->
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <lable>Image</lable>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input"
                            id="exampleInputFile" name="imgpath" value=" ">
                          <label class="custom-file-label"
                            for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="input-group-append">
                          <span class="input-group-text">Upload</span>
                        </div>
                      </div>
                    </div>
                    <img src="<?php echo base_url().$sec2->imgpath;?>" style="width:100px;height:100px">
                  </div>
                  
                  <div class="col-md-6">
                    <div class="form-group">
                      <lable>Section2 Points</lable>
                      <textarea type="text" id="content"
                        class="form-control" name="pointssec2"
                        placeholder="Enter description"><?php echo $sec2->points;?>
                        </textarea>
                    </div>
                </div>
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

  <!--section3-->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <form method="post" enctype="multipart/form-data"
              action="<?php echo base_url('Admin/Admin/aboutupdatesec3')?>">
              <input type="hidden" name="sec3id" value="<?php echo $sec3->id?>">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Section 3 title*</label>
                      <input type="text" class="form-control" name="sec3_title"
                        placeholder="Enter your title" value = "<?php echo $sec3->title;?>">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Section 3 description*</label>
                      <input type="text" class="form-control" name="sec3_des"
                        placeholder="Enter your description3" value ="<?php echo $sec3->description;?>">
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

    <!--section4-->

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
              <form method="post" enctype="multipart/form-data"
                action="<?php echo base_url('Admin/Admin/aboutusinsertsec4')?>">
                <div class="card-body">
                  <div class="row createdrow">
                    <div class="col-md-6 ">
                      <div class="form-group">
                        <label>Section4 Title*</label>
                        <input type="text" class="form-control"
                          name="sec4title[]" value placeholder="Enter title">
                      </div>

                      <div class="form-group">
                        <label>Section4 Description*</label>
                        <input type="text" class="form-control"
                          name="sec4desc[]" placeholder="Enter description"
                          value>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <lable>Section4 Image</lable>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input"
                              id="exampleInputFile" name="sec4imgpath[]"
                              value=" ">
                            <label class="custom-file-label"
                              for="exampleInputFile">Choose file</label>
                          </div>
                          <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                  </div>
                  <div class="about card-body"></div>
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

    <!--section5-->

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
              <form method="post" enctype="multipart/form-data"
                action="<?php echo base_url('Admin/Admin/aboutupdatesec5')?>">
                <input type="hidden" name="sec5id" value="<?php echo $sec5->id;?>">
                <div class="card-body">
                  <div class="row createdrow">
                    <div class="col-md-6 ">
                      <!-- <div class="form-group">
                        <label>Section5 Title*</label>
                        <input type="text" class="form-control" name="sec5title"
                          value placeholder="Enter title">
                      </div> -->

                      <div class="form-group">
                        <label>Section5 Heading*</label>
                        <input type="text" class="form-control"
                          name="sec5heading" placeholder="Enter heading" value ="<?php echo $sec5->title?>">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Section5 Description*</label>
                        <input type="text" class="form-control" name="sec5desc"
                          placeholder="Enter description" value="<?php echo $sec2->description;?>">
                      </div>
                      <!-- <div class="form-group">
              <label>Section2 Points*</label>               
              <textarea class="form-control" name="sec2points" placeholder="Enter points"></textarea>    
          </div> -->
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <lable>Image</lable>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input"
                              id="exampleInputFile" name="imgpath" value=" ">
                            <label class="custom-file-label"
                              for="exampleInputFile">Choose file</label>
                          </div>
                          <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                          </div>
                        </div>
                      </div>
                      <img src="<?php echo base_url().$sec5->imgpath;?>" style="width:100px;height:100px;">
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                      <lable>Section2 Points</lable>
                      <textarea type="text" id="content2"
                        class="form-control" name="pointssec5"
                        placeholder="Enter description"> <?php echo $sec5->points;?>
                        </textarea>
                    </div>
                </div>
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
    <!--section6-->
    <!-- <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
              <form method="post" enctype="multipart/form-data"
                action="<?php echo base_url('Admin/Admin/aboutusinsertsec6')?>">
                <div class="card-body">
                  <div class="row createdrow">
                    <div class="col-md-6 ">
                      <div class="form-group">
                        <label>Section6 Title*</label>
                        <input type="text" class="form-control"
                          name="sec6title[]" value placeholder="Enter title">
                      </div>

                      <div class="form-group">
                        <label>Section6 Description*</label>
                        <input type="text" class="form-control"
                          name="sec6desc[]" placeholder="Enter description"
                          value>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <lable>Section6 Image</lable>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input"
                              id="exampleInputFile" name="sec6imgpath[]"
                              value=" ">
                            <label class="custom-file-label"
                              for="exampleInputFile">Choose file</label>
                          </div>
                          <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                  <div class="aboutsection6 card-body"></div>
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
    <!--section7-->
    <!-- <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
              <form method="post" enctype="multipart/form-data"
                action="<?php echo base_url('Admin/Admin/aboutusinsertsec7')?>">
                <div class="card-body">
                  <div class="row createdrow">
                    <div class="col-md-6 ">
                      <div class="form-group">
                        <label>Section7 Title*</label>
                        <input type="text" class="form-control"
                          name="sec7title[]" value placeholder="Enter title">
                      </div>

                      <div class="form-group">
                        <label>Section7 Description*</label>
                        <input type="text" class="form-control"
                          name="sec7desc[]" placeholder="Enter description"
                          value>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <lable>Section7 Image</lable>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input"
                              id="exampleInputFile" name="sec7imgpath[]"
                              value=" ">
                            <label class="custom-file-label"
                              for="exampleInputFile">Choose file</label>
                          </div>
                          <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                  <div class="aboutsection7 card-body"></div>
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
  <script type="text/javascript">
    $(function(){
      CKEDITOR.replace('content');
    });

</script>
<script type="text/javascript">
    $(function(){
      CKEDITOR.replace('content2');
    });

</script>