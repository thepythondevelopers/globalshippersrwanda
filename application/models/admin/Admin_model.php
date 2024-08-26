<?php

class Admin_model extends CI_Model{
    
    public function insert_message($message){
        return $this->db->insert('gsr_chatbot',$message);

    }
    public function receiver_display_msg($shopnship_id){
        $query = $this->db->select("*")
                          ->from("gsr_chatbot")  
                          ->where('order_id',$shopnship_id)  
                          ->order_by('created_date')          
                          ->get();
        return $query->result();
    }

    public function shopnship_count(){
        return $this->db->count_all('shopnship_item_details');
    }
    public function shopnship_order(){
       $query = $this->db->select('*,count(id) as total_item')
                         ->from('shopnship_item_details')->group_by('shopnship_id')
                         ->get();
        return $query->result();
    }
    public function shopnship_order_receive(){
        $query = $this->db->select('*, count(id) as item_recev') 
                          ->from('shopnship_item_details')->group_by('shopnship_id')->having('checkbox','1')
                          //->where('user_id',$user_id)-
                          ->get();
             return $query->result();
      }
    public function shopnship_order_list($user_id){
        $query = $this->db->select('*, count(id) as total_item')
                          ->from('shopnship_item_details')
                          ->where('user_id',$user_id)->group_by('shopnship_id')
                          ->get();
         return $query->result();
     }
    //  public function shopnship_item_receive($user_id){
    //    $query = $this->db->select(' *,count(id) as item_recev') 
    //                      ->from('shopnship_item_details')
    //                      ->where('user_id',$user_id)->group_by('shopnship_id')->having('checkbox',1)
    //                      ->get();
    //         return $query->result();
    //  }
     public function assisted_order_listing(){
        $query = $this->db->select('*,count(id) as total_item')
                          ->from('assisted_shopnship_item_details')->group_by('assisted_id')
                          ->get();
         return $query->result();
     }
    public function assisted_order($user_id){
        $query = $this->db->select('*,, count(id) as total_item')
                   ->from('assisted_shopnship_item_details')
                   ->where('user_id',$user_id)->group_by('assisted_id')
                   ->get();
         return $query->result();
     }
     public function international_order($user_id){
        $query = $this->db->select('*,count(order_id) as total_item')
                   ->from('international_order_details')
                   ->where('user_id',$user_id)->group_by('order_id')
                   ->get();
         return $query->result();
     }
     public function international_order_listing(){
        $query = $this->db->select('*,count(order_id) as total_item')
                          ->from('international_order_details')->group_by('order_id')
                          ->get();
         return $query->result();
     }
    public function assisted_count(){
        return $this->db->count_all('assisted_shopnship_item_details');
    }
    public function international_count(){
        return $this->db->count_all('international_order_details');
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
      public function international_order_details($order_id){
        $query= $this->db->select("*")
                         ->from("international_details_package_information")
                         ->join('tbl_item_type','tbl_item_type.item_type_value = international_details_package_information.product_type','left')
                         ->where('international_id',$order_id)
                         ->get(); 
          return $query->result();
     }
     public function internation_pickup_address($order_id){
        $query =$this->db->select("*")
                         ->from("internation_indian_pickup_address")
                         ->where('order_id',$order_id)
                         ->get(); 
        return $query->row_object();
     }

     public function internation_delivery_address_details($order_id){
        $query =$this->db->select("*")
                         ->from("international_destination_address")
                         ->where('order_id',$order_id)
                         ->get(); 
            return $query->row_object();
      }
     public function shopnship_delivery_address($address_id){
        $address = $this->db->select("*")
                          ->from("user_address")
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
        public function admin_login($email,$password){
            $query = $this->db->where(['email'=>$email,'password'=>$password])
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
        $id = $_REQUEST['$id'];
        $val = $_REQUEST['$val'];
        if($val == 1){
            $status = 0;
        }
        else{
            $status = 1;
        }
        $data = array('status' => $status);
        $this->db->where('id',$id);
        return $this->db->update('users',$data);
    }

  
   
    public function insert_payment_data($data){
        return $this->db->insert('gsr_admin_payment',$data);
    }
    public function insert_shipment_data($data){
        return $this->db->insert('gsr_shipment',$data);
    }
    public function shopnship_payment_display($shopnship_id){
        $query = $this->db->select('*')
                          ->from('gsr_admin_payment')
                          ->where('order_id',$shopnship_id)
                          ->where('type','shopnship')
                          ->get();
        return $query->result();
    }
    public function assisted_payment_display($assisted_id){
        $query = $this->db->select('*')
                          ->from('gsr_admin_payment')
                          ->where('order_id',$assisted_id)
                          ->where('type','assisted')
                          ->get();
        return $query->result();
    }
    public function international_payment_display($order_id){
        $query = $this->db->select('*')
                          ->from('gsr_admin_payment')
                          ->where('order_id',$order_id)
                          ->where('type','international')
                          ->get();
        return $query->result();
    }
    public function display_shipment_shopnship($shopnship_id){
        $query = $this->db->select('*')
                          ->from('gsr_shipment')
                          ->where('order_id',$shopnship_id)
                          ->where('shipping ','shopnship')
                          ->get();
        return $query->result();
    }
    public function display_shipment_assisted($assisted_id){
        $query = $this->db->select('*')
                          ->from('gsr_shipment')
                          ->where('order_id',$assisted_id)
                          ->where('shipping ','assisted')
                          ->get();
        return $query->result();
    }
    public function display_shipment_international($order_id){
        $query = $this->db->select('*')
                          ->from('gsr_shipment')
                          ->where('order_id',$order_id)
                          ->where('shipping ','international')
                          ->get();
        return $query->result();
    }
        public function update_item_received($id,$record){
            return $this->db->set('item_received',$record['item_received'])
                            ->where('id',$id)
                            ->update('shopnship_item_details',$record);
        }

        public function assisted_update_order_status($id,$record){
            return $this->db->set('item_received',$record['item_received'])
                            ->where('id',$id)
                            ->update('assisted_shopnship_item_details',$record);
        }
        public function international_update_order_status($id,$record){
            return $this->db->set('item_received',$record['item_received'])
                            ->where('id',$id)
                            ->update('international_details_package_information',$record);
        }
      public function address($address){
        return $this->db->insert('admin_address',$address);
      }

      public function display_address(){
     $address = $this->db->select('*')
                         ->from('admin_address')
                         ->get();
        return $address->row_object();
      }

}
   

?>