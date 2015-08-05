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

		$this->form_validation->set_rules('name', '�����Թ���', 'required|min_length[3]|max_length[20]',
 		array(
			 'required' => '��سҡ�͡{field}',
			 'min_length'=>'��ͧ{field}��ͧ�����¡��� {param} ����ѡ��',
			 'max_length'=>'��ͧ{field}����ҡ���� {param}����ѡ��'
			 ));
	   $this->form_validation->set_rules('moldsale', '�ҤҢ��', 'required|min_length[3]]|max_length[20]',
       array(
			 'required' => '��سҡ�͡{field}',
			 'min_length'=>'��ͧ{field}��ͧ�����¡��� {param} ����ѡ��',
			 'max_length'=>'��ͧ{field}����ҡ���� {param}����ѡ��'
			 ));

       $this->form_validation->set_rules('membersmold', '�Ҥ���Ҫԡ', 'required|min_length[5]|max_length[20]',
       array(
			 'required' => '��سҡ�͡{field}',
			 'min_length'=>'��ͧ{field}��ͧ�����¡��� {param} ����ѡ��',
			 'max_length'=>'��ͧ{field}����ҡ���� {param}����ѡ��'
			 ));
		$this->form_validation->set_rules('insurace', '��Сѹ', 'required|min_length[5]|max_length[20]',
		 array(
			 'required' => '��سҡ�͡{field}',
			 'min_length'=>'��ͧ{field}��ͧ�����¡��� {param} ����ѡ��',
			 'max_length'=>'��ͧ{field}����ҡ���� {param}����ѡ��'
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
