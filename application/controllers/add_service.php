<?php
class Add_service extends CI_Controller{
  public function index()
     {
      $data['main_content']="add_services";
      $data['title']='Add Service';
      $this->load->view('template',$data);
     }
  public function adddata($id=NULL)
  {
        $reg=array('name'=>$this->input->post('sname'),'date_time'=>$this->input->post('date_time'),'description'=>$this->input->post('description'));
        $this->db->insert('tbl_services',$reg);
        redirect('service');
    
    }
  
  private function _get_posted_data()
  {
    $data=array();
    $data['id']=$this->input->post('s_id');
    $data['name']=$this->input->post('sname');
    $data['description']=$this->input->post('description');
    return $data;
  }
  
}