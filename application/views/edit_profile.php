<style>
   /*Edit profile css start*/
   .address_book .book {
    background: #fff;
    border-radius: 4px;
    box-shadow: 0 0 0.875rem 0 rgba(41, 48, 66, 0.05);
    margin-bottom: 24px;
    font-weight: 500;
    line-height: 1.2;
    color: #495057;
  }
  .address_book .book p {
    color: #00394a;
    font-size: 14px;
    margin-bottom: 1em !important;
    font-weight: 400;
  }
  .ch-edit .btn-primary {
    background-color: #000;
    border-color: #000;;
    color: #fff;
    font-size: 12px;
    padding: 5px 10px;
    margin-right: 5px;
    border-radius: 0;
}
.ch-edit .btn-primary:hover {
    background-color: #000;
    border-color: #000;
}
.ch-edit a#editbtn {
    margin-right: 0;
}
.ch-not a.btn-danger {
    background-color: #dc3545;
    border-color: #dc3545;
    font-size: 12px;
    padding: 5px 10px;
    color: #fff;
    border-radius: 0;
}
.ch-not a.btn-danger:hover {
    background-color: #d23430;
    border-color: #c9302c;
}
.supportline {
    color: #055ce8;
    font-size: 12px;
    font-weight: 600;
}
.scardboxes .card .card-body h5 {
    font-weight: 500;
    color: #495057;
    font-size: 15px;
}
.scardbox8 ul.addcont li {
    width: 100%;
    padding: 0 10px;
    border: none;
}
/*End css edit profile*/
</style>
<div class="shopship-div address_book py-5">
        <div class="container">
          <h1 class="mb-3">Profile</h1>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="javascript:void(0);">
                  <i class="fa fa-home"></i>
                </a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Profile
              </li>
            </ol>
          </nav>

          <div class="row">
           
            <div class="col-lg-4 col-md-12">
              <div class="scardboxes">
                <div class="card flex-fill userpr">
                  <div class="card-body py-4">
                    <h4 class="mb-2"><?php echo $email->fname.' '.$email->lname;?></h4>
                    <div class="mb-1">
                      <ul>
                        <li><span>Unique ID: </span><?php echo $email->id;?></li>
                        <li><span>Referral Code: </span>USR1790</li>
                        <li>
                          <strong>Primary Mobile Number</strong>
                        </li>
                        <li>
                          <span>
                            <i class="fas fa-mobile"></i> </span
                          ><?php echo $email->phone;?>
                          <b>
                            <i class="fas fa-check-circle"></i>
                          </b>
                        </li>
                        <li>
                          <strong>Primary Email</strong>
                        </li>
                        <li>
                          <span>
                            <i class="fas fa-envelope"></i> </span
                          ><?php echo $email->email;?>
                          <b>
                            <i class="fas fa-check-circle"></i>
                          </b>
                        </li>
                        <li><span>Total Order: </span><?php print_r($order_count[0]->order_count+($assis_order_count[0]->order_count)+$inter_order_count[0]->order_count);?></li>
                      </ul>
                      <div class="d-flex align-items-center justify-content-center flex-wrap-wrap mb-2 ch-edit">
                        <a class="btn btn-primary" id="changepwdbtn" href="javascript:void(0)"
                        data-bs-toggle="modal" data-bs-target="#chpswdModal">Change Password</a
                        >
                        <a class="btn btn-primary" id="editbtn" href="javascript:void(0)"
                        data-bs-toggle="modal" data-bs-target="#editsModal">Edit Profile</a
                        >
                        <!-- The chpswdModal -->
                        <div class="modal fade" id="chpswdModal">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div><?php echo validation_errors()?></div>
                                  <form action ="<?php echo base_url('Home/change_password')?>" method="post"> 
                                  <input type="hidden" name="id" id="id" value="<?php echo $email->id;?>>">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Change Password</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                  </div>
                                  <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12 form-group mb-3">
                                            <label for="exampleInputEmail1">Current Password*</label>
                                            <input type="password" name="current_password" class="form-control" required="" value="" placeholder="Enter Current Password">
                                        </div>
                                        <div class="col-md-12 form-group mb-3">
                                            <label for="phone">New Password*</label>
                                            <input type="password" class="form-control" name="new_password" value="" placeholder="Enter New Password">
                                        </div>
                                        <div class="col-md-12 form-group mb-3">
                                            <label for="address">Confirm Password*</label>
                                            <input type="password" name="confirmed" placeholder="Enter Confirm Password" class="form-control">
                                        </div>
                                    </div>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Change Password</button>
                                </div>
                              </form>
                                </div>
                              </div>
                        </div>
                        <!-- The chpswdModal End -->

                        <!-- The editsModal -->
                        <div class="modal fade" id="editsModal">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <form action = "<?php echo base_url('Shopnship/update_record')?>" method="post">
                                <input type="hidden" id="id" value="<?php echo $email->id;?>" name="id">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Edit Profile</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                  </div>
                                  <div class="modal-body">
                                    <div class="row">
                                      <input type="hidden" name="did" value="" id="id">
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="exampleInputEmail1">First Name</label>
                                            <input type="text" name="first_name" class="form-control" required="" value="<?php echo $email->fname;?>" placeholder="Enter First Name">
                                        </div>

                                        <div class="col-md-6 form-group mb-3">
                                            <label for="firstName1">Last Name</label>
                                            <input type="text" name="last_name" class="form-control" required="" value="<?php echo $email->lname?>" placeholder="Enter Last Name">
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="address">Address Line 1</label>
                                            <input type="text" name="address_line" class="form-control" required="" value="<?php echo $email->address_line;?>" placeholder="Enter Last Name">
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="landmark">Landmark</label>
                                            <input type="text" name="landmark" class="form-control" required="" value="<?php echo $email->landmark;?>" placeholder="Enter Last Name">
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="zipcode">Zipcode</label>
                                            <input type="text" name="zipcode" class="form-control" required="" value="<?php echo $email->zipcode;?>" placeholder="Enter Last Name">
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="state">State</label>
                                            <input type="text" name="state" class="form-control" required="" value="<?php echo $email->state;?>" placeholder="Enter Last Name">
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="city">City</label>
                                            <input type="text" name="city" class="form-control" required="" value="<?php echo $email->city;?>" placeholder="Enter Last Name">
                                        </div>
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="phone">Delivery Phone Number</label>
                                            <input type="text" name="phone_number" class="form-control" required="" value="<?php echo $email->phone;?>" placeholder="Enter Last Name">
                                        </div>
                                        <!-- <div class="col-md-12 form-group mb-3">
                                            <label for="phone " class="supportline">*To change primary mobile number please <u>contact support</u>.</label>
                                            <input type="hidden" class="form-control" readonly="" value="globalshippersrwanda@gmail.com" placeholder="Enter Email">
                                        </div> -->

                                    </div>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                  </div>
                                  </form>
                                </div>
                              </div>
                        </div>
                        <!-- The editsModal End -->
                      </div>
                      <!-- <div class="d-flex align-items-center justify-content-center ch-not">
                        <a
                        onclick="return confirm('Are you sure you want to off your whatsapp notification?');"
                        title="click to turn off notification"
                        class="btn btn-danger"
                        id="changepwdbtn"
                        href=""
                        >Notification off</a
                        >
                    </div>                       -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="scardboxes scardbox8">
                    <?php foreach($address as $user_address){?>  
                        <div class="card flex-fill userpr">
                            <div class="card-body py-4">
                                <h5>Your Address</h5>
                                <ul class="addcont">
                                    <li><?php echo $user_address->fname." ".$user_address->lname;?></li>
                                    <li><?php echo $user_address->phone;?></li>
                                    <li><?php echo $user_address->address_line;?></li>
                                    <li><?php echo $user_address->landmark;?></li>
                                    <li><?php echo $user_address->city;?> ,<?php echo $user_address->state;?>,<?php echo $user_address->zipcode;?></li>
                                </ul>
                                
                            </div>
                        </div>
                        <?php }?>
                </div>
          </div>
        </div>
      </div>