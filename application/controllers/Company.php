<?php
class Company extends CI_Controller{
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

		$data['GetDataCom_Engg']=$this->Home_model->GetDataCom_Engg($session_data);
		
		$this->load->view('Company/Dashboard',$data);
	}

	function Profile(){
		$session_data=$this->session->userdata('logged_in');
        $data['session_data']=$session_data;
		$data['GetDataCom']=$this->Home_model->GetDataCom($session_data);
		
		$this->load->view('Company/Comp_Profile',$data);
	}

	function EditCom(){
		$session_data=$this->session->userdata('logged_in');
        $data['session_data']=$session_data;
		$data['GetDataCom']=$this->Home_model->GetDataCom($session_data);
		
		$this->load->view('Company/EditCom',$data);
	}	
	function Edit_Com(){
		$com_name=$this->input->post('com_name');
		$com_email=$this->input->post('com_email');
		$com_pass=$this->input->post('com_pass');
		$com_phone=$this->input->post('com_phone');
		$com_loc=$this->input->post('com_loc');
		$com_website=$this->input->post('com_website');
		$com_no_exp=$this->input->post('com_no_exp');
		$com_pay_willing=$this->input->post('com_pay_willing');
		$com_expertise=$this->input->post('com_expertise');
		$com_descp=$this->input->post('com_descp');
		
		$this->Home_model->Edit_Com($com_name,$com_email,$com_pass,$com_phone,$com_loc,$com_website,$com_no_exp,$com_pay_willing,$com_expertise,$com_descp);
	}
}
?>