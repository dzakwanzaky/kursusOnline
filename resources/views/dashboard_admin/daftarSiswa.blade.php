@extends('dashboard_admin/base')
@section('content')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Daftar Siswa</h1>
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
              <div class="alert alert-info" style="font-size:14px">
                        <strong>INFO!</strong> Jika bukti pembayaran sudah sesuai, klik tombol <strong>UNPAID</strong>
                        pada tabel status sebagai tanda pembayaran telah diterima.
                    </div>
              <table class="table table-bordered table-striped table-responsive-sm" id="siswa"> 
              <thead class="thead-dark">
                <tr class="table-secondary" style="text-align:center; text-transform: uppercase">

                  <th>No.</th>
                  <th>Nama Lengkap</th>
                  <th>Jenis Kelamin</th>
                  <th>Alamat</th>
                  <th>Status</th>
                  <th>Bukti Pembayaran</th>
               </tr>
              </thead>
              <tbody>
                    <tr>
                    @php $no = 1; @endphp
                    @foreach($data as $d)
                        <td>{{ $no++ }}</td>
                        <td>{{ $d->nama_siswa }}</td>
                        <td>{{ $d->jenis_kelamin }}</td>
                        <td>{{ $d->kota }} {{ $d->kecamatan }} {{ $d->provinsi }} </td>

                      <form action="{{ route('dataSiswa.update', $d->id) }}" method="post" enctype="multipart/form-data">
                          {{ csrf_field() }}
                          {{ method_field('PUT') }}
                         

                        <td>
                        <input style="display:none" type="text" class="form-control" id="nama_siswa" name="nama_siswa" value="{{ $d->nama_siswa }}">
                        <input style="display:none" type="text" class="form-control" id="provinsi" name="provinsi" value="{{ $d->provinsi }}">
                          <input style="display:none" type="text" class="form-control" id="kota" name="kota" value="{{ $d->kota }}">
                          <input style="display:none" type="text" class="form-control" id="kecamatan" name="kecamatan" value="{{ $d->kecamatan }}">
                        <button value="PAID" id="status" name="status" type="submit" class=" btn btn-sm btn-primary" style="text-align:center"> 
                        {{ $d->status }}</button>
                        </td>
                      </form>
                    
                        <td>
                        <a href="{{ url('/data_file/'.$d->files->file) }}" target="_blank">
                          <img width="100px" src="{{ url('/data_file/'.$d->files->file) }}">
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
  </div>
  <!-- /.content-wrapper -->
  <script
      src="https://code.jquery.com/jquery-3.4.1.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous"></script>
  @endsection
  @section('sweet')
  <script>
         $(document).ready( function () {
           $('#siswa').DataTable();
           });
      </script>
  @endsection