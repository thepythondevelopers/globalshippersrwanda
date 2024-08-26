<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>

            .cardDetails {
                display: flex;
                align-items: flex-start;
                justify-content: flex-start;
            }
            .leftCard, .rightCard {
        width: 50%;
    }
    .fiList-icon {
        display: block;
        text-align: center;
        margin: 2rem 0;
    }
    .fiList-icon a, .test_navItem-balance, .fiDetails-body a {
        text-decoration: none;
    }
    .fiList-icon a.test_addNewCard .test_addCardIcon {
    border-radius: 50%;
    background: #f5f7f0;
    width: 4rem;
    height: 4rem;
    padding: 0.6875rem;
}
    .fiList-icon a.test_addNewCard .test_addCardIcon, .fiList-icon a.test_addNewCard span {
        display: block;
        margin: 0 auto;
    }
    .fiList-icon a.test_addNewCard span.linkFi-linkCardText {
        font-size: 14px;
        color: #0c0c0d;
        padding-top: 10.5px;
    }
    .leftCard .js_fiList {
    list-style: none;
    padding: 12px 8px 12px 8px;
    border: 1px solid #0c0c0d;
    border-radius: 10px;
    max-width: 336px;
    margin: 0 auto;
}
.fiListItem-identifierSelected {font-size: 18px;text-decoration: none;color: #1072eb;font-weight: 600;}
.fiListItem-row {
    display: flex;
    align-items: flex-start;
}
.fiListItem-row .fiListItem-col span {
    display: block;
}
.fiListItem-typeIcon img.test_addCardIcon {
    max-width: 48px;
    max-height: 31px;
}
.fiListItem-col {
    padding-left: 15px;
}
.fiListItem-col .fiListItem-header, .fiListItem-identifier span {
    padding-bottom: 8px;
}
.fiListItem-identifier span.ppvx_text--caption {
    /*background: #d1f1ea;*/
    width: fit-content;
    padding: 5px 10px;
    border-radius: 50px;
    text-transform: uppercase;
    font-size: 12px;
}
.rightCard a {
    color: #4a83cf;
    font-weight: 600;
    
}
.fiDetailsSectionExp {
    margin: 2rem 0;
}
.fiDetailsSectionExp p {
    font-weight: 700;
    margin: 0;
}
.fiDetailsSectionCard {
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.fiDetailsSection {
    text-align: center;
}
.fiChoice-info {
    font-size: 14px;
}
.ppvx_text--body, .fiChoice-info {
    margin-bottom: 5px;
}
.rightCard {
    margin-top: 2rem;
}
.panel-title {
        display: inline;
        font-weight: bold;
        }
        .display-table {
            display: table;
        }
        .display-tr {
            display: table-row;
        }
        .display-td {
            display: table-cell;
            vertical-align: middle;
            width: 100%;
        }
        .credit-card-box .form-control {
    font-size:15px;
}
.dashboard-header ul.navbar-nav li a {
    color: #2da298;
    font-weight: 500;
    font-size:17px;
}
    </style>
 <?php if($card==TRUE)
    {?>
        <div class="cardDetails">
        <div class="leftCard">
            <div class="fiList-icon">
                <a
                href="<?php echo base_url('card-details/'.$pay[0]->plan_id)?>"
                class="test_addNewCard"
                ><img
                    class="test_addCardIcon"
                    src="https://www.paypalobjects.com/paypal-ui/spots/svg/card-front.svg"
                    alt="Add Card"
                /><span
                    class="linkFi-linkCardText"
                    >Link a card</span
                ></a
                >
            </div>
            <ul class="js_fiList" tabindex="-1">
                <li class="fiList-item_testTreatment">
                    <a href="" class="test_navItem-balance">
                        <span class="fiListItem-row">
                            <span class="fiListItem-typeIcon">
                                <img class="test_addCardIcon" 
                                src="<?php echo base_url()?>assets/imgs/visa.png" alt="Add Card">
                            </span>
                            <span class="fiListItem-col">
                                <span class="fiListItem-header">
                                    <span class="fiListItem-identifierSelected"
                                    >Your Bank</span>
                                </span>
                                <span class="fiListItem-identifier">
                                    <span class="fiListItem-Detail"
                                    ><?php $num = $card->card_number; echo "Prepaid ••".substr($num,-4);?></span>
                                    <span class="ppvx_text--caption">Preferred</span>
                                </span>
                            </span>
                        </span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="rightCard">
         <div class="icici_bank_limited_hasIcon">
            <div class="cardImg">
                <img class="card-with-no" src="<?php echo base_url()?>assets/imgs/visa.png" alt="Add Card">
            </div>
         </div>
            <div class="fiDetails-body">
            <div>
            <div class="fiDetails-instrumentName">
               <?php $num = $card->card_number; echo "Your bank Prepaid ••".substr($num,-4);?> 
            </div>
            <div class="editNickName">
                <a href="#">Give it a nickname</a>
            </div>
            </div>
            <div class="fiDetailsSectionExp">
                <p class="bank-expiration-status">Expiration Date</p>
                <div class="card-expiration-date"><?php echo $card->cardexpire_month.'/'.$card->cardexpire_year;?></div>
            </div>

            <div class="fiDetailsSection">
                <div class="ppvx_text--body">
                    <div><span>Preferred when paying online</span></div>
                    <div class="setChangePreferred">
                        <a class=""> <span>change</span></a>
                    </div>
                </div>
                <div class="fiChoice-info">
                    <span>
                        We’ll use this when you shop or send payments for goods and services.
                    </span>
                    <div>
                        <a href="" class="ppvx_link">
                            <span class="linkFontSize-caption">More about payment preferences</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="fiDetailsSectionCard">
                <a href="<?php echo base_url('update-card/'.$pay[0]->plan_id)?>" class="test_updateBank">
                    <span>Update card</span>
                </a>
                <a href="<?php echo base_url('delete-card/'.$card->user_id)?>" class="test_removeBank" name="delete_card" value="<?php echo $pay[0]->plan_id;?>">
                    <span>Remove card</span>
                </a>
            </div>
           
            </div>
        </div>
    </div>
   
 <?php   }
 else{
    ?>
   <div class="container">
     <div class="row">
         <div class="col-md-6 col-md-offset-3 my-5">
             <div class="panel panel-default credit-card-box">
                 <div class="panel-heading display-table" >
                     <div class="row display-tr" >
                         <h3 class="panel-title display-td text-center" >Payment Details</h3>
                     </div>                    
                 </div>
                 <div class="panel-body">
     
                     <?php if($this->session->flashdata('success')){ ?>
                     <div class="alert alert-success text-center">
                             <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                             <p><?php echo $this->session->flashdata('success'); ?></p>
                         </div>
                     <?php } ?>
      
                     <form role="form" action="/payment" method="post" class="require-validation"
                                                      data-cc-on-file="false"
                                                     data-stripe-publishable-key="<?php echo $this->config->item('stripe_key') ?>"
                                                     id="payment-form">
                                                     <div class='form-row row'>
                             <div class='col-xs-12 form-group  required'>
                                 <label class='control-label'>Name</label> <input
                                     autocomplete='off' class='form-control user-name'
                                     type='text' name="name">
                             </div>
                         </div>

                         <div class='form-row row'>
                             <div class='col-xs-12 form-group  required'>
                                 <label class='control-label'>Email</label> <input
                                     autocomplete='off' class='form-control user-email'
                                     type='text' name="email">
                             </div>
                         </div>
                         <div class='form-row row'>
                             <div class='col-xs-12 form-group required'>
                                 <input type="hidden" name="currency" value="<?php echo $pay[0]->currency;?>">
                                 <input type="hidden" name="interval" value="<?php echo $pay[0]->interval;?>">
                                 <input type="hidden" name="price" value="<?php echo $pay[0]->plan_amount;?>">
                                 <input type="hidden" name="plan" value="<?php echo $pay[0]->stripePlanId ;?>">
                                 <input type="hidden" name="planid" value="<?php echo $pay[0]->plan_id ;?>">
                                 <label class='control-label'>Name on Card</label> <input
                                     class='form-control'  type='text' name="card_name">
                             </div>
                         </div>
                         <div class='form-row row'>
                             <div class='col-xs-12 form-group  required'>
                                 <label class='control-label'>Card Number</label> <input
                                     autocomplete='off' class='form-control card-number' size='16' maxlength="16"
                                     type='text' name="card_number">
                             </div>
                         </div>
       
                         <div class='form-row row'>
                             <div class='col-xs-12 col-md-4 form-group cvc required'>
                                 <label class='control-label'>CVC</label> <input autocomplete='off'
                                     class='form-control card-cvc' placeholder='ex. 311' size='3' maxlength="3"
                                     type='text' name="cvc_number">
                             </div>
                             <div class='col-xs-12 col-md-4 form-group expiration required'>
                                 <label class='control-label'>Expiration Month</label> <input
                                     class='form-control card-expiry-month' placeholder='MM' size='2' maxlength="2"
                                     type='text' name="ex_month">
                             </div>
                             <div class='col-xs-12 col-md-4 form-group expiration required'>
                                 <label class='control-label'>Expiration Year</label> <input
                                     class='form-control card-expiry-year' placeholder='YYYY' size='4' maxlength="4"
                                     type='text'name="ex_year">
                             </div>
                         </div>
       
                         <div class='form-row row'>
                             <div class='col-md-12 error form-group hide'>
                                 <div class='alert-danger alert'>Please correct the errors and try
                                     again.</div>
                             </div>
                         </div>
       
                         <div class="row">
                             <div class="col-xs-12">
                                 <button class="btn btn-primary btn-lg btn-block" type="submit">Pay Now(<?php 
                                 if($pay[0]->interval==1){
                                     echo "monthly";
                               
                                 }
                                 else{
                                     echo "Yearly" ;
                                 }?>)</button>
                             </div>
                         </div>
                              
                     </form>
                 </div>
             </div>        
         </div>
     </div>     
 </div>


 <!-- <div class="cardDetails">
        <div class="leftCard">
            <div class="fiList-icon">
                <a
                href="<?php echo base_url('card-details/'.$pay[0]->plan_id)?>"
                class="test_addNewCard"
                ><img
                    class="test_addCardIcon"
                    src="https://www.paypalobjects.com/paypal-ui/spots/svg/card-front.svg"
                    alt="Add Card"
                /><span
                    class="linkFi-linkCardText"
                    >Link a card</span
                ></a
                >
            </div>
            <ul class="js_fiList" tabindex="-1">
                <li class="fiList-item_testTreatment">
                    <a href="" class="test_navItem-balance">
                        <span class="fiListItem-row">
                            <span class="fiListItem-typeIcon">
                                <img class="test_addCardIcon" 
                                src="<?php echo base_url()?>assets/imgs/visa.png" alt="Add Card">
                            </span>
                            <span class="fiListItem-col">
                                <span class="fiListItem-header">
                                    <span class="fiListItem-identifierSelected"
                                    >Your Bank</span>
                                </span>
                                <span class="fiListItem-identifier">
                                    <span class="fiListItem-Detail"
                                    ><?php $num = $card->card_number; echo "Prepaid ••".substr($num,-4);?></span>
                                    <span class="ppvx_text--caption">Preferred</span>
                                </span>
                            </span>
                        </span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="rightCard">
         <div class="icici_bank_limited_hasIcon">
            <div class="cardImg">
                <img class="card-with-no" src="<?php echo base_url()?>assets/imgs/visa.png" alt="Add Card">
            </div>
         </div>
            <div class="fiDetails-body">
            <div>
            <div class="fiDetails-instrumentName">
               <?php $num = $card->card_number; echo "Your bank Prepaid ••".substr($num,-4);?> 
            </div>
            <div class="editNickName">
                <a href="#">Give it a nickname</a>
            </div>
            </div>
            <div class="fiDetailsSectionExp">
                <p class="bank-expiration-status">Expiration Date</p>
                <div class="card-expiration-date"><?php echo $card->cardexpire_month.'/'.$card->cardexpire_year;?></div>
            </div>

            <div class="fiDetailsSection">
                <div class="ppvx_text--body">
                    <div><span>Preferred when paying online</span></div>
                    <div class="setChangePreferred">
                        <a class=""> <span>change</span></a>
                    </div>
                </div>
                <div class="fiChoice-info">
                    <span>
                        We’ll use this when you shop or send payments for goods and services.
                    </span>
                    <div>
                        <a href="" class="ppvx_link">
                            <span class="linkFontSize-caption">More about payment preferences</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="fiDetailsSectionCard">
                <a href="javascript:void(0)" class="test_updateBank"  data-toggle="modal" data-target="#exampleModal">
                    <span>Update card</span>
                </a>
                <a href="<?php echo base_url('delete-card/'.$card->user_id)?>" class="test_removeBank">
                    <span>Remove card</span>
                </a>
            </div>
           
            </div>
        </div>
    </div> -->
    
 <?php }
    ?>


<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<!-- <script src="https://js.stripe.com/v3/"></script> -->
     
<script type="text/javascript">
$(function() {
    var $form         = $(".require-validation");
  $('form.require-validation').bind('submit', function(e) {
    var $form         = $(".require-validation"),
        inputSelector = ['input[type=email]', 'input[type=password]',
                         'input[type=text]', 'input[type=file]',
                         'textarea'].join(', '),
        $inputs       = $form.find('.required').find(inputSelector),
        $errorMessage = $form.find('div.error'),
        valid         = true;
        $errorMessage.addClass('hide');
 
        $('.has-error').removeClass('has-error');
    $inputs.each(function(i, el) {
      var $input = $(el);
      if ($input.val() === '') {
        $input.parent().addClass('has-error');
        $errorMessage.removeClass('hide');
        e.preventDefault();
      }
    });
     
    if (!$form.data('cc-on-file')) {
      e.preventDefault();
      Stripe.setPublishableKey($form.data('stripe-publishable-key'));
      Stripe.createToken({
        number: $('.card-number').val(),
        cvc: $('.card-cvc').val(),
        exp_month: $('.card-expiry-month').val(),
        exp_year: $('.card-expiry-year').val()
      }, stripeResponseHandler);
    }
    
  });
      
  function stripeResponseHandler(status, response) {
        if (response.error) {
            $('.error')
                .removeClass('hide')
                .find('.alert')
                .text(response.error.message);
        } else {
            var token = response['id'];
            $form.find('input[type=text]').empty();
            $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
            $form.get(0).submit();
        }
    }
     
});

</script>
<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script> -->
<!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>  -->
 <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script> -->