<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_model');
		
		
	}

	public function index()
	{
		$this->load->view('/admin/dashboard');
	}
	
	public function vehicle($data_id = NULL)
	{
		$data['data_id'] = $data_id;
		$data['car_detail'] = NULL;

		if($data_id == 'add'){
			$this->load->view('/admin/car_add',$data);
		}



		if(is_numeric($data_id)){
			
			$data['car_detail'] = $this->Admin_model->get_data_by_id($data_id);
			$data['car_image'] = $this->Admin_model->get_image_by_id($data_id);

			$this->load->view('/admin/car_add',$data);
		}


	}

	public function getDataByID(){
		
		echo $this->Admin_model->get_data_by_id($this->input->post('id'));

	}

	public function getAllData(){

	}
	public function deleteData(){
		echo $this->Admin_model->delete($this->input->post('table'),$this->input->post('id'));
	}

	public function updateData(){

		$this->load->helper("security");

        $stream = $this->security->xss_clean( $this->input->raw_input_stream );
      
        $data = json_decode($stream, true);
		$table = $data['table'];


		
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
		
						 $dataInsert = array(
							"vehicle_id" => $_POST['ref_id'],
							"image_section" => $_POST['image_section'] ,
							"image_type" => $_POST['image_type'] ,
							"image_url" => $uploadData['file_name'] ,
						 ); 
		
						$result = $this->Admin_model->insert('tbl_vehicle_image',$dataInsert);   
						echo json_encode($result); 
		
				 }else{
					echo false;
				 }
				}
}
