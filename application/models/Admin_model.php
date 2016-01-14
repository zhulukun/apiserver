<?php

    class Admin_model extends CI_Model {  
                              
        function __construct()  
        {  

            parent::__construct();
            $this->load->database(); 
        
        }

        //判断登录的管理员是否存在
        function is_admin_exist($cellphone,$password)
        {
            $query=$this->db->query("SELECT * FROM xl_account WHERE cellphone='{$cellphone}' AND password='{$password}' AND type='admin'");
            if ($query->num_rows()>0) {
                # code...
                return TRUE;
            }
            return FALSE;
        }

        //获取nickname
        function get_nickname($cellphone)
        {
            $query=$this->db->query("SELECT nickname FROM xl_account WHERE cellphone='{$cellphone}'");
            $arr=array();
            foreach ($query->result_array() as $row) 
            {
                array_push($arr, $row);
            }

            if (count($arr)>0) 
            {
                return $arr[0]['nickname'];
            }

            return NULL;
        }

        //获取account_id
        function get_id($cellphone)
        {
            $query=$this->db->query("SELECT id FROM xl_account WHERE cellphone='{$cellphone}'");
            $arr=array();
            foreach ($query->result_array() as $row) 
            {
                array_push($arr, $row);
            }

            if (count($arr)>0) 
            {
                return $arr[0]['id'];
            }

            return NULL;
        }
    }

?>
