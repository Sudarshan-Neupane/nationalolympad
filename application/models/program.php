<?php
class Program extends CI_Model{
    
    public function selectAllprogram()
    {    
         $query = $this->db->get('tbl_faculties');
         if($query->num_rows()>0)
          {
          return $query->result();
          }
          else
          {
          return array();
          }
   }
   function editdata($id){
   $query = $this->db->get_where('tbl_faculties', array('id' => $id));
   foreach($query->result() as $rows)
   {
   $datas[]=$rows;
   }
    return $datas;           
   }
   public function delete($id)
   {
    $this->db->where("id", $id);
    $this->db->delete("tbl_faculties");
   }
}
