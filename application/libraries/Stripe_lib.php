<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 
 
class Stripe_lib{ 
    var $CI; 
    var $api_error; 
     
    function __construct(){ 
        $this->api_error = ''; 
        $this->CI =& get_instance(); 
        $this->CI->load->config('stripe'); 
         
        // Include the Stripe PHP bindings library 
        require APPPATH .'third_party/stripe-php/init.php'; 
         
        // Set API key 
        \Stripe\Stripe::setApiKey($this->CI->config->item('stripe_secret')); 
    } 
 
    function addCustomer($email, $token){ 
        try { 
            // Add customer to stripe 
            $customer = \Stripe\Customer::create(array( 
                'email' => $email, 
                'source'  => $token 
            )); 

            return $customer; 
        }catch(Exception $e) { 
            $this->api_error = $e->getMessage(); 
            return false; 
        } 
    } 
 
    function retrieveCustomer($customerid){
        $customerid = \Stripe\Customer::retrieve($customerid);
        $customer_ID = $customerid->id;
            return $customerid;
    }
   function retrievePlan($planid){
    $stripeplan = \Stripe\Plan::retrieve($planid);
        return $stripeplan;
   }
   
      
    
     
    // function createCharge($customerId, $itemName, $itemPrice){ 
    //     // Convert price to cents 
    //     $itemPriceCents = ($itemPrice*100); 
    //     $currency = $this->CI->config->item('stripe_currency'); 
         
    //     try { 
    //         // Charge a credit or a debit card 
    //         $charge = \Stripe\Charge::create(array( 
    //             'customer' => $customerId, 
    //             'amount'   => $itemPriceCents, 
    //             'currency' => $currency, 
    //             'description' => $itemName 
    //         )); 

    //         // Retrieve charge details 
    //         $chargeJson = $charge->jsonSerialize(); 
    //         return $chargeJson; 
    //     }catch(Exception $e) { 
    //         $this->api_error = $e->getMessage(); 
    //         return false; 
    //     } 
    // } 
}
?>