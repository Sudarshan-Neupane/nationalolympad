<?php 
class Client_model extends CI_Model{
    public function __construct()
    {
        parent::__construct();
    }
    public function display_logo_image()
    {   
        $this->db->where('id',6);
        $query=$this->db->get('tbl_companylogo_banner');
                       
        if($query->num_rows()>0)
        {
            return $query->result();
        }
        return array();
    }
    public function display_menu()
    {
        $query=$this->db->get('tbl_categories');
        if($query->num_rows()>0)
        {
            return $query->result();
        }
        else{
            return FALSE;
        }
    }
    public function sub_menu()
    {
        $this->db->order_by("id", "asc");
        $query=$this->db->get('tbl_item_type');
        if($query->num_rows()>0)
        {
            return $query->result();
        }
        else{
            return FALSE;
        }
    }
    //For the banner Image
    public function banner_image()
    {
        $query=$this->db->get('tbl_banner_images');
        if($query->num_rows()>0)
        {
            return $query->result();
        }
        else{
            return FALSE;
        }
    }
    public function clients()
    {
       $this->db->order_by('id','asc');
        $query=$this->db->get('tbl_clients');
        if($query->num_rows()>0)
        {
            return $query->result();
        }
        else{
            return FALSE;
        }
    }
    public function selectClient()
    {
        $query=$this->db->get('tbl_clients');
        foreach($query->result() as $row)
        {
           $data[]=$row;
        }
        return $data;  
    }
    public function  demands(){
        $this->db->order_by('id','desc');
        $query=$this->db->get('tbl_career');
       if($query->num_rows()>0)
       {
           return $query->result();
       }
       else{
           return FALSE;
       }
    }
    public function chairman_msg()
    {
        $this->db->where('id',4);
       $query=$this->db->get('tbl_homepage');
       if($query->num_rows()>0)
       {
           return $query->result();
       }
       else{
           return FALSE;
       }
    }
    public function wel_msg(){
       $this->db->where('id',1);
       $query=$this->db->get('tbl_frontpage');
       if($query->num_rows()>0)
       {
           return $query->result();
       }
       else{
           return FALSE;
       }   
    }
    function midFooter(){
      $this->db->where('id',2);
       $query=$this->db->get('tbl_homepage');
       if($query->num_rows()>0)
       {
           return $query->result();
       }
       else{
           return FALSE;
       }    
    }
      function rightFooter(){
      $this->db->where('id',3);
       $query=$this->db->get('tbl_homepage');
       if($query->num_rows()>0)
       {
           return $query->result();
       }
       else{
           return FALSE;
       }    
    }
     function objectives(){
      $this->db->where('id',4);
       $query=$this->db->get('tbl_homepage');
       if($query->num_rows()>0)
       {
           return $query->result();
       }
       else{
           return FALSE;
       }    
    }
    public function news_event(){
        $this->db->order_by('id','desc');
        //$this->db->limit(3);
       $query=$this->db->get('tbl_services');
       if($query->num_rows()>0)
       {
           return $query->result();
       }
       else{
           return FALSE;
       }    
    }
public function news_event_display(){
        $this->db->order_by('id','desc');
        $query=$this->db->get('tbl_services');
       if($query->num_rows()>0)
       {
           return $query->result();
       }
       else{
           return FALSE;
       }    
    }
public function about_us()
{
      
       $this->db->where('id',4);
       $query=$this->db->get('tbl_frontpage');
       if($query->num_rows()>0)
       {
           return $query->result();
       }
       else{
           return FALSE;
       } 
}
public function gallery()
   {
       $query=$this->db->get('tbl_gallery');
       if($query->num_rows()>0)
       {
           return $query->result();
       }
       else{
           return FALSE;
       }   
    }
public function main_page($id){
    $this->db->where('cat_id',$id);
      $query=$this->db->get('tbl_categories');
       if($query->num_rows()>0)
       {
           return $query->result();
       }
       else{
           return FALSE;
       }
}
public function sub_page($id)
{
    $this->db->where('id',$id);
      $query=$this->db->get('tbl_item_type');
       if($query->num_rows()>0)
       {
           return $query->result();
       }
       else{
           return FALSE;
       }   
}
public function product($id)
{
  $this->db->where('id',$id);
      $query=$this->db->get('tbl_clients');
       if($query->num_rows()>0)
       {
           return $query->result();
       }
       else{
           return FALSE;
       }   
}
    
    function delete($id){
     $this->db->where("id", $id);
     $this->db->delete("tbl_clients");
    }
}