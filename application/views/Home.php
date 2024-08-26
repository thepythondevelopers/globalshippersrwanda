<?php

defined('BASEPATH') OR exit('No direct script access allowed');
ini_set('display_errors', 1);
error_reporting(E_ALL);
class Home extends CI_Controller {

    public function __construct() {
        parent::__construct(); 
        $this->load->database();
        $this->load->helper(array('form', 'url','html'));
        $this->load->helper('date');
        $this->load->library('form_validation');
        $this->load->model('Gsr');
        $this->load->model('Payment_model');

        $this->load->model('Admin_model');
        $this->load->model('Shopnship_model');
        $this->load->library('session');
     }

    public function dashboard()
	{
        if($this->session->userdata('id'))
        {
            $user_id = $this->session->userdata('id');
            $data['order_count'] = $this->Gsr->order_count($user_id); 
            $data['noti_count']=$this->Gsr->count_notification($user_id);
            $data['address'] = $this->Admin_model->display_address();
            $data['assis_order_count'] = $this->Gsr->assisted_order_count($user_id);
            $data['inter_order_count'] = $this->Gsr->international_order_count($user_id);
            $data['email'] = $this->Gsr->users_details();
            // $data['user_record'] = $this->Gsr->user_data_display($id);
            // echo "<pre>";
            // print_r($data['user_record']);
            // exit;
            $data['high'] = '4';
            $this->load->view('sidebar_with_header.php',$data);
            $this->load->view('dashboard',$data);
            $this->load->view('footer');
        }
        else{
             return redirect('login');
        }
        
        
    }
    public function assisted_create_order(){
        $user_id= $this->session->userdata('id');
         $data['add'] = $this->Shopnship_model->display_address($user_id);
        $data['email'] = $this->Gsr->users_details();
        $data['noti_count']=$this->Gsr->count_notification($user_id);
        $data['high'] = '2';
        $this->load->view('sidebar_with_header.php',$data);
        $this->load->view('assisted-create_order',$data);
        $this->load->view('footer'); 
    }
    public function assisted_sns(){ 
        if($this->session->userdata('id'))
        {
         $user_id = $this->session->userdata('id');
        $and=empty($this->input->get('order-status'))? '':$this->input->get('order-status');
        $data['noti_count']=$this->Gsr->count_notification($user_id);
        $data['display_pagination'] = $this->Shopnship_model->assisted_display_records($user_id,$and);
       // $data['assisted'] = $this->Shopnship_model->assisted_item_receive($user_id);
        $data['progess_status'] = $this->Gsr->assisted_progress_order_status($user_id);
        $data['shipment_status'] = $this->Gsr->assisted_shipment_order_status($user_id);
        $data['completed_status'] = $this->Gsr->assisted_completed_order_status($user_id);
        $data['assis_order_count'] = $this->Gsr->assisted_order_count($user_id);
        $data['email'] = $this->Gsr->users_details();
        $data['high'] = '2';
        $data['highlight'] = '1';
        $this->load->view('sidebar_with_header.php',$data);
         $this->load->view('assisted-sns',$data);
         $this->load->view('footer');

    }
    else{
        return redirect('login');
    }
    }
    public function international_create_order(){
        $user_id =$this->session->userdata('id');
        $data['email'] = $this->Gsr->users_details();
        $data['noti_count']=$this->Gsr->count_notification($user_id);
        $data['high']  = '3';
        $this->load->view('sidebar_with_header.php',$data);

        $this->load->view('international-create_order');
        $this->load->view('footer'); 
    }
    public function international_shipment(){
        if($this->session->userdata('id')){
            $user_id = $this->session->userdata('id');
            $and=empty($this->input->get('order-status'))? '':$this->input->get('order-status');
            $data['noti_count']=$this->Gsr->count_notification($user_id);
            $data['item_records'] = $this->Shopnship_model->international_display_records($user_id,$and);
            $data['inter_order_count'] = $this->Gsr->international_order_count($user_id);
            $data['progess_status'] = $this->Gsr->international_progress_order_status($user_id);
            $data['shipment_status'] = $this->Gsr->international_shipment_order_status($user_id);
            $data['completed_status'] = $this->Gsr->international_completed_order_status($user_id);
            $data['email'] = $this->Gsr->users_details();
            $data['high'] = '3';
            $this->load->view('sidebar_with_header.php',$data);
            $this->load->view('international-shipment',$data);
            $this->load->view('footer'); 
        }
        else{
            redirect('login');
        }
      
    }
    public function login(){
        $this->load->view('head');
        $this->load->view('login');
    }
    public function membership(){
        $data['pay'] = $this->Payment_model->display_plan_membership();
        foreach($data['pay'] as $key=>$value) {
            if($value->interval == 1) {
                $month['plan_amt'][] = $value->plan_amount;
                $month['display_amt'][] = $value->display_amount;
                $month['plan_id'][] = $value->plan_id;
            } elseif($value->interval == 2) {
                $year['plan_amt'][]= $value->plan_amount;
                $year['display_amt'][] = $value->display_amount;
                $year['plan_id'][] = $value->plan_id;
            }
            else{
                redirect('membership');
            }
        }
        $data['subscription_type']['monthly'] = $month;
        $data['subscription_type']['yearly'] = $year;
        $data['email'] = $this->Gsr->users_details();
       
        $this->load->view('header_without_sidebar',$data);
        $this->load->view('membership',$data);
        $this->load->view('footer'); 
    }

    public function notifications(){
    
        $user_id = $this->session->userdata('id');
        $data['email'] = $this->Gsr->users_details();
        $data['noti_count']=$this->Gsr->count_notification($user_id);
        $data['message'] = $this->Gsr->display_notification($user_id);
        $data['high'] = '';
        $this->load->view('sidebar_with_header.php',$data);
        $this->load->view('notifications',$data);
        $this->load->view('footer'); 
     }
    public function delete_notification(){
        $id = $this->uri->segment(3);
       $result = $this->Gsr->delete_nofification($id);
       if($result==TRUE){
        redirect('notifications','refresh');
       }
       else{
        redirect('notifications','refresh');
       }
        
    }
    public function delete_all_notification(){
      
        $user_id = $this->session->userdata('id');
        $result = $this->Gsr->delete_all_nofification($user_id);
        if($result==TRUE){
            redirect('notifications','refresh');
           }
           else{
            redirect('notifications','refresh');
           }
    }
    public function profile(){
        if($this->session->userdata('id'))
        {   $user_id = $this->session->userdata('id');
            $data['email'] = $this->Gsr->users_details();
            $name['list'] = $this->Gsr->fetch_name($user_id);
            $name['plan']  = $this->Payment_model->profile_display_plan($user_id);
            $name['profile'] = $this->Gsr->display_image($user_id);
            $name['add_data'] = $this->Gsr->display_profiledata($user_id);
            // echo "<pre>";
            // print_r($name['add_data']);
            // exit;
            $this->load->view('header_without_sidebar.php',$data);
            $this->load->view('profile',$name);
            $this->load->view('footer');
        }
        else{
            return redirect('login');
        } 
    }

    public function upload_photo()
    {
            
    // $data = $_POST['image'];
    // list($type, $data) = explode(';', $data);
    // list(, $data)      = explode(',', $data);
    // $data = base64_decode($data);
    // $imageName = time().'.png';
    // file_put_contents('./uploads/'.$imageName, $data);
     
    $user_id = $this->input->post('user_id');
    $existing_photo = $this->Gsr->display_image($user_id)->image;
    if ($existing_photo && file_exists("public/uploads/{$existing_photo}")) {
        unlink("public/uploads/{$existing_photo}");
    }
    $image =$_FILES['image']['name'];
    $extension = pathinfo($image,PATHINFO_EXTENSION);
    $rand = rand(0,100000);
    $rename = 'public/uploads/'.strtotime(date('Y-m-d')).$rand;
    $data['image'] = $rename.'.'.$extension;
      if ($_FILES["image"]["size"]> 500000) {
        echo "Sorry, your file is too large.";
      }
      if($extension != "jpg" && $extension != "png" && $extension != "jpeg" && $extension != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            }
            if(move_uploaded_file($_FILES["image"]["tmp_name"], $data['image'])){
            echo "The file ". $data['image']. " has been uploaded.";
        }
     else {
                echo "Sorry, there was an error uploading your file.";
               }
    $result = $this->Gsr->update_photo($user_id, $data);
    echo json_encode($result);
    redirect('profile');
   }

    public function insert_email(){
            $data = [
                'user_id' => $this->session->userdata('id'),
                'email'  => $this->input->post('email'),
            ];
          $result=$this->Gsr->phone_insert($data);
        echo json_encode($result);
        if($result ==TRUE){
            redirect('profile');
        }
        else{
            echo "no insert";
        }
    }

    public function insert_phone(){
        $data = [
            'user_id' => $this->session->userdata('id'),
            'phone' => $this->input->post('phone_number'),
        ];
        $result = $this->Gsr->phone_insert($data);
         echo json_encode($result);
    
        if($result ==TRUE){
            redirect('profile');
        }
        else{
            echo "no insert";
        }
    }

    public function insert_address(){
            $data = [
                'user_id' => $this->session->userdata('id'),
                'address' => $this->input->post('address'.'['.$k.']'),
            ];
                $result = $this->Gsr->phone_insert($data);
            echo json_encode($result);
    
        if($result ==TRUE){
            redirect('profile');
        }
        else{
            echo "no insert";
        }
    }
   
    public function update_data()
    {  
      $id= $this->input->post('id');
      $data = array(
          'fname'        => $this->input->post('fname'),
          'lname'        => $this->input->post('lname')
       );
       $query = $this->Gsr->update_record($id,$data);
       if($query == True)
       {
           redirect('profile', 'refresh');
       }
       else{
           redirect('profile', 'refresh');
       } 
        }
        public function update_email()
        {
          $id= $this->input->post('id');
          $data = array(
             'email' => $this->input->post('email')
           );
           $query = $this->Gsr->update_email($id,$data);
           if($query == True)
           {
               redirect('profile', 'refresh');
           }
           else{
               redirect('profile', 'refresh');
           }
              
            }
            public function update_phone(){
                $id= $this->input->post('id');
                $data = array(
                   'phone' => $this->input->post('phone')
                 );
                 $query = $this->Gsr->update_phone($id,$data);
                 if($query == True)
                 {
                     redirect('profile', 'refresh');
                 }
                 else{
                     redirect('profile', 'refresh');
                 }
            }
    public function shopnship_create_order(){
        $user_id = $this->session->userdata('id');
        $data['add'] = $this->Shopnship_model->display_address($user_id);
        $data['email'] = $this->Gsr->users_details();
        $data['noti_count']= $this->Gsr->count_notification($user_id);
        $data['high'] = '1';
        $this->load->view('sidebar_with_header.php',$data);
        $this->load->view('shopnship-create_order',$data);
        $this->load->view('footer');
    }
    public function shopnship(){

        if($this->session->userdata('id'))
        {
        $and=empty($this->input->get('order-status'))? '':$this->input->get('order-status');
        
        $user_id = $this->session->userdata('id');
        $data['noti_count']=$this->Gsr->count_notification($user_id);
        $data['display_pagination'] = $this->Shopnship_model->shopnship_display_records($user_id,$and);
        // echo "<pre>";
        // print_r($data['display_pagination']);
        // exit;
        $data['progess_status'] = $this->Gsr->shopnship_progress_order_status($user_id);
        $data['shipment_status'] = $this->Gsr->shopnship_shipment_order_status($user_id);
        $data['completed_status'] = $this->Gsr->shopnship_completed_order_status($user_id);
        $data['order_count'] = $this->Gsr->order_count($user_id);
        $data['high'] = '1';
        $data['email'] = $this->Gsr->users_details();
        $this->load->view('sidebar_with_header.php',$data);
         $this->load->view('shopnship',$data);
         $this->load->view('footer');
        }
        else{
        return redirect('login');
     }
    }
    public function test(){
        $this->load->view('header');
        $this->load->view('test');
        $this->load->view('footer');
    }
    public function signup(){
        $this->load->view('head');
        $this->load->view('signup');
        $this->load->view('footer');
    }

    public function signup_insert(){  
        $this->form_validation->set_rules('fname','First Name','trim|required|alpha');
        $this->form_validation->set_rules('lname','Last Name','trim|required|alpha');
        $this->form_validation->set_rules('email','Email Id','trim|required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('phone','Mobile Number','trim|required|is_unique[users.phone]');
        $this->form_validation->set_rules('pswd','Password','trim|required|min_length[8]');
        $this->form_validation->set_rules('cpwd','Confirm Password','trim|required|min_length[8]|matches[pswd]');
        $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
        if($this->form_validation->run()){
            $verification_key =md5(rand());
            // $encrypted_password = $this->encrypt->encode($this->input->post('password'));
            $data = [
                'fname' => $this->input->post('fname'),
                'lname' => $this->input->post('lname'),
                'email' => $this->input->post('email'),
                'phone' => $this->input->post('phone'),
                'password' => $this->input->post('pswd'),
                'verification_key'=>$verification_key,
                'image' => 'public/uploads/images.png',
                 'created_date' => date('Y-m-d H:s:i'),
               
            ];
            $notification = [
               // 'user_id'           => $this->session->userdata('id'),
               // 'order_id'      => $international_id, 
                'content'       => 'A User Created new account',
                 'order_type'    => '4',
                'notification_type' => '0',
                'created_time'      => date('Y-m-d H:i:s')

            ];
            $this->load->library('email');
            $this->email->set_mailtype("html");
            $id = $this->Gsr->signup_data($data);
            //$notification = $this->Shopnship_model->create_notification($notification);
            if($id>0){
                $message = "<p>Hi ".$this->input->post('fname')."</p>
                <p>This is email verification mail from GSR Login register system. For complete registration process and login into system. First you want to verify you email by click this <a href='".base_url()."Home/verify_email/".$verification_key."'>link</a>.</p>
                 <p>Once you click this link your email will be verified and you can login into system.</p>
                <p>Thanks,</p>";
            $this->email->from('info@globalshippersrwanda.com', 'Globalshipperswanda.com');
            $this->email->to('anishaiert@gmail.com');
   
            $this->email->subject('email subject');
            $this->email->message($message);
   
            if ($this->email->send()) {
              $this->session->set_flashdata('message','check in your email for email verification mail');
             redirect('login');
            } else {
             print "Could not send email, please try again later";
             }
            }
           
        }
        else{
            $this->signup();
        }

    }

    public function verify_email(){
        if($this->uri->segment(3)){
            $verification_key = $this->uri->segment(3); 
            if($this->Gsr->email_verify($verification_key)){
                $data['message'] = '<h1 align ="center">Your email has been successfully verified, now you can login from <a href="'.base_url().'Home/login">here</a></h1>';
            }
            else{
                $data['message'] = '<h1 align ="center">Invalid Links</h1>';
            }
            $this->load->view('header');
            $this->load->view('email_verification' ,$data);
            $this->load->view('footer');
        }
    }

    public function user_login(){
        $this->form_validation->set_rules('email','Email Address','required|trim');
        $this->form_validation->set_rules('pwd','Password','required|trim|min_length[8]');
        $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');

        if($this->form_validation->run()){

            $email = $this->input->post('email');
            $pass  =  $this->input->post('pwd');
            $id    = $this->Gsr->login_user($email,$pass);
            $data['user_record'] = $this->Gsr->user_data_display($id);

            if($id){
                $this->session->set_userdata('id',$id);
                if(!empty($data['user_record'][0]->is_plan_active=='1')){
                    redirect('dashboard');
                }else{
                    redirect('membership'); 
                }
                //redirect('membership');

            }
            else{
                $this->session->set_flashdata('message','Your email or password invalid !');
                redirect('login');
            }

        }
        else{
            $this->login();
        }
    }
    public function logout(){
        $this->session->unset_userdata('id');
        return redirect('login');
    } 
    public function forgot(){
        $this->load->view('header');
        $this->load->view('forgot');
        $this->load->view('footer');
    }  
     public function recover(){
        $this->load->view('header');
        $this->load->view('forgot');
        $this->load->view('footer');
    }
    public function recover_password(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|xss_clean|callback_validate_credentials');
            if($this->Gsr->email_exists()){
                $temp_pass = md5(uniqid());

                $this->load->library('email');
                $this->email->set_mailtype("html");
                $this->email->from('email id', 'name');
                $this->email->to('anisha@mailinator.com');
                $this->email->subject("Reset your Password");
    
                $message = "<p>This email has been sent as a request to reset our password</p>";
                $message .= "<p><a href='".base_url()."Home/reset_password/".$temp_pass."'> Click here </a>if you want to reset your password,
                            if not, then ignore</p>";
                $this->email->message($message);
    
                if($this->email->send()){
                    if($this->Gsr->temp_reset_password($temp_pass)){
                        echo "check your email for instructions, thank you";
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
        if($this->Gsr->is_temp_pass_valid($temp_pass)){
            $data['temp_pass'] = $temp_pass;
            $this->load->view('header');
            $this->load->view('change_password',$data);
            $this->load->view('footer');
    
        }else{
            echo "the key is not valid";    
        }
    
    }
    public function update_password(){
        $this->load->library('form_validation');
            $this->form_validation->set_rules('pass', 'Password', 'required|trim|min_length[8]');
            $this->form_validation->set_rules('cpass', 'Confirm Password', 'required|trim|min_length[8]|matches[pass]');
                if($this->form_validation->run()){
                  $temp_password=  $this->input->post('temp_password');
                  $password=  $this->input->post('pass');
                 $result = $this->Gsr->update_password($temp_password,$password);
                 if($result){
                    redirect('login','refresh');
                 }
                echo "passwords match"; 
                
                }else{
                echo "passwords do not match";  
                }
    }
    public function invite_friends(){
        $data['email'] = $this->Gsr->users_details();
        $data['noti_count']=$this->Gsr->count_notification($user_id);
        $this->load->view('header_without_sidebar',$data);
        $this->load->view('invite-friends');
        $this->load->view('footer');
    }
    public function address_book(){
        $data['email'] = $this->Gsr->users_details();
        $data['noti_count']=$this->Gsr->count_notification($user_id);
        $this->load->view('header_without_sidebar',$data);
        $this->load->view('address_book');
        $this->load->view('footer');
    }

public function change_password(){
    $this->load->library('form_validation');
    $this->form_validation->set_rules('current_password','Current Password','required|trim|min_length[8]');
    $this->form_validation->set_rules('new_password','New Password','required|trim|min_length[8]');
    $this->form_validation->set_rules('confirmed','COnfirm Password','required|trim|min_length[8]|matches[new_password]');
    if($this->form_validation->run()){
        $old_pass = $this->input->post('current_password');
        $new_pass = $this->input->post('new_password');
        $c_new_pass = $this->input->post('confirmed');
        if(strcmp($old_pass,$new_pass)==0){
            $message = "New password should be a different password";
        }
        else{
            $user_id = $this->session->userdata('id');
            if($this->Gsr->oldPasswordMatches($user_id,$old_pass)){
                $this->Gsr->changeUserPassword($user_id,$new_pass);
                $message = "Password change successfully";
            }
            else{
                $message = "Your old Password is wrong";
            }
            redirect('shopnship/profile',array('message'=>$message)) ; 
        }
    }
    else{
       redirect('shopnship/profile','refresh') ;
    }

}

public function change_pass(){
    //$user_id = $this
    $data['email'] = $this->Gsr->users_details();
    //$data['noti_count']=$this->Gsr->count_notification($user_id);
    $this->load->view('header_without_sidebar',$data);
    $this->load->view('change_pass');
    $this->load->view('footer');
   
}
public function updatepassword(){
    $this->load->library('form_validation');
    $this->form_validation->set_rules('old_password','Old Password','required|trim|min_length[8]');
    $this->form_validation->set_rules('new_pass','New Password','required|trim|min_length[8]');
    $this->form_validation->set_rules('confirmed','COnfirm Password','required|trim|min_length[8]|matches[new_pass]');
    if($this->form_validation->run()){
        $old_pass = $this->input->post('old_password');
        $new_pass = $this->input->post('new_pass');
        $c_new_pass = $this->input->post('confirmed');
        if(strcmp($old_pass,$new_pass)==0){
            $message = "New password should be a different password";
        }
        else{
            $user_id = $this->session->userdata('id');
            if($this->Gsr->oldPasswordMatches($user_id,$old_pass)){
                $this->Gsr->changeUserPassword($user_id,$new_pass);
                $message = "Password change successfully";
                redirect('login');
            }
            else{
                $message = "Your old Password is wrong";
            }
            redirect('Home/change_pass',array('message'=>$message)) ; 
        }
    }
    else{
       redirect('Home/change_pass','refresh') ;
    }

}

}
?>
