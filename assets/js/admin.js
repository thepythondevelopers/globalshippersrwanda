//restriction
$(document).ready(function(){
  $('.testing').hide();
 $('#addrestrictiondiv').click(function(){
      $('.testing').show();       

      var newaddrow = `<div class="row createdrow">

          <div class="col-md-6 ">  
            <div class="form-group">
              <label>ImagePath*</label>
              <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="exampleInputFile" name="imgpath[]" >
                      <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                      <span class="input-group-text">Upload</span>
                    </div>
                  </div>
            </div>
          
            <div class="form-group">
              <label>points*</label>               
              <textarea class="form-control" name="points[]" placeholder="Enter points"></textarea>    
          </div>
          </div>
          <div class="col-md-6">
          <div class="form-group">
              <label>Title*</label>
              <input type="text" class="form-control" name="sec2_title[]" placeholder="Enter Title">
          </div>
          <div class="form-group">
              <label>description*</label>               
              <textarea class="form-control" name="description[]" placeholder="Enter description"></textarea>    
          </div>
          </div>
          <div class="form-group crossgr">
      <a class="delete_row btn btn-danger pull-right onclick='delete_row($(this))">
          <i class="fa fa-remove"></i>
      </a>
  </div>
  </div>`;
          
  $(".testing").append(newaddrow);
 });

   $('.testing').on('click', '.crossgr', function() {
      $(this).parent('.createdrow').remove();
  });




});

//blog
$(document).ready(function(){
$('.blogrow').hide();
$('#addblogdiv').click(function(){
     $('.blogrow').show();       

     var newaddblog = ` <div class="row createdrow">

         <div class="col-md-6 ">  
           <div class="form-group">
             <label>ImagePath*</label>
             <div class="input-group">
                   <div class="custom-file">
                     <input type="file" class="custom-file-input" id="exampleInputFile" name="imgpath[]" value="">
                     <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                   </div>
                   <div class="input-group-append">
                     <span class="input-group-text">Upload</span>
                   </div>
                 </div>
           </div>
         
           <div class="form-group">
             <label>Comments*</label>               
             <textarea class="form-control" name="points[]" placeholder="Enter Comments"></textarea>    
         </div>
         </div>
         <div class="col-md-6">
         <div class="form-group">
             <label>Title*</label>
             <input type="text" class="form-control" name="sec2_title[]" placeholder="Enter Title" value="">
         </div>
         <div class="form-group">
             <label>description*</label>               
             <textarea class="form-control" name="description[]" placeholder="Enter description"></textarea>    
         </div>
         </div>
         <div class="col-md-6">
         <div class="form-group">
           <lable>Date</lable>
           <input type="date" class="form-control"name="date[]" value="">
        </div>
         </div>
               <div class="form-group crossgr">
      <a class="delete_row btn btn-danger pull-right onclick='delete_row($(this))">
          <i class="fa fa-remove"></i>
      </a>
  </div>
 </div>`;
         
 $(".blogrow").append(newaddblog);
});

  $('.blogrow').on('click', '.crossgr', function() {
     $(this).parent('.createdrow').remove();
 });
});
  // faq

  $(document).ready(function(){
    $('.faq').hide();
    $('#addfaqsdiv').click(function(){
         $('.faq').show();       
    
         var newfaq = `  <div class="row createdrow">
          <div class="col-md-6">
          <div class="form-group">
              <label>Question*</label>
              <input type="text" class="form-control" name="question[]" placeholder="Enter Question" value="">
          </div>
          <div class="form-group">
              <label>Answer*</label>               
              <textarea class="form-control" name="answer[]" placeholder="Enter Answer"></textarea>    
          </div>
          </div>
           
                   <div class="form-group crossgr">
          <a class="delete_row btn btn-danger pull-right onclick='delete_row($(this))">
              <i class="fa fa-remove"></i>
          </a>
      </div>
     </div>`;
             
     $(".faq").append(newfaq);
    });
    
      $('.faq').on('click', '.crossgr', function() {
         $(this).parent('.createdrow').remove();
     });
    });

    //about us

    $(document).ready(function(){
      $('.about').hide();
      $('#addaboutusdiv').click(function(){
           $('.about').show();       
      
           var newabout = ` <div class="row createdrow">
          <div class="col-md-6 ">  
            <div class="form-group">
              <label>Section4 Title*</label> 
                  <input type="text" class="form-control" name="sec4title[]" value="" placeholder="Enter title">
            </div>
          
            <div class="form-group">
            <label>Section4 Description*</label>              
            <input type="text" class="form-control" name="sec4desc[]" placeholder="Enter description" value="">   
          </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <lable>Section4 Image</lable>
              <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="exampleInputFile" name="sec4imgpath[]" value=" ">
                      <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                      <span class="input-group-text">Upload</span>
                    </div>
                  </div>
            </div>
          </div>

  </div>
             
        <div class="form-group crossgr">
            <a class="delete_row btn btn-danger pull-right onclick='delete_row($(this))">
                <i class="fa fa-remove"></i>
            </a>
        </div>
       </div>`;
               
       $(".about").append(newabout);
      });
      
        $('.about').on('click', '.crossgr', function() {
           $(this).parent('.createdrow').remove();
       });
      });

      $(document).ready(function(){
        $('.aboutsection7').hide();
        $('#addaboutsec7div').click(function(){
             $('.aboutsection7').show();       
        
             var newabout7 = ` <div class="row createdrow">
                    <div class="col-md-6 ">
                      <div class="form-group">
                        <label>Section7 Title*</label>
                        <input type="text" class="form-control"
                          name="sec7title[]" value placeholder="Enter title">
                      </div>

                      <div class="form-group">
                        <label>Section7 Description*</label>
                        <input type="text" class="form-control"
                          name="sec7desc[]" placeholder="Enter description"
                          value>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <lable>Section7 Image</lable>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input"
                              id="exampleInputFile" name="sec7imgpath[]"
                              value=" ">
                            <label class="custom-file-label"
                              for="exampleInputFile">Choose file</label>
                          </div>
                          <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                          </div>
                        </div>
                      </div>
                    </div>

                
               
              <div class="form-group crossgr">
              <a class="delete_row btn btn-danger pull-right onclick='delete_row($(this))">
                  <i class="fa fa-remove"></i>
              </a>
          </div>
       </div>`;
                 
         $(".aboutsection7").append(newabout7);
        });
        
          $('.aboutsection7').on('click', '.crossgr', function() {
             $(this).parent('.createdrow').remove();
         });
        });

        $(document).ready(function(){
          $('.aboutsection6').hide();
          $('#addaboutsec6div').click(function(){
               $('.aboutsection6').show();       
          
               var newabout6 = `<div class="row createdrow">
                    <div class="col-md-6 ">
                      <div class="form-group">
                        <label>Section6 Title*</label>
                        <input type="text" class="form-control"
                          name="sec6title[]" value placeholder="Enter title">
                      </div>

                      <div class="form-group">
                        <label>Section6 Description*</label>
                        <input type="text" class="form-control"
                          name="sec6desc[]" placeholder="Enter description"
                          value>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <lable>Section6 Image</lable>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input"
                              id="exampleInputFile" name="sec6imgpath[]"
                              value=" ">
                            <label class="custom-file-label"
                              for="exampleInputFile">Choose file</label>
                          </div>
                          <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                          </div>
                        </div>
                      </div>
                    </div>
                <div class="form-group crossgr">
                <a class="delete_row btn btn-danger pull-right onclick='delete_row($(this))">
                    <i class="fa fa-remove"></i>
                </a>
            </div>
           </div>`;
                   
           $(".aboutsection6").append(newabout6);
          });
          
            $('.aboutsection6').on('click', '.crossgr', function() {
               $(this).parent('.createdrow').remove();
           });
          }); 

//howitworks

$(document).ready(function(){
  $('.howitwork').hide();
  $('#addhowitworkdiv').click(function(){
       $('.howitwork').show();       
  
       var newabout = `<div class="row createdrow">
          <div class="col-md-6 ">  
            <div class="form-group">
              <label>ImagePath*</label>
              <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="exampleInputFile" name="imgpath[]" value="">
                      <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                      <span class="input-group-text">Upload</span>
                    </div>
                  </div>
            </div>
            <div class="form-group">
              <label>Title*</label>
              <input type="text" class="form-control" name="sec2_title[]" placeholder="Enter Title" value="">
          </div>
          </div>
          <div class="col-md-6">

          <div class="form-group">
              <label>description*</label>               
              <textarea class="form-control" name="sec2description[]" placeholder="Enter description"></textarea>    
          </div>
          </div>
         
        <div class="form-group crossgr">
        <a class="delete_row btn btn-danger pull-right onclick='delete_row($(this))">
            <i class="fa fa-remove"></i>
        </a>
    </div>
   </div>`;
           
   $(".howitwork").append(newabout);
  });
  
    $('.howitwork').on('click', '.crossgr', function() {
       $(this).parent('.createdrow').remove();
   });
  });
//consolidation

$(document).ready(function(){
  $('.consolidationsec2').hide();
  $('#addconsolidationsec2div').click(function(){
       $('.consolidationsec2').show();       
  
       var newconsolidationsec2 = ` <div class="row createdrow">
          <div class="col-md-6 ">  
            <div class="form-group">
              <label>ImagePath*</label>
              <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="exampleInputFile" name="imgpath[]" value="">
                      <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                      <span class="input-group-text">Upload</span>
                    </div>
                  </div>
            </div>
            <div class="form-group">
              <label>Title*</label>
              <input type="text" class="form-control" name="sec2_title[]" placeholder="Enter Title" value="">
          </div>
          </div>
          <div class="col-md-6">

          <div class="form-group">
              <label>description*</label>               
              <textarea class="form-control" name="sec2description[]" placeholder="Enter description"></textarea>    
          </div>
          </div>
         
    <div class="form-group crossgr">
        <a class="delete_row btn btn-danger pull-right onclick='delete_row($(this))">
            <i class="fa fa-remove"></i>
        </a>
    </div>
   </div>`;
           
   $(".consolidationsec2").append(newconsolidationsec2);
  });
  
    $('.consolidationsec2').on('click', '.crossgr', function() {
       $(this).parent('.createdrow').remove();
   });
  });

  $(document).ready(function(){
    $('.consolidationsec4').hide();
    $('#addconsolidationsec4div').click(function(){
         $('.consolidationsec4').show();       
    
         var newconsolidationsec4 = ` <div class="row createdrows">
          <div class="col-md-6 ">  
            <div class="form-group">
              <label>Question*</label>
              <input type="text" class="form-control" name="question[]" placeholder="Enter question" value="">
          </div>
          </div>
          <div class="col-md-6">

          <div class="form-group">
              <label>Answer*</label>               
              <textarea class="form-control" name="answee[]" placeholder="Enter answer"></textarea>    
          </div>
          </div>
  </div>
           
      <div class="form-group crossgr">
          <a class="delete_row btn btn-danger pull-right onclick='delete_row($(this))">
              <i class="fa fa-remove"></i>
          </a>
      </div>
     </div>`;
             
     $(".consolidationsec4").append(newconsolidationsec4);
    });
    
      $('.consolidationsec4').on('click', '.crossgr', function() {
         $(this).parent('.createdrows').remove();
     });
    });







    