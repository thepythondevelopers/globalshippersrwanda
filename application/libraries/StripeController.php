<?php
// defined('BASEPATH') OR exit('No direct script access allowed');
   
// class StripeController extends CI_Controller {
    
//     /**
//      * Get All Data from this method.
//      *
//      * @return Response
//     */
//     public function __construct() {
//        parent::__construct();
//        $this->load->library("session");
//        $this->load->helper('url');
//        $this->load->model('Payment_model');
//        $this->load->model('Gsr');
//        $this->load->library('session');
//     }
    
//     /**
//      * Get All Data from this method.
//      *
//      * @return Response
//     */
//     public function index()
//     {   if($this->session->userdata('id')){
//         $user_id       = $this->session->userdata('id');
//         $plan_id = $this->uri->segment(2);
//         $email['email'] = $this->Gsr->users_details();
//         $data['pay'] = $this->Payment_model->display_plan($plan_id);
//         $data['card']  = $this->Payment_model->card_details($user_id);
//         $this->load->view('header_without_sidebar',$email);
//         $this->load->view('my_stripe',$data);
//         $this->load->view('footer');
//     }
//     else{
//         redirect('login');
//     } 
//     }
//       public function payment_success() {
//         $this->load->view('payment_success');
//       }
//     /**
//      * Get All Data from this method. 
//      *
//      * @return Response
//     */
//     public function stripePost()
//     {
//         if($this->session->userdata('id')){
//         require_once('application/third_party/stripe-php/init.php');
    
//           //  \Stripe\Stripe::setApiKey($this->config->item('stripe_secret'));
       
        
//        $stripe = new \Stripe\StripeClient($this->config->item('stripe_secret'));
//         $token  = $this->input->get('stripeToken',TRUE);
//         // echo "<pre>";
//         // print_r($token);
//         // exit;
//        // $email  = $this->input->post('stripeEmail',TRUE);
       
//         // $plan = $this->input->post('plan');
//         // $interval  = $this->input->post('interval');
//          $price  = $this->input->post('price');
//          $currency  = $this->input->post('currency');
//         $card_number = $this->input->post('card_number');
//         $ex_month = $this->input->post('ex_month');
//         $ex_year = $this->input->post('ex_year');
//         $cvc_number = $this->input->post('cvc_number');
//         // $time = time();
//         // $plan = \Stripe\Plan::retrieve(array( 
//         //     "product" => [
//         //         "name" => 'Starter PACKAGE',
//         //         "type" => "service"
//         //     ],
//         //     "nickname" => 'Starter PACKAGE',
//         //     "interval" => 'month',
//         //     "interval_count" => "1",
//         //     "currency" => $currency,
//         //     "amount" => $price,
//         // ));
   
//         $createpayment= $stripe->paymentMethods->create(array(
//              'type' => 'card',
//              'card' => [
//             'number' => $card_number,
//             'exp_month' => $ex_month,
//             'exp_year' =>$ex_year,
//             'cvc' => $cvc_number,
//         ],
//      ));

//      echo "<pre>";
//      print_r($plan);
//      exit;

     
//         $customer = \Stripe\Customer::create([
//             // 'email' => $email,
//             'source'  => $token,
//         ]);
//         $subscription = \Stripe\Subscription::create(array(
          
//             "customer" => $customer->id,
//             "items" => array(
//                 array(
//                     "plan" => $plan->id,
//                 ),
//             ),
//         ));
      
//         $charge = \Stripe\Charge::create(array(
//             "amount" => $plan->amount,
//             "currency" => $currency,
//             "description" => "Monthly Subscription",
//             // "receipt_email" => $email,
//             "customer" => $customer,
//           ));

          
//         $payment_id = md5(rand());
//         $paydetails = [
            
//             'payment_id'     =>$payment_id,
//             'user_id'        => $this->session->userdata('id'),
//             'total_amount'   => $price, //$charge->amount,   
//             'purchase_date'  => date('Y-m-d H:s:i'),
//             'created_date'   => date('Y-m-d H:s:i'),
//             'status'         => '1',
//         ];
//         $data =[
//         'user_id'        => $this->session->userdata('id'),
//         'holder_name'    => $this->input->post('card_name'),
//         'card_number'   => $this->input->post('card_number'),
//         'cvc_number'    => $this->input->post('cvc_number'),
//         'cardexpire_month' => $this->input->post('ex_month'),
//         'cardexpire_year'  => $this->input->post('ex_year'),
//         'status'           => '1',
//         'created_date'    => date('Y-m-d H:s:i')
//         ];
       
//         $payment = $this->Payment_model->payment_details($paydetails, $data); 
//         echo json_encode($payment);
//         $this->session->set_flashdata('success', 'Payment made successfully.');
             
//         redirect('payment-success', 'refresh');

//     }else{
//         redirect('login');
//     }
//     }

//     public function update_status(){
//         if(isset($_REQUEST['$val'])){
//             $update_status= $this->Payment_model->update_status();
//             if($update_status>0){
//                 $this->session->set_flashdata('msg','Status update successfully');
//                 $this->session->set_flashdata('msg_class','alert-success');
//             }
//             else{
//                 $this->session->set_flashdata('msg','Status not update successfully');
//                 $this->session->set_flashdata('msg_class','alert-danger'); 
//             }
//             redirect('payment-list');
//         }
//     }

//     public function card_detail(){
//         if($this->session->userdata('id')){
//             $user_id       = $this->session->userdata('id');
//            $plan_id = $this->uri->segment(2);
//             $data['pay'] = $this->Payment_model->display_plan($plan_id);
//             $data['email'] = $this->Gsr->users_details();
//             $this->load->view('header_without_sidebar',$data);
//             $this->load->view('my_stripe',$data);
//             $this->load->view('footer');
//         }
//         else{
//             redirect('login');
//         }
//     }
    
//     public function delete_card(){
//         if($this->session->userdata){
//             $user_id = $this->session->userdata('id');
//             $plan_id = $this->uri->segment(2);
//             $result = $this->Payment_model->delete_card($user_id);
//             echo json_encode($result);
//             redirect(base_url().'my-stripe/'.$user_id);
//         }
//         else{
//             redirect('login');
//         }
       
//     }

//     public function update_stripePost()
//     {
//          if($this->session->userdata('id')){
//             // require_once('application/third_party/stripe-php/init.php');
        
            
//             // \Stripe\Stripe::setApiKey($this->config->item('stripe_secret'));
    
//             // $token  = $this->input->post('stripeToken');
//             // //$email  = $this->input->post('stripeEmail');
//             // // $plan = $this->input->post('plan');
//             // $interval  = $this->input->post('interval');
//             // $price  = $this->input->post('price');
//             // $currency  = $this->input->post('currency');
//             // $time = time();
//             // $plan = \Stripe\Plan::update(array( 
//             //     "product" => [
//             //         "name" => 'Starter PACKAGE',
//             //         "type" => "service"
//             //     ],
//             //     "nickname" => 'Starter PACKAGE',
//             //     "interval" => 'year',
//             //     "interval_count" => "1",
//             //     "currency" => $currency,
//             //     "amount" => $price,
//             // ));
//             // $customer = \Stripe\Customer::update([
//             //     // 'email' => $email,
//             //     'source'  => $token,
//             // ]);
     
//             // $subscription = \Stripe\Subscription::update(array(
//             //     "customer" => $customer->id,
//             //     "items" => array(
//             //         array(
//             //             "plan" => $plan->id,
//             //         ),
//             //     ),
//             // ));
//             // $charge = \Stripe\Charge::update(array(
//             //     "amount" => $plan->amount,
//             //     "currency" => $currency,
//             //     "description" => "Monthly Subscription",
//             //     // "receipt_email" => $email,
//             //     "customer" => $customer,
//             //   ));
//             // $payment_id = md5(rand());
//             // $paydetails = [
//             //     'payment_id'     =>$payment_id,
//             //     'user_id'        => $this->session->userdata('id'),
//             //     'total_amount'   => $charge->amount,
//             //    // 'purchase_date'  => date('Y-m-d H:s:;i'),
//             //     'update_date'   => date('Y-m-d H:s:;i'),
//             //     //'status'         => '1',
//             // ];
//             $plan_id = $this->input->post('submit');
//             $user_id = $this->session->userdata('id');
//             $data =[ 
//             'holder_name'    => $this->input->post('card_name'),
//             'card_number'   => $this->input->post('card_number'),
//             'cvc_number'    => $this->input->post('cvc_number'),
//             'cardexpire_month' => $this->input->post('ex_month'),
//             'cardexpire_year'  => $this->input->post('ex_year'),
//             'status'           => '1',
//             'updated_date'    => date('Y-m-d H:s:i')
//             ];
//         //    echo "<pre>";
//         //    print_r($data);
//         //    exit;
//             $payment = $this->Payment_model->update_card($user_id,$data); 
//             echo json_encode($payment);
//             $this->session->set_flashdata('success', 'Payment Updated successfully.');
                 
//            redirect('my-stripe/'.$plan_id, 'refresh');
    
//         }else{
//             redirect('login');
//         }  
// }
// }
?>
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
 
 class StripeController extends CI_Controller { 
      
     function __construct() { 
         parent::__construct(); 
       $this->load->library("session");
       $this->load->helper('url');
       $this->load->model('Payment_model');
       $this->load->library('Stripe_lib');
       $this->load->model('Gsr');
      
     } 
      
     public function index()
         {   if($this->session->userdata('id')){
             $user_id       = $this->session->userdata('id');
             $plan_id = $this->uri->segment(2);
             $email['email'] = $this->Gsr->users_details();
             $data['pay'] = $this->Payment_model->display_plan($plan_id);
             $paydata = $data['pay'];
            //  if($this->input->post('stripeToken')){ 
            //     $postData = $this->input->post(); 
            //     $postData['product'] = $paydata; 
            //     $paymentID = $this->payment($postData); 
            //     if($paymentID){ 
            //         // redirect('products/payment_status/'.$paymentID); 
            //         redirect('payment-success/'.$paymentID, 'refresh');
            //     }else{ 
            //         $apiError = !empty($this->stripe_lib->api_error)?' ('.$this->stripe_lib->api_error.')':''; 
            //         $data['error_msg'] = 'Transaction has been failed!'.$apiError; 
            //     } 
            //  }
             $data['card']  = $this->Payment_model->card_details($user_id);
             $this->load->view('header_without_sidebar',$email);
             $this->load->view('my_stripe',$data);
             $this->load->view('footer');
         }
         else{
             redirect('login');
         } 
         }
      
        //  function purchase(){ 
        //     $data = array(); 
        //     // Get product data from the database 
        //     $product = $this->Payment_model->getRows(); 
        //     // echo "<pre>";
        //     // print_r($product);
        //     // exit;
        //     // If payment form is submitted with token 
        //     if($this->input->post('stripeToken')){ 
        //         // Retrieve stripe token and user info from the posted form data 
        //         $postData = $this->input->post(); 
        //         $postData['product'] = $product; 
                 
        //         // Make payment 
        //         $paymentID = $this->payment($postData); 
                 
        //         // If payment successful 
        //         if($paymentID){ 
        //             redirect('products/payment_status/'.$paymentID); 
        //         }else{ 
        //             $apiError = !empty($this->stripe_lib->api_error)?' ('.$this->stripe_lib->api_error.')':''; 
        //             $data['error_msg'] = 'Transaction has been failed!'.$apiError; 
        //         } 
        //     } 
             
        //    // Pass product data to the details view 
        //     // $data['product'] = $product; 
        //     // $this->load->view('products/details', $data); 
            
        // } 
         
        

        function payment(){ 
         
            // If post data is not empty 
            // if(!empty($postData)){ 
                // Retrieve stripe token and user info from the submitted form data 
                // $token  = $postData['stripeToken']; 
                // $name = $postData['name']; 
                // $email = $postData['email']; 
                 $plan = $this->input->post('plan');
                 $interval  = $this->input->post('interval');
                 $price  = $this->input->post('price');
                 $currency  = $this->input->post('currency');
                 $card_number = $this->input->post('card_number');
                 $ex_month = $this->input->post('ex_month');
                 $ex_year = $this->input->post('ex_year');
                 $cvc_number = $this->input->post('cvc_number');
                
                $token = $this->input->post('stripeToken');
                $name = $this->input->post('name');
                $email = $this->input->post('email');
                // Add customer to stripe 
                $customer = $this->stripe_lib->addCustomer($email, $token); 

                //$retrievecustomer = $this->stripe_lib->retrieveCustomer();
                // echo "<pre>";
                // print_r($retrievecustomer);
                exit;
                if($customer){ 
                    $plan = \Stripe\Plan::create([
                        "product" => [
                            "name" => 'Starter PACKAGE',
                            "type" => "service"
                        ],
                        "nickname" => 'Starter PACKAGE',
                        "interval" => 'month',
                        "interval_count" => "1",
                        "currency" => $currency,
                        "amount" => $price,
                    ]);
                    $subscription = \Stripe\Subscription::create(array(
                      
                        "customer" => $customer->id,
                        "items" => array(
                            array(
                                "plan" => $plan->id,
                            ),
                        ),
                    ));
                   
                    $charge = \Stripe\Charge::create(array(
                        "amount" => $plan->amount,
                        "currency" => $currency,
                        "description" => "Monthly Subscription",
                        // "receipt_email" => $email,
                        "customer" => $customer,
                      ));
                      echo "<pre>";
                      print_r($charge['customer']);
                      print_r($charge['paid']);
                      exit;
                }

                $payment_id = md5(rand());
        $paydetails = [
            
            'payment_id'     =>$payment_id,
            'user_id'        => $this->session->userdata('id'),
            'user_name'      =>$name,
            'user_email'     =>$email,
            'paid_amount'   => $price, //$charge->amount,
            'paid_amount_currency' =>$currency,
            'purchase_date'  => date('Y-m-d H:s:i'),
            'created_date'   => date('Y-m-d H:s:i'),
            'payment_status'         => '1',
        ];
        $data =[
        'user_id'        => $this->session->userdata('id'),
        'holder_name'    => $this->input->post('card_name'),
        'card_number'   => $this->input->post('card_number'),
        'cvc_number'    => $this->input->post('cvc_number'),
        'cardexpire_month' => $this->input->post('ex_month'),
        'cardexpire_year'  => $this->input->post('ex_year'),
        'status'           => '1',
        'created_date'    => date('Y-m-d H:s:i')
        ];
        $stripecustomerid = [
            'stripecustomerID' => $custome->id
        ];
        echo "<pre>";
        print_r($stripecustomerid);
        exit;
       
        $payment = $this->Payment_model->payment_details($paydetails, $data); 
        //echo json_encode($payment);
                
        $this->session->set_flashdata('success', 'Payment made successfully.');
             redirect('payment-success', 'refresh');
            } 
          // return false; 
        //}  
        public function payment_success() {
               $this->load->view('payment_success'); 
               }
        public function delete_card(){
                    if($this->session->userdata){
                        $user_id = $this->session->userdata('id');
                        $plan_id = $this->uri->segment(2);
                        $result = $this->Payment_model->delete_card($user_id);
                        echo json_encode($result);
                        redirect(base_url().'my-stripe/'.$plan_id);
                    }
                    else{
                        redirect('login');
                    }
                   
                }
         
        // function payment_success($id){ 
        //    // $data = array(); 
             
        //     // Get order data from the database 
        //    // $order = $this->product->getOrder($id); 
             
        //     // Pass order data to the view 
        //    // $data['order'] = $order; 
        //    redirect('payment-success'); 
        // } 


        public function update_card_view(){
            $user_id       = $this->session->userdata('id');
             $plan_id = $this->uri->segment(2);
            $email['email'] = $this->Gsr->users_details();
            $data['pay'] = $this->Payment_model->display_plan($plan_id);
            $data['card']  = $this->Payment_model->card_details($user_id);
            
            $this->load->view('header_without_sidebar',$email);
            $this->load->view('update_stripe',$data);
            $this->load->view('footer');

        }

        function update_payment(){ 
         
            // If post data is not empty 
            // if(!empty($postData)){ 
                // Retrieve stripe token and user info from the submitted form data 
                // $token  = $postData['stripeToken']; 
                // $name = $postData['name']; 
                // $email = $postData['email']; 
                 $plan = $this->input->post('plan');
                 $interval  = $this->input->post('interval');
                 $price  = $this->input->post('price');
                 $currency  = $this->input->post('currency');
                 $card_number = $this->input->post('card_number');
                 $ex_month = $this->input->post('ex_month');
                 $ex_year = $this->input->post('ex_year');
                 $cvc_number = $this->input->post('cvc_number');
                
            //     $token = $this->input->post('stripeToken');
            //     $name = $this->input->post('name');
            //     $email = $this->input->post('email');

            //     $customer = $this->stripe_lib->addCustomer($email, $token); 

            //    if($customer){ 
            //         // $plan = \Stripe\Plan::create([
            //         //     "product" => [
            //         //         "name" => 'Starter PACKAGE',
            //         //         "type" => "service"
            //         //     ],
            //         //     "nickname" => 'Starter PACKAGE',
            //         //     "interval" => 'month',
            //         //     "interval_count" => "1",
            //         //     "currency" => $currency,
            //         //     "amount" => $price,
            //         // ]);
            //         // $subscription = \Stripe\Subscription::create(array(
                      
            //         //     "customer" => $customer->id,
            //         //     "items" => array(
            //         //         array(
            //         //             "plan" => $plan->id,
            //         //         ),
            //         //     ),
            //         // ));
                   
            //         $charge = \Stripe\Charge::update(array(
            //             "amount" => $plan->amount,
            //             "currency" => $currency,
            //             "description" => "Monthly Subscription",
            //             // "receipt_email" => $email,
            //             "customer" => $customer,
            //           ));
            //           echo "<pre>";
            //           print_r($charge);
            //           exit;
            //     }
             
            //  $payment_id = md5(rand());
            // $paydetails = [
            //     'payment_id'     =>$payment_id,
            //     'user_id'        => $this->session->userdata('id'),
            //     'total_amount'   => $charge->amount,
            //    // 'purchase_date'  => date('Y-m-d H:s:;i'),
            //     'update_date'   => date('Y-m-d H:s:;i'),
            //     //'status'         => '1',
            // ];
            $plan_id = $this->input->post('submit');
            $user_id = $this->session->userdata('id');
            $data =[ 
            'holder_name'    => $this->input->post('card_name'),
            'card_number'   => $this->input->post('card_number'),
            'cvc_number'    => $this->input->post('cvc_number'),
            'cardexpire_month' => $this->input->post('ex_month'),
            'cardexpire_year'  => $this->input->post('ex_year'),
            'status'           => '1',
            'updated_date'    => date('Y-m-d H:s:i')
            ];
    //    echo "<pre>";
    //    print_r($data);
    //    exit;
        $payment = $this->Payment_model->update_card($user_id,$data); 
        echo json_encode($payment);
        //$this->session->set_flashdata('success', 'Payment made successfully.');
             redirect(base_url().'my-stripe/'.$plan_id, 'refresh');
            //} 
           // return false; 
        }  

            public function card_detail(){
        if($this->session->userdata('id')){
            $user_id       = $this->session->userdata('id');
           $plan_id = $this->uri->segment(2);
            $data['pay'] = $this->Payment_model->display_plan($plan_id);
            $data['email'] = $this->Gsr->users_details();
            $this->load->view('header_without_sidebar',$data);
            $this->load->view('card',$data);
            $this->load->view('footer');
        }
        else{
            redirect('login');
        }
    }
        
    }

//}
 ?>