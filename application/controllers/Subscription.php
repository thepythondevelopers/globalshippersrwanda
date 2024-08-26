<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
 
class Subscription extends CI_Controller { 
     
    function __construct() { 
        parent::__construct(); 
         
        // Load Stripe library 
        $this->load->library('stripe_lib'); 
         
        // Load product model 
        $this->load->model('User'); 
         
        // Get user ID from current SESSION 
       $UserID = $this->session->userdata('id');
    //    echo "<pre>";
    //    print_r($UserID);
    //    exit;
       $UserID = isset($_SESSION['loggedInUserID'])?$_SESSION['loggedInUserID']:1; 
    } 
     
    public function index(){ 
        $data = array(); 
         
        // If payment form is submitted with token 
        if($this->input->post('stripeToken')){ 
            // Retrieve stripe token and user info from the posted form data 
            $postData = $this->input->post(); 
             
            // Make payment 
            $paymentID = $this->payment($postData); 
             
            // If payment successful 
            if($paymentID){ 
                redirect('payment_status/'.$paymentID); 
            }else{ 
                $apiError = !empty($this->stripe_lib->api_error)?' ('.$this->stripe_lib->api_error.')':''; 
                $data['error_msg'] = 'Transaction has been failed!'.$apiError; 
            } 
        } 
         
        // Get plans from the database 
        $data['plans'] = $this->User->getPlans(); 
        // echo "<pre>";
        // print_r($data);
        // exit;
         
        // Pass plans data to the list view 
        $this->load->view('subscription/index', $data); 
    } 
     
    function payment($postData){ 
         
        // If post data is not empty 
        if(!empty($postData)){ 
            // Retrieve stripe token and user info from the submitted form data 
            $token  = $postData['stripeToken']; 
            $name = $postData['name']; 
            $email = $postData['email']; 
             
            // Plan info 
            $planID = $_POST['subscr_plan']; 
            $planInfo = $this->User->getPlans($planID); 
            $planName = $planInfo['name']; 
            $planPrice = $planInfo['price']; 
            $planInterval = $planInfo['interval']; 
             
            // Add customer to stripe 
            $customer = $this->stripe_lib->addCustomer($name, $email, $token); 
             
            if($customer){ 
                // Create a plan 
                $plan = $this->stripe_lib->createPlan($planName, $planPrice, $planInterval); 
                 
                if($plan){ 
                    // Creates a new subscription 
                    $subscription = $this->stripe_lib->createSubscription($customer->id, $plan->id); 
                     
                    if($subscription){ 
                        // Check whether the subscription activation is successful 
                        if($subscription['status'] == 'active'){ 
                            // Subscription info 
                            $subscrID = $subscription['id']; 
                            $custID = $subscription['customer']; 
                            $planID = $subscription['plan']['id']; 
                            $planAmount = ($subscription['plan']['amount']/100); 
                            $planCurrency = $subscription['plan']['currency']; 
                            $planInterval = $subscription['plan']['interval']; 
                            $planIntervalCount = $subscription['plan']['interval_count']; 
                            $created = date("Y-m-d H:i:s", $subscription['created']); 
                            $current_period_start = date("Y-m-d H:i:s", $subscription['current_period_start']); 
                            $current_period_end = date("Y-m-d H:i:s", $subscription['current_period_end']); 
                            $status = $subscription['status']; 
                             
                            // Insert tansaction data into the database 
                            $subscripData = array( 
                                'user_id' => $this->session->userdata('id'),
                                'plan_id' => $planInfo['id'], 
                                'stripe_subscription_id' => $subscrID, 
                                'stripe_customer_id' => $custID, 
                                'stripe_plan_id' => $planID, 
                                'plan_amount' => $planAmount, 
                                'plan_amount_currency' => $planCurrency, 
                                'plan_interval' => $planInterval, 
                                'plan_interval_count' => $planIntervalCount, 
                                'plan_period_start' => $current_period_start, 
                                'plan_period_end' => $current_period_end, 
                                'payer_email' => $email, 
                                'created_date' => $created, 
                                'status' => $status 
                            ); 
                            $subscription_id = $this->User->insertSubscription($subscripData); 
                             
                            // Update subscription id in the users table  
                            if($subscription_id && !empty($this->session->userdata('id'))){ 
                                $data = array('subscription_id' => $subscription_id); 
                                $update = $this->User->updateUser($data, $this->session->userdata('id')); 
                            } 
                             
                            return $subscription_id; 
                        } 
                    } 
                } 
            } 
        } 
        return false; 
    } 
     
    function payment_status($id){ 
        $data = array(); 
         
        // Get subscription data from the database 
        $subscription = $this->user->getSubscription($id); 
         
        // Pass subscription data to the view 
        $data['subscription'] = $subscription; 
        $this->load->view('subscription/payment-status', $data); 
    } 
}