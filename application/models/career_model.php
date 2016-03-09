<?php
class Career_model extends CI_Model{
    function getAll() {
	     $this->db->order_by('id','desc');
    	$q = $this->db->get('tbl_career');
       
		if($q->num_rows() > 0) {
			foreach ($q->result() as $rows)
            {
			    $data[] = $rows;
			}
		return $data;
		}
	}
 function insert_vacency($id=NULL){
           $id=$this->input->post('id');
          $data=array('job_title'=>$this->input->post('job_title'),
              'description'=>$this->input->post('description'));
               if($id){     
                $this->db->where('id',$id);
                $this->db->update('tbl_career',$data);
              }
              else{
                $this->db->insert('tbl_career',$data);
              }
     }
  function show_all($id)
  {
            $query = $this->db->get_where('tbl_career', array('id' => $id));
             foreach($query->result() as $rows)
                {
                    $datas[]=$rows;
                }
              return $datas;
   }  
  
     
 function delete($id){
 $this->db->where("id", $id);
 $this->db->delete("tbl_career");
 }
}
?>