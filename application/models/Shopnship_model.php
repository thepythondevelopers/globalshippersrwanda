<?php

class Shopnship_model extends CI_Model{
        
        public function assisted_insert_data($record,$data){
           if($record!=1){
            $this->db->insert('user_address', $record);
            $data['address_id'] = $this->db->insert_id();
           }
         
           $this->db->insert('assisted_shopnship_item_details',$data);
        }
        public function shopnship_insert_data($record,$data){
          if($record!=1){
             $this->db->insert('user_address', $record);
            $data['address_id'] = $this->db->insert_id();
          }
            $this->db->insert('shopnship_item_details',$data);   
        }

        public function shopnship_display_records($user_id,$and) {
                $q= $this->db->select('*, count(shopnship_item_details.id) as total_item, (select gsr_shipment_countries.sc_country_name as country_name from gsr_shipment_countries where gsr_shipment_countries.sc_id = shopnship_item_details.from_country_id) as from_country_name')->from('shopnship_item_details')
                ->where('shopnship_item_details.user_id',$user_id)
                ->join('gsr_admin_payment','gsr_admin_payment.order_id=shopnship_item_details.shopnship_id','left')
               ->join('gsr_shipment','gsr_shipment.order_id=shopnship_item_details.shopnship_id','left');
                
                if($and==1){
                  $q->where('order_status','2');
                }
                elseif($and==2){
                  $q->where('order_status','3');
                }
                elseif($and==3){ 
                  $q->where('order_status','4');
                }
              $query = $q->group_by('shopnship_item_details.shopnship_id')->order_by('created_date', 'desc')->get()->result();
              $new_query = $this->db->query('select distinct shopnship_id from shopnship_item_details where user_id ='.$user_id.' and order_id IN (select tracking_id from admin_consolidate_shipment)')->result();
              
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
                    return $returndata;  
                  }
                  else{
                    return false;
                  }
                              
        }
        public function shopnship_item_records($shopnship_id){
          $query= $this->db->select("*")
                             ->from("shopnship_item_details")
                             ->join('tbl_item_type','tbl_item_type.item_type_value = shopnship_item_details.product_type','left')
                             //->join('order_images','order_images.order_id=shopnship_item_details.shopnship_id','left')
                             //->where('order_images.shipment_type','2')
                             ->where('shopnship_item_details.shopnship_id',$shopnship_id)
                             ->get(); 
               return $query->result();
        }

        public function check_admin_consolidate_shipment($data) {
           $query= $this->db->select("*, (select tbl_item_type.item_type_name from tbl_item_type where tbl_item_type.item_type_id = admin_consolidate_shipment.item_type) as item_type_name")
                             ->from("admin_consolidate_shipment")
                             ->where('tracking_id',$data)
                             ->get();
                    if($query->num_rows() == 0) {
                      return 0;
                    }  else {
                      return $query->row();
                    }         
        }

        public function fetch_address_details($address_id){
            $query =$this->db->select("*")
                             ->from("user_address")
                             //->where('is_deleted','0')
                             //->where('is_deleted','1')
                             ->where('address_id',$address_id)
                             ->get(); 
               return $query->row_object();
               
        }
        public function display_address($user_id){
            $q= $this->db->select("*")
                         ->from('user_address')
                         ->where('user_id',$user_id)
                         ->where('is_deleted','0')
                         ->get();
            return $q->result();
        }

        public function update_address($address_id,$add_data){
          $this->db->set('fname',$add_data['fname'],'lname',$add_data['lname'],'phone_number',$add_data['phone_number'],'street_address',$add_data['street_address'],'gate_code',$add_data['gate_code'],'city',$add_data['city'],'state',$add_data['state'],'country','pin_code',$add_data);
          $this->db->where('address_id',$address_id);
          return $query = $this->db->update('user_address',$add_data);
        }
        public function delete_useraddress($user_id,$address_id){
         return $address = $this->db->set('is_deleted','1')
                            ->where('user_id',$user_id) 
                             ->where('address_id',$address_id)                     
                             ->update('user_address');
        }
        public function assisted_item_records($assisted_id){
          $query= $this->db->select("*")
                             ->from("assisted_shopnship_item_details")
                             ->join('tbl_item_type','tbl_item_type.item_type_value = assisted_shopnship_item_details.product_type','left')
                            //->join('order_images','order_images.order_id=assisted_shopnship_item_details.assisted_id')
                             //->where('order_images.shipment_type','2')
                             ->where('assisted_id',$assisted_id)
                             //->group_by('order_images.image')
                             ->get(); 
               return $query->result();
        }
        public function assisted_display_image($assisted_id){
          $image = $this->db->select('*')
                            ->from('order_images')
                            ->where('order_id',$assisted_id)
                            ->where('shipment_type','2')
                            ->get();
            return $image->result();
        }

        public function shopnship_display_image($shopnship_id){
          $image = $this->db->select('*')
                            ->from('order_images')
                            ->where('order_id',$shopnship_id)
                            ->where('shipment_type','1')
                            ->get();
            return $image->result();
        }
        public function fetch_assisted_address_details($address_id){
            $query =$this->db->select("*")
                             ->from("assisted_user_address")
                             ->where('address_id',$address_id)
                             ->get(); 
                return $query->row_object();
          }
        public function assisted_display_records($user_id,$and){
          $q= $this->db->select('*,count(assisted_shopnship_item_details.id) as total_item')->from('assisted_shopnship_item_details')
          ->join('gsr_admin_payment','gsr_admin_payment.order_id=assisted_shopnship_item_details.assisted_id','left')
          ->join('gsr_shipment','gsr_shipment.order_id=assisted_shopnship_item_details.assisted_id','left')
          ->where('assisted_shopnship_item_details.user_id',$user_id);
          if($and==1){
            $q->where('order_status','2');
          }
          elseif($and==2){
            $q->where('order_status','3');
          }
          elseif($and==3){
            $q->where('order_status','4');
          }
        $query =  $q->group_by('assisted_shopnship_item_details.assisted_id')->get()->result();
          // echo "<pre>";print_r($this->db->last_query());die;
          foreach($query as $subquery=>$data) {
            $q_item_received =  $this->db->query("select count(id) as item_received from assisted_shopnship_item_details where user_id = '".$data->user_id."' and order_status='4' and assisted_id ='".$data->assisted_id."' group by assisted_id ='".$data->assisted_id."'");

              $data->count_item_received=($q_item_received->row()==''||empty($q_item_received->row()))? 0: $q_item_received->row()->item_received;
              $newarray[] = $data;
          }
          if(!empty($newarray)){
            return $newarray; 
          }
          else{
            //echo "Data is not available";
            return false;
          }
           
        }
      
      // function developed by Prakhar
        public function international_order_details_insertion($international_order_details){

            $this->db->insert('international_order_details',
              $international_order_details);
              $order_id = $this->db->insert_id();

          return $order_id;
        }
      // function developed by Prakhar

      public function international_indian_pickup_address_insertion($pickup_address){
        $this->db->insert('international_indian_pickup_address',$pickup_address);
        $pickup_address = $this->db->insert_id();
          return $pickup_address;
      }
      public function international_destination_address_insertion($desination){
            $this->db->insert('international_destination_address',$desination);
           $desination_address = $this->db->insert_id();
            return $desination_address;
      }
        public function international_insert_package_information($data,$international_order_details){
            // $international_destination_address_table =  
            // $this->db->insert('international_destination_address',$desination);
            // $this->db->insert_id();
            // $international_indian_pickup_address_table =  $this->db->insert('international_indian_pickup_address',$pickup_address);
            // $this->db->insert_id();
            //$data['international_id'] = $data['international_id'];

            $international_details_package_information_table = $this->db->insert('international_details_package_information',$data);
            $international_order_details=  $this->db->insert_id();

            // $international_order_details['destination_address_id'] = $international_destination_address_table;

            // $international_order_details['package_info_id'] = $international_details_package_information_table;

            // $international_order_details['pickup_address_id'] = $international_indian_pickup_address_table;

           return $international_order_details;
        }

        public function international_display_records($user_id,$and){
          $q= $this->db->select('*,count(international_order_details.international_id) as total_item')->from('international_order_details')
          ->join('gsr_admin_payment','gsr_admin_payment.order_id = international_order_details.international_id','left')
          ->join('gsr_shipment','gsr_shipment.order_id=international_order_details.international_id','left')
          ->join('international_details_package_information','international_details_package_information.international_id=international_order_details.international_id','left')
          ->where('international_order_details.user_id',$user_id);
          if($and==2){
            $q->where('international_details_package_information.order_status','2');
          }
          elseif($and==3){
            $q->where('international_details_package_information.order_status','3'); 
          }
          elseif($and==4){
            $q->where('international_details_package_information.order_status','4');
          }
          return  $q->group_by('international_order_details.international_id')
                              ->get()->result();

           }
           public function international_order_details($international_id){
              $query= $this->db->select("*")
                               ->from("international_details_package_information")
                               ->join('tbl_item_type','tbl_item_type.item_type_value = international_details_package_information.product_type','left')
                               ->where('international_id',$international_id)
                               ->get(); 
                return $query->result();
           }

           public function fetch_pickup_address_details($international_id){
            $query =$this->db->select("*")
                             ->from("international_indian_pickup_address")
                             ->where('international_id',$international_id)
                             ->get(); 
                return $query->row_object();
          }
          public function fetch_delivery_address_details($international_id){
            $query =$this->db->select("*")
                             ->from("international_destination_address")
                             ->where('international_id',$international_id)
                             ->get(); 
                return $query->row_object();
          }

          public function fetch_package_information($international_id){
            $query =$this->db->select("*")
                             ->from("international_details_package_information")
                             ->where('international_id',$international_id)
                             ->get(); 
              return $query->row_object();
          }

          public function international_fetch_records($international_id){
            $q= $this->db->select("*")
                               ->from("international_order_details")
                               ->get();
                         return $q->row_object();
             }

        // public function fetch_single_details_assisted($assisted_id){
        //     $this->db->where('assisted_id',$assisted_id);
        //   $data = $this->db->get('assisted_shopnship_item_details');
        //   $output = '<table width="100%" cellspacing="5" cellpadding="5">';
        //   foreach($data->result() as $row){
        //     $output.= '<tr>
        //                     <td width ="75%">
        //                         <p>user Id:'.$row->assisted_id.'</p>
        //                     </td>
        //                 </tr>';
        //     $output.='</table>';
        //     return $output;
        //   }
        // }

        // public function fetch_single_details_shopnship($shopnship_id){
        //   $this->db->where('shopnship_id',$shopnship_id);
        //   $data = $this->db->get('shopnship_item_details');
        //   $output = '<table width="100%" cellspacing="5" cellpadding="5">';
        //   foreach($data->result() as $row){
        //     $output.= '<tr>
        //                     <td width ="75%">
        //                         <p>user Id:'.$row->shopnship_id.'</p>
        //                     </td>
        //                 </tr>';
        //     $output.='</table>';
        //     return $output;
        //   }
        // }

       public function sender_add_message($message_data){
       return $this->db->insert('gsr_chatbot', $message_data);
        
       }

       public function receiver_display_msg($shopnship_id){
        $query = $this->db->select("*")
                          ->from("gsr_chatbot")  
                          ->where('order_id',$shopnship_id)  
                          ->order_by('created_date','ASC')          
                          ->get();
        return $query->result();
    }
      public function shopnship_payment_display($shopnship_id){
        $query = $this->db->select('*')
                          ->from('gsr_admin_payment')
                          ->where('order_id',$shopnship_id)
                          ->where('type','consolidation') 
                          ->get();
        return $query->result();
    }
    public function display_shipment_shopnship($shopnship_id){
      $query = $this->db->select('*')
                        ->from('gsr_shipment')
                        ->where('order_id',$shopnship_id)
                        ->where('shipping ','consolidation')
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
public function international_payment_display($international_id){
  $query = $this->db->select('*')
                    ->from('gsr_admin_payment')
                    ->where('order_id',$international_id)
                    ->where('type','international')
                    ->get();
  return $query->result();
}

public function display_shipment_international($international_id){
  $query = $this->db->select('*')
                    ->from('gsr_shipment')
                    ->where('order_id',$international_id)
                    ->where('shipping ','international')
                    ->get();
  return $query->result();
}

public function shopnship_invoice($shopnship_id){
  $invoice = $this->db->select('*')
                      ->from('shopnship_item_details')
                      ->where('shopnship_id',$shopnship_id)
                      ->join('tbl_item_type','tbl_item_type.item_type_value = shopnship_item_details.product_type','left')
                      ->get(); 
     return $invoice->result();
}
public function shopnship_invoice_payment($shopnship_id){
  $invoice = $this->db->select('*')
                      ->from('gsr_admin_payment')
                      ->where('id',$shopnship_id)
                      ->get(); 
     return $invoice->row();
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
                      ->join('tbl_item_type','tbl_item_type.item_type_value = assisted_shopnship_item_details.product_type','left')
                      ->where('assisted_id',$assisted_id)
                      ->get(); 
     return $invoice->result();
}
public function international_invoice($order_id){
  $invoice = $this->db->select('*')
                      ->from('international_details_package_information')
                      ->join('tbl_item_type','tbl_item_type.item_type_value = international_details_package_information.product_type','left')
                      ->where('international_id',$order_id )
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

public  function international_shipment_delivery_address($international_id){
  $address = $this->db->select('*')
                      ->from('international_destination_address')
                      ->where('international_id',$international_id)
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

// public function shopnship_pdf($shopnship_id){
//   $invoice = $this->db->select('*')
//                       ->from('shopnship_item_details')
//                       ->where('shopnship_id',$shopnship_id)
//                       ->get(); 
//      return $invoice->row_object();
// }
// public  function shopnship_pdf_address($address_id){
//   $address = $this->db->select('*')
//                       ->from('user_address')
//                       ->where('address_id',$address_id)
//                       ->get();
//           return $address->row_object();
// }
// public function shopnship_pdf_users($user_id){
//   $users = $this->db->select('*')
//                     ->from('users')
//                     ->where('id',$user_id)
//                     ->get();
//         return $users->row_object();
// }
   
// public function assisted_pdf($assisted_id){
//   $invoice = $this->db->select('*')
//                       ->from('assisted_shopnship_item_details')
//                       ->where('assisted_id',$assisted_id)
//                       ->get(); 
//      return $invoice->row_object();
// }
// public  function assisted_pdf_address($address_id){
//   $address = $this->db->select('*')
//                       ->from('user_address')
//                       ->where('address_id',$address_id)
//                       ->get();
//           return $address->row_object();
// }
// public function assisted_pdf_users($user_id){
//   $users = $this->db->select('*')
//                     ->from('users')
//                     ->where('id',$user_id)
//                     ->get();
//         return $users->row_object();
// }
public function international_update_product($id,$data)
{
    $this->db->set('product_type',$data['item_type'],'product_name',$data['item_name'],'quantity',$data['quantity'],'total_amount',$data['single_price']);
    $this->db->where('order_id',$id);
    return $query = $this->db->update('international_details_package_information',$data);

}
  public function create_notification($notification){
   
    return $this->db->insert('notification',$notification);
  }
}
?>