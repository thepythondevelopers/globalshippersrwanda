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
      
     public function index($data)
         {   if($this->session->userdata('id')){
             $user_id       = $this->session->userdata('id');
            // $plan_id = $this->uri->segment(2);
             $email['email'] = $this->Gsr->users_details();
             $data['pay'] = $this->Payment_model->display_plan($plan_id);
             echo "<pre>";
             print_r($data['pay']);
             exit;
             $data['card']  = $this->Payment_model->card_details($user_id);
             $this->load->view('header_without_sidebar',$email);
             $this->load->view('my_stripe',$data);
             $this->load->view('footer');
             
         }
         else{
             redirect('login');
         } 
         }
        public function stipecustomerid(){
            $user_id = $this->session->userdata('id');
            $stripe['customer'] = $this->Payment_model->fetch_stripecustomerid($user_id);
            return $stripe;
        }
      
        function payment(){ 

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
                $customerstripedata = $this->stipecustomerid();
                
                $retrieveplan = $this->stripe_lib->retrievePlan();
                echo "<pre>";
                print_r($retrieveplan);
                exit;
                if(empty($customerstripedata['customer']->stripecustomerID)) { 
                   $customer = $this->stripe_lib->addCustomer($email, $token); 
                     } else { 
                     $retrievecustomer = $this->stripe_lib->retrieveCustomer($customerstripedata['customer']->stripecustomerID);    
                     } 
                
                if($customer){ 
                    // $plan = \Stripe\Plan::create([
                    //     "product" => [
                    //         "name" => 'Starter PACKAGE',
                    //         "type" => "service"
                    //     ],
                    //     "nickname" => 'Starter PACKAGE',
                    //     "interval" => 'month',
                    //     "interval_count" => "1",
                    //     "currency" => $currency,
                    //     "amount" => $price,
                    // ]);
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
        $user_id  = $this->session->userdata('id');
        $stripecustomerid = [
            'stripecustomerID' => $customer->id
        ];
       
        $this->Payment_model->payment_details($paydetails, $data); 
        $this->Payment_model->update_stripecustomerid($user_id,$stripecustomerid);
        $this->session->set_flashdata('success', 'Payment made successfully.');
             redirect('payment-success', 'refresh');
            }  
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