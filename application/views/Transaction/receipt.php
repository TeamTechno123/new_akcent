<!DOCTYPE html>
<html>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header pt-0 pb-2">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12 text-left mt-2">
            <h4>Receipt Information</h4>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card <?php if(!isset($update)){ echo 'collapsed-card'; } ?>">
              <div class="card-header">
                <h3 class="card-title"> <?php if(isset($update)){ echo 'Update'; } else{ echo 'Add New'; } ?> Receipt Information</h3>
                <div class="card-tools">
                  <?php if(!isset($update)){
                    echo '<button type="button" class="btn btn-sm btn-primary" data-card-widget="collapse">Add New</button>';
                  } ?>
                </div>
              </div>
              <!--  -->
                <div class="card-body p-0 " <?php if(isset($update)){ echo 'style="display: block;"'; } else{ echo 'style="display: none;"'; } ?>>
                  <form class="input_form m-0" id="form_action" role="form" action="" method="post" autocomplete="off" enctype="multipart/form-data">
                    <div class="row p-4">


                      <div class="form-group col-md-6 ">
                        <label>Receipt No.</label>
                        <input type="text" class="form-control form-control-sm" name="receipt_no" id="receipt_no" value="" placeholder="Receipt No." readonly>
                      </div>

                      <div class="form-group col-md-6 ">
                        <label>Receipt Date</label>
                        <input type="text" class="form-control form-control-sm" name="receipt_date" id="receipt_date" value="" placeholder="Receipt Date" >
                      </div>

                      <div class="form-group col-md-6 select_sm">
                        <label>Select Party  Group</label>
                        <select class="form-control select2" name="party_group_id" id="party_group_id" data-placeholder="Select Party  Group">
                          <option value="">Select Party  Group</option>
                        </select>
                      </div>

                      <div class="form-group col-md-6 select_sm">
                        <label>Party Name *</label>
                        <select class="form-control select2" name="party_id" id="party_id" data-placeholder="Party Name *">
                          <option value="">Party Name *</option>
                        </select>
                      </div>

                      <div class="form-group col-md-4 select_sm">
                        <label>Select ReceiptContract Ref No *</label>
                        <select class="form-control select2" name="amc_contract_id" id="amc_contract_id" data-placeholder="Select ReceiptContract Ref No *">
                          <option value="">Select ReceiptContract Ref No *</option>
                        </select>
                      </div>

                      <div class="form-group col-md-4">
                        <label>Due Bills</label>
                        <input type="text" class="form-control form-control-sm" name="due_bills" id="due_bills" value="" placeholder="Due Bills">
                      </div>


                      <div class="form-group col-md-4">
                        <label>Receipt Amount</label>
                        <input type="text" class="form-control form-control-sm" name="due_bills" id="due_bills" value="" placeholder="Receipt Amount" readonly>
                      </div>

                      <div class="col-md-12">
                        <label>Receipt Amount</label>
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="cash" name="customRadio">
                          <label for="cash" class="custom-control-label">Cash</label>
                        </div>

                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="cheque" name="customRadio">
                          <label for="cheque" class="custom-control-label">Cheque</label>
                        </div>

                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="online" name="customRadio">
                          <label for="online" class="custom-control-label">Online Transfer</label>
                        </div>
                      </div>

                      <div class="form-group col-md-12">
                        <label>Remark</label>
                        <input type="text" class="form-control form-control-sm" name="remark" id="remark" value="" placeholder="Remark" >
                      </div>

                    </div>
                    <div class="card-footer clearfix" style="display: block;">
                      <div class="row">
                        <div class="col-md-6 text-left">
                          <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" name="student_status" id="student_status" value="0" <?php if(isset($student_info) && $student_info['student_status'] == 0){ echo 'checked'; } ?>>
                            <label for="student_status" class="custom-control-label">Disable This Receipt Information</label>
                          </div>
                        </div>
                        <div class="col-md-6 text-right">
                          <a href="<?php base_url(); ?>User/user_information" class="btn btn-sm btn-default px-4 mx-4">Cancel</a>
                          <?php if(isset($update)){
                            echo '<button class="btn btn-sm btn-primary float-right px-4">Update</button>';
                          } else{
                            echo '<button class="btn btn-sm btn-success float-right px-4">Save</button>';
                          } ?>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
            </div>
          </div>


          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">List All Receipt Information</h3>
              </div>
              <div class="card-body p-2">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th class="d-none">#</th>
                    <th class="wt_50">Action</th>
                    <th>Receipt No.</th>
                    <th>Date</th>
                    <th>Party Name</th>
                    <th>Contract Refe No.</th>
                    <th>Receipt Amount</th>
                    <th class="wt_50">Status</th>
                  </tr>
                  </thead>
                  <!-- <tbody>
                    <?php $i=0; foreach ($student_list as $list) { $i++;
                      $medium_details = $this->Master_Model->get_info_arr_fields('medium_name','medium_id', $list->medium_id, 'medium');
                      $class_details = $this->Master_Model->get_info_arr_fields('class_name','class_id', $list->class_id, 'class');
                      $batch_details = $this->Master_Model->get_info_arr_fields('batch_name','batch_id', $list->batch_id, 'batch');
                    ?>
                    <tr>
                      <td class="d-none"><?php echo $i; ?></td>
                      <td class="text-center">
                        <div class="btn-group">
                          <a href="<?php echo base_url() ?>Master/edit_student/<?php echo $list->student_id; ?>" type="button" class="btn btn-sm btn-default"><i class="fa fa-edit text-primary"></i></a>
                          <a href="<?php echo base_url() ?>Master/delete_student/<?php echo $list->student_id; ?>" type="button" class="btn btn-sm btn-default" onclick="return confirm('Delete this Receipt Information');"><i class="fa fa-trash text-danger"></i></a>
                        </div>
                      </td>
                      <td><?php echo $list->student_name; ?></td>
                      <td><?php echo $list->student_mobile; ?></td>
                      <td><?php echo $list->student_password; ?></td>
                      <td><?php if($medium_details){ echo $medium_details[0]['medium_name']; } ?></td>
                      <td><?php if($class_details){ echo $class_details[0]['class_name']; } ?></td>
                      <td><?php if($batch_details){ echo $batch_details[0]['batch_name']; } ?></td>
                      <td>
                        <?php if($list->student_status == 0){ echo '<span class="text-danger">Inactive</span>'; }
                          else{ echo '<span class="text-success">Active</span>'; } ?>
                      </td>
                    </tr>
                  <?php } ?>
                  </tbody> -->
                </table>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
  </div>



</body>
</html>
