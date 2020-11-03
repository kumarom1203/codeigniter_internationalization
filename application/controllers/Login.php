<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
      function __construct()
    {
        parent::__construct();
        $this->load->model("Login_model");
        $this->load->helper('security');
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->page_name=$_SERVER['PHP_SELF'];
        $this->server_ip=$_SERVER['REMOTE_ADDR'];
    }

	public function index()
	{
		echo $this->lang->line('AL002'); 
		echo "<br>FROM CONTROLLER SET UP IS DONE IN HOOKS (config/hooks.php and hook folder)<br>";
		$this->load->view('welcome');
	}
	public function login()
	{
		$this->load->view('login');
	}
	public function doLogin()
	{
	  $this->form_validation->set_rules('username', 'User Name', 'trim|required|xss_clean|addslashes');
      $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|addslashes');
       if($this->form_validation->run())
		{
		$username= $this->security->xss_clean($this->input->post('username'));
	    $password= $this->security->xss_clean($this->input->post('password'));
        $result = $this->Login_model->doLogin_model($username, $password);
         if($result['loginaccess']==1)
	     {
		   $this->session->set_userdata($result);
		   $this->session->set_userdata('isLogin', true);
		   return redirect(base_url('Home'));
	     } 
	     else{
	     	$this->session->set_flashdata('error_msg', 'Wrong Credentials Provided');
        	return redirect(base_url('Login/login')); 
	     }
        }
        else{
        	$this->session->set_flashdata('error_msg', 'Invalid Form Data Submitted');
        	return redirect(base_url('Login/login'));  
        }
	}




	public function signup()
	{
		$this->load->view('signup');

	}
	public function doSignup()
	{
	 	$this->form_validation->set_rules('name', 'User Name', 'trim|required|xss_clean|addslashes');
	 	$this->form_validation->set_rules('username', 'User Name', 'trim|required|xss_clean|addslashes');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|addslashes');
       if($this->form_validation->run())
		{
		$data=$this->security->xss_clean($this->input->post());
		$data['password']=MD5($this->input->post('password'));	
		$this->session->set_flashdata('error_msg', 'User Created');
		$this->Login_model->doSignup_model($data);
		return redirect(base_url('Login/login'));  
		}
		else
		 {
        	$this->session->set_flashdata('error_msg', 'Invalid Form Data Submitted');
        	return redirect(base_url('Login/signup'));  
        }

	}
	public function logout(){
		$this->session->sess_destroy();
		return redirect(base_url('Login/login'));  
	}
}
