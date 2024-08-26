<?php 

class Payment_model extends CI_Model{

    public function payment_details($paydetails, $data){
        $this->db->insert('gsr_user_card_details',$data);
        $paydetails['card_id']= $this->db->insert_id();
        $this->db->insert('gsr_user_payment_details',$paydetails);
       
   }

    public function display_plan($plan_id){
        $query = $this->db->select("*")
                          ->from("gsr_plan")
                          ->where('plan_id',$plan_id)
                          ->get();
            return $query->result();
         
  }
  public function display_plan_membership(){
    $query = $this->db->select("*")
                      ->from("gsr_plan")
                      //->where('plan_id',$plan_id)
                      ->get();
        return $query->result_object();
     
}
  public function display_payment_details(){
    $query = $this->db->select('*')
                      ->from('gsr_user_payment_details')
                      ->get();
            return $query->result();
            
  }
  public function update_status(){
    $user_id = $_REQUEST['$user_id'];
    $val = $_REQUEST['$val'];
    if($val == 1){
        $status = 0;
    }
    else{
        $status = 1;
    }
    $data = array('status' => $status);
    $this->db->where('user_id',$user_id);
    return $this->db->update('gsr_user_payment_details',$data);
}
public function profile_display_plan($user_id){
    $plan = $this->db->select('*')
                     ->from('gsr_user_payment_details')
                     ->where('user_id',$user_id)
                     ->get();
        return $plan->row_object();
}
public function card_details($user_id){
    $card = $this->db->select('*')
                     ->from('gsr_user_card_details')
                     ->where('is_card_delete','0')
                     ->where('user_id',$user_id)
                     ->get();
    
    if($card->num_rows() >= 1){
        return $card->row();

    } else {
        return false;
    }   
}
public function update_card($user_id,$data){
    $card = $this->db->set('holder_name',$data['holder_name'],'card_number',$data['card_number'],'cvc_number',$data['cvc_number'],'cardexpire_month',$data['cardexpire_month'],'cardexpire_year',$data['cardexpire_year'])
                           ->where('user_id',$user_id)
                           ->update('gsr_user_card_details',$data);
}
public function delete_card($user_id) {
    $this->db->set('is_card_delete','1');
    $this->db->where('user_id', $user_id);
    $this->db->update('gsr_user_card_details');
}

    public function update_stripecustomerid($user_id,$stripecustomerid){
       $customerid = $this->db->set('stripecustomerID',$stripecustomerid['stripecustomerID'],'is_plan_active',$stripecustomerid['is_plan_active'])
                               ->where('id',$user_id)
                               ->update('users',$stripecustomerid);
                             
    }
    public function fetch_stripecustomerid($user_id){
       $stripe= $this->db->select("stripecustomerID")
                        ->from("users")
                       ->where("id",$user_id)
                       ->get();
                       return $stripe->row_object();
    }
}

?>
