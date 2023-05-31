<?php  
 defined('BASEPATH') OR exit('No direct script access allowed');  
 class main extends CI_Controller {  
      //functions  
      function image_upload()  
      {  
           $data['title'] = "Upload Image using Ajax JQuery in CodeIgniter";  
           $this->load->view('admin/image_upload', $data);  
      }  
      function image()  
      {  
           if(isset($_FILES["userfile"]["name"]))  
           {  
                $config['upload_path'] = './uploads/';  
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['max_size'] = '2048';  
                
                $this->load->library('upload', $config);  
                if(!$this->upload->do_upload('userfile'))  
                {  
                     echo $this->upload->display_errors();  
                }  
                else  
                {  
                     $data = $this->upload->data();  
                     echo '<img src="'.base_url().'uploads/'.$data["file_name"].'" width="300" height="225" class="img-thumbnail" />';  
                }  
           }  
      }  
 }  