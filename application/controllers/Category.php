<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

	//添加分类
	public function add()
	{
	    $this->load->helper('url');
		$this->load->view('admin/add_category');
	}

	//管理分类
	public function manage()
	{
	    $this->load->helper('url');
	    $json_cat=file_get_contents("http://localhost/api/index.php/plantype/select_category");
	    $arr_cat=(array)json_decode($json_cat,TRUE);
	    $arr['cat']=$arr_cat;
		$this->load->view('admin/manage_category',$arr);
	}

	//更新分类
	public function update()
	{
		$this->load->helper('url');
		$id=$this->uri->segment(4,0);
		$url="http://localhost/api/index.php/plantype/select_unique_category/id/{$id}";
		$json_cat=file_get_contents($url);
		$arr_cat=(array)json_decode($json_cat,TRUE);
		$arr['cat']=$arr_cat;
		$this->load->view('admin/update_category',$arr);

	}


	public function http_post_data($url, $data_string) {  
  		// echo $url;
  		// echo $data_string;
        $ch = curl_init();  
        curl_setopt($ch, CURLOPT_POST, 1);  
        curl_setopt($ch, CURLOPT_URL, $url);  
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);  
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(  
            'Content-Type: application/json; charset=utf-8',  
            'Content-Length: ' . strlen($data_string))  
        );  
        ob_start();  
        curl_exec($ch);  
        $return_content = ob_get_contents();
        print_r($return_content);
        echo($return_content);
        ob_end_clean();  
  
        $return_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);  
        return array($return_code, $return_content);  
    } 


}
