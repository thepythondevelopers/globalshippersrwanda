
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
              <h3 class="card-title">Blog Details</h3>
            </div>
            <div class="card-header"><a href="<?php echo base_url('cms/blog');?>" style="color:black;">Add Blog</a></div>
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Heading</th>
                    <th>Title</th>
                    <th>View</th>
                    <th>Update</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($blog as $listdata) {
                    ?>
                  <tr>
                    <td>
                        <?php echo $listdata->id;?>
                    </td>
                    <td>  <?php echo $listdata->heading;?></td>
                    <td>
                    <?php echo $listdata->title;?>
                    </td>
                    <td><a href="<?php echo base_url().'blog/'.$listdata->id;?>"><i
                    class="fa fa-eye" style="color:#000"></i></a></td>
                    <td><a href="<?php echo base_url().'cms/edit-blog/'.$listdata->id;?>"><i
                          class="fa fa-edit" style="color:black;"></i></a></td>
                    <td><a href="<?php echo base_url().'cms/delete-blog/'.$listdata->id;?>"><i
                          class="fa fa-trash" style="color:#000;"></i></a></td>
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