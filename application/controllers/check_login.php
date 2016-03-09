<?php
class Check_login extends CI_Controller{
      function is_logged_in(){
        $is_logged_in=$this->session->userdata('is_logged_in');
        if(!isset($is_logged_in)||$is_logged_in!==true)
        {
            redirect('login321');
            die();
        }
     }
     function logout(){
        $this->session->sess_destroy();
        redirect('login321');
     }
}