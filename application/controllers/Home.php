<?php
include('smtp/PHPMailerAutoload.php');
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {

    public function __construct() {
        parent::__construct(); 
        $this->load->database();
        $this->load->helper(array('form', 'url','html'));
        $this->load->helper('date');
        $this->load->library('form_validation','email');
        $this->load->model('Gsr');
        $this->load->model('Payment_model');
        $this->load->model('Admin_model');
        $this->load->model('Shopnship_model');
        $this->load->library('session');
     }

     public function shippingcalculator() {
        $packageCost['title'] = $this->Admin_model->getshippingcalsec1();
        $packageCost['content'] = $this->Admin_model->getshippingcalsec2();

      if(isset($_POST['submit'])) {
        $postData =  array (
          'from_countries' => $this->input->post('from_countries') , 
          'to_country' =>     $this->input->post('to_country') , 
          'package_weight' => $this->input->post('package_weight') , 
          'box_length' =>     $this->input->post('box_length') , 
          'box_width' =>      $this->input->post('box_width') , 
          'box_height' =>     $this->input->post('box_height')
        );

        $package_volume_weight = ($postData['box_length']*$postData['box_width']*$postData['box_height']) /5000; 

          if($package_volume_weight > $postData['package_weight']) {
              $postData['package_weight'] = $package_volume_weight;
          }
        $getPackageDetails   = $this->Admin_model->getShipmentDetails($postData);
       
        if(!empty($getPackageDetails))  {
            if($getPackageDetails->sp_unit_price == 1) {

         $packageCost = array (
              'sp_dhl_price'=>$getPackageDetails->sp_dhl_price*$postData['package_weight'],
              'sp_fedex_price'=>$getPackageDetails->sp_fedex_price*$postData['package_weight']
            );
              
            } else  {
               
               $packageCost = array (
                  'sp_dhl_price'=>$getPackageDetails->sp_dhl_price,
                  'sp_fedex_price'=>$getPackageDetails->sp_fedex_price
                );
            }
        } else {
            
            $packageCost = 'Package weight is more than 100 kg';
          }
   $get_country_details = $this->Admin_model->shipmentCountries($postData['from_countries']);
      } else {
            $packageCost = '';            
          }
          $data['high'] ='4';
          $data['meta_desc'] = "Explore top brands for shipping from China to USA. Partner with Global Shippers for efficient, dependable, & budget-friendly delivery services. Ship with us now!";
        $data['meta_key'] ="shipping from China to Usa";
        $data['meta_title']="Shipping from China to USA | Ship With US | GLOBAL SHIPPERS";
        $data['canonical_tags'] ="https://globalshippersrwanda.com/shipping-calculator";
          $data['data'] = $this->Admin_model->getshipping();
     	$this->load->view('cms/header',$data);
      $this->load->view('shipping-calculator',$packageCost,$data);
      $this->load->view('cms/footer'); 
     } 

     public function homepage() {
        $data['value'] = $this->Admin_model->gethomepagecmsdata();
        $data['high'] = '1';
        $data['canonical_tags'] ="https://globalshippersrwanda.com/";
        $data['meta_title'] = "Best International Shipping Company in USA | GLOBAL SHIPPERS";
        $data['meta_desc'] = "Global Shippers is the trusted international shipping companies in USA. Our experienced team ensures hassle-free shipping, from packaging to customs clearance.";
        $data['meta_key'] ="international shipping company, international shipping services, international shipping USA, international shipping companies in USA, best international shipping company";
        $this->load->view('homepage/header',$data);
        $this->load->view('homepage/homepage');
        $this->load->view('homepage/footer'); 
     }  

     public function shipcalc() {
     	  if(isset($_POST['submit'])) {
        $postData =  array (
          'from_countries' => $this->input->post('from_countries') , 
          'to_country' =>     $this->input->post('to_country') , 
          'package_weight' => round($this->input->post('package_weight')) , 
          'box_length' =>     $this->input->post('box_length') , 
          'box_width' =>      $this->input->post('box_width') , 
          'box_height' =>     $this->input->post('box_height')
        );

        $package_volume_weight = ($postData['box_length']*$postData['box_width']*$postData['box_height']) /5000 ; 

          if($package_volume_weight > $postData['package_weight']) {
              $postData['package_weight'] = round($package_volume_weight);
          }
        $getPackageDetails   = $this->Admin_model->getShipmentDetails($postData);
       
        if(!empty($getPackageDetails))  {
            if($getPackageDetails->sp_unit_price == 1) {

         $packageCost = array (
              'sp_dhl_price'=>$getPackageDetails->sp_dhl_price*$postData['package_weight'],
              'sp_fedex_price'=>$getPackageDetails->sp_fedex_price*$postData['package_weight']
            );
              
            } else  {
               
               $packageCost = array (
                  'sp_dhl_price'=>$getPackageDetails->sp_dhl_price,
                  'sp_fedex_price'=>$getPackageDetails->sp_fedex_price
                );
            }
        } else {
            
            $packageCost = 'Package weight is more than 100 kg';
          }
   $get_country_details = $this->Admin_model->shipmentCountries($postData['from_countries']);
      } else {
            $packageCost = '';            
          }
          echo json_encode($packageCost);
     }

     public function restrictions() {
         
      $data['ressec1'] = $this->Admin_model->getrestrictiondata_section1();
      $data['ressec2'] = $this->Admin_model->getrestrictiondata_section2();
      $data['high'] = '8';
      $data['meta_title'] = " ";
      $data['meta_desc'] = " ";
      $data['meta_key'] =" ";
      $data['canonical_tags'] ="https://globalshippersrwanda.com/restrictions";
      $this->load->view('cms/header',$data);
      $this->load->view('cms/restrictions',$data);
      $this->load->view('cms/footer'); 
     }
    public function helpcentre() {
        // $data['title'] = $this->Admin_model->gethelpsec1();
        // $data['record'] = $this->Admin_model->gethelpsec2();
        $data['high'] = "";
        $data['category'] = $this->Admin_model->gethelpcentredatawithid();
      foreach ($data['category'] as $key => $value) {
            $id =  $value->cat_id;
        $data['record'] = $this->Admin_model->gethelpcentreqa($id);
        $response[$id] = $data['record'];
           
          }  
          $data['response'] = $response;
       
          $this->load->view('cms/header',$data);
          $this->load->view('cms/help-centre',$data);
          $this->load->view('cms/footer'); 
     }
     public function faq() {
             
        $data['title'] = $this->Admin_model->getfaqsec1();
        $data['desc'] = $this->Admin_model->getfaqsec2();
        $data['high'] ='9';
        $data['meta_title'] = "";
        $data['meta_desc'] = "";
        $data['meta_key'] ="";
        $data['canonical_tags'] ="https://globalshippersrwanda.com/faq";
          $this->load->view('cms/header',$data);
          $this->load->view('cms/faq',$data);
          $this->load->view('cms/footer'); 
     }

     public function blog() {
        $data['title'] = $this->Admin_model->getblogsec1();
        $data['blog'] = $this->Admin_model->getblogsec2();
        $data['high']='10';
        $data['meta_title'] = "";
        $data['meta_desc'] = "";
        $data['meta_key'] ="";
        $data['canonical_tags'] = "https://globalshippersrwanda.com/blog";
          $this->load->view('cms/header',$data);
          $this->load->view('cms/blog',$data);
          $this->load->view('cms/footer'); 
     }

     public function consolidation() {
            
        $data['consec1'] = $this->Admin_model->getconsolidationsec1();
        $data['consec2'] = $this->Admin_model->consolidationlistsec2();
        $data['consec3'] = $this->Admin_model->getconsolidationsec3();
        $data['consec4'] = $this->Admin_model->consolidationlistsec4();
        $data['high'] = '';
        $data['meta_title'] = "";
        $data['meta_desc'] = "";
        $data['meta_key'] ="";
        $data['canonical_tags'] ="https://globalshippersrwanda.com/consolidation";
          $this->load->view('cms/header',$data);
          $this->load->view('cms/consolidation',$data);
          $this->load->view('cms/footer'); 
     }


     public function howitworks() {
             
        $data['title'] = $this->Admin_model->gethowitworkssec1();
        $data['desc'] = $this->Admin_model->gethowitworkssec2();
        $data['high'] = '3';
        $data['meta_desc'] = "Get International package delivery services in USA from Global Shippers. We give the best cost-effective international shipping & packaging services worldwide.";
        $data['meta_key'] ="international package delivery, package delivery services";
        $data['meta_title']="Package Delivery Services in USA | HOW IT WORKS";
        $data['canonical_tags'] ="https://globalshippersrwanda.com/how-it-works";
          $this->load->view('cms/header',$data);
          $this->load->view('cms/how-it-works',$data);
          $this->load->view('cms/footer'); 
     }

     public function aboutus() {
             
        $data['sec1'] = $this->Admin_model->getaboutussec1();
        $data['sec2'] = $this->Admin_model->getaboutussec2();
        $data['sec3'] = $this->Admin_model->getaboutussec3();
        $data['sec4'] = $this->Admin_model->getaboutussec4();
        $data['sec5'] = $this->Admin_model->getaboutussec5();
        // $data['sec6'] = $this->Admin_model->getaboutussec6();
        // $data['sec7'] = $this->Admin_model->getaboutussec7();
        $data['high'] = '2';
        $data['meta_desc'] = "We are one of the trusted  brands to provide best international shipping & package forwarding service in USA. Specialise in shipping & secure packaging.";
        $data['meta_key'] ="international package shipping, package forwarding service";
        $data['meta_title']="International Package Shipping Services in USA | ABOUT US";
        $data['canonical_tags'] ="https://globalshippersrwanda.com/about-us";
          $this->load->view('cms/header',$data);
          $this->load->view('cms/about-us',$data);
          $this->load->view('cms/footer'); 
     }
     public function terms(){
        $data['high'] ='';
        $data['meta_title'] = "";
        $data['meta_desc'] = "";
        $data['meta_key'] ="";
        $data['canonical_tags'] ="https://globalshippersrwanda.com/terms";
        $data['terms'] = $this->Gsr->displayterms();
        $this->load->view('cms/header',$data);
        $this->load->view('cms/terms',$data);
        $this->load->view('cms/footer');
     }
     public function privacy(){
        $data['high'] ='';
        $data['meta_title'] = "";
        $data['meta_desc'] = "";
        $data['meta_key'] ="";
        $data['canonical_tags'] ="https://globalshippersrwanda.com/privacy";
        $data['privacy'] = $this->Gsr->displayprivacy();
        $this->load->view('cms/header',$data);
        $this->load->view('cms/privacy',$data);
        $this->load->view('cms/footer');
     }

    public function dashboard()	{
        if($this->session->userdata('id')) { 
            $user_id = $this->session->userdata('id');
           
            if(is_array($user_id)){
              $user_id = $user_id['user_id'];
            }
            $data['order_count'] = $this->Gsr->order_count($user_id); 
            $data['noti_count']=$this->Gsr->count_notification($user_id);
            $data['address'] = $this->Admin_model->display_address();
            $data['assis_order_count'] = $this->Gsr->assisted_order_count($user_id);
            $data['inter_order_count'] = $this->Gsr->international_order_count($user_id);
            $data['email'] = $this->Gsr->users_details();
            $data['high'] = '4';
                $this->load->view('sidebar_with_header.php',$data);
                $this->load->view('dashboard',$data);
                $this->load->view('footer');
        }   else {
             return redirect('login');
        }
        
        
    }
    public function assisted_create_order(){
        $user_id= $this->session->userdata('id');
         $data['add'] = $this->Shopnship_model->display_address($user_id);
        $data['email'] = $this->Gsr->users_details();
        $data['adminemail'] = $this->Gsr->getadminemail();
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
        $data['adminemail'] = $this->Gsr->getadminemail();
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
      $data['canonical_tags'] ="https://globalshippersrwanda.com/login";
        $this->load->view('head',$data);
        $this->load->view('login');
    }

    public function membership(){
        $data['pay'] = $this->Payment_model->display_plan_membership();
        $user_id = $this->session->userdata('id');
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
        $data['list'] = $this->Gsr->fetch_name($user_id);
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
        $user_id = $this->session->userdata('id');
        $id = $this->uri->segment(3);
       $result = $this->Gsr->delete_nofification($id, $user_id);
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
          if(is_array($user_id)){
              $user_id = $user_id['user_id'];
            }
            $data['email'] = $this->Gsr->users_details();
            $data['list'] = $this->Gsr->fetch_name($user_id);
            $data['plan']  = $this->Payment_model->profile_display_plan($user_id);
            $data['profile'] = $this->Gsr->display_image($user_id);
            $data['add_data'] = $this->Gsr->display_profiledata($user_id);
            $this->load->view('header_without_sidebar.php',$data);
            $this->load->view('profile',$data);
            $this->load->view('footer');
        }
        else{
            return redirect('login');
        } 
    }

    public function upload_photo()
    {
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

   public function change_upload_photo(){
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
    redirect('users/change-password');
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
            'phone' => $this->input->post('phone'),
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
            $user_id=$this->session->userdata('id');
          $id= $this->input->post('id');
          $data = array(
             'email' => $this->input->post('email')
           );
           $query = $this->Gsr->update_email($data,$user_id);
           if($query == True)
           {
               redirect('profile', 'refresh');
           }
           else{
               redirect('profile', 'refresh');
           }
              
            }
            public function update_phone(){
                $user_id=$this->session->userdata('id');
                $data = array(
                   'phone' => $this->input->post('phone')
                 );
                 $query = $this->Gsr->update_phone($data,$user_id);
                 if($query == True)
                 {
                     redirect('profile', 'refresh');
                 }
                 else{
                     redirect('profile', 'refresh');
                 }
            }
            public function  update_address(){
                $user_id=$this->session->userdata('id');
                $data = array(
                   'address' => $this->input->post('edit_address')
                 );
                 $query = $this->Gsr->update_address($data,$user_id);
                 if($query == True)
                 {
                     redirect('profile', 'refresh');
                 }
                 else{
                     redirect('profile', 'refresh');
                 }  
            }
            public function testmail() {
             // $this->load->library('email');
                $email_config = Array(
                            'protocol'  => 'smtp',
                            'smtp_host' => 'ssl://smtp.googlemail.com',
                            'smtp_port' => '465',
                            'smtp_user' => 'globalshippersrwanda@gmail.com',
                            'smtp_pass' => 'qpqvzvtxjekvdzli',
                            'mailtype'  => 'html',
                            'starttls'  => true,
                            'newline'   => "\r\n"
                        );
                $this->load->library('email', $email_config);
               $message = "
                   <html>
                     <head>
                       <title>your title</title>
                     </head>
                     <body>
                       <p>Hello Sir,</p>
                       <p>Your message</p>
                     </body>
                   </html>";

                 $this->email->from('globalshippersrwanda@gmail.com', 'name');
                 $this->email->to('globalshippersrwanda@gmail.com');

                 $this->email->subject('email subject');
                 $this->email->message($message);
                 if ($this->email->send()) {
                   print "success";
                 } else {

                  // echo $this->email->print_debugger();
                 }
                // prepare emaill->send();
            } 

    public function shopnship_create_order(){
        $user_id = $this->session->userdata('id');
        $data['add'] = $this->Shopnship_model->display_address($user_id);
        $data['email'] = $this->Gsr->users_details();
        $data['adminemail'] = $this->Gsr->getadminemail();
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
      
      $adminemail['adminmail'] = $this->Gsr->getadminemail();
      $data['canonical_tags'] ="https://globalshippersrwanda.com/signup";
        $this->load->view('head',$data);
        $this->load->view('signup',$adminemail);
       // $this->load->view('footer');
    }

    // public function sendEmail() {
    //       $config = array(
    //     "protocol"  => "smtp",
    //     "smtp_host" => "smtp.gmail.com",
    //     "smtp_user" => "globalshippersrwanda@gmail.com",
    //     "smtp_pass" => "tmnt1234",
    //     "smtp_port" => 587,
    //     "smtp_crypto"=> "tls"
    //     );

    //     $this->load->library("email");
    //     $this->email->initialize($config);

    //     $this->email->from("globalshippersrwanda@gmail.com");
    //     $this->email->to("testing@mailinator.com");
    //     $this->email->message("Hello");
    //     $this->email->subject("Test");
    //     $this->email->send(); 
    //     if ($this->email->send()) {
    //       echo 'message delivered';
    //     } else {
    //       echo 'message not delivered';    
    //     }
        
    // }


    public function sendmail($to, $subject, $message) {

        $html = '<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Email Template</title>
    <style type="text/css">
      @media screen and (max-width: 600px),
      screen and (max-device-width: 600px) {
        body {
          margin: 0 !important;
          padding: 0 !important;
        }
      }
      @media screen and (-webkit-min-device-pixel-ratio: 0) and (max-width: 600px) {
        body {
          margin: 0 !important;
          padding: 0 !important;
        }
      }
  a{
  color: #000;
  text-decoration:none;
  }
    </style>
  </head>
  <body style="margin: 0; padding: 0; border: 0;">
    <table width="100%" align="center" cellpadding="0" cellspacing="0"
      border="0" dir="ltr" style="background-color: rgb(255, 255, 255);">
      <tbody>
        <tr>
          <td align="center" valign="top"
            style="margin: 0; padding: 0px 15px 0px;">
            <table width="600" align="center" border="0" cellspacing="0"
              cellpadding="0" style="width: 600px;">
              <tbody>
                <tr>
                  <td align="center" valign="center"
                    style="margin: 0; background-color: #ffffff; background-size: cover; background-repeat: no-repeat; background-position: center center; padding: 30px 15px 40px;">
                    <table align="center" border="0" cellpadding="0"
                      cellspacing="0">
                      <tbody>
                        <tr>
                          <td valign="top" align="center"
                            style="padding: 0px; margin: 0px;">
                            <a href="#"><img src="https://globalshippersrwanda.com/assets/cms/img/logo-black.png" width="100"
                                style="border: none; font-weight: bold; max-height: 100px; height: auto; line-height: 100%; outline: none; text-decoration: none; text-transform: capitalize; border-width: 0px; border-style: none; border-color: transparent; font-size: 12px; display: block;"></a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
                <tr> 
                  <td align="center" valign="top"
                    style="margin: 0; padding: 0;">
                    <table width="100%" align="center" border="0"
                      cellpadding="0" cellspacing="0" bgcolor="#ffffff">
                      <tbody>
                       <tr>   
                          <td align="left" valign="top"
                            style="margin: 0px; padding: 30px 30px 10px 30px; background-color: rgb(255, 255,
									255); font-size: 16px; font-family: "Lato", Arial, Helvetica,
                            sans-serif; line-height: 1.33;">
                            <span style="font-family: "Lato", Arial, Helvetica,
                              sans-serif; color: #000000; font-size: 20px;">
                              <span style="font-weight: 700;"></span>
                            </span>
                          </td>

                        </tr>
                        <tr>   
                          <td align="left" valign="top"
                            style="margin: 0px; padding: 30px 30px 10px 30px; background-color: rgb(255, 255,
									255); font-size: 16px; font-family: "Lato", Arial, Helvetica,
                            sans-serif; line-height: 1.33;">
                            <span style="font-family: "Lato", Arial, Helvetica,
                              sans-serif; color: #000000; font-size: 20px;">
                              <span style="font-weight: 700;">'.$message['msg'].'</span>
                            </span>
                          </td>

                        </tr>

                      </tbody>
                    </table>
                    <table align="center" border="0" cellpadding="0"
                      cellspacing="0"
                      style="border-spacing: 0; margin: 0; padding: 0; border-spacing: 0px; -webkit-border-horizontal-spacing: 0px; -webkit-border-vertical-spacing: 0px; width: 100%">
                      <tr>
                        <td style="background: #ffffff;">
                          <table width="600" align="center" border="0"
                            cellpadding="0" cellspacing="0">
                            <tbody>
                              <tr>
                                <td valign="top" align="center"
                                  style="padding: 30px 30px 20px 30px; font-family: "Lato"
                                  ,Arial, Helvetica, sans-serif; margin: 0px;
                                  font-size: 40px; color: #000000; font-weight:
                                  bold;">
                                 
                                </td>
                              </tr>
                              <tr>
                                <td valign="top" align="center"
                                  style="padding: 0px 30px 10px 30px; margin: 0px; font-size: 15px; line-height: 23px; color: #000000;">
                                  <span style="font-family: "Lato" ,Arial,
                                    Helvetica, sans-serif; color: #000000;
                                    font-size: 16px;">
                                   
                                  </span>
                                </td>
                              </tr>
                              <tr>
                                <td valign="top" align="center"
                                  style="padding: 10px 30px 40px 30px; margin: 0px; font-size: 15px; line-height: 23px; color: #fff;">
                                  <a href="https://globalshippersrwanda.com/"
                                    style="padding: 10px 20px; color:#ffffff; font-size: 16px; font-family: "Lato"
                                    ,Arial, Helvetica, sans-serif; color:
                                    #ffffff; background-color: #000000;
                                    border-color: #000000; text-decoration:
                                    none; border-radius: 4px;">Visit Website</a>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>

                <tr>
                  <td style="background:#ffffff;">
                    <table width="600">
                      <tr>
                        <td align="center"
                          style="padding: 20px 0px 10px 0; background:#ffffff; border-top: 1px solid #d1d1d1;">
                          <table width="600" align="center" border="0"
                            cellpadding="0" cellspacing="0">
                            <tbody>
                              <tr>
                                <td align="center" valign="top" nowrap
                                  style="margin: 0px; padding: 0; font-size: 16px; font-family: "Lato",
                                  Arial, Helvetica, sans-serif; line-height:
                                  22px;">
                                 
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                      <tr>
                        <td align="center"
                          style="padding: 0px 0px 20px 0; background:#ffffff;">
                          <table width="300" align="center" border="0"
                            cellpadding="0" cellspacing="0">
                            <tbody>
                              <tr>
                                <td align="center" valign="top" nowrap
                                  style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                  Arial, Helvetica, sans-serif;">
                                  <a href="https://globalshippersrwanda.com/privacy"
                                    style="color: #000000; font-weight: normal; font-family: "Lato",
                                    Arial, Helvetica, sans-serif;
                                    text-decoration: none;">
                                    <span style="font-family: "Lato", Arial,
                                      Helvetica, sans-serif; color: #000000;
                                      font-size: 14px; white-space: nowrap;
                                      line-height: 22px;">Privacy Policy</span>
                                  </a>
                                </td>
                                <td align="center" valign="top" nowrap
                                  style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                  Arial, Helvetica, sans-serif;">
                                  <a href ="https://globalshippersrwanda.com/about-us"
                                    style="color: #2e3233; font-weight: normal; font-family: "Lato",
                                    Arial, Helvetica, sans-serif;
                                    text-decoration: none;">
                                    <span style="font-family: "Lato", Arial,
                                      Helvetica, sans-serif; color: #000000;
                                      font-size: 14px; white-space: nowrap;
                                      line-height: 22px;">About Us</span>
                                  </a>
                                </td>
                                <td align="center" valign="top" nowrap
                                  style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                  Arial, Helvetica, sans-serif;">
                                  <a href="https://globalshippersrwanda.com/contact-us"
                                    style="color: #000000; font-weight: normal; font-family: "Lato",
                                    Arial, Helvetica, sans-serif;
                                    text-decoration: none;">
                                    <span style="font-family: "Lato", Arial,
                                      Helvetica, sans-serif; color: #000000;
                                      font-size: 14px; white-space: nowrap;
                                      line-height: 22px;">Contact US</span>
                                  </a>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
          </td>
        </tr>
      </tbody>
    </table>
  </body>
</html>';
          $mail = new PHPMailer(); 
          $mail->IsSMTP(); 
          $mail->SMTPAuth = true; 
          $mail->SMTPSecure = 'tls'; 
          $mail->Host = "mail.privateemail.com";
          $mail->Port = 587; 
          $mail->IsHTML(true);
          $mail->CharSet = 'UTF-8';
          //$mail->SMTPDebug = 2; 
          $mail->Username = EMAIL_SMTP_GOOGLE; 
          $mail->Password = PASSWORD_SMTP_GOOGLE;
          $mail->SetFrom("services@globalshippersrwanda.com");
          $mail->Subject = "Account confirmation for Successful Registration - GlobalshippersRwanda";
          $mail->Body =$html;
          $mail->AddAddress($to);
          $mail->SMTPOptions=array('ssl'=>array (
                            'verify_peer'=>false,
                            'verify_peer_name'=>false,
                            'allow_self_signed'=>false
                        ));
          
                    if(!$mail->Send()){
                        echo $mail->ErrorInfo;
                      }else{
                        return  'Sent';
                    }
        }

public function adminsendmail($adminto, $adminsubject, $adminmessage) {

  $html = '<!DOCTYPE html>
<html lang="en-US">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Email Template</title>
<style type="text/css">
@media screen and (max-width: 600px),
screen and (max-device-width: 600px) {
  body {
    margin: 0 !important;
    padding: 0 !important;
  }
}
@media screen and (-webkit-min-device-pixel-ratio: 0) and (max-width: 600px) {
  body {
    margin: 0 !important;
    padding: 0 !important;
  }
}
a{
color: #000;
text-decoration:none;
}
</style>
</head>
<body style="margin: 0; padding: 0; border: 0;">
<table width="100%" align="center" cellpadding="0" cellspacing="0"
border="0" dir="ltr" style="background-color: rgb(255, 255, 255);">
<tbody>
  <tr>
    <td align="center" valign="top"
      style="margin: 0; padding: 0px 15px 0px;">
      <table width="600" align="center" border="0" cellspacing="0"
        cellpadding="0" style="width: 600px;">
        <tbody>
          <tr>
            <td align="center" valign="center"
              style="margin: 0; background-color: #ffffff; background-size: cover; background-repeat: no-repeat; background-position: center center; padding: 30px 15px 40px;">
              <table align="center" border="0" cellpadding="0"
                cellspacing="0">
                <tbody>
                  <tr>
                    <td valign="top" align="center"
                      style="padding: 0px; margin: 0px;">
                      <a href="#"><img src="https://globalshippersrwanda.com/assets/cms/img/logo-black.png" width="100"
                          style="border: none; font-weight: bold; max-height: 100px; height: auto; line-height: 100%; outline: none; text-decoration: none; text-transform: capitalize; border-width: 0px; border-style: none; border-color: transparent; font-size: 12px; display: block;"></a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </td>
          </tr>
          <tr> 
            <td align="center" valign="top"
              style="margin: 0; padding: 0;">
              <table width="100%" align="center" border="0"
                cellpadding="0" cellspacing="0" bgcolor="#ffffff">
                <tbody>
                 <tr>   
                    <td align="left" valign="top"
                      style="margin: 0px; padding: 30px 30px 10px 30px; background-color: rgb(255, 255,
            255); font-size: 16px; font-family: "Lato", Arial, Helvetica,
                      sans-serif; line-height: 1.33;">
                      <span style="font-family: "Lato", Arial, Helvetica,
                        sans-serif; color: #000000; font-size: 20px;">
                        <span style="font-weight: 700;"></span>
                      </span>
                    </td>

                  </tr>
                  <tr>   
                    <td align="left" valign="top"
                      style="margin: 0px; padding: 30px 30px 10px 30px; background-color: rgb(255, 255,
            255); font-size: 16px; font-family: "Lato", Arial, Helvetica,
                      sans-serif; line-height: 1.33;">
                      <span style="font-family: "Lato", Arial, Helvetica,
                        sans-serif; color: #000000; font-size: 20px;">
                        <span style="font-weight: 700;">'.$adminmessage['msg'].'</span>
                      </span>
                    </td>

                  </tr>

                </tbody>
              </table>
              <table align="center" border="0" cellpadding="0"
                cellspacing="0"
                style="border-spacing: 0; margin: 0; padding: 0; border-spacing: 0px; -webkit-border-horizontal-spacing: 0px; -webkit-border-vertical-spacing: 0px; width: 100%">
                <tr>
                  <td style="background: #ffffff;">
                    <table width="600" align="center" border="0"
                      cellpadding="0" cellspacing="0">
                      <tbody>
                        <tr>
                          <td valign="top" align="center"
                            style="padding: 30px 30px 20px 30px; font-family: "Lato"
                            ,Arial, Helvetica, sans-serif; margin: 0px;
                            font-size: 40px; color: #000000; font-weight:
                            bold;">
                           
                          </td>
                        </tr>
                        <tr>
                          <td valign="top" align="center"
                            style="padding: 0px 30px 10px 30px; margin: 0px; font-size: 15px; line-height: 23px; color: #000000;">
                            <span style="font-family: "Lato" ,Arial,
                              Helvetica, sans-serif; color: #000000;
                              font-size: 16px;">
                             
                            </span>
                          </td>
                        </tr>
                        <tr>
                          <td valign="top" align="center"
                            style="padding: 10px 30px 40px 30px; margin: 0px; font-size: 15px; line-height: 23px; color: #fff;">
                            <a href="https://globalshippersrwanda.com/"
                              style="padding: 10px 20px; color:#ffffff; font-size: 16px; font-family: "Lato"
                              ,Arial, Helvetica, sans-serif; color:
                              #ffffff; background-color: #000000;
                              border-color: #000000; text-decoration:
                              none; border-radius: 4px;">Visit Website</a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </table>
            </td>
          </tr>

          <tr>
            <td style="background:#ffffff;">
              <table width="600">
                <tr>
                  <td align="center"
                    style="padding: 20px 0px 10px 0; background:#ffffff; border-top: 1px solid #d1d1d1;">
                    <table width="600" align="center" border="0"
                      cellpadding="0" cellspacing="0">
                      <tbody>
                        <tr>
                          <td align="center" valign="top" nowrap
                            style="margin: 0px; padding: 0; font-size: 16px; font-family: "Lato",
                            Arial, Helvetica, sans-serif; line-height:
                            22px;">
                           
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
                <tr>
                  <td align="center"
                    style="padding: 0px 0px 20px 0; background:#ffffff;">
                    <table width="300" align="center" border="0"
                      cellpadding="0" cellspacing="0">
                      <tbody>
                        <tr>
                          <td align="center" valign="top" nowrap
                            style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                            Arial, Helvetica, sans-serif;">
                            <a href="https://globalshippersrwanda.com/privacy"
                              style="color: #000000; font-weight: normal; font-family: "Lato",
                              Arial, Helvetica, sans-serif;
                              text-decoration: none;">
                              <span style="font-family: "Lato", Arial,
                                Helvetica, sans-serif; color: #000000;
                                font-size: 14px; white-space: nowrap;
                                line-height: 22px;">Privacy Policy</span>
                            </a>
                          </td>
                          <td align="center" valign="top" nowrap
                            style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                            Arial, Helvetica, sans-serif;">
                            <a href ="https://globalshippersrwanda.com/about-us"
                              style="color: #2e3233; font-weight: normal; font-family: "Lato",
                              Arial, Helvetica, sans-serif;
                              text-decoration: none;">
                              <span style="font-family: "Lato", Arial,
                                Helvetica, sans-serif; color: #000000;
                                font-size: 14px; white-space: nowrap;
                                line-height: 22px;">About Us</span>
                            </a>
                          </td>
                          <td align="center" valign="top" nowrap
                            style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                            Arial, Helvetica, sans-serif;">
                            <a href="https://globalshippersrwanda.com/contact-us"
                              style="color: #000000; font-weight: normal; font-family: "Lato",
                              Arial, Helvetica, sans-serif;
                              text-decoration: none;">
                              <span style="font-family: "Lato", Arial,
                                Helvetica, sans-serif; color: #000000;
                                font-size: 14px; white-space: nowrap;
                                line-height: 22px;">Contact US</span>
                            </a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
        </tbody>
      </table>
    </td>
  </tr>
</tbody>
</table>
</body>
</html>';



  
                  $mail = new PHPMailer(); 
                  $mail->IsSMTP(); 
                  $mail->SMTPAuth = true; 
                  $mail->SMTPSecure = 'tls'; 
                  $mail->Host = "mail.privateemail.com";
                  $mail->Port = 587; 
                  $mail->IsHTML(true);
                  $mail->CharSet = 'UTF-8';
                  // $mail->SMTPDebug = 2; 
                 $mail->Username = EMAIL_SMTP_GOOGLE;
                 $mail->Password = PASSWORD_SMTP_GOOGLE;
                 $mail->SetFrom("services@globalshippersrwanda.com");
                  $mail->Subject = $adminsubject;
                  $mail->Body =$html;
                  $mail->AddAddress($adminto);
                  $mail->SMTPOptions=array('ssl'=>array (
                      'verify_peer'=>false,
                      'verify_peer_name'=>false,
                      'allow_self_signed'=>false
                  ));
              if(!$mail->Send()){
                  echo $mail->ErrorInfo;
              }else{
                  return  'Sent';
              }
  }
        

    public function signup_insert(){ 
      $captcha_response = $this->input->post('g-recaptcha-response');
if($captcha_response != ''){
$keySecrete  = '6LefsQkqAAAAAI5rcqxQk6mdK6b2CcjO2Yr3pTj-';
$check  = array(
  'secret' => $keySecrete,
  'response' => $this->input->post('g-recaptcha-response')
);
$startProcess = curl_init();
curl_setopt($startProcess, CURLOPT_URL,"https://www.google.com/recaptcha/api/siteverify");
curl_setopt($startProcess, CURLOPT_POST,true);
curl_setopt($startProcess, CURLOPT_POSTFIELDS,http_build_query($check));
curl_setopt($startProcess,CURLOPT_SSL_VERIFYPEER,false);
curl_setopt($startProcess,CURLOPT_RETURNTRANSFER,true);
$receiveData = curl_exec($startProcess);
$finalResponse = json_decode($receiveData,true);
if($finalResponse){
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
      $adminemail= $this->input->post('adminemail');
      $data = [
          'fname' => $this->input->post('fname'),
          'lname' => $this->input->post('lname'),
          'email' => $this->input->post('email'),
          'phone' => $this->input->post('phone'),
          'password' => $this->input->post('pswd'),
          'verification_key'=>$verification_key,
          'image' => 'public/uploads/images.png',
           'created_date' => date('Y-m-d H:i:s'),
         
      ];
      $datetime = strtotime($data['created_date']);
      $convertdate = date("d M,y",$datetime);
      $to = $data['email'];
      $subject  = 'Successful Registration on GlobalshippersRwanda';

      
      $id = $this->Gsr->signup_data($data);
     
      if($id>0){
        $message['msg'] = "<p>Dear ".$this->input->post('fname')." ".$this->input->post('lname')."
        <p>This is email verification mail from Login Register system. For complete registration process and login into system. First you want to verify you email by click this <a href='".base_url()."login' style='color:blue'>here</a></p>
          <p>We are thrilled to welcome you to GlobalshippersRwanda! We appreciate you taking the time to register on our platform, and we're excited to have you as part of our community.</p>
          <p>Your registration has been successful, and you can now access our website and all its features. You can log in using your registered email address and password.</p>
          <p>To get started, please take a few minutes to complete your profile by updating your profile information, setting up your account preferences, and exploring the various sections of our website.</p>
          <p>As a registered user, you will have access to:</p>
          <p>A personalized dashboard to manage your shipping needs
          Real-time quotes and tracking information for your shipments
          Ability to book and manage your shipments online
         Access to our online help center and support team
        Exclusive offers and promotions from our partners
        If you have any questions or need assistance with your account, please don't hesitate to reach out to our support team at services@globalshippersrwanda.com. We're here to help.
       </p>
       <p>Once again, thank you for registering with GlobalshippersRwanda. We look forward to serving you better.</p>
      <p>Best regards,</p>
     <p>The GlobalshippersRwanda Team</p>";
     $adminto = $adminemail;
     $adminsubject  = ' New User Registration on GlobalshippersRwanda';
     $adminmessage['msg'] = "<p>We are pleased to inform you that a new user has successfully registered on our website, GlobalshippersRwanda. The details of the new user are as follows:</p> 
     <p>Name: ".$data['fname']." ".$data['lname']."</p>
       <p>Email: ".$data['email']."</p>
     <p>Phone Number : ".$data['phone']."</p>
    <p>The user registered on our website at ".$convertdate.". Their profile information has been verified and is ready for review.</p>
    <p>As the website admin, you can log in to the dashboard to review and manage the user's profile, as well as monitor their activity on the website.
   </p>
    <p>Thank you for your time and efforts in maintaining our website.</p>
   <p>Best regards,</p>
    <p>The GlobalshippersRwanda Team</p>";

      }
      $this->adminsendmail($adminto, $adminsubject, $adminmessage);
      $testData = $this->sendmail($to, $subject, $message);
      
      if ($testData=='Sent') {
        $this->session->set_flashdata('message', 'Thank you for registration. Please confirm your email to activate the account.Activation link mail will sent to the customer once the user click on the activation link');
        redirect('signup');
        } else {
         print "Could not send email, please try again later";
         } 
  }
  else{
      $this->signup();
  }
}
else{
  $this->signup();
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
              
                $data['message'] = '<h1 align ="center">Your email has been successfully verified, now you can login from <a href="'.base_url().'login">here</a></h1>';

            }
            else{
                $data['message'] = '<h1 align ="center">Invalid Links</h1>';
            }
           // $this->load->view('header');
            $this->load->view('email_verification' ,$data);
            //$this->load->view('footer');
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
                  $this->session->set_flashdata('message','You are login successfully !');
                    redirect('dashboard');
                }
                else{
                    $this->session->set_flashdata('message','Your email or password invalid !');
                    redirect('login');
                }
        } else{
            $this->login();
        }
    }


    public function googlelogin(){
      include_once APPPATH . "third_party/google-api-php-client-8/vendor/autoload.php";
      $google_client = new Google_Client();
     // echo "<pre>";
      $google_client->setClientId('253918588685-eegd7fdsss28sguvrno3uf2cam4r31fh.apps.googleusercontent.com');
      $google_client->setClientSecret('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'); 
      $google_client->setRedirectUri('http://dev.globalshippersrwanda.com/Home/googlelogin');
      $google_client->addScope('email');
    //$google_client->addScope('profile');


      if(isset($_GET["code"]))
       {
      $token = $google_client->authenticate($_GET["code"]);
    if(!isset($token["error"]))
    {
   $google_client->setAccessToken($token['access_token']);
   $this->session->set_userdata('access_token', $token['access_token']);
   $google_service = new Google_Service_Oauth2($google_client);
   //echo "<pre>";
   $data = $google_service->userinfo->get();
  $current_datetime = date('Y-m-d H:i:s');
  if($this->Gsr->Is_already_register($data['id']))
  {
 //update data
 $user_data = array(
  'fname' => $data['given_name'],
  'lname' => $data['family_name'],
  'email' => $data['email'],
  'updateddate' => $current_datetime
 );
$this->Gsr->update_user_data($user_data,$data['id']);
}
else
{
 //insert data
 $user_data = array(
  'id' => $data['id'],
  'fname' => $data['given_name'],
  'lname' => $data['family_name'],
  'email' => $data['email'],
  'createddate' => $current_datetime
  );
$this->Gsr->insert_user_data($user_data);
}
$this->session->set_userdata('user_data', $user_data);
}
} else {
//echo "not working";die;
}
$login_button = '';
if(!$this->session->userdata('access_token'))
{
$login_button = '<a href="'.$google_client->createAuthUrl().'"><img src="'.base_url().'assets/imgs/googlelogin.png"  width="100px" height="100px"/></a>';
$data['login_button'] = $login_button;
$this->load->view('google-login', $data);
}
else
{
 $this->load->view('google-login', $data);
}
}
function googlelogout()
{
$this->session->unset_userdata('access_token');
$this->session->unset_userdata('user_data');
$this->session->unset_userdata('id'); 
redirect('Home/googlelogin');
}

    public function logout(){
        $this->session->unset_userdata('id');
        return redirect('login');
    } 
    public function forgot(){
       // $this->load->view('header');
        $this->load->view('forgot');
       // $this->load->view('footer');
    }  
     public function recover(){
       // $this->load->view('header');
        $this->load->view('forgot');
        //$this->load->view('footer');
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
        $data['list'] = $this->Gsr->fetch_name($user_id);
        $this->load->view('header_without_sidebar',$data);
        $this->load->view('invite-friends');
        $this->load->view('footer');
    }
    public function address_book(){
        $data['email'] = $this->Gsr->users_details();
        $data['noti_count']=$this->Gsr->count_notification($user_id);
        $data['list'] = $this->Gsr->fetch_name($user_id);
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
    $user_id = $this->session->userdata('id');
    $data['email'] = $this->Gsr->users_details();
    $data['list'] = $this->Gsr->fetch_name($user_id);
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
