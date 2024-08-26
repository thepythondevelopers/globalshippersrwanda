$(document).ready(function(){
    $('.cart-btn').click(function(){
        $('.shipping-order').toggleClass('shipping-show');
    });
    $('.user-profile').click(function(){
        $('.profile-items').toggleClass('profile-show');
    });
    $('.storean').click(function(){
        $('.storean1').show();
        $('.storean').hide();
    });
    $('.storean1').click(function(){
        $('.storean').show();
        $('.storean1').hide();
    });
});

// Shopnship Create Order Form Start
//  Activate Next Step

$(document).ready(function() {
    
    var navListItems = $('ul.progtrckr li a'),
        allWells = $('.setup-content');

    allWells.hide();

    navListItems.click(function(e)
    {
        e.preventDefault();
        var $target = $($(this).attr('href')),
            $item = $(this).closest('li');
        
        if (!$item.hasClass('progtrckr-todo')) {
            $item.addClass('progtrckr-done');
            allWells.hide();
            $target.show();
            $('.step2show').hide();
            $('.existingaddress').hide();
        }
    });
    
    $('ul.progtrckr li.progtrckr-done a').trigger('click');
    
    // DEMO ONLY //
    $('#activate-step-2').on('click', function(e) {
        $('ul.progtrckr li:eq()').addClass('greenish');
        $('ul.progtrckr li:eq(1)').removeClass('progtrckr-todo');
        $('ul.progtrckr li a[href="#step-2"]').trigger('click');
        $(this).remove();
        $('.createdaddrs').hide();
    });
    $('#activate-step-3').on('click', function(e) {
        $('ul.progtrckr li:eq(1)').addClass('greenish');
        $('ul.progtrckr li:eq(2)').removeClass('progtrckr-todo');
        $('ul.progtrckr li a[href="#step-3"]').trigger('click');
        $(this).remove();
        $('.step2show').show();
        $('.createdaddrs').hide();
    });
    $('.existadd').on('click', function(e) {
        $('.butonsnew').hide();
        $('.existingaddress').show();
        // $('.submit2').hide();
    });
    $('.back2').on('click', function(e) {
        $('.butonsnew').show();
        $('.existingaddress').hide();
    });
    $('.createnewaddrs').on('click', function(){
        $('.butonsnew').hide();
        $('.createdaddrs').show();
    });
    $('.back3').on('click', function(e) {
        $('.butonsnew').show();
        $('.createdaddrs').hide();
    });
    
});

$(document).ready(function(){
    $('.add_row').click(function(){
        var newaddrow = `<div class="row createdrow" id="tab_logic">
        <div class="col-md-2 col-xs-12" id="addr0">
        <div class="form-group" >
            <label title="Please enter item name">Item Type*</label>
            <select class="form-control" id="item_type" required="" name="item_type[]">
                <option value="" >Please select item type</option>
                <option value="1" >Books</option>
                <option value="2" >Cereals</option>
                <option value="3" >Cosmetics</option>
                <option value="4" >Crockery</option>
                <option value="5" >Electronics</option>
                <option value="6" >Food items</option>
                <option value="7" >Handricraft</option>
                <option value="8" >Home Decor</option>
                <option value="9" >Others</option>
            </select>
            <span class="error">Please select item type.</span>
        </div>
    </div>
    <div class="col-md-2 col-xs-12 other_name"  id="addr1">
        <div class="form-group">
            <label title="Please enter item name">Item Name*</label>
            <input type="text" id="name" class="form-control" name="name[]" placeholder="Enter item name" maxlength="100" required="" >
            <span class="error">Please enter item name.</span>
        </div>
    </div>
    <div class="col-md-2 col-xs-12" id="addr2">
        <div class="form-group">
            <label>Package Size*</label>
            <input type="text" class="form-control" name="store[]" id="store" placeholder="LxWxH" maxlength="100">
            <span class="error">Please enter store.</span>
        </div>
    </div>
    <div class="col-md-2 col-xs-12" id="addr3">
        <div class="form-group">
            <label>Tracking Id*</label>
            <input type="text" class="form-control" name="order_id[]" id="order_id" placeholder="Tracking id" maxlength="50">
            <span class="error">Please enter order id.</span>
        </div>
    </div>
    <div class="col-md-2 col-xs-6" id="addr4" style="display:none">
        <div class="form-group">
            <label>Color</label>
            <input type="text" value="red" class="form-control" name="color[]" id="color" placeholder="Color" maxlength="20">
        </div>
    </div>
    <div class="col-md-1 col-xs-6" id="addr5">
        <div class="form-group">
            <label>Weight</label>
            <input type="text" class="form-control" name="size[]" id="size" placeholder="Kg" maxlength="10">
        </div>
    </div>
    <div class="col-md-1 col-xs-6" id="addr6">
        <div class="form-group">
            <label>Quantity*</label>
            <input type="text" value="1" step="1" min="1" name="quantity[] " id="quantity" onchange="changeVal()" max="1000" maxlength="3" class="form-control numvar qty">
            <span class="error">Please enter order quantity.</span>
        </div>
    
    </div>
    <div class="col-md-2 col-xs-6" id="addr7">
        <div class="form-group">
            <label>Price (USD)*</label>
            <input type="text" maxlength="8" class="form-control numvar price" name="price[]" id="itemprice" onchange="changeVal()" value="0">
            <span class="error">Please enter price.</span>
        </div>
    </div> 
    <input type="hidden" class="form-control numvar tprice" name="tprice[]" id="tprice" value="0" placeholder="Total Price" required="" readonly="">
    <div class="form-group crossgr">
        <a class="delete_row btn btn-danger pull-right onclick='delete_row($(this))">
            <i class="fa fa-remove"></i>
        </a>
    </div>
    
    </div>`;

    $(".add_form").append(newaddrow);
   
    });
    $('.add_form').on('click', '.crossgr', function() {
        $(this).parent('.createdrow').remove();
    });
});


// JS FOR ADDING COUNTRY CODE IN PHONE NUMBER START
$("#mobile_code").intlTelInput({
    initialCountry: "us",
    separateDialCode: true,
});
$("#mobile_code1").intlTelInput({
    initialCountry: "us",
    separateDialCode: true,
});
$("#mobile_code2").intlTelInput({
    initialCountry: "us",
    separateDialCode: true,
});
// JS FOR ADDING COUNTRY CODE IN PHONE NUMBER START
// Shopnship Create Order Form End

// INTERNATIONAL CREATE ORDER JS START 
$(".weightin").val(0.5);
$("#plusweight").click(function () {
    var wt = JSON.parse($(".weightin").val());
    if (wt === 100) {
        $(".weightin").val(100);
    }
    else {
        $(".weightin").val(wt + 0.5)
    }
})
$("#minusweight").click(function () {
    var wt = JSON.parse($(".weightin").val());
    if (wt === 0.5) {
        $(".weightin").val(0.5);
    }
    else {
        $(".weightin").val(wt - 0.5)
    }
})
$(".heightin").val(1);
$("#plusheight").click(function () {
    var wt = JSON.parse($(".heightin").val());
    if (wt === 100) {
        $(".heightin").val(100);
    }
    else {
        $(".heightin").val(wt + 0.5)
    }
})

$("#minusheight").click(function () {
    var wt = JSON.parse($(".heightin").val());
    if (wt === 0.5) {
        $(".heightin").val(0.5);
    }
    else {
        $(".heightin").val(wt - 0.5)
    }
})
$(".widthin").val(1);
$("#pluswidth").click(function () {
    var wt = JSON.parse($(".widthin").val());
    if (wt === 100) {
        $(".widthin").val(100);
    }
    else {
        $(".widthin").val(wt + 0.5)
    }
})
$("#minuswidth").click(function () {
    var wt = JSON.parse($(".widthin").val());
    if (wt === 0.5) {
        $(".widthin").val(0.5);
    }
    else {
        $(".widthin").val(wt - 0.5)
    }
})
$(".depthin").val(1);

$("#plusdepth").click(function () {
    var wt = JSON.parse($(".depthin").val());
    if (wt === 100) {
        $(".depthin").val(100);
    }
    else {
        $(".depthin").val(wt + 0.5)
    }
})

$("#minusdepth").click(function () {
    var wt = JSON.parse($(".depthin").val());
    if (wt === 0.5) {
        $(".depthin").val(0.5);
    }
    else {
        $(".depthin").val(wt - 0.5)
    }
})

// CREATE ITEM JS START 
$(document).ready(function(){
    $('.addmorebtn').click(function(){
        // alert("hello");
        var newaddrow = `<div class="row alreadycreate">
        <div class="col-md-4 col-sm-6 col-xs-6">
            <label>Item Type*:</label>
            <select class="form-control" id="item_type" required="" name="item_type[]">
                <option value="" >Please select item type</option>
                <option value="1">Books</option>
                <option value="2">Cereals</option>
                <option value="3">Cosmetics</option>
                <option value="4">Crockery</option>
                <option value="5">Electronics</option>
                <option value="6">Food items</option>
                <option value="7">Handicraft</option>
                <option value="8">Others</option>
            </select>
            <span class="error error_order_type">Please Select Item Type</span>
        </div>
        <div class="col-md-2 col-sm-6 col-xs-6">
            <div class="form-group">
                <label title="Please enter item name">Item Name*</label>
                <input type="text" class="form-control" id="package_name"name="package_name[]" placeholder="Enter item name" maxlength="100" required="">
            </div>
        </div>
        <div class="col-md-2 col-sm-6 col-xs-6">
            <label>Quantity*:</label>
            <input type="number" name="quantity[]" min="1" class="form-control package_quantity" maxlength="4" max="999" placeholder="Quantity" required=""  oninput='calTotal()'>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6">
            <label>Price (Per Item in INR)*:</label>
            <input type="number" name="package_price[]" min="1" class="form-control package_price" placeholder="Price" maxlength="7" step="0.001" max="99999" required=""  oninput='calTotal()'>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6">
            <label>Total Price*:</label>
            <input type="number" name="package_total_price[]" min="1" class="form-control totalprice" placeholder="Total Price" required="" readonly="">
        </div>
        <div class="form-group crossgr">
            <a class="delete_row btn btn-danger pull-right onclick='delete_row($(this))">
                <i class="fa fa-remove"></i>
            </a>
        </div>
    </div>`;

    $(".addItem").append(newaddrow);
   
    });
    $('.addItem').on('click', '.crossgr', function() {
        $(this).parent('.alreadycreate').remove();
    });
});
// CREATE ITEM JS END 

// INTERNATIONAL CREATE ORDER JS END 

// ASSISTED CREATE ORDER JS START 
$(document).ready(function(){
    $('.addmorebtn1').click(function(){
        // console.log("hello");
        var newaddrow1 = `<div class="row newrow">
        <div class="col-md-6 col-xs-12">
          <div class="form-group">
            <label>Item URL* / Local Store Name*</label>
            <textarea
              id="itemurl"
              class="form-control"
              name="store[]"
              placeholder="Enter Item URL  / Local Store Name*"
              required=""
              maxlength="2000"
            ></textarea>
            <span class="error">Please enter item url or local store name.</span>
          </div>
        </div>
      
        <div class="col-md-3 col-xs-12">
          <div class="form-group">
            <label>Item Type*</label>
            <select
              class="form-control search_item select2-hidden-accessible"
              id="item_type"
              required=""
              name="item_type[]"
              data-select2-id="select2-data-itemname"
              tabindex="-1"
              aria-hidden="true"
            >
              <option value="" data-select2-id="select2-data-2-nizz">
                Please select item type
              </option>
              <option value="1">Books</option>
              <option value="2">Cereals</option>
              <option value="3">Cosmetics</option>
              <option value="4">Crockery</option>
              <option value="5">Electronics</option>
              <option value="6">Food items</option>
              <option value="7">Handricraft</option>
              <option value="8">Home Decor</option>
              <option value="9">Imitation Jewellery</option>
              <option value="10">Incense sticks</option>
              <option value="11">Jewellery</option>
              <option value="12">Kids Clothings</option>
              <option value="13">Kids Toys</option>
              <option value="14">Liquid</option>
              <option value="15">Liquid Medicine</option>
              <option value="16">Others</option>
            </select>
            <span class="error">Please Select Item Type</span>
          </div>
        </div>
        <div class="col-md-3 col-xs-6">
          <div class="form-group">
            <label title="Please enter item name">Item Name*</label>
            <input
              type="text"
              class="form-control"
              name="package_name[]"
              placeholder="Enter item name"
              maxlength="100"
              required=""
              id="name"
            />
          </div>
          <span class="error">Please Select Item name</span>
        </div>
      
          <div class="col-md-3 col-xs-6">
            <div class="form-group">
              <label>Size</label>
              <input
                type="text"
                id="itemsize"
                class="form-control"
                name="size[]"
                placeholder="Enter Size"
                maxlength="50"
              />
              <span class="error">Please enter size</span>
            </div>
          </div>
          <div class="col-md-3 col-xs-6">
            <div class="form-group">
              <label>Color</label>
              <input
                type="text"
                id="itemcolor"
                class="form-control"
                name="color[]"
                placeholder="Enter Color"
                maxlength="50"
              />
              <span class="error">Please enter color</span>
            </div>
          </div>
          <div class="col-md-3 col-xs-6">
            <div class="form-group">
              <label>Quantity*</label>
              <input
                type="text"
                id="itemqty"
                class="form-control numvar qty"
                name="quantity[]"
                onchange="changeVal(this)"
                placeholder="Enter Quantity"
                required=""
                maxlength="3"
              />
              <span class="error">Please enter quantity</span>
            </div>
          </div>
          <div class="col-md-3 col-xs-6">
            <div class="form-group">
              <label>Single Item Price (USD)*</label>
              <input
                type="text"
                id="itemprice"
                class="form-control numvar price"
                name="price[]"
                onchange="changeVal(this)"
                placeholder="Enter Item Price"
                required=""
                maxlength="5"
              />
              <span class="error">Please enter price</span>
            </div>
          </div>
          <div class="col-md-3 col-xs-6">
            <div class="form-group">
              <label>Total Price*</label>
              <input
                type="text"
                class="form-control numvar totalprice"
                name="totalprice[]"
                id="totalprice"
                value="0"
                placeholder="Total Price"
                required=""
                readonly=""
              />
            </div>
          </div>
      
          <div class="form-group crossgr">
            <a class="delete_row btn btn-danger pull-right">
              <i class="fa fa-remove"></i>
            </a>
          </div>
        
      </div>`;

    $(".add_form1").append(newaddrow1);
   
    });
    $('.add_form1').on('click', '.crossgr', function() {
        $(this).parent('.newrow').remove();
    });
   
});
// ASSISTED CREATE ORDER JS END 

// Expand dashboard JQUERY START
// $(document).ready(function(){
//     $('.mob-bar').click( function() {
//         var toggleWidth = $(".sidebar").width() == 0 ? "250px" : "0px  ";
//         $('.sidebar').animate({ width: toggleWidth });
//     });
// });
$(document).ready ( function () {
    $(".mob-bar").click(function () {
    //    alert("test");
       $('.sidebar').toggleClass('hide_sidebar', 20000);
       $('.right-bar').toggleClass('expand_rightbar', 20000);
    });
});




// Expand dashboard JQUERY END