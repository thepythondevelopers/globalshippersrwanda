<?php
 
class Pagedata extends CI_Controller {
 
	// extends CI_Controller for CI 2.x users
 
	// public $data 	= 	array();
 
	public function __construct() {
 
		//parent::Controller();
		 parent::__construct();
		    $this->load->library('session');
			// $this->load->library('ckeditor');
			$this->load->library('ckfinder');
			$this->load->helper('ckeditor');

		//Ckeditor's configuration
		// $this->data['ckeditor'] = array (
 
		// 	//ID of the textarea that will be replaced
		// 	'id' 	=> 	'content',
		// 	'path'	=>	'js/ckeditor',
 
		// 	//Optionnal values
		// 	'config' => array(
		// 		'toolbar' 	=> 	"Full", 	//Using the Full toolbar
		// 		'width' 	=> 	"550px",	//Setting a custom width
		// 		'height' 	=> 	'100px',	//Setting a custom height
 
		// 	),
 
		// 	//Replacing styles from the "Styles tool"
		// 	'styles' => array(
 
		// 		//Creating a new style named "style 1"
		// 		'style 1' => array (
		// 			'name' 		=> 	'Blue Title',
		// 			'element' 	=> 	'h2',
		// 			'styles' => array(
		// 				'color' 	=> 	'Blue',
		// 				'font-weight' 	=> 	'bold'
		// 			)
		// 		),
 
		// 		//Creating a new style named "style 2"
		// 		'style 2' => array (
		// 			'name' 	=> 	'Red Title',
		// 			'element' 	=> 	'h2',
		// 			'styles' => array(
		// 				'color' 		=> 	'Red',
		// 				'font-weight' 		=> 	'bold',
		// 				'text-decoration'	=> 	'underline'
		// 			)
		// 		)				
		// 	)
		// );
 
		// $this->data['ckeditor_2'] = array(
 
		// 	//ID of the textarea that will be replaced
		// 	'id' 	=> 	'content_2',
		// 	'path'	=>	'js/ckeditor',
 
		// 	//Optionnal values
		// 	'config' => array(
		// 		'width' 	=> 	"550px",	//Setting a custom width
		// 		'height' 	=> 	'100px',	//Setting a custom height
		// 		'toolbar' 	=> 	array(	//Setting a custom toolbar
		// 			array('Bold', 'Italic'),
		// 			array('Underline', 'Strike', 'FontSize'),
		// 			array('Smiley'),
		// 			'/'
		// 		)
		// 	),
 
		// 	//Replacing styles from the "Styles tool"
		// 	'styles' => array(
 
		// 		//Creating a new style named "style 1"
		// 		'style 3' => array (
		// 			'name' 		=> 	'Green Title',
		// 			'element' 	=> 	'h3',
		// 			'styles' => array(
		// 				'color' 	=> 	'Green',
		// 				'font-weight' 	=> 	'bold'
		// 			),
		// 			),
 
		// 		),
		// );		
 
 
	}
	
	public function index() {
		$this->load->library('ckeditor');
		$this->ckeditor->basePath = base_url().'assets/ckeditor/';
		$this->ckeditor->config['toolbar'] = array(
		array( 'Source', '-', 'Bold', 'Italic', 'Underline', '-','Cut','Copy','Paste','PasteText','PasteFromWord','-','Undo','Redo','-','NumberedList','BulletedList' )
		);
		$this->ckeditor->config['language'] = 'it';
		$this->ckeditor->config['width'] = '730px';
		$this->ckeditor->config['height'] = '300px';           
		$this->ckfinder->SetupCKEditor($this->ckeditor,'../../assets/ckfinder/'); 	 
		$this->load->view('editor');
 
	}
}