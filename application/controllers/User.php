<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct()
    {

        parent::__construct();

        $this->load->helper('url');
        // $this->load->library('session');
               
    }

	//用户分析
	public function analysis()
	{
		$this->load->view('admin/user_analysis');

	}

	//用户管理
	public function info()
	{
		$this->load->view('admin/user_info');

	}
}
