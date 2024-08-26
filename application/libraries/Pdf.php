<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

// require_once 'dompdf1/autoload.inc.php';
require_once(dirname(__FILE__) . '/dompdf2/autoload.inc.php');

use Dompdf\Dompdf;
//ob_start();
//define("DOMPDF_UNICODE_ENABLED",true);
Class Pdf extends Dompdf{

    function __construct(){

        parent::__construct();
        $pdf = new DOMPDF();
        
        $CI =& get_instance();
        $CI->dompdf = $pdf;
       // ob_end_clean();
    }

}

// class Pdf
// {
//     function createPDF($html, $filename='', $download=TRUE, $paper='A4', $orientation='portrait'){
//         $dompdf = new DOMPDF();
//         $dompdf->load_html($html);
//         $dompdf->set_paper($paper, $orientation);
//         // echo "<pre>";
//         // phpinfo();
//         // die;
//         $dompdf->render();
      
//         if($download)
//             $dompdf->stream($filename.'.pdf', array('Attachment' => 1));
//         else
//             $dompdf->stream($filename.'.pdf', array('Attachment' => 0));
//     ob_end_clean();
//     }
// }

// require_once(dirname(__FILE__) . '/dompdf/autoload.inc.php');
//  use Dompdf\Dompdf;
// class Pdf
// {
//     function createPDF($html, $filename='', $download=TRUE, $paper='A4', $orientation='portrait'){
//         $dompdf = new DOMPDF();
//         $dompdf->load_html($html);
//         $dompdf->set_paper($paper, $orientation);

//     //    echo "<pre>";
//        // phpinfo();die;
//         $dompdf->render();
//         if($download)
//             $dompdf->stream($filename.'.pdf', array('Attachment' => 1));
//         else
//             $dompdf->stream($filename.'.pdf', array('Attachment' => 0));
//     }
// }

// require_once dirname(__FILE__) . '/tcpdf/tcpdf.php';
// class Pdf extends TCPDF
// {
//     function __construct()
//     {
//         parent::__construct();
//     }
// }

?>