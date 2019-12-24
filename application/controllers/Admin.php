<?php
class Admin extends CI_Controller{
	function __construct(){
		parent:: __construct();
		$this->load->helper('file');
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('Home_model');
	}
	function index(){
		$session_data=$this->session->userdata('logged_in');
        $data['session_data']=$session_data;

		$data['GetData']=$this->Home_model->GetData($session_data);
		
		$this->load->view('Admin_vw/Admin',$data);
	}

	function Admin_engg(){
		$session_data=$this->session->userdata('logged_in');
        $data['session_data']=$session_data;

		$data['GetData']=$this->Home_model->GetData($session_data);
		$data['GetEngg']=$this->Home_model->GetEngg();

		$this->load->view('Admin_vw/Admin_engg',$data);
	}

	function Admin_com(){
		$session_data=$this->session->userdata('logged_in');
        $data['session_data']=$session_data;

		$data['GetData']=$this->Home_model->GetData($session_data);
		$data['GetCom']=$this->Home_model->GetCom();		

		$this->load->view('Admin_vw/Admin_com',$data);
	}

	function Deletedata(){
		$engg_id=$this->input->post('engg_id');
		$this->Home_model->Deletedata($engg_id);
	}
	function Deletedatacom(){
		$com_id=$this->input->post('com_id');
		$this->Home_model->Deletedatacom($com_id);
	}
}
?>