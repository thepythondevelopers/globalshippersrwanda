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
       $query = $this->db->select('*,count(shopnship_item_details.id) as total_item')
                         ->from('shopnship_item_details')
                         ->join('gsr_admin_payment', 'gsr_admin_payment.order_id= shopnship_item_details.shopnship_id','left')
                         ->join('gsr_shipment','gsr_shipment.order_id=shopnship_item_details.shopnship_id','left')
                         ->group_by('shopnship_id')->get()->result();
                          foreach($query as $subquery=>$data) {
              
                         $q_item_received =  $this->db->query("select count(id) as item_recieved from shopnship_item_details where user_id = '".$data->user_id."' and order_status='3' and shopnship_id ='".$data->shopnship_id."' group by shopnship_id ='".$data->shopnship_id."'");
                                      
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
    public function shopnship_order_list($user_id){
        $query = $this->db->select('*, count(shopnship_item_details.id) as total_item,')
                          ->from('shopnship_item_details')
                          ->join('gsr_admin_payment','gsr_admin_payment.order_id=assisted_shopnship_item_details.assisted_id','left')
                          ->join('gsr_admin_payment', 'gsr_admin_payment.order_id= shopnship_item_details.shopnship_id','left')
                          ->join('gsr_shipment','gsr_shipment.order_id=shopnship_item_details.shopnship_id','left')
                          ->where('user_id',$user_id)->group_by('shopnship_id')
                          ->get()->result();
        
            foreach($query as $subquery=>$data) {
              
              $q_item_received =  $this->db->query("select count(id) as item_recieved from shopnship_item_details where user_id = '".$data->user_id."' and order_status='3' and shopnship_id ='".$data->shopnship_id."' group by shopnship_id ='".$data->shopnship_id."'");

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
    //  public function shopnship_item_receive($user_id){
    //    $query = $this->db->select('*,count(id) as total_receive') 
    //                      ->from('shopnship_item_details')
    //                      ->where('user_id',$user_id)
    //                      ->where('order_status','3')->group_by('shopnship_id')
    //                      ->get();
    //         return $query->result();
    //  } 
     public function assisted_order_listing(){
        $query = $this->db->select('*,count(assisted_shopnship_item_details.id) as total_item')
                          ->from('assisted_shopnship_item_details')
                          ->join('gsr_admin_payment','gsr_admin_payment.order_id=assisted_shopnship_item_details.assisted_id','left')
                          ->join('gsr_shipment','gsr_shipment.order_id=assisted_shopnship_item_details.assisted_id','left')
                         // ->where('gsr_admin_payment.type','assisted')
                          ->group_by('assisted_shopnship_item_details.assisted_id')
                          ->get()->result();
                          foreach($query as $subquery=>$data) {
              
                            $q_item_received =  $this->db->query("select count(id) as item_recieved from assisted_shopnship_item_details where user_id = '".$data->user_id."' and order_status='3' and assisted_id ='".$data->assisted_id."' group by assisted_id ='".$data->assisted_id."'");
              
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
              
                    $q_item_received =  $this->db->query("select count(id) as item_recieved from assisted_shopnship_item_details where user_id = '".$data->user_id."' and order_status='3' and assisted_id ='".$data->assisted_id."' group by assisted_id ='".$data->assisted_id."'");
      
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
    //  public function assisted_item_receive($user_id){
    //     $query = $this->db->select('count(id) as item_receive') 
    //                       ->from('assisted_shopnship_item_details')
    //                       ->where('user_id',$user_id)
    //                       ->where('item_received','1')->group_by('assisted_id')
    //                       ->get();
    //          return $query->result();
    //   }
    //   public function assisted_order_receive(){
    //     $query = $this->db->select('count(id) as item_receive') 
    //                       ->from('assisted_shopnship_item_details')
    //     // ->where('user_id',$user_id)
    //                       ->where('item_received','1')->group_by('assisted_id')
    //                       ->get();
    //         return $query->result();
    //   }
     public function international_order($user_id){
        $query = $this->db->select('*')
                   ->from('international_order_details')
                   ->join('gsr_admin_payment', 'gsr_admin_payment.order_id= international_order_details.order_id','left')
                   ->join('gsr_shipment','gsr_shipment.order_id=international_order_details.order_id','left')
                   ->join('international_details_package_information','international_details_package_information.order_id=international_details_package_information.order_id','left')
                   ->where('international_order_details.user_id',$user_id)->group_by('international_order_details.order_id')
                   ->get();
         return $query->result();
     }
     public function international_order_listing(){
        $query = $this->db->select('*')
                          ->from('international_order_details')
                          ->join('gsr_admin_payment', 'gsr_admin_payment.order_id= international_order_details.order_id','left')
                          ->join('gsr_shipment','gsr_shipment.order_id=international_order_details.order_id','left')
                          ->join('international_details_package_information','international_details_package_information.order_id=international_details_package_information.order_id','left')
                          ->group_by('international_order_details.order_id')
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
                         ->from("international_indian_pickup_address")
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
     public function displaylogin(){
        $q = $this->db->select('*')
                      ->from('gsr_admin_login')
                      ->get();
            return $q->row();
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
        $id = $_REQUEST['id'];
        $val = $_REQUEST['val'];
        if($val == 1){
            $val = 0;
        }
        else{
            $val = 1;
        }
        $data = array('status' => $val);
        $this->db->where('id',$id);
        return $this->db->update('users',$data);
    }
    public function insert_payment_data($data){
        return $this->db->insert('gsr_admin_payment',$data);
    }
    public function shopnship_update_payment_display($id){
        $payment= $this->db->select('*')
                        ->from('gsr_admin_payment')
                        ->where('order_id',$id)
                        ->where('type','shopnship')
                        ->get();
            return $payment->row_object();
    }
    public function shopnship_update_payment($id,$pay){
      return  $query = $this->db->set('payment_id',$pay['payment_id'],'status',$pay['status'])
                                ->where('order_id',$id)
                                ->where('type','shopnship')
                                ->update('gsr_admin_payment',$pay);
    }
    public function shopnship_delete_payment($id){
        return $query = $this->db->where('order_id',$id)  
                                 ->where('type','shopnship')                    
                                 ->delete('gsr_admin_payment');
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

    public function assisted_update_payment_display($id){
        $payment= $this->db->select('*')
                        ->from('gsr_admin_payment')
                        ->where('order_id',$id)
                        ->where('type','assisted')
                        ->get();
            return $payment->row_object();
    }
    public function assisted_update_payment($id,$pay){
      return  $query = $this->db->set('payment_id',$pay['payment_id'],'status',$pay['status'])
                                ->where('order_id',$id)
                                ->where('type','assisted')
                                ->update('gsr_admin_payment',$pay);
    }
    public function assisted_delete_payment($id){
        return $query = $this->db->where('order_id',$id)   
                                 ->where('type','assisted')                   
                                 ->delete('gsr_admin_payment');
    }


    public function international_payment_display($order_id){
        $query = $this->db->select('*')
                          ->from('gsr_admin_payment')
                          ->where('order_id',$order_id)
                          ->where('type','international')
                          ->get();
        return $query->result();
    }

    public function international_update_payment_display($id){
        $payment= $this->db->select('*')
                        ->from('gsr_admin_payment')
                        ->where('order_id',$id)
                        ->where('type','international')
                        ->get();
            return $payment->row_object();
    }
    public function international_update_payment($id,$pay){
      return  $query = $this->db->set('payment_id',$pay['payment_id'],'status',$pay['status'])
                                ->where('order_id',$id)
                                ->where('type','international')
                                ->update('gsr_admin_payment',$pay);
    }
    public function international_delete_payment($id){
        return $query = $this->db->where('order_id',$id)   
                                 ->where('type','international')                   
                                 ->delete('gsr_admin_payment');
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

    public function international_update_shipment_display($id){
        $payment= $this->db->select('*')
                        ->from('gsr_shipment')
                        ->where('order_id',$id)
                        ->where('shipping','international')
                        ->get();
            return $payment->row_object();
    }
    public function international_update_shipment($id,$shipment){
      return  $query = $this->db->set('shipping_carrier',$shipment['shipping_carrier'],'tracking_number',$shipment['tracking_number'],'tracking_url',$shipment['tracking_url'])
                                ->where('order_id',$id)
                                ->where('shipping','international')
                                ->update('gsr_shipment',$shipment);
    }
    public function international_delete_shipment($id){
        return $query = $this->db->where('order_id',$id)   
                                 ->where('shipping','international')                   
                                 ->delete('gsr_shipment');
    }


    public function shopnship_update_shipment_display($id){
        $payment= $this->db->select('*')
                        ->from('gsr_shipment')
                        ->where('order_id',$id)
                        ->where('shipping','shopnship')
                        ->get();
            return $payment->row_object();
    }
    public function shopnship_update_shipment($id,$shipment){
        return  $query = $this->db->set('shipping_carrier',$shipment['shipping_carrier'],'tracking_number',$shipment['tracking_number'],'tracking_url',$shipment['tracking_url'])
                                ->where('order_id',$id)
                                ->where('shipping','shopnship')
                                ->update('gsr_shipment',$shipment);
                               
    }
    public function shopnship_delete_shipment($id){
        return $query = $this->db->where('order_id',$id)   
                                 ->where('shipping','shopnship')                   
                                 ->delete('gsr_shipment');
    }

    public function assisted_update_shipment_display($id){
        $payment= $this->db->select('*')
                        ->from('gsr_shipment')
                        ->where('order_id',$id)
                        ->where('shipping','assisted')
                        ->get();
            return $payment->row_object();
    }
    public function assisted_update_shipment($id,$shipment){
      return  $query = $this->db->set('shipping_carrier',$shipment['shipping_carrier'],'tracking_number',$shipment['tracking_number'],'tracking_url',$shipment['tracking_url'])
                                ->where('order_id',$id)
                                ->where('shipping','assisted')
                                ->update('gsr_shipment',$shipment);
                      
    }
    public function assisted_delete_shipment($id){
        return $query = $this->db->where('order_id',$id)   
                                 ->where('shipping','assisted')                   
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
            $query = $this->db->set('order_status',$record['item_received'],'is_paid',$record['paid'])
                            ->where('id',$record['id'])
                            ->update('assisted_shopnship_item_details');
                         
        }
        public function international_update_order_status($record,$msg){
               
            $query = $this->db->set('order_status',$record['item_received'])
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
      public function shopnship_invoice($shopnship_id){
        $invoice = $this->db->select('*')
                            ->from('shopnship_item_details')
                            ->where('shopnship_id',$shopnship_id)
                            ->get(); 
           return $invoice->row_object();
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
           return $invoice->row_object();
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
      
      public function shopnship_pdf($shopnship_id){
        $invoice = $this->db->select('*')
                            ->from('shopnship_item_details')
                            ->where('shopnship_id',$shopnship_id)
                            ->get(); 
           return $invoice->row_object();
      }
      public  function shopnship_pdf_address($address_id){
        $address = $this->db->select('*')
                            ->from('user_address')
                            ->where('address_id',$address_id)
                            ->get();
                return $address->row_object();
      }
      public function shopnship_pdf_users($user_id){
        $users = $this->db->select('*')
                          ->from('users')
                          ->where('id',$user_id)
                          ->get();
              return $users->row_object();
      }
        
      public function assisted_pdf($assisted_id){
        $invoice = $this->db->select('*')
                            ->from('assisted_shopnship_item_details')
                            ->where('assisted_id',$assisted_id)
                            ->get(); 
           return $invoice->row_object();
      }
      public  function assisted_pdf_address($address_id){
        $address = $this->db->select('*')
                            ->from('user_address')
                            ->where('address_id',$address_id)
                            ->get();
                return $address->row_object();
      }
      public function assisted_pdf_users($user_id){
        $users = $this->db->select('*')
                          ->from('users')
                          ->where('id',$user_id)
                          ->get();
              return $users->row_object();
      }
        public function display_notifications(){
            $notifications = $this->db->select('*')
                                      ->from('notification')
                                      ->where('notification_type','0')
                                      ->get();
                    return $notifications->result();
        }
        public function count_notification(){
            $notifi = $this->db->select('*,count(id) as count_notification')
                               ->from('notification')
                               ->where('notification_type','0')
                               ->where('is_read','0')
                               ->get();
                return $notifi->row_object();
        }

        public function delete_nofification($id){
            return $query = $this->db->where('order_id',$id) 
                                    ->where('notification_type','0')                     
                                    ->delete('notification');
                                  
         }
         public function delete_all_nofification($user_id){
            return  $q = $this->db->where('user_id',$user_id)
                          ->where('notification_type','0')
                         ->delete('notification');
         }
 
         
 }
   

?>