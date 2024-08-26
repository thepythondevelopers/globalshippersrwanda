<?php
include('smtp/PHPMailerAutoload.php');
use Dompdf\Dompdf;
class Admin extends CI_Controller {
 
    public function __construct() {
        parent::__construct(); 
        $this->load->database();
        $this->load->helper(array('form', 'url','html'));
        $this->load->model('Admin_model');
        $this->load->model('Payment_model');
        $this->load->model('Shopnship_model');
        $this->load->model('Gsr');
        $this->load->library('form_validation');
    }

    public function homepage() {
      if($this->session->userdata('id')) {
         if($this->input->post('submit')) {
           $data = $this->input->post();
           $image =$_FILES['sec1_sliderImage1']['name'];
           $tmpname =$_FILES['sec1_sliderImage1']['tmp_name'];
           $extension=pathinfo($image, PATHINFO_EXTENSION);
           $rand = rand(0,100000);
           $rename = 'public/uploads/'.strtotime(date('Y-m-d')).$rand;
           $data['sec1_sliderImage1'] = $rename;
       if(move_uploaded_file($tmpname, $data['sec1_sliderImage1'])){
           //echo "The file ". $data['sec1_sliderImage1']. " has been uploaded.";
       }

    else {
               echo "Sorry, there was an error uploading your file.";
          }
          $image =$_FILES['sec1_sliderImage2']['name'];
          $tmpname =$_FILES['sec1_sliderImage2']['tmp_name'];
          $extension=pathinfo($image, PATHINFO_EXTENSION);
          $rand = rand(0,100000);
          $rename = 'public/uploads/'.strtotime(date('Y-m-d')).$rand;
          $data['sec1_sliderImage2'] = $rename;
      if(move_uploaded_file($tmpname, $data['sec1_sliderImage2'])){
          //echo "The file ". $data['sec1_sliderImage2']. " has been uploaded.";
      }

   else {
              echo "Sorry, there was an error uploading your file.";
         } 
         $image =$_FILES['sec1_sliderImage3']['name'];
         $tmpname =$_FILES['sec1_sliderImage3']['tmp_name'];
         $extension=pathinfo($image, PATHINFO_EXTENSION);
         $rand = rand(0,100000);
         $rename = 'public/uploads/'.strtotime(date('Y-m-d')).$rand;
         $data['sec1_sliderImage3'] = $rename;
     if(move_uploaded_file($tmpname, $data['sec1_sliderImage3'])){
         //echo "The file ". $data['sec1_sliderImage3']. " has been uploaded.";
     }

  else {
             echo "Sorry, there was an error uploading your file.";
        } 
        $image =$_FILES['sec2_bannerImage']['name'];
         $tmpname =$_FILES['sec2_bannerImage']['tmp_name'];
         $extension=pathinfo($image, PATHINFO_EXTENSION);
         $rand = rand(0,100000);
         $rename = 'public/uploads/'.strtotime(date('Y-m-d')).$rand;
         $data['sec2_bannerImage'] = $rename;
     if(move_uploaded_file($tmpname, $data['sec2_bannerImage'])){
         //echo "The file ". $data['sec2_bannerImage']. " has been uploaded.";
     }

  else {
             echo "Sorry, there was an error uploading your file.";
        } 
        $image =$_FILES['sec4_part1Img1']['name'];
        $tmpname =$_FILES['sec4_part1Img1']['tmp_name'];
        $extension=pathinfo($image, PATHINFO_EXTENSION);
        $rand = rand(0,100000);
        $rename = 'public/uploads/'.strtotime(date('Y-m-d')).$rand;
        $data['sec4_part1Img1'] = $rename;
    if(move_uploaded_file($tmpname, $data['sec4_part1Img1'])){
       // echo "The file ". $data['sec4_part1Img1']. " has been uploaded.";
    }

 else {
            echo "Sorry, there was an error uploading your file.";
       } 
       $image =$_FILES['sec4_part2Img']['name'];
       $tmpname =$_FILES['sec4_part2Img']['tmp_name'];
       $extension=pathinfo($image, PATHINFO_EXTENSION);
       $rand = rand(0,100000);
       $rename = 'public/uploads/'.strtotime(date('Y-m-d')).$rand;
       $data['sec4_part2Img'] = $rename;
   if(move_uploaded_file($tmpname, $data['sec4_part2Img'])){
       //echo "The file ". $data['sec4_part2Img']. " has been uploaded.";
   }

else {
           echo "Sorry, there was an error uploading your file.";
      }
      $image =$_FILES['sec4_part3Img']['name'];
      $tmpname =$_FILES['sec4_part3Img']['tmp_name'];
      $extension=pathinfo($image, PATHINFO_EXTENSION);
      $rand = rand(0,100000);
      $rename = 'public/uploads/'.strtotime(date('Y-m-d')).$rand;
      $data['sec4_part3Img'] = $rename;
  if(move_uploaded_file($tmpname, $data['sec4_part3Img'])){
      //echo "The file ". $data['sec4_part3Img']. " has been uploaded.";
  }

else {
          echo "Sorry, there was an error uploading your file.";
     }  
     $image =$_FILES['sec5_slider_Image1']['name'];
     $tmpname =$_FILES['sec5_slider_Image1']['tmp_name'];
     $extension=pathinfo($image, PATHINFO_EXTENSION);
     $rand = rand(0,100000);
     $rename = 'public/uploads/'.strtotime(date('Y-m-d')).$rand;
     $data['sec5_slider_Image1'] = $rename;
 if(move_uploaded_file($tmpname, $data['sec5_slider_Image1'])){
     //echo "The file ". $data['sec4_part3Img']. " has been uploaded.";
 }

else {
         echo "Sorry, there was an error uploading your file.";
    }
    $image =$_FILES['sec5_slider_Image2']['name'];
    $tmpname =$_FILES['sec5_slider_Image2']['tmp_name'];
    $extension=pathinfo($image, PATHINFO_EXTENSION);
    $rand = rand(0,100000);
    $rename = 'public/uploads/'.strtotime(date('Y-m-d')).$rand;
    $data['sec5_slider_Image2'] = $rename;
if(move_uploaded_file($tmpname, $data['sec5_slider_Image2'])){
    //echo "The file ". $data['sec4_part3Img']. " has been uploaded.";
}

else {
        echo "Sorry, there was an error uploading your file.";
   }
   $image =$_FILES['sec5_slider_Image3']['name'];
   $tmpname =$_FILES['sec5_slider_Image3']['tmp_name'];
   $extension=pathinfo($image, PATHINFO_EXTENSION);
   $rand = rand(0,100000);
   $rename = 'public/uploads/'.strtotime(date('Y-m-d')).$rand;
   $data['sec5_slider_Image3'] = $rename;
if(move_uploaded_file($tmpname, $data['sec5_slider_Image3'])){
   //echo "The file ". $data['sec4_part3Img']. " has been uploaded.";
}

else {
       echo "Sorry, there was an error uploading your file.";
  }
  $image =$_FILES['sec5_slider_Image4']['name'];
  $tmpname =$_FILES['sec5_slider_Image4']['tmp_name'];
  $extension=pathinfo($image, PATHINFO_EXTENSION);
  $rand = rand(0,100000);
  $rename = 'public/uploads/'.strtotime(date('Y-m-d')).$rand;
  $data['sec5_slider_Image4'] = $rename;
if(move_uploaded_file($tmpname, $data['sec5_slider_Image4'])){
  //echo "The file ". $data['sec4_part3Img']. " has been uploaded.";
}

else {
      echo "Sorry, there was an error uploading your file.";
 }
 $image =$_FILES['sec5_slider_Image5']['name'];
 $tmpname =$_FILES['sec5_slider_Image5']['tmp_name'];
 $extension=pathinfo($image, PATHINFO_EXTENSION);
 $rand = rand(0,100000);
 $rename = 'public/uploads/'.strtotime(date('Y-m-d')).$rand;
 $data['sec5_slider_Image5'] = $rename;
if(move_uploaded_file($tmpname, $data['sec5_slider_Image5'])){
 //echo "The file ". $data['sec4_part3Img']. " has been uploaded.";
}

else {
     echo "Sorry, there was an error uploading your file.";
}
$image =$_FILES['sec5_slider_Image6']['name'];
$tmpname =$_FILES['sec5_slider_Image6']['tmp_name'];
$extension=pathinfo($image, PATHINFO_EXTENSION);
$rand = rand(0,100000);
$rename = 'public/uploads/'.strtotime(date('Y-m-d')).$rand;
$data['sec5_slider_Image6'] = $rename;
if(move_uploaded_file($tmpname, $data['sec5_slider_Image6'])){
//echo "The file ". $data['sec4_part3Img']. " has been uploaded.";
}

else {
    echo "Sorry, there was an error uploading your file.";
}
$image =$_FILES['sec5_slider_Image7']['name'];
$tmpname =$_FILES['sec5_slider_Image7']['tmp_name'];
$extension=pathinfo($image, PATHINFO_EXTENSION);
$rand = rand(0,100000);
$rename = 'public/uploads/'.strtotime(date('Y-m-d')).$rand;
$data['sec5_slider_Image7'] = $rename;
if(move_uploaded_file($tmpname, $data['sec5_slider_Image7'])){
//echo "The file ". $data['sec4_part3Img']. " has been uploaded.";
}

else {
    echo "Sorry, there was an error uploading your file.";
}
$image =$_FILES['sec5_slider_Image8']['name'];
$tmpname =$_FILES['sec5_slider_Image8']['tmp_name'];
$extension=pathinfo($image, PATHINFO_EXTENSION);
$rand = rand(0,100000);
$rename = 'public/uploads/'.strtotime(date('Y-m-d')).$rand;
$data['sec5_slider_Image8'] = $rename;
if(move_uploaded_file($tmpname, $data['sec5_slider_Image8'])){
//echo "The file ". $data['sec4_part3Img']. " has been uploaded.";
}

else {
    echo "Sorry, there was an error uploading your file.";
}
// echo "<pre>";
// print_r($_FILES);exit;
          unset($data['submit']);
        $this->Admin_model->insertcmsdata($data); 
         }
     $order['count']   = $this->Admin_model->count_notification();
     $order['data']    = $this->Admin_model->gethomepagecmsdata();

             $this->load->view('admin/heads',$order);                
             $this->load->view('admin/homepage',$order);                
             $this->load->view('admin/footer');
     }
 }
 public function homepageslidermodal(){
   if($this->session->userdata('id')) {
     if($this->input->post('submit')) {
       $data = $this->input->post();
       $image =$_FILES['sec5_modal_img1']['name'];
       $tmpname =$_FILES['sec5_modal_img1']['tmp_name'];
       $extension=pathinfo($image, PATHINFO_EXTENSION);
       $rand = rand(0,100000);
       $rename = 'public/uploads/'.strtotime(date('Y-m-d')).$rand;
       $data['sec5_modal_img1'] = $rename;
     if(move_uploaded_file($tmpname, $data['sec5_modal_img1'])){
       //echo "The file ". $data['sec4_part3Img']. " has been uploaded.";
     }
     
     else {
           echo "Sorry, there was an error uploading your file.";
      }
      $image =$_FILES['sec5_modal_img2']['name'];
      $tmpname =$_FILES['sec5_modal_img2']['tmp_name'];
      $extension=pathinfo($image, PATHINFO_EXTENSION);
      $rand = rand(0,100000);
      $rename = 'public/uploads/'.strtotime(date('Y-m-d')).$rand;
      $data['sec5_modal_img2'] = $rename;
     if(move_uploaded_file($tmpname, $data['sec5_modal_img2'])){
      //echo "The file ". $data['sec4_part3Img']. " has been uploaded.";
     }
     
     else {
          echo "Sorry, there was an error uploading your file.";
     }
     $image =$_FILES['sec5_modal_img3']['name'];
     $tmpname =$_FILES['sec5_modal_img3']['tmp_name'];
     $extension=pathinfo($image, PATHINFO_EXTENSION);
     $rand = rand(0,100000);
     $rename = 'public/uploads/'.strtotime(date('Y-m-d')).$rand;
     $data['sec5_modal_img3'] = $rename;
     if(move_uploaded_file($tmpname, $data['sec5_modal_img3'])){
     //echo "The file ". $data['sec4_part3Img']. " has been uploaded.";
     }
     
     else {
         echo "Sorry, there was an error uploading your file.";
     }
     $image =$_FILES['sec5_modal_img4']['name'];
     $tmpname =$_FILES['sec5_modal_img4']['tmp_name'];
     $extension=pathinfo($image, PATHINFO_EXTENSION);
     $rand = rand(0,100000);
     $rename = 'public/uploads/'.strtotime(date('Y-m-d')).$rand;
     $data['sec5_modal_img4'] = $rename;
     if(move_uploaded_file($tmpname, $data['sec5_modal_img4'])){
     //echo "The file ". $data['sec4_part3Img']. " has been uploaded.";
     }
     
     else {
         echo "Sorry, there was an error uploading your file.";
     }
     $image =$_FILES['sec5_modal_img5']['name'];
     $tmpname =$_FILES['sec5_modal_img5']['tmp_name'];
     $extension=pathinfo($image, PATHINFO_EXTENSION);
     $rand = rand(0,100000);
     $rename = 'public/uploads/'.strtotime(date('Y-m-d')).$rand;
     $data['sec5_modal_img5'] = $rename;
     if(move_uploaded_file($tmpname, $data['sec5_modal_img5'])){
     //echo "The file ". $data['sec4_part3Img']. " has been uploaded.";
     }
     
     else {
         echo "Sorry, there was an error uploading your file.";
     }
     $image =$_FILES['sec5_modal_img6']['name'];
     
     $tmpname =$_FILES['sec5_modal_img6']['tmp_name'];
     $extension=pathinfo($image, PATHINFO_EXTENSION);
     $rand = rand(0,100000);
     $rename = 'public/uploads/'.strtotime(date('Y-m-d')).$rand;
     $data['sec5_modal_img6'] = $rename;
     if(move_uploaded_file($tmpname, $data['sec5_modal_img6'])){
     //echo "The file ". $data['sec4_part3Img']. " has been uploaded.";
     }
     
     else {
         echo "Sorry, there was an error uploading your file.";
     }
     $image =$_FILES['sec5_modal_img7']['name'];
     $tmpname =$_FILES['sec5_modal_img7']['tmp_name'];
     $extension=pathinfo($image, PATHINFO_EXTENSION);
     $rand = rand(0,100000);
     $rename = 'public/uploads/'.strtotime(date('Y-m-d')).$rand;
     $data['sec5_modal_img7'] = $rename;
     if(move_uploaded_file($tmpname, $data['sec5_modal_img7'])){
     //echo "The file ". $data['sec4_part3Img']. " has been uploaded.";
     }
     
     else {
         echo "Sorry, there was an error uploading your file.";
     }
     $image =$_FILES['sec5_modal_img8']['name'];
     $tmpname =$_FILES['sec5_modal_img8']['tmp_name'];
     $extension=pathinfo($image, PATHINFO_EXTENSION);
     $rand = rand(0,100000);
     $rename = 'public/uploads/'.strtotime(date('Y-m-d')).$rand;
     $data['sec5_modal_img8'] = $rename;
     if(move_uploaded_file($tmpname, $data['sec5_modal_img8'])){
     //echo "The file ". $data['sec4_part3Img']. " has been uploaded.";
     }
     
     else {
         echo "Sorry, there was an error uploading your file.";
     }
       unset($data['submit']);
      $result = $this->Admin_model->insertmodaldata($data);
      echo json_encode($result);
      redirect('cms/homepage');
      
     }
   }
 }
    public function how_it_works_listing(){
      $notifications['count']   = $this->Admin_model->count_notification();
    $data['record'] = $this->Admin_model->gethowitworkssec2();
    $this->load->view('admin/heads',$notifications);
    $this->load->view('admin/howitworks-listing',$data);
    $this->load->view('admin/footer');
    }
    public function how_it_works() {
        $order['count']   = $this->Admin_model->count_notification();
        $order['datasec1']= $this->Admin_model->gethowitworkssec1();
                $this->load->view('admin/heads',$order); 
                $this->load->view('admin/how-it-works',$order);            
                $this->load->view('admin/footer');
    }
    public function howitworksinsertsec1(){
        $id= $this->input->post('id');
        if($this->Admin_model->isalreadyhowitworksec1($id)){
            $data = [
                'title' => $this->input->post('sec1_title1'),
                'details' => $this->input->post('sec1_details'),
                'updateddate'   =>date('Y-m-d H:i:s')
            ];
            $this->Admin_model->howitworksec1update($data,$id);
        }
        else{
            $data = [
                'title' => $this->input->post('sec1_title1'),
                'details' => $this->input->post('sec1_details'),
                'createddate'   =>date('Y-m-d H:i:s')
            ];
            $result= $this->Admin_model->howitworksec1($data);
            echo json_encode($result);
        }
        redirect('cms/how-it-works');
       
        
    }
    public function howitworksinsertsec2(){
     $id= $this->input->post('sec2id');
      $count = count($this->input->post('sec2_title'));
        for($i=0;$i<$count;$i++){
            $data = [
                'title'     => $this->input->post('sec2_title'.'['.$i.']'),
                'description'    => $this->input->post('sec2description'.'['.$i.']'),
                'createddate'   =>date('Y-m-d H:i:s')
            ];
            $image =$_FILES['imgpath']['name'][$i];
            $tmpname =$_FILES['imgpath']['tmp_name'][$i];
            $extension=pathinfo($image, PATHINFO_EXTENSION);
            $rand = rand(0,100000);
            $rename = 'public/uploads/'.strtotime(date('Y-m-d')).$rand;
            $data['imgpath'] = $rename;
        
        if(move_uploaded_file($tmpname, $data['imgpath'])){
            echo "The file ". $data['imgpath']. " has been uploaded.";
        }

     else {
                echo "Sorry, there was an error uploading your file.";
               }
               $result= $this->Admin_model->howitworksec2($data); 
        }
        echo json_encode($result);
        redirect('cms/how-it-works');
    }
    public function howitworksupdatesec2(){
      $id= $this->uri->segment(3);
      $order['count']   = $this->Admin_model->count_notification();
       $order['data'] = $this->Admin_model->edit_howitworksec2($id);
                $this->load->view('admin/heads',$order); 
                $this->load->view('admin/edit-how-it-works',$order);            
                $this->load->view('admin/footer');
    }
    public function edit_howitworks(){
      $id = $this->input->post('id');
      $data = [
        'title'     => $this->input->post('sec2_title'),
        'description'    => $this->input->post('sec2description'),
        'createddate'   =>date('Y-m-d H:i:s')
    ];
    $image =$_FILES['imgpath']['name'];
    $tmpname =$_FILES['imgpath']['tmp_name'];
    $extension=pathinfo($image, PATHINFO_EXTENSION);
    $rand = rand(0,100000);
    $rename = 'public/uploads/'.strtotime(date('Y-m-d')).$rand;
    $data['imgpath'] = $rename;
    // echo "<pre>";
    // print_r($data);
    // exit;
    if(move_uploaded_file($tmpname, $data['imgpath'])){
    echo "The file ". $data['imgpath']. " has been uploaded.";
    }

    else {
        echo "Sorry, there was an error uploading your file.";
       }
       $result = $this->Admin_model->updatehowitworkssec2($id,$data);
       echo json_encode($result);
       redirect('cms/how-it-works-list');
    }
    public function delete_howitworks_sec2(){
      $id = $this->uri->segment(3);
      $result = $this->Admin_model->howitworkssec2_delete($id);
      if($result==TRUE){
          $this->session->set_flashdata('msg'," deleted Successfully!");
          }else{
          $this->session->set_flashdata('msg',"No delete Successfully!");
          }
          redirect('cms/how-it-works-list');
    }
    public function about_us() {
        $order['count']   = $this->Admin_model->count_notification();
        $order['sec1'] = $this->Admin_model->getaboutsec1();
        $order['sec2'] = $this->Admin_model->getaboutussec2();
        $order['sec3'] = $this->Admin_model->getaboutussec3();
        $order['sec4'] = $this->Admin_model->getaboutussec4();
        $order['sec5'] = $this->Admin_model->getaboutussec5();
                $this->load->view('admin/heads',$order);
                $this->load->view('admin/about-us',$order);                
                $this->load->view('admin/footer');
    }
    public function aboutusupdatesec1(){
      $sec1id= $this->input->post('sec1id');
        $data = [
            'title' => $this->input->post('sec1_title1'),
            'description' => $this->input->post('sec1_details'),
            'createddate'   =>date('Y-m-d H:i:s')
        ];
        $image =$_FILES['banner']['name'];
            $tmpname =$_FILES['banner']['tmp_name'];
            $extension=pathinfo($image, PATHINFO_EXTENSION);
            $rand = rand(0,100000);
            $rename = 'public/uploads/'.strtotime(date('Y-m-d')).$rand;
            $data['imgpath'] = $rename;
        
        if(move_uploaded_file($tmpname, $data['imgpath'])){
            echo "The file ". $data['imgpath']. " has been uploaded.";
        }

     else {
                echo "Sorry, there was an error uploading your file.";
               }
        $result = $this->Admin_model->update_aboutsec1($data,$sec1id);
        echo json_encode($result);
        redirect('cms/about-us');
    }

    public function updateaboutsec2(){
      $sec2id= $this->input->post('sec2id');
        $data = [
            'title' => $this->input->post('sec2title'),
            'heading' => $this->input->post('sec2heading'),
            'description' => $this->input->post('sec2desc'),
            'points' =>$this->input->post('pointssec2'),
            'createddate'   =>date('Y-m-d H:i:s')
        ];
        $image =$_FILES['imgpath']['name'];
            $tmpname =$_FILES['imgpath']['tmp_name'];
            $extension=pathinfo($image, PATHINFO_EXTENSION);
            $rand = rand(0,100000);
            $rename = 'public/uploads/'.strtotime(date('Y-m-d')).$rand;
            $data['imgpath'] = $rename;
        
        if(move_uploaded_file($tmpname, $data['imgpath'])){
            echo "The file ". $data['imgpath']. " has been uploaded.";
        }

     else {
                echo "Sorry, there was an error uploading your file.";
               }
        $result = $this->Admin_model->update_aboutsec2($data,$sec2id);
        echo json_encode($result);
        redirect('cms/about-us');
    }

    public function aboutupdatesec3(){
      $sec3id= $this->input->post('sec3id');
        $data =[
            'title' => $this->input->post('sec3_title'),
            'description'  => $this->input->post('sec3_des'),
            'createddate'   =>date('Y-m-d H:i:s')
        ];
        $result = $this->Admin_model->update_aboutsec3($data,$sec3id);
        echo json_encode($result);
        redirect('cms/about-us');
    }

    public function aboutusinsertsec4(){
        $count = count($this->input->post('sec4title'));
        for($i=0;$i<$count;$i++){
            $data = [
                'title' => $this->input->post('sec4title'.'['.$i.']'),
                'description' => $this->input->post('sec4desc'.'['.$i.']'),
                'createddate'   =>date('Y-m-d H:i:s')
            ];
            $image =$_FILES['sec4imgpath']['name'][$i];
            $tmpname =$_FILES['sec4imgpath']['tmp_name'][$i];
            $extension=pathinfo($image, PATHINFO_EXTENSION);
            $rand = rand(0,100000);
            $rename = 'public/uploads/'.strtotime(date('Y-m-d')).$rand;
            $data['imgpath'] = $rename;
        
        if(move_uploaded_file($tmpname, $data['imgpath'])){
            echo "The file ". $data['imgpath']. " has been uploaded.";
        }

     else {
                echo "Sorry, there was an error uploading your file.";
               }
               $result = $this->Admin_model->aboutusinsertsec4($data);
        }
        
        echo json_encode($result);
        redirect('about-us');
       
    }

    public function aboutupdatesec5(){
      $sec5id= $this->input->post('sec5id');
        $data = [
           // 'title' => $this->input->post('sec2title'),
            'title' => $this->input->post('sec5heading'),
            'description' => $this->input->post('sec5desc'),
            'points' => $this->input->post('pointssec5'),
            'createddate'   =>date('Y-m-d H:i:s')
        ];
        $image =$_FILES['imgpath']['name'];
            $tmpname =$_FILES['imgpath']['tmp_name'];
            $extension=pathinfo($image, PATHINFO_EXTENSION);
            $rand = rand(0,100000);
            $rename = 'public/uploads/'.strtotime(date('Y-m-d')).$rand;
            $data['imgpath'] = $rename;
        
        if(move_uploaded_file($tmpname, $data['imgpath'])){
            echo "The file ". $data['imgpath']. " has been uploaded.";
        }

     else {
                echo "Sorry, there was an error uploading your file.";
               }
               
        $result = $this->Admin_model->update_aboutsec5($data,$sec5id);
        echo json_encode($result);
        redirect('cms/about-us');
    }
    public function aboutsec4() {
      $order['count']   = $this->Admin_model->count_notification();
      $order['record'] = $this->Admin_model->getaboutsec4();
              $this->load->view('admin/heads',$order);
              $this->load->view('admin/aboutussec4-listing',$order);                
              $this->load->view('admin/footer');
  }
  public function updateaboutsec4(){
    $id = $this->uri->segment(3);
    $order['count']   = $this->Admin_model->count_notification();
      $order['data'] = $this->Admin_model->editaboutsec4($id);
              $this->load->view('admin/heads',$order);
              $this->load->view('admin/edit-aboutus-sec4',$order);                
              $this->load->view('admin/footer');
  }
  public function editaboutsec4(){
    $sec4id= $this->input->post('sec4id');
        $data = [
            'title' => $this->input->post('sec4title'),
            'description' => $this->input->post('sec4desc'),
            'createddate'   =>date('Y-m-d H:i:s')
        ];
        $image =$_FILES['imgpath']['name'];
        $tmpname =$_FILES['imgpath']['tmp_name'];
        $extension=pathinfo($image, PATHINFO_EXTENSION);
        $rand = rand(0,100000);
        $rename = 'public/uploads/'.strtotime(date('Y-m-d')).$rand;
        $data['imgpath'] = $rename;
    
    if(move_uploaded_file($tmpname, $data['imgpath'])){
        echo "The file ". $data['imgpath']. " has been uploaded.";
    }

 else {
            echo "Sorry, there was an error uploading your file.";
           }
           $result = $this->Admin_model->update_aboutsec4($data,$sec4id);
    //}
    
    echo json_encode($result);
    redirect('cms/aboutus-sec-4-listing');
  }
  public function delete_aboutus_sec4(){
    $id = $this->uri->segment(3);
    $result = $this->Admin_model->aboutsec4_delete($id);
    if($result==TRUE){
        $this->session->set_flashdata('msg'," deleted Successfully!");
        }else{
        $this->session->set_flashdata('msg',"No delete Successfully!");
        }
        redirect('cms/aboutus-sec-4-listing');
  }
    public function aboutusinsertsec6(){
        $count = count($this->input->post('sec6title'));
        for($i=0;$i<$count;$i++){
            $data = [
                'title' => $this->input->post('sec6title'.'['.$i.']'),
                'description' => $this->input->post('sec6desc'.'['.$i.']'),
                'createddate'   =>date('Y-m-d H:i:s')
            ];
            $image =$_FILES['sec6imgpath']['name'][$i];
            $tmpname =$_FILES['sec6imgpath']['tmp_name'][$i];
            $extension=pathinfo($image, PATHINFO_EXTENSION);
            $rand = rand(0,100000);
            $rename = 'public/uploads/'.strtotime(date('Y-m-d')).$rand;
            $data['imgpath'] = $rename;
        
        if(move_uploaded_file($tmpname, $data['imgpath'])){
            echo "The file ". $data['imgpath']. " has been uploaded.";
        }

     else {
                echo "Sorry, there was an error uploading your file.";
               }
               $result = $this->Admin_model->aboutusinsertsec6($data);
        }
        
        echo json_encode($result);
        redirect('about-us');
       
    }

    public function aboutusinsertsec7(){
        $count = count($this->input->post('sec7title'));
        for($i=0;$i<$count;$i++){
            $data = [
                'title' => $this->input->post('sec7title'.'['.$i.']'),
                'description' => $this->input->post('sec7desc'.'['.$i.']'),
                'createddate'   =>date('Y-m-d H:i:s')
            ];
            $image =$_FILES['sec7imgpath']['name'][$i];
            $tmpname =$_FILES['sec7imgpath']['tmp_name'][$i];
            $extension=pathinfo($image, PATHINFO_EXTENSION);
            $rand = rand(0,100000);
            $rename = 'public/uploads/'.strtotime(date('Y-m-d')).$rand;
            $data['imgpath'] = $rename;
        
        if(move_uploaded_file($tmpname, $data['imgpath'])){
            echo "The file ". $data['imgpath']. " has been uploaded.";
        }

     else {
                echo "Sorry, there was an error uploading your file.";
               }
               $result = $this->Admin_model->aboutusinsertsec7($data);
        }
        
        echo json_encode($result);
        redirect('about-us');
       
    }


    public function restrictions() {
         if($this->session->userdata('id')){ 
            $order['count']   = $this->Admin_model->count_notification();
            $user_id = $this->session->userdata('id');
                $this->load->view('admin/heads', $order);                
                $this->load->view('admin/restrictions');                
                $this->load->view('admin/footer'); 
        }
    }
    public function restrictions_list(){
      $order['count']   = $this->Admin_model->count_notification();
          $order['record']    = $this->Admin_model->getrestrictiondata_section2();
          // echo "<pre>";
          // print_r($order['record']);
          // exit;
                  $this->load->view('admin/heads',$order);
                  $this->load->view('admin/restriction-listing',$order);
                  $this->load->view('admin/datatable_footer'); 
    }

    public function restriction_section2(){
        if($this->session->userdata('id')){ 
        $count = count($this->input->post('sec2_title'));
        for($i=0;$i<$count;$i++){
           
            $data =[
                'points'         => $this->input->post('points'.'['.$i.']'),
                'sec2_title'     => $this->input->post('sec2_title'.'['.$i.']'),
                'description'    => $this->input->post('description'.'['.$i.']'),
                'createddate'   =>date('Y-m-d H:i:s')
            ];
           
            $image =$_FILES['imgpath']['name'][$i];
            $tmpname =$_FILES['imgpath']['tmp_name'][$i];
            $extension=pathinfo($image, PATHINFO_EXTENSION);
            $rand = rand(0,100000);
            $rename = 'public/uploads/'.strtotime(date('Y-m-d')).$rand;
            $data['imgpath'] = $rename;
        
        if(move_uploaded_file($tmpname, $data['imgpath'])){
            echo "The file ". $data['imgpath']. " has been uploaded.";
        }

     else {
                echo "Sorry, there was an error uploading your file.";
               }
              
            $result = $this->Admin_model->restriction_section2($data); 
        }
            echo json_encode($result);
            redirect('restrictions');
    }
    }
    public function editrestrictionsec2(){
      $id= $this->uri->segment(3);
      $order['count']   = $this->Admin_model->count_notification();
       $order['data'] = $this->Admin_model->edit_restriction($id);
                $this->load->view('admin/heads',$order); 
                $this->load->view('admin/edit-restriction',$order);            
                $this->load->view('admin/footer');
    }
    public function update_restrictionsec2(){
         $id= $this->input->post('id');
          $data =[
              'points'         => $this->input->post('points'),
              'sec2_title'     => $this->input->post('sec2_title'),
              'description'    => $this->input->post('description'),
              'updateddate'   =>date('Y-m-d H:i:s')
          ];
        
          $image =$_FILES['imgpath']['name'];
          $tmpname =$_FILES['imgpath']['tmp_name'];
          $extension=pathinfo($image, PATHINFO_EXTENSION);
          $rand = rand(0,100000);
          $rename = 'public/uploads/'.strtotime(date('Y-m-d')).$rand;
          $data['imgpath'] = $rename;
      
      if(move_uploaded_file($tmpname, $data['imgpath'])){
          echo "The file ". $data['imgpath']. " has been uploaded.";
      }

   else {
              echo "Sorry, there was an error uploading your file.";
             }
            
          $result = $this->Admin_model->updaterestriction_sec2($id,$data); 
          echo json_encode($result);
          redirect('cms/restrictions-listing');
  }
  public function delete_restrictionsec2(){
    $id = $this->uri->segment(3);
    $result = $this->Admin_model->restrictionsec2_delete($id);
    if($result==TRUE){
        $this->session->set_flashdata('msg'," deleted Successfully!");
        }else{
        $this->session->set_flashdata('msg',"No deleted Successfully!");
        }
        redirect('cms/restrictions-listing');
  }
    public function restriction_section1(){
        if($this->session->userdata('id')){ 
            
           $id = $this->input->post('id');
           
        $data = [
            'title'        => $this->input->post('sec1_title1'),
            'details'        => $this->input->post('sec1_details'),
            'createddate'   =>date('Y-m-d H:i:s')
        ];
        $image =$_FILES['banner']['name'];
        $extension = pathinfo($image,PATHINFO_EXTENSION);
        $rand = rand(0,100000);
        $rename = 'public/uploads/'.strtotime(date('Y-m-d')).$rand;
        $data['banner'] = $rename.'.'.$extension;
        if(move_uploaded_file($_FILES["banner"]["tmp_name"], $data['banner'])){
            echo "The file ". $data['banner']. " has been uploaded.";
        }

     else {
                echo "Sorry, there was an error uploading your file.";
               }
               $result = $this->Admin_model->restriction_section1($data);
             echo json_encode($result);
             redirect('restrictions');
        // echo "<pre>";
        // print_r($data);
        // exit;
            }
    }
   
    public function help_centre() {
        $order['count']   = $this->Admin_model->count_notification();
       //$order['datasec1'] = $this->Admin_model->gethelpsec1();
        $order['category'] = $this->Admin_model->helpcentregetcat();

                 $this->load->view('admin/heads',$order); 
                 $this->load->view('admin/help_centre',$order);               
                $this->load->view('admin/footer'); 
    }
    public function helpinsertsec1(){
        $id= $this->input->post('id');
        if($this->Admin_model->isalreadyhelpcentresec1($id)){
            //update
            $data =[
                'title'  => $this->input->post('title1'),
                'updateddate' => date('Y-m-d H:i:s')
            ];
            $this->Admin_model->helpcentresec1update($data,$id);
        }
        else{
            $data =[
                'title'  => $this->input->post('title1'),
                'createddate' => date('Y-m-d H:i:s')
            ];

            $result = $this->Admin_model->helpinsertsec1($data);

        }
        
        redirect('cms/help-centre');
    }
    public function helpcentreinsertsec2(){
        $count = count($this->input->post('ques1'));
        // echo "<pre>";
        // print_r($count);
        // exit;
        for($i=0;$i<$count;$i++){
            $data = [
                'title' => $this->input->post('title2'.'['.$i.']'),
                'ques1' => $this->input->post('ques1'.'['.$i.']'),
                'ques2' => $this->input->post('ques2'.'['.$i.']'),
                'ques3' => $this->input->post('ques3'.'['.$i.']'),
                'ques4' => $this->input->post('ques4'.'['.$i.']'),
                'ques5' => $this->input->post('ques5'.'['.$i.']'),
                'createddate' => date('Y-m-d H:i:s')
            ];
            // echo "<pre>";
            // print_r($data);
           $result = $this->Admin_model->helpcentreinsertsec2($data);
        }
       // exit;
        echo json_encode($result);
        redirect('help-centre');
    }
    public function faq() {
        $order['count']   = $this->Admin_model->count_notification();
            $order['data'] = $this->Admin_model->getfaqsec1();
           // $order['record'] = $this->Admin_model->getfaqsec2();
                 $this->load->view('admin/heads',$order);  
                 $this->load->view('admin/faq.php',$order);              
                $this->load->view('admin/footer'); 
    }
    public function faqsec1insert(){
        $id = $this->input->post('id');
        if($this->Admin_model->isalreadyfaqsec1($id)){
            //update
            $data = [
                'title'  => $this->input->post('sec1_title1'),
                'details'  => $this->input->post('sec1_details'),
                'updateddate'   =>date('Y-m-d H:i:s')
            ];
            $this->Admin_model->faqsec1update($data,$id);
        }
        else{
            //insert

            $data = [
                'title'  => $this->input->post('sec1_title1'),
                'details'  => $this->input->post('sec1_details'),
                'createddate'   =>date('Y-m-d H:i:s')
            ];
            $result= $this->Admin_model->faqsec1($data);
            echo json_encode($result);
        }
       
        redirect('cms/faq');
    
}   
    public function faqsec2insert(){
        if($this->session->userdata('id')){ 
        $id = $this->input->post('id'); 
        $count = count($this->input->post('sec2_title'));
            for($i=0;$i<$count;$i++){
                $data = [
                    'question' => $this->input->post('sec2_title'.'['.$i.']'),
                    'answer' => $this->input->post('description'.'['.$i.']'),
                    'createddate'   =>date('Y-m-d H:i:s')
                ];
                $result = $this->Admin_model->faqsec2($data);
            }
           echo json_encode($result);
        
           redirect('cms/faq-listing');
      
    }
}
  public function faq_list(){
    $order['count']   = $this->Admin_model->count_notification();
        $order['record']    = $this->Admin_model->getfaqsec2();
                $this->load->view('admin/heads',$order);
                $this->load->view('admin/faq-listing',$order);
                $this->load->view('admin/footer'); 
  }
        public function faqedit(){
              $id = $this->uri->segment(3);
              $order['count']   = $this->Admin_model->count_notification();
              $order['record'] = $this->Admin_model->edit_faqsec2($id);
                $this->load->view('admin/heads',$order); 
                $this->load->view('admin/edit-faq',$order);            
                $this->load->view('admin/footer');
          }
          public function update_faq(){
            $id = $this->input->post('id');
            $data =[
              'question' => $this->input->post('ques'),
              'answer' => $this->input->post('ans'),
              'updateddate' => date('Y-m-d H:i:s')
            ];
            $result = $this->Admin_model->updatefaq($id,$data);
            echo json_encode($result);
            redirect('cms/faq-listing');
          }
          public function delete_faq(){
            $id = $this->uri->segment(3);
            $result = $this->Admin_model->faqsec2_delete($id);
            if($result==TRUE){
                $this->session->set_flashdata('msg'," deleted Successfully!");
                }else{
                $this->session->set_flashdata('msg',"No deleted Successfully!");
                }
                redirect('cms/faq-listing');
          }
    public function blog() {
        $order['count']   = $this->Admin_model->count_notification();
        $order['sec1']    = $this->Admin_model->getblogsec1();
                $this->load->view('admin/heads',$order);
                $this->load->view('admin/blog.php',$order);
                $this->load->view('admin/footer'); 
    }
    public function blogsec1insert(){
        $id = $this->input->post('id');
        if($this->Admin_model->isalreadyblogsec1($id)){
            //update
            $data = [
                'title' => $this->input->post('sec1_title1'),
                'updateddate'   =>date('Y-m-d H:i:s')
            ];
            $this->Admin_model->blogsec1update($data,$id);
        }
        else{
            //insert

            $data = [
                'title' => $this->input->post('sec1_title1'),
                'createddate'   =>date('Y-m-d H:i:s')
            ];
            $result = $this->Admin_model->blogsec1insert($data);
            echo json_encode($result);
        }
      
        redirect('cms/blog');
    }

    public function blogsec2insert(){
            $data = [
                'heading' => $this->input->post('heading'),
                'title' => $this->input->post('title'),
                'description' => $this->input->post('description'),
                'date_created'   =>date('Y-m-d H:i:s')
            ];
            $image =$_FILES['imgpath']['name'];
            $extension = pathinfo($image,PATHINFO_EXTENSION);
            $rand = rand(0,100000);
            $rename = 'public/uploads/'.strtotime(date('Y-m-d')).$rand;
            $data['imgpath'] = $rename.'.'.$extension;
            if(move_uploaded_file($_FILES["imgpath"]["tmp_name"], $data['imgpath'])){
                echo "The file ". $data['imgpath']. " has been uploaded.";
            }
    
         else {
            echo "Sorry, there was an error uploading your file.";
         }
         $result = $this->Admin_model->blogsec2insert($data);
       // echo json_encode($result);;
       if($result==TRUE){
        $this->session->set_flashdata('msg',"blog created Successfully!");
        }else{
        $this->session->set_flashdata('msg',"blog is not create Successfully!");
        }
        redirect('cms/blog-list');
    }
    public function bloglisting(){
        $order['count']   = $this->Admin_model->count_notification();
        $order['blog']    = $this->Admin_model->getblogsec2();
                $this->load->view('admin/heads',$order);
                $this->load->view('admin/blog-list.php',$order);
                $this->load->view('admin/footer'); 
    }

    public function edit_blog(){
        $id = $this->uri->segment(3);
        $notifications['count']   = $this->Admin_model->count_notification();
        $data['record'] = $this->Admin_model->edit_blog($id);
        $this->load->view('admin/heads',$notifications);
        $this->load->view('admin/edit-blog',$data);
        $this->load->view('admin/footer');

    }
    public function updateblog(){
        $blogid = $this->input->post('blogid');
        $updatedata = [
            'heading' => $this->input->post('heading'),
            'title' => $this->input->post('title'),
            'description' => $this->input->post('description'),
            'date_modified' => date('Y-m-d H:i:s'),
        ];
       
        $image =$_FILES['imgpath']['name'];
        $extension = pathinfo($image,PATHINFO_EXTENSION);
        $rand = rand(0,100000);
        $rename = 'public/uploads/'.strtotime(date('Y-m-d')).$rand;
        $updatedata['imgpath'] = $rename.'.'.$extension;
       // unlink($data['imgpath']);
        if(move_uploaded_file($_FILES["imgpath"]["tmp_name"], $updatedata['imgpath'])){
            echo "The file ". $updatedata['imgpath']. " has been uploaded.";
        }

     else {
        echo "Sorry, there was an error uploading your file.";
     }
     $result = $this->Admin_model->updateblog($blogid,$updatedata);
    if($result==TRUE){
        $this->session->set_flashdata('msg',"blog updated Successfully!");
        }else{
        $this->session->set_flashdata('msg',"blog is not update Successfully!");
        }
        redirect('cms/blog-list');
  
    }
    public function delete_blog(){
        $blogid = $this->uri->segment(3);
        $result = $this->Admin_model->blog_delete($blogid);
        if($result==TRUE){
            $this->session->set_flashdata('msg',"blog deleted Successfully!");
            }else{
            $this->session->set_flashdata('msg',"blog is not delete Successfully!");
            }
            redirect('cms/blog-list');
      
        }
    

    public function shippingcal(){
        $order['count']   = $this->Admin_model->count_notification();
                $this->load->view('admin/heads',$order);
                $this->load->view('admin/shipping-cal.php');
                $this->load->view('admin/footer'); 
    }
    public function shippinginsertsec1(){
        $data =[
            'title' => $this->input->post('sec1_title1'),
            'details' => $this->input->post('sec1_details'),
            'createddate'   =>date('Y-m-d H:i:s')
        ];
       $result = $this->Admin_model->shippingcalsection1($data);
       echo json_encode($result);
    }
    public function shippinginsertsec2(){
        $data =[
            'title' => $this->input->post('sec2_title'),
            'description' => $this->input->post('sec2description'),
            'createddate'   =>date('Y-m-d H:i:s')
        ];
       $result = $this->Admin_model->shippingcalsection2($data);
       echo json_encode($result);
    }
    public function contactus(){
        $order['count']   = $this->Admin_model->count_notification();
        $data['contact'] = $this->Admin_model->getcontact();
        $this->load->view('admin/heads',$order);
        $this->load->view('admin/contactus.php',$data);
        $this->load->view('admin/footer'); 
    }
    public function updatecontact(){
      $id = $this->input->post('id');
        $data = [
            'heading' => $this->input->post('heading'),
            'text' => $this->input->post('text'),
           // 'contact' => $this->input->post('contact'),
            'createddate'   =>date('Y-m-d H:i:s')
        ];
        $result = $this->Admin_model->updatecontact($data,$id);
        echo json_encode($result);
        redirect('cms/contact-us');
    }
    public function consolidation() {
        $order['count']   = $this->Admin_model->count_notification();
        $order['sec1']    = $this->Admin_model->getconsolidationsec1();
        $order['sec3']    = $this->Admin_model->getconsolidationsec3();
                $this->load->view('admin/heads',$order);
                $this->load->view('admin/consolidation',$order);
                $this->load->view('admin/footer');
        
    }
    public function consolidationinsertsec1(){
        $id = $this->input->post('id');
        if($this->Admin_model->isalreadyconsolidationsec1($id)){
            //update
            $data = [
           
                'description'=> $this->input->post('sec1_desc'),
                'title'=> $this->input->post('sec1_title'),
                'updateddate'   =>date('Y-m-d H:i:s')
            ];
            $image =$_FILES['img']['name'];
            $extension = pathinfo($image,PATHINFO_EXTENSION);
            $rand = rand(0,100000);
            $rename = 'public/uploads/'.strtotime(date('Y-m-d')).$rand;
            $data['imgpath'] = $rename.'.'.$extension;
            if(move_uploaded_file($_FILES["img"]["tmp_name"], $data['imgpath'])){
                echo "The file ". $data['imgpath']. " has been uploaded.";
            }
    
         else {
                    echo "Sorry, there was an error uploading your file.";
                   }
                   $this->Admin_model->consolidationsec1update($data,$id);

        }
        else{
            //insert
            $data = [
           
                'description'=> $this->input->post('sec1_desc'),
                'title'=> $this->input->post('sec1_title'),
                'createddate'   =>date('Y-m-d H:i:s')
            ];
            $image =$_FILES['img']['name'];
            $extension = pathinfo($image,PATHINFO_EXTENSION);
            $rand = rand(0,100000);
            $rename = 'public/uploads/'.strtotime(date('Y-m-d')).$rand;
            $data['imgpath'] = $rename.'.'.$extension;
            if(move_uploaded_file($_FILES["img"]["tmp_name"], $data['imgpath'])){
                echo "The file ". $data['imgpath']. " has been uploaded.";
            }
    
         else {
                    echo "Sorry, there was an error uploading your file.";
                   }
            $result = $this->Admin_model->consolidationsec1($data);
            echo json_encode($result);

        }
      
        redirect('cms/consolidation');
    }
    public function consolidationinsertsec2(){
        $count = count($this->input->post('sec2_title'));
        for($i=0;$i<$count;$i++){
            $data = [
                //'imgpath' => $this->input->post('imgpath'.'['.$i.']'),
                'description' => $this->input->post('sec2description'.'['.$i.']'),
                'title' => $this->input->post('sec2_title'.'['.$i.']'),
            ];
            $image =$_FILES['imgpath']['name'][$i];
            $extension = pathinfo($image,PATHINFO_EXTENSION);
            $rand = rand(0,100000);
            $rename = 'public/uploads/'.strtotime(date('Y-m-d')).$rand;
            $data['imgpath'] = $rename.'.'.$extension;
            if(move_uploaded_file($_FILES["imgpath"]["tmp_name"][$i], $data['imgpath'])){
                echo "The file ". $data['imgpath']. " has been uploaded.";
            }
    
         else {
                    echo "Sorry, there was an error uploading your file.";
                   }
            // echo "<pre>";
            // print_r($data);
            $result = $this->Admin_model->consolidationsec2($data);
        }
            echo json_encode($result);
            redirect('cms/consolidation');
        //exit;
    }

    public function consolidationinsertsec3(){
        $id = $this->input->post('id');
        if($this->Admin_model->isalreadyconsolidationsec3($id)){
            $data = [
                'title'  => $this->input->post('sec3_title'),
                'description'  => $this->input->post('sec3description'),
                'updateddate'   =>date('Y-m-d H:i:s')
            ];
            $this->Admin_model->consolidationsec3update($data,$id);
        }
        else{
            $data = [
                'title'  => $this->input->post('sec3_title'),
                'description'  => $this->input->post('sec3description'),
                'createddate'   =>date('Y-m-d H:i:s')
            ];
            $result = $this->Admin_model->consolidationsec3($data);
            echo json_encode($result);
        }
       
        redirect('cms/consolidation');
    }
    public function consolidationinsertsec4(){
        $count = count($this->input->post('question'));
        // echo "<pre>";
        // print_r($count);
        // exit;
        for($i=0;$i<$count;$i++){
            $data = [
                'question'  => $this->input->post('question'.'['.$i.']'),
                'answer'  => $this->input->post('answee'.'['.$i.']'),
                'createddate'   =>date('Y-m-d H:i:s')
            ];
            // echo "<pre>";
            // print_r($data);
           
         $result = $this->Admin_model->consolidationsec4($data);
        }
       // exit;
       echo json_encode($result);
       redirect('cms/consolidation');
    }
      public function consolidation_listing(){
        $notifications['count']   = $this->Admin_model->count_notification();
         $data['record'] = $this->Admin_model->consolidationlistsec2();
         $data['faq']    = $this->Admin_model->consolidationlistsec4();
        $this->load->view('admin/heads',$notifications);
        $this->load->view('admin/consolidation-listing',$data);
        $this->load->view('admin/footer');
      }
      public function consolidationupdatesec2view(){
        $id= $this->uri->segment(3);
       $order['count']   = $this->Admin_model->count_notification();
       $order['data'] = $this->Admin_model->edit_consolidationsec2($id);
                $this->load->view('admin/heads',$order); 
                $this->load->view('admin/edit-consolidation-sec4',$order);            
                $this->load->view('admin/footer');
      }
      public function consolidationupdatesec2(){
        $sec2id = $this->input->post('sec2id');
            $data = [
                'description' => $this->input->post('sec2description'),
                'title' => $this->input->post('sec2_title'),
            ];
            $image =$_FILES['imgpath']['name'];
            $extension = pathinfo($image,PATHINFO_EXTENSION);
            $rand = rand(0,100000);
            $rename = 'public/uploads/'.strtotime(date('Y-m-d')).$rand;
            $data['imgpath'] = $rename.'.'.$extension;
            if(move_uploaded_file($_FILES["imgpath"]["tmp_name"], $data['imgpath'])){
                echo "The file ". $data['imgpath']. " has been uploaded.";
            }
    
         else {
                    echo "Sorry, there was an error uploading your file.";
                   }
            $result = $this->Admin_model->consolidationsec2update($sec2id,$data);
            echo json_encode($result);
            redirect('cms/consolidation-listing');
    }
    public function delete_consolidation_sec2(){
      $id = $this->uri->segment(3);
      $result = $this->Admin_model->consolidationssec2_delete($id);
      if($result==TRUE){
          $this->session->set_flashdata('msg'," deleted Successfully!");
          }else{
          $this->session->set_flashdata('msg',"No delete Successfully!");
          }
          redirect('cms/consolidation-listing');
    }
    public function consolidationupdatesec4view(){
      $id= $this->uri->segment(3);
     $order['count']   = $this->Admin_model->count_notification();
     $order['data'] = $this->Admin_model->edit_consolidationsec4($id);
              $this->load->view('admin/heads',$order); 
              $this->load->view('admin/consolidation-faq-edit',$order);            
              $this->load->view('admin/footer');
    }
    
    public function consolidationeditfaq(){
      $faqid = $this->input->post('faqid');

          $data = [
              'question'  => $this->input->post('question'),
              'answer'  => $this->input->post('answer'),
              'updateddate'   =>date('Y-m-d H:i:s')
          ];
       $result = $this->Admin_model->consolidationfaqupdate($faqid,$data);
     echo json_encode($result);
     redirect('cms/consolidation-listing');
  }
  public function delete_consolidation_faq(){
    $id = $this->uri->segment(3);
    $result = $this->Admin_model->consolidationsfaq_delete($id);
    if($result==TRUE){
        $this->session->set_flashdata('msg'," deleted Successfully!");
        }else{
        $this->session->set_flashdata('msg',"No delete Successfully!");
        }
        redirect('cms/consolidation-listing');
  }
    public function shopnship_insert_message(){
        $shopnship_id = $this->input->post('order_id');
        $to_id   = $this->input->post('to_id');
        $ip = $_SERVER['REMOTE_ADDR'];
                $ipInfo = file_get_contents('http://ip-api.com/json/' . $ip);
                $ipInfo = json_decode($ipInfo);
                $timezone = $ipInfo->timezone;
                date_default_timezone_set($timezone);
        $message = array (

                'from_id'   => $this->session->userdata('id'),
                'to_id'     => $to_id,
                'message'   => $this->input->post('message'),
                'message_type' => $this->input->post('message_type'),
                'order_id'     => $shopnship_id,
                'send_by_admin' => '1',
                'shipment_type'=>'1',
                'created_date' => date('Y-m-d H:i:s')
        
        );
       
        $result = $this->Admin_model->insert_message($message);
        echo json_encode($result);
    }
    public function assisted_insert_message() {

        $assisted_id = $this->input->post('order_id');
        $to_id   = $this->input->post('to_id');
        $ip = $_SERVER['REMOTE_ADDR'];
        $ipInfo = file_get_contents('http://ip-api.com/json/' . $ip);
        $ipInfo = json_decode($ipInfo);
        $timezone = $ipInfo->timezone;
        date_default_timezone_set($timezone);
        $message = array(
                'from_id'   => $this->session->userdata('id'),
                'to_id'     => $to_id,
                'message' => $this->input->post('message'),
                'message_type' => $this->input->post('message_type'),
                'order_id'     => $assisted_id,
                'send_by_admin'=> '1',
                'shipment_type'=>'2',
                'created_date' => date('Y-m-d H:i:s')
        );
     
        $result = $this->Admin_model->insert_message($message);
        echo json_encode($result);
       
    }
    public function international_insert_message(){

        $order_id = $this->input->post('order_id');
        $to_id   = $this->input->post('to_id');
        $ip = $_SERVER['REMOTE_ADDR'];
        $ipInfo = file_get_contents('http://ip-api.com/json/' . $ip);
        $ipInfo = json_decode($ipInfo);
        $timezone = $ipInfo->timezone;
        date_default_timezone_set($timezone);
        $message = array(
                'from_id'   => $this->session->userdata('id'),
                'to_id'     => $to_id,
                'message' => $this->input->post('message'),
                'message_type' => $this->input->post('message_type'),
                'order_id'     => $order_id,
                'send_by_admin'=> '1',
                'shipment_type'=>'3',
                'created_date' => date('Y-m-d H:i:s')
        );
        $result = $this->Admin_model->insert_message($message);
        echo json_encode($result);
       
    }

    public function dashboard_admin(){

        if($this->session->userdata('id')){
            $user_id = $this->session->userdata('id');
            $order['total_order'] = $this->Admin_model->shopnship_count();
            $order['assisted_total_order'] = $this->Admin_model->assisted_count();
            $order['international_total_order'] = $this->Admin_model->international_count();
            $order['total_users'] = $this->Admin_model->users_count();
            $order['count']   = $this->Admin_model->count_notification();
            $order['address'] = $this->Admin_model->display_address();
            $order['adminrecord'] = $this->Admin_model->displaylogin();
            // $email = $this->input->post('email');
            // $pass  =  $this->input->post('pwd');
            // $order['userid']   = $this->Gsr->login_user($email,$pass);
                $this->load->view('admin/heads',$order);
                $this->load->view('admin/dashboard',$order);
                $this->load->view('admin/footer');
        } else {
            redirect('admin');
        }
    }
        public function insert_automate_shopnship() {
   
        if ($this->session->userdata('id')) {
   
        if($this->input->post('submit')){
            $data = [
                'item_type' => $this->input->post('item_type'),
                'item_name' => $this->input->post('item_name'),
                'package_size' => $this->input->post('package_size'),
                'tracking_id' => $this->input->post('tracking_id'),
                'weight'    => $this->input->post('weight'),
                'quantity' => $this->input->post('quantity'),
                'price'   => $this->input->post('price'),
                'total_price'    => $this->input->post('total_price'),
                'date_created' => date('Y-m-d H:i:s')
        ];
        $result = $this->Admin_model->admin_consolidate_shipment($data);
        if($result==TRUE){
            redirect('admin/automate-consolidate-shipments');
        } 
    }
    $order['count']   = $this->Admin_model->count_notification();
   
        $this->load->view('admin/heads',$order);
        $this->load->view('admin/add_automate_consolidate');
        $this->load->view('admin/footer');    
    }  else {
        redirect('admin');
     }   
    }
    public function add_automate_shopnship(){
        if($this->session->userdata('id')){
        $order['count']   = $this->Admin_model->count_notification();
        $this->load->view('admin/heads',$order);
        $this->load->view('admin/add_automate_consolidate');
        $this->load->view('admin/footer');
        }

    }
    public function automate_shopnship() {

        if($this->session->userdata('id')){
        $data['users'] = $this->Admin_model->automate_consolidate();
        $data['count']   = $this->Admin_model->count_notification();
        $this->load->view('admin/heads',$data);
        $this->load->view('admin/automate_consolidate');
        $this->load->view('admin/datatable_footer');
        }
    }
    public function user_details(){
        if($this->session->userdata('id')){
        $order['count']   = $this->Admin_model->count_notification();
        $this->load->view('admin/heads',$order);
        $this->load->view('admin/user_details');
        $this->load->view('admin/footer');
        }

    }
    public function getadminaddress() {
         if(isset($_POST['country_id'])) {
            $country_id = $this->input->post('country_id');
        (array)$address_details = $this->Admin_model->display_admin_address($country_id);
        echo json_encode($address_details);
        } 
    }
    public function insert_users(){
        if($this->session->userdata('id')){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('first_name','First Name','required|trim|alpha');
        $this->form_validation->set_rules('last_name','Last Name','required|trim|alpha');
        $this->form_validation->set_rules('phone_number','Contact Number','required|trim');
        $this->form_validation->set_rules('password','Password ','required|trim|min_length[8]');
        $this->form_validation->set_rules('cpassword','Confirm Password ','trim|required|matches[password]');
        // $this->form_validation->set_rules('cpwd','Confirm Password','trim|required|min_length[8]|matches[pswd]');
        $this->form_validation->set_rules('email', 'Email', 'required|trim');
        $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
        // echo "<pre>";
        // var_dump($this->form_validation->run());
        // exit;
        if($this->form_validation->run() ){
            $data = [
                'fname' => $this->input->post('first_name'),
                'lname' => $this->input->post('last_name'),
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password'),
                'phone'    => $this->input->post('phone_number'),
                'image' => 'public/uploads/images.png',
                'status'   => $this->input->post('status'),
                'created_date' => date('Y-m-d H:i:s')
        ];
        $result = $this->Admin_model->create_users($data);
        // echo json_encode($result);
        if($result==TRUE){
            redirect('user-list');
        }
        
    }
    $order['count']   = $this->Admin_model->count_notification();
        $this->load->view('admin/heads',$order);
        $this->load->view('admin/user_details');
        $this->load->view('admin/footer');    
    }
    
    else{
        redirect('admin');
    }
        
        
    }
    public function user_listing(){
        $data['users'] = $this->Admin_model->user_details();
        $data['count']   = $this->Admin_model->count_notification();
        $this->load->view('admin/heads',$data);
        $this->load->view('admin/user_listing',$data);
        $this->load->view('admin/datatable_footer');
    }
    public function update_status(){
        if(isset($_REQUEST['val']))
    {   
        // echo "<pre>";
        // print_r($_REQUEST['val']);
        // exit;
        $set_status=$this->Admin_model->update_status();
        if($set_status==TRUE){
        $this->session->set_flashdata('msg',"User's account active.");
        }else{
        $this->session->set_flashdata('msg',"User's account blocked.");
        }

    }
    return redirect("user-list");
    }
    public function shopnship_order_listing(){
        if($this->session->userdata('id')){
         
        $total['count']   = $this->Admin_model->count_notification();
        $total['shopnship_list'] = $this->Admin_model->shopnship_order();
            
        $this->load->view('admin/heads',$total);
        $this->load->view('admin/shopnship_listing',$total);
        $this->load->view('admin/datatable_footer');
        }
        else{
           redirect('admin');
        }
    }
    public function shopnship_listing(){
        if($this->session->userdata('id')){
        $user_id = $this->uri->segment(3);
        $total['shopnship_list'] = $this->Admin_model->shopnship_order_list($user_id);
        // echo "<pre>";
        // print_r($total['shopnship_list']);
        // exit;
        $total['count']   = $this->Admin_model->count_notification();
        $this->load->view('admin/heads',$total);
        $this->load->view('admin/shopnship_listing',$total);
        $this->load->view('admin/datatable_footer');
        }
        else{
           redirect('admin');
        }
    }

    public function edit_consolidate_item($item_id) {
        if($this->session->userdata('id')) {

            $order['count']   = $this->Admin_model->count_notification();
            $order['item_details'] = $this->Admin_model->consolidate_item_details($item_id);
            $order['item_id'] =$item_id;
         
         if($this->input->post('submit')) {
                $data  =  array (
                    'product_type' => $this->input->post('item_type'),
                    'product_name' => $this->input->post('item_name'),
                    'store' => $this->input->post('package_size'),
                    'size' => $this->input->post('weight'),
                    'quantity' => $this->input->post('quantity'),
                    'item_price' => $this->input->post('price'),
                    'total_amount' => $this->input->post('total_price'),
                    'grand_total' => $this->input->post('total_price')
                );
            $update_status = $this->Admin_model->update_consolidate_item_details($data, $item_id);
            if($update_status == 1) {
                $this->session->set_flashdata('msg', 'Item Updated Successfully');
    redirect('shopnship-order-details/'.$order['item_details']->shopnship_id);
                }
            }
        $this->load->view('admin/heads',$order);
        $this->load->view('admin/edit_consolidate_item');
        $this->load->view('admin/footer');
        }
    }

    public function update_pickup_shipment($item_id) {
          
        if($this->session->userdata('id')) {
        
            $order['item_id']      = $item_id;
            $order['count']        = $this->Admin_model->count_notification();
            $order['item_details'] = $this->Admin_model->pickupshipment_details($item_id);
            
         if($this->input->post('submit')) {

                $data  =  array (
                    
                    'product_type' => $this->input->post('item_type'),
                    'product_name' => $this->input->post('item_name'),
                    'quantity' => $this->input->post('quantity'),
                    'total_amount' => $this->input->post('total_amount'),
                );

            $update_status = $this->Admin_model->update_pickupshipment_item_details($data, $item_id);
            if($update_status == 1) {
                $this->session->set_flashdata('msg', 'Item Updated Successfully');
    redirect('international-order-details/'.$order['item_details']->international_id);
                }
            }
        }   
        $this->load->view('admin/heads',$order);
        $this->load->view('admin/edit_pickupshipment_item');
        $this->load->view('admin/footer');
            
    }

    public function edit_buy_for_me_item($item_id) {
          
        if($this->session->userdata('id')) {
        
            $order['count']   = $this->Admin_model->count_notification();
            $order['item_details'] = $this->Admin_model->buyforme_details($item_id);
            $order['item_id'] =$item_id;
         
         if($this->input->post('submit')) {

                $data  =  array (
                    
                    'product_type' => $this->input->post('item_type'),
                    'product_name' => $this->input->post('item_name'),
                    'store' => $this->input->post('store'),
                    'size' => $this->input->post('size'),
                    'quantity' => $this->input->post('quantity'),
                    'color' => $this->input->post('color'),
                    'total_amount' => $this->input->post('total_amount'),
                    'grand_total' => $this->input->post('total_amount')
                );

            $update_status = $this->Admin_model->update_buyforme_item_details($data, $item_id);
            if($update_status == 1) {
                $this->session->set_flashdata('msg', 'Item Updated Successfully');
    redirect('assisted-order-details/'.$order['item_details']->assisted_id);
                }
            }
           }   
        $this->load->view('admin/heads',$order);
        $this->load->view('admin/edit_buyforme_item');
        $this->load->view('admin/footer');
            
    }
    public function shopnship_order_details($shopnship_id){
         if($this->session->userdata('id')){
        $data['order_id'] = $this->uri->segment(2);
        $notification_id = $this->uri->segment(3);
        if(isset($notification_id)){
            $this->db->set('is_read','1')
                   ->where('id',$notification_id)
                   ->where('notification_type','0')
                   ->update('notification');
        } 
        $data['count']   = $this->Admin_model->count_notification();
        $data['item_records'] = $this->Admin_model->shopnship_order_details($shopnship_id);

         foreach ($data['item_records'] as $key => $value) {
                $response = $this->Shopnship_model->check_admin_consolidate_shipment($value->order_id);
                $data['item_records'][$key]->shipment_type  = 0; 
              if(!empty($response)) { 
                $data['item_records'][$key]->shipment_type  = 1; 
                $data['item_records'][$key]->product_type = !empty($response->item_type)?$response->item_type:$value->product_type;
                $data['item_records'][$key]->store = !empty($response->package_size)?$response->package_size:$value->store;
                $data['item_records'][$key]->product_name = !empty($response->item_name)?$response->item_name:$value->product_name;
                $data['item_records'][$key]->order_id = !empty($response->tracking_id)?$response->tracking_id:$value->order_id;
                $data['item_records'][$key]->size = !empty($response->weight)?$response->weight:$value->size;
                $data['item_records'][$key]->quantity = !empty($response->quantity)?$response->quantity:$value->quantity;
                $data['item_records'][$key]->item_type_name = !empty($response->item_type_name)?$response->item_type_name:$value->item_type_name;
                $data['item_records'][$key]->item_price = !empty($response->price)?$response->price:$value->item_price;
                $data['item_records'][$key]->total_amount = !empty($response->total_price)?$response->total_price:$value->total_amount; 
                $data['item_records'][$key]->grand_total = !empty($response->total_price)?$response->total_price:$value->grand_total;
                    } 
                }
        $data['user_address'] = $this->Admin_model->shopnship_delivery_address($data['item_records'][0]->address_id);
        $data['msg']          = $this->Admin_model->receiver_display_msg($shopnship_id);
        $data['pay_details']  = $this->Admin_model->shopnship_payment_display($shopnship_id);
        
        $data['shipment_details'] = $this->Admin_model->display_shipment_shopnship($shopnship_id);
        $data['userdetails'] = $this->Admin_model->userdetailsemail($data['item_records'][0]->user_id);
        // $data['payupdate'] = $this->Admin_model->payupdate($data['pay_details'][0]->order_id);
        // $data['payupdateusers'] = $this->Admin_model->payupdateusers($data['payupdate'][0]->user_id);
        // echo "<pre>";
        // print_r($data['payupdateusers']);
        // exit;
        $data['adminemail'] = $this->Gsr->getadminemail();
        $this->load->view('admin/heads',$data);
        $this->load->view('admin/shopnship_order_details',$data);
        $this->load->view('admin/datatable_footer');
        }
        else{
            redirect('admin'); 
        }
    }
    public function assisted_listing(){
        if($this->session->userdata('id')){
        $user_id = $this->uri->segment(3);
        $total['count']   = $this->Admin_model->count_notification();
        $total['assisted_list'] = $this->Admin_model->assisted_order($user_id);
        $this->load->view('admin/heads',$total);
        $this->load->view('admin/assisted_listing',$total);
        $this->load->view('admin/datatable_footer');
        }
        else{
            redirect('admin');
        }
    }

    public function assisted_order_listing(){
        if($this->session->userdata('id')){
        $total['count']   = $this->Admin_model->count_notification();
        $total['assisted_list'] = $this->Admin_model->assisted_order_listing();
        $this->load->view('admin/heads',$total);
        $this->load->view('admin/assisted_listing',$total);
        $this->load->view('admin/datatable_footer');
        }
        else{
            redirect('admin');
        }
    }
    public function assisted_order_details($assisted_id){
        if($this->session->userdata('id')){
        $data['order_id'] = $this->uri->segment(2);
        $notification_id = $this->uri->segment(3);
        if(isset($notification_id)){
            $this->db->set('is_read','1')
                   ->where('id',$notification_id)
                   ->where('notification_type','0')
                   ->update('notification');
        } 
        $data['count']   = $this->Admin_model->count_notification();
        $data['item_records'] = $this->Admin_model->assisted_order_details($assisted_id);
        $data['user_address'] = $this->Admin_model->assisted_delivery_address($data['item_records'][0]->address_id);
        $data['msg']          = $this->Admin_model->receiver_display_msg($assisted_id);
        $data['pay_details']  = $this->Admin_model->assisted_payment_display($assisted_id);
        $data['shipment_details'] = $this->Admin_model->display_shipment_assisted($assisted_id);
        $data['userdetails'] = $this->Admin_model->userdetailsemail($data['item_records'][0]->user_id);
        $data['adminemail'] = $this->Gsr->getadminemail();
        $this->load->view('admin/heads',$data);
        $this->load->view('admin/assisted_order_details',$data);
        $this->load->view('admin/datatable_footer');
        }
        else{
            redirect('admin');
        }
    }
    public function international_listing(){

        if($this->session->userdata('id')){
            
        $user_id = $this->uri->segment(3);
        $total['count']   = $this->Admin_model->count_notification();
        $total['international_list'] = $this->Admin_model->international_order($user_id);
       
        $this->load->view('admin/heads',$total);
        $this->load->view('admin/international_listing',$total);
        $this->load->view('admin/datatable_footer');
        }
        else{
            redirect('admin');
        }
    }

    public function international_order_listing(){
        if($this->session->userdata('id')) {
        $total['count']   = $this->Admin_model->count_notification();
        $total['international_list'] = $this->Admin_model->international_order_listing();
        $this->load->view('admin/heads',$total);
        $this->load->view('admin/international_listing',$total);
        $this->load->view('admin/datatable_footer');
        }
        else{
            redirect('admin');
        }
    }
    public function international_order_details($international_id) {
        if($this->session->userdata('id')){
        $data['order_id']=$this->uri->segment(2);
        $notification_id = $this->uri->segment(3);
        if(isset($notification_id)){
            $this->db->set('is_read','1')
                   ->where('id',$notification_id)
                   ->where('notification_type','0')
                   ->update('notification');
        } 
    $data['item_records'] = $this->Admin_model->international_order_details($international_id);
    $data['count']   = $this->Admin_model->count_notification();
    $data['pickup_address'] = $this->Admin_model->internation_pickup_address($international_id);
    $data['delivery_address'] = $this->Admin_model->internation_delivery_address_details($international_id);
    $data['msg']          = $this->Admin_model->receiver_display_msg($international_id);
    $data['pay_details']  = $this->Admin_model->international_payment_display($international_id);
    $data['shipment_details'] = $this->Admin_model->display_shipment_international($international_id);
    $data['userdetails'] = $this->Admin_model->userdetailsemail($data['item_records'][0]->user_id);
    $data['adminemail'] = $this->Gsr->getadminemail();
        $this->load->view('admin/heads',$data);
        $this->load->view('admin/international_order_details',$data);
        $this->load->view('admin/datatable_footer');
        }
        else{
            redirect('admin');
        }
    }
    public function payment_listing(){
        if($this->session->userdata('id')){
        $payment['pay_success'] = $this->Payment_model->display_payment_details();
        $payment['count']   = $this->Admin_model->count_notification();
        $this->load->view('admin/heads',$payment);
        $this->load->view('admin/payment_listing',$payment);
        $this->load->view('admin/datatable_footer');
        }
        else{
            redirect('admin');
        }
    }
    public function payment_details(){
        if($this->session->userdata('id')){
        $total['count']   = $this->Admin_model->count_notification();
        $this->load->view('admin/heads',$total);
        $this->load->view('admin/payment_details');
        $this->load->view('admin/datatable_footer');
        }
        else{
           redirect('admin');
        }
    }
    public function admin_login(){

        $this->load->view('admin/admin_login');
    }
    public function admin_signin(){

        $this->load->library('form_validation');
        $this->form_validation->set_rules('password','Password','required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim');
        $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
        if($this->form_validation->run() ){
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $id = $this->Admin_model->admin_login($email,$password);
            if($id){
                $this->session->set_userdata('id',$id);
                    redirect('Admin/dashboard','refresh');

            }
            else{
                $this->session->set_flashdata('message','Your email or password invalid !');
                    redirect('admin','refresh');
            }
        }
        else{
            $this->admin_login();
        }
       
    }
    public function logout(){
        $this->session->unset_userdata('id');
        return redirect('admin');
    } 
    public function forgot_view(){
        
        $this->load->view('admin/forgotpassword');
    }

    public function recover_password(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|xss_clean|callback_validate_credentials');
            if($this->Admin_model->email_exists()){
                $temp_pass = md5(uniqid());

                $this->load->library('email');
                $this->email->set_mailtype("html");
                $this->email->from('email id', 'name');
                $this->email->to('anisha@mailinator.com');
                $this->email->subject("Reset your Password");
    
                $message = "<p>This email has been sent as a request to reset our password</p>";
                $message .= "<p><a href='".base_url()."Admin/Admin/reset_password/".$temp_pass."'> Click here </a>if you want to reset your password,
                            if not, then ignore</p>";
                $this->email->message($message);
    
                if($this->email->send()){
                    if($this->Admin_model->temp_reset_password($temp_pass)){
                        echo "check your email for instructions, thank you";
                         //redirect('admin');
                        
                    }
                }
                else{
                    echo "email was not sent, please contact your administrator";
                }
    
            }else{
                echo "your email is not in our database";
            }
    }
  
    public function reset_password($temp_pass){
        if($this->Admin_model->is_temp_pass_valid($temp_pass)){
            $data['temp_pass'] = $temp_pass;
            $this->load->view('admin/reset_password',$data);
    
        }else{
            echo "the key is not valid";    
        }
    
    }
    public function update_password(){
        $this->load->library('form_validation');
            $this->form_validation->set_rules('new_pass', 'Password', 'required|trim|min_length[8]');
            $this->form_validation->set_rules('cpass', 'Confirm Password', 'required|trim|min_length[8]|matches[new_pass]');
                if($this->form_validation->run()){
                  $temp_password=  $this->input->post('temp_password');
                  $password=  $this->input->post('new_pass');
                 $result = $this->Admin_model->update_password($temp_password,$password);
                
                 if($result){
                    redirect('admin','refresh');
                 }
                 else{
                    echo "passwords match"; 
                 }
                 //redirect('admin');
                }   
                else{
                echo "passwords do not match";  
                }
    }

    public function update_users(){
        $edit_data['data'] = $this->Admin_model->user_edit_data($this->uri->segment(3));
        $edit_data['count']   = $this->Admin_model->count_notification();
        $this->load->view('admin/heads',$edit_data);
        $this->load->view('admin/update_user',$edit_data);
        $this->load->view('admin/footer');
     }
    
    public function update_users_data(){
       $id = $this->input->post('id');
        $record = [
            'fname' => $this->input->post('first_name'),
            'lname' => $this->input->post('last_name'),
            'phone' => $this->input->post('phone_number'),
            'password'      => $this->input->post('password'),
            'email'         => $this->input->post('email'),
            'update_date'   => date('Y-m-d H:i:s')
        ];
          $result = $this->Admin_model->update_user_record($id,$record);
          if($result == TRUE){
            redirect('user-list');
          }
          else{
            redirect('user-list');
          }
    }
    // public function payment_view(){
    //     $total['count']   = $this->Admin_model->count_notification();
    //     $this->load->view('admin/heads',$total);
    //     $this->load->view('admin/edit_payment');
    //     $this->load->view('admin/footer');
    // }

    public function sendmail($to, $subject, $message) {

        $html = '<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Email Template</title>
    <style type="text/css">
      @media screen and (max-width: 600px),
      screen and (max-device-width: 600px) {
        body {
          margin: 0 !important;
          padding: 0 !important;
        }
      }
      @media screen and (-webkit-min-device-pixel-ratio: 0) and (max-width: 600px) {
        body {
          margin: 0 !important;
          padding: 0 !important;
        }
      }
  a{
  color: #000;
  text-decoration:none;
  }
    </style>
  </head>
  <body style="margin: 0; padding: 0; border: 0;">
    <table width="100%" align="center" cellpadding="0" cellspacing="0"
      border="0" dir="ltr" style="background-color: rgb(255, 255, 255);">
      <tbody>
        <tr>
          <td align="center" valign="top"
            style="margin: 0; padding: 0px 15px 0px;">
            <table width="600" align="center" border="0" cellspacing="0"
              cellpadding="0" style="width: 600px;">
              <tbody>
                <tr>
                  <td align="center" valign="center"
                    style="margin: 0; background-color: #ffffff; background-size: cover; background-repeat: no-repeat; background-position: center center; padding: 30px 15px 40px;">
                    <table align="center" border="0" cellpadding="0"
                      cellspacing="0">
                      <tbody>
                        <tr>
                          <td valign="top" align="center"
                            style="padding: 0px; margin: 0px;">
                            <a href="#"><img src="https://globalshippersrwanda.com/assets/cms/img/logo-black.png" width="100"
                                style="border: none; font-weight: bold; max-height: 100px; height: auto; line-height: 100%; outline: none; text-decoration: none; text-transform: capitalize; border-width: 0px; border-style: none; border-color: transparent; font-size: 12px; display: block;"></a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
                <tr> 
                  <td align="center" valign="top"
                    style="margin: 0; padding: 0;">
                    <table width="100%" align="center" border="0"
                      cellpadding="0" cellspacing="0" bgcolor="#ffffff">
                      <tbody>
                       <tr>   
                          <td align="left" valign="top"
                            style="margin: 0px; padding: 30px 30px 10px 30px; background-color: rgb(255, 255,
									255); font-size: 16px; font-family: "Lato", Arial, Helvetica,
                            sans-serif; line-height: 1.33;">
                            <span style="font-family: "Lato", Arial, Helvetica,
                              sans-serif; color: #000000; font-size: 20px;">
                              <span style="font-weight: 700;"></span>
                            </span>
                          </td>

                        </tr>
                        <tr>   
                          <td align="left" valign="top"
                            style="margin: 0px; padding: 30px 30px 10px 30px; background-color: rgb(255, 255,
									255); font-size: 16px; font-family: "Lato", Arial, Helvetica,
                            sans-serif; line-height: 1.33;">
                            <span style="font-family: "Lato", Arial, Helvetica,
                              sans-serif; color: #000000; font-size: 20px;">
                              <span style="font-weight: 700;">'.$message['msg'].'</span>
                            </span>
                          </td>

                        </tr>

                      </tbody>
                    </table>
                    <table align="center" border="0" cellpadding="0"
                      cellspacing="0"
                      style="border-spacing: 0; margin: 0; padding: 0; border-spacing: 0px; -webkit-border-horizontal-spacing: 0px; -webkit-border-vertical-spacing: 0px; width: 100%">
                      <tr>
                        <td style="background: #ffffff;">
                          <table width="600" align="center" border="0"
                            cellpadding="0" cellspacing="0">
                            <tbody>
                              <tr>
                                <td valign="top" align="center"
                                  style="padding: 30px 30px 20px 30px; font-family: "Lato"
                                  ,Arial, Helvetica, sans-serif; margin: 0px;
                                  font-size: 40px; color: #000000; font-weight:
                                  bold;">
                                 
                                </td>
                              </tr>
                              <tr>
                                <td valign="top" align="center"
                                  style="padding: 0px 30px 10px 30px; margin: 0px; font-size: 15px; line-height: 23px; color: #000000;">
                                  <span style="font-family: "Lato" ,Arial,
                                    Helvetica, sans-serif; color: #000000;
                                    font-size: 16px;">
                                   
                                  </span>
                                </td>
                              </tr>
                              <tr>
                                <td valign="top" align="center"
                                  style="padding: 10px 30px 40px 30px; margin: 0px; font-size: 15px; line-height: 23px; color: #fff;">
                                  <a href="https://globalshippersrwanda.com/"
                                    style="padding: 10px 20px; color:#ffffff; font-size: 16px; font-family: "Lato"
                                    ,Arial, Helvetica, sans-serif; color:
                                    #ffffff; background-color: #000000;
                                    border-color: #000000; text-decoration:
                                    none; border-radius: 4px;">Visit Website</a>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>

                <tr>
                  <td style="background:#ffffff;">
                    <table width="600">
                      <tr>
                        <td align="center"
                          style="padding: 20px 0px 10px 0; background:#ffffff; border-top: 1px solid #d1d1d1;">
                          <table width="600" align="center" border="0"
                            cellpadding="0" cellspacing="0">
                            <tbody>
                              <tr>
                                <td align="center" valign="top" nowrap
                                  style="margin: 0px; padding: 0; font-size: 16px; font-family: "Lato",
                                  Arial, Helvetica, sans-serif; line-height:
                                  22px;">
                                 
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                      <tr>
                        <td align="center"
                          style="padding: 0px 0px 20px 0; background:#ffffff;">
                          <table width="300" align="center" border="0"
                            cellpadding="0" cellspacing="0">
                            <tbody>
                              <tr>
                                <td align="center" valign="top" nowrap
                                  style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                  Arial, Helvetica, sans-serif;">
                                  <a href="https://globalshippersrwanda.com/privacy"
                                    style="color: #000000; font-weight: normal; font-family: "Lato",
                                    Arial, Helvetica, sans-serif;
                                    text-decoration: none;">
                                    <span style="font-family: "Lato", Arial,
                                      Helvetica, sans-serif; color: #000000;
                                      font-size: 14px; white-space: nowrap;
                                      line-height: 22px;">Privacy Policy</span>
                                  </a>
                                </td>
                                <td align="center" valign="top" nowrap
                                  style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                  Arial, Helvetica, sans-serif;">
                                  <a href ="https://globalshippersrwanda.com/about-us"
                                    style="color: #2e3233; font-weight: normal; font-family: "Lato",
                                    Arial, Helvetica, sans-serif;
                                    text-decoration: none;">
                                    <span style="font-family: "Lato", Arial,
                                      Helvetica, sans-serif; color: #000000;
                                      font-size: 14px; white-space: nowrap;
                                      line-height: 22px;">About Us</span>
                                  </a>
                                </td>
                                <td align="center" valign="top" nowrap
                                  style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                  Arial, Helvetica, sans-serif;">
                                  <a href="https://globalshippersrwanda.com/contact-us"
                                    style="color: #000000; font-weight: normal; font-family: "Lato",
                                    Arial, Helvetica, sans-serif;
                                    text-decoration: none;">
                                    <span style="font-family: "Lato", Arial,
                                      Helvetica, sans-serif; color: #000000;
                                      font-size: 14px; white-space: nowrap;
                                      line-height: 22px;">Contact US</span>
                                  </a>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
          </td>
        </tr>
      </tbody>
    </table>
  </body>
</html>';



        
                        $mail = new PHPMailer(); 
                        $mail->IsSMTP(); 
                        $mail->SMTPAuth = true; 
                        $mail->SMTPSecure = 'tls'; 
                       $mail->Host = "mail.privateemail.com";
                        $mail->Port = 587; 
                        $mail->IsHTML(true);
                        $mail->CharSet = 'UTF-8';
                        //$mail->SMTPDebug = 2; 
                        $mail->Username = EMAIL_SMTP_GOOGLE;
                        $mail->Password = PASSWORD_SMTP_GOOGLE;
                        $mail->SetFrom("services@globalshippersrwanda.com");;
                        $mail->Subject = $subject;
                        $mail->Body =$html;
                        $mail->AddAddress($to);
                        $mail->SMTPOptions=array('ssl'=>array (
                            'verify_peer'=>false,
                            'verify_peer_name'=>false,
                            'allow_self_signed'=>false
                        ));
                    if(!$mail->Send()){
                        echo $mail->ErrorInfo;
                    }else{
                        return  'Sent';
                    }
        }
        public function adminsendmail($adminto, $adminsubject, $adminmessage) {

            $html = '<!DOCTYPE html>
    <html lang="en-US">
      <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Email Template</title>
        <style type="text/css">
          @media screen and (max-width: 600px),
          screen and (max-device-width: 600px) {
            body {
              margin: 0 !important;
              padding: 0 !important;
            }
          }
          @media screen and (-webkit-min-device-pixel-ratio: 0) and (max-width: 600px) {
            body {
              margin: 0 !important;
              padding: 0 !important;
            }
          }
      a{
      color: #000;
      text-decoration:none;
      }
        </style>
      </head>
      <body style="margin: 0; padding: 0; border: 0;">
        <table width="100%" align="center" cellpadding="0" cellspacing="0"
          border="0" dir="ltr" style="background-color: rgb(255, 255, 255);">
          <tbody>
            <tr>
              <td align="center" valign="top"
                style="margin: 0; padding: 0px 15px 0px;">
                <table width="600" align="center" border="0" cellspacing="0"
                  cellpadding="0" style="width: 600px;">
                  <tbody>
                    <tr>
                      <td align="center" valign="center"
                        style="margin: 0; background-color: #ffffff; background-size: cover; background-repeat: no-repeat; background-position: center center; padding: 30px 15px 40px;">
                        <table align="center" border="0" cellpadding="0"
                          cellspacing="0">
                          <tbody>
                            <tr>
                              <td valign="top" align="center"
                                style="padding: 0px; margin: 0px;">
                                <a href="#"><img src="https://globalshippersrwanda.com/assets/cms/img/logo-black.png" width="100"
                                    style="border: none; font-weight: bold; max-height: 100px; height: auto; line-height: 100%; outline: none; text-decoration: none; text-transform: capitalize; border-width: 0px; border-style: none; border-color: transparent; font-size: 12px; display: block;"></a>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                    <tr> 
                      <td align="center" valign="top"
                        style="margin: 0; padding: 0;">
                        <table width="100%" align="center" border="0"
                          cellpadding="0" cellspacing="0" bgcolor="#ffffff">
                          <tbody>
                           <tr>   
                              <td align="left" valign="top"
                                style="margin: 0px; padding: 30px 30px 10px 30px; background-color: rgb(255, 255,
                                        255); font-size: 16px; font-family: "Lato", Arial, Helvetica,
                                sans-serif; line-height: 1.33;">
                                <span style="font-family: "Lato", Arial, Helvetica,
                                  sans-serif; color: #000000; font-size: 20px;">
                                  <span style="font-weight: 700;"></span>
                                </span>
                              </td>
    
                            </tr>
                            <tr>   
                              <td align="left" valign="top"
                                style="margin: 0px; padding: 30px 30px 10px 30px; background-color: rgb(255, 255,
                                        255); font-size: 16px; font-family: "Lato", Arial, Helvetica,
                                sans-serif; line-height: 1.33;">
                                <span style="font-family: "Lato", Arial, Helvetica,
                                  sans-serif; color: #000000; font-size: 20px;">
                                  <span style="font-weight: 700;">'.$adminmessage['msg'].'</span>
                                </span>
                              </td>
    
                            </tr>
    
                          </tbody>
                        </table>
                        <table align="center" border="0" cellpadding="0"
                          cellspacing="0"
                          style="border-spacing: 0; margin: 0; padding: 0; border-spacing: 0px; -webkit-border-horizontal-spacing: 0px; -webkit-border-vertical-spacing: 0px; width: 100%">
                          <tr>
                            <td style="background: #ffffff;">
                              <table width="600" align="center" border="0"
                                cellpadding="0" cellspacing="0">
                                <tbody>
                                  <tr>
                                    <td valign="top" align="center"
                                      style="padding: 30px 30px 20px 30px; font-family: "Lato"
                                      ,Arial, Helvetica, sans-serif; margin: 0px;
                                      font-size: 40px; color: #000000; font-weight:
                                      bold;">
                                     
                                    </td>
                                  </tr>
                                  <tr>
                                    <td valign="top" align="center"
                                      style="padding: 0px 30px 10px 30px; margin: 0px; font-size: 15px; line-height: 23px; color: #000000;">
                                      <span style="font-family: "Lato" ,Arial,
                                        Helvetica, sans-serif; color: #000000;
                                        font-size: 16px;">
                                       
                                      </span>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td valign="top" align="center"
                                      style="padding: 10px 30px 40px 30px; margin: 0px; font-size: 15px; line-height: 23px; color: #fff;">
                                      <a href="https://globalshippersrwanda.com/"
                                        style="padding: 10px 20px; color:#ffffff; font-size: 16px; font-family: "Lato"
                                        ,Arial, Helvetica, sans-serif; color:
                                        #ffffff; background-color: #000000;
                                        border-color: #000000; text-decoration:
                                        none; border-radius: 4px;">Visit Website</a>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </td>
                          </tr>
                        </table>
                      </td>
                    </tr>
    
                    <tr>
                      <td style="background:#ffffff;">
                        <table width="600">
                          <tr>
                            <td align="center"
                              style="padding: 20px 0px 10px 0; background:#ffffff; border-top: 1px solid #d1d1d1;">
                              <table width="600" align="center" border="0"
                                cellpadding="0" cellspacing="0">
                                <tbody>
                                  <tr>
                                    <td align="center" valign="top" nowrap
                                      style="margin: 0px; padding: 0; font-size: 16px; font-family: "Lato",
                                      Arial, Helvetica, sans-serif; line-height:
                                      22px;">
                                     
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </td>
                          </tr>
                          <tr>
                            <td align="center"
                              style="padding: 0px 0px 20px 0; background:#ffffff;">
                              <table width="300" align="center" border="0"
                                cellpadding="0" cellspacing="0">
                                <tbody>
                                  <tr>
                                    <td align="center" valign="top" nowrap
                                      style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                      Arial, Helvetica, sans-serif;">
                                      <a href="https://globalshippersrwanda.com/privacy"
                                        style="color: #000000; font-weight: normal; font-family: "Lato",
                                        Arial, Helvetica, sans-serif;
                                        text-decoration: none;">
                                        <span style="font-family: "Lato", Arial,
                                          Helvetica, sans-serif; color: #000000;
                                          font-size: 14px; white-space: nowrap;
                                          line-height: 22px;">Privacy Policy</span>
                                      </a>
                                    </td>
                                    <td align="center" valign="top" nowrap
                                      style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                      Arial, Helvetica, sans-serif;">
                                      <a href ="https://globalshippersrwanda.com/about-us"
                                        style="color: #2e3233; font-weight: normal; font-family: "Lato",
                                        Arial, Helvetica, sans-serif;
                                        text-decoration: none;">
                                        <span style="font-family: "Lato", Arial,
                                          Helvetica, sans-serif; color: #000000;
                                          font-size: 14px; white-space: nowrap;
                                          line-height: 22px;">About Us</span>
                                      </a>
                                    </td>
                                    <td align="center" valign="top" nowrap
                                      style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                      Arial, Helvetica, sans-serif;">
                                      <a href="https://globalshippersrwanda.com/contact-us"
                                        style="color: #000000; font-weight: normal; font-family: "Lato",
                                        Arial, Helvetica, sans-serif;
                                        text-decoration: none;">
                                        <span style="font-family: "Lato", Arial,
                                          Helvetica, sans-serif; color: #000000;
                                          font-size: 14px; white-space: nowrap;
                                          line-height: 22px;">Contact US</span>
                                      </a>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>
          </tbody>
        </table>
      </body>
    </html>';
    
    
    
            
                            $mail = new PHPMailer(); 
                            $mail->IsSMTP(); 
                            $mail->SMTPAuth = true; 
                            $mail->SMTPSecure = 'tls'; 
                           $mail->Host = "mail.privateemail.com";
                            $mail->Port = 587; 
                            $mail->IsHTML(true);
                            $mail->CharSet = 'UTF-8';
                            //$mail->SMTPDebug = 2; 
                            $mail->Username = EMAIL_SMTP_GOOGLE;
                            $mail->Password = PASSWORD_SMTP_GOOGLE;
                            $mail->SetFrom("services@globalshippersrwanda.com");;
                            $mail->Subject = $adminsubject;
                            $mail->Body =$html;
                            $mail->AddAddress($adminto);
                            $mail->SMTPOptions=array('ssl'=>array (
                                'verify_peer'=>false,
                                'verify_peer_name'=>false,
                                'allow_self_signed'=>false
                            ));
                        if(!$mail->Send()){
                            echo $mail->ErrorInfo;
                        }else{
                            return  'Sent';
                        }
            }
    public function insert_payment(){
        
        $shopnship_id = $this->input->post('submit');
        $data = [
            'order_id'=>$shopnship_id,
            'type' => strtolower($this->input->post('type')),
            'status'=> $this->input->post('status'),
            'payment_id' => $this->input->post('payment'),
            'invoiceamt' => $this->input->post('paymentAmt'),
            'date_created' => date('Y-m-d H:i:s')
        ];
        $datetime = strtotime($data['date_created']);
        $convertdate = date("d M,y",$datetime);
        $users = [
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone'),
            'fname' => $this->input->post('fname'),
            'lname' => $this->input->post('lname')
        ];
        $adminemail = $this->input->post('adminemail');
        $to = $users['email'];
        $subject  = 'Confirmation of Payment for Consolidation Shipment- '.$data['order_id'].'';
        $result = $this->Admin_model->insert_payment_data($data);
        $message['msg'] = "<p>Dear ".$users['fname']." ".$users['lname']."</p>
        <p>We are pleased to confirm that we have received details of your payment for your consolidation shipment with us. Below are the details of your payment:</p>
        <p> Order Id: ".$data['order_id']."</p>
        <p>Order Type: ".$data['type']."</p>
        <p>Payment Id :".$data['payment_id']."</p>
        <p>Invoice: ".$data['invoiceamt']." USD</p>
        <p>Payment Status: ".(($data['status']==1)?'Pending':(($data['status']==2)?'Paid':'Rejected'))."</p>
        <p>Your payment was processed successfully on ".$convertdate." and we have updated your account accordingly. We will start processing your shipment immediately.</p>
        <p>If you have any questions or concerns regarding your shipment, please feel free to contact us. We are always here to help.</p>
        <p>Thank you for choosing Global Shippers Rwanda. We appreciate your business and look forward to serving you better.</p>
        <p>Regards</p>
        <p>The GlobalshippersRwanda Team</p>";

        $adminto = $adminemail;
        $adminsubject  = 'Confirmation of Payment for Consolidation Shipment - '.$data['order_id'].'';
        $adminmessage['msg'] = "<p>Dear Admin</p>
        <p>We are pleased to confirm that we have received details of your payment for your consolidation shipment with us. Below are the details of your payment:</p>
        <p> Order Id: ".$data['order_id']."</p>
        <p>Order Type: ".$data['type']."</p>
        <p>Payment Id :".$data['payment_id']."</p>
        <p>Invoice: ".$data['invoiceamt']." USD</p>
        <p>Payment Status: ".(($data['status']==1)?'Pending':(($data['status']==2)?'Paid':'Rejected'))."</p>
          <p>Your payment was processed successfully on ".$convertdate." and we have updated your account accordingly. We will start processing your shipment immediately.</p>
        
        <p>Customer Informtion: </p>
        <p>Name: ".$users['fname']." ".$users['lname']."</p>
         <p>Email: ".$users['email']."</p>
        <p>Contact No : ".$users['phone']."</p>
        <p>Thank you for choosing Global Shippers Rwanda. We appreciate your business and look forward to serving you better.</p>
        <p>Regards</p>
        <p>The GlobalshippersRwanda Team</p>";
        $this->sendmail($to, $subject, $message);
        $this->adminsendmail($adminto, $adminsubject, $adminmessage);
        redirect(base_url().'shopnship-order-details/'.$shopnship_id,'refresh');
    }
    public function payment_update_view(){
        $id = $this->uri->segment(3);
        $payment_id = $this->uri->segment(4);
        $total['count']   = $this->Admin_model->count_notification();
        $data['pay_details']  = $this->Admin_model->shopnship_update_payment_display($id,$payment_id);
        $data['payupdate'] = $this->Admin_model->shopnshippayupdate($data['pay_details']->order_id);
        
        $data['payupdateusers'] = $this->Admin_model->payupdateusers($data['payupdate'][0]->user_id);
        // echo "<pre>";
        //  print_r($data['payupdateusers']);
        //  exit;
        $data['adminemail'] = $this->Gsr->getadminemail();
        $this->load->view('admin/heads',$total);
        $this->load->view('admin/edit_payment',$data);
        $this->load->view('admin/footer');
    }

    public function shoppayupsendmail($shoppayupto, $shoppayupsubject, $shoppayupmessage) {

      $html = '<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Email Template</title>
  <style type="text/css">
    @media screen and (max-width: 600px),
    screen and (max-device-width: 600px) {
      body {
        margin: 0 !important;
        padding: 0 !important;
      }
    }
    @media screen and (-webkit-min-device-pixel-ratio: 0) and (max-width: 600px) {
      body {
        margin: 0 !important;
        padding: 0 !important;
      }
    }
a{
color: #000;
text-decoration:none;
}
  </style>
</head>
<body style="margin: 0; padding: 0; border: 0;">
  <table width="100%" align="center" cellpadding="0" cellspacing="0"
    border="0" dir="ltr" style="background-color: rgb(255, 255, 255);">
    <tbody>
      <tr>
        <td align="center" valign="top"
          style="margin: 0; padding: 0px 15px 0px;">
          <table width="600" align="center" border="0" cellspacing="0"
            cellpadding="0" style="width: 600px;">
            <tbody>
              <tr>
                <td align="center" valign="center"
                  style="margin: 0; background-color: #ffffff; background-size: cover; background-repeat: no-repeat; background-position: center center; padding: 30px 15px 40px;">
                  <table align="center" border="0" cellpadding="0"
                    cellspacing="0">
                    <tbody>
                      <tr>
                        <td valign="top" align="center"
                          style="padding: 0px; margin: 0px;">
                          <a href="#"><img src="https://globalshippersrwanda.com/assets/cms/img/logo-black.png" width="100"
                              style="border: none; font-weight: bold; max-height: 100px; height: auto; line-height: 100%; outline: none; text-decoration: none; text-transform: capitalize; border-width: 0px; border-style: none; border-color: transparent; font-size: 12px; display: block;"></a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </td>
              </tr>
              <tr> 
                <td align="center" valign="top"
                  style="margin: 0; padding: 0;">
                  <table width="100%" align="center" border="0"
                    cellpadding="0" cellspacing="0" bgcolor="#ffffff">
                    <tbody>
                     <tr>   
                        <td align="left" valign="top"
                          style="margin: 0px; padding: 30px 30px 10px 30px; background-color: rgb(255, 255,
                255); font-size: 16px; font-family: "Lato", Arial, Helvetica,
                          sans-serif; line-height: 1.33;">
                          <span style="font-family: "Lato", Arial, Helvetica,
                            sans-serif; color: #000000; font-size: 20px;">
                            <span style="font-weight: 700;"></span>
                          </span>
                        </td>

                      </tr>
                      <tr>   
                        <td align="left" valign="top"
                          style="margin: 0px; padding: 30px 30px 10px 30px; background-color: rgb(255, 255,
                255); font-size: 16px; font-family: "Lato", Arial, Helvetica,
                          sans-serif; line-height: 1.33;">
                          <span style="font-family: "Lato", Arial, Helvetica,
                            sans-serif; color: #000000; font-size: 20px;">
                            <span style="font-weight: 700;">'.$shoppayupmessage['msg'].'</span>
                          </span>
                        </td>

                      </tr>

                    </tbody>
                  </table>
                  <table align="center" border="0" cellpadding="0"
                    cellspacing="0"
                    style="border-spacing: 0; margin: 0; padding: 0; border-spacing: 0px; -webkit-border-horizontal-spacing: 0px; -webkit-border-vertical-spacing: 0px; width: 100%">
                    <tr>
                      <td style="background: #ffffff;">
                        <table width="600" align="center" border="0"
                          cellpadding="0" cellspacing="0">
                          <tbody>
                            <tr>
                              <td valign="top" align="center"
                                style="padding: 30px 30px 20px 30px; font-family: "Lato"
                                ,Arial, Helvetica, sans-serif; margin: 0px;
                                font-size: 40px; color: #000000; font-weight:
                                bold;">
                               
                              </td>
                            </tr>
                            <tr>
                              <td valign="top" align="center"
                                style="padding: 0px 30px 10px 30px; margin: 0px; font-size: 15px; line-height: 23px; color: #000000;">
                                <span style="font-family: "Lato" ,Arial,
                                  Helvetica, sans-serif; color: #000000;
                                  font-size: 16px;">
                                 
                                </span>
                              </td>
                            </tr>
                            <tr>
                              <td valign="top" align="center"
                                style="padding: 10px 30px 40px 30px; margin: 0px; font-size: 15px; line-height: 23px; color: #fff;">
                                <a href="https://globalshippersrwanda.com/"
                                  style="padding: 10px 20px; color:#ffffff; font-size: 16px; font-family: "Lato"
                                  ,Arial, Helvetica, sans-serif; color:
                                  #ffffff; background-color: #000000;
                                  border-color: #000000; text-decoration:
                                  none; border-radius: 4px;">Visit Website</a>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>

              <tr>
                <td style="background:#ffffff;">
                  <table width="600">
                    <tr>
                      <td align="center"
                        style="padding: 20px 0px 10px 0; background:#ffffff; border-top: 1px solid #d1d1d1;">
                        <table width="600" align="center" border="0"
                          cellpadding="0" cellspacing="0">
                          <tbody>
                            <tr>
                              <td align="center" valign="top" nowrap
                                style="margin: 0px; padding: 0; font-size: 16px; font-family: "Lato",
                                Arial, Helvetica, sans-serif; line-height:
                                22px;">
                               
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                    <tr>
                      <td align="center"
                        style="padding: 0px 0px 20px 0; background:#ffffff;">
                        <table width="300" align="center" border="0"
                          cellpadding="0" cellspacing="0">
                          <tbody>
                            <tr>
                              <td align="center" valign="top" nowrap
                                style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                Arial, Helvetica, sans-serif;">
                                <a href="https://globalshippersrwanda.com/privacy"
                                  style="color: #000000; font-weight: normal; font-family: "Lato",
                                  Arial, Helvetica, sans-serif;
                                  text-decoration: none;">
                                  <span style="font-family: "Lato", Arial,
                                    Helvetica, sans-serif; color: #000000;
                                    font-size: 14px; white-space: nowrap;
                                    line-height: 22px;">Privacy Policy</span>
                                </a>
                              </td>
                              <td align="center" valign="top" nowrap
                                style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                Arial, Helvetica, sans-serif;">
                                <a href ="https://globalshippersrwanda.com/about-us"
                                  style="color: #2e3233; font-weight: normal; font-family: "Lato",
                                  Arial, Helvetica, sans-serif;
                                  text-decoration: none;">
                                  <span style="font-family: "Lato", Arial,
                                    Helvetica, sans-serif; color: #000000;
                                    font-size: 14px; white-space: nowrap;
                                    line-height: 22px;">About Us</span>
                                </a>
                              </td>
                              <td align="center" valign="top" nowrap
                                style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                Arial, Helvetica, sans-serif;">
                                <a href="https://globalshippersrwanda.com/contact-us"
                                  style="color: #000000; font-weight: normal; font-family: "Lato",
                                  Arial, Helvetica, sans-serif;
                                  text-decoration: none;">
                                  <span style="font-family: "Lato", Arial,
                                    Helvetica, sans-serif; color: #000000;
                                    font-size: 14px; white-space: nowrap;
                                    line-height: 22px;">Contact US</span>
                                </a>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
            </tbody>
          </table>
        </td>
      </tr>
    </tbody>
  </table>
</body>
</html>';



      
                      $mail = new PHPMailer(); 
                      $mail->IsSMTP(); 
                      $mail->SMTPAuth = true; 
                      $mail->SMTPSecure = 'tls'; 
                     $mail->Host = "mail.privateemail.com";
                      $mail->Port = 587; 
                      $mail->IsHTML(true);
                      $mail->CharSet = 'UTF-8';
                      //$mail->SMTPDebug = 2; 
                      $mail->Username = EMAIL_SMTP_GOOGLE;
                      $mail->Password = PASSWORD_SMTP_GOOGLE;
                      $mail->SetFrom("services@globalshippersrwanda.com");;
                      $mail->Subject = $shoppayupsubject;
                      $mail->Body =$html;
                      $mail->AddAddress($shoppayupto);
                      $mail->SMTPOptions=array('ssl'=>array (
                          'verify_peer'=>false,
                          'verify_peer_name'=>false,
                          'allow_self_signed'=>false
                      ));
                  if(!$mail->Send()){
                      echo $mail->ErrorInfo;
                  }else{
                      return  'Sent';
                  }
      }
      public function shoppayupadminsendmail($shoppayupadminto, $shoppayupadminsubject, $shoppayupadminmessage) {

          $html = '<!DOCTYPE html>
  <html lang="en-US">
    <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <title>Email Template</title>
      <style type="text/css">
        @media screen and (max-width: 600px),
        screen and (max-device-width: 600px) {
          body {
            margin: 0 !important;
            padding: 0 !important;
          }
        }
        @media screen and (-webkit-min-device-pixel-ratio: 0) and (max-width: 600px) {
          body {
            margin: 0 !important;
            padding: 0 !important;
          }
        }
    a{
    color: #000;
    text-decoration:none;
    }
      </style>
    </head>
    <body style="margin: 0; padding: 0; border: 0;">
      <table width="100%" align="center" cellpadding="0" cellspacing="0"
        border="0" dir="ltr" style="background-color: rgb(255, 255, 255);">
        <tbody>
          <tr>
            <td align="center" valign="top"
              style="margin: 0; padding: 0px 15px 0px;">
              <table width="600" align="center" border="0" cellspacing="0"
                cellpadding="0" style="width: 600px;">
                <tbody>
                  <tr>
                    <td align="center" valign="center"
                      style="margin: 0; background-color: #ffffff; background-size: cover; background-repeat: no-repeat; background-position: center center; padding: 30px 15px 40px;">
                      <table align="center" border="0" cellpadding="0"
                        cellspacing="0">
                        <tbody>
                          <tr>
                            <td valign="top" align="center"
                              style="padding: 0px; margin: 0px;">
                              <a href="#"><img src="https://globalshippersrwanda.com/assets/cms/img/logo-black.png" width="100"
                                  style="border: none; font-weight: bold; max-height: 100px; height: auto; line-height: 100%; outline: none; text-decoration: none; text-transform: capitalize; border-width: 0px; border-style: none; border-color: transparent; font-size: 12px; display: block;"></a>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                  <tr> 
                    <td align="center" valign="top"
                      style="margin: 0; padding: 0;">
                      <table width="100%" align="center" border="0"
                        cellpadding="0" cellspacing="0" bgcolor="#ffffff">
                        <tbody>
                         <tr>   
                            <td align="left" valign="top"
                              style="margin: 0px; padding: 30px 30px 10px 30px; background-color: rgb(255, 255,
                                      255); font-size: 16px; font-family: "Lato", Arial, Helvetica,
                              sans-serif; line-height: 1.33;">
                              <span style="font-family: "Lato", Arial, Helvetica,
                                sans-serif; color: #000000; font-size: 20px;">
                                <span style="font-weight: 700;"></span>
                              </span>
                            </td>
  
                          </tr>
                          <tr>   
                            <td align="left" valign="top"
                              style="margin: 0px; padding: 30px 30px 10px 30px; background-color: rgb(255, 255,
                                      255); font-size: 16px; font-family: "Lato", Arial, Helvetica,
                              sans-serif; line-height: 1.33;">
                              <span style="font-family: "Lato", Arial, Helvetica,
                                sans-serif; color: #000000; font-size: 20px;">
                                <span style="font-weight: 700;">'.$shoppayupadminmessage['msg'].'</span>
                              </span>
                            </td>
  
                          </tr>
  
                        </tbody>
                      </table>
                      <table align="center" border="0" cellpadding="0"
                        cellspacing="0"
                        style="border-spacing: 0; margin: 0; padding: 0; border-spacing: 0px; -webkit-border-horizontal-spacing: 0px; -webkit-border-vertical-spacing: 0px; width: 100%">
                        <tr>
                          <td style="background: #ffffff;">
                            <table width="600" align="center" border="0"
                              cellpadding="0" cellspacing="0">
                              <tbody>
                                <tr>
                                  <td valign="top" align="center"
                                    style="padding: 30px 30px 20px 30px; font-family: "Lato"
                                    ,Arial, Helvetica, sans-serif; margin: 0px;
                                    font-size: 40px; color: #000000; font-weight:
                                    bold;">
                                   
                                  </td>
                                </tr>
                                <tr>
                                  <td valign="top" align="center"
                                    style="padding: 0px 30px 10px 30px; margin: 0px; font-size: 15px; line-height: 23px; color: #000000;">
                                    <span style="font-family: "Lato" ,Arial,
                                      Helvetica, sans-serif; color: #000000;
                                      font-size: 16px;">
                                     
                                    </span>
                                  </td>
                                </tr>
                                <tr>
                                  <td valign="top" align="center"
                                    style="padding: 10px 30px 40px 30px; margin: 0px; font-size: 15px; line-height: 23px; color: #fff;">
                                    <a href="https://globalshippersrwanda.com/"
                                      style="padding: 10px 20px; color:#ffffff; font-size: 16px; font-family: "Lato"
                                      ,Arial, Helvetica, sans-serif; color:
                                      #ffffff; background-color: #000000;
                                      border-color: #000000; text-decoration:
                                      none; border-radius: 4px;">Visit Website</a>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
  
                  <tr>
                    <td style="background:#ffffff;">
                      <table width="600">
                        <tr>
                          <td align="center"
                            style="padding: 20px 0px 10px 0; background:#ffffff; border-top: 1px solid #d1d1d1;">
                            <table width="600" align="center" border="0"
                              cellpadding="0" cellspacing="0">
                              <tbody>
                                <tr>
                                  <td align="center" valign="top" nowrap
                                    style="margin: 0px; padding: 0; font-size: 16px; font-family: "Lato",
                                    Arial, Helvetica, sans-serif; line-height:
                                    22px;">
                                   
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                        </tr>
                        <tr>
                          <td align="center"
                            style="padding: 0px 0px 20px 0; background:#ffffff;">
                            <table width="300" align="center" border="0"
                              cellpadding="0" cellspacing="0">
                              <tbody>
                                <tr>
                                  <td align="center" valign="top" nowrap
                                    style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                    Arial, Helvetica, sans-serif;">
                                    <a href="https://globalshippersrwanda.com/privacy"
                                      style="color: #000000; font-weight: normal; font-family: "Lato",
                                      Arial, Helvetica, sans-serif;
                                      text-decoration: none;">
                                      <span style="font-family: "Lato", Arial,
                                        Helvetica, sans-serif; color: #000000;
                                        font-size: 14px; white-space: nowrap;
                                        line-height: 22px;">Privacy Policy</span>
                                    </a>
                                  </td>
                                  <td align="center" valign="top" nowrap
                                    style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                    Arial, Helvetica, sans-serif;">
                                    <a href ="https://globalshippersrwanda.com/about-us"
                                      style="color: #2e3233; font-weight: normal; font-family: "Lato",
                                      Arial, Helvetica, sans-serif;
                                      text-decoration: none;">
                                      <span style="font-family: "Lato", Arial,
                                        Helvetica, sans-serif; color: #000000;
                                        font-size: 14px; white-space: nowrap;
                                        line-height: 22px;">About Us</span>
                                    </a>
                                  </td>
                                  <td align="center" valign="top" nowrap
                                    style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                    Arial, Helvetica, sans-serif;">
                                    <a href="https://globalshippersrwanda.com/contact-us"
                                      style="color: #000000; font-weight: normal; font-family: "Lato",
                                      Arial, Helvetica, sans-serif;
                                      text-decoration: none;">
                                      <span style="font-family: "Lato", Arial,
                                        Helvetica, sans-serif; color: #000000;
                                        font-size: 14px; white-space: nowrap;
                                        line-height: 22px;">Contact US</span>
                                    </a>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                </tbody>
              </table>
            </td>
          </tr>
        </tbody>
      </table>
    </body>
  </html>';
  
  
  
          
                          $mail = new PHPMailer(); 
                          $mail->IsSMTP(); 
                          $mail->SMTPAuth = true; 
                          $mail->SMTPSecure = 'tls'; 
                         $mail->Host = "mail.privateemail.com";
                          $mail->Port = 587; 
                          $mail->IsHTML(true);
                          $mail->CharSet = 'UTF-8';
                          //$mail->SMTPDebug = 2; 
                          $mail->Username = EMAIL_SMTP_GOOGLE;
                          $mail->Password = PASSWORD_SMTP_GOOGLE;
                          $mail->SetFrom("services@globalshippersrwanda.com");;
                          $mail->Subject = $shoppayupadminsubject;
                          $mail->Body =$html;
                          $mail->AddAddress($shoppayupadminto);
                          $mail->SMTPOptions=array('ssl'=>array (
                              'verify_peer'=>false,
                              'verify_peer_name'=>false,
                              'allow_self_signed'=>false
                          ));
                      if(!$mail->Send()){
                          echo $mail->ErrorInfo;
                      }else{
                          return  'Sent';
                      }
          }

    public function shopnship_update_payment(){ 
        $orderid = $this->input->post('id');
        $id = $this->input->post('payid');
        $pay = [
            'payment_id' => $this->input->post('payment'),
            'status'=> $this->input->post('status'),
            'invoiceamt'=> $this->input->post('invoiceAmt'),
            'update_date' => date('Y-m-d H:i:s')
        ];
        $datetime = strtotime($data['date_created']);
        $convertdate = date("d M,y",$datetime);

        $users = [
          'email' => $this->input->post('email'),
          'phone' => $this->input->post('phone'),
          'fname' => $this->input->post('fname'),
          'lname' => $this->input->post('lname')
      ];
      $adminemail = $this->input->post('adminemail');
        $payment = $this->Admin_model->shopnship_update_payment($orderid,$pay,$id);
        $shoppayupto = $users['email'];
        $shoppayupsubject  = 'Update on Consolidation Shipment Payment Details  '.$orderid.'';
        $shoppayupmessage['msg'] = "<p>Dear ".$users['fname']." ".$users['lname']."</p>
        <p>We hope this email finds you well. We are pleased to inform you that we have updated the payment details for your consolidation shipment with us.</p>
        <p>Payment Id: ".$pay['payment_id']."</p>
        <p>Status: ".(($pay['status']==1)?'Pending':(($pay['status']==2)?'Paid':'Rejected'))."</p>
        <p>Invoice :".$pay['invoiceamt']." USD</p>
        <p>Please note that this payment update may take some time to reflect in our system, and you may receive a separate notification once the payment is fully processed.</p>
        <p>If you have any questions or concerns regarding your payment, please do not hesitate to reach out to our customer service team. We are always here to assist you.</p>
        <p>Thank you for choosing Global Shippers Rwanda for your logistics needs.</p>
        <p>Regards</p>
        <p>The GlobalshippersRwanda Team</p>";

        $shoppayupadminto = $adminemail;
        $shoppayupadminsubject  =  'Update on Consolidation Shipment Payment Details - '.$orderid.''; 
        $shoppayupadminmessage['msg'] = "<p>Dear Admin</p>
       <p>We hope this email finds you well. We are pleased to inform you that we have updated the payment details for your consolidation shipment with us.</p>
       <p>Payment Id: ".$pay['payment_id']."</p>
        <p>Status: ".(($pay['status']==1)?'Pending':(($pay['status']==2)?'Paid':'Rejected'))."</p>
        <p>Invoice :".$pay['invoiceamt']." USD</p>
        <p>Please note that this payment update may take some time to reflect in our system, and you may receive a separate notification once the payment is fully processed.</p>
       
        <p>Customer Information</p>
        <p>Name: ".$users['fname']." ".$users['lname']."</p>
         <p>Email: ".$users['email']."</p>
          <p>Contact No: ".$users['phone']."</p>
           <p>Thank you for choosing Global Shippers Rwanda for your logistics needs.</p>
        <p>Regards</p>
        <p>The GlobalshippersRwanda Team</p>";
        $this->shoppayupsendmail($shoppayupto, $shoppayupsubject, $shoppayupmessage);
        $this->shoppayupadminsendmail($shoppayupadminto, $shoppayupadminsubject, $shoppayupadminmessage);
        if($payment==TRUE){
            redirect(base_url().'shopnship-order-details/'.$orderid);
        }
        else{
           redirect(base_url().'shopnship-order-details/'.$orderid);
        }
     
    }
    public function shopnship_delete_payment(){
        $id = $this->uri->segment(3);
        $payment_id = $this->uri->segment(4);
        $result = $this->Admin_model->shopnship_delete_payment($id,$payment_id);
        echo json_encode($resutl);
        if($result==TRUE){
            redirect(base_url().'shopnship-order-details/'.$id);
        }
        else{
            redirect(base_url().'shopnship-order-details/'.$id);
        }
    }

    public function shopnshipshipmentsendmail($shipmentto, $shipmentsubject, $shipmentmessage) {

        $html = '<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Email Template</title>
    <style type="text/css">
      @media screen and (max-width: 600px),
      screen and (max-device-width: 600px) {
        body {
          margin: 0 !important;
          padding: 0 !important;
        }
      }
      @media screen and (-webkit-min-device-pixel-ratio: 0) and (max-width: 600px) {
        body {
          margin: 0 !important;
          padding: 0 !important;
        }
      }
  a{
  color: #000;
  text-decoration:none;
  }
    </style>
  </head>
  <body style="margin: 0; padding: 0; border: 0;">
    <table width="100%" align="center" cellpadding="0" cellspacing="0"
      border="0" dir="ltr" style="background-color: rgb(255, 255, 255);">
      <tbody>
        <tr>
          <td align="center" valign="top"
            style="margin: 0; padding: 0px 15px 0px;">
            <table width="600" align="center" border="0" cellspacing="0"
              cellpadding="0" style="width: 600px;">
              <tbody>
                <tr>
                  <td align="center" valign="center"
                    style="margin: 0; background-color: #ffffff; background-size: cover; background-repeat: no-repeat; background-position: center center; padding: 30px 15px 40px;">
                    <table align="center" border="0" cellpadding="0"
                      cellspacing="0">
                      <tbody>
                        <tr>
                          <td valign="top" align="center"
                            style="padding: 0px; margin: 0px;">
                            <a href="#"><img src="https://globalshippersrwanda.com/assets/cms/img/logo-black.png" width="100"
                                style="border: none; font-weight: bold; max-height: 100px; height: auto; line-height: 100%; outline: none; text-decoration: none; text-transform: capitalize; border-width: 0px; border-style: none; border-color: transparent; font-size: 12px; display: block;"></a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
                <tr> 
                  <td align="center" valign="top"
                    style="margin: 0; padding: 0;">
                    <table width="100%" align="center" border="0"
                      cellpadding="0" cellspacing="0" bgcolor="#ffffff">
                      <tbody>
                       <tr>   
                          <td align="left" valign="top"
                            style="margin: 0px; padding: 30px 30px 10px 30px; background-color: rgb(255, 255,
									255); font-size: 16px; font-family: "Lato", Arial, Helvetica,
                            sans-serif; line-height: 1.33;">
                            <span style="font-family: "Lato", Arial, Helvetica,
                              sans-serif; color: #000000; font-size: 20px;">
                              <span style="font-weight: 700;"></span>
                            </span>
                          </td>

                        </tr>
                        <tr>   
                          <td align="left" valign="top"
                            style="margin: 0px; padding: 30px 30px 10px 30px; background-color: rgb(255, 255,
									255); font-size: 16px; font-family: "Lato", Arial, Helvetica,
                            sans-serif; line-height: 1.33;">
                            <span style="font-family: "Lato", Arial, Helvetica,
                              sans-serif; color: #000000; font-size: 20px;">
                              <span style="font-weight: 700;">'.$shipmentmessage['msg'].'</span>
                            </span>
                          </td>

                        </tr>

                      </tbody>
                    </table>
                    <table align="center" border="0" cellpadding="0"
                      cellspacing="0"
                      style="border-spacing: 0; margin: 0; padding: 0; border-spacing: 0px; -webkit-border-horizontal-spacing: 0px; -webkit-border-vertical-spacing: 0px; width: 100%">
                      <tr>
                        <td style="background: #ffffff;">
                          <table width="600" align="center" border="0"
                            cellpadding="0" cellspacing="0">
                            <tbody>
                              <tr>
                                <td valign="top" align="center"
                                  style="padding: 30px 30px 20px 30px; font-family: "Lato"
                                  ,Arial, Helvetica, sans-serif; margin: 0px;
                                  font-size: 40px; color: #000000; font-weight:
                                  bold;">
                                 
                                </td>
                              </tr>
                              <tr>
                                <td valign="top" align="center"
                                  style="padding: 0px 30px 10px 30px; margin: 0px; font-size: 15px; line-height: 23px; color: #000000;">
                                  <span style="font-family: "Lato" ,Arial,
                                    Helvetica, sans-serif; color: #000000;
                                    font-size: 16px;">
                                   
                                  </span>
                                </td>
                              </tr>
                              <tr>
                                <td valign="top" align="center"
                                  style="padding: 10px 30px 40px 30px; margin: 0px; font-size: 15px; line-height: 23px; color: #fff;">
                                  <a href="https://globalshippersrwanda.com/"
                                    style="padding: 10px 20px; color:#ffffff; font-size: 16px; font-family: "Lato"
                                    ,Arial, Helvetica, sans-serif; color:
                                    #ffffff; background-color: #000000;
                                    border-color: #000000; text-decoration:
                                    none; border-radius: 4px;">Visit Website</a>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>

                <tr>
                  <td style="background:#ffffff;">
                    <table width="600">
                      <tr>
                        <td align="center"
                          style="padding: 20px 0px 10px 0; background:#ffffff; border-top: 1px solid #d1d1d1;">
                          <table width="600" align="center" border="0"
                            cellpadding="0" cellspacing="0">
                            <tbody>
                              <tr>
                                <td align="center" valign="top" nowrap
                                  style="margin: 0px; padding: 0; font-size: 16px; font-family: "Lato",
                                  Arial, Helvetica, sans-serif; line-height:
                                  22px;">
                                 
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                      <tr>
                        <td align="center"
                          style="padding: 0px 0px 20px 0; background:#ffffff;">
                          <table width="300" align="center" border="0"
                            cellpadding="0" cellspacing="0">
                            <tbody>
                              <tr>
                                <td align="center" valign="top" nowrap
                                  style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                  Arial, Helvetica, sans-serif;">
                                  <a href="https://globalshippersrwanda.com/privacy"
                                    style="color: #000000; font-weight: normal; font-family: "Lato",
                                    Arial, Helvetica, sans-serif;
                                    text-decoration: none;">
                                    <span style="font-family: "Lato", Arial,
                                      Helvetica, sans-serif; color: #000000;
                                      font-size: 14px; white-space: nowrap;
                                      line-height: 22px;">Privacy Policy</span>
                                  </a>
                                </td>
                                <td align="center" valign="top" nowrap
                                  style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                  Arial, Helvetica, sans-serif;">
                                  <a href ="https://globalshippersrwanda.com/about-us"
                                    style="color: #2e3233; font-weight: normal; font-family: "Lato",
                                    Arial, Helvetica, sans-serif;
                                    text-decoration: none;">
                                    <span style="font-family: "Lato", Arial,
                                      Helvetica, sans-serif; color: #000000;
                                      font-size: 14px; white-space: nowrap;
                                      line-height: 22px;">About Us</span>
                                  </a>
                                </td>
                                <td align="center" valign="top" nowrap
                                  style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                  Arial, Helvetica, sans-serif;">
                                  <a href="https://globalshippersrwanda.com/contact-us"
                                    style="color: #000000; font-weight: normal; font-family: "Lato",
                                    Arial, Helvetica, sans-serif;
                                    text-decoration: none;">
                                    <span style="font-family: "Lato", Arial,
                                      Helvetica, sans-serif; color: #000000;
                                      font-size: 14px; white-space: nowrap;
                                      line-height: 22px;">Contact US</span>
                                  </a>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
          </td>
        </tr>
      </tbody>
    </table>
  </body>
</html>';



        
                        $mail = new PHPMailer(); 
                        $mail->IsSMTP(); 
                        $mail->SMTPAuth = true; 
                        $mail->SMTPSecure = 'tls'; 
                       $mail->Host = "mail.privateemail.com";
                        $mail->Port = 587; 
                        $mail->IsHTML(true);
                        $mail->CharSet = 'UTF-8';
                        //$mail->SMTPDebug = 2; 
                        $mail->Username = EMAIL_SMTP_GOOGLE;
                        $mail->Password = PASSWORD_SMTP_GOOGLE;
                        $mail->SetFrom("services@globalshippersrwanda.com");;
                        $mail->Subject = $shipmentsubject;
                        $mail->Body =$html;
                        $mail->AddAddress($shipmentto);
                        $mail->SMTPOptions=array('ssl'=>array (
                            'verify_peer'=>false,
                            'verify_peer_name'=>false,
                            'allow_self_signed'=>false
                        ));
                    if(!$mail->Send()){
                        echo $mail->ErrorInfo;
                    }else{
                        return  'Sent';
                    }
        }
        public function shipmentadminsendmail($shipmentadminto, $shipmentadminsubject, $shipmentadminmessage) {

            $html = '<!DOCTYPE html>
    <html lang="en-US">
      <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Email Template</title>
        <style type="text/css">
          @media screen and (max-width: 600px),
          screen and (max-device-width: 600px) {
            body {
              margin: 0 !important;
              padding: 0 !important;
            }
          }
          @media screen and (-webkit-min-device-pixel-ratio: 0) and (max-width: 600px) {
            body {
              margin: 0 !important;
              padding: 0 !important;
            }
          }
      a{
      color: #000;
      text-decoration:none;
      }
        </style>
      </head>
      <body style="margin: 0; padding: 0; border: 0;">
        <table width="100%" align="center" cellpadding="0" cellspacing="0"
          border="0" dir="ltr" style="background-color: rgb(255, 255, 255);">
          <tbody>
            <tr>
              <td align="center" valign="top"
                style="margin: 0; padding: 0px 15px 0px;">
                <table width="600" align="center" border="0" cellspacing="0"
                  cellpadding="0" style="width: 600px;">
                  <tbody>
                    <tr>
                      <td align="center" valign="center"
                        style="margin: 0; background-color: #ffffff; background-size: cover; background-repeat: no-repeat; background-position: center center; padding: 30px 15px 40px;">
                        <table align="center" border="0" cellpadding="0"
                          cellspacing="0">
                          <tbody>
                            <tr>
                              <td valign="top" align="center"
                                style="padding: 0px; margin: 0px;">
                                <a href="#"><img src="https://globalshippersrwanda.com/assets/cms/img/logo-black.png" width="100"
                                    style="border: none; font-weight: bold; max-height: 100px; height: auto; line-height: 100%; outline: none; text-decoration: none; text-transform: capitalize; border-width: 0px; border-style: none; border-color: transparent; font-size: 12px; display: block;"></a>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                    <tr> 
                      <td align="center" valign="top"
                        style="margin: 0; padding: 0;">
                        <table width="100%" align="center" border="0"
                          cellpadding="0" cellspacing="0" bgcolor="#ffffff">
                          <tbody>
                           <tr>   
                              <td align="left" valign="top"
                                style="margin: 0px; padding: 30px 30px 10px 30px; background-color: rgb(255, 255,
                                        255); font-size: 16px; font-family: "Lato", Arial, Helvetica,
                                sans-serif; line-height: 1.33;">
                                <span style="font-family: "Lato", Arial, Helvetica,
                                  sans-serif; color: #000000; font-size: 20px;">
                                  <span style="font-weight: 700;"></span>
                                </span>
                              </td>
    
                            </tr>
                            <tr>   
                              <td align="left" valign="top"
                                style="margin: 0px; padding: 30px 30px 10px 30px; background-color: rgb(255, 255,
                                        255); font-size: 16px; font-family: "Lato", Arial, Helvetica,
                                sans-serif; line-height: 1.33;">
                                <span style="font-family: "Lato", Arial, Helvetica,
                                  sans-serif; color: #000000; font-size: 20px;">
                                  <span style="font-weight: 700;">'.$shipmentadminmessage['msg'].'</span>
                                </span>
                              </td>
    
                            </tr>
    
                          </tbody>
                        </table>
                        <table align="center" border="0" cellpadding="0"
                          cellspacing="0"
                          style="border-spacing: 0; margin: 0; padding: 0; border-spacing: 0px; -webkit-border-horizontal-spacing: 0px; -webkit-border-vertical-spacing: 0px; width: 100%">
                          <tr>
                            <td style="background: #ffffff;">
                              <table width="600" align="center" border="0"
                                cellpadding="0" cellspacing="0">
                                <tbody>
                                  <tr>
                                    <td valign="top" align="center"
                                      style="padding: 30px 30px 20px 30px; font-family: "Lato"
                                      ,Arial, Helvetica, sans-serif; margin: 0px;
                                      font-size: 40px; color: #000000; font-weight:
                                      bold;">
                                     
                                    </td>
                                  </tr>
                                  <tr>
                                    <td valign="top" align="center"
                                      style="padding: 0px 30px 10px 30px; margin: 0px; font-size: 15px; line-height: 23px; color: #000000;">
                                      <span style="font-family: "Lato" ,Arial,
                                        Helvetica, sans-serif; color: #000000;
                                        font-size: 16px;">
                                       
                                      </span>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td valign="top" align="center"
                                      style="padding: 10px 30px 40px 30px; margin: 0px; font-size: 15px; line-height: 23px; color: #fff;">
                                      <a href="https://globalshippersrwanda.com/"
                                        style="padding: 10px 20px; color:#ffffff; font-size: 16px; font-family: "Lato"
                                        ,Arial, Helvetica, sans-serif; color:
                                        #ffffff; background-color: #000000;
                                        border-color: #000000; text-decoration:
                                        none; border-radius: 4px;">Visit Website</a>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </td>
                          </tr>
                        </table>
                      </td>
                    </tr>
    
                    <tr>
                      <td style="background:#ffffff;">
                        <table width="600">
                          <tr>
                            <td align="center"
                              style="padding: 20px 0px 10px 0; background:#ffffff; border-top: 1px solid #d1d1d1;">
                              <table width="600" align="center" border="0"
                                cellpadding="0" cellspacing="0">
                                <tbody>
                                  <tr>
                                    <td align="center" valign="top" nowrap
                                      style="margin: 0px; padding: 0; font-size: 16px; font-family: "Lato",
                                      Arial, Helvetica, sans-serif; line-height:
                                      22px;">
                                     
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </td>
                          </tr>
                          <tr>
                            <td align="center"
                              style="padding: 0px 0px 20px 0; background:#ffffff;">
                              <table width="300" align="center" border="0"
                                cellpadding="0" cellspacing="0">
                                <tbody>
                                  <tr>
                                    <td align="center" valign="top" nowrap
                                      style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                      Arial, Helvetica, sans-serif;">
                                      <a href="https://globalshippersrwanda.com/privacy"
                                        style="color: #000000; font-weight: normal; font-family: "Lato",
                                        Arial, Helvetica, sans-serif;
                                        text-decoration: none;">
                                        <span style="font-family: "Lato", Arial,
                                          Helvetica, sans-serif; color: #000000;
                                          font-size: 14px; white-space: nowrap;
                                          line-height: 22px;">Privacy Policy</span>
                                      </a>
                                    </td>
                                    <td align="center" valign="top" nowrap
                                      style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                      Arial, Helvetica, sans-serif;">
                                      <a href ="https://globalshippersrwanda.com/about-us"
                                        style="color: #2e3233; font-weight: normal; font-family: "Lato",
                                        Arial, Helvetica, sans-serif;
                                        text-decoration: none;">
                                        <span style="font-family: "Lato", Arial,
                                          Helvetica, sans-serif; color: #000000;
                                          font-size: 14px; white-space: nowrap;
                                          line-height: 22px;">About Us</span>
                                      </a>
                                    </td>
                                    <td align="center" valign="top" nowrap
                                      style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                      Arial, Helvetica, sans-serif;">
                                      <a href="https://globalshippersrwanda.com/contact-us"
                                        style="color: #000000; font-weight: normal; font-family: "Lato",
                                        Arial, Helvetica, sans-serif;
                                        text-decoration: none;">
                                        <span style="font-family: "Lato", Arial,
                                          Helvetica, sans-serif; color: #000000;
                                          font-size: 14px; white-space: nowrap;
                                          line-height: 22px;">Contact US</span>
                                      </a>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>
          </tbody>
        </table>
      </body>
    </html>';
    
    
    
            
                            $mail = new PHPMailer(); 
                            $mail->IsSMTP(); 
                            $mail->SMTPAuth = true; 
                            $mail->SMTPSecure = 'tls'; 
                           $mail->Host = "mail.privateemail.com";
                            $mail->Port = 587; 
                            $mail->IsHTML(true);
                            $mail->CharSet = 'UTF-8';
                            //$mail->SMTPDebug = 2; 
                            $mail->Username = EMAIL_SMTP_GOOGLE;
                            $mail->Password = PASSWORD_SMTP_GOOGLE;
                            $mail->SetFrom("services@globalshippersrwanda.com");;
                            $mail->Subject = $shipmentadminsubject;
                            $mail->Body =$html;
                            $mail->AddAddress($shipmentadminto);
                            $mail->SMTPOptions=array('ssl'=>array (
                                'verify_peer'=>false,
                                'verify_peer_name'=>false,
                                'allow_self_signed'=>false
                            ));
                        if(!$mail->Send()){
                            echo $mail->ErrorInfo;
                        }else{
                            return  'Sent';
                        }
            }
    public function shopnship_shipment(){
        $shopnship_id = $this->input->post('submit');
        $data = [
            'order_id'         => $shopnship_id,
            'shipping_carrier' => $this->input->post('shipping_carrier'),
            'tracking_number'=> $this->input->post('tracking_number'),
            'tracking_url' => $this->input->post('tracking_url'),
            'shipping' => strtolower($this->input->post('shipping')),
            'date_created' => date('Y-m-d H:i:s')
        ];
        $datetime = strtotime($data['date_created']);
        $convertdate = date("d M,y",$datetime);
        $users = [
          'email' => $this->input->post('email'),
          'phone' => $this->input->post('phone'),
          'fname' => $this->input->post('fname'),
          'lname' => $this->input->post('lname')
      ];
      $adminemail = $this->input->post('adminemail');
        $shipmentto = $users['email'];
        $shipmentsubject  = 'Shipment Details - consolidation shipment - '.$data['order_id'].'';
        $result = $this->Admin_model->insert_shipment_data($data);
        $shipmentmessage['msg'] = "<p>Dear ".$users['fname']." ".$users['lname']."</p>
        <p>We are pleased to inform you that your consolidation order, ".$data['order_id'].", has been successfully processed and is now ready for shipping.</p>
        <p>Below are the details of your shipment:</p>
        <p> Order Id: ".$data['order_id']."</p>
        <p>shipping carrier: ".$data['shipping_carrier']."</p>
        <p>Tracking Number :".$data['tracking_number']." (Please note that this tracking number can be used to track your shipment on the carrier's website)</p>
        <p>Tracking Url: ".$data['tracking_url']."</p>
        <p>Order Summary</p>
        <p>Order date: ".$convertdate."</p>
        <p>Products:List of products included in the shipment</p>
        <p>Important Information</p>
        <p>Please allow 3-5 business days for your shipment to be delivered.</p>
        <p>You will receive an update via email once the shipment has been delivered.</p>
        <p>If you have any questions or concerns regarding your payment, please do not hesitate to reach out to our customer service team. We are always here to assist you.</p>
        <p>Thank you for choosing Global Shippers Rwanda. We appreciate your business and look forward to serving you again in the future.</p>
        <p>Regards</p>
        <p>The GlobalshippersRwanda Team</p>";

        $shipmentadminto = $adminemail;
        $shipmentadminsubject  = 'Shipment Details - consolidation shipment - '.$data['order_id'].'';
        $shipmentadminmessage['msg'] = "<p>Dear Admin</p>
        <p>We are pleased to inform you that your consolidation order, ".$data['order_id'].", has been successfully processed and is now ready for shipping.</p>
        <p>Below are the details of your shipment:</p>
        <p> Order Id: ".$data['order_id']."</p>
        <p>shipping carrier: ".$data['shipping_carrier']."</p>
        <p>Tracking Number :".$data['tracking_number']." (Please note that this tracking number can be used to track your shipment on the carrier's website)</p>
        <p>Tracking Url: ".$data['tracking_url']."</p>
        <p>Order Summary</p>
        <p>Order date: ".$convertdate."</p>
        <p>Products:List of products included in the shipment</p>
         <p>Important Information</p>
        <p>Please allow 3-5 business days for your shipment to be delivered.</p>
        <p>You will receive an update via email once the shipment has been delivered.</p>
        <p>Contact Information:</p>
        <p>Name: ".$users['fname']." ".$users['lname']."</p>
        <p>Email: ".$users['email']."</p>
        <p>Contact No: ".$users['phone']."</p>
        <p>Thank you for choosing Global Shippers Rwanda. We appreciate your business and look forward to serving you again in the future.</p>
        <p>Regards</p>
        <p>The GlobalshippersRwanda Team</p>";
        $this->shopnshipshipmentsendmail($shipmentto, $shipmentsubject, $shipmentmessage);
        $this->shipmentadminsendmail($shipmentadminto, $shipmentadminsubject, $shipmentadminmessage);
       // echo json_encode($result);
        redirect(base_url().'shopnship-order-details/'.$shopnship_id,'refresh');

    }
    public function assistedsendmail($assistedto, $assistedsubject, $assistedmessage) {

        $html = '<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Email Template</title>
    <style type="text/css">
      @media screen and (max-width: 600px),
      screen and (max-device-width: 600px) {
        body {
          margin: 0 !important;
          padding: 0 !important;
        }
      }
      @media screen and (-webkit-min-device-pixel-ratio: 0) and (max-width: 600px) {
        body {
          margin: 0 !important;
          padding: 0 !important;
        }
      }
  a{
  color: #000;
  text-decoration:none;
  }
    </style>
  </head>
  <body style="margin: 0; padding: 0; border: 0;">
    <table width="100%" align="center" cellpadding="0" cellspacing="0"
      border="0" dir="ltr" style="background-color: rgb(255, 255, 255);">
      <tbody>
        <tr>
          <td align="center" valign="top"
            style="margin: 0; padding: 0px 15px 0px;">
            <table width="600" align="center" border="0" cellspacing="0"
              cellpadding="0" style="width: 600px;">
              <tbody>
                <tr>
                  <td align="center" valign="center"
                    style="margin: 0; background-color: #ffffff; background-size: cover; background-repeat: no-repeat; background-position: center center; padding: 30px 15px 40px;">
                    <table align="center" border="0" cellpadding="0"
                      cellspacing="0">
                      <tbody>
                        <tr>
                          <td valign="top" align="center"
                            style="padding: 0px; margin: 0px;">
                            <a href="#"><img src="https://globalshippersrwanda.com/assets/cms/img/logo-black.png" width="100"
                                style="border: none; font-weight: bold; max-height: 100px; height: auto; line-height: 100%; outline: none; text-decoration: none; text-transform: capitalize; border-width: 0px; border-style: none; border-color: transparent; font-size: 12px; display: block;"></a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
                <tr> 
                  <td align="center" valign="top"
                    style="margin: 0; padding: 0;">
                    <table width="100%" align="center" border="0"
                      cellpadding="0" cellspacing="0" bgcolor="#ffffff">
                      <tbody>
                       <tr>   
                          <td align="left" valign="top"
                            style="margin: 0px; padding: 30px 30px 10px 30px; background-color: rgb(255, 255,
									255); font-size: 16px; font-family: "Lato", Arial, Helvetica,
                            sans-serif; line-height: 1.33;">
                            <span style="font-family: "Lato", Arial, Helvetica,
                              sans-serif; color: #000000; font-size: 20px;">
                              <span style="font-weight: 700;"></span>
                            </span>
                          </td>

                        </tr>
                        <tr>   
                          <td align="left" valign="top"
                            style="margin: 0px; padding: 30px 30px 10px 30px; background-color: rgb(255, 255,
									255); font-size: 16px; font-family: "Lato", Arial, Helvetica,
                            sans-serif; line-height: 1.33;">
                            <span style="font-family: "Lato", Arial, Helvetica,
                              sans-serif; color: #000000; font-size: 20px;">
                              <span style="font-weight: 700;">'.$assistedmessage['msg'].'</span>
                            </span>
                          </td>

                        </tr>

                      </tbody>
                    </table>
                    <table align="center" border="0" cellpadding="0"
                      cellspacing="0"
                      style="border-spacing: 0; margin: 0; padding: 0; border-spacing: 0px; -webkit-border-horizontal-spacing: 0px; -webkit-border-vertical-spacing: 0px; width: 100%">
                      <tr>
                        <td style="background: #ffffff;">
                          <table width="600" align="center" border="0"
                            cellpadding="0" cellspacing="0">
                            <tbody>
                              <tr>
                                <td valign="top" align="center"
                                  style="padding: 30px 30px 20px 30px; font-family: "Lato"
                                  ,Arial, Helvetica, sans-serif; margin: 0px;
                                  font-size: 40px; color: #000000; font-weight:
                                  bold;">
                                 
                                </td>
                              </tr>
                              <tr>
                                <td valign="top" align="center"
                                  style="padding: 0px 30px 10px 30px; margin: 0px; font-size: 15px; line-height: 23px; color: #000000;">
                                  <span style="font-family: "Lato" ,Arial,
                                    Helvetica, sans-serif; color: #000000;
                                    font-size: 16px;">
                                   
                                  </span>
                                </td>
                              </tr>
                              <tr>
                                <td valign="top" align="center"
                                  style="padding: 10px 30px 40px 30px; margin: 0px; font-size: 15px; line-height: 23px; color: #fff;">
                                  <a href="https://globalshippersrwanda.com/"
                                    style="padding: 10px 20px; color:#ffffff; font-size: 16px; font-family: "Lato"
                                    ,Arial, Helvetica, sans-serif; color:
                                    #ffffff; background-color: #000000;
                                    border-color: #000000; text-decoration:
                                    none; border-radius: 4px;">Visit Website</a>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>

                <tr>
                  <td style="background:#ffffff;">
                    <table width="600">
                      <tr>
                        <td align="center"
                          style="padding: 20px 0px 10px 0; background:#ffffff; border-top: 1px solid #d1d1d1;">
                          <table width="600" align="center" border="0"
                            cellpadding="0" cellspacing="0">
                            <tbody>
                              <tr>
                                <td align="center" valign="top" nowrap
                                  style="margin: 0px; padding: 0; font-size: 16px; font-family: "Lato",
                                  Arial, Helvetica, sans-serif; line-height:
                                  22px;">
                                 
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                      <tr>
                        <td align="center"
                          style="padding: 0px 0px 20px 0; background:#ffffff;">
                          <table width="300" align="center" border="0"
                            cellpadding="0" cellspacing="0">
                            <tbody>
                              <tr>
                                <td align="center" valign="top" nowrap
                                  style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                  Arial, Helvetica, sans-serif;">
                                  <a href="https://globalshippersrwanda.com/privacy"
                                    style="color: #000000; font-weight: normal; font-family: "Lato",
                                    Arial, Helvetica, sans-serif;
                                    text-decoration: none;">
                                    <span style="font-family: "Lato", Arial,
                                      Helvetica, sans-serif; color: #000000;
                                      font-size: 14px; white-space: nowrap;
                                      line-height: 22px;">Privacy Policy</span>
                                  </a>
                                </td>
                                <td align="center" valign="top" nowrap
                                  style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                  Arial, Helvetica, sans-serif;">
                                  <a href ="https://globalshippersrwanda.com/about-us"
                                    style="color: #2e3233; font-weight: normal; font-family: "Lato",
                                    Arial, Helvetica, sans-serif;
                                    text-decoration: none;">
                                    <span style="font-family: "Lato", Arial,
                                      Helvetica, sans-serif; color: #000000;
                                      font-size: 14px; white-space: nowrap;
                                      line-height: 22px;">About Us</span>
                                  </a>
                                </td>
                                <td align="center" valign="top" nowrap
                                  style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                  Arial, Helvetica, sans-serif;">
                                  <a href="https://globalshippersrwanda.com/contact-us"
                                    style="color: #000000; font-weight: normal; font-family: "Lato",
                                    Arial, Helvetica, sans-serif;
                                    text-decoration: none;">
                                    <span style="font-family: "Lato", Arial,
                                      Helvetica, sans-serif; color: #000000;
                                      font-size: 14px; white-space: nowrap;
                                      line-height: 22px;">Contact US</span>
                                  </a>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
          </td>
        </tr>
      </tbody>
    </table>
  </body>
</html>';



        
                        $mail = new PHPMailer(); 
                        $mail->IsSMTP(); 
                        $mail->SMTPAuth = true; 
                        $mail->SMTPSecure = 'tls'; 
                       $mail->Host = "mail.privateemail.com";
                        $mail->Port = 587; 
                        $mail->IsHTML(true);
                        $mail->CharSet = 'UTF-8';
                        //$mail->SMTPDebug = 2; 
                        $mail->Username = EMAIL_SMTP_GOOGLE;
                        $mail->Password = PASSWORD_SMTP_GOOGLE;
                        $mail->SetFrom("services@globalshippersrwanda.com");;
                        $mail->Subject = $assistedsubject;
                        $mail->Body =$html;
                        $mail->AddAddress($assistedto);
                        $mail->SMTPOptions=array('ssl'=>array (
                            'verify_peer'=>false,
                            'verify_peer_name'=>false,
                            'allow_self_signed'=>false
                        ));
                    if(!$mail->Send()){
                        echo $mail->ErrorInfo;
                    }else{
                        return  'Sent';
                    }
        }
        public function assistedadminsendmail($assistedadminto, $assistedadminsubject, $assistedadminmessage) {

            $html = '<!DOCTYPE html>
    <html lang="en-US">
      <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Email Template</title>
        <style type="text/css">
          @media screen and (max-width: 600px),
          screen and (max-device-width: 600px) {
            body {
              margin: 0 !important;
              padding: 0 !important;
            }
          }
          @media screen and (-webkit-min-device-pixel-ratio: 0) and (max-width: 600px) {
            body {
              margin: 0 !important;
              padding: 0 !important;
            }
          }
      a{
      color: #000;
      text-decoration:none;
      }
        </style>
      </head>
      <body style="margin: 0; padding: 0; border: 0;">
        <table width="100%" align="center" cellpadding="0" cellspacing="0"
          border="0" dir="ltr" style="background-color: rgb(255, 255, 255);">
          <tbody>
            <tr>
              <td align="center" valign="top"
                style="margin: 0; padding: 0px 15px 0px;">
                <table width="600" align="center" border="0" cellspacing="0"
                  cellpadding="0" style="width: 600px;">
                  <tbody>
                    <tr>
                      <td align="center" valign="center"
                        style="margin: 0; background-color: #ffffff; background-size: cover; background-repeat: no-repeat; background-position: center center; padding: 30px 15px 40px;">
                        <table align="center" border="0" cellpadding="0"
                          cellspacing="0">
                          <tbody>
                            <tr>
                              <td valign="top" align="center"
                                style="padding: 0px; margin: 0px;">
                                <a href="#"><img src="https://globalshippersrwanda.com/assets/cms/img/logo-black.png" width="100"
                                    style="border: none; font-weight: bold; max-height: 100px; height: auto; line-height: 100%; outline: none; text-decoration: none; text-transform: capitalize; border-width: 0px; border-style: none; border-color: transparent; font-size: 12px; display: block;"></a>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                    <tr> 
                      <td align="center" valign="top"
                        style="margin: 0; padding: 0;">
                        <table width="100%" align="center" border="0"
                          cellpadding="0" cellspacing="0" bgcolor="#ffffff">
                          <tbody>
                           <tr>   
                              <td align="left" valign="top"
                                style="margin: 0px; padding: 30px 30px 10px 30px; background-color: rgb(255, 255,
                                        255); font-size: 16px; font-family: "Lato", Arial, Helvetica,
                                sans-serif; line-height: 1.33;">
                                <span style="font-family: "Lato", Arial, Helvetica,
                                  sans-serif; color: #000000; font-size: 20px;">
                                  <span style="font-weight: 700;"></span>
                                </span>
                              </td>
    
                            </tr>
                            <tr>   
                              <td align="left" valign="top"
                                style="margin: 0px; padding: 30px 30px 10px 30px; background-color: rgb(255, 255,
                                        255); font-size: 16px; font-family: "Lato", Arial, Helvetica,
                                sans-serif; line-height: 1.33;">
                                <span style="font-family: "Lato", Arial, Helvetica,
                                  sans-serif; color: #000000; font-size: 20px;">
                                  <span style="font-weight: 700;">'.$assistedadminmessage['msg'].'</span>
                                </span>
                              </td>
    
                            </tr>
    
                          </tbody>
                        </table>
                        <table align="center" border="0" cellpadding="0"
                          cellspacing="0"
                          style="border-spacing: 0; margin: 0; padding: 0; border-spacing: 0px; -webkit-border-horizontal-spacing: 0px; -webkit-border-vertical-spacing: 0px; width: 100%">
                          <tr>
                            <td style="background: #ffffff;">
                              <table width="600" align="center" border="0"
                                cellpadding="0" cellspacing="0">
                                <tbody>
                                  <tr>
                                    <td valign="top" align="center"
                                      style="padding: 30px 30px 20px 30px; font-family: "Lato"
                                      ,Arial, Helvetica, sans-serif; margin: 0px;
                                      font-size: 40px; color: #000000; font-weight:
                                      bold;">
                                     
                                    </td>
                                  </tr>
                                  <tr>
                                    <td valign="top" align="center"
                                      style="padding: 0px 30px 10px 30px; margin: 0px; font-size: 15px; line-height: 23px; color: #000000;">
                                      <span style="font-family: "Lato" ,Arial,
                                        Helvetica, sans-serif; color: #000000;
                                        font-size: 16px;">
                                       
                                      </span>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td valign="top" align="center"
                                      style="padding: 10px 30px 40px 30px; margin: 0px; font-size: 15px; line-height: 23px; color: #fff;">
                                      <a href="https://globalshippersrwanda.com/"
                                        style="padding: 10px 20px; color:#ffffff; font-size: 16px; font-family: "Lato"
                                        ,Arial, Helvetica, sans-serif; color:
                                        #ffffff; background-color: #000000;
                                        border-color: #000000; text-decoration:
                                        none; border-radius: 4px;">Visit Website</a>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </td>
                          </tr>
                        </table>
                      </td>
                    </tr>
    
                    <tr>
                      <td style="background:#ffffff;">
                        <table width="600">
                          <tr>
                            <td align="center"
                              style="padding: 20px 0px 10px 0; background:#ffffff; border-top: 1px solid #d1d1d1;">
                              <table width="600" align="center" border="0"
                                cellpadding="0" cellspacing="0">
                                <tbody>
                                  <tr>
                                    <td align="center" valign="top" nowrap
                                      style="margin: 0px; padding: 0; font-size: 16px; font-family: "Lato",
                                      Arial, Helvetica, sans-serif; line-height:
                                      22px;">
                                     
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </td>
                          </tr>
                          <tr>
                            <td align="center"
                              style="padding: 0px 0px 20px 0; background:#ffffff;">
                              <table width="300" align="center" border="0"
                                cellpadding="0" cellspacing="0">
                                <tbody>
                                  <tr>
                                    <td align="center" valign="top" nowrap
                                      style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                      Arial, Helvetica, sans-serif;">
                                      <a href="https://globalshippersrwanda.com/privacy"
                                        style="color: #000000; font-weight: normal; font-family: "Lato",
                                        Arial, Helvetica, sans-serif;
                                        text-decoration: none;">
                                        <span style="font-family: "Lato", Arial,
                                          Helvetica, sans-serif; color: #000000;
                                          font-size: 14px; white-space: nowrap;
                                          line-height: 22px;">Privacy Policy</span>
                                      </a>
                                    </td>
                                    <td align="center" valign="top" nowrap
                                      style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                      Arial, Helvetica, sans-serif;">
                                      <a href ="https://globalshippersrwanda.com/about-us"
                                        style="color: #2e3233; font-weight: normal; font-family: "Lato",
                                        Arial, Helvetica, sans-serif;
                                        text-decoration: none;">
                                        <span style="font-family: "Lato", Arial,
                                          Helvetica, sans-serif; color: #000000;
                                          font-size: 14px; white-space: nowrap;
                                          line-height: 22px;">About Us</span>
                                      </a>
                                    </td>
                                    <td align="center" valign="top" nowrap
                                      style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                      Arial, Helvetica, sans-serif;">
                                      <a href="https://globalshippersrwanda.com/contact-us"
                                        style="color: #000000; font-weight: normal; font-family: "Lato",
                                        Arial, Helvetica, sans-serif;
                                        text-decoration: none;">
                                        <span style="font-family: "Lato", Arial,
                                          Helvetica, sans-serif; color: #000000;
                                          font-size: 14px; white-space: nowrap;
                                          line-height: 22px;">Contact US</span>
                                      </a>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>
          </tbody>
        </table>
      </body>
    </html>';
    
    
    
            
                            $mail = new PHPMailer(); 
                            $mail->IsSMTP(); 
                            $mail->SMTPAuth = true; 
                            $mail->SMTPSecure = 'tls'; 
                           $mail->Host = "mail.privateemail.com";
                            $mail->Port = 587; 
                            $mail->IsHTML(true);
                            $mail->CharSet = 'UTF-8';
                            //$mail->SMTPDebug = 2; 
                            $mail->Username = EMAIL_SMTP_GOOGLE;
                            $mail->Password = PASSWORD_SMTP_GOOGLE;
                            $mail->SetFrom("services@globalshippersrwanda.com");;
                            $mail->Subject = $assistedadminsubject;
                            $mail->Body =$html;
                            $mail->AddAddress($assistedadminto);
                            $mail->SMTPOptions=array('ssl'=>array (
                                'verify_peer'=>false,
                                'verify_peer_name'=>false,
                                'allow_self_signed'=>false
                            ));
                        if(!$mail->Send()){
                            echo $mail->ErrorInfo;
                        }else{
                            return  'Sent';
                        }
            }

    public function assisted_payment(){
        $assisted_id = $this->input->post('submit');
        $data = [ 
            'order_id' => $assisted_id,
            'type' => strtolower($this->input->post('type')),
            'status'=> $this->input->post('status'),
            'payment_id' => $this->input->post('payment'),
            'invoiceamt' => $this->input->post('paymentAmt'),
            'date_created' => date('Y-m-d H:i:s')
        ];
        $datetime = strtotime($data['date_created']);
        $convertdate = date("d M,y",$datetime);

        $users = [
          'email' => $this->input->post('email'),
          'phone' => $this->input->post('phone'),
          'fname' => $this->input->post('fname'),
          'lname' => $this->input->post('lname')
      ];
      $adminemail= $this->input->post('adminemail');
        $assistedto = $users['email'];
        $assistedsubject  = 'Confirmation of Payment for Buy for me - '.$assisted_id.'';
        $assistedresult = $this->Admin_model->insert_payment_data($data);
        ($pay->status==1)?'Pending':(($pay->status==2)?'Paid':'Rejected');
        $assistedmessage['msg'] = "Dear ".$users['fname']." ".$users['lname']."</p>
        <p>We are pleased to confirm that we have received details of your payment for your Buy for me with us. Below are the details of your payment:</p>
        <p> Order Id: ".$data['order_id']."</p>
        <p>Order Type: ".$data['type']."</p>
        <p>Payment Id :".$data['payment_id']."</p>
        <p>Invoice: ".$data['invoiceamt']." USD</p>
        <p>Payment Status: ".(($data['status']==1)?'Pending':(($data['status']==2)?'Paid':'Rejected'))."</p>
       <p>Your payment was processed successfully on ".$convertdate." and we have updated your account accordingly. We will start processing your shipment immediately.</p>
        <p>If you have any questions or concerns regarding your shipment, please feel free to contact us. We are always here to help.</p>
        <p>Thank you for choosing Global Shippers Rwanda. We appreciate your business and look forward to serving you better.</p>
        <p>Regards</p>
        <p>The GlobalshippersRwanda Team</p>";

        $assistedadminto = $adminemail;
        $assistedadminsubject  = 'Successful Payment on GlobalshippersRwanda - Buy for me - '.$assisted_id.'';
        $assistedadminmessage['msg'] = "<p>Dear Admin</p>
       <p>We are pleased to confirm that we have received details of your payment for your Buy for me with us. Below are the details of your payment:</p>
        <p> Order Id: ".$data['order_id']."</p>
        <p>Order Type: ".$data['type']."</p>
        <p>Payment Id :".$data['payment_id']."</p>
        <p>Invoice: ".$data['invoiceamt']." USD</p>
        <p>Payment Status: ".(($data['status']==1)?'Pending':(($data['status']==2)?'Paid':'Rejected'))."</p>
        <p>Your payment was processed successfully on ".$convertdate." and we have updated your account accordingly. We will start processing your shipment immediately.</p>
        
        <p>Customer Informtion: </p>
        <p>Name: ".$users['fname']." ".$users['lname']."</p>
         <p>Email: ".$users['email']."</p>
        <p>Contact No : ".$users['phone']."</p>
        <p>Thank you for choosing Global Shippers Rwanda. We appreciate your business and look forward to serving you better.</p>
        <p>Regards</p>
        <p>The GlobalshippersRwanda Team</p>";
        $this->assistedsendmail($assistedto, $assistedsubject, $assistedmessage);
         $this->assistedadminsendmail($assistedadminto, $assistedadminsubject, $assistedadminmessage);
        //echo json_encode($result);
        redirect(base_url().'assisted-order-details/'.$assisted_id,'refresh');
    }

    public function assisted_payment_update_view(){
        $id = $this->uri->segment(3);
        $payment_id = $this->uri->segment(4);
        $total['count']   = $this->Admin_model->count_notification();
        $data['pay_details']  = $this->Admin_model->assisted_update_payment_display($id,$payment_id);
        $data['payupdate'] = $this->Admin_model->payupdate($data['pay_details']->order_id);
        $data['payupdateusers'] = $this->Admin_model->payupdateusers($data['payupdate'][0]->user_id);
        $data['adminemail'] = $this->Gsr->getadminemail();
        // echo "<pre>";
        // print_r($data['payupdateusers']) ;
        // exit;
        $this->load->view('admin/heads',$total);
        $this->load->view('admin/assisted_edit_payment',$data);
        $this->load->view('admin/footer');
    }

    public function assispayupsendmail($assispayupto, $assispayupsubject, $assispayupmessage) {

      $html = '<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Email Template</title>
  <style type="text/css">
    @media screen and (max-width: 600px),
    screen and (max-device-width: 600px) {
      body {
        margin: 0 !important;
        padding: 0 !important;
      }
    }
    @media screen and (-webkit-min-device-pixel-ratio: 0) and (max-width: 600px) {
      body {
        margin: 0 !important;
        padding: 0 !important;
      }
    }
a{
color: #000;
text-decoration:none;
}
  </style>
</head>
<body style="margin: 0; padding: 0; border: 0;">
  <table width="100%" align="center" cellpadding="0" cellspacing="0"
    border="0" dir="ltr" style="background-color: rgb(255, 255, 255);">
    <tbody>
      <tr>
        <td align="center" valign="top"
          style="margin: 0; padding: 0px 15px 0px;">
          <table width="600" align="center" border="0" cellspacing="0"
            cellpadding="0" style="width: 600px;">
            <tbody>
              <tr>
                <td align="center" valign="center"
                  style="margin: 0; background-color: #ffffff; background-size: cover; background-repeat: no-repeat; background-position: center center; padding: 30px 15px 40px;">
                  <table align="center" border="0" cellpadding="0"
                    cellspacing="0">
                    <tbody>
                      <tr>
                        <td valign="top" align="center"
                          style="padding: 0px; margin: 0px;">
                          <a href="#"><img src="https://globalshippersrwanda.com/assets/cms/img/logo-black.png" width="100"
                              style="border: none; font-weight: bold; max-height: 100px; height: auto; line-height: 100%; outline: none; text-decoration: none; text-transform: capitalize; border-width: 0px; border-style: none; border-color: transparent; font-size: 12px; display: block;"></a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </td>
              </tr>
              <tr> 
                <td align="center" valign="top"
                  style="margin: 0; padding: 0;">
                  <table width="100%" align="center" border="0"
                    cellpadding="0" cellspacing="0" bgcolor="#ffffff">
                    <tbody>
                     <tr>   
                        <td align="left" valign="top"
                          style="margin: 0px; padding: 30px 30px 10px 30px; background-color: rgb(255, 255,
                255); font-size: 16px; font-family: "Lato", Arial, Helvetica,
                          sans-serif; line-height: 1.33;">
                          <span style="font-family: "Lato", Arial, Helvetica,
                            sans-serif; color: #000000; font-size: 20px;">
                            <span style="font-weight: 700;"></span>
                          </span>
                        </td>

                      </tr>
                      <tr>   
                        <td align="left" valign="top"
                          style="margin: 0px; padding: 30px 30px 10px 30px; background-color: rgb(255, 255,
                255); font-size: 16px; font-family: "Lato", Arial, Helvetica,
                          sans-serif; line-height: 1.33;">
                          <span style="font-family: "Lato", Arial, Helvetica,
                            sans-serif; color: #000000; font-size: 20px;">
                            <span style="font-weight: 700;">'.$assispayupmessage['msg'].'</span>
                          </span>
                        </td>

                      </tr>

                    </tbody>
                  </table>
                  <table align="center" border="0" cellpadding="0"
                    cellspacing="0"
                    style="border-spacing: 0; margin: 0; padding: 0; border-spacing: 0px; -webkit-border-horizontal-spacing: 0px; -webkit-border-vertical-spacing: 0px; width: 100%">
                    <tr>
                      <td style="background: #ffffff;">
                        <table width="600" align="center" border="0"
                          cellpadding="0" cellspacing="0">
                          <tbody>
                            <tr>
                              <td valign="top" align="center"
                                style="padding: 30px 30px 20px 30px; font-family: "Lato"
                                ,Arial, Helvetica, sans-serif; margin: 0px;
                                font-size: 40px; color: #000000; font-weight:
                                bold;">
                               
                              </td>
                            </tr>
                            <tr>
                              <td valign="top" align="center"
                                style="padding: 0px 30px 10px 30px; margin: 0px; font-size: 15px; line-height: 23px; color: #000000;">
                                <span style="font-family: "Lato" ,Arial,
                                  Helvetica, sans-serif; color: #000000;
                                  font-size: 16px;">
                                 
                                </span>
                              </td>
                            </tr>
                            <tr>
                              <td valign="top" align="center"
                                style="padding: 10px 30px 40px 30px; margin: 0px; font-size: 15px; line-height: 23px; color: #fff;">
                                <a href="https://globalshippersrwanda.com/"
                                  style="padding: 10px 20px; color:#ffffff; font-size: 16px; font-family: "Lato"
                                  ,Arial, Helvetica, sans-serif; color:
                                  #ffffff; background-color: #000000;
                                  border-color: #000000; text-decoration:
                                  none; border-radius: 4px;">Visit Website</a>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>

              <tr>
                <td style="background:#ffffff;">
                  <table width="600">
                    <tr>
                      <td align="center"
                        style="padding: 20px 0px 10px 0; background:#ffffff; border-top: 1px solid #d1d1d1;">
                        <table width="600" align="center" border="0"
                          cellpadding="0" cellspacing="0">
                          <tbody>
                            <tr>
                              <td align="center" valign="top" nowrap
                                style="margin: 0px; padding: 0; font-size: 16px; font-family: "Lato",
                                Arial, Helvetica, sans-serif; line-height:
                                22px;">
                               
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                    <tr>
                      <td align="center"
                        style="padding: 0px 0px 20px 0; background:#ffffff;">
                        <table width="300" align="center" border="0"
                          cellpadding="0" cellspacing="0">
                          <tbody>
                            <tr>
                              <td align="center" valign="top" nowrap
                                style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                Arial, Helvetica, sans-serif;">
                                <a href="https://globalshippersrwanda.com/privacy"
                                  style="color: #000000; font-weight: normal; font-family: "Lato",
                                  Arial, Helvetica, sans-serif;
                                  text-decoration: none;">
                                  <span style="font-family: "Lato", Arial,
                                    Helvetica, sans-serif; color: #000000;
                                    font-size: 14px; white-space: nowrap;
                                    line-height: 22px;">Privacy Policy</span>
                                </a>
                              </td>
                              <td align="center" valign="top" nowrap
                                style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                Arial, Helvetica, sans-serif;">
                                <a href ="https://globalshippersrwanda.com/about-us"
                                  style="color: #2e3233; font-weight: normal; font-family: "Lato",
                                  Arial, Helvetica, sans-serif;
                                  text-decoration: none;">
                                  <span style="font-family: "Lato", Arial,
                                    Helvetica, sans-serif; color: #000000;
                                    font-size: 14px; white-space: nowrap;
                                    line-height: 22px;">About Us</span>
                                </a>
                              </td>
                              <td align="center" valign="top" nowrap
                                style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                Arial, Helvetica, sans-serif;">
                                <a href="https://globalshippersrwanda.com/contact-us"
                                  style="color: #000000; font-weight: normal; font-family: "Lato",
                                  Arial, Helvetica, sans-serif;
                                  text-decoration: none;">
                                  <span style="font-family: "Lato", Arial,
                                    Helvetica, sans-serif; color: #000000;
                                    font-size: 14px; white-space: nowrap;
                                    line-height: 22px;">Contact US</span>
                                </a>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
            </tbody>
          </table>
        </td>
      </tr>
    </tbody>
  </table>
</body>
</html>';



      
                      $mail = new PHPMailer(); 
                      $mail->IsSMTP(); 
                      $mail->SMTPAuth = true; 
                      $mail->SMTPSecure = 'tls'; 
                     $mail->Host = "mail.privateemail.com";
                      $mail->Port = 587; 
                      $mail->IsHTML(true);
                      $mail->CharSet = 'UTF-8';
                      //$mail->SMTPDebug = 2; 
                      $mail->Username = EMAIL_SMTP_GOOGLE;
                      $mail->Password = PASSWORD_SMTP_GOOGLE;
                      $mail->SetFrom("services@globalshippersrwanda.com");;
                      $mail->Subject = $assispayupsubject;
                      $mail->Body =$html;
                      $mail->AddAddress($assispayupto);
                      $mail->SMTPOptions=array('ssl'=>array (
                          'verify_peer'=>false,
                          'verify_peer_name'=>false,
                          'allow_self_signed'=>false
                      ));
                  if(!$mail->Send()){
                      echo $mail->ErrorInfo;
                  }else{
                      return  'Sent';
                  }
      }
      public function assispayupadminsendmail($assispayupadminto, $assispayupadminsubject, $assispayupadminmessage) {

          $html = '<!DOCTYPE html>
  <html lang="en-US">
    <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <title>Email Template</title>
      <style type="text/css">
        @media screen and (max-width: 600px),
        screen and (max-device-width: 600px) {
          body {
            margin: 0 !important;
            padding: 0 !important;
          }
        }
        @media screen and (-webkit-min-device-pixel-ratio: 0) and (max-width: 600px) {
          body {
            margin: 0 !important;
            padding: 0 !important;
          }
        }
    a{
    color: #000;
    text-decoration:none;
    }
      </style>
    </head>
    <body style="margin: 0; padding: 0; border: 0;">
      <table width="100%" align="center" cellpadding="0" cellspacing="0"
        border="0" dir="ltr" style="background-color: rgb(255, 255, 255);">
        <tbody>
          <tr>
            <td align="center" valign="top"
              style="margin: 0; padding: 0px 15px 0px;">
              <table width="600" align="center" border="0" cellspacing="0"
                cellpadding="0" style="width: 600px;">
                <tbody>
                  <tr>
                    <td align="center" valign="center"
                      style="margin: 0; background-color: #ffffff; background-size: cover; background-repeat: no-repeat; background-position: center center; padding: 30px 15px 40px;">
                      <table align="center" border="0" cellpadding="0"
                        cellspacing="0">
                        <tbody>
                          <tr>
                            <td valign="top" align="center"
                              style="padding: 0px; margin: 0px;">
                              <a href="#"><img src="https://globalshippersrwanda.com/assets/cms/img/logo-black.png" width="100"
                                  style="border: none; font-weight: bold; max-height: 100px; height: auto; line-height: 100%; outline: none; text-decoration: none; text-transform: capitalize; border-width: 0px; border-style: none; border-color: transparent; font-size: 12px; display: block;"></a>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                  <tr> 
                    <td align="center" valign="top"
                      style="margin: 0; padding: 0;">
                      <table width="100%" align="center" border="0"
                        cellpadding="0" cellspacing="0" bgcolor="#ffffff">
                        <tbody>
                         <tr>   
                            <td align="left" valign="top"
                              style="margin: 0px; padding: 30px 30px 10px 30px; background-color: rgb(255, 255,
                                      255); font-size: 16px; font-family: "Lato", Arial, Helvetica,
                              sans-serif; line-height: 1.33;">
                              <span style="font-family: "Lato", Arial, Helvetica,
                                sans-serif; color: #000000; font-size: 20px;">
                                <span style="font-weight: 700;"></span>
                              </span>
                            </td>
  
                          </tr>
                          <tr>   
                            <td align="left" valign="top"
                              style="margin: 0px; padding: 30px 30px 10px 30px; background-color: rgb(255, 255,
                                      255); font-size: 16px; font-family: "Lato", Arial, Helvetica,
                              sans-serif; line-height: 1.33;">
                              <span style="font-family: "Lato", Arial, Helvetica,
                                sans-serif; color: #000000; font-size: 20px;">
                                <span style="font-weight: 700;">'.$assispayupadminmessage['msg'].'</span>
                              </span>
                            </td>
  
                          </tr>
  
                        </tbody>
                      </table>
                      <table align="center" border="0" cellpadding="0"
                        cellspacing="0"
                        style="border-spacing: 0; margin: 0; padding: 0; border-spacing: 0px; -webkit-border-horizontal-spacing: 0px; -webkit-border-vertical-spacing: 0px; width: 100%">
                        <tr>
                          <td style="background: #ffffff;">
                            <table width="600" align="center" border="0"
                              cellpadding="0" cellspacing="0">
                              <tbody>
                                <tr>
                                  <td valign="top" align="center"
                                    style="padding: 30px 30px 20px 30px; font-family: "Lato"
                                    ,Arial, Helvetica, sans-serif; margin: 0px;
                                    font-size: 40px; color: #000000; font-weight:
                                    bold;">
                                   
                                  </td>
                                </tr>
                                <tr>
                                  <td valign="top" align="center"
                                    style="padding: 0px 30px 10px 30px; margin: 0px; font-size: 15px; line-height: 23px; color: #000000;">
                                    <span style="font-family: "Lato" ,Arial,
                                      Helvetica, sans-serif; color: #000000;
                                      font-size: 16px;">
                                     
                                    </span>
                                  </td>
                                </tr>
                                <tr>
                                  <td valign="top" align="center"
                                    style="padding: 10px 30px 40px 30px; margin: 0px; font-size: 15px; line-height: 23px; color: #fff;">
                                    <a href="https://globalshippersrwanda.com/"
                                      style="padding: 10px 20px; color:#ffffff; font-size: 16px; font-family: "Lato"
                                      ,Arial, Helvetica, sans-serif; color:
                                      #ffffff; background-color: #000000;
                                      border-color: #000000; text-decoration:
                                      none; border-radius: 4px;">Visit Website</a>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
  
                  <tr>
                    <td style="background:#ffffff;">
                      <table width="600">
                        <tr>
                          <td align="center"
                            style="padding: 20px 0px 10px 0; background:#ffffff; border-top: 1px solid #d1d1d1;">
                            <table width="600" align="center" border="0"
                              cellpadding="0" cellspacing="0">
                              <tbody>
                                <tr>
                                  <td align="center" valign="top" nowrap
                                    style="margin: 0px; padding: 0; font-size: 16px; font-family: "Lato",
                                    Arial, Helvetica, sans-serif; line-height:
                                    22px;">
                                   
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                        </tr>
                        <tr>
                          <td align="center"
                            style="padding: 0px 0px 20px 0; background:#ffffff;">
                            <table width="300" align="center" border="0"
                              cellpadding="0" cellspacing="0">
                              <tbody>
                                <tr>
                                  <td align="center" valign="top" nowrap
                                    style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                    Arial, Helvetica, sans-serif;">
                                    <a href="https://globalshippersrwanda.com/privacy"
                                      style="color: #000000; font-weight: normal; font-family: "Lato",
                                      Arial, Helvetica, sans-serif;
                                      text-decoration: none;">
                                      <span style="font-family: "Lato", Arial,
                                        Helvetica, sans-serif; color: #000000;
                                        font-size: 14px; white-space: nowrap;
                                        line-height: 22px;">Privacy Policy</span>
                                    </a>
                                  </td>
                                  <td align="center" valign="top" nowrap
                                    style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                    Arial, Helvetica, sans-serif;">
                                    <a href ="https://globalshippersrwanda.com/about-us"
                                      style="color: #2e3233; font-weight: normal; font-family: "Lato",
                                      Arial, Helvetica, sans-serif;
                                      text-decoration: none;">
                                      <span style="font-family: "Lato", Arial,
                                        Helvetica, sans-serif; color: #000000;
                                        font-size: 14px; white-space: nowrap;
                                        line-height: 22px;">About Us</span>
                                    </a>
                                  </td>
                                  <td align="center" valign="top" nowrap
                                    style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                    Arial, Helvetica, sans-serif;">
                                    <a href="https://globalshippersrwanda.com/contact-us"
                                      style="color: #000000; font-weight: normal; font-family: "Lato",
                                      Arial, Helvetica, sans-serif;
                                      text-decoration: none;">
                                      <span style="font-family: "Lato", Arial,
                                        Helvetica, sans-serif; color: #000000;
                                        font-size: 14px; white-space: nowrap;
                                        line-height: 22px;">Contact US</span>
                                    </a>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                </tbody>
              </table>
            </td>
          </tr>
        </tbody>
      </table>
    </body>
  </html>';
  
  
  
          
                          $mail = new PHPMailer(); 
                          $mail->IsSMTP(); 
                          $mail->SMTPAuth = true; 
                          $mail->SMTPSecure = 'tls'; 
                         $mail->Host = "mail.privateemail.com";
                          $mail->Port = 587; 
                          $mail->IsHTML(true);
                          $mail->CharSet = 'UTF-8';
                          //$mail->SMTPDebug = 2; 
                          $mail->Username = EMAIL_SMTP_GOOGLE;
                          $mail->Password = PASSWORD_SMTP_GOOGLE;
                          $mail->SetFrom("services@globalshippersrwanda.com");;
                          $mail->Subject = $assispayupadminsubject;
                          $mail->Body =$html;
                          $mail->AddAddress($assispayupadminto);
                          $mail->SMTPOptions=array('ssl'=>array (
                              'verify_peer'=>false,
                              'verify_peer_name'=>false,
                              'allow_self_signed'=>false
                          ));
                      if(!$mail->Send()){
                          echo $mail->ErrorInfo;
                      }else{
                          return  'Sent';
                      }
          }
    public function assisted_update_payment(){
        $orderid = $this->input->post('id');
        $id = $this->input->post('payid');
        $pay = [
            'payment_id' => $this->input->post('payment'),
            'status'=> $this->input->post('status'),
            'invoiceamt'=> $this->input->post('invoiceAmt'),
            'update_date' => date('Y-m-d H:i:s')
        ];
        $datetime = strtotime($data['date_created']);
        $convertdate = date("d M,y",$datetime);

        $users = [
          'email' => $this->input->post('email'),
          'phone' => $this->input->post('phone'),
          'fname' => $this->input->post('fname'),
          'lname' => $this->input->post('lname')
      ];
      $adminemail = $this->input->post('adminemail');
        $payment = $this->Admin_model->assisted_update_payment($orderid,$pay,$id);
        $assispayupto = $users['email'];
        $assispayupsubject  = 'Update on Buy for me Payment Details  '.$orderid.'';
        $assispayupmessage['msg'] = "<p>Dear ".$users['fname']." ".$users['lname']."</p>
        <p>We hope this email finds you well. We are pleased to inform you that we have updated the payment details for your Buy for me with us.</p>
        <p>Payment Id: ".$pay['payment_id']."</p>
        <p>Status: ".(($pay['status']==1)?'Pending':(($pay['status']==2)?'Paid':'Rejected'))."</p>
        <p>Invoice :".$pay['invoiceamt']." USD</p>
        <p>Please note that this payment update may take some time to reflect in our system, and you may receive a separate notification once the payment is fully processed.</p>
        <p>If you have any questions or concerns regarding your payment, please do not hesitate to reach out to our customer service team. We are always here to assist you.</p>
        <p>Thank you for choosing Global Shippers Rwanda for your logistics needs.</p>
        <p>Regards</p>
        <p>The GlobalshippersRwanda Team</p>";

        $assispayupadminto = $adminemail;
        $assispayupadminsubject  = 'Update on Buy for me Payment Details '.$order_id.'';
        $assispayupadminmessage['msg'] = "<p>Dear Admin</p>
       <p>We hope this email finds you well. We are pleased to inform you that we have updated the payment details for your Buy for me with us.</p>
       <p>Payment Id: ".$pay['payment_id']."</p>
        <p>Status: ".(($pay['status']==1)?'Pending':(($pay['status']==2)?'Paid':'Rejected'))."</p>
        <p>Invoice :".$pay['invoiceamt']." USD</p>
        <p>Please note that this payment update may take some time to reflect in our system, and you may receive a separate notification once the payment is fully processed.</p>
        
        <p>Customer Information</p>
        <p>Name: ".$users['fname']." ".$users['lname']."</p>
         <p>Email: ".$users['email']."</p>
          <p>Contact No: ".$users['phone']."</p>
          <p>Thank you for choosing Global Shippers Rwanda for your logistics needs.</p>
        <p>Regards</p>
        <p>The GlobalshippersRwanda Team</p>";
        $this->assispayupsendmail($assispayupto, $assispayupsubject, $assispayupmessage);
        $this->assispayupadminsendmail($assispayupadminto, $assispayupadminsubject, $assispayupadminmessage);
        //echo json_encode($payment);
        if($payment==TRUE){
            redirect(base_url().'assisted-order-details/'.$orderid);
        }
        else{
           redirect(base_url().'assisted-order-details/'.$orderid);
        }
    }
    public function assisted_delete_payment(){
        $orderid = $this->uri->segment(3);
        $payid = $this->uri->segment(4);
        $result = $this->Admin_model->assisted_delete_payment($orderid,$payid);
        echo json_encode($resutl);
        if($result==TRUE){
            redirect(base_url().'assisted-order-details/'.$orderid);
        }
        else{
            redirect(base_url().'assisted-order-details/'.$orderid);
        }
    }

    public function assisshipmentsendmail($assisshipmentto, $assisshipmentsubject, $assisshipmentmessage) {

        $html = '<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Email Template</title>
    <style type="text/css">
      @media screen and (max-width: 600px),
      screen and (max-device-width: 600px) {
        body {
          margin: 0 !important;
          padding: 0 !important;
        }
      }
      @media screen and (-webkit-min-device-pixel-ratio: 0) and (max-width: 600px) {
        body {
          margin: 0 !important;
          padding: 0 !important;
        }
      }
  a{
  color: #000;
  text-decoration:none;
  }
    </style>
  </head>
  <body style="margin: 0; padding: 0; border: 0;">
    <table width="100%" align="center" cellpadding="0" cellspacing="0"
      border="0" dir="ltr" style="background-color: rgb(255, 255, 255);">
      <tbody>
        <tr>
          <td align="center" valign="top"
            style="margin: 0; padding: 0px 15px 0px;">
            <table width="600" align="center" border="0" cellspacing="0"
              cellpadding="0" style="width: 600px;">
              <tbody>
                <tr>
                  <td align="center" valign="center"
                    style="margin: 0; background-color: #ffffff; background-size: cover; background-repeat: no-repeat; background-position: center center; padding: 30px 15px 40px;">
                    <table align="center" border="0" cellpadding="0"
                      cellspacing="0">
                      <tbody>
                        <tr>
                          <td valign="top" align="center"
                            style="padding: 0px; margin: 0px;">
                            <a href="#"><img src="https://globalshippersrwanda.com/assets/cms/img/logo-black.png" width="100"
                                style="border: none; font-weight: bold; max-height: 100px; height: auto; line-height: 100%; outline: none; text-decoration: none; text-transform: capitalize; border-width: 0px; border-style: none; border-color: transparent; font-size: 12px; display: block;"></a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
                <tr> 
                  <td align="center" valign="top"
                    style="margin: 0; padding: 0;">
                    <table width="100%" align="center" border="0"
                      cellpadding="0" cellspacing="0" bgcolor="#ffffff">
                      <tbody>
                       <tr>   
                          <td align="left" valign="top"
                            style="margin: 0px; padding: 30px 30px 10px 30px; background-color: rgb(255, 255,
									255); font-size: 16px; font-family: "Lato", Arial, Helvetica,
                            sans-serif; line-height: 1.33;">
                            <span style="font-family: "Lato", Arial, Helvetica,
                              sans-serif; color: #000000; font-size: 20px;">
                              <span style="font-weight: 700;"></span>
                            </span>
                          </td>

                        </tr>
                        <tr>   
                          <td align="left" valign="top"
                            style="margin: 0px; padding: 30px 30px 10px 30px; background-color: rgb(255, 255,
									255); font-size: 16px; font-family: "Lato", Arial, Helvetica,
                            sans-serif; line-height: 1.33;">
                            <span style="font-family: "Lato", Arial, Helvetica,
                              sans-serif; color: #000000; font-size: 20px;">
                              <span style="font-weight: 700;">'.$assisshipmentmessage['msg'].'</span>
                            </span>
                          </td>

                        </tr>

                      </tbody>
                    </table>
                    <table align="center" border="0" cellpadding="0"
                      cellspacing="0"
                      style="border-spacing: 0; margin: 0; padding: 0; border-spacing: 0px; -webkit-border-horizontal-spacing: 0px; -webkit-border-vertical-spacing: 0px; width: 100%">
                      <tr>
                        <td style="background: #ffffff;">
                          <table width="600" align="center" border="0"
                            cellpadding="0" cellspacing="0">
                            <tbody>
                              <tr>
                                <td valign="top" align="center"
                                  style="padding: 30px 30px 20px 30px; font-family: "Lato"
                                  ,Arial, Helvetica, sans-serif; margin: 0px;
                                  font-size: 40px; color: #000000; font-weight:
                                  bold;">
                                 
                                </td>
                              </tr>
                              <tr>
                                <td valign="top" align="center"
                                  style="padding: 0px 30px 10px 30px; margin: 0px; font-size: 15px; line-height: 23px; color: #000000;">
                                  <span style="font-family: "Lato" ,Arial,
                                    Helvetica, sans-serif; color: #000000;
                                    font-size: 16px;">
                                   
                                  </span>
                                </td>
                              </tr>
                              <tr>
                                <td valign="top" align="center"
                                  style="padding: 10px 30px 40px 30px; margin: 0px; font-size: 15px; line-height: 23px; color: #fff;">
                                  <a href="https://globalshippersrwanda.com/"
                                    style="padding: 10px 20px; color:#ffffff; font-size: 16px; font-family: "Lato"
                                    ,Arial, Helvetica, sans-serif; color:
                                    #ffffff; background-color: #000000;
                                    border-color: #000000; text-decoration:
                                    none; border-radius: 4px;">Visit Website</a>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>

                <tr>
                  <td style="background:#ffffff;">
                    <table width="600">
                      <tr>
                        <td align="center"
                          style="padding: 20px 0px 10px 0; background:#ffffff; border-top: 1px solid #d1d1d1;">
                          <table width="600" align="center" border="0"
                            cellpadding="0" cellspacing="0">
                            <tbody>
                              <tr>
                                <td align="center" valign="top" nowrap
                                  style="margin: 0px; padding: 0; font-size: 16px; font-family: "Lato",
                                  Arial, Helvetica, sans-serif; line-height:
                                  22px;">
                                 
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                      <tr>
                        <td align="center"
                          style="padding: 0px 0px 20px 0; background:#ffffff;">
                          <table width="300" align="center" border="0"
                            cellpadding="0" cellspacing="0">
                            <tbody>
                              <tr>
                                <td align="center" valign="top" nowrap
                                  style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                  Arial, Helvetica, sans-serif;">
                                  <a href="https://globalshippersrwanda.com/privacy"
                                    style="color: #000000; font-weight: normal; font-family: "Lato",
                                    Arial, Helvetica, sans-serif;
                                    text-decoration: none;">
                                    <span style="font-family: "Lato", Arial,
                                      Helvetica, sans-serif; color: #000000;
                                      font-size: 14px; white-space: nowrap;
                                      line-height: 22px;">Privacy Policy</span>
                                  </a>
                                </td>
                                <td align="center" valign="top" nowrap
                                  style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                  Arial, Helvetica, sans-serif;">
                                  <a href ="https://globalshippersrwanda.com/about-us"
                                    style="color: #2e3233; font-weight: normal; font-family: "Lato",
                                    Arial, Helvetica, sans-serif;
                                    text-decoration: none;">
                                    <span style="font-family: "Lato", Arial,
                                      Helvetica, sans-serif; color: #000000;
                                      font-size: 14px; white-space: nowrap;
                                      line-height: 22px;">About Us</span>
                                  </a>
                                </td>
                                <td align="center" valign="top" nowrap
                                  style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                  Arial, Helvetica, sans-serif;">
                                  <a href="https://globalshippersrwanda.com/contact-us"
                                    style="color: #000000; font-weight: normal; font-family: "Lato",
                                    Arial, Helvetica, sans-serif;
                                    text-decoration: none;">
                                    <span style="font-family: "Lato", Arial,
                                      Helvetica, sans-serif; color: #000000;
                                      font-size: 14px; white-space: nowrap;
                                      line-height: 22px;">Contact US</span>
                                  </a>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
          </td>
        </tr>
      </tbody>
    </table>
  </body>
</html>';



        
                        $mail = new PHPMailer(); 
                        $mail->IsSMTP(); 
                        $mail->SMTPAuth = true; 
                        $mail->SMTPSecure = 'tls'; 
                       $mail->Host = "mail.privateemail.com";
                        $mail->Port = 587; 
                        $mail->IsHTML(true);
                        $mail->CharSet = 'UTF-8';
                        //$mail->SMTPDebug = 2; 
                        $mail->Username = EMAIL_SMTP_GOOGLE;
                        $mail->Password = PASSWORD_SMTP_GOOGLE;
                        $mail->SetFrom("services@globalshippersrwanda.com");;
                        $mail->Subject = $assisshipmentsubject;
                        $mail->Body =$html;
                        $mail->AddAddress($assisshipmentto);
                        $mail->SMTPOptions=array('ssl'=>array (
                            'verify_peer'=>false,
                            'verify_peer_name'=>false,
                            'allow_self_signed'=>false
                        ));
                    if(!$mail->Send()){
                        echo $mail->ErrorInfo;
                    }else{
                        return  'Sent';
                    }
        }
        public function assisshipmentadminsendmail($assisshipmentadminto, $assisshipmentadminsubject, $assisshipmentadminmessage) {

            $html = '<!DOCTYPE html>
    <html lang="en-US">
      <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Email Template</title>
        <style type="text/css">
          @media screen and (max-width: 600px),
          screen and (max-device-width: 600px) {
            body {
              margin: 0 !important;
              padding: 0 !important;
            }
          }
          @media screen and (-webkit-min-device-pixel-ratio: 0) and (max-width: 600px) {
            body {
              margin: 0 !important;
              padding: 0 !important;
            }
          }
      a{
      color: #000;
      text-decoration:none;
      }
        </style>
      </head>
      <body style="margin: 0; padding: 0; border: 0;">
        <table width="100%" align="center" cellpadding="0" cellspacing="0"
          border="0" dir="ltr" style="background-color: rgb(255, 255, 255);">
          <tbody>
            <tr>
              <td align="center" valign="top"
                style="margin: 0; padding: 0px 15px 0px;">
                <table width="600" align="center" border="0" cellspacing="0"
                  cellpadding="0" style="width: 600px;">
                  <tbody>
                    <tr>
                      <td align="center" valign="center"
                        style="margin: 0; background-color: #ffffff; background-size: cover; background-repeat: no-repeat; background-position: center center; padding: 30px 15px 40px;">
                        <table align="center" border="0" cellpadding="0"
                          cellspacing="0">
                          <tbody>
                            <tr>
                              <td valign="top" align="center"
                                style="padding: 0px; margin: 0px;">
                                <a href="#"><img src="https://globalshippersrwanda.com/assets/cms/img/logo-black.png" width="100"
                                    style="border: none; font-weight: bold; max-height: 100px; height: auto; line-height: 100%; outline: none; text-decoration: none; text-transform: capitalize; border-width: 0px; border-style: none; border-color: transparent; font-size: 12px; display: block;"></a>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                    <tr> 
                      <td align="center" valign="top"
                        style="margin: 0; padding: 0;">
                        <table width="100%" align="center" border="0"
                          cellpadding="0" cellspacing="0" bgcolor="#ffffff">
                          <tbody>
                           <tr>   
                              <td align="left" valign="top"
                                style="margin: 0px; padding: 30px 30px 10px 30px; background-color: rgb(255, 255,
                                        255); font-size: 16px; font-family: "Lato", Arial, Helvetica,
                                sans-serif; line-height: 1.33;">
                                <span style="font-family: "Lato", Arial, Helvetica,
                                  sans-serif; color: #000000; font-size: 20px;">
                                  <span style="font-weight: 700;"></span>
                                </span>
                              </td>
    
                            </tr>
                            <tr>   
                              <td align="left" valign="top"
                                style="margin: 0px; padding: 30px 30px 10px 30px; background-color: rgb(255, 255,
                                        255); font-size: 16px; font-family: "Lato", Arial, Helvetica,
                                sans-serif; line-height: 1.33;">
                                <span style="font-family: "Lato", Arial, Helvetica,
                                  sans-serif; color: #000000; font-size: 20px;">
                                  <span style="font-weight: 700;">'.$assisshipmentadminmessage['msg'].'</span>
                                </span>
                              </td>
    
                            </tr>
    
                          </tbody>
                        </table>
                        <table align="center" border="0" cellpadding="0"
                          cellspacing="0"
                          style="border-spacing: 0; margin: 0; padding: 0; border-spacing: 0px; -webkit-border-horizontal-spacing: 0px; -webkit-border-vertical-spacing: 0px; width: 100%">
                          <tr>
                            <td style="background: #ffffff;">
                              <table width="600" align="center" border="0"
                                cellpadding="0" cellspacing="0">
                                <tbody>
                                  <tr>
                                    <td valign="top" align="center"
                                      style="padding: 30px 30px 20px 30px; font-family: "Lato"
                                      ,Arial, Helvetica, sans-serif; margin: 0px;
                                      font-size: 40px; color: #000000; font-weight:
                                      bold;">
                                     
                                    </td>
                                  </tr>
                                  <tr>
                                    <td valign="top" align="center"
                                      style="padding: 0px 30px 10px 30px; margin: 0px; font-size: 15px; line-height: 23px; color: #000000;">
                                      <span style="font-family: "Lato" ,Arial,
                                        Helvetica, sans-serif; color: #000000;
                                        font-size: 16px;">
                                       
                                      </span>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td valign="top" align="center"
                                      style="padding: 10px 30px 40px 30px; margin: 0px; font-size: 15px; line-height: 23px; color: #fff;">
                                      <a href="https://globalshippersrwanda.com/"
                                        style="padding: 10px 20px; color:#ffffff; font-size: 16px; font-family: "Lato"
                                        ,Arial, Helvetica, sans-serif; color:
                                        #ffffff; background-color: #000000;
                                        border-color: #000000; text-decoration:
                                        none; border-radius: 4px;">Visit Website</a>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </td>
                          </tr>
                        </table>
                      </td>
                    </tr>
    
                    <tr>
                      <td style="background:#ffffff;">
                        <table width="600">
                          <tr>
                            <td align="center"
                              style="padding: 20px 0px 10px 0; background:#ffffff; border-top: 1px solid #d1d1d1;">
                              <table width="600" align="center" border="0"
                                cellpadding="0" cellspacing="0">
                                <tbody>
                                  <tr>
                                    <td align="center" valign="top" nowrap
                                      style="margin: 0px; padding: 0; font-size: 16px; font-family: "Lato",
                                      Arial, Helvetica, sans-serif; line-height:
                                      22px;">
                                     
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </td>
                          </tr>
                          <tr>
                            <td align="center"
                              style="padding: 0px 0px 20px 0; background:#ffffff;">
                              <table width="300" align="center" border="0"
                                cellpadding="0" cellspacing="0">
                                <tbody>
                                  <tr>
                                    <td align="center" valign="top" nowrap
                                      style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                      Arial, Helvetica, sans-serif;">
                                      <a href="https://globalshippersrwanda.com/privacy"
                                        style="color: #000000; font-weight: normal; font-family: "Lato",
                                        Arial, Helvetica, sans-serif;
                                        text-decoration: none;">
                                        <span style="font-family: "Lato", Arial,
                                          Helvetica, sans-serif; color: #000000;
                                          font-size: 14px; white-space: nowrap;
                                          line-height: 22px;">Privacy Policy</span>
                                      </a>
                                    </td>
                                    <td align="center" valign="top" nowrap
                                      style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                      Arial, Helvetica, sans-serif;">
                                      <a href ="https://globalshippersrwanda.com/about-us"
                                        style="color: #2e3233; font-weight: normal; font-family: "Lato",
                                        Arial, Helvetica, sans-serif;
                                        text-decoration: none;">
                                        <span style="font-family: "Lato", Arial,
                                          Helvetica, sans-serif; color: #000000;
                                          font-size: 14px; white-space: nowrap;
                                          line-height: 22px;">About Us</span>
                                      </a>
                                    </td>
                                    <td align="center" valign="top" nowrap
                                      style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                      Arial, Helvetica, sans-serif;">
                                      <a href="https://globalshippersrwanda.com/contact-us"
                                        style="color: #000000; font-weight: normal; font-family: "Lato",
                                        Arial, Helvetica, sans-serif;
                                        text-decoration: none;">
                                        <span style="font-family: "Lato", Arial,
                                          Helvetica, sans-serif; color: #000000;
                                          font-size: 14px; white-space: nowrap;
                                          line-height: 22px;">Contact US</span>
                                      </a>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>
          </tbody>
        </table>
      </body>
    </html>';
    
    
    
            
                            $mail = new PHPMailer(); 
                            $mail->IsSMTP(); 
                            $mail->SMTPAuth = true; 
                            $mail->SMTPSecure = 'tls'; 
                           $mail->Host = "mail.privateemail.com";
                            $mail->Port = 587; 
                            $mail->IsHTML(true);
                            $mail->CharSet = 'UTF-8';
                            //$mail->SMTPDebug = 2; 
                            $mail->Username = EMAIL_SMTP_GOOGLE;
                            $mail->Password = PASSWORD_SMTP_GOOGLE;
                            $mail->SetFrom("services@globalshippersrwanda.com");;
                            $mail->Subject = $assisshipmentadminsubject;
                            $mail->Body =$html;
                            $mail->AddAddress($assisshipmentadminto);
                            $mail->SMTPOptions=array('ssl'=>array (
                                'verify_peer'=>false,
                                'verify_peer_name'=>false,
                                'allow_self_signed'=>false
                            ));
                        if(!$mail->Send()){
                            echo $mail->ErrorInfo;
                        }else{
                            return  'Sent';
                        }
            }

    public function assisted_shipment(){
        $assisted_id = $this->input->post('submit');
        $data = [
            'order_id' => $assisted_id,
            'shipping_carrier' => $this->input->post('shipping_carrier'),
            'tracking_number'=> $this->input->post('tracking_number'),
            'tracking_url' => $this->input->post('tracking_url'),
            'shipping' => strtolower($this->input->post('shipping')),
            'date_created' => date('Y-m-d H:i:s')
        ];
        $datetime = strtotime($data['date_created']);
        $convertdate = date("d M,y",$datetime);
        $users = [
          'email' => $this->input->post('email'),
          'phone' => $this->input->post('phone'),
          'fname' => $this->input->post('fname'),
          'lname' => $this->input->post('lname')
      ];
      $adminemail= $this->input->post('adminemail');
     // $adminemail= $this->input->post('adminemail');
        $assisshipmentto = $users['email'];
        $assisshipmentsubject  = 'Shipment Details- Buy for me - '.$assisted_id.'';
        $result = $this->Admin_model->insert_shipment_data($data);
        $assisshipmentmessage['msg'] = "<p>Dear ".$users['fname']." ".$users['lname']."</p>
        <p>We are pleased to inform you that your Buy for me, ".$data['order_id'].", has been successfully processed and is now ready for shipping.</p>
        <p>Below are the details of your shipment:</p>
        <p> Order Id: ".$data['order_id']."</p>
        <p>shipping carrier: ".$data['shipping_carrier']."</p>
        <p>Tracking Number :".$data['tracking_number']." (Please note that this tracking number can be used to track your shipment on the carrier's website)</p>
        <p>Tracking Url: ".$data['tracking_url']."</p>
        <p>Order Summary</p>
        <p>Order date: ".$convertdate."</p>
        <p>Products:List of products included in the shipment</p>
        <p>Important Information</p>
        <p>Please allow 3-5 business days for your shipment to be delivered.</p>
        <p>You will receive an update via email once the shipment has been delivered.</p>
        <p>If you have any questions or concerns regarding your payment, please do not hesitate to reach out to our customer service team. We are always here to assist you.</p>
        <p>Thank you for choosing Global Shippers Rwanda. We appreciate your business and look forward to serving you again in the future.</p>
        <p>Regards</p>
        <p>The GlobalshippersRwanda Team</p>";

        $assisshipmentadminto = $adminemail;
        $assisshipmentadminsubject  = 'Shipment Details- Buy for me - '.$assisted_id.'';
        $assisshipmentadminmessage['msg'] = "<p>Dear Admin</p>
        <p>We are pleased to inform you that your consolidation order, ".$data['order_id'].", has been successfully processed and is now ready for shipping.</p>
        <p>Below are the details of your shipment:</p>
        <p> Order Id: ".$data['order_id']."</p>
        <p>shipping carrier: ".$data['shipping_carrier']."</p>
        <p>Tracking Number :".$data['tracking_number']." (Please note that this tracking number can be used to track your shipment on the carrier's website)</p>
        <p>Tracking Url: ".$data['tracking_url']."</p>
        <p>Order Summary</p>
        <p>Order date: ".$convertdate."</p>
        <p>Products:List of products included in the shipment</p>
         <p>Important Information</p>
        <p>Please allow 3-5 business days for your shipment to be delivered.</p>
        <p>You will receive an update via email once the shipment has been delivered.</p>
        <p>Contact Information:</p>
        <p>Name: ".$users['fname']." ".$users['lname']."</p>
        <p>Email: ".$users['email']."</p>
        <p>Contact No: ".$users['phone']."</p>
        <p>Thank you for choosing Global Shippers Rwanda. We appreciate your business and look forward to serving you again in the future.</p>
        <p>Regards</p>
        <p>The GlobalshippersRwanda Team</p>";
        $this->assisshipmentsendmail($assisshipmentto, $assisshipmentsubject, $assisshipmentmessage);
        $this->assisshipmentadminsendmail($assisshipmentadminto, $assisshipmentadminsubject, $assisshipmentadminmessage);
       // echo json_encode($result);
        redirect(base_url().'assisted-order-details/'.$assisted_id,'refresh');

    }
    public function internationalsendmail($internationalto, $internationalsubject, $internationalmessage) {

        $html = '<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Email Template</title>
    <style type="text/css">
      @media screen and (max-width: 600px),
      screen and (max-device-width: 600px) {
        body {
          margin: 0 !important;
          padding: 0 !important;
        }
      }
      @media screen and (-webkit-min-device-pixel-ratio: 0) and (max-width: 600px) {
        body {
          margin: 0 !important;
          padding: 0 !important;
        }
      }
  a{
  color: #000;
  text-decoration:none;
  }
    </style>
  </head>
  <body style="margin: 0; padding: 0; border: 0;">
    <table width="100%" align="center" cellpadding="0" cellspacing="0"
      border="0" dir="ltr" style="background-color: rgb(255, 255, 255);">
      <tbody>
        <tr>
          <td align="center" valign="top"
            style="margin: 0; padding: 0px 15px 0px;">
            <table width="600" align="center" border="0" cellspacing="0"
              cellpadding="0" style="width: 600px;">
              <tbody>
                <tr>
                  <td align="center" valign="center"
                    style="margin: 0; background-color: #ffffff; background-size: cover; background-repeat: no-repeat; background-position: center center; padding: 30px 15px 40px;">
                    <table align="center" border="0" cellpadding="0"
                      cellspacing="0">
                      <tbody>
                        <tr>
                          <td valign="top" align="center"
                            style="padding: 0px; margin: 0px;">
                            <a href="#"><img src="https://globalshippersrwanda.com/assets/cms/img/logo-black.png" width="100"
                                style="border: none; font-weight: bold; max-height: 100px; height: auto; line-height: 100%; outline: none; text-decoration: none; text-transform: capitalize; border-width: 0px; border-style: none; border-color: transparent; font-size: 12px; display: block;"></a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
                <tr> 
                  <td align="center" valign="top"
                    style="margin: 0; padding: 0;">
                    <table width="100%" align="center" border="0"
                      cellpadding="0" cellspacing="0" bgcolor="#ffffff">
                      <tbody>
                       <tr>   
                          <td align="left" valign="top"
                            style="margin: 0px; padding: 30px 30px 10px 30px; background-color: rgb(255, 255,
									255); font-size: 16px; font-family: "Lato", Arial, Helvetica,
                            sans-serif; line-height: 1.33;">
                            <span style="font-family: "Lato", Arial, Helvetica,
                              sans-serif; color: #000000; font-size: 20px;">
                              <span style="font-weight: 700;"></span>
                            </span>
                          </td>

                        </tr>
                        <tr>   
                          <td align="left" valign="top"
                            style="margin: 0px; padding: 30px 30px 10px 30px; background-color: rgb(255, 255,
									255); font-size: 16px; font-family: "Lato", Arial, Helvetica,
                            sans-serif; line-height: 1.33;">
                            <span style="font-family: "Lato", Arial, Helvetica,
                              sans-serif; color: #000000; font-size: 20px;">
                              <span style="font-weight: 700;">'.$internationalmessage['msg'].'</span>
                            </span>
                          </td>

                        </tr>

                      </tbody>
                    </table>
                    <table align="center" border="0" cellpadding="0"
                      cellspacing="0"
                      style="border-spacing: 0; margin: 0; padding: 0; border-spacing: 0px; -webkit-border-horizontal-spacing: 0px; -webkit-border-vertical-spacing: 0px; width: 100%">
                      <tr>
                        <td style="background: #ffffff;">
                          <table width="600" align="center" border="0"
                            cellpadding="0" cellspacing="0">
                            <tbody>
                              <tr>
                                <td valign="top" align="center"
                                  style="padding: 30px 30px 20px 30px; font-family: "Lato"
                                  ,Arial, Helvetica, sans-serif; margin: 0px;
                                  font-size: 40px; color: #000000; font-weight:
                                  bold;">
                                 
                                </td>
                              </tr>
                              <tr>
                                <td valign="top" align="center"
                                  style="padding: 0px 30px 10px 30px; margin: 0px; font-size: 15px; line-height: 23px; color: #000000;">
                                  <span style="font-family: "Lato" ,Arial,
                                    Helvetica, sans-serif; color: #000000;
                                    font-size: 16px;">
                                   
                                  </span>
                                </td>
                              </tr>
                              <tr>
                                <td valign="top" align="center"
                                  style="padding: 10px 30px 40px 30px; margin: 0px; font-size: 15px; line-height: 23px; color: #fff;">
                                  <a href="https://globalshippersrwanda.com/"
                                    style="padding: 10px 20px; color:#ffffff; font-size: 16px; font-family: "Lato"
                                    ,Arial, Helvetica, sans-serif; color:
                                    #ffffff; background-color: #000000;
                                    border-color: #000000; text-decoration:
                                    none; border-radius: 4px;">Visit Website</a>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>

                <tr>
                  <td style="background:#ffffff;">
                    <table width="600">
                      <tr>
                        <td align="center"
                          style="padding: 20px 0px 10px 0; background:#ffffff; border-top: 1px solid #d1d1d1;">
                          <table width="600" align="center" border="0"
                            cellpadding="0" cellspacing="0">
                            <tbody>
                              <tr>
                                <td align="center" valign="top" nowrap
                                  style="margin: 0px; padding: 0; font-size: 16px; font-family: "Lato",
                                  Arial, Helvetica, sans-serif; line-height:
                                  22px;">
                                 
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                      <tr>
                        <td align="center"
                          style="padding: 0px 0px 20px 0; background:#ffffff;">
                          <table width="300" align="center" border="0"
                            cellpadding="0" cellspacing="0">
                            <tbody>
                              <tr>
                                <td align="center" valign="top" nowrap
                                  style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                  Arial, Helvetica, sans-serif;">
                                  <a href="https://globalshippersrwanda.com/privacy"
                                    style="color: #000000; font-weight: normal; font-family: "Lato",
                                    Arial, Helvetica, sans-serif;
                                    text-decoration: none;">
                                    <span style="font-family: "Lato", Arial,
                                      Helvetica, sans-serif; color: #000000;
                                      font-size: 14px; white-space: nowrap;
                                      line-height: 22px;">Privacy Policy</span>
                                  </a>
                                </td>
                                <td align="center" valign="top" nowrap
                                  style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                  Arial, Helvetica, sans-serif;">
                                  <a href ="https://globalshippersrwanda.com/about-us"
                                    style="color: #2e3233; font-weight: normal; font-family: "Lato",
                                    Arial, Helvetica, sans-serif;
                                    text-decoration: none;">
                                    <span style="font-family: "Lato", Arial,
                                      Helvetica, sans-serif; color: #000000;
                                      font-size: 14px; white-space: nowrap;
                                      line-height: 22px;">About Us</span>
                                  </a>
                                </td>
                                <td align="center" valign="top" nowrap
                                  style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                  Arial, Helvetica, sans-serif;">
                                  <a href="https://globalshippersrwanda.com/contact-us"
                                    style="color: #000000; font-weight: normal; font-family: "Lato",
                                    Arial, Helvetica, sans-serif;
                                    text-decoration: none;">
                                    <span style="font-family: "Lato", Arial,
                                      Helvetica, sans-serif; color: #000000;
                                      font-size: 14px; white-space: nowrap;
                                      line-height: 22px;">Contact US</span>
                                  </a>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
          </td>
        </tr>
      </tbody>
    </table>
  </body>
</html>';



        
                        $mail = new PHPMailer(); 
                        $mail->IsSMTP(); 
                        $mail->SMTPAuth = true; 
                        $mail->SMTPSecure = 'tls'; 
                       $mail->Host = "mail.privateemail.com";
                        $mail->Port = 587; 
                        $mail->IsHTML(true);
                        $mail->CharSet = 'UTF-8';
                        //$mail->SMTPDebug = 2; 
                        $mail->Username = EMAIL_SMTP_GOOGLE;
                        $mail->Password = PASSWORD_SMTP_GOOGLE;
                        $mail->SetFrom("services@globalshippersrwanda.com");;
                        $mail->Subject = $internationalsubject;
                        $mail->Body =$html;
                        $mail->AddAddress($internationalto);
                        $mail->SMTPOptions=array('ssl'=>array (
                            'verify_peer'=>false,
                            'verify_peer_name'=>false,
                            'allow_self_signed'=>false
                        ));
                    if(!$mail->Send()){
                        echo $mail->ErrorInfo;
                    }else{
                        return  'Sent';
                    }
        }
        public function internationaladminsendmail($internationaladminto, $internationaladminsubject, $internationaladminmessage) {

            $html = '<!DOCTYPE html>
    <html lang="en-US">
      <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Email Template</title>
        <style type="text/css">
          @media screen and (max-width: 600px),
          screen and (max-device-width: 600px) {
            body {
              margin: 0 !important;
              padding: 0 !important;
            }
          }
          @media screen and (-webkit-min-device-pixel-ratio: 0) and (max-width: 600px) {
            body {
              margin: 0 !important;
              padding: 0 !important;
            }
          }
      a{
      color: #000;
      text-decoration:none;
      }
        </style>
      </head>
      <body style="margin: 0; padding: 0; border: 0;">
        <table width="100%" align="center" cellpadding="0" cellspacing="0"
          border="0" dir="ltr" style="background-color: rgb(255, 255, 255);">
          <tbody>
            <tr>
              <td align="center" valign="top"
                style="margin: 0; padding: 0px 15px 0px;">
                <table width="600" align="center" border="0" cellspacing="0"
                  cellpadding="0" style="width: 600px;">
                  <tbody>
                    <tr>
                      <td align="center" valign="center"
                        style="margin: 0; background-color: #ffffff; background-size: cover; background-repeat: no-repeat; background-position: center center; padding: 30px 15px 40px;">
                        <table align="center" border="0" cellpadding="0"
                          cellspacing="0">
                          <tbody>
                            <tr>
                              <td valign="top" align="center"
                                style="padding: 0px; margin: 0px;">
                                <a href="#"><img src="https://globalshippersrwanda.com/assets/cms/img/logo-black.png" width="100"
                                    style="border: none; font-weight: bold; max-height: 100px; height: auto; line-height: 100%; outline: none; text-decoration: none; text-transform: capitalize; border-width: 0px; border-style: none; border-color: transparent; font-size: 12px; display: block;"></a>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                    <tr> 
                      <td align="center" valign="top"
                        style="margin: 0; padding: 0;">
                        <table width="100%" align="center" border="0"
                          cellpadding="0" cellspacing="0" bgcolor="#ffffff">
                          <tbody>
                           <tr>   
                              <td align="left" valign="top"
                                style="margin: 0px; padding: 30px 30px 10px 30px; background-color: rgb(255, 255,
                                        255); font-size: 16px; font-family: "Lato", Arial, Helvetica,
                                sans-serif; line-height: 1.33;">
                                <span style="font-family: "Lato", Arial, Helvetica,
                                  sans-serif; color: #000000; font-size: 20px;">
                                  <span style="font-weight: 700;"></span>
                                </span>
                              </td>
    
                            </tr>
                            <tr>   
                              <td align="left" valign="top"
                                style="margin: 0px; padding: 30px 30px 10px 30px; background-color: rgb(255, 255,
                                        255); font-size: 16px; font-family: "Lato", Arial, Helvetica,
                                sans-serif; line-height: 1.33;">
                                <span style="font-family: "Lato", Arial, Helvetica,
                                  sans-serif; color: #000000; font-size: 20px;">
                                  <span style="font-weight: 700;">'.$internationaladminmessage['msg'].'</span>
                                </span>
                              </td>
    
                            </tr>
    
                          </tbody>
                        </table>
                        <table align="center" border="0" cellpadding="0"
                          cellspacing="0"
                          style="border-spacing: 0; margin: 0; padding: 0; border-spacing: 0px; -webkit-border-horizontal-spacing: 0px; -webkit-border-vertical-spacing: 0px; width: 100%">
                          <tr>
                            <td style="background: #ffffff;">
                              <table width="600" align="center" border="0"
                                cellpadding="0" cellspacing="0">
                                <tbody>
                                  <tr>
                                    <td valign="top" align="center"
                                      style="padding: 30px 30px 20px 30px; font-family: "Lato"
                                      ,Arial, Helvetica, sans-serif; margin: 0px;
                                      font-size: 40px; color: #000000; font-weight:
                                      bold;">
                                     
                                    </td>
                                  </tr>
                                  <tr>
                                    <td valign="top" align="center"
                                      style="padding: 0px 30px 10px 30px; margin: 0px; font-size: 15px; line-height: 23px; color: #000000;">
                                      <span style="font-family: "Lato" ,Arial,
                                        Helvetica, sans-serif; color: #000000;
                                        font-size: 16px;">
                                       
                                      </span>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td valign="top" align="center"
                                      style="padding: 10px 30px 40px 30px; margin: 0px; font-size: 15px; line-height: 23px; color: #fff;">
                                      <a href="https://globalshippersrwanda.com/"
                                        style="padding: 10px 20px; color:#ffffff; font-size: 16px; font-family: "Lato"
                                        ,Arial, Helvetica, sans-serif; color:
                                        #ffffff; background-color: #000000;
                                        border-color: #000000; text-decoration:
                                        none; border-radius: 4px;">Visit Website</a>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </td>
                          </tr>
                        </table>
                      </td>
                    </tr>
    
                    <tr>
                      <td style="background:#ffffff;">
                        <table width="600">
                          <tr>
                            <td align="center"
                              style="padding: 20px 0px 10px 0; background:#ffffff; border-top: 1px solid #d1d1d1;">
                              <table width="600" align="center" border="0"
                                cellpadding="0" cellspacing="0">
                                <tbody>
                                  <tr>
                                    <td align="center" valign="top" nowrap
                                      style="margin: 0px; padding: 0; font-size: 16px; font-family: "Lato",
                                      Arial, Helvetica, sans-serif; line-height:
                                      22px;">
                                     
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </td>
                          </tr>
                          <tr>
                            <td align="center"
                              style="padding: 0px 0px 20px 0; background:#ffffff;">
                              <table width="300" align="center" border="0"
                                cellpadding="0" cellspacing="0">
                                <tbody>
                                  <tr>
                                    <td align="center" valign="top" nowrap
                                      style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                      Arial, Helvetica, sans-serif;">
                                      <a href="https://globalshippersrwanda.com/privacy"
                                        style="color: #000000; font-weight: normal; font-family: "Lato",
                                        Arial, Helvetica, sans-serif;
                                        text-decoration: none;">
                                        <span style="font-family: "Lato", Arial,
                                          Helvetica, sans-serif; color: #000000;
                                          font-size: 14px; white-space: nowrap;
                                          line-height: 22px;">Privacy Policy</span>
                                      </a>
                                    </td>
                                    <td align="center" valign="top" nowrap
                                      style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                      Arial, Helvetica, sans-serif;">
                                      <a href ="https://globalshippersrwanda.com/about-us"
                                        style="color: #2e3233; font-weight: normal; font-family: "Lato",
                                        Arial, Helvetica, sans-serif;
                                        text-decoration: none;">
                                        <span style="font-family: "Lato", Arial,
                                          Helvetica, sans-serif; color: #000000;
                                          font-size: 14px; white-space: nowrap;
                                          line-height: 22px;">About Us</span>
                                      </a>
                                    </td>
                                    <td align="center" valign="top" nowrap
                                      style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                      Arial, Helvetica, sans-serif;">
                                      <a href="https://globalshippersrwanda.com/contact-us"
                                        style="color: #000000; font-weight: normal; font-family: "Lato",
                                        Arial, Helvetica, sans-serif;
                                        text-decoration: none;">
                                        <span style="font-family: "Lato", Arial,
                                          Helvetica, sans-serif; color: #000000;
                                          font-size: 14px; white-space: nowrap;
                                          line-height: 22px;">Contact US</span>
                                      </a>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>
          </tbody>
        </table>
      </body>
    </html>';
    
    
    
            
                            $mail = new PHPMailer(); 
                            $mail->IsSMTP(); 
                            $mail->SMTPAuth = true; 
                            $mail->SMTPSecure = 'tls'; 
                           $mail->Host = "mail.privateemail.com";
                            $mail->Port = 587; 
                            $mail->IsHTML(true);
                            $mail->CharSet = 'UTF-8';
                            //$mail->SMTPDebug = 2; 
                            $mail->Username = EMAIL_SMTP_GOOGLE;
                            $mail->Password = PASSWORD_SMTP_GOOGLE;
                            $mail->SetFrom("services@globalshippersrwanda.com");;
                            $mail->Subject = $internationaladminsubject;
                            $mail->Body =$html;
                            $mail->AddAddress($internationaladminto);
                            $mail->SMTPOptions=array('ssl'=>array (
                                'verify_peer'=>false,
                                'verify_peer_name'=>false,
                                'allow_self_signed'=>false
                            ));
                        if(!$mail->Send()){
                            echo $mail->ErrorInfo;
                        }else{
                            return  'Sent';
                        }
            }
    public function international_payment(){
        $order_id = $this->input->post('submit');
        $data = [
            'order_id' => $order_id,
            'type' => strtolower($this->input->post('type')),
            'status'=> $this->input->post('status'),
            'invoiceamt'=> $this->input->post('invoiceAmt'),
            'payment_id' => $this->input->post('payment'),
            'date_created' => date('Y-m-d H:i:s')
        ];
        $datetime = strtotime($data['date_created']);
        $convertdate = date("d M,y",$datetime);

        $users = [
          'email' => $this->input->post('email'),
          'phone' => $this->input->post('phone'),
          'fname' => $this->input->post('fname'),
          'lname' => $this->input->post('lname')
      ];
      $adminemail= $this->input->post('adminemail');
        $internationalto = $users['email']; 
        $internationalsubject  = 'Confirmation of Payment for Pickup shipment - '.$order_id.'';
        $result = $this->Admin_model->insert_payment_data($data);
        $internationalmessage['msg'] = "<p>Dear ".$users['fname']." ".$users['lname']."</p>
        <p>We are pleased to confirm that we have received details of your payment for your Pickup shipment with us. Below are the details of your payment:</p>
        <p> Order Id: ".$data['order_id']."</p>
        <p>Order Type: ".$data['type']."</p>
        <p>Payment Id :".$data['payment_id']."</p>
        <p>Invoice: ".$data['invoiceamt']." USD</p>
        <p>Payment Status: ".(($data['status']==1)?"Pending":(($data['status']==2)?"Paid":"Rejected"))."</p>
         <p>Your payment was processed successfully on ".$convertdate." and we have updated your account accordingly. We will start processing your shipment immediately.</p>
        <p>If you have any questions or concerns regarding your shipment, please feel free to contact us. We are always here to help.</p>
        <p>Thank you for choosing Global Shippers Rwanda. We appreciate your business and look forward to serving you better.</p>
        <p>Regards</p>
        <p>The GlobalshippersRwanda Team</p>";

        $internationaladminto = $adminemail;
        $internationaladminsubject  = 'Successful Payment on GlobalshippersRwanda - pickup shipment-'.$order_id.'';
        $internationaladminmessage['msg'] = "<p>Dear Admin</p>
        <p>We are pleased to confirm that we have received details of your payment for your Pickup shipment with us. Below are the details of your payment:</p>
        <p> Order Id: ".$data['order_id']."</p>
        <p>Order Type: ".$data['type']."</p>
        <p>Payment Id :".$data['payment_id']."</p>
        <p>Invoice: ".$data['invoiceamt']." USD</p>
        <p>Payment Status: ".(($data['status']==1)?"Pending":(($data['status']==2)?"Paid":"Rejected"))."</p>
         <p>Your payment was processed successfully on ".$convertdate." and we have updated your account accordingly. We will start processing your shipment immediately.</p>
         <p>Customer Informtion: </p>
        <p>Name: ".$users['fname']." ".$users['lname']."</p>
         <p>Email: ".$users['email']."</p>
        <p>Contact No : ".$users['phone']."</p>
          <p>Thank you for choosing Global Shippers Rwanda. We appreciate your business and look forward to serving you better.</p>
        <p>Regards</p>
        <p>The GlobalshippersRwanda Team</p>";
        $this->internationalsendmail($internationalto, $internationalsubject, $internationalmessage);
        $this->internationaladminsendmail($internationaladminto, $internationaladminsubject, $internationaladminmessage);
        redirect(base_url().'international-order-details/'.$order_id,'refresh');
   
    }

    public function international_payment_update_view(){
        $id = $this->uri->segment(3);
        $paymentid = $this->uri->segment(4);
        $total['count']   = $this->Admin_model->count_notification();
        $data['pay_details']  = $this->Admin_model->international_update_payment_display($id,$paymentid);
        $data['payupdate'] = $this->Admin_model->internationalpayupdate($data['pay_details']->order_id);
        $data['payupdateusers'] = $this->Admin_model->payupdateusers($data['payupdate'][0]->user_id);
        $data['adminemail'] = $this->Gsr->getadminemail();
        $this->load->view('admin/heads',$total);
        $this->load->view('admin/international_edit_payment',$data);
        $this->load->view('admin/footer');
    }


    
    public function internationalpayupsendmail($internationalpayupto, $internationalpayupsubject, $internationalpayupmessage) {

      $html = '<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Email Template</title>
  <style type="text/css">
    @media screen and (max-width: 600px),
    screen and (max-device-width: 600px) {
      body {
        margin: 0 !important;
        padding: 0 !important;
      }
    }
    @media screen and (-webkit-min-device-pixel-ratio: 0) and (max-width: 600px) {
      body {
        margin: 0 !important;
        padding: 0 !important;
      }
    }
a{
color: #000;
text-decoration:none;
}
  </style>
</head>
<body style="margin: 0; padding: 0; border: 0;">
  <table width="100%" align="center" cellpadding="0" cellspacing="0"
    border="0" dir="ltr" style="background-color: rgb(255, 255, 255);">
    <tbody>
      <tr>
        <td align="center" valign="top"
          style="margin: 0; padding: 0px 15px 0px;">
          <table width="600" align="center" border="0" cellspacing="0"
            cellpadding="0" style="width: 600px;">
            <tbody>
              <tr>
                <td align="center" valign="center"
                  style="margin: 0; background-color: #ffffff; background-size: cover; background-repeat: no-repeat; background-position: center center; padding: 30px 15px 40px;">
                  <table align="center" border="0" cellpadding="0"
                    cellspacing="0">
                    <tbody>
                      <tr>
                        <td valign="top" align="center"
                          style="padding: 0px; margin: 0px;">
                          <a href="#"><img src="https://globalshippersrwanda.com/assets/cms/img/logo-black.png" width="100"
                              style="border: none; font-weight: bold; max-height: 100px; height: auto; line-height: 100%; outline: none; text-decoration: none; text-transform: capitalize; border-width: 0px; border-style: none; border-color: transparent; font-size: 12px; display: block;"></a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </td>
              </tr>
              <tr> 
                <td align="center" valign="top"
                  style="margin: 0; padding: 0;">
                  <table width="100%" align="center" border="0"
                    cellpadding="0" cellspacing="0" bgcolor="#ffffff">
                    <tbody>
                     <tr>   
                        <td align="left" valign="top"
                          style="margin: 0px; padding: 30px 30px 10px 30px; background-color: rgb(255, 255,
                255); font-size: 16px; font-family: "Lato", Arial, Helvetica,
                          sans-serif; line-height: 1.33;">
                          <span style="font-family: "Lato", Arial, Helvetica,
                            sans-serif; color: #000000; font-size: 20px;">
                            <span style="font-weight: 700;"></span>
                          </span>
                        </td>

                      </tr>
                      <tr>   
                        <td align="left" valign="top"
                          style="margin: 0px; padding: 30px 30px 10px 30px; background-color: rgb(255, 255,
                255); font-size: 16px; font-family: "Lato", Arial, Helvetica,
                          sans-serif; line-height: 1.33;">
                          <span style="font-family: "Lato", Arial, Helvetica,
                            sans-serif; color: #000000; font-size: 20px;">
                            <span style="font-weight: 700;">'.$internationalpayupmessage['msg'].'</span>
                          </span>
                        </td>

                      </tr>

                    </tbody>
                  </table>
                  <table align="center" border="0" cellpadding="0"
                    cellspacing="0"
                    style="border-spacing: 0; margin: 0; padding: 0; border-spacing: 0px; -webkit-border-horizontal-spacing: 0px; -webkit-border-vertical-spacing: 0px; width: 100%">
                    <tr>
                      <td style="background: #ffffff;">
                        <table width="600" align="center" border="0"
                          cellpadding="0" cellspacing="0">
                          <tbody>
                            <tr>
                              <td valign="top" align="center"
                                style="padding: 30px 30px 20px 30px; font-family: "Lato"
                                ,Arial, Helvetica, sans-serif; margin: 0px;
                                font-size: 40px; color: #000000; font-weight:
                                bold;">
                               
                              </td>
                            </tr>
                            <tr>
                              <td valign="top" align="center"
                                style="padding: 0px 30px 10px 30px; margin: 0px; font-size: 15px; line-height: 23px; color: #000000;">
                                <span style="font-family: "Lato" ,Arial,
                                  Helvetica, sans-serif; color: #000000;
                                  font-size: 16px;">
                                 
                                </span>
                              </td>
                            </tr>
                            <tr>
                              <td valign="top" align="center"
                                style="padding: 10px 30px 40px 30px; margin: 0px; font-size: 15px; line-height: 23px; color: #fff;">
                                <a href="https://globalshippersrwanda.com/"
                                  style="padding: 10px 20px; color:#ffffff; font-size: 16px; font-family: "Lato"
                                  ,Arial, Helvetica, sans-serif; color:
                                  #ffffff; background-color: #000000;
                                  border-color: #000000; text-decoration:
                                  none; border-radius: 4px;">Visit Website</a>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>

              <tr>
                <td style="background:#ffffff;">
                  <table width="600">
                    <tr>
                      <td align="center"
                        style="padding: 20px 0px 10px 0; background:#ffffff; border-top: 1px solid #d1d1d1;">
                        <table width="600" align="center" border="0"
                          cellpadding="0" cellspacing="0">
                          <tbody>
                            <tr>
                              <td align="center" valign="top" nowrap
                                style="margin: 0px; padding: 0; font-size: 16px; font-family: "Lato",
                                Arial, Helvetica, sans-serif; line-height:
                                22px;">
                               
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                    <tr>
                      <td align="center"
                        style="padding: 0px 0px 20px 0; background:#ffffff;">
                        <table width="300" align="center" border="0"
                          cellpadding="0" cellspacing="0">
                          <tbody>
                            <tr>
                              <td align="center" valign="top" nowrap
                                style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                Arial, Helvetica, sans-serif;">
                                <a href="https://globalshippersrwanda.com/privacy"
                                  style="color: #000000; font-weight: normal; font-family: "Lato",
                                  Arial, Helvetica, sans-serif;
                                  text-decoration: none;">
                                  <span style="font-family: "Lato", Arial,
                                    Helvetica, sans-serif; color: #000000;
                                    font-size: 14px; white-space: nowrap;
                                    line-height: 22px;">Privacy Policy</span>
                                </a>
                              </td>
                              <td align="center" valign="top" nowrap
                                style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                Arial, Helvetica, sans-serif;">
                                <a href ="https://globalshippersrwanda.com/about-us"
                                  style="color: #2e3233; font-weight: normal; font-family: "Lato",
                                  Arial, Helvetica, sans-serif;
                                  text-decoration: none;">
                                  <span style="font-family: "Lato", Arial,
                                    Helvetica, sans-serif; color: #000000;
                                    font-size: 14px; white-space: nowrap;
                                    line-height: 22px;">About Us</span>
                                </a>
                              </td>
                              <td align="center" valign="top" nowrap
                                style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                Arial, Helvetica, sans-serif;">
                                <a href="https://globalshippersrwanda.com/contact-us"
                                  style="color: #000000; font-weight: normal; font-family: "Lato",
                                  Arial, Helvetica, sans-serif;
                                  text-decoration: none;">
                                  <span style="font-family: "Lato", Arial,
                                    Helvetica, sans-serif; color: #000000;
                                    font-size: 14px; white-space: nowrap;
                                    line-height: 22px;">Contact US</span>
                                </a>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
            </tbody>
          </table>
        </td>
      </tr>
    </tbody>
  </table>
</body>
</html>';



      
                      $mail = new PHPMailer(); 
                      $mail->IsSMTP(); 
                      $mail->SMTPAuth = true; 
                      $mail->SMTPSecure = 'tls'; 
                     $mail->Host = "mail.privateemail.com";
                      $mail->Port = 587; 
                      $mail->IsHTML(true);
                      $mail->CharSet = 'UTF-8';
                      //$mail->SMTPDebug = 2; 
                      $mail->Username = EMAIL_SMTP_GOOGLE;
                      $mail->Password = PASSWORD_SMTP_GOOGLE;
                      $mail->SetFrom("services@globalshippersrwanda.com");;
                      $mail->Subject = $internationalpayupsubject;
                      $mail->Body =$html;
                      $mail->AddAddress($internationalpayupto);
                      $mail->SMTPOptions=array('ssl'=>array (
                          'verify_peer'=>false,
                          'verify_peer_name'=>false,
                          'allow_self_signed'=>false
                      ));
                  if(!$mail->Send()){
                      echo $mail->ErrorInfo;
                  }else{
                      return  'Sent';
                  }
      }
      public function internationalpayupadminsendmail($internationalpayupadminto, $internationalpayupadminsubject, $internationalpayupadminmessage) {

          $html = '<!DOCTYPE html>
  <html lang="en-US">
    <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <title>Email Template</title>
      <style type="text/css">
        @media screen and (max-width: 600px),
        screen and (max-device-width: 600px) {
          body {
            margin: 0 !important;
            padding: 0 !important;
          }
        }
        @media screen and (-webkit-min-device-pixel-ratio: 0) and (max-width: 600px) {
          body {
            margin: 0 !important;
            padding: 0 !important;
          }
        }
    a{
    color: #000;
    text-decoration:none;
    }
      </style>
    </head>
    <body style="margin: 0; padding: 0; border: 0;">
      <table width="100%" align="center" cellpadding="0" cellspacing="0"
        border="0" dir="ltr" style="background-color: rgb(255, 255, 255);">
        <tbody>
          <tr>
            <td align="center" valign="top"
              style="margin: 0; padding: 0px 15px 0px;">
              <table width="600" align="center" border="0" cellspacing="0"
                cellpadding="0" style="width: 600px;">
                <tbody>
                  <tr>
                    <td align="center" valign="center"
                      style="margin: 0; background-color: #ffffff; background-size: cover; background-repeat: no-repeat; background-position: center center; padding: 30px 15px 40px;">
                      <table align="center" border="0" cellpadding="0"
                        cellspacing="0">
                        <tbody>
                          <tr>
                            <td valign="top" align="center"
                              style="padding: 0px; margin: 0px;">
                              <a href="#"><img src="https://globalshippersrwanda.com/assets/cms/img/logo-black.png" width="100"
                                  style="border: none; font-weight: bold; max-height: 100px; height: auto; line-height: 100%; outline: none; text-decoration: none; text-transform: capitalize; border-width: 0px; border-style: none; border-color: transparent; font-size: 12px; display: block;"></a>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                  <tr> 
                    <td align="center" valign="top"
                      style="margin: 0; padding: 0;">
                      <table width="100%" align="center" border="0"
                        cellpadding="0" cellspacing="0" bgcolor="#ffffff">
                        <tbody>
                         <tr>   
                            <td align="left" valign="top"
                              style="margin: 0px; padding: 30px 30px 10px 30px; background-color: rgb(255, 255,
                                      255); font-size: 16px; font-family: "Lato", Arial, Helvetica,
                              sans-serif; line-height: 1.33;">
                              <span style="font-family: "Lato", Arial, Helvetica,
                                sans-serif; color: #000000; font-size: 20px;">
                                <span style="font-weight: 700;"></span>
                              </span>
                            </td>
  
                          </tr>
                          <tr>   
                            <td align="left" valign="top"
                              style="margin: 0px; padding: 30px 30px 10px 30px; background-color: rgb(255, 255,
                                      255); font-size: 16px; font-family: "Lato", Arial, Helvetica,
                              sans-serif; line-height: 1.33;">
                              <span style="font-family: "Lato", Arial, Helvetica,
                                sans-serif; color: #000000; font-size: 20px;">
                                <span style="font-weight: 700;">'.$internationalpayupadminmessage['msg'].'</span>
                              </span>
                            </td>
  
                          </tr>
  
                        </tbody>
                      </table>
                      <table align="center" border="0" cellpadding="0"
                        cellspacing="0"
                        style="border-spacing: 0; margin: 0; padding: 0; border-spacing: 0px; -webkit-border-horizontal-spacing: 0px; -webkit-border-vertical-spacing: 0px; width: 100%">
                        <tr>
                          <td style="background: #ffffff;">
                            <table width="600" align="center" border="0"
                              cellpadding="0" cellspacing="0">
                              <tbody>
                                <tr>
                                  <td valign="top" align="center"
                                    style="padding: 30px 30px 20px 30px; font-family: "Lato"
                                    ,Arial, Helvetica, sans-serif; margin: 0px;
                                    font-size: 40px; color: #000000; font-weight:
                                    bold;">
                                   
                                  </td>
                                </tr>
                                <tr>
                                  <td valign="top" align="center"
                                    style="padding: 0px 30px 10px 30px; margin: 0px; font-size: 15px; line-height: 23px; color: #000000;">
                                    <span style="font-family: "Lato" ,Arial,
                                      Helvetica, sans-serif; color: #000000;
                                      font-size: 16px;">
                                     
                                    </span>
                                  </td>
                                </tr>
                                <tr>
                                  <td valign="top" align="center"
                                    style="padding: 10px 30px 40px 30px; margin: 0px; font-size: 15px; line-height: 23px; color: #fff;">
                                    <a href="https://globalshippersrwanda.com/"
                                      style="padding: 10px 20px; color:#ffffff; font-size: 16px; font-family: "Lato"
                                      ,Arial, Helvetica, sans-serif; color:
                                      #ffffff; background-color: #000000;
                                      border-color: #000000; text-decoration:
                                      none; border-radius: 4px;">Visit Website</a>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
  
                  <tr>
                    <td style="background:#ffffff;">
                      <table width="600">
                        <tr>
                          <td align="center"
                            style="padding: 20px 0px 10px 0; background:#ffffff; border-top: 1px solid #d1d1d1;">
                            <table width="600" align="center" border="0"
                              cellpadding="0" cellspacing="0">
                              <tbody>
                                <tr>
                                  <td align="center" valign="top" nowrap
                                    style="margin: 0px; padding: 0; font-size: 16px; font-family: "Lato",
                                    Arial, Helvetica, sans-serif; line-height:
                                    22px;">
                                   
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                        </tr>
                        <tr>
                          <td align="center"
                            style="padding: 0px 0px 20px 0; background:#ffffff;">
                            <table width="300" align="center" border="0"
                              cellpadding="0" cellspacing="0">
                              <tbody>
                                <tr>
                                  <td align="center" valign="top" nowrap
                                    style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                    Arial, Helvetica, sans-serif;">
                                    <a href="https://globalshippersrwanda.com/privacy"
                                      style="color: #000000; font-weight: normal; font-family: "Lato",
                                      Arial, Helvetica, sans-serif;
                                      text-decoration: none;">
                                      <span style="font-family: "Lato", Arial,
                                        Helvetica, sans-serif; color: #000000;
                                        font-size: 14px; white-space: nowrap;
                                        line-height: 22px;">Privacy Policy</span>
                                    </a>
                                  </td>
                                  <td align="center" valign="top" nowrap
                                    style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                    Arial, Helvetica, sans-serif;">
                                    <a href ="https://globalshippersrwanda.com/about-us"
                                      style="color: #2e3233; font-weight: normal; font-family: "Lato",
                                      Arial, Helvetica, sans-serif;
                                      text-decoration: none;">
                                      <span style="font-family: "Lato", Arial,
                                        Helvetica, sans-serif; color: #000000;
                                        font-size: 14px; white-space: nowrap;
                                        line-height: 22px;">About Us</span>
                                    </a>
                                  </td>
                                  <td align="center" valign="top" nowrap
                                    style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                    Arial, Helvetica, sans-serif;">
                                    <a href="https://globalshippersrwanda.com/contact-us"
                                      style="color: #000000; font-weight: normal; font-family: "Lato",
                                      Arial, Helvetica, sans-serif;
                                      text-decoration: none;">
                                      <span style="font-family: "Lato", Arial,
                                        Helvetica, sans-serif; color: #000000;
                                        font-size: 14px; white-space: nowrap;
                                        line-height: 22px;">Contact US</span>
                                    </a>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                </tbody>
              </table>
            </td>
          </tr>
        </tbody>
      </table>
    </body>
  </html>';
  
  
  
          
                          $mail = new PHPMailer(); 
                          $mail->IsSMTP(); 
                          $mail->SMTPAuth = true; 
                          $mail->SMTPSecure = 'tls'; 
                         $mail->Host = "mail.privateemail.com";
                          $mail->Port = 587; 
                          $mail->IsHTML(true);
                          $mail->CharSet = 'UTF-8';
                          //$mail->SMTPDebug = 2; 
                          $mail->Username = EMAIL_SMTP_GOOGLE;
                          $mail->Password = PASSWORD_SMTP_GOOGLE;
                          $mail->SetFrom("services@globalshippersrwanda.com");;
                          $mail->Subject = $internationalpayupadminsubject;
                          $mail->Body =$html;
                          $mail->AddAddress($internationalpayupadminto);
                          $mail->SMTPOptions=array('ssl'=>array (
                              'verify_peer'=>false,
                              'verify_peer_name'=>false,
                              'allow_self_signed'=>false
                          ));
                      if(!$mail->Send()){
                          echo $mail->ErrorInfo;
                      }else{
                          return  'Sent';
                      }
          }
    public function international_update_payment(){
        $orderid = $this->input->post('id');
        $id = $this->input->post('payid');
           $pay = [
            'payment_id' => $this->input->post('payment'),
            'status'=> $this->input->post('status'),
            'invoiceamt'=> $this->input->post('invoiceamt'),
            'update_date' => date('Y-m-d H:i:s')
        ];
        $datetime = strtotime($data['date_created']);
        $convertdate = date("d M,y",$datetime);

        $users = [
          'email' => $this->input->post('email'),
          'phone' => $this->input->post('phone'),
          'fname' => $this->input->post('fname'),
          'lname' => $this->input->post('lname')
      ];
      $adminemail= $this->input->post('adminemail');
        $payment = $this->Admin_model->international_update_payment($orderid,$pay,$id);
        $internationalpayupto = $users['email'];
        $internationalpayupsubject  = 'Update on Pickup Shipment Payment Details  - '.$pay['payment_id'].'';
        $internationalpayupmessage['msg'] =  "<p>Dear ".$users['fname']." ".$users['lname']."</p>
        <p>We hope this email finds you well. We are pleased to inform you that we have updated the payment details for your Pickup Shipment with us.</p>
        <p>Payment Id: ".$pay['payment_id']."</p>
        <p>Status: ".(($pay['status']==1)?"Pending":(($pay['status']==2)?"Paid":"Rejected"))."</p>
        <p>Invoice :".$pay['invoiceamt']." USD</p>
        <p>Please note that this payment update may take some time to reflect in our system, and you may receive a separate notification once the payment is fully processed.</p>
        <p>If you have any questions or concerns regarding your payment, please do not hesitate to reach out to our customer service team. We are always here to assist you.</p>
        <p>Thank you for choosing Global Shippers Rwanda for your logistics needs.</p>
        <p>Regards</p>
        <p>The GlobalshippersRwanda Team</p>";

        $internationalpayupadminto = $adminemail;
        $internationalpayupadminsubject  = 'Update on Pickup Shipment Payment Details  - '.$pay['payment_id'].'';
        $internationalpayupadminmessage['msg'] = "<p>Dear Admin</p>
       <p>We hope this email finds you well. We are pleased to inform you that we have updated the payment details for your pickup shipment with us.</p>
       <p>Payment Id: ".$pay['payment_id']."</p>
        <p>Status: ".(($pay['status']==1)?"Pending":(($pay['status']==2)?"Paid":"Rejected"))."</p>
        <p>Invoice :".$pay['invoiceamt']." USD</p>
        <p>Please note that this payment update may take some time to reflect in our system, and you may receive a separate notification once the payment is fully processed.</p>
       
        <p>Customer Information</p>
        <p>Name: ".$users['fname']." ".$users['lname']."</p>
         <p>Email: ".$users['email']."</p>
          <p>Contact No: ".$users['phone']."</p>
           <p>Thank you for choosing Global Shippers Rwanda for your logistics needs.</p>
        <p>Regards</p>
        <p>The GlobalshippersRwanda Team</p>";
        $this->internationalpayupsendmail($internationalpayupto, $internationalpayupsubject, $internationalpayupmessage);
        $this->internationalpayupadminsendmail($internationalpayupadminto, $internationalpayupadminsubject, $internationalpayupadminmessage);
       // echo json_encode($payment);
        if($payment==TRUE){
            redirect(base_url().'international-order-details/'.$orderid);
        }
        else{
           redirect(base_url().'international-order-details/'.$orderid);
        }
    }
    public function international_delete_payment(){
        $id = $this->uri->segment(3);
        $paymentid = $this->uri->segment(4);
        $result = $this->Admin_model->international_delete_payment($id,$paymentid);
        //echo json_encode($resutl);
        if($result==TRUE){
            redirect(base_url().'international-order-details/'.$id);
        }
        else{
            redirect(base_url().'international-order-details/'.$id);
        }
    }


    public function internationalshipmentsendmail($internationalshipmentto, $internationalshipmentsubject, $internationalshipmentmessage) {

        $html = '<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Email Template</title>
    <style type="text/css">
      @media screen and (max-width: 600px),
      screen and (max-device-width: 600px) {
        body {
          margin: 0 !important;
          padding: 0 !important;
        }
      }
      @media screen and (-webkit-min-device-pixel-ratio: 0) and (max-width: 600px) {
        body {
          margin: 0 !important;
          padding: 0 !important;
        }
      }
  a{
  color: #000;
  text-decoration:none;
  }
    </style>
  </head>
  <body style="margin: 0; padding: 0; border: 0;">
    <table width="100%" align="center" cellpadding="0" cellspacing="0"
      border="0" dir="ltr" style="background-color: rgb(255, 255, 255);">
      <tbody>
        <tr>
          <td align="center" valign="top"
            style="margin: 0; padding: 0px 15px 0px;">
            <table width="600" align="center" border="0" cellspacing="0"
              cellpadding="0" style="width: 600px;">
              <tbody>
                <tr>
                  <td align="center" valign="center"
                    style="margin: 0; background-color: #ffffff; background-size: cover; background-repeat: no-repeat; background-position: center center; padding: 30px 15px 40px;">
                    <table align="center" border="0" cellpadding="0"
                      cellspacing="0">
                      <tbody>
                        <tr>
                          <td valign="top" align="center"
                            style="padding: 0px; margin: 0px;">
                            <a href="#"><img src="https://globalshippersrwanda.com/assets/cms/img/logo-black.png" width="100"
                                style="border: none; font-weight: bold; max-height: 100px; height: auto; line-height: 100%; outline: none; text-decoration: none; text-transform: capitalize; border-width: 0px; border-style: none; border-color: transparent; font-size: 12px; display: block;"></a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
                <tr> 
                  <td align="center" valign="top"
                    style="margin: 0; padding: 0;">
                    <table width="100%" align="center" border="0"
                      cellpadding="0" cellspacing="0" bgcolor="#ffffff">
                      <tbody>
                       <tr>   
                          <td align="left" valign="top"
                            style="margin: 0px; padding: 30px 30px 10px 30px; background-color: rgb(255, 255,
									255); font-size: 16px; font-family: "Lato", Arial, Helvetica,
                            sans-serif; line-height: 1.33;">
                            <span style="font-family: "Lato", Arial, Helvetica,
                              sans-serif; color: #000000; font-size: 20px;">
                              <span style="font-weight: 700;"></span>
                            </span>
                          </td>

                        </tr>
                        <tr>   
                          <td align="left" valign="top"
                            style="margin: 0px; padding: 30px 30px 10px 30px; background-color: rgb(255, 255,
									255); font-size: 16px; font-family: "Lato", Arial, Helvetica,
                            sans-serif; line-height: 1.33;">
                            <span style="font-family: "Lato", Arial, Helvetica,
                              sans-serif; color: #000000; font-size: 20px;">
                              <span style="font-weight: 700;">'.$internationalshipmentmessage['msg'].'</span>
                            </span>
                          </td>

                        </tr>

                      </tbody>
                    </table>
                    <table align="center" border="0" cellpadding="0"
                      cellspacing="0"
                      style="border-spacing: 0; margin: 0; padding: 0; border-spacing: 0px; -webkit-border-horizontal-spacing: 0px; -webkit-border-vertical-spacing: 0px; width: 100%">
                      <tr>
                        <td style="background: #ffffff;">
                          <table width="600" align="center" border="0"
                            cellpadding="0" cellspacing="0">
                            <tbody>
                              <tr>
                                <td valign="top" align="center"
                                  style="padding: 30px 30px 20px 30px; font-family: "Lato"
                                  ,Arial, Helvetica, sans-serif; margin: 0px;
                                  font-size: 40px; color: #000000; font-weight:
                                  bold;">
                                 
                                </td>
                              </tr>
                              <tr>
                                <td valign="top" align="center"
                                  style="padding: 0px 30px 10px 30px; margin: 0px; font-size: 15px; line-height: 23px; color: #000000;">
                                  <span style="font-family: "Lato" ,Arial,
                                    Helvetica, sans-serif; color: #000000;
                                    font-size: 16px;">
                                   
                                  </span>
                                </td>
                              </tr>
                              <tr>
                                <td valign="top" align="center"
                                  style="padding: 10px 30px 40px 30px; margin: 0px; font-size: 15px; line-height: 23px; color: #fff;">
                                  <a href="https://globalshippersrwanda.com/"
                                    style="padding: 10px 20px; color:#ffffff; font-size: 16px; font-family: "Lato"
                                    ,Arial, Helvetica, sans-serif; color:
                                    #ffffff; background-color: #000000;
                                    border-color: #000000; text-decoration:
                                    none; border-radius: 4px;">Visit Website</a>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>

                <tr>
                  <td style="background:#ffffff;">
                    <table width="600">
                      <tr>
                        <td align="center"
                          style="padding: 20px 0px 10px 0; background:#ffffff; border-top: 1px solid #d1d1d1;">
                          <table width="600" align="center" border="0"
                            cellpadding="0" cellspacing="0">
                            <tbody>
                              <tr>
                                <td align="center" valign="top" nowrap
                                  style="margin: 0px; padding: 0; font-size: 16px; font-family: "Lato",
                                  Arial, Helvetica, sans-serif; line-height:
                                  22px;">
                                 
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                      <tr>
                        <td align="center"
                          style="padding: 0px 0px 20px 0; background:#ffffff;">
                          <table width="300" align="center" border="0"
                            cellpadding="0" cellspacing="0">
                            <tbody>
                              <tr>
                                <td align="center" valign="top" nowrap
                                  style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                  Arial, Helvetica, sans-serif;">
                                  <a href="https://globalshippersrwanda.com/privacy"
                                    style="color: #000000; font-weight: normal; font-family: "Lato",
                                    Arial, Helvetica, sans-serif;
                                    text-decoration: none;">
                                    <span style="font-family: "Lato", Arial,
                                      Helvetica, sans-serif; color: #000000;
                                      font-size: 14px; white-space: nowrap;
                                      line-height: 22px;">Privacy Policy</span>
                                  </a>
                                </td>
                                <td align="center" valign="top" nowrap
                                  style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                  Arial, Helvetica, sans-serif;">
                                  <a href ="https://globalshippersrwanda.com/about-us"
                                    style="color: #2e3233; font-weight: normal; font-family: "Lato",
                                    Arial, Helvetica, sans-serif;
                                    text-decoration: none;">
                                    <span style="font-family: "Lato", Arial,
                                      Helvetica, sans-serif; color: #000000;
                                      font-size: 14px; white-space: nowrap;
                                      line-height: 22px;">About Us</span>
                                  </a>
                                </td>
                                <td align="center" valign="top" nowrap
                                  style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                  Arial, Helvetica, sans-serif;">
                                  <a href="https://globalshippersrwanda.com/contact-us"
                                    style="color: #000000; font-weight: normal; font-family: "Lato",
                                    Arial, Helvetica, sans-serif;
                                    text-decoration: none;">
                                    <span style="font-family: "Lato", Arial,
                                      Helvetica, sans-serif; color: #000000;
                                      font-size: 14px; white-space: nowrap;
                                      line-height: 22px;">Contact US</span>
                                  </a>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
          </td>
        </tr>
      </tbody>
    </table>
  </body>
</html>';



        
                        $mail = new PHPMailer(); 
                        $mail->IsSMTP(); 
                        $mail->SMTPAuth = true; 
                        $mail->SMTPSecure = 'tls'; 
                       $mail->Host = "mail.privateemail.com";
                        $mail->Port = 587; 
                        $mail->IsHTML(true);
                        $mail->CharSet = 'UTF-8';
                        //$mail->SMTPDebug = 2; 
                        $mail->Username = EMAIL_SMTP_GOOGLE;
                        $mail->Password = PASSWORD_SMTP_GOOGLE;
                        $mail->SetFrom("services@globalshippersrwanda.com");;
                        $mail->Subject = $internationalshipmentsubject;
                        $mail->Body =$html;
                        $mail->AddAddress($internationalshipmentto);
                        $mail->SMTPOptions=array('ssl'=>array (
                            'verify_peer'=>false,
                            'verify_peer_name'=>false,
                            'allow_self_signed'=>false
                        ));
                    if(!$mail->Send()){
                        echo $mail->ErrorInfo;
                    }else{
                        return  'Sent';
                    }
        }
        public function internationalshipmentadminsendmail($internationalshipmentadminto, $internationalshipmentadminsubject, $internationalshipmentadminmessage) {

            $html = '<!DOCTYPE html>
    <html lang="en-US">
      <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Email Template</title>
        <style type="text/css">
          @media screen and (max-width: 600px),
          screen and (max-device-width: 600px) {
            body {
              margin: 0 !important;
              padding: 0 !important;
            }
          }
          @media screen and (-webkit-min-device-pixel-ratio: 0) and (max-width: 600px) {
            body {
              margin: 0 !important;
              padding: 0 !important;
            }
          }
      a{
      color: #000;
      text-decoration:none;
      }
        </style>
      </head>
      <body style="margin: 0; padding: 0; border: 0;">
        <table width="100%" align="center" cellpadding="0" cellspacing="0"
          border="0" dir="ltr" style="background-color: rgb(255, 255, 255);">
          <tbody>
            <tr>
              <td align="center" valign="top"
                style="margin: 0; padding: 0px 15px 0px;">
                <table width="600" align="center" border="0" cellspacing="0"
                  cellpadding="0" style="width: 600px;">
                  <tbody>
                    <tr>
                      <td align="center" valign="center"
                        style="margin: 0; background-color: #ffffff; background-size: cover; background-repeat: no-repeat; background-position: center center; padding: 30px 15px 40px;">
                        <table align="center" border="0" cellpadding="0"
                          cellspacing="0">
                          <tbody>
                            <tr>
                              <td valign="top" align="center"
                                style="padding: 0px; margin: 0px;">
                                <a href="#"><img src="https://globalshippersrwanda.com/assets/cms/img/logo-black.png" width="100"
                                    style="border: none; font-weight: bold; max-height: 100px; height: auto; line-height: 100%; outline: none; text-decoration: none; text-transform: capitalize; border-width: 0px; border-style: none; border-color: transparent; font-size: 12px; display: block;"></a>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                    <tr> 
                      <td align="center" valign="top"
                        style="margin: 0; padding: 0;">
                        <table width="100%" align="center" border="0"
                          cellpadding="0" cellspacing="0" bgcolor="#ffffff">
                          <tbody>
                           <tr>   
                              <td align="left" valign="top"
                                style="margin: 0px; padding: 30px 30px 10px 30px; background-color: rgb(255, 255,
                                        255); font-size: 16px; font-family: "Lato", Arial, Helvetica,
                                sans-serif; line-height: 1.33;">
                                <span style="font-family: "Lato", Arial, Helvetica,
                                  sans-serif; color: #000000; font-size: 20px;">
                                  <span style="font-weight: 700;"></span>
                                </span>
                              </td>
    
                            </tr>
                            <tr>   
                              <td align="left" valign="top"
                                style="margin: 0px; padding: 30px 30px 10px 30px; background-color: rgb(255, 255,
                                        255); font-size: 16px; font-family: "Lato", Arial, Helvetica,
                                sans-serif; line-height: 1.33;">
                                <span style="font-family: "Lato", Arial, Helvetica,
                                  sans-serif; color: #000000; font-size: 20px;">
                                  <span style="font-weight: 700;">'.$internationalshipmentadminmessage['msg'].'</span>
                                </span>
                              </td>
    
                            </tr>
    
                          </tbody>
                        </table>
                        <table align="center" border="0" cellpadding="0"
                          cellspacing="0"
                          style="border-spacing: 0; margin: 0; padding: 0; border-spacing: 0px; -webkit-border-horizontal-spacing: 0px; -webkit-border-vertical-spacing: 0px; width: 100%">
                          <tr>
                            <td style="background: #ffffff;">
                              <table width="600" align="center" border="0"
                                cellpadding="0" cellspacing="0">
                                <tbody>
                                  <tr>
                                    <td valign="top" align="center"
                                      style="padding: 30px 30px 20px 30px; font-family: "Lato"
                                      ,Arial, Helvetica, sans-serif; margin: 0px;
                                      font-size: 40px; color: #000000; font-weight:
                                      bold;">
                                     
                                    </td>
                                  </tr>
                                  <tr>
                                    <td valign="top" align="center"
                                      style="padding: 0px 30px 10px 30px; margin: 0px; font-size: 15px; line-height: 23px; color: #000000;">
                                      <span style="font-family: "Lato" ,Arial,
                                        Helvetica, sans-serif; color: #000000;
                                        font-size: 16px;">
                                       
                                      </span>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td valign="top" align="center"
                                      style="padding: 10px 30px 40px 30px; margin: 0px; font-size: 15px; line-height: 23px; color: #fff;">
                                      <a href="https://globalshippersrwanda.com/"
                                        style="padding: 10px 20px; color:#ffffff; font-size: 16px; font-family: "Lato"
                                        ,Arial, Helvetica, sans-serif; color:
                                        #ffffff; background-color: #000000;
                                        border-color: #000000; text-decoration:
                                        none; border-radius: 4px;">Visit Website</a>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </td>
                          </tr>
                        </table>
                      </td>
                    </tr>
    
                    <tr>
                      <td style="background:#ffffff;">
                        <table width="600">
                          <tr>
                            <td align="center"
                              style="padding: 20px 0px 10px 0; background:#ffffff; border-top: 1px solid #d1d1d1;">
                              <table width="600" align="center" border="0"
                                cellpadding="0" cellspacing="0">
                                <tbody>
                                  <tr>
                                    <td align="center" valign="top" nowrap
                                      style="margin: 0px; padding: 0; font-size: 16px; font-family: "Lato",
                                      Arial, Helvetica, sans-serif; line-height:
                                      22px;">
                                     
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </td>
                          </tr>
                          <tr>
                            <td align="center"
                              style="padding: 0px 0px 20px 0; background:#ffffff;">
                              <table width="300" align="center" border="0"
                                cellpadding="0" cellspacing="0">
                                <tbody>
                                  <tr>
                                    <td align="center" valign="top" nowrap
                                      style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                      Arial, Helvetica, sans-serif;">
                                      <a href="https://globalshippersrwanda.com/privacy"
                                        style="color: #000000; font-weight: normal; font-family: "Lato",
                                        Arial, Helvetica, sans-serif;
                                        text-decoration: none;">
                                        <span style="font-family: "Lato", Arial,
                                          Helvetica, sans-serif; color: #000000;
                                          font-size: 14px; white-space: nowrap;
                                          line-height: 22px;">Privacy Policy</span>
                                      </a>
                                    </td>
                                    <td align="center" valign="top" nowrap
                                      style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                      Arial, Helvetica, sans-serif;">
                                      <a href ="https://globalshippersrwanda.com/about-us"
                                        style="color: #2e3233; font-weight: normal; font-family: "Lato",
                                        Arial, Helvetica, sans-serif;
                                        text-decoration: none;">
                                        <span style="font-family: "Lato", Arial,
                                          Helvetica, sans-serif; color: #000000;
                                          font-size: 14px; white-space: nowrap;
                                          line-height: 22px;">About Us</span>
                                      </a>
                                    </td>
                                    <td align="center" valign="top" nowrap
                                      style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                      Arial, Helvetica, sans-serif;">
                                      <a href="https://globalshippersrwanda.com/contact-us"
                                        style="color: #000000; font-weight: normal; font-family: "Lato",
                                        Arial, Helvetica, sans-serif;
                                        text-decoration: none;">
                                        <span style="font-family: "Lato", Arial,
                                          Helvetica, sans-serif; color: #000000;
                                          font-size: 14px; white-space: nowrap;
                                          line-height: 22px;">Contact US</span>
                                      </a>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>
          </tbody>
        </table>
      </body>
    </html>';
    
    
    
            
                            $mail = new PHPMailer(); 
                            $mail->IsSMTP(); 
                            $mail->SMTPAuth = true; 
                            $mail->SMTPSecure = 'tls'; 
                           $mail->Host = "mail.privateemail.com";
                            $mail->Port = 587; 
                            $mail->IsHTML(true);
                            $mail->CharSet = 'UTF-8';
                            //$mail->SMTPDebug = 2; 
                            $mail->Username = EMAIL_SMTP_GOOGLE;
                            $mail->Password = PASSWORD_SMTP_GOOGLE;
                            $mail->SetFrom("services@globalshippersrwanda.com");;
                            $mail->Subject = $internationalshipmentadminsubject;
                            $mail->Body =$html;
                            $mail->AddAddress($internationalshipmentadminto);
                            $mail->SMTPOptions=array('ssl'=>array (
                                'verify_peer'=>false,
                                'verify_peer_name'=>false,
                                'allow_self_signed'=>false
                            ));
                        if(!$mail->Send()){
                            echo $mail->ErrorInfo;
                        }else{
                            return  'Sent';
                        }
            }

    public function international_shipment(){
        $order_id = $this->input->post('submit');
        $data = [
            'order_id'      => $order_id,
            'shipping_carrier' => $this->input->post('shipping_carrier'),
            'tracking_number'=> $this->input->post('tracking_number'),
            'tracking_url' => $this->input->post('tracking_url'),
            'shipping' => strtolower($this->input->post('shipping')),
            'date_created' => date('Y-m-d H:i:s')
        ];
        $datetime = strtotime($data['date_created']);
        $convertdate = date("d M,y",$datetime);

        $users = [
          'email' => $this->input->post('email'),
          'phone' => $this->input->post('phone'),
          'fname' => $this->input->post('fname'),
          'lname' => $this->input->post('lname')
      ];
      $adminemail= $this->input->post('adminemail');
        $internationalshipmentto = $users['email'];
        $internationalshipmentsubject  = 'Shipment Details - Pickup Shipment - '.$order_id.'';
        $result = $this->Admin_model->insert_shipment_data($data);
        $internationalshipmentmessage['msg'] = "<p>Dear ".$users['fname']." ".$users['lname']."</p>
        <p>We are pleased to inform you that your Pickup Shipment, ".$data['order_id'].", has been successfully processed and is now ready for shipping.</p>
        <p>Below are the details of your shipment:</p>
        <p> Order Id: ".$data['order_id']."</p>
        <p>shipping carrier: ".$data['shipping_carrier']."</p>
        <p>Tracking Number :".$data['tracking_number']." (Please note that this tracking number can be used to track your shipment on the carrier's website)</p>
        <p>Tracking Url: ".$data['tracking_url']."</p>
        <p>Order Summary</p>
        <p>Order date: ".$convertdate."</p>
        <p>Products:List of products included in the shipment</p>
        <p>Important Information</p>
        <p>Please allow 3-5 business days for your shipment to be delivered.</p>
        <p>You will receive an update via email once the shipment has been delivered.</p>
        <p>If you have any questions or concerns regarding your payment, please do not hesitate to reach out to our customer service team. We are always here to assist you.</p>
        <p>Thank you for choosing Global Shippers Rwanda. We appreciate your business and look forward to serving you again in the future.</p>
        <p>Regards</p>
        <p>The GlobalshippersRwanda Team</p>";

        $internationalshipmentadminto = $adminemail; 
        $internationalshipmentadminsubject  =  'Shipment Details - Pickup Shipment - '.$order_id.'';
        $internationalshipmentadminmessage['msg'] = "<p>Dear Admin</p>
        <p>We are pleased to inform you that your Pickup Shipment, ".$data['order_id'].", has been successfully processed and is now ready for shipping.</p>
        <p>Below are the details of your shipment:</p>
        <p> Order Id: ".$data['order_id']."</p>
        <p>shipping carrier: ".$data['shipping_carrier']."</p>
        <p>Tracking Number :".$data['tracking_number']." (Please note that this tracking number can be used to track your shipment on the carrier's website)</p>
        <p>Tracking Url: ".$data['tracking_url']."</p>
        <p>Order Summary</p>
        <p>Order date: ".$convertdate."</p>
        <p>Products:List of products included in the shipment</p>
         <p>Important Information</p>
        <p>Please allow 3-5 business days for your shipment to be delivered.</p>
        <p>You will receive an update via email once the shipment has been delivered.</p>
        <p>Contact Information:</p>
        <p>Name: ".$users['fname']." ".$users['lname']."</p>
        <p>Email: ".$users['email']."</p>
        <p>Contact No: ".$users['phone']."</p>
        <p>Thank you for choosing Global Shippers Rwanda. We appreciate your business and look forward to serving you again in the future.</p>
        <p>Regards</p>
        <p>The GlobalshippersRwanda Team</p>"; 
        $this->internationalshipmentsendmail($internationalshipmentto, $internationalshipmentsubject, $internationalshipmentmessage);
        $this->internationalshipmentadminsendmail($internationalshipmentadminto, $internationalshipmentadminsubject, $internationalshipmentadminmessage);
       
        redirect(base_url().'international-order-details/'.$order_id,'refresh');
    }

    public function international_shipment_update_view(){
        $id = $this->uri->segment(3);
        $shipid= $this->uri->segment(4);
        $total['count']   = $this->Admin_model->count_notification();
        $data['shipment']  = $this->Admin_model->international_update_shipment_display($id,$shipid);
        $data['payupdate'] = $this->Admin_model->internationalpayupdate($data['shipment']->order_id);
        $data['payupdateusers'] = $this->Admin_model->payupdateusers($data['payupdate'][0]->user_id);
        $data['adminemail'] = $this->Gsr->getadminemail();
        $this->load->view('admin/heads',$total);
        $this->load->view('admin/international-edit-shipment',$data);
        $this->load->view('admin/footer');
    }

    public function intershipmentupsendmail($intershipmentupto, $intershipmentupsubject, $intershipmentupmessage) {

      $html = '<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Email Template</title>
  <style type="text/css">
    @media screen and (max-width: 600px),
    screen and (max-device-width: 600px) {
      body {
        margin: 0 !important;
        padding: 0 !important;
      }
    }
    @media screen and (-webkit-min-device-pixel-ratio: 0) and (max-width: 600px) {
      body {
        margin: 0 !important;
        padding: 0 !important;
      }
    }
a{
color: #000;
text-decoration:none;
}
  </style>
</head>
<body style="margin: 0; padding: 0; border: 0;">
  <table width="100%" align="center" cellpadding="0" cellspacing="0"
    border="0" dir="ltr" style="background-color: rgb(255, 255, 255);">
    <tbody>
      <tr>
        <td align="center" valign="top"
          style="margin: 0; padding: 0px 15px 0px;">
          <table width="600" align="center" border="0" cellspacing="0"
            cellpadding="0" style="width: 600px;">
            <tbody>
              <tr>
                <td align="center" valign="center"
                  style="margin: 0; background-color: #ffffff; background-size: cover; background-repeat: no-repeat; background-position: center center; padding: 30px 15px 40px;">
                  <table align="center" border="0" cellpadding="0"
                    cellspacing="0">
                    <tbody>
                      <tr>
                        <td valign="top" align="center"
                          style="padding: 0px; margin: 0px;">
                          <a href="#"><img src="https://globalshippersrwanda.com/assets/cms/img/logo-black.png" width="100"
                              style="border: none; font-weight: bold; max-height: 100px; height: auto; line-height: 100%; outline: none; text-decoration: none; text-transform: capitalize; border-width: 0px; border-style: none; border-color: transparent; font-size: 12px; display: block;"></a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </td>
              </tr>
              <tr> 
                <td align="center" valign="top"
                  style="margin: 0; padding: 0;">
                  <table width="100%" align="center" border="0"
                    cellpadding="0" cellspacing="0" bgcolor="#ffffff">
                    <tbody>
                     <tr>   
                        <td align="left" valign="top"
                          style="margin: 0px; padding: 30px 30px 10px 30px; background-color: rgb(255, 255,
                255); font-size: 16px; font-family: "Lato", Arial, Helvetica,
                          sans-serif; line-height: 1.33;">
                          <span style="font-family: "Lato", Arial, Helvetica,
                            sans-serif; color: #000000; font-size: 20px;">
                            <span style="font-weight: 700;"></span>
                          </span>
                        </td>

                      </tr>
                      <tr>   
                        <td align="left" valign="top"
                          style="margin: 0px; padding: 30px 30px 10px 30px; background-color: rgb(255, 255,
                255); font-size: 16px; font-family: "Lato", Arial, Helvetica,
                          sans-serif; line-height: 1.33;">
                          <span style="font-family: "Lato", Arial, Helvetica,
                            sans-serif; color: #000000; font-size: 20px;">
                            <span style="font-weight: 700;">'.$intershipmentupmessage['msg'].'</span>
                          </span>
                        </td>

                      </tr>

                    </tbody>
                  </table>
                  <table align="center" border="0" cellpadding="0"
                    cellspacing="0"
                    style="border-spacing: 0; margin: 0; padding: 0; border-spacing: 0px; -webkit-border-horizontal-spacing: 0px; -webkit-border-vertical-spacing: 0px; width: 100%">
                    <tr>
                      <td style="background: #ffffff;">
                        <table width="600" align="center" border="0"
                          cellpadding="0" cellspacing="0">
                          <tbody>
                            <tr>
                              <td valign="top" align="center"
                                style="padding: 30px 30px 20px 30px; font-family: "Lato"
                                ,Arial, Helvetica, sans-serif; margin: 0px;
                                font-size: 40px; color: #000000; font-weight:
                                bold;">
                               
                              </td>
                            </tr>
                            <tr>
                              <td valign="top" align="center"
                                style="padding: 0px 30px 10px 30px; margin: 0px; font-size: 15px; line-height: 23px; color: #000000;">
                                <span style="font-family: "Lato" ,Arial,
                                  Helvetica, sans-serif; color: #000000;
                                  font-size: 16px;">
                                 
                                </span>
                              </td>
                            </tr>
                            <tr>
                              <td valign="top" align="center"
                                style="padding: 10px 30px 40px 30px; margin: 0px; font-size: 15px; line-height: 23px; color: #fff;">
                                <a href="https://globalshippersrwanda.com/"
                                  style="padding: 10px 20px; color:#ffffff; font-size: 16px; font-family: "Lato"
                                  ,Arial, Helvetica, sans-serif; color:
                                  #ffffff; background-color: #000000;
                                  border-color: #000000; text-decoration:
                                  none; border-radius: 4px;">Visit Website</a>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>

              <tr>
                <td style="background:#ffffff;">
                  <table width="600">
                    <tr>
                      <td align="center"
                        style="padding: 20px 0px 10px 0; background:#ffffff; border-top: 1px solid #d1d1d1;">
                        <table width="600" align="center" border="0"
                          cellpadding="0" cellspacing="0">
                          <tbody>
                            <tr>
                              <td align="center" valign="top" nowrap
                                style="margin: 0px; padding: 0; font-size: 16px; font-family: "Lato",
                                Arial, Helvetica, sans-serif; line-height:
                                22px;">
                               
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                    <tr>
                      <td align="center"
                        style="padding: 0px 0px 20px 0; background:#ffffff;">
                        <table width="300" align="center" border="0"
                          cellpadding="0" cellspacing="0">
                          <tbody>
                            <tr>
                              <td align="center" valign="top" nowrap
                                style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                Arial, Helvetica, sans-serif;">
                                <a href="https://globalshippersrwanda.com/privacy"
                                  style="color: #000000; font-weight: normal; font-family: "Lato",
                                  Arial, Helvetica, sans-serif;
                                  text-decoration: none;">
                                  <span style="font-family: "Lato", Arial,
                                    Helvetica, sans-serif; color: #000000;
                                    font-size: 14px; white-space: nowrap;
                                    line-height: 22px;">Privacy Policy</span>
                                </a>
                              </td>
                              <td align="center" valign="top" nowrap
                                style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                Arial, Helvetica, sans-serif;">
                                <a href ="https://globalshippersrwanda.com/about-us"
                                  style="color: #2e3233; font-weight: normal; font-family: "Lato",
                                  Arial, Helvetica, sans-serif;
                                  text-decoration: none;">
                                  <span style="font-family: "Lato", Arial,
                                    Helvetica, sans-serif; color: #000000;
                                    font-size: 14px; white-space: nowrap;
                                    line-height: 22px;">About Us</span>
                                </a>
                              </td>
                              <td align="center" valign="top" nowrap
                                style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                Arial, Helvetica, sans-serif;">
                                <a href="https://globalshippersrwanda.com/contact-us"
                                  style="color: #000000; font-weight: normal; font-family: "Lato",
                                  Arial, Helvetica, sans-serif;
                                  text-decoration: none;">
                                  <span style="font-family: "Lato", Arial,
                                    Helvetica, sans-serif; color: #000000;
                                    font-size: 14px; white-space: nowrap;
                                    line-height: 22px;">Contact US</span>
                                </a>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
            </tbody>
          </table>
        </td>
      </tr>
    </tbody>
  </table>
</body>
</html>';



      
                      $mail = new PHPMailer(); 
                      $mail->IsSMTP(); 
                      $mail->SMTPAuth = true; 
                      $mail->SMTPSecure = 'tls'; 
                     $mail->Host = "mail.privateemail.com";
                      $mail->Port = 587; 
                      $mail->IsHTML(true);
                      $mail->CharSet = 'UTF-8';
                      //$mail->SMTPDebug = 2; 
                      $mail->Username = EMAIL_SMTP_GOOGLE;
                      $mail->Password = PASSWORD_SMTP_GOOGLE;
                      $mail->SetFrom("services@globalshippersrwanda.com");;
                      $mail->Subject = $intershipmentupsubject;
                      $mail->Body =$html;
                      $mail->AddAddress($intershipmentupto);
                      $mail->SMTPOptions=array('ssl'=>array (
                          'verify_peer'=>false,
                          'verify_peer_name'=>false,
                          'allow_self_signed'=>false
                      ));
                  if(!$mail->Send()){
                      echo $mail->ErrorInfo;
                  }else{
                      return  'Sent';
                  }
      }
      public function intershipmentupadminsendmail($intershipmentupadminto, $intershipmentupadminsubject, $intershipmentupadminmessage) {

          $html = '<!DOCTYPE html>
  <html lang="en-US">
    <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <title>Email Template</title>
      <style type="text/css">
        @media screen and (max-width: 600px),
        screen and (max-device-width: 600px) {
          body {
            margin: 0 !important;
            padding: 0 !important;
          }
        }
        @media screen and (-webkit-min-device-pixel-ratio: 0) and (max-width: 600px) {
          body {
            margin: 0 !important;
            padding: 0 !important;
          }
        }
    a{
    color: #000;
    text-decoration:none;
    }
      </style>
    </head>
    <body style="margin: 0; padding: 0; border: 0;">
      <table width="100%" align="center" cellpadding="0" cellspacing="0"
        border="0" dir="ltr" style="background-color: rgb(255, 255, 255);">
        <tbody>
          <tr>
            <td align="center" valign="top"
              style="margin: 0; padding: 0px 15px 0px;">
              <table width="600" align="center" border="0" cellspacing="0"
                cellpadding="0" style="width: 600px;">
                <tbody>
                  <tr>
                    <td align="center" valign="center"
                      style="margin: 0; background-color: #ffffff; background-size: cover; background-repeat: no-repeat; background-position: center center; padding: 30px 15px 40px;">
                      <table align="center" border="0" cellpadding="0"
                        cellspacing="0">
                        <tbody>
                          <tr>
                            <td valign="top" align="center"
                              style="padding: 0px; margin: 0px;">
                              <a href="#"><img src="https://globalshippersrwanda.com/assets/cms/img/logo-black.png" width="100"
                                  style="border: none; font-weight: bold; max-height: 100px; height: auto; line-height: 100%; outline: none; text-decoration: none; text-transform: capitalize; border-width: 0px; border-style: none; border-color: transparent; font-size: 12px; display: block;"></a>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                  <tr> 
                    <td align="center" valign="top"
                      style="margin: 0; padding: 0;">
                      <table width="100%" align="center" border="0"
                        cellpadding="0" cellspacing="0" bgcolor="#ffffff">
                        <tbody>
                         <tr>   
                            <td align="left" valign="top"
                              style="margin: 0px; padding: 30px 30px 10px 30px; background-color: rgb(255, 255,
                                      255); font-size: 16px; font-family: "Lato", Arial, Helvetica,
                              sans-serif; line-height: 1.33;">
                              <span style="font-family: "Lato", Arial, Helvetica,
                                sans-serif; color: #000000; font-size: 20px;">
                                <span style="font-weight: 700;"></span>
                              </span>
                            </td>
  
                          </tr>
                          <tr>   
                            <td align="left" valign="top"
                              style="margin: 0px; padding: 30px 30px 10px 30px; background-color: rgb(255, 255,
                                      255); font-size: 16px; font-family: "Lato", Arial, Helvetica,
                              sans-serif; line-height: 1.33;">
                              <span style="font-family: "Lato", Arial, Helvetica,
                                sans-serif; color: #000000; font-size: 20px;">
                                <span style="font-weight: 700;">'.$intershipmentupadminmessage['msg'].'</span>
                              </span>
                            </td>
  
                          </tr>
  
                        </tbody>
                      </table>
                      <table align="center" border="0" cellpadding="0"
                        cellspacing="0"
                        style="border-spacing: 0; margin: 0; padding: 0; border-spacing: 0px; -webkit-border-horizontal-spacing: 0px; -webkit-border-vertical-spacing: 0px; width: 100%">
                        <tr>
                          <td style="background: #ffffff;">
                            <table width="600" align="center" border="0"
                              cellpadding="0" cellspacing="0">
                              <tbody>
                                <tr>
                                  <td valign="top" align="center"
                                    style="padding: 30px 30px 20px 30px; font-family: "Lato"
                                    ,Arial, Helvetica, sans-serif; margin: 0px;
                                    font-size: 40px; color: #000000; font-weight:
                                    bold;">
                                   
                                  </td>
                                </tr>
                                <tr>
                                  <td valign="top" align="center"
                                    style="padding: 0px 30px 10px 30px; margin: 0px; font-size: 15px; line-height: 23px; color: #000000;">
                                    <span style="font-family: "Lato" ,Arial,
                                      Helvetica, sans-serif; color: #000000;
                                      font-size: 16px;">
                                     
                                    </span>
                                  </td>
                                </tr>
                                <tr>
                                  <td valign="top" align="center"
                                    style="padding: 10px 30px 40px 30px; margin: 0px; font-size: 15px; line-height: 23px; color: #fff;">
                                    <a href="https://globalshippersrwanda.com/"
                                      style="padding: 10px 20px; color:#ffffff; font-size: 16px; font-family: "Lato"
                                      ,Arial, Helvetica, sans-serif; color:
                                      #ffffff; background-color: #000000;
                                      border-color: #000000; text-decoration:
                                      none; border-radius: 4px;">Visit Website</a>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
  
                  <tr>
                    <td style="background:#ffffff;">
                      <table width="600">
                        <tr>
                          <td align="center"
                            style="padding: 20px 0px 10px 0; background:#ffffff; border-top: 1px solid #d1d1d1;">
                            <table width="600" align="center" border="0"
                              cellpadding="0" cellspacing="0">
                              <tbody>
                                <tr>
                                  <td align="center" valign="top" nowrap
                                    style="margin: 0px; padding: 0; font-size: 16px; font-family: "Lato",
                                    Arial, Helvetica, sans-serif; line-height:
                                    22px;">
                                   
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                        </tr>
                        <tr>
                          <td align="center"
                            style="padding: 0px 0px 20px 0; background:#ffffff;">
                            <table width="300" align="center" border="0"
                              cellpadding="0" cellspacing="0">
                              <tbody>
                                <tr>
                                  <td align="center" valign="top" nowrap
                                    style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                    Arial, Helvetica, sans-serif;">
                                    <a href="https://globalshippersrwanda.com/privacy"
                                      style="color: #000000; font-weight: normal; font-family: "Lato",
                                      Arial, Helvetica, sans-serif;
                                      text-decoration: none;">
                                      <span style="font-family: "Lato", Arial,
                                        Helvetica, sans-serif; color: #000000;
                                        font-size: 14px; white-space: nowrap;
                                        line-height: 22px;">Privacy Policy</span>
                                    </a>
                                  </td>
                                  <td align="center" valign="top" nowrap
                                    style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                    Arial, Helvetica, sans-serif;">
                                    <a href ="https://globalshippersrwanda.com/about-us"
                                      style="color: #2e3233; font-weight: normal; font-family: "Lato",
                                      Arial, Helvetica, sans-serif;
                                      text-decoration: none;">
                                      <span style="font-family: "Lato", Arial,
                                        Helvetica, sans-serif; color: #000000;
                                        font-size: 14px; white-space: nowrap;
                                        line-height: 22px;">About Us</span>
                                    </a>
                                  </td>
                                  <td align="center" valign="top" nowrap
                                    style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                    Arial, Helvetica, sans-serif;">
                                    <a href="https://globalshippersrwanda.com/contact-us"
                                      style="color: #000000; font-weight: normal; font-family: "Lato",
                                      Arial, Helvetica, sans-serif;
                                      text-decoration: none;">
                                      <span style="font-family: "Lato", Arial,
                                        Helvetica, sans-serif; color: #000000;
                                        font-size: 14px; white-space: nowrap;
                                        line-height: 22px;">Contact US</span>
                                    </a>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                </tbody>
              </table>
            </td>
          </tr>
        </tbody>
      </table>
    </body>
  </html>';
  
  
  
          
                          $mail = new PHPMailer(); 
                          $mail->IsSMTP(); 
                          $mail->SMTPAuth = true; 
                          $mail->SMTPSecure = 'tls'; 
                         $mail->Host = "mail.privateemail.com";
                          $mail->Port = 587; 
                          $mail->IsHTML(true);
                          $mail->CharSet = 'UTF-8';
                          //$mail->SMTPDebug = 2; 
                          $mail->Username = EMAIL_SMTP_GOOGLE;
                          $mail->Password = PASSWORD_SMTP_GOOGLE;
                          $mail->SetFrom("services@globalshippersrwanda.com");;
                          $mail->Subject = $intershipmentupadminsubject;
                          $mail->Body =$html;
                          $mail->AddAddress($intershipmentupadminto);
                          $mail->SMTPOptions=array('ssl'=>array (
                              'verify_peer'=>false,
                              'verify_peer_name'=>false,
                              'allow_self_signed'=>false
                          ));
                      if(!$mail->Send()){
                          echo $mail->ErrorInfo;
                      }else{
                          return  'Sent';
                      }
          }
    public function international_update_shipment(){
        $id = $this->input->post('id');
        $shipid= $this->input->post('shipid');
      //  echo "<pre>";
      //  print_r($shipid);
      //  exit;
        $shipment = [
            'shipping_carrier' => $this->input->post('carrier'),
            'tracking_number'=> $this->input->post('tracking'),
            'tracking_url'=> $this->input->post('url'),
            'update_date' => date('Y-m-d H:i:s')
        ];
        $users = [
          'email' => $this->input->post('email'),
          'phone' => $this->input->post('phone'),
          'fname' => $this->input->post('fname'),
          'lname' => $this->input->post('lname')
      ];
      $adminemail= $this->input->post('adminemail');
        
        $intershipmentupto = $users['email'];
        $intershipmentupsubject  ='Update on Your Shipment  - Pickup shipment - '.$id.'';
        $intershipmentupmessage['msg'] = "<p>Dear ".$users['fname']." ".$users['lname']. "</p>
        <p>We are pleased to inform you that your order has been shipped out from our warehouse. Below are the updated details for your shipment:</p>
        <p> Shipping Carrier: ".$shipment['shipping_carrier']."</p>
        <p>Tracking Number: ".$shipment['tracking_number']."</p>
        <p>Tracking Url:".$shipment['tracking_url']."</p>
        <p>Please note, you can track the status of your shipment by clicking on the tracking URL provided above.</p>
        <p>If you have any questions or concerns about your shipment, please do not hesitate to contact us. We are always here to help.</p>
        <p>Thank you for choosing Global Shippers Rwanda!</p>
        <p>Regards</p>
        <p>The GlobalshippersRwanda Team</p>";

        $intershipmentupadminto = $adminemail;
        $intershipmentupadminsubject  ='Update on Your Shipment  - Pickup shipment - '.$id.'';
        $intershipmentupadminmessage['msg'] = "<p>Dear Admin</p>
        <p>We are pleased to inform you that your order has been shipped out from our warehouse. Below are the updated details for your shipment:</p>
        <p> Shipping Carrier: ".$shipment['shipping_carrier']."</p>
        <p>Tracking Number: ".$shipment['tracking_number']."</p>
        <p>Tracking Url:".$shipment['tracking_url']."</p>
         <p>Please note, you can track the status of your shipment by clicking on the tracking URL provided above.</p>
         <p>Custome Information: </p>
         <p>Name: ".$users['fname']." ".$users['lname']."</p>
         <p>Email: ".$users['email']."</p>
         <p>Contact No: ".$users['phone']."</p>
         <p>Thank you for choosing Global Shippers Rwanda!</p>
        <p>Regards</p>
        <p>The GlobalshippersRwanda Team</p>";
       $useremail = $this->intershipmentupsendmail($intershipmentupto, $intershipmentupsubject, $intershipmentupmessage);
       $adminemail= $this->intershipmentupadminsendmail($intershipmentupadminto, $intershipmentupadminsubject, $intershipmentupadminmessage);
      
        $shipmentresult = $this->Admin_model->international_update_shipment($id,$shipment,$shipid);
       // echo json_encode($shipment);
        if($shipmentresult==TRUE){
            redirect(base_url().'international-order-details/'.$id);
        }
        else{
           redirect(base_url().'international-order-details/'.$id);
        }
    }
    public function international_delete_shipment(){
        $id = $this->uri->segment(3);
        $shipid= $this->uri->segment(4);
        $result = $this->Admin_model->international_delete_shipment($id,$shipid);
       // echo json_encode($resutl);
        if($result==TRUE){
            redirect(base_url().'international-order-details/'.$id);
        }
        else{
            redirect(base_url().'international-order-details/'.$id);
        }
    }

    public function shopnship_shipment_update_view(){
        $id = $this->uri->segment(3);
        $shipmentid= $this->uri->segment(4);
        $total['count']   = $this->Admin_model->count_notification();
        $data['shipment']  = $this->Admin_model->shopnship_update_shipment_display($id,$shipmentid);
        $data['payupdate'] = $this->Admin_model->shopnshippayupdate($data['shipment']->order_id);
        $data['payupdateusers'] = $this->Admin_model->payupdateusers($data['payupdate'][0]->user_id);
        $data['adminemail'] = $this->Gsr->getadminemail();
        $this->load->view('admin/heads',$total);
        $this->load->view('admin/shopnship-edit-shipment',$data);
        $this->load->view('admin/footer');
    }

    public function shopshipmentupsendmail($shopshipmentupto, $shopshipmentupsubject, $shopshipmentupmessage) {

      $html = '<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Email Template</title>
  <style type="text/css">
    @media screen and (max-width: 600px),
    screen and (max-device-width: 600px) {
      body {
        margin: 0 !important;
        padding: 0 !important;
      }
    }
    @media screen and (-webkit-min-device-pixel-ratio: 0) and (max-width: 600px) {
      body {
        margin: 0 !important;
        padding: 0 !important;
      }
    }
a{
color: #000;
text-decoration:none;
}
  </style>
</head>
<body style="margin: 0; padding: 0; border: 0;">
  <table width="100%" align="center" cellpadding="0" cellspacing="0"
    border="0" dir="ltr" style="background-color: rgb(255, 255, 255);">
    <tbody>
      <tr>
        <td align="center" valign="top"
          style="margin: 0; padding: 0px 15px 0px;">
          <table width="600" align="center" border="0" cellspacing="0"
            cellpadding="0" style="width: 600px;">
            <tbody>
              <tr>
                <td align="center" valign="center"
                  style="margin: 0; background-color: #ffffff; background-size: cover; background-repeat: no-repeat; background-position: center center; padding: 30px 15px 40px;">
                  <table align="center" border="0" cellpadding="0"
                    cellspacing="0">
                    <tbody>
                      <tr>
                        <td valign="top" align="center"
                          style="padding: 0px; margin: 0px;">
                          <a href="#"><img src="https://globalshippersrwanda.com/assets/cms/img/logo-black.png" width="100"
                              style="border: none; font-weight: bold; max-height: 100px; height: auto; line-height: 100%; outline: none; text-decoration: none; text-transform: capitalize; border-width: 0px; border-style: none; border-color: transparent; font-size: 12px; display: block;"></a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </td>
              </tr>
              <tr> 
                <td align="center" valign="top"
                  style="margin: 0; padding: 0;">
                  <table width="100%" align="center" border="0"
                    cellpadding="0" cellspacing="0" bgcolor="#ffffff">
                    <tbody>
                     <tr>   
                        <td align="left" valign="top"
                          style="margin: 0px; padding: 30px 30px 10px 30px; background-color: rgb(255, 255,
                255); font-size: 16px; font-family: "Lato", Arial, Helvetica,
                          sans-serif; line-height: 1.33;">
                          <span style="font-family: "Lato", Arial, Helvetica,
                            sans-serif; color: #000000; font-size: 20px;">
                            <span style="font-weight: 700;"></span>
                          </span>
                        </td>

                      </tr>
                      <tr>   
                        <td align="left" valign="top"
                          style="margin: 0px; padding: 30px 30px 10px 30px; background-color: rgb(255, 255,
                255); font-size: 16px; font-family: "Lato", Arial, Helvetica,
                          sans-serif; line-height: 1.33;">
                          <span style="font-family: "Lato", Arial, Helvetica,
                            sans-serif; color: #000000; font-size: 20px;">
                            <span style="font-weight: 700;">'.$shopshipmentupmessage['msg'].'</span>
                          </span>
                        </td>

                      </tr>

                    </tbody>
                  </table>
                  <table align="center" border="0" cellpadding="0"
                    cellspacing="0"
                    style="border-spacing: 0; margin: 0; padding: 0; border-spacing: 0px; -webkit-border-horizontal-spacing: 0px; -webkit-border-vertical-spacing: 0px; width: 100%">
                    <tr>
                      <td style="background: #ffffff;">
                        <table width="600" align="center" border="0"
                          cellpadding="0" cellspacing="0">
                          <tbody>
                            <tr>
                              <td valign="top" align="center"
                                style="padding: 30px 30px 20px 30px; font-family: "Lato"
                                ,Arial, Helvetica, sans-serif; margin: 0px;
                                font-size: 40px; color: #000000; font-weight:
                                bold;">
                               
                              </td>
                            </tr>
                            <tr>
                              <td valign="top" align="center"
                                style="padding: 0px 30px 10px 30px; margin: 0px; font-size: 15px; line-height: 23px; color: #000000;">
                                <span style="font-family: "Lato" ,Arial,
                                  Helvetica, sans-serif; color: #000000;
                                  font-size: 16px;">
                                 
                                </span>
                              </td>
                            </tr>
                            <tr>
                              <td valign="top" align="center"
                                style="padding: 10px 30px 40px 30px; margin: 0px; font-size: 15px; line-height: 23px; color: #fff;">
                                <a href="https://globalshippersrwanda.com/"
                                  style="padding: 10px 20px; color:#ffffff; font-size: 16px; font-family: "Lato"
                                  ,Arial, Helvetica, sans-serif; color:
                                  #ffffff; background-color: #000000;
                                  border-color: #000000; text-decoration:
                                  none; border-radius: 4px;">Visit Website</a>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>

              <tr>
                <td style="background:#ffffff;">
                  <table width="600">
                    <tr>
                      <td align="center"
                        style="padding: 20px 0px 10px 0; background:#ffffff; border-top: 1px solid #d1d1d1;">
                        <table width="600" align="center" border="0"
                          cellpadding="0" cellspacing="0">
                          <tbody>
                            <tr>
                              <td align="center" valign="top" nowrap
                                style="margin: 0px; padding: 0; font-size: 16px; font-family: "Lato",
                                Arial, Helvetica, sans-serif; line-height:
                                22px;">
                               
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                    <tr>
                      <td align="center"
                        style="padding: 0px 0px 20px 0; background:#ffffff;">
                        <table width="300" align="center" border="0"
                          cellpadding="0" cellspacing="0">
                          <tbody>
                            <tr>
                              <td align="center" valign="top" nowrap
                                style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                Arial, Helvetica, sans-serif;">
                                <a href="https://globalshippersrwanda.com/privacy"
                                  style="color: #000000; font-weight: normal; font-family: "Lato",
                                  Arial, Helvetica, sans-serif;
                                  text-decoration: none;">
                                  <span style="font-family: "Lato", Arial,
                                    Helvetica, sans-serif; color: #000000;
                                    font-size: 14px; white-space: nowrap;
                                    line-height: 22px;">Privacy Policy</span>
                                </a>
                              </td>
                              <td align="center" valign="top" nowrap
                                style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                Arial, Helvetica, sans-serif;">
                                <a href ="https://globalshippersrwanda.com/about-us"
                                  style="color: #2e3233; font-weight: normal; font-family: "Lato",
                                  Arial, Helvetica, sans-serif;
                                  text-decoration: none;">
                                  <span style="font-family: "Lato", Arial,
                                    Helvetica, sans-serif; color: #000000;
                                    font-size: 14px; white-space: nowrap;
                                    line-height: 22px;">About Us</span>
                                </a>
                              </td>
                              <td align="center" valign="top" nowrap
                                style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                Arial, Helvetica, sans-serif;">
                                <a href="https://globalshippersrwanda.com/contact-us"
                                  style="color: #000000; font-weight: normal; font-family: "Lato",
                                  Arial, Helvetica, sans-serif;
                                  text-decoration: none;">
                                  <span style="font-family: "Lato", Arial,
                                    Helvetica, sans-serif; color: #000000;
                                    font-size: 14px; white-space: nowrap;
                                    line-height: 22px;">Contact US</span>
                                </a>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
            </tbody>
          </table>
        </td>
      </tr>
    </tbody>
  </table>
</body>
</html>';



      
                      $mail = new PHPMailer(); 
                      $mail->IsSMTP(); 
                      $mail->SMTPAuth = true; 
                      $mail->SMTPSecure = 'tls'; 
                     $mail->Host = "mail.privateemail.com";
                      $mail->Port = 587; 
                      $mail->IsHTML(true);
                      $mail->CharSet = 'UTF-8';
                      //$mail->SMTPDebug = 2; 
                      $mail->Username = EMAIL_SMTP_GOOGLE;
                      $mail->Password = PASSWORD_SMTP_GOOGLE;
                      $mail->SetFrom("services@globalshippersrwanda.com");;
                      $mail->Subject = $shopshipmentupsubject;
                      $mail->Body =$html;
                      $mail->AddAddress($shopshipmentupto);
                      $mail->SMTPOptions=array('ssl'=>array (
                          'verify_peer'=>false,
                          'verify_peer_name'=>false,
                          'allow_self_signed'=>false
                      ));
                  if(!$mail->Send()){
                      echo $mail->ErrorInfo;
                  }else{
                      return  'Sent';
                  }
      }
      public function shopshipmentupadminsendmail($shopshipmentupadminto, $shopshipmentupadminsubject, $shopshipmentupadminmessage) {

          $html = '<!DOCTYPE html>
  <html lang="en-US">
    <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <title>Email Template</title>
      <style type="text/css">
        @media screen and (max-width: 600px),
        screen and (max-device-width: 600px) {
          body {
            margin: 0 !important;
            padding: 0 !important;
          }
        }
        @media screen and (-webkit-min-device-pixel-ratio: 0) and (max-width: 600px) {
          body {
            margin: 0 !important;
            padding: 0 !important;
          }
        }
    a{
    color: #000;
    text-decoration:none;
    }
      </style>
    </head>
    <body style="margin: 0; padding: 0; border: 0;">
      <table width="100%" align="center" cellpadding="0" cellspacing="0"
        border="0" dir="ltr" style="background-color: rgb(255, 255, 255);">
        <tbody>
          <tr>
            <td align="center" valign="top"
              style="margin: 0; padding: 0px 15px 0px;">
              <table width="600" align="center" border="0" cellspacing="0"
                cellpadding="0" style="width: 600px;">
                <tbody>
                  <tr>
                    <td align="center" valign="center"
                      style="margin: 0; background-color: #ffffff; background-size: cover; background-repeat: no-repeat; background-position: center center; padding: 30px 15px 40px;">
                      <table align="center" border="0" cellpadding="0"
                        cellspacing="0">
                        <tbody>
                          <tr>
                            <td valign="top" align="center"
                              style="padding: 0px; margin: 0px;">
                              <a href="#"><img src="https://globalshippersrwanda.com/assets/cms/img/logo-black.png" width="100"
                                  style="border: none; font-weight: bold; max-height: 100px; height: auto; line-height: 100%; outline: none; text-decoration: none; text-transform: capitalize; border-width: 0px; border-style: none; border-color: transparent; font-size: 12px; display: block;"></a>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                  <tr> 
                    <td align="center" valign="top"
                      style="margin: 0; padding: 0;">
                      <table width="100%" align="center" border="0"
                        cellpadding="0" cellspacing="0" bgcolor="#ffffff">
                        <tbody>
                         <tr>   
                            <td align="left" valign="top"
                              style="margin: 0px; padding: 30px 30px 10px 30px; background-color: rgb(255, 255,
                                      255); font-size: 16px; font-family: "Lato", Arial, Helvetica,
                              sans-serif; line-height: 1.33;">
                              <span style="font-family: "Lato", Arial, Helvetica,
                                sans-serif; color: #000000; font-size: 20px;">
                                <span style="font-weight: 700;"></span>
                              </span>
                            </td>
  
                          </tr>
                          <tr>   
                            <td align="left" valign="top"
                              style="margin: 0px; padding: 30px 30px 10px 30px; background-color: rgb(255, 255,
                                      255); font-size: 16px; font-family: "Lato", Arial, Helvetica,
                              sans-serif; line-height: 1.33;">
                              <span style="font-family: "Lato", Arial, Helvetica,
                                sans-serif; color: #000000; font-size: 20px;">
                                <span style="font-weight: 700;">'.$shopshipmentupadminmessage['msg'].'</span>
                              </span>
                            </td>
  
                          </tr>
  
                        </tbody>
                      </table>
                      <table align="center" border="0" cellpadding="0"
                        cellspacing="0"
                        style="border-spacing: 0; margin: 0; padding: 0; border-spacing: 0px; -webkit-border-horizontal-spacing: 0px; -webkit-border-vertical-spacing: 0px; width: 100%">
                        <tr>
                          <td style="background: #ffffff;">
                            <table width="600" align="center" border="0"
                              cellpadding="0" cellspacing="0">
                              <tbody>
                                <tr>
                                  <td valign="top" align="center"
                                    style="padding: 30px 30px 20px 30px; font-family: "Lato"
                                    ,Arial, Helvetica, sans-serif; margin: 0px;
                                    font-size: 40px; color: #000000; font-weight:
                                    bold;">
                                   
                                  </td>
                                </tr>
                                <tr>
                                  <td valign="top" align="center"
                                    style="padding: 0px 30px 10px 30px; margin: 0px; font-size: 15px; line-height: 23px; color: #000000;">
                                    <span style="font-family: "Lato" ,Arial,
                                      Helvetica, sans-serif; color: #000000;
                                      font-size: 16px;">
                                     
                                    </span>
                                  </td>
                                </tr>
                                <tr>
                                  <td valign="top" align="center"
                                    style="padding: 10px 30px 40px 30px; margin: 0px; font-size: 15px; line-height: 23px; color: #fff;">
                                    <a href="https://globalshippersrwanda.com/"
                                      style="padding: 10px 20px; color:#ffffff; font-size: 16px; font-family: "Lato"
                                      ,Arial, Helvetica, sans-serif; color:
                                      #ffffff; background-color: #000000;
                                      border-color: #000000; text-decoration:
                                      none; border-radius: 4px;">Visit Website</a>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
  
                  <tr>
                    <td style="background:#ffffff;">
                      <table width="600">
                        <tr>
                          <td align="center"
                            style="padding: 20px 0px 10px 0; background:#ffffff; border-top: 1px solid #d1d1d1;">
                            <table width="600" align="center" border="0"
                              cellpadding="0" cellspacing="0">
                              <tbody>
                                <tr>
                                  <td align="center" valign="top" nowrap
                                    style="margin: 0px; padding: 0; font-size: 16px; font-family: "Lato",
                                    Arial, Helvetica, sans-serif; line-height:
                                    22px;">
                                   
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                        </tr>
                        <tr>
                          <td align="center"
                            style="padding: 0px 0px 20px 0; background:#ffffff;">
                            <table width="300" align="center" border="0"
                              cellpadding="0" cellspacing="0">
                              <tbody>
                                <tr>
                                  <td align="center" valign="top" nowrap
                                    style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                    Arial, Helvetica, sans-serif;">
                                    <a href="https://globalshippersrwanda.com/privacy"
                                      style="color: #000000; font-weight: normal; font-family: "Lato",
                                      Arial, Helvetica, sans-serif;
                                      text-decoration: none;">
                                      <span style="font-family: "Lato", Arial,
                                        Helvetica, sans-serif; color: #000000;
                                        font-size: 14px; white-space: nowrap;
                                        line-height: 22px;">Privacy Policy</span>
                                    </a>
                                  </td>
                                  <td align="center" valign="top" nowrap
                                    style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                    Arial, Helvetica, sans-serif;">
                                    <a href ="https://globalshippersrwanda.com/about-us"
                                      style="color: #2e3233; font-weight: normal; font-family: "Lato",
                                      Arial, Helvetica, sans-serif;
                                      text-decoration: none;">
                                      <span style="font-family: "Lato", Arial,
                                        Helvetica, sans-serif; color: #000000;
                                        font-size: 14px; white-space: nowrap;
                                        line-height: 22px;">About Us</span>
                                    </a>
                                  </td>
                                  <td align="center" valign="top" nowrap
                                    style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                    Arial, Helvetica, sans-serif;">
                                    <a href="https://globalshippersrwanda.com/contact-us"
                                      style="color: #000000; font-weight: normal; font-family: "Lato",
                                      Arial, Helvetica, sans-serif;
                                      text-decoration: none;">
                                      <span style="font-family: "Lato", Arial,
                                        Helvetica, sans-serif; color: #000000;
                                        font-size: 14px; white-space: nowrap;
                                        line-height: 22px;">Contact US</span>
                                    </a>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                </tbody>
              </table>
            </td>
          </tr>
        </tbody>
      </table>
    </body>
  </html>';
  
  
  
          
                          $mail = new PHPMailer(); 
                          $mail->IsSMTP(); 
                          $mail->SMTPAuth = true; 
                          $mail->SMTPSecure = 'tls'; 
                         $mail->Host = "mail.privateemail.com";
                          $mail->Port = 587; 
                          $mail->IsHTML(true);
                          $mail->CharSet = 'UTF-8';
                          //$mail->SMTPDebug = 2; 
                          $mail->Username = EMAIL_SMTP_GOOGLE;
                          $mail->Password = PASSWORD_SMTP_GOOGLE;
                          $mail->SetFrom("services@globalshippersrwanda.com");;
                          $mail->Subject = $shopshipmentupadminsubject;
                          $mail->Body =$html;
                          $mail->AddAddress($shopshipmentupadminto);
                          $mail->SMTPOptions=array('ssl'=>array (
                              'verify_peer'=>false,
                              'verify_peer_name'=>false,
                              'allow_self_signed'=>false
                          ));
                      if(!$mail->Send()){
                          echo $mail->ErrorInfo;
                      }else{
                          return  'Sent';
                      }
          }

    public function shopnship_update_shipment(){
        $id = $this->input->post('id');
        $shipmentid= $this->input->post('shipmentid');
        $shipment = [
            'shipping_carrier' => $this->input->post('carrier'),
            'tracking_number'=> $this->input->post('tracking'),
            'tracking_url'=> $this->input->post('url'),
            'update_date' => date('Y-m-d H:i:s')
        ];
        $users = [
          'email' => $this->input->post('email'),
          'phone' => $this->input->post('phone'),
          'fname' => $this->input->post('fname'),
          'lname' => $this->input->post('lname')
      ];
      $adminemail= $this->input->post('adminemail');
        $shipmentresult = $this->Admin_model->shopnship_update_shipment($id,$shipment,$shipmentid);
        $shopshipmentupto = $users['email'];
        $shopshipmentupsubject  = 'Update on Your Shipment  - Consolidate shipment - '.$id.'';
        $shopshipmentupmessage['msg'] = "<p>Dear ".$users['fname']." ".$users['lname']. "</p>
        <p>We are pleased to inform you that your order has been shipped out from our warehouse. Below are the updated details for your shipment:</p>
        <p> Shipping Carrier: ".$shipment['shipping_carrier']."</p>
        <p>Tracking Number: ".$shipment['tracking_number']."</p>
        <p>Tracking Url:".$shipment['tracking_url']."</p>
        <p>Please note, you can track the status of your shipment by clicking on the tracking URL provided above.</p>
        <p>If you have any questions or concerns about your shipment, please do not hesitate to contact us. We are always here to help.</p>
        <p>Thank you for choosing Global Shippers Rwanda!</p>
        <p>Regards</p>
        <p>The GlobalshippersRwanda Team</p>";

        $shopshipmentupadminto = $adminemail;
        $shopshipmentupadminsubject  = 'Update on Your Shipment  - Consolidate shipment - '.$id.'';
        $shopshipmentupadminmessage['msg'] = "<p>Dear Admin</p>
        <p>We are pleased to inform you that your order has been shipped out from our warehouse. Below are the updated details for your shipment:</p>
        <p> Shipping Carrier: ".$shipment['shipping_carrier']."</p>
        <p>Tracking Number: ".$shipment['tracking_number']."</p>
        <p>Tracking Url:".$shipment['tracking_url']."</p>
         <p>Please note, you can track the status of your shipment by clicking on the tracking URL provided above.</p>
         <p>Custome Information: </p>
         <p>Name: ".$users['fname']." ".$users['lname']."</p>
         <p>Email: ".$users['email']."</p>
         <p>Contact No: ".$users['phone']."</p>
         <p>Thank you for choosing Global Shippers Rwanda!</p>
        <p>Regards</p>
        <p>The GlobalshippersRwanda Team</p>";
        $this->shopshipmentupsendmail($shopshipmentupto, $shopshipmentupsubject, $shopshipmentupmessage);
        $this->shopshipmentupadminsendmail($shopshipmentupadminto, $shopshipmentupadminsubject, $shopshipmentupadminmessage);
       // echo json_encode($shipment);
        if($shipmentresult==TRUE){
            redirect(base_url().'shopnship-order-details/'.$id);
        }
        else{
           redirect(base_url().'shopnship-order-details/'.$id);
        }
    }
    public function shopnship_delete_shipment(){
        $id = $this->uri->segment(3);
        $shipmentid = $this->uri->segment(4);
        $result = $this->Admin_model->shopnship_delete_shipment($id,$shipmentid);
        echo json_encode($resutl);
        if($result==TRUE){
            redirect(base_url().'shopnship-order-details/'.$id);
        }
        else{
            redirect(base_url().'shopnship-order-details/'.$id);
        }
    }

    public function assisted_shipment_update_view(){
        $id = $this->uri->segment(3);
        $shipid = $this->uri->segment(4);
        $total['count']   = $this->Admin_model->count_notification();
        $data['shipment']  = $this->Admin_model->assisted_update_shipment_display($id,$shipid);
        $data['payupdate'] = $this->Admin_model->payupdate($data['shipment']->order_id);
        $data['payupdateusers'] = $this->Admin_model->payupdateusers($data['payupdate'][0]->user_id);
        $data['adminemail'] = $this->Gsr->getadminemail();
        $this->load->view('admin/heads',$total);
        $this->load->view('admin/assisted-edit-shipment',$data);
        $this->load->view('admin/footer');
    }

    public function assistedshipmentupsendmail($assistedshipmentupto, $assistedshipmentupsubject, $assistedshipmentupmessage) {

      $html = '<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Email Template</title>
  <style type="text/css">
    @media screen and (max-width: 600px),
    screen and (max-device-width: 600px) {
      body {
        margin: 0 !important;
        padding: 0 !important;
      }
    }
    @media screen and (-webkit-min-device-pixel-ratio: 0) and (max-width: 600px) {
      body {
        margin: 0 !important;
        padding: 0 !important;
      }
    }
a{
color: #000;
text-decoration:none;
}
  </style>
</head>
<body style="margin: 0; padding: 0; border: 0;">
  <table width="100%" align="center" cellpadding="0" cellspacing="0"
    border="0" dir="ltr" style="background-color: rgb(255, 255, 255);">
    <tbody>
      <tr>
        <td align="center" valign="top"
          style="margin: 0; padding: 0px 15px 0px;">
          <table width="600" align="center" border="0" cellspacing="0"
            cellpadding="0" style="width: 600px;">
            <tbody>
              <tr>
                <td align="center" valign="center"
                  style="margin: 0; background-color: #ffffff; background-size: cover; background-repeat: no-repeat; background-position: center center; padding: 30px 15px 40px;">
                  <table align="center" border="0" cellpadding="0"
                    cellspacing="0">
                    <tbody>
                      <tr>
                        <td valign="top" align="center"
                          style="padding: 0px; margin: 0px;">
                          <a href="#"><img src="https://globalshippersrwanda.com/assets/cms/img/logo-black.png" width="100"
                              style="border: none; font-weight: bold; max-height: 100px; height: auto; line-height: 100%; outline: none; text-decoration: none; text-transform: capitalize; border-width: 0px; border-style: none; border-color: transparent; font-size: 12px; display: block;"></a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </td>
              </tr>
              <tr> 
                <td align="center" valign="top"
                  style="margin: 0; padding: 0;">
                  <table width="100%" align="center" border="0"
                    cellpadding="0" cellspacing="0" bgcolor="#ffffff">
                    <tbody>
                     <tr>   
                        <td align="left" valign="top"
                          style="margin: 0px; padding: 30px 30px 10px 30px; background-color: rgb(255, 255,
                255); font-size: 16px; font-family: "Lato", Arial, Helvetica,
                          sans-serif; line-height: 1.33;">
                          <span style="font-family: "Lato", Arial, Helvetica,
                            sans-serif; color: #000000; font-size: 20px;">
                            <span style="font-weight: 700;"></span>
                          </span>
                        </td>

                      </tr>
                      <tr>   
                        <td align="left" valign="top"
                          style="margin: 0px; padding: 30px 30px 10px 30px; background-color: rgb(255, 255,
                255); font-size: 16px; font-family: "Lato", Arial, Helvetica,
                          sans-serif; line-height: 1.33;">
                          <span style="font-family: "Lato", Arial, Helvetica,
                            sans-serif; color: #000000; font-size: 20px;">
                            <span style="font-weight: 700;">'.$assistedshipmentupmessage['msg'].'</span>
                          </span>
                        </td>

                      </tr>

                    </tbody>
                  </table>
                  <table align="center" border="0" cellpadding="0"
                    cellspacing="0"
                    style="border-spacing: 0; margin: 0; padding: 0; border-spacing: 0px; -webkit-border-horizontal-spacing: 0px; -webkit-border-vertical-spacing: 0px; width: 100%">
                    <tr>
                      <td style="background: #ffffff;">
                        <table width="600" align="center" border="0"
                          cellpadding="0" cellspacing="0">
                          <tbody>
                            <tr>
                              <td valign="top" align="center"
                                style="padding: 30px 30px 20px 30px; font-family: "Lato"
                                ,Arial, Helvetica, sans-serif; margin: 0px;
                                font-size: 40px; color: #000000; font-weight:
                                bold;">
                               
                              </td>
                            </tr>
                            <tr>
                              <td valign="top" align="center"
                                style="padding: 0px 30px 10px 30px; margin: 0px; font-size: 15px; line-height: 23px; color: #000000;">
                                <span style="font-family: "Lato" ,Arial,
                                  Helvetica, sans-serif; color: #000000;
                                  font-size: 16px;">
                                 
                                </span>
                              </td>
                            </tr>
                            <tr>
                              <td valign="top" align="center"
                                style="padding: 10px 30px 40px 30px; margin: 0px; font-size: 15px; line-height: 23px; color: #fff;">
                                <a href="https://globalshippersrwanda.com/"
                                  style="padding: 10px 20px; color:#ffffff; font-size: 16px; font-family: "Lato"
                                  ,Arial, Helvetica, sans-serif; color:
                                  #ffffff; background-color: #000000;
                                  border-color: #000000; text-decoration:
                                  none; border-radius: 4px;">Visit Website</a>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>

              <tr>
                <td style="background:#ffffff;">
                  <table width="600">
                    <tr>
                      <td align="center"
                        style="padding: 20px 0px 10px 0; background:#ffffff; border-top: 1px solid #d1d1d1;">
                        <table width="600" align="center" border="0"
                          cellpadding="0" cellspacing="0">
                          <tbody>
                            <tr>
                              <td align="center" valign="top" nowrap
                                style="margin: 0px; padding: 0; font-size: 16px; font-family: "Lato",
                                Arial, Helvetica, sans-serif; line-height:
                                22px;">
                               
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                    <tr>
                      <td align="center"
                        style="padding: 0px 0px 20px 0; background:#ffffff;">
                        <table width="300" align="center" border="0"
                          cellpadding="0" cellspacing="0">
                          <tbody>
                            <tr>
                              <td align="center" valign="top" nowrap
                                style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                Arial, Helvetica, sans-serif;">
                                <a href="https://globalshippersrwanda.com/privacy"
                                  style="color: #000000; font-weight: normal; font-family: "Lato",
                                  Arial, Helvetica, sans-serif;
                                  text-decoration: none;">
                                  <span style="font-family: "Lato", Arial,
                                    Helvetica, sans-serif; color: #000000;
                                    font-size: 14px; white-space: nowrap;
                                    line-height: 22px;">Privacy Policy</span>
                                </a>
                              </td>
                              <td align="center" valign="top" nowrap
                                style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                Arial, Helvetica, sans-serif;">
                                <a href ="https://globalshippersrwanda.com/about-us"
                                  style="color: #2e3233; font-weight: normal; font-family: "Lato",
                                  Arial, Helvetica, sans-serif;
                                  text-decoration: none;">
                                  <span style="font-family: "Lato", Arial,
                                    Helvetica, sans-serif; color: #000000;
                                    font-size: 14px; white-space: nowrap;
                                    line-height: 22px;">About Us</span>
                                </a>
                              </td>
                              <td align="center" valign="top" nowrap
                                style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                Arial, Helvetica, sans-serif;">
                                <a href="https://globalshippersrwanda.com/contact-us"
                                  style="color: #000000; font-weight: normal; font-family: "Lato",
                                  Arial, Helvetica, sans-serif;
                                  text-decoration: none;">
                                  <span style="font-family: "Lato", Arial,
                                    Helvetica, sans-serif; color: #000000;
                                    font-size: 14px; white-space: nowrap;
                                    line-height: 22px;">Contact US</span>
                                </a>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
            </tbody>
          </table>
        </td>
      </tr>
    </tbody>
  </table>
</body>
</html>';



      
                      $mail = new PHPMailer(); 
                      $mail->IsSMTP(); 
                      $mail->SMTPAuth = true; 
                      $mail->SMTPSecure = 'tls'; 
                     $mail->Host = "mail.privateemail.com";
                      $mail->Port = 587; 
                      $mail->IsHTML(true);
                      $mail->CharSet = 'UTF-8';
                      //$mail->SMTPDebug = 2; 
                      $mail->Username = EMAIL_SMTP_GOOGLE;
                      $mail->Password = PASSWORD_SMTP_GOOGLE;
                      $mail->SetFrom("services@globalshippersrwanda.com");;
                      $mail->Subject = $assistedshipmentupsubject;
                      $mail->Body =$html;
                      $mail->AddAddress($assistedshipmentupto);
                      $mail->SMTPOptions=array('ssl'=>array (
                          'verify_peer'=>false,
                          'verify_peer_name'=>false,
                          'allow_self_signed'=>false
                      ));
                  if(!$mail->Send()){
                      echo $mail->ErrorInfo;
                  }else{
                      return  'Sent';
                  }
      }
      public function assistedshipmentupadminsendmail($assistedshipmentupadminto, $assistedshipmentupadminsubject, $assistedshipmentupadminmessage) {

          $html = '<!DOCTYPE html>
  <html lang="en-US">
    <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <title>Email Template</title>
      <style type="text/css">
        @media screen and (max-width: 600px),
        screen and (max-device-width: 600px) {
          body {
            margin: 0 !important;
            padding: 0 !important;
          }
        }
        @media screen and (-webkit-min-device-pixel-ratio: 0) and (max-width: 600px) {
          body {
            margin: 0 !important;
            padding: 0 !important;
          }
        }
    a{
    color: #000;
    text-decoration:none;
    }
      </style>
    </head>
    <body style="margin: 0; padding: 0; border: 0;">
      <table width="100%" align="center" cellpadding="0" cellspacing="0"
        border="0" dir="ltr" style="background-color: rgb(255, 255, 255);">
        <tbody>
          <tr>
            <td align="center" valign="top"
              style="margin: 0; padding: 0px 15px 0px;">
              <table width="600" align="center" border="0" cellspacing="0"
                cellpadding="0" style="width: 600px;">
                <tbody>
                  <tr>
                    <td align="center" valign="center"
                      style="margin: 0; background-color: #ffffff; background-size: cover; background-repeat: no-repeat; background-position: center center; padding: 30px 15px 40px;">
                      <table align="center" border="0" cellpadding="0"
                        cellspacing="0">
                        <tbody>
                          <tr>
                            <td valign="top" align="center"
                              style="padding: 0px; margin: 0px;">
                              <a href="#"><img src="https://globalshippersrwanda.com/assets/cms/img/logo-black.png" width="100"
                                  style="border: none; font-weight: bold; max-height: 100px; height: auto; line-height: 100%; outline: none; text-decoration: none; text-transform: capitalize; border-width: 0px; border-style: none; border-color: transparent; font-size: 12px; display: block;"></a>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                  <tr> 
                    <td align="center" valign="top"
                      style="margin: 0; padding: 0;">
                      <table width="100%" align="center" border="0"
                        cellpadding="0" cellspacing="0" bgcolor="#ffffff">
                        <tbody>
                         <tr>   
                            <td align="left" valign="top"
                              style="margin: 0px; padding: 30px 30px 10px 30px; background-color: rgb(255, 255,
                                      255); font-size: 16px; font-family: "Lato", Arial, Helvetica,
                              sans-serif; line-height: 1.33;">
                              <span style="font-family: "Lato", Arial, Helvetica,
                                sans-serif; color: #000000; font-size: 20px;">
                                <span style="font-weight: 700;"></span>
                              </span>
                            </td>
  
                          </tr>
                          <tr>   
                            <td align="left" valign="top"
                              style="margin: 0px; padding: 30px 30px 10px 30px; background-color: rgb(255, 255,
                                      255); font-size: 16px; font-family: "Lato", Arial, Helvetica,
                              sans-serif; line-height: 1.33;">
                              <span style="font-family: "Lato", Arial, Helvetica,
                                sans-serif; color: #000000; font-size: 20px;">
                                <span style="font-weight: 700;">'.$assistedshipmentupadminmessage['msg'].'</span>
                              </span>
                            </td>
  
                          </tr>
  
                        </tbody>
                      </table>
                      <table align="center" border="0" cellpadding="0"
                        cellspacing="0"
                        style="border-spacing: 0; margin: 0; padding: 0; border-spacing: 0px; -webkit-border-horizontal-spacing: 0px; -webkit-border-vertical-spacing: 0px; width: 100%">
                        <tr>
                          <td style="background: #ffffff;">
                            <table width="600" align="center" border="0"
                              cellpadding="0" cellspacing="0">
                              <tbody>
                                <tr>
                                  <td valign="top" align="center"
                                    style="padding: 30px 30px 20px 30px; font-family: "Lato"
                                    ,Arial, Helvetica, sans-serif; margin: 0px;
                                    font-size: 40px; color: #000000; font-weight:
                                    bold;">
                                   
                                  </td>
                                </tr>
                                <tr>
                                  <td valign="top" align="center"
                                    style="padding: 0px 30px 10px 30px; margin: 0px; font-size: 15px; line-height: 23px; color: #000000;">
                                    <span style="font-family: "Lato" ,Arial,
                                      Helvetica, sans-serif; color: #000000;
                                      font-size: 16px;">
                                     
                                    </span>
                                  </td>
                                </tr>
                                <tr>
                                  <td valign="top" align="center"
                                    style="padding: 10px 30px 40px 30px; margin: 0px; font-size: 15px; line-height: 23px; color: #fff;">
                                    <a href="https://globalshippersrwanda.com/"
                                      style="padding: 10px 20px; color:#ffffff; font-size: 16px; font-family: "Lato"
                                      ,Arial, Helvetica, sans-serif; color:
                                      #ffffff; background-color: #000000;
                                      border-color: #000000; text-decoration:
                                      none; border-radius: 4px;">Visit Website</a>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
  
                  <tr>
                    <td style="background:#ffffff;">
                      <table width="600">
                        <tr>
                          <td align="center"
                            style="padding: 20px 0px 10px 0; background:#ffffff; border-top: 1px solid #d1d1d1;">
                            <table width="600" align="center" border="0"
                              cellpadding="0" cellspacing="0">
                              <tbody>
                                <tr>
                                  <td align="center" valign="top" nowrap
                                    style="margin: 0px; padding: 0; font-size: 16px; font-family: "Lato",
                                    Arial, Helvetica, sans-serif; line-height:
                                    22px;">
                                   
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                        </tr>
                        <tr>
                          <td align="center"
                            style="padding: 0px 0px 20px 0; background:#ffffff;">
                            <table width="300" align="center" border="0"
                              cellpadding="0" cellspacing="0">
                              <tbody>
                                <tr>
                                  <td align="center" valign="top" nowrap
                                    style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                    Arial, Helvetica, sans-serif;">
                                    <a href="https://globalshippersrwanda.com/privacy"
                                      style="color: #000000; font-weight: normal; font-family: "Lato",
                                      Arial, Helvetica, sans-serif;
                                      text-decoration: none;">
                                      <span style="font-family: "Lato", Arial,
                                        Helvetica, sans-serif; color: #000000;
                                        font-size: 14px; white-space: nowrap;
                                        line-height: 22px;">Privacy Policy</span>
                                    </a>
                                  </td>
                                  <td align="center" valign="top" nowrap
                                    style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                    Arial, Helvetica, sans-serif;">
                                    <a href ="https://globalshippersrwanda.com/about-us"
                                      style="color: #2e3233; font-weight: normal; font-family: "Lato",
                                      Arial, Helvetica, sans-serif;
                                      text-decoration: none;">
                                      <span style="font-family: "Lato", Arial,
                                        Helvetica, sans-serif; color: #000000;
                                        font-size: 14px; white-space: nowrap;
                                        line-height: 22px;">About Us</span>
                                    </a>
                                  </td>
                                  <td align="center" valign="top" nowrap
                                    style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                    Arial, Helvetica, sans-serif;">
                                    <a href="https://globalshippersrwanda.com/contact-us"
                                      style="color: #000000; font-weight: normal; font-family: "Lato",
                                      Arial, Helvetica, sans-serif;
                                      text-decoration: none;">
                                      <span style="font-family: "Lato", Arial,
                                        Helvetica, sans-serif; color: #000000;
                                        font-size: 14px; white-space: nowrap;
                                        line-height: 22px;">Contact US</span>
                                    </a>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                </tbody>
              </table>
            </td>
          </tr>
        </tbody>
      </table>
    </body>
  </html>';
  
  
  
          
                          $mail = new PHPMailer(); 
                          $mail->IsSMTP(); 
                          $mail->SMTPAuth = true; 
                          $mail->SMTPSecure = 'tls'; 
                         $mail->Host = "mail.privateemail.com";
                          $mail->Port = 587; 
                          $mail->IsHTML(true);
                          $mail->CharSet = 'UTF-8';
                          //$mail->SMTPDebug = 2; 
                          $mail->Username = EMAIL_SMTP_GOOGLE;
                          $mail->Password = PASSWORD_SMTP_GOOGLE;
                          $mail->SetFrom("services@globalshippersrwanda.com");;
                          $mail->Subject = $assistedshipmentupadminsubject;
                          $mail->Body =$html;
                          $mail->AddAddress($assistedshipmentupadminto);
                          $mail->SMTPOptions=array('ssl'=>array (
                              'verify_peer'=>false,
                              'verify_peer_name'=>false,
                              'allow_self_signed'=>false
                          ));
                      if(!$mail->Send()){
                          echo $mail->ErrorInfo;
                      }else{
                          return  'Sent';
                      }
          }
    public function assisted_update_shipment(){
        $id = $this->input->post('id');
       $shipid= $this->input->post('shipid');
        $shipment = [
            'shipping_carrier' => $this->input->post('carrier'),
            'tracking_number'=> $this->input->post('tracking'),
            'tracking_url'=> $this->input->post('url'),
            'update_date' => date('Y-m-d H:i:s')
        ];
        $users = [
          'email' => $this->input->post('email'),
          'phone' => $this->input->post('phone'),
          'fname' => $this->input->post('fname'),
          'lname' => $this->input->post('lname')
      ];
      $adminemail= $this->input->post('adminemail');
        $shipmentresult = $this->Admin_model->assisted_update_shipment($id,$shipment,$shipid);
        $assistedshipmentupto = $users['email'];
        $assistedshipmentupsubject  = 'Update on Your Shipment  - Buy for me - '.$id.'';
        $assistedshipmentupmessage['msg'] ="<p>Dear ".$users['fname']." ".$users['lname']. "</p>
        <p>We are pleased to inform you that your order has been shipped out from our warehouse. Below are the updated details for your shipment:</p>
        <p> Shipping Carrier: ".$shipment['shipping_carrier']."</p>
        <p>Tracking Number: ".$shipment['tracking_number']."</p>
        <p>Tracking Url:".$shipment['tracking_url']."</p>
        <p>Please note, you can track the status of your shipment by clicking on the tracking URL provided above.</p>
        <p>If you have any questions or concerns about your shipment, please do not hesitate to contact us. We are always here to help.</p>
        <p>Thank you for choosing Global Shippers Rwanda!</p>
        <p>Regards</p>
        <p>The GlobalshippersRwanda Team</p>";

        $assistedshipmentupadminto = $adminemail;
        $assistedshipmentupadminsubject  ='Update on Your Shipment  - Buy for me - '.$id.'';
        $assistedshipmentupadminmessage['msg'] = "<p>Dear Admin</p>
        <p>We are pleased to inform you that your order has been shipped out from our warehouse. Below are the updated details for your shipment:</p>
        <p> Shipping Carrier: ".$shipment['shipping_carrier']."</p>
        <p>Tracking Number: ".$shipment['tracking_number']."</p>
        <p>Tracking Url:".$shipment['tracking_url']."</p>
         <p>Please note, you can track the status of your shipment by clicking on the tracking URL provided above.</p>
         <p>Custome Information: </p>
         <p>Name: ".$users['fname']." ".$users['lname']."</p>
         <p>Email: ".$users['email']."</p>
         <p>Contact No: ".$users['phone']."</p>
         <p>Thank you for choosing Global Shippers Rwanda!</p>
        <p>Regards</p>
        <p>The GlobalshippersRwanda Team</p>";
        $this->assistedshipmentupsendmail($assistedshipmentupto, $assistedshipmentupsubject, $assistedshipmentupmessage);
        $this->assistedshipmentupadminsendmail($assistedshipmentupadminto, $assistedshipmentupadminsubject, $assistedshipmentupadminmessage);
        //echo json_encode($shipment);
        if($shipmentresult==TRUE){
            redirect(base_url().'assisted-order-details/'.$id);
        }
        else{
           redirect(base_url().'assisted-order-details/'.$id);
        }
    }
    public function assisted_delete_shipment(){
        $id = $this->uri->segment(3);
        $shipid = $this->uri->segment(4);
        $result = $this->Admin_model->assisted_delete_shipment($id,$shipid);
       // echo json_encode($resutl);
        if($result==TRUE){
            redirect(base_url().'assisted-order-details/'.$id);
        }
        else{
            redirect(base_url().'assisted-order-details/'.$id);
        }
    }

    public function updatesendmail($updateto, $updatesubject, $updatemessage) {

        $html = '<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Email Template</title>
    <style type="text/css">
      @media screen and (max-width: 600px),
      screen and (max-device-width: 600px) {
        body {
          margin: 0 !important;
          padding: 0 !important;
        }
      }
      @media screen and (-webkit-min-device-pixel-ratio: 0) and (max-width: 600px) {
        body {
          margin: 0 !important;
          padding: 0 !important;
        }
      }
  a{
  color: #000;
  text-decoration:none;
  }
    </style>
  </head>
  <body style="margin: 0; padding: 0; border: 0;">
    <table width="100%" align="center" cellpadding="0" cellspacing="0"
      border="0" dir="ltr" style="background-color: rgb(255, 255, 255);">
      <tbody>
        <tr>
          <td align="center" valign="top"
            style="margin: 0; padding: 0px 15px 0px;">
            <table width="600" align="center" border="0" cellspacing="0"
              cellpadding="0" style="width: 600px;">
              <tbody>
                <tr>
                  <td align="center" valign="center"
                    style="margin: 0; background-color: #ffffff; background-size: cover; background-repeat: no-repeat; background-position: center center; padding: 30px 15px 40px;">
                    <table align="center" border="0" cellpadding="0"
                      cellspacing="0">
                      <tbody>
                        <tr>
                          <td valign="top" align="center"
                            style="padding: 0px; margin: 0px;">
                            <a href="#"><img src="https://globalshippersrwanda.com/assets/cms/img/logo-black.png" width="100"
                                style="border: none; font-weight: bold; max-height: 100px; height: auto; line-height: 100%; outline: none; text-decoration: none; text-transform: capitalize; border-width: 0px; border-style: none; border-color: transparent; font-size: 12px; display: block;"></a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
                <tr> 
                  <td align="center" valign="top"
                    style="margin: 0; padding: 0;">
                    <table width="100%" align="center" border="0"
                      cellpadding="0" cellspacing="0" bgcolor="#ffffff">
                      <tbody>
                       <tr>   
                          <td align="left" valign="top"
                            style="margin: 0px; padding: 30px 30px 10px 30px; background-color: rgb(255, 255,
									255); font-size: 16px; font-family: "Lato", Arial, Helvetica,
                            sans-serif; line-height: 1.33;">
                            <span style="font-family: "Lato", Arial, Helvetica,
                              sans-serif; color: #000000; font-size: 20px;">
                              <span style="font-weight: 700;"></span>
                            </span>
                          </td>

                        </tr>
                        <tr>   
                          <td align="left" valign="top"
                            style="margin: 0px; padding: 30px 30px 10px 30px; background-color: rgb(255, 255,
									255); font-size: 16px; font-family: "Lato", Arial, Helvetica,
                            sans-serif; line-height: 1.33;">
                            <span style="font-family: "Lato", Arial, Helvetica,
                              sans-serif; color: #000000; font-size: 20px;">
                              <span style="font-weight: 700;">'.$updatemessage['msg'].'</span>
                            </span>
                          </td>

                        </tr>

                      </tbody>
                    </table>
                    <table align="center" border="0" cellpadding="0"
                      cellspacing="0"
                      style="border-spacing: 0; margin: 0; padding: 0; border-spacing: 0px; -webkit-border-horizontal-spacing: 0px; -webkit-border-vertical-spacing: 0px; width: 100%">
                      <tr>
                        <td style="background: #ffffff;">
                          <table width="600" align="center" border="0"
                            cellpadding="0" cellspacing="0">
                            <tbody>
                              <tr>
                                <td valign="top" align="center"
                                  style="padding: 30px 30px 20px 30px; font-family: "Lato"
                                  ,Arial, Helvetica, sans-serif; margin: 0px;
                                  font-size: 40px; color: #000000; font-weight:
                                  bold;">
                                 
                                </td>
                              </tr>
                              <tr>
                                <td valign="top" align="center"
                                  style="padding: 0px 30px 10px 30px; margin: 0px; font-size: 15px; line-height: 23px; color: #000000;">
                                  <span style="font-family: "Lato" ,Arial,
                                    Helvetica, sans-serif; color: #000000;
                                    font-size: 16px;">
                                   
                                  </span>
                                </td>
                              </tr>
                              <tr>
                                <td valign="top" align="center"
                                  style="padding: 10px 30px 40px 30px; margin: 0px; font-size: 15px; line-height: 23px; color: #fff;">
                                  <a href="https://globalshippersrwanda.com/"
                                    style="padding: 10px 20px; color:#ffffff; font-size: 16px; font-family: "Lato"
                                    ,Arial, Helvetica, sans-serif; color:
                                    #ffffff; background-color: #000000;
                                    border-color: #000000; text-decoration:
                                    none; border-radius: 4px;">Visit Website</a>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>

                <tr>
                  <td style="background:#ffffff;">
                    <table width="600">
                      <tr>
                        <td align="center"
                          style="padding: 20px 0px 10px 0; background:#ffffff; border-top: 1px solid #d1d1d1;">
                          <table width="600" align="center" border="0"
                            cellpadding="0" cellspacing="0">
                            <tbody>
                              <tr>
                                <td align="center" valign="top" nowrap
                                  style="margin: 0px; padding: 0; font-size: 16px; font-family: "Lato",
                                  Arial, Helvetica, sans-serif; line-height:
                                  22px;">
                                 
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                      <tr>
                        <td align="center"
                          style="padding: 0px 0px 20px 0; background:#ffffff;">
                          <table width="300" align="center" border="0"
                            cellpadding="0" cellspacing="0">
                            <tbody>
                              <tr>
                                <td align="center" valign="top" nowrap
                                  style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                  Arial, Helvetica, sans-serif;">
                                  <a href="https://globalshippersrwanda.com/privacy"
                                    style="color: #000000; font-weight: normal; font-family: "Lato",
                                    Arial, Helvetica, sans-serif;
                                    text-decoration: none;">
                                    <span style="font-family: "Lato", Arial,
                                      Helvetica, sans-serif; color: #000000;
                                      font-size: 14px; white-space: nowrap;
                                      line-height: 22px;">Privacy Policy</span>
                                  </a>
                                </td>
                                <td align="center" valign="top" nowrap
                                  style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                  Arial, Helvetica, sans-serif;">
                                  <a href ="https://globalshippersrwanda.com/about-us"
                                    style="color: #2e3233; font-weight: normal; font-family: "Lato",
                                    Arial, Helvetica, sans-serif;
                                    text-decoration: none;">
                                    <span style="font-family: "Lato", Arial,
                                      Helvetica, sans-serif; color: #000000;
                                      font-size: 14px; white-space: nowrap;
                                      line-height: 22px;">About Us</span>
                                  </a>
                                </td>
                                <td align="center" valign="top" nowrap
                                  style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                  Arial, Helvetica, sans-serif;">
                                  <a href="https://globalshippersrwanda.com/contact-us"
                                    style="color: #000000; font-weight: normal; font-family: "Lato",
                                    Arial, Helvetica, sans-serif;
                                    text-decoration: none;">
                                    <span style="font-family: "Lato", Arial,
                                      Helvetica, sans-serif; color: #000000;
                                      font-size: 14px; white-space: nowrap;
                                      line-height: 22px;">Contact US</span>
                                  </a>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
          </td>
        </tr>
      </tbody>
    </table>
  </body>
</html>';



        
                        $mail = new PHPMailer(); 
                        $mail->IsSMTP(); 
                        $mail->SMTPAuth = true; 
                        $mail->SMTPSecure = 'tls'; 
                       $mail->Host = "mail.privateemail.com";
                        $mail->Port = 587; 
                        $mail->IsHTML(true);
                        $mail->CharSet = 'UTF-8';
                        //$mail->SMTPDebug = 2; 
                        $mail->Username = EMAIL_SMTP_GOOGLE;
                        $mail->Password = PASSWORD_SMTP_GOOGLE;
                        $mail->SetFrom("services@globalshippersrwanda.com");;
                        $mail->Subject = $updatesubject;
                        $mail->Body =$html;
                        $mail->AddAddress($updateto);
                        $mail->SMTPOptions=array('ssl'=>array (
                            'verify_peer'=>false,
                            'verify_peer_name'=>false,
                            'allow_self_signed'=>false
                        ));
                    if(!$mail->Send()){
                        echo $mail->ErrorInfo;
                    }else{
                        return  'Sent';
                    }
        }
        public function adminupdatesendmail($adminupdateemail, $adminupdatesubject, $adminupdatemessage) {

          $html = '<!DOCTYPE html>
  <html lang="en-US">
    <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <title>Email Template</title>
      <style type="text/css">
        @media screen and (max-width: 600px),
        screen and (max-device-width: 600px) {
          body {
            margin: 0 !important;
            padding: 0 !important;
          }
        }
        @media screen and (-webkit-min-device-pixel-ratio: 0) and (max-width: 600px) {
          body {
            margin: 0 !important;
            padding: 0 !important;
          }
        }
    a{
    color: #000;
    text-decoration:none;
    }
      </style>
    </head>
    <body style="margin: 0; padding: 0; border: 0;">
      <table width="100%" align="center" cellpadding="0" cellspacing="0"
        border="0" dir="ltr" style="background-color: rgb(255, 255, 255);">
        <tbody>
          <tr>
            <td align="center" valign="top"
              style="margin: 0; padding: 0px 15px 0px;">
              <table width="600" align="center" border="0" cellspacing="0"
                cellpadding="0" style="width: 600px;">
                <tbody>
                  <tr>
                    <td align="center" valign="center"
                      style="margin: 0; background-color: #ffffff; background-size: cover; background-repeat: no-repeat; background-position: center center; padding: 30px 15px 40px;">
                      <table align="center" border="0" cellpadding="0"
                        cellspacing="0">
                        <tbody>
                          <tr>
                            <td valign="top" align="center"
                              style="padding: 0px; margin: 0px;">
                              <a href="#"><img src="https://globalshippersrwanda.com/assets/cms/img/logo-black.png" width="100"
                                  style="border: none; font-weight: bold; max-height: 100px; height: auto; line-height: 100%; outline: none; text-decoration: none; text-transform: capitalize; border-width: 0px; border-style: none; border-color: transparent; font-size: 12px; display: block;"></a>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                  <tr> 
                    <td align="center" valign="top"
                      style="margin: 0; padding: 0;">
                      <table width="100%" align="center" border="0"
                        cellpadding="0" cellspacing="0" bgcolor="#ffffff">
                        <tbody>
                         <tr>   
                            <td align="left" valign="top"
                              style="margin: 0px; padding: 30px 30px 10px 30px; background-color: rgb(255, 255,
                    255); font-size: 16px; font-family: "Lato", Arial, Helvetica,
                              sans-serif; line-height: 1.33;">
                              <span style="font-family: "Lato", Arial, Helvetica,
                                sans-serif; color: #000000; font-size: 20px;">
                                <span style="font-weight: 700;"></span>
                              </span>
                            </td>
  
                          </tr>
                          <tr>   
                            <td align="left" valign="top"
                              style="margin: 0px; padding: 30px 30px 10px 30px; background-color: rgb(255, 255,
                    255); font-size: 16px; font-family: "Lato", Arial, Helvetica,
                              sans-serif; line-height: 1.33;">
                              <span style="font-family: "Lato", Arial, Helvetica,
                                sans-serif; color: #000000; font-size: 20px;">
                                <span style="font-weight: 700;">'.$adminupdatemessage['msg'].'</span>
                              </span>
                            </td>
  
                          </tr>
  
                        </tbody>
                      </table>
                      <table align="center" border="0" cellpadding="0"
                        cellspacing="0"
                        style="border-spacing: 0; margin: 0; padding: 0; border-spacing: 0px; -webkit-border-horizontal-spacing: 0px; -webkit-border-vertical-spacing: 0px; width: 100%">
                        <tr>
                          <td style="background: #ffffff;">
                            <table width="600" align="center" border="0"
                              cellpadding="0" cellspacing="0">
                              <tbody>
                                <tr>
                                  <td valign="top" align="center"
                                    style="padding: 30px 30px 20px 30px; font-family: "Lato"
                                    ,Arial, Helvetica, sans-serif; margin: 0px;
                                    font-size: 40px; color: #000000; font-weight:
                                    bold;">
                                   
                                  </td>
                                </tr>
                                <tr>
                                  <td valign="top" align="center"
                                    style="padding: 0px 30px 10px 30px; margin: 0px; font-size: 15px; line-height: 23px; color: #000000;">
                                    <span style="font-family: "Lato" ,Arial,
                                      Helvetica, sans-serif; color: #000000;
                                      font-size: 16px;">
                                     
                                    </span>
                                  </td>
                                </tr>
                                <tr>
                                  <td valign="top" align="center"
                                    style="padding: 10px 30px 40px 30px; margin: 0px; font-size: 15px; line-height: 23px; color: #fff;">
                                    <a href="https://globalshippersrwanda.com/"
                                      style="padding: 10px 20px; color:#ffffff; font-size: 16px; font-family: "Lato"
                                      ,Arial, Helvetica, sans-serif; color:
                                      #ffffff; background-color: #000000;
                                      border-color: #000000; text-decoration:
                                      none; border-radius: 4px;">Visit Website</a>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
  
                  <tr>
                    <td style="background:#ffffff;">
                      <table width="600">
                        <tr>
                          <td align="center"
                            style="padding: 20px 0px 10px 0; background:#ffffff; border-top: 1px solid #d1d1d1;">
                            <table width="600" align="center" border="0"
                              cellpadding="0" cellspacing="0">
                              <tbody>
                                <tr>
                                  <td align="center" valign="top" nowrap
                                    style="margin: 0px; padding: 0; font-size: 16px; font-family: "Lato",
                                    Arial, Helvetica, sans-serif; line-height:
                                    22px;">
                                   
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                        </tr>
                        <tr>
                          <td align="center"
                            style="padding: 0px 0px 20px 0; background:#ffffff;">
                            <table width="300" align="center" border="0"
                              cellpadding="0" cellspacing="0">
                              <tbody>
                                <tr>
                                  <td align="center" valign="top" nowrap
                                    style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                    Arial, Helvetica, sans-serif;">
                                    <a href="https://globalshippersrwanda.com/privacy"
                                      style="color: #000000; font-weight: normal; font-family: "Lato",
                                      Arial, Helvetica, sans-serif;
                                      text-decoration: none;">
                                      <span style="font-family: "Lato", Arial,
                                        Helvetica, sans-serif; color: #000000;
                                        font-size: 14px; white-space: nowrap;
                                        line-height: 22px;">Privacy Policy</span>
                                    </a>
                                  </td>
                                  <td align="center" valign="top" nowrap
                                    style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                    Arial, Helvetica, sans-serif;">
                                    <a href ="https://globalshippersrwanda.com/about-us"
                                      style="color: #2e3233; font-weight: normal; font-family: "Lato",
                                      Arial, Helvetica, sans-serif;
                                      text-decoration: none;">
                                      <span style="font-family: "Lato", Arial,
                                        Helvetica, sans-serif; color: #000000;
                                        font-size: 14px; white-space: nowrap;
                                        line-height: 22px;">About Us</span>
                                    </a>
                                  </td>
                                  <td align="center" valign="top" nowrap
                                    style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                    Arial, Helvetica, sans-serif;">
                                    <a href="https://globalshippersrwanda.com/contact-us"
                                      style="color: #000000; font-weight: normal; font-family: "Lato",
                                      Arial, Helvetica, sans-serif;
                                      text-decoration: none;">
                                      <span style="font-family: "Lato", Arial,
                                        Helvetica, sans-serif; color: #000000;
                                        font-size: 14px; white-space: nowrap;
                                        line-height: 22px;">Contact US</span>
                                    </a>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                </tbody>
              </table>
            </td>
          </tr>
        </tbody>
      </table>
    </body>
  </html>';
  
  
  
          
                          $mail = new PHPMailer(); 
                          $mail->IsSMTP(); 
                          $mail->SMTPAuth = true; 
                          $mail->SMTPSecure = 'tls'; 
                         $mail->Host = "mail.privateemail.com";
                          $mail->Port = 587; 
                          $mail->IsHTML(true);
                          $mail->CharSet = 'UTF-8';
                          //$mail->SMTPDebug = 2; 
                          $mail->Username = EMAIL_SMTP_GOOGLE;
                          $mail->Password = PASSWORD_SMTP_GOOGLE;
                          $mail->SetFrom("services@globalshippersrwanda.com");;
                          $mail->Subject = $adminupdatesubject;
                          $mail->Body =$html;
                          $mail->AddAddress($adminupdateemail);
                          $mail->SMTPOptions=array('ssl'=>array (
                              'verify_peer'=>false,
                              'verify_peer_name'=>false,
                              'allow_self_signed'=>false
                          ));
                      if(!$mail->Send()){
                          echo $mail->ErrorInfo;
                      }else{
                          return  'Sent';
                      }
          }

    public function update_order_status(){
        $order_id = $this->input->post('submit');
        $user_id = $this->input->post('user_id');
        $id= $this->input->post('id[]');
        $count = count($this->input->post('item_receive[]'));
        for($i = 0; $i<$count; $i++){
        $record = [
            'id'            =>$this->input->post('id'.'['.$i.']'),
            'item_received' => $this->input->post('item_receive'.'['.$i.']')

        ]; 
        $users = [
          'email' => $this->input->post('email'),
          'phone' => $this->input->post('phone'),
          'fname' => $this->input->post('fname'),
          'lname' => $this->input->post('lname')
      ];
      $adminemail= $this->input->post('adminemail');
        $order_id = $order_id;
        $noti_data = [
                'user_id'   =>  $user_id,
                'order_id'  => $order_id,
                'order_type' => '1',
                'content'   => $record['item_received'],
               'notification_type' => '1',
        ];
        $updateto = $users['email'];
        $updatesubject  = 'Your Order has been Successfully Delivered! - consolidation shipment '.$order_id.'';
        $result = $this->Admin_model->update_item_received($record);
        $updatemessage['msg'] = "<p>Dear ".$users['fname']." ".$users['lname']."</p>
        <p>We are thrilled to inform you that your order ".$order_id."  has been successfully delivered! We appreciate the trust you have placed in us, and we're delighted to have been able to bring your package to your doorstep.</p>
        <p>At Global Shippers Rwanda, we strive to provide exceptional service and ensure that your experience with us is seamless and enjoyable. We're happy to hear that you're satisfied with our services and hope you've had a great experience working with us.</p>
        <p>As a valued customer, we would like to request a few minutes of your time to share your feedback with us. Your opinion matters greatly, and it will help us improve our services even further. 
        Please click to leave a review on Google <a href = 'https://g.co/kgs/Fh78bbo'>Click Here <a></p>
        <p>Your review will help us understand what we're doing right and what we can improve on, ensuring that we continue to provide the best possible service to our customers. Your input will also help others make informed decisions when choosing a shipping partner.</p>
        <p>Thank you for choosing Global Shippers Rwanda, and we look forward to serving you again in the future.</p>
        <p>Regards</p>
        <p>The GlobalshippersRwanda Team</p>";
        $adminupdateemail= $adminemail;
        $adminupdatesubject  = 'Your Order has been Successfully Delivered! - consolidation shipment '.$order_id.'';
        $adminupdatemessage['msg'] = "<p>Dear Admin</p>
        <p>We are thrilled to inform you that your order ".$order_id."  has been successfully delivered! We appreciate the trust you have placed in us, and we're delighted to have been able to bring your package to your doorstep.</p>
        <p>At Global Shippers Rwanda, we strive to provide exceptional service and ensure that your experience with us is seamless and enjoyable. We're happy to hear that you're satisfied with our services and hope you've had a great experience working with us.</p>
        <p>As a valued customer, we would like to request a few minutes of your time to share your feedback with us. Your opinion matters greatly, and it will help us improve our services even further.
          Please click to leave a review on Google <a href = 'https://g.co/kgs/Fh78bbo'>Click Here <a></p>
        <p>Your review will help us understand what we're doing right and what we can improve on, ensuring that we continue to provide the best possible service to our customers. Your input will also help others make informed decisions when choosing a shipping partner.</p>
        <p>Customer Information:</p>
        <p>Name: ".$users['fname']."".$users['lname']."</p>
         <p>Email: ".$users['email']."</p>
          <p>Contact No: ".$users['phone']."</p>
        <p>Thank you for choosing Global Shippers Rwanda, and we look forward to serving you again in the future.</p>
        <p>Regards</p>
        <p>The GlobalshippersRwanda Team</p>";
       
       
        
    }
    $notifications = $this->Admin_model->create_notification($noti_data);
    if($record['item_received'] == "4"){
      $this->adminupdatesendmail($adminupdateemail, $adminupdatesubject, $adminupdatemessage);
      $this->updatesendmail($updateto, $updatesubject, $updatemessage);
    }
    else{
      echo "Email is not send";
    }
       
      redirect(base_url().'shopnship-order-details/'.$order_id,'redresh');
    }

    public function assistedupdatesendmail($assistedto, $assistedsubject, $assistedmessage) {

        $html = '<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Email Template</title>
    <style type="text/css">
      @media screen and (max-width: 600px),
      screen and (max-device-width: 600px) {
        body {
          margin: 0 !important;
          padding: 0 !important;
        }
      }
      @media screen and (-webkit-min-device-pixel-ratio: 0) and (max-width: 600px) {
        body {
          margin: 0 !important;
          padding: 0 !important;
        }
      }
  a{
  color: #000;
  text-decoration:none;
  }
    </style>
  </head>
  <body style="margin: 0; padding: 0; border: 0;">
    <table width="100%" align="center" cellpadding="0" cellspacing="0"
      border="0" dir="ltr" style="background-color: rgb(255, 255, 255);">
      <tbody>
        <tr>
          <td align="center" valign="top"
            style="margin: 0; padding: 0px 15px 0px;">
            <table width="600" align="center" border="0" cellspacing="0"
              cellpadding="0" style="width: 600px;">
              <tbody>
                <tr>
                  <td align="center" valign="center"
                    style="margin: 0; background-color: #ffffff; background-size: cover; background-repeat: no-repeat; background-position: center center; padding: 30px 15px 40px;">
                    <table align="center" border="0" cellpadding="0"
                      cellspacing="0">
                      <tbody>
                        <tr>
                          <td valign="top" align="center"
                            style="padding: 0px; margin: 0px;">
                            <a href="#"><img src="https://globalshippersrwanda.com/assets/cms/img/logo-black.png" width="100"
                                style="border: none; font-weight: bold; max-height: 100px; height: auto; line-height: 100%; outline: none; text-decoration: none; text-transform: capitalize; border-width: 0px; border-style: none; border-color: transparent; font-size: 12px; display: block;"></a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
                <tr> 
                  <td align="center" valign="top"
                    style="margin: 0; padding: 0;">
                    <table width="100%" align="center" border="0"
                      cellpadding="0" cellspacing="0" bgcolor="#ffffff">
                      <tbody>
                       <tr>   
                          <td align="left" valign="top"
                            style="margin: 0px; padding: 30px 30px 10px 30px; background-color: rgb(255, 255,
									255); font-size: 16px; font-family: "Lato", Arial, Helvetica,
                            sans-serif; line-height: 1.33;">
                            <span style="font-family: "Lato", Arial, Helvetica,
                              sans-serif; color: #000000; font-size: 20px;">
                              <span style="font-weight: 700;"></span>
                            </span>
                          </td>

                        </tr>
                        <tr>   
                          <td align="left" valign="top"
                            style="margin: 0px; padding: 30px 30px 10px 30px; background-color: rgb(255, 255,
									255); font-size: 16px; font-family: "Lato", Arial, Helvetica,
                            sans-serif; line-height: 1.33;">
                            <span style="font-family: "Lato", Arial, Helvetica,
                              sans-serif; color: #000000; font-size: 20px;">
                              <span style="font-weight: 700;">'.$assistedmessage['msg'].'</span>
                            </span>
                          </td>

                        </tr>

                      </tbody>
                    </table>
                    <table align="center" border="0" cellpadding="0"
                      cellspacing="0"
                      style="border-spacing: 0; margin: 0; padding: 0; border-spacing: 0px; -webkit-border-horizontal-spacing: 0px; -webkit-border-vertical-spacing: 0px; width: 100%">
                      <tr>
                        <td style="background: #ffffff;">
                          <table width="600" align="center" border="0"
                            cellpadding="0" cellspacing="0">
                            <tbody>
                              <tr>
                                <td valign="top" align="center"
                                  style="padding: 30px 30px 20px 30px; font-family: "Lato"
                                  ,Arial, Helvetica, sans-serif; margin: 0px;
                                  font-size: 40px; color: #000000; font-weight:
                                  bold;">
                                 
                                </td>
                              </tr>
                              <tr>
                                <td valign="top" align="center"
                                  style="padding: 0px 30px 10px 30px; margin: 0px; font-size: 15px; line-height: 23px; color: #000000;">
                                  <span style="font-family: "Lato" ,Arial,
                                    Helvetica, sans-serif; color: #000000;
                                    font-size: 16px;">
                                   
                                  </span>
                                </td>
                              </tr>
                              <tr>
                                <td valign="top" align="center"
                                  style="padding: 10px 30px 40px 30px; margin: 0px; font-size: 15px; line-height: 23px; color: #fff;">
                                  <a href="https://globalshippersrwanda.com/"
                                    style="padding: 10px 20px; color:#ffffff; font-size: 16px; font-family: "Lato"
                                    ,Arial, Helvetica, sans-serif; color:
                                    #ffffff; background-color: #000000;
                                    border-color: #000000; text-decoration:
                                    none; border-radius: 4px;">Visit Website</a>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>

                <tr>
                  <td style="background:#ffffff;">
                    <table width="600">
                      <tr>
                        <td align="center"
                          style="padding: 20px 0px 10px 0; background:#ffffff; border-top: 1px solid #d1d1d1;">
                          <table width="600" align="center" border="0"
                            cellpadding="0" cellspacing="0">
                            <tbody>
                              <tr>
                                <td align="center" valign="top" nowrap
                                  style="margin: 0px; padding: 0; font-size: 16px; font-family: "Lato",
                                  Arial, Helvetica, sans-serif; line-height:
                                  22px;">
                                 
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                      <tr>
                        <td align="center"
                          style="padding: 0px 0px 20px 0; background:#ffffff;">
                          <table width="300" align="center" border="0"
                            cellpadding="0" cellspacing="0">
                            <tbody>
                              <tr>
                                <td align="center" valign="top" nowrap
                                  style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                  Arial, Helvetica, sans-serif;">
                                  <a href="https://globalshippersrwanda.com/privacy"
                                    style="color: #000000; font-weight: normal; font-family: "Lato",
                                    Arial, Helvetica, sans-serif;
                                    text-decoration: none;">
                                    <span style="font-family: "Lato", Arial,
                                      Helvetica, sans-serif; color: #000000;
                                      font-size: 14px; white-space: nowrap;
                                      line-height: 22px;">Privacy Policy</span>
                                  </a>
                                </td>
                                <td align="center" valign="top" nowrap
                                  style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                  Arial, Helvetica, sans-serif;">
                                  <a href ="https://globalshippersrwanda.com/about-us"
                                    style="color: #2e3233; font-weight: normal; font-family: "Lato",
                                    Arial, Helvetica, sans-serif;
                                    text-decoration: none;">
                                    <span style="font-family: "Lato", Arial,
                                      Helvetica, sans-serif; color: #000000;
                                      font-size: 14px; white-space: nowrap;
                                      line-height: 22px;">About Us</span>
                                  </a>
                                </td>
                                <td align="center" valign="top" nowrap
                                  style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                  Arial, Helvetica, sans-serif;">
                                  <a href="https://globalshippersrwanda.com/contact-us"
                                    style="color: #000000; font-weight: normal; font-family: "Lato",
                                    Arial, Helvetica, sans-serif;
                                    text-decoration: none;">
                                    <span style="font-family: "Lato", Arial,
                                      Helvetica, sans-serif; color: #000000;
                                      font-size: 14px; white-space: nowrap;
                                      line-height: 22px;">Contact US</span>
                                  </a>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
          </td>
        </tr>
      </tbody>
    </table>
  </body>
</html>';



        
                        $mail = new PHPMailer(); 
                        $mail->IsSMTP(); 
                        $mail->SMTPAuth = true; 
                        $mail->SMTPSecure = 'tls'; 
                       $mail->Host = "mail.privateemail.com";
                        $mail->Port = 587; 
                        $mail->IsHTML(true);
                        $mail->CharSet = 'UTF-8';
                        //$mail->SMTPDebug = 2; 
                        $mail->Username = EMAIL_SMTP_GOOGLE;
                        $mail->Password = PASSWORD_SMTP_GOOGLE;
                        $mail->SetFrom("services@globalshippersrwanda.com");;
                        $mail->Subject = $assistedsubject;
                        $mail->Body =$html;
                        $mail->AddAddress($assistedto);
                        $mail->SMTPOptions=array('ssl'=>array (
                            'verify_peer'=>false,
                            'verify_peer_name'=>false,
                            'allow_self_signed'=>false
                        ));
                    if(!$mail->Send()){
                        echo $mail->ErrorInfo;
                    }else{
                        return  'Sent';
                    }
        }

        
    public function assistedadminupdatesendmail($assistedadminupdateto, $assistedadminupdatesubject, $assistedadminupdatemessage) {

      $html = '<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Email Template</title>
  <style type="text/css">
    @media screen and (max-width: 600px),
    screen and (max-device-width: 600px) {
      body {
        margin: 0 !important;
        padding: 0 !important;
      }
    }
    @media screen and (-webkit-min-device-pixel-ratio: 0) and (max-width: 600px) {
      body {
        margin: 0 !important;
        padding: 0 !important;
      }
    }
a{
color: #000;
text-decoration:none;
}
  </style>
</head>
<body style="margin: 0; padding: 0; border: 0;">
  <table width="100%" align="center" cellpadding="0" cellspacing="0"
    border="0" dir="ltr" style="background-color: rgb(255, 255, 255);">
    <tbody>
      <tr>
        <td align="center" valign="top"
          style="margin: 0; padding: 0px 15px 0px;">
          <table width="600" align="center" border="0" cellspacing="0"
            cellpadding="0" style="width: 600px;">
            <tbody>
              <tr>
                <td align="center" valign="center"
                  style="margin: 0; background-color: #ffffff; background-size: cover; background-repeat: no-repeat; background-position: center center; padding: 30px 15px 40px;">
                  <table align="center" border="0" cellpadding="0"
                    cellspacing="0">
                    <tbody>
                      <tr>
                        <td valign="top" align="center"
                          style="padding: 0px; margin: 0px;">
                          <a href="#"><img src="https://globalshippersrwanda.com/assets/cms/img/logo-black.png" width="100"
                              style="border: none; font-weight: bold; max-height: 100px; height: auto; line-height: 100%; outline: none; text-decoration: none; text-transform: capitalize; border-width: 0px; border-style: none; border-color: transparent; font-size: 12px; display: block;"></a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </td>
              </tr>
              <tr> 
                <td align="center" valign="top"
                  style="margin: 0; padding: 0;">
                  <table width="100%" align="center" border="0"
                    cellpadding="0" cellspacing="0" bgcolor="#ffffff">
                    <tbody>
                     <tr>   
                        <td align="left" valign="top"
                          style="margin: 0px; padding: 30px 30px 10px 30px; background-color: rgb(255, 255,
                255); font-size: 16px; font-family: "Lato", Arial, Helvetica,
                          sans-serif; line-height: 1.33;">
                          <span style="font-family: "Lato", Arial, Helvetica,
                            sans-serif; color: #000000; font-size: 20px;">
                            <span style="font-weight: 700;"></span>
                          </span>
                        </td>

                      </tr>
                      <tr>   
                        <td align="left" valign="top"
                          style="margin: 0px; padding: 30px 30px 10px 30px; background-color: rgb(255, 255,
                255); font-size: 16px; font-family: "Lato", Arial, Helvetica,
                          sans-serif; line-height: 1.33;">
                          <span style="font-family: "Lato", Arial, Helvetica,
                            sans-serif; color: #000000; font-size: 20px;">
                            <span style="font-weight: 700;">'.$assistedadminupdatemessage['msg'].'</span>
                          </span>
                        </td>

                      </tr>

                    </tbody>
                  </table>
                  <table align="center" border="0" cellpadding="0"
                    cellspacing="0"
                    style="border-spacing: 0; margin: 0; padding: 0; border-spacing: 0px; -webkit-border-horizontal-spacing: 0px; -webkit-border-vertical-spacing: 0px; width: 100%">
                    <tr>
                      <td style="background: #ffffff;">
                        <table width="600" align="center" border="0"
                          cellpadding="0" cellspacing="0">
                          <tbody>
                            <tr>
                              <td valign="top" align="center"
                                style="padding: 30px 30px 20px 30px; font-family: "Lato"
                                ,Arial, Helvetica, sans-serif; margin: 0px;
                                font-size: 40px; color: #000000; font-weight:
                                bold;">
                               
                              </td>
                            </tr>
                            <tr>
                              <td valign="top" align="center"
                                style="padding: 0px 30px 10px 30px; margin: 0px; font-size: 15px; line-height: 23px; color: #000000;">
                                <span style="font-family: "Lato" ,Arial,
                                  Helvetica, sans-serif; color: #000000;
                                  font-size: 16px;">
                                 
                                </span>
                              </td>
                            </tr>
                            <tr>
                              <td valign="top" align="center"
                                style="padding: 10px 30px 40px 30px; margin: 0px; font-size: 15px; line-height: 23px; color: #fff;">
                                <a href="https://globalshippersrwanda.com/"
                                  style="padding: 10px 20px; color:#ffffff; font-size: 16px; font-family: "Lato"
                                  ,Arial, Helvetica, sans-serif; color:
                                  #ffffff; background-color: #000000;
                                  border-color: #000000; text-decoration:
                                  none; border-radius: 4px;">Visit Website</a>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>

              <tr>
                <td style="background:#ffffff;">
                  <table width="600">
                    <tr>
                      <td align="center"
                        style="padding: 20px 0px 10px 0; background:#ffffff; border-top: 1px solid #d1d1d1;">
                        <table width="600" align="center" border="0"
                          cellpadding="0" cellspacing="0">
                          <tbody>
                            <tr>
                              <td align="center" valign="top" nowrap
                                style="margin: 0px; padding: 0; font-size: 16px; font-family: "Lato",
                                Arial, Helvetica, sans-serif; line-height:
                                22px;">
                               
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                    <tr>
                      <td align="center"
                        style="padding: 0px 0px 20px 0; background:#ffffff;">
                        <table width="300" align="center" border="0"
                          cellpadding="0" cellspacing="0">
                          <tbody>
                            <tr>
                              <td align="center" valign="top" nowrap
                                style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                Arial, Helvetica, sans-serif;">
                                <a href="https://globalshippersrwanda.com/privacy"
                                  style="color: #000000; font-weight: normal; font-family: "Lato",
                                  Arial, Helvetica, sans-serif;
                                  text-decoration: none;">
                                  <span style="font-family: "Lato", Arial,
                                    Helvetica, sans-serif; color: #000000;
                                    font-size: 14px; white-space: nowrap;
                                    line-height: 22px;">Privacy Policy</span>
                                </a>
                              </td>
                              <td align="center" valign="top" nowrap
                                style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                Arial, Helvetica, sans-serif;">
                                <a href ="https://globalshippersrwanda.com/about-us"
                                  style="color: #2e3233; font-weight: normal; font-family: "Lato",
                                  Arial, Helvetica, sans-serif;
                                  text-decoration: none;">
                                  <span style="font-family: "Lato", Arial,
                                    Helvetica, sans-serif; color: #000000;
                                    font-size: 14px; white-space: nowrap;
                                    line-height: 22px;">About Us</span>
                                </a>
                              </td>
                              <td align="center" valign="top" nowrap
                                style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                Arial, Helvetica, sans-serif;">
                                <a href="https://globalshippersrwanda.com/contact-us"
                                  style="color: #000000; font-weight: normal; font-family: "Lato",
                                  Arial, Helvetica, sans-serif;
                                  text-decoration: none;">
                                  <span style="font-family: "Lato", Arial,
                                    Helvetica, sans-serif; color: #000000;
                                    font-size: 14px; white-space: nowrap;
                                    line-height: 22px;">Contact US</span>
                                </a>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
            </tbody>
          </table>
        </td>
      </tr>
    </tbody>
  </table>
</body>
</html>';



      
                      $mail = new PHPMailer(); 
                      $mail->IsSMTP(); 
                      $mail->SMTPAuth = true; 
                      $mail->SMTPSecure = 'tls'; 
                     $mail->Host = "mail.privateemail.com";
                      $mail->Port = 587; 
                      $mail->IsHTML(true);
                      $mail->CharSet = 'UTF-8';
                      //$mail->SMTPDebug = 2; 
                      $mail->Username = EMAIL_SMTP_GOOGLE;
                      $mail->Password = PASSWORD_SMTP_GOOGLE;
                      $mail->SetFrom("services@globalshippersrwanda.com");;
                      $mail->Subject = $assistedadminupdatesubject;
                      $mail->Body =$html;
                      $mail->AddAddress($assistedadminupdateto);
                      $mail->SMTPOptions=array('ssl'=>array (
                          'verify_peer'=>false,
                          'verify_peer_name'=>false,
                          'allow_self_signed'=>false
                      ));
                  if(!$mail->Send()){
                      echo $mail->ErrorInfo;
                  }else{
                      return  'Sent';
                  }
      }
    public function assisted_update_order_status(){
        $order_id = $this->input->post('submit');
        $user_id = $this->input->post('user_id');
        $id= $this->input->post('id[]');
        $count = count($this->input->post('item_receive[]'));
        for($i = 0; $i<$count; $i++){
        $record = [
            'id'            =>$this->input->post('id'.'['.$i.']'),
            'item_received' => $this->input->post('item_receive'.'['.$i.']'),
            //'paid'       => $this->input->post('payment'.'['.$i.']'),
            'updated_date'  =>date('Y-m-d H:i:s')

        ];
    //     echo "<pre>";
    //    print_r($record['paid']);
    //     exit;
       // $user_id = $this->session->userdata('id');
        $order_id = $order_id;
        $noti_data = [
                'user_id'   =>  $user_id,
                'order_id'  => $order_id,
                'order_type'=> '2',
                'content'   => $record['item_received'],
               'notification_type' => '1',
        ];
        $users = [
          'email' => $this->input->post('email'),
          'phone' => $this->input->post('phone'),
          'fname' => $this->input->post('fname'),
          'lname' => $this->input->post('lname')
      ];
      $adminemail= $this->input->post('adminemail');
        $assistedto = $users['email'];
        $assistedsubject  = 'Your Order has been Successfully Delivered! - Buy for me '.$order_id.'';
        $result = $this->Admin_model->assisted_update_order_status($record);
        $assistedmessage['msg'] = "<p>Dear ".$users['fname']." ".$users['lname']."</p>
        <p>We are thrilled to inform you that your order ".$order_id."  has been successfully delivered! We appreciate the trust you have placed in us, and we're delighted to have been able to bring your package to your doorstep.</p>
        <p>At Global Shippers Rwanda, we strive to provide exceptional service and ensure that your experience with us is seamless and enjoyable. We're happy to hear that you're satisfied with our services and hope you've had a great experience working with us.</p>
        <p>As a valued customer, we would like to request a few minutes of your time to share your feedback with us. Your opinion matters greatly, and it will help us improve our services even further. 
         Please click to leave a review on Google <a href = 'https://g.co/kgs/Fh78bbo'>Click Here <a></p>
        <p>Your review will help us understand what we're doing right and what we can improve on, ensuring that we continue to provide the best possible service to our customers. Your input will also help others make informed decisions when choosing a shipping partner.</p>
        <p>Thank you for choosing Global Shippers Rwanda, and we look forward to serving you again in the future.</p>
        <p>Regards</p>
        <p>The GlobalshippersRwanda Team</p>";
        $assistedadminupdateto= $adminemail;
        $assistedadminupdatesubject  = 'Your Order has been Successfully Delivered! - Buy for me '.$order_id.'';
        $assistedadminupdatemessage['msg'] = "<p>Dear Admin</p>
        <p>We are thrilled to inform you that your order ".$order_id."  has been successfully delivered! We appreciate the trust you have placed in us, and we're delighted to have been able to bring your package to your doorstep.</p>
        <p>At Global Shippers Rwanda, we strive to provide exceptional service and ensure that your experience with us is seamless and enjoyable. We're happy to hear that you're satisfied with our services and hope you've had a great experience working with us.</p>
        <p>As a valued customer, we would like to request a few minutes of your time to share your feedback with us. Your opinion matters greatly, and it will help us improve our services even further.
         Please click to leave a review on Google <a href = 'https://g.co/kgs/Fh78bbo'>Click Here <a></p>
        <p>Your review will help us understand what we're doing right and what we can improve on, ensuring that we continue to provide the best possible service to our customers. Your input will also help others make informed decisions when choosing a shipping partner.</p>
        <p>Customer Information:</p>
        <p>Name: ".$users['fname']."".$users['lname']."</p>
         <p>Email: ".$users['email']."</p>
          <p>Contact No: ".$users['phone']."</p>
        <p>Thank you for choosing Global Shippers Rwanda, and we look forward to serving you again in the future.</p>
        <p>Regards</p>
        <p>The GlobalshippersRwanda Team</p>";
       
       
       
    }
    $notifications = $this->Admin_model->create_notification($noti_data);
    if($record['item_received']=="4"){
      $this->assistedadminupdatesendmail($assistedadminupdateto, $assistedadminupdatesubject, $assistedadminupdatemessage);
      $testData = $this->assistedupdatesendmail($assistedto, $assistedsubject, $assistedmessage);
    }else{
      echo "Email is not send";
    }
   
    redirect(base_url().'assisted-order-details/'.$order_id,'redresh');
    }

 public function internationupsendmail($internationupto, $internationupsubject, $internationupmessage) {

        $html = '<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Email Template</title>
    <style type="text/css">
      @media screen and (max-width: 600px),
      screen and (max-device-width: 600px) {
        body {
          margin: 0 !important;
          padding: 0 !important;
        }
      }
      @media screen and (-webkit-min-device-pixel-ratio: 0) and (max-width: 600px) {
        body {
          margin: 0 !important;
          padding: 0 !important;
        }
      }
  a{
  color: #000;
  text-decoration:none;
  }
    </style>
  </head>
  <body style="margin: 0; padding: 0; border: 0;">
    <table width="100%" align="center" cellpadding="0" cellspacing="0"
      border="0" dir="ltr" style="background-color: rgb(255, 255, 255);">
      <tbody>
        <tr>
          <td align="center" valign="top"
            style="margin: 0; padding: 0px 15px 0px;">
            <table width="600" align="center" border="0" cellspacing="0"
              cellpadding="0" style="width: 600px;">
              <tbody>
                <tr>
                  <td align="center" valign="center"
                    style="margin: 0; background-color: #ffffff; background-size: cover; background-repeat: no-repeat; background-position: center center; padding: 30px 15px 40px;">
                    <table align="center" border="0" cellpadding="0"
                      cellspacing="0">
                      <tbody>
                        <tr>
                          <td valign="top" align="center"
                            style="padding: 0px; margin: 0px;">
                            <a href="#"><img src="https://globalshippersrwanda.com/assets/cms/img/logo-black.png" width="100"
                                style="border: none; font-weight: bold; max-height: 100px; height: auto; line-height: 100%; outline: none; text-decoration: none; text-transform: capitalize; border-width: 0px; border-style: none; border-color: transparent; font-size: 12px; display: block;"></a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
                <tr> 
                  <td align="center" valign="top"
                    style="margin: 0; padding: 0;">
                    <table width="100%" align="center" border="0"
                      cellpadding="0" cellspacing="0" bgcolor="#ffffff">
                      <tbody>
                       <tr>   
                          <td align="left" valign="top"
                            style="margin: 0px; padding: 30px 30px 10px 30px; background-color: rgb(255, 255,
									255); font-size: 16px; font-family: "Lato", Arial, Helvetica,
                            sans-serif; line-height: 1.33;">
                            <span style="font-family: "Lato", Arial, Helvetica,
                              sans-serif; color: #000000; font-size: 20px;">
                              <span style="font-weight: 700;"></span>
                            </span>
                          </td>

                        </tr>
                        <tr>   
                          <td align="left" valign="top"
                            style="margin: 0px; padding: 30px 30px 10px 30px; background-color: rgb(255, 255,
									255); font-size: 16px; font-family: "Lato", Arial, Helvetica,
                            sans-serif; line-height: 1.33;">
                            <span style="font-family: "Lato", Arial, Helvetica,
                              sans-serif; color: #000000; font-size: 20px;">
                              <span style="font-weight: 700;">'.$internationupmessage['msg'].'</span>
                            </span>
                          </td>

                        </tr>

                      </tbody>
                    </table>
                    <table align="center" border="0" cellpadding="0"
                      cellspacing="0"
                      style="border-spacing: 0; margin: 0; padding: 0; border-spacing: 0px; -webkit-border-horizontal-spacing: 0px; -webkit-border-vertical-spacing: 0px; width: 100%">
                      <tr>
                        <td style="background: #ffffff;">
                          <table width="600" align="center" border="0"
                            cellpadding="0" cellspacing="0">
                            <tbody>
                              <tr>
                                <td valign="top" align="center"
                                  style="padding: 30px 30px 20px 30px; font-family: "Lato"
                                  ,Arial, Helvetica, sans-serif; margin: 0px;
                                  font-size: 40px; color: #000000; font-weight:
                                  bold;">
                                 
                                </td>
                              </tr>
                              <tr>
                                <td valign="top" align="center"
                                  style="padding: 0px 30px 10px 30px; margin: 0px; font-size: 15px; line-height: 23px; color: #000000;">
                                  <span style="font-family: "Lato" ,Arial,
                                    Helvetica, sans-serif; color: #000000;
                                    font-size: 16px;">
                                   
                                  </span>
                                </td>
                              </tr>
                              <tr>
                                <td valign="top" align="center"
                                  style="padding: 10px 30px 40px 30px; margin: 0px; font-size: 15px; line-height: 23px; color: #fff;">
                                  <a href="https://globalshippersrwanda.com/"
                                    style="padding: 10px 20px; color:#ffffff; font-size: 16px; font-family: "Lato"
                                    ,Arial, Helvetica, sans-serif; color:
                                    #ffffff; background-color: #000000;
                                    border-color: #000000; text-decoration:
                                    none; border-radius: 4px;">Visit Website</a>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>

                <tr>
                  <td style="background:#ffffff;">
                    <table width="600">
                      <tr>
                        <td align="center"
                          style="padding: 20px 0px 10px 0; background:#ffffff; border-top: 1px solid #d1d1d1;">
                          <table width="600" align="center" border="0"
                            cellpadding="0" cellspacing="0">
                            <tbody>
                              <tr>
                                <td align="center" valign="top" nowrap
                                  style="margin: 0px; padding: 0; font-size: 16px; font-family: "Lato",
                                  Arial, Helvetica, sans-serif; line-height:
                                  22px;">
                                 
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                      <tr>
                        <td align="center"
                          style="padding: 0px 0px 20px 0; background:#ffffff;">
                          <table width="300" align="center" border="0"
                            cellpadding="0" cellspacing="0">
                            <tbody>
                              <tr>
                                <td align="center" valign="top" nowrap
                                  style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                  Arial, Helvetica, sans-serif;">
                                  <a href="https://globalshippersrwanda.com/privacy"
                                    style="color: #000000; font-weight: normal; font-family: "Lato",
                                    Arial, Helvetica, sans-serif;
                                    text-decoration: none;">
                                    <span style="font-family: "Lato", Arial,
                                      Helvetica, sans-serif; color: #000000;
                                      font-size: 14px; white-space: nowrap;
                                      line-height: 22px;">Privacy Policy</span>
                                  </a>
                                </td>
                                <td align="center" valign="top" nowrap
                                  style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                  Arial, Helvetica, sans-serif;">
                                  <a href ="https://globalshippersrwanda.com/about-us"
                                    style="color: #2e3233; font-weight: normal; font-family: "Lato",
                                    Arial, Helvetica, sans-serif;
                                    text-decoration: none;">
                                    <span style="font-family: "Lato", Arial,
                                      Helvetica, sans-serif; color: #000000;
                                      font-size: 14px; white-space: nowrap;
                                      line-height: 22px;">About Us</span>
                                  </a>
                                </td>
                                <td align="center" valign="top" nowrap
                                  style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                  Arial, Helvetica, sans-serif;">
                                  <a href="https://globalshippersrwanda.com/contact-us"
                                    style="color: #000000; font-weight: normal; font-family: "Lato",
                                    Arial, Helvetica, sans-serif;
                                    text-decoration: none;">
                                    <span style="font-family: "Lato", Arial,
                                      Helvetica, sans-serif; color: #000000;
                                      font-size: 14px; white-space: nowrap;
                                      line-height: 22px;">Contact US</span>
                                  </a>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
          </td>
        </tr>
      </tbody>
    </table>
  </body>
</html>';



        
                        $mail = new PHPMailer(); 
                        $mail->IsSMTP(); 
                        $mail->SMTPAuth = true; 
                        $mail->SMTPSecure = 'tls'; 
                       $mail->Host = "mail.privateemail.com";
                        $mail->Port = 587; 
                        $mail->IsHTML(true);
                        $mail->CharSet = 'UTF-8';
                        //$mail->SMTPDebug = 2; 
                        $mail->Username =  EMAIL_SMTP_GOOGLE;
                        $mail->Password = PASSWORD_SMTP_GOOGLE;
                        $mail->SetFrom("services@globalshippersrwanda.com");;
                        $mail->Subject = $internationupsubject;
                        $mail->Body =$html;
                        $mail->AddAddress($internationupto);
                        $mail->SMTPOptions=array('ssl'=>array (
                            'verify_peer'=>false,
                            'verify_peer_name'=>false,
                            'allow_self_signed'=>false
                        ));
                    if(!$mail->Send()){
                        echo $mail->ErrorInfo;
                    }else{
                        return  'Sent';
                    }
                }

                public function admininternationupsendmail($admininternationupto, $admininternationupsubject, $admininternationupmessage) {

                  $html = '<!DOCTYPE html>
          <html lang="en-US">
            <head>
              <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
              <title>Email Template</title>
              <style type="text/css">
                @media screen and (max-width: 600px),
                screen and (max-device-width: 600px) {
                  body {
                    margin: 0 !important;
                    padding: 0 !important;
                  }
                }
                @media screen and (-webkit-min-device-pixel-ratio: 0) and (max-width: 600px) {
                  body {
                    margin: 0 !important;
                    padding: 0 !important;
                  }
                }
            a{
            color: #000;
            text-decoration:none;
            }
              </style>
            </head>
            <body style="margin: 0; padding: 0; border: 0;">
              <table width="100%" align="center" cellpadding="0" cellspacing="0"
                border="0" dir="ltr" style="background-color: rgb(255, 255, 255);">
                <tbody>
                  <tr>
                    <td align="center" valign="top"
                      style="margin: 0; padding: 0px 15px 0px;">
                      <table width="600" align="center" border="0" cellspacing="0"
                        cellpadding="0" style="width: 600px;">
                        <tbody>
                          <tr>
                            <td align="center" valign="center"
                              style="margin: 0; background-color: #ffffff; background-size: cover; background-repeat: no-repeat; background-position: center center; padding: 30px 15px 40px;">
                              <table align="center" border="0" cellpadding="0"
                                cellspacing="0">
                                <tbody>
                                  <tr>
                                    <td valign="top" align="center"
                                      style="padding: 0px; margin: 0px;">
                                      <a href="#"><img src="https://globalshippersrwanda.com/assets/cms/img/logo-black.png" width="100"
                                          style="border: none; font-weight: bold; max-height: 100px; height: auto; line-height: 100%; outline: none; text-decoration: none; text-transform: capitalize; border-width: 0px; border-style: none; border-color: transparent; font-size: 12px; display: block;"></a>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </td>
                          </tr>
                          <tr> 
                            <td align="center" valign="top"
                              style="margin: 0; padding: 0;">
                              <table width="100%" align="center" border="0"
                                cellpadding="0" cellspacing="0" bgcolor="#ffffff">
                                <tbody>
                                 <tr>   
                                    <td align="left" valign="top"
                                      style="margin: 0px; padding: 30px 30px 10px 30px; background-color: rgb(255, 255,
                            255); font-size: 16px; font-family: "Lato", Arial, Helvetica,
                                      sans-serif; line-height: 1.33;">
                                      <span style="font-family: "Lato", Arial, Helvetica,
                                        sans-serif; color: #000000; font-size: 20px;">
                                        <span style="font-weight: 700;"></span>
                                      </span>
                                    </td>
          
                                  </tr>
                                  <tr>   
                                    <td align="left" valign="top"
                                      style="margin: 0px; padding: 30px 30px 10px 30px; background-color: rgb(255, 255,
                            255); font-size: 16px; font-family: "Lato", Arial, Helvetica,
                                      sans-serif; line-height: 1.33;">
                                      <span style="font-family: "Lato", Arial, Helvetica,
                                        sans-serif; color: #000000; font-size: 20px;">
                                        <span style="font-weight: 700;">'.$admininternationupmessage['msg'].'</span>
                                      </span>
                                    </td>
          
                                  </tr>
          
                                </tbody>
                              </table>
                              <table align="center" border="0" cellpadding="0"
                                cellspacing="0"
                                style="border-spacing: 0; margin: 0; padding: 0; border-spacing: 0px; -webkit-border-horizontal-spacing: 0px; -webkit-border-vertical-spacing: 0px; width: 100%">
                                <tr>
                                  <td style="background: #ffffff;">
                                    <table width="600" align="center" border="0"
                                      cellpadding="0" cellspacing="0">
                                      <tbody>
                                        <tr>
                                          <td valign="top" align="center"
                                            style="padding: 30px 30px 20px 30px; font-family: "Lato"
                                            ,Arial, Helvetica, sans-serif; margin: 0px;
                                            font-size: 40px; color: #000000; font-weight:
                                            bold;">
                                           
                                          </td>
                                        </tr>
                                        <tr>
                                          <td valign="top" align="center"
                                            style="padding: 0px 30px 10px 30px; margin: 0px; font-size: 15px; line-height: 23px; color: #000000;">
                                            <span style="font-family: "Lato" ,Arial,
                                              Helvetica, sans-serif; color: #000000;
                                              font-size: 16px;">
                                             
                                            </span>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td valign="top" align="center"
                                            style="padding: 10px 30px 40px 30px; margin: 0px; font-size: 15px; line-height: 23px; color: #fff;">
                                            <a href="https://globalshippersrwanda.com/"
                                              style="padding: 10px 20px; color:#ffffff; font-size: 16px; font-family: "Lato"
                                              ,Arial, Helvetica, sans-serif; color:
                                              #ffffff; background-color: #000000;
                                              border-color: #000000; text-decoration:
                                              none; border-radius: 4px;">Visit Website</a>
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </td>
                                </tr>
                              </table>
                            </td>
                          </tr>
          
                          <tr>
                            <td style="background:#ffffff;">
                              <table width="600">
                                <tr>
                                  <td align="center"
                                    style="padding: 20px 0px 10px 0; background:#ffffff; border-top: 1px solid #d1d1d1;">
                                    <table width="600" align="center" border="0"
                                      cellpadding="0" cellspacing="0">
                                      <tbody>
                                        <tr>
                                          <td align="center" valign="top" nowrap
                                            style="margin: 0px; padding: 0; font-size: 16px; font-family: "Lato",
                                            Arial, Helvetica, sans-serif; line-height:
                                            22px;">
                                           
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </td>
                                </tr>
                                <tr>
                                  <td align="center"
                                    style="padding: 0px 0px 20px 0; background:#ffffff;">
                                    <table width="300" align="center" border="0"
                                      cellpadding="0" cellspacing="0">
                                      <tbody>
                                        <tr>
                                          <td align="center" valign="top" nowrap
                                            style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                            Arial, Helvetica, sans-serif;">
                                            <a href="https://globalshippersrwanda.com/privacy"
                                              style="color: #000000; font-weight: normal; font-family: "Lato",
                                              Arial, Helvetica, sans-serif;
                                              text-decoration: none;">
                                              <span style="font-family: "Lato", Arial,
                                                Helvetica, sans-serif; color: #000000;
                                                font-size: 14px; white-space: nowrap;
                                                line-height: 22px;">Privacy Policy</span>
                                            </a>
                                          </td>
                                          <td align="center" valign="top" nowrap
                                            style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                            Arial, Helvetica, sans-serif;">
                                            <a href ="https://globalshippersrwanda.com/about-us"
                                              style="color: #2e3233; font-weight: normal; font-family: "Lato",
                                              Arial, Helvetica, sans-serif;
                                              text-decoration: none;">
                                              <span style="font-family: "Lato", Arial,
                                                Helvetica, sans-serif; color: #000000;
                                                font-size: 14px; white-space: nowrap;
                                                line-height: 22px;">About Us</span>
                                            </a>
                                          </td>
                                          <td align="center" valign="top" nowrap
                                            style="margin: 0px; padding: 0 10px; font-size: 16px; font-family: "Lato",
                                            Arial, Helvetica, sans-serif;">
                                            <a href="https://globalshippersrwanda.com/contact-us"
                                              style="color: #000000; font-weight: normal; font-family: "Lato",
                                              Arial, Helvetica, sans-serif;
                                              text-decoration: none;">
                                              <span style="font-family: "Lato", Arial,
                                                Helvetica, sans-serif; color: #000000;
                                                font-size: 14px; white-space: nowrap;
                                                line-height: 22px;">Contact US</span>
                                            </a>
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </td>
                                </tr>
                              </table>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                </tbody>
              </table>
            </body>
          </html>';
          
          
          
                  
                                  $mail = new PHPMailer(); 
                                  $mail->IsSMTP(); 
                                  $mail->SMTPAuth = true; 
                                  $mail->SMTPSecure = 'tls'; 
                                 $mail->Host = "mail.privateemail.com";
                                  $mail->Port = 587; 
                                  $mail->IsHTML(true);
                                  $mail->CharSet = 'UTF-8';
                                  //$mail->SMTPDebug = 2; 
                                  $mail->Username = EMAIL_SMTP_GOOGLE;
                                  $mail->Password = PASSWORD_SMTP_GOOGLE;
                                  $mail->SetFrom("services@globalshippersrwanda.com");;
                                  $mail->Subject = $admininternationupsubject;
                                  $mail->Body =$html;
                                  $mail->AddAddress($admininternationupto);
                                  $mail->SMTPOptions=array('ssl'=>array (
                                      'verify_peer'=>false,
                                      'verify_peer_name'=>false,
                                      'allow_self_signed'=>false
                                  ));
                              if(!$mail->Send()){
                                  echo $mail->ErrorInfo;
                              }else{
                                  return  'Sent';
                              }
                          }

    public function international_update_order_status(){
        $user_id = $this->input->post('user_id');
        $order_id = $this->input->post('submit');
        $id= $this->input->post('id[]');
        $count = count($this->input->post('item_receive[]'));
        for($i = 0; $i<$count; $i++){
        $record = [
            'id'            =>$this->input->post('id'.'['.$i.']'),
            'item_received' => $this->input->post('item_receive'.'['.$i.']')

        ];
        $msg = [
            'order_id'=> $order_id,
            'user_id' => $this->session->userdata('id'),
            'content' => $this->input->post('receive_msg'),
            'order_type' =>'1',
            'notification_type' =>'1',
            'created_time' => date('Y-m-d H:i:s')
        ];
        //$user_id = $this->session->userdata('id');
        $order_id = $order_id;
        $noti_data = [
                'user_id'   =>  $user_id,
                'order_id'  => $order_id,
                'order_type' => '3',
                'content'   => $record['item_received'],
               'notification_type' => '1',
        ];
        $users = [
          'email' => $this->input->post('email'),
          'phone' => $this->input->post('phone'),
          'fname' => $this->input->post('fname'),
          'lname' => $this->input->post('lname')
      ];
      $adminemail= $this->input->post('adminemail');
        $internationupto = $users['email'];
        $internationupsubject  = 'Your Order has been Successfully Delivered! - Pickup shipment '.$order_id.'';
        $result = $this->Admin_model->international_update_order_status($record);
        $internationupmessage['msg'] = "<p>Dear ".$users['fname']." ".$users['lname']."</p>
        <p>We are thrilled to inform you that your order ".$order_id."  has been successfully delivered! We appreciate the trust you have placed in us, and we're delighted to have been able to bring your package to your doorstep.</p>
        <p>At Global Shippers Rwanda, we strive to provide exceptional service and ensure that your experience with us is seamless and enjoyable. We're happy to hear that you're satisfied with our services and hope you've had a great experience working with us.</p>
        <p>As a valued customer, we would like to request a few minutes of your time to share your feedback with us. Your opinion matters greatly, and it will help us improve our services even further.
         Please click to leave a review on Google <a href = 'https://g.co/kgs/Fh78bbo'>Click Here <a></p>
        <p>Your review will help us understand what we're doing right and what we can improve on, ensuring that we continue to provide the best possible service to our customers. Your input will also help others make informed decisions when choosing a shipping partner.</p>
        <p>Thank you for choosing Global Shippers Rwanda, and we look forward to serving you again in the future.</p>
        <p>Regards</p>
        <p>The GlobalshippersRwanda Team</p>";
        $admininternationupto = $adminemail;
        $admininternationupsubject  = 'Your Order has been Successfully Delivered! - Pickup shipment '.$order_id.'';
        $admininternationupmessage['msg'] = "<p>Dear Admin</p>
        <p>We are thrilled to inform you that your order ".$order_id."  has been successfully delivered! We appreciate the trust you have placed in us, and we're delighted to have been able to bring your package to your doorstep.</p>
        <p>At Global Shippers Rwanda, we strive to provide exceptional service and ensure that your experience with us is seamless and enjoyable. We're happy to hear that you're satisfied with our services and hope you've had a great experience working with us.</p>
        <p>As a valued customer, we would like to request a few minutes of your time to share your feedback with us. Your opinion matters greatly, and it will help us improve our services even further.
          Please click to leave a review on Google <a href = 'https://g.co/kgs/Fh78bbo'>Click Here <a></p>
        <p>Your review will help us understand what we're doing right and what we can improve on, ensuring that we continue to provide the best possible service to our customers. Your input will also help others make informed decisions when choosing a shipping partner.</p>
        <p>Customer Information:</p>
        <p>Name: ".$users['fname']."".$users['lname']."</p>
         <p>Email: ".$users['email']."</p>
          <p>Contact No: ".$users['phone']."</p>
        <p>Thank you for choosing Global Shippers Rwanda, and we look forward to serving you again in the future.</p>
        <p>Regards</p>
        <p>The GlobalshippersRwanda Team</p>";
       
       
    }
    if($record['item_received']=="4"){
      $this->internationupsendmail($internationupto, $internationupsubject, $internationupmessage);
    $this->admininternationupsendmail($admininternationupto, $admininternationupsubject, $admininternationupmessage);
    }
    else{
      echo "Email is not send";
    }
    
    $notifications = $this->Admin_model->create_notification($noti_data);
   // exit;
    redirect(base_url().'international-order-details/'.$order_id,'redresh');
    }

    public function update_address(){
        $address = [
            'id'    => $this->input->post('id'),
            'fname' => $this->input->post('first_name'),
            'phone' => $this->input->post('phone_number'),
            'lname' => $this->input->post('last_name'),
            'address' => $this->input->post('address'),
            'landmark' => $this->input->post('landmark'),
            'state'    => $this->input->post('state'),
            'city'     => $this->input->post('city'),
            'zipcode'  => $this->input->post('zip'),
            'updated_date' => date('Y-m-d H:i:s')
        ];
        $result = $this->Admin_model->update_admin_address($address);
        //echo json_encode($result);
        redirect('Admin/dashboard');
    }
    public function shopnship_invoice(){

        $shopnship_id = $this->uri->segment(3);
        $payment_id = $this->uri->segment(4);
        $invoice['record'] = $this->Admin_model->shopnship_invoice($shopnship_id);
        $invoice['invoiceAmt'] = $this->Admin_model-> shopnship_update_payment_display($shopnship_id,$payment_id);
        $invoice['address'] = $this->Admin_model->shopnship_invoice_address($invoice['record'][0]->address_id);
        $invoice['users']  = $this->Admin_model->shopnship_invoice_users($invoice['record'][0]->user_id);
        $this->load->view('admin/shopnship-invoice',$invoice);
      }


      public function assisted_invoice(){
        $assisted_id = $this->uri->segment(3);
        $payment_id = $this->uri->segment(4);
        $invoice['record'] = $this->Admin_model->assisted_invoice($assisted_id);
        $invoice['invoiceAmt'] = $this->Admin_model->assisted_update_payment_display($assisted_id,$payment_id); 
        $invoice['address'] = $this->Admin_model->assisted_invoice_address($invoice['record'][0]->address_id);
        $invoice['users']  = $this->Admin_model->assisted_invoice_users($invoice['record'][0]->user_id);
        $this->load->view('admin/assisted-invoice',$invoice);
      }

      public function shopnship_pdf(){
        $this->load->library('pdf');
        $shopnship_id = $this->uri->segment(3);
        $payment_id = $this->uri->segment(4);

        $invoice['record'] = $this->Admin_model->shopnship_invoice($shopnship_id);
        $invoice['invoiceAmt'] = $this->Admin_model-> shopnship_update_payment_display($shopnship_id,$payment_id);
        $invoice['address'] = $this->Admin_model->shopnship_invoice_address($invoice['record'][0]->address_id);
        $invoice['users']  = $this->Admin_model->shopnship_invoice_users($invoice['record'][0]->user_id);
        $html = $this->load->view('admin/shopnship_pdf',$invoice,true);

        $this->pdf->loadHtml($html);
        $this->pdf->set_option('isRemoteEnabled', true);
        $this->pdf->set_option('fontHeightRatio', true);

        $this->pdf->setPaper('A4', 'portrait');
        $this->pdf->render();
        $this->pdf->stream("shopnship.pdf", array("Attachment"=> 1));
      }


      public function assisted_pdf(){
        $this->load->library('pdf');
        $assisted_id = $this->uri->segment(3);
        $invoice['record'] = $this->Admin_model->assisted_invoice($assisted_id);
       
        $invoice['address'] = $this->Admin_model->assisted_invoice_address($invoice['record'][0]->address_id);
        $invoice['users']  = $this->Admin_model->assisted_invoice_users($invoice['record'][0]->user_id);
       $html= $this->load->view('admin/assisted_pdf',$invoice,true);
       $this->pdf->loadHtml($html);
       $this->pdf->set_option('isRemoteEnabled', true);
       $this->pdf->set_option('fontHeightRatio', true);

       $this->pdf->setPaper('A4', 'portrait');
       $this->pdf->render();
       $this->pdf->stream("assisted.pdf", array("Attachment"=> 1));
      }

      public function notifications(){
        $notifications['message'] = $this->Admin_model->display_notifications();
        $notifications['count']   = $this->Admin_model->count_notification();
        $this->load->view('admin/heads',$notifications);
        $this->load->view('admin/notifications',$notifications);
        $this->load->view('admin/footer');
      }

      public function delete_notification(){
        $id = $this->uri->segment(4);
       $result = $this->Admin_model->delete_nofification($id);
       if($result==TRUE){
        redirect('admin/notifications','refresh');
       }
       else{
        redirect('admin/notifications','refresh');
       }
        
    }
    public function delete_all_notification(){
      
        $user_id = $this->session->userdata('id');
        $result = $this->Admin_model->delete_all_nofification($user_id);
        if($result==TRUE){
            redirect('admin/notifications','refresh');
           }
           else{
            redirect('admin/notifications','refresh');
           }
    }
    public function assisted_image_insert(){
        $order_id = $this->input->post('submit');
        $imagedata = [
            'order_id' => $order_id,
            'shipment_type' => '2',
            'created_date' =>date('Y-m-d H:i:s')
        ];
        for($k=0; $k < count($_FILES['image1']['name']); $k++){
            $image =$_FILES['image1']['name'];
            $extension = pathinfo($image[$k],PATHINFO_EXTENSION);
            $rand = rand(0,100000);
            $rename = 'public/uploads/'.strtotime(date('Y-m-d')).$rand;
            $imagedata['image'] = $rename.'.'.$extension;
              if ($_FILES["image1"]["size"][$k] > 500000) {
                echo "Sorry, your file is too large.";
               
              }
              
              if($extension != "jpg" && $extension != "png" && $extension != "jpeg" && $extension != "gif" ) {
                    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                  
                    }
                    
                    if(move_uploaded_file($_FILES["image1"]["tmp_name"][$k], $imagedata['image'])){
                    echo "The file ". $imagedata['image']. " has been uploaded.";
                }
        
             else {
                        echo "Sorry, there was an error uploading your file.";
                       }
                       $result = $this->Admin_model->insert_image($imagedata);
                    } 
                   
                   // echo json_encode($result);
                    redirect(base_url().'assisted-order-details/'.$order_id,'redresh');
    }

    public function shopnship_image_insert(){
        $order_id = $this->input->post('submit');
        $imagedata = [
            'order_id' => $order_id,
            'shipment_type' => '1',
            'created_date' =>date('Y-m-d H:i:s')
        ];
        for($k=0; $k < count($_FILES['image1']['name']); $k++){
            $image =$_FILES['image1']['name'];
            $extension = pathinfo($image[$k],PATHINFO_EXTENSION);
            $rand = rand(0,100000);
            $rename = 'public/uploads/'.strtotime(date('Y-m-d')).$rand;
            $imagedata['image'] = $rename.'.'.$extension;
              if ($_FILES["image1"]["size"][$k] > 500000) {
                echo "Sorry, your file is too large.";
              }
              
              if($extension != "jpg" && $extension != "png" && $extension != "jpeg" && $extension != "gif" ) {
                    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                  
                    }
                    
                    if(move_uploaded_file($_FILES["image1"]["tmp_name"][$k], $imagedata['image'])){
                    echo "The file ". $imagedata['image']. " has been uploaded.";
                }
        
             else {
                        echo "Sorry, there was an error uploading your file.";
                       }
                       $result = $this->Admin_model->insert_image($imagedata);
                    } 
                    
                  
                    //echo json_encode($result);
                    redirect(base_url().'shopnship-order-details/'.$order_id,'redresh');
    }


    public function editmailview(){
        $notifications['count']   = $this->Admin_model->count_notification();
        $data['email'] = $this->Admin_model->admingetemail();
        $this->load->view('admin/heads',$notifications);
        $this->load->view('admin/emailview',$data);
        $this->load->view('admin/footer');
    }
    public function adminupdateemail(){

        $email = [
            'id'       => $this->input->post('id'),
            'email'    => $this->input->post('email')
           // 'update_date' => date('Y-m-d H:i:s')
        ];
        $result = $this->Admin_model->update_admin_email($email);
       // echo json_encode($result);
        redirect('Admin/dashboard');

    }
  public function helpcentercatinsert(){
    $data = [
        'cat_name' => $this->input->post('category'),
        'date_created' =>date('Y-m-d H:i:s'),
    ];
    $result = $this->Admin_model->helpcatinsert($data);
   // echo json_encode($result);
    redirect('cms/help-centre');
  }
  public function helpqna(){
    $qadata = [
        'cat_id' => $this->input->post('category'),
        'cat_question' => $this->input->post('question'),
        'cat_answer' => $this->input->post('answer'),
        'date_created' => date('Y-m-d H:i:s'),
    ];
   $result = $this->Admin_model->helpinsertqa($qadata);
   if($result==TRUE){
    $this->session->set_flashdata('msg',"Help Centre created Successfully!");
    }else{
    $this->session->set_flashdata('msg',"Help centre is not created Successfully!");
    }
   redirect('cms/help-centre-listing');
  }
  public function helpcentrelisting(){
    $notifications['count']   = $this->Admin_model->count_notification();
    $data['record'] = $this->Admin_model->helpcentrecatqa();
    $this->load->view('admin/heads',$notifications);
    $this->load->view('admin/help-centre-listing',$data);
    $this->load->view('admin/footer');
}
public function edit_helpcentre(){
    $qna_id = $this->uri->segment(3);
    $data['category'] = $this->Admin_model->helpcentregetcat();
    $notifications['count']   = $this->Admin_model->count_notification();
    $data['editrecord'] = $this->Admin_model->edit_helpcentre($qna_id);
    $this->load->view('admin/heads',$notifications);
    $this->load->view('admin/edit-help-centre',$data);
    $this->load->view('admin/footer');

}
    public function updatehelpcentre(){
        $id = $this->input->post('editid');
        $record = [
            'cat_id' => $this->input->post('category'),
            'cat_question' => $this->input->post('question'),
            'date_modified'   => date('Y-m-d H:i:s')
        ];
          $result = $this->Admin_model->update_helpcentre_record($id,$record);
          if($result==TRUE){
            $this->session->set_flashdata('msg',"Help Centre Updated Successfully!");
            }else{
            $this->session->set_flashdata('msg',"Help centre is not Update Successfully!");
            }
          redirect('cms/help-centre-listing');
    }

    public function delete_helpcentre(){
                $id = $this->uri->segment(3);
                $result = $this->Admin_model->helpcentre_delete($id);
                if($result==TRUE){
                    $this->session->set_flashdata('msg',"Help Centre deleted Successfully!");
                    }else{
                    $this->session->set_flashdata('msg',"Help centre is not deleted Successfully!");
                    }
               // echo json_encode($result);
                redirect('cms/help-centre-listing');
              
    }
    public function shipping(){
      $notifications['count']   = $this->Admin_model->count_notification();
      $data['email'] = $this->Admin_model->admingetemail();
      $data['ship'] = $this->Admin_model->getshipping();
      // echo "<pre>";
      // print_r($data['ship']);exit;
      $this->load->view('admin/heads',$notifications);
      $this->load->view('admin/shipping-calculator',$data);
      $this->load->view('admin/footer');
    }
    public function updateshipping(){
      $id= $this->input->post('id');
      $data= [
        'description' => $this->input->post('description'),
        'createddate' =>  date('Y-m-d H:i:s'),
      ];
      // echo "<pre>";
      // print_r($data);
      // exit;
      $this->Admin_model->updateshipping($id,$data);
      redirect('cms/shipping');
    }
    public function useremaillogin(){
      $notifications['count']   = $this->Admin_model->count_notification();
      $data['email'] = $this->Admin_model->admingetemail();
      
      // echo "<pre>";
      // print_r($data['ship']);exit;
      $this->load->view('admin/heads',$notifications);
      $this->load->view('admin/useremail',$data);
      $this->load->view('admin/footer');
    }
    public function userlogin(){
      $email = $this->input->post('email');
      $userid    = $this->Admin_model->admin_user_emaillogin($email);
      if($userid){
        $this->session->set_userdata('id',$userid);
        //echo "login";
        redirect("dashboard") ;
      
    }
    else{
      $this->session->set_flashdata('message','Your email invalid !');
      redirect("admin/user-email");
    }
    }

    public function privacy(){
      $notifications['count']   = $this->Admin_model->count_notification();
      $data['email'] = $this->Admin_model->admingetemail();
      $data['privacy'] = $this->Admin_model->getprivacy();
      $this->load->view('admin/heads',$notifications);
      $this->load->view('admin/privacy',$data);
      $this->load->view('admin/footer');
    }
    public function updateprivacy(){
      $privacy = [
        'id'       => $this->input->post('id'),
        'description'    => $this->input->post('description'),
        'createddate' => date('Y-m-d H:i:s')
    ];
   $result =  $this->Admin_model->update_privacy($privacy);
    redirect('Admin/Admin/privacy');
    }
    public function terms(){
      $notifications['count']   = $this->Admin_model->count_notification();
      $data['email'] = $this->Admin_model->admingetemail();
      $data['terms'] = $this->Admin_model->getterms();
      $this->load->view('admin/heads',$notifications);
      $this->load->view('admin/terms',$data);
      $this->load->view('admin/footer');
    }
    public function updateterms(){
      $terms = [
        'id'       => $this->input->post('id'),
        'description'    => $this->input->post('description'),
       'createddate' => date('Y-m-d H:i:s')
    ];
   $result =  $this->Admin_model->update_terms($terms);
    redirect('Admin/Admin/terms');
    }
}
?>