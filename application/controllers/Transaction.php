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


  public function machine_details(){
    // $col_user_id = $this->session->userdata('col_user_id');
    // $col_company_id = $this->session->userdata('col_company_id');
    // $col_role_id = $this->session->userdata('col_role_id');
    // if($col_user_id == '' && $col_company_id == ''){ header('location:'.base_url().'User'); }

    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('Transaction/machine_details');
    $this->load->view('Include/footer');
  }

  // Edit/Update Batch...
  public function edit_machine_details($machine_details_id){
    $col_user_id = $this->session->userdata('col_user_id');
    $col_company_id = $this->session->userdata('col_company_id');
    $col_role_id = $this->session->userdata('col_role_id');
    if($col_user_id == '' && $col_company_id == ''){ header('location:'.base_url().'User'); }

    $this->form_validation->set_rules('machine_details_name', 'First Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
      $machine_details_status = $this->input->post('machine_details_status');
      if(!isset($machine_details_status)){ $machine_details_status = '1'; }
      $update_data = $_POST;
      $update_data['machine_details_status'] = $machine_details_status;
      $update_data['machine_details_addedby'] = $col_user_id;
      $update_data['machine_details_date'] = date('d-m-Y');
      $update_data['machine_details_time'] = date('h:i:s A');
      $this->Master_Model->update_info('machine_details_id', $machine_details_id, 'machine_details', $update_data);

      $this->session->set_flashdata('update_success','success');
      header('location:'.base_url().'Transaction/machine_details');
    }

    $machine_details_info = $this->Master_Model->get_info_arr('machine_details_id',$machine_details_id,'machine_details');
    if(!$machine_details_info){ header('location:'.base_url().'Transaction/machine_details'); }
    $data['update'] = 'update';
    $data['update_machine_details'] = 'update';
    $data['machine_details_info'] = $machine_details_info[0];
    $data['act_link'] = base_url().'Master/edit_machine_details/'.$machine_details_id;

    $data['machine_details_list'] = $this->Master_Model->get_list_by_id3($col_company_id,'','','','','','','machine_details_id','DESC','machine_details');
    $this->load->view('Include/head', $data);
    $this->load->view('Include/navbar', $data);
    $this->load->view('Transaction/machine_details', $data);
    $this->load->view('Include/footer', $data);
  }

  //Delete Batch...
  public function delete_machine_details($machine_details_id){
    $col_user_id = $this->session->userdata('col_user_id');
    $col_company_id = $this->session->userdata('col_company_id');
    $col_role_id = $this->session->userdata('col_role_id');
    if($col_user_id == '' && $col_company_id == ''){ header('location:'.base_url().'User'); }
    $this->Master_Model->delete_info('machine_details_id', $machine_details_id, 'machine_details');
    $this->session->set_flashdata('delete_success','success');
    header('location:'.base_url().'Transaction/machine_details');
  }


  public function partywise_info(){
    // $col_user_id = $this->session->userdata('col_user_id');
    // $col_company_id = $this->session->userdata('col_company_id');
    // $col_role_id = $this->session->userdata('col_role_id');
    // if($col_user_id == '' && $col_company_id == ''){ header('location:'.base_url().'User'); }

    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('Transaction/partywise_info');
    $this->load->view('Include/footer');
  }

  // Edit/Update Batch...
  public function edit_partywise_info($partywise_info_id){
    $col_user_id = $this->session->userdata('col_user_id');
    $col_company_id = $this->session->userdata('col_company_id');
    $col_role_id = $this->session->userdata('col_role_id');
    if($col_user_id == '' && $col_company_id == ''){ header('location:'.base_url().'User'); }

    $this->form_validation->set_rules('partywise_info_name', 'First Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
      $partywise_info_status = $this->input->post('partywise_info_status');
      if(!isset($partywise_info_status)){ $partywise_info_status = '1'; }
      $update_data = $_POST;
      $update_data['partywise_info_status'] = $partywise_info_status;
      $update_data['partywise_info_addedby'] = $col_user_id;
      $update_data['partywise_info_date'] = date('d-m-Y');
      $update_data['partywise_info_time'] = date('h:i:s A');
      $this->Master_Model->update_info('partywise_info_id', $partywise_info_id, 'partywise_info', $update_data);

      $this->session->set_flashdata('update_success','success');
      header('location:'.base_url().'Transaction/partywise_info');
    }

    $partywise_info = $this->Master_Model->get_info_arr('partywise_info_id',$partywise_info_id,'partywise_info');
    if(!$partywise_info){ header('location:'.base_url().'Transaction/partywise_info'); }
    $data['update'] = 'update';
    $data['update_partywise_info'] = 'update';
    $data['partywise_info'] = $partywise_info[0];
    $data['act_link'] = base_url().'Master/edit_partywise_info/'.$partywise_info_id;

    $data['partywise_info_list'] = $this->Master_Model->get_list_by_id3($col_company_id,'','','','','','','partywise_info_id','DESC','partywise_info');
    $this->load->view('Include/head', $data);
    $this->load->view('Include/navbar', $data);
    $this->load->view('Transaction/partywise_info', $data);
    $this->load->view('Include/footer', $data);
  }

  //Delete Batch...
  public function delete_partywise_info($partywise_info_id){
    $col_user_id = $this->session->userdata('col_user_id');
    $col_company_id = $this->session->userdata('col_company_id');
    $col_role_id = $this->session->userdata('col_role_id');
    if($col_user_id == '' && $col_company_id == ''){ header('location:'.base_url().'User'); }
    $this->Master_Model->delete_info('partywise_info_id', $partywise_info_id, 'partywise_info');
    $this->session->set_flashdata('delete_success','success');
    header('location:'.base_url().'Transaction/partywise_info');
  }



  public function ticket(){
    // $col_user_id = $this->session->userdata('col_user_id');
    // $col_company_id = $this->session->userdata('col_company_id');
    // $col_role_id = $this->session->userdata('col_role_id');
    // if($col_user_id == '' && $col_company_id == ''){ header('location:'.base_url().'User'); }

    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('Transaction/ticket');
    $this->load->view('Include/footer');
  }

  // Edit/Update Batch...
  public function edit_ticket($ticket_id){
    $col_user_id = $this->session->userdata('col_user_id');
    $col_company_id = $this->session->userdata('col_company_id');
    $col_role_id = $this->session->userdata('col_role_id');
    if($col_user_id == '' && $col_company_id == ''){ header('location:'.base_url().'User'); }

    $this->form_validation->set_rules('ticket_name', 'First Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
      $ticket_status = $this->input->post('ticket_status');
      if(!isset($ticket_status)){ $ticket_status = '1'; }
      $update_data = $_POST;
      $update_data['ticket_status'] = $ticket_status;
      $update_data['ticket_addedby'] = $col_user_id;
      $update_data['ticket_date'] = date('d-m-Y');
      $update_data['ticket_time'] = date('h:i:s A');
      $this->Master_Model->update_info('ticket_id', $ticket_id, 'ticket', $update_data);

      $this->session->set_flashdata('update_success','success');
      header('location:'.base_url().'Transaction/ticket');
    }

    $ticket = $this->Master_Model->get_info_arr('ticket_id',$ticket_id,'ticket');
    if(!$ticket){ header('location:'.base_url().'Transaction/ticket'); }
    $data['update'] = 'update';
    $data['update_ticket'] = 'update';
    $data['ticket'] = $ticket[0];
    $data['act_link'] = base_url().'Master/edit_ticket/'.$ticket_id;

    $data['ticket_list'] = $this->Master_Model->get_list_by_id3($col_company_id,'','','','','','','ticket_id','DESC','ticket');
    $this->load->view('Include/head', $data);
    $this->load->view('Include/navbar', $data);
    $this->load->view('Transaction/ticket', $data);
    $this->load->view('Include/footer', $data);
  }

  //Delete Batch...
  public function delete_ticket($ticket_id){
    $col_user_id = $this->session->userdata('col_user_id');
    $col_company_id = $this->session->userdata('col_company_id');
    $col_role_id = $this->session->userdata('col_role_id');
    if($col_user_id == '' && $col_company_id == ''){ header('location:'.base_url().'User'); }
    $this->Master_Model->delete_info('ticket_id', $ticket_id, 'ticket');
    $this->session->set_flashdata('delete_success','success');
    header('location:'.base_url().'Transaction/ticket');
  }


  public function call_visit(){
    // $col_user_id = $this->session->userdata('col_user_id');
    // $col_company_id = $this->session->userdata('col_company_id');
    // $col_role_id = $this->session->userdata('col_role_id');
    // if($col_user_id == '' && $col_company_id == ''){ header('location:'.base_url().'User'); }

    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('Transaction/call_visit');
    $this->load->view('Include/footer');
  }

  // Edit/Update Batch...
  public function edit_call_visit($call_visit_id){
    $col_user_id = $this->session->userdata('col_user_id');
    $col_company_id = $this->session->userdata('col_company_id');
    $col_role_id = $this->session->userdata('col_role_id');
    if($col_user_id == '' && $col_company_id == ''){ header('location:'.base_url().'User'); }

    $this->form_validation->set_rules('call_visit_name', 'First Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
      $call_visit_status = $this->input->post('call_visit_status');
      if(!isset($call_visit_status)){ $call_visit_status = '1'; }
      $update_data = $_POST;
      $update_data['call_visit_status'] = $call_visit_status;
      $update_data['call_visit_addedby'] = $col_user_id;
      $update_data['call_visit_date'] = date('d-m-Y');
      $update_data['call_visit_time'] = date('h:i:s A');
      $this->Master_Model->update_info('call_visit_id', $call_visit_id, 'call_visit', $update_data);

      $this->session->set_flashdata('update_success','success');
      header('location:'.base_url().'Transaction/call_visit');
    }

    $call_visit = $this->Master_Model->get_info_arr('call_visit_id',$call_visit_id,'call_visit');
    if(!$call_visit){ header('location:'.base_url().'Transaction/call_visit'); }
    $data['update'] = 'update';
    $data['update_call_visit'] = 'update';
    $data['call_visit'] = $call_visit[0];
    $data['act_link'] = base_url().'Master/edit_call_visit/'.$call_visit_id;

    $data['call_visit_list'] = $this->Master_Model->get_list_by_id3($col_company_id,'','','','','','','call_visit_id','DESC','call_visit');
    $this->load->view('Include/head', $data);
    $this->load->view('Include/navbar', $data);
    $this->load->view('Transaction/call_visit', $data);
    $this->load->view('Include/footer', $data);
  }

  //Delete Batch...
  public function delete_call_visit($call_visit_id){
    $col_user_id = $this->session->userdata('col_user_id');
    $col_company_id = $this->session->userdata('col_company_id');
    $col_role_id = $this->session->userdata('col_role_id');
    if($col_user_id == '' && $col_company_id == ''){ header('location:'.base_url().'User'); }
    $this->Master_Model->delete_info('call_visit_id', $call_visit_id, 'call_visit');
    $this->session->set_flashdata('delete_success','success');
    header('location:'.base_url().'Transaction/call_visit');
  }



  public function sale_invoice(){
    // $col_user_id = $this->session->userdata('col_user_id');
    // $col_company_id = $this->session->userdata('col_company_id');
    // $col_role_id = $this->session->userdata('col_role_id');
    // if($col_user_id == '' && $col_company_id == ''){ header('location:'.base_url().'User'); }

    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('Transaction/sale_invoice');
    $this->load->view('Include/footer');
  }

  // Edit/Update Batch...
  public function edit_sale_invoice($sale_invoice_id){
    $col_user_id = $this->session->userdata('col_user_id');
    $col_company_id = $this->session->userdata('col_company_id');
    $col_role_id = $this->session->userdata('col_role_id');
    if($col_user_id == '' && $col_company_id == ''){ header('location:'.base_url().'User'); }

    $this->form_validation->set_rules('sale_invoice_name', 'First Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
      $sale_invoice_status = $this->input->post('sale_invoice_status');
      if(!isset($sale_invoice_status)){ $sale_invoice_status = '1'; }
      $update_data = $_POST;
      $update_data['sale_invoice_status'] = $sale_invoice_status;
      $update_data['sale_invoice_addedby'] = $col_user_id;
      $update_data['sale_invoice_date'] = date('d-m-Y');
      $update_data['sale_invoice_time'] = date('h:i:s A');
      $this->Master_Model->update_info('sale_invoice_id', $sale_invoice_id, 'sale_invoice', $update_data);

      $this->session->set_flashdata('update_success','success');
      header('location:'.base_url().'Transaction/sale_invoice');
    }

    $sale_invoice = $this->Master_Model->get_info_arr('sale_invoice_id',$sale_invoice_id,'sale_invoice');
    if(!$sale_invoice){ header('location:'.base_url().'Transaction/sale_invoice'); }
    $data['update'] = 'update';
    $data['update_sale_invoice'] = 'update';
    $data['sale_invoice'] = $sale_invoice[0];
    $data['act_link'] = base_url().'Master/edit_sale_invoice/'.$sale_invoice_id;

    $data['sale_invoice_list'] = $this->Master_Model->get_list_by_id3($col_company_id,'','','','','','','sale_invoice_id','DESC','sale_invoice');
    $this->load->view('Include/head', $data);
    $this->load->view('Include/navbar', $data);
    $this->load->view('Transaction/sale_invoice', $data);
    $this->load->view('Include/footer', $data);
  }

  //Delete Batch...
  public function delete_sale_invoice($sale_invoice_id){
    $col_user_id = $this->session->userdata('col_user_id');
    $col_company_id = $this->session->userdata('col_company_id');
    $col_role_id = $this->session->userdata('col_role_id');
    if($col_user_id == '' && $col_company_id == ''){ header('location:'.base_url().'User'); }
    $this->Master_Model->delete_info('sale_invoice_id', $sale_invoice_id, 'sale_invoice');
    $this->session->set_flashdata('delete_success','success');
    header('location:'.base_url().'Transaction/sale_invoice');
  }

  public function receipt(){
    // $col_user_id = $this->session->userdata('col_user_id');
    // $col_company_id = $this->session->userdata('col_company_id');
    // $col_role_id = $this->session->userdata('col_role_id');
    // if($col_user_id == '' && $col_company_id == ''){ header('location:'.base_url().'User'); }

    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('Transaction/receipt');
    $this->load->view('Include/footer');
  }

  // Edit/Update Batch...
  public function edit_receipt($receipt_id){
    $col_user_id = $this->session->userdata('col_user_id');
    $col_company_id = $this->session->userdata('col_company_id');
    $col_role_id = $this->session->userdata('col_role_id');
    if($col_user_id == '' && $col_company_id == ''){ header('location:'.base_url().'User'); }

    $this->form_validation->set_rules('receipt_name', 'First Name', 'trim|required');
    if ($this->form_validation->run() != FALSE) {
      $receipt_status = $this->input->post('receipt_status');
      if(!isset($receipt_status)){ $receipt_status = '1'; }
      $update_data = $_POST;
      $update_data['receipt_status'] = $receipt_status;
      $update_data['receipt_addedby'] = $col_user_id;
      $update_data['receipt_date'] = date('d-m-Y');
      $update_data['receipt_time'] = date('h:i:s A');
      $this->Master_Model->update_info('receipt_id', $receipt_id, 'receipt', $update_data);

      $this->session->set_flashdata('update_success','success');
      header('location:'.base_url().'Transaction/receipt');
    }

    $receipt = $this->Master_Model->get_info_arr('receipt_id',$receipt_id,'receipt');
    if(!$receipt){ header('location:'.base_url().'Transaction/receipt'); }
    $data['update'] = 'update';
    $data['update_receipt'] = 'update';
    $data['receipt'] = $receipt[0];
    $data['act_link'] = base_url().'Master/edit_receipt/'.$receipt_id;

    $data['receipt_list'] = $this->Master_Model->get_list_by_id3($col_company_id,'','','','','','','receipt_id','DESC','receipt');
    $this->load->view('Include/head', $data);
    $this->load->view('Include/navbar', $data);
    $this->load->view('Transaction/receipt', $data);
    $this->load->view('Include/footer', $data);
  }

  //Delete Batch...
  public function delete_receipt($receipt_id){
    $col_user_id = $this->session->userdata('col_user_id');
    $col_company_id = $this->session->userdata('col_company_id');
    $col_role_id = $this->session->userdata('col_role_id');
    if($col_user_id == '' && $col_company_id == ''){ header('location:'.base_url().'User'); }
    $this->Master_Model->delete_info('receipt_id', $receipt_id, 'receipt');
    $this->session->set_flashdata('delete_success','success');
    header('location:'.base_url().'Transaction/receipt');
  }






}
