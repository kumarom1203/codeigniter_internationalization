<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class LanguageLoader
{
    function initialize() {
        $ci =& get_instance();
        $ci->load->helper('language');

        $site_lang = $ci->session->userdata('site_lang');

        echo $site_lang;
        echo "<br>";

        if ($site_lang) {
            $ci->lang->load($site_lang, $site_lang);

           // print_r($ci->lang);

        } else {
            $ci->lang->load('english','english');
            //print_r($ci->lang);
        }
    }
}

?>