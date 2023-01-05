<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Control_model extends CI_Model 
{


    public function signup($username , $password , $email,$role= '1'){

        $data = array(
            "username" => $username,
            "password" => md5( $password ),
            "email" => $email,
            "role" => $role,
        );

        $query = $this->db->insert("tbl_client",$data);

        return $query;
    }


	public function check_login($username , $password){


        $sql = "SELECT * FROM `tbl_client` WHERE (username = '".$username."' OR email = '".$username."') AND password = '". md5($password) ."'" ;

        return $this->db->query($sql)->result_array();
    }



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

    public function get_all_data($table){
        return $this->db->get($table)->result_array();
    }

    public function get_data_by_id($table,$id){
        $this->db->where('id',$id);
        return $this->db->get($table)->result_array()[0];
        
    }

    public function get_full_dataById($table,$id){
        //inclue detail and image 
        $sql_detail = "SELECT * FROM ".$table." WHERE id = ".$id."";
        $sql_image = "SELECT * FROM ".$table."_image WHERE ref_id = ".$id."";
        
        
        return  array(
            "detail" => $this->db->query($sql_detail)->result_array(),
            "images" => $this->db->query($sql_image)->result_array(),
        );

    }

    public function get_all_brand(){
        $sql = "SELECT ve.brand FROM tbl_vehicle as ve GROUP BY ve.brand";

        return  $this->db->query($sql)->result_array();
    }

    public function get_all_vehicleData_with_ImageSection($table , $section){

        $sql  = "SELECT * , detail.id as id ,images.id as image_id  FROM ".$table." as detail
        LEFT JOIN tbl_vehicle_image as images on detail.id = images.ref_id
        WHERE images.image_section = '".$section."'
        ";

        return $this->db->query($sql)->result_array();

    }

   
}