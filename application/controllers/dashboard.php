<?php
 class Dashboard extends CI_Controller{
     function __construct(){
        parent::__construct();
        $this->is_logged_in();
        $this->load->model('welcome_model');
        //$this->check_login->is_logged_in();
        $this->load->model('login_model');
    }    
     function index()
     {
     $data['categories']=$this->login_model->get_categories();  
      $data['cat_items']=$this->login_model->get_items_categories();
      $data['main_content']="welcome_admin";
      $data['title']='Welcome Admin';
      $data['values']=$this->welcome_model->getValues()->result();
      $this->load->view('template',$data);

     }
    
     function members_area()
     {   if(! $this->session->userdata('is_logged_in')){
            redirect('login');
        }
         $data['main_content']="welcome_admin";
         $data['title']='Welcome Admin';
         $this->load->view('template',$data);
     }
     //To update the welcome page and the about us page 
     function edit_update()
     { 
        $id=$this->input->post('id');
        $data = array(
               'pagetitle' => $this->input->post('pagetitle'),
               'description' => $this->input->post('description'),
               );
     if($id==1){
      $this->db->where('title', 'welcome');
      $this->db->update('tbl_frontpage', $data); 
      redirect('dashboard');
       }
       else{
        $this->db->where('title', 'About Us');
      $this->db->update('tbl_frontpage', $data); 
      redirect('aboutus');
       }
     }
     public function logo()
     {
        $this->login_model->is_logged_in();
        $data['title']="Chang Logo";
        $data['categories']=$this->login_model->get_categories();
        //$data['row']=$this->categories_model->dispaly_categories();
         $data['cat_items']=$this->login_model->get_items_categories();
        $this->load->view('includes/header',$data);
        $this->load->view('logo');
        $this->load->view('includes/footer');
     }
      public function video()
     {
        $this->login_model->is_logged_in();
        $data['title']="video";
        $data['categories']=$this->login_model->get_categories();
        //$data['row']=$this->categories_model->dispaly_categories();
         $data['cat_items']=$this->login_model->get_items_categories();
        $this->load->view('includes/header',$data);
        $this->load->view('video');
        $this->load->view('includes/footer');
     }
     public function insert_video()
     {
        $this->login_model->is_logged_in();
        $name=$this->input->post('name');
        $urls=$this->input->post('urls');
         $data=array('name'=>$name,'urls'=>$urls);
        $this->db->insert('tbl_video',$data);
         redirect('dashboard');   
     }
     
     //for the logo of the company
       function do_upload($id=NULL){
        
        $config['upload_path'] = 'images/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '1500';
		$config['max_width']  = '1300';
		$config['max_height']  = '300';
       	$this->load->library('upload', $config);
    	if ( ! $this->upload->do_upload())
    		{	
		    //$data_insert=array('item_type_id'=>$item_type_id,'name'=>$item_name,'Price'=>$Price,'description'=>$description,'featured'=>$f_item);
            //$this->db->insert('tbl_items',$data_insert);
    		}
   		else
    		{
   		  $upload_data = $this->upload->data();
          $image=$upload_data['file_name'];
          $data_insert=array('img'=>$image);
          $this->db->update('tbl_companylogo_banner',$data_insert,array('id'=>'6'));		
        }
       redirect('dashboard');    
   }
     
     function is_logged_in(){
        $is_logged_in=$this->session->userdata('is_logged_in');
        if(!isset($is_logged_in)||$is_logged_in!==true)
        {
            redirect('login321');
            die();
        }
     }
}