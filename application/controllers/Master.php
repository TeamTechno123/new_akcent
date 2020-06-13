<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  class Master extends CI_Controller{
    public function __construct(){
      parent::__construct();
      date_default_timezone_set('Asia/Kolkata');
    }

    // public function index(){
    //     $coach_user_id = $this->session->userdata('coach_user_id');
    //     echo $coach_user_id;
    // }

    public function engineer(){
      // $col_user_id = $this->session->userdata('col_user_id');
      // $col_company_id = $this->session->userdata('col_company_id');
      // $col_role_id = $this->session->userdata('col_role_id');
      // if($col_user_id == '' && $col_company_id == ''){ header('location:'.base_url().'User'); }

      $this->load->view('Include/head');
      $this->load->view('Include/navbar');
      $this->load->view('Master/engineer');
      $this->load->view('Include/footer');
    }

    // Edit/Update Batch...
    public function edit_engineer($engineer_id){
      // $col_user_id = $this->session->userdata('col_user_id');
      // $col_company_id = $this->session->userdata('col_company_id');
      // $col_role_id = $this->session->userdata('col_role_id');
      // if($col_user_id == '' && $col_company_id == ''){ header('location:'.base_url().'User'); }

      $this->form_validation->set_rules('engineer_name', 'First Name', 'trim|required');
      if ($this->form_validation->run() != FALSE) {
        $engineer_status = $this->input->post('engineer_status');
        if(!isset($engineer_status)){ $engineer_status = '1'; }
        $update_data = $_POST;
        $update_data['engineer_status'] = $engineer_status;
        $update_data['engineer_addedby'] = $col_user_id;
        $update_data['engineer_date'] = date('d-m-Y');
        $update_data['engineer_time'] = date('h:i:s A');
        $this->Master_Model->update_info('engineer_id', $engineer_id, 'engineer', $update_data);

        $this->session->set_flashdata('update_success','success');
        header('location:'.base_url().'Master/engineer');
      }

      $engineer_info = $this->Master_Model->get_info_arr('engineer_id',$engineer_id,'engineer');
      if(!$engineer_info){ header('location:'.base_url().'Master/engineer'); }
      $data['update'] = 'update';
      $data['update_engineer'] = 'update';
      $data['engineer_info'] = $engineer_info[0];
      $data['act_link'] = base_url().'Master/edit_engineer/'.$engineer_id;

      $data['engineer_list'] = $this->Master_Model->get_list_by_id3($col_company_id,'','','','','','','engineer_id','DESC','engineer');
      $this->load->view('Include/head', $data);
      $this->load->view('Include/navbar', $data);
      $this->load->view('Master/engineer', $data);
      $this->load->view('Include/footer', $data);
    }

    //Delete Batch...
    public function delete_engineer($engineer_id){
      $col_user_id = $this->session->userdata('col_user_id');
      $col_company_id = $this->session->userdata('col_company_id');
      $col_role_id = $this->session->userdata('col_role_id');
      if($col_user_id == '' && $col_company_id == ''){ header('location:'.base_url().'User'); }
      $this->Master_Model->delete_info('engineer_id', $engineer_id, 'engineer');
      $this->session->set_flashdata('delete_success','success');
      header('location:'.base_url().'Master/engineer');
    }

    public function party_group(){
      // $col_user_id = $this->session->userdata('col_user_id');
      // $col_company_id = $this->session->userdata('col_company_id');
      // $col_role_id = $this->session->userdata('col_role_id');
      // if($col_user_id == '' && $col_company_id == ''){ header('location:'.base_url().'User'); }

      $this->load->view('Include/head');
      $this->load->view('Include/navbar');
      $this->load->view('Master/party_group');
      $this->load->view('Include/footer');
    }

    // Edit/Update Batch...
    public function edit_party_group($party_group_id){
      $col_user_id = $this->session->userdata('col_user_id');
      $col_company_id = $this->session->userdata('col_company_id');
      $col_role_id = $this->session->userdata('col_role_id');
      if($col_user_id == '' && $col_company_id == ''){ header('location:'.base_url().'User'); }

      $this->form_validation->set_rules('party_group_name', 'First Name', 'trim|required');
      if ($this->form_validation->run() != FALSE) {
        $party_group_status = $this->input->post('party_group_status');
        if(!isset($party_group_status)){ $party_group_status = '1'; }
        $update_data = $_POST;
        $update_data['party_group_status'] = $party_group_status;
        $update_data['party_group_addedby'] = $col_user_id;
        $update_data['party_group_date'] = date('d-m-Y');
        $update_data['party_group_time'] = date('h:i:s A');
        $this->Master_Model->update_info('party_group_id', $party_group_id, 'party_group', $update_data);

        $this->session->set_flashdata('update_success','success');
        header('location:'.base_url().'Master/party_group');
      }

      $party_group_info = $this->Master_Model->get_info_arr('party_group_id',$party_group_id,'party_group');
      if(!$party_group_info){ header('location:'.base_url().'Master/party_group'); }
      $data['update'] = 'update';
      $data['update_party_group'] = 'update';
      $data['party_group_info'] = $party_group_info[0];
      $data['act_link'] = base_url().'Master/edit_party_group/'.$party_group_id;

      $data['party_group_list'] = $this->Master_Model->get_list_by_id3($col_company_id,'','','','','','','party_group_id','DESC','party_group');
      $this->load->view('Include/head', $data);
      $this->load->view('Include/navbar', $data);
      $this->load->view('Master/party_group', $data);
      $this->load->view('Include/footer', $data);
    }

    //Delete Batch...
    public function delete_party_group($party_group_id){
      $col_user_id = $this->session->userdata('col_user_id');
      $col_company_id = $this->session->userdata('col_company_id');
      $col_role_id = $this->session->userdata('col_role_id');
      if($col_user_id == '' && $col_company_id == ''){ header('location:'.base_url().'User'); }
      $this->Master_Model->delete_info('party_group_id', $party_group_id, 'party_group');
      $this->session->set_flashdata('delete_success','success');
      header('location:'.base_url().'Master/party_group');
    }


    public function party_information(){
      // $col_user_id = $this->session->userdata('col_user_id');
      // $col_company_id = $this->session->userdata('col_company_id');
      // $col_role_id = $this->session->userdata('col_role_id');
      // if($col_user_id == '' && $col_company_id == ''){ header('location:'.base_url().'User'); }

      $this->load->view('Include/head');
      $this->load->view('Include/navbar');
      $this->load->view('Master/party_information');
      $this->load->view('Include/footer');
    }

    // Edit/Update Batch...
    public function edit_party_information($party_id){
      $col_user_id = $this->session->userdata('col_user_id');
      $col_company_id = $this->session->userdata('col_company_id');
      $col_role_id = $this->session->userdata('col_role_id');
      if($col_user_id == '' && $col_company_id == ''){ header('location:'.base_url().'User'); }

      $this->form_validation->set_rules('party_information_name', 'First Name', 'trim|required');
      if ($this->form_validation->run() != FALSE) {
        $party_information_status = $this->input->post('party_information_status');
        if(!isset($party_information_status)){ $party_information_status = '1'; }
        $update_data = $_POST;
        $update_data['party_information_status'] = $party_information_status;
        $update_data['party_information_addedby'] = $col_user_id;
        $update_data['party_information_date'] = date('d-m-Y');
        $update_data['party_information_time'] = date('h:i:s A');
        $this->Master_Model->update_info('party_id', $party_id, 'party_information', $update_data);

        $this->session->set_flashdata('update_success','success');
        header('location:'.base_url().'Master/party_information');
      }

      $party_information_info = $this->Master_Model->get_info_arr('party_id',$party_id,'party_information');
      if(!$party_information_info){ header('location:'.base_url().'Master/party_information'); }
      $data['update'] = 'update';
      $data['update_party_information'] = 'update';
      $data['party_information_info'] = $party_information_info[0];
      $data['act_link'] = base_url().'Master/edit_party_information/'.$party_id;

      $data['party_information_list'] = $this->Master_Model->get_list_by_id3($col_company_id,'','','','','','','party_id','DESC','party_information');
      $this->load->view('Include/head', $data);
      $this->load->view('Include/navbar', $data);
      $this->load->view('Master/party_information', $data);
      $this->load->view('Include/footer', $data);
    }

    //Delete Batch...
    public function delete_party_information($party_id){
      $col_user_id = $this->session->userdata('col_user_id');
      $col_company_id = $this->session->userdata('col_company_id');
      $col_role_id = $this->session->userdata('col_role_id');
      if($col_user_id == '' && $col_company_id == ''){ header('location:'.base_url().'User'); }
      $this->Master_Model->delete_info('party_id', $party_id, 'party_information');
      $this->session->set_flashdata('delete_success','success');
      header('location:'.base_url().'Master/party_information');
    }


    public function technical_user(){
      // $col_user_id = $this->session->userdata('col_user_id');
      // $col_company_id = $this->session->userdata('col_company_id');
      // $col_role_id = $this->session->userdata('col_role_id');
      // if($col_user_id == '' && $col_company_id == ''){ header('location:'.base_url().'User'); }

      $this->load->view('Include/head');
      $this->load->view('Include/navbar');
      $this->load->view('Master/technical_user');
      $this->load->view('Include/footer');
    }

    // Edit/Update Batch...
    public function edit_technical_user($technical_user_id){
      $col_user_id = $this->session->userdata('col_user_id');
      $col_company_id = $this->session->userdata('col_company_id');
      $col_role_id = $this->session->userdata('col_role_id');
      if($col_user_id == '' && $col_company_id == ''){ header('location:'.base_url().'User'); }

      $this->form_validation->set_rules('technical_user_name', 'First Name', 'trim|required');
      if ($this->form_validation->run() != FALSE) {
        $technical_user_status = $this->input->post('technical_user_status');
        if(!isset($technical_user_status)){ $technical_user_status = '1'; }
        $update_data = $_POST;
        $update_data['technical_user_status'] = $technical_user_status;
        $update_data['technical_user_addedby'] = $col_user_id;
        $update_data['technical_user_date'] = date('d-m-Y');
        $update_data['technical_user_time'] = date('h:i:s A');
        $this->Master_Model->update_info('technical_user_id', $technical_user_id, 'technical_user', $update_data);

        $this->session->set_flashdata('update_success','success');
        header('location:'.base_url().'Master/technical_user');
      }

      $technical_user_info = $this->Master_Model->get_info_arr('technical_user_id',$technical_user_id,'technical_user');
      if(!$technical_user_info){ header('location:'.base_url().'Master/technical_user'); }
      $data['update'] = 'update';
      $data['update_technical_user'] = 'update';
      $data['technical_user_info'] = $technical_user_info[0];
      $data['act_link'] = base_url().'Master/edit_technical_user/'.$technical_user_id;

      $data['technical_user_list'] = $this->Master_Model->get_list_by_id3($col_company_id,'','','','','','','technical_user_id','DESC','technical_user');
      $this->load->view('Include/head', $data);
      $this->load->view('Include/navbar', $data);
      $this->load->view('Master/technical_user', $data);
      $this->load->view('Include/footer', $data);
    }

    //Delete Batch...
    public function delete_technical_user($technical_user_id){
      $col_user_id = $this->session->userdata('col_user_id');
      $col_company_id = $this->session->userdata('col_company_id');
      $col_role_id = $this->session->userdata('col_role_id');
      if($col_user_id == '' && $col_company_id == ''){ header('location:'.base_url().'User'); }
      $this->Master_Model->delete_info('technical_user_id', $technical_user_id, 'technical_user');
      $this->session->set_flashdata('delete_success','success');
      header('location:'.base_url().'Master/technical_user');
    }

    public function item_company(){
      // $col_user_id = $this->session->userdata('col_user_id');
      // $col_company_id = $this->session->userdata('col_company_id');
      // $col_role_id = $this->session->userdata('col_role_id');
      // if($col_user_id == '' && $col_company_id == ''){ header('location:'.base_url().'User'); }

      $this->load->view('Include/head');
      $this->load->view('Include/navbar');
      $this->load->view('Master/item_company');
      $this->load->view('Include/footer');
    }

    // Edit/Update Batch...
    public function edit_item_company($item_company_id){
      $col_user_id = $this->session->userdata('col_user_id');
      $col_company_id = $this->session->userdata('col_company_id');
      $col_role_id = $this->session->userdata('col_role_id');
      if($col_user_id == '' && $col_company_id == ''){ header('location:'.base_url().'User'); }

      $this->form_validation->set_rules('item_company_name', 'First Name', 'trim|required');
      if ($this->form_validation->run() != FALSE) {
        $item_company_status = $this->input->post('item_company_status');
        if(!isset($item_company_status)){ $item_company_status = '1'; }
        $update_data = $_POST;
        $update_data['item_company_status'] = $item_company_status;
        $update_data['item_company_addedby'] = $col_user_id;
        $update_data['item_company_date'] = date('d-m-Y');
        $update_data['item_company_time'] = date('h:i:s A');
        $this->Master_Model->update_info('item_company_id', $item_company_id, 'item_company', $update_data);

        $this->session->set_flashdata('update_success','success');
        header('location:'.base_url().'Master/item_company');
      }

      $item_company_info = $this->Master_Model->get_info_arr('item_company_id',$item_company_id,'item_company');
      if(!$item_company_info){ header('location:'.base_url().'Master/item_company'); }
      $data['update'] = 'update';
      $data['update_item_company'] = 'update';
      $data['item_company_info'] = $item_company_info[0];
      $data['act_link'] = base_url().'Master/edit_item_company/'.$item_company_id;

      $data['item_company_list'] = $this->Master_Model->get_list_by_id3($col_company_id,'','','','','','','item_company_id','DESC','item_company');
      $this->load->view('Include/head', $data);
      $this->load->view('Include/navbar', $data);
      $this->load->view('Master/item_company', $data);
      $this->load->view('Include/footer', $data);
    }

    //Delete Batch...
    public function delete_item_company($item_company_id){
      $col_user_id = $this->session->userdata('col_user_id');
      $col_company_id = $this->session->userdata('col_company_id');
      $col_role_id = $this->session->userdata('col_role_id');
      if($col_user_id == '' && $col_company_id == ''){ header('location:'.base_url().'User'); }
      $this->Master_Model->delete_info('item_company_id', $item_company_id, 'item_company');
      $this->session->set_flashdata('delete_success','success');
      header('location:'.base_url().'Master/item_company');
    }

    public function equipment_type(){
      // $col_user_id = $this->session->userdata('col_user_id');
      // $col_company_id = $this->session->userdata('col_company_id');
      // $col_role_id = $this->session->userdata('col_role_id');
      // if($col_user_id == '' && $col_company_id == ''){ header('location:'.base_url().'User'); }

      $this->load->view('Include/head');
      $this->load->view('Include/navbar');
      $this->load->view('Master/equipment_type');
      $this->load->view('Include/footer');
    }

    // Edit/Update Batch...
    public function edit_equipment_type($equipment_type_id){
      $col_user_id = $this->session->userdata('col_user_id');
      $col_company_id = $this->session->userdata('col_company_id');
      $col_role_id = $this->session->userdata('col_role_id');
      if($col_user_id == '' && $col_company_id == ''){ header('location:'.base_url().'User'); }

      $this->form_validation->set_rules('equipment_type_name', 'First Name', 'trim|required');
      if ($this->form_validation->run() != FALSE) {
        $equipment_type_status = $this->input->post('equipment_type_status');
        if(!isset($equipment_type_status)){ $equipment_type_status = '1'; }
        $update_data = $_POST;
        $update_data['equipment_type_status'] = $equipment_type_status;
        $update_data['equipment_type_addedby'] = $col_user_id;
        $update_data['equipment_type_date'] = date('d-m-Y');
        $update_data['equipment_type_time'] = date('h:i:s A');
        $this->Master_Model->update_info('equipment_type_id', $equipment_type_id, 'equipment_type', $update_data);

        $this->session->set_flashdata('update_success','success');
        header('location:'.base_url().'Master/equipment_type');
      }

      $equipment_type_info = $this->Master_Model->get_info_arr('equipment_type_id',$equipment_type_id,'equipment_type');
      if(!$equipment_type_info){ header('location:'.base_url().'Master/equipment_type'); }
      $data['update'] = 'update';
      $data['update_equipment_type'] = 'update';
      $data['equipment_type_info'] = $equipment_type_info[0];
      $data['act_link'] = base_url().'Master/edit_equipment_type/'.$equipment_type_id;

      $data['equipment_type_list'] = $this->Master_Model->get_list_by_id3($col_company_id,'','','','','','','equipment_type_id','DESC','equipment_type');
      $this->load->view('Include/head', $data);
      $this->load->view('Include/navbar', $data);
      $this->load->view('Master/equipment_type', $data);
      $this->load->view('Include/footer', $data);
    }

    //Delete Batch...
    public function delete_equipment_type($equipment_type_id){
      $col_user_id = $this->session->userdata('col_user_id');
      $col_company_id = $this->session->userdata('col_company_id');
      $col_role_id = $this->session->userdata('col_role_id');
      if($col_user_id == '' && $col_company_id == ''){ header('location:'.base_url().'User'); }
      $this->Master_Model->delete_info('equipment_type_id', $equipment_type_id, 'equipment_type');
      $this->session->set_flashdata('delete_success','success');
      header('location:'.base_url().'Master/equipment_type');
    }



    public function item_information(){
      // $col_user_id = $this->session->userdata('col_user_id');
      // $col_company_id = $this->session->userdata('col_company_id');
      // $col_role_id = $this->session->userdata('col_role_id');
      // if($col_user_id == '' && $col_company_id == ''){ header('location:'.base_url().'User'); }

      $this->load->view('Include/head');
      $this->load->view('Include/navbar');
      $this->load->view('Master/item_information');
      $this->load->view('Include/footer');
    }

    // Edit/Update Batch...
    public function edit_item_information($item_information_id){
      $col_user_id = $this->session->userdata('col_user_id');
      $col_company_id = $this->session->userdata('col_company_id');
      $col_role_id = $this->session->userdata('col_role_id');
      if($col_user_id == '' && $col_company_id == ''){ header('location:'.base_url().'User'); }

      $this->form_validation->set_rules('item_information_name', 'First Name', 'trim|required');
      if ($this->form_validation->run() != FALSE) {
        $item_information_status = $this->input->post('item_information_status');
        if(!isset($item_information_status)){ $item_information_status = '1'; }
        $update_data = $_POST;
        $update_data['item_information_status'] = $item_information_status;
        $update_data['item_information_addedby'] = $col_user_id;
        $update_data['item_information_date'] = date('d-m-Y');
        $update_data['item_information_time'] = date('h:i:s A');
        $this->Master_Model->update_info('item_information_id', $item_information_id, 'item_information', $update_data);

        $this->session->set_flashdata('update_success','success');
        header('location:'.base_url().'Master/item_information');
      }

      $item_information_info = $this->Master_Model->get_info_arr('item_information_id',$item_information_id,'item_information');
      if(!$item_information_info){ header('location:'.base_url().'Master/item_information'); }
      $data['update'] = 'update';
      $data['update_item_information'] = 'update';
      $data['item_information_info'] = $item_information_info[0];
      $data['act_link'] = base_url().'Master/edit_item_information/'.$item_information_id;

      $data['item_information_list'] = $this->Master_Model->get_list_by_id3($col_company_id,'','','','','','','item_information_id','DESC','item_information');
      $this->load->view('Include/head', $data);
      $this->load->view('Include/navbar', $data);
      $this->load->view('Master/item_information', $data);
      $this->load->view('Include/footer', $data);
    }

    //Delete Batch...
    public function delete_item_information($item_information_id){
      $col_user_id = $this->session->userdata('col_user_id');
      $col_company_id = $this->session->userdata('col_company_id');
      $col_role_id = $this->session->userdata('col_role_id');
      if($col_user_id == '' && $col_company_id == ''){ header('location:'.base_url().'User'); }
      $this->Master_Model->delete_info('item_information_id', $item_information_id, 'item_information');
      $this->session->set_flashdata('delete_success','success');
      header('location:'.base_url().'Master/item_information');
    }

    public function tax_slab(){
      // $col_user_id = $this->session->userdata('col_user_id');
      // $col_company_id = $this->session->userdata('col_company_id');
      // $col_role_id = $this->session->userdata('col_role_id');
      // if($col_user_id == '' && $col_company_id == ''){ header('location:'.base_url().'User'); }

      $this->load->view('Include/head');
      $this->load->view('Include/navbar');
      $this->load->view('Master/tax_slab');
      $this->load->view('Include/footer');
    }

    // Edit/Update Batch...
    public function edit_tax_slab($tax_slab_id){
      $col_user_id = $this->session->userdata('col_user_id');
      $col_company_id = $this->session->userdata('col_company_id');
      $col_role_id = $this->session->userdata('col_role_id');
      if($col_user_id == '' && $col_company_id == ''){ header('location:'.base_url().'User'); }

      $this->form_validation->set_rules('tax_slab_name', 'First Name', 'trim|required');
      if ($this->form_validation->run() != FALSE) {
        $tax_slab_status = $this->input->post('tax_slab_status');
        if(!isset($tax_slab_status)){ $tax_slab_status = '1'; }
        $update_data = $_POST;
        $update_data['tax_slab_status'] = $tax_slab_status;
        $update_data['tax_slab_addedby'] = $col_user_id;
        $update_data['tax_slab_date'] = date('d-m-Y');
        $update_data['tax_slab_time'] = date('h:i:s A');
        $this->Master_Model->update_info('tax_slab_id', $tax_slab_id, 'tax_slab', $update_data);

        $this->session->set_flashdata('update_success','success');
        header('location:'.base_url().'Master/tax_slab');
      }

      $tax_slab_info = $this->Master_Model->get_info_arr('tax_slab_id',$tax_slab_id,'tax_slab');
      if(!$tax_slab_info){ header('location:'.base_url().'Master/tax_slab'); }
      $data['update'] = 'update';
      $data['update_tax_slab'] = 'update';
      $data['tax_slab_info'] = $tax_slab_info[0];
      $data['act_link'] = base_url().'Master/edit_tax_slab/'.$tax_slab_id;

      $data['tax_slab_list'] = $this->Master_Model->get_list_by_id3($col_company_id,'','','','','','','tax_slab_id','DESC','tax_slab');
      $this->load->view('Include/head', $data);
      $this->load->view('Include/navbar', $data);
      $this->load->view('Master/tax_slab', $data);
      $this->load->view('Include/footer', $data);
    }

    //Delete Batch...
    public function delete_tax_slab($tax_slab_id){
      $col_user_id = $this->session->userdata('col_user_id');
      $col_company_id = $this->session->userdata('col_company_id');
      $col_role_id = $this->session->userdata('col_role_id');
      if($col_user_id == '' && $col_company_id == ''){ header('location:'.base_url().'User'); }
      $this->Master_Model->delete_info('tax_slab_id', $tax_slab_id, 'tax_slab');
      $this->session->set_flashdata('delete_success','success');
      header('location:'.base_url().'Master/tax_slab');
    }

    public function unit(){
      // $col_user_id = $this->session->userdata('col_user_id');
      // $col_company_id = $this->session->userdata('col_company_id');
      // $col_role_id = $this->session->userdata('col_role_id');
      // if($col_user_id == '' && $col_company_id == ''){ header('location:'.base_url().'User'); }

      $this->load->view('Include/head');
      $this->load->view('Include/navbar');
      $this->load->view('Master/unit');
      $this->load->view('Include/footer');
    }

    // Edit/Update Batch...
    public function edit_unit($unit_id){
      $col_user_id = $this->session->userdata('col_user_id');
      $col_company_id = $this->session->userdata('col_company_id');
      $col_role_id = $this->session->userdata('col_role_id');
      if($col_user_id == '' && $col_company_id == ''){ header('location:'.base_url().'User'); }

      $this->form_validation->set_rules('unit_name', 'First Name', 'trim|required');
      if ($this->form_validation->run() != FALSE) {
        $unit_status = $this->input->post('unit_status');
        if(!isset($unit_status)){ $unit_status = '1'; }
        $update_data = $_POST;
        $update_data['unit_status'] = $unit_status;
        $update_data['unit_addedby'] = $col_user_id;
        $update_data['unit_date'] = date('d-m-Y');
        $update_data['unit_time'] = date('h:i:s A');
        $this->Master_Model->update_info('unit_id', $unit_id, 'unit', $update_data);

        $this->session->set_flashdata('update_success','success');
        header('location:'.base_url().'Master/unit');
      }

      $unit_info = $this->Master_Model->get_info_arr('unit_id',$unit_id,'unit');
      if(!$unit_info){ header('location:'.base_url().'Master/unit'); }
      $data['update'] = 'update';
      $data['update_unit'] = 'update';
      $data['unit_info'] = $unit_info[0];
      $data['act_link'] = base_url().'Master/edit_unit/'.$unit_id;

      $data['unit_list'] = $this->Master_Model->get_list_by_id3($col_company_id,'','','','','','','unit_id','DESC','unit');
      $this->load->view('Include/head', $data);
      $this->load->view('Include/navbar', $data);
      $this->load->view('Master/unit', $data);
      $this->load->view('Include/footer', $data);
    }

    //Delete Batch...
    public function delete_unit($unit_id){
      $col_user_id = $this->session->userdata('col_user_id');
      $col_company_id = $this->session->userdata('col_company_id');
      $col_role_id = $this->session->userdata('col_role_id');
      if($col_user_id == '' && $col_company_id == ''){ header('location:'.base_url().'User'); }
      $this->Master_Model->delete_info('unit_id', $unit_id, 'unit');
      $this->session->set_flashdata('delete_success','success');
      header('location:'.base_url().'Master/unit');
    }

    public function amc_type(){
      // $col_user_id = $this->session->userdata('col_user_id');
      // $col_company_id = $this->session->userdata('col_company_id');
      // $col_role_id = $this->session->userdata('col_role_id');
      // if($col_user_id == '' && $col_company_id == ''){ header('location:'.base_url().'User'); }

      $this->load->view('Include/head');
      $this->load->view('Include/navbar');
      $this->load->view('Master/amc_type');
      $this->load->view('Include/footer');
    }

    // Edit/Update Batch...
    public function edit_amc_type($amc_type_id){
      $col_user_id = $this->session->userdata('col_user_id');
      $col_company_id = $this->session->userdata('col_company_id');
      $col_role_id = $this->session->userdata('col_role_id');
      if($col_user_id == '' && $col_company_id == ''){ header('location:'.base_url().'User'); }

      $this->form_validation->set_rules('amc_type_name', 'First Name', 'trim|required');
      if ($this->form_validation->run() != FALSE) {
        $amc_type_status = $this->input->post('amc_type_status');
        if(!isset($amc_type_status)){ $amc_type_status = '1'; }
        $update_data = $_POST;
        $update_data['amc_type_status'] = $amc_type_status;
        $update_data['amc_type_addedby'] = $col_user_id;
        $update_data['amc_type_date'] = date('d-m-Y');
        $update_data['amc_type_time'] = date('h:i:s A');
        $this->Master_Model->update_info('amc_type_id', $amc_type_id, 'amc_type', $update_data);

        $this->session->set_flashdata('update_success','success');
        header('location:'.base_url().'Master/amc_type');
      }

      $amc_type_info = $this->Master_Model->get_info_arr('amc_type_id',$amc_type_id,'amc_type');
      if(!$amc_type_info){ header('location:'.base_url().'Master/amc_type'); }
      $data['update'] = 'update';
      $data['update_amc_type'] = 'update';
      $data['amc_type_info'] = $amc_type_info[0];
      $data['act_link'] = base_url().'Master/edit_amc_type/'.$amc_type_id;

      $data['amc_type_list'] = $this->Master_Model->get_list_by_id3($col_company_id,'','','','','','','amc_type_id','DESC','amc_type');
      $this->load->view('Include/head', $data);
      $this->load->view('Include/navbar', $data);
      $this->load->view('Master/amc_type', $data);
      $this->load->view('Include/footer', $data);
    }

    //Delete Batch...
    public function delete_amc_type($amc_type_id){
      $col_user_id = $this->session->userdata('col_user_id');
      $col_company_id = $this->session->userdata('col_company_id');
      $col_role_id = $this->session->userdata('col_role_id');
      if($col_user_id == '' && $col_company_id == ''){ header('location:'.base_url().'User'); }
      $this->Master_Model->delete_info('amc_type_id', $amc_type_id, 'amc_type');
      $this->session->set_flashdata('delete_success','success');
      header('location:'.base_url().'Master/amc_type');
    }


    public function problem_info(){
      // $col_user_id = $this->session->userdata('col_user_id');
      // $col_company_id = $this->session->userdata('col_company_id');
      // $col_role_id = $this->session->userdata('col_role_id');
      // if($col_user_id == '' && $col_company_id == ''){ header('location:'.base_url().'User'); }

      $this->load->view('Include/head');
      $this->load->view('Include/navbar');
      $this->load->view('Master/problem_info');
      $this->load->view('Include/footer');
    }

    // Edit/Update Batch...
    public function edit_problem_info($problem_info_id){
      $col_user_id = $this->session->userdata('col_user_id');
      $col_company_id = $this->session->userdata('col_company_id');
      $col_role_id = $this->session->userdata('col_role_id');
      if($col_user_id == '' && $col_company_id == ''){ header('location:'.base_url().'User'); }

      $this->form_validation->set_rules('problem_info_name', 'First Name', 'trim|required');
      if ($this->form_validation->run() != FALSE) {
        $problem_info_status = $this->input->post('problem_info_status');
        if(!isset($problem_info_status)){ $problem_info_status = '1'; }
        $update_data = $_POST;
        $update_data['problem_info_status'] = $problem_info_status;
        $update_data['problem_info_addedby'] = $col_user_id;
        $update_data['problem_info_date'] = date('d-m-Y');
        $update_data['problem_info_time'] = date('h:i:s A');
        $this->Master_Model->update_info('problem_info_id', $problem_info_id, 'problem_info', $update_data);

        $this->session->set_flashdata('update_success','success');
        header('location:'.base_url().'Master/problem_info');
      }

      $problem_info_info = $this->Master_Model->get_info_arr('problem_info_id',$problem_info_id,'problem_info');
      if(!$problem_info_info){ header('location:'.base_url().'Master/problem_info'); }
      $data['update'] = 'update';
      $data['update_problem_info'] = 'update';
      $data['problem_info_info'] = $problem_info_info[0];
      $data['act_link'] = base_url().'Master/edit_problem_info/'.$problem_info_id;

      $data['problem_info_list'] = $this->Master_Model->get_list_by_id3($col_company_id,'','','','','','','problem_info_id','DESC','problem_info');
      $this->load->view('Include/head', $data);
      $this->load->view('Include/navbar', $data);
      $this->load->view('Master/problem_info', $data);
      $this->load->view('Include/footer', $data);
    }

    //Delete Batch...
    public function delete_problem_info($problem_info_id){
      $col_user_id = $this->session->userdata('col_user_id');
      $col_company_id = $this->session->userdata('col_company_id');
      $col_role_id = $this->session->userdata('col_role_id');
      if($col_user_id == '' && $col_company_id == ''){ header('location:'.base_url().'User'); }
      $this->Master_Model->delete_info('problem_info_id', $problem_info_id, 'problem_info');
      $this->session->set_flashdata('delete_success','success');
      header('location:'.base_url().'Master/problem_info');
    }

    public function rectification_info(){
      // $col_user_id = $this->session->userdata('col_user_id');
      // $col_company_id = $this->session->userdata('col_company_id');
      // $col_role_id = $this->session->userdata('col_role_id');
      // if($col_user_id == '' && $col_company_id == ''){ header('location:'.base_url().'User'); }

      $this->load->view('Include/head');
      $this->load->view('Include/navbar');
      $this->load->view('Master/rectification_info');
      $this->load->view('Include/footer');
    }

    // Edit/Update Batch...
    public function edit_rectification_info($rectification_info_id){
      $col_user_id = $this->session->userdata('col_user_id');
      $col_company_id = $this->session->userdata('col_company_id');
      $col_role_id = $this->session->userdata('col_role_id');
      if($col_user_id == '' && $col_company_id == ''){ header('location:'.base_url().'User'); }

      $this->form_validation->set_rules('rectification_info_name', 'First Name', 'trim|required');
      if ($this->form_validation->run() != FALSE) {
        $rectification_info_status = $this->input->post('rectification_info_status');
        if(!isset($rectification_info_status)){ $rectification_info_status = '1'; }
        $update_data = $_POST;
        $update_data['rectification_info_status'] = $rectification_info_status;
        $update_data['rectification_info_addedby'] = $col_user_id;
        $update_data['rectification_info_date'] = date('d-m-Y');
        $update_data['rectification_info_time'] = date('h:i:s A');
        $this->Master_Model->update_info('rectification_info_id', $rectification_info_id, 'rectification_info', $update_data);

        $this->session->set_flashdata('update_success','success');
        header('location:'.base_url().'Master/rectification_info');
      }

      $rectification_info_info = $this->Master_Model->get_info_arr('rectification_info_id',$rectification_info_id,'rectification_info');
      if(!$rectification_info_info){ header('location:'.base_url().'Master/rectification_info'); }
      $data['update'] = 'update';
      $data['update_rectification_info'] = 'update';
      $data['rectification_info_info'] = $rectification_info_info[0];
      $data['act_link'] = base_url().'Master/edit_rectification_info/'.$rectification_info_id;

      $data['rectification_info_list'] = $this->Master_Model->get_list_by_id3($col_company_id,'','','','','','','rectification_info_id','DESC','rectification_info');
      $this->load->view('Include/head', $data);
      $this->load->view('Include/navbar', $data);
      $this->load->view('Master/rectification_info', $data);
      $this->load->view('Include/footer', $data);
    }

    //Delete Batch...
    public function delete_rectification_info($rectification_info_id){
      $col_user_id = $this->session->userdata('col_user_id');
      $col_company_id = $this->session->userdata('col_company_id');
      $col_role_id = $this->session->userdata('col_role_id');
      if($col_user_id == '' && $col_company_id == ''){ header('location:'.base_url().'User'); }
      $this->Master_Model->delete_info('rectification_info_id', $rectification_info_id, 'rectification_info');
      $this->session->set_flashdata('delete_success','success');
      header('location:'.base_url().'Master/rectification_info');
    }
}
?>
