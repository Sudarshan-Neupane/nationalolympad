<?php class Add_header_links extends CI_Controller
{
  public function __construct()
  {
     parent::__construct();
     $this->load->model('header_link_model'); 
     $this->load->model('login_model');
     //$this->login_model->is_logged_in();
  }  
  public function index()
  { 
    $this->login_model->is_logged_in();
    $data['title']='Header Links';
    $this->load->view('includes/header',$data);
    $this->load->view('add_header_links');
    $this->load->view('includes/footer');
  }
  public function add_links($id=NULL)
  {
    $this->login_model->is_logged_in();
    $this->header_link_model->add_links($id);
    redirect('header_links');
  }
}