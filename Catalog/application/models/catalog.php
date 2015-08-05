<?php
class Catalog extends CI_Model
{
	var $id; //รหัสสินค้า
	function __construct()
	{
		parent::__construct();
	}
	public function setId($id)
	{
		$this->id = $id;
	}

	public function getId()
	{
		return $this->id;
	}

}
?>