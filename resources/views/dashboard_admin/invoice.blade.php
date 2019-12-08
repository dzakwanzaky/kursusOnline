@extends('dashboard_admin/base')
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
              <table class="table table-responsive-lg table-bordered small" id="jadwal">
                <thead class="thead-dark">
                    <tr>
                        <th>No.</th>
                        <th>No. Invoice</th>
                        <th>Kelas</th>
                        <th>Program</th>
                        <th>Lokasi</th>
                        <th>Status</th>
                        <th>Konfirmasi</th>
                        <th>Unduh</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1.</td>
                        <td>#190930001</td>
                        <td>6 SD</td>
                        <td>1</td>
                        <td>Sendowo</td>
                        <td>
                            <a class=" btn btn-sm btn-danger" style="color:white;">
                            <span>Belum Konfirmasi</span>
                            </a>
                        </td>
                        <td>
                            Wa
                        </td>
                        <td>
                        <a class=" btn btn-sm btn-success" style="color:white;">
                            <span class="fa fa-download"></span>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
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