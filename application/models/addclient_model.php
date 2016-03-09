<?php
class Addclient_model extends CI_Model{
    
    function editdata($id){
        $query = $this->db->get_where('tbl_clients', array('id' => $id));
             foreach($query->result() as $rows)
                {
                    $datas[]=$rows;
                }
              return $datas;           
      }
    
}