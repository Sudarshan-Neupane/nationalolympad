<?php
class Login_model extends CI_Model
{
    
     function is_logged_in(){
        $is_logged_in=$this->session->userdata('is_logged_in');
        if(!isset($is_logged_in)||$is_logged_in!==true)
        {
         redirect('login321');
         die();
        }
  }
  public function hardwareitem()
  {
    $this->db->where('type','hardware');
    $query=$this->db->get('tbl_item_type');
    if($query->num_rows()>0)
    {
        return $query->result();
    }
    else{
        return array();
    }
  }
  public function systemlist()
  {
    $this->db->where('type','system');
    $query=$this->db->get('tbl_item_type');
    if($query->num_rows()>0)
    {
        return $query->result();
    }
    else{
        return array();
    }
  }
    public function get_categories()
    {
        $query=$this->db->get('tbl_categories');
        if($query->num_rows()>0)
        {
            return $query->result();
        }
        else{
            return FALSE;
        }
    }
    public function get_items_categories()
    {
        $query=$this->db->get('tbl_item_type');
        if($query->num_rows()>0)
        {
            return $query->result();
        }
        else{
            return FALSE;
        }
    }
    public function display_logo()
    {
        $query=$this->db->get('tbl_companylogo_banner');
        if($query->num_rows()>0)
        {
            return $query->result();
        }
        else{
            return FALSE;
        }
    }
    public function get_category_fromid($id)
    {
        $this->db->select('categories');
        $this->db->where('cat_id',$id);
        $query=$this->db->get('tbl_categories');
       	if($query->num_rows()>0){
    	$row = $query->row(); 
     			return $row->categories;
    	}
    	else return FALSE;
    }
}