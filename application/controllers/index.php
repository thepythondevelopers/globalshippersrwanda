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
                            <input type ="date" placeholder="expiry date" name="exp_date">
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