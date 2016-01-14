<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct()
    {

        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('Admin_model');
               
    }
	public function index()
	{
		if (!isset($_SESSION['nickname'])) 
		{
			$data['error']='请先登录';
			$this->load->view('admin/login',$data);
		}
		else
		{
			$data['nickname']=$_SESSION['nickname'];
			$this->load->view('admin/index',$data);
		}
	}
	public function login()
	{
		$data['error']='';
		$this->load->view('admin/login',$data);
	}

	public function loginvalid()
	{
		$cellphone=$_POST['username'];
		$password=$_POST['password'];
		$webroot=base_url();
		if($this->Admin_model->is_admin_exist($cellphone,$password))
		{	 
			 $nickname=$this->Admin_model->get_nickname($cellphone);
			 $account_id=$this->Admin_model->get_id($cellphone);
			 $this->session->set_userdata('nickname',$nickname);
			 $this->session->set_userdata('author_id',$account_id);
			 $data['nickname']=$nickname;
			 $this->load->view('admin/index',$data);
		}
		else
		{
			$data['error']="用户名或者密码错误";
			$this->load->view('admin/login',$data);
		}
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
