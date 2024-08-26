<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
class Prohibited extends CI_Controller {

    public function __construct() {
        parent::__construct(); 
        $this->load->database();
        $this->load->helper(array('form', 'url','html'));
        $this->load->library('form_validation');
        $this->load->model('Shopnship_model');
        $this->load->model('Payment_model');
        $this->load->model('Prohibited_model');
        $this->load->model('Gsr');
        $this->load->library('session');
     }
    public function index(){
        $data['email'] = $this->Gsr->users_details();
        $this->load->view('prohibited/header',$data);
        $this->load->view('prohibited/prohibited_view');
        $this->load->view('prohibited/footer');
    }

    public function contact(){
        //$data['email'] = $this->Gsr->users_details();
       // $this->load->view('header_without_sidebar');
        $this->load->view('prohibited/header');
        //$this->load->view('head');
        $this->load->view('prohibited/contact-us');
        $this->load->view('prohibited/footer');
    }
    public function insert_contact(){
      
        $data = $formData = array();
        if($this->input->post('submit')){
            $formData = $this->input->post();
            $this->form_validation->set_rules('name', 'Name', 'trim|required');
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
            $this->form_validation->set_rules('mob', 'Contact Number', 'trim|required');
            $this->form_validation->set_rules('message', 'Message', 'trim|required');
            if($this->form_validation->run()==TRUE){
                echo "<pre>";
                echo "validate";
                exit;
                $mailData = array(
                    'name' => $formData['name'],
                    'email' => $formData['email'],
                    'phone' => $formData['mob'],
                    'message' => $formData['message']
                );
                $send = $this->sendEmail($mailData);
                if($send){
                    $formData = array();
                    
                    $data['status'] = array(
                        'type' => 'success',
                        'msg' => 'Your contact request has been submitted successfully.'
                    );
                }else{
                    $data['status'] = array(
                        'type' => 'error',
                        'msg' => 'Some problems occured, please try again.'
                    );
                }
            }
            else{
                
            }
        } else {
        	echo 'form not working';
        }
        $data['postData'] = $formData;
    }
    
    private function sendEmail($mailData){
        $this->load->library('email');
       // $to = 'anishaiert@gmail.com';
        $to = 'test@mailinator.com';
        $from = 'info@globalshippersrwanda.com';
        $fromName = $mailData['name'];
        $mailSubject = 'Contact Request Submitted by '.$mailData['name'];
        $mailContent = '
            <h2>Contact Request Submitted</h2>
            <p><b>Name: </b>'.$mailData['name'].'</p>
            <p><b>Email: </b>'.$mailData['email'].'</p>
            <p><b>Contact: </b>'.$mailData['phone'].'</p>
            <p><b>Message: </b>'.$mailData['message'].'</p>
        ';
            
        $config['mailtype'] = 'html';
        $this->email->initialize($config);
        $this->email->to($to);
        $this->email->from($from, $fromName);
        $this->email->subject($mailSubject);
        $this->email->message($mailContent);
     return $this->email->send()?true:false;
    
    }
    public function faq(){
        $data['email'] = $this->Gsr->users_details();
        $this->load->view('prohibited/header',$data);
        $this->load->view('prohibited/faq');
        $this->load->view('prohibited/footer'); 
    }
    public function how_it_works_sns(){
        $data['email'] = $this->Gsr->users_details();
        $this->load->view('prohibited/header',$data);
        $this->load->view('prohibited/how_it_works_sns');
        $this->load->view('prohibited/footer'); 
    }

    public function how_it_works_assisted(){
        $data['email'] = $this->Gsr->users_details();
        $this->load->view('prohibited/header',$data);
        $this->load->view('prohibited/how_it_works-assisted_sns');
        $this->load->view('prohibited/footer'); 
    }
}?>