<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller{
  public function __construct(){
    parent::__construct();
    date_default_timezone_set('Asia/Kolkata');
  }

  public function party_info_report(){
    // $col_user_id = $this->session->userdata('col_user_id');
    // $col_company_id = $this->session->userdata('col_company_id');
    // $col_role_id = $this->session->userdata('col_role_id');
    // if($col_user_id == '' && $col_company_id == ''){ header('location:'.base_url().'User'); }
    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('Report/party_info_report');
    $this->load->view('Include/footer');
  }


  public function item_company_report(){
    // $col_user_id = $this->session->userdata('col_user_id');
    // $col_company_id = $this->session->userdata('col_company_id');
    // $col_role_id = $this->session->userdata('col_role_id');
    // if($col_user_id == '' && $col_company_id == ''){ header('location:'.base_url().'User'); }
    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('Report/item_company_report');
    $this->load->view('Include/footer');
  }

  public function equipment_type_report(){
    // $col_user_id = $this->session->userdata('col_user_id');
    // $col_company_id = $this->session->userdata('col_company_id');
    // $col_role_id = $this->session->userdata('col_role_id');
    // if($col_user_id == '' && $col_company_id == ''){ header('location:'.base_url().'User'); }
    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('Report/equipment_type_report');
    $this->load->view('Include/footer');
  }


  public function item_info_report(){
    // $col_user_id = $this->session->userdata('col_user_id');
    // $col_company_id = $this->session->userdata('col_company_id');
    // $col_role_id = $this->session->userdata('col_role_id');
    // if($col_user_id == '' && $col_company_id == ''){ header('location:'.base_url().'User'); }
    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('Report/item_info_report');
    $this->load->view('Include/footer');
  }


  public function problem_info_report(){
    // $col_user_id = $this->session->userdata('col_user_id');
    // $col_company_id = $this->session->userdata('col_company_id');
    // $col_role_id = $this->session->userdata('col_role_id');
    // if($col_user_id == '' && $col_company_id == ''){ header('location:'.base_url().'User'); }
    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('Report/problem_info_report');
    $this->load->view('Include/footer');
  }

  public function rectification_report(){
    // $col_user_id = $this->session->userdata('col_user_id');
    // $col_company_id = $this->session->userdata('col_company_id');
    // $col_role_id = $this->session->userdata('col_role_id');
    // if($col_user_id == '' && $col_company_id == ''){ header('location:'.base_url().'User'); }
    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('Report/rectification_report');
    $this->load->view('Include/footer');
  }

  public function amc_contract_report(){
    // $col_user_id = $this->session->userdata('col_user_id');
    // $col_company_id = $this->session->userdata('col_company_id');
    // $col_role_id = $this->session->userdata('col_role_id');
    // if($col_user_id == '' && $col_company_id == ''){ header('location:'.base_url().'User'); }
    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('Report/amc_contract_report');
    $this->load->view('Include/footer');
  }

  public function machine_report(){
    // $col_user_id = $this->session->userdata('col_user_id');
    // $col_company_id = $this->session->userdata('col_company_id');
    // $col_role_id = $this->session->userdata('col_role_id');
    // if($col_user_id == '' && $col_company_id == ''){ header('location:'.base_url().'User'); }
    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('Report/machine_report');
    $this->load->view('Include/footer');
  }

  public function partywise_report(){
    // $col_user_id = $this->session->userdata('col_user_id');
    // $col_company_id = $this->session->userdata('col_company_id');
    // $col_role_id = $this->session->userdata('col_role_id');
    // if($col_user_id == '' && $col_company_id == ''){ header('location:'.base_url().'User'); }
    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('Report/partywise_report');
    $this->load->view('Include/footer');
  }

  public function ticket_report(){
    // $col_user_id = $this->session->userdata('col_user_id');
    // $col_company_id = $this->session->userdata('col_company_id');
    // $col_role_id = $this->session->userdata('col_role_id');
    // if($col_user_id == '' && $col_company_id == ''){ header('location:'.base_url().'User'); }
    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('Report/ticket_report');
    $this->load->view('Include/footer');
  }

  public function call_visit_report(){
    // $col_user_id = $this->session->userdata('col_user_id');
    // $col_company_id = $this->session->userdata('col_company_id');
    // $col_role_id = $this->session->userdata('col_role_id');
    // if($col_user_id == '' && $col_company_id == ''){ header('location:'.base_url().'User'); }
    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('Report/call_visit_report');
    $this->load->view('Include/footer');
  }


  public function sale_report(){
    // $col_user_id = $this->session->userdata('col_user_id');
    // $col_company_id = $this->session->userdata('col_company_id');
    // $col_role_id = $this->session->userdata('col_role_id');
    // if($col_user_id == '' && $col_company_id == ''){ header('location:'.base_url().'User'); }
    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('Report/sale_report');
    $this->load->view('Include/footer');
  }

  public function receipt_report(){
    // $col_user_id = $this->session->userdata('col_user_id');
    // $col_company_id = $this->session->userdata('col_company_id');
    // $col_role_id = $this->session->userdata('col_role_id');
    // if($col_user_id == '' && $col_company_id == ''){ header('location:'.base_url().'User'); }
    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('Report/receipt_report');
    $this->load->view('Include/footer');
  }

}
