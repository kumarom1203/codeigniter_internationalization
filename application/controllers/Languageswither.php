<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Languageswither extends CI_Controller {
      function __construct()
    {
        parent::__construct();
        $this->load->model("Home_model");
        $this->page_name=$_SERVER['PHP_SELF'];
        $this->server_ip=$_SERVER['REMOTE_ADDR'];
      
		
    }

	public function lang($site_lang, $redirect)
	{
		
		$this->session->set_userdata('site_lang', $site_lang);

		//echo $_SERVER['HTTP_REFERER'];

		 $url = str_replace('__-__', '%', $redirect);
		 $url = urldecode($url);
        

		 return redirect($url);
	}
}
?>
