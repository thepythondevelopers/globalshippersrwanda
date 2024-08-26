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
          <!-- <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">User Details</li>
                </ol> -->
    
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
              <h3 class="card-title">User Details</h3>
            </div>
            <div class="card-header"><a href="<?php echo base_url('admin/create-user');?>" style="color:black;">Add User</a></div>
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>User Id</th>
                    <th>User Name</th>
                    <th>Mobile Number</th>
                    <th>Email Id</th>
                    <th>Status</th>
                    <th>Action</th>
                    <th>View</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($users as $record) {
                    ?>
                  <tr>
                    <td>
                      <?php echo $record->id;?>
                    </td>
                    <td>
                      <?php echo $record->fname.' '.$record->lname;?>
                    </td>
                    <td>
                      <?php echo $record->phone;?>
                    </td>
                    <td>
                      <?php echo $record->email;?>
                    </td>
                    <td>
                      <?php $status = $record->status;
                            if($status == 1){
                             
                              ?>
                         <a href="<?php echo base_url()?>user/update-status?id=<?php echo $record->id; ?>&val=<?php echo $status;?>"
                        class="btn btn-dark">Active</a>
                        <!-- <a class="btn btn-success" href="<?php echo base_url()?>Admin/Admin/active_user_status/<?=$record->id?>">Active</a> -->
                      <?php
                            }else{
                              ?>
                      
                        <a href="<?php echo base_url()?>user/update-status?id=<?php echo $record->id; ?>&val=<?php echo $status;?>"
                        class="btn btn-dark">Deactive</a>
                        <!-- <a class="btn btn-danger" href="<?php echo base_url()?>Admin/Admin/deactive_user_status/<?=$record->id?>">Deactive</a> -->
                      <?php
                            }
                          ?>

                    </td>
                    <td ><a href="<?php echo base_url().'admin/update-user/'.$record->id;?>"><i
                          class="fa fa-edit" style="color:black"></i></a></td>
                    <td>
                      <a class="btn btn-dark dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       Details
                      </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                      <a class="dropdown-item" href="<?php echo base_url().'order/shopnship/'.$record->id;?>">Consolidate Shipments</a>
                      <a class="dropdown-item" href="<?php echo base_url().'order/assisted/'.$record->id;?>">Buy For Me</a>
                      <a class="dropdown-item" href="<?php echo base_url().'order/international/'.$record->id;?>">Pickup Shipments</a>
                    </div>
                  </td>
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