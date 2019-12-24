<?php
class Home_model extends CI_Model{

	function CheckLogin($email,$pass){
		$qry="SELECT COUNT(*) AS cnt FROM admin_master WHERE email=? AND password=?";
		$res=$this->db->query($qry,array($email,$pass))->result();
		if($res[0]->cnt > 0)
		{
			echo '1';
		}
		else
		{
			echo '0';
		}
	}

	function get_data($email){
		$sql=$this->db->query("SELECT  email,password  FROM admin_master WHERE email='$email'");
		return $sql->result_array();
	}

	//-------------------engineer register------------------------

	function InsertEngg($name,$email,$pass,$age,$no_exp,$pay_looking,$location,$expertise,$descp){
		$this->db->query("INSERT INTO engineer_master (engg_name, email, pass, age, no_exp, pay_looking, location, expertise, descp) VALUES ('$name','$email','$pass','$age','$no_exp','$pay_looking','$location','$expertise','$descp')");
	}

	//------------------company register--------------------------
	function InsertCom($com_name,$com_email,$com_pass,$com_phone,$com_loc,$com_website,$com_no_exp,$com_pay_willing,$com_expertise,$com_descp){
		$this->db->query("INSERT INTO company_master(com_name, com_email, com_pass, com_phone, com_loc, com_website, com_no_exp, com_pay_willing, com_expertise, com_descp) VALUES ('$com_name','$com_email','$com_pass','$com_phone','$com_loc','$com_website','$com_no_exp','$com_pay_willing','$com_expertise','$com_descp')");
	}

	//-------------------ADMIN VIEWING DATA-------------------------

	function GetData($session_data) {
		$GetData=$this->db->query("SELECT email, password FROM admin_master");
		return $GetData->result_array();
	}
	function GetEngg(){
		$GetEngg=$this->db->query("SELECT engg_id, engg_name, email, pass, age, no_exp, pay_looking, location, expertise, descp FROM engineer_master");
		return $GetEngg->result_array();
	}
	function GetCom(){
		$GetCom=$this->db->query("SELECT com_id, com_name, com_email, com_pass, com_phone, com_loc, com_website, com_no_exp, com_pay_willing, com_expertise, com_descp FROM company_master");
		return $GetCom->result_array();
	}
	function Deletedata($engg_id){
		$this->db->query(" DELETE FROM engineer_master WHERE engg_id='$engg_id' ");
	}
	function Deletedatacom($com_id){
		$this->db->query(" DELETE FROM company_master WHERE com_id='$com_id' ");
	}

	//-----------------ENGINEER MODULE----------------------------
	function CheckLoginengg($email,$pass){
		$qry="SELECT COUNT(*) AS cnt FROM engineer_master WHERE email=? AND pass=?";
		$res=$this->db->query($qry,array($email,$pass))->result();
		if($res[0]->cnt > 0)
		{
			echo '1';
		}
		else
		{
			echo '0';
		}
	}

	function get_data_engg($email,$pass){
		$sql=$this->db->query("SELECT  email,pass  FROM engineer_master WHERE email='$email' AND pass='$pass' ");
		return $sql->result_array();
	}

	function GetDataEngg($session_data){
		$email=$session_data['email'];
		$pass=$session_data['pass'];
		$GetDataEngg=$this->db->query("SELECT * FROM engineer_master WHERE email='$email' AND pass='$pass' ");
		return $GetDataEngg->result_array();
	}
	function GetDataEngg_Com($session_data){
		$email=$session_data['email'];
		$pass=$session_data['pass'];
		$GetDataEngg_Com=$this->db->query("SELECT * FROM company_master WHERE com_expertise IN(SELECT expertise FROM engineer_master WHERE email='$email' AND pass='$pass') ");
		return $GetDataEngg_Com->result_array();
	}
	function Edit_Engg($name,$email,$pass,$age,$no_exp,$pay_looking,$location,$expertise,$descp){
		$UpdateData=$this->db->query("UPDATE engineer_master SET engg_name='$name',age='$age',no_exp='$no_exp',pay_looking='$pay_looking',location='$location',expertise='$expertise',descp='$descp' WHERE email='$email' AND pass='$pass' ");
	}

	//-----------------COMPANY MODULE-----------------------------
	function CheckLogincom($email,$pass){
		$qry="SELECT COUNT(*) AS cnt FROM company_master WHERE com_email=? AND com_pass=?";
		$res=$this->db->query($qry,array($email,$pass))->result();
		if($res[0]->cnt > 0)
		{
			echo '1';
		}
		else
		{
			echo '0';
		}
	}

	function get_data_com($email,$pass){
		$sql=$this->db->query("SELECT  com_email,com_pass  FROM company_master WHERE com_email='$email' AND com_pass='$pass' ");
		return $sql->result_array();
	}

	function GetDataCom($session_data){
		$email=$session_data['com_email'];
		$pass=$session_data['com_pass'];
		$GetDataEngg=$this->db->query("SELECT * FROM company_master WHERE com_email='$email' AND com_pass='$pass' ");
		return $GetDataEngg->result_array();
	}
	function GetDataCom_Engg($session_data){
		$email=$session_data['com_email'];
		$pass=$session_data['com_pass'];
		$GetDataEngg_Com=$this->db->query("SELECT * FROM engineer_master WHERE expertise IN(SELECT com_expertise FROM company_master WHERE com_email='$email' AND com_pass='$pass') ");
		return $GetDataEngg_Com->result_array();
	}
	function Edit_Com($com_name,$com_email,$com_pass,$com_phone,$com_loc,$com_website,$com_no_exp,$com_pay_willing,$com_expertise,$com_descp){
		$UpdateDataCom=$this->db->query("UPDATE company_master SET com_name='$com_name',com_phone='$com_phone',com_loc='$com_loc',com_website='com_website',com_no_exp='$com_no_exp',com_pay_willing='$com_pay_willing',com_expertise='$com_expertise',com_descp='$com_descp' WHERE com_email='$com_email' AND com_pass='$com_pass' ");
	}
}
?>