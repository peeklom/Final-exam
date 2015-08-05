<?php                																		

class Catalog extends CI_model        
{
	function __construct()
	{
		$this->load->database();
		parent::__construct();
	}

		
		var $id; //
		var $name; //
		var $moldsale; //
		var $membersmold; //
		var $insurace; //




	public function setId($id)
	{
		$this->id = $id;
	}

	public function getId()
	{
		return $this->id;
	}
	public function setName($name)
	{
		$this->name = $name;
	}

	public function getName()
	{
		return $this->name;
	}
	public function setMoldsale($moldsale)
	{
		$this->moldsale = $moldsale;
	}

	public function getMoldsale()
	{
		return $this->moldsale;
	}
	public function setMembersmold($membersmold)
	{
		$this->membersmold = $membersmold;
	}

	public function getMembersmold()
	{
		return $this->membersmold;
	}
	public function setInsurace($insurace)
	{
		$this->insurace = $insurace;
	}

	public function getInsurace()
	{
		return $this->insurace;
	}



###################################### findByPk ######################################

	function findByPk($pk)
	{
		$query=$this->db->query
			('
				SELECT id,name,moldsale,membersmold,insurace FROM cats WHERE id = "'. $pk .'"
			');		

		return $query->row_array();
	}
###################################### add ######################################	 

	public function add()
	{
		$array = array
		(
			
			'name'=>$this->getName(),
			'moldsale'=>$this->getMoldsale(),
			'membersmold'=>$this->getMembersmold(),
			'insurace'=>$this->getInsurace()

				
		);

		$this->db->insert('cats', $array);
		return $this->db->insert_id();
	}

###################################### findByName ######################################	 
	 public function findByName($name)
	{
		$query=$this->db->query
			('
				SELECT name, ISBN, author
		
				FROM cats  WHERE name LIKE "%'. $name .'%" OR
        				         moldsale LIKE "'. $name .'" OR
								 membersmold LIKE "'. $name .'" OR
        				         insurace LIKE "%'. $name .'%" ORDER BY name
			');

		return $query;
	}
###################################### findByAll ######################################

	function findByAll($All)
	{
		$query=$this->db->query
			('
				SELECT id,name,moldsale,membersmold,insurace FROM cats WHERE id LIKE "%'. $All .'%" ORDER BY id
			');
			
		return $query->result_array();
	}
###################################### update ######################################

	public function update()
	{
		$data = array(
			'name'=>$this->getName(),
			'moldsale'=>$this->getMoldsale(),
			'membersmold'=>$this->getMembersmold(),
			'insurace'=>$this->getInsurace()
		);

		$this->db->where('id', $this->getId());
		$this->db->update('cats', $data);

		return true;
	}###################################### delete ######################################
	public function delete()
	{
		$array=array(
			'id'=>$this->getId()
		);
		
		$this->db->delete('cats',$array);

		return true;
	}
	######################## function login #############################
	function login()
	 {
	   $this -> db -> select('*');  						###########
	   $this -> db -> from('adminner'); 						 ########### เช็คข้อมูลใน DB 
	   $this -> db -> where('username', $this->getUserName()); ###########
	   $this -> db -> where('password', $this->getPassWord()); ###########
	   $this -> db -> limit(1); ############## ตำกัดให้คืนค่าแค่ record เดียว

	   $query = $this -> db -> get(); ##############  สั่งดึงข้อมูลตามเงื่อนไข
	
	   if($query -> num_rows() == 1)  ############  เมื่อมีข้อมูล 1 record 
	   {
			 return $query->result(); ############# ส่งค้าที่ดึงได้กลับ
	   }
	   else ########### เมื่อไม่ตรงตามเงื่อนไข
	   {
			  return FALSE;  ############# ส่งค้า FALSE กลับ
	   }
	 }
	 ######################## end function login #############################
	 ########################  checkLogin  #############################

	public function checkLogin()
	{
		$sql = sprintf
			('
				SELECT id FROM adminner WHERE username = "%s" AND password = "%s"',
				$this->getUsername(),
				$this->getPassword()
			);
			
			$query = $this->db->query($sql);

		return $query->num_rows();
	}

}
?>