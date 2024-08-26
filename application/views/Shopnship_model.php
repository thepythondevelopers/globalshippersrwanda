<?php

class Shopnship_model extends CI_Model{

        public function assisted_insert_data($record,$data){
           
           $this->db->insert('user_address', $record);
           $data['address_id'] = $this->db->insert_id();
           $this->db->insert('assisted_shopnship_item_details',$data);
        }
        public function shopnship_insert_data($record,$data){
          // $this->db->insert('user_address', $record);
          // $data['address_id'] = $this->db->insert_id();
          if($record){
             $this->db->insert('user_address', $record);
            $data['address_id'] = $this->db->insert_id();
            $this->db->insert('shopnship_item_details',$data);
          }
          else{
            $this->db->insert('shopnship_item_details',$data); 
          }
           
        }

        public function shopnship_display_records(){
       $q= $this->db->select("created_date,address_id,shopnship_id,user_id,order_id,product_type,order_sub_type,product_name,tracking_number,item_received,order_status,is_paid,store,total_amount,quantity,color,size,image_path")
                          ->from("shopnship_item_details")
                          ->get();
                    return $q->result();
        }
        public function shopnship_item_records($shopnship_id){
          $query= $this->db->select("*")
                             ->from("shopnship_item_details")
                             ->where('shopnship_id',$shopnship_id)
                             ->get(); 
               return $query->result();
        }

        public function fetch_address_details($address_id){
            $query =$this->db->select("*")
                             ->from("user_address")
                             ->where('address_id',$address_id)
                             ->where('address_type','1')
                             ->get(); 
               return $query->row_object();
               
        }
        public function display_address(){
            $q= $this->db->select("*")
                         ->from('user_address')
                         ->get();
            return $q->result();
        }
        public function assisted_item_records($assisted_id){
          $query= $this->db->select("*")
                             ->from("assisted_shopnship_item_details")
                             ->where('assisted_id',$assisted_id)
                             ->get(); 
               return $query->result();
        }
        public function fetch_assisted_address_details($address_id){
            $query =$this->db->select("*")
                             ->from("assisted_user_address")
                             ->where('address_id',$address_id)
                             ->get(); 
                return $query->row_object();
          }
        // public function assisted_display_address(){
        //     $q= $this->db->select("*")
        //                  ->from('assisted_user_address')
        //                  ->get();
        //     return $q->result();
        // }
        public function assisted_display_records(){
         $q =  $this->db->select("created_date,assisted_id,user_id,order_id,product_type,order_sub_type,product_name,tracking_number,item_received,order_status,is_paid,store,total_amount,quantity,color,size,image_path")
                        ->from("assisted_shopnship_item_details")
                        ->get();
                return $q->result();
        }


        public function international_insert_package_information($data,$desination,$pickup_address,$international_order_details){
           $this->db->insert('international_order_details',
          $international_order_details);
          $order_id = $this->db->insert_id();
          $data['order_id'] = $order_id;
          $destination['order_id'] = $order_id;
          $pickup_address['order_id'] = $order_id;

            $this->db->insert('international_destination_address',$destination);
            $this->db->insert('internation_indian_pickup_address',$pickup_address);
            $international_order_details['destination_address_id'] = $this->db->insert_id();
            $international_order_details['package_info_id'] = $this->db->insert_id();
            $international_order_details['pickup_address_id'] = $this->db->insert_id();
           
            $data['international_id'] = $this->db->insert_id();
            $this->db->insert('international_details_package_information',$data);
           
           
            
        }

        public function international_display_records(){
          $q= $this->db->select("*")
                             ->from("international_order_details")
                             ->get();
                       return $q->result();
           }
           public function international_order_details($order_id){
              $query= $this->db->select("*")
                               ->from("international_details_package_information")
                               ->where('international_id',$order_id)
                               ->get(); 
                return $query->result();
           }

           public function fetch_pickup_address_details($order_id){
            $query =$this->db->select("*")
                             ->from("internation_indian_pickup_address")
                             ->where('order_id',$order_id)
                             ->get(); 
                return $query->row_object();
          }
          public function fetch_delivery_address_details($order_id){
            $query =$this->db->select("*")
                             ->from("international_destination_address")
                             ->where('order_id',$order_id)
                             ->get(); 
                return $query->row_object();
          }

          public function fetch_package_information($order_id){
            $query =$this->db->select("*")
                             ->from("international_details_package_information")
                             ->where('order_id',$order_id)
                             ->get(); 
              return $query->row_object();
          }

          public function international_fetch_records($order_id){
            $q= $this->db->select("*")
                               ->from("international_order_details")
                               ->get();
                         return $q->row_object();
             }

        public function fetch_single_details_assisted($assisted_id){
            $this->db->where('assisted_id',$assisted_id);
          $data = $this->db->get('assisted_shopnship_item_details');
          $output = '<table width="100%" cellspacing="5" cellpadding="5">';
          foreach($data->result() as $row){
            $output.= '<tr>
                            <td width ="75%">
                                <p>user Id:'.$row->assisted_id.'</p>
                            </td>
                        </tr>';
            $output.='</table>';
            return $output;
          }
        }

        public function fetch_single_details_shopnship($shopnship_id){
          $this->db->where('shopnship_id',$shopnship_id);
          $data = $this->db->get('shopnship_item_details');
          $output = '<table width="100%" cellspacing="5" cellpadding="5">';
          foreach($data->result() as $row){
            $output.= '<tr>
                            <td width ="75%">
                                <p>user Id:'.$row->shopnship_id.'</p>
                            </td>
                        </tr>';
            $output.='</table>';
            return $output;
          }
        }

        // public function profile_value($user_id){
        //   $this->db->where('id',$user_id);
        //   $query = $this->db->get('user_address');
        //   return $query->result();
        // }
        // public function update_data($user_id,$data)
        // {
        //     $this->db->where('id',$user_id);
        //     return $query = $this->db->update('user_address',$data);
           
        // }
       public function sender_add_message($message_data){
        $this->db->insert('gsr_chatbot_sender', $message_data);
        
       }

       public function display_msg(){
        $query = $this->db->select("*")
                          ->from("gsr_chatbot_sender")
                          ->get();
              return $query->result();
       }
    public function receiver_add_message($message_data){
      $this->db->insert('gsr_chatbot_receiver',$message_data);
    }

    public function receiver_display_msg(){
      $query = $this->db->select("*")
                        ->from("gsr_chatbot_receiver")
                        ->get();
            return $query->result();
     }

}