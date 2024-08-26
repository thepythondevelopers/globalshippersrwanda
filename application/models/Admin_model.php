<?php

class Admin_model extends CI_Model{
    
    public function insert_message($message){
        return $this->db->insert('gsr_chatbot',$message);

    }


    //shipping calculator functions start

    public function shipmentCountries($postdata) {
        $data = $this->db->select("*")->from("gsr_shipment_countries")->where("sc_id",$postdata)->get();
        if(!empty($data->row())) {
          return $data->row();
        } else {
          return false;
        }
    } 

    public function gethomepagecmsdata() {
      $data = $this->db->query('select * from gsr_homepage_cms')->row();
      return $data;
    }

    public function insertcmsdata($data){
    	  $this->db->where('id', 1);
       	  $this->db->update('gsr_homepage_cms',$data);
      
    }
    public function insertmodaldata($data){
      $this->db->where('id', 1);
         $this->db->update('gsr_homepage_cms',$data);
    
  }

    public function getShipmentDetails($postData) { 

      $data = $this->db->select('*')->from('gsr_shipment_rates')->where('sp_from_country_id',$postData['from_countries'])->where('sp_weight',$postData['package_weight'])->order_by('sp_date_created','ASC')->get();
        $countData = $data->num_rows();
        if($countData != 0) {
          return $data->row();
        } else {
       $data = $this->db->select('*')->from('gsr_shipment_rates')
           ->where('sp_unit_price','1')
           ->where('sp_from_country_id',$postData['from_countries'])
           ->where('sp_start_weight <= '.$postData['package_weight'])
           ->where('sp_end_weight >= '.$postData['package_weight'])
           ->order_by('sp_date_created','ASC')->get();   

         $countData = $data->num_rows();
          if($countData != 0) {
            return $data->row();
          } else {
            return false;
          }
        }
    }



    //shipping calculator functions end
    public function receiver_display_msg($shopnship_id){
        $query = $this->db->select("*")
                          ->from("gsr_chatbot")  
                          ->where('order_id',$shopnship_id)  
                          ->order_by('created_date','ASC')          
                          ->get();
        return $query->result();
    }

    public function shopnship_count(){
      $data  = $this->db->query('select COUNT(DISTINCT shopnship_id) as shopnship_id from shopnship_item_details')->row();
        return $data->shopnship_id;
    }

    public function consolidate_item_details($item_id) {
        $query = $this->db->query('SELECT shopnship_item_details.*,tbl_item_type.item_type_name as item_name FROM shopnship_item_details
        LEFT JOIN tbl_item_type
        ON shopnship_item_details.product_type = tbl_item_type.item_type_id
        where shopnship_item_details.id ='.$item_id)->row();
        return $query;
    }

    public function update_consolidate_item_details($data, $item_id) {

            $this->db->where('id', $item_id);
            $response =   $this->db->update('shopnship_item_details', $data);  
             return $response;
    }
    public function update_buyforme_item_details($data, $item_id){
            $this->db->where('id', $item_id);
            $response =   $this->db->update('assisted_shopnship_item_details', $data);  
             return $response;
    }
    public function update_pickupshipment_item_details($data, $item_id){
            $this->db->where('id', $item_id);
            $response =   $this->db->update('international_details_package_information', $data);  
             return $response;
    }
    public function buyforme_details($item_id) {
      $query = $this->db->query('SELECT tbl_item_type.item_type_name as item_name,assisted_shopnship_item_details.* FROM assisted_shopnship_item_details
        LEFT JOIN tbl_item_type ON assisted_shopnship_item_details.product_type = tbl_item_type.item_type_id
        where assisted_shopnship_item_details.id = '.$item_id)->row();
      return $query;
    }

    public function pickupshipment_details($item_id) {
      $query = $this->db->query('SELECT tbl_item_type.item_type_name as item_name,
international_details_package_information.* FROM international_details_package_information
        LEFT JOIN tbl_item_type ON 
international_details_package_information.product_type = tbl_item_type.item_type_id
        where international_details_package_information.order_id ='.$item_id)->row();
      return $query;
    }
    public function shopnship_order(){
       $query = $this->db->select('*,count(shopnship_item_details.id) as total_item, (select gsr_shipment_countries.sc_country_name as country_name from gsr_shipment_countries where gsr_shipment_countries.sc_id = shopnship_item_details.from_country_id) as from_country_name')
                         ->from('shopnship_item_details')
                         ->join('gsr_admin_payment', 'gsr_admin_payment.order_id= shopnship_item_details.shopnship_id','left')
                         ->join('gsr_shipment','gsr_shipment.order_id=shopnship_item_details.shopnship_id','left')
                         ->group_by('shopnship_item_details.shopnship_id')->order_by('created_date', 'desc')->get()->result();
                $new_query = $this->db->query('select distinct shopnship_id from shopnship_item_details where order_id IN (select tracking_id from admin_consolidate_shipment)')->result();

                          foreach($query as $subquery=>$data) {
                   $mydataavg[] = !empty($new_query[$subquery]->shopnship_id)?$new_query[$subquery]->shopnship_id:0; 
                         $q_item_received =  $this->db->query("select count(id) as item_recieved from shopnship_item_details where user_id = '".$data->user_id."' and order_status='4' and shopnship_id ='".$data->shopnship_id."' group by shopnship_id ='".$data->shopnship_id."'");
                                      
                        $data->count_item_received=($q_item_received->row()==''||empty($q_item_received->row()))? 0: $q_item_received->row()->item_recieved;
                         $newarray[] = $data;
                                               
                    } 
                    if(!empty($newarray)){
                         $returndata = array ( 
                          'newarray'=>$newarray,
                          'mydataavg'=>$mydataavg,
                      );

                    // echo "<pre>";print_r($returndata);die;
                    return $returndata;  
                      }
                      else{
                        return false;
                      }
    }
    public function shopnship_order_list($user_id){
        // $query = $this->db->select('*, count(shopnship_item_details.id) as total_item,')
        //                   ->from('shopnship_item_details')
        //                   ->join('gsr_admin_payment', 'gsr_admin_payment.order_id= shopnship_item_details.shopnship_id','left')
        //                   ->join('gsr_shipment','gsr_shipment.order_id=shopnship_item_details.shopnship_id','left')
        //                   ->where('user_id',$user_id)->group_by('shopnship_item_details.shopnship_id')
        //                   ->get()->result();
             
        //     foreach($query as $subquery=>$data) {
              
        //       $q_item_received =  $this->db->query("select count(id) as item_recieved from shopnship_item_details where user_id = '".$data->user_id."' and order_status='4' and shopnship_id ='".$data->shopnship_id."' group by shopnship_id ='".$data->shopnship_id."'");

        //         $data->count_item_received=($q_item_received->row()==''||empty($q_item_received->row()))? 0: $q_item_received->row()->item_recieved;
        //         $newarray[] = $data;
          
        //     } 
        //     if(!empty($newarray)){
        //         return $newarray;  
        //       }
        //       else{
        //         return false;
        //       }


        $query = $this->db->select('*,count(shopnship_item_details.id) as total_item, (select gsr_shipment_countries.sc_country_name as country_name from gsr_shipment_countries where gsr_shipment_countries.sc_id = shopnship_item_details.from_country_id) as from_country_name')
        ->from('shopnship_item_details')
        ->join('gsr_admin_payment', 'gsr_admin_payment.order_id= shopnship_item_details.shopnship_id','left')
        ->join('gsr_shipment','gsr_shipment.order_id=shopnship_item_details.shopnship_id','left')
        ->where('user_id',$user_id)->group_by('shopnship_item_details.shopnship_id')
        ->group_by('shopnship_item_details.shopnship_id')->order_by('created_date', 'desc')->get()->result();
$new_query = $this->db->query('select distinct shopnship_id from shopnship_item_details where order_id IN (select tracking_id from admin_consolidate_shipment)')->result();

         foreach($query as $subquery=>$data) {
  $mydataavg[] = !empty($new_query[$subquery]->shopnship_id)?$new_query[$subquery]->shopnship_id:0; 
        $q_item_received =  $this->db->query("select count(id) as item_recieved from shopnship_item_details where user_id = '".$data->user_id."' and order_status='4' and shopnship_id ='".$data->shopnship_id."' group by shopnship_id ='".$data->shopnship_id."'");
                     
       $data->count_item_received=($q_item_received->row()==''||empty($q_item_received->row()))? 0: $q_item_received->row()->item_recieved;
        $newarray[] = $data;
                              
   } 
   if(!empty($newarray)){
        $returndata = array ( 
         'newarray'=>$newarray,
         'mydataavg'=>$mydataavg,
     );

   // echo "<pre>";print_r($returndata);die;
   return $returndata;  
     }
     else{
       return false;
     }
     }  
     public function assisted_order_listing(){
        $query = $this->db->select('*,count(assisted_shopnship_item_details.id) as total_item')
                          ->from('assisted_shopnship_item_details')
                          ->join('gsr_admin_payment','gsr_admin_payment.order_id=assisted_shopnship_item_details.assisted_id','left')
                          ->join('gsr_shipment','gsr_shipment.order_id=assisted_shopnship_item_details.assisted_id','left')
                         // ->where('gsr_admin_payment.type','assisted')
                          ->group_by('assisted_shopnship_item_details.assisted_id')->order_by('created_date', 'desc')
                          ->get()->result();
                          foreach($query as $subquery=>$data) {
              
                            $q_item_received =  $this->db->query("select count(id) as item_recieved from assisted_shopnship_item_details where user_id = '".$data->user_id."' and order_status='4' and assisted_id ='".$data->assisted_id."' group by assisted_id ='".$data->assisted_id."'");
              
                              $data->count_item_received=($q_item_received->row()==''||empty($q_item_received->row()))? 0: $q_item_received->row()->item_recieved;
                              $newarray[] = $data;
                        
                          } 
                          if(!empty($newarray)){
                            return $newarray;  
                           }
                          else{
                           return false;
                          }
     }
    public function assisted_order($user_id){
        $query = $this->db->select('*,, count(assisted_shopnship_item_details.id) as total_item')
                   ->from('assisted_shopnship_item_details')
                   ->join('gsr_admin_payment','gsr_admin_payment.order_id=assisted_shopnship_item_details.assisted_id','left')
                   ->join('gsr_shipment','gsr_shipment.order_id=assisted_shopnship_item_details.assisted_id','left')
                   //->where('gsr_admin_payment.type','assisted')
                   ->where('user_id',$user_id)->group_by('assisted_shopnship_item_details.assisted_id')
                   ->get()->result();
                   foreach($query as $subquery=>$data) {
              
                    $q_item_received =  $this->db->query("select count(id) as item_recieved from assisted_shopnship_item_details where user_id = '".$data->user_id."' and order_status='4' and assisted_id ='".$data->assisted_id."' group by assisted_id ='".$data->assisted_id."'");
      
                      $data->count_item_received=($q_item_received->row()==''||empty($q_item_received->row()))? 0: $q_item_received->row()->item_recieved;
                      $newarray[] = $data;
                
                  } 
                  if(!empty($newarray)){
                    return $newarray;  
                  }
                  else{
                    return false;
                  }
     }

     public function international_order($user_id){
        $query = $this->db->select('*')
                   ->from('international_order_details')
                   ->join('gsr_admin_payment', 'gsr_admin_payment.order_id= international_order_details.international_id','left')
                   ->join('gsr_shipment','gsr_shipment.order_id=international_order_details.international_id','left')
                   ->join('international_details_package_information','international_details_package_information.international_id=international_order_details.international_id','left')
                   ->where('international_order_details.user_id',$user_id)->group_by('international_order_details.international_id')
                   ->get();
         return $query->result();
     }
     public function international_order_listing(){
        $query = $this->db->select('*')
                          ->from('international_order_details')
                          ->join('gsr_admin_payment', 'gsr_admin_payment.order_id= international_order_details.international_id','left')
                          ->join('gsr_shipment','gsr_shipment.order_id=international_order_details.international_id','left')
                          ->join('international_details_package_information','international_details_package_information.international_id=international_order_details.international_id','left')
                          ->group_by('international_order_details.order_id')->order_by('created_date', 'desc')
                          ->get();
         return $query->result();
     }
    public function assisted_count(){
      $data = $this->db->query('select COUNT(DISTINCT assisted_id) as assisted_id from assisted_shopnship_item_details')->row();
      return $data->assisted_id;
    }
    public function international_count(){
         $data = $this->db->query('select COUNT(DISTINCT international_id) as international_id from international_order_details')->row();
      return $data->international_id;
    }
    public function users_count(){
        return $this->db->count_all('users');
    }

    public function shopnship_order_details($shopnship_id){
        $query= $this->db->select("*")
                           ->from("shopnship_item_details")
                           ->join('tbl_item_type','tbl_item_type.item_type_value = shopnship_item_details.product_type','left')
                           ->where('shopnship_id',$shopnship_id)
                           ->get(); 
             return $query->result();
      }
      public function assisted_order_details($assisted_id){
        $query= $this->db->select("*")
                           ->from("assisted_shopnship_item_details")
                           ->join('tbl_item_type','tbl_item_type.item_type_value = assisted_shopnship_item_details.product_type','left')
                           ->where('assisted_id',$assisted_id)
                           ->get(); 
             return $query->result();
      }
      public function international_order_details($international_id){
        $query= $this->db->select("*")
                         ->from("international_details_package_information")
                         ->join('tbl_item_type','tbl_item_type.item_type_value = international_details_package_information.product_type','left')
                         ->where('international_id',$international_id)
                         ->get(); 
          return $query->result();
     }
     public function internation_pickup_address($international_id){
        $query =$this->db->select("*")
                         ->from("international_indian_pickup_address")
                         ->where('international_id',$international_id)
                         ->get(); 
        return $query->row_object();
     }

     public function internation_delivery_address_details($international_id){
        $query =$this->db->select("*")
                         ->from("international_destination_address")
                         ->where('international_id',$international_id)
                         ->get(); 
            return $query->row_object();
      }
     public function shopnship_delivery_address($address_id){
        $address = $this->db->select("*")
                          ->from("user_address")
                          //->where('is_deleted','0')
                          ->where("address_id",$address_id)
                          ->get();
            return $address->row_object();
     }
     public function assisted_delivery_address($address_id){
        $address = $this->db->select("*")
                          ->from("user_address")
                          ->where("address_id",$address_id)
                          ->get();
            return $address->row_object();
     }
     public function displaylogin(){
        $q = $this->db->select('*')
                      ->from('gsr_admin_login')
                      ->get();
            return $q->row();
     }
        public function admin_login($email,$password){
            $query = $this->db->where(['loginemail'=>$email,'password'=>$password])
                              ->get('gsr_admin_login');
                              if($query->num_rows()){
                                return $query->row()->id;
                            }
                            else{
                                return false;
                            }
        }
        public function email_exists(){
            $email = $this->input->post('email');
            $query = $this->db->query("SELECT email, password FROM gsr_admin_login WHERE email='$email'");    
            if($row = $query->row()){
                return TRUE;
            }else{
                return FALSE;
            }
         }
        public function temp_reset_password($temp_pass){
            $data =array(
                        'email' =>$this->input->post('email'),
                        'reset_pass'=>$temp_pass);
                        $email = $data['email'];
        
            if($data){
                $this->db->where('email', $email);
                $this->db->update('gsr_admin_login', $data);  
                return TRUE;
            }else{
                return FALSE;
            }
        
        }
        public function is_temp_pass_valid($temp_pass){
            $this->db->where('reset_pass', $temp_pass);
            $query = $this->db->get('gsr_admin_login');
            if($query->num_rows() == 1){
                return TRUE;
            }
            else return FALSE;
        }
        public function update_password($temp_pass,$password){
            return $this->db->set('password',$password)
                              ->where('reset_pass',$temp_pass)
                              ->update('gsr_admin_login');
            // return $query->result();
        }
    public function user_details(){
        $users = $this->db->select('*')
                         ->from('users')
                         ->order_by('created_date','desc')
                         ->get();
            return $users->result();
    }
    public function user_name($user_id){
        $user_name = $this->db->select('*')
                          ->from('users') 
                          ->where('id',$user_id)
                          ->get();
            return $user_name->row_object();
    }

    public function create_users($data){
     $this->db->insert('users',$data);
      
    }
    public function admin_consolidate_shipment($data){
    $response =  $this->db->insert('admin_consolidate_shipment',$data);
        return $response;
    }
     public function automate_consolidate(){
        $users = $this->db->select('*,(SELECT item_type_name From tbl_item_type WHERE tbl_item_type.item_type_id=admin_consolidate_shipment.item_type) as item_type_name, (Select shopnship_item_details.shopnship_id from shopnship_item_details where shopnship_item_details.order_id =admin_consolidate_shipment.tracking_id  LIMIT 1) as customer_order_id')
                         ->from('admin_consolidate_shipment')
                         ->order_by('date_created','desc')
                         ->get();
            return $users->result();
    }
    public function user_edit_data($id){
        $query = $this->db->select('*')
                          ->where('id',$id)
                          ->get('users');
        return $query->row_object();
    }
    public function update_user_record($id,$record){
        return $this->db->set('fname',$record['fname'],'lname',$record['lname'],'email',$record['email'],'password',$record['password'],'phone',$record['phone'])
                         ->where('id',$id)
                         ->update('users',$record);
            // return $query->result();
    }
    public function update_status(){
        $id=$_REQUEST['id'];
        $val=$_REQUEST['val'];
        if ($val==1) {
            $val='0';
        } else {
            $val= '1';
        }
        $data = array(
            'status' => $val
        );
        $this->db->where('id',$id);
         $this->db->update('users',$data); 
    }
    public function insert_payment_data($data){
        return $this->db->insert('gsr_admin_payment',$data);
    }
    public function shopnship_update_payment_display($id,$payment_id){
        $payment= $this->db->select('*')
                        ->from('gsr_admin_payment')
                        ->where('order_id',$id)
                        ->where('type','consolidation')
                        ->where('id',$payment_id)
                        ->get();
            return $payment->row_object();
    }
    public function shopnship_update_payment($orderid,$pay,$id){
      return  $query = $this->db->set('payment_id',$pay['payment_id'],'status',$pay['status'])
                                ->where('order_id',$orderid)
                                ->where('id',$id)
                                ->where('type','consolidation')
                                ->update('gsr_admin_payment',$pay);
    }
    public function shopnship_delete_payment($id,$payment_id){
        return $query = $this->db->where('order_id',$id)
                                 ->where('id',$payment_id) 
                                 ->where('type','consolidation')                    
                                 ->delete('gsr_admin_payment');
    }
    public function insert_shipment_data($data){
        return $this->db->insert('gsr_shipment',$data);
    }
    public function shopnship_payment_display($shopnship_id){
        $query = $this->db->select('*')
                          ->from('gsr_admin_payment')
                          ->where('order_id',$shopnship_id)
                          // ->where('type','shopnship')
                          ->get();
        return $query->result();
    }
    public function assisted_payment_display($assisted_id){
        $query = $this->db->select('*')
                          ->from('gsr_admin_payment')
                          ->where('order_id',$assisted_id)
                          // ->where('type','assisted')
                          ->get();
        return $query->result();
    }

    public function assisted_update_payment_display($assisted_id,$payment_id){
        $payment= $this->db->select('*')
                        ->from('gsr_admin_payment')
                        ->where('order_id',$assisted_id)
                         ->where('id',$payment_id)
                        ->get();
            return $payment->row_object();
    }
    public function assisted_update_payment($orderid,$pay,$id){
      return  $query = $this->db->set('payment_id',$pay['payment_id'],'status',$pay['status'])
                                ->where('order_id',$orderid)
                                ->where('id',$id)
                                // ->where('type','assisted')
                                ->update('gsr_admin_payment',$pay);
    }
    public function assisted_delete_payment($orderid,$payid){
        return $query = $this->db->where('order_id',$orderid)   
                                 ->where('id',$payid)                   
                                 ->delete('gsr_admin_payment');
    }


    public function international_payment_display($international_id){
        $query = $this->db->select('*')
                          ->from('gsr_admin_payment')
                          ->where('order_id',$international_id)
                          // ->where('type','international')
                          ->get();
        return $query->result();
    }

    public function international_update_payment_display($id,$paymentid){
        $payment= $this->db->select('*')
                        ->from('gsr_admin_payment')
                        ->where('id',$paymentid)
                        ->where('order_id',$id)
                        ->where('type','international')
                        ->get();
            return $payment->row_object();
    }
    public function international_update_payment($orderid,$pay,$id){
      return  $query = $this->db->set('payment_id',$pay['payment_id'],'status',$pay['status'],'invoiceamt',$pay['invoiceamt'])
                                ->where('order_id',$orderid)
                                ->where('id',$id)
                                // ->where('type','international')
                                ->update('gsr_admin_payment',$pay);
    }
    public function international_delete_payment($id,$paymentid){
        return $query = $this->db->where('order_id',$id) 
                                ->where('id',$paymentid)                   
                                 ->delete('gsr_admin_payment');
    }

    public function display_shipment_shopnship($shopnship_id){
        $query = $this->db->select('*')
                          ->from('gsr_shipment')
                          ->where('order_id',$shopnship_id)
                          ->where('shipping ','Consolidation')
                          ->get();
        return $query->result();
    }
    public function display_shipment_assisted($assisted_id){
        $query = $this->db->select('*')
                          ->from('gsr_shipment')
                          ->where('order_id',$assisted_id)
                          // ->where('shipping ','assisted')
                          ->get();
        return $query->result();
    }
    public function display_shipment_international($order_id){
        $query = $this->db->select('*')
                          ->from('gsr_shipment')
                          ->where('order_id',$order_id)
                          // ->where('shipping ','international')
                          ->get();
        return $query->result();
    }

    public function international_update_shipment_display($id,$shipid){
        $payment= $this->db->select('*')
                        ->from('gsr_shipment')
                        ->where('order_id',$id)
                        ->where('id',$shipid)
                        ->get();
            return $payment->row_object();
    }
    public function international_update_shipment($id,$shipment,$shipid){
      return  $query = $this->db->set('shipping_carrier',$shipment['shipping_carrier'],'tracking_number',$shipment['tracking_number'],'tracking_url',$shipment['tracking_url'])
                                ->where('order_id',$id)
                                ->where('id',$shipid)
                                ->update('gsr_shipment',$shipment);
    }
    public function international_delete_shipment($id,$shipid){
        return $query = $this->db->where('order_id',$id)   
                                 ->where('id',$shipid)                   
                                 ->delete('gsr_shipment');
    }


    public function shopnship_update_shipment_display($id,$shipmentid){
        $payment= $this->db->select('*')
                        ->from('gsr_shipment')
                        ->where('order_id',$id)
                        ->where('id',$shipmentid)
                       
                        ->get();
            return $payment->row_object();
    }
    public function shopnship_update_shipment($id,$shipment,$shipmentid){
        return  $query = $this->db->set('shipping_carrier',$shipment['shipping_carrier'],'tracking_number',$shipment['tracking_number'],'tracking_url',$shipment['tracking_url'])
                                ->where('order_id',$id)
                                ->where('id',$shipmentid)
                                // ->where('shipping','shopnship')
                                ->update('gsr_shipment',$shipment);
                               
    }
    public function shopnship_delete_shipment($id,$shipmentid){
        return $query = $this->db->where('order_id',$id)   
                                 ->where('id',$shipmentid)                   
                                 ->delete('gsr_shipment');
    }

    public function assisted_update_shipment_display($id,$shipid){
        $payment= $this->db->select('*')
                        ->from('gsr_shipment')
                        ->where('order_id',$id)
                        ->where('id',$shipid)
                        ->get();
            return $payment->row_object();
    }
    public function assisted_update_shipment($id,$shipment,$shipid){
      return  $query = $this->db->set('shipping_carrier',$shipment['shipping_carrier'],'tracking_number',$shipment['tracking_number'],'tracking_url',$shipment['tracking_url'])
                                ->where('order_id',$id)
                                 ->where('id',$shipid)
                                ->update('gsr_shipment',$shipment);
                      
    }
    public function assisted_delete_shipment($id,$shipid){
        return $query = $this->db->where('order_id',$id)   
                                 ->where('id',$shipid)                   
                                 ->delete('gsr_shipment');
    }


        public function update_item_received($record){
                $query =$this->db->set('order_status',$record['item_received'])
                                ->where('id', $record['id'])
                                ->update('shopnship_item_details');  
            //return $query->result();
        }
        public function create_notification($noti_data){
         return  $this->db->insert('notification',$noti_data);
                                             
        }
        public function assisted_update_order_status($record){
            $query = $this->db->set('order_status',$record['item_received'],$record['updated_date']) 
                            ->where('id',$record['id'])
                            ->update('assisted_shopnship_item_details');
                         
        }
        public function international_update_order_status($record){
               
            $query = $this->db->set('order_status',$record['item_received'],'updated_date')
                            ->where('id',$record['id'])
                            ->update('international_details_package_information');
        }
      public function update_admin_address($address){
         $query = $this->db->set('fname',$address['fname'],'lname',$address['lname'],'phone',$address['phone'],'address',$address['address'],'landmark',$address['landmark'],'state',$address['state'],'city',$address['city'],'zipcode',$address['zipcode'])
                            ->where('id',$address['id'])
                            ->update('admin_address',$address);
      }
      public function display_address(){
     $address = $this->db->select('*')
                         ->from('admin_address')
                         ->get();
        return $address->row_object();
      }
       public function display_admin_address($id){
     $address = $this->db->select('*')
                         ->from('admin_address')
                         ->where('id',$id)
                         ->get();
        return $address->row_object();
      }
      public function shopnship_invoice($shopnship_id){
        $invoice = $this->db->select('*')
                            ->from('shopnship_item_details')
                            ->where('shopnship_id',$shopnship_id)
                            ->get(); 
           return $invoice->result();
      }
      public  function shopnship_invoice_address($address_id){
        $address = $this->db->select('*')
                            ->from('user_address')
                            ->where('address_id',$address_id)
                            ->get();
                return $address->row_object();
      }
      public function shopnship_invoice_users($user_id){
        $users = $this->db->select('*')
                          ->from('users')
                          ->where('id',$user_id)
                          ->get();
              return $users->row_object();
      }
        
      public function assisted_invoice($assisted_id){
        $invoice = $this->db->select('*')
                            ->from('assisted_shopnship_item_details')
                            ->where('assisted_id',$assisted_id)
                            ->get(); 
           return $invoice->result();
      }
      public  function assisted_invoice_address($address_id){
        $address = $this->db->select('*')
                            ->from('user_address')
                            ->where('address_id',$address_id)
                            ->get();
                return $address->row_object();
      }
      public function assisted_invoice_users($user_id){
        $users = $this->db->select('*')
                          ->from('users')
                          ->where('id',$user_id)
                          ->get();
              return $users->row_object();
      }
      
    //   public function shopnship_pdf($shopnship_id){
    //     $invoice = $this->db->select('*')
    //                         ->from('shopnship_item_details')
    //                         ->where('shopnship_id',$shopnship_id)
    //                         ->get(); 
    //        return $invoice->row_object();
    //   }
    //   public  function shopnship_pdf_address($address_id){
    //     $address = $this->db->select('*')
    //                         ->from('user_address')
    //                         ->where('address_id',$address_id)
    //                         ->get();
    //             return $address->row_object();
    //   }
    //   public function shopnship_pdf_users($user_id){
    //     $users = $this->db->select('*')
    //                       ->from('users')
    //                       ->where('id',$user_id)
    //                       ->get();
    //           return $users->row_object();
    //   }
        
        public function display_notifications(){
            $notifications = $this->db->select('*')
                                      ->from('notification')
                                      ->where('is_delete','0')
                                      ->where('is_read','0')
                                      ->where('notification_type','0')
                                      ->order_by('created_time','DESC')
                                      ->get();
                    return $notifications->result();
        }
        public function count_notification(){
            $notifi = $this->db->select('*,count(id) as count_notification')
                               ->from('notification')
                               ->where('notification_type','0')
                               ->where('is_read','0')
                               ->where('is_delete','0')
                               ->get();
                return $notifi->row_object();
        }

        public function delete_nofification($id){
            return $query = $this->db->set('is_delete','1')
                                    ->where('order_id',$id) 
                                    ->where('notification_type','0')                     
                                    ->update('notification');
                                  
         }
         public function delete_all_nofification($user_id){
            return  $q = $this->db->set('is_delete','1')
                                  ->where('user_id',$user_id)
                                  ->where('notification_type','0')
                                ->update('notification');
         }
 
        public function insert_image($imagedata){
            return $this->db->insert('order_images',$imagedata);
        } 

        public function restriction_section2($data){
          return $this->db->insert('gsr_restrictions_section2',$data);
        }
      
        public function restriction_section1($data){
          return $this->db->insert('gsr_restrictions_section1',$data);
        }
        public function getrestrictiondata_section1() {
          $data = $this->db->query('select * from gsr_restrictions_section1')->row();
          return $data;
        }
        public function getrestrictiondata_section2(){
          return $this->db->select('*')
                         ->from('gsr_restrictions_section2')
                         ->where('isdelete','0')
                        ->get()->result();
        }
        public function edit_restriction($id){
          $query = $this->db->select("*")
                             ->from('gsr_restrictions_section2')
                             ->where('id',$id)
                             ->get();
            return $query->row();
        }
        public function updaterestriction_sec2($id,$data){
         return  $this->db->set('imgpath', $data['imgpath'],'sec2_title',$data['sec2_title'],'description',$data['description'],'points',$data['points'])
                           ->where('id',$id)
                           ->update('gsr_restrictions_section2',$data);
         }
         public function restrictionsec2_delete($id){
          return $query = $this->db->set('isdelete','1')  
                                   ->where('id',$id) 
                                  // ->where('isdelete','0')                   
                                    ->update('gsr_restrictions_section2');
        }
        public function shippingcalsection1($data){
          return $this->db->insert('gsr_shipping_cal_section1',$data);
        }
        public function shippingcalsection2($data){
          return $this->db->insert('gsr_shipping_cal_sec2',$data);
        }
        public function getshippingcalsec1() {
          $data = $this->db->query('select * from gsr_shipping_cal_section1')->row();
         
          return $data;
        }
        public function getshippingcalsec2() {
          $data = $this->db->query('select * from gsr_shipping_cal_sec2')->row();
          // echo "<pre>";
          // print_r($data);
          // exit;
          return $data;
        }
        public function isalreadyhowitworksec1($id){
          $this->db->where('id',$id);
         $query= $this->db->get('gsr_howitworks_sec1');
          if($query->num_rows()>0){
            return true;
          }
          else{
            return false;
          }
        }
        public function howitworksec1update($data,$id){
          $this->db->where('id',$id);
          $this->db->update('gsr_howitworks_sec1',$data);
        }
        public function howitworksec1($data){
          return $this->db->insert('gsr_howitworks_sec1',$data);
        }
        public function howitworksec2($data){
          return $this->db->insert('gsr_howitworks_sec2',$data);
        }
        
        
        

        public function faqsec2($data){
          return $this->db->insert('gsr_faq_sec2',$data);
        }
        public function getfaqsec1(){
          $data = $this->db->query('select * from gsr_faq_sec1')->row();
          return $data;
        }
        public function isalreadyfaqsec1($id){
          $this->db->where('id',$id);
         $query= $this->db->get('gsr_faq_sec1');
          if($query->num_rows()>0){
            return true;
          }
          else{
            return false;
          }
        }
        public function faqsec1update($data,$id){
          $this->db->where('id',$id);
          $this->db->update('gsr_faq_sec1',$data);
        }
        public function faqsec1($data){
          return $this->db->insert('gsr_faq_sec1',$data);
        }
        public function getfaqsec2(){
          return $this->db->select('*')
                         ->from('gsr_faq_sec2')
                         ->where('isdelete','0')
                        ->get()->result();
        }

        public function edit_faqsec2($id){
          $query = $this->db->select("*")
                             ->from('gsr_faq_sec2')
                             ->where('id',$id)
                             ->get();
            return $query->row();
        }
        public function updatefaq($id,$data){
          return $this->db->set('question',$data['question'],'answer',$data['answer'])
                          ->where('id',$id)
                          ->update('gsr_faq_sec2',$data);
        }
        public function faqsec2_delete($id){
          return $query = $this->db->set('isdelete','1')  
                                   ->where('id',$id) 
                                  // ->where('isdelete','0')                   
                                    ->update('gsr_faq_sec2');
        }
        public function gethowitworkssec1(){
          $data = $this->db->query('select * from gsr_howitworks_sec1')->row();
          return $data;
        }
        public function gethowitworkssec2(){
          return $this->db->select('*')
                          ->from('gsr_howitworks_sec2')
                          ->where('isdelete','0')
                          ->get()->result();
        }
        public function edit_howitworksec2($id){
          $query = $this->db->select("*")
                             ->from('gsr_howitworks_sec2')
                             ->where('id',$id)
                             ->get();
            return $query->row();
        }
        public function updatehowitworkssec2($id,$data){
         return  $this->db->set('title',$data['title'],'description',$data['description'],'imgpath', $data['imgpath'])
                          ->where('id',$id)
                          ->update('gsr_howitworks_sec2',$data);
        }
        public function howitworkssec2_delete($id){
          return $query = $this->db->set('isdelete','1')  
                                   ->where('id',$id) 
                                  // ->where('isdelete','0')                   
                                    ->update('gsr_howitworks_sec2');
        }
        public function isalreadyconsolidationsec1($id){
          $this->db->where('id',$id);
         $query= $this->db->get('gsr_consolidation_sec1');
          if($query->num_rows()>0){
            return true;
          }
          else{
            return false;
          }
        }
        public function consolidationsec1update($data,$id){
          $this->db->where('id',$id);
          $this->db->update('gsr_consolidation_sec1',$data);
        }
        public function consolidationsec1($data){
          return $this->db->insert('gsr_consolidation_sec1',$data);
        }
        public function consolidationsec2($data){
          return $this->db->insert('gsr_consolidation_sec2',$data);
        }

        public function isalreadyconsolidationsec3($id){
          $this->db->where('id',$id);
         $query= $this->db->get('gsr_consolidation_sec3');
          if($query->num_rows()>0){
            return true;
          }
          else{
            return false;
          }
        }
        public function consolidationsec3update($data,$id){
          $this->db->where('id',$id);
          $this->db->update('gsr_consolidation_sec3',$data);
        }

        public function consolidationsec3($data){
          return $this->db->insert('gsr_consolidation_sec3',$data);
        }
        public function consolidationsec4($data){
          return $this->db->insert('gsr_consolidation_sec4',$data);
        }

        public function getconsolidationsec1(){
          $data = $this->db->query('select * from gsr_consolidation_sec1')->row();
          return $data;
        }
        public function getconsolidationsec2(){
          $data = $this->db->query('select * from gsr_consolidation_sec2')->result();
          return $data;
        }
        public function getconsolidationsec3(){
          $data = $this->db->query('select * from gsr_consolidation_sec3')->row();
          return $data;
        }
        public function getconsolidationsec4(){
          $data = $this->db->query('select * from gsr_consolidation_sec4')->result();
          return $data;
        }
        public function consolidationlistsec2(){
          return $this->db->select('*')
                          ->from('gsr_consolidation_sec2')
                          ->where('isdelete','0')
                          ->get()->result();
        }
        public function consolidationlistsec4(){
          return $this->db->select('*')
                          ->from('gsr_consolidation_sec4')
                          ->where('isdelete','0')
                          ->get()->result();
        }
        public function edit_consolidationsec2($id){
          return $this->db->select('*')
                          ->from('gsr_consolidation_sec2')
                          ->where('id',$id)
                          ->get()->row();
        }
        public function consolidationsec2update($sec2id,$data){
          return $this->db->set('title',$data['title'],'description',$data['description'],'imgpath',$data['imgpath'])
                          ->where('id',$sec2id)
                          ->update('gsr_consolidation_sec2',$data);
        }
        public function consolidationssec2_delete($id){
          return $query = $this->db->set('isdelete','1')  
                                   ->where('id',$id) 
                                  // ->where('isdelete','0')                   
                                    ->update('gsr_consolidation_sec2');
        }
        public function edit_consolidationsec4($id){
          return $this->db->select('*')
                          ->from('gsr_consolidation_sec4')
                          ->where('id',$id)
                          ->get()->row();
        }
        public function consolidationfaqupdate($faqid,$data){
          return $this->db->set('question',$data['question'],'answer',$data['answer'])
                          ->where('id',$faqid)
                          ->update('gsr_consolidation_sec4',$data);
        }
        public function consolidationsfaq_delete($id){
          return $query = $this->db->set('isdelete','1')  
                                   ->where('id',$id) 
                                  // ->where('isdelete','0')                   
                                    ->update('gsr_consolidation_sec4');
        }
        public function isalreadyhelpcentresec1($id){
          $this->db->where('id',$id);
         $query= $this->db->get('gsr_help_centre_sec1');
          if($query->num_rows()>0){
            return true;
          }
          else{
            return false;
          }
        }
        public function helpcentresec1update($data,$id){
          $this->db->where('id',$id);
          $this->db->update('gsr_help_centre_sec1',$data);
        }
        public function helpinsertsec1($data){
          return $this->db->insert('gsr_help_centre_sec1',$data);
        }

        public function gethelpsec1(){
          $data = $this->db->query('select * from gsr_help_centre_sec1')->row();
          return $data;
        }
        public function helpcentreinsertsec2($data){
          return $this->db->insert('gsr_help_centre_sec2',$data);
        }

        public function gethelpsec2(){
          $data = $this->db->query('select * from gsr_help_centre_sec2')->result();
          return $data;
        }

        public function isalreadyblogsec1($id){
          $this->db->where('id',$id);
         $query= $this->db->get('gsr_blog_section1');
          if($query->num_rows()>0){
            return true;
          }
          else{
            return false;
          }
        }
        public function blogsec1update($data,$id){
          $this->db->where('id',$id);
          $this->db->update('gsr_blog_section1',$data);
        }

      public function blogsec1insert($data){
        return $this->db->insert('gsr_blog_section1',$data);
      }

      public function blogsec2insert($data){
        return $this->db->insert('gsr_cms_blog',$data);
      }
      public function getblogsec1(){
        return $this->db->query('select * from gsr_blog_section1')->row();
      }
     

      // public function aboutusinsertsec1($data){
      //   return $this->db->query('gsr_aboutus_sec1',$data);
      // }
      public function getaboutsec1(){
        return $this->db->query('select * from gsr_aboutus_sec1')->row();
      }
      public function update_aboutsec1($data,$sec1id){
        return $query = $this->db->set('title',$data['title'],'description',$data['description'],'imgpath', $data['imgpath'])
                                 ->where('id',$sec1id)
                                ->update('gsr_aboutus_sec1',$data);
        }
        public function update_aboutsec2($data,$sec2id){
          return $query = $this->db->set('title',$data['title'],'description',$data['description'],'heading', $data['heading'],'points',$data['points'])
                                   ->where('id',$sec2id)
                                  ->update('gsr_aboutus_sec2',$data);
          }
      
          public function update_aboutsec3($data,$sec3id){
            return $query = $this->db->set('title',$data['title'],'description',$data['description'])
                                     ->where('id',$sec3id)
                                    ->update('gsr_aboutus_sec3',$data);
            }
            public function update_aboutsec5($data,$sec5id){
              return $query = $this->db->set('title',$data['title'],'description',$data['description'],'heading', $data['heading'],'points',$data['points'])
                                       ->where('id',$sec5id)
                                      ->update('gsr_aboutus_sec5',$data);
              }
              public function getaboutsec4(){
                return $this->db->select('*')
                                ->from('gsr_aboutus_sec4')
                                ->where('isdelete','0')
                                ->get()->result();
              }
              public function editaboutsec4($id){
                return $this->db->select('*')
                                ->from('gsr_aboutus_sec4')
                                ->where('id',$id)
                                ->get()->row();
              }
              public function update_aboutsec4($data,$sec4id){
                return $query = $this->db->set('title',$data['title'],'description',$data['description'],'imgpath',$data['imgpath'])
                                         ->where('id',$sec4id)
                                        ->update('gsr_aboutus_sec4',$data);
                }
                public function aboutsec4_delete($id){
                  return $query = $this->db->set('isdelete','1')  
                                           ->where('id',$id) 
                                          // ->where('isdelete','0')                   
                                            ->update('gsr_aboutus_sec4');
                }
      public function aboutusinsertsec2($data){
        return $this->db->insert('gsr_aboutus_sec2',$data);
      }
      public function aboutusinsertsec3($data){
        return $this->db->insert('gsr_aboutus_sec3',$data);
      }
      public function aboutusinsertsec4($data){
        return $this->db->insert('gsr_aboutus_sec4',$data);
      }
      public function aboutusinsertsec5($data){
        return $this->db->insert('gsr_aboutus_sec5',$data);
      }
      public function aboutusinsertsec6($data){
        return $this->db->insert('gsr_aboutus_sec6',$data);
      }
      public function aboutusinsertsec7($data){
        return $this->db->insert('gsr_aboutus_sec7',$data);
      }
      public function getaboutussec1(){
        return $this->db->query('select* from gsr_aboutus_sec1')->row();
      }
      public function getaboutussec2(){
        return $this->db->query('select* from gsr_aboutus_sec2')->row();
      }
      public function getaboutussec3(){
        return $this->db->query('select* from gsr_aboutus_sec3')->row();
      }
      public function getaboutussec4(){
        return $this->db->select('*')
                        ->from('gsr_aboutus_sec4')
                        ->where('isdelete','0')
                        ->get()
                        ->result();
      }
      public function getaboutussec5(){
        return $this->db->query('select* from gsr_aboutus_sec5')->row();
      }
      // public function getaboutussec6(){
      //   return $this->db->query('select* from gsr_aboutus_sec6')->result();
      // }
      // public function getaboutussec7(){
      //   return $this->db->query('select* from gsr_aboutus_sec7')->result();
      // }
      
      public function updatecontact($data,$id){
        return $this->db->set('heading',$data['heading'],'text',$data['text'])
                          ->where('id',$id)
                          ->update('gsr_cms_contactus',$data);
                          
      }
      public function getcontact(){
        return $this->db->query('select * from gsr_cms_contactus')->row();
      }
      public function admingetemail(){ 
        return $this->db->query('select * from gsr_admin_login')->row();
       }

       public function update_admin_email($email){
        $query = $this->db->set('email',$email['email'])
                            ->where('id',$email['id'])
                            ->update('gsr_admin_login',$email);
       }
       public function helpcatinsert($data){
        return $this->db->insert('gsr_helpcentre_categories',$data);
       }

       public function helpcentregetcat(){
        return $this->db->query("select * from gsr_helpcentre_categories")->result();
       }
       public function gethelpcentredatawithid(){
        $cat = $this->db->select('*') 
                          ->from('gsr_helpcentre_categories')->get();
              return $cat->result();
              
       }
       public function helpinsertqa($qadata){
        return $this->db->insert('gsr_helpcentre_qna',$qadata);
       }
       public function gethelpcentreqa($id){
       
        return $this->db->query("select qna_id, cat_question from gsr_helpcentre_qna where cat_id = ".$id)->result();
       }

       public function helpcentrecatqa(){ 
        $query = $this->db->select("*")
                          ->from('gsr_helpcentre_qna')
                          ->join('gsr_helpcentre_categories','gsr_helpcentre_categories.cat_id = gsr_helpcentre_qna.cat_id','left')
                          ->where('gsr_helpcentre_qna.qna_cat_status','0')
                          ->get();
                  return $query->result();
       }
    public function helpcentrecat($qnaId){
        $query = $this->db->select("*")
                          ->from('gsr_helpcentre_qna')
                          ->join('gsr_helpcentre_categories','gsr_helpcentre_categories.cat_id = gsr_helpcentre_qna.cat_id','left')
                           ->where('gsr_helpcentre_qna.qna_id',$qnaId)
                          ->get();
                  return $query->row();
       }
       public function edit_helpcentre($qna_id){
        $query = $this->db->select("*")
                          ->from('gsr_helpcentre_qna')
                          //->join('gsr_helpcentre_categories','gsr_helpcentre_categories.cat_id = gsr_helpcentre_qna.cat_id','left')
                          ->where('qna_id',$qna_id)
                          ->get();
                  return $query->row();
       }
       public function update_helpcentre_record($id,$record){
        return $this->db->set('cat_id',$record['cat_id'],'cat_question',$record['cat_question'])
                         ->where('qna_id',$id)
                         ->update('gsr_helpcentre_qna',$record);
            // return $query->result();
    }
    public function helpcentre_delete($id){
      return $query = $this->db->set('qna_cat_status','1')  
                               ->where('qna_id',$id)                    
                               ->update('gsr_helpcentre_qna');
  }

  public function edit_blog($id){
    $query = $this->db->select("*")
                      ->from('gsr_cms_blog')
                      ->where('id',$id)
                      ->get();
              return $query->row();
   }
   public function updateblog($blogid,$updatedata){
    return $this->db->set('imgpath',$updatedata['imgpath'],'heading',$updatedata['heading'],'title',$updatedata['title'],'description',$updatedata['description'])
                    ->where('id',$blogid)
                    ->update('gsr_cms_blog',$updatedata);
   }
   public function blog_delete($blogid){
    return $query = $this->db->set('status','1')  
                             ->where('id',$blogid)                    
                             ->update('gsr_cms_blog');
}
public function blogcat($id){
  $query = $this->db->select("*")
                    ->from('gsr_cms_blog')
                     ->where('id',$id)
                    ->get();
            return $query->row();
 }
 public function getblogsec2(){
  $query = $this->db->select("*")
                    ->from('gsr_cms_blog')
                    ->where('status','0')
                    ->get();
    return $query->result();
}
public function limitblogdetails(){
  $query = $this->db->select('*')
                    ->from('gsr_cms_blog')
                    ->where('status','0')
                    ->limit(3)
                    ->get();
           return $query->result();
}

public function userdetailsemail($user_id){
 return $query = $this->db->select('*')
                    ->from('users')
                    ->where('id',$user_id)
                    ->get()->row();
}
public function payupdate($id){
  return $query = $this->db->select('*')
                    ->from('assisted_shopnship_item_details')
                    ->where('assisted_id',$id)
                    ->get()->result();
}
public function payupdateusers($id){
  return $query = $this->db->select('*')
                    ->from('users')
                    ->where('id',$id)
                    ->get()->row();
}
public function internationalpayupdate($id){
  return $query = $this->db->select('*')
                    ->from('international_order_details')
                    ->where('international_id',$id)
                    ->get()->result();
}
public function shopnshippayupdate($id){
  return $query = $this->db->select('*')
                    ->from('shopnship_item_details')
                    ->where('shopnship_id',$id)
                    ->get()->result();
}
public function getshipping(){
  return $this->db->get('gsr_cms_shipping_cal')->row();
}
public function updateshipping($id,$data){
   $this->db->set('description',$data['description'])
                  ->where('id',$id)
                  ->update('gsr_cms_shipping_cal',$data);
}
public function admin_user_emaillogin($email){
  $q = $this->db->where(['email'=>$email])
                ->get('users');
                if($q->num_rows()){
                  return $q->row()->id;
              }
              else{
                  return false;
              }

}
public function getprivacy(){
  return $query = $this->db->select('*')
                            ->from('gsr_privacy')
                            ->get()->row();


}
public function update_privacy($privacy){
  return $query = $this->db->set('description',$privacy['description'])
                       ->where('id',$privacy['id'])
                       ->update('gsr_privacy',$privacy);
  }
  public function getterms(){
   return $query = $this->db->select('*')
                             ->from('gsr_terms')
                             ->get()->row();
 
 
 }
 public function update_terms($terms){
  return $query = $this->db->set('description',$terms['description'])
                       ->where('id',$terms['id'])
                       ->update('gsr_terms',$terms);
  }
 }
  
  
   

?>