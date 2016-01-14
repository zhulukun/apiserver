<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Plan extends CI_Controller {

	function __construct()
    {

        parent::__construct();

        $this->load->helper('url');
        // $this->load->library('session');
               
    }

	//获取方案分类
	public function get_all_cat()
	{
		$url="http://123.56.111.79:8080/api/index.php/plan/get_all_cat";
		$json_cat=file_get_contents($url);
		$arr_cat=(array)json_decode($json_cat,TRUE);
		
		
	}

	
}
