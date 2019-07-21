<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashpage extends CI_Controller {
  public function __construct(){
    parent::__construct();
    $this->load->helper('url');
  }

  public function index(){
    $data['title_bar'] = "Dashboard | Cloud Inovasi";
    $data['header_page'] = "";
    $data['sub_header_page'] = "Dashboard";  
    $this->load->view('dashboard/dashheader', $data);
    $this->load->view('dashboard/dashnavbar', $data);
    $this->load->view('dashboard/dashcontent_dash', $data);
    $this->load->view('dashboard/dashfooter', $data);
  }

  public function catalog(){
    $data['title_bar'] = "Catalog | Cloud Inovasi";
    $data['header_page'] = "";
    $data['sub_header_page'] = "Catalog";  
    $this->load->view('dashboard/dashheader', $data);
    $this->load->view('dashboard/dashnavbar', $data);
    $this->load->view('dashboard/dashcontent_catalog', $data);
    $this->load->view('dashboard/dashfooter', $data);
  }
  
  public function service(){
    $data['title_bar'] = "Service | Cloud Inovasi";
    $data['header_page'] = "";
    $data['sub_header_page'] = "Other Service";  
    $this->load->view('dashboard/dashheader', $data);
    $this->load->view('dashboard/dashnavbar', $data);
    $this->load->view('dashboard/dashcontent_serv', $data);
    $this->load->view('dashboard/dashfooter', $data);
  }

  public function billing(){
    $data['title_bar'] = "Billing | Cloud Inovasi";
    $data['header_page'] = "";
    $data['sub_header_page'] = "Billing";  
    $this->load->view('dashboard/dashheader', $data);
    $this->load->view('dashboard/dashnavbar', $data);
    $this->load->view('dashboard/dashcontent_bill', $data);
    $this->load->view('dashboard/dashfooter', $data);
  }

  public function support(){
    $data['title_bar'] = "Support | Cloud Inovasi";
    $data['header_page'] = "";
    $data['sub_header_page'] = "Support";  
    $this->load->view('dashboard/dashheader', $data);
    $this->load->view('dashboard/dashnavbar', $data);
    $this->load->view('dashboard/dashcontent_support', $data);
    $this->load->view('dashboard/dashfooter', $data);
  }

 
}

?>