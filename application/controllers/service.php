<?php
 class Service extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('service_model');
         $this->load->model('login_model');        
    }

     public function index()
     {
      $this->login_model->is_logged_in();
      $data['main_content']="services";
      $data['title']='News And Events';
      $data['row']=$this->service_model->getAll();
      $this->load->view('template',$data);
         
     }
    
    public function deletedata($id)
    {
       $this->login_model->is_logged_in();
       $this->service_model->delete($id);
        redirect('service');
    }   
    public function editdata($id)
    {
        $this->login_model->is_logged_in();
        $data['main_content']="edit_services";
        $data['title']='Edit Services';

        $data['rows']=$this->service_model->editall($id);
        $this->load->view('template',$data);
    }  
    function edit_services(){
         $this->login_model->is_logged_in();
        $this->service_model->updatedata();
        //$this->db->update('tbl_services',$data_array,array('id'=>$id));
        redirect('service');
        
    }
}