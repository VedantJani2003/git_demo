<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class adminmodel extends CI_Model {
    public function dataopen($data){
         //insert data in database;
         $this->db->insert('baby',$data);
         
             
    //    redirect('Admin/index');
        
    }
    public function fetchData()	{
		$this->db->select('*');
    $q = $this->db->get('baby');
		return $q;
	}

    public function deleterecords($id){
    $this->db->where('id', $id);
    $this->db->delete('baby');
    
    return true;
  }

  // public function update($user_id, $userdata){
  //    $this->db->where('id',$user_id);
  //    $this->db->insert('profile_photo',$userdata);

  // }

}