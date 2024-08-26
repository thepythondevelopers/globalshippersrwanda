<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 
require_once APPPATH.'third_party/fpdf/fpdf.php';

class Fpdf_gen extends FPDF{
    
    // public function __construct(){
        
        
       
    // }
    function Header(){
        $this->Image('http://dev.globalshippersrwanda.com/assets/imgs/logo.png',10,6,45);
    }
    
}
$pdf = new FPDF();
    $pdf->AddPage();
    $CI = get_instance();
    $CI->fpdf = $pdf;
?>