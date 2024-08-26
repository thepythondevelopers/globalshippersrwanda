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
}
?>