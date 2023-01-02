<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model 
{

    public function insert($table , $data){
        
        $query = $this->db->insert($table,$data);

        return $this->db->insert_id();
    }

    public function update($table , $id , $data){
        
                 $this->db->where('id',$id);
        $query = $this->db->update($table,$data);
        return $query;
    }

      public function delete($table , $id ){
        
                 $this->db->where('id',$id);
        $query = $this->db->delete($table);
        return $query;
    }


    public function get_data_by_id($id){
        $this->db->where('id',$id);
        return $this->db->get('tbl_vehicle')->result_array()[0];
        
    }

    public function get_image_by_id($id){
        
        $sql = "SELECT *,ve_image.id as id , ve_image.data_status as data_status FROM `tbl_vehicle_image` as ve_image
        LEFT JOIN tbl_vehicle as ve on ve.id = ve_image.vehicle_id
        WHERE ve.id = ".$id."";

        return  $this->db->query($sql)->result_array();
        
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