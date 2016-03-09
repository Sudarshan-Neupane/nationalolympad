<?php 
class  Additems extends ci_controller
{
  public function __construct()
   {
    parent::__construct();
    $this->load->model('login_model');
    $this->load->model('home_submenu');
    $this->load->model('additem');
    $this->load->model('categories_model');
  }
   public function index()
   {
     $this->login_model->is_logged_in();
     $data['title']='Add New Items';
     $data['row']=$this->additem->displayall();
     $data['categories']=$this->login_model->get_categories();  
     $data['cat_items']=$this->login_model->get_items_categories();
     $data['hardware']=$this->login_model->hardwareitem();
     $data['system']=$this->login_model->systemlist();
     $this->load->view('includes/header',$data);
     $this->load->view('additems_display',$data);
     $this->load->view('includes/footer');
   }
public function additem()
     {
     $this->login_model->is_logged_in();
     $data['title']='Add New Items';
     $data['hardware']=$this->login_model->hardwareitem();
     $data['system']=$this->login_model->systemlist();
     $data['categories']=$this->categories_model->get_categories();
      $data['cat_items']=$this->login_model->get_items_categories();
     $this->load->view('includes/header',$data);
     $this->load->view('additems_view');
     $this->load->view('includes/footer');
     }
public function insertitem()
  {
    $item_name=$this->input->post('item_name');
    $item_type=$this->input->post('item_type');
    $data=array('name'=>$item_name,'cat_id'=>$item_type);
    $this->db->insert('tbl_item_type',$data);
    redirect('additems');
  }
function do_upload($id = NULL)
       {  
           $id=$this->input->post('id');
           $menu=$this->input->post('menu');
           $sub_menu=$this->input->post('sub_menu');
           $description=$this->input->post('description');
              
        $config['upload_path'] = 'images/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '1500';
		$config['max_width']  = '1024';
		$config['max_height']  = '1024';
       	$this->load->library('upload', $config);
    	if ( ! $this->upload->do_upload())
    		{		 
                   $data_insert=array('name'=>$sub_menu,'cat_id'=>$menu,'description'=>$description);
                   if($id){
    	                        $this->db->update('tbl_item_type',$data_insert,array('id'=>$id));
    	            }
                    else {
                          $this->db->insert('tbl_item_type', $data_insert);
                    }             
    		}
   		else
    		{
    		 $upload_data = $this->upload->data();
             $image=$upload_data['file_name'];
            $insert_data=array('name'=>$sub_menu,'cat_id'=>$menu,'image'=>$image,'description'=>$description);
            if($id){
    	     $this->db->update('tbl_item_type',$insert_data,array('id'=>$id));
    	      }
             else {
             $this->db->insert('tbl_item_type', $insert_data);
    		}
        }
        redirect('additems');
 }  
 
public function edititem($id)
 {
   $this->login_model->is_logged_in();
   $data['title']='Add New Items';
   $data['row']=$this->additem->editedata($id);
   $data['categories']=$this->categories_model->get_categories();
   $data['cat_items']=$this->login_model->get_items_categories();  
   $this->load->view('includes/header',$data);
   $this->load->view('edititems_view',$data);
   $this->load->view('includes/footer'); 
 }
public function edititem_id()
{
   $item_name=$this->input->post('item_name');
   $item_type=$this->input->post('item_type');
   $id=$this->input->post('id');
    $data=array('name'=>$item_name,'cat_id'=>$item_type);
    $this->db->where('id',$id);
    $this->db->update('tbl_item_type',$data);
    redirect('additems');
}
   
public function deletedata($id)
    {
       $this->login_model->is_logged_in();
       $this->additem->delete($id);
        redirect('additems');
    }   
}