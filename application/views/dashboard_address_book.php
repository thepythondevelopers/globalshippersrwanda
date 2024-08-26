<style>
    /*css start address book*/
    .address_book .book {
        background: #fff;
        border-radius: 4px;
        box-shadow: 0 0 0.875rem 0 rgba(41,48,66,.05);
        margin-bottom: 24px;
        font-weight: 500;
        line-height: 1.2;
        color: #495057;
    }
    .address_book .book h4 {
        margin-bottom: 0.5rem;
        font-size: 18px;
    }
    .address_book .book a.editbtn {
        color: #495057;
    }
    .address_book .book p {
        color: #00394a;
        font-size: 14px;
        margin-bottom: 1em!important;
        font-weight: 400;
    }
    .address_book .book a.delbtn {
        color: #000;
        font-size: 12px;
        display: flex;
        align-items: center;
        justify-content: flex-end;
    }
    .address_book .book a.delbtn i {
        margin-right: 5px;
    }
    /*css end address book*/
</style>
<div class="shopship-div address_book py-5">
            <div class="container">
                <h1 class="mb-3">Your Address</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0);">
                                <i class="fa fa-home"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Your Address</li>
                    </ol>
                </nav>

                <div class="row">
                    <?php foreach($add as $address) {?>
                    <div class="col-lg-4 co-md-6 ">
                        <div class="book p-4">
                            <div class="d-flex justify-content-between">
                               
                                <h4><?php echo $address->fname." ".$address->lname?></h4>
                                <a href="javascript:void(0) " class="editbtn" data-array-id="<?php ?>" data-bs-toggle="modal" data-bs-target="#editModal<?php echo $address->address_id;?>"  >
                                    <i class="fa fa-edit"></i>
                                </a>
                            </div>
                            <p><?php echo $address->phone_number;?></p>
                            <p><?php echo $address->street_address;?></p>
                            <p><?php echo $address->gate_code." ".$address->city." ".$address->state." ".$address->country." ".$address->pin_code;?></p>
                            <a href="<?php echo base_url()."Shopnship/delete_useraddress/$address->address_id";?>" class="delbtn">
                                <i class="fa fa-trash"></i> Remove
                            </a>
                            
                        </div>
                       
                        <!-- The editModal -->
                        <div class="modal fade" id="editModal<?php echo $address->address_id;?>">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                               
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Edit Address</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                  </div>
                                  <div class="modal-body">
                                    
                                  <form action="<?php echo base_url('Shopnship/address_update')?>"method="post">
                                    <div class="row">
                                      
                                        <input type="hidden" name="address_id" id="address_id"value="<?php echo $address->address_id;?>">
                                        <div class="col-md-6 col-xs-6">
                                            <div class="form-group">
                                                <label>First Name*</label>
                                                <input type="text" class="form-control"name="first_name" maxlength="50" placeholder="Enter your First Name"value="<?php echo $address->fname;?>">
                                                <span class="error">Please enter first name</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xs-6">
                                            <div class="form-group">
                                                <label>Last Name*</label>
                                                <input type="text" class="form-control" name="last_name" maxlength="50" placeholder="Enter your last name" value="<?php echo $address->lname;?>">
                                                <span class="error">Please enter last name</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xs-6">
                                            <div class="form-group">
                                                <label style="display: block;">Phone number*:</label>
                                                <input type="text" id="mobile_code" class="form-control" placeholder="Phone Number" name="phone_number" value="<?php echo $address->phone_number; ?>">
                                                <span class="error moberr">Please enter mobile number</span>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-xs-12">
                                            <div class="form-group">
                                                <label>Street Address*</label>
                                                <input type="text" class="form-control" name="street_address" maxlength="100" placeholder="Enter street address" value="<?php echo $address->street_address;?>">
                                                <span class="error">Please enter street address</span>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-xs-12">
                                            <div class="form-group">
                                                <label>Apt, Suit, Bldg, Gate code (optional) </label>
                                                <input type="text" maxlength="100" class="form-control" name="gate_code" placeholder="Enter Apt, Suit, Bldg, Gate code (optional)" value=<?php echo $address->gate_code;?>>
                                                <span class="error">Please enter Apt, Suit, Bldg, Gate code</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-6">
                                            <div class="form-group">
                                                <label>City*</label>
                                                <input type="text" class="form-control" name="city" maxlength="40" placeholder="City" value="<?php echo $address->city;?>">
                                                <span class="error">Please enter city</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-6">
                                            <div class="form-group">
                                                <label>State</label>
                                                <input type="text" maxlength="40" class="form-control" name="state" placeholder="State" value="<?php echo $address->state;?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-6">
                                            <div class="form-group">
                                                <label>Country*</label>
                                                <select class="form-control" required="" name="country">
                                                    <option value="Afghanistan">Afghanistan</option> 
                                                    <option value="Albania">Albania</option> 
                                                    <option value="Algeria">Algeria</option> 
                                                    <option value="American Samoa">American Samoa</option>
                                                    <option value="Andorra">Andorra</option> 
                                                    <option value="Angola">Angola</option>
                                                    <option value="Anguilla">Anguilla</option> 
                                                    <option value="Antarctica">Antarctica</option>
                                                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                    <option value="Argentina">Argentina</option> 
                                                    <option value="Armenia">Armenia</option> 
                                                    <option value="Aruba">Aruba</option> 
                                                    <option value="Australia">Australia</option> 
                                                    <option value="Austria">Austria</option> 
                                                    <option value="Azerbaijan">Azerbaijan</option>
                                                    <option value="Bahamas">Bahamas</option>
                                                    <option value="Bahrain">Bahrain</option>
                                                    <option value="Bangladesh">Bangladesh</option>
                                                    <option value="Barbados">Barbados</option>
                                                    <option value="Belarus">Belarus</option>
                                                    <option value="Belgium">Belgium</option>
                                                    <option value="Belize">Belize</option>
                                                    <option value="Benin">Benin</option>
                                                    <option value="Bermuda">Bermuda</option>
                                                    <option value="Bhutan">Bhutan</option>
                                                    <option value="Bolivia">Bolivia</option>
                                                    <option value="Bonaire, Sint Eustatius ">Bonaire, Sint Eustatius </option>
                                                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                                    <option value="Botswana">Botswana</option>
                                                    <option value="Bouvet Island">Bouvet Island</option>
                                                    <option value="Brazil">Brazil</option>
                                                    <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                                    <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                    <option value="Bulgaria">Bulgaria</option>
                                                    <option value="Burkina Faso">Burkina Faso</option>
                                                    <option value="Burundi">Burundi</option>
                                                    <option value="Cambodia">Cambodia</option>
                                                    <option value="Cameroon">Cameroon</option>
                                                </select>               
                                                <span class="error">Please enter country</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-6">
                                            <div class="form-group">
                                                <label>Zipcode*</label>
                                                <input type="text" maxlength="8" class="form-control" name="pin" placeholder="Zipcode" value="<?php echo $address->pin_code?>">
                                                <span class="error">Please enter zipcode</span>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button class="bttn-mid btn-fill fright" id="createSubmit" type="submit">Save</button>
                                        </div>
                                       
                                    </div>
                                    </form>
                                  </div>
                                 
                                </div>
                              </div>
                            
                        </div>
                       
                        <!-- The editModal End -->
                    </div>
                        <?php }?>
                        
                </div>

            </div>
        </div>

        <script>
             function chooseAddress($data,$add){
                console.log($data);
                console.log($add);
                $('#address_id').val($data);
   
                }
            </script>