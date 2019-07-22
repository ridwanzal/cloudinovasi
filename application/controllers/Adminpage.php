<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminpage extends CI_Controller {
  public function __construct(){
    parent::__construct();
    $this->load->helper('url');
  }

  public function index(){
    $data['title_bar'] = "Admin |  Admin - Cloud Inovasi";
    $data['header_page'] = "";
    $data['sub_header_page'] = "Dashboard Admin";  
    $this->load->view('admin/adminheader', $data);
    $this->load->view('admin/adminnavbar', $data);
    $this->load->view('admin/admincontent_dash', $data);
    $this->load->view('admin/adminfooter', $data);
  }


  public function users(){
    $data['title_bar'] = "User Management | Admin - Cloud Inovasi";
    $data['header_page'] = "";
    $data['sub_header_page'] = "User Management Admin";  
    $this->load->view('admin/adminheader', $data);
    $this->load->view('admin/adminnavbar', $data);
    $this->load->view('admin/admincontent_users', $data);
    $this->load->view('admin/adminfooter', $data);
  }

  public function catalog(){
    $data['title_bar'] = "Block Storage Settings | Admin - Cloud Inovasi";
    $data['header_page'] = "";
    $data['sub_header_page'] = "Block Storage Settings";  
    $this->load->view('admin/adminheader', $data);
    $this->load->view('admin/adminnavbar', $data);
    $this->load->view('admin/admincontent_catalog', $data);
    $this->load->view('admin/adminfooter', $data);
  }

  public function support(){
    $data['title_bar'] = "Supports | Admin - Cloud Inovasi";
    $data['header_page'] = "";
    $data['sub_header_page'] = "Supports";  
    $this->load->view('admin/adminheader', $data);
    $this->load->view('admin/adminnavbar', $data);
    $this->load->view('admin/admincontent_support', $data);
    $this->load->view('admin/adminfooter', $data);
  }

 
}

?>