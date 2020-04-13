@extends('dashboard_admin/baseJadwal')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Daftar Pengajuan Jadwal Tutor</h1>
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
                <div class="alert alert-light" style="background-color:white;font-size:14px;color:black">
                                <strong>INFO!</strong> Jika jadwal sudah valid, klik tombol
                               <button  class="btn btn-sm btn-success">
                               <i class="fas fa-check"></i>
                               </button> 
                                untuk mengonfirmasi pengajuan jadwal.
                            </div>
                    <div class="card">
                        <div class="card-body table-responsive-m" style="overflow-x:auto;">
                            <table class="table table-bordered table-striped table-responsive-md" id="jadwal">
                         
                                <thead class="thead-dark">
                                    <tr class="table-secondary" style="text-align:center; text-transform: uppercase">
                                        <th rowspan="2">No.</th>
                                        <th rowspan="2">Nama Tutor</th>
                                        <th rowspan="2">Nama Siswa</th>
                                        <th rowspan="2">Program</th>
                                        <th rowspan="2"> Kelas</th>
                                        <th rowspan="2">Mata Pelajaran</th>
                                        <th colspan="2" style="border-bottom:1px solid;border-bottom-color:#dee2e6">Sesi</th>
                                        <th rowspan="2">Status</th>
                                        <th rowspan="2">Aksi</th>
                                    </tr>
                                    <tr class="table-secondary" style="text-align:center; text-transform: uppercase">
                                        <th>1</th>
                                        <th>2</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach($data as $d)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $d->tutor->name }}</td>
                                        <td>{{ $d->jadwal->name }}</td>
                                        <td>{{ $d->invoice->program }}</td>
                                        <td>{{ $d->invoice->kelas }}</td>
                                        <td>{{ $d->mata_pelajaran }}</td>
                                        <td>{{ $d->hari1 }}, PUKUL {{ $d->waktu_hari1 }}</td>
                                        <td>{{ $d->hari2 }}, PUKUL {{ $d->waktu_hari2 }}</td>
                                        <td>
                                            <a class=" btn btn-sm btn-warning" style="color:white;">
                                                <span>{{ $d->status }}</span>
                                            </a>
                                        </td>

                                        <td class="d-flex">
                                            <a class="btn btn-sm btn-info mr-1" data-toggle="tooltip"
                                                data-placement="top" title="Profil Siswa" style="color:white"
                                                href="{{route('profileSiswaAdmin', $d->murid_id)}}">
                                                <i class="fas fa-chalkboard-teacher"></i>
                                            </a>
                                            <a class="btn btn-sm btn-info mr-2" data-toggle="tooltip"
                                                data-placement="top" title="Profil Tutor" style="color:white"
                                                href="{{route('profileTutorAdmin', $d->tutor_id)}}">
                                                <i class="fas fa-user-graduate"></i>
                                                </i></a>
                                            <form action="{{ route('pendaftaranSiswa.update', $d->id) }}" method="post"
                                                enctype="multipart/form-data">
                                                {{ csrf_field() }}
                                                {{ method_field('PUT') }}
                                                
                                                <input type="text" class="form-control" id="tutor_id" name="tutor_id"
                                                    style="display:none" value="{{ $d->tutor_id }}">
                                                <button type="submit" value="AKTIF" id="status" name="status"
                                                    class=" btn btn-sm btn-success mr-2" data-toggle="tooltip"
                                                    data-placement="top" title="Setujui Pengajuan" onclick="return confirm('Anda yakin ingin menyetujui pengajuan?')"><i
                                                        class="fas fa-check"></i>
                                                    
                                                        
                                        </form>
                                        <form action="{{ route('pendaftaranSiswa.update', $d->id) }}" method="post"
                                                enctype="multipart/form-data">
                                                {{ csrf_field() }}
                                                {{ method_field('PUT') }}
                                            
                                                <input type="text" class="form-control" id="tutor_id" name="tutor_id"
                                                    style="display:none" value="">
                                            
                                                        <button type="submit" value="MENUNGGU" id="status" name="status"
                                                    class=" btn btn-sm btn-danger mr-1" data-toggle="tooltip"
                                                    data-placement="top" title="Tolak Pengajuan" onclick="return confirm('Anda yakin ingin menolak pengajuan?')"><i
                                                        class="fas fa-times"></i>
                                                        
                                        </form>
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
@endsection
@section('sweet')
<script>
    $(document).ready(function () {
        $('#jadwal').DataTable({
            "autoWidth": false
        });
    });

    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>


@endsection
