<?php
	defined ('BASEPATH') OR exit('No direct script access allowed');    
	class Updatecatalog extends CI_Controller
	{
		
		public function __construct()
		{
			parent::__construct();
			$this->load->helper('url');
			$this->load->library('form_validation');
		}
		
		public function checkupdate()
		{
		if(isset($_COOKIE['username'])&& isset($_COOKIE['password']))//isset คือการตรวจสอบค่าว่ามียุมัย
	    {
	      $this->load->model('admin');
	      $this->admin->setUsername($_COOKIE['username']);
	      $this->admin->setPassword($_COOKIE['password']);
	      if(!$this->admin->checkLogin())
	      {
	        redirect(base_url('index.php/logincatalog'));
	      }
	    }
	    else
	    {
	        redirect(base_url('index.php/logincatalog'));
	    }

		
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
			
			
			
			if ($this->form_validation->run() == FALSE)
                {
                		$data ['error']='';
                        $this->load->view('show_add',$data);


                }
                else
                {
                				$this->load->model('catalog');
								$this->catalog->setName($this->input->post('name'));
								$this->catalog->setMoldsale($this->input->post('moldsale'));
								$this->catalog->setMembersmold($this->input->post('membersmold'));
								$this->catalog->setInsurace($this->input->post('insurace'));
		                        $this->book->add();
 								$this->load->view('show_all');
 								echo "<script language='javascript'>alert('บันทึกหนังสือเรียบร้อยแล้ว!');</script>";
                } 

 			

			}

	}
?>
