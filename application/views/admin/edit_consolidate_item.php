<div class="content-wrapper">
    <section class="content-header">
        <div class="card card-default">
            <div class="card-header">
              <h3 class="card-title">Edit Package Item Information - Consolidate Shipment</h3>
              <div class="card-tools">
              </div>
            </div>
            <div class="card-body">
              <form action = "<?php echo base_url('Admin/edit-consolidate-shipment/'.$item_id);?>" method="post">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Item type*</label>
                       <select class="form-control" required="required" name="item_type" data-placeholder="Select a status" data-dropdown-css-class="select2-purple" style="width: 100%;">
                       <option value="" >Please select item type</option>
                       <option value="1" <?php if ($item_details->product_type ==1 ) echo ' selected="selected"'; ?> >Books</option>
                       <option value="2" <?php if ($item_details->product_type ==2 ) echo ' selected="selected"'; ?> >Cereals</option>
                       <option value="3" <?php if ($item_details->product_type ==3 ) echo ' selected="selected"'; ?> >Cosmetics</option>
                       <option value="4" <?php if ($item_details->product_type ==4 ) echo ' selected="selected"'; ?> >Crockery</option>
                       <option value="5" <?php if ($item_details->product_type ==5 ) echo ' selected="selected"'; ?> >Electronics</option>
                       <option value="6" <?php if ($item_details->product_type ==6 ) echo ' selected="selected"'; ?> >Food items</option>
                       <option value="7" <?php if ($item_details->product_type ==7 ) echo ' selected="selected"'; ?> >Handicraft</option>
                       <option value="8" <?php if ($item_details->product_type ==8 ) echo ' selected="selected"'; ?> >Home Decor</option>
                       <option value="9" <?php if ($item_details->product_type ==9 ) echo ' selected="selected"'; ?> >Others</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Item Name*</label>
                    <input type="text" class="form-control" required="required" name="item_name" value="<?php echo $item_details->product_name;?>" placeholder="Enter your Item Name">
                  </div>
                </div>
                <div class="col-md-6">
              <div class="form-group">
                <label>Package Size*</label>
                <input type="text" value="<?php echo $item_details->store;?>" class="form-control" required="required" name="package_size" placeholder="Enter your package size LxWxH">
              </div>
                <div class="form-group">
                    <label>Package Weight(kg)*</label>
                    <input type="text" class="form-control" required="required" value="<?php echo $item_details->size;?>"  required="required" name="weight" placeholder="Enter your Weight">
                  </div> 
                </div>
              </div>
              <div class="row">
                 <div class="col-12 col-sm-6">
                  <div class="form-group">
                    <label>Item Quantity*</label>
                    <div class="select2-purple">
                      <input type="text" class="form-control" required="required" value="<?php echo $item_details->quantity;?>" name="quantity" placeholder="Enter your quantity">
                    </div>
                  </div>
                </div>
                   <div class="col-12 col-sm-6">
                    <div class="form-group">
                    <label>Item Price*</label>
                  <div class="select2-purple">
                      <input type="text" class="form-control" required="required" value="<?php echo $item_details->item_price;?>" name="price" placeholder="Enter your item price">
                    </div>
                    </div>
              </div>
               <div class="col-12 col-sm-6">
                    <div class="form-group">
                    <label>Total Price*</label>
                  <div class="select2-purple">
              <input type="text" class="form-control" required="required" value="<?php echo $item_details->total_amount;?>" name="total_price" placeholder="Enter your total price">
                    </div>
                    </div>
              </div>
            </div>
              <div class="col-md-6">
              <input class="btn btn-primary" type="submit" name="submit" style="margin-top:20px;"></input>
            </div>
              </form>
            </div>
          </div>
        </section>
  </div>