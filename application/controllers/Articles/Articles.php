<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Articles extends CI_Controller {

    public function __construct() {
        parent::__construct(); 
        $this->load->database();
        $this->load->helper(array('form', 'url','html'));
        $this->load->helper('date');
        $this->load->library('form_validation');
        $this->load->model('Gsr');
        $this->load->model('Payment_model');
        $this->load->model('Admin_model');
        $this->load->model('Shopnship_model');
        $this->load->library('session');
     }
     public function blog($id) {
        $data['high'] ='';
        $data['meta_title'] = "";
        $data['meta_desc'] = "";
        $data['meta_key'] ="";
        $data['content'] = $this->Admin_model->blogcat($id);
        $data['blog'] = $this->Admin_model->limitblogdetails();
        $this->load->view('articles/header',$data);
        $this->load->view('articles/best-design-outlet');
        $this->load->view('articles/footer');
    }

    //  public function blogdetailpage($id){
    //  	$data['high'] ='a';
    //     $this->load->view('articles/header',$data);
    //  		switch ($id) {
    //  			case '1':
	// 	$this->load->view('articles/best-design-outlet');
        
    //  				break;
    //  			case '2':
    //     $this->load->view('articles/celebratefathersday');
    //  				break;
    //  			case '3':
    //     $this->load->view('articles/eidaladhagiftideas');
    //  				break;
    //  			case '4':
    //     $this->load->view('articles/fathersdaygifts');
    //  				break;
    //  			case '5':
    //     $this->load->view('articles/shopipadprofromappleus');
    //  				break;
    //  			case '6':
    //     $this->load->view('articles/amazonvsebay');
    //  				break;
    //  			default:
    // 	$this->load->view('articles/amazonvsebay');	
    //  				break;
    //  		}
    //  		$this->load->view('articles/footer');

    //  	 }
    //  public function bestdesign(){
    //     $data['high'] ='a';
    //     $this->load->view('articles/header',$data);
    //     $this->load->view('articles/best-design-outlet');
    //     $this->load->view('articles/footer');
    //  }
    //  public function celebratefathersday(){
    //     $data['high'] = 'b';
    //     $this->load->view('articles/header',$data);
    //     $this->load->view('articles/celebratefathersday');
    //     $this->load->view('articles/footer');
    //  }
    //  public function eidaladhagiftideas(){
    //     $data['high'] = 'c';
    //     $this->load->view('articles/header',$data);
    //     $this->load->view('articles/eidaladhagiftideas');
    //     $this->load->view('articles/footer');
    //  }
    //  public function fathersdaygifts(){
    //     $data['high'] = 'c';
    //     $this->load->view('articles/header',$data);
    //     $this->load->view('articles/fathersdaygifts');
    //     $this->load->view('articles/footer');
    //  }
    //  public function shopipadprofromappleus(){
    //     $data['high'] = 'd';
    //     $this->load->view('articles/header',$data);
    //     $this->load->view('articles/shopipadprofromappleus');
    //     $this->load->view('articles/footer');

    //  }
    //  public function amazonvsebay(){
    //     $data['high'] = 'e';
    //     $this->load->view('articles/header',$data);
    //     $this->load->view('articles/amazonvsebay');
    //     $this->load->view('articles/footer');
    //  }
/*help centre */

public function helpcentre($qnaId) {
    $data['high'] ='';
    $data['meta_title'] = "";
    $data['meta_desc'] = "";
    $data['meta_key'] ="";
    $data['content'] = $this->Admin_model->helpcentrecat($qnaId);
  
    $this->load->view('helpcentre/header',$data);
    $this->load->view('helpcentre/free-signup');
    $this->load->view('helpcentre/footer');
}
// public function helpcentredetails($id,$i){
//     $this->load->view('helpcentre/header',$data);
//          switch ($id) {
//              case '1':
//                 $this->load->view('helpcentre/free-signup');
//                 break;
//                 case '2':
//                     $this->load->view('helpcentre/usingusaddress');
//                     break;
//                 case '3':
//                     $this->load->view('helpcentre/reasonsofpersonalshopper');
//                     break; 
//                 case '4' :
//                     $this->load->view('helpcentre/consolidationprocess');
//                     break;
//                 case '5':
//                     $this->load->view('helpcentre/deliveredpackage');
//                     break;
//                 case '6' :
//                     $this->load->view('helpcentre/dimweight');
//                     break;
//                 case '7' :
//                     $this->load->view('helpcentre/dutiestaxes');
//                     break;
//                 case '8':
//                     $this->load->view('helpcentre/customsdeclarationform');
//                     break;
//                 case '9':
//                     $this->load->view('helpcentre/calculatingshippngrates');
//                     break;
//                 case '10' :
//                     $this->load->view('helpcentre/returningpackages');
//                     break;
//                 default:
//                 $this->load->view('helpcentre/free-signup');	
//                              break;
//              }
//              $this->load->view('helpcentre/footer');
// }

//    public function freesignup(){
//     $data['high'] ='';
//     $this->load->view('helpcentre/header',$data);
//     $this->load->view('helpcentre/free-signup');
//     $this->load->view('helpcentre/footer');
//    }

//    public function usingusaddress(){
//     $data['high'] ='';
//     $this->load->view('helpcentre/header',$data);
//     $this->load->view('helpcentre/usingusaddress');
//     $this->load->view('helpcentre/footer');
//    }
//    public function reasonsofpersonalshopper(){
//     $data['high'] ='';
//     $this->load->view('helpcentre/header',$data);
//     $this->load->view('helpcentre/reasonsofpersonalshopper');
//     $this->load->view('helpcentre/footer');
//    }

//    public function consolidationprocess(){
//     $data['high'] ='';
//     $this->load->view('helpcentre/header',$data);
//     $this->load->view('helpcentre/consolidationprocess');
//     $this->load->view('helpcentre/footer');
//    }
//    public function deliveredpackage(){
//     $data['high'] ='';
//     $this->load->view('helpcentre/header',$data);
//     $this->load->view('helpcentre/deliveredpackage');
//     $this->load->view('helpcentre/footer');
//    }
//    public function dimweight(){
//     $data['high'] ='';
//     $this->load->view('helpcentre/header',$data);
//     $this->load->view('helpcentre/dimweight');
//     $this->load->view('helpcentre/footer');
//    }
//    public function dutiestaxes(){
//     $data['high'] ='';
//     $this->load->view('helpcentre/header',$data);
//     $this->load->view('helpcentre/dutiestaxes');
//     $this->load->view('helpcentre/footer');
//    }
//    public function customsdeclarationform(){
//     $data['high'] ='';
//     $this->load->view('helpcentre/header',$data);
//     $this->load->view('helpcentre/customsdeclarationform');
//     $this->load->view('helpcentre/footer');
//    }
//    public function calculatingshippngrates(){
//     $data['high'] ='';
//     $this->load->view('helpcentre/header',$data);
//     $this->load->view('helpcentre/calculatingshippngrates');
//     $this->load->view('helpcentre/footer');
//    }
//    public function returningpackages(){
//     $data['high'] ='';
//     $this->load->view('helpcentre/header',$data);
//     $this->load->view('helpcentre/returningpackages');
//     $this->load->view('helpcentre/footer');
//    }
    }
    ?>