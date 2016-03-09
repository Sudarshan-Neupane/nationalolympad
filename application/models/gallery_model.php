<?php
class Gallery_model extends CI_Model
{
     public function display_Image(){
          $this->db->order_by('id','desc');
    	$q = $this->db->get('tbl_gallery');
		if($q->num_rows() > 0) {
		return $q->result();
		}
        else{
            return FALSE;
        }
    }
     public function  editimage($id)
     {
      $query = $this->db->get_where('tbl_gallery', array('id' => $id));
             foreach($query->result() as $rows)
                {
                    $datas[]=$rows;
                }
              return $datas;           
      }
  function delete_Img($id)
  {
  $this->db->where("id", $id);
  $this->db->delete("tbl_gallery");
  }    
}