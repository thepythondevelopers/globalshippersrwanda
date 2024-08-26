
<div class="content-wrapper">
    <section class="content-header">
        <div class="card card-default">
            <div class="card-header">
              <h3 class="card-title">Add Package Information - Consolidate Shipment</h3>
              <div class="card-tools">
              </div>
            </div>
            <div class="card-body">
              <form action = "<?php echo base_url('admin/insert-consolidate-shipments')?>" method="post">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Item type*</label>
                       <select class="form-control" name="item_type" data-placeholder="Select a status" data-dropdown-css-class="select2-purple" style="width: 100%;" >
                       <option value="" >Please select item type</option>
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
                    <!-- <input type="text" class="form-control" name="item_type" placeholder="Enter your Item Type"> -->
                  </div>
                  <div class="form-group">
                    <label>Item Name*</label>
                    <input type="text" class="form-control" name="item_name" placeholder="Enter your Item Name">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Package Size*</label>
                    <input type="text" class="form-control" required="required" name="package_size" placeholder="Enter your package size LxWxH">
                  </div>
                  <div class="form-group">
                     <label>Tracking ID*</label>
                    <input type="text" class="form-control"  required="required" name="tracking_id" placeholder="Enter your tracking ID">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12 col-sm-6">
                  <div class="form-group">
                    <label>Weight*</label>
                    <input type="text" class="form-control"  required="required" name="weight" placeholder="Enter your Weight">
                  </div> 
                </div> 
                <div class="col-12 col-sm-6">
                  <div class="form-group">
                    <label>Quantity*</label>
                    <div class="select2-purple">
                      <input type="text" class="form-control" name="quantity" placeholder="Enter your quantity">
                    </div>
                  </div>
                </div>
                   <div class="col-12 col-sm-6">
                    <div class="form-group">
                    <label>Item Price*</label>
                  <div class="select2-purple">
                      <input type="text" class="form-control" name="price" placeholder="Enter your item price">
                    </div>
                    </div>
              </div>
               <div class="col-12 col-sm-6">
                    <div class="form-group">
                    <label>Total Price*</label>
                  <div class="select2-purple">
                      <input type="text" class="form-control" name="total_price" placeholder="Enter your total price">
                    </div>
                    </div>
              </div>
            
               </div>
              <div class="col-md-6">
              <input class="btn btn-dark" type="submit" name="submit" style="margin-top:20px;"></input>
            </div>
              </form>
            </div>
          </div>
        </section>
  </div>