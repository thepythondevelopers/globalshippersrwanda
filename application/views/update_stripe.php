<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3 my-5">
            <div class="panel panel-default credit-card-box">
                <div class="panel-heading display-table">
                    <div class="row display-tr">
                        <h3 class="panel-title display-td text-center"> Update Payment Details</h3>
                    </div>
                </div>
                <div class="panel-body">

                    <?php if($this->session->flashdata('success')){ ?>
                    <div class="alert alert-success text-center">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                        <p>
                            <?php echo $this->session->flashdata('success'); ?>
                        </p>
                    </div>
                    <?php } ?>

                    <form role="form" action="<?php echo base_url('update-payment')?>" method="post" class="require-validation" data-cc-on-file="false"
                        data-stripe-publishable-key="<?php echo $this->config->item('stripe_key') ?>" id="payment-form">
                        <div class='form-row row'>
                            <div class='col-xs-12 form-group  required'>
                                <label class='control-label'>Name</label> <input autocomplete='off'
                                    class='form-control user-name' type='text' name="name" value="<?php //echo $pay[0]->user_name;?>">
                            </div>
                        </div>

                        <div class='form-row row'>
                            <div class='col-xs-12 form-group  required'>
                                <label class='control-label'>Email</label> <input autocomplete='off'
                                    class='form-control user-email' type='text' name="email" value="<?php //echo $pay[0]->user_email;?>">
                            </div>
                        </div>
                        <div class='form-row row'>
                            <div class='col-xs-12 form-group required'>
                                <input type="hidden" name="currency" value="<?php echo $pay[0]->currency;?>">
                                <input type="hidden" name="interval" value="<?php echo $pay[0]->interval;?>">
                                <input type="hidden" name="price" value="<?php echo $pay[0]->plan_amount;?>">
                                <label class='control-label'>Name on Card</label> <input class='form-control'
                                    type='text' name="card_name" value="<?php echo $card->holder_name;?>">
                            </div>
                        </div>
                        <div class='form-row row'>
                            <div class='col-xs-12 form-group  required'>
                                <label class='control-label'>Card Number</label> <input autocomplete='off'
                                    class='form-control card-number' size='16' maxlength="16" type='text'
                                    name="card_number" value="<?php echo $card->card_number;?>">
                            </div>
                        </div>

                        <div class='form-row row'>
                            <div class='col-xs-12 col-md-4 form-group cvc required'>
                                <label class='control-label'>CVC</label> <input autocomplete='off'
                                    class='form-control card-cvc' placeholder='ex. 311' size='3' maxlength="3"
                                    type='text' name="cvc_number" value="<?php echo $card->cvc_number;?>">
                            </div>
                            <div class='col-xs-12 col-md-4 form-group expiration required'>
                                <label class='control-label'>Expiration Month</label> <input
                                    class='form-control card-expiry-month' placeholder='MM' size='2' maxlength="2"
                                    type='text' name="ex_month"  value="<?php echo $card->cardexpire_month;?>">
                            </div>
                            <div class='col-xs-12 col-md-4 form-group expiration required'>
                                <label class='control-label'>Expiration Year</label> <input
                                    class='form-control card-expiry-year' placeholder='YYYY' size='4' maxlength="4"
                                    type='text' name="ex_year" value="<?php echo $card->cardexpire_year;?>">
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
                                <button class="btn btn-primary btn-lg btn-block" type="submit" name= "submit" value="<?php if($pay[0]->interval==1){
                                echo "1";
                                }
                                else{
                                    echo "2";
                                }
                                ?>">Submit
                                    <?php 
                                //  if($pay[0]->interval==1){
                                //      echo "monthly";
                               
                                //  }
                                //  else{
                                //      echo "Yearly" ;
                                //  }
                                 ?>
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<!-- <script src="https://js.stripe.com/v3/"></script> -->
     
<script type="text/javascript">
// $(function() {
//     var $form         = $(".require-validation");
//   $('form.require-validation').bind('submit', function(e) {
//     var $form         = $(".require-validation"),
//         inputSelector = ['input[type=email]', 'input[type=password]',
//                          'input[type=text]', 'input[type=file]',
//                          'textarea'].join(', '),
//         $inputs       = $form.find('.required').find(inputSelector),
//         $errorMessage = $form.find('div.error'),
//         valid         = true;
//         $errorMessage.addClass('hide');
 
//         $('.has-error').removeClass('has-error');
//     $inputs.each(function(i, el) {
//       var $input = $(el);
//       if ($input.val() === '') {
//         $input.parent().addClass('has-error');
//         $errorMessage.removeClass('hide');
//         e.preventDefault();
//       }
//     });
     
//     if (!$form.data('cc-on-file')) {
//       e.preventDefault();
//       Stripe.setPublishableKey($form.data('stripe-publishable-key'));
//       Stripe.createToken({
//         number: $('.card-number').val(),
//         cvc: $('.card-cvc').val(),
//         exp_month: $('.card-expiry-month').val(),
//         exp_year: $('.card-expiry-year').val()
//       }, stripeResponseHandler);
//     }
    
//   });
      
//   function stripeResponseHandler(status, response) {
//         if (response.error) {
//             $('.error')
//                 .removeClass('hide')
//                 .find('.alert')
//                 .text(response.error.message);
//         } else {
//             var token = response['id'];
//             $form.find('input[type=text]').empty();
//             $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
//             $form.get(0).submit();
//         }
//     }
     
// });

</script>