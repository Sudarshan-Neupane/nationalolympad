<?php
class Banner_model  extends CI_Model{
    
    public function display_Image(){
          $this->db->order_by('id','desc');
    	$q = $this->db->get('tbl_banner_images');
		if($q->num_rows() > 0) {
			return $q->result();
		}
        else{
            return array();
        }
    }
   public function  editimage($id){
      $query = $this->db->get_where('tbl_banner_images', array('id' => $id));
             foreach($query->result() as $rows)
                {
                     $datas[]=$rows;
                }
              return $datas;           
      }
  function delete_Img($id){
    $this->db->where("id", $id);
    $this->db->delete("tbl_banner_images");
  }   
      
}