<style>
  .small-box {
    margin-bottom: 24px;
    box-shadow: 0 0 0.875rem 0 rgba(41, 48, 66, .05);
    border-radius: 6px;
    border: none;
    background: white;
   
  }

  .small-box h4 {
    font-size: 1em;
    font-weight: 500;
    /* color: #495057; */
    color:#000;
    margin-bottom: 8px;
    font-family: 'poppins';
    transition: all .3s ease-in-out;
    line-height: 29px;
    margin-top: 10px;
  }

  .small-box strong {
    font-weight: 500;
    color: #495057;
    transition: all .3s ease-in-out;
  }

  .createbtn11 {
    border: 1px solid #000;
    color: #000 !important;
    padding: 3px;
    text-align: center;
    border-radius: 4px;
    display: block;
    margin: 0 auto;
    transition: all .3s ease-in-out;
  }
  .small .users{
    padding: 0px;
    list-style: none;
    margin: 0px;
    text-align: left;
    line-height: 29px;
    margin-top: 10px;
    color: #777;
    font-size: 14px;
  }
  .users li i.fas.fa-check-circle {
    color: #000;
    margin-left: 10px;
}
.users li span {
    color: #000;
}

.users li span i {
    padding-left: 2px;
    padding-right: 5px;
    font-size: 16px;
    width: 26px;
    text-align: center;
    color: #000;
}
.btn-primary:hover {
    color: black;
    background-color: white;
    border-color: white;
}
</style>
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="<?php echo base_url()?>dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60"
      width="60">
  </div>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div>
          <div class="col-sm-6">
            <!-- <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol> -->
          </div>
        </div>
      </div>
    </div>
    <section class="content">
      <div class="container-fluid">
        <div class="row scardboxes">
          <div class="col-lg-3 col-6">
            <div class="small-box ">
              <div class="inner ">
                <a href="<?php echo base_url('order/shopnship')?>">
                  <h4>Consolidate Shipments</h4>
                </a>
                <div class="mb-1">
                  <div class="d-flex justify-content-between">
                    <strong>
                      Total Orders
                    </strong>
                    <div class="text-dark">
                      <?php echo $total_order;?>
                    </div>
                  </div>
                  <strong>
                    <a href="<?php echo base_url('shopnship-create-order');?>" class="createbtn11">
                      Create Order
                    </a>
                  </strong>
                </div>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box">
              <div class="inner ">
                <a href="<?php echo base_url('order/assisted')?>">
                  <h4>Buy For Me</h4>
                </a>
                <div class="mb-1">
                  <div class="d-flex justify-content-between">
                    <strong>
                      Total Orders
                    </strong>
                    <div class="text-dark">
                      <?php echo $assisted_total_order;?>
                    </div>
                  </div>
                  <strong>
                    <a href="<?php echo base_url('assisted-create-order');?>" class="createbtn11">
                      Create Order
                    </a>
                  </strong>
                </div>
              </div>
              <!-- <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div> -->
            </div>
          </div>
          <!-- </a> -->
          <div class="col-lg-3 col-6">
            <div class="small-box">
              <div class="inner ">
                <a href="<?php echo base_url('order/international')?>">
                  <h4>Pickup Shipments</h4>
                </a>
                <div class="mb-1">
                  <div class="d-flex justify-content-between">
                    <strong>
                      Total Orders
                    </strong>
                    <div class="text-dark">
                      <?php echo $international_total_order;?>
                    </div>
                  </div>
                  <strong>
                    <a href="<?php echo base_url('international-create-order');?>" class="createbtn11">
                      Create Order
                    </a>
                  </strong>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box">
              <div class="inner users">
                <!-- <h3>
                  <?php echo $total_users;?>
                </h3>

                <a href="<?php echo base_url('user-list')?>">
                  <p>Users</p>
                </a> -->
                <!-- <h4 class="mb-2">
                  <?php// echo $adminrecord->fname.' '.$adminrecord->lname?>
                </h4> -->
                <div class="mb-1">
                  <ul>
                    <li><span>Unique ID: </span>
                      <?php echo $adminrecord->id?>
                      
                    </li>
                    <li><span><i class="fas fa-mobile"></i> </span>
                     <?php echo $adminrecord->phone?><b><i class="fas fa-check-circle"></i></b>
                    </li>

                    <li><span><i class="fas fa-envelope"></i> </span>
                      <?php echo $adminrecord->email?><b><i class="fas fa-check-circle"></i></b>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <section class="col-lg-7 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <!-- <div class="card">
                <div class="card-header">
                  <h3 class="card-title">
                    <i class="fas fa-chart-pie mr-1"></i>
                    Orders
                  </h3>
                  <div class="card-tools">
                    <ul class="nav nav-pills ml-auto">
                      <li class="nav-item">
                        <a class="nav-link active" href="#revenue-chart" data-toggle="tab">Orders</a>
                      </li>
                      <li class="nav-item" style="display:none;">
                        <a class="nav-link" href="#sales-chart" data-toggle="tab">Donut</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="card-body">
                  <div class="tab-content p-0">
                    <div class="chart tab-pane active" id="revenue-chart"
                         style="position: relative; height: 300px;">
                        <canvas id="revenue-chart-canvas" height="300" style="height: 300px;"></canvas>
                     </div>
                    <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
                      <canvas id="sales-chart-canvas" height="300" style="height: 300px;"></canvas>
                    </div>
                  </div> 

                </div>
              </div> -->
          </section>
          <section class="col-lg-5 connectedSortable" style="display:none">
            <div class="card bg-gradient-primary">
              <div class="card-header border-0">
                <h3 class="card-title">
                  <i class="fas fa-map-marker-alt mr-1"></i>
                  Visitors
                </h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-dark btn-sm daterange" title="Date range">
                    <i class="far fa-calendar-alt"></i>
                  </button>
                  <button type="button" class="btn btn-dark btn-sm" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <!-- <div class="card-body"> -->
              <!-- <div id="world-map" style="height: 250px; width: 100%;"></div> -->
              <!-- </div> -->
              <div class="card-footer bg-transparent">
                <div class="row">
                  <div class="col-4 text-center">
                    <div id="sparkline-1"></div>
                    <div class="text-white">Visitors</div>
                  </div>
                  <div class="col-4 text-center">
                    <div id="sparkline-2"></div>
                    <div class="text-white">Online</div>
                  </div>
                  <div class="col-4 text-center">
                    <div id="sparkline-3"></div>
                    <div class="text-white">Sales</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="tab-content p-0">
                <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;">
                  <div class="chartjs-size-monitor">
                    <div class="chartjs-size-monitor-expand">
                      <div class=""></div>
                    </div>
                    <div class="chartjs-size-monitor-shrink">
                      <div class=""></div>
                    </div>
                  </div>
                  <canvas id="revenue-chart-canvas" height="300" style="height: 300px; display: block; width: 474px;"
                    width="474" class="chartjs-render-monitor"></canvas>
                </div>
                <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
                  <canvas id="sales-chart-canvas" height="0" style="height: 0px; display: block; width: 0px;"
                    class="chartjs-render-monitor" width="0"></canvas>
                </div>
              </div>
            </div>
          </section>
          <section class="col-lg-5 connectedSortable">
            <div class="card flex-fill v-card">
              <div class="card-header d-flex justify-content-between">
                <h5 class="card-title mb-0">Your Virtual Address</h5>
                <div class="col-md-7 col-xs-12 order_type">
                        <div class="form-group">
                            <select id="admin_country" class="form-control search_item select2-hidden-accessible">
                                <option value="">Please Select Country </option>
                                <option value="1">INDIA</option>
                                <option value="2">USA</option>
                                <option value="3">CHINA</option>
                                <option value="4">GERMANY</option>
                                <option value="5">JAPAN</option>
                                <option value="6">TURKEY</option>
                                <option value="7">RWANDA</option>
                            </select>
                        </div>
                    </div>
                <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#addressModal">
                    <i class="fa fa-edit d-flex"></i>
                  </button>
              </div>
              <ul class="addcont">
                <li>
                  <label>Name</label>
                  <span>
                    <input type="text" class="copy" readonly=""
                      value="<?php echo $address->fname.' '.$address->lname;?>" id="myInput">
                  </span>
                  <button class="btn btn-dark" onclick="nameFunction()">
                    <i class="fa fa-copy"></i>
                  </button> 
                </li>
                <li>
                  <label>Address Line 1</label>
                  <textarea class="copy" readonly="" id="myInputAddress"><?php echo $address->address;?></textarea>
                  <button class="btn btn-dark" onclick="addressFunction()">
                    <i class="fa fa-copy"></i>
                  </button>
                </li>
                <li>
                  <label>Landmark</label>
                  <input type="text" class="copy" readonly="" value="<?php echo $address->landmark;?>"
                    id="myInputLandmary">
                  <button class="btn btn-dark" onclick="landFunction()">
                    <i class="fa fa-copy"></i>
                  </button>
                </li>

                <li>
                  <label>Zipcode</label>
                  <input type="text" class="copy" readonly="" value="<?php echo $address->zipcode;?>"
                    id="myInputZipcode">
                  <button class="btn btn-dark" onclick="zipFunction()">
                    <i class="fa fa-copy"></i>
                  </button>
                </li>

                <li>
                  <label>State</label>
                  <input type="text" class="copy" readonly="" value="<?php echo $address->state;?> " id="myInputState">
                  <button class="btn btn-dark" onclick="stateFunction()">
                    <i class="fa fa-copy"></i>
                  </button>
                </li>

                <li>
                  <label>City</label>
                  <input type="text" class="copy" readonly="" value="<?php  echo $address->city;?>" id="myInputCity">
                  <button class="btn btn-dark" onclick="cityFunction()">
                    <i class="fa fa-copy"></i>
                  </button>
                </li>

                <li>
                  <label>Delivery Phone Number</label>
                  <input type="text" class="copy" readonly="" value="<?php echo $address->phone;?>" id="myInputPhone">
                  <button class="btn btn-dark" onclick="contactFunction()">
                    <i class="fa fa-copy"></i>
                  </button>
                </li>
              </ul>
            </div>
          <div class="modal fade" id="addressModal" tabindex="-1" role="dialog" aria-labelledby="addressModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <form action="<?php echo base_url('Admin/update-address')?>" method="post">
            <input type="hidden" name="id" id ="addressId" value="<?php echo $address->id?>">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Address</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
              </div>
              <div class="modal-body">
                <div class="row">
                  <div class="form-group col-sm-6">
                  <label>First Name*</label>
                  <input type="text" id='addressfname' class="form-control" name="first_name" placeholder="Enter your first name"
                  required value="<?php echo $address->fname?>">
                  </div>
                  <div class="form-group col-sm-6">
                    <label>Phone number*</label>
                    <input type="text"  id='addressPhone' class="form-control" name="phone_number" placeholder="Enter your phone number"
                    required value="<?php echo $address->phone;?>">
                  </div>
                  <div class="form-group col-sm-6">
                  <label>Last Name*</label>
                    <input type="text"   id='addressLastname' class="form-control" name="last_name" placeholder="Enter your last name"
                    required value="<?php echo $address->lname;?>">
                  </div>
                  <div class="form-group col-sm-6">
                  <label>Address Line*</label>
                    <input type="text" class="form-control"  id='addressline' name="address" placeholder="Enter your address"
                    required value="<?php echo $address->address;?>">
                  </div>
                  <div class="form-group col-sm-6">
                  <label>Landmark*</label>
                <input type="text" class="form-control" id="addresslandmark" name="landmark" placeholder="Enter your landmark"
                required value="<?php echo $address->landmark;?>">
                  </div>
                  <div class="form-group col-sm-6">
                  <label>State*</label>
                <input type="text" id="addressState" class="form-control" name="state" placeholder="Enter your state"
                required value="<?php echo $address->state;?>">
                  </div>
                  <div class="form-group col-sm-6">
                  <label>City*</label>
                <input type="text" id="addressCity" class="form-control" name="city" placeholder="Enter your city"
                required value="<?php echo $address->city;?>">
                  </div>
                <div class="form-group col-sm-6">
                  <label>Country*</label>
                <input type="text" id ="addressCountry" class="form-control" name="country" placeholder="Enter your Country" readonly="readonly" id="addressCountry"
                required value="<?php echo $address->country;?>">
                  </div>
                  <div class="form-group col-sm-6">
                  <label>zipcode*</label>
                <input type="text"  id ="addresszipcode" class="form-control" name="zip" placeholder="Enter your Zipcode"
                required value="<?php echo $address->zipcode;?>">
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-dark" name="submit" value="<?php //echo $order_id;?>">Save</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
          </section>
        </div>
      </div><!-- /.container-fluid -->
    </section>
  </div>
  <!-- <input type="hidden" id="test" value="[]"> -->
  <script>

    function nameFunction(){
      var copyText = document.getElementById("myInput");
      copyText.select();
        copyText.setSelectionRange(0, 99999)
        document.execCommand("copy");
    }

    function addressFunction(){
      var copyText = document.getElementById("myInputAddress");
      copyText.select();
        copyText.setSelectionRange(0, 99999)
        document.execCommand("copy");
    }
    function landFunction(){
      var copyText = document.getElementById("myInputLandmary");
      copyText.select();
        copyText.setSelectionRange(0, 99999)
        document.execCommand("copy");
    }
    function zipFunction(){
      var copyText = document.getElementById("myInputZipcode");
      copyText.select();
        copyText.setSelectionRange(0, 99999)
        document.execCommand("copy");
    }
    function cityFunction(){
      var copyText = document.getElementById("myInputCity");
      copyText.select();
        copyText.setSelectionRange(0, 99999)
        document.execCommand("copy");
    }

    function stateFunction(){
      var copyText = document.getElementById("myInputState");
      copyText.select();
        copyText.setSelectionRange(0, 99999)
        document.execCommand("copy");
    }

    function contactFunction(){
      var copyText = document.getElementById("myInputPhone");
      copyText.select();
        copyText.setSelectionRange(0, 99999)
        document.execCommand("copy");
    }

    $('#admin_country').on('change',function(){
    $.ajax({
      type: "POST",
      url: "<?php echo base_url();?>get-admin-address",
      data: {'country_id':this.value},
      dataType: "json",
      encode: true,
    }).done(function (data) {
      $('#myInput').val(data.fname+' '+data.lname);
      $('#addressfname').val(data.fname);
      $('#addressLastname').val(data.lname);
      $('#myInputAddress, #addressline').val(data.address);
      $('#myInputLandmary,#addresslandmark').val(data.landmark);
      $('#myInputZipcode, #addresszipcode').val(data.zipcode);
      $('#myInputState, #addressState').val(data.state);
      $('#myInputCity, #addressCity').val(data.city);
      $('#myInputPhone, #addressPhone').val(data.phone);
      $('#addressId').val(data.id);
      $('#addressCountry').val(data.country);
    });
    });

    
  </script>