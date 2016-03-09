<?php
class Users extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));
        $this->load->model('categories_model');
        $this->load->helper('security');
    }
    public function manageuser()
    {
         $this->login_model->is_logged_in();
         $data['hardware']=$this->login_model->hardwareitem();
         $data['system']=$this->login_model->systemlist();
         $data['err'] = "";
        $data['categories']=$this->login_model->get_categories();  
         $data['cat_items']=$this->login_model->get_items_categories();
         $data['title']='Change Password';
         $this->load->view('includes/header',$data);
         $this->load->view('change_password',$data);
         $this->load->view('includes/footer');
    }
    public function checkpassword()
    {    
         $data['hardware']=$this->login_model->hardwareitem();
         $data['system']=$this->login_model->systemlist();
         $this->login_model->is_logged_in();
         $oldpass=md5($this->input->post('oldpass'));
         $newpass=md5($this->input->post('newpass'));
         $username=$this->input->post('username');
         $this->form_validation->set_rules('oldpass','Old Password','trim|required|xss_clean');
         $this->form_validation->set_rules('newpass','New Password','trim|required|xss_clean|matches[conpass]');
         $this->form_validation->set_rules('username','Username','trim|required|xss_clean');
         $this->form_validation->set_rules('conpass', 'Password Confirmation', 'trim|required');         
         if ($this->form_validation->run() == FALSE)
		 {
		  $data['err']="";
          $data['title']="Change Password";
          $this->load->view('includes/header',$data);
		  $this->load->view ('change_password',$data);
          $this->load->view('includes/footer');
		 }
         else
           {
           $this->db->where('vpassword',$oldpass);
           $query=$this->db->get('tbl_admin');
           if($query->num_rows>0)
           {
           // echo "password match";
              $data=array('vpassword'=>$newpass,'vemail'=>$username);
              $this->db->update('tbl_admin', $data);   
              $data['err']="Password Changeg Successfully !!";
              $data['title']="Change Password";
              $this->load->view('includes/header',$data);
    		  $this->load->view ('change_password',$data);
              $this->load->view('includes/footer');         
           }
           else{
           // echo "pass not match";
          $data['err']="Password Not Match";
          $data['title']="Change Password";
          $this->load->view('includes/header',$data);
		  $this->load->view ('change_password',$data);
          $this->load->view('includes/footer');
           }
         
         }
    }    
}