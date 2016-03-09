<?php
class Membership_model extends CI_Model{
    function validate()
    {
        $this->db->where('vemail',$this->input->post('username'));
        $this->db->where('vpassword',md5($this->input->post('password')));
        $query=$this->db->get('tbl_admin');
        if($query->num_rows==1)
        {
            return true;
        }
    }
}
