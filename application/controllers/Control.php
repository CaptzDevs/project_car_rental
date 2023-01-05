<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Control extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Control_model');
		$this->load->model('Admin_model');
		
	}

	public function index(){
		$data['vehicle_data'] = $this->Admin_model->get_all_vehicleData_with_ImageSection('tbl_vehicle','overview');
		$data['vehicle_brand'] = $this->Admin_model->get_all_brand();

			$this->load->view('/client/category',$data);
	}

	public function Preview($data_id = NULL)
	{
		$data['data_id'] = $data_id;
		$data['vehicle_data'] = $this->Admin_model->get_full_dataById('tbl_vehicle',$data_id);


			$this->load->view('/client/preview',$data);
	}

	public function Category($data_id = NULL)
	{
		$data['data_id'] = $data_id;
		$data['vehicle_data'] = $this->Admin_model->get_all_vehicleData_with_ImageSection('tbl_vehicle','overview');
		$data['vehicle_brand'] = $this->Admin_model->get_all_brand();

			$this->load->view('/client/category',$data);
	}


	public function Login()
	{
		if(!$this->session->has_userdata('id')){

			$this->load->view('/Client/login');
	
			}else{
				redirect(base_url('/Control/'));
			}

	}

	public function do_login(){
		
		 $data = $this->Control_model->check_login(
			$this->input->post('username'),
			$this->input->post('password'),
		);   

		if(count($data) > 0){
            $newdata = array(
                'id'  =>   $data[0]['id'],
                'username'  =>  $data[0]['username'],
                'email'     => $data[0]['email'],
                'role' => $data[0]['role']
        );
        
        	$this->session->set_userdata($newdata);

			echo json_encode($data);

        }else{
			echo json_encode(false);
		}
		 
	}

	public function do_signup(){
		$this->load->helper("security");
        $stream = $this->security->xss_clean( $this->input->raw_input_stream );
      
        $data = json_decode($stream, true);
		 $result = $this->Control_model->signup($data['username'],$data['password'],$data['email'],$data['role']);   
		 
		 echo $result;
	}

	public function logout(){
        $sess = array(
			'id',
			'username',
			'email',
            "role",
        );
		$this->session->unset_userdata($sess);
		redirect(base_url('/Admin/Login'));

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
							$type."_id" => $_POST['ref_id'],
							"image_section" => $_POST['image_section'] ,
							"image_type" => $_POST['image_type'] ,
							"image_url" => $uploadData['file_name'] ,
						 ); 
					}

					if($type == 'client'){
						$dataInsert = array(
						   $type."_id" => $_POST['ref_id'],
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
