<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function __construct()
    {
            parent::__construct();            
            // Your own constructor code
            $this->load->model('adminmodel');
    }
    public function index(){

        $page_data['page_title']='Admin Login Page';
        $this->load->view('admin/Login',$page_data);
        $this->load->view('admin/Head',$page_data);
        $this->load->view('admin/Foot',$page_data);

    }

    public function open(){

        $this->load->library('upload');
        //this code for to upload image in it's create uniqe name
        $config['upload_path'] = './uploads/'; // Define uploading image folder path
        $config['allowed_types'] = 'gif|jpg|jpeg|png'; // define to uploading image type
        $config['max_size'] = '2048';
        $config['file_name'] = uniqid();  // this is defualt function it works to create uniqe id for image name
        
        $this->upload->initialize($config);// this code to load config upload helper $  library file
        
        date_default_timezone_set("Asia/Kolkata");//this code to define time zone for taking time
        $time =  Date('Y-m-d h-i-s');// this code to create structre for write time and date

        if ($this->upload->do_upload('userfile')) { // this condition for are you uploading image then this statement run ahed
            
            $data = $this->upload->data();//this code to fetch data from uploading image

            $image_name = uniqid() ."-".$time.$data['file_ext'];// this variable take image new name by overwriting on its own name
            $image_path = $image_name;//'uploads/' . //this variable take image name for set its path on databse 
            rename($data['full_path'], $config['upload_path'].$image_name); // this line to rename directory for storing image by that creating new uniqe name by concatinate config path and uniqe name
        } 
        else {
            $image_path = ''; // then file is not uploaded then its take a null path for databse
        }
        //this code for to upload image in it's own name

        // $config['upload_path'] = './uploads/';
        // $config['allowed_types'] = 'gif|jpg|jpeg|png';

        // $this->upload->initialize($config);
        
        // if ($this->upload->do_upload('userfile')) {
        //     $data = $this->upload->data();
        //     $image_path = 'uploads/' . $data['file_name'];
        // } else {
        //     $image_path = '';
        // }
        
        $data = array(
            'fname' => $this->input->post('fname'),
            'lname' => $this->input->post('lname'),
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone'),
            'city' => $this->input->post('city'),
            'profile_photo' => $image_path
        );

        // print_r($data);
        // die;
        $this->adminmodel->dataopen($data);
            
                   if($data == true){
                    echo 1;
                   }        
    }

    public function value(){

        $e['fetch'] = $this->adminmodel->fetchData();
        $this->load->view('table',$e);

        $page_data['page_title'] = 'Admin Data Table';
        $this->load->view('admin/Head',$page_data);
        $this->load->view('admin/Foot',$page_data);

    }
    public function deletedata($id){
        $id=$this->input->get('id');
        $response=$this->adminmodel->deleterecords($id);
        if($response==true){
            echo "Data deleted successfully !";
        }
        else{
            echo "Error !";
        }
        }



}