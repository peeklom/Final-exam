<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Allcatalog extends CI_Controller 
{
  
  function __construct()
  {
  parent::__construct();
  $this->load->helper('url');
  }

  public function index()
	{

		if($this->input->post('name'))
		{
		  $this->load->model('catalog');
		  $data['show'] =$this->catalog->findByAll($this->input->post('id'));
		  $this->load->view('show_all',$data);
		}
		else
		{	
			$data['show']='';
			$this->load->view('show_all',$data);
		}
	}
}
?>

 