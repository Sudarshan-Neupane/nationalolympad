<?php
class Categories extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
        $this->load->model('categories_model');
    }
    public function index()
    {
        $this->login_model->is_logged_in();
        $data['title']="Categories";
        $data['categories']=$this->login_model->get_categories();
        $data['row']=$this->categories_model->dispaly_categories();
        $data['system']=$this->login_model->systemlist();
        $this->load->view('includes/header',$data);
        $this->load->view('categories_display',$data);
        $this->load->view('includes/footer');
    }
    public function add_categories()
    {
         $this->login_model->is_logged_in();
         $data['title']="Add Categories";
          $data['categories']=$this->login_model->get_categories();
          $data['cat_items']=$this->login_model->get_items_categories();
         $data['hardware']=$this->login_model->hardwareitem();
         $data['system']=$this->login_model->systemlist();
         
         $this->load->view('includes/header',$data);
         $this->load->view('add_categories');
         $this->load->view('includes/footer');
    }
    public function add_categor_name()
    {   // $this->form_validation->set_rules('categories', 'Categories', 'trim|required|xss_clean');
         $name=$this->input->post('categories_name');
         $data=array('categories'=>$name);
         $this->db->insert('tbl_categories',$data);
         redirect('categories');
        
    }
    public function edit_data($id)
    {
         $this->login_model->is_logged_in();
         $data['id']=$id;
         $data['title']="Edit Categories";
          $data['categories']=$this->login_model->get_categories();
          $data['cat_items']=$this->login_model->get_items_categories();
         $data['row']=$this->categories_model->edit_categories($id);
         
         $this->load->view('includes/header',$data);
         $this->load->view('edit_categories',$data);
         $this->load->view('includes/footer');   
    }
    public function edit_categor_name()
    {
        $cat_id=$this->input->post('id');
        $category=$this->input->post('categories_name');
        $data=array('categories'=>$category);
        $this->db->where('cat_id',$cat_id);
        $this->db->update('tbl_categories',$data);
        redirect('categories');
    }
    public function deletedata($id)
    {
        $this->db->where('cat_id',$id);
        $query=$this->db->delete('tbl_categories');
        if($query==1)
        {
           
           $this->db->where('cat_id',$id);
           $this->db->delete('tbl_item_type');
           
        }
       redirect('categories');
    }
function do_upload($id=NULL){
        $categories=$this->input->post('categories_name');
        $description=$this->input->post('description');
         $id=$this->input->post('id');
        $config['upload_path'] = 'images/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '2000';
		$config['max_width']  = '1024';
		$config['max_height']  = '1024';
       	$this->load->library('upload', $config);
    	if ( ! $this->upload->do_upload())
    		{
		     $data_insert=array('categories'=>$categories,'Description'=>$description);
              if($id=="")
              {
              $this->db->insert('tbl_categories',$data_insert);
    		  }
              else{
                $this->db->update('tbl_categories',$data_insert,array('cat_id'=>$id));
              }
            }
   		else
    		{
	   	   $upload_data = $this->upload->data();
          $image=$upload_data['file_name'];
          $data_insert=array('categories'=>$categories,'Description'=>$description,'image'=>$image);
          if($id==""){ 
                     $this->db->insert('tbl_categories', $data_insert);	
                     }
           else{
                  $this->db->update('tbl_categories',$data_insert,array('cat_id'=>$id));
           }	
        }
      redirect('categories');    
   }
/*  public function do_upload($id=NULL)
        {
        $categories=$this->input->post('categories_name'); 
        $description=$this->input->post('description'); 
        $id=$this->input->post('id');
        $config['upload_path'] = 'images/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '1500';
		$config['max_width']  = '1024';
		$config['max_height']  = '1024';
       	$this->load->library('upload', $config);
    	if ( !$this->upload->do_upload())
    		{	
		    $data_insert=array('categories'=>$categories,'Description'=>$description);
                   if($id){
    	                     $this->db->update('tbl_categories',$data_insert,array('cat_id'=>$id));
                           }        
    		}
   		else
    		{
         $insert_data=array('categories'=>$categories,'Description'=>$description,'image'=>$image);
          if($id){
	    
            $this->db->update('tbl_categories',$insert_data,array('cat_id'=>$id));
	      }
         else {
         $this->db->insert('tbl_categories', $insert_data);
		}
        }
        redirect('categories');    
   }
   old files 
   public function hardware($id)
   {
    $this->login_model->is_logged_in();
    $data['item_type_id']=$id;
    $data['title']='New Items';
     $data['categories']=$this->login_model->get_categories();
     $data['cat_items']=$this->login_model->get_items_categories();
    $data['hardware']=$this->login_model->hardwareitem();
    $data['system']=$this->login_model->systemlist($id);
    $data['row']=$this->categories_model->display_item($id); 
    $this->load->view('includes/header',$data);
    $this->load->view('categories',$data);
    $this->load->view('includes/footer');
  }
  public function add_items($id)
  {
    $this->login_model->is_logged_in();
    $data['id']=$id;   
    $data['title']="~Add Items~";
     $data['categories']=$this->login_model->get_categories();
     $data['cat_items']=$this->login_model->get_items_categories();
    $data['hardware']=$this->login_model->hardwareitem();
    $data['system']=$this->login_model->systemlist($id);
    $data['row']=$this->categories_model->display_item($id); 
    $this->load->view('includes/header',$data);
    $this->load->view('items_indiv_add',$data);
    $this->load->view('includes/footer');
  } 
  public function update_insert($id=NULL)
  {
         $this->login_model->is_logged_in();
         $data['categories']=$this->login_model->get_categories();
          $data['cat_items']=$this->login_model->get_items_categories();
         $data['hardware']=$this->login_model->hardwareitem();
         $data['system']=$this->login_model->systemlist(); 
         
         $data['title']='Edit Items';
         $data['row']=$this->categories_model->editdata_display($id);
         $this->load->view('includes/header',$data);
         $this->load->view('edit_item_categories',$data);
         $this->load->view('includes/footer');
  }
  
  function do_upload($id=NULL){
        $item_type_id=$this->input->post('item_type_id');
        $item_name=$this->input->post('item_name');  
        $Price=$this->input->post('Price');
        $description=$this->input->post('description');
        $f_item=$this->input->post('f_item');
        $config['upload_path'] = 'images/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '2000';
		$config['max_width']  = '1024';
		$config['max_height']  = '1024';
       	$this->load->library('upload', $config);
    	if ( ! $this->upload->do_upload())
    		{	
		    $data_insert=array('item_type_id'=>$item_type_id,'name'=>$item_name,'Price'=>$Price,'description'=>$description,'featured'=>$f_item);
            $this->db->insert('tbl_items',$data_insert);
    		}
   		else
    		{
   		  $upload_data = $this->upload->data();
          $image=$upload_data['file_name'];
          $data_insert=array('item_type_id'=>$item_type_id,'name'=>$item_name,'Price'=>$Price,'image'=>$image,'description'=>$description,'featured'=>$f_item);
          $this->db->insert('tbl_items', $data_insert);		
        }
       redirect('categories/hardware/'.$item_type_id);    
   }
 function edit_upload($id){
	    $item_type_id=$this->input->post('item_type_id');
        $item_name=$this->input->post('item_name');  
        $Price=$this->input->post('Price');
        $description=$this->input->post('description');
        $f_item=$this->input->post('f_item');
        $config['upload_path'] = 'images/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '2000';
		$config['max_width']  = '1024';
		$config['max_height']  = '1024';
       	$this->load->library('upload', $config);
    	if ( ! $this->upload->do_upload())
    		{	
		    $data_insert=array('name'=>$item_name,'Price'=>$Price,'description'=>$description,'featured'=>$f_item);
               
    	                     $this->db->update('tbl_items',$data_insert,array('id'=>$id));
    		}
   		else
    		{
   		  $upload_data = $this->upload->data();
          $image=$upload_data['file_name'];
          $data_insert=array('name'=>$item_name,'Price'=>$Price,'image'=>$image,'description'=>$description,'featured'=>$f_item);
          $this->db->update('tbl_items', $data_insert,array('id'=>$id));		
        }
        redirect('categories/hardware/'.$item_type_id);    
     }
     public function deleteid($id)
     {
       $this->db->delete('tbl_items', array('id' => $id));
       redirect('dashboard');    
     }*/
}