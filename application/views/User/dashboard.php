<!DOCTYPE html>
<html>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12 text-center mt-2">
            <h1> Dashboard Information</h1>
          </div>
          <!-- <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
            </ol>
          </div> -->
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <hr>
        <h4 class="mb-3">Master Summary</h4>
        <div class="row">
          <!-- left column -->
          <div class="col-md-2 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>3</h3>
                <p>Total Engineers</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-md-2 col-6">
            <div class="small-box bg-yellow">
              <div class="inner">
                <h3>5</h3>
                <p>Total Party Groups</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-md-2 col-6">
            <div class="small-box bg-green">
              <div class="inner">
                <h3>0</h3>
                <p>Total Partys</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-md-2 col-6">
            <div class="small-box bg-red">
              <div class="inner">
                <h3>1</h3>
                <p> Technical Users</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-md-2 col-6">
            <div class="small-box bg-green">
              <div class="inner">
                <h3> 1 </h3>
                <p>Total Products</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-md-2 col-6">
            <div class="small-box bg-red">
              <div class="inner">
                <h3>0</h3>
                <p> AMC Contracts</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        <hr>

        <div class="row">
          <div class="col-md-6">
            <h4 class="text-center">Ticket Info</h4>
            <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Status</th>
                      <th>count</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Open Ticket</td>
                      <td> <span class="badge bg-danger">25</span> </td>
                    </tr>
                    <tr>
                      <td>Completed Ticket</td>
                      <td><span class="badge bg-success">25</span></td>
                    </tr>
                    <tr>
                      <td>In progress Ticket</td>
                      <td><span class="badge bg-warning">25</span></td>
                    </tr>
                  </tbody>
                </table>
          </div>

          <div class="col-md-6">
            <h4 class="text-center">Call Visit Info</h4>
            <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Status</th>
                      <th>count</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Open Call Visit no.</td>
                      <td> <span class="badge bg-danger">25</span> </td>
                    </tr>
                    <tr>
                      <td>Completed Call Visit no.</td>
                      <td><span class="badge bg-success">25</span></td>
                    </tr>
                    <tr>
                      <td>In progress Call Visit no.</td>
                      <td><span class="badge bg-warning">25</span></td>
                    </tr>
                  </tbody>
                </table>
          </div>
        </div>

        <hr>


        <div class="row">
          <div class="col-md-6">
            <div class="card" style="overflow-x: scroll; padding:10px;">
            <h4 class="text-center">AMC Contract Info List</h4>
            <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>AMC Type</th>
                      <th>Contract Ref No.</th>
                      <th>Party Group</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>AMC000001</td>
                      <td> Comprehensive AMC </td>
                      <td>No. / C & F / 2039 of 2019 </td>
                      <td>District and Sessions Court, Sindhudurg</td>
                      <td class="text-center">
                        <div class="btn-group">
                          <a href="" class="btn btn-sm btn-default"><i class="fa fa-edit text-primary"></i></a>
                          <a href="" class="btn btn-sm btn-default" onclick="return confirm('Delete this Batch');" ><i class="fa fa-trash text-danger"></i></a>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>AMC000001</td>
                      <td> Comprehensive AMC </td>
                      <td>No. / C & F / 2039 of 2019 </td>
                      <td>District and Sessions Court, Sindhudurg</td>
                      <td class="text-center">
                        <div class="btn-group">
                          <a href="" class="btn btn-sm btn-default"><i class="fa fa-edit text-primary"></i></a>
                          <a href="" class="btn btn-sm btn-default" onclick="return confirm('Delete this Batch');" ><i class="fa fa-trash text-danger"></i></a>
                        </div>
                      </td>
                    </tr>

                    <tr>
                      <td>AMC000001</td>
                      <td> Comprehensive AMC </td>
                      <td>No. / C & F / 2039 of 2019 </td>
                      <td>District and Sessions Court, Sindhudurg</td>
                      <td class="text-center">
                        <div class="btn-group">
                          <a href="" class="btn btn-sm btn-default"><i class="fa fa-edit text-primary"></i></a>
                          <a href="" class="btn btn-sm btn-default" onclick="return confirm('Delete this Batch');" ><i class="fa fa-trash text-danger"></i></a>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>AMC000001</td>
                      <td> Comprehensive AMC </td>
                      <td>No. / C & F / 2039 of 2019 </td>
                      <td>District and Sessions Court, Sindhudurg</td>
                      <td class="text-center">
                        <div class="btn-group">
                          <a href="" class="btn btn-sm btn-default"><i class="fa fa-edit text-primary"></i></a>
                          <a href="" class="btn btn-sm btn-default" onclick="return confirm('Delete this Batch');" ><i class="fa fa-trash text-danger"></i></a>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>

                  </div>
          </div>

          <div class="col-md-6">
            <div class="card" style="overflow-x: scroll; padding:10px;">
            <h4 class="text-center">Tickets For Assignment</h4>
            <table id="example2" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Date</th>
                      <th>Party Name</th>
                      <th>Allocate Engineer</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>22</td>
                      <td> 	12-06-2020 </td>
                      <td>Local Crime Branch </td>
                      <td>not allocate</td>
                      <td class="text-center">
                        <div class="btn-group">
                          <a href="" class="btn btn-sm btn-default"><i class="fa fa-edit text-primary"></i></a>
                          <a href="" class="btn btn-sm btn-default" onclick="return confirm('Delete this Batch');" ><i class="fa fa-trash text-danger"></i></a>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>22</td>
                      <td> 	12-06-2020 </td>
                      <td>Local Crime Branch </td>
                      <td>not allocate</td>
                      <td class="text-center">
                        <div class="btn-group">
                          <a href="" class="btn btn-sm btn-default"><i class="fa fa-edit text-primary"></i></a>
                          <a href="" class="btn btn-sm btn-default" onclick="return confirm('Delete this Batch');" ><i class="fa fa-trash text-danger"></i></a>
                        </div>
                      </td>
                    </tr>

                    <tr>
                      <td>22</td>
                      <td> 	12-06-2020 </td>
                      <td>Local Crime Branch </td>
                      <td>not allocate</td>
                      <td class="text-center">
                        <div class="btn-group">
                          <a href="" class="btn btn-sm btn-default"><i class="fa fa-edit text-primary"></i></a>
                          <a href="" class="btn btn-sm btn-default" onclick="return confirm('Delete this Batch');" ><i class="fa fa-trash text-danger"></i></a>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>22</td>
                      <td> 	12-06-2020 </td>
                      <td>Local Crime Branch </td>
                      <td>not allocate</td>
                      <td class="text-center">
                        <div class="btn-group">
                          <a href="" class="btn btn-sm btn-default"><i class="fa fa-edit text-primary"></i></a>
                          <a href="" class="btn btn-sm btn-default" onclick="return confirm('Delete this Batch');" ><i class="fa fa-trash text-danger"></i></a>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>

                  </div>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
  </div>

</body>
</html>
