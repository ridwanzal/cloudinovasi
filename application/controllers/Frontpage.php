<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontpage extends CI_Controller {
  public function __construct(){
    parent::__construct();
    $this->load->helper('url');
  }

  public function index(){
    $data['title_bar'] = "Cloud Inovasi";
    $data['header_page'] = "";
    $data['sub_header_page'] = "";
    $this->load->view('landing/landheader', $data );
    $this->load->view('landing/landnavbar', $data );
    $this->load->view('landing/landcontent', $data);
    $this->load->view('landing/landfooter', $data);
  }

  public function login(){
    $data['title_bar'] = "Login | Cloud Inovasi";
    $data['header_page'] = "";
    $data['sub_header_page'] = "";
    $this->load->view('landing/landheader', $data );
    $this->load->view('landing/landnavbar', $data );
    $this->load->view('landing/landlogin', $data);
    $this->load->view('landing/landfooter', $data);
  }

  public function plans(){
    $data['title_bar'] = "Plans | Cloud Inovasi";
    $data['header_page'] = "";
    $data['sub_header_page'] = "Plans";
    $this->load->view('landing/landheader', $data );
    $this->load->view('landing/landnavbar', $data );
    $this->load->view('landing/landsubheader', $data );
    $this->load->view('landing/landplan', $data);
    $this->load->view('landing/landfooter', $data);
  }

  public function faq(){
    $data['title_bar'] = "FAQ | Cloud Inovasi";
    $data['header_page'] = "";
    $data['sub_header_page'] = "FAQ";
    $this->load->view('landing/landheader', $data );
    $this->load->view('landing/landnavbar', $data );
    $this->load->view('landing/landsubheader', $data );
    $this->load->view('landing/landfaq', $data);
    $this->load->view('landing/landfooter', $data);
  }

  public function partner(){
    $data['title_bar'] = "Partner | Cloud Inovasi";
    $data['header_page'] = "";
    $data['sub_header_page'] = "Partner";
    $this->load->view('landing/landheader', $data );
    $this->load->view('landing/landnavbar', $data );
    $this->load->view('landing/landsubheader', $data );
    $this->load->view('landing/landpartner', $data);
    $this->load->view('landing/landfooter', $data);
  }

  public function docs(){
    $data['title_bar'] = "Docs | Cloud Inovasi";
    $data['header_page'] = "";
    $data['sub_header_page'] = "Docs";
    $this->load->view('landing/landheader', $data );
    $this->load->view('landing/landnavbar', $data );
    $this->load->view('landing/landsubheader', $data );
    $this->load->view('landing/landplan', $data);
    $this->load->view('landing/landfooter', $data);
  }

  public function pricing(){
    $data['title_bar'] = "Pricing | Cloud Inovasi";
    $data['header_page'] = "";
    $data['sub_header_page'] = "Pricing";
    $this->load->view('landing/landheader', $data );
    $this->load->view('landing/landnavbar', $data );
    $this->load->view('landing/landsubheader', $data );
    $this->load->view('landing/landplan', $data);
    $this->load->view('landing/landfooter', $data);
  }

  public function blog(){
    $data['title_bar'] = "Blog | Cloud Inovasi";
    $data['header_page'] = "";
    $data['sub_header_page'] = "Blog";
    $this->load->view('landing/landheader', $data );
    $this->load->view('landing/landnavbar', $data );
    $this->load->view('landing/landsubheader', $data );
    $this->load->view('landing/landblog', $data);
    $this->load->view('landing/landfooter', $data);
  }

}

?>