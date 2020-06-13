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
            <h4>Call Visit Information</h4>
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
                <h3 class="card-title"> <?php if(isset($update)){ echo 'Update'; } else{ echo 'Add New'; } ?> Call Visit Information</h3>
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
                        <label>Call Visit no *</label>
                        <input type="number" class="form-control form-control-sm" name="call_visit_no" id="call_visit_no" value="" placeholder="Call Visit no *">
                      </div>

                      <div class="form-group col-md-6 ">
                        <label>Ticket Create Date *</label>
                        <input type="number" class="form-control form-control-sm" name="ticket_create_date" id="ticket_create_date" value="" placeholder="Ticket Create Date *">
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



                      <div class="form-group col-md-4 ">
                        <label>Contact Person Name *</label>
                        <input type="text" class="form-control form-control-sm" name="contact_person" id="contact_person" value="" placeholder="Contact Person Name *">
                      </div>

                      <div class="form-group col-md-4 ">
                        <label>Contact Number *</label>
                        <input type="number" class="form-control form-control-sm" name="contact_no" id="contact_no" value="" placeholder="Contact Number *">
                      </div>

                      <div class="form-group col-md-4 ">
                        <label>Equipmeny Type *</label>
                        <input type="text" class="form-control form-control-sm" name="equipment_type" id="equipment_type" value="" placeholder="Equipmeny Type *">
                      </div>

                      <div class="form-group col-md-4 ">
                        <label>Make *</label>
                        <input type="text" class="form-control form-control-sm" name="make" id="make" value="" placeholder="Make *">
                      </div>

                      <div class="form-group col-md-4 ">
                        <label>Machine Model *</label>
                        <input type="number" class="form-control form-control-sm" name="machine_model" id="machine_model" value="" placeholder="Machine Model *">
                      </div>

                      <div class="form-group col-md-4 ">
                        <label>Machine Serial no *</label>
                        <input type="text" class="form-control form-control-sm" name="machine_serial_no" id="machine_serial_no" value="" placeholder="Machine Serial no *">
                      </div>

                      <div class="form-group col-md-6 select_sm">
                        <label>Problem Information *</label>
                        <textarea class="form-control" name="name" rows="3" cols="85"></textarea>
                      </div>

                      <div class="form-group col-md-6 select_sm">
                        <label>Additional Details *</label>
                        <textarea class="form-control" name="name" rows="3" cols="85"></textarea>
                      </div>


                      <div class="form-group col-md-6 ">
                        <label>Engineer Name*</label>
                        <input type="text" class="form-control form-control-sm" name="engineer_name" id="engineer_name" value="" placeholder="Engineer Name*">
                      </div>

                      <div class="form-group col-md-6 ">
                        <label>Engineer Contact no *</label>
                        <input type="number" class="form-control form-control-sm" name="engineer_no" id="engineer_no" value="" placeholder="Engineer Contact no *">
                      </div>

                      <div class="col-md-6">
                      <div class="form-group col-md-12 text-right">
                      <button type="button" id="add_row1" class="btn btn-sm btn-primary">Add Row</button>
                    </div>
                    <div class="form-group col-md-12">
                      <table id="myTable1" class="table table-bordered tbl_list">
                        <thead>
                        <tr>
                          <th>Problem Info</th>
                          <th class="wt_50"></th>
                        </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <select class="form-control form-control-sm" name="problem_info_id" id="problem_info_id" data-placeholder="Problem Info">
                                <option value="">Problem Info</option>
                                <option >1</option>
                              </select>
                            </td>
                            <td class="wt_50"></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>

                  <div class="col-md-6">
                  <div class="form-group col-md-12 text-right">
                  <button type="button" id="add_row2" class="btn btn-sm btn-primary">Add Row</button>
                </div>
                <div class="form-group col-md-12">
                  <table id="myTable2" class="table table-bordered tbl_list">
                    <thead>
                    <tr>
                      <th>Problem Rectification</th>
                      <th class="wt_50"></th>
                    </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <select class="form-control form-control-sm" name="rectification_id" id="rectification_id" data-placeholder="Problem Rectification">
                            <option value="">Problem Rectification</option>
                            <option >1</option>
                          </select>
                        </td>
                        <td class="wt_50"></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>

                      <div class="form-group col-md-6 ">
                        <label>Reported Date *</label>
                        <input type="text" class="form-control form-control-sm" name="reported_date" id="reported_date" value="" placeholder="Reported Date *">
                      </div>

                      <div class="form-group col-md-6 ">
                        <label>Reported Time *</label>
                        <input type="number" class="form-control form-control-sm" name="reported_time" id="reported_time" value="" placeholder="Reported Time *">
                      </div>

                      <div class="form-group col-md-6 ">
                        <label>Place *</label>
                        <input type="number" class="form-control form-control-sm" name="reported_time" id="reported_time" value="" placeholder="Place *">
                      </div>


                      <div class="form-group col-md-6 select_sm">
                        <label>Select Call Status *</label>
                        <select class="form-control select2" name="call_visit_status_id" id="call_visit_status_id" data-placeholder="Select Call Status *">
                          <option value="">Select Call Status *</option>
                        </select>
                      </div>

                      <div class="form-group col-md-12 select_sm">
                        <label>Remark</label>
                        <textarea class="form-control" name="name" rows="3" cols="85"></textarea>
                      </div>

                      <div class="col-md-12 text-left">
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="technical_approval" id="technical_approval" value="0" <?php if(isset($student_info) && $student_info['student_status'] == 0){ echo 'checked'; } ?>>
                          <label for="technical_approval" class="custom-control-label">This Report Needed Technical User Approval</label>
                        </div>
                      </div>

                    </div>
                    <div class="card-footer clearfix" style="display: block;">
                      <div class="row">
                        <div class="col-md-6 text-left">

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
                <h3 class="card-title">List All Call Visit Information</h3>
              </div>
              <div class="card-body p-2">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th class="d-none">#</th>
                    <th class="wt_50">Action</th>
                    <th>Call VisitNo.</th>
                    <th>Call VisitDate</th>
                    <th>Party Name</th>
                    <th>Machine Serial No.</th>
                    <th>Allocate Engineer</th>
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
                          <a href="<?php echo base_url() ?>Master/delete_student/<?php echo $list->student_id; ?>" type="button" class="btn btn-sm btn-default" onclick="return confirm('Delete this Call Visit Information');"><i class="fa fa-trash text-danger"></i></a>
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

  $('#add_row1').click(function(){
    i++;
    var row = ''+
    '<tr>'+
    '<td>'+
      '<select class="form-control form-control-sm" name="problem_info_id" id="problem_info_id" data-placeholder="Problem Info">'+
        '<option value="">Problem Info</option>'+
        '<option >1</option>'+
      '</select>'+
    '</td>'+

      '<td class="wt_50"><a class="rem_row"><i class="fa fa-trash text-danger"></i></a></td>'+
    '</tr>';
    $('#myTable1').append(row);
  });

  $('#myTable1').on('click', '.rem_row', function () {
   $(this).closest('tr').remove();
  });
  </script>

  <script type="text/javascript">
  // Add Row...
  <?php if(isset($update)){ ?>
  var i = <?php echo $i-1; ?>
  <?php } else { ?>
  var i = 1;
  <?php } ?>

  $('#add_row2').click(function(){
    i++;
    var row = ''+
    '<tr>'+
    '<td>'+
      '<select class="form-control form-control-sm" name="rectification_id" id="rectification_id" data-placeholder="Problem Rectification">'+
        '<option value="">Problem Rectification</option>'+
        '<option >1</option>'+
      '</select>'+
    '</td>'+

      '<td class="wt_50"><a class="rem_row"><i class="fa fa-trash text-danger"></i></a></td>'+
    '</tr>';
    $('#myTable2').append(row);
  });

  $('#myTable2').on('click', '.rem_row', function () {
   $(this).closest('tr').remove();
  });
  </script>








</body>
</html>
