<?php

class Shopnship_model extends CI_Model{

        public function assisted_insert_data($record,$data){
           
           $this->db->insert('user_address', $record);
           $data['address_id'] = $this->db->insert_id();
           $this->db->insert('assisted_shopnship_item_details',$data);
        }
        public function shopnship_insert_data($record,$data){
          if($record){
             $this->db->insert('user_address', $record);
            $data['address_id'] = $this->db->insert_id();
            $this->db->insert('shopnship_item_details',$data);
          }
          else{
            $this->db->insert('shopnship_item_details',$data); 
          }
           
        }

        public function shopnship_display_records($user_id,$and){
                $q= $this->db->select('*,count(id) as total_item')->from('shopnship_item_details')->where('user_id',$user_id);
                if($and==1){
                  $q->where('order_status','1');
                }
                elseif($and==2){
                  $q->where('order_status','2');
                }
                elseif($and==3){
                  $q->where('order_status','3');
                }
                return  $q->group_by('shopnship_id')
                                    ->get()->result();
                     
        }
        public function shopnship_item_records($shopnship_id){
          $query= $this->db->select("*")
                             ->from("shopnship_item_details")
                             ->join('tbl_item_type','tbl_item_type.item_type_value = shopnship_item_details.product_type','left')
                             ->where('shopnship_id',$shopnship_id)
                             ->get(); 
               return $query->result();
        }

        public function fetch_address_details($address_id){
            $query =$this->db->select("*")
                             ->from("user_address")
                             ->where('address_id',$address_id)
                            //  ->where('address_type','1')
                             ->get(); 
               return $query->row_object();
               
        }
        public function display_address($user_id){
            $q= $this->db->select("*")
                         ->from('user_address')
                         ->where('user_id',$user_id)
                         ->get();
            return $q->result();
        }

        public function update_address($address_id,$add_data){
          $this->db->set('fname',$add_data['fname'],'lname',$add_data['lname'],'phone_number',$add_data['phone_number'],'street_address',$add_data['street_address'],'gate_code',$add_data['gate_code'],'city',$add_data['city'],'state',$add_data['state'],'country','pin_code',$add_data);
          $this->db->where('address_id',$address_id);
          return $query = $this->db->update('user_address',$add_data);
        }
        public function assisted_item_records($assisted_id){
          $query= $this->db->select("*")
                             ->from("assisted_shopnship_item_details")
                             ->join('tbl_item_type','tbl_item_type.item_type_value = assisted_shopnship_item_details.product_type','left')
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
        public function assisted_display_records($user_id){
          $q= $this->db->select('*,count(id) as total_item')->from('assisted_shopnship_item_details')->where('user_id',$user_id);
          if($and==1){
            $q->where('order_status','1');
          }
          elseif($and==2){
            $q->where('order_status','2');
          }
          elseif($and==3){
            $q->where('order_status','3');
          }
          return  $q->group_by('assisted_id')
                              ->get()->result();
        }


        public function international_insert_package_information($data,$desination,$pickup_address,$international_order_details){
           $this->db->insert('international_order_details',
          $international_order_details);
          $order_id = $this->db->insert_id();
          $data['order_id'] = $order_id;
          $desination['order_id'] = $order_id;
          $pickup_address['order_id'] = $order_id;

            $this->db->insert('international_destination_address',$desination);
            $this->db->insert('internation_indian_pickup_address',$pickup_address);
            $international_order_details['destination_address_id'] = $this->db->insert_id();
            $international_order_details['package_info_id'] = $this->db->insert_id();
            $international_order_details['pickup_address_id'] = $this->db->insert_id();
           
            $data['international_id'] = $this->db->insert_id();
            $this->db->insert('international_details_package_information',$data);
        }

        public function international_display_records($user_id){
          $q= $this->db->select('*,,count(order_id) as total_item')
                             ->from("international_order_details")->group_by('order_id')
                             ->where('user_id',$user_id)
                             ->get();
                       return $q->result();
           }
           public function international_order_details($order_id){
              $query= $this->db->select("*")
                               ->from("international_details_package_information")
                               ->join('tbl_item_type','tbl_item_type.item_type_value = international_details_package_information.product_type','left')
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

       public function sender_add_message($message_data){
       return $this->db->insert('gsr_chatbot', $message_data);
        
       }

       public function receiver_display_msg($shopnship_id){
        $query = $this->db->select("*")
                          ->from("gsr_chatbot")  
                          ->where('order_id',$shopnship_id)  
                          ->order_by('created_date')          
                          ->get();
        return $query->result();
    }
      public function shopnship_payment_display($shopnship_id){
        $query = $this->db->select('*')
                          ->from('gsr_admin_payment')
                          ->where('order_id',$shopnship_id)
                          ->where('type','shopnship')
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
  public function assisted_payment_display($assisted_id){
    $query = $this->db->select('*')
                      ->from('gsr_admin_payment')
                      ->where('order_id',$assisted_id)
                      ->where('type','assisted')
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
public function international_payment_display($order_id){
  $query = $this->db->select('*')
                    ->from('gsr_admin_payment')
                    ->where('order_id',$order_id)
                    ->where('type','international')
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
}
?>