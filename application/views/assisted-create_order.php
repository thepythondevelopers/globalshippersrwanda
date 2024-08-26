
    <!-- SHOPSHIP-CREATE ORDER CODE START  -->
        <div class="shopship-div shop-createDiv py-5">
            <div class="container">
                <h1 class="mb-3">Create Order</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="<?php echo base_url();?>">
                                <i class="fa fa-home"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="<?php echo base_url('assisted-sns');?>">Buy For Me</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Create Order</li>
                    </ol>
                </nav>

                <!-- Create Order Div Start -->
                <form class="" action ="<?php echo base_url('Shopnship/assisted_shopnship_item_insert')?>" method="post" enctype="multipart/form-data" id="assis_form" id="myForm">
                <input type="hidden" name="useremail" value="<?php echo $email->email;?>">
                <input type="hidden" name="userfname" value="<?php echo $email->fname;?>">
                <input type="hidden" name="userlname" value="<?php echo $email->lname;?>">
                <input type="hidden" name="userphone" value="<?php echo $email->phone;?>">
                <input type="hidden" name="adminemail" value="<?php echo $adminemail->email;?>">
                <div class="row step2show createdrow">
                    <div class="col-md-3 col-xs-12 order_type">
                        <div class="form-group">
                            <label>Order Type*</label>
                            <select class="form-control" name="order_sub_type" required="" id="order_sub_type">
                            <option value="">Please select order type</option>
                                <option value="Commercial">Commercial</option>
                                <option value="Gift">Gift</option>
                                <option value="Personal">Personal</option>
                                <option value="Sample">Sample</option>
                            </select>
                            <span class="error error_order_type">Please select order type</span>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12 courier_type" >
                            <label>Courier Type* (<a href="<?php echo base_url('shipping-calculator');?>" target="_blank"> click here for shipping rates </a>)</label>
                            <select class="form-control" name="courier_type" required="" id="courier_type">
                                <option>Select Courier Type</option>
                                <option value="1">Normal</option>
                                <option value="2">Premium</option>
                            </select>
                            <span class="error error_courier_type">Please select courier type</span>
                        </div>
                    </div>
                <div class="create-orderDiv py-4">
                    <ul class="nav nav-pills progtrckr">
                        <li class="progtrckr-done tab1">
                            <a href="#step-1">
                                <h4 class="list-group-item-heading">Add Order Item</h4>
                            </a>
                        </li>
                        <li class="progtrckr-todo tab2">
                            <a href="#step-2">
                                <h4 class="list-group-item-heading">From Shipping Country</h4>
                            </a>
                        </li>  
                        <li class="progtrckr-todo tab3">
                            <a href="#step-3">
                                <h4 class="list-group-item-heading">Shipping Address</h4>
                            </a>
                        </li> 
                    </ul>
    
                   
                        <div class="row setup-content" id="step-1">
                            <div class="col-xs-12">
                                <div class="col-md-12 well">
                                    <a href="javascript:void(0);" class="infoicon" data-bs-toggle="modal" data-bs-target="#infoModal">
                                        What are these details <i class="fas fa-question"></i>
                                    </a>
                                    <!-- The infoModal -->
                                    <div class="modal fade" id="infoModal">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Buy For Me Field FAQ</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                              </div>
                                              <div class="modal-body">
                                                <ul>
                                                <li>
                                                     <b>Skip the hassle of international shopping! Our Buy For Me service handles everything, with fees ranging from 10-22% based on the marketplace and order value. Let our experts navigate the process for you!</b>
                                                 </li> 
                                                <li>
                                                     <b>item URL<span>(Mandatory)</span> - </b>URL or Link of an item which you want to purchase from any online e-commerce.
                                                 </li>
                                                 <li>
                                                     <b>item Type <span>(Mandatory)</span> - </b>Type of an item you have purchased from online store.
                                                    <p>(Example: Books, Electronics, Cosmetics, Home decor, etc).</p>
                                                 </li>
                                                 <li>
                                                     <b>item Name <span>(Mandatory)</span> - </b>  Name of an item you have purchased from online store.
                                                     <p>(Example: iPhone 12, Shirt, Shoe, etc).</p>
                                                 </li>
                                                  <li>
                                                     <b>Size <span>(Optional)</span> - </b> Mention size if purchased item has size.
                                                 </li>
                                                 <li>
                                                     <b>Color <span>(Optional)</span> - </b>Mention color if purchased item has color.
                                                 </li>
                                                 <li>
                                                     <b>Quantity <span>(Mandatory)</span> - </b>Mention the number of the quantity purchased.
                                                 </li>
                                                 <li>
                                                     <b>Price <span>(Mandatory)</span> - </b>Mention price of order.
                                                 </li>
                                                 <li>
                                                     <b>Total Price <span>(Mandatory)</span> - </b>Total price of order.
                                                 </li>
                                                 <li>
                                                     <b>Add More Item <span>(Optional)</span> - </b>Add more items you would like to Buy in one Order if any. 
                                                 </li>
                                                 <li>
                                                     <b>Add Remark<span>(Optional)</span> - </b>Mention remark if you have some more details to tell.
                                                 </li>
                                               </ul>
                                              </div>
                                            </div>
                                          </div>
                                    </div>
                                    <!-- The infoModal End -->
                    
                                    <!-- <form> --> 
                                    <div class="newform">  
                                        <div class="add_form1">
                                            <div class="row newrow">
                
                                                <div class="col-md-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Item URL*</label>
                                                        <textarea id="itemurl" class="form-control" name="store[]" placeholder="Enter Item URL  / Local Store Name*" maxlength="2000"></textarea>
                                                        <small id="urlerror"></small>
                                                    </div>
                                                </div>
                
                                                <div class="col-md-3 col-xs-12">
                                                    <div class="form-group">
                
                                                        <label>Item Type*</label>                
                                                        <!-- <select id="itemname" class="form-control search_item select2-hidden-accessible" name="item_type[]" required="" data-select2-id="select2-data-itemname" tabindex="-1" aria-hidden="true"> -->
                                                        <select class="form-control search_item select2-hidden-accessible item_type" id="item_type" required="" name="item_type[]" data-select2-id="select2-data-itemname" tabindex="-1" aria-hidden="true">
                                                        <!-- <select class="form-control" id="item_type" required="" name="item_type[]" class="item_type"> -->
                                                            <option value=""data-select2-id="select2-data-2-nizz">Please select item type</option>
                                                            <option value="1" >Books</option>
                                                            <option value="2" >Cereals</option>
                                                            <option value="3" >Cosmetics</option>
                                                            <option value="4" >Crockery</option>
                                                            <option value="5" >Electronics</option>
                                                            <option value="6" >Food items</option>
                                                            <option value="7" >Handicraft</option>
                                                            <option value="8" >Home Decor</option>
                                                            <option value="9" >Others</option>                                
                                                        </select>
                                                        <span class="error" id="typeerror">Please Select Item Type</span>
                                                        <small id="typeerror"></small>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-xs-6">
                                                    <div class="form-group">
                                                        <label title="Please enter item name">Item Name*</label>
                                                        <input type="text" class="form-control product_name" id="package_name" name="package_name[]" placeholder="Enter item name" maxlength="100" required="" id="product_name">
                                                    </div>
                                                    <span class="error">Please Select Item name</span>
                                                    <small id="nameerror"></small>
                                                </div>
                                                <!-- <div class="col-md-2 col-xs-12" id="addr3">
                                                    <div class="form-group">
                                                        <label>Store Order Id*</label>
                                                        <input type="text" class="form-control order_id" name="order_id[]" id="order_id" placeholder="Order id" maxlength="50">
                                                        <span class="error">Please enter order id.</span>
                                                        <small><?php echo form_error('order_id[]'); ?></small>
                                                        <small id="ordererror"></small>
                                                    </div>
                                                </div> -->
                                                <div class="col-md-3 col-xs-6">
                                                    <div class="form-group">
                                                        <label>Size</label>
                                                        <input type="text" id="itemsize" class="form-control itemsize" name="size[]" placeholder="Enter Size" maxlength="50">
                                                        <span class="error">Please enter size</span>
                                                        
                                                       
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-xs-6">
                                                    <div class="form-group">
                                                        <label>Color</label>
                                                        <input type="text" id="itemcolor" class="form-control itemcolor" name="color[]" placeholder="Enter Color" maxlength="50">
                                                        <span class="error">Please enter color</span>
                                                      
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-xs-6">
                                                    <div class="form-group">
                                                        <label>Quantity*</label>
                                                        <input type="text" id="itemqty" class="form-control numvar itemqty" name="quantity[]" onchange="changeVal(this)" placeholder="Enter Quantity" required="" maxlength="3" >
                                                        <span class="error">Please enter quantity</span>
                                                        <small><?php echo form_error('quantity[]'); ?></small>
                                                        <small id="quantityerror"></small>
                                                    
                                                    </div>
                
                                                </div>
                                                <div class="col-md-3 col-xs-6">
                                                    <div class="form-group">
                                                        <label>Single Item Price *</label>
                                                        <input type="text" id="itemprice" class="form-control numvar price" name="price[]" onchange="changeVal(this)" placeholder="Enter Item Price" required="" maxlength="5">
                                                        <span class="error">Please enter price</span>
                                                        <!-- <small id="singleitempriceerror"></small> -->
                                                        
                                                    </div> 
                                                </div>
                                                <div class="col-md-3 col-xs-6">
                                                    <div class="form-group">
                                                        <label>Total Price*</label>
                                                        <input type="text" class="form-control numvar totalprice" name="totalprice[]" id="totalprice" value="0" placeholder="Total Price" required="" readonly="">
                                                        <span class="error">Please enter total price</span>
                                                    </div>
                                                </div>
                                                
                
                                            </div>
                                        </div>
                                        <div class="row">   
                                            <!-- <div class="col-md-6 col-xs-12">
                                                    <div class="input-images">
                                                        <div class="image-uploader">
                                                                <input type="file" id="image" class="image" name="image1[]" multiple="multiple" accet="image/jpg,image/png,image/jpeg,application/pdf">
                                                                <div class="uploaded">
                                                                    
                                                                </div>
                                                                <div class="upload-text">
                                                                    <i class="bi bi-cloud-arrow-up-fill"></i>
                                                                    <span>Click to browse (Total 10 files and 10 mb of size allowed).</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> -->
                                            <div class="col-md-6 col-xs-12 mt10">
                                                <div class="form-group">
                                                    <textarea rows="4" class="form-control" maxlength="100" name="remark" id="remark" placeholder="Add Remark"></textarea>
                                                    <span class="error">Please enter remark.</span>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <input type="hidden" name="assested_price" id="ingtotal" class="ingtotal">
                                                <label class="gtot">Grand Total : <span class="gtotal">0</span></label>
                                            </div>
                                        </div>  
                                    </div> 
                                    <div class="row">
                                        <div class="col-md-6 add">
                                            <a class="add_row addmorebtn1">
                                            <i class="fa fa-plus"></i> Add More Item</a>
                                        </div>
                                        <div class="col-md-6">
                                            <button id="activate-step-2" class="btn fright btn-md">Next</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <div class="row setup-content" id="step-2">
                            <div class="col-xs-12">
                                <div class="butonsnew">
                                       <button type="button" class="btn-back btn back1">
                                        <i class="fa fa-arrow-left"></i>
                                    </button>
                                           <div class="col-md-6 col-xs-6">
                                        <div class="form-group">
                                            <div class="form-group">
                                            <label>Shipping From Address*</label>
                                    <select class="form-control" required="" name="country_id">
                                        <option value="1" >USA</option> 
                                        <option value="2" >China</option> 
                                        <option value="3" >India</option> 
                                        <option value="4" >Japan</option> 
                                        <option value="5" >Turkey</option> 
                                        <option value="6" >Germany</option>
                                        <option value="7" >Rwanda</option>
                                        </select>               
                                            <span class="error">Please enter Shipping Country</span>
                                        </div>
                                        <div class="col-md-6">
                                         <button id="activate-step-3" class="btn fright btn-md step2">Next</button>
                                    </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row setup-content" id="step-3">
                            <div class="col-xs-12">
                                <div class="butonsnew">
                                    <button type="button" class="btn-back btn back1">
                                        <i class="fa fa-arrow-left"></i>
                                    </button>
                                    <button type="button" class="btn-fill existadd" >Use Existing Address</button> 
                                    <button type="button" class="btn-fill createnewaddrs">Create New Address</button>
                                </div>
                                <div class="row existingaddress" style="display: flex;">
                                    <button type="button" class="btn-back btn back2">
                                        <i class="fa fa-arrow-left"></i>
                                    </button> 
                                    <div id="testing">
                                    <?php foreach($add as $record){?>                                                                                               
                                    <div class="col-md-4">
                                        <div class="exadd" onclick="chooseAddress(<?php echo $record->address_id;?>)">
                                            <ul>
                                            <li><?php echo $record->fname." ".$record->lname;?>, <?php echo $record->phone_number;?></li>
                                                <li><?php echo $record->street_address;?></li>
                                                <li><?php echo $record->gate_code;?></li>
                                                <li><?php echo $record->city;?> ,<?php echo $record->state;?> ,<?php echo $record->country;?>,<?php echo $record->pin_code;?></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <?php }?>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="hidden" id="addressId" name="address_id">
                                    </div>
                                    
                                    <div class="col-md-12">
                                        <button type="submit" class="bttn-mid btn-fill fright submit2" id="shopnship_submit"> Submit</button>
                                    </div>
                                    
                                </div>
                                <div class="row createdaddrs" style="display: flex;">
                                    <button type="button" class="btn-back btn back3">
                                        <i class="fa fa-arrow-left"></i>
                                    </button>
                                    <div class="col-md-6 col-xs-6">
                                        <div class="form-group">
                                            <label>First Name*</label>
                                            <input type="text" class="form-control" name="first_name" id="first_name" maxlength="50" placeholder="Enter your First Name">
                                            <span class="error">Please enter first name</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xs-6">
                                        <div class="form-group">
                                            <label>Last Name*</label>
                                            <input type="text" class="form-control" name="last_name" id="last_name" maxlength="50" placeholder="Enter your last name">
                                            <span class="error">Please enter last name</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xs-6">
                                        <div class="form-group">
                                            <label style="display: block;">Phone number*:</label>
                                            <input type="text" id="mobile_code" class="form-control" placeholder="Phone Number" name="phone_number">
                                            <span class="error moberr">Please enter mobile number</span>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-xs-12">
                                        <div class="form-group">
                                            <label>Street Address*</label>
                                            <input type="text" class="form-control" id ="street_address"name="street_address" maxlength="100" placeholder="Enter street address">
                                            <span class="error">Please enter street address</span>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-xs-12">
                                        <div class="form-group">
                                            <label>Apt, Suit, Bldg, Gate code (optional) </label>
                                            <input type="text" maxlength="100" id="gate_code"class="form-control" name="gate_code" placeholder="Enter Apt, Suit, Bldg, Gate code (optional)">
                                            <span class="error">Please enter Apt, Suit, Bldg, Gate code</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-xs-6">
                                        <div class="form-group">
                                            <label>City*</label>
                                            <input type="text" class="form-control" id="city" name="city" maxlength="40" placeholder="City">
                                            <span class="error">Please enter city</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-xs-6">
                                        <div class="form-group">
                                            <label>State</label>
                                            <input type="text" maxlength="40" class="form-control" id ="state" name="state" placeholder="State">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-xs-6"> 
                                        <div class="form-group">
                                            <label>Country*</label>
                                            <select class="form-control" required="" name="country" id="country">
                                                <option value="Afghanistan" >Afghanistan</option> 
                                                 <option value="Albania" >Albania</option> 
                                                <option value="Algeria" >Algeria</option> 
                                                <option value="American Samoa" >American Samoa</option> 
                                                <option value="Andorra" >Andorra</option> 
                                        <option value="Angola" >Angola</option> 
                                        <option value="Anguilla" >Anguilla</option> 
                                        <option value="Antarctica" >Antarctica</option> 
                                        <option value="Antigua and Barbuda" >Antigua and Barbuda</option> 
                                        <option value="Argentina" >Argentina</option> 
                                        <option value="Armenia" >Armenia</option> 
                                        <option value="Aruba" >Aruba</option> 
                                        <option value="Australia" >Australia</option> 
                                        <option value="Austria" >Austria</option> 
                                        <option value="Azerbaijan" >Azerbaijan</option> 
                                        <option value="Bahamas" >Bahamas</option> 
                                        <option value="Bahrain" >Bahrain</option> 
                                        <option value="Bangladesh" >Bangladesh</option> 
                                        <option value="Barbados" >Barbados</option> 
                                        <option value="Belarus" >Belarus</option> 
                                        <option value="Belgium" >Belgium</option> 
                                        <option value="Belize" >Belize</option> 
                                        <option value="Benin" >Benin</option> 
                                        <option value="Bermuda" >Bermuda</option> 
                                        <option value="Bhutan" >Bhutan</option> 
                                        <option value="Bolivia" >Bolivia</option> 
                                        <option value="Bonaire, Sint Eustatius " >Bonaire, Sint Eustatius </option> 
                                        <option value="Bosnia and Herzegovina" >Bosnia and Herzegovina</option> 
                                        <option value="Botswana" >Botswana</option> 
                                        <option value="Bouvet Island" >Bouvet Island</option> 
                                        <option value="Brazil" >Brazil</option>                                                                                            
                                        <option value="British Indian Ocean Ter" >British Indian Ocean Ter</option> 
                                                                                                                                            
                                        <option value="Brunei Darussalam" >Brunei Darussalam</option> 
                                                                                                                                            
                                        <option value="Bulgaria" >Bulgaria</option> 
                                                                                                                                            
                                        <option value="Burkina Faso" >Burkina Faso</option> 
                                                                                                                                            
                                        <option value="Burundi" >Burundi</option> 
                                                                                                                                            
                                        <option value="Cambodia" >Cambodia</option> 
                                                                                                                                            
                                        <option value="Cameroon" >Cameroon</option> 
                                                                                                                                            
                                        <option value="Canada" >Canada</option> 
                                                                                                                                            
                                        <option value="Cape Verde" >Cape Verde</option> 
                                                                                                                                            
                                        <option value="Cayman Islands" >Cayman Islands</option> 
                                                                                                                                            
                                        <option value="Central African Republic" >Central African Republic</option> 
                                                                                                                                            
                                        <option value="Chad" >Chad</option> 
                                                                                                                                            
                                        <option value="Chile" >Chile</option> 
                                                                                                                                            
                                        <option value="China" >China</option> 
                                                                                                                                            
                                        <option value="Christmas Island" >Christmas Island</option> 
                                                                                                                                            
                                        <option value="Cocos (Keeling) Islands" >Cocos (Keeling) Islands</option> 
                                                                                                                                            
                                        <option value="Colombia" >Colombia</option> 
                                                                                                                                            
                                        <option value="Comoros" >Comoros</option> 
                                                                                                                                            
                                        <option value="Congo" >Congo</option> 
                                                                                                                                            
                                        <option value="The Dem Republic of Cong" >The Dem Republic of Cong</option> 
                                                                                                                                            
                                        <option value="Cook Islands" >Cook Islands</option> 
                                                                                                                                            
                                        <option value="Costa Rica" >Costa Rica</option> 
                                                                                                                                            
                                        <option value="Croatia" >Croatia</option> 
                                                                                                                                            
                                        <option value="Cuba" >Cuba</option> 
                                                                                                                                            
                                        <option value="Curaçao" >Curaçao</option> 
                                                                                                                                            
                                        <option value="Cyprus" >Cyprus</option> 
                                                                                                                                            
                                        <option value="Czech Republic" >Czech Republic</option> 
                                                                                                                                            
                                        <option value="Côte D&#039;Ivoire" >Côte D&#039;Ivoire</option> 
                                                                                                                                            
                                        <option value="Denmark" >Denmark</option> 
                                                                                                                                            
                                        <option value="Djibouti" >Djibouti</option> 
                                                                                                                                            
                                        <option value="Dominica" >Dominica</option> 
                                                                                                                                            
                                        <option value="Dominican Republic" >Dominican Republic</option> 
                                                                                                                                            
                                        <option value="Ecuador" >Ecuador</option> 
                                                                                                                                            
                                        <option value="Egypt" >Egypt</option> 
                                                                                                                                            
                                        <option value="El Salvador" >El Salvador</option> 
                                                                                                                                            
                                        <option value="Equatorial Guinea" >Equatorial Guinea</option> 
                                                                                                                                            
                                        <option value="Eritrea" >Eritrea</option> 
                                                                                                                                            
                                        <option value="Estonia" >Estonia</option> 
                                                                                                                                            
                                        <option value="Ethiopia" >Ethiopia</option> 
                                                                                                                                            
                                        <option value="Falkland Islands (Malvin" >Falkland Islands (Malvin)</option> 
                                                                                                                                            
                                        <option value="Faroe Islands" >Faroe Islands</option> 
                                                                                                                                            
                                        <option value="Fiji" >Fiji</option> 
                                                                                                                                            
                                        <option value="Finland" >Finland</option> 
                                                                                                                                            
                                        <option value="France" >France</option> 
                                                                                                                                            
                                        <option value="French Guyana" >French Guyana</option> 
                                                                                                                                            
                                        <option value="French Polynesia" >French Polynesia</option> 
                                                                                                                                            
                                        <option value="French Southern Territor" >French Southern Territor</option> 
                                                                                                                                            
                                        <option value="Gabon" >Gabon</option> 
                                                                                                                                            
                                        <option value="Gambia" >Gambia</option> 
                                                                                                                                            
                                        <option value="Georgia" >Georgia</option> 
                                                                                                                                            
                                        <option value="Germany" >Germany</option> 
                                                                                                                                            
                                        <option value="Ghana" >Ghana</option> 
                                                                                                                                            
                                        <option value="Gibraltar" >Gibraltar</option> 
                                                                                                                                            
                                        <option value="Greece" >Greece</option> 
                                                                                                                                            
                                        <option value="Greenland" >Greenland</option> 
                                                                                                                                            
                                        <option value="Grenada" >Grenada</option> 
                                                                                                                                            
                                        <option value="Guadeloupe" >Guadeloupe</option> 
                                                                                                                                            
                                        <option value="Guam" >Guam</option> 
                                                                                                                                            
                                        <option value="Guatemala" >Guatemala</option> 
                                                                                                                                            
                                        <option value="Guernsey" >Guernsey</option> 
                                                                                                                                            
                                        <option value="Guinea" >Guinea</option> 
                                                                                                                                            
                                        <option value="Guinea-Bissau" >Guinea-Bissau</option> 
                                                                                                                                            
                                        <option value="Guyana" >Guyana</option> 
                                                                                                                                            
                                        <option value="Haiti" >Haiti</option> 
                                                                                                                                            
                                        <option value="Heard and McDonald Islan" >Heard and McDonald Islan</option> 
                                                                                                                                            
                                        <option value="Holy See (Vatican City S" >Holy See (Vatican City S)</option> 
                                                                                                                                            
                                        <option value="Honduras" >Honduras</option> 
                                                                                                                                            
                                        <option value="Hong Kong" >Hong Kong</option> 
                                                                                                                                            
                                        <option value="Hungary" >Hungary</option> 
                                                                                                                                            
                                        <option value="Iceland" >Iceland</option> 
                                        <option value="Indonesia" >Indonesia</option> 
                                        <option value="Iran" >Iran</option> 
                                        <option value="Iraq" >Iraq</option> 
                                        <option value="Ireland" >Ireland</option> 
                                        <option value="Isle of Man" >Isle of Man</option> 
                                        <option value="Israel" >Israel</option>                                                                                     
                                        <option value="Italy" >Italy</option>                                                                                                    
                                        <option value="Jamaica" >Jamaica</option> 
                                                                                                                                            
                                        <option value="Japan" >Japan</option> 
                                                                                                                                            
                                        <option value="Jersey" >Jersey</option> 
                                                                                                                                            
                                        <option value="Jordan" >Jordan</option> 
                                                                                                                                            
                                        <option value="Kazakhstan" >Kazakhstan</option> 
                                                                                                                                            
                                        <option value="Kenya" >Kenya</option> 
                                                                                                                                            
                                        <option value="Kiribati" >Kiribati</option> 
                                                                                                                                            
                                        <option value="Kuwait" >Kuwait</option> 
                                                                                                                                            
                                        <option value="Kyrgyzstan" >Kyrgyzstan</option> 
                                                                                                                                            
                                        <option value="Laos" >Laos</option> 
                                                                                                                                            
                                        <option value="Latvia" >Latvia</option> 
                                                                                                                                            
                                        <option value="Lebanon" >Lebanon</option> 
                                                                                                                                            
                                        <option value="Lesotho" >Lesotho</option> 
                                                                                                                                            
                                        <option value="Liberia" >Liberia</option> 
                                                                                                                                            
                                        <option value="Libya" >Libya</option> 
                                                                                                                                            
                                        <option value="Liechtenstein" >Liechtenstein</option> 
                                                                                                                                            
                                        <option value="Lithuania" >Lithuania</option> 
                                                                                                                                            
                                        <option value="Luxembourg" >Luxembourg</option> 
                                                                                                                                            
                                        <option value="Macao" >Macao</option> 
                                                                                                                                            
                                        <option value="Madagascar" >Madagascar</option> 
                                                                                                                                            
                                        <option value="Malawi" >Malawi</option> 
                                                                                                                                            
                                        <option value="Malaysia" >Malaysia</option> 
                                                                                                                                            
                                        <option value="Maldives" >Maldives</option> 
                                                                                                                                            
                                        <option value="Mali" >Mali</option> 
                                                                                                                                            
                                        <option value="Malta" >Malta</option> 
                                                                                                                                            
                                        <option value="Marshall Islands" >Marshall Islands</option> 
                                                                                                                                            
                                        <option value="Martinique" >Martinique</option> 
                                                                                                                                            
                                        <option value="Mauritania" >Mauritania</option> 
                                                                                                                                            
                                        <option value="Mauritius" >Mauritius</option> 
                                                                                                                                            
                                        <option value="Mayotte" >Mayotte</option> 
                                                                                                                                            
                                        <option value="Mexico" >Mexico</option> 
                                                                                                                                            
                                        <option value=" Micronesia Federated States " > Micronesia Federated States </option> 
                                                                                                                                            
                                        <option value="Moldova, Republic of" >Moldova, Republic of</option> 
                                                                                                                                            
                                        <option value="Monaco" >Monaco</option> 
                                                                                                                                            
                                        <option value="Mongolia" >Mongolia</option> 
                                                                                                                                            
                                        <option value="Montenegro" >Montenegro</option> 
                                                                                                                                            
                                        <option value="Montserrat" >Montserrat</option> 
                                                                                                                                            
                                        <option value="Morocco" >Morocco</option> 
                                                                                                                                            
                                        <option value="Mozambique" >Mozambique</option> 
                                                                                                                                            
                                        <option value="Myanmar" >Myanmar</option> 
                                                                                                                                            
                                        <option value="Namibia" >Namibia</option> 
                                                                                                                                            
                                        <option value="Nauru" >Nauru</option> 
                                                                                                                                            
                                        <option value="Nepal" >Nepal</option> 
                                                                                                                                            
                                        <option value="Netherlands" >Netherlands</option> 
                                                                                                                                            
                                        <option value="New Caledonia" >New Caledonia</option> 
                                                                                                                                            
                                        <option value="New Zealand" >New Zealand</option> 
                                                                                                                                            
                                        <option value="Nicaragua" >Nicaragua</option> 
                                                                                                                                            
                                        <option value="Niger" >Niger</option> 
                                                                                                                                            
                                        <option value="Nigeria" >Nigeria</option> 
                                                                                                                                            
                                        <option value="Niue" >Niue</option> 
                                                                                                                                            
                                        <option value="Norfolk Island" >Norfolk Island</option> 
                                                                                                                                            
                                        <option value="North Korea" >North Korea</option> 
                                                                                                                                            
                                        <option value="North Macedonia" >North Macedonia</option> 
                                                                                                                                            
                                        <option value="Northern Mariana Islands" >Northern Mariana Islands</option> 
                                                                                                                                            
                                        <option value="Norway" >Norway</option> 
                                                                                                                                            
                                        <option value="Oman" >Oman</option> 
                                                                                                                                            
                                        <option value="Pakistan" >Pakistan</option> 
                                                                                                                                            
                                        <option value="Palau" >Palau</option> 
                                                                                                                                            
                                        <option value="Palestine, State of" >Palestine, State of</option> 
                                                                                                                                            
                                        <option value="Panama" >Panama</option> 
                                                                                                                                            
                                        <option value="Papua New Guinea" >Papua New Guinea</option> 
                                                                                                                                            
                                        <option value="Paraguay" >Paraguay</option> 
                                                                                                                                            
                                        <option value="Peru" >Peru</option> 
                                                                                                                                            
                                        <option value="Philippines" >Philippines</option> 
                                                                                                                                            
                                        <option value="Pitcairn" >Pitcairn</option> 
                                                                                                                                            
                                        <option value="Poland" >Poland</option> 
                                                                                                                                            
                                        <option value="Portugal" >Portugal</option> 
                                                                                                                                            
                                        <option value="Puerto Rico" >Puerto Rico</option> 
                                                                                                                                            
                                        <option value="Qatar" >Qatar</option> 
                                                                                                                                            
                                        <option value="Romania" >Romania</option> 
                                                                                                                                            
                                        <option value="Russian Federation" >Russian Federation</option> 
                                                                                                                                            
                                        <option value="Rwanda" selected>Rwanda</option> 
                                                                                                                                            
                                        <option value="Réunion" >Réunion</option> 
                                                                                                                                            
                                        <option value="Saint Barthélemy" >Saint Barthélemy</option> 
                                                                                                                                            
                                        <option value="Saint Helena" >Saint Helena</option> 
                                                                                                                                            
                                        <option value="Nevis" >Nevis</option> 
                                                                                                                                            
                                        <option value="Saint Lucia" >Saint Lucia</option> 
                                                                                                                                            
                                        <option value="Saint Martin" >Saint Martin</option> 
                                                                                                                                            
                                        <option value="Saint Pierre And Miquelo" >Saint Pierre And Miquelo</option> 
                                                                                                                                            
                                        <option value="Saint Vincent And The Gr" >Saint Vincent And The Gr</option> 
                                                                                                                                            
                                        <option value="Samoa" >Samoa</option> 
                                                                                                                                            
                                        <option value="San Marino" >San Marino</option> 
                                                                                                                                            
                                        <option value="Sao Tome and Principe" >Sao Tome and Principe</option> 
                                                                                                                                            
                                        <option value="Saudi Arabia" >Saudi Arabia</option> 
                                                                                                                                            
                                        <option value="Senegal" >Senegal</option> 
                                                                                                                                            
                                        <option value="Serbia" >Serbia</option> 
                                                                                                                                            
                                        <option value="Seychelles" >Seychelles</option> 
                                                                                                                                            
                                        <option value="Sierra Leone" >Sierra Leone</option> 
                                                                                                                                            
                                        <option value="Singapore" >Singapore</option> 
                                                                                                                                            
                                        <option value="Sint Maarten" >Sint Maarten</option> 
                                                                                                                                            
                                        <option value="Slovakia" >Slovakia</option> 
                                                                                                                                            
                                        <option value="Slovenia" >Slovenia</option> 
                                                                                                                                            
                                        <option value="Solomon Islands" >Solomon Islands</option> 
                                                                                                                                            
                                        <option value="Somalia" >Somalia</option> 
                                                                                                                                            
                                        <option value="South Africa" >South Africa</option> 
                                                                                                                                            
                                        <option value="South Georgia &amp; South Sa" >South Georgia &amp; South Sa</option> 
                                                                                                                                            
                                        <option value="South Korea" >South Korea</option> 
                                                                                                                                            
                                        <option value="South Sudan" >South Sudan</option> 
                                                                                                                                            
                                        <option value="Spain" >Spain</option> 
                                                                                                                                            
                                        <option value="Sri Lanka" >Sri Lanka</option> 
                                                                                                                                            
                                        <option value="Sudan" >Sudan</option> 
                                                                                                                                            
                                        <option value="Suriname" >Suriname</option> 
                                                                                                                                            
                                        <option value="Svalbard And Jan Mayen" >Svalbard And Jan Mayen</option> 
                                                                                                                                            
                                        <option value="Swaziland" >Swaziland</option> 
                                                                                                                                            
                                        <option value="Sweden" >Sweden</option> 
                                                                                                                                            
                                        <option value="Switzerland" >Switzerland</option> 
                                                                                                                                            
                                        <option value="Syrian Arab Republic" >Syrian Arab Republic</option> 
                                                                                                                                            
                                        <option value="Taiwan" >Taiwan</option> 
                                                                                                                                            
                                        <option value="Tajikistan" >Tajikistan</option> 
                                                                                                                                            
                                        <option value="Tanzania, United Republi" >Tanzania, United Republi</option> 
                                                                                                                                            
                                        <option value="Thailand" >Thailand</option> 
                                                                                                                                            
                                        <option value="Timor-Leste" >Timor-Leste</option> 
                                                                                                                                            
                                        <option value="Togo" >Togo</option> 
                                                                                                                                            
                                        <option value="Tokelau" >Tokelau</option> 
                                                                                                                                            
                                        <option value="Tonga" >Tonga</option> 
                                                                                                                                            
                                        <option value="Trinidad and Tobago" >Trinidad and Tobago</option> 
                                                                                                                                            
                                        <option value="Tunisia" >Tunisia</option> 
                                                                                                                                            
                                        <option value="Turkey" >Turkey</option> 
                                                                                                                                            
                                        <option value="Turkmenistan" >Turkmenistan</option> 
                                                                                                                                            
                                        <option value="Turks and Caicos Islands" >Turks and Caicos Islands</option> 
                                                                                                                                            
                                        <option value="Tuvalu" >Tuvalu</option> 
                                                                                                                                            
                                        <option value="Uganda" >Uganda</option> 
                                                                                                                                            
                                        <option value="Ukraine" >Ukraine</option> 
                                                                                                                                            
                                        <option value="United Arab Emirates" >United Arab Emirates</option> 
                                                                                                                                            
                                        <option value="United Kingdom" >United Kingdom</option> 
                                                                                                                                            
                                        <option value="United States of America " >United States of America </option> 
                                                                                                                                            
                                        <option value="US Minor Outlying Island" >US Minor Outlying Island</option> 
                                                                                                                                            
                                        <option value="Uruguay" >Uruguay</option> 
                                                                                                                                            
                                        <option value="Uzbekistan" >Uzbekistan</option> 
                                                                                                                                            
                                        <option value="Vanuatu" >Vanuatu</option> 
                                                                                                                                            
                                        <option value="Venezuela" >Venezuela</option> 
                                                                                                                                            
                                        <option value="Vietnam" >Vietnam</option> 
                                                                                                                                            
                                        <option value="Virgin Islands, British" >Virgin Islands, British</option> 
                                                                                                                                            
                                        <option value="Virgin Islands, U.S." >Virgin Islands, U.S.</option> 
                                                                                                                                            
                                        <option value="Wallis and Futuna" >Wallis and Futuna</option> 
                                                                                                                                            
                                        <option value="Western Sahara" >Western Sahara</option> 
                                                                                                                                            
                                        <option value="Yemen" >Yemen</option> 
                                                                                                                                            
                                        <option value="Zambia" >Zambia</option> 
                                                                                                                                            
                                        <option value="Zimbabwe" >Zimbabwe</option> 
                                                                                                                                            
                                        <option value="Åland Islands" >Åland Islands</option>
                                        </select>               
                                            <span class="error">Please enter country</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-xs-6">
                                        <div class="form-group">
                                            <label>Zipcode*</label>
                                            <input type="text" maxlength="8" id="pin"class="form-control" name="pin" placeholder="Zipcode">
                                            <span class="error">Please enter zipcode</span>
                                        </div>
                                    </div>
                                    <p id = "msg"> </p>
                                    <div class="col-md-12">
                                        <button type="submit"class="bttn-mid btn-fill fright"  name="submit" id="save">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- Create Order Div End -->

            </div>
        </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
        
 <script>
$(document).ready(function(){
 $("#save").click(function() 
{
  var item_type = $('.item_type').val();
  var product_name = $('.product_name').val();
  var store = $('#store').val();
  //var order_id =$('.tracking_number').val();
  var itemsize = $('.itemsize').val();
  var itemcolor = $('.itemcolor').val();
  var itemqty = $('.itemqty').val();
  var itemprice = $('.itemprice').val();
  var totalprice = $('.totalprice').val();
  var image = $('.image').val();
  var remark = $('#remark').val();
  var order_sub_type = $('#order_sub_type').val();
  var courier_type   = $('#courier_type').val();
  var first_name = $('#first_name').val();
  var last_name = $('#last_name').val();
  var mobile_code = $('#mobile_code').val();
  var street_address = $('#street_address').val();
  var gate_code = $('#gate_code').val();
  var city = $('#city').val();
  var state = $('#state').val();
  var country = $('#country').val();
  var pin = $('#pin').val();

if(itemsize!="" && itemcolor!="" && itemqty!="" && itemprice!="")
{
    $.ajax({
    type: "POST",
    url: "http://dev.globalshippersrwanda.com/Shopnship/assisted_shopnship_item_insert",
    dataType: 'json',
    data: {
                            
        user_id:user_id,
        item_type:item_type,
        product_name:product_name,
        store:store,
        itemsize:itemsize,
        itemcolor:itemcolor,
        itemqty:itemqty,
        itemprice:itemprice,
        totalprice:totalprice,
        image1:image1,
        remark:remark,
       // order_id:order_id,
                            
        order_sub_type: order_sub_type, 
        courier_type: courier_type,
        first_name:first_name,
        last_name:last_name,
        phone_number:phone_number,
        street_address:street_address,
        gate_code:gate_code,
        city:city,
        state:state,
        country:country,
        pin:pin

    },
    success: function(response) 
    {
        //alert("insert successfully")
     },
    });
                    
}
else
{
//alert("please fill all fields first");
}

});
});
jQuery('#myForm').validate({
    rules : {
        item_type:"required",
        package_name : "required",
        store : "required",
        //order_id : "required",
        quantity: "required",
        price : "required",
        order_sub_type:"required",
        courier_type:"required",
        first_name:"required",
        last_name:"required",
        phone_number:"required",
        street_address:"required",
        city:"required",
        country:"required",
        pin:"required"
    },messages: {
        item_type : "Please enter item type",
        package_name: "Please enter item name",
        store: "Please enter online store",
       // order_id: "Please enter order_id",
        quantity : "Please enter quantity",
        price: "Please enter price",
        order_sub_type:"Please enter order type",
        courier_type: "please enter courier type",
        first_name: "Please enter your first name",
        last_name: "Please enter last name ",
        phone_number: "Please enter phone number",
        street_address: "Please enter street address",
        city: "Please enter city",
        country: "Please enter country",
        pin: "Please enter pin code"
    }
  });   
  function chooseAddress($data){
    $('#addressId').val($data);
   
    }

    var header = document.getElementById("testing");
    var btns = header.getElementsByClassName("exadd");
    for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
   current[0].className = current[0].className.replace(" active", "");
   this.className += " active";
   });
}  
$("#itemprice").on('input',function(){
        var qnt = $('#itemqty').val()
        console.log(qnt);
        var p = $(this).val();
        gtotal = p * qnt;
            $(".gtotal").text(gtotal)
            $('#totalprice').text(gtotal)
            document.getElementById('totalprice').value=gtotal;
             document.getElementById('ingtotal').value=gtotal;
    })

    $("#itemqty").on('input',function(){
        var p = $('#itemprice').val()
        console.log(qnt);
        var qnt = $(this).val();
        gtotal = p * qnt;
            $(".gtotal").text(gtotal)
            $('#totalprice').text(gtotal)
            document.getElementById('totalprice').value=gtotal;
             document.getElementById('ingtotal').value=gtotal;

    })


    var data = [];
    var gtotal = 0;
    var index = 0; 
    function delete_row(row)
    {

        row.closest('.newrow').remove();
        var gtotal = 0;

        $(".newform .newrow").each(function () {
            //console.log($(this).find("#totalprice").val());
            gtotal = gtotal + JSON.parse($(this).find("#totalprice").val());
            $(".gtotal").text(gtotal)
            document.getElementById('ingtotal').value=gtotal;
        })
    }
    function changeVal(row) {
        var newrow = row.closest('.newrow');

        var qty = $(newrow).find(".qty").val();
        var price = $(newrow).find(".price").val();
        var totalprice = $(newrow).find("#totalprice");
        var tprice = 0;
        if (qty && price) {
            tprice = JSON.parse(qty) * JSON.parse(price);
            totalprice.val(tprice)
        }

        var gtotal = 0;

        $(".newform .newrow").each(function () {
            //alert($(this).find(".totalprice").val());
            gtotal = gtotal + JSON.parse($(this).find(".totalprice").val());
            $(".gtotal").text(gtotal)
             document.getElementById('ingtotal').value=gtotal;
        })
    }

 
// function changeVal() {
//         var qty = $(".newrow").find(".itemqty").val();
//         var price = $(".newrow").find(".price").val();
//         var totval1 = 0;
//         var gtotal = 0;
//         if (qty && price) {
//             totval1 = JSON.parse(qty) * JSON.parse(price);
//             //alert(totval1);
//            $(".newrow").find(".totalprice").val(totval1);
//            $(".totalprice").val(totval1)
//             $(".gtotal").val(totval1)
//             $(".gtotal").text(totval1);
//            document.getElementById('gtotal').value=totval1;
//         }
//             $(".add_form1").find(".newrow").each(function () {
//                 //alert("hello");
//                 var qty1 = $(this).find(".itemqty").val();
//                 var price1 = $(this).find(".price").val();
//                 if (qty1 && price1) {
//                     var totval11 = JSON.parse(qty1) * JSON.parse(price1);
//                     alert(totval11);
//                    // $(".createdrow").find(".totalprice").val(totval11);
//                     gtotal = gtotal + totval11;
//                     alert(gtotal);
//                 }
            
//             })
//             //$(".totalprice").val(gtotal)
//             $(".gtotal").val(gtotal)
//             $(".gtotal").text(gtotal);
//            document.getElementById('gtotal').value=gtotal;
            
//     }
 </script>