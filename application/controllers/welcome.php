<?php
class Welcome extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('client_model');
       
    }
 public function index()
 {
   $data['logo']=$this->client_model->display_logo_image();
    $data['menu']=$this->client_model->display_menu();
   $data['sub_menu']=$this->client_model->sub_menu();
   $data['welcome']=$this->client_model->wel_msg();
   $data['banner_image']=$this->client_model->banner_image();
   $data['news_event']=$this->client_model->news_event();
   $this->load->view('user/include/header',$data); 
   $this->load->view('user/include/mid_banner',$data);
   $this->load->view('user/body',$data);
   $this->load->view('user/include/footer');
 }
 public function mission(){
   $data['menu']=$this->client_model->display_menu();
   $data['sub_menu']=$this->client_model->sub_menu();
   $data['banner_image']=$this->client_model->banner_image();
   $data['mission_vision']=$this->client_model->midFooter();
    $this->load->view('user/include/header',$data); 
   $this->load->view('user/include/mid_banner',$data);
   $this->load->view('user/about_us');
   $this->load->view('user/include/footer');
 }
  public function vision(){
   $data['menu']=$this->client_model->display_menu();
   $data['sub_menu']=$this->client_model->sub_menu();
   $data['banner_image']=$this->client_model->banner_image();
   $data['mission_vision']=$this->client_model->rightFooter();
    $this->load->view('user/include/header',$data); 
   $this->load->view('user/include/mid_banner',$data);
   $this->load->view('user/about_us');
   $this->load->view('user/include/footer');
 }
   public function objectives(){
   $data['menu']=$this->client_model->display_menu();
   $data['sub_menu']=$this->client_model->sub_menu();
   $data['banner_image']=$this->client_model->banner_image();
   $data['mission_vision']=$this->client_model->objectives();
    $this->load->view('user/include/header',$data); 
   $this->load->view('user/include/mid_banner',$data);
   $this->load->view('user/about_us');
   $this->load->view('user/include/footer');
 }
 /** public function aboutus()
 {
     $data['logo']=$this->client_model->display_logo_image();
     $data['menu']=$this->client_model->display_menu();
     $data['sub_menu']=$this->client_model->sub_menu();
     $data['banner_image']=$this->client_model->banner_image();
     $data['client']=$this->client_model->clients();
     $data['news_event']=$this->client_model->news_event();
     $data['aboutus']=$this->client_model->about_us();
     $data['midfooter']=$this->client_model->midFooter();
    $data['rightFooter']=$this->client_model->rightFooter();
     $this->load->view('user/include/header',$data);
     $this->load->view('user/include/mid_banner',$data);
      $this->load->view('user/about_us',$data);
     $this->load->view('user/include/footer',$data);
 }
 **/
 
 public function main_pages($id)
 {   $data['logo']=$this->client_model->display_logo_image();
     $data['menu']=$this->client_model->display_menu();
     $data['sub_menu']=$this->client_model->sub_menu();
     $data['banner_image']=$this->client_model->banner_image();
     $data['client']=$this->client_model->clients();
     $data['demand']=$this->client_model->demands();
     $data['news_event']=$this->client_model->news_event();
     $data['main_page']=$this->client_model->main_page($id);
     $data['midfooter']=$this->client_model->midFooter();
    $data['rightFooter']=$this->client_model->rightFooter();
     $this->load->view('user/include/header',$data);
     $this->load->view('user/include/mid_banner',$data);
     $this->load->view('user/main_page',$data);
     $this->load->view('user/include/footer',$data);
 }
 public function  subpage($id)
 {  $data['logo']=$this->client_model->display_logo_image();
    $data['menu']=$this->client_model->display_menu();
     $data['sub_menu']=$this->client_model->sub_menu();
     $data['banner_image']=$this->client_model->banner_image();
     $data['client']=$this->client_model->clients();
     $data['demand']=$this->client_model->demands();
     $data['news_event']=$this->client_model->news_event();
     $data['sub_page']=$this->client_model->sub_page($id);
     $this->load->view('user/include/header',$data);
     $this->load->view('user/include/mid_banner',$data);
     $this->load->view('user/sub_page',$data);
     $this->load->view('user/include/footer',$data);
 }
  public function gallery(){
    $data['logo']=$this->client_model->display_logo_image();
     $data['menu']=$this->client_model->display_menu();
     $data['sub_menu']=$this->client_model->sub_menu();
        $data['midfooter']=$this->client_model->midFooter();
    $data['rightFooter']=$this->client_model->rightFooter();
     //$data['banner_image']=$this->client_model->banner_image();
    // $data['client']=$this->client_model->clients();
    // $data['demand']=$this->client_model->demands();
     $data['gallery']=$this->client_model->gallery();
     $this->load->view('user/include/header',$data);
      $this->load->view('user/gallery',$data);
     $this->load->view('user/include/footer',$data);  
 }
 public function our_team()
 {
   $data['menu']=$this->client_model->display_menu();
   $data['sub_menu']=$this->client_model->sub_menu();
   $data['banner_image']=$this->client_model->banner_image();
   $data['mission_vision']=$this->client_model->rightFooter();
   $data['client']=$this->client_model->clients();
    $this->load->view('user/include/header',$data); 
   $this->load->view('user/include/mid_banner',$data);
   $this->load->view('user/member.php');
   $this->load->view('user/include/footer');
    
 }
 
 
  public function newsevent($id)
 {
     $data['logo']=$this->client_model->display_logo_image();
     $data['menu']=$this->client_model->display_menu();
     $data['sub_menu']=$this->client_model->sub_menu();
     $data['banner_image']=$this->client_model->banner_image();
     $data['client']=$this->client_model->clients();
     $data['demand']=$this->client_model->demands();
     $data['news_event']=$this->client_model->news_event();
     $data['news']=$this->client_model->news_event_display($id);
     $this->load->view('user/include/header',$data);
     $this->load->view('user/include/mid_banner',$data);
     $this->load->view('user/news_event',$data);
     $this->load->view('user/include/footer',$data);
 }
  public function products($id)
 {
     $data['logo']=$this->client_model->display_logo_image();
     $data['menu']=$this->client_model->display_menu();
     $data['sub_menu']=$this->client_model->sub_menu();
     $data['banner_image']=$this->client_model->banner_image();
     $data['client']=$this->client_model->clients();
     $data['demand']=$this->client_model->demands();
     $data['news_event']=$this->client_model->news_event();
      $data['products']=$this->client_model->product($id);
     //$data['news']=$this->client_model->news_event_display($id);
        $data['midfooter']=$this->client_model->midFooter();
    $data['rightFooter']=$this->client_model->rightFooter();
     $this->load->view('user/include/header',$data);
     $this->load->view('user/include/mid_banner',$data);
     $this->load->view('user/products',$data);
     $this->load->view('user/include/footer',$data);
 }

}