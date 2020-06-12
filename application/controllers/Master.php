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
      $col_user_id = $this->session->userdata('col_user_id');
      $col_company_id = $this->session->userdata('col_company_id');
      $col_role_id = $this->session->userdata('col_role_id');
      if($col_user_id == '' && $col_company_id == ''){ header('location:'.base_url().'User'); }

      $this->load->view('Include/head');
      $this->load->view('Include/navbar');
      $this->load->view('Master/engineer');
      $this->load->view('Include/footer');
    }

    // Edit/Update Batch...
    public function edit_engineer($engineer_id){
      $col_user_id = $this->session->userdata('col_user_id');
      $col_company_id = $this->session->userdata('col_company_id');
      $col_role_id = $this->session->userdata('col_role_id');
      if($col_user_id == '' && $col_company_id == ''){ header('location:'.base_url().'User'); }

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
      $col_user_id = $this->session->userdata('col_user_id');
      $col_company_id = $this->session->userdata('col_company_id');
      $col_role_id = $this->session->userdata('col_role_id');
      if($col_user_id == '' && $col_company_id == ''){ header('location:'.base_url().'User'); }

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
      $col_user_id = $this->session->userdata('col_user_id');
      $col_company_id = $this->session->userdata('col_company_id');
      $col_role_id = $this->session->userdata('col_role_id');
      if($col_user_id == '' && $col_company_id == ''){ header('location:'.base_url().'User'); }

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
      $col_user_id = $this->session->userdata('col_user_id');
      $col_company_id = $this->session->userdata('col_company_id');
      $col_role_id = $this->session->userdata('col_role_id');
      if($col_user_id == '' && $col_company_id == ''){ header('location:'.base_url().'User'); }

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
}
?>
