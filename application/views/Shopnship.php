<?php
  // use Dompdf\Dompdf;
class Shopnship extends CI_Controller {

    public function __construct() {
        parent::__construct(); 
        $this->load->database();
        $this->load->helper(array('form', 'url','html'));
        $this->load->library('pdf');
        $this->load->library('form_validation');
        $this->load->model('Shopnship_model');
        $this->load->model('Payment_model');
        $this->load->model('Admin_model');
        $this->load->model('Gsr');
        $this->load->library('session');
        $this->load->library('pagination');
     }

     public function assisted_shopnship_item_insert(){
        if($this->session->userdata('id'))
        {
                    $assisted_id =md5(rand());
                    $count = count($this->input->post('item_type'));
                    for($i=0;$i<$count;$i++){
                      
                        $data =[
                            'user_id'           => $this->session->userdata('id'),
                            'product_type'      => $this->input->post('item_type'.'['.$i.']'),
                            'order_sub_type'    => $this->input->post('courier_type'),
                            'courier_type'      => $this->input->post('order_sub_type'),
                            'product_name'      => $this->input->post('package_name'.'['.$i.']'),
                            'store'             => $this->input->post('store'.'['.$i.']'),
                            'color'             => $this->input->post('color'.'['.$i.']'),
                            'size'              => $this->input->post('size'.'['.$i.']'),
                            'quantity'          => $this->input->post('quantity'.'['.$i.']'),
                            'total_amount'      => $this->input->post('price'.'['.$i.']'),
                            'remark'            => $this->input->post('remark'),
                            'order_id'          => $this->input->post('order_id'.'['.$i.']'),
                            'assisted_id'       => $assisted_id,
                            'address_id'        => $this->input->post('address_id'),
                            'created_date'      => date('Y-m-d H:s:i'),
                            'tracking_number'   => '-',
                            'order_status'      => 'Pending'
                            ];
                    if(!empty($this->input->post('address_id'))) {
                            $record= 1;
                    }
                    else{
                        $record = [
                            'user_id'        => $this->session->userdata('id'),
                            'fname'          => $this->input->post('first_name'),
                            'lname'          => $this->input->post('last_name'),
                           // 'phone_number'  => $this->input->post('phone_number'),
                            'street_address' => $this->input->post('street_address'),
                            'gate_code'      => $this->input->post('gate_code'),
                            'city'          => $this->input->post('city'),
                            'state'         => $this->input->post('state'),
                            'country'       => $this->input->post('country'),
                            'pin_code'      => $this->input->post('pin'),
                        ]; 
                    }
                           
                           
                            for($k=0; $k < count($_FILES['image1']['name']); $k++){
                            $image =$_FILES['image1']['name'];
                            $extension = pathinfo($image[$k],PATHINFO_EXTENSION);
                            $rand = rand(0,100000);
                            $rename = 'public/uploads/'.strtotime(date('Y-m-d')).$rand;
                            $data['image_path'] = $rename.'.'.$extension;

                              if ($_FILES["image1"]["size"][$k] > 500000) {
                                echo "Sorry, your file is too large.";
                               
                              }
                              
                              if($extension != "jpg" && $extension != "png" && $extension != "jpeg" && $extension != "gif" ) {
                                    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                                  
                                    }
                                    
                                    if(move_uploaded_file($_FILES["image1"]["tmp_name"][$k], $data['image_path'])){
                                    echo "The file ". $data['image_path']. " has been uploaded.";
                                }
                        
                             else {
                                        echo "Sorry, there was an error uploading your file.";
                                       }
                                    } 
                           $result = $this->Shopnship_model->assisted_insert_data($record,$data);
                            echo json_encode($result);
                             
                     }
                             $this->session->set_flashdata('message', 'Order created successfully !');
                            return redirect('assisted-sns'); 
            }
    else{
        return redirect('login');
    } 
               
}
        public function assisted_order_details($assisted_id){ 
            $data['order_id'] = $this->uri->segment(3);
            $data['item_records'] = $this->Shopnship_model->assisted_item_records($assisted_id);
            // echo"<pre>";
            // print_r($data['item_records']);
            // exit;
            $data['user_address'] = $this->Shopnship_model->fetch_address_details($data['item_records'][0]->address_id); 
            $data['msg']          = $this->Shopnship_model->receiver_display_msg($assisted_id);
            $data['pay_details']  = $this->Shopnship_model->assisted_payment_display($assisted_id);
            $data['shipment_details'] = $this->Shopnship_model->display_shipment_assisted($assisted_id);
            $data['email'] = $this->Gsr->users_details();
            $this->load->view('sidebar_with_header.php',$data);
             $this->load->view('assisted-order_details',$data);
             $this->load->view('footer');
    
        }

        public function shopnship_insert(){
            if($this->session->userdata('id'))
            {
                $shopnship_id =md5(rand());
                $count = count($this->input->post('item_type'));
                for($i=0;$i<$count;$i++){
                    $data =[
                     
                    'product_type'      => $this->input->post('item_type'.'['.$i.']'),
                    'product_name'      => $this->input->post('name'.'['.$i.']'),
                    'store'             => $this->input->post('store'.'['.$i.']'),
                    'color'             => $this->input->post('color'.'['.$i.']'),
                    'size'              => $this->input->post('size'.'['.$i.']'),
                    'quantity'          => $this->input->post('quantity'.'['.$i.']'),
                    'total_amount'      => $this->input->post('price'.'['.$i.']'),
                    'remark'            => $this->input->post('remark'),
                    'order_id'          => $this->input->post('order_id'.'['.$i.']'),
                    'order_sub_type'    => $this->input->post('courier_type'),
                     'courier_type'     => $this->input->post('order_sub_type'),
                    'user_id'           => $this->session->userdata('id'),
                    'shopnship_id'      => $shopnship_id, 
                    'tracking_number'   => '-',
                    'address_id'        => $this->input->post('address_id'),
                    'created_date'      => date('Y-m-d H:s:i')
                
                ];
                if(!empty($this->input->post('address_id'))) {
                    $record= 1;
            }
            else{
                $record = [
                    'user_id'       => $this->session->userdata('id'),
                    'fname'         => $this->input->post('first_name'),
                    'lname'          => $this->input->post('last_name'),
                    'phone_number'   => $this->input->post('phone_number'),
                    'street_address' => $this->input->post('street_address'),
                    'gate_code'      => $this->input->post('gate_code'),
                    'city'          => $this->input->post('city'),
                    'state'         => $this->input->post('state'),
                    'country'       => $this->input->post('country'),
                    'pin_code'      => $this->input->post('pin'),
                    'created_date'      => date('Y-m-d H:s:i'),
                ];
            } 
                for($k=0; $k < count($_FILES['image1']['name']); $k++){
                    $filename =$_FILES['image1']['name'];
                    $ext = pathinfo($filename[$k],PATHINFO_EXTENSION);
                    $rand = rand(0,100000);
                    $rename = 'public/uploads/'.strtotime(date('Y-m-d')).$rand.'.'.$ext;
                    $server_file = $_FILES['image1']['tmp_name'][$k];
                      if ($_FILES['image1']['size'][$k] > 500000) {
                        echo "Sorry, your file is too large."; 
                      }
                      if($ext != "jpg" && $ext != "png" && $ext != "jpeg" && $ext != "gif" ) {
                            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                          
                            }
                            if(move_uploaded_file($server_file, $rename)){
                                $data['image_path'] = $rename;
                            echo "The file ". $rename. " has been uploaded.";
                        }
                
                     else {
                                echo "Sorry, there was an error uploading your file.";
                               }  
            }  
                $result = $this->Shopnship_model->shopnship_insert_data($record,$data);
                echo json_encode($result);
           
         } 
                $this->session->set_flashdata('message', 'Order created successfully !');
                return redirect('shopnship');   
        }
        else{
            return redirect('login');
        }       
    }
        public function shopnship_order_details($shopnship_id){ 
            $data['order_id'] = $this->uri->segment(3);
            $data['item_records'] = $this->Shopnship_model->shopnship_item_records($shopnship_id);
            $data['user_address'] = $this->Shopnship_model->fetch_address_details($data['item_records'][0]->address_id);
            // $data['item_count'] = $this->Shopnship_model->count_item($shopnship_id);
            // echo "<pre>";
            // print_r($data['item_count']);
            // exit;
            $data['email'] = $this->Gsr->users_details();
            $data['msg']          = $this->Shopnship_model->receiver_display_msg($shopnship_id);
            $data['pay_details']  = $this->Shopnship_model->shopnship_payment_display($shopnship_id);
            $data['shipment_details'] = $this->Shopnship_model->display_shipment_shopnship($shopnship_id);
            $this->load->view('sidebar_with_header.php',$data);
           $this->load->view('shopnship-order_details',$data);
           $this->load->view('footer');
        }

        public function international_insert_package_information(){
            if($this->session->userdata('id'))
            {
            $international_id =md5(rand());
            
            $count = count($this->input->post('item_type'));
            // echo "<pre>";
            // print_r($count);
            // exit;
            for($i=0;$i<$count;$i++){
            $data =[
                'international_id'       => $international_id,
                'product_type'           => $this->input->post('item_type'.'['.$i.']'),
                'product_name'           => $this->input->post('package_name'.'['.$i.']'),
                'quantity'               => $this->input->post('quantity'.'['.$i.']'),
                'total_amount'           => $this->input->post('package_price'.'['.$i.']'),
                'height'                 => $this->input->post('height'),
                'width'                  => $this->input->post('width'),
                'depth'                  => $this->input->post('depth'),
                'no_of_box'              => $this->input->post('package_boxes'),
                'weight_box'             => $this->input->post('package_weight'),
                'user_id'                => $this->session->userdata('id'),
                // 'internation_id'         => $internation_id,
                'date_created'           => date('Y-m-d H:i:s'),
                ];
               
            $desination = [
                'fname'             => $this->input->post('dest_first_name'),
                'lname'             => $this->input->post('dest_last_name'),
                'mobile_number'     => $this->input->post('dest_mobile_number'),
                'country'           => $this->input->post('dest_country'),
                'state'             => $this->input->post('dest_state'),
                'city'             => $this->input->post('dest_city'),
                'street_address'   => $this->input->post('dest_street'),
                'pin_code'         => $this->input->post('dest_pincode'),
                'user_id'          => $this->session->userdata('id'),
                'created_date'     => date('Y-m-d H:i:s'),
                'is_deleted'       => '0'
                // 'dest_comment' => $this->input->post('dest_comment')
            ];
            $pickup_address = [
                'user_id'           => $this->session->userdata('id'),
                'fname'             => $this->input->post('pick_firstname'),
                'lname'             => $this->input->post('pick_lastname'),
                'email'             => $this->input->post('pick_email'),
                'country'           => $this->input->post('pick_country'),
                'state'             => $this->input->post('pick_state'),
                'city'              => $this->input->post('pick_city'),
                'street_address'    => $this->input->post('pick_street'),
                'pin_code'          => $this->input->post('pick_pincode'),
                'mobile_number'     => $this->input->post('pic_mobile_number'),
                'created_date'      => date('Y-m-d H:i:s'),
                'image_path1'       => $this->input->post('img1'),
                'image_path2'       => $this->input->post('img2')
            ];
            $international_order_details = [
                'user_id'           => $this->session->userdata('id'),
               
                'order_type'        => $this->input->post('order_sub_type'),
                'courier_type'      => $this->input->post('courier_type'),
                'client_order_id'   => $this->input->post('ref_order_id'),
                'fname'             => $this->input->post('contact_first_name'),
                'lname'             => $this->input->post('contact_last_name'),
                'mobile_number'     => $this->input->post('mobile_number'),
                'email'             => $this->input->post('contact_email'),
                'order_status'      => '0',
                'created_date'      => date('Y-m-d H:s:i')
            ];
            $image =$_FILES['img1']['name'];
            $extension = pathinfo($image,PATHINFO_EXTENSION);
            $rand = rand(0,100000);
            $rename = 'public/uploads/'.strtotime(date('Y-m-d')).$rand;
            $pickup_address['image_path1'] = $rename.'.'.$extension;

              if ($_FILES["img1"]["size"] > 500000) {
                echo "Sorry, your file is too large.";
               
              }
              
              if($extension != "jpg" && $extension != "png" && $extension != "jpeg" && $extension != "gif" ) {
                    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                  
                    }
                    
                    if(move_uploaded_file($_FILES["img1"]["tmp_name"], $pickup_address['image_path1'])){
                    echo "The file ". $pickup_address['image_path1']. " has been uploaded.";
                }
        
             else {
                        echo "Sorry, there was an error uploading your file.";
                       }

                       $image =$_FILES['img2']['name'];
                       $extension = pathinfo($image,PATHINFO_EXTENSION);
                       $rand = rand(0,100000);
                       $rename = 'public/uploads/'.strtotime(date('Y-m-d')).$rand;
                       $pickup_address['image_path2'] = $rename.'.'.$extension;
           
                         if ($_FILES["img2"]["size"] > 500000) {
                           echo "Sorry, your file is too large.";
                          
                         }
                         
                         if($extension != "jpg" && $extension != "png" && $extension != "jpeg" && $extension != "gif" ) {
                               echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                             
                               }
                               
                               if(move_uploaded_file($_FILES["img2"]["tmp_name"], $pickup_address['image_path2'])){
                               echo "The file ". $pickup_address['image_path2']. " has been uploaded.";
                           }
                   
                        else {
                                   echo "Sorry, there was an error uploading your file.";
                                  }

               $result = $this->Shopnship_model->international_insert_package_information($data,$desination,$pickup_address,$international_order_details);
                echo json_encode($result);
                 
            }
            $this->session->set_flashdata('message', 'Order created successfully !');
            return redirect('international-shipment');
        }
        else{
            return redirect('login');
        } 
              
        }

            public function international_order_details($order_id){
               
            $data['order_id'] = $this->uri->segment(3);
            $data['item_records'] = $this->Shopnship_model->international_order_details($order_id);  
            $data['pickup_address'] = $this->Shopnship_model->fetch_pickup_address_details($data['item_records'][0]->order_id);
            $data['delivery_address'] = $this->Shopnship_model->fetch_delivery_address_details($data['item_records'][0]->order_id);
            $data['items'] = $this->Shopnship_model->international_fetch_records($data['item_records'][0]->order_id);
              $data['email'] = $this->Gsr->users_details();
              $data['msg']          = $this->Shopnship_model->receiver_display_msg($order_id);
              $data['pay_details']  = $this->Shopnship_model->international_payment_display($order_id);
              $data['shipment_details'] = $this->Shopnship_model->display_shipment_international($order_id);
              $this->load->view('sidebar_with_header.php',$data);
                 $this->load->view('international_order_details',$data);
                 $this->load->view('footer');
            }
        // public function assistedpdf(){
        //     $this->load->library('pdf');

        //     if($this->uri->segment(3)){
        //         $assisted_id = $this->uri->segment(3);
        //         // $html_content = '<h3>Payment Details</h3>';
        //         // $html_content.= $this->Shopnship_model->fetch_single_details_assisted($assisted_id);
        //         $invoice['record'] = $this->Shopnship_model->assisted_pdf($assisted_id);
        //         $invoice['address'] = $this->Shopnship_model->assisted_pdf_address($invoice['record']->address_id);
        //         $invoice['users']  = $this->Shopnship_model->assisted_pdf_users($invoice['record']->user_id);
        //        $html_content= $this->load->view('shopnshippdf',$invoice,TRUE);
        //         $this->pdf->loadHtml($html_content);
        //         $this->pdf->render();
        //         $this->pdf->stream(''.$assisted_id.".pdf",array("Attachment"=>0));
        //     }
        // }

      

            public  function dashboard_address_book(){
                $user_id =$this->session->userdata('id');
                $data['email'] = $this->Gsr->users_details();
                $data['add'] = $this->Shopnship_model->display_address($user_id);
                $this->load->view('sidebar_with_header',$data);
                $this->load->view('dashboard_address_book',$data);
                $this->load->view('footer');
            }
            public function edit_profile_view(){
                $user_id = $this->session->userdata('id');
                $data['email'] = $this->Gsr->users_details();
                $data['address'] = $this->Gsr->users_address_details($user_id);
                $data['add'] = $this->Shopnship_model->display_address($user_id);
                $data['order_count'] = $this->Gsr->order_count($user_id); 
                $data['assis_order_count'] = $this->Gsr->assisted_order_count($user_id);
                $data['inter_order_count'] = $this->Gsr->international_order_count($user_id);
                $this->load->view('sidebar_with_header',$data);
                $this->load->view('edit_profile',$data);
                $this->load->view('footer');
            }

            public function update_record()
            {
              $id= $this->input->post('id');
              $data = array(
                  'fname' => $this->input->post('first_name'),
                  'lname' => $this->input->post('last_name'),
                  'address_line' => $this->input->post('address_line'),
                  'landmark'     => $this->input->post('landmark'),
                  'zipcode'      => $this->input->post('zipcode'),
                  'state'        => $this->input->post('state'),
                  'state'         => $this->input->post('city'),
                  'phone'        => $this->input->post('phone_number')
               );
            //    echo "<pre>";
            //    print_r($data);
            //    exit;
               $query = $this->Gsr->update_data($id,$data);
               if($query == True)
               {
                   redirect('Shopnship/edit_profile_view', 'refresh');
               }
               else{
                   redirect('Shopnship/edit_profile_view', 'refresh');
               }
                  
                }
            public function shopnship_insert_message(){
               
                $shopnship_id = $this->input->post('order_id');
                $from_id = $this->input->post('from_id');
                $message_data = array(
                
                 'to_id'            => $this->session->userdata('id'),
                 'from_id'          => $from_id,
                'order_id'          => $shopnship_id,
                'message'           => $this->input->post('textarea'),
                'message_type'      => $this->input->post('message_type'),
                'send_by_admin'     => '0',
                'shipment_type'     => '1',
                'created_date'      => date('Y-m-d H:i:s'),

                ); 
                // echo "<pre>";
                // print_r($message_data);
                // exit;
                $result = $this->Shopnship_model->sender_add_message($message_data);
                echo json_encode($result);
                           
            }
            public function assisted_insert_message(){
                $assisted_id = $this->input->post('order_id');
                $from_id = $this->input->post('from_id');
                $message_data = array(

                'to_id'            => $this->session->userdata('id'),
                'from_id'          => $from_id,
                'order_id'          => $assisted_id,
                'message'           => $this->input->post('textarea'),
                'message_type'      => $this->input->post('message_type'),
                'send_by_admin'     => '0',
                'shipment_type'     => '2',
                'created_date'      => date('Y-m-d H:s:i'),

                ); 
                // echo "<pre>";
                // print_r($message_data);
                // exit;
                $result = $this->Shopnship_model->sender_add_message($message_data);
                echo json_encode($result);            
            }
            public function international_insert_message(){
                $international_id = $this->input->post('order_id');
                $from_id = $this->input->post('from_id');
                $message_data = array(
                'to_id'            => $this->session->userdata('id'),
                'from_id'          => $from_id,
                'order_id'          => $international_id,
                'message'           => $this->input->post('textarea'),
                'message_type'      => $this->input->post('message_type'),
                'send_by_admin'     => '0',
                'shipment_type'     => '3',
                'created_date'      => date('Y-m-d H:s:i'),
                ); 
                $result = $this->Shopnship_model->sender_add_message($message_data);
                echo json_encode($result);            
            }
          
            public function address_update(){
                $address_id = $this->input->post('address_id');

                $add_data= [
                    // 'address_id' =>$this->input->post('address_id'),
                    'fname' => $this->input->post('first_name'),
                    'lname' => $this->input->post('last_name'),
                    'phone_number' => $this->input->post('phone_number'),
                    'street_address' => $this->input->post('street_address'),
                    'gate_code'      => $this->input->post('gate_code'),
                    'city'           => $this->input->post('city'),
                    'state'          => $this->input->post('state'),
                    'country'        => $this->input->post('country'),
                    'pin_code'       => $this->input->post('pin')
            ];
            $result = $this->Shopnship_model->update_address($address_id,$add_data);
            if($result==TRUE){
                redirect('Shopnship/dashboard_address_book', 'refresh');
            }
            else{
                redirect('Shopnship/dashboard_address_book', 'refresh');
            }
            }
            public function shopnship_invoice(){
                $shopnship_id = $this->uri->segment(3);
                $invoice['record'] = $this->Shopnship_model->shopnship_invoice($shopnship_id);
                $invoice['address'] = $this->Shopnship_model->shopnship_invoice_address($invoice['record']->address_id);
                $invoice['users']  = $this->Shopnship_model->shopnship_invoice_users($invoice['record']->user_id);
                $this->load->view('invoice',$invoice);
              }
              public function assisted_invoice(){
                $assisted_id = $this->uri->segment(3);
                $invoice['record'] = $this->Shopnship_model->assisted_invoice($assisted_id);
                $invoice['address'] = $this->Shopnship_model->assisted_invoice_address($invoice['record']->address_id);
                $invoice['users']  = $this->Shopnship_model->assisted_invoice_users($invoice['record']->user_id);
                $this->load->view('assisted_invoice',$invoice);
              }
              
            public function shopnship_pdf(){
                $this->load->library('Fpdf_gen');
                $this->fpdf->SetFont('Arial');
               // $this->load->view('invoice');
                $this->fpdf->cell(10,10);
               //$invoice= $this->load->view('invoice');
                //$this->load->view('pdf');
                $this->fpdf->output('invoice.pdf','D');
                
            }
            
            public function shopnshippdf(){
                //$this->load->library('pdf');
                    // $shopnship_id = $this->uri->segment(3);
                    // $invoice['record'] = $this->Shopnship_model->shopnship_pdf($shopnship_id);
                    // $invoice['address'] = $this->Shopnship_model->shopnship_pdf_address($invoice['record']->address_id);
                    // $invoice['users']  = $this->Shopnship_model->shopnship_pdf_users($invoice['record']->user_id);

                    $this->load->view('test');
                    $html = $this->output->get_output();
                    $this->load->library('pdf');
                    $this->dompdf->loadHtml($html);
                    $this->dompdf->setPaper('A4','landscape');
                    $this->dompdf->render();
                    $this->dompdf->stream('test.pdf');
                    // $html_content = '<h3>Payment Details</h3>';
                    // $html_content.= $this->Shopnship_model->fetch_single_details_shopnship($shopnship_id);
                    // $invoice['record'] = $this->Shopnship_model->shopnship_pdf($shopnship_id);
                    // $invoice['address'] = $this->Shopnship_model->shopnship_pdf_address($invoice['record']->address_id);
                    // $invoice['users']  = $this->Shopnship_model->shopnship_pdf_users($invoice['record']->user_id);
                    // $html = $this->load->view('shopnshippdf',$invoice,true);
                    // echo "<pre>";
                    // print_r($html);
                    // exit;
                   // $dompdf = new DOMPDF();
                    // $this->pdf->load_Html($html);
                    // $this->pdf->set_paper("a4", "landscape" );
                    // $this->pdf->render();
                    // $this->pdf->stream(''.$shopnship_id.".pdf",array("Attachment" => 0));

                //     $this->load->library('Pdf');
                //    $html= $this->pdf->load_view('shopnshippdf' );
                //     $this->pdf->load_html($html,$invoice,true);
                //     $this->pdf->render();
                //     $this->pdf->stream("shopnship.pdf");
               // }
               // $shopnship_id = $this->uri->segment(3);

              
                // 
                // $dompdf->load_html($html);
                // $dompdf->set_paper("a4", "landscape" );
                // $dompdf->render();
                // $dompdf->stream();
            }

            // public function pdf(){
            //     $shopnship_id = $this->uri->segment(3);
            //     $invoice['record'] = $this->Shopnship_model->shopnship_pdf($shopnship_id);
            //     $invoice['address'] = $this->Shopnship_model->shopnship_pdf_address($invoice['record']->address_id);
            //     $invoice['users']  = $this->Shopnship_model->shopnship_pdf_users($invoice['record']->user_id);
            // //    echo "<pre>";
            // //     print_r($invoice['users']);
            // //     exit;
            //     $this->load->view('invoice',$invoice);
            //   }


            //   public function assisted_pdf(){
            //     $assisted_id = $this->uri->segment(3);
            //     $invoice['record'] = $this->Shopnship_model->assisted_pdf($assisted_id);
            //     $invoice['address'] = $this->Shopnship_model->assisted_pdf_address($invoice['record']->address_id);
            //     $invoice['users']  = $this->Shopnship_model->assisted_pdf_users($invoice['record']->user_id);
            //     $this->load->view('assisted_invoice',$invoice);
            //   }
        //   public function pdf(){
           
        //     $this->load->view('pdf');
        //   }
        //   public function downloadpdf(){
        //     $this->load->helper('download');
        //     $file = 'pdf.php';
        //     force_download($file, NULL);
        //   }

        // public function download_pdf(){
        //     $this->load->helper('download');
        //     $data = $this->load->view('invoice');
        //     $name ="invoice.pdf" ;
        //     force_download($name, $data);
        // }
        // public function pdf(){
        //    // $this->load->view('invoice');
        //    // $html = $this->output->get_output();
        //     $this->load->library('pdf');
        //     // $this->pdf->loadHtml($html);
        //     // $this->pdf->setPaper('A4', 'potrait');
        //     $this->load->view('invoice');
        //     $this->pdf->render();
        //     $this->pdf->stream('invoice.pdf', array("Attachment"=>0));
        // }

        public function testpdf(){

            //$this->load->view('testpdf');
            $this->load->view('shopnshippdf');
            $html = $this->output->get_output();
            $this->load->library('pdf');
            $this->dompdf->loadHtml($html);
            $this->dompdf->setPaper('A4','landscape');
            $this->dompdf->render();
            $this->dompdf->stream('test.pdf');
            // $this->load->library('pdf');
            // $html = $this->load->view('testpdf',[],true);
            // $dompdf = new DOMPDF();
 
            
     
            // $dompdf->loadHtml($html);
     
            // $dompdf->setPaper('A4', 'landscape');
            
            // $dompdf->render();
     
            // $pdf = $dompdf->output();
     
            // $dompdf->stream();
        }
}
?>