<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Addcatalog extends CI_Controller
{
	function __construct()
		{
			parent::__construct();
	    	$this->load->helper('url');
			$this->load->library('form_validation');
		}

	public function index($number = 0)
	{

		$this->form_validation->set_rules('name', 'ชื่อสินค้า', 'required|min_length[3]|max_length[20]',
 		array(
			 'required' => 'กรุณากรอก{field}',
			 'min_length'=>'ช้อง{field}ต้องไม่น้อยกว่า {param} ตัวอักษร',
			 'max_length'=>'ช่อง{field}ไม่มากกว่า {param}ตัวอักษร'
			 ));
	   $this->form_validation->set_rules('moldsale', 'ราคาขาย', 'required|min_length[3]]|max_length[20]',
       array(
			 'required' => 'กรุณากรอก{field}',
			 'min_length'=>'ช้อง{field}ต้องไม่น้อยกว่า {param} ตัวอักษร',
			 'max_length'=>'ช่อง{field}ไม่มากกว่า {param}ตัวอักษร'
			 ));

       $this->form_validation->set_rules('membersmold', 'ราคาสมาชิก', 'required|min_length[5]|max_length[20]',
       array(
			 'required' => 'กรุณากรอก{field}',
			 'min_length'=>'ช้อง{field}ต้องไม่น้อยกว่า {param} ตัวอักษร',
			 'max_length'=>'ช่อง{field}ไม่มากกว่า {param}ตัวอักษร'
			 ));
		$this->form_validation->set_rules('insurace', 'ประกัน', 'required|min_length[5]|max_length[20]',
		 array(
			 'required' => 'กรุณากรอก{field}',
			 'min_length'=>'ช้อง{field}ต้องไม่น้อยกว่า {param} ตัวอักษร',
			 'max_length'=>'ช่อง{field}ไม่มากกว่า {param}ตัวอักษร'
	 		 ));

 		//$this->load->library('upload',$config);
 		if ($this->form_validation->run() == FALSE)
 		{
 			$this->load->view('show_add');
 		}
 		else
 		{
 				$this->load->model('catalog');
 				$this->catalog->setName($this->input->post('name'));
 				$this->catalog->setMoldsale($this->input->post('moldsale'));
				$this->catalog->setMembersmold($this->input->post('membersmold'));
				$this->catalog->setInsurace($this->input->post('insurace'));

 				$this->catalog->add();
				$this->load->view('show_all');

 		}

	//$this->load->view('show_login');
  }
}
?>
