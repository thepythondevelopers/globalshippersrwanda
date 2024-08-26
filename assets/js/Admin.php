<?php
use Dompdf\Dompdf;
class Admin extends CI_Controller {
 
    public function __construct() {
        parent::__construct(); 
        $this->load->database();
        $this->load->helper(array('form', 'url','html'));
        $this->load->model('Admin_model');
        $this->load->model('Payment_model');
        $this->load->model('Shopnship_model');
        $this->load->library('form_validation');
    }

    public function homepage() {
         if($this->session->userdata('id')) {
            if($this->input->post('submit')) {
               $data = $this->input->post();
                unset($data['submit']);
               $this->Admin_model->insertcmsdata($data); 
            }
        $order['count']   = $this->Admin_model->count_notification();
        $order['data']    = $this->Admin_model->gethomepagecmsdata();

                $this->load->view('admin/heads',$order);                
                $this->load->view('admin/homepage');                
                $this->load->view('admin/footer');
        }
    }
    public function how_it_works() {
        $order['count']   = $this->Admin_model->count_notification();
                $this->load->view('admin/heads',$order); 
                $this->load->view('admin/how-it-works');            
                $this->load->view('admin/footer');
    }
    public function howitworksinsertsec1(){
        $data = [
            'title' => $this->input->post('sec1_title1'),
            'details' => $this->input->post('sec1_details'),
            'createddate'   =>date('Y-m-d H:i:s')
        ];
        $result= $this->Admin_model->howitworksec1($data);
        echo json_encode($result);
    }
    public function howitworksinsertsec2(){
        $count = count($this->input->post('sec2_title'));
        // echo "<pre>";
        // print_r($count);
        // exit;
        for($i=0;$i<$count;$i++){
            $data = [
                'title'     => $this->input->post('sec2_title'.'['.$i.']'),
                'description'    => $this->input->post('sec2description'.'['.$i.']'),
                'createddate'   =>date('Y-m-d H:i:s')
            ];
            $image =$_FILES['imgpath']['name'][$i];
            $tmpname =$_FILES['imgpath']['tmp_name'][$i];
            $extension=pathinfo($image, PATHINFO_EXTENSION);
            $rand = rand(0,100000);
            $rename = 'public/uploads/'.strtotime(date('Y-m-d')).$rand;
            $data['imgpath'] = $rename;
        
        if(move_uploaded_file($tmpname, $data['imgpath'])){
            echo "The file ". $data['imgpath']. " has been uploaded.";
        }

     else {
                echo "Sorry, there was an error uploading your file.";
               }
               $result= $this->Admin_model->howitworksec2($data);
        }
       
       
        echo json_encode($result);
    }
    public function about_us() {
        $order['count']   = $this->Admin_model->count_notification();
                $this->load->view('admin/heads',$order);
                $this->load->view('admin/about-us');                
                $this->load->view('admin/footer');
    }
    public function aboutusinsertsec1(){
        $data = [
            'title' => $this->input->post('sec1_title1'),
            'description' => $this->input->post('sec1_details'),
            'createddate'   =>date('Y-m-d H:i:s')
        ];
        $image =$_FILES['banner']['name'];
            $tmpname =$_FILES['banner']['tmp_name'];
            $extension=pathinfo($image, PATHINFO_EXTENSION);
            $rand = rand(0,100000);
            $rename = 'public/uploads/'.strtotime(date('Y-m-d')).$rand;
            $data['imgpath'] = $rename;
        
        if(move_uploaded_file($tmpname, $data['imgpath'])){
            echo "The file ". $data['imgpath']. " has been uploaded.";
        }

     else {
                echo "Sorry, there was an error uploading your file.";
               }
        $result = $this->Admin_model->aboutusinsertsec1($data);
        echo json_encode($result);
    }

    public function aboutusinsertsec2(){
        $data = [
            'title' => $this->input->post('sec2title'),
            'heading' => $this->input->post('sec2heading'),
            'description' => $this->input->post('sec2desc'),
            'createddate'   =>date('Y-m-d H:i:s')
        ];
        $image =$_FILES['imgpath']['name'];
            $tmpname =$_FILES['imgpath']['tmp_name'];
            $extension=pathinfo($image, PATHINFO_EXTENSION);
            $rand = rand(0,100000);
            $rename = 'public/uploads/'.strtotime(date('Y-m-d')).$rand;
            $data['imgpath'] = $rename;
        
        if(move_uploaded_file($tmpname, $data['imgpath'])){
            echo "The file ". $data['imgpath']. " has been uploaded.";
        }

     else {
                echo "Sorry, there was an error uploading your file.";
               }
        $result = $this->Admin_model->aboutusinsertsec2($data);
        echo json_encode($result);
    }

    public function aboutusinsertsec3(){
        $data =[
            'title' => $this->input->post('sec3_title'),
            'description'  => $this->input->post('sec3_des'),
            'createddate'   =>date('Y-m-d H:i:s')
        ];
        $result = $this->Admin_model->aboutusinsertsec3($data);
        echo json_encode($result);
    }

    public function aboutusinsertsec4(){
        $count = count($this->input->post('sec4title'));
        for($i=0;$i<$count;$i++){
            $data = [
                'title' => $this->input->post('sec4title'.'['.$i.']'),
                'description' => $this->input->post('sec4desc'.'['.$i.']'),
                'createddate'   =>date('Y-m-d H:i:s')
            ];
            $image =$_FILES['sec4imgpath']['name'][$i];
            $tmpname =$_FILES['sec4imgpath']['tmp_name'][$i];
            $extension=pathinfo($image, PATHINFO_EXTENSION);
            $rand = rand(0,100000);
            $rename = 'public/uploads/'.strtotime(date('Y-m-d')).$rand;
            $data['imgpath'] = $rename;
        
        if(move_uploaded_file($tmpname, $data['imgpath'])){
            echo "The file ". $data['imgpath']. " has been uploaded.";
        }

     else {
                echo "Sorry, there was an error uploading your file.";
               }
               $result = $this->Admin_model->aboutusinsertsec4($data);
        }
        
        echo json_encode($result);
       
    }
    public function aboutusinsertsec5(){
        $data = [
           // 'title' => $this->input->post('sec2title'),
            'title' => $this->input->post('sec5heading'),
            'description' => $this->input->post('sec5desc'),
            'createddate'   =>date('Y-m-d H:i:s')
        ];
        // echo "<pre>";
        //        print_r($data);
        //        exit;
    //     $image =$_FILES['imgpath']['name'];
    //         $tmpname =$_FILES['imgpath']['tmp_name'];
    //         $extension=pathinfo($image, PATHINFO_EXTENSION);
    //         $rand = rand(0,100000);
    //         $rename = 'public/uploads/'.strtotime(date('Y-m-d')).$rand;
    //         $data['imgpath'] = $rename;
        
    //     if(move_uploaded_file($tmpname, $data['imgpath'])){
    //         echo "The file ". $data['imgpath']. " has been uploaded.";
    //     }

    //  else {
    //             echo "Sorry, there was an error uploading your file.";
    //            }
               
        $result = $this->Admin_model->aboutusinsertsec5($data);
        echo json_encode($result);
    }

    public function aboutusinsertsec6(){
        $count = count($this->input->post('sec6title'));
        for($i=0;$i<$count;$i++){
            $data = [
                'title' => $this->input->post('sec6title'.'['.$i.']'),
                'description' => $this->input->post('sec6desc'.'['.$i.']'),
                'createddate'   =>date('Y-m-d H:i:s')
            ];
            $image =$_FILES['sec6imgpath']['name'][$i];
            $tmpname =$_FILES['sec6imgpath']['tmp_name'][$i];
            $extension=pathinfo($image, PATHINFO_EXTENSION);
            $rand = rand(0,100000);
            $rename = 'public/uploads/'.strtotime(date('Y-m-d')).$rand;
            $data['imgpath'] = $rename;
        
        if(move_uploaded_file($tmpname, $data['imgpath'])){
            echo "The file ". $data['imgpath']. " has been uploaded.";
        }

     else {
                echo "Sorry, there was an error uploading your file.";
               }
               $result = $this->Admin_model->aboutusinsertsec6($data);
        }
        
        echo json_encode($result);
       
    }

    public function aboutusinsertsec7(){
        $count = count($this->input->post('sec7title'));
        for($i=0;$i<$count;$i++){
            $data = [
                'title' => $this->input->post('sec7title'.'['.$i.']'),
                'description' => $this->input->post('sec7desc'.'['.$i.']'),
                'createddate'   =>date('Y-m-d H:i:s')
            ];
            $image =$_FILES['sec7imgpath']['name'][$i];
            $tmpname =$_FILES['sec7imgpath']['tmp_name'][$i];
            $extension=pathinfo($image, PATHINFO_EXTENSION);
            $rand = rand(0,100000);
            $rename = 'public/uploads/'.strtotime(date('Y-m-d')).$rand;
            $data['imgpath'] = $rename;
        
        if(move_uploaded_file($tmpname, $data['imgpath'])){
            echo "The file ". $data['imgpath']. " has been uploaded.";
        }

     else {
                echo "Sorry, there was an error uploading your file.";
               }
               $result = $this->Admin_model->aboutusinsertsec7($data);
        }
        
        echo json_encode($result);
       
    }


    public function restrictions() {
         if($this->session->userdata('id')){ 
            $order['count']   = $this->Admin_model->count_notification();
            $user_id = $this->session->userdata('id');
            $order['data']    = $this->Admin_model->getrestrictiondata_section2();
            $order['sec1data']    = $this->Admin_model->getrestrictiondata_section1();
            // echo "<pre>";
            // print_r($order['data']);
            // exit;
                $this->load->view('admin/heads', $order);                
                $this->load->view('admin/restrictions',$order);                
                $this->load->view('admin/footer'); 
        }
    }

    public function restriction_section2(){
        if($this->session->userdata('id')){ 
        $count = count($this->input->post('sec2_title'));
        for($i=0;$i<$count;$i++){
           
            $data =[
                'points'         => $this->input->post('points'.'['.$i.']'),
                'sec2_title'     => $this->input->post('sec2_title'.'['.$i.']'),
                'description'    => $this->input->post('description'.'['.$i.']'),
                'createddate'   =>date('Y-m-d H:i:s')
            ];
           
            $image =$_FILES['imgpath']['name'][$i];
            $tmpname =$_FILES['imgpath']['tmp_name'][$i];
            $extension=pathinfo($image, PATHINFO_EXTENSION);
            $rand = rand(0,100000);
            $rename = 'public/uploads/'.strtotime(date('Y-m-d')).$rand;
            $data['imgpath'] = $rename;
        
        if(move_uploaded_file($tmpname, $data['imgpath'])){
            echo "The file ". $data['imgpath']. " has been uploaded.";
        }

     else {
                echo "Sorry, there was an error uploading your file.";
               }
              
            $result = $this->Admin_model->restriction_section2($data); 
        }
            echo json_encode($result);
    }
    }
    public function restriction_section1(){
        if($this->session->userdata('id')){ 
            
           $id = $this->input->post('id');
        //    echo "<pre>";
        //    echo $id;
        //    exit;
           
        $data = [
            'title'        => $this->input->post('sec1_title1'),
            'details'        => $this->input->post('sec1_details'),
            'createddate'   =>date('Y-m-d H:i:s')
        ];
        $image =$_FILES['banner']['name'];
        $extension = pathinfo($image,PATHINFO_EXTENSION);
        $rand = rand(0,100000);
        $rename = 'public/uploads/'.strtotime(date('Y-m-d')).$rand;
        $data['banner'] = $rename.'.'.$extension;
        if(move_uploaded_file($_FILES["banner"]["tmp_name"], $data['banner'])){
            echo "The file ". $data['banner']. " has been uploaded.";
        }

     else {
                echo "Sorry, there was an error uploading your file.";
               }
               $result = $this->Admin_model->restriction_section1($data);
             echo json_encode($result);
        // echo "<pre>";
        // print_r($data);
        // exit;
            }
    }
   
    public function help_centre() {
        $order['count']   = $this->Admin_model->count_notification();
                 $this->load->view('admin/heads',$order); 
                 $this->load->view('admin/help_centre');               
                $this->load->view('admin/footer'); 
    }
    public function helpinsertsec1(){
        $data =[
            'title'  => $this->input->post('sec1_title1'),
            'createddate' => date('Y-m-d H:i:s')
        ];
        $result = $this->Admin_model->helpinsertsec1($data);
        echo json_encode($result);
    }
    public function helpcentreinsertsec2(){
        $count = count($this->input->post('ques1'));
        for($i=0;$i<$count;$i++){
            $data = [
                'title' => $this->input->post('title2'),
                'ques1' => $this->input->post('ques1'.'['.$i.']'),
                'ques2' => $this->input->post('ques2'.'['.$i.']'),
                'ques3' => $this->input->post('ques3'.'['.$i.']'),
                'ques4' => $this->input->post('ques4'.'['.$i.']'),
                'ques5' => $this->input->post('ques5'.'['.$i.']'),
                'createddate' => date('Y-m-d H:i:s')
            ];
            // echo "<pre>";
            // print_r($data);
           $result = $this->Admin_model->helpcentreinsertsec2($data);
        }
        //exit;
        echo json_encode($result);
    }
    public function faq() {
        $order['count']   = $this->Admin_model->count_notification();
        
                 $this->load->view('admin/heads',$order);  
                 $this->load->view('admin/faq.php');              
                $this->load->view('admin/footer'); 
    }
    public function faqsec1insert(){
        $data = [
            'title'  => $this->input->post('sec1_title1'),
            'details'  => $this->input->post('sec1_details'),
            'createddate'   =>date('Y-m-d H:i:s')
        ];
        $result= $this->Admin_model->faqsec1($data);
        echo json_encode($result);
    }
    public function faqsec2insert(){
        if($this->session->userdata('id')){ 
        $count = count($this->input->post('sec2_title'));
        // echo "<pre>";
        // print_r($count);
        // exit;
        for($i=0;$i<$count;$i++){
            $data = [
                'question' => $this->input->post('sec2_title'.'['.$i.']'),
                'answer' => $this->input->post('description'.'['.$i.']'),
                'createddate'   =>date('Y-m-d H:i:s')
            ];
            // echo "<pre>";
            // print_r($data);
            $result = $this->Admin_model->faqsec2($data);
        }
       echo json_encode($result);
       //exit;
    }
}
    public function blog() {
        $order['count']   = $this->Admin_model->count_notification();
                $this->load->view('admin/heads',$order);
                $this->load->view('admin/blog.php');
                $this->load->view('admin/footer'); 
    }
    public function blogsec1insert(){
        $data = [
            'title' => $this->input->post('sec1_title1'),
            'createddate'   =>date('Y-m-d H:i:s')
        ];
        $result = $this->Admin_model->blogsec1insert($data);
        echo json_encode($result);
    }

    public function blogsec2insert(){
        $count = count($this->input->post('sec2_title'));
        for($i=0;$i<$count;$i++){
            $data = [
                'title' => $this->input->post('sec2_title'.'['.$i.']'),
                'comments' => $this->input->post('points'.'['.$i.']'),
                'description' => $this->input->post('description'.'['.$i.']'),
               
                'createddate'   =>date('Y-m-d H:i:s')
            ];
            $image =$_FILES['imgpath']['name'][$i];
            $extension = pathinfo($image,PATHINFO_EXTENSION);
            $rand = rand(0,100000);
            $rename = 'public/uploads/'.strtotime(date('Y-m-d')).$rand;
            $data['imgpath'] = $rename.'.'.$extension;
            if(move_uploaded_file($_FILES["imgpath"]["tmp_name"][$i], $data['imgpath'])){
                echo "The file ". $data['imgpath']. " has been uploaded.";
            }
    
         else {
                    echo "Sorry, there was an error uploading your file.";
                   }
                   $result = $this->Admin_model->blogsec2insert($data);
        }
       
     
        echo json_encode($result);
    }

    public function shippingcal(){
        $order['count']   = $this->Admin_model->count_notification();
                $this->load->view('admin/heads',$order);
                $this->load->view('admin/shipping-cal.php');
                $this->load->view('admin/footer'); 
    }
    public function shippinginsertsec1(){
        $data =[
            'title' => $this->input->post('sec1_title1'),
            'details' => $this->input->post('sec1_details'),
            'createddate'   =>date('Y-m-d H:i:s')
        ];
       $result = $this->Admin_model->shippingcalsection1($data);
       echo json_encode($result);
    }
    public function shippinginsertsec2(){
        $data =[
            'title' => $this->input->post('sec2_title'),
            'description' => $this->input->post('sec2description'),
            'createddate'   =>date('Y-m-d H:i:s')
        ];
       $result = $this->Admin_model->shippingcalsection2($data);
       echo json_encode($result);
    }
    public function contactus(){
        $order['count']   = $this->Admin_model->count_notification();
        $this->load->view('admin/heads',$order);
        $this->load->view('admin/contactus.php');
        $this->load->view('admin/footer'); 
    }
    public function insertcontact(){
        $data = [
            'location' => $this->input->post('location'),
            'email' => $this->input->post('email'),
            'contact' => $this->input->post('contact'),
            'createddate'   =>date('Y-m-d H:i:s')
        ];
        $result = $this->Admin_model->insertcontact($data);
        echo json_encode($result);
    }
    public function consolidation() {
        $order['count']   = $this->Admin_model->count_notification();
                $this->load->view('admin/heads',$order);
                $this->load->view('admin/consolidation');
                $this->load->view('admin/footer');
        
    }
    public function consolidationinsertsec1(){
        $data = [
           
            'description'=> $this->input->post('sec1_desc'),
            'title'=> $this->input->post('sec1_title'),
            'createddate'   =>date('Y-m-d H:i:s')
        ];
        $image =$_FILES['img']['name'];
        $extension = pathinfo($image,PATHINFO_EXTENSION);
        $rand = rand(0,100000);
        $rename = 'public/uploads/'.strtotime(date('Y-m-d')).$rand;
        $data['imgpath'] = $rename.'.'.$extension;
        if(move_uploaded_file($_FILES["img"]["tmp_name"], $data['imgpath'])){
            echo "The file ". $data['imgpath']. " has been uploaded.";
        }

     else {
                echo "Sorry, there was an error uploading your file.";
               }
        $result = $this->Admin_model->consolidationsec1($data);
        echo json_encode($result);
    }
    public function consolidationinsertsec2(){
        $count = count($this->input->post('sec2_title'));
        for($i=0;$i<$count;$i++){
            $data = [
                //'imgpath' => $this->input->post('imgpath'.'['.$i.']'),
                'description' => $this->input->post('sec2description'.'['.$i.']'),
                'title' => $this->input->post('sec2_title'.'['.$i.']'),
            ];
            $image =$_FILES['imgpath']['name'][$i];
            $extension = pathinfo($image,PATHINFO_EXTENSION);
            $rand = rand(0,100000);
            $rename = 'public/uploads/'.strtotime(date('Y-m-d')).$rand;
            $data['imgpath'] = $rename.'.'.$extension;
            if(move_uploaded_file($_FILES["imgpath"]["tmp_name"][$i], $data['imgpath'])){
                echo "The file ". $data['imgpath']. " has been uploaded.";
            }
    
         else {
                    echo "Sorry, there was an error uploading your file.";
                   }
            // echo "<pre>";
            // print_r($data);
            $result = $this->Admin_model->consolidationsec2($data);
        }
            echo json_encode($result);
        //exit;
    }

    public function consolidationinsertsec3(){
        $data = [
            'title'  => $this->input->post('sec3_title'),
            'description'  => $this->input->post('sec3description'),
            'createddate'   =>date('Y-m-d H:i:s')
        ];
        $result = $this->Admin_model->consolidationsec3($data);
        echo json_encode($result);
    }
    public function consolidationinsertsec4(){
        $count = count($this->input->post('question'));
        // echo "<pre>";
        // print_r($count);
        // exit;
        for($i=0;$i<$count;$i++){
            $data = [
                'question'  => $this->input->post('question'.'['.$i.']'),
                'answer'  => $this->input->post('answee'.'['.$i.']'),
                'createddate'   =>date('Y-m-d H:i:s')
            ];
            // echo "<pre>";
            // print_r($data);
           
         $result = $this->Admin_model->consolidationsec4($data);
        }
       // exit;
       echo json_encode($result);
    }

    public function shopnship_insert_message(){
        $shopnship_id = $this->input->post('order_id');
        $to_id   = $this->input->post('to_id');
        $ip = $_SERVER['REMOTE_ADDR'];
                $ipInfo = file_get_contents('http://ip-api.com/json/' . $ip);
                $ipInfo = json_decode($ipInfo);
                $timezone = $ipInfo->timezone;
                date_default_timezone_set($timezone);
        $message = array (

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
    public function assisted_insert_message() {

        $assisted_id = $this->input->post('order_id');
        $to_id   = $this->input->post('to_id');
        $ip = $_SERVER['REMOTE_ADDR'];
        $ipInfo = file_get_contents('http://ip-api.com/json/' . $ip);
        $ipInfo = json_decode($ipInfo);
        $timezone = $ipInfo->timezone;
        date_default_timezone_set($timezone);
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
        $ip = $_SERVER['REMOTE_ADDR'];
        $ipInfo = file_get_contents('http://ip-api.com/json/' . $ip);
        $ipInfo = json_decode($ipInfo);
        $timezone = $ipInfo->timezone;
        date_default_timezone_set($timezone);
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
            $user_id = $this->session->userdata('id');
            $order['total_order'] = $this->Admin_model->shopnship_count();
            $order['assisted_total_order'] = $this->Admin_model->assisted_count();
            $order['international_total_order'] = $this->Admin_model->international_count();
            $order['total_users'] = $this->Admin_model->users_count();
            $order['count']   = $this->Admin_model->count_notification();
            $order['address'] = $this->Admin_model->display_address();
            $order['adminrecord'] = $this->Admin_model->displaylogin();
                $this->load->view('admin/heads',$order);
                $this->load->view('admin/dashboard',$order);
                $this->load->view('admin/footer');
        } else {
            redirect('admin');
        }
    }
        public function insert_automate_shopnship() {
   
        if ($this->session->userdata('id')) {
   
        if($this->input->post('submit')){
            $data = [
                'item_type' => $this->input->post('item_type'),
                'item_name' => $this->input->post('item_name'),
                'package_size' => $this->input->post('package_size'),
                'tracking_id' => $this->input->post('tracking_id'),
                'weight'    => $this->input->post('weight'),
                'quantity' => $this->input->post('quantity'),
                'price'   => $this->input->post('price'),
                'total_price'    => $this->input->post('total_price')
        ];
        $result = $this->Admin_model->admin_consolidate_shipment($data);
        if($result==TRUE){
            redirect('admin/automate-consolidate-shipments');
        } 
    }
    $order['count']   = $this->Admin_model->count_notification();
   
        $this->load->view('admin/heads',$order);
        $this->load->view('admin/add_automate_consolidate');
        $this->load->view('admin/footer');    
    }  else {
        redirect('admin');
     }   
    }
    public function add_automate_shopnship(){
        if($this->session->userdata('id')){
        $order['count']   = $this->Admin_model->count_notification();
        $this->load->view('admin/heads',$order);
        $this->load->view('admin/add_automate_consolidate');
        $this->load->view('admin/footer');
        }

    }
    public function automate_shopnship() {

        if($this->session->userdata('id')){
        $data['users'] = $this->Admin_model->automate_consolidate();
        $data['count']   = $this->Admin_model->count_notification();
        $this->load->view('admin/heads',$data);
        $this->load->view('admin/automate_consolidate');
        $this->load->view('admin/datatable_footer');
        }
    }
    public function user_details(){
        if($this->session->userdata('id')){
        $order['count']   = $this->Admin_model->count_notification();
        $this->load->view('admin/heads',$order);
        $this->load->view('admin/user_details');
        $this->load->view('admin/footer');
        }

    }
    public function getadminaddress() {
         if(isset($_POST['country_id'])) {
            $country_id = $this->input->post('country_id');
        (array)$address_details = $this->Admin_model->display_admin_address($country_id);
        echo json_encode($address_details);
        } 
    }
    public function insert_users(){
        if($this->session->userdata('id')){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('first_name','First Name','required|trim|alpha');
        $this->form_validation->set_rules('last_name','Last Name','required|trim|alpha');
        $this->form_validation->set_rules('phone_number','Contact Number','required|trim');
        $this->form_validation->set_rules('password','Password ','required|trim|min_length[8]');
        $this->form_validation->set_rules('cpassword','Confirm Password ','trim|required|matches[password]');
        // $this->form_validation->set_rules('cpwd','Confirm Password','trim|required|min_length[8]|matches[pswd]');
        $this->form_validation->set_rules('email', 'Email', 'required|trim');
        $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
        // echo "<pre>";
        // var_dump($this->form_validation->run());
        // exit;
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
        // echo json_encode($result);
        if($result==TRUE){
            redirect('user-list');
        }
        
    }
    $order['count']   = $this->Admin_model->count_notification();
        $this->load->view('admin/heads',$order);
        $this->load->view('admin/user_details');
        $this->load->view('admin/footer');    
    }
    
    else{
        redirect('admin');
    }
        
        
    }
    public function user_listing(){
        $data['users'] = $this->Admin_model->user_details();
        $data['count']   = $this->Admin_model->count_notification();
        $this->load->view('admin/heads',$data);
        $this->load->view('admin/user_listing',$data);
        $this->load->view('admin/datatable_footer');
    }
    public function update_status(){
        if(isset($_REQUEST['val']))
    {   
        // echo "<pre>";
        // print_r($_REQUEST['val']);
        // exit;
        $set_status=$this->Admin_model->update_status();
        if($set_status==TRUE){
        $this->session->set_flashdata('msg',"User's account active.");
        }else{
        $this->session->set_flashdata('msg',"User's account blocked.");
        }

    }
    return redirect("user-list");
    }
    public function shopnship_order_listing(){
        if($this->session->userdata('id')){
         
        $total['count']   = $this->Admin_model->count_notification();
        $total['shopnship_list'] = $this->Admin_model->shopnship_order();
            
        $this->load->view('admin/heads',$total);
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
        $total['count']   = $this->Admin_model->count_notification();
        $this->load->view('admin/heads',$total);
        $this->load->view('admin/shopnship_listing',$total);
        $this->load->view('admin/datatable_footer');
        }
        else{
           redirect('admin');
        }
    }

    public function edit_consolidate_item($item_id) {
        if($this->session->userdata('id')) {

            $order['count']   = $this->Admin_model->count_notification();
            $order['item_details'] = $this->Admin_model->consolidate_item_details($item_id);
            $order['item_id'] =$item_id;
         
         if($this->input->post('submit')) {
                $data  =  array (
                    'product_type' => $this->input->post('item_type'),
                    'product_name' => $this->input->post('item_name'),
                    'store' => $this->input->post('package_size'),
                    'size' => $this->input->post('weight'),
                    'quantity' => $this->input->post('quantity'),
                    'item_price' => $this->input->post('price'),
                    'total_amount' => $this->input->post('total_price'),
                    'grand_total' => $this->input->post('total_price')
                );
            $update_status = $this->Admin_model->update_consolidate_item_details($data, $item_id);
            if($update_status == 1) {
                $this->session->set_flashdata('msg', 'Item Updated Successfully');
    redirect('shopnship-order-details/'.$order['item_details']->shopnship_id);
                }
            }
        $this->load->view('admin/heads',$order);
        $this->load->view('admin/edit_consolidate_item');
        $this->load->view('admin/footer');
        }
    }

    public function update_pickup_shipment($item_id) {
          
        if($this->session->userdata('id')) {
        
            $order['item_id']      = $item_id;
            $order['count']        = $this->Admin_model->count_notification();
            $order['item_details'] = $this->Admin_model->pickupshipment_details($item_id);
            
         if($this->input->post('submit')) {

                $data  =  array (
                    
                    'product_type' => $this->input->post('item_type'),
                    'product_name' => $this->input->post('item_name'),
                    'quantity' => $this->input->post('quantity'),
                    'total_amount' => $this->input->post('total_amount'),
                );

            $update_status = $this->Admin_model->update_pickupshipment_item_details($data, $item_id);
            if($update_status == 1) {
                $this->session->set_flashdata('msg', 'Item Updated Successfully');
    redirect('international-order-details/'.$order['item_details']->international_id);
                }
            }
        }   
        $this->load->view('admin/heads',$order);
        $this->load->view('admin/edit_pickupshipment_item');
        $this->load->view('admin/footer');
            
    }

    public function edit_buy_for_me_item($item_id) {
          
        if($this->session->userdata('id')) {
        
            $order['count']   = $this->Admin_model->count_notification();
            $order['item_details'] = $this->Admin_model->buyforme_details($item_id);
            $order['item_id'] =$item_id;
         
         if($this->input->post('submit')) {

                $data  =  array (
                    
                    'product_type' => $this->input->post('item_type'),
                    'product_name' => $this->input->post('item_name'),
                    'store' => $this->input->post('store'),
                    'size' => $this->input->post('size'),
                    'quantity' => $this->input->post('quantity'),
                    'color' => $this->input->post('color'),
                    'total_amount' => $this->input->post('total_amount'),
                    'grand_total' => $this->input->post('total_amount')
                );

            $update_status = $this->Admin_model->update_buyforme_item_details($data, $item_id);
            if($update_status == 1) {
                $this->session->set_flashdata('msg', 'Item Updated Successfully');
    redirect('assisted-order-details/'.$order['item_details']->assisted_id);
                }
            }
           }   
        $this->load->view('admin/heads',$order);
        $this->load->view('admin/edit_buyforme_item');
        $this->load->view('admin/footer');
            
    }
    public function shopnship_order_details($shopnship_id){
         if($this->session->userdata('id')){
        $data['order_id'] = $this->uri->segment(2);
        $notification_id = $this->uri->segment(3);
        if(isset($notification_id)){
            $this->db->set('is_read','1')
                   ->where('id',$notification_id)
                   ->where('notification_type','0')
                   ->update('notification');
        } 
        $data['count']   = $this->Admin_model->count_notification();
        $data['item_records'] = $this->Admin_model->shopnship_order_details($shopnship_id);

         foreach ($data['item_records'] as $key => $value) {
                $response = $this->Shopnship_model->check_admin_consolidate_shipment($value->order_id);
                $data['item_records'][$key]->shipment_type  = 0; 
              if(!empty($response)) { 
                $data['item_records'][$key]->shipment_type  = 1; 
                $data['item_records'][$key]->product_type = !empty($response->item_type)?$response->item_type:$value->product_type;
                $data['item_records'][$key]->store = !empty($response->package_size)?$response->package_size:$value->store;
                $data['item_records'][$key]->product_name = !empty($response->item_name)?$response->item_name:$value->product_name;
                $data['item_records'][$key]->order_id = !empty($response->tracking_id)?$response->tracking_id:$value->order_id;
                $data['item_records'][$key]->size = !empty($response->weight)?$response->weight:$value->size;
                $data['item_records'][$key]->quantity = !empty($response->quantity)?$response->quantity:$value->quantity;
                $data['item_records'][$key]->item_type_name = !empty($response->item_type_name)?$response->item_type_name:$value->item_type_name;
                $data['item_records'][$key]->item_price = !empty($response->price)?$response->price:$value->item_price;
                $data['item_records'][$key]->total_amount = !empty($response->total_price)?$response->total_price:$value->total_amount; 
                $data['item_records'][$key]->grand_total = !empty($response->total_price)?$response->total_price:$value->grand_total;
                    } 
                }
        $data['user_address'] = $this->Admin_model->shopnship_delivery_address($data['item_records'][0]->address_id);
        $data['msg']          = $this->Admin_model->receiver_display_msg($shopnship_id);
        $data['pay_details']  = $this->Admin_model->shopnship_payment_display($shopnship_id);
        $data['shipment_details'] = $this->Admin_model->display_shipment_shopnship($shopnship_id);
        $this->load->view('admin/heads',$data);
        $this->load->view('admin/shopnship_order_details',$data);
        $this->load->view('admin/datatable_footer');
        }
        else{
            redirect('admin');
        }
    }
    public function assisted_listing(){
        if($this->session->userdata('id')){
        $user_id = $this->uri->segment(3);
        $total['count']   = $this->Admin_model->count_notification();
        $total['assisted_list'] = $this->Admin_model->assisted_order($user_id);
        $this->load->view('admin/heads',$total);
        $this->load->view('admin/assisted_listing',$total);
        $this->load->view('admin/datatable_footer');
        }
        else{
            redirect('admin');
        }
    }

    public function assisted_order_listing(){
        if($this->session->userdata('id')){
        $total['count']   = $this->Admin_model->count_notification();
        $total['assisted_list'] = $this->Admin_model->assisted_order_listing();
        $this->load->view('admin/heads',$total);
        $this->load->view('admin/assisted_listing',$total);
        $this->load->view('admin/datatable_footer');
        }
        else{
            redirect('admin');
        }
    }
    public function assisted_order_details($assisted_id){
        if($this->session->userdata('id')){
        $data['order_id'] = $this->uri->segment(2);
        $notification_id = $this->uri->segment(3);
        if(isset($notification_id)){
            $this->db->set('is_read','1')
                   ->where('id',$notification_id)
                   ->where('notification_type','0')
                   ->update('notification');
        } 
        $data['count']   = $this->Admin_model->count_notification();
        $data['item_records'] = $this->Admin_model->assisted_order_details($assisted_id);
        $data['user_address'] = $this->Admin_model->assisted_delivery_address($data['item_records'][0]->address_id);
        $data['msg']          = $this->Admin_model->receiver_display_msg($assisted_id);
        $data['pay_details']  = $this->Admin_model->assisted_payment_display($assisted_id);
        $data['shipment_details'] = $this->Admin_model->display_shipment_assisted($assisted_id);
        $this->load->view('admin/heads',$data);
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
        $total['count']   = $this->Admin_model->count_notification();
        $total['international_list'] = $this->Admin_model->international_order($user_id);
       
        $this->load->view('admin/heads',$total);
        $this->load->view('admin/international_listing',$total);
        $this->load->view('admin/datatable_footer');
        }
        else{
            redirect('admin');
        }
    }

    public function international_order_listing(){
        if($this->session->userdata('id')) {
        $total['count']   = $this->Admin_model->count_notification();
        $total['international_list'] = $this->Admin_model->international_order_listing();
        $this->load->view('admin/heads',$total);
        $this->load->view('admin/international_listing',$total);
        $this->load->view('admin/datatable_footer');
        }
        else{
            redirect('admin');
        }
    }
    public function international_order_details($international_id) {
        if($this->session->userdata('id')){
        $data['order_id']=$this->uri->segment(2);
        $notification_id = $this->uri->segment(3);
        if(isset($notification_id)){
            $this->db->set('is_read','1')
                   ->where('id',$notification_id)
                   ->where('notification_type','0')
                   ->update('notification');
        } 
    $data['item_records'] = $this->Admin_model->international_order_details($international_id);
    $data['count']   = $this->Admin_model->count_notification();
    $data['pickup_address'] = $this->Admin_model->internation_pickup_address($international_id);
    $data['delivery_address'] = $this->Admin_model->internation_delivery_address_details($international_id);
    $data['msg']          = $this->Admin_model->receiver_display_msg($international_id);
    $data['pay_details']  = $this->Admin_model->international_payment_display($international_id);
    $data['shipment_details'] = $this->Admin_model->display_shipment_international($international_id);
        $this->load->view('admin/heads',$data);
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
        $payment['count']   = $this->Admin_model->count_notification();
        $this->load->view('admin/heads',$payment);
        $this->load->view('admin/payment_listing',$payment);
        $this->load->view('admin/datatable_footer');
        }
        else{
            redirect('admin');
        }
    }
    public function payment_details(){
        if($this->session->userdata('id')){
        $total['count']   = $this->Admin_model->count_notification();
        $this->load->view('admin/heads',$total);
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
        $edit_data['data'] = $this->Admin_model->user_edit_data($this->uri->segment(3));
        $edit_data['count']   = $this->Admin_model->count_notification();
        $this->load->view('admin/heads',$edit_data);
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
    // public function payment_view(){
    //     $total['count']   = $this->Admin_model->count_notification();
    //     $this->load->view('admin/heads',$total);
    //     $this->load->view('admin/edit_payment');
    //     $this->load->view('admin/footer');
    // }
    public function insert_payment(){
        
        $shopnship_id = $this->input->post('submit');
        $data = [
            'order_id'=>$shopnship_id,
            'type' => strtolower($this->input->post('type')),
            'status'=> $this->input->post('status'),
            'payment_id' => $this->input->post('payment'),
            'invoiceamt' => $this->input->post('paymentAmt'),
            'date_created' => date('Y-m-d H:i:s')
        ];
        $result = $this->Admin_model->insert_payment_data($data);
        redirect(base_url().'shopnship-order-details/'.$shopnship_id,'refresh');
    }
    public function payment_update_view(){
        $id = $this->uri->segment(3);
        $payment_id = $this->uri->segment(4);
        $total['count']   = $this->Admin_model->count_notification();
        $data['pay_details']  = $this->Admin_model->shopnship_update_payment_display($payment_id);
        $this->load->view('admin/heads',$total);
        $this->load->view('admin/edit_payment',$data);
        $this->load->view('admin/footer');
    }
    public function shopnship_update_payment(){ 
        $orderid = $this->input->post('id');
        $id = $this->input->post('payid');
        $pay = [
            'payment_id' => $this->input->post('payment'),
            'status'=> $this->input->post('status'),
            'invoiceamt'=> $this->input->post('invoiceAmt'),
            'update_date' => date('Y-m-d H:i:s')
        ];
        $payment = $this->Admin_model->shopnship_update_payment($orderid,$pay,$id);
        if($payment==TRUE){
            redirect(base_url().'shopnship-order-details/'.$orderid);
        }
        else{
           redirect(base_url().'shopnship-order-details/'.$orderid);
        }
     
    }
    public function shopnship_delete_payment(){
        $id = $this->uri->segment(3);
        $payment_id = $this->uri->segment(4);
        $result = $this->Admin_model->shopnship_delete_payment($payment_id);
        echo json_encode($resutl);
        if($result==TRUE){
            redirect(base_url().'shopnship-order-details/'.$id);
        }
        else{
            redirect(base_url().'shopnship-order-details/'.$id);
        }
    }
    public function shopnship_shipment(){
        $shopnship_id = $this->input->post('submit');
        $data = [
            'order_id'         => $shopnship_id,
            'shipping_carrier' => $this->input->post('shipping_carrier'),
            'tracking_number'=> $this->input->post('tracking_number'),
            'tracking_url' => $this->input->post('tracking_url'),
            'shipping' => strtolower($this->input->post('shipping')),
            'date_created' => date('Y-m-d H:i:s')
        ];

        $result = $this->Admin_model->insert_shipment_data($data);
        echo json_encode($result);
        redirect(base_url().'shopnship-order-details/'.$shopnship_id,'refresh');

    }

    public function assisted_payment(){
        $assisted_id = $this->input->post('submit');
        $data = [ 
            'order_id' => $assisted_id,
            'type' => strtolower($this->input->post('type')),
            'status'=> $this->input->post('status'),
            'payment_id' => $this->input->post('payment'),
            'invoiceamt' => $this->input->post('paymentAmt'),
            'date_created' => date('Y-m-d H:i:s')
        ];
        $result = $this->Admin_model->insert_payment_data($data);
        echo json_encode($result);
        redirect(base_url().'assisted-order-details/'.$assisted_id,'refresh');
    }

    public function assisted_payment_update_view(){
        $id = $this->uri->segment(3);
        $total['count']   = $this->Admin_model->count_notification();
        $data['pay_details']  = $this->Admin_model->assisted_update_payment_display($id);
        $this->load->view('admin/heads',$total);
        $this->load->view('admin/assisted_edit_payment',$data);
        $this->load->view('admin/footer');
    }
    public function assisted_update_payment(){
        $orderid = $this->input->post('id');
        $id = $this->input->post('payid');
        $pay = [
            'payment_id' => $this->input->post('payment'),
            'status'=> $this->input->post('status'),
            'invoiceamt'=> $this->input->post('invoiceAmt'),
            'update_date' => date('Y-m-d H:i:s')
        ];
        $payment = $this->Admin_model->assisted_update_payment($orderid,$pay,$id);
        echo json_encode($payment);
        if($payment==TRUE){
            redirect(base_url().'assisted-order-details/'.$orderid);
        }
        else{
           redirect(base_url().'assisted-order-details/'.$orderid);
        }
    }
    public function assisted_delete_payment(){
        $orderid = $this->uri->segment(3);
        
        $result = $this->Admin_model->assisted_delete_payment($orderid);
        echo json_encode($resutl);
        if($result==TRUE){
            redirect(base_url().'assisted-order-details/'.$orderid);
        }
        else{
            redirect(base_url().'assisted-order-details/'.$orderid);
        }
    }

    public function assisted_shipment(){
        $assisted_id = $this->input->post('submit');
        $data = [
            'order_id' => $assisted_id,
            'shipping_carrier' => $this->input->post('shipping_carrier'),
            'tracking_number'=> $this->input->post('tracking_number'),
            'tracking_url' => $this->input->post('tracking_url'),
            'shipping' => strtolower($this->input->post('shipping')),
            'date_created' => date('Y-m-d H:i:s')
        ];
        $result = $this->Admin_model->insert_shipment_data($data);
        echo json_encode($result);
        redirect(base_url().'assisted-order-details/'.$assisted_id,'refresh');

    }
    public function international_payment(){
        $order_id = $this->input->post('submit');
        $data = [
            'order_id' => $order_id,
            'type' => strtolower($this->input->post('type')),
            'status'=> $this->input->post('status'),
            'invoiceamt'=> $this->input->post('invoiceAmt'),
            'payment_id' => $this->input->post('payment'),
            'date_created' => date('Y-m-d H:i:s')
        ];
        $result = $this->Admin_model->insert_payment_data($data);
        redirect(base_url().'international-order-details/'.$order_id,'refresh');
   
    }

    public function international_payment_update_view(){
        $id = $this->uri->segment(3);
        $paymentid = $this->uri->segment(4);
        $total['count']   = $this->Admin_model->count_notification();
        $data['pay_details']  = $this->Admin_model->international_update_payment_display($paymentid);
        $this->load->view('admin/heads',$total);
        $this->load->view('admin/international_edit_payment',$data);
        $this->load->view('admin/footer');
    }
    public function international_update_payment(){
        $orderid = $this->input->post('id');
        $id = $this->input->post('payid');
           $pay = [
            'payment_id' => $this->input->post('payment'),
            'status'=> $this->input->post('status'),
            'invoiceamt'=> $this->input->post('invoiceamt'),
            'update_date' => date('Y-m-d H:i:s')
        ];
        $payment = $this->Admin_model->international_update_payment($orderid,$pay,$id);
        echo json_encode($payment);
        if($payment==TRUE){
            redirect(base_url().'international-order-details/'.$orderid);
        }
        else{
           redirect(base_url().'international-order-details/'.$orderid);
        }
    }
    public function international_delete_payment(){
        $id = $this->uri->segment(3);
        $paymentid = $this->uri->segment(4);
        $result = $this->Admin_model->international_delete_payment($paymentid);
        echo json_encode($resutl);
        if($result==TRUE){
            redirect(base_url().'international-order-details/'.$id);
        }
        else{
            redirect(base_url().'international-order-details/'.$id);
        }
    }

    public function international_shipment(){
        $order_id = $this->input->post('submit');
        $data = [
            'order_id'      => $order_id,
            'shipping_carrier' => $this->input->post('shipping_carrier'),
            'tracking_number'=> $this->input->post('tracking_number'),
            'tracking_url' => $this->input->post('tracking_url'),
            'shipping' => strtolower($this->input->post('shipping')),
            'date_created' => date('Y-m-d H:i:s')
        ];
        $result = $this->Admin_model->insert_shipment_data($data);
        redirect(base_url().'international-order-details/'.$order_id,'refresh');
    }

    public function international_shipment_update_view(){
        $id = $this->uri->segment(3);
        $total['count']   = $this->Admin_model->count_notification();
        $data['shipment']  = $this->Admin_model->international_update_shipment_display($id);
        $this->load->view('admin/heads',$total);
        $this->load->view('admin/international-edit-shipment',$data);
        $this->load->view('admin/footer');
    }
    public function international_update_shipment(){
        $id = $this->input->post('id');
        $shipment = [
            'shipping_carrier' => $this->input->post('carrier'),
            'tracking_number'=> $this->input->post('tracking'),
            'tracking_url'=> $this->input->post('url'),
            'update_date' => date('Y-m-d H:i:s')
        ];
        $shipment = $this->Admin_model->international_update_shipment($id,$shipment);
        echo json_encode($shipment);
        if($shipment==TRUE){
            redirect(base_url().'international-order-details/'.$id);
        }
        else{
           redirect(base_url().'international-order-details/'.$id);
        }
    }
    public function international_delete_shipment(){
        $id = $this->uri->segment(3);
        $result = $this->Admin_model->international_delete_shipment($id);
        echo json_encode($resutl);
        if($result==TRUE){
            redirect(base_url().'international-order-details/'.$id);
        }
        else{
            redirect(base_url().'international-order-details/'.$id);
        }
    }

    public function shopnship_shipment_update_view(){
        $id = $this->uri->segment(3);
        $total['count']   = $this->Admin_model->count_notification();
        $data['shipment']  = $this->Admin_model->shopnship_update_shipment_display($id);
        $this->load->view('admin/heads',$total);
        $this->load->view('admin/shopnship-edit-shipment',$data);
        $this->load->view('admin/footer');
    }
    public function shopnship_update_shipment(){
        $id = $this->input->post('id');
        $shipment = [
            'shipping_carrier' => $this->input->post('carrier'),
            'tracking_number'=> $this->input->post('tracking'),
            'tracking_url'=> $this->input->post('url'),
            'update_date' => date('Y-m-d H:i:s')
        ];
        // echo "<pre>";
        // print_r($shipment['tracking_url']);
        // exit;
        $shipment = $this->Admin_model->shopnship_update_shipment($id,$shipment);
        echo json_encode($shipment);
        if($shipment==TRUE){
            redirect(base_url().'shopnship-order-details/'.$id);
        }
        else{
           redirect(base_url().'shopnship-order-details/'.$id);
        }
    }
    public function shopnship_delete_shipment(){
        $id = $this->uri->segment(3);
        $result = $this->Admin_model->shopnship_delete_shipment($id);
        echo json_encode($resutl);
        if($result==TRUE){
            redirect(base_url().'shopnship-order-details/'.$id);
        }
        else{
            redirect(base_url().'shopnship-order-details/'.$id);
        }
    }

    public function assisted_shipment_update_view(){
        $id = $this->uri->segment(3);
        $total['count']   = $this->Admin_model->count_notification();
        $data['shipment']  = $this->Admin_model->assisted_update_shipment_display($id);
        $this->load->view('admin/heads',$total);
        $this->load->view('admin/assisted-edit-shipment',$data);
        $this->load->view('admin/footer');
    }
    public function assisted_update_shipment(){
        $id = $this->input->post('id');
        $shipment = [
            'shipping_carrier' => $this->input->post('carrier'),
            'tracking_number'=> $this->input->post('tracking'),
            'tracking_url'=> $this->input->post('url'),
            'update_date' => date('Y-m-d H:i:s')
        ];
        $shipment = $this->Admin_model->assisted_update_shipment($id,$shipment);
        echo json_encode($shipment);
        if($shipment==TRUE){
            redirect(base_url().'assisted-order-details/'.$id);
        }
        else{
           redirect(base_url().'assisted-order-details/'.$id);
        }
    }
    public function assisted_delete_shipment(){
        $id = $this->uri->segment(3);
        $result = $this->Admin_model->assisted_delete_shipment($id);
        echo json_encode($resutl);
        if($result==TRUE){
            redirect(base_url().'assisted-order-details/'.$id);
        }
        else{
            redirect(base_url().'assisted-order-details/'.$id);
        }
    }


    public function update_order_status(){
        $order_id = $this->input->post('submit');
        $user_id = $this->input->post('user_id');
        $id= $this->input->post('id[]');
        $count = count($this->input->post('item_receive[]'));
        for($i = 0; $i<$count; $i++){
        $record = [
            'id'            =>$this->input->post('id'.'['.$i.']'),
            'item_received' => $this->input->post('item_receive'.'['.$i.']')

        ]; 
        // $user_id = $this->session->userdata('id');

        $order_id = $order_id;
        $noti_data = [
                'user_id'   =>  $user_id,
                'order_id'  => $order_id,
                'order_type' => '1',
                'content'   => $record['item_received'],
               'notification_type' => '1',
        ];
        $result = $this->Admin_model->update_item_received($record);
         $notifications = $this->Admin_model->create_notification($noti_data);
    }
   
    redirect(base_url().'shopnship-order-details/'.$order_id,'redresh');
    }

    public function assisted_update_order_status(){
        $order_id = $this->input->post('submit');
        $user_id = $this->input->post('user_id');
        $id= $this->input->post('id[]');
        $count = count($this->input->post('item_receive[]'));
        for($i = 0; $i<$count; $i++){
        $record = [
            'id'            =>$this->input->post('id'.'['.$i.']'),
            'item_received' => $this->input->post('item_receive'.'['.$i.']'),
            //'paid'       => $this->input->post('payment'.'['.$i.']'),
            'updated_date'  =>date('Y-m-d H:i:s')

        ];
    //     echo "<pre>";
    //    print_r($record['paid']);
    //     exit;
       // $user_id = $this->session->userdata('id');
        $order_id = $order_id;
        $noti_data = [
                'user_id'   =>  $user_id,
                'order_id'  => $order_id,
                'order_type'=> '2',
                'content'   => $record['item_received'],
               'notification_type' => '1',
        ];
        $result = $this->Admin_model->assisted_update_order_status($record);
        $notifications = $this->Admin_model->create_notification($noti_data);
    }
    redirect(base_url().'assisted-order-details/'.$order_id,'redresh');
    }

    public function international_update_order_status(){
        $user_id = $this->input->post('user_id');
        $order_id = $this->input->post('submit');
        $id= $this->input->post('id[]');
        $count = count($this->input->post('item_receive[]'));
        for($i = 0; $i<$count; $i++){
        $record = [
            'id'            =>$this->input->post('id'.'['.$i.']'),
            'item_received' => $this->input->post('item_receive'.'['.$i.']')

        ];
        $msg = [
            'order_id'=> $order_id,
            'user_id' => $this->session->userdata('id'),
            'content' => $this->input->post('receive_msg'),
            'order_type' =>'1',
            'notification_type' =>'1',
            'created_time' => date('Y-m-d H:i:s')
        ];
        //$user_id = $this->session->userdata('id');
        $order_id = $order_id;
        $noti_data = [
                'user_id'   =>  $user_id,
                'order_id'  => $order_id,
                'order_type' => '3',
                'content'   => $record['item_received'],
               'notification_type' => '1',
        ];
        $result = $this->Admin_model->international_update_order_status($record);
        echo json_encode($result);
        $notifications = $this->Admin_model->create_notification($noti_data);
       
    }
   // exit;
    redirect(base_url().'international-order-details/'.$order_id,'redresh');
    }

    public function update_address(){
        $address = [
            'id'    => $this->input->post('id'),
            'fname' => $this->input->post('first_name'),
            'phone' => $this->input->post('phone_number'),
            'lname' => $this->input->post('last_name'),
            'address' => $this->input->post('address'),
            'landmark' => $this->input->post('landmark'),
            'state'    => $this->input->post('state'),
            'city'     => $this->input->post('city'),
            'zipcode'  => $this->input->post('zip'),
            'updated_date' => date('Y-m-d H:i:s')
        ];
        $result = $this->Admin_model->update_admin_address($address);
        echo json_encode($result);
        redirect('Admin/dashboard');
    }
    public function shopnship_invoice(){

        $shopnship_id = $this->uri->segment(3);
        $payment_id = $this->uri->segment(4);
        $invoice['record'] = $this->Admin_model->shopnship_invoice($shopnship_id);
        $invoice['invoiceAmt'] = $this->Admin_model-> shopnship_update_payment_display($payment_id);
        $invoice['address'] = $this->Admin_model->shopnship_invoice_address($invoice['record'][0]->address_id);
        $invoice['users']  = $this->Admin_model->shopnship_invoice_users($invoice['record'][0]->user_id);
        $this->load->view('admin/shopnship-invoice',$invoice);
      }


      public function assisted_invoice(){
        $assisted_id = $this->uri->segment(3);
        $invoice['record'] = $this->Admin_model->assisted_invoice($assisted_id);
        $invoice['invoiceAmt'] = $this->Admin_model->assisted_update_payment_display($assisted_id);
        $invoice['address'] = $this->Admin_model->assisted_invoice_address($invoice['record'][0]->address_id);
        $invoice['users']  = $this->Admin_model->assisted_invoice_users($invoice['record'][0]->user_id);
        $this->load->view('admin/assisted-invoice',$invoice);
      }

      public function shopnship_pdf(){
        $this->load->library('pdf');
        $shopnship_id = $this->uri->segment(3);
        $payment_id = $this->uri->segment(4);

        $invoice['record'] = $this->Admin_model->shopnship_invoice($shopnship_id);
        $invoice['invoiceAmt'] = $this->Admin_model-> shopnship_update_payment_display($payment_id);
        $invoice['address'] = $this->Admin_model->shopnship_invoice_address($invoice['record'][0]->address_id);
        $invoice['users']  = $this->Admin_model->shopnship_invoice_users($invoice['record'][0]->user_id);
        $html = $this->load->view('admin/shopnship_pdf',$invoice,true);

        $this->pdf->loadHtml($html);
        $this->pdf->set_option('isRemoteEnabled', true);
        $this->pdf->set_option('fontHeightRatio', true);

        $this->pdf->setPaper('A4', 'portrait');
        $this->pdf->render();
        $this->pdf->stream("shopnship.pdf", array("Attachment"=> 1));
      }


      public function assisted_pdf(){
        $this->load->library('pdf');
        $assisted_id = $this->uri->segment(3);
        $invoice['record'] = $this->Admin_model->assisted_invoice($assisted_id);
       
        $invoice['address'] = $this->Admin_model->assisted_invoice_address($invoice['record'][0]->address_id);
        $invoice['users']  = $this->Admin_model->assisted_invoice_users($invoice['record'][0]->user_id);
       $html= $this->load->view('admin/assisted_pdf',$invoice,true);
       $this->pdf->loadHtml($html);
       $this->pdf->set_option('isRemoteEnabled', true);
       $this->pdf->set_option('fontHeightRatio', true);

       $this->pdf->setPaper('A4', 'portrait');
       $this->pdf->render();
       $this->pdf->stream("assisted.pdf", array("Attachment"=> 1));
      }

      public function notifications(){
        $notifications['message'] = $this->Admin_model->display_notifications();
        $notifications['count']   = $this->Admin_model->count_notification();
        $this->load->view('admin/heads',$notifications);
        $this->load->view('admin/notifications',$notifications);
        $this->load->view('admin/footer');
      }

      public function delete_notification(){
        $id = $this->uri->segment(4);
       $result = $this->Admin_model->delete_nofification($id);
       if($result==TRUE){
        redirect('admin/notifications','refresh');
       }
       else{
        redirect('admin/notifications','refresh');
       }
        
    }
    public function delete_all_notification(){
      
        $user_id = $this->session->userdata('id');
        $result = $this->Admin_model->delete_all_nofification($user_id);
        if($result==TRUE){
            redirect('admin/notifications','refresh');
           }
           else{
            redirect('admin/notifications','refresh');
           }
    }
    public function assisted_image_insert(){
        $order_id = $this->input->post('submit');
        $imagedata = [
            'order_id' => $order_id,
            'shipment_type' => '2',
            'created_date' =>date('Y-m-d H:i:s')
        ];
        for($k=0; $k < count($_FILES['image1']['name']); $k++){
            $image =$_FILES['image1']['name'];
            $extension = pathinfo($image[$k],PATHINFO_EXTENSION);
            $rand = rand(0,100000);
            $rename = 'public/uploads/'.strtotime(date('Y-m-d')).$rand;
            $imagedata['image'] = $rename.'.'.$extension;
              if ($_FILES["image1"]["size"][$k] > 500000) {
                echo "Sorry, your file is too large.";
               
              }
              
              if($extension != "jpg" && $extension != "png" && $extension != "jpeg" && $extension != "gif" ) {
                    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                  
                    }
                    
                    if(move_uploaded_file($_FILES["image1"]["tmp_name"][$k], $imagedata['image'])){
                    echo "The file ". $imagedata['image']. " has been uploaded.";
                }
        
             else {
                        echo "Sorry, there was an error uploading your file.";
                       }
                       $result = $this->Admin_model->insert_image($imagedata);
                    } 
                   
                    echo json_encode($result);
                    redirect(base_url().'assisted-order-details/'.$order_id,'redresh');
    }

    public function shopnship_image_insert(){
        $order_id = $this->input->post('submit');
        $imagedata = [
            'order_id' => $order_id,
            'shipment_type' => '1',
            'created_date' =>date('Y-m-d H:i:s')
        ];
        for($k=0; $k < count($_FILES['image1']['name']); $k++){
            $image =$_FILES['image1']['name'];
            $extension = pathinfo($image[$k],PATHINFO_EXTENSION);
            $rand = rand(0,100000);
            $rename = 'public/uploads/'.strtotime(date('Y-m-d')).$rand;
            $imagedata['image'] = $rename.'.'.$extension;
              if ($_FILES["image1"]["size"][$k] > 500000) {
                echo "Sorry, your file is too large.";
              }
              
              if($extension != "jpg" && $extension != "png" && $extension != "jpeg" && $extension != "gif" ) {
                    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                  
                    }
                    
                    if(move_uploaded_file($_FILES["image1"]["tmp_name"][$k], $imagedata['image'])){
                    echo "The file ". $imagedata['image']. " has been uploaded.";
                }
        
             else {
                        echo "Sorry, there was an error uploading your file.";
                       }
                       $result = $this->Admin_model->insert_image($imagedata);
                    } 
                    
                  
                    echo json_encode($result);
                    redirect(base_url().'shopnship-order-details/'.$order_id,'redresh');
    }
}
?>