<?php 

class Payment_model extends CI_Model{

    public function payment_details($paydetails, $data){
        $this->db->insert('gsr_user_card_details',$data);
        $paydetails['plan_id']= $this->db->insert_id();
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
                     ->where('user_id',$user_id)
                     ->get();
        return $card->row_object();
}

public function delete_card($user_id) {
    $this->db->where('user_id', $user_id);
    $this->db->delete('gsr_user_payment_details');
}
}

?>