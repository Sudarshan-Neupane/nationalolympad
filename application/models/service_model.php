<?php
class Service_model extends CI_Model
  {
    function getAll() {
	     $this->db->order_by('id','desc');
    	$q = $this->db->get('tbl_services');
       
		if($q->num_rows() > 0) {
		  return $q->result();
		}
        else{
            return FALSE;
        }
	}
  function delete($id){
     $this->db->where("id", $id);
     $this->db->delete("tbl_services");
         
     }
    
  function editall($id)
      {
        $query = $this->db->get_where('tbl_services', array('id' => $id));
             foreach($query->result() as $rows)
                {
                    $datas[]=$rows;
                }
              return $datas;
       }
 
 function updatedata()
 {
     $id=$this->input->post('id');
     $name=$this->input->post('s_name');
     $date=$this->input->post('date_time');
     $description=$this->input->post('description');
     $data_array=array('name'=>$name,'date_time'=>$date,'description'=>$description);
  $this->db->update('tbl_services',$data_array,array('id'=>$id));  
 }           
 }