<?php
class Login extends CI_Controller{
	function __construct(){
		parent:: __construct();
		$this->load->helper('file');
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('Home_model');
	}
	function index(){
		$this->load->view('Login');
	}
    function AboutUs(){
        $this->load->view('AboutUs.php');
    }

	function check_login(){
		$email=$this->input->post("email");
		$pass=$this->input->post("pass");
		$this->Home_model->CheckLogin($email,$pass);
	}
	function CreateSession(){
		$email=$this->input->post("email");
	  	$get_chk=$this->Home_model->get_data($email);
        if($get_chk)
        {
            $ses_array = array();

            foreach ($get_chk as $row)
            {
                $ses_array = array(
                'email' => $row['email'],
                'pass' => $row['pass']
                );                            
            }
            $this->session->set_userdata('logged_in', $ses_array);
		}			
		echo json_encode($get_chk);
	}

	function logout()
    {
        $session_data = $this->session->userdata('logged_in');
        $this->session->unset_userdata('logged_in');    
        redirect('Login', 'refresh');
    }

	//-------------------------------------------
    //-------ENGINEER SESSION--------------------
    //-------------------------------------------

    function check_login_engg(){
		$email=$this->input->post("email");
		$pass=$this->input->post("pass");
		$this->Home_model->CheckLoginengg($email,$pass);
	}
    function CreateSession_engg(){
		$email=$this->input->post("email");
        $pass=$this->input->post("pass");
	  	$get_chk=$this->Home_model->get_data_engg($email,$pass);
        if($get_chk)
        {
            $ses_array = array();

            foreach ($get_chk as $row)
            {
                $ses_array = array(
                'email' => $row['email'],
                'pass' => $row['pass']
                );                            
            }
            $this->session->set_userdata('logged_in', $ses_array);
		}			
		echo json_encode($get_chk);
	}
    
    //-------------------------------------------
    //-------COMPANY SESSION---------------------
    //-------------------------------------------

    function check_login_com(){
        $email=$this->input->post("email");
        $pass=$this->input->post("pass");
        $this->Home_model->CheckLogincom($email,$pass);
    }
    function CreateSession_com(){
        $email=$this->input->post("email");
        $pass=$this->input->post("pass");
        $get_chk=$this->Home_model->get_data_com($email,$pass);
        if($get_chk)
        {
            $ses_array = array();

            foreach ($get_chk as $row)
            {
                $ses_array = array(
                'com_email' => $row['com_email'],
                'com_pass' => $row['com_pass']
                );                            
            }
            $this->session->set_userdata('logged_in', $ses_array);
        }           
        echo json_encode($get_chk);
    }
    
}
?>