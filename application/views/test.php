<div class="card flex-fill create_order">
      <div class="card-body py-4">
        <div class="single-service-2">
          <ol class="progtrckr" data-progtrckr-steps="2">
            <li class="progtrckr-done tab1">
              <span>Add Order Item<span></span></span>
            </li>
            <li class="progtrckr-todo tab2"><span>Shipping Address</span></li>
          </ol>
          <br />

          <div class="service-content createorder newform">
            <div class="alreadyappende">
              <a
                href="javascript:void(0);"
                class="infoicon"
                data-toggle="modal"
                data-target="#infoModal"
                >What are these details <i class="fas fa-question"></i
              ></a>
              <div class="row createdrow">
                <div class="col-md-2 col-xs-12">
                  <div class="form-group">
                    <label title="Please enter item name">Item Type*</label>
                    <!-- <input type="text" class="form-control" name="name[]" id="name" placeholder="Enter item name" maxlength="100" > -->
                    <select
                      id="itemname"
                      class="form-control search_item select2-hidden-accessible"
                      name="item_type[]"
                      required=""
                      data-select2-id="select2-data-itemname"
                      tabindex="-1"
                      aria-hidden="true"
                    >
                      <option value="" data-select2-id="select2-data-2-l8n8">
                        Please select item type
                      </option>
                      <option value="49">Books</option>
                      <option value="52">Cereals</option>
                      <option value="4">Cosmetics</option>
                      <option value="58">Crockery</option>
                      <option value="6">Electronics</option>
                      <option value="7">Food items</option>
                      <option value="53">Handricraft</option>
                      <option value="59">Home Decor</option>
                      <option value="57">Imitation Jewellery</option>
                      <option value="61">Incense sticks</option>
                      <option value="5">Jewellery</option>
                      <option value="51">Kids Clothings</option>
                      <option value="50">Kids Toys</option>
                      <option value="3">Liquid</option>
                      <option value="55">Liquid Medicine</option>
                      <option value="54">Medicine</option>
                      <option value="41">Men Jacket</option>
                      <option value="40">Men Jeans</option>
                      <option value="44">Men Kurta</option>
                      <option value="45">Men Pyjama</option>
                      <option value="37">Men Shirts</option>
                      <option value="47">Men Shoes</option>
                      <option value="42">Men Sweater</option>
                      <option value="38">Men T-Shirts</option>
                      <option value="43">Men Tracksuits</option>
                      <option value="39">Men Trousers</option>
                      <option value="46">Men Under Garments</option>
                      <option value="62">Metal Lamp</option>
                      <option value="60">Motor Parts</option>
                      <option value="56">Tulsi Mala</option>
                      <option value="63">Two wheeler Parts</option>
                      <option value="19">Women Blouse</option>
                      <option value="23">Women Dress</option>
                      <option value="14">
                        Women Dress Material (Unstitched)
                      </option>
                      <option value="8">Women Dupatta</option>
                      <option value="22">Women Gowns</option>
                      <option value="29">Women Jeans</option>
                      <option value="1">Women Kurta</option>
                      <option value="24">Women kurta set</option>
                      <option value="9">Women Kurta With Pyjama</option>
                      <option value="10">
                        Women Kurta With Pyjama &amp; Dupatta
                      </option>
                      <option value="11">Women Kurta With Salwar</option>
                      <option value="12">
                        Women Kurta With Salwar &amp; Dupatta
                      </option>
                      <option value="15">Women Kurta With Trouser</option>
                      <option value="16">
                        Women Kurta With Trouser &amp; Dupatta
                      </option>
                      <option value="25">Women laggings</option>
                      <option value="21">Women Lehnga choli</option>
                      <option value="35">Women Nightdress</option>
                      <option value="34">Women Nighty</option>
                      <option value="26">Women Palazzo</option>
                      <option value="2">Women Pyjama</option>
                      <option value="27">Women Salwar</option>
                      <option value="13">
                        Women Salwar Suit Material (Unstitched)
                      </option>
                      <option value="18">Women Saree</option>
                      <option value="20">Women Saree With Blouse</option>
                      <option value="30">Women Shirts</option>
                      <option value="48">Women Shoes</option>
                      <option value="32">Women Shorts</option>
                      <option value="33">Women Skirts</option>
                      <option value="31">Women T-Shirts</option>
                      <option value="17">Women Top</option>
                      <option value="28">Women Toursers</option>
                      <option value="36">Women Under Garments</option>
                      <option value="0">Other</option></select
                    ><span
                      class="select2 select2-container select2-container--default"
                      dir="ltr"
                      data-select2-id="select2-data-1-r2dr"
                      style="width: 100%"
                      ><span class="selection"
                        ><span
                          class="select2-selection select2-selection--single"
                          role="combobox"
                          aria-haspopup="true"
                          aria-expanded="false"
                          tabindex="0"
                          aria-disabled="false"
                          aria-labelledby="select2-itemname-container"
                          ><span
                            class="select2-selection__rendered"
                            id="select2-itemname-container"
                            role="textbox"
                            aria-readonly="true"
                            title="Please select item type"
                            >Please select item type</span
                          ><span
                            class="select2-selection__arrow"
                            role="presentation"
                            ><b role="presentation"></b></span></span></span
                      ><span class="dropdown-wrapper" aria-hidden="true"></span
                    ></span>
                    <span class="error">Please select item type.</span>
                  </div>
                </div>
                <div class="col-md-2 col-xs-12 other_name">
                  <div class="form-group">
                    <label title="Please enter item name">Item Name*</label>
                    <input
                      type="text"
                      id="name"
                      class="form-control"
                      name="name[]"
                      placeholder="Enter item name"
                      maxlength="100"
                      required=""
                    />
                    <span class="error">Please enter item name.</span>
                  </div>
                </div>
                <div class="col-md-2 col-xs-12">
                  <div class="form-group">
                    <label>Online Store*</label>
                    <input
                      type="text"
                      class="form-control"
                      name="store[]"
                      id="store"
                      placeholder="Amazon, Flipkart"
                      maxlength="100"
                    />
                    <span class="error">Please enter store.</span>
                  </div>
                </div>
                <div class="col-md-2 col-xs-12">
                  <div class="form-group">
                    <label>Online Store Order Id*</label>
                    <input
                      type="text"
                      class="form-control"
                      name="tracking_number[]"
                      id="order_id"
                      placeholder="Order id"
                      maxlength="50"
                    />
                    <span class="error">Please enter order id.</span>
                  </div>
                </div>
                <div class="col-md-2 col-xs-6">
                  <div class="form-group">
                    <label>Color</label>
                    <input
                      type="text"
                      class="form-control"
                      name="color[]"
                      id="color"
                      placeholder="Color"
                      maxlength="20"
                    />
                  </div>
                </div>
                <div class="col-md-1 col-xs-6">
                  <div class="form-group">
                    <label>Size</label>
                    <input
                      type="text"
                      class="form-control"
                      name="size[]"
                      id="size"
                      placeholder="Size"
                      maxlength="10"
                    />
                  </div>
                </div>
                <div class="col-md-1 col-xs-6">
                  <div class="form-group">
                    <label>Quantity*</label>
                    <input
                      type="text"
                      value="1"
                      step="1"
                      min="1"
                      name="quantity[] "
                      id="quantity"
                      oninput="changeVal(this)"
                      max="1000"
                      maxlength="3"
                      class="form-control numvar qty"
                    />
                    <span class="error">Please enter order quantity.</span>
                  </div>
                </div>
                <div class="col-md-2 col-xs-6">
                  <div class="form-group">
                    <label>Price (INR)*</label>
                    <input
                      type="text"
                      maxlength="5"
                      class="form-control numvar price"
                      name="price[]"
                      id="price"
                      oninput="changeVal(this)"
                      value="0"
                    />
                    <span class="error">Please enter price.</span>
                  </div>
                </div>
                <input
                  type="hidden"
                  class="form-control numvar totalprice"
                  name="totalprice[]"
                  value="0"
                  placeholder="Total Price"
                  required=""
                  readonly=""
                />
              </div>
            </div>
            <div class="appenderow"></div>
            <div class="row">
              <div class="col-md-12 col-xs-12">
                <a
                  class="addmorebtn"
                  onclick='addItem([{"id":49,"itemType":"Books","warningMsg":null,"created_by":"1","created_at":"2022-04-11 15:37:51","updated_at":"2022-04-11 15:37:51"},{"id":52,"itemType":"Cereals","warningMsg":null,"created_by":"1","created_at":"2022-04-11 15:38:59","updated_at":"2022-04-11 15:38:59"},{"id":4,"itemType":"Cosmetics","warningMsg":"Additional documents required  for shipping through our trusted partners i.e. COA and MSDS. Otherwise we can only ship via India Post.","created_by":"1","created_at":"2022-04-11 15:25:52","updated_at":"2022-04-11 15:25:52"},{"id":58,"itemType":"Crockery","warningMsg":null,"created_by":"1","created_at":"2022-04-20 16:14:15","updated_at":"2022-04-20 16:14:15"},{"id":6,"itemType":"Electronics","warningMsg":"There might be restrictions for electronic items with batteries.  Pls check with our support before placing orders.","created_by":"1","created_at":"2022-04-11 15:27:23","updated_at":"2022-04-11 15:27:23"},{"id":7,"itemType":"Food items","warningMsg":"Branded \/ packaged having FSSAI mark. COA and MSDS required if liquid \/ powder \/ paste.","created_by":"1","created_at":"2022-04-11 15:29:51","updated_at":"2022-04-11 15:29:51"},{"id":53,"itemType":"Handricraft","warningMsg":null,"created_by":"1","created_at":"2022-04-11 15:39:16","updated_at":"2022-04-11 15:39:16"},{"id":59,"itemType":"Home Decor","warningMsg":null,"created_by":"1","created_at":"2022-09-28 21:35:21","updated_at":"2022-09-28 21:35:21"},{"id":57,"itemType":"Imitation Jewellery","warningMsg":"Valuation certificate might be required by customs for shipping.","created_by":"1","created_at":"2022-04-19 04:42:07","updated_at":"2022-04-19 04:42:07"},{"id":61,"itemType":"Incense sticks","warningMsg":null,"created_by":"1","created_at":"2022-09-28 21:38:24","updated_at":"2022-09-28 21:38:24"},{"id":5,"itemType":"Jewellery","warningMsg":"Valuation certificate might be required by customs for shipping.","created_by":"1","created_at":"2022-04-11 15:26:33","updated_at":"2022-04-11 15:26:33"},{"id":51,"itemType":"Kids Clothings","warningMsg":null,"created_by":"1","created_at":"2022-04-11 15:38:27","updated_at":"2022-04-11 15:38:27"},{"id":50,"itemType":"Kids Toys","warningMsg":null,"created_by":"1","created_at":"2022-04-11 15:38:00","updated_at":"2022-04-11 15:38:14"},{"id":3,"itemType":"Liquid","warningMsg":"Additional documents required  for shipping through our trusted partners i.e. COA and MSDS. Otherwise we can only ship via India Post.","created_by":"1","created_at":"2022-04-11 15:25:22","updated_at":"2022-04-11 15:25:22"},{"id":55,"itemType":"Liquid Medicine","warningMsg":"Required - COA and MSDS , India doctor&apos;s original prescription and Original bill.  Please check our medicine page for other requirements.","created_by":"1","created_at":"2022-04-11 15:42:14","updated_at":"2022-04-11 15:42:14"},{"id":54,"itemType":"Medicine","warningMsg":"Required for custom clearance: Original Indian doctor&apos;s prescription on doctor\u2019s letterhead with doctor&apos;s stamp having Reg. No. and Original Bill","created_by":"1","created_at":"2022-04-11 15:40:42","updated_at":"2022-04-11 15:40:42"},{"id":41,"itemType":"Men Jacket","warningMsg":null,"created_by":"1","created_at":"2022-04-11 15:36:35","updated_at":"2022-04-11 15:36:35"},{"id":40,"itemType":"Men Jeans","warningMsg":null,"created_by":"1","created_at":"2022-04-11 15:36:26","updated_at":"2022-04-11 15:36:26"},{"id":44,"itemType":"Men Kurta","warningMsg":null,"created_by":"1","created_at":"2022-04-11 15:37:01","updated_at":"2022-04-11 15:37:01"},{"id":45,"itemType":"Men Pyjama","warningMsg":null,"created_by":"1","created_at":"2022-04-11 15:37:14","updated_at":"2022-04-11 15:37:14"},{"id":37,"itemType":"Men Shirts","warningMsg":null,"created_by":"1","created_at":"2022-04-11 15:35:59","updated_at":"2022-04-11 15:35:59"},{"id":47,"itemType":"Men Shoes","warningMsg":null,"created_by":"1","created_at":"2022-04-11 15:37:34","updated_at":"2022-04-11 15:37:34"},{"id":42,"itemType":"Men Sweater","warningMsg":null,"created_by":"1","created_at":"2022-04-11 15:36:43","updated_at":"2022-04-11 15:36:43"},{"id":38,"itemType":"Men T-Shirts","warningMsg":null,"created_by":"1","created_at":"2022-04-11 15:36:09","updated_at":"2022-04-11 15:36:09"},{"id":43,"itemType":"Men Tracksuits","warningMsg":null,"created_by":"1","created_at":"2022-04-11 15:36:52","updated_at":"2022-04-11 15:36:52"},{"id":39,"itemType":"Men Trousers","warningMsg":null,"created_by":"1","created_at":"2022-04-11 15:36:18","updated_at":"2022-04-11 15:36:18"},{"id":46,"itemType":"Men Under Garments","warningMsg":null,"created_by":"1","created_at":"2022-04-11 15:37:25","updated_at":"2022-04-11 15:37:25"},{"id":62,"itemType":"Metal Lamp","warningMsg":null,"created_by":"1","created_at":"2022-09-28 21:39:09","updated_at":"2022-09-28 21:39:09"},{"id":60,"itemType":"Motor Parts","warningMsg":null,"created_by":"1","created_at":"2022-09-28 21:35:55","updated_at":"2022-09-28 21:35:55"},{"id":56,"itemType":"Tulsi Mala","warningMsg":null,"created_by":"1","created_at":"2022-04-18 11:18:53","updated_at":"2022-04-18 11:18:53"},{"id":63,"itemType":"Two wheeler Parts","warningMsg":null,"created_by":"1","created_at":"2022-09-28 21:39:46","updated_at":"2022-09-28 21:39:46"},{"id":19,"itemType":"Women Blouse","warningMsg":null,"created_by":"1","created_at":"2022-04-11 15:33:09","updated_at":"2022-04-11 15:33:09"},{"id":23,"itemType":"Women Dress","warningMsg":null,"created_by":"1","created_at":"2022-04-11 15:33:48","updated_at":"2022-04-11 15:33:48"},{"id":14,"itemType":"Women Dress Material (Unstitched)","warningMsg":null,"created_by":"1","created_at":"2022-04-11 15:32:14","updated_at":"2022-04-11 15:32:14"},{"id":8,"itemType":"Women Dupatta","warningMsg":null,"created_by":"1","created_at":"2022-04-11 15:30:31","updated_at":"2022-04-11 15:30:31"},{"id":22,"itemType":"Women Gowns","warningMsg":null,"created_by":"1","created_at":"2022-04-11 15:33:36","updated_at":"2022-04-11 15:33:36"},{"id":29,"itemType":"Women Jeans","warningMsg":null,"created_by":"1","created_at":"2022-04-11 15:34:44","updated_at":"2022-04-11 15:34:44"},{"id":1,"itemType":"Women Kurta","warningMsg":null,"created_by":"1","created_at":"2022-04-11 11:54:12","updated_at":"2022-04-11 11:54:12"},{"id":24,"itemType":"Women kurta set","warningMsg":null,"created_by":"1","created_at":"2022-04-11 15:33:58","updated_at":"2022-04-11 15:33:58"},{"id":9,"itemType":"Women Kurta With Pyjama","warningMsg":null,"created_by":"1","created_at":"2022-04-11 15:30:49","updated_at":"2022-04-11 15:30:49"},{"id":10,"itemType":"Women Kurta With Pyjama &amp; Dupatta","warningMsg":null,"created_by":"1","created_at":"2022-04-11 15:31:04","updated_at":"2022-04-11 15:31:04"},{"id":11,"itemType":"Women Kurta With Salwar","warningMsg":null,"created_by":"1","created_at":"2022-04-11 15:31:23","updated_at":"2022-04-11 15:31:23"},{"id":12,"itemType":"Women Kurta With Salwar &amp; Dupatta","warningMsg":null,"created_by":"1","created_at":"2022-04-11 15:31:34","updated_at":"2022-04-11 15:31:34"},{"id":15,"itemType":"Women Kurta With Trouser","warningMsg":null,"created_by":"1","created_at":"2022-04-11 15:32:31","updated_at":"2022-04-11 15:32:31"},{"id":16,"itemType":"Women Kurta With Trouser &amp; Dupatta","warningMsg":null,"created_by":"1","created_at":"2022-04-11 15:32:42","updated_at":"2022-04-11 15:32:42"},{"id":25,"itemType":"Women laggings","warningMsg":null,"created_by":"1","created_at":"2022-04-11 15:34:06","updated_at":"2022-04-11 15:34:06"},{"id":21,"itemType":"Women Lehnga choli","warningMsg":null,"created_by":"1","created_at":"2022-04-11 15:33:27","updated_at":"2022-04-11 15:33:27"},{"id":35,"itemType":"Women Nightdress","warningMsg":null,"created_by":"1","created_at":"2022-04-11 15:35:40","updated_at":"2022-04-11 15:35:40"},{"id":34,"itemType":"Women Nighty","warningMsg":null,"created_by":"1","created_at":"2022-04-11 15:35:31","updated_at":"2022-04-11 15:35:31"},{"id":26,"itemType":"Women Palazzo","warningMsg":null,"created_by":"1","created_at":"2022-04-11 15:34:15","updated_at":"2022-04-11 15:34:15"},{"id":2,"itemType":"Women Pyjama","warningMsg":null,"created_by":"1","created_at":"2022-04-11 11:54:35","updated_at":"2022-04-11 11:54:35"},{"id":27,"itemType":"Women Salwar","warningMsg":null,"created_by":"1","created_at":"2022-04-11 15:34:24","updated_at":"2022-04-11 15:34:24"},{"id":13,"itemType":"Women Salwar Suit Material (Unstitched)","warningMsg":null,"created_by":"1","created_at":"2022-04-11 15:31:50","updated_at":"2022-04-11 15:31:50"},{"id":18,"itemType":"Women Saree","warningMsg":null,"created_by":"1","created_at":"2022-04-11 15:33:01","updated_at":"2022-04-11 15:33:01"},{"id":20,"itemType":"Women Saree With Blouse","warningMsg":null,"created_by":"1","created_at":"2022-04-11 15:33:18","updated_at":"2022-04-11 15:33:18"},{"id":30,"itemType":"Women Shirts","warningMsg":null,"created_by":"1","created_at":"2022-04-11 15:34:54","updated_at":"2022-04-11 15:34:54"},{"id":48,"itemType":"Women Shoes","warningMsg":null,"created_by":"1","created_at":"2022-04-11 15:37:45","updated_at":"2022-04-11 15:37:45"},{"id":32,"itemType":"Women Shorts","warningMsg":null,"created_by":"1","created_at":"2022-04-11 15:35:13","updated_at":"2022-04-11 15:35:13"},{"id":33,"itemType":"Women Skirts","warningMsg":null,"created_by":"1","created_at":"2022-04-11 15:35:23","updated_at":"2022-04-11 15:35:23"},{"id":31,"itemType":"Women T-Shirts","warningMsg":null,"created_by":"1","created_at":"2022-04-11 15:35:04","updated_at":"2022-04-11 15:35:04"},{"id":17,"itemType":"Women Top","warningMsg":null,"created_by":"1","created_at":"2022-04-11 15:32:51","updated_at":"2022-04-11 15:32:51"},{"id":28,"itemType":"Women Toursers","warningMsg":null,"created_by":"1","created_at":"2022-04-11 15:34:34","updated_at":"2022-04-11 15:34:34"},{"id":36,"itemType":"Women Under Garments","warningMsg":null,"created_by":"1","created_at":"2022-04-11 15:35:50","updated_at":"2022-04-11 15:35:50"}])'
                  href="javascript:void(0);"
                  id="shopnship_addmoreitem"
                >
                  <i class="fa fa-plus"></i> Add More Item</a
                >
                <input type="hidden" id="rowNumber" value="1" />
              </div>
              <!--  <div class="col-md-3 col-xs-12">
                                <div class="form-group">
                                    <label>Attachment</label>
                                    <input type="file"  name="image[]" id="image" multiple="" accept="image/jpg,image/png,image/jpeg,application/pdf">
                                    <span class="error">Please enter product images.</span>
                                    <span class="belowline">[PDF, JPG, PNG Allowed] max fix of each file 3mb</span>

                                </div>
                            </div> -->
              <div class="col-md-12">
                <p class="prempara">
                  Your order amount is greater or equal to 25,000 RS. Import
                  duty charges may apply depending upon destiantion country.
                </p>
              </div>

              <div class="col-md-6 col-xs-12">
                <div class="input-images">
                  <div class="image-uploader">
                    <input
                      type="file"
                      id="image-1693336046759"
                      name="image[]"
                      multiple="multiple"
                      accept="image/jpg,image/png,image/jpeg,application/pdf"
                    />
                    <div class="uploaded"></div>
                    <div class="upload-text">
                      <i class="material-icons">cloud_upload</i
                      ><span
                        >Click to browse (Total 10 files and 10 mb of size
                        allowed).</span
                      >
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-xs-12 mt10">
                <div class="form-group">
                  <!--   <label>Add Remark</label> -->
                  <textarea
                    rows="4"
                    class="form-control"
                    maxlength="100"
                    name="remark"
                    id="remark"
                    placeholder="Add Remark"
                  ></textarea>
                  <span class="error">Please enter remark.</span>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <input type="hidden" name="assested_price" id="ingtotal" />
                  <label class="gtot"
                    >Grand Total : <span class="gtotal">0</span></label
                  >
                </div>
              </div>

              <div class="col-md-12">
                <button
                  type="button"
                  class="bttn-mid btn-fill fright step1"
                  id="shopnship_next"
                >
                  Next
                </button>
              </div>
            </div>
          </div>
          <div class="service-content createaddress">
            <div class="alreadyappende">
              <div class="butonsnew col-ms-12">
                <button type="button" class="btn-back btn back1">
                  <i class="fa fa-arrow-left"></i>
                </button>

                <button
                  type="button"
                  class="btn-fill existadd"
                  id="shopnship_existingaddress"
                >
                  Use Existing Address
                </button>

                <button
                  type="button"
                  class="btn-fill createnewadd"
                  id="shopnship_newaddress"
                >
                  Create New Address
                </button>
              </div>
              <div class="row existingaddress">
                <button type="button" class="btn-back btn back2">
                  <i class="fa fa-arrow-left"></i>
                </button>
                <div class="col-md-4">
                  <div class="exadd" onclick="chooseAddress(711, $(this))">
                    <ul>
                      <li>Abijuru Fabrice, 2500784651740</li>
                      <li>KN 48 St</li>
                      <li></li>
                      <li>Rwanda ,City of Kigali ,Kigali,250</li>
                    </ul>
                  </div>
                </div>
                <input type="hidden" id="addressId" name="address_id" />
                <div class="col-md-12">
                  <button
                    type="submit"
                    class="bttn-mid btn-fill fright submit2"
                    id="shopnship_submit"
                  >
                    Submit
                  </button>
                </div>
              </div>
              <div class="row createdrow">
                <button type="button" class="btn-back btn back3">
                  <i class="fa fa-arrow-left"></i>
                </button>
                <div class="col-md-6 col-xs-6">
                  <div class="form-group">
                    <label>First Name*</label>
                    <input
                      type="text"
                      id="cfirst"
                      class="form-control"
                      name="first_name"
                      maxlength="50"
                      placeholder="Enter your First Name"
                    />
                    <span class="error">Please enter first name</span>
                  </div>
                </div>
                <div class="col-md-6 col-xs-6">
                  <div class="form-group">
                    <label>Last Name*</label>
                    <input
                      type="text"
                      id="clast"
                      class="form-control"
                      name="last_name"
                      maxlength="50"
                      placeholder="Enter your last name"
                    />
                    <span class="error">Please enter last name</span>
                  </div>
                </div>
                <div class="col-md-6 col-xs-6">
                  <label style="display: block">Phone number*:</label>
                  <div class="cc-picker cc-picker-code-select-enabled">
                    <div class="cc-picker-flag in"></div>
                    <span class="cc-picker-code">91</span>
                  </div>
                  <input
                    type="text"
                    id="phoneField1"
                    name="primary_phone"
                    value=""
                    class="form-control phone-field numvar"
                    maxlength="16"
                    minlength="8"
                    required=""
                  /><input
                    type="hidden"
                    id="phoneField1_phoneCode"
                    name="primary_phone_phoneCode"
                    value="91"
                  />
                  <span class="error moberr">Please enter mobile number</span>

                  <!--  <span class="error">Please enter area code</span> -->
                </div>
                <div class="col-md-12 col-xs-12">
                  <div class="form-group">
                    <label>Street Address*</label>
                    <input
                      type="text"
                      class="form-control"
                      id="cadd"
                      name="street_address"
                      maxlength="100"
                      placeholder="Enter street address"
                    />
                    <span class="error">Please enter street address</span>
                  </div>
                </div>
                <div class="col-md-12 col-xs-12">
                  <div class="form-group">
                    <label>Apt, Suit, Bldg, Gate code (optional) </label>
                    <input
                      type="text"
                      maxlength="100"
                      class="form-control"
                      id="capt"
                      name="gate_code"
                      placeholder="Enter Apt, Suit, Bldg, Gate code (optional)"
                    />
                    <span class="error"
                      >Please enter Apt, Suit, Bldg, Gate code</span
                    >
                  </div>
                </div>
                <div class="col-md-4 col-xs-6">
                  <div class="form-group">
                    <label>City*</label>
                    <input
                      type="text"
                      class="form-control"
                      id="ccity"
                      name="city"
                      maxlength="40"
                      placeholder="City"
                    />
                    <span class="error">Please enter city</span>
                  </div>
                </div>
                <div class="col-md-4 col-xs-6">
                  <div class="form-group">
                    <label>State</label>
                    <input
                      type="text"
                      maxlength="40"
                      class="form-control"
                      id="cstate"
                      name="state"
                      placeholder="State"
                    />
                  </div>
                </div>
                <div class="col-md-4 col-xs-6">
                  <div class="form-group">
                    <label>Country*</label>
                    <select
                      class="form-control"
                      required=""
                      name="country"
                      id="ccountry"
                    >
                      <option value="Afghanistan">Afghanistan</option>

                      <option value="Albania">Albania</option>

                      <option value="Algeria">Algeria</option>

                      <option value="American Samoa">American Samoa</option>

                      <option value="Andorra">Andorra</option>

                      <option value="Angola">Angola</option>

                      <option value="Anguilla">Anguilla</option>

                      <option value="Antarctica">Antarctica</option>

                      <option value="Antigua and Barbuda">
                        Antigua and Barbuda
                      </option>

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

                      <option value="Bonaire, Sint Eustatius ">
                        Bonaire, Sint Eustatius
                      </option>

                      <option value="Bosnia and Herzegovina">
                        Bosnia and Herzegovina
                      </option>

                      <option value="Botswana">Botswana</option>

                      <option value="Bouvet Island">Bouvet Island</option>

                      <option value="Brazil">Brazil</option>

                      <option value="British Indian Ocean Ter">
                        British Indian Ocean Ter
                      </option>

                      <option value="Brunei Darussalam">
                        Brunei Darussalam
                      </option>

                      <option value="Bulgaria">Bulgaria</option>

                      <option value="Burkina Faso">Burkina Faso</option>

                      <option value="Burundi">Burundi</option>

                      <option value="Cambodia">Cambodia</option>

                      <option value="Cameroon">Cameroon</option>

                      <option value="Canada">Canada</option>

                      <option value="Cape Verde">Cape Verde</option>

                      <option value="Cayman Islands">Cayman Islands</option>

                      <option value="Central African Republic">
                        Central African Republic
                      </option>

                      <option value="Chad">Chad</option>

                      <option value="Chile">Chile</option>

                      <option value="China">China</option>

                      <option value="Christmas Island">Christmas Island</option>

                      <option value="Cocos (Keeling) Islands">
                        Cocos (Keeling) Islands
                      </option>

                      <option value="Colombia">Colombia</option>

                      <option value="Comoros">Comoros</option>

                      <option value="Congo">Congo</option>

                      <option value="The Dem Republic of Cong">
                        The Dem Republic of Cong
                      </option>

                      <option value="Cook Islands">Cook Islands</option>

                      <option value="Costa Rica">Costa Rica</option>

                      <option value="Croatia">Croatia</option>

                      <option value="Cuba">Cuba</option>

                      <option value="Curaçao">Curaçao</option>

                      <option value="Cyprus">Cyprus</option>

                      <option value="Czech Republic">Czech Republic</option>

                      <option value="Côte D'Ivoire">Côte D'Ivoire</option>

                      <option value="Denmark">Denmark</option>

                      <option value="Djibouti">Djibouti</option>

                      <option value="Dominica">Dominica</option>

                      <option value="Dominican Republic">
                        Dominican Republic
                      </option>

                      <option value="Ecuador">Ecuador</option>

                      <option value="Egypt">Egypt</option>

                      <option value="El Salvador">El Salvador</option>

                      <option value="Equatorial Guinea">
                        Equatorial Guinea
                      </option>

                      <option value="Eritrea">Eritrea</option>

                      <option value="Estonia">Estonia</option>

                      <option value="Ethiopia">Ethiopia</option>

                      <option value="Falkland Islands (Malvin">
                        Falkland Islands (Malvin
                      </option>

                      <option value="Faroe Islands">Faroe Islands</option>

                      <option value="Fiji">Fiji</option>

                      <option value="Finland">Finland</option>

                      <option value="France">France</option>

                      <option value="French Guyana">French Guyana</option>

                      <option value="French Polynesia">French Polynesia</option>

                      <option value="French Southern Territor">
                        French Southern Territor
                      </option>

                      <option value="Gabon">Gabon</option>

                      <option value="Gambia">Gambia</option>

                      <option value="Georgia">Georgia</option>

                      <option value="Germany">Germany</option>

                      <option value="Ghana">Ghana</option>

                      <option value="Gibraltar">Gibraltar</option>

                      <option value="Greece">Greece</option>

                      <option value="Greenland">Greenland</option>

                      <option value="Grenada">Grenada</option>

                      <option value="Guadeloupe">Guadeloupe</option>

                      <option value="Guam">Guam</option>

                      <option value="Guatemala">Guatemala</option>

                      <option value="Guernsey">Guernsey</option>

                      <option value="Guinea">Guinea</option>

                      <option value="Guinea-Bissau">Guinea-Bissau</option>

                      <option value="Guyana">Guyana</option>

                      <option value="Haiti">Haiti</option>

                      <option value="Heard and McDonald Islan">
                        Heard and McDonald Islan
                      </option>

                      <option value="Holy See (Vatican City S">
                        Holy See (Vatican City S
                      </option>

                      <option value="Honduras">Honduras</option>

                      <option value="Hong Kong">Hong Kong</option>

                      <option value="Hungary">Hungary</option>

                      <option value="Iceland">Iceland</option>

                      <option value="Indonesia">Indonesia</option>

                      <option value="Iran">Iran</option>

                      <option value="Iraq">Iraq</option>

                      <option value="Ireland">Ireland</option>

                      <option value="Isle of Man">Isle of Man</option>

                      <option value="Israel">Israel</option>

                      <option value="Italy">Italy</option>

                      <option value="Jamaica">Jamaica</option>

                      <option value="Japan">Japan</option>

                      <option value="Jersey">Jersey</option>

                      <option value="Jordan">Jordan</option>

                      <option value="Kazakhstan">Kazakhstan</option>

                      <option value="Kenya">Kenya</option>

                      <option value="Kiribati">Kiribati</option>

                      <option value="Kuwait">Kuwait</option>

                      <option value="Kyrgyzstan">Kyrgyzstan</option>

                      <option value="Laos">Laos</option>

                      <option value="Latvia">Latvia</option>

                      <option value="Lebanon">Lebanon</option>

                      <option value="Lesotho">Lesotho</option>

                      <option value="Liberia">Liberia</option>

                      <option value="Libya">Libya</option>

                      <option value="Liechtenstein">Liechtenstein</option>

                      <option value="Lithuania">Lithuania</option>

                      <option value="Luxembourg">Luxembourg</option>

                      <option value="Macao">Macao</option>

                      <option value="Madagascar">Madagascar</option>

                      <option value="Malawi">Malawi</option>

                      <option value="Malaysia">Malaysia</option>

                      <option value="Maldives">Maldives</option>

                      <option value="Mali">Mali</option>

                      <option value="Malta">Malta</option>

                      <option value="Marshall Islands">Marshall Islands</option>

                      <option value="Martinique">Martinique</option>

                      <option value="Mauritania">Mauritania</option>

                      <option value="Mauritius">Mauritius</option>

                      <option value="Mayotte">Mayotte</option>

                      <option value="Mexico">Mexico</option>

                      <option value=" Micronesia Federated States ">
                        Micronesia Federated States
                      </option>

                      <option value="Moldova, Republic of">
                        Moldova, Republic of
                      </option>

                      <option value="Monaco">Monaco</option>

                      <option value="Mongolia">Mongolia</option>

                      <option value="Montenegro">Montenegro</option>

                      <option value="Montserrat">Montserrat</option>

                      <option value="Morocco">Morocco</option>

                      <option value="Mozambique">Mozambique</option>

                      <option value="Myanmar">Myanmar</option>

                      <option value="Namibia">Namibia</option>

                      <option value="Nauru">Nauru</option>

                      <option value="Nepal">Nepal</option>

                      <option value="Netherlands">Netherlands</option>

                      <option value="New Caledonia">New Caledonia</option>

                      <option value="New Zealand">New Zealand</option>

                      <option value="Nicaragua">Nicaragua</option>

                      <option value="Niger">Niger</option>

                      <option value="Nigeria">Nigeria</option>

                      <option value="Niue">Niue</option>

                      <option value="Norfolk Island">Norfolk Island</option>

                      <option value="North Korea">North Korea</option>

                      <option value="North Macedonia">North Macedonia</option>

                      <option value="Northern Mariana Islands">
                        Northern Mariana Islands
                      </option>

                      <option value="Norway">Norway</option>

                      <option value="Oman">Oman</option>

                      <option value="Pakistan">Pakistan</option>

                      <option value="Palau">Palau</option>

                      <option value="Palestine, State of">
                        Palestine, State of
                      </option>

                      <option value="Panama">Panama</option>

                      <option value="Papua New Guinea">Papua New Guinea</option>

                      <option value="Paraguay">Paraguay</option>

                      <option value="Peru">Peru</option>

                      <option value="Philippines">Philippines</option>

                      <option value="Pitcairn">Pitcairn</option>

                      <option value="Poland">Poland</option>

                      <option value="Portugal">Portugal</option>

                      <option value="Puerto Rico">Puerto Rico</option>

                      <option value="Qatar">Qatar</option>

                      <option value="Romania">Romania</option>

                      <option value="Russian Federation">
                        Russian Federation
                      </option>

                      <option value="Rwanda" selected="">Rwanda</option>

                      <option value="Réunion">Réunion</option>

                      <option value="Saint Barthélemy">Saint Barthélemy</option>

                      <option value="Saint Helena">Saint Helena</option>

                      <option value="Nevis">Nevis</option>

                      <option value="Saint Lucia">Saint Lucia</option>

                      <option value="Saint Martin">Saint Martin</option>

                      <option value="Saint Pierre And Miquelo">
                        Saint Pierre And Miquelo
                      </option>

                      <option value="Saint Vincent And The Gr">
                        Saint Vincent And The Gr
                      </option>

                      <option value="Samoa">Samoa</option>

                      <option value="San Marino">San Marino</option>

                      <option value="Sao Tome and Principe">
                        Sao Tome and Principe
                      </option>

                      <option value="Saudi Arabia">Saudi Arabia</option>

                      <option value="Senegal">Senegal</option>

                      <option value="Serbia">Serbia</option>

                      <option value="Seychelles">Seychelles</option>

                      <option value="Sierra Leone">Sierra Leone</option>

                      <option value="Singapore">Singapore</option>

                      <option value="Sint Maarten">Sint Maarten</option>

                      <option value="Slovakia">Slovakia</option>

                      <option value="Slovenia">Slovenia</option>

                      <option value="Solomon Islands">Solomon Islands</option>

                      <option value="Somalia">Somalia</option>

                      <option value="South Africa">South Africa</option>

                      <option value="South Georgia &amp; South Sa">
                        South Georgia &amp; South Sa
                      </option>

                      <option value="South Korea">South Korea</option>

                      <option value="South Sudan">South Sudan</option>

                      <option value="Spain">Spain</option>

                      <option value="Sri Lanka">Sri Lanka</option>

                      <option value="Sudan">Sudan</option>

                      <option value="Suriname">Suriname</option>

                      <option value="Svalbard And Jan Mayen">
                        Svalbard And Jan Mayen
                      </option>

                      <option value="Swaziland">Swaziland</option>

                      <option value="Sweden">Sweden</option>

                      <option value="Switzerland">Switzerland</option>

                      <option value="Syrian Arab Republic">
                        Syrian Arab Republic
                      </option>

                      <option value="Taiwan">Taiwan</option>

                      <option value="Tajikistan">Tajikistan</option>

                      <option value="Tanzania, United Republi">
                        Tanzania, United Republi
                      </option>

                      <option value="Thailand">Thailand</option>

                      <option value="Timor-Leste">Timor-Leste</option>

                      <option value="Togo">Togo</option>

                      <option value="Tokelau">Tokelau</option>

                      <option value="Tonga">Tonga</option>

                      <option value="Trinidad and Tobago">
                        Trinidad and Tobago
                      </option>

                      <option value="Tunisia">Tunisia</option>

                      <option value="Turkey">Turkey</option>

                      <option value="Turkmenistan">Turkmenistan</option>

                      <option value="Turks and Caicos Islands">
                        Turks and Caicos Islands
                      </option>

                      <option value="Tuvalu">Tuvalu</option>

                      <option value="Uganda">Uganda</option>

                      <option value="Ukraine">Ukraine</option>

                      <option value="United Arab Emirates">
                        United Arab Emirates
                      </option>

                      <option value="United Kingdom">United Kingdom</option>

                      <option value="United States of America ">
                        United States of America
                      </option>

                      <option value="US Minor Outlying Island">
                        US Minor Outlying Island
                      </option>

                      <option value="Uruguay">Uruguay</option>

                      <option value="Uzbekistan">Uzbekistan</option>

                      <option value="Vanuatu">Vanuatu</option>

                      <option value="Venezuela">Venezuela</option>

                      <option value="Vietnam">Vietnam</option>

                      <option value="Virgin Islands, British">
                        Virgin Islands, British
                      </option>

                      <option value="Virgin Islands, U.S.">
                        Virgin Islands, U.S.
                      </option>

                      <option value="Wallis and Futuna">
                        Wallis and Futuna
                      </option>

                      <option value="Western Sahara">Western Sahara</option>

                      <option value="Yemen">Yemen</option>

                      <option value="Zambia">Zambia</option>

                      <option value="Zimbabwe">Zimbabwe</option>

                      <option value="Åland Islands">Åland Islands</option>
                    </select>
                    <span class="error">Please enter country</span>
                  </div>
                </div>
                <div class="col-md-4 col-xs-6">
                  <div class="form-group">
                    <label>Zipcode*</label>
                    <input
                      type="text"
                      id="czip"
                      maxlength="8"
                      class="form-control"
                      name="pin"
                      placeholder="Zipcode"
                    />
                    <span class="error">Please enter zipcode</span>
                  </div>
                </div>
                <div class="col-md-12">
                  <button class="bttn-mid btn-fill fright" id="createSubmit">
                    Save
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- CODE END  -->

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://fengyuanchen.github.io/viewer/js/viewer.js"></script>
    <script src="js/index.js"></script>
    <script>
      $(".step1").click(function () {
        if ($("#itemname").val() === "") {
          $("#itemname").next("span").show();
          $("ol.progtrckr li.progtrckr-todo").css({
            color: "silver",
            borderColor: "silver",
          });
          $(".tab1").removeClass("greenish");
          return false;
        } else {
          $("#itemname").next("span").hide();
        }
        if ($("#name").val() === "") {
          $("#name").next("span").show();
          $("ol.progtrckr li.progtrckr-todo").css({
            color: "silver",
            borderColor: "silver",
          });
          $(".tab1").removeClass("greenish");
          return false;
        } else {
          $("#name").next("span").hide();
        }
        $(".appenderow .createdrow").each(function () {
          if ($(this).find(".name").val() === "") {
            $(this).find(".name").next("span").show();
            $("ol.progtrckr li.progtrckr-todo").css({
              color: "silver",
              borderColor: "silver",
            });
            $(".tab1").removeClass("greenish");

            $(this).remove();

            $(".tab1").addClass("progtrckr-done").removeClass("progtrckr-todo");
            $(".tab1")
              .siblings()
              .removeClass("progtrckr-done")
              .addClass("progtrckr-todo");
            $(".createaddress").hide();
            $(".createorder").show();
          } else {
            $(this).find(".name").next("span").hide();
          }
        });
        if ($("#store").val() === "") {
          $("#store").next("span").show();
          $("ol.progtrckr li.progtrckr-todo").css({
            color: "silver",
            borderColor: "silver",
          });
          $(".tab1").removeClass("greenish");
          return false;
        } else {
          $("#store").next("span").hide();
        }

        $(".appenderow .createdrow").each(function () {
          if ($(this).find(".store").val() === "") {
            $(this).find(".store").next("span").show();
            $("ol.progtrckr li.progtrckr-todo").css({
              color: "silver",
              borderColor: "silver",
            });
            $(".tab1").removeClass("greenish");
            $(this).remove();
            $(".tab1").addClass("progtrckr-done").removeClass("progtrckr-todo");
            $(".tab1")
              .siblings()
              .removeClass("progtrckr-done")
              .addClass("progtrckr-todo");
            $(".createaddress").hide();
            $(".createorder").show();
          } else {
            $(this).find(".store").next("span").hide();
          }
        });
        if ($("#order_id").val() === "") {
          $("#order_id").next("span").show();
          $("ol.progtrckr li.progtrckr-todo").css({
            color: "silver",
            borderColor: "silver",
          });
          $(".tab1").removeClass("greenish");
          return false;
        } else {
          $("#order_id").next("span").hide();
        }
        $(".appenderow .createdrow").each(function () {
          if ($(this).find(".order_id").val() === "") {
            $(this).find(".order_id").next("span").show();
            $("ol.progtrckr li.progtrckr-todo").css({
              color: "silver",
              borderColor: "silver",
            });
            $(".tab1").removeClass("greenish");
            $(this).remove();
            $(".tab1").addClass("progtrckr-done").removeClass("progtrckr-todo");
            $(".tab1")
              .siblings()
              .removeClass("progtrckr-done")
              .addClass("progtrckr-todo");
            $(".createaddress").hide();
            $(".createorder").show();
          } else {
            $(this).find(".order_id").next("span").hide();
          }
        });
        if (
          $("#quantity").val() === "" ||
          parseFloat($("#quantity").val()) === 0
        ) {
          $("#quantity").next("span").show();
          $("ol.progtrckr li.progtrckr-todo").css({
            color: "silver",
            borderColor: "silver",
          });
          $(".tab1").removeClass("greenish");
          return false;
        } else {
          $("#quantity").next("span").hide();
        }
        $(".appenderow .createdrow").each(function () {
          if (
            $(this).find(".quantity").val() === "" ||
            parseFloat($(this).find(".quantity").val()) === 0
          ) {
            $(this).find(".quantity").next("span").show();
            $("ol.progtrckr li.progtrckr-todo").css({
              color: "silver",
              borderColor: "silver",
            });
            $(".tab1").removeClass("greenish");
            $(this).remove();
            $(".tab1").addClass("progtrckr-done").removeClass("progtrckr-todo");
            $(".tab1")
              .siblings()
              .removeClass("progtrckr-done")
              .addClass("progtrckr-todo");
            $(".createaddress").hide();
            $(".createorder").show();
          } else {
            $(this).find(".quantity").next("span").hide();
          }
        });
        if ($("#price").val() === "" || parseFloat($("#price").val()) === 0) {
          $("#price").next("span").show();
          return false;
        }

        $(".appenderow .createdrow").each(function () {
          if (
            $(this).find(".price").val() === "" ||
            parseFloat($(this).find(".price").val()) === 0
          ) {
            $(this).find(".price").next("span").show();
            $(this).remove();
          } else {
            var textVal = $(".price").val();
            var regex = /^(\$|)([1-9]\d{0,2}(\,\d{3})*|([1-9]\d*))(\.\d{2})?$/;
            var passed = textVal.match(regex);
            if (passed == null) {
              $(this).find(".price").next("span").show();
              $("ol.progtrckr li.progtrckr-todo").css({
                color: "silver",
                borderColor: "silver",
              });
              $(".tab1").removeClass("greenish");

              $(this).remove();

              $(".tab1")
                .addClass("progtrckr-done")
                .removeClass("progtrckr-todo");
              $(".tab1")
                .siblings()
                .removeClass("progtrckr-done")
                .addClass("progtrckr-todo");
              $(".createaddress").hide();
              $(".createorder").show();
              //return false;
            } else {
              $(this).find(".price").next("span").hide();
              //  return true;
            }
            // return true;
          }
        });
        $(".tab2").addClass("progtrckr-done").removeClass("progtrckr-todo");
        $(".tab2")
          .siblings()
          .removeClass("progtrckr-done")
          .addClass("progtrckr-todo");
        $("ol.progtrckr li.progtrckr-todo").css({
          color: "#05b70c",
          borderColor: "#05b70c",
        });
        $(".tab1").addClass("greenish");
        $(".createaddress").show();
        $(".createorder").hide();
        $(".order_type").show();
        $(".courier_type").show();
      });
      $(".tab1,.back1").click(function () {
        $(this).addClass("progtrckr-done").removeClass("progtrckr-todo");
        $(this)
          .siblings()
          .removeClass("progtrckr-done")
          .addClass("progtrckr-todo");
        $(".createaddress").hide();
        $(".createorder").show();
      });

      $(".input-images").imageUploader({
        imagesInputName: "image",
      });
      $("#price").on("input", function () {
        var qnt = $("#quantity").val();
        console.log(qnt);
        var p = $(this).val();
        gtotal = p * qnt;
        $(".gtotal").text(gtotal);
        document.getElementById("ingtotal").value = gtotal;
        if (p * qnt >= 25000) {
          $(".prempara").show();
        } else {
          $(".prempara").hide();
        }
      });
      $("#price").on("input", function () {
        var total = 0;
        var qnt = 0;
        var total = $(".alreadyappende .createdrow").find("#price").val();
        var qnt = $(".alreadyappende .createdrow").find("#quantity").val();

        if (total * qnt >= 25000) {
          $(".prempara").show();
        } else {
          $(".prempara").hide();
        }
      });
      $("#quantity").on("input", function () {
        var p = $("#price").val();
        console.log(qnt);
        var qnt = $(this).val();
        gtotal = p * qnt;
        $(".gtotal").text(gtotal);
        document.getElementById("ingtotal").value = gtotal;
        if (p * qnt >= 25000) {
          $(".prempara").show();
        } else {
          $(".prempara").hide();
        }
      });
      $("#quantity").on("input", function () {
        var total = 0;
        var qnt = 0;
        var total = $(".alreadyappende .createdrow").find("#price").val();
        var qnt = $(".alreadyappende .createdrow").find("#quantity").val();

        if (total * qnt >= 25000) {
          $(".prempara").show();
        } else {
          $(".prempara").hide();
        }
      });
      $(".butonsnew .createnewadd").click(function () {
        $(".createaddress .createdrow").css("display", "flex");
        $(".butonsnew").hide();
      });

      $(".tab2").click(function () {
        $(".step1").click();
      });
      $(".back2").click(function () {
        $("#addressId").val("");
        $(".existingaddress").find(".exadd.active").removeClass("active");

        $(".existingaddress").hide();
        $(".butonsnew").show();
      });
      $(".existadd").click(function () {
        $(".existingaddress").css("display", "flex");
        $(".butonsnew").hide();
      });
      $(".back3").click(function () {
        $(".createaddress .createdrow").hide();
        $(".butonsnew").show();
      });

      function printError(elemId, hintMsg) {
        document.getElementById(elemId).innerHTML = hintMsg;
      }

      $("#createSubmit").click(function () {
        console.log($("#cfirst").val() === "");
        if ($("#cfirst").val() === "") {
          $("#cfirst").next("span").show();
          return false;
        } else {
          $("#cfirst").next("span").hide();
        }
        if ($("#clast").val() === "") {
          $("#clast").next("span").show();
          return false;
        } else {
          $("#clast").next("span").hide();
        }

        if ($("#phoneField1").val() === "") {
          $("span.moberr").show();
          return false;
        } else {
          $("span.moberr").hide();
        }

        if ($("#cadd").val() === "") {
          $("#cadd").next("span").show();
          return false;
        } else {
          $("#cadd").next("span").hide();
        }

        if ($("#ccity").val() === "") {
          $("#ccity").next("span").show();
          return false;
        } else {
          $("#ccity").next("span").hide();
        }

        if ($("#ccountry").val() === "") {
          $("#ccountry").next("span").show();
          return false;
        } else {
          $("#ccountry").next("span").hide();
        }

        if ($("#czip").val() === "") {
          $("#czip").next("span").show();
          return false;
        } else {
          $("#czip").next("span").hide();
        }
        if ($("#order_type").val() === "") {
          $(".error_order_type").show();
          return false;
        } else {
          $(".error_order_type").hide();
        }
        if ($("#courier_type").val() === "") {
          $(".error_courier_type").show();
          return false;
        } else {
          $(".error_courier_type").hide();
        }
        $(".ploader").show();
        $("form").submit();
      });

      $(function () {
        $("input[type='number']").change(function () {
          var max = parseInt($(this).attr("max"));
          var min = parseInt($(this).attr("min"));
          if ($(this).val() > max) {
            $(this).val(max);
          } else if ($(this).val() < min) {
            $(this).val(min);
          }
        });
      });
      function itemName(val) {
        alert(val);
      }

      $("#itemname").on("change", function () {
        var e = document.getElementById("itemname");
        var select_val = e.value;
        var item_type_id = select_val;
        console.log(item_type_id);
        $.ajax({
          type: "GET",
          url: "https://myxborder.com/warningMessage",
          data: { id: item_type_id },
          success: function (data) {
            console.log(data);
            alert(data.warningMsg);
          },
        });
      });
      function changeVal(row) {
        var newrow = row.closest(".createdrow");
        var qty = $(newrow).find(".qty").val();
        var price = $(newrow).find(".price").val();
        var totalprice = $(newrow).find(".totalprice");

        var tprice = 0;
        if (qty && price) {
          tprice = JSON.parse(qty) * JSON.parse(price);
          totalprice.val(tprice);
        }
        console.log(totalprice);
        var gtotal = 0;

        $(".newform .createdrow").each(function () {
          gtotal = gtotal + JSON.parse($(this).find(".totalprice").val());
          console.log(gtotal);
          $(".gtotal").text(gtotal);
          document.getElementById("ingtotal").value = gtotal;
        });

        if (gtotal >= 25000) {
          $(".prempara").show();
        } else {
          $(".prempara").hide();
        }
      }
      let row_number = 1;
      function addItem(itemstype) {
        document.getElementById("rowNumber").value = ++row_number;
        console.log(row_number);
        var rlength = $(".appenderow .createdrow").length;
        if (rlength > 30) {
          alert("Max 30 items can be added in one order.");
          return false;
        }

        if ($("#store").val() === "") {
          $("#store").next("span").show();
          return false;
        } else {
          $("#store").next("span").hide();
          // return true;
        }
        if ($("#order_id").val() === "") {
          $("#order_id").next("span").show();
          return false;
        } else {
          $("#order_id").next("span").hide();
          /// return true;
        }
        if (
          $("#quantity").val() === "" ||
          parseFloat($("#quantity").val()) === 0
        ) {
          $("#quantity").next("span").show();
          return false;
        } else {
          $("#quantity").next("span").hide();
          //return true;
        }
        if ($("#price").val() === "" || parseFloat($("#price").val()) === 0) {
          $("#price").next("span").show();
          return false;
        } else {
        }
        var optionsAsString = "";
        itemstype.forEach(function (item, index) {
          //"<option value='"+item.id+"'>'"+item.itemType+"'</option>"
          optionsAsString +=
            "<option value='" + item.id + "'>" + item.itemType + "</option>";
        });

        var newrow =
          "<div class='row createdrow'>" +
          "<div class='col-md-2 col-xs-12'>" +
          "<div class='form-group'>" +
          "<label>Item Type*</label>" +
          "<select class='form-control addItemType-" +
          row_number +
          " search_item' name='item_type[]' required=''><option value=''>Please select item type</option>" +
          optionsAsString +
          "<option value='0'>Other</option></select>" +
          "</div>" +
          "</div>" +
          "<div class='col-md-2 col-xs-12 new_other_row' >" +
          "<div class='form-group'>" +
          "<label>Item Name*</label>" +
          "<input type='text' class='form-control store'  name='name[]'  placeholder='Please enter name'>" +
          "</div>" +
          "</div>" +
          "<div class='col-md-2 col-xs-12'>" +
          "<div class='form-group'>" +
          "<label>Online Store*</label>" +
          "<input type='text' class='form-control store'  name='store[]'  id='store' placeholder='Amazon, Flipkart'>" +
          "<span class='error'>Please enter store.</span>" +
          "</div>" +
          "</div>" +
          "<div class='col-md-2 col-xs-12'>" +
          "<div class='form-group'>" +
          "<label>Online Store Order Id*</label>" +
          "<input type='text' class='form-control order_id' name='tracking_number[]' id='order_id' placeholder='Order Id'>" +
          "<span class='error'>Please enter order id.</span>" +
          "</div>" +
          "</div>" +
          "<div class='col-md-2 col-xs-6'>" +
          "<div class='form-group'>" +
          "<label>Color</label>" +
          "<input type='text' class='form-control' id='color' name='color[]' placeholder='Color'>" +
          "</div>" +
          "</div>" +
          "<div class='col-md-1 col-xs-6'>" +
          "<div class='form-group'>" +
          "<label>Size</label>" +
          "<input type='text' class='form-control' id='size'  name='size[]' placeholder='Size'>" +
          "</div>" +
          "</div>" +
          "<div class='col-md-1 col-xs-6'>" +
          "<div class='form-group'>" +
          "<label>Quantity*</label>" +
          "<input type='text' class='form-control numvar quantity qntity qty' maxlength='3' value='1' id='quantity' name='quantity[]' oninput='changeVal($(this))' min='1' max='1000'>" +
          "<span class='error'>Please enter qunatity.</span>" +
          "</div>" +
          "</div>" +
          "<div class='col-md-2 col-xs-6'>" +
          "<div class='form-group pricegr'>" +
          "<label>Price(INR)*</label>" +
          "<input type='text' class='form-control numvar price' maxlength='5' value='0' id='price' name='price[]' oninput='changeVal($(this))' min='0' step='10' >" +
          "<span class='error'>Please enter price.</span>" +
          "</div>" +
          "<input type='hidden' class='form-control numvar totalprice' name='totalprice[]' readonly='' >" +
          "<div class='form-group crossgr'>" +
          "<button class='btn btn-danger' onclick ='delete_row($(this))' style='margin-top: 29px;'>" +
          "<i class='fa fa-remove'></i>" +
          "</button>" +
          "</div>" +
          "</div>" +
          "</div>";
        $(".appenderow").append(newrow);
        $(".search_item").select2({ width: "100%" });

        $(".numvar").keyup(function () {
          if (this.value != this.value.replace(/[^0-9\/]/g, "")) {
            this.value = this.value.replace(/[^0-9\/]/g, "");
          }
        });
        $(".addItemType-" + row_number).on("change", function () {
          var select_val = $(".addItemType-" + row_number).val();
          var item_type_id = select_val;
          console.log(item_type_id);
          $.ajax({
            type: "GET",
            url: "https://myxborder.com/warningMessage",
            data: { id: item_type_id },
            success: function (data) {
              console.log(data);
              alert(data.warningMsg);
            },
          });
        });
      }
      function delete_row(row) {
        row.closest(".createdrow").remove();
        var gtotal = 0;

        $(".newform .newrow").each(function () {
          console.log($(this).find(".totalprice").val());
          gtotal = gtotal + JSON.parse($(this).find(".totalprice").val());
          $(".gtotal").text(gtotal);
          document.getElementById("ingtotal").value = gtotal;
        });
      }

      function chooseAddress(att, row) {
        document.getElementById("addressId").value = att;
        row
          .addClass("active")
          .parents(".col-md-4")
          .siblings()
          .find(".exadd")
          .removeClass("active");
        $(".submit2").show();
      }
      $(function () {
        $(".numvar").keyup(function () {
          if (this.value != this.value.replace(/[^0-9\/]/g, "")) {
            this.value = this.value.replace(/[^0-9\/]/g, "");
          }
        });
      });
    </script>