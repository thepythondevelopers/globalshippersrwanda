<?php

class Gsr extends CI_Model{

    public function signup_data($data){
        return $this->db->insert('users',$data);
    }
    public function users_details(){
        $id = $this->session->userdata('id');
        $query= $this->db->select("*")
                         ->from("users")
                         ->where('id',$id)
                         ->get(); 
                return $query->row_object();
    }
    public function users_address_details($user_id){
        // $id = $this->session->userdata('id');
        $query= $this->db->select("*")
                         ->from("users")
                         ->where('id',$user_id)
                         ->get(); 
                return $query->result();
    }
    // public function insert( $data)
	// {
	// 	$result = $this->db->insert('profile', $data);
	// 	return $result;
	// }
    public function display_image($user_id){
        $img = $this->db->select('*')
                        ->from('users')
                        ->where('id',$user_id)
                        ->get();
            return $img->result();
    }
   public function update_photo($user_id, $data)
   {
      $image = $this->db->set('image',$data['image'])
                        ->where('id',$user_id)
                        ->update('users', $data);
    //                     echo "<pre>";
    //    print_r($this->db->last_query($image))  ;
    //      exit;
   }
    public function user_address(){
        $id = $this->session->userdata('id');
        $query= $this->db->select("*")
                         ->from("users")
                         ->where('id',$id)
                         ->get(); 
        return $query->result();
    }
    public function update_data($id,$data)
    {
        $this->db->set('fname',$data['fname'],'lname',$data['lname'],'address_line',$data['address_line'],'landmark',$data['landmark'],'zipcode',$data['zipcode'],'state',$data['state'],'phone',$data['phone']);
        $this->db->where('id',$id);
        return $query = $this->db->update('users',$data);

    }
    public function update_record($id,$data)
    {
        $this->db->set('fname',$data['fname'],'lname',$data['lname']);
        $this->db->where('id',$id);
        return $query = $this->db->update('users',$data);

    }
 public function update_email($data,$user_id){
    $this->db->set('email',$data['email']);
    $this->db->where('user_id',$user_id);
    //$this->db->where('id',$id);
    return $query = $this->db->update('profile',$data);
 }

 public function update_address($data,$user_id){
    $this->db->set('address',$data['address']);
    $this->db->where('user_id',$user_id);
    // $this->db->where('id',$id);
    return $query = $this->db->update('profile',$data);
 }
 public function update_phone($data,$user_id){ 
    $this->db->set('phone',$data['phone']);
    $this->db->where('user_id',$user_id);
    // $this->db->where('id',$id);
    return $query = $this->db->update('profile',$data);
 }

    public function email_verify($verification_key){
        $this->db->where('verification_key',$verification_key);
        $this->db->where('is_email_verified','0');
        $query = $this->db->get('users');
       
        if($query->num_rows()>0){
            $data = array(
               ' is_email_verified' =>'1' 
            );
            $this->db->where('verification_key',$verification_key);
            $this->db->update('users',$data);
            return true;
           
        }
        else{
            return false;
        }

    }
    public function getdataemailverify($verification_key){
      $query =  $this->db->select('*')
                 ->from('users')
                 ->where('verification_key',$verification_key)
            
                 ->get();
              
               return  $query->row();
    }
    public function login_user($email,$pass){
       $q = $this->db->where(['email'=>$email,'password'=>$pass])
                     ->get('users');
                if($q->num_rows()){
                    return $q->row()->id;
                }
                else{
                    return false;
                }
    }
            public function user_data_display($id){
               $q = $this->db->select('*')
                             ->from('users')
                             ->where('id',$id)
                             ->get();
                return $q->result();
            }
    public function fetch_name(){
        $id = $this->session->userdata('id');
        $q  = $this->db->select("*")
                 ->from('users')
                 ->where(['id'=>$id])
                 ->get();
            return $q->row_object();
    }
    public function phone_insert($data){
        return $this->db->insert('profile',$data);
    }
    public function display_profiledata($user_id){
        $query = $this->db->select('*')
                          ->from('profile')
                          ->get();
        return $query->result();
    }
public function order_count($user_id ){
       $q = $this->db->query('select count(distinct shopnship_id) as order_count from shopnship_item_details where user_id='.$user_id );
        return $q->result();

}

public function assisted_order_count($user_id){
    $q = $this->db->query('select count(distinct assisted_id) as order_count from assisted_shopnship_item_details where user_id='.$user_id);
    return $q->result();
}
public function international_order_count($user_id){
    $q = $this->db->query('select count(distinct international_id) as order_count from international_order_details where user_id='.$user_id);
    return $q->result();
} 
// public function getname(){

//    $query= $this->db->select("*")
//                      ->from("users")
//                      ->where('id',$id)
//                      ->get(); 
//             return $query->row_object();
// }
public function email_exists(){
    $email = $this->input->post('email');
   
    $query = $this->db->query("select * from users WHERE email='$email'");   
    if($row = $query->row()){
        return TRUE;
    }else{
        return FALSE;
    }
 }
public function temp_reset_password($temp_pass){
    $data =array(
                'email' =>$this->input->post('email'),
                'reset_pass'=>$temp_pass
              );
    $email = $data['email'];

    if($data){
        $this->db->where('email', $email);
        $this->db->update('users', $data);  
        return true;
     
    }else{
        return false;
    }

}
public function is_temp_pass_valid($temp_pass){
    $this->db->where('reset_pass', $temp_pass);
    $query = $this->db->get('users');
    if($query->num_rows() == 1){
       return TRUE;
    }
    else {
        return false;
    }
}
public function update_password($reset_pass,$password){
   
  return  $query = $this->db->set('password',$password)
                      ->where('reset_pass',$reset_pass)
                        ->update('users');
                  
    //return $query->result();
}
 public function display_notification($user_id){ 
    $query = $this->db->select("*")
                     ->where('user_id',$user_id)
                     ->from("notification")
                     ->where('notification_type','1')
                     ->where('is_delete','0')
                     ->where('is_read','0')
                     ->order_by('created_time','desc')
                     ->get();
    return $query->result();
 }
 public function count_notification($user_id){
    $count = $this->db->select("count(id) as count_noti")
                      ->where("user_id",$user_id)
                      ->where('notification_type','1')
                      ->where('is_read','0')
                      ->where('is_delete','0')
                      ->from("notification")
                      //->order_by('created_time','ASC')
                      ->get();
     return $count->row();
 }
//  public function get_count() {
//     return $this->db->count_all("notification");
// }

//  public function get_notification($limit, $start) {
//     $this->db->limit($limit, $start);
//     $query = $this->db->get("notification");

//     return $query->result();
// }
 
 public function delete_nofification($id, $user_id){
   return $query = $this->db->set('is_delete','1')
                      ->where('order_id',$id) 
                      ->where('notification_type','1') 
                      ->where('user_id', $user_id)                  
                     ->update('notification');
    // return $query->result();

 }
 public function delete_all_nofification($user_id){
   return $q = $this->db->set('is_delete','1')
                        ->where('user_id',$user_id)
                        ->where('notification_type','1')
                        ->update('notification');
   //return $q->result;

 }

    public function changeUserPassword($user_id,$new_pass){
        $this->db->set('password',$new_pass)
                 ->where('id',$user_id)
                 ->update('users');
    }
    public function oldPasswordMatches($user_id,$old_pass){
     $q=   $this->db->where('id',$user_id)
                 ->where('password',$old_pass)
                 ->get('users');
     if($q->num_rows()>0){
        return true;
     }else{
        return false;
     }

    }
    public function shopnship_progress_order_status($user_id){
        $status = $this->db->select('order_status,count(distinct shopnship_id) as status')
                           ->from('shopnship_item_details')
                           ->where('user_id',$user_id)
                           ->where('order_status','2')
                           ->get();
            return $status->result();
    }
    public function shopnship_shipment_order_status($user_id){
        $status = $this->db->select('order_status,count(distinct shopnship_id) as status')
                           ->from('shopnship_item_details')
                           ->where('user_id',$user_id)
                           ->where('order_status','3')
                           ->get();
            return $status->result();
    }
    public function shopnship_completed_order_status($user_id){
        $status = $this->db->select('order_status,count(distinct shopnship_id) as status')
                           ->from('shopnship_item_details')
                           ->where('user_id',$user_id)
                           ->where('order_status','4')
                           ->get();
            return $status->result();
    }
    public function assisted_progress_order_status($user_id){
        $status = $this->db->select('order_status,count(distinct assisted_id) as status')
                           ->from('assisted_shopnship_item_details')
                           ->where('user_id',$user_id)
                           ->where('order_status','2')
                           ->get();
            return $status->result();
    }
    public function assisted_shipment_order_status($user_id){
        $status = $this->db->select('order_status,count(distinct assisted_id) as status')
                           ->from('assisted_shopnship_item_details')
                           ->where('user_id',$user_id)
                           ->where('order_status','3')
                           ->get();
            return $status->result();
    }
    public function assisted_completed_order_status($user_id){
        $status = $this->db->select('order_status,count(distinct assisted_id) as status')
                           ->from('assisted_shopnship_item_details')
                           ->where('user_id',$user_id)
                           ->where('order_status','4')
                           ->get();
            return $status->result();
    }
    public function international_progress_order_status($user_id){
        $status = $this->db->select('order_status,count(distinct international_id) as status')
                           ->from('international_details_package_information')
                           ->where('user_id',$user_id)
                           ->where('order_status','2')
                           ->get();
            return $status->result();
    }
    public function international_shipment_order_status($user_id){
        $status = $this->db->select('order_status,count(distinct international_id) as status')
                           ->from('international_details_package_information')
                           ->where('user_id',$user_id)
                           ->where('order_status','3')
                           ->get();
            return $status->result();
    }
    public function international_completed_order_status($user_id){
        $status = $this->db->select('order_status,count(distinct international_id) as status')
                           ->from('international_details_package_information')
                           ->where('user_id',$user_id)
                           ->where('order_status','4')
                           ->get();
            return $status->result();
    }
    public function Is_already_register($id){ 
        $this->db->where('login_oauth_uid',$id);
        $query = $this->db->get('users');
        
        if($query->num_rows()>0){
            return $query->row()->id;
         
        }else {
          return false;
        }
    }
   
    public function insert_user_data($data){
        $this->db->insert('users',$data);
        return $this->db->insert_id();

    }
    public function update_user_data($data){
     $this->db->where('login_oauth_uid',$data['login_oauth_uid']);
        $this->db->update('users',$data);
    }

    public function getadminemail(){
        return $this->db->query('select * from gsr_admin_login')->row();
    }
    // public function getusersdata(){
    //     return $this->db->query('select * from users')->row();
    // }
    public function displayterms(){
        return $this->db->query('select * from gsr_terms')->row();
    }
    public function displayprivacy(){
        return $this->db->query('select * from gsr_privacy')->row();
    }
    
}