<?php

class Reset extends CI_Controller{
    function __construct(){
        parent:: __construct();
        $this->load->model('Gsr');

    }
    public function password(){
        if($this->input->get('hash'))
        {
            $hash = $this->input->get('hash');
            $this->data['hash'] = $hash;
            $getHashDetails = $this->Gsr->getHashDetails($hash);
            if($getHashDetails!=false){
                $hash_expiry =$getHashDetails->hash_expiry;
                $currentDate = date('Y-m-d H:i');
                if($currentDate < $hash_expiry){
                    if($_SERVER['REQUEST_METHOD']=='POST'){

                    }
                    else{
                        $this->load->view('reset_password',$this->data);
                    }
                }
                else{
                    $this->session->set_flashdata('error','link is expired');
                    redirect('Home/forgot');  
                }
            }
            else{
                echo "Invalid link";exit;
            }
        }
        else{
            redirect('Home/forgot');
        }
    }
}

?>