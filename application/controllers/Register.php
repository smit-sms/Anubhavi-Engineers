<?php
class Register extends CI_Controller{
	function __construct(){
		parent:: __construct();
		$this->load->helper('file');
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('Home_model');
	}
	function index(){

	}
	function Register_engineer(){
		$this->load->view('Register/Register_engineer');
	}
	function InsertEngg(){
		$name=$this->input->post('name');
		$email=$this->input->post('email');
		$pass=$this->input->post('pass');
		$age=$this->input->post('age');
		$no_exp=$this->input->post('no_exp');
		$pay_looking=$this->input->post('pay_looking');
		$location=$this->input->post('location');
		$expertise=$this->input->post('expertise');
		$descp=$this->input->post('descp');
		
		$this->Home_model->InsertEngg($name,$email,$pass,$age,$no_exp,$pay_looking,$location,$expertise,$descp);
	}

	function Register_company(){
		$this->load->view('Register/Register_company');
	}
	function InsertCom(){
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
		
		$this->Home_model->InsertCom($com_name,$com_email,$com_pass,$com_phone,$com_loc,$com_website,$com_no_exp,$com_pay_willing,$com_expertise,$com_descp);
	}
}
?>