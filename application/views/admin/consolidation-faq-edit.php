
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Update Consolidation Faq</h1>
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
            <form method="post" enctype="multipart/form-data"
              action="<?php echo base_url('Admin/Admin/consolidationeditfaq')?>">
              <input type="hidden" name="faqid" value="<?php echo $data->id; ?>">
              <div class="card-body">
                <div class="row createdrows">
                  <div class="col-md-6 ">
                    <div class="form-group">
                      <label>Question*</label>
                      <input type="text" class="form-control" name="question"
                        placeholder="Enter question" value = "<?php echo $data->question;?>">
                    </div>
                  </div>
                  <div class="col-md-6">

                    <div class="form-group">
                      <label>Answer*</label>
                      <textarea class="form-control" name="answer"
                        placeholder="Enter answer"><?php echo $data->answer;?></textarea>
                    </div>
                  </div>
                </div>
                <div class="consolidationsec4 card-body"></div>
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

</div>