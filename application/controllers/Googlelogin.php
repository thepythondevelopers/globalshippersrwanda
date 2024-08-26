<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Googlelogin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('google');
        $this->load->library('session');
        $this->load->database();
        $this->load->model('Gsr');
     
    }

    public function testing() {
        $client = $this->google->getClient();
        $authUrl = $client->createAuthUrl();
       
          redirect($authUrl);
    }    


    public function login() {
        $client = $this->google->getClient();
        $authUrl = $client->createAuthUrl();
        redirect($authUrl);
    }
   public function callback() {
        $client = $this->google->getClient();

        if (isset($_GET['code'])) {
            $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
            $client->setAccessToken($token);

            $oauth2 = new Google_Service_Oauth2($client);
            $userinfo = $oauth2->userinfo->get();
            if($user_id = $this->Gsr->Is_already_register($userinfo->id)){
                $data = [
                    'login_oauth_uid' => $userinfo->id,
                    'email' => $userinfo->email,
                    'fname' => $userinfo->given_name,
                    'lname' => $userinfo->family_name,
                    'image' => $userinfo->picture,
                    'update_date' => date('Y-m-d H:i:s') 
                ];
                $update=$this->Gsr->update_user_data($data);
                $data['user_id'] = $user_id;
            }   else {
                $data = [ 
                    'login_oauth_uid' => $userinfo->id,
                    'email' => $userinfo->email,
                    'fname' => $userinfo->given_name,
                    'lname' => $userinfo->family_name,
                    'image' => $userinfo->picture,
                    'created_date ' => date('Y-m-d H:i:s'), 
                ];
                $insert= $this->Gsr->insert_user_data($data);
                $data['user_id']  = $insert;
               
            }
            $this->session->set_userdata('id', $data['user_id']); 
            // print_r($this->session);die; 
          redirect('dashboard');        
    }
        else {  
            redirect('/');
        }
    }


    public function logout() {
        $this->session->unset_userdata('id');
        redirect("login");
    }
             
 
}

?>