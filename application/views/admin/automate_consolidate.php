<style>
  .page-item.active .page-link {
    z-index: 3;
    color: #fff;
    background-color: #000;
    border-color: #000;
}
.page-link {
    position: relative;
    display: block;
    padding: var(--bs-pagination-padding-y) var(--bs-pagination-padding-x);
    font-size: var(--bs-pagination-font-size);
    color: #000;
    text-decoration: none;
    background-color: var(--bs-pagination-bg);
    border: var(--bs-pagination-border-width) solid var(--bs-pagination-border-color);
    transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
}
.buttons-pdf{
background:#000;
}
.buttons-print{
  background:#000;
}
</style>
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
        <div class="col-sm-6"></div>
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
              <h3 class="card-title">Automate Consolidate Shipment</h3>
            </div>
            <div class="card-header"><a href="<?php echo base_url('admin/add-consolidate-shipments');?>" style="color:black;">Add Package Information</a></div>
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Item type</th>
                    <th>Item Name</th>
                    <th>Package Size</th>
                    <th>Tracking ID</th>
                    <th>Order ID</th>
                    <th>Weight</th>
                    <th>Quantity</th>
                    <th>Item Price</th>
                    <th>Total Price</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($users as $record) {
                    ?>
                  <tr>
                    <td>
                      <?php echo $record->id;?>
                    </td>
                    <td>
                      <?php echo $record->item_type_name;?>
                    </td> 
                    <td>
                      <?php echo $record->item_name;?>
                    </td>
                    <td>
                      <?php echo $record->package_size;?>
                    </td>
                    <td>
                      <?php echo $record->tracking_id;?>
                    </td> 
                    <td>
                      <?php echo $record->customer_order_id;?>
                    </td> 
                    <td>
                      <?php echo $record->weight;?>
                    </td>
                    <td>
                      <?php echo $record->quantity;?>
                    </td>
                    <td>
                      <?php echo $record->price;?>
                    </td>
                    <td>
                      <?php echo $record->total_price;?>
                    </td>
                   
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