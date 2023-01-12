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

    public function update_all($table,$col,$id,$data){
        $this->db->where($col,$id);
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

    //dashboard Data --------------

    public function get_count_vehicle_status(){
        $sql = "SELECT 
        COUNT(CASE WHEN veh.vehicle_status = '0' THEN veh.id END ) as broken ,
        COUNT(CASE WHEN veh.vehicle_status = '1' THEN veh.id END ) as ready,
        COUNT(CASE WHEN veh.vehicle_status = '2' THEN veh.id END ) as rented,
        COUNT(CASE WHEN veh.vehicle_status = '3' THEN veh.id END ) as fixing
        
        FROM `tbl_vehicle` veh";

        $data =  $this->db->query($sql)->result_array();

        return $data;
        
    }

    public function get_count_client_status(){
        $sql = "SELECT 
        COUNT(CASE WHEN cli.approve_status = '0' THEN cli.id END ) as denied ,
        COUNT(CASE WHEN cli.approve_status = '1' THEN cli.id END ) as approve,
        COUNT(CASE WHEN cli.approve_status = '2' THEN cli.id END ) as pending
        FROM `tbl_client` cli ";
      return $this->db->query($sql)->result_array();
                
    }

    public function get_summary(){
        $sql = "SELECT COUNT(veh.id)  as veh,
        (SELECT COUNT(cli.id) as cl FROM tbl_client cli WHERE cli.role = '1') as cli ,
        (SELECT COUNT(ren.id) as re FROM tbl_rental ren ) as ren
        FROM tbl_vehicle veh";

          return  $this->db->query($sql)->result_array();
    }

    //---------------------------------------

    public function get_renting_dateArray($vehicle_id){
        $sql = "SELECT start_rent_date,end_rent_date FROM `tbl_rental` rent 
        WHERE rent.vehicle_id = ".$vehicle_id."  AND rent.data_status = '1' AND (rent.request_status = '2' OR rent.returned_status = '2')
        ORDER BY rent.start_rent_date";

       $data = $this->db->query($sql)->result_array();
       $date_arr = [];

        foreach( $data as $date_value){
            array_push($date_arr,$date_value['start_rent_date']);
            array_push($date_arr,$date_value['end_rent_date']);
        }

        return $date_arr;
    }

    public function get_client_data(){
        $this->db->where("role",'1');
        return $this->db->get('tbl_client')->result_array();
    }
    public function get_image_byClientID($client_id){
        $this->db->where("ref_id",$client_id);
        return $this->db->get('tbl_client_image')->result_array();
    }

    public function get_member_data(){
        $this->db->where("role",'0');
        return $this->db->get('tbl_client')->result_array();
    }

    public function get_data_by_id($table,$id){
        $this->db->where('id',$id);
        return $this->db->get($table)->result_array()[0];
        
    }

    public function get_rental_byVehicleID($vehicle_id){
        $sql  = "SELECT * FROM `tbl_rental` rent 
        WHERE rent.vehicle_id = ".$vehicle_id." AND rent.data_status = '1'";
        return $this->db->query($sql)->result_array();

    }

    public function get_rental_data(){
 
            $sql_lastest = 
            "SELECT * ,
                cli.name as client_name, 
                ren.date_add as request_date
                FROM `tbl_rental` ren
                INNER JOIN tbl_client as cli on ren.client_id = cli.id
                INNER JOIN tbl_vehicle as veh on ren.vehicle_id = veh.id
                WHERE ren.data_status = '1'
                ORDER BY ren.id ASC"
                ;

                return  $this->db->query($sql_lastest)->result_array();


    }

    public function get_rental_dataById($client_id){
        //inclue detail and image 
        $sql_detail = "SELECT * FROM tbl_vehicle as ve 
        INNER JOIN  tbl_rental as ren on ve.id = ren.vehicle_id
        WHERE client_id = ".$client_id."
        ORDER BY ren.date_add DESC";
 
        
        return   $this->db->query($sql_detail)->result_array()[0];

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