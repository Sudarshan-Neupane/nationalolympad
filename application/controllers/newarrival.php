<?php 
class Newarrival extends CI_Controller
{
    public function __construct(){
     parent::__construct();
     $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
     $this->output->set_header("Pragma: no-cache");
     $this->load->helper("url");
      $this->load->library('session');
     $this->load->library("pagination");  
     $this->load->model("paginations");
     $this->load->model('client/home_model');
      $this->load->model('login_model');     
    }
     public function index()
    {
      $data['title']='GALAXY ENTERPRISE'; 
      $data['url']=$this->uri->segment(1);
      $data['msg']=$this->home_model->get_message();
      $data['logo']=$this->login_model->display_logo();
      $data['image']=$this->home_model->get_banner_image();
      $data['header_links']=$this->home_model->get_header_links();
      $data['system']=$this->home_model->get_item_system();
      $data['hardware']=$this->home_model->get_item_hardware();
      $data['new_arrival']=$this->home_model->new_arrival_all();
      $data['featured']=$this->home_model->featured(); 
      $data['categories']=$this->login_model->get_categories();  
      $data['cat_items']=$this->login_model->get_items_categories();               
      $this->load->view('user/include/header',$data);
      $this->load->view('user/include/sidebar',$data);
      $this->load->view('user/newarrival',$data); 
      $this->load->view('user/include/footer');
    }
    public function items_new()
    {
          $data['title']='GALAXY ENTERPRISE'; 
          $data['url']=$this->uri->segment(1);
          $data['msg']=$this->home_model->get_message();
          $data['logo']=$this->login_model->display_logo();
          $data['image']=$this->home_model->get_banner_image();
          $data['header_links']=$this->home_model->get_header_links();
          $data['system']=$this->home_model->get_item_system();
          $data['hardware']=$this->home_model->get_item_hardware();
          $data['new_arrival']=$this->home_model->new_arrival_all();
          $data['featured']=$this->home_model->featured();                
         $data['categories']=$this->login_model->get_categories();  
          $data['cat_items']=$this->login_model->get_items_categories();
          // For the pagintation of the data
            $config = array();
	        $config["base_url"] = base_url() . "newarrival/items_new";
	        $config["total_rows"] = $this->paginations->record_count();
	        $config["per_page"] = 8;
	        $config["uri_segment"] = 3;
            $config['full_tag_open']='<div id="pagination">';
            $config['full_tag_close']='</div>';
	        $this->pagination->initialize($config);
           $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
	       $data["results"] = $this->paginations->
	         fetch_items($config["per_page"], $page);
	       $data["links"] = $this->pagination->create_links();
           $this->load->view('user/include/header',$data);
           $this->load->view('user/include/sidebar',$data);
	       $this->load->view("user/pagination", $data);
           $this->load->view('user/include/footer');
    }
}