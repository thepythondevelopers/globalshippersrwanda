<?php 
ini_set('display_errors', 1);
error_reporting(E_ALL);
class Payment extends CI_Controller {

    public function __construct() {
        parent::__construct(); 
        $this->load->database();
        $this->load->helper('url');
        $this->load->library("session");
        // $this->load->model('Payment_model'); 

    }

public function payment_stripe(){
    $this->load->view('header');
    $this->load->view('payment');
    $this->load->view('footer');
  }
  public function stripe_payment(){
    require_once 'application/third_party/stripe-php/init.php';
    echo "<pre>";
    print_r($_POST);die;
    
     \Stripe\Stripe::setApiKey($this->config->item('stripe_secret'));
     \Stripe\Charge::create ([
        "amount" => 100 * 100,
        "currency" => "usd",
        "source" => $this->input->post('stripeToken'),
        "description" => "Test payment from itsolutionstuff.com." 
]);
$this->session->set_flashdata('success', 'Payment made successfully.');
    
  }
}
?>