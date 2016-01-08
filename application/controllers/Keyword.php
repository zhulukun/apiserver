<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class keyword extends CI_Controller {

	//添加文章
	public function add_cat()
	{
		$this->load->helper('url');
		$this->load->view('admin/keyword_addcat');
	}

	//文章列表
	public function manage_cat()
	{
		$this->load->helper('url');
		$this->load->view('admin/keyword_managecat');
	}

	public function add()
	{
		$this->load->helper('url');
		$this->load->view('admin/keyword_add');
	}

	public function lists()
	{
		$this->load->helper('url');
		$this->load->view('admin/keyword_lists');
	}

}
