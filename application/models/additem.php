<?php
class Additem extends CI_Model
{
    public function displayall()
    {
        $this->db->order_by('id','desc');
        $query=$this->db->get('tbl_item_type');
        if($query->num_rows()>0)
        {
            return $query->result();
        }
        else{
            return array();
        }
    }
    public function editedata($id)
    {
        $this->db->where('id',$id);
        $query=$this->db->get('tbl_item_type');
        if($query->num_rows()>0)
        {
            return $query->result();
        }
        else{
            return array();
        }  
    }
   /* public function edititem_id()
    {
     $item_name=$this->input->post('item_name');
    $item_type=$this->input->post('item_type');
    
    echo $item_name;
    die();
    $data=array('name'=>$item_name,'type'=>$item_type);
    $this->db->insert('tbl_item_type',$data);
    redirect('additems');
    }
    */
    public function delete($id)
    {
     
        $this->db->where('id',$id);
        $this->db->delete('tbl_item_type');
        $this->db->where('item_type_id',$id);
        $this->db->delete('tbl_items');
    }
}
