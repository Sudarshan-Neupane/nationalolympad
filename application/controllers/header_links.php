<?php 
class Header_links extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
     $this->load->model('login_model');
     $this->load->model('header_link_model');
  }  
  public function index()
  {
    $this->login_model->is_logged_in();
    $data['title']='Header Links';
     $data['hardware']=$this->login_model->hardwareitem();
     $data['system']=$this->login_model->systemlist(); 
    $data['row']=$this->header_link_model->getAll();
     $data['categories']=$this->login_model->get_categories();  
     $data['cat_items']=$this->login_model->get_items_categories();
    $this->load->view('includes/header',$data);
    $this->load->view('header_links_view',$data);
    $this->load->view('includes/footer');
  }
  public function deletedata($id)
  {
      $this->login_model->is_logged_in();
      $this->header_link_model->delete($id);
      redirect('header_links');
  }  
  public function  editdata($id)
  {
    $this->login_model->is_logged_in();
    $data['title']='Edit Links';
    
    $data['row']=$this->header_link_model->editdata($id);
     $data['categories']=$this->login_model->get_categories();  
     $data['cat_items']=$this->login_model->get_items_categories();
    $this->load->view('includes/header',$data);
    $this->load->view('edit_header_link',$data);
    $this->load->view('includes/footer');
  } 
}