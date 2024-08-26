<section class="shipping-cal-sec">
   <div class="container py-5">
   <div class="text-center mx-auto mb-5" style="max-width: 800px;">
      <p class="fs-5 text-uppercase text-primary">Ship with us</p>
      <h2 class="display-5 mb-4">GSR Shipping Rates </h2>
   </div>
   <div class="row">
   <div class="col-lg-6">
      <form class="well form-horizontal loginform" method="POST" >
         <div class="row">
            <div class="col-lg-6">
               <div class="form-group">
                  <label class="control-label">From Country<sup>*</sup></label>
                  <div class="input-group mb-3">
                     <span class="input-group-text"><i class="fas fa-globe fa-1x"></i></span>
                     <!--  <input type="text" class="form-control" placeholder="Search countries" aria-label="Username" aria-describedby="basic-addon1"> -->
                     <select name="from_countries" aria-label="Username" aria-describedby="basic-addon1" id="from_countries" class="form-control">
                        <option value="1">USA</option>
                        <option value="2">INDIA</option>
                        <option value="3">CHINA</option>
                        <option value="4">GERMANY</option>
                        <option value="5">JAPAN</option>
                        <option value="6">TURKEY</option>
                     </select>
                  </div>
               </div>
            </div>
            <div class="col-lg-6">
               <div class="form-group">
                  <label class="control-label">To Country<sup>*</sup></label>
                  <div class="input-group mb-3">
                     <span class="input-group-text"><i class="fas fa-city fa-1x"></i></span>
                     <!-- <input type="text" class="form-control" placeholder="Search city" aria-label="Username" aria-describedby="basic-addon1"> -->
                     <select name="to_country"  id="to_country" class="form-control" id="country">
                        <option value="0" label="Select a country ... " selected="selected">Select a country ... </option>
                        <optgroup id="country-optgroup-Africa" label="Africa">
                           <option value="DZ" label="Algeria">Algeria</option>
                           <option value="AO" label="Angola">Angola</option>
                           <option value="BJ" label="Benin">Benin</option>
                           <option value="BW" label="Botswana">Botswana</option>
                           <option value="BF" label="Burkina Faso">Burkina Faso</option>
                           <option value="BI" label="Burundi">Burundi</option>
                           <option value="CM" label="Cameroon">Cameroon</option>
                           <option value="CV" label="Cape Verde">Cape Verde</option>
                           <option value="CF" label="Central African Republic">Central African Republic</option>
                           <option value="TD" label="Chad">Chad</option>
                           <option value="KM" label="Comoros">Comoros</option>
                           <option value="CG" label="Congo - Brazzaville">Congo - Brazzaville</option>
                           <option value="CD" label="Congo - Kinshasa">Congo - Kinshasa</option>
                           <option value="CI" label="Côte d’Ivoire">Côte d’Ivoire</option>
                           <option value="DJ" label="Djibouti">Djibouti</option>
                           <option value="EG" label="Egypt">Egypt</option>
                           <option value="GQ" label="Equatorial Guinea">Equatorial Guinea</option>
                           <option value="ER" label="Eritrea">Eritrea</option>
                           <option value="ET" label="Ethiopia">Ethiopia</option>
                           <option value="GA" label="Gabon">Gabon</option>
                           <option value="GM" label="Gambia">Gambia</option>
                           <option value="GH" label="Ghana">Ghana</option>
                           <option value="GN" label="Guinea">Guinea</option>
                           <option value="GW" label="Guinea-Bissau">Guinea-Bissau</option>
                           <option value="KE" label="Kenya">Kenya</option>
                           <option value="LS" label="Lesotho">Lesotho</option>
                           <option value="LR" label="Liberia">Liberia</option>
                           <option value="LY" label="Libya">Libya</option>
                           <option value="MG" label="Madagascar">Madagascar</option>
                           <option value="MW" label="Malawi">Malawi</option>
                           <option value="ML" label="Mali">Mali</option>
                           <option value="MR" label="Mauritania">Mauritania</option>
                           <option value="MU" label="Mauritius">Mauritius</option>
                           <option value="YT" label="Mayotte">Mayotte</option>
                           <option value="MA" label="Morocco">Morocco</option>
                           <option value="MZ" label="Mozambique">Mozambique</option>
                           <option value="NA" label="Namibia">Namibia</option>
                           <option value="NE" label="Niger">Niger</option>
                           <option value="NG" label="Nigeria">Nigeria</option>
                           <option value="RW" label="Rwanda">Rwanda</option>
                           <option value="RE" label="Réunion">Réunion</option>
                           <option value="SH" label="Saint Helena">Saint Helena</option>
                           <option value="SN" label="Senegal">Senegal</option>
                           <option value="SC" label="Seychelles">Seychelles</option>
                           <option value="SL" label="Sierra Leone">Sierra Leone</option>
                           <option value="SO" label="Somalia">Somalia</option>
                           <option value="ZA" label="South Africa">South Africa</option>
                           <option value="SD" label="Sudan">Sudan</option>
                           <option value="SZ" label="Swaziland">Swaziland</option>
                           <option value="ST" label="São Tomé and Príncipe">São Tomé and Príncipe</option>
                           <option value="TZ" label="Tanzania">Tanzania</option>
                           <option value="TG" label="Togo">Togo</option>
                           <option value="TN" label="Tunisia">Tunisia</option>
                           <option value="UG" label="Uganda">Uganda</option>
                           <option value="EH" label="Western Sahara">Western Sahara</option>
                           <option value="ZM" label="Zambia">Zambia</option>
                           <option value="ZW" label="Zimbabwe">Zimbabwe</option>
                        </optgroup>
                        <optgroup id="country-optgroup-Americas" label="Americas">
                           <option value="AI" label="Anguilla">Anguilla</option>
                           <option value="AG" label="Antigua and Barbuda">Antigua and Barbuda</option>
                           <option value="AR" label="Argentina">Argentina</option>
                           <option value="AW" label="Aruba">Aruba</option>
                           <option value="BS" label="Bahamas">Bahamas</option>
                           <option value="BB" label="Barbados">Barbados</option>
                           <option value="BZ" label="Belize">Belize</option>
                           <option value="BM" label="Bermuda">Bermuda</option>
                           <option value="BO" label="Bolivia">Bolivia</option>
                           <option value="BR" label="Brazil">Brazil</option>
                           <option value="VG" label="British Virgin Islands">British Virgin Islands</option>
                           <option value="CA" label="Canada">Canada</option>
                           <option value="KY" label="Cayman Islands">Cayman Islands</option>
                           <option value="CL" label="Chile">Chile</option>
                           <option value="CO" label="Colombia">Colombia</option>
                           <option value="CR" label="Costa Rica">Costa Rica</option>
                           <option value="CU" label="Cuba">Cuba</option>
                           <option value="DM" label="Dominica">Dominica</option>
                           <option value="DO" label="Dominican Republic">Dominican Republic</option>
                           <option value="EC" label="Ecuador">Ecuador</option>
                           <option value="SV" label="El Salvador">El Salvador</option>
                           <option value="FK" label="Falkland Islands">Falkland Islands</option>
                           <option value="GF" label="French Guiana">French Guiana</option>
                           <option value="GL" label="Greenland">Greenland</option>
                           <option value="GD" label="Grenada">Grenada</option>
                           <option value="GP" label="Guadeloupe">Guadeloupe</option>
                           <option value="GT" label="Guatemala">Guatemala</option>
                           <option value="GY" label="Guyana">Guyana</option>
                           <option value="HT" label="Haiti">Haiti</option>
                           <option value="HN" label="Honduras">Honduras</option>
                           <option value="JM" label="Jamaica">Jamaica</option>
                           <option value="MQ" label="Martinique">Martinique</option>
                           <option value="MX" label="Mexico">Mexico</option>
                           <option value="MS" label="Montserrat">Montserrat</option>
                           <option value="AN" label="Netherlands Antilles">Netherlands Antilles</option>
                           <option value="NI" label="Nicaragua">Nicaragua</option>
                           <option value="PA" label="Panama">Panama</option>
                           <option value="PY" label="Paraguay">Paraguay</option>
                           <option value="PE" label="Peru">Peru</option>
                           <option value="PR" label="Puerto Rico">Puerto Rico</option>
                           <option value="BL" label="Saint Barthélemy">Saint Barthélemy</option>
                           <option value="KN" label="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                           <option value="LC" label="Saint Lucia">Saint Lucia</option>
                           <option value="MF" label="Saint Martin">Saint Martin</option>
                           <option value="PM" label="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                           <option value="VC" label="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                           <option value="SR" label="Suriname">Suriname</option>
                           <option value="TT" label="Trinidad and Tobago">Trinidad and Tobago</option>
                           <option value="TC" label="Turks and Caicos Islands">Turks and Caicos Islands</option>
                           <option value="VI" label="U.S. Virgin Islands">U.S. Virgin Islands</option>
                           <option value="US" label="United States">United States</option>
                           <option value="UY" label="Uruguay">Uruguay</option>
                           <option value="VE" label="Venezuela">Venezuela</option>
                        </optgroup>
                        <optgroup id="country-optgroup-Asia" label="Asia">
                           <option value="AF" label="Afghanistan">Afghanistan</option>
                           <option value="AM" label="Armenia">Armenia</option>
                           <option value="AZ" label="Azerbaijan">Azerbaijan</option>
                           <option value="BH" label="Bahrain">Bahrain</option>
                           <option value="BD" label="Bangladesh">Bangladesh</option>
                           <option value="BT" label="Bhutan">Bhutan</option>
                           <option value="BN" label="Brunei">Brunei</option>
                           <option value="KH" label="Cambodia">Cambodia</option>
                           <option value="CN" label="China">China</option>
                           <option value="GE" label="Georgia">Georgia</option>
                           <option value="HK" label="Hong Kong SAR China">Hong Kong SAR China</option>
                           <option value="IN" label="India">India</option>
                           <option value="ID" label="Indonesia">Indonesia</option>
                           <option value="IR" label="Iran">Iran</option>
                           <option value="IQ" label="Iraq">Iraq</option>
                           <option value="IL" label="Israel">Israel</option>
                           <option value="JP" label="Japan">Japan</option>
                           <option value="JO" label="Jordan">Jordan</option>
                           <option value="KZ" label="Kazakhstan">Kazakhstan</option>
                           <option value="KW" label="Kuwait">Kuwait</option>
                           <option value="KG" label="Kyrgyzstan">Kyrgyzstan</option>
                           <option value="LA" label="Laos">Laos</option>
                           <option value="LB" label="Lebanon">Lebanon</option>
                           <option value="MO" label="Macau SAR China">Macau SAR China</option>
                           <option value="MY" label="Malaysia">Malaysia</option>
                           <option value="MV" label="Maldives">Maldives</option>
                           <option value="MN" label="Mongolia">Mongolia</option>
                           <option value="MM" label="Myanmar [Burma]">Myanmar [Burma]</option>
                           <option value="NP" label="Nepal">Nepal</option>
                           <option value="NT" label="Neutral Zone">Neutral Zone</option>
                           <option value="KP" label="North Korea">North Korea</option>
                           <option value="OM" label="Oman">Oman</option>
                           <option value="PK" label="Pakistan">Pakistan</option>
                           <option value="PS" label="Palestinian Territories">Palestinian Territories</option>
                           <option value="YD" label="People's Democratic Republic of Yemen">People's Democratic Republic of Yemen</option>
                           <option value="PH" label="Philippines">Philippines</option>
                           <option value="QA" label="Qatar">Qatar</option>
                           <option value="SA" label="Saudi Arabia">Saudi Arabia</option>
                           <option value="SG" label="Singapore">Singapore</option>
                           <option value="KR" label="South Korea">South Korea</option>
                           <option value="LK" label="Sri Lanka">Sri Lanka</option>
                           <option value="SY" label="Syria">Syria</option>
                           <option value="TW" label="Taiwan">Taiwan</option>
                           <option value="TJ" label="Tajikistan">Tajikistan</option>
                           <option value="TH" label="Thailand">Thailand</option>
                           <option value="TL" label="Timor-Leste">Timor-Leste</option>
                           <option value="TR" label="Turkey">Turkey</option>
                           <option value="TM" label="Turkmenistan">Turkmenistan</option>
                           <option value="AE" label="United Arab Emirates">United Arab Emirates</option>
                           <option value="UZ" label="Uzbekistan">Uzbekistan</option>
                           <option value="VN" label="Vietnam">Vietnam</option>
                           <option value="YE" label="Yemen">Yemen</option>
                        </optgroup>
                        <optgroup id="country-optgroup-Europe" label="Europe">
                           <option value="AL" label="Albania">Albania</option>
                           <option value="AD" label="Andorra">Andorra</option>
                           <option value="AT" label="Austria">Austria</option>
                           <option value="BY" label="Belarus">Belarus</option>
                           <option value="BE" label="Belgium">Belgium</option>
                           <option value="BA" label="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                           <option value="BG" label="Bulgaria">Bulgaria</option>
                           <option value="HR" label="Croatia">Croatia</option>
                           <option value="CY" label="Cyprus">Cyprus</option>
                           <option value="CZ" label="Czech Republic">Czech Republic</option>
                           <option value="DK" label="Denmark">Denmark</option>
                           <option value="DD" label="East Germany">East Germany</option>
                           <option value="EE" label="Estonia">Estonia</option>
                           <option value="FO" label="Faroe Islands">Faroe Islands</option>
                           <option value="FI" label="Finland">Finland</option>
                           <option value="FR" label="France">France</option>
                           <option value="DE" label="Germany">Germany</option>
                           <option value="GI" label="Gibraltar">Gibraltar</option>
                           <option value="GR" label="Greece">Greece</option>
                           <option value="GG" label="Guernsey">Guernsey</option>
                           <option value="HU" label="Hungary">Hungary</option>
                           <option value="IS" label="Iceland">Iceland</option>
                           <option value="IE" label="Ireland">Ireland</option>
                           <option value="IM" label="Isle of Man">Isle of Man</option>
                           <option value="IT" label="Italy">Italy</option>
                           <option value="JE" label="Jersey">Jersey</option>
                           <option value="LV" label="Latvia">Latvia</option>
                           <option value="LI" label="Liechtenstein">Liechtenstein</option>
                           <option value="LT" label="Lithuania">Lithuania</option>
                           <option value="LU" label="Luxembourg">Luxembourg</option>
                           <option value="MK" label="Macedonia">Macedonia</option>
                           <option value="MT" label="Malta">Malta</option>
                           <option value="FX" label="Metropolitan France">Metropolitan France</option>
                           <option value="MD" label="Moldova">Moldova</option>
                           <option value="MC" label="Monaco">Monaco</option>
                           <option value="ME" label="Montenegro">Montenegro</option>
                           <option value="NL" label="Netherlands">Netherlands</option>
                           <option value="NO" label="Norway">Norway</option>
                           <option value="PL" label="Poland">Poland</option>
                           <option value="PT" label="Portugal">Portugal</option>
                           <option value="RO" label="Romania">Romania</option>
                           <option value="RU" label="Russia">Russia</option>
                           <option value="SM" label="San Marino">San Marino</option>
                           <option value="RS" label="Serbia">Serbia</option>
                           <option value="CS" label="Serbia and Montenegro">Serbia and Montenegro</option>
                           <option value="SK" label="Slovakia">Slovakia</option>
                           <option value="SI" label="Slovenia">Slovenia</option>
                           <option value="ES" label="Spain">Spain</option>
                           <option value="SJ" label="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                           <option value="SE" label="Sweden">Sweden</option>
                           <option value="CH" label="Switzerland">Switzerland</option>
                           <option value="UA" label="Ukraine">Ukraine</option>
                           <option value="SU" label="Union of Soviet Socialist Republics">Union of Soviet Socialist Republics</option>
                           <option value="GB" label="United Kingdom">United Kingdom</option>
                           <option value="VA" label="Vatican City">Vatican City</option>
                           <option value="AX" label="Åland Islands">Åland Islands</option>
                        </optgroup>
                        <optgroup id="country-optgroup-Oceania" label="Oceania">
                           <option value="AS" label="American Samoa">American Samoa</option>
                           <option value="AQ" label="Antarctica">Antarctica</option>
                           <option value="AU" label="Australia">Australia</option>
                           <option value="BV" label="Bouvet Island">Bouvet Island</option>
                           <option value="IO" label="British Indian Ocean Territory">British Indian Ocean Territory</option>
                           <option value="CX" label="Christmas Island">Christmas Island</option>
                           <option value="CC" label="Cocos [Keeling] Islands">Cocos [Keeling] Islands</option>
                           <option value="CK" label="Cook Islands">Cook Islands</option>
                           <option value="FJ" label="Fiji">Fiji</option>
                           <option value="PF" label="French Polynesia">French Polynesia</option>
                           <option value="TF" label="French Southern Territories">French Southern Territories</option>
                           <option value="GU" label="Guam">Guam</option>
                           <option value="HM" label="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option>
                           <option value="KI" label="Kiribati">Kiribati</option>
                           <option value="MH" label="Marshall Islands">Marshall Islands</option>
                           <option value="FM" label="Micronesia">Micronesia</option>
                           <option value="NR" label="Nauru">Nauru</option>
                           <option value="NC" label="New Caledonia">New Caledonia</option>
                           <option value="NZ" label="New Zealand">New Zealand</option>
                           <option value="NU" label="Niue">Niue</option>
                           <option value="NF" label="Norfolk Island">Norfolk Island</option>
                           <option value="MP" label="Northern Mariana Islands">Northern Mariana Islands</option>
                           <option value="PW" label="Palau">Palau</option>
                           <option value="PG" label="Papua New Guinea">Papua New Guinea</option>
                           <option value="PN" label="Pitcairn Islands">Pitcairn Islands</option>
                           <option value="WS" label="Samoa">Samoa</option>
                           <option value="SB" label="Solomon Islands">Solomon Islands</option>
                           <option value="GS" label="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
                           <option value="TK" label="Tokelau">Tokelau</option>
                           <option value="TO" label="Tonga">Tonga</option>
                           <option value="TV" label="Tuvalu">Tuvalu</option>
                           <option value="UM" label="U.S. Minor Outlying Islands">U.S. Minor Outlying Islands</option>
                           <option value="VU" label="Vanuatu">Vanuatu</option>
                           <option value="WF" label="Wallis and Futuna">Wallis and Futuna</option>
                        </optgroup>
                     </select>
                  </div>
               </div>
            </div>
            <div class="col-lg-3">
               <div class="form-group">
                  <label class="control-label">Length<sup>*</sup></label>
                  <div class="input-group mb-3">
                     <span class="input-group-text"><i class="fas fa-expand-alt fa-1x"></i></span>
                     <input type="text" class="form-control" placeholder="Add" aria-label="Username"  name="box_length" id="box_length" aria-describedby="basic-addon1">
                  </div>
               </div>
            </div>
            <div class="col-lg-3">
               <div class="form-group">
                  <label class="control-label">Width<sup>*</sup></label>
                  <div class="input-group mb-3">
                     <span class="input-group-text"><i class="fas fa-arrows-alt-h fa-1x"></i></span>
                     <input type="text" class="form-control" name="box_width" id="box_width" placeholder="Add" aria-label="Username" aria-describedby="basic-addon1">
                  </div>
               </div>
            </div>
            <div class="col-lg-3">
               <div class="form-group">
                  <label class="control-label">Height<sup>*</sup></label>
                  <div class="input-group mb-3">
                     <span class="input-group-text"><i class="fas fa-arrows-alt-v fa-1x"></i></span>
                     <input type="text" class="form-control" placeholder="Add" aria-label="Username" name="box_height" id="box_height" aria-describedby="basic-addon1">
                  </div>
               </div>
            </div>
            <div class="col-lg-3">
               <div class="form-group">
                  <label class="control-label"><span class="contentA-1">Centimeters</label>
                  <span class="badge bg-primary cstm--badge">cm</span>
                  <!--  
                     <span class="switch">
                         <label>cm</label>
                         <input type="checkbox" name="box_dimension_type"  class="switch" id="switch-id-1" checked>
                         <label for="switch-id-1">in</label>
                     </span> -->
               </div>
            </div>
            <div class="col-lg-9">
               <div class="form-group">
                  <label class="control-label">Package weight<sup>*</sup></label>
                  <div class="input-group mb-3">
                     <span class="input-group-text"><i class="fas fa-archive fa-1x"></i></span>
                     <input type="text"  name="package_weight" id="package_weight" class="form-control" placeholder="Add weight" aria-label="Username" aria-describedby="basic-addon1">
                  </div>
               </div>
            </div>
            <div class="col-lg-3">
               <div class="form-group">
                  <label class="control-label">Kilograms</label>   
                  <span class="badge bg-primary cstm--badge">kg</span>   
               </div>
            </div>
            <!--        <div class="col-lg-4">
               <div class="form-group">
                   <label class="control-label"><span class="contentA-2" style="display: none;">Kilograms</span><span class="contentB-2">Pounds</span></label>
                   <span class="switch">
                       <label>kg</label>
                        <input type="checkbox" name="weight_type" class="switch" id="switch-id-2" checked>
                        <label for="switch-id-2">lb</label>
                      </span>
                   </div>
               </div> -->
            <!-- <div class="col-lg-12">
               <div class="mb-2"><a href="javascript:void(0);" class="cstm-link">Show package dimensions</a></div>
               <div class="mb-2"> <a href="javascript:void(0);" class="cstm-link">How do the dimensions affect my rate?</a></div>
            </div> -->
            <div class="col-lg-12">
               <div class="price-row">
                  <h4 class="mb-2">Available shipping methods</h4>
                  <ul>
                     <li>
                        <label><span class="icon mr-2"><i class="fas fa-truck"></i></span>DHL</label>
                        <div class="d-flex justify-content-between">
                           <div class="d-date">2-5 Days</div>
                        <div><?php if(isset($sp_dhl_price))  {echo $sp_dhl_price.' USD';} ?>
                             <p id="dhl_price"></p> 
                           </div>
                     </li>
                     <li>
                     <label><span class="icon mr-2"><i class="fas fa-truck"></i></span> FEDEX</label> 
                     <div class="d-flex justify-content-between"><div class="d-date">6-9 Days</div>
                     <div><?php if(isset($sp_fedex_price)) {echo $sp_fedex_price. ' USD';} ?>
                       <p id="fedex_price"></p>  

                     </div></div>
                     </div>
                     </li>
                  </ul>
               </div>
               <div class="col-lg-12">
                  <button name="submit" type="submit" class="btn btn-primary submit rounded-pill py-3 px-5 mt-4">Get rates
               </div>
            </div>
      </form>
      </div>
      <div class="col-lg-6">
         <div class="shipping-cal-content p-4">
            <h3 class="mb-4 text-dark display-6">Estimate Your Shipping Rates</h3>
            <p>Save with 10% off your first shipment and 9% off your first 50kg shipment.</p>
            <p>Get Your warehouse address in 7 countries. </p>
            <p>Shop at any online store and get items in one package. </p>
            <p>Experience ultra-fast shipping to your doorstep. </p>
            <p>GSR works with major international shipping carriers including DHL, Fedex.  </p>
            <p>Enter your package dimensions and weight for estimated shipping cost and carrier availability in your country.</p>
            <p>Experience stress-free international shopping and Shipping with us.</p>
            
         </div>
      </div>
   </div>
</section>
<!-- <section class="shipping-sec bg-light">
   <div class="container py-5">
      <div class="text-center mx-auto mb-5" style="max-width: 1000px;">
         <p class="fs-4 text-uppercase text-primary">Ship with us</p>
         <h1 class="display-4 mb-4">How to pay less for International shipping from Turkey?</h1>
      </div>
      <div class="card gsr-card p-4">
         <div class="row">
            <div class="col-lg-5 border-end">
               <h4 class="mb-3"><strong> International shipping</strong></h4>
               <img src="<?php echo base_url()?>assets/cms/img/boxes.png" alt="boxes">
               <div class="row mt-4">
                  <div class="col-lg-4 text-center">
                     <h5><strong>3Kg</strong></h5>
                     <p>shipping and handling</p>
                     <h5>$40.3</h5>
                  </div>
                  <div class="col-lg-4 text-center">
                     <h5><strong>2Kg</strong></h5>
                     <p>shipping and handling</p>
                     <h5>$37.1</h5>
                  </div>
                  <div class="col-lg-4 text-center">
                     <h5><strong>1Kg</strong></h5>
                     <p>shipping and handling</p>
                     <h5>$25.1</h5>
                  </div>
                  <div class="col-lg-12 text-center">
                     <h5 class="mt-4"><strong>Total shipping :</strong> $102.5</h5>
                  </div>
               </div>
            </div>
            <div class="col-lg-7">
               <div class="row align-items-center">
                  <div class="col-lg-4">
                     <img src="<?php echo base_url()?>assets/cms/img/box.png" alt="boxes">
                     <div class="row mt-4">
                        <div class="col-lg-12 text-center">
                           <h5><strong>6Kg</strong></h5>
                           <p>shipping and handling</p>
                           <h5>$40.3</h5>
                        </div>
                        <div class="col-lg-12 text-center">
                           <h5 class="mt-4"><strong>Save : </strong>$39.4 or 38%</h5>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-8">
                     <h3 class="mb-4 text-dark display-6">Pay up to 80% less for shipping from Turkey</h3>
                     <p>instead of having the packages directed separately to your address, </p>
                     <p>Yollando.com receives the packages in Turkey and has them combined for you, you can pay once for international shipping. </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section> -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js">
</script>

<script type="text/javascript" >
  $(function() {

   $("form").submit(function (event) {

    var formData = {
      from_countries: $("#from_countries").val(),
      to_country: $("#to_country").val(),
      box_length: $("#box_length").val(),
      box_width: $("#box_width").val(),
      box_height: $("#box_height").val(),
      package_weight: $("#package_weight").val(),
      submit: '1',
      
    };
    $.ajax({
      type: "POST",
      url: "<?php echo base_url();?>shipping-calc",
      data: formData,
      dataType: "json",
      encode: true,
    }).done(function (data) { 
      if($.isNumeric( data.sp_dhl_price )) {
      if(formData['from_countries'] != "4"){
       $('#dhl_price').text(data.sp_dhl_price+' USD');
       $('#fedex_price').text(data.sp_fedex_price+' USD');
     }
     else{
       $('#dhl_price').text(data.sp_dhl_price+' EUR');
       $('#fedex_price').text(data.sp_fedex_price+' EUR');
     }
      }
   else {
        $('#dhl_price').text('The package is more than 100 kgs');
        $('#fedex_price').text('The package is more than 100 kgs');
           
     }
    });
    event.preventDefault();
  });
//   $(".submit").click(function() {
//    var data = JSON.stringify( $(form).serializeArray() ); 
//    console.log(data);return false;
//   var time = $("#time").val();
//   var date = $("#date").val();
//   var dataString = 'time='+ time + '&date=' + date;

// if(time=='' || date=='')
// {
//   $('.success').fadeOut(200).hide();
//   $('.error').fadeOut(200).show();
// }
// else
// {
//   $.ajax({
//     type: "POST",
//     url: "post.php",
//     data: dataString,
//     success: function(){
//      $('.success').fadeIn(200).show();
//      $('.error').fadeOut(200).hide();
//     }
//   });
// }
// return false;
// });
});
</script>