<?php 
class Aboutus extends CI_Controller
{
       function __construct()
       {
        parent::__construct();
        $this->load->model('welcome_model');
        //$this->check_login->is_logged_in();
         $this->load->model('login_model');
        $this->is_logged_in();
      }    
     function index()
     {
      $data['hardware']=$this->login_model->hardwareitem();
      $data['system']=$this->login_model->systemlist(); 
      $data['main_content']="welcome_admin";
      $data['title']='Welcome Admin';
      $data['values']=$this->welcome_model->get_about_value()->result();
      $this->load->view('template',$data);
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