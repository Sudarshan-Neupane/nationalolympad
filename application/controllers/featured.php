<?php 
  class Featured extends CI_Controller
  { 
    public function __construct(){
     parent::__construct();
     $this->load->model('client/home_model');
     $this->load->helper("url");
      $this->load->library('session');
      $this->load->library("pagination");
     $this->load->model("paginations");
    $this->load->model('login_model');
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
	        $config["base_url"] = base_url() . "featured/items_new";
	        $config["total_rows"] = $this->paginations->featured_count();
            $config["per_page"] = 8;
	        $config["uri_segment"] = 3;
            $config['full_tag_open']='<div id="pagination">';
            $config['full_tag_close']='</div>';
	        $this->pagination->initialize($config);
            $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
	        $data["results"] = $this->paginations->
	         fetch_featured($config["per_page"], $page);
	        $data["links"] = $this->pagination->create_links();
            $this->load->view('user/include/header',$data);
            $this->load->view('user/include/sidebar',$data);
	        $this->load->view("user/featured", $data);
           $this->load->view('user/include/footer');
    }
}