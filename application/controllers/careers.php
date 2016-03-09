<?php
class Careers extends CI_Controller
 {
    public function __construct(){
        parent::__construct();
        $this->load->model('career_model');
        $this->is_logged_in();
        $this->load->model('login_model');
    }
    public function index(){
      $data['title']='careers';
       $this->login_model->is_logged_in();
      $this->load->view('includes/header',$data);  
      $data['row']=$this->career_model->getAll();
      $this->load->view('career',$data);
      $this->load->view('includes/footer');  
     }
    public  function add_career(){
    $this->login_model->is_logged_in();
    $data['title']='add new career';
    $this->load->view('includes/header',$data);
    $this->load->view('add_career');
    $this->load->view('includes/footer');  
        
    }
    public function submit_careers($id=NULL){
      $this->career_model->insert_vacency();
      redirect('careers');
    }
    public function editdata($id){
     $this->login_model->is_logged_in();
    $data['title']='Edit career';
    $data['values']=$this->career_model->show_all($id);
    $this->load->view('includes/header',$data);
    $this->load->view('edit_career',$data);
    $this->load->view('includes/footer'); 
        
    }
    public function deletedata($id)
    {
       $this->career_model->delete($id);
        redirect('careers');
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