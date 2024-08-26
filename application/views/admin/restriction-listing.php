<style>
  .page-item.active .page-link {
    z-index: 3;
    color: #fff;
    background-color: #000;
    border-color: #000;
}
.page-link {
    position: relative;
    display: block;
    padding: var(--bs-pagination-padding-y) var(--bs-pagination-padding-x);
    font-size: var(--bs-pagination-font-size);
    color: #000;
    text-decoration: none;
    background-color: var(--bs-pagination-bg);
    border: var(--bs-pagination-border-width) solid var(--bs-pagination-border-color);
    transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
}
.buttons-pdf{
background:#000;
}
.buttons-print{
  background:#000;
}
</style>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Restriction Listing</h1>
        </div>
        <div class="col-sm-6">
          
        </div>
        <div class="col-sm-6">
        <?php if($this->session->flashdata('msg')) {
                        echo "<div class = 'alert alert-success'>".$this->session->flashdata('msg')."</div>";
                    } else {

                    }
                    ?>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">

          
          </div>
          <!-- /.card -->

          <div class="card">
            <div class="card-header">
              <h3 class="card-title"></h3>
            </div>
            <a href="<?php echo base_url('cms/restrictions');?>">Add Restriction<a>
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Point</th>
                    <th>Image</th>
                    <th>View</th>
                    <th>Update</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($record as $data) { ?>
                    <tr>
                        <td>
                            <?php echo $data->id?>
                        </td>
                        <td><?php echo $data->sec2_title?></td>
                        <td><?php echo $data->description?></td>
                        <td><?php echo $data->points?></td>
                        <td><img src="<?php echo $data->imgpath;?>" style="width:40px;height:40px">
                    </td>
                        <td><a href="<?php echo base_url().'restriction'?>"><i
                    class="fa fa-eye" style="color:#000"></i></a></td>
                    <td><a href="<?php echo base_url().'cms/edit-restriction/'.$data->id;?>"><i
                          class="fa fa-edit" style="color:#000"></i></a></td>
                    <td><a href="<?php echo base_url().'cms/delete-restriction/'.$data->id;?>"><i
                          class="fa fa-trash" style="color:#000"></i></a></td>
                      </tr>
               <?php   }?>
                    
               <?php
                   ?>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>