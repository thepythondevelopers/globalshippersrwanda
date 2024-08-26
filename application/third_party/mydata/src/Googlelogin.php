<?php 

class Googlelogin extends CI_Controller {

    public function __construct() {
        parent::__construct(); 
        $this->load->database();
        $this->load->helper(array('form', 'url','html'));
      
    }
    public function googlelogin(){ 
       
        include_once APPPATH . "application/third_party/mydata/vendor/autoload.php";
        //include_once APPPATH . "application/third_party/mydata/src/Client.php";
        $google_client = new Google_Client();

        $google_client->setClientId('253918588685-eegd7fdsss28sguvrno3uf2cam4r31fh.apps.googleusercontent.com'); 
      
        $google_client->setClientSecret('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'); 
      
        $google_client->setRedirectUri('http://dev.globalshippersrwanda.com/Googlelogin/googlelogin'); 
      
        $google_client->addScope('email');
      
        $google_client->addScope('profile');
      
    }
}
?>