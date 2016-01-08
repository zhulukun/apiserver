<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AddCategory extends CI_Controller {

	public function index()
	{
	    $this->load->helper('url');
		$this->load->view('admin/add_category');
	}
}
