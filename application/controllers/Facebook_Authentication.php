<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 

 
class Facebook_Authentication extends CI_Controller { 
    public function __construct() { 
        parent::__construct();
        $this->load->database(); 
        $this->load->library('facebook'); 
        $this->load->model('Facebook_model'); 
    } 
     
    public function login(){ 
      
        $userData = array(); 
        if($this->facebook->is_authenticated()){ 
            $fbUser = $this->facebook->request('get', '/me?fields=id,first_name,last_name,email,link,gender,picture'); 
            $userData['oauth_provider'] = 'facebook'; 
            $userData['oauth_uid']    = !empty($fbUser['id'])?$fbUser['id']:'';; 
            $userData['first_name']    = !empty($fbUser['first_name'])?$fbUser['first_name']:''; 
            $userData['last_name']    = !empty($fbUser['last_name'])?$fbUser['last_name']:''; 
            $userData['email']        = !empty($fbUser['email'])?$fbUser['email']:''; 
            $userData['gender']        = !empty($fbUser['gender'])?$fbUser['gender']:''; 
            $userData['picture']    = !empty($fbUser['picture']['data']['url'])?$fbUser['picture']['data']['url']:''; 
            $userData['link']        = !empty($fbUser['link'])?$fbUser['link']:'https://www.facebook.com/'; 
            $userID = $this->user->checkUser($userData); 
            if(!empty($userID)){ 
                $data['userData'] = $userData; 
                $this->session->set_userdata('userData', $userData); 
            }else{ 
               $data['userData'] = array(); 
            } 
            $data['logoutURL'] = $this->facebook->logout_url(); 
        }else{ 
            $data['authURL'] =  $this->facebook->login_url(); 
        } 
        $this->load->view('facebook-view',$data); 
    } 
 
    public function logout() { 
        $this->facebook->destroy_session(); 
        $this->session->unset_userdata('userData'); 
        redirect('Facebook_Authentication/login'); 
    } 
}
?>