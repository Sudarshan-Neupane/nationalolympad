<?php

class Clients extends CI_Controller{
     public function __construct(){
        parent::__construct();
        $this->load->model('client_model');
        $this->load->model('login_model');
        $this->is_logged_in();
     }
    function index(){
        $data['hardware']=$this->login_model->hardwareitem();
     $data['system']=$this->login_model->systemlist();
       $data['main_content']="clients";
       $data['title']='Latest News';
       $data['row']=$this->client_model->selectClient();
       $this->load->view('template',$data);
    }
    function deleteclient($id)
    {
       $this->client_model->delete($id);
        redirect('clients');
    }
      function is_logged_in(){
        $is_logged_in=$this->session->userdata('is_logged_in');
        if(!isset($is_logged_in)||$is_logged_in!==true)
        {
            redirect('login321');
            die();
        }
     }
}