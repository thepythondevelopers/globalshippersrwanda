<div class="panel">
    <form action="" method="POST" id="paymentFrm">
        <div class="panel-heading">
            <h3 class="panel-title">Plan Subscription with Stripe</h3>
            <!-- Plan Info -->
            <p>
                <b>Select Plan:</b>
                <select name="subscr_plan" id="subscr_plan">
                    <?php foreach($plans as $plan){ ?>
                    <option value="<?php echo $plan['id']; ?>"><?php echo $plan['plan_name'].' [$'.$plan['price'].'/'.$plan['interval'].']'; ?></option>
                    <?php } ?>
                </select>
            </p>
        </div>
        <div class="panel-body">
            <!-- Display errors returned by createToken -->
            <div id="paymentResponse"></div>
			
            <!-- Payment form -->
            <div class="form-group">
                <label>NAME</label>
                <input type="text" name="name" id="name" class="field" placeholder="Enter name" required="" autofocus="">
            </div>
            <div class="form-group">
                <label>EMAIL</label>
                <input type="email" name="email" id="email" class="field" placeholder="Enter email" required="">
            </div>
            <div class="form-group">
                
                <div id="card_number" class="field">
                <label>CARD NUMBER</label>
                    <input type= "text" placeholder = "card number" name="card_number">
                </div>
            </div>
            <div class="row">
                <div class="left">
                    <div class="form-group">
                       
                        <div id="card_expiry" class="field">
                        <label>EXPIRY DATE</label>
                            <input type ="text" placeholder="expiry date" name="exp_date">
                        </div>
                    </div>
                </div>
                <div class="right">
                    <div class="form-group">
                        <div id="card_cvc" class="field">
                        <label>CVC CODE</label>

                            <input type ="text" size="4" placeholder="cvc" name="cvc">
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-success" id="payBtn">Submit Payment</button>
        </div>
    </form>
</div>

<script src="https://js.stripe.com/v3/"></script>

<script>
// Create an instance of the Stripe object
// Set your publishable API key
var stripe = Stripe('<?php echo $this->config->item('stripe_publishable_key'); ?>');

// Create an instance of elements
var elements = stripe.elements();

var style = {
    base: {
        fontWeight: 400,
        fontFamily: 'Roboto, Open Sans, Segoe UI, sans-serif',
        fontSize: '16px',
        lineHeight: '1.4',
        color: '#555',
        backgroundColor: '#fff',
        '::placeholder': {
            color: '#888',
        },
    },
    invalid: {
        color: '#eb1c26',
    }
};

var cardElement = elements.create('cardNumber', {
    style: style
});
cardElement.mount('#card_number');

var exp = elements.create('cardExpiry', {
    'style': style
});
exp.mount('#card_expiry');

var cvc = elements.create('cardCvc', {
    'style': style
});
cvc.mount('#card_cvc');

// Validate input of the card elements
var resultContainer = document.getElementById('paymentResponse');
cardElement.addEventListener('change', function(event) {
    if (event.error) {
        resultContainer.innerHTML = '<p>'+event.error.message+'</p>';
    } else {
        resultContainer.innerHTML = '';
    }
});

// Get payment form element
var form = document.getElementById('paymentFrm');

// Create a token when the form is submitted.
form.addEventListener('submit', function(e) {
    e.preventDefault();
    createToken();
});

// Create single-use token to charge the user
function createToken() {
    stripe.createToken(cardElement).then(function(result) {
        if (result.error) {
            // Inform the user if there was an error
            resultContainer.innerHTML = '<p>'+result.error.message+'</p>';
        } else {
            // Send the token to your server
            stripeTokenHandler(result.token);
        }
    });
}

// Callback to handle the response from stripe
function stripeTokenHandler(token) {
    // Insert the token ID into the form so it gets submitted to the server
    var hiddenInput = document.createElement('input');
    hiddenInput.setAttribute('type', 'hidden');
    hiddenInput.setAttribute('name', 'stripeToken');
    hiddenInput.setAttribute('value', token.id);
    form.appendChild(hiddenInput);
	
    // Submit the form
    form.submit();
}
</script>
2. subscription/payment-status.php
The subscription details and payment status are shown on this page.

<?php if(!empty($subscription)){ ?>
    <?php if($subscription['status'] == 'active'){ ?>
    <h1 class="success">Your Subscription Payment has been Successful!</h1>
    <?php }else{ ?>
    <h1 class="error">Subscription activation failed!</h1>
    <?php } ?>

    <h4>Payment Information</h4>
    <p><b>Reference Number:</b> <?php echo $subscription['id']; ?></p>
    <p><b>Transaction ID:</b> <?php echo $subscription['stripe_subscription_id']; ?></p>
    <p><b>Amount:</b> <?php echo $subscription['plan_amount'].' '.$subscription['plan_amount_currency']; ?></p>
    
    <h4>Subscription Information</h4>
    <p><b>Plan Name:</b> <?php echo $subscription['plan_name']; ?></p>
    <p><b>Amount:</b> <?php echo $subscription['plan_price'].' '.$subscription['plan_price_currency']; ?></p>
    <p><b>Plan Interval:</b> <?php echo $subscription['plan_interval']; ?></p>
    <p><b>Period Start:</b> <?php echo $subscription['plan_period_start']; ?></p>
    <p><b>Period End:</b> <?php echo $subscription['plan_period_end']; ?></p>
    <p><b>Status:</b> <?php echo $subscription['status']; ?></p>
<?php }else{ ?>
    <h1 class="error">The transaction has been failed!</h1>
<?php } ?>