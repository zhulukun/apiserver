<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Impress extends CI_Controller {

	function __construct()
    {

        parent::__construct();

        $this->load->helper('url');
        // $this->load->library('session');
               
    }

	//添加印象分类
	public function add_cat()
	{
		$this->load->view('admin/impress_addcat');

	}

	//添加印象
	public function add()
	{
		$this->load->view('admin/impress_add');

	}

	//印象列表
	public function lists()
	{
		$this->load->view('admin/impress_lists');

	}
}
