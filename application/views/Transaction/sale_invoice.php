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
            <h4>Sale Invoice</h4>
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
                <h3 class="card-title"> <?php if(isset($update)){ echo 'Update'; } else{ echo 'Add New'; } ?> Sale Invoice</h3>
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
                        <label>Sale Bill No.</label>
                        <input type="text" class="form-control form-control-sm" name="sale_no" id="sale_no" value="" placeholder="Sale Bill No." readonly>
                      </div>

                      <div class="form-group col-md-6 ">
                        <label>Sale Bill Date</label>
                        <input type="text" class="form-control form-control-sm" name="sale_date" id="sale_date" value="" placeholder="Sale Bill Date" >
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

                      <div class="form-group col-md-6 ">
                        <label>Machine Serial No</label>
                        <input type="text" class="form-control form-control-sm" name="machine_serial_no" id="machine_serial_no" value="" placeholder="Machine Serial No" >
                      </div>

                      <div class="form-group col-md-6 select_sm">
                        <label>Select AMC Contract Ref No *</label>
                        <select class="form-control select2" name="amc_contract_id" id="amc_contract_id" data-placeholder="Select AMC Contract Ref No *">
                          <option value="">Select AMC Contract Ref No *</option>
                        </select>
                      </div>

                      <div class="form-group col-md-12 text-right">
                      <button type="button" id="add_row" class="btn btn-sm btn-primary">Add Row</button>
                    </div>
                    <div class="form-group col-md-12">
                      <table id="myTable" class="table table-bordered tbl_list">
                        <thead>
                        <tr>
                          <th>Select Item *</th>
                          <th>Qty </th>
                          <th>GST</th>
                          <th>Rate </th>
                          <th>Amount</th>
                          <th class="wt_50"></th>
                        </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <select class="form-control form-control-sm" name="item_id" id="item_id" data-placeholder="Select Item">
                                <option value="">Select Item</option>
                                <option >1</option>
                              </select>
                            </td>
                            <td class="wt_150">
                              <input type="text" class="form-control form-control-sm" name="quantity" id="quantity" value="" placeholder="Qty" required>
                            </td>
                            <td class="wt_150">
                              <input type="text" class="form-control form-control-sm" name="gst" id="gst" value="" placeholder="GST" readonly>
                            </td>
                            <td class="wt_150">
                              <input type="text" class="form-control form-control-sm" name="rate" id="rate" value="" placeholder="Rate" readonly>
                            </td>
                            <td class="wt_150">
                              <input type="text" class="form-control form-control-sm" name="amount" id="amount" value="" placeholder="Amount" readonly>
                            </td>
                            <td class="wt_50"></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>


                    <div class="col-md-9">

                    </div>
                    <div class="col-md-3">
                      <div class="row">
                        <div class="form-group col-md-12  ">
                          <label>Basic Amount *</label>
                          <input type="text" class="form-control form-control-sm" name="basic_amount" id="basic_amount" value="" placeholder="Basic Amount *" >
                        </div>
                        <div class="form-group col-md-12  ">
                          <label>GST Amount *</label>
                          <input type="text" class="form-control form-control-sm" name="total_gst" id="total_gst" value="" placeholder="GST Amount *" >
                        </div>
                        <div class="form-group col-md-12  ">
                          <label>Net Amount *</label>
                          <input type="text" class="form-control form-control-sm" name="net_amount" id="net_amount" value="" placeholder="Net Amount *" >
                        </div>
                      </div>
                    </div>


                    </div>
                    <div class="card-footer clearfix" style="display: block;">
                      <div class="row">
                        <div class="col-md-6 text-left">
                          <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" name="student_status" id="student_status" value="0" <?php if(isset($student_info) && $student_info['student_status'] == 0){ echo 'checked'; } ?>>
                            <label for="student_status" class="custom-control-label">Disable This Sale Invoice</label>
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
                <h3 class="card-title">List All Sale Invoice</h3>
              </div>
              <div class="card-body p-2">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th class="d-none">#</th>
                    <th class="wt_50">Action</th>
                    <th>Bill No.</th>
                    <th>Invoice Date</th>
                    <th>Party Group</th>
                    <th>Party Name</th>
                    <th>Machine Sr. No.</th>
                    <th>Gross Total</th>
                    <th>GST Amount</th>
                    <th>Total Amount</th>
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
                          <a href="<?php echo base_url() ?>Master/delete_student/<?php echo $list->student_id; ?>" type="button" class="btn btn-sm btn-default" onclick="return confirm('Delete this Sale Invoice');"><i class="fa fa-trash text-danger"></i></a>
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

  <script type="text/javascript">
  // Add Row...
  <?php if(isset($update)){ ?>
  var i = <?php echo $i-1; ?>
  <?php } else { ?>
  var i = 1;
  <?php } ?>

  $('#add_row').click(function(){
    i++;
    var row = ''+
    '<tr>'+
    '<td>'+
      '<select class="form-control form-control-sm" name="item_id" id="item_id" data-placeholder="Select Item">'+
        '<option value="">Select Item</option>'+
        '<option >1</option>'+
      '</select>'+
    '</td>'+
      '<td class="wt_150">'+
        '<input type="text" class="form-control form-control-sm" name="quantity" id="quantity" value="" placeholder="Qty" required>'+
      '</td>'+
      '<td class="wt_100">'+
        '<input type="text" class="form-control form-control-sm" name="gst" id="gst" value="" placeholder="GST" required>'+
      '</td>'+
      '<td class="wt_100">'+
        '<input type="text" class="form-control form-control-sm" name="rate" id="rate" value="" placeholder="Rate" required>'+
      '</td>'+
      '<td class="wt_100">'+
        '<input type="text" class="form-control form-control-sm" name="amount" id="amount" value="" placeholder="Amount" required>'+
      '</td>'+
      '<td class="wt_50"><a class="rem_row"><i class="fa fa-trash text-danger"></i></a></td>'+
    '</tr>';
    $('#myTable').append(row);
  });

  $('#myTable').on('click', '.rem_row', function () {
   $(this).closest('tr').remove();
 });
  </script>

</body>
</html>
