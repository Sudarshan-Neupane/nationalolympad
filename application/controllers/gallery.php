<?php
class Gallery extends CI_Controller
{
    function __construct()
    {
      parent::__construct();   
      $this->load->model('gallery_model');
       $this->load->model('login_model');
      $this->is_logged_in();
    }
    function index()
    {
        $data['title']='Image gallery';
        $this->load->view('includes/header',$data);
        $data['images']=$this->gallery_model->display_Image();
        $this->load->view('gallery',$data);
        $this->load->view('includes/footer');
    }
    function add_images(){      
    $data['title']='Add New Images';
    $this->load->view('includes/header',$data);
    $this->load->view('add_gallery_img');
    $this->load->view('includes/footer');
   }
    
   function delete_image($id)
   {
    $this->gallery_model->delete_Img($id);
    redirect('gallery');
    
   }
    function do_upload($id=NULL)
        {
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
    	                     $this->db->update('tbl_gallery',$data_insert,array('id'=>$id));
                           } 
                     
    		}
   		else
    		{
   		  $upload_data = $this->upload->data();
          $image=$upload_data['file_name'];
          $insert_data=array('title'=>$title,'image'=>$image);
          if($id){
	    
            $this->db->update('tbl_gallery',$insert_data,array('id'=>$id));
	      }
         else {
         $this->db->insert('tbl_gallery', $insert_data);
		}
        }
        redirect('gallery');    
   }
    
    public function edit_img($id=NULL)
    {
        $data['hardware']=$this->login_model->hardwareitem();
        $data['system']=$this->login_model->systemlist(); 
        $data['title']='Edit images';
        $this->load->view('includes/header',$data);
        $data['row']=$this->gallery_model->editimage($id);
        $this->load->view('edit_gallery_image',$data);
        $this->load->view('includes/footer');
     }
     //for checking the login 
           function is_logged_in(){
        $is_logged_in=$this->session->userdata('is_logged_in');
        if(!isset($is_logged_in)||$is_logged_in!==true)
        {
            redirect('login321');
            die();
        }
     }   
}