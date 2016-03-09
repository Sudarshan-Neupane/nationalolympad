<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
 public function __construct(){
        parent::__construct();
        $this->load->model('login_model');
        $this->load->model('home_submenu');
    }
public function home_submenu($id=NULL)
{   
    $this->login_model->is_logged_in();
    $data['main_content']="view_home_submenu";
    $data['title']='Welcome Admin';
    $data['values']=$this->home_submenu->get_value($id);
    $this->load->view('template',$data);
    /*
    $this->load->view('includes/header');
    $this->load->view('view_home_submenu');
    $this->load->view('includes/footer'); 
    */    
}
public function do_upload($id=NULL)
        {
        $this->login_model->is_logged_in();
        $title=$this->input->post('title');  
        $id=$this->input->post('id');
        $description=$this->input->post('description'); 
        $config['upload_path'] = 'images/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '1500';
		$config['max_width']  = '1024';
		$config['max_height']  = '1024';
       	$this->load->library('upload', $config);
    	if ( ! $this->upload->do_upload())
    		{	
		    $data_insert=array('title'=>$title,'description'=>$description);
                   if($id){
    	                     $this->db->update('tbl_homepage',$data_insert,array('id'=>$id));
                           }
    		}
   		else
    	{
   		  $upload_data = $this->upload->data();
          $image=$upload_data['file_name'];
          $insert_data=array('title'=>$title,'image'=>$image,'description'=>$description);
          $this->db->update('tbl_homepage',$insert_data,array('id'=>$id));
	  
        }
        redirect('dashboard');    
   }
}