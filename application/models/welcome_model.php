<?php 
class Welcome_model extends CI_Model{
  
   
   function getValues()
   {
    $this->db->select('*');
    $this->db->where('title','welcome');
    $this->db->from('tbl_frontpage');
    
    return $this->db->get();
   }
   function get_about_value()
   {
   $this->db->select('*');
    $this->db->where('title','About Us');
    $this->db->from('tbl_frontpage');
    
    return $this->db->get();
   }
}