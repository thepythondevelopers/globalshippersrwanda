<?php 
class DashboardController extends CI_Controller {

    public function __construct() {
        parent::__construct(); 
        $this->load->database();
        $this->load->helper('url');
        $this->load->library("session");
        $this->load->model('Admin_model'); 

    }
    public function index() { 

    	if($this->session->userdata('id')){

            $user_id = $this->session->userdata('id');
            $order['total_order'] = $this->Admin_model->shopnship_count();
            $order['assisted_total_order'] = $this->Admin_model->assisted_count();
            $order['international_total_order'] = $this->Admin_model->international_count();
            $order['total_users'] = $this->Admin_model->users_count();
            $order['count']   = $this->Admin_model->count_notification();
            $order['address'] = $this->Admin_model->display_address();
            $order['adminrecord'] = $this->Admin_model->displaylogin();
		  $this->load->view('myadmin/common/header',$order);
		  $this->load->view('myadmin/common/sidebar_with_header',$order);
		  $this->load->view('myadmin/dashboard',$order);
		  $this->load->view('myadmin/common/footer');
        } else {
            redirect('admin');
        }
    
  }
}
?> 