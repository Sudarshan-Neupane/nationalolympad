<?php
class Header_link_model extends CI_Model
{
    public function __construct()
    {
     parent::__construct();
        
    }
    function getAll() {
	     $this->db->order_by('id','desc');
    	$q = $this->db->get('tbl_headerlinks');
       
		if($q->num_rows() > 0) 
        {
		  return $q->result();
		}
        else{
            return array();
        }
              
	}
  function add_links($id=NULL)
  {
    $id=$this->input->post('id');
    $data=array('title'=>$this->input->post('title'),'description'=>$this->input->post('description'));
    if(!$id)
    {
    $this->db->insert('tbl_headerlinks', $data);
    }
    else 
    {
   
    $this->db->where('id', $id);
    $this->db->update('tbl_headerlinks', $data); 
    }
  }
  
  public function delete($id)
  {
  $this->db->where("id", $id);
  $this->db->delete("tbl_headerlinks");
  }
  
  public function  editdata($id)
  {
  $query = $this->db->get_where('tbl_headerlinks', array('id' => $id));
         foreach($query->result() as $rows)
            {
                $datas[]=$rows;
            }
            return $datas;           
   }
    
}