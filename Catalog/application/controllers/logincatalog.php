<?php
class Logincatalog extends CI_Controller
{
  public function Logout()
  {
    $this->load->helper('url');
    
  

    setcookie('username','',time()-3600,'/');
    setcookie('password','',time()-3600,'/');
    redirect(base_url('index.php/logincatalog'));
  }
  public function index()
  {
    $this->load->helper('url');


    if(isset($_COOKIE['username']) && isset($_COOKIE['password']))
    {
      $this->load->model('admin');
      $this->admin->setUsername($_COOKIE['username']);
      $this->admin->setPassword($_COOKIE['password']);

      if($this->admin->CheackLogin())
      {
          redirect(base_url('index.php/addcatalog'));

      }
    }

    if($this->input->post())
    {

      $this->load->model('admin');
      $this->admin->setUsername($_COOKIE['username']);
      $this->admin->setPassword($_COOKIE['password']);

      if($this->admin->CheackLogin())
      {
        
        setcookie('username',$this->input->post('username'),(time()+3600),'/');
        setcookie('password',$this->input->post('password'),(time()+3600),'/');
        redirect(base_url('index.php/addcatalog'));

      }
      else
      {
        
      }
    }

    $this->load->view('show_login');
   // $this->load->model('show_home');



  }
}

?>
