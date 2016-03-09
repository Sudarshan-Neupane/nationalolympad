<?php
class Addclients extends CI_Controller{
    public function __construct()
    {
       parent::__construct();
        $this->load->model('login_model');
        $this->load->model('client_model');
        $this->load->helper(array('form', 'url'));
    
    }
    public function index()
        {
         //$data['main_content']="add_clients";
         //$data['title']='Add Clients';
         //$this->load->view('template',$data);
         
     }
     //for the insert the data in the table 
     public function add_clients()
     {
        $data['hardware']=$this->login_model->hardwareitem();
        $data['system']=$this->login_model->systemlist(); 
        
        $this->login_model->is_logged_in();
        $data['main_content']="add_insertclient";
        $data['title']='Add Members';
        $this->load->view('template',$data);
     }
     //for the update  data in the table 
     public function update_insert($id=NULL){
         $data['hardware']=$this->login_model->hardwareitem();
         $data['system']=$this->login_model->systemlist(); 
         $this->login_model->is_logged_in();
         $data['main_content']="add_clients";
         $data['title']='Edit Clients';
         $this->load->model('addclient_model');
         $data['row']=$this->addclient_model->editdata($id);
         $this->load->view('template',$data);
     }
     
     function do_upload($id = NULL)
       {  //submitted data captured  
           $id=$this->input->post('id');
           $name=$this->input->post('c_name');
           $description=$this->input->post('description');
        //for the image upload in the folder 
        
        $config['upload_path'] = 'images/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '1500';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
       	$this->load->library('upload', $config);
    	if ( ! $this->upload->do_upload())
    		{		  
    		   //	$error = array('error' => $this->upload->display_errors());
    		   //	$this->load->view('upload', $error);
                   $data_insert=array('name'=>$name,'description'=>$description);
                   if($id){
    	                        $this->db->update('tbl_clients',$data_insert,array('id'=>$id));
    	            }
                    else {
                          $this->db->insert('tbl_clients', $data_insert);
                    }             
    		}
   		else
    		{
    		 $upload_data = $this->upload->data();
             $image=$upload_data['file_name'];
            
         //end of the file upload 
     
          $insert_data=array('name'=>$name,'image'=>$image,'description'=>$description);
          if($id){
	    
            $this->db->update('tbl_clients',$insert_data,array('id'=>$id));
	      }
         else {
        // $name=$this->input->post('c_name');
         //$description=$this->input->post('description');
         //$insert_data=array('name'=>$name,'image'=>$image,'description'=>$description);
         $this->db->insert('tbl_clients', $insert_data);
         	//$data = array('upload_data' => $this->upload->data());
           	//$this->load->view('upload_success', $data);
		}
        }
        redirect('clients');
  }
}