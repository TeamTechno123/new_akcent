<?php
  $coach_user_id = $this->session->userdata('coach_user_id');
  $coach_company_id = $this->session->userdata('coach_company_id');
  $coach_role_id = $this->session->userdata('coach_role_id');
  $company_info = $this->Master_Model->get_info_arr_fields('company_name','company_id', $coach_company_id, 'company');
  $user_info = $this->Master_Model->get_info_arr_fields('user_name','user_id', $coach_user_id, 'user');
?>
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
    </li>
  </ul>
  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url(); ?>User/logout">
        <i class="fas fa-sign-out-alt"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
        <i class="fas fa-th-large"></i>
      </a>
    </li>
  </ul>
</nav>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="#" class="brand-link">
    <img src="dist/img/AdminLTELogo.png" alt="" class="brand-image img-circle elevation-3"
         style="opacity: .8">
    <span class="brand-text font-weight-light"><?php echo $company_info[0]['company_name']; ?></span>
  </a>
  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <!-- <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> -->
      </div>
      <div class="info">
        <a href="#" class="d-block"><?php echo $user_info[0]['user_name']; ?></a>
      </div>
    </div>
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="<?php echo base_url(); ?>User/dashboard" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link head">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
              Company
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview" style="display: none;">
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>User/company_information_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Company Information</p>
              </a>
            </li>
            <li class="nav-item">
              <a <?php if(isset($update_user)){ echo 'href="'.$act_link.'"'; } else{ ?> href="<?php echo base_url(); ?>User/user_information" <?php } ?> class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>User Information</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link head">
            <i class="nav-icon fas fa-list"></i>
            <p>
              Master
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview" style="display: none;">
            <li class="nav-item">
              <a <?php if(isset($update_engineer)){ echo 'href="'.$act_link.'"'; } else{ ?> href="<?php echo base_url(); ?>Master/engineer" <?php } ?> class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Engineer</p>
              </a>
            </li>

            <li class="nav-item">
              <a <?php if(isset($update_party_group)){ echo 'href="'.$act_link.'"'; } else{ ?> href="<?php echo base_url(); ?>Master/party_group" <?php } ?> class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Party Group</p>
              </a>
            </li>

            <li class="nav-item">
              <a <?php if(isset($update_party)){ echo 'href="'.$act_link.'"'; } else{ ?> href="<?php echo base_url(); ?>Master/party_information" <?php } ?> class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Party Information</p>
              </a>
            </li>

            <li class="nav-item">
              <a <?php if(isset($update_technical_user)){ echo 'href="'.$act_link.'"'; } else{ ?> href="<?php echo base_url(); ?>Master/technical_user" <?php } ?> class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Technical User Infor</p>
              </a>
            </li>

            <li class="nav-item">
              <a <?php if(isset($update_item_company)){ echo 'href="'.$act_link.'"'; } else{ ?> href="<?php echo base_url(); ?>Master/item_company" <?php } ?> class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Item Company</p>
              </a>
            </li>

            <li class="nav-item">
              <a <?php if(isset($update_equipment_type)){ echo 'href="'.$act_link.'"'; } else{ ?> href="<?php echo base_url(); ?>Master/equipment_type" <?php } ?> class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Equipment Type</p>
              </a>
            </li>

            <li class="nav-item">
              <a <?php if(isset($update_item_information)){ echo 'href="'.$act_link.'"'; } else{ ?> href="<?php echo base_url(); ?>Master/item_information" <?php } ?> class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Item Information</p>
              </a>
            </li>

            <li class="nav-item">
              <a <?php if(isset($update_tax_slab)){ echo 'href="'.$act_link.'"'; } else{ ?> href="<?php echo base_url(); ?>Master/tax_slab" <?php } ?> class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Tax Slab Information</p>
              </a>
            </li>

            <li class="nav-item">
              <a <?php if(isset($update_unit)){ echo 'href="'.$act_link.'"'; } else{ ?> href="<?php echo base_url(); ?>Master/unit" <?php } ?> class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Unit Information</p>
              </a>
            </li>

            <li class="nav-item">
              <a <?php if(isset($update_amc_type)){ echo 'href="'.$act_link.'"'; } else{ ?> href="<?php echo base_url(); ?>Master/amc_type" <?php } ?> class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>AMC Type Information</p>
              </a>
            </li>

            <li class="nav-item">
              <a <?php if(isset($update_problem_info)){ echo 'href="'.$act_link.'"'; } else{ ?> href="<?php echo base_url(); ?>Master/problem_info" <?php } ?> class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Problem Information</p>
              </a>
            </li>

            <li class="nav-item">
              <a <?php if(isset($update_rectification_info)){ echo 'href="'.$act_link.'"'; } else{ ?> href="<?php echo base_url(); ?>Master/rectification_info" <?php } ?> class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Problem Rectification Info</p>
              </a>
            </li>


          </ul>
        </li>

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link head">
            <i class="nav-icon fas fa-list"></i>
            <p>
              Transaction
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview" style="display: none;">
            <li class="nav-item">
              <a <?php if(isset($update_amc_contract)){ echo 'href="'.$act_link.'"'; } else{ ?> href="<?php echo base_url(); ?>Transaction/amc_contract" <?php } ?> class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>AMC Contract Info</p>
              </a>
            </li>

            <li class="nav-item">
              <a <?php if(isset($update_machine_details)){ echo 'href="'.$act_link.'"'; } else{ ?> href="<?php echo base_url(); ?>Transaction/machine_details" <?php } ?> class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Machine Details</p>
              </a>
            </li>

            <li class="nav-item">
              <a <?php if(isset($update_partywise_info)){ echo 'href="'.$act_link.'"'; } else{ ?> href="<?php echo base_url(); ?>Transaction/partywise_info" <?php } ?> class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Party Wise Info</p>
              </a>
            </li>

            <li class="nav-item">
              <a <?php if(isset($update_ticket)){ echo 'href="'.$act_link.'"'; } else{ ?> href="<?php echo base_url(); ?>Transaction/ticket" <?php } ?> class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Ticket Information</p>
              </a>
            </li>

            <li class="nav-item">
              <a <?php if(isset($update_call_visit)){ echo 'href="'.$act_link.'"'; } else{ ?> href="<?php echo base_url(); ?>Transaction/call_visit" <?php } ?> class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Call Visit Information</p>
              </a>
            </li>

            <li class="nav-item">
              <a <?php if(isset($update_sale_invoice)){ echo 'href="'.$act_link.'"'; } else{ ?> href="<?php echo base_url(); ?>Transaction/sale_invoice" <?php } ?> class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Sale Invoice</p>
              </a>
            </li>

            <li class="nav-item">
              <a <?php if(isset($update_receipt)){ echo 'href="'.$act_link.'"'; } else{ ?> href="<?php echo base_url(); ?>Transaction/receipt" <?php } ?> class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Receipt Information</p>
              </a>
            </li>

          </ul>
        </li>

      </nav>
    <!-- /.sidebar-menu -->
    </div>
  <!-- /.sidebar -->
  </aside>
