<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Home_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
	
	function getAllUser_model(){
	$this->db->select('*');
    $this->db->from('users');
    // $this->db->where('username', $username);
    // $this->db->where('password', MD5($password));
    $query = $this->db->get();
    return $query->result_array();
   }




   
   
	
}	

