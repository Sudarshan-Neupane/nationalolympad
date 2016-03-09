<?php
class Home_submenu extends CI_Model
{
  public function get_value($id)
  {
    $query = $this->db->get_where('tbl_homepage', array('id' => $id));
            foreach($query->result() as $rows)
            {
            $datas[]=$rows;
            }
           return $datas;
  }
  public function front_menu_model($id)
  {
    $query=$this->db->get_where('tbl_frontpage',array('id'=>$id));
       foreach($query->result()as $row)
         {
            $datas[]=$row;
         }
         return $datas;
  }    
}