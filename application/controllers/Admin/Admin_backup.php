<?php

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct(); 
        $this->load->database();
        $this->load->helper(array('form', 'url','html'));
        $this->load->model('Admin_model');
        $this->load->model('Payment_model');
        $this->load->model('Shopnship_model');
        //$this->load->helper('url');
        $this->load->library('form_validation');
    }
    public function index(){
        $this->load->view('admin/chat');
    }
    public function shopnship_insert_message(){
        $shopnship_id = $this->input->post('order_id');
        $to_id   = $this->input->post('to_id');
        $message = array(
                'from_id'   => $this->session->userdata('id'),
                'to_id'     => $to_id,
                'message'   => $this->input->post('message'),
                'message_type' => $this->input->post('message_type'),
                'order_id'     => $shopnship_id,
                'send_by_admin' => '1',
                'shipment_type'=>'1',
                'created_date' => date('Y-m-d H:i:s')
        );
        $result = $this->Admin_model->insert_message($message);
        echo json_encode($result);
       
    }
    public function assisted_insert_message(){
        $assisted_id = $this->input->post('order_id');
        $to_id   = $this->input->post('to_id');
        $message = array(
                'from_id'   => $this->session->userdata('id'),
                'to_id'     => $to_id,
                'message' => $this->input->post('message'),
                'message_type' => $this->input->post('message_type'),
                'order_id'     => $assisted_id,
                'send_by_admin'=> '1',
                'shipment_type'=>'2',
                'created_date' => date('Y-m-d H:i:s')
        );
     
        $result = $this->Admin_model->insert_message($message);
        echo json_encode($result);
       
    }
    public function international_insert_message(){
        $order_id = $this->input->post('order_id');
        $to_id   = $this->input->post('to_id');
        $message = array(
                'from_id'   => $this->session->userdata('id'),
                'to_id'     => $to_id,
                'message' => $this->input->post('message'),
                'message_type' => $this->input->post('message_type'),
                'order_id'     => $order_id,
                'send_by_admin'=> '1',
                'shipment_type'=>'3',
                'created_date' => date('Y-m-d H:i:s')
        );
        $result = $this->Admin_model->insert_message($message);
        echo json_encode($result);
       
    }

    public function dashboard_admin(){
        if($this->session->userdata('id')){
            $order['total_order'] = $this->Admin_model->shopnship_count();
            $order['assisted_total_order'] = $this->Admin_model->assisted_count();
            $order['international_total_order'] = $this->Admin_model->international_count();
            $order['total_users'] = $this->Admin_model->users_count();
            // $order['pay'] = $this->Payment_model->display_plan_membership();
                $this->load->view('admin/heads');
                $this->load->view('admin/dashboard',$order);
                $this->load->view('admin/footer');
        }
    }
    public function user_details(){
        if($this->session->userdata('id')){
        $this->load->view('admin/heads');
        $this->load->view('admin/user_details');
        $this->load->view('admin/footer');
        }

    }
    public function insert_users(){
        if($this->session->userdata('id')){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('first_name','First Name','required|trim|alpha');
        $this->form_validation->set_rules('last_name','Last Name','required|trim|alpha');
        $this->form_validation->set_rules('password','Password ','required|trim|min_length[8]');
        $this->form_validation->set_rules('cpassword','Confirm Password ','required|trim|matches[password]|min_lenght[8]');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid');
        $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
        if($this->form_validation->run() ){
        
            $data = [
                'fname' => $this->input->post('first_name'),
                'lname' => $this->input->post('last_name'),
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password'),
                'phone'    => $this->input->post('phone_number'),
                'image' => 'public/uploads/images.png',
                'status'   => $this->input->post('status'),
                'created_date' => date('Y-m-d H:i:s')
        ];
        $result = $this->Admin_model->create_users($data);
        echo json_encode($result);
    }
    else {
        echo "validation error";
    }
        
    }
    else{
        redirect('admin');
    }
        
        
    }
    public function user_listing(){
        $data['users'] = $this->Admin_model->user_details();
        // $data['shopnship_list'] = $this->Admin_model->shopnship_order();
        // $data['assisted_list'] = $this->Admin_model->assisted_order();
        // $data['international_list'] = $this->Admin_model->international_order();
        $this->load->view('admin/heads');
        $this->load->view('admin/user_listing',$data);
        $this->load->view('admin/datatable_footer');
    }
    public function shopnship_order_listing(){
        if($this->session->userdata('id')){
        $total['shopnship_list'] = $this->Admin_model->shopnship_order(); 
        $total['total_item'] = $this->Admin_model->item_count($total['shopnship_list'][0]->shopnship_id);  
        $this->load->view('admin/heads');
        $this->load->view('admin/shopnship_listing',$total);
        $this->load->view('admin/datatable_footer');
        }
        else{
           redirect('admin');
        }
    }
    public function shopnship_listing(){
        if($this->session->userdata('id')){
        $user_id = $this->uri->segment(3);
        $total['shopnship_list'] = $this->Admin_model->shopnship_order_list($user_id);
        // echo "<pre>" ;
        // print_r($total['shopnship_list'][0]->shopnship_id);
        // exit;
        $total['total_item'] = $this->Admin_model->item_count($total['shopnship_list'][0]->shopnship_id);
        echo "<pre>";
        print_r($total['total_item']);
        exit;
        $this->load->view('admin/heads');
        $this->load->view('admin/shopnship_listing',$total);
        $this->load->view('admin/datatable_footer');
        }
        else{
           redirect('admin');
        }
    }
    public function shopnship_order_details($shopnship_id){
         if($this->session->userdata('id')){
        $data['order_id'] = $this->uri->segment(4);
        $data['item_records'] = $this->Admin_model->shopnship_order_details($shopnship_id);
        $data['user_address'] = $this->Admin_model->shopnship_delivery_address($data['item_records'][0]->address_id);
        $data['msg']          = $this->Admin_model->receiver_display_msg($shopnship_id);
        $data['pay_details']  = $this->Admin_model->shopnship_payment_display($shopnship_id);
        $data['shipment_details'] = $this->Admin_model->display_shipment_shopnship($shopnship_id);
       
        $this->load->view('admin/heads');
        $this->load->view('admin/shopnship_order_details',$data);
        $this->load->view('admin/datatable_footer');
        }
        else{
            redirect('admin');
        }
    }
    // public function user_order_details($user_id){
    //     $data['shopnship_list'] = $this->Admin_model->shopnship_order_display($user_id);
    //     echo "<pre>";
    //     print_r($data);
    //     exit;
    // }
    public function assisted_listing(){
        if($this->session->userdata('id')){
        $user_id = $this->uri->segment(3);
        $total['assisted_list'] = $this->Admin_model->assisted_order($user_id);
       // $total['users'] = $this->Admin_model->user_details(); 
        $this->load->view('admin/heads');
        $this->load->view('admin/assisted_listing',$total);
        $this->load->view('admin/datatable_footer');
        }
        else{
            redirect('admin');
        }
    }

    public function assisted_order_listing(){
        if($this->session->userdata('id')){
        $total['assisted_list'] = $this->Admin_model->assisted_order_listing();
        $this->load->view('admin/heads');
        $this->load->view('admin/assisted_listing',$total);
        $this->load->view('admin/datatable_footer');
        }
        else{
            redirect('admin');
        }
    }
    public function assisted_order_details($assisted_id){
        if($this->session->userdata('id')){
        $data['order_id'] = $this->uri->segment(4);
        $data['item_records'] = $this->Admin_model->assisted_order_details($assisted_id);
        $data['user_address'] = $this->Admin_model->assisted_delivery_address($data['item_records'][0]->address_id);
        $data['msg']          = $this->Admin_model->receiver_display_msg($assisted_id);
        $data['pay_details']  = $this->Admin_model->assisted_payment_display($assisted_id);
        $data['shipment_details'] = $this->Admin_model->display_shipment_assisted($assisted_id);
        $this->load->view('admin/heads');
        $this->load->view('admin/assisted_order_details',$data);
        $this->load->view('admin/datatable_footer');
        }
        else{
            redirect('admin');
        }
    }
    public function international_listing(){
        if($this->session->userdata('id')){
        $user_id = $this->uri->segment(3);
        $total['international_list'] = $this->Admin_model->international_order($user_id);
       // $total['users'] = $this->Admin_model->user_name($user_id); 
        $this->load->view('admin/heads');
        $this->load->view('admin/international_listing',$total);
        $this->load->view('admin/datatable_footer');
        }
        else{
            redirect('admin');
        }
    }

    public function international_order_listing(){
        if($this->session->userdata('id')){
        $total['international_list'] = $this->Admin_model->international_order_listing();
        $this->load->view('admin/heads');
        $this->load->view('admin/international_listing',$total);
        $this->load->view('admin/datatable_footer');
        }
        else{
            redirect('admin');
        }
    }
    public function international_order_details($order_id){
        if($this->session->userdata('id')){
        $data['order_id']=$this->uri->segment(4);
        $data['item_records'] = $this->Admin_model->international_order_details($order_id);
        $data['pickup_address'] = $this->Admin_model->internation_pickup_address($order_id);
        $data['delivery_address'] = $this->Admin_model->internation_delivery_address_details($order_id);
        $data['msg']          = $this->Admin_model->receiver_display_msg($order_id);
        $data['pay_details']  = $this->Admin_model->international_payment_display($order_id);
        $data['shipment_details'] = $this->Admin_model->display_shipment_international($order_id);
        $this->load->view('admin/heads');
        $this->load->view('admin/international_order_details',$data);
        $this->load->view('admin/datatable_footer');
        }
        else{
            redirect('admin');
        }
    }
    public function payment_listing(){
        if($this->session->userdata('id')){
        $payment['pay_success'] = $this->Payment_model->display_payment_details();
        $this->load->view('admin/heads');
        $this->load->view('admin/payment_listing',$payment);
        $this->load->view('admin/datatable_footer');
        }
        else{
            redirect('admin');
        }
    }
    public function payment_details(){
        if($this->session->userdata('id')){
        $this->load->view('admin/heads');
        $this->load->view('admin/payment_details');
        $this->load->view('admin/datatable_footer');
        }
        else{
           redirect('admin');
        }
    }
    public function admin_login(){
    
        $this->load->view('admin/admin_login');
    }
    public function admin_signin(){

        $this->load->library('form_validation');
        $this->form_validation->set_rules('password','Password','required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim');
        $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
        if($this->form_validation->run() ){
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $id = $this->Admin_model->admin_login($email,$password);
            if($id){
                $this->session->set_userdata('id',$id);
                    redirect('Admin/dashboard','refresh');

            }
            else{
                $this->session->set_flashdata('message','Your email or password invalid !');
                    redirect('admin','refresh');
            }
        }
        else{
            $this->admin_login();
        }
       
    }
    public function logout(){
        $this->session->unset_userdata('id');
        return redirect('admin');
    } 
    public function forgot_view(){
        
        $this->load->view('admin/forgotpassword');
    }

    public function recover_password(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|xss_clean|callback_validate_credentials');
            if($this->Admin_model->email_exists()){
                $temp_pass = md5(uniqid());

                $this->load->library('email');
                $this->email->set_mailtype("html");
                $this->email->from('email id', 'name');
                $this->email->to('anisha@mailinator.com');
                $this->email->subject("Reset your Password");
    
                $message = "<p>This email has been sent as a request to reset our password</p>";
                $message .= "<p><a href='".base_url()."Admin/Admin/reset_password/".$temp_pass."'> Click here </a>if you want to reset your password,
                            if not, then ignore</p>";
                $this->email->message($message);
    
                if($this->email->send()){
                    if($this->Admin_model->temp_reset_password($temp_pass)){
                        echo "check your email for instructions, thank you";
                         //redirect('admin');
                        
                    }
                }
                else{
                    echo "email was not sent, please contact your administrator";
                }
    
            }else{
                echo "your email is not in our database";
            }
    }
  
    public function reset_password($temp_pass){
        if($this->Admin_model->is_temp_pass_valid($temp_pass)){
            $data['temp_pass'] = $temp_pass;
            $this->load->view('admin/reset_password',$data);
    
        }else{
            echo "the key is not valid";    
        }
    
    }
    public function update_password(){
        $this->load->library('form_validation');
            $this->form_validation->set_rules('new_pass', 'Password', 'required|trim|min_length[8]');
            $this->form_validation->set_rules('cpass', 'Confirm Password', 'required|trim|min_length[8]|matches[new_pass]');
                if($this->form_validation->run()){
                  $temp_password=  $this->input->post('temp_password');
                  $password=  $this->input->post('new_pass');
                 $result = $this->Admin_model->update_password($temp_password,$password);
                
                 if($result){
                    redirect('admin','refresh');
                 }
                 else{
                    echo "passwords match"; 
                 }
                 //redirect('admin');
                }   
                else{
                echo "passwords do not match";  
                }
    }

    public function update_users(){
        $edit_data['data'] = $this->Admin_model->user_edit_data($this->uri->segment(4));
        $this->load->view('admin/heads');
        $this->load->view('admin/update_user',$edit_data);
        $this->load->view('admin/footer');
     }
    
    public function update_users_data(){
       $id = $this->input->post('id');
        $record = [
            'fname' => $this->input->post('first_name'),
            'lname' => $this->input->post('last_name'),
            'phone' => $this->input->post('phone_number'),
            'password'      => $this->input->post('password'),
            'email'         => $this->input->post('email'),
            'update_date'   => date('Y-m-d H:i:s')
        ];
          $result = $this->Admin_model->update_user_record($id,$record);
          if($result == TRUE){
            redirect('user-list');
          }
          else{
            redirect('user-list');
          }
    }

    public function update_status(){
        if(isset($_REQUEST['$val'])){
            $update_status= $this->Admin_model->update_status();
            if($update_status>0){
                $this->session->set_flashdata('msg','Status update successfully');
                $this->session->set_flashdata('msg_class','alert-success');
            }
            else{
                $this->session->set_flashdata('msg','Status not update successfully');
                $this->session->set_flashdata('msg_class','alert-danger'); 
            }
            redirect('user-list');
        }
    }

    public function payment_view(){
        $this->load->view('admin/heads');
        $this->load->view('admin/edit_payment');
        $this->load->view('admin/footer');
    }
    public function insert_payment(){
        
        $shopnship_id = $this->input->post('submit');
        $data = [
            'order_id'=>$shopnship_id,
            'type' => strtolower($this->input->post('type')),
            'status'=> $this->input->post('status'),
            'payment_id' => $this->input->post('payment'),
            'created_date' => date('Y-m-d H:i:s')
        ];
        $result = $this->Admin_model->insert_payment_data($data);
        echo json_encode($result);
        redirect(base_url().'Admin/Admin/shopnship_order_details/'.$shopnship_id,'refresh');
    }
    public function shopnship_shipment(){
        $shopnship_id = $this->input->post('submit');
        $data = [
            'order_id'         => $shopnship_id,
            'shipping_carrier' => $this->input->post('shipping_carrier'),
            'tracking_number'=> $this->input->post('tracking_number'),
            'tracking_url' => $this->input->post('tracking_url'),
            'shipping' => strtolower($this->input->post('shipping')),
            'created_date' => date('Y-m-d H:i:s')
        ];

        $result = $this->Admin_model->insert_shipment_data($data);
        echo json_encode($result);
        redirect(base_url().'Admin/Admin/shopnship_order_details/'.$shopnship_id,'refresh');

    }

    public function assisted_payment(){
        $assisted_id = $this->input->post('submit');
        $data = [ 
            'order_id' => $assisted_id,
            'type' => strtolower($this->input->post('type')),
            'status'=> $this->input->post('status'),
            'payment_id' => $this->input->post('payment'),
            'created_date' => date('Y-m-d H:i:s')
        ];
        $result = $this->Admin_model->insert_payment_data($data);
        echo json_encode($result);
        redirect(base_url().'Admin/Admin/assisted_order_details/'.$assisted_id,'refresh');
    }
    public function assisted_shipment(){
        $assisted_id = $this->input->post('submit');
        $data = [
            'order_id' => $assisted_id,
            'shipping_carrier' => $this->input->post('shipping_carrier'),
            'tracking_number'=> $this->input->post('tracking_number'),
            'tracking_url' => $this->input->post('tracking_url'),
            'shipping' => strtolower($this->input->post('shipping')),
            'created_date' => date('Y-m-d H:i:s')
        ];
        $result = $this->Admin_model->insert_shipment_data($data);
        echo json_encode($result);
        redirect(base_url().'Admin/Admin/assisted_order_details/'.$assisted_id,'refresh');

    }
    public function international_payment(){
        $order_id = $this->input->post('submit');
        $data = [
            'order_id' => $order_id,
            'type' => strtolower($this->input->post('type')),
            'status'=> $this->input->post('status'),
            'payment_id' => $this->input->post('payment'),
            'created_date' => date('Y-m-d H:i:s')
        ];
        $result = $this->Admin_model->insert_payment_data($data);
        echo json_encode($result);
        redirect(base_url().'Admin/Admin/international_order_details/'.$order_id,'refresh');
   
    }
    public function international_shipment(){
        $order_id = $this->input->post('submit');
        $data = [
            'order_id'      => $order_id,
            'shipping_carrier' => $this->input->post('shipping_carrier'),
            'tracking_number'=> $this->input->post('tracking_number'),
            'tracking_url' => $this->input->post('tracking_url'),
            'shipping' => strtolower($this->input->post('shipping')),
            'created_date' => date('Y-m-d H:i:s')
        ];
        $result = $this->Admin_model->insert_shipment_data($data);
        echo json_encode($result);
        redirect(base_url().'Admin/Admin/international_order_details/'.$order_id,'refresh');
    }

}
?>