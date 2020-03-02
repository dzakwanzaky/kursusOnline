@extends('dashboard_admin/baseTutor')
@section('content')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Daftar Tutor Belum Aktif</h1>
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
                        <strong>INFO!</strong> Jika jadwal sudah sesuai dan tutor memenuhi syarat, klik tombol <strong>MENUNGGU</strong>
                        pada tabel status dan status akan berubah menjadi <strong>AKTIF</strong>.
                    </div>
              <table class="table table-bordered table-striped table-responsive-md" id="datakaryawan"> 
              <thead class="thead-dark"> 
                <tr class="table-secondary" style="text-align:center; text-transform: uppercase">
                  <th>No.</th>
                  <th>Nama Lengkap</th>
                  <th>Jenis Kelamin</th>
                  <th>Alamat</th>
                  <th>Status</th>
                  <th>Aksi</th>

               </tr>
              </thead>
              <tbody>
                    <tr>
                    @php $no = 1; @endphp
                    @foreach($data as $d)
                        <td>{{ $no++ }}</td>
                        <td>{{ $d->jenis_kelamin }}</td>
                        <td>{{ $d->nama_tutor }}</td>
                        <td>{{ $d->kabupaten }} {{ $d->kecamatan }} {{ $d->provinsi }} </td>
                      <td><form action="{{ route('dataTutor.update', $d->id) }}" method="post" enctype="multipart/form-data">
                          {{ csrf_field() }}
                          {{ method_field('PUT') }}
                          <input style="display:none" type="text" class="form-control" id="nama_tutor" name="nama_tutor" value="{{ $d->nama_tutor }}">
                         <input style="display:none" type="text" class="form-control" id="pendidikan" name="pendidikan" value="{{ $d->pendidikan }}">
                          <input style="display:none" type="text" class="form-control" id="mata_pelajaran" name="mata_pelajaran" value="{{ $d->mata_pelajaran }}">
                          <input style="display:none"  type="text" class="form-control" id="kota" name="kota" value="{{ $d->kota }}">
                          <input  style="display:none" type="text" class="form-control" id="kecamatan" name="kecamatan" value="{{ $d->kecamatan }}">
                          <input style="display:none" type="text" class="form-control" id="provinsi" name="provinsi" value="{{ $d->provinsi }}">
                        <button value="AKTIF" id="status" name="status" class="btn btn-sm btn-primary" type="submit" style="text-align:center"> 
                        {{ $d->status }}</button>
                        </td>
                        <td class="d-flex">
                        <a id="status" name="status" class="btn btn-sm btn-primary mr-2" style="color:white" href="{{route('profileTutorAdmin', $d->id)}}"> DETAIL</a>
                        <a class="btn btn-sm btn-primary mr-2" type="submit" style="color:white" href="{{route('jadwalTutor', $d->id)}}">JADWAL</a>

                  
                        </td>
                      </form>
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
  @endsection
  @section('sweet')
  <script>
         $(document).ready( function () {
           $('#datakaryawan').DataTable();
           });
      </script>
  @endsection