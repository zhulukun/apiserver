<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {

	//添加文章
	public function add()
	{
		$this->load->helper('url');

		$url="http://localhost/api/index.php/plan/get_all_cat";
		$json_cat=file_get_contents($url);
		$arr_cat=(array)json_decode($json_cat,TRUE);
		$article['arr_cat']=$arr_cat;

		$url_impress="http://123.56.111.79:8080/api/index.php/impress/get_preset_impress";
		$json_impress=file_get_contents($url_impress);
		$arr_impress=(array)json_decode($json_impress,TRUE);
		$article['arr_relation']=$arr_impress['response']['relation'];
		$article['arr_like']=$arr_impress['response']['like'];
		$article['arr_character']=$arr_impress['response']['character'];

		$this->load->view('admin/add_article',$article);
	}

	//文章列表
	public function lists()
	{
		$this->load->helper('url');
		$this->load->view('admin/list_article');
	}
}
