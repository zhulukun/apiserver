<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ManageCategory extends CI_Controller {

	public function index()
	{
	    $this->load->helper('url');
	    $json_cat=file_get_contents("http://localhost/api/index.php/plantype/select_category");
	    $arr_cat=(array)json_decode($json_cat,TRUE);
	    $arr['cat']=$arr_cat;
		$this->load->view('admin/manage_category',$arr);
	}
}
