@extends('dashboard_admin/base')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard Admin</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
      <div class="container">
            <div class="card mt-2">
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-3 col-xs-6">
                      <!-- small box -->
                      <div class="small-box bg-red">
                        <div class="inner">
                          <h3>10</h3>
                          
                          <p>Visitor</p>
                        </div>
                      <div class="icon">
                        <i class="ion-stats-bars"></i>
                      </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                      <!-- small box -->
                      <div class="small-box bg-yellow">
                        <div class="inner">
                          <h3>{{ DB::table('users')->where('role','siswa')->count()}}</h3>
                            <p>Murid</p>
                        </div>
                      <div class="icon">
                        <i class="ion ion-person-stalker"></i>
                      </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                      <!-- small box -->
                      <div class="small-box bg-green">
                        <div class="inner">
                          <h3>{{ DB::table('users')->where('role','tutor')->count()}}</h3>

                            <p>Tutor</p>
                        </div>
                      <div class="icon">
                        <i class="ion ion-person"></i>
                      </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                      <!-- small box -->
                      <div class="small-box bg-blue">
                        <div class="inner">
                          <h3>{{ DB::table('model_invoice')->count()}}</h3>

                            <p>Invoice</p>
                        </div>
                      <div class="icon">
                        <i class="ion ion-ios-cart"></i>
                      </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                  </div>
                </div> 
              </div>
            </div>
          </div>

            
          <!-- /.col-md-6 -->
          
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection