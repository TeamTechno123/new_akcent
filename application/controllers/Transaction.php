<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaction extends CI_Controller{
  public function __construct(){
    parent::__construct();
    date_default_timezone_set('Asia/Kolkata');
  }

  public function amc_contract(){
    // $col_user_id = $this->session->userdata('col_user_id');
    // $col_company_id = $this->session->userdata('col_company_id');
    // $col_role_id = $this->session->userdata('col_role_id');
    // if($col_user_id == '' && $col_company_id == ''){ header('location:'.base_url().'User'); }

    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('Transaction/amc_contract');
    $this->load->view('Include/footer');
  }

  // Edit/Update Batch...
  public function edit_amc_contract($amc_contract_id){
    $col_user_id = $this->session->userdata('col_user_id');
    $col_company_id = $this->session->userdata('col_company_id');
    $col_role_id = $this->session->userdata('col_role_id');
    if($col_user_id == '' && $col_company_id == ''){ header('location:'.base_url().'User'); }

    $this->form_validation->set_rules('amc_contract_name', 'First Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
      $amc_contract_status = $this->input->post('amc_contract_status');
      if(!isset($amc_contract_status)){ $amc_contract_status = '1'; }
      $update_data = $_POST;
      $update_data['amc_contract_status'] = $amc_contract_status;
      $update_data['amc_contract_addedby'] = $col_user_id;
      $update_data['amc_contract_date'] = date('d-m-Y');
      $update_data['amc_contract_time'] = date('h:i:s A');
      $this->Master_Model->update_info('amc_contract_id', $amc_contract_id, 'amc_contract', $update_data);

      $this->session->set_flashdata('update_success','success');
      header('location:'.base_url().'Transaction/amc_contract');
    }

    $amc_contract_info = $this->Master_Model->get_info_arr('amc_contract_id',$amc_contract_id,'amc_contract');
    if(!$amc_contract_info){ header('location:'.base_url().'Transaction/amc_contract'); }
    $data['update'] = 'update';
    $data['update_amc_contract'] = 'update';
    $data['amc_contract_info'] = $amc_contract_info[0];
    $data['act_link'] = base_url().'Master/edit_amc_contract/'.$amc_contract_id;

    $data['amc_contract_list'] = $this->Master_Model->get_list_by_id3($col_company_id,'','','','','','','amc_contract_id','DESC','amc_contract');
    $this->load->view('Include/head', $data);
    $this->load->view('Include/navbar', $data);
    $this->load->view('Transaction/amc_contract', $data);
    $this->load->view('Include/footer', $data);
  }

  //Delete Batch...
  public function delete_amc_contract($amc_contract_id){
    $col_user_id = $this->session->userdata('col_user_id');
    $col_company_id = $this->session->userdata('col_company_id');
    $col_role_id = $this->session->userdata('col_role_id');
    if($col_user_id == '' && $col_company_id == ''){ header('location:'.base_url().'User'); }
    $this->Master_Model->delete_info('amc_contract_id', $amc_contract_id, 'amc_contract');
    $this->session->set_flashdata('delete_success','success');
    header('location:'.base_url().'Transaction/amc_contract');
  }






}
