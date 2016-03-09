<?php 
Class Paginations extends CI_Model
{
    public function record_count()
    {
        return $this->db->count_all('tbl_items');
    }
    public function fetch_items($limit,$start)
    {   
        $this->db->order_by('id','desc');
        $this->db->limit($limit,$start);
        $query=$this->db->get('tbl_items');
        if($query->num_rows()>0)
        {
            foreach($query->result()as $row){
                $data[]=$row;
            }
            return $data;
        }
       return false;
    }
    Public function featured_count()
    {   
         //return $this->db->count_all('tbl_items');
         $this->db->where('featured','YES');
         $query=$this->db->get('tbl_items');
         return $query->num_rows();
         
     
    }
    public function fetch_featured($limit,$start)
    {
        $this->db->order_by('id','desc');
        $this->db->limit($limit,$start);
        $this->db->where('featured','YES');
        $query=$this->db->get('tbl_items');
        if($query->num_rows()>0)
        {
            foreach($query->result()as $row){
                $data[]=$row;
            }
            return $data;
        }
       return array();   
    }
}