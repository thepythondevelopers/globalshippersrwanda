
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
        <div>
                    <?php if($this->session->flashdata('msg')) {
                        echo "<div class = 'alert alert-success'>".$this->session->flashdata('msg')."</div>";
                    } else {

                    }
                    ?>
                </div>
        </div>
        <div class="col-sm-6">
    
        </div>
      </div>
    </div>
  </section>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
          </div>
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">About Us Details Section4 </h3>
            </div>
            <div class="card-header"><a href="<?php echo base_url('cms/about-us');?>" style="color:black;">Add About us</a></div>
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Titel</th>
                    <th>Description</th>
                    <th>Image</th>
                    <!-- <th>View</th> -->
                    <th>Update</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($record as $listdata) {
                //   echo "<pre>";
                //   print_r($listdata);exit;
                    ?>
                  <tr>
                    <td>
                        <?php echo $listdata->id;?>
                    </td>
                    <td>  <?php echo $listdata->title;?></td>
                    <td>
                    <?php echo $listdata->description;?>
                    </td>
                    <td>
                        <img src="<?php echo base_url().$listdata->imgpath;?>" style="width:100px;height:100px;">
                    
                    </td>
                    <!-- <td><a href="<?php echo base_url().'faq/'?>"><i
                    class="fa fa-eye" style="color:#000"></i></a></td> -->
                    <td><a href="<?php echo base_url().'cms/aboutus-sec4-edit/'.$listdata->id;?>"><i
                          class="fa fa-edit" style="color:#000"></i></a></td>
                    <td><a href="<?php echo base_url().'cms/aboutus-sec4-delete/'.$listdata->id;?>"><i
                          class="fa fa-trash" style="color:#000"></i></a></td>
                  </tr>
                  <?php } ?>
                </tbody>

              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>