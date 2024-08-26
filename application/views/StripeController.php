<?php
defined('BASEPATH') OR exit('No direct script access allowed');
   
class StripeController extends CI_Controller {
    
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function __construct() {
       parent::__construct();
       $this->load->library("session");
       $this->load->helper('url');
       $this->load->model('Payment_model');
       $this->load->model('Gsr');
       $this->load->library('session');
    }
    
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function index()
    {   if($this->session->userdata('id')){
        $user_id       = $this->session->userdata('id');
        $plan_id = $this->uri->segment(2);
        $email['email'] = $this->Gsr->users_details();
        $data['pay'] = $this->Payment_model->display_plan($plan_id);
        $data['card']  = $this->Payment_model->card_details($user_id);
        $this->load->view('header_without_sidebar',$email);
        $this->load->view('my_stripe',$data);
        $this->load->view('footer');
    }
    else{
        redirect('login');
    }
       
      
    }
      public function payment_success() {
        $this->load->view('payment_success');
      }
    /**
     * Get All Data from this method. 
     *
     * @return Response
    */
    public function stripePost()
    {
        if($this->session->userdata('id')){
        require_once('application/third_party/stripe-php/init.php');
    
        
        \Stripe\Stripe::setApiKey($this->config->item('stripe_secret'));

        $token  = $this->input->post('stripeToken');
        //$email  = $this->input->post('stripeEmail');
        // $plan = $this->input->post('plan');
        $interval  = $this->input->post('interval');
        $price  = $this->input->post('price');
        $currency  = $this->input->post('currency');
        $time = time();
        $plan = \Stripe\Plan::create(array( 
            "product" => [
                "name" => 'Starter PACKAGE',
                "type" => "service"
            ],
            "nickname" => 'Starter PACKAGE',
            "interval" => 'year',
            "interval_count" => "1",
            "currency" => $currency,
            "amount" => $price,
        ));
        $customer = \Stripe\Customer::create([
            // 'email' => $email,
            'source'  => $token,
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
            "amount" => floor($plan->amount),
            "currency" => $currency,
            "description" => "Monthly Subscription",
            // "receipt_email" => $email,
            "customer" => $customer,
          ));
        $payment_id = md5(rand());
        $paydetails = [
            
            'payment_id'     =>$payment_id,
            'user_id'        => $this->session->userdata('id'),
            'total_amount'   => $charge->amount,
            'purchase_date'  => date('Y-m-d H:s:i'),
            'created_date'   => date('Y-m-d H:s:i'),
            'status'         => '1',
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
       
        $payment = $this->Payment_model->payment_details($paydetails, $data); 
        echo json_encode($payment);
        $this->session->set_flashdata('success', 'Payment made successfully.');
             
        redirect('payment-success', 'refresh');

    }else{
        redirect('login');
    }
    }

    public function update_status(){
        if(isset($_REQUEST['$val'])){
            $update_status= $this->Payment_model->update_status();
            if($update_status>0){
                $this->session->set_flashdata('msg','Status update successfully');
                $this->session->set_flashdata('msg_class','alert-success');
            }
            else{
                $this->session->set_flashdata('msg','Status not update successfully');
                $this->session->set_flashdata('msg_class','alert-danger'); 
            }
            redirect('payment-list');
        }
    }

    public function card_detail(){
        if($this->session->userdata('id')){
            $user_id       = $this->session->userdata('id');
           // $plan_id = $this->uri->segment(2);
            $data['pay'] = $this->Payment_model->display_plan($plan_id);
            $data['email'] = $this->Gsr->users_details();
            $this->load->view('header_without_sidebar',$data);
            $this->load->view('my_strip',$data);
            $this->load->view('footer');
        }
        else{
            redirect('login');
        }
       
      
    }
    
    public function delete_card(){
        if($this->session->userdata){
            $user_id = $this->session->userdata('id');
            $plan_id = $this->uri->segment(2);
            $result = $this->Payment_model->delete_card($user_id);
            echo json_encode($result);
            redirect(base_url().'my-stripe/'.$user_id);
        }
        else{
            redirect('login');
        }
       
    }

    public function update_stripePost()
    {
         if($this->session->userdata('id')){
            // require_once('application/third_party/stripe-php/init.php');
        
            
            // \Stripe\Stripe::setApiKey($this->config->item('stripe_secret'));
    
            // $token  = $this->input->post('stripeToken');
            // //$email  = $this->input->post('stripeEmail');
            // // $plan = $this->input->post('plan');
            // $interval  = $this->input->post('interval');
            // $price  = $this->input->post('price');
            // $currency  = $this->input->post('currency');
            // $time = time();
            // $plan = \Stripe\Plan::update(array( 
            //     "product" => [
            //         "name" => 'Starter PACKAGE',
            //         "type" => "service"
            //     ],
            //     "nickname" => 'Starter PACKAGE',
            //     "interval" => 'year',
            //     "interval_count" => "1",
            //     "currency" => $currency,
            //     "amount" => $price,
            // ));
            // $customer = \Stripe\Customer::update([
            //     // 'email' => $email,
            //     'source'  => $token,
            // ]);
     
            // $subscription = \Stripe\Subscription::update(array(
            //     "customer" => $customer->id,
            //     "items" => array(
            //         array(
            //             "plan" => $plan->id,
            //         ),
            //     ),
            // ));
            // $charge = \Stripe\Charge::update(array(
            //     "amount" => $plan->amount,
            //     "currency" => $currency,
            //     "description" => "Monthly Subscription",
            //     // "receipt_email" => $email,
            //     "customer" => $customer,
            //   ));
            // $payment_id = md5(rand());
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
            $this->session->set_flashdata('success', 'Payment Updated successfully.');
                 
           redirect('my-stripe/'.$plan_id, 'refresh');
    
        }else{
            redirect('login');
        }  
}
}?>