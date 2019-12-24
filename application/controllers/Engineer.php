<?php
class Engineer extends CI_Controller{
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

		$data['GetDataEngg_Com']=$this->Home_model->GetDataEngg_Com($session_data);
		
		$this->load->view('Engineer/Dashboard',$data);
	}

	function Profile(){
		$session_data=$this->session->userdata('logged_in');
        $data['session_data']=$session_data;
		$data['GetDataEngg']=$this->Home_model->GetDataEngg($session_data);
		
		$this->load->view('Engineer/Engg_Profile',$data);
	}	

	function EditEngg(){
		$session_data=$this->session->userdata('logged_in');
        $data['session_data']=$session_data;
		$data['GetDataEngg']=$this->Home_model->GetDataEngg($session_data);
		
		$this->load->view('Engineer/EditEngg',$data);
	}
	function Edit_Engg(){
		$name=$this->input->post('name');
		$email=$this->input->post('email');
		$pass=$this->input->post('pass');
		$age=$this->input->post('age');
		$no_exp=$this->input->post('no_exp');
		$pay_looking=$this->input->post('pay_looking');
		$location=$this->input->post('location');
		$expertise=$this->input->post('expertise');
		$descp=$this->input->post('descp');
		
		$this->Home_model->Edit_Engg($name,$email,$pass,$age,$no_exp,$pay_looking,$location,$expertise,$descp);
	}
}
?>