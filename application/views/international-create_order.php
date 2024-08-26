<div class="shopship-div shop-createDiv inter-createDiv py-5">
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
                            <a href="<?php echo base_url('international-shipment');?>">Pickup Shipments</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Create Order</li>
                    </ol>
                </nav>

                <!-- Create Order Div Start -->
            <form action = "<?php echo base_url('Shopnship/international_insert_package_information');?>" method="post" enctype="multipart/form-data">
            <input type="hidden" name="useremail" value="<?php echo $email->email;?>">
                <input type="hidden" name="userfname" value="<?php echo $email->fname;?>">
                <input type="hidden" name="userlname" value="<?php echo $email->lname;?>">
                <input type="hidden" name="userphone" value="<?php echo $email->phone;?>">
                <input type="hidden" name="adminemail" value="<?php echo $adminemail->email;?>">
                <div class="row">
                    <div class="col-md-3 col-xs-12">
                        <div class="form-group">
                            <label>Order Type*</label>
                            <select class="form-control" name="order_sub_type" required="">
                            <option value="">Please select order type</option>
                                <option value="Commercial">Commercial</option>
                                <option value="Gift">Gift</option>
                                <option value="Personal">Personal</option>
                                <option value="Sample">Sample</option>
                            </select>
                            <span class="error error_order_type">Please Select Order Type</span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-xs-12">
                        <label>Courier Type* (<a href="<?php echo base_url('shipping-calculator');?>" target="_blank"> click here for shipping rates </a>)</label>
                        <select class="form-control" name="courier_type" required="">
                            <option value="">Select Courier Type</option>
                            <option value="1">Normal</option>
                            <option value="2">Premium</option>
                        </select>
                    </div>
                    <div class="col-md-3 col-xs-12">
                        <label>Client Order ID:</label>
                        <input type="text" name="ref_order_id" class="form-control" placeholder="Enter Reference Order ID">
                    </div>
                </div>
                <div class="create-orderDiv py-4">
                    <div class="row">
                        <div class="col-md-4">
                            <label>First Name*:</label>
                            <input type="text" name="contact_first_name" id="contact_first_name" value="" class="form-control" placeholder="Enter First Name" maxlength="100" required="">
                        </div>
                        <div class="col-md-4">
                            <label>Last Name*:</label>
                            <input type="text" name="contact_last_name" id="contact_last_name" value="" maxlength="100" class="form-control" placeholder="Enter Last Name" required="">
                        </div>
                        <div class="col-md-4">
                            <label style="display: block;">Mobile Number*:</label>
                            <input type="text" id="mobile_number" class="form-control " placeholder="Phone Number" name="mobile_number">
                        </div>
                        <div class="col-md-4">
                            <label>Email*:</label>
                            <input type="email" class="form-control" id="contact_email" name="contact_email" value="" placeholder="Enter Email" maxlength="100" required="">
                        </div>
                        <div class="col-md-12 medical_items mb-3">
                            <label>
                                <input type="checkbox" name="prescriptioncheck">Medical Items
                            </label>
                        </div>
                    </div>
                    <h2>Pick Up Address:</h2>
                    <div class="row">
                        <div class="col-md-4 col-xs-6 col-sm-6">
                            <label>First Name*:</label>
                            <input type="text" class="form-control" name="pick_firstname" value="" maxlength="100" placeholder="First Name" required="">
                        </div>
                        <div class="col-md-4 col-xs-6 col-sm-6">
                            <label>Last Name*:</label>
                            <input type="text" class="form-control" name="pick_lastname" value="" maxlength="100" placeholder="Last Name" required="">
                        </div>
                        <div class="col-md-4 col-xs-6 col-sm-6">
                            <label>Email*:</label>
                            <input type="email" class="form-control" name="pick_email" value="" maxlength="100" placeholder="Enter Email" required="">
                        </div>
                        
                        <div class="col-md-4 col-xs-6 col-sm-6">
                            <label>Country*:</label>
                            <!-- <input type="text" class="form-control" maxlength="100" id="pick_country" name="pick_country" placeholder="Enter Country" value="India" readonly=""> -->
                            <select class="form-control" required="required" name="pick_country">
                                        <option value="1" >USA</option> 
                                        <option value="2" >China</option> 
                                        <option value="3" >India</option> 
                                        <option value="4" >Japan</option> 
                                        <option value="5" >Turkey</option> 
                                        <option value="6" >Germany</option>
                                        <option value="7" >Rwanda</option>
                                        </select> 
                        </div>
                        <div class="col-md-4 col-xs-6 col-sm-6">
                            <label>State:</label>
                            <input type="text" class="form-control" id="pick_state" name="pick_state" value="" placeholder="Enter State" maxlength="100">
                        </div>
                        <div class="col-md-4 col-xs-6 col-sm-6">
                            <label>City*:</label>
                            <input type="text" class="form-control" id="pick_city" name="pick_city" value="" placeholder="Enter City" maxlength="100" required="">
                        </div>
                        
                        <div class="col-md-4 col-xs-6 col-sm-6">
                            <label>Street Address 1*:</label>
                            <input type="text" class="form-control" name="pick_street" value="" maxlength="250" placeholder="Enter Street Address 1" required="">
                        </div>
                        <div class="col-md-4 col-xs-6 col-sm-6">
                            <label>Street Address:</label>
                            <input type="text" class="form-control" name="pick_street2" value="" maxlength="250" placeholder="Enter Street Address 2 (Optional)">
                        </div>
                        <div class="col-md-4 col-xs-6 col-sm-6">
                            <label>Pin code*:</label>
                            <input type="text" class="form-control numvar" id="pincode" onChange=pincodecheck() name="pick_pincode" value="" maxlength="6" minlength="5" placeholder="Enter Pin code" required="">
                            <span id=warning></span>
                        </div>
                        
                        <div class="col-md-4 col-xs-6 col-sm-6">
                            <label>Mobile*:</label>
                            <input type="text" class="form-control" id="mobile_code1" placeholder="Phone Number" name="pic_mobile_number">
                        </div>
                        <div class="col-md-4 col-xs-6 col-sm-6">
                            <label>Upload Document*: 1st ID</label>
                            <input type="file" name="img1" class="form-control" style="padding: 2px;" required="">
                            <span class="upspan">(Govt. Id's 1 and it must be less than 2MB)</span>
                        </div>
                        <div class="col-md-4 col-xs-6 col-sm-6">
                            <label>Upload Document*: 2nd ID</label>
                            <input type="file" name="img2" class="form-control" style="padding: 2px;" required="">
                            <span class="upspan">(Govt. Id's 2 and it must be less than 2MB)</span>
                        </div>
                    </div>
                    <h2>Package Information:</h2>
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <label>No of Boxes*:<span>In number</span></label>
                            <input type="number" class="form-control " name="package_boxes" value="" max="999" min="1" placeholder="Enter No of Boxes" required="">
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <label>Weight of Package*:<span>In KG</span></label>
                            <input type="number" class="form-control" value="0.5" id="package_weight" name="package_weight" placeholder="Enter Weight" min="0.5" step="0.5">
                        </div>
                    </div>
                    <div class="row heightlabels">
                        <div class="col-md-12">
                            <label style=" margin-bottom: 20px;">Dimension of package if you are aware (Optional)  :</label>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <label>Height(in CM):</label>
                            <div class="heightgroup">
                                <a class="minus" href="javascript:void(0)" id="minusheight">-</a>
                                <input type="number" id="height" name="height" class="form-control heightin" placeholder="HEIGHT(CM):" value="" min="1" step="0.5">
                                <a class="plus" href="javascript:void(0)" id="plusheight">+</a>
                            </div>  
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <label>Width(in CM):</label>
                            <div class="heightgroup">
                                <a class="minus" href="javascript:void(0)" id="minuswidth">-</a>
                                <input type="number" id="width" name="width" class="form-control widthin" placeholder="WIDTH(CM):" value="" min="1" step="0.5">
                                <a class="plus" href="javascript:void(0)" id="pluswidth">+</a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <label>Depth(in CM):</label>
                            <div class="heightgroup">
                                <a class="minus" href="javascript:void(0)" id="minusdepth">-</a>
                                <input type="number" id="depth" name="depth" class="form-control depthin" placeholder="DEPTH(CM):" value="" min="1" step="0.5">
                                <a class="plus" href="javascript:void(0)" id="plusdepth">+</a>
                            </div>
                        </div>                        
                    </div>
                    <div class="addItem1">
                    <div class="addItem">
                        <div class="row alreadycreate">
                            <div class="col-md-4 col-sm-6 col-xs-6">
                                <label>Item Type*:</label>
                                <select class="form-control package_name select2-hidden-accessible" name="item_type[]" required="" data-select2-id="select2-data-package_name" tabindex="-1" aria-hidden="true" id="item_type">
                                    <option value="" >Please select item type</option>
                                    <option value="1">Books</option>
                                    <option value="2">Cereals</option>
                                    <option value="3">Cosmetics</option>
                                    <option value="4">Crockery</option>
                                    <option value="5">Electronics</option>
                                    <option value="6">Food items</option>
                                    <option value="7">Handicraft</option>
                                    <option value="8">Others</option>
                                </select>
                                <span class="error error_order_type">Please Select Item Type</span>
                            </div>
                            <div class="col-md-2 col-sm-6 col-xs-6">
                                <div class="form-group">
                                    <label title="Please enter item name">Item Name*</label>
                                    <input type="text" class="form-control" name="package_name[]" placeholder="Enter item name" maxlength="100" required="" id="product_name">
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-6 col-xs-6">
                                <label>Quantity*:</label>
                                <input type="number" name="quantity[]" min="1" class="form-control package_quantity" maxlength="4" max="999" placeholder="Quantity" required="" id="itemqty"  oninput='calTotal()'>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-6">
                                <label>Price (Per Item in USD)*:</label>
                                <input type="number" name="package_price[]" min="1" class="form-control package_price" placeholder="Price" maxlength="7" step="0.001" max="99999" required="" id="itemprice"  oninput='calTotal()'>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-6">
                                <label>Total Price*:</label>
                                <input type="number" name="package_total_price[]" min="1" class="form-control totalprice" placeholder="Total Price" required="" readonly="">
                            </div>
                            <div class="addedrow">
                        </div>
                        </div>
                    </div>
                </div>
                    <div class="row">
                        <a class="addmorebtn" href="javascript:void(0)" >
                            <i class="fa fa-plus"></i>Add More Items
                        </a>
                    </div>
                    <div class="row">
                        <div class="col-md-6"></div>
                        <div class="col-md-3">
                            <label class="mtop0">Total Invoice Value</label>
                        </div>
                        <div class="col-md-3">
                            <input type="text" id="total_invoice" class="form-control numvar totalval" name="totalval" required="" readonly="">
                        </div>
                    </div>
                    <h2>Destination Address:</h2>
                    <div class="row">
                        <div class="col-md-4 col-xs-6 col-sm-6">
                            <label>First Name*:</label>
                            <input type="text" class="form-control" name="dest_first_name" value="" maxlength="100" placeholder="First Name" required="">
                        </div>
                        <div class="col-md-4 col-xs-6 col-sm-6">
                            <label>Last Name*:</label>
                            <input type="text" class="form-control" name="dest_last_name" value="" maxlength="100" placeholder="Last Name" required="">
                        </div>
                        <div class="col-md-4 col-xs-6 col-sm-6">
                            <label style="display: block;">Mobile Number*:</label>
                            <input type="text" id="mobile_code2" class="form-control" placeholder="Phone Number" name="dest_mobile_number">
                        </div>
                        
                        <div class="col-md-4 col-xs-6 col-sm-6">
                            <label>Country*:</label>
                            <select class="form-control" required="" name="dest_country">
                                <option value="" selected="" disabled="">Select</option>
                                <!-- <option value="Afghanistan">Afghanistan</option>
                                <option value="Albania">Albania</option> 
                                <option value="Algeria">Algeria</option> 
                                <option value="American Samoa">American Samoa</option>
                                <option value="Andorra">Andorra</option> 
                                <option value="Angola">Angola</option>
                                <option value="Åland Islands">Åland Islands</option>  -->
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
                        </div>
                        <div class="col-md-4 col-xs-6 col-sm-6">
                            <label>State:</label>
                            <input type="text" class="form-control" maxlength="50" name="dest_state" placeholder="Enter State">
                        </div>
                        <div class="col-md-4 col-xs-6 col-sm-6">
                            <label>City*:</label>
                            <input type="text" class="form-control" maxlength="50" name="dest_city" placeholder="Enter City" required="">
                        </div>

                        <div class="col-md-4">
                            <label>Street Address 1*:</label>
                            <input type="text" class="form-control" name="dest_street" value="" maxlength="250" placeholder="Enter Street Address 1" required="">
                        </div>
                        <div class="col-md-4 col-xs-6 col-sm-6">
                            <label>Street Address 2:</label>
                            <input type="text" class="form-control" name="dest_street2" value="" maxlength="250" placeholder="Enter Street Address 2">
                        </div>
                        <div class="col-md-4 col-xs-6 col-sm-6">
                            <label>Pin code*:</label>
                            <input type="text" class="form-control" name="dest_pincode" value="" maxlength="8" placeholder="Enter Pin code" required="">
                        </div>
                        <div class="col-md-12">
                            <label>Remarks:</label>
                            <textarea rows="3" class="form-control " maxlength="250" id="destination_comment" name="dest_comment" value="" placeholder="Remarks"></textarea><br>
                            <button class="bttn-mid btn-fill fright "type ="submit" >
                                <span class="txt">Submit </span>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Create Order Div End -->
            </form>
            </div>
        </div>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script> 
        <script>
            $(document).ready(function() 
                {
                    $("#save").click(function() 
                    {
                        $("#msg").text("Your Data Inserted Successfully");
                        var height = $('#height').val();
                        var width = $('#width').val();
                        var depth = $('#depth').val();
                        var item_type = $('#item_type').val();
                        var product_name = $('#product_name').val();
                        var quantity = $('#quantity').val();
                        var itemprice = $('#itemprice').val();

                    if(product_name!= ""  && itemprice!="")
                    {
                        $.ajax({
                        type: "POST",
                        url: "http://dev.globalshippersrwanda.com/Shopnship/international_insert_package_information",
                        dataType: 'json',
                        data: {
                            
                           height: height,
                           width:width,
                           depth:depth,
                          item_type:product_type,
                          product_name:product_name,
                          quantity:quantity,


                        },
                        success: function(response) 
                        {
                           alert("insert successfully")
                        },
                        });
                    
                    }
                    else
                    {
                    alert("please fill all fields first");
                    }

                });
                });
// $('form input').on('keyup', function() {
// $('.totalprice').val(parseInt($('.package_price').val() * $('.package_quantity').val()));

//          });


function calTotal() {
        var qty = $(".alreadycreate").find(".package_quantity").val();
        var price = $(".alreadycreate").find(".package_price").val();
        var totval1 = 0;
        var gtotal = 0;
        if (qty && price) {
            totval1 = JSON.parse(qty) * JSON.parse(price);
            $(".alreadycreate").find(".totalprice").val(totval1);
            $(".totalval").val(totval1)
        }
            $(".addItem1").find(".alreadycreate").each(function () {
                var qty1 = $(this).find(".package_quantity").val();
                var price1 = $(this).find(".package_price").val();
                if (qty1 && price1) {
                    var totval11 = JSON.parse(qty1) * JSON.parse(price1);
                    $(this).find(".totalprice").val(totval11);
                    gtotal = gtotal + totval11;
                }
            })

            $(".totalval").val(gtotal)
    }
       

        </script>

<script>
function pincodecheck() {
   var stringLength = document.getElementById('pincode').value.length;
   
    if (stringLength < 5) {
        //alert("please Enter 5 digits");
         document.getElementById('warning').innerText = "Please Enter Minimum digits are 5"
    } else {
        document.getElementById('warning').innerText = ""
    }
}
</script>