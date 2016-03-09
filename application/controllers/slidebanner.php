<?php 
class Slidebanner extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('banner_model');
         $this->load->model('login_model');
        $this->is_logged_in();
        
    }
   function index(){
    $data['title']='Banner';
     $data['images']=$this->banner_model->display_Image();
     $data['categories']=$this->login_model->get_categories();  
     $data['cat_items']=$this->login_model->get_items_categories();
    $this->load->view('includes/header',$data);
    $this->load->view('banner_images',$data);
    $this->load->view('includes/footer');
   
   }
   function add_images(){
    $data['title']='Add New Images';
    $data['hardware']=$this->login_model->hardwareitem();
    $data['system']=$this->login_model->systemlist(); 
     $data['categories']=$this->login_model->get_categories();  
     $data['cat_items']=$this->login_model->get_items_categories();
    $this->load->view('includes/header',$data);
    $this->load->view('add_banner_img');
    $this->load->view('includes/footer');
   }
   function delete_image($id){
    $this->banner_model->delete_Img($id);
    redirect('slidebanner');
    
   }
   
   public function edit_img($id=NULL){
        $data['title']='Edit images';
        $data['hardware']=$this->login_model->hardwareitem();
        $data['system']=$this->login_model->systemlist(); 
         $data['categories']=$this->login_model->get_categories();  
     $data['cat_items']=$this->login_model->get_items_categories();
        $data['row']=$this->banner_model->editimage($id);   
        $this->load->view('includes/header',$data);
        $this->load->view('edit_banner_img',$data);
        $this->load->view('includes/footer');
     }
   function do_upload($id=NULL){
        $title=$this->input->post('title');  
        $id=$this->input->post('id'); 
        $config['upload_path'] = 'images/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '1000';
		$config['max_width']  = '1024';
		$config['max_height']  = '1024';
       	$this->load->library('upload', $config);
    	if ( ! $this->upload->do_upload())
    		{	
		    $data_insert=array('title'=>$title);
                   if($id){
    	                     $this->db->update('tbl_banner_images',$data_insert,array('id'=>$id));
                           }                 
    		}
   		else
    		{
   		  $upload_data = $this->upload->data();
          $image=$upload_data['file_name'];
          $insert_data=array('title'=>$title,'img'=>$image);
          if($id){
	    
            $this->db->update('tbl_banner_images',$insert_data,array('id'=>$id));
	      }
         else {
         $this->db->insert('tbl_banner_images', $insert_data);
		}
        }
        redirect('slidebanner');    
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