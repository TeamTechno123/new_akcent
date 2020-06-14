<!DOCTYPE html>
<html>
<style media="screen">
  .dataTables_length{
    display: none !important;
  }
  .dataTables_filter{
    display: none !important;
  }
</style>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header pt-0 pb-2">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12 text-left mt-2">
            <h4>Item Information</h4>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card collapsed-card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Filter</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-sm btn-primary" data-card-widget="collapse">Hide / Show </button>
                </div>
              </div>
              <!--  -->
                <div class="card-body p-0" style="display: none;">
                  <form class="input_form m-0" id="form_action" role="form" action="" method="post">
                    <div class="row px-3">
                      <div class="col-md-10">
                        <div class="row">
                          <div class="form-group col-md-6 select_sm">
                            <label>Select Party Group</label>
                            <select class="form-control select2" name="party_group_id" id="party_group_id" data-placeholder=" Select Party Group">
                              <option value=""> Select Party Group</option>
                            </select>
                          </div>

                          <div class="form-group col-md-6 select_sm">
                            <label>Select Party </label>
                            <select class="form-control select2" name="party_id" id="party_id" data-placeholder=" Select Party ">
                              <option value=""> Select Party </option>
                            </select>
                          </div>



                        </div>
                      </div>

                      <div class="col-md-2">
                        <div class="form-group col-md-2 text-right mt-4">
                          <button id="btn_save" type="submit" class="btn btn-sm btn-primary px-4">Get</button>
                        </div>
                      </div>



                      </div>

                  </form>
                </div>
            </div>
          </div>

          <div class="col-md-12">

            <!-- Education Level -->
            <div class="row">

              <div class="col-md-12">
                <div class="card card-default">

                      <div class="card-header">
                        <div class="row">
                          <div class="col-md-8">
                        <h5 class="card-title f-16">List All Item Information</h5>
                      </div>
                      <div class="form-group col-md-4 text-right">
                          <button  type="button" class="btn btn-sm btn-primary ">Export</button>
                      </div>
                    </div>
                  </div>

                  <div class="card-body pt-0" style="overflow-x: scroll;">

                    <table id="example2" class="table table-striped" >
                      <thead>
                      <tr>
                        <th style="display:none;">#</th>
                        <th>Item Name</th>
                        <th>HSN</th>
                        <th>Item Company</th>
                        <th>Item Group</th>
                        <th>Tax Slab</th>
                        <th>Unit </th>
                        <th>Sale Price </th>
                        <th>MRP</th>
                        <th>Warranty</th>
                        <th class="wt_50">Action</th>
                      </tr>
                      </thead>
                      <!-- <tbody>

                          <tr>
                            <td style="display:none;"></td>
                            <td>asdf</td>
                            <td>asdf</td>
                            <td>asdf</td>
                            <td>asdf</td>
                            <td>asdf</td>
                            <td>asdf</td>
                            <td>
                              <div class="btn-group">
                                <a href="<?php echo base_url(); ?>Master/edit_education_level/" class="btn btn-sm btn-default"><i class="fa fa-edit text-primary"></i></a>
                                <a href="<?php echo base_url(); ?>Master/delete_education_level/" class="btn btn-sm btn-default" onclick="return confirm('Delete this Education Level');" ><i class="fa fa-trash text-danger"></i></a>
                              </div>
                            </td>
                          </tr>

                      </tbody> -->
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <!-- // Education Level -->



          </div>
        </div>
      </div>
    </section>
  </div>

</body>
</html>

<script src="<?php echo base_url(); ?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/toastr/toastr.min.js"></script>
<script type="text/javascript">
  <?php if($this->session->flashdata('save_success')){ ?>
    $(document).ready(function(){
      toastr.success('Saved successfully');
    });
  <?php } ?>
  <?php if($this->session->flashdata('update_success')){ ?>
    $(document).ready(function(){
      toastr.info('Updated successfully');
    });
  <?php } ?>
  <?php if($this->session->flashdata('delete_success')){ ?>
    $(document).ready(function(){
      toastr.error('Deleted successfully');
    });
  <?php } ?>
</script>
