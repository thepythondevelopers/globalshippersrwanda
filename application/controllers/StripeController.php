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
     public function card_detail($plan_id){
        if($this->session->userdata('id')){
            $user_id       = $this->session->userdata('id');
            $data['pay'] = $this->Payment_model->display_plan($plan_id);
            $data['list'] = $this->Gsr->fetch_name($user_id);
            $data['email'] = $this->Gsr->users_details();
            $this->load->view('header_without_sidebar',$data);
            $this->load->view('card',$data);
            $this->load->view('footer');
        }
        else{
            redirect('login');
        }
    }
     public function index($plan_id)
         {   if($this->session->userdata('id')){
             $user_id       = $this->session->userdata('id');
             $data['email'] = $this->Gsr->users_details();
             $data['pay'] = $this->Payment_model->display_plan($plan_id);
             $data['card']  = $this->Payment_model->card_details($user_id);
             $data['list'] = $this->Gsr->fetch_name($user_id);
             $this->load->view('header_without_sidebar',$data);
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
      public function payment(){ 

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
                if(empty($customerstripedata['customer']->stripecustomerID)) { 
                   $customer = $this->stripe_lib->addCustomer($email, $token); 
                     } else { 
                     $customer = $this->stripe_lib->retrieveCustomer($customerstripedata['customer']->stripecustomerID);    
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
                    $retrieveplan = $this->stripe_lib->retrievePlan($plan);
                    $subscription = \Stripe\Subscription::create(array(
                      
                        "customer" => $customer->id,
                        "items" => array(
                            array(
                                "plan" => $plan,
                            ),
                        ),
                    ));
                    // $charge = \Stripe\Charge::create(array(
                    //     "amount" => $retrieveplan->amount,
                    //     "currency" => $retrieveplan->currency,
                    //     "description" => $retrieveplan->nickname,
                    //     // "receipt_email" => $email,
                    //     "customer" => $customer->id,
                    //   ));
                  
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
            'stripecustomerID' => $customer->id,
            'is_plan_active'   => '1',
           'current_active_plan' =>$this->input->post('planid')
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
                        $result = $this->Payment_model->delete_card($user_id);
                        echo json_encode($result);
                        //redirect(base_url().'my-stripe/'.$plan_id);
                        redirect('membership');
                    }
                    else{
                        redirect('login');
                    }
                   
                }

        public function update_card_view(){
            $user_id       = $this->session->userdata('id');
             $plan_id = $this->uri->segment(2);
            $data['email'] = $this->Gsr->users_details();
            $data['pay'] = $this->Payment_model->display_plan($plan_id);
            $data['card']  = $this->Payment_model->card_details($user_id);
            $data['list'] = $this->Gsr->fetch_name($user_id);
            $this->load->view('header_without_sidebar',$data);
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
            $plan_id = $this->input->post('submit');
            $user_id = $this->session->userdata('id');
            $data =[ 
            'holder_name'    => $this->input->post('card_name'),
            'card_number'   => $this->input->post('card_number'),
            'cvc_number'    => $this->input->post('cvc_number'),
            'cardexpire_month' => $this->input->post('ex_month'),
            'cardexpire_year'  => $this->input->post('ex_year'),
            //s'status'           => '1',
            'updated_date'    => date('Y-m-d H:s:i')
            ];
        $payment = $this->Payment_model->update_card($user_id,$data); 
        echo json_encode($payment);
        //$this->session->set_flashdata('success', 'Payment made successfully.');
             redirect(base_url().'my-stripe/'.$plan_id, 'refresh');
            //} 
           // return false; 
        }  

      
        
    }

//}
 ?>