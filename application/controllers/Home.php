<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
      function __construct()
    {
        parent::__construct();
        $this->load->model("Home_model");
        $this->page_name=$_SERVER['PHP_SELF'];
        $this->server_ip=$_SERVER['REMOTE_ADDR'];
        if($this->session->userdata('isLogin'))
		{
			$this->load->model("Home_model");
		}
		else
		{
			return redirect(base_url('Login/login'));
		}	
		
    }

	public function index()
	{
	 $result['data']=$this->Home_model->getAllUser_model();
	 $this->load->view('home', $result);
	 $this->output->enable_profiler('true');
	}


	
	
	
}
