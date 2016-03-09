<?php
class Categories_model extends CI_Model
{
    public function dispaly_categories()
    {
        $this->db->order_by('cat_id','desc');
        $query=$this->db->get('tbl_categories');
        if($query->num_rows()>0)
        {
            return $query->result();
        }
        else{
            return array();
        }
    }
    public function edit_categories($id)
    {
        $this->db->where('cat_id',$id);
        $query=$this->db->get('tbl_categories');
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
    public function display_category_name($id)
    {
        $this->db->where('cat_id',$id);
        $query=$this->db->get('tbl_categories');
        if($query->num_rows()>0)
        {
            $row = $query->row(); 
 			return $row->categories;
        }
        else{
            return FALSE;
        }  
    }
    /*old files*/
     public function display_item($id)
    {
        $this->db->where('item_type_id',$id);
        $query=$this->db->get('tbl_items');
        if($query->num_rows()>0)
        {
            return $query->result();
        }
        else
        {
           return array();
        }
    }
    public function editdata_display($id)
    {
        $this->db->where('id',$id);
        $query=$this->db->get('tbl_items');
        if($query->num_rows()>0)
        {
            return $query->result();
        }
        else {
            return array();
        }
    }


}