
<style>
</style>
<script type="text/javascript"
  src="/extra-assets/ckeditor/ckeditor.js"></script>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Homepage CMS</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
              <form method="post" action="<?php echo base_url('cms/homepage')?>" enctype = "multipart/form-data" id="homepagedata">
                <div class="card-body">
               <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Section 1 Title1*</label>
                <input type="text" class="form-control" name="sec1_title1" placeholder="Enter your first name" value="<?php echo $data->sec1_title1;?>">
              </div>
            <div class="form-group">
                <label>Section 1 Main1*</label>
                <input type="text" class="form-control" name="sec1_main1" placeholder="Enter your phone number" value="<?php echo $data->sec1_main1;?>">
            </div>
            <div class="form-group">
                <label>Section 1 Description1*</label>
                <input type="text" class="form-control" name="sec1_endtitle1" placeholder="Enter your phone number" value="<?php echo $data->sec1_endtitle1;?>">
            </div>
            <div class="form-group">
                <label>Section 1 SliderImage1*</label>
                <input type="file" class="form-control" name="sec1_sliderImage1" placeholder="Enter your file " value="<?php echo $data->sec1_sliderImage1;?>" id="img1">
                <img src="<?php echo base_url().$data->sec1_sliderImage1;?>" style="width:100px;height:100px;">
                <span id="errorimg1">please select image</span>
            </div>
            <div class="form-group">
                <label>Section1  Title2*</label>
                <input type="text" class="form-control" name="sec1_title2" placeholder="Enter your first name" value="<?php echo $data->sec1_title2;?>" >
              </div>
            <div class="form-group">
                <label>Section1  Main2*</label>
                <input type="text" class="form-control" name="sec1_main2" placeholder="Enter your phone number" value="<?php echo $data->sec1_main2;?>">
            </div>
            <div class="form-group">
                <label>Section1  Description2*</label>
                <input type="text" class="form-control" name="sec1_endtitle2" placeholder="Enter your phone number" value="<?php echo $data->sec1_endtitle2;?>">
            </div>
            <div class="form-group">
                <label>Section1  SliderImage2*</label>
                <input type="file" class="form-control" name="sec1_sliderImage2" placeholder="Enter your phone number" value="<?php echo $data->sec1_sliderImage2;?>" id="img2">
                <img src="<?php echo base_url().$data->sec1_sliderImage2?>" style="width:100px;height:100px;">
                <span id="errorimg2">please select image</span>
            </div>
             <div class="form-group">
                <label>Section1  Title3*</label>
                <input type="text" class="form-control" name="sec1_title3" placeholder="Enter your first name" value="<?php echo $data->sec1_title3;?>">
              </div>
            <div class="form-group">
                <label>Section1  Main3*</label>
                <input type="text" class="form-control" name="sec1_main3" placeholder="Enter your phone number" value="<?php echo $data->sec1_main3;?>">
            </div>
            <div class="form-group">
                <label>Section1  Description3*</label>
                <input type="text" class="form-control" name="sec1_endtitle3" placeholder="Enter your phone number" value="<?php echo $data->sec1_endtitle3;?>">
            </div>
            <div class="form-group">
                <label>Section1  SliderImage3*</label>
                <input type="file" class="form-control" name="sec1_sliderImage3" placeholder="" id="img3">
                <img src="<?php echo base_url().$data->sec1_sliderImage3?>" style="width:100px;height:100px;">
                <span id="errorimg3">please select image</span>
            </div>  
            <div class="form-group">
                <label>Section2  Title*</label>
                <input type="text" class="form-control" name="sec2_title" placeholder="Enter your phone number" value="<?php echo $data->sec2_title;?>">
            </div>
             <div class="form-group">
                <label>Section2  Main*</label>
                <input type="text" class="form-control" name="sec2_main" placeholder="Enter your phone number" value="<?php echo $data->sec2_main;?>">
            </div>
             <div class="form-group">
                <label>Section2  Description*</label>
                <input type="text" class="form-control" name="sec2_desc" placeholder="Enter your phone number" value="<?php echo $data->sec2_desc;?>">
            </div>  
             <div class="form-group">
                <label>Section2  BannerImage*</label>
                <input type="file" class="form-control" name="sec2_bannerImage" placeholder="Enter your phone number" value="<?php echo $data->sec2_bannerImage;?>" id="img4">
                <img src="<?php echo base_url().$data->sec2_bannerImage;?>" style="width:100px;height:100px;">
                <span id="errorimg4">please select image</span>
            </div>
             <div class="form-group">
                <label>Section2  ModalVideo*</label>
                <input type="text" class="form-control" name="sec2_modalvideo" placeholder="Enter your phone number" value="<?php echo $data->sec2_modalvideo;?>">
            </div>      
            <div class="form-group">
                <label>Section2  heading1*</label>
                <textarea type="text" id="aboutuspoints"
                        class="form-control" name="aboutuspoints"
                        placeholder="Enter points"><?php echo $data->aboutuspoints;?>
                        </textarea>
            </div>
            <div class="form-group">
                <label>Section2  heading5*</label>
                <input type="text" class="form-control" name="sec2_heading5" placeholder="Enter your phone number" value="<?php echo $data->sec2_heading5;?>">
            </div>
            <div class="form-group">
                <label>Section3 Title*</label>
                <input type="text" class="form-control" name="sec3_title" placeholder="Enter your phone number" value="<?php echo $data->sec3_title;?>">
            </div>
            <div class="form-group">
                <label>Section3 Main*</label>
                <input type="text" class="form-control" name="sec3_main" placeholder="Enter your phone number" value="<?php echo $data->sec3_main;?>">
            </div>
            <div class="form-group">
                <label>Section3 step1title*</label>
                <input type="text" class="form-control" name="sec3_step1title" placeholder="Enter your phone number" value="<?php echo $data->sec3_step1title;?>">
            </div>
            <div class="form-group">
                <label>Section3 step1icon*</label>
                <input type="text" class="form-control" name="sec3_step1icon" placeholder="Enter your phone number" value="<?php echo $data->sec3_step1icon;?>">
            </div>
            <div class="form-group">
                <label>Section3 step1title*</label>
                <input type="text" class="form-control" name="sec3_step1title" placeholder="Enter your phone number" value="<?php echo $data->sec3_step1title;?>">
            </div>
            <div class="form-group">
                <label>Section3 step1descripton*</label>
                <input type="text" class="form-control" name="sec3_step1desc" placeholder="Enter your phone number" value="<?php echo $data->sec3_step1desc;?>">
            </div>
            <div class="form-group">
                <label>Section3 step2title*</label>
                <input type="text" class="form-control" name="sec3_step2title" placeholder="Enter your phone number" value="<?php echo $data->sec3_step2title;?>">
            </div>
            <div class="form-group">
                <label>Section3 step2Icon*</label>
                <input type="text" class="form-control" name="sec3_step2icon" placeholder="Enter your phone number" value="<?php echo $data->sec3_step2icon;?>">
            </div>
            <div class="form-group">
                <label>Section3 step2description*</label>
                <input type="text" class="form-control" name="sec3_step2desc" placeholder="Enter your phone number" value="<?php echo $data->sec3_step2desc;?>">
            </div>
            <div class="form-group">
                <label>Section3 step3title*</label>
                <input type="text" class="form-control" name="sec3_step3title" placeholder="Enter your phone number" value="<?php echo $data->sec3_step3title;?>">
            </div>
            <div class="form-group">
                <label>Section3 step3Icon*</label>
                <input type="text" class="form-control" name="sec3_step3icon" placeholder="Enter your phone number" value="<?php echo $data->sec3_step3icon;?>">
            </div>
            <div class="form-group">
                <label>Section3 step3description*</label>
                <input type="text" class="form-control" name="sec3_step3desc" placeholder="Enter your phone number" value="<?php echo $data->sec3_step3desc;?>">
            </div>
            <div class="form-group">
                <label>Section3 step4title*</label>
                <input type="text" class="form-control" name="sec3_step4title" placeholder="Enter your phone number" value="<?php echo $data->sec3_step4title;?>">
            </div> 
            <div class="form-group">
                <label>Section3 step4Icon*</label>
                <input type="text" class="form-control" name="sec3_step4icon" placeholder="Enter your phone number" value="<?php echo $data->sec3_step4icon;?>">
            </div> 
            <div class="form-group">
                <label>Section3 step4description*</label>
                <input type="text" class="form-control" name="sec3_step4desc" placeholder="Enter your phone number" value="<?php echo $data->sec3_step4desc;?>">
            </div> 
            <div class="form-group">
                <label>Section5 slider_Image5*</label>
                <input type="file" class="form-control" name="sec5_slider_Image5" value="<?php //echo $data->sec5_jsondata;?>" id="img5">
                <img src="<?php  echo base_url().$data->sec5_slider_Image5;?>" style="width:100px;height:100px;">
                <span id="errorimg5">please select image</span>
            </div>
            <div class="form-group">
                <label>Section5 Domain 5*</label>
                <input type="text" class="form-control" name="sec5_domain5" value="<?php echo $data->sec5_domain5;?>">
            </div>
            <div class="form-group">
                <label>Section5 Text 5*</label>
                <input type="text" class="form-control" name="sec5_text5" value="<?php echo $data->sec5_text5;?>">
            </div>
            <div class="form-group">
                <label>Section5 slider_Image6*</label>
                <input type="file" class="form-control" name="sec5_slider_Image6" value="<?php// echo $data->sec5_jsondata;?>" id="img6">
                <img src="<?php echo base_url().$data->sec5_slider_Image6;?>" style="width:100px;height:100px;">
                <span id="errorimg6">please select image</span>
            </div>
            <div class="form-group">
                <label>Section5 Domain 6*</label>
                <input type="text" class="form-control" name="sec5_domain6" value="<?php echo $data->sec5_domain6;?>">
            </div>
            <div class="form-group">
                <label>Section5 Text 6*</label>
                <input type="text" class="form-control" name="sec5_text6" value="<?php echo $data->sec5_text6;?>">
            </div>
            <div class="form-group">
                <label>Section5 slider_Image7*</label>
                <input type="file" class="form-control" name="sec5_slider_Image7" value="<?php// echo $data->sec5_jsondata;?>" id="img7">
                <img src="<?php  echo base_url().$data->sec5_slider_Image7;?>" style="width:100px;height:100px;">
                <span id="errorimg7">please select image</span>
            </div>
            <div class="form-group">
                <label>Section5 Domain 7*</label>
                <input type="text" class="form-control" name="sec5_domain7" value="<?php echo $data->sec5_domain7;?>">
            </div>
            <div class="form-group">
                <label>Section5 Text 7*</label>
                <input type="text" class="form-control" name="sec5_text7" value="<?php echo $data->sec5_text7;?>">
            </div>
            <div class="form-group">
                <label>Section5 slider_Image8*</label>
                <input type="file" class="form-control" name="sec5_slider_Image8" value="<?php //echo $data->sec5_jsondata;?>" id="img8">
                <img src="<?php echo base_url().$data->sec5_slider_Image8;?>" style="width:100px;height:100px;">
                <span id="errorimg8">please select image</span>
            </div>
            <div class="form-group">
                <label>Section5 Domain 8*</label>
                <input type="text" class="form-control" name="sec5_domain8" value="<?php echo $data->sec5_domain8;?>">
            </div>
            <div class="form-group">
                <label>Section5 Text 8*</label>
                <input type="text" class="form-control" name="sec5_text8" value="<?php echo $data->sec5_text8;?>">
            </div>
            <div class="form-group">
                <label>Section6 Review1</label>
                <input type="text" class="form-control" name="sec6_review1" placeholder="Enter your last name" value="<?php echo $data->sec6_review1;?>">
            </div>  
            <div class="form-group">
                <label>Section6 Review2</label>
                <input type="text" class="form-control" name="sec6_review2" placeholder="Enter your last name" value="<?php echo $data->sec6_review2;?>">
            </div> 
            <div class="form-group">
                <label>Section6 Review3</label>
                <input type="text" class="form-control" name="sec6_review3" placeholder="Enter your last name" value="<?php echo $data->sec6_review3;?>">
            </div> 
            <div class="form-group">
                <label>section 5 Modal Text7*</label>
                <input type="text" class="form-control" name="sec5_modal_text7" placeholder="" value="<?php echo $data->sec5_modal_text7;?>">
            </div> 
            <div class="form-group">
                <label>section 5 Modal heading7*</label>
                <input type="text" class="form-control" name="sec5_modal_heading7" placeholder="" value="<?php echo $data->sec5_modal_heading7;?>">
            </div>
            <div class="form-group">
                <label>section 5 Modal Text8*</label>
                <input type="text" class="form-control" name="sec5_modal_text8" placeholder="" value="<?php echo $data->sec5_modal_text8;?>">
              </div>
              <div class="form-group">
                <label>section 5 Modal heading8*</label>
                <input type="text" class="form-control" name="sec5_modal_heading8" placeholder="" value="<?php echo $data->sec5_modal_heading8;?>">
            </div>        
            </div>
            <div class="col-md-6">
            <div class="form-group">
                <label>Section4 Title*</label>
                <input type="text" class="form-control" name="sec4_title" placeholder="Enter your last name" value="<?php echo $data->sec4_title;?>">
            </div>
          <div class="form-group">
                <label>Section4 main*</label>
                <input type="text" class="form-control" name="sec4_main" placeholder="Enter your last name" value="<?php echo $data->sec4_main;?>">
            </div>
          <div class="form-group">
                <label>Section4 part1Img1*</label>
                <input type="file" class="form-control" name="sec4_part1Img1" placeholder="Enter your last name" id="img9" value="<?php echo $data->sec4_part1Img1;?>">
                <img src="<?php echo base_url().$data->sec4_part1Img1;?>" style="width:100px;height:100px">
                <span id="errorimg9">please select image</span>
            </div>
          <div class="form-group">
                <label>Section4 part1title1*</label>
                <input type="text" class="form-control" name="sec4_part1title1" placeholder="Enter your last name" value="<?php echo $data->sec4_part1title1;?>">
            </div>
          <div class="form-group">
                <label>Section4 part1description*</label>
                <input type="text" class="form-control" name="sec4_part1description" placeholder="Enter your last name" value="<?php echo $data->sec4_part1description;?>">
            </div>
          <div class="form-group">
                <label>Section4 part1point*</label>
                <textarea type="text" id="part1points"
                        class="form-control" name="sec4_part1points"
                        placeholder="Enter points"><?php echo $data->sec4_part1points;?>
                        </textarea>
            </div>
          <div class="form-group">
                <label>Section4 part2title*</label>
                <input type="text" class="form-control" name="sec4_part2title" placeholder="Enter your last name" value="<?php echo $data->sec4_part2title;?>">
            </div>
          <div class="form-group">
                <label>Section4 part2Img*</label>
                <input type="file" class="form-control" name="sec4_part2Img" placeholder="Enter your last name" id="img10" value="<?php echo $data->sec4_part2Img;?>">
                <img src="<?php echo base_url().$data->sec4_part2Img;?>" style="width:100px;height:100px">
                <span id="errorimg10">please select image</span>
            </div>
          <div class="form-group">
                <label>Section4 part2description*</label>
                <input type="text" class="form-control" name="sec4_part2description" placeholder="Enter your last name" value="<?php echo $data->sec4_part2description;?>">
            </div>
          <div class="form-group">
                <label>Section4 part2points*</label>
                      <textarea type="text" id="part2points"
                        class="form-control" name="sec4_part2points"
                        placeholder="Enter points"><?php echo $data->sec4_part2points;?>
                        </textarea>
            </div>
          <div class="form-group">
                <label>Section4 part3title*</label>
                <input type="text" class="form-control" name="sec4_part3title" placeholder="Enter your last name" value="<?php echo $data->sec4_part3title;?>">
            </div>
          <div class="form-group">
                <label>Section4 part3Img*</label>
                <input type="file" class="form-control" name="sec4_part3Img" placeholder="Enter your last name" id="img11" value="<?php echo $data->sec4_part3Img;?>">
                <img src="<?php echo base_url().$data->sec4_part3Img;?>" style="width:100px;height:100px">
                <span id="errorimg11">please select image</span>
            </div>
            <div class="form-group">
                <label>Section4 part3description*</label>
                <input type="text" class="form-control" name="sec4_part3description" placeholder="Enter your last name" value="<?php echo $data->sec4_part3description;?>">
            </div>
           <div class="form-group">
                <label>Section4 part3points*</label>
                <!-- <input type="text" class="form-control" name="sec4_part3pointsJS" placeholder="Enter your last name" value="<?php echo $data->sec4_part3pointsJS;?>"> -->
                <textarea type="text" id="part3points"
                        class="form-control" name="sec4_part3points"
                        placeholder="Enter points"><?php echo $data->sec4_part3points;?>
                        </textarea>
            </div>
           <div class="form-group">
                <label>Section5 Title*</label>
                <input type="text" class="form-control" name="sec5_title" placeholder="Enter your last name" value="<?php echo $data->sec5_title;?>">
            </div>
           <div class="form-group">
                <label>Section5 Description*</label>
                <input type="text" class="form-control" name="sec5_desc" placeholder="Enter your last name" value="<?php echo $data->sec5_desc;?>">
            </div>
           <div class="form-group">
                <label>Section5 slider_Image1*</label>
                <input type="file" class="form-control" name="sec5_slider_Image1" value="<?php //echo $data->sec5_jsondata;?>" id="img12">
                <img src="<?php  echo base_url().$data->sec5_slider_Image1;?>" style="width:100px;height:100px;">
                <span id="errorimg12">please select image</span>
            </div>
            <div class="form-group">
                <label>Section5 Domain 1*</label>
                <input type="text" class="form-control" name="sec5_domain1" value="<?php echo $data->sec5_domain1;?>">
            </div>
            <div class="form-group">
                <label>Section5 Text 1*</label>
                <input type="text" class="form-control" name="sec5_text1" value="<?php echo $data->sec5_text1;?>">
            </div>
            <div class="form-group">
                <label>Section5 slider_Image2*</label>
                <input type="file" class="form-control" name="sec5_slider_Image2" value="<?php //echo $data->sec5_jsondata;?>" id="img13">
                <img src="<?php  echo base_url().$data->sec5_slider_Image2;?>" style="width:100px;height:100px;">
                <span id="errorimg13">please select image</span>
            </div>
            <div class="form-group">
                <label>Section5 Domain 2*</label>
                <input type="text" class="form-control" name="sec5_domain2" value="<?php echo $data->sec5_domain2;?>">
            </div>
            <div class="form-group">
                <label>Section5 Text 2*</label>
                <input type="text" class="form-control" name="sec5_text2" value="<?php echo $data->sec5_text2;?>">
            </div>
            <div class="form-group">
                <label>Section5 slider_Image3*</label>
                <input type="file" class="form-control" name="sec5_slider_Image3" value="<?php //echo $data->sec5_jsondata;?>" id="img14">
                <img src="<?php  echo base_url().$data->sec5_slider_Image3;?>" style="width:100px;height:100px;">
                <span id="errorimg14">please select image</span>
            </div>
            <div class="form-group">
                <label>Section5 Domain 3*</label>
                <input type="text" class="form-control" name="sec5_domain3" value="<?php echo $data->sec5_domain3;?>">
            </div>
            <div class="form-group">
                <label>Section5 Text3 *</label>
                <input type="text" class="form-control" name="sec5_text3" value="<?php echo $data->sec5_text3;?>">
            </div>
            <div class="form-group">
                <label>Section5 slider_Image4*</label>
                <input type="file" class="form-control" name="sec5_slider_Image4" value="<?php //echo $data->sec5_jsondata;?>" id="img15">
                <img src="<?php  echo base_url().$data->sec5_slider_Image4;?>" style="width:100px;height:100px;">
                <span id="errorimg15">please select image</span>
            </div>
            
            <div class="form-group">
                <label>Section5 Domain 4*</label>
                <input type="text" class="form-control" name="sec5_domain4" value="<?php echo $data->sec5_domain4;?>">
            </div>
            <div class="form-group">
                <label>Section5 Text 4*</label>
                <input type="text" class="form-control" name="sec5_text4" value="<?php echo $data->sec5_text4;?>">
            </div>
           <div class="form-group">
                <label>Section6 Title*</label>
                <input type="text" class="form-control" name="sec6_title" placeholder="Enter your last name" value="<?php echo $data->sec6_title;?>">
            </div>
           <div class="form-group">
                <label>Section6 Description*</label>
                <input type="text" class="form-control" name="sec6_desc" placeholder="Enter your last name" value="<?php echo $data->sec6_desc;?>">
            </div>
           <div class="form-group">
                <label>Section7 title*</label>
                <input type="text" class="form-control" name="sec7_title" placeholder="Enter your last name" value="<?php echo $data->sec7_title;?>">
            </div>
           <div class="form-group">
                <label>Section7 main*</label>
                <input type="text" class="form-control" name="sec7_main" placeholder="Enter your last name" value="<?php echo $data->sec7_main;?>">
            </div>
           
           <!-- <div class="form-group">
                <label>Section7 jsondata*</label>
                <input type="text" class="form-control" name="sec7_jsondata" placeholder="Enter your last name" value="<?php echo $data->sec7_jsondata;?>">
            </div> -->
            <div class="form-group">
                <label>section 5 Modal Main Heading*</label>
                <input type="text" class="form-control" name="sec5_modal_main" placeholder="Enter your last name" value="<?php echo $data->sec5_modal_main;?>">
            </div>

            <div class="form-group">
                <label>section 5 Modal Text1*</label>
                <input type="text" class="form-control" name="sec5_modal_text1" placeholder="Enter your last name" value="<?php echo $data->sec5_modal_text1;?>">
            </div>
            <div class="form-group">
                <label>section 5 Modal heading1*</label>
                <input type="text" class="form-control" name="sec5_modal_heading1" placeholder="Enter your last name" value="<?php echo $data->sec5_modal_heading1;?>">
            </div>
            <div class="form-group">
                <label>section 5 Modal Text2*</label>
                <input type="text" class="form-control" name="sec5_modal_text2" placeholder="Enter your last name" value="<?php echo $data->sec5_modal_text2;?>">
            </div> 
            <div class="form-group">
                <label>section 5 Modal heading2*</label>
                <input type="text" class="form-control" name="sec5_modal_heading2" placeholder="Enter your last name" value="<?php echo $data->sec5_modal_heading2;?>">
            </div>
            <div class="form-group">
                <label>section 5 Modal Text3*</label>
                <input type="text" class="form-control" name="sec5_modal_text3" placeholder="Enter your last name" value="<?php echo $data->sec5_modal_text3;?>">
                <div class="form-group">
                <label>section 5 Modal heading3*</label>
                <input type="text" class="form-control" name="sec5_modal_heading3" placeholder="Enter your last name" value="<?php echo $data->sec5_modal_heading3;?>">
            </div>
             <div class="form-group">
                <label>section 5 Modal Text4*</label>
                <input type="text" class="form-control" name="sec5_modal_text4" placeholder="Enter your last name" value="<?php echo $data->sec5_modal_text4;?>">
            </div> 
            <div class="form-group">
                <label>section 5 Modal heading4*</label>
                <input type="text" class="form-control" name="sec5_modal_heading4" placeholder="Enter your last name" value="<?php echo $data->sec5_modal_heading4;?>">
            </div>
            <div class="form-group">
                <label>section 5 Modal Text5*</label>
                <input type="text" class="form-control" name="sec5_modal_text5" placeholder="Enter your last name" value="<?php echo $data->sec5_modal_text5;?>">
            </div>
            <div class="form-group">
                <label>section 5 Modal heading5*</label>
                <input type="text" class="form-control" name="sec5_modal_heading5" placeholder="Enter your last name" value="<?php echo $data->sec5_modal_heading5;?>">
            </div>
            <div class="form-group">
                <label>section 5 Modal Text6*</label>
                <input type="text" class="form-control" name="sec5_modal_text6" placeholder="" value="<?php echo $data->sec5_modal_text6;?>">
            </div>
            <div class="form-group">
                <label>section 5 Modal heading6*</label>
                <input type="text" class="form-control" name="sec5_modal_heading6" placeholder="" value="<?php echo $data->sec5_modal_heading6;?>">
            </div>
            
          </div>
              
              
           
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
          <!-- right column -->
          
          <!--/.col (right) -->
          <div class="card-footer">
                  <input type="submit" name="submit" class="btn btn-dark">
                </div>
              </form>
            </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->

    </section>
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Homepage Treanding Now's Modal CMS</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
              <form method="post" action="<?php echo base_url('Admin/Admin/homepageslidermodal')?>" enctype = "multipart/form-data" id ="modalimg">
                <div class="card-body">
               <div class="row">
            <div class="col-md-6">
            <div class="form-group">
                <label>section 5 Modal Image1*</label>
                <input type="file" class="form-control" name="sec5_modal_img1" placeholder="" value="<?php //echo $data->sec5_modal_heading;?>" id="modalimg1">
                <img src="<?php echo base_url().$data->sec5_modal_img1?>" style="width:100px;height:100px;">
                <span id ="errormsg1" >Please select image</span>
            </div>  
            <div class="form-group">
                <label>section 5 Modal Image2*</label>
                <input type="file" class="form-control" name="sec5_modal_img2" placeholder="" value="<?php //echo $data->sec5_modal_heading;?>" id="modalimg2">
                <img src="<?php echo base_url().$data->sec5_modal_img1?>" style="width:100px;height:100px;">
                <span id ="errormsg2" >Please select image</span>
            </div>
            <div class="form-group">
                <label>section 5 Modal Image3*</label>
                <input type="file" class="form-control" name="sec5_modal_img3" placeholder="" value="<?php //echo $data->sec5_modal_heading;?>" id="modalimg3">
                <img src="<?php echo base_url().$data->sec5_modal_img3?>" style="width:100px;height:100px;">
                <span id ="errormsg3" >Please select image</span>
            </div>
            <div class="form-group">
                <label>section 5 Modal Image4*</label>
                <input type="file" class="form-control" name="sec5_modal_img4" placeholder="" value="<?php //echo $data->sec5_modal_heading;?>" id="modalimg4">
                <img src="<?php echo base_url().$data->sec5_modal_img4?>" style="width:100px;height:100px;">
                <span id ="errormsg4" >Please select image</span>
            </div>      
            </div>
            <div class="col-md-6">
            <div class="form-group">
                <label>section 5 Modal Image5*</label>
                <input type="file" class="form-control" name="sec5_modal_img5" placeholder="" value="<?php //echo $data->sec5_modal_heading;?>" id="modalimg5">
                <img src="<?php echo base_url().$data->sec5_modal_img5?>" style="width:100px;height:100px;">
                <span id ="errormsg5" >Please select image</span>
            </div>
            <div class="form-group">
                <label>section 5 Modal Image6*</label>
                <input type="file" class="form-control" name="sec5_modal_img6" placeholder="" value="<?php //echo $data->sec5_modal_heading;?>" id="modalimg6">
                <img src="<?php echo base_url().$data->sec5_modal_img6?>" style="width:100px;height:100px;">
                <span id ="errormsg6" >Please select image</span>
            </div>
            <div class="form-group">
                <label>section 5 Modal Image7*</label>
                <input type="file" class="form-control" name="sec5_modal_img7" placeholder="" value="<?php //echo $data->sec5_modal_heading;?>" id="modalimg7">
                <img src="<?php echo base_url().$data->sec5_modal_img7?>" style="width:100px;height:100px;">
                <span id ="errormsg7" >Please select image</span>
            </div>
            <div class="form-group">
                <label>section 5 Modal Image8*</label>
                <input type="file" class="form-control" name="sec5_modal_img8" placeholder="" value="<?php //echo $data->sec5_modal_heading;?>" id="modalimg8">
                <img src="<?php echo base_url().$data->sec5_modal_img8?>" style="width:100px;height:100px;">
                <span id ="errormsg8" >Please select image</span>
            </div>
          </div>
              
              <div class="card-footer">
                  <input type="submit" name="submit" class="btn btn-dark">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

    </section>

   
  </div>
  <script type="text/javascript">
    $(function(){
      CKEDITOR.replace('part1points');
    });

</script>
  <script type="text/javascript">
    $(function(){
      CKEDITOR.replace('part2points');
    });

</script>
<script type="text/javascript">
    $(function(){
      CKEDITOR.replace('part3points');
    });

</script>
<script type="text/javascript">
    $(function(){
      CKEDITOR.replace('aboutuspoints');
    });

</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
        $(document).ready(function() {
            $('#errorimg1').hide();
            $('#errorimg2').hide();
            $('#errorimg3').hide();
            $('#errorimg4').hide();
            $('#errorimg5').hide();
            $('#errorimg6').hide();
            $('#errorimg7').hide();
            $('#errorimg8').hide();
            $('#errorimg9').hide();
            $('#errorimg10').hide();
            $('#errorimg11').hide();
            $('#errorimg12').hide();
            $('#errorimg13').hide();
            $('#errorimg14').hide();
            $('#errorimg15').hide();
            $('#homepagedata').on('submit', function(e) {
                if ($('#img1').val() === '') {
                    e.preventDefault();
                    $('#errorimg1').show();
                } else {
                    $('#errorimg1').hide();
                }
                if ($('#img2').val() === '') {
                    e.preventDefault();
                    $('#errorimg2').show();
                } else {
                    $('#errorimg2').hide();
                }
                if ($('#img3').val() === '') {
                    e.preventDefault();
                    $('#errorimg3').show();
                } else {
                    $('#errorimg3').hide();
                }
                if ($('#img4').val() === '') {
                    e.preventDefault();
                    $('#errorimg4').show();
                } else {
                    $('#errorimg4').hide();
                }
                if ($('#img5').val() === '') {
                    e.preventDefault();
                    $('#errorimg5').show();
                } else {
                    $('#errorimg5').hide();
                }
                if ($('#img6').val() === '') {
                    e.preventDefault();
                    $('#errorimg6').show();
                } else {
                    $('#errorimg6').hide();
                }
                if ($('#img7').val() === '') {
                    e.preventDefault();
                    $('#errorimg7').show();
                } else {
                    $('#errorimg7').hide();
                }
                if ($('#img8').val() === '') {
                    e.preventDefault();
                    $('#errorimg8').show();
                } else {
                    $('#errorimg8').hide();
                }
                if ($('#img9').val() === '') {
                    e.preventDefault();
                    $('#errorimg9').show();
                } else {
                    $('#errorimg9').hide();
                }
                if ($('#img10').val() === '') {
                    e.preventDefault();
                    $('#errorimg10').show();
                } else {
                    $('#errorimg10').hide();
                }
                if ($('#img11').val() === '') {
                    e.preventDefault();
                    $('#errorimg11').show();
                } else {
                    $('#errorimg11').hide();
                }
                if ($('#img12').val() === '') {
                    e.preventDefault();
                    $('#errorimg12').show();
                } else {
                    $('#errorimg12').hide();
                }
                if ($('#img13').val() === '') {
                    e.preventDefault();
                    $('#errorimg13').show();
                } else {
                    $('#errorimg13').hide();
                }
                if ($('#img14').val() === '') {
                    e.preventDefault();
                    $('#errorimg14').show();
                } else {
                    $('#errorimg14').hide();
                }
                if ($('#img15').val() === '') {
                    e.preventDefault();
                    $('#errorimg15').show();
                } else {
                    $('#errorimg15').hide();
                }
               
            });
        });
    </script>
<script>
        $(document).ready(function() {
            $('#errormsg1').hide();
            $('#errormsg2').hide();
            $('#errormsg3').hide();
            $('#errormsg4').hide();
            $('#errormsg5').hide();
            $('#errormsg6').hide();
            $('#errormsg7').hide();
            $('#errormsg8').hide();
            $('#modalimg').on('submit', function(e) {
                if ($('#modalimg1').val() === '') {
                    e.preventDefault();
                    $('#errormsg1').show();
                } else {
                    $('#errormsg1').hide();
                }
                if ($('#modalimg2').val() === '') {
                    e.preventDefault();
                    $('#errormsg2').show();
                } else {
                    $('#errorimg2').hide();
                }
                if ($('#modalimg3').val() === '') {
                    e.preventDefault();
                    $('#errormsg3').show();
                } else {
                    $('#errormsg3').hide();
                }
                if ($('#modalimg4').val() === '') {
                    e.preventDefault();
                    $('#errormsg4').show();
                } else {
                    $('#errormsg4').hide();
                }
                if ($('#modalimg5').val() === '') {
                    e.preventDefault();
                    $('#errormsg5').show();
                } else {
                    $('#errormsg5').hide();
                }
                if ($('#modalimg6').val() === '') {
                    e.preventDefault();
                    $('#errormsg6').show();
                } else {
                    $('#errormsg6').hide();
                }
                if ($('#modalimg7').val() === '') {
                    e.preventDefault();
                    $('#errormsg7').show();
                } else {
                    $('#errormsg7').hide();
                }
                if ($('#modalimg8').val() === '') {
                    e.preventDefault();
                    $('#errormsg8').show();
                } else {
                    $('#errormsg8').hide();
                }
            });
        });
        </script>
  </div>