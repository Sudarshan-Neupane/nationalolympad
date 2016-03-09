<?php
class Login321  extends CI_Controller
{
    public function construct()
    {
        parent::__construct(); 
      }
    function index(){
       // $data['main_content']='login_form';
        $data['title']="Login Page";
      // $this->load->view('template',$data);
       $this->load->view('login_form',$data);
    }
    function validate_credentials(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password','password','tirm|required');
        if($this->form_validation->run()==FALSE)
        {
            $this->load->view('login_form');
        }
        else
        {
            $this->validatedata();
        }
      
        
    }
    function validatedata()
    {
     
       $this->load->model('membership_model');
        $query=$this->membership_model->validate();
        if($query)
        {
            $data=array(
            'vemail'=>$this->input->post('username'),
            'is_logged_in'=>true
            );
            $this->session->set_userdata($data);
            redirect('dashboard');
        }
        else
        {
          redirect('login321');
        
        }   
    }
}