<?php                																	

class Admin extends CI_model        
{
	function __construct()
	{
		$this->load->database();
		parent::__construct();
	}


	var $id;
	var $username; 
	var $password; 

	

	public function setId($id)
	{
		$this->id = $id;
	}

	public function getId()
	{
		return $this->id;
	}

	public function setUsername($username)
	{
		$this->username = $username;
	}

	public function getUsername()
	{
		return $this->username;
	}
		public function setPassword($password)
	{
		$this->password = $password;
	}

	public function getPassword()
	{
		return $this->password;
	}


	######################## function login #############################
	function login()
	 {
	   $this -> db -> select('*');  						###########
	   $this -> db -> from('adminner'); 						 ########### �礢������ DB 
	   $this -> db -> where('username', $this->getUsername()); ###########
	   $this -> db -> where('password', $this->getPassword()); ###########
	   $this -> db -> limit(1); ############## �ӡѴ���׹����� record ����

	   $query = $this -> db -> get(); ##############  ��觴֧�����ŵ�����͹�
	
	   if($query -> num_rows() == 1)  ############  ������բ����� 1 record 
	   {
			 return $query->result(); ############# �觤�ҷ��֧���Ѻ
	   }
	   else ########### ��������ç������͹�
	   {
			  return FALSE;  ############# �觤�� FALSE ��Ѻ
	   }
	 }
	

}
?>