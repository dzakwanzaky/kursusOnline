@extends('murid/base')
@section('content')
<!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Jadwal Les</h1>
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
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
              <table class="table table-responsive-lg table-bordered small" id="jadwal">
                <thead class="thead-dark">
                    <tr>
                        <th>No.</th>
                        <th>Tutor</th>
                        <th>Program</th>
                        <th>Kelas</th>
                        <th>Mata Pelajaran</th>
                        <th>Hari Waktu</th>
                        <th>Hari Waktu</th>
                        <th>Hari Waktu</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    @php $no = 1; @endphp
                @foreach($data ?? '' as $d)
                    <tr>
                        <td>{{ $no++ }}. </td>
                        <td>{{ $d->nama_tutor }}</td>
                        <td>{{ $d->program }}</td>
                        <td>{{ $d->kelas }} SD</td>
                        <td>{{ $d->mata_pelajaran }}</td>
                        <td>{{ $d->hari1 }}, PUKUL {{ $d->waktu_hari1 }}</td>
                        <td>{{ $d->hari2 }}, PUKUL {{ $d->waktu_hari2 }}</td>
                        <td>{{ $d->hari3 }}, PUKUL {{ $d->waktu_hari3 }}</td>
                        <td>
                            <a class=" btn btn-sm btn-primary" style="color:white;">
                            <span>{{ $d->status }}</span>
                            </a>
                        </td>
                    </tr>
                    @endforeach

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
  <script
      src="https://code.jquery.com/jquery-3.4.1.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous"></script>
  @endsection