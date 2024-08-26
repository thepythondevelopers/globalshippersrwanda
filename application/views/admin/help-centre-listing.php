
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
              <h3 class="card-title">Help Centre Details</h3>
            </div>
            <?php if($this->session->flashdata('msg'))
                    {
                        echo "<p class = 'alert alert-success'>".$this->session->flashdata('message')."</p>";
                    }
                 
                    ?>
            <div class="card-header"><a href="<?php echo base_url('cms/help-centre');?>" style="color:black;">Add Help centre</a></div>
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Category Id</th>
                    <th>Category Name</th>
                    <th>Question</th>
                    <th>View</th>
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
                        <?php echo $listdata->qna_id;?>
                    </td>
                    <td>  <?php echo $listdata->cat_name;?></td>
                    <td>
                    <?php echo $listdata->cat_question;?>
                    </td>
                    <td><a href="<?php echo base_url().'help-centre/'.$listdata->qna_id;?>"><i
                    class="fa fa-eye" style="color:#000"></i></a></td>
                    <td><a href="<?php echo base_url().'cms/edit-help-centre/'.$listdata->qna_id;?>"><i
                          class="fa fa-edit" style="color:#000"></i></a></td>
                    <td><a href="<?php echo base_url().'cms/delete-help-centre/'.$listdata->qna_id;?>"><i
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