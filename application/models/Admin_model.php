<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model 
{

    public function insert($table , $data){
        
        $query = $this->db->insert($table,$data);

        return $query;
    }

    public function admin_signup($username , $password , $email){

        $data = array(
            "username" => $username,
            "password" => md5( $password ),
            "email" => $email,
            "role" => "1",
        );

        $query = $this->db->insert("tbl_user",$data);

        return $query;
    }


    public function admin_login($username , $password){

        $this->db->where("username",$username);
        $this->db->where("password",md5($password));
        $query = $this->db->get("tbl_user");

        return $query->result_array();
    }

}