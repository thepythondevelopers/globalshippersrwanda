<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.css"/>
<style>
    .pass-profile {
        position: relative;
    }

    .pass-profile .profile-name {
        width: calc(100% - 135px);
        margin-left: auto;
    }

    .pass-profile .profile-name span {
        font-family: 'Poppins';
        font-weight: 400;
        background: #ccfbf1;
        border-radius: 50px;
        padding: 2px 12px;
    }
</style>
<div class="container">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="pass-profile py-5">
            <div class="profile-pic">
                <label class="-label" for="file">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" width="1em"
                            height="1em">
                            <path
                                d="M18.26 6H12.3c-.166 0-.298-.135-.323-.299A2.007 2.007 0 0 0 10 4H6c-1.08 0-1.95.86-1.99 1.93H4v.34c0 .11-.062.212-.157.268C2.748 7.191 2 8.374 2 9.74v6.52C2 18.32 3.68 20 5.74 20h12.52A3.74 3.74 0 0 0 22 16.26V9.74C22 7.68 20.32 6 18.26 6zM9.75 16.75C7.68 16.75 6 15.07 6 13c0-2.07 1.68-3.75 3.75-3.75 2.07 0 3.75 1.68 3.75 3.75 0 2.07-1.68 3.75-3.75 3.75zM20 9.61c0 .33-.27.6-.6.6h-1.8c-.33 0-.6-.27-.6-.6v-.3c0-.33.27-.6.6-.6h1.8c.33 0 .6.27.6.6v.3z">
                            </path>
                            <path d="M9.75 15.25a2.25 2.25 0 1 0 0-4.5 2.25 2.25 0 0 0 0 4.5z"></path>
                        </svg>
                    </span>
                    </label>
                    <form> 
                    <input id="file" name="img" data-toggle="modal" data-target="#picModal">
                    </form>
               
                <!-- <input id="file" type="file" onchange="loadFile(event)"> -->
                <img src="<?php echo base_url().$list->image;?>" id="output" width="200" height="200">
            </div>



            <div class="profile-name d-flex justify-content-between align-items-center">
                <h2>
                    <?php echo $list->fname.' '.$list->lname;?>
                </h2>
                <span><?php  echo ($list->current_active_plan==1)?'Monthly Plan':(($list->current_active_plan==2)?'Yearly Plan ':'');
                            echo ($list->is_plan_active==1)?' Active':' Inactive';?></span>
            </div>
        </div>
        <form action="<?php echo base_url('ForgotPassword/updatepassword')?>" method="post" class="mt-5">
            <input type="hidden" name="id" id="id" value="<?php echo $email->id;?>>">

            <div class="col-md-12 form-group mb-3">
                <label for="exampleInputEmail1">Current Password*</label>
                <input type="password" name="old_password" class="form-control" required="" value=""
                    placeholder="Enter Current Password">
            </div>
            <div class="col-md-12 form-group mb-3">
                <label for="phone">New Password*</label>
                <input type="password" class="form-control" name="new_pass" value="" placeholder="Enter New Password">
            </div>
            <div class="col-md-12 form-group mb-3">
                <label for="address">Confirm Password*</label>
                <input type="password" name="confirmed" placeholder="Enter Confirm Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary " style="margin-bottom:20px;margin-right:20px;">Change
                Password</button>

        </form>
    </div>

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
                                                <form action="<?php echo base_url('Home/change_upload_photo')?>" method="post"
                                                 enctype="multipart/form-data">
                                                 <input type="hidden" id="user_id" name="user_id"
                                                    value="<?php echo $list->id;?>">
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
    <div class="col-md-2"></div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.js"></script>
<script>
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