<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Login_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
   
  function doLogin_model($username, $password)
    {
     $this->db->select('*');
     $this->db->from('users');
     $this->db->where('username', $username);
     $this->db->where('password', MD5($password));
     $query = $this->db->get();
     if($query->num_rows()==1)
     {
     return $query->row_array();
     }
     else
     {
     $invalid=array('username'=>0, 'loginaccess'=>0);
     return $invalid;
     }
    }
 function doSignup_model($data)
 {
  $this->db->insert('users', $data);
  return 0;
 }
    
	

    


   

}

