<?php 
class Prohibited_model extends CI_Model{
 
    public function contact($data){
        return $this->db->insert('gsr_contact',$data);
    }
}


?>