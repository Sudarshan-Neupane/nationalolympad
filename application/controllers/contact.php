<?php
class Contact extends CI_Controller
{
       public function __construct(){
        parent::__construct();
        $this->load->model('client/home_model');
        $this->load->model('login_model');
    }
    public function index($id=null)
    {
      $data['title']='GALAXY ENTERPRISE'; 
      $data['url']=$this->uri->segment(2);
      $data['msg']=$this->home_model->get_message();
      $data['logo']=$this->login_model->display_logo();
      $data['image']=$this->home_model->get_banner_image();
     $data['header_links']=$this->home_model->get_header_links();
      $data['system']=$this->home_model->get_item_system();
      $data['hardware']=$this->home_model->get_item_hardware();
      $this->data['contacts']=$this->home_model->contact();
      $data['featured']=$this->home_model->featured();  
      $data['categories']=$this->login_model->get_categories();  
      $data['cat_items']=$this->login_model->get_items_categories();              
      $this->load->view('user/include/header',$data);
      $this->load->view('user/include/sidebar',$data);
      $this->load->view('user/contact',$this->data); 
      $this->load->view('user/include/footer');
    }
    public function links($id=null)
    {
        $data['title']='GALAXY ENTERPRISE'; 
      $data['url']=$this->uri->segment(2);
      $data['msg']=$this->home_model->get_message();
      $data['logo']=$this->login_model->display_logo();
      $data['image']=$this->home_model->get_banner_image();
     $data['header_links']=$this->home_model->get_header_links();
      $data['system']=$this->home_model->get_item_system();
      $data['hardware']=$this->home_model->get_item_hardware();
      $this->data['contacts']=$this->home_model->contact($id);
      $data['featured']=$this->home_model->featured();        
      $data['categories']=$this->login_model->get_categories();  
      $data['cat_items']=$this->login_model->get_items_categories();        
      $this->load->view('user/include/header',$data);
      $this->load->view('user/include/sidebar',$data);
      $this->load->view('user/contact',$this->data); 
      $this->load->view('user/include/footer');
    }
    public function readmore()
    {
     $data['title']='GALAXY ENTERPRISE'; 
      $data['url']=$this->uri->segment(2);
      $data['msg']=$this->home_model->get_message();
      $data['logo']=$this->login_model->display_logo();
      $data['image']=$this->home_model->get_banner_image();
      $data['system']=$this->home_model->get_item_system();
      $data['hardware']=$this->home_model->get_item_hardware();
      $this->data['contacts']=$this->home_model->contact();
       $data['categories']=$this->login_model->get_categories();  
          $data['cat_items']=$this->login_model->get_items_categories();
      $data['featured']=$this->home_model->featured();                
      $this->load->view('user/include/header',$data);
      $this->load->view('user/include/sidebar',$data);
      $this->load->view('user/readmore',$this->data); 
      $this->load->view('user/include/footer');   
    }   
}