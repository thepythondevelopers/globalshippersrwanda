<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.css"/>
<style>
/* .image_area {
		  position: relative;
		}

		img {
		  	display: block;
		  	max-width: 100%;
		}

		.preview {
  			overflow: hidden;
  			width: 160px; 
  			height: 160px;
  			margin: 10px;
  			border: 1px solid red;
		}

		.modal-lg{
  			max-width: 1000px !important;
		}

		.overlay {
		  position: absolute;
		  bottom: 10px;
		  left: 0;
		  right: 0;
		  background-color: rgba(255, 255, 255, 0.5);
		  overflow: hidden;
		  height: 0;
		  transition: .5s ease;
		  width: 100%;
		}

		.image_area:hover .overlay {
		  height: 50%;
		  cursor: pointer;
		}

		.text {
		  color: #333;
		  font-size: 20px;
		  position: absolute;
		  top: 50%;
		  left: 50%;
		  -webkit-transform: translate(-50%, -50%);
		  -ms-transform: translate(-50%, -50%);
		  transform: translate(-50%, -50%);
		  text-align: center;
		}  */
</style>
<div class="dashboard-middle profile-page">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-6">
                <div class="profile-details">
                    <div class="profile-desc">
                        <div class="text-white d-flex justify-content-between">

                            <h4>Profile</h4>
                            <span>Join in
                                <?php $date = date("Y",strtotime($list->created_date));
                                     echo $date; ?>
                            </span>
                        </div>

                        <div class="profile-pic">
                            <label class="-label" for="file">
                                <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" width="1em" height="1em">
                                                <path d="M18.26 6H12.3c-.166 0-.298-.135-.323-.299A2.007 2.007 0 0 0 10 4H6c-1.08 0-1.95.86-1.99 1.93H4v.34c0 .11-.062.212-.157.268C2.748 7.191 2 8.374 2 9.74v6.52C2 18.32 3.68 20 5.74 20h12.52A3.74 3.74 0 0 0 22 16.26V9.74C22 7.68 20.32 6 18.26 6zM9.75 16.75C7.68 16.75 6 15.07 6 13c0-2.07 1.68-3.75 3.75-3.75 2.07 0 3.75 1.68 3.75 3.75 0 2.07-1.68 3.75-3.75 3.75zM20 9.61c0 .33-.27.6-.6.6h-1.8c-.33 0-.6-.27-.6-.6v-.3c0-.33.27-.6.6-.6h1.8c.33 0 .6.27.6.6v.3z"></path>
                                                <path d="M9.75 15.25a2.25 2.25 0 1 0 0-4.5 2.25 2.25 0 0 0 0 4.5z"></path>
                                            </svg>
                                        </span>
                            </label>
                            <form> 
                                <input id="file" name="img" data-toggle="modal" data-target="#picModal">
                            </form>
                            <?php foreach($profile as $pic) {?>
                            <img src="<?php echo base_url().$pic->image;?>" id="output" width="200" height="200" />
                            <?php } ?>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="picModal" tabindex="-1" role="dialog"
                            aria-labelledby="picModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- <form action="<?php echo base_url('Home/upload_photo')?>" method="post"
                                            enctype="multipart/form-data" id="img">
                                            <div class="form-group">
                                                <lable>Update Image</lable>
                                                <input type="hidden" id="user_id" name="user_id"
                                                    value="<?php echo $pic->id;?>">
                                                <input class="form-control" type="file" name="image"
                                                    value="<?php echo $pic->image?>"> -->
                                                <!-- <span><img src="<?php //echo $pic->image;?>"></span> -->
                                            <!-- </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary cropped_image">Submit </button>
                                            </div>
                                        </form> -->
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-8 text-center">
                                                <div id="upload-img" style="width:350px"></div>
                                                </div>
                                                <div class="col-md-8" style="">
                                                <form action="<?php echo base_url('Home/upload_photo')?>" method="post"
                                                 enctype="multipart/form-data">
                                                 <input type="hidden" id="user_id" name="user_id"
                                                    value="<?php echo $pic->id;?>">
                                                 <strong>Select Image:</strong>
                                                    <br/>
                                                    <input type="file" id="upload" name="image">
                                                    <br/>
                                                    <input type="submit" class="btn btn-success upload-result">
                                                    <!-- <button  class="btn btn-success upload-result">Upload Image</button> -->
                                                </form>
                                                </div>
                                                <!-- <div class="col-md-8" style="">
                                                <div id="upload-demo-i" style="background:#e1e1e1;width:300px;padding:30px;height:300px;margin-top:30px"></div>
                                                </div> -->
                                             </div>
                                        </div>
                                    </div>
                                    <!-- <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div> -->
                                </div>
                            </div>
                        </div>


                        <div class="profile-name d-flex justify-content-between align-items-center">
                            <h2>
                                <?php echo $list->fname." ".$list->lname;?>
                            </h2>
                            <a class="btn change-btn" href="javascript:void(0)" id="btn_name">Change</a>
                            <form action="<?php echo base_url('Home/update_data');?> " method="post" id="change_name">
                                <input type="hidden" id="id" name="id" value="<?php echo $list->id;?>">
                                <input type="text" name="fname" value="<?php echo $list->fname;?>" class="form-control">
                                <input type="text" name="lname" value="<?php echo $list->lname;?>" class="form-control mt-2">
                                <button type="submit" class="btn btn-primary mt-2" name="update">Update Name</button>
                            </form>

                        </div>
                    </div>
                </div>
<!-- 
                <div class="account-card">
                    <h4 class="text-capitalize">Account options</h4>
                    <div class="national-info">
                        <p>Nationality</p>
                        <span><strong>Rwanda</strong></span>
                        <p>Merchant ID</p>
                        <span><strong>abccmcv</strong></span>
                    </div>
                    <div class="close-acc">
                        <span>
                            <img src="https://www.paypalobjects.com/paypal-ui/spots/svg/lock.svg" class="security_logo"
                                alt="Close account" id="account-close-xs_card-logo">
                        </span>
                        <h6>Close your account </h6>
                    </div>
                </div> -->
                <div class="account-card">
                    <!-- <h4 class="text-capitalize">Plan</h4> -->
                    <div class="national-info">
                        <?php //foreach($plan as $details){?>
                        <p class="text-success">
                            <?php 
                            
                            echo ($list->current_active_plan==1)?'Monthly Plan':(($list->current_active_plan==2)?'Yearly Plan ':'');
                            echo ($list->is_plan_active==1)?' Active':'No active Plan';
                            //echo ($plan->plan_id==1)?'Monthly Plan':'Yearly Plan';echo " ";?>
                        </p>
                        <?php// }?>
                        <!-- <span><strong>Rwanda</strong></span>
                                <p>Merchant ID</p>
                                <span><strong>abccmcv</strong></span> -->
                    </div>
                    <!-- <div class="close-acc">
                                <span>
                                    <img src="https://www.paypalobjects.com/paypal-ui/spots/svg/lock.svg" class="security_logo" alt="Close account" id="account-close-xs_card-logo">
                                </span>
                                <h6>Close your account </h6>
                            </div> -->
                </div>
            </div>
            <div class="col-md-12 col-lg-6">
                <div class="account-card">
                    <div class="d-flex justify-content-between">
                        <h4 class="text-capitalize">Email</h4>
                        <a class="btn add-btn" href="javascript:void(0)" id="addemail">Add</a>
                        <!-- <div class="add_email" id ="add_email"> -->
                            <form action="<?php echo base_url('Home/insert_email')?> " method="POST" id="form_email">
                                <input type="text" class="form-control" name="email" placeholder="Enter your secondary email"/>
                                <button type="submit" class="btn btn-primary mt-2"  name="add">Add Email</button>
                            </form>
                        <!-- </div> -->
                    </div>
                    <span class="acc-pri">Primary</span>
                    <ul>
                        <li class="d-flex justify-content-between">
                            <span>
                                <?php echo $list->email; ?>
                            </span>
                            <a class="btn change-btn" href="javascript:void(0)" id="btn_email">Change</a>
                            <form action="Home/update_email " method="post" id="change_email">
                                <input type="hidden" id="id" name="id" value="<?php echo $add_data[0]->id;?>">
                                <input type="text" name="email" class="form-control" value="<?php echo $add_data[0]->email;?>">
                                <button type="submit" class="btn btn-primary mt-2" name="update">Update Email</button>
                            </form>
                        </li>
                        <li>
                            <p>To update an email address you must have at least two email addresses on file.</p>
                        </li>
                    </ul>
                </div>
                <div class="account-card">
                    <div class="d-flex justify-content-between">
                        <h4 class="text-capitalize">Phone Numbers</h4>
                        <a class="btn add-btn" href="javascript:void(0)" id="add_number">Add</a>
                                 <!-- <div class="add_phone"> -->
                                    <form action=" <?php echo base_url('Home/insert_phone')?>" method="post" id="form_phone">
                                        <input type="text" class="form-control" name="phone" placeholder="Enter your contact number"/>
                                        <button type="submit" class="btn btn-primary mt-2" name="update">Add Phone Number</button>
                                    </form>
                                <!-- </div> -->
                    </div>
                    <p class="text-dark">Mobile<span class="acc-pri">Primary</span></p>
                    <ul>
                        <li class="d-flex justify-content-between align-items-center">
                            <span>
                                <?php echo $list->phone;?>
                            </span>
                            <a class="btn change-btn" href="javascript:void(0)" id="btn_number">Change</a>
                            <form action="<?php echo base_url('Home/update_phone')?>" method="post" id="change_number">
                                <input type="hidden" id="id" name="id" value="<?php echo $add_data[0]->id;?>">
                                <input type="text" name="phone" class="form-control" value="<?php echo $add_data[0]->phone;?>">
                                <button type="submit" class="btn btn-primary mt-2" name="update">Update Number</button>
                            </form>
                        </li>
                    </ul>
                </div>
                <div class="account-card">
                    <div class="d-flex justify-content-between align-items-start">
                        <h4 class="text-capitalize">Addresses</h4>
                        <a class="btn add-btn" href="javascript:void(0)" id="add_address">Add</a>
                        <!-- <div class="add_address"> -->
                                    <form action="<?php echo base_url('Home/insert_address');?> " method="post" id="form_address">
                                    <input type="text" class="form-control" name="address" placeholder="Enter your address"/>
                                        <button type="submit" class=" btn btn-primary mt-2" name="update">Add Address</button>
                                    </form>
                                <!-- </div> -->
                    </div>
                    <span class="acc-pri">Primary</span>
                    <ul>
                        <li class="d-flex justify-content-between align-items-center">
                            <h6>
                                <?php $list->address_line ;?>
                            </h6>
                            <a class="btn view-btn" href="javascript:void(0)" id="btn_address">Edit</a>
                            <form action="<?php echo base_url('Home/update_address')?>" method="post" id="change_address">
                                <input type="hidden" name="id" value="<?php echo $add_data[0]->id?>"> 
                                <input type="text" name="edit_address" class="form-control" value="<?php echo $add_data[0]->address?>">
                                <button type="submit" class="btn btn-primary mt-2" name="update">Update Address</button>
                            </form>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.js"></script>

<script>
    $(document).ready(function () {

        $('#change_name').hide();
        $('#btn_name').click(function () {
            $('#change_name').toggle()
        });

        var i = 1;
        $('#form_email').hide();
        $('#addemail').click(function () {
            $('#form_email').toggle();
        });
        

        var j = 1;
        $('#form_phone').hide();
        $('#add_number').click(function () {
            $('#form_phone').toggle();
        });

        var k = 1;
        $('#form_address').hide();
        $('#add_address').click(function () {
            $('#form_address').toggle();
        });

        $('#change_email').hide();
        $('#btn_email').click(function () {
            $('#change_email').toggle()
        });
        $('#change_number').hide();
        $('#btn_number').click(function () {
            $('#change_number').toggle()
        });
        $('#change_address').hide();
        $('#btn_address').click(function () {
            $('#change_address').toggle()
        });
        

    })

    $uploadCrop = $('#upload-img').croppie({
    enableExif: true,
    viewport: {
        width: 200,
        height: 200,
        type: 'circle'
    },
    boundary: {
        width: 300,
        height: 300
    }
});
     
$('#upload').on('change', function () { 
	var reader = new FileReader();
    reader.onload = function (e) {
    	$uploadCrop.croppie('bind', {
    		url: e.target.result
    	}).then(function(){
    		console.log('jQuery bind complete');
    	});
    	    
    }
    reader.readAsDataURL(this.files[0]);
});
     
$('.upload-result').on('click', function (ev) {
	$uploadCrop.croppie('result', {
		type: 'canvas',
		size: 'viewport'
	}).then(function (resp) {
     
		// $.ajax({
		// 	url: "<?php echo base_url('Home/upload_photo')?>",
		// 	type: "POST",
        //      dataType: 'json',
		// 	data: {"image":resp},
		// 	success: function (data) {
		// 		html = '<img src="' + resp + '" />';
		// 		$("#upload-demo-i").html(html);
                
		// 	}
		// });
	});
});

</script>