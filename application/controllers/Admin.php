<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_model');

		
	}

	public function checkRole(){
		if(isset($_SESSION['id'])){
			if($_SESSION['role'] == '1'){
					redirect(base_url('/Control/category'));
		}
		}else if(!isset($_SESSION['id'])){
		redirect(base_url('/Control/category'));
		} 
	}

	public function index()
	{
		$this->checkRole();
		$data['all_vehicle'] = $this->Admin_model->get_all_vehicleData_with_ImageSection('tbl_vehicle','overview');
		$data['all_client'] = $this->Admin_model->get_client_data();
		$data['all_rental'] = $this->Admin_model->get_rental_data();
		$this->load->view('/admin/dashboard',$data);


		
	}
	
	public function vehicle($data_id = NULL)
	{
		$this->checkRole();
		$data['data_id'] = $data_id;
		$data['vehicle_data'] = NULL;

		if($data_id == NULL){
			$data['all_vehicle'] = $this->Admin_model->get_all_data('tbl_vehicle');
			$this->load->view('/admin/vehicle_list',$data);
			
		}

		if($data_id == 'add'){
			$this->load->view('/admin/car_form',$data);
		}

		if(is_numeric($data_id)){

			$data['vehicle_data'] = $this->Admin_model->get_full_dataById('tbl_vehicle',$data_id);

			$this->load->view('/admin/car_form',$data);
		}
	}

	public function client($data_id = NULL)
	{
		$data['data_id'] = $data_id;
		$data['client_data'] = NULL;

		if($data_id == NULL){
			$data['all_client'] = $this->Admin_model->get_client_data();
			$this->load->view('/admin/client_list',$data);
		}

		if($data_id == 'add'){
			$this->load->view('/admin/client_form',$data);
		}

		if(is_numeric($data_id)){

			$data['client_data'] = $this->Admin_model->get_full_dataById('tbl_client',$data_id);

			$this->load->view('/admin/client_form',$data);
		}

	}

	public function Rental($data_id = NULL)
	{
		$data['data_id'] = $data_id;
		$data['rental_data'] = NULL;

		if($data_id == NULL){
		$data['all_rental'] = $this->Admin_model->get_rental_data();

			$this->load->view('/admin/rental_list',$data);
		}
		if(is_numeric($data_id)){

			$data['rental_data'] = $this->Admin_model->get_rental_dataById($data_id);
			$data['client_data'] = $this->Admin_model->get_full_dataById('tbl_client',$data_id);

			$this->load->view('/admin/rental_form',$data);
		}

	}

	public function getDataByID(){
		
		echo $this->Admin_model->get_data_by_id($this->input->post('id'));

	}


	public function deleteData(){
		echo $this->Admin_model->delete($this->input->post('table'),$this->input->post('id'));
	}

	public function updateData(){

		$this->load->helper("security");

        $stream = $this->security->xss_clean( $this->input->raw_input_stream );
      
        $data = json_decode($stream, true);
		$table = $data['table'];

		if(isset($data['role'])){
			$_SESSION['role'] = "".$data['role']."";
		}
		
		unset($data['table']);

		 $result = $this->Admin_model->update($table,$data['id'],$data);   
		 
		echo $result; 
	}
	

	public function addData(){
		$this->load->helper("security");

        $stream = $this->security->xss_clean( $this->input->raw_input_stream );
      
        $data = json_decode($stream, true);
		$table = $data['table'];
		unset($data['table']);

		/* print_r($data); */
		 $result = $this->Admin_model->insert($table,$data);   
		 $insert_id = $this->db->insert_id();
		 
		 echo $insert_id;
	}

	
	public function add_Rental_Data(){
		$this->load->helper("security");

        $stream = $this->security->xss_clean( $this->input->raw_input_stream );
      
        $data = json_decode($stream, true);
		$table = $data['table'];
		unset($data['table']);

		/* print_r($data); */

		$data_update = array(
			"data_status" => '0',
		);

		$this->Admin_model->update_all('tbl_rental','client_id',$data['client_id'],$data_update);  
		
		 $result = $this->Admin_model->insert($table,$data);   
		 $insert_id = $this->db->insert_id();
		 
		 echo $insert_id;
	}


	public function uploadImage(){

      
		$data = [];
		
				$_FILES['file']['name'] = $_FILES['upload_image']['name'];
				$_FILES['file']['type'] = $_FILES['upload_image']['type'];
				$_FILES['file']['tmp_name'] = $_FILES['upload_image']['tmp_name'];
				$_FILES['file']['error'] = $_FILES['upload_image']['error'];
				$_FILES['file']['size'] = $_FILES['upload_image']['size'];
		
		
				$config['upload_path']    = './uploads/images';
				$config['allowed_types'] = '*';
				$config['encrypt_name']   = TRUE; 
				$config['max_size'] = 0;
				
				$this->load->library('upload',$config); 
				$this->upload->initialize($config);
		
			   if($this->upload->do_upload('file')){
		
					 $uploadData = $this->upload->data();
					 $filename = $uploadData['file_name'];
			
					$data['totalFiles'][] = $filename;
					$dataInsert = array(); 
					$type = $_POST['type'];
					if($type == 'vehicle'){
						 $dataInsert = array(
							"ref_id" => $_POST['ref_id'],
							"image_section" => $_POST['image_section'] ,
							"image_type" => $_POST['image_type'] ,
							"image_url" => $uploadData['file_name'] ,
						 ); 
					}

					if($type == 'client'){
						$dataInsert = array(
						   "ref_id" => $_POST['ref_id'],
						   "image_section" => $_POST['image_section'] ,
						   "image_url" => $uploadData['file_name'] ,
						); 
				   }
		
						$result = $this->Admin_model->insert("tbl_".$type."_image",$dataInsert);   
						echo json_encode($result); 
		
				 }else{
					echo false;
				 }
				}
}
