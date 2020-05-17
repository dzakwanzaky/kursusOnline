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
                <div class="alert alert-light" style="background-color:white;font-size:14px;color:black">
                                <strong>INFO!</strong> Klik tombol
                               <button  class="btn btn-sm btn-success">
                               <i class="fas fa-check"></i>
                               </button> 
                                untuk mengonfirmasi tutor.
                            </div>
                    <div class="card">
                        <div class="card-body table-responsive-m" style="overflow-x:auto;">
                    
                          
                            <table class="table table-bordered table-striped table-responsive-md" id="datakaryawan">
                                <thead class="thead-dark">
                                    <tr class="table-secondary" style="text-align:center; text-transform: uppercase">
                                        <th>No.</th>
                                        <th>Nama</th>
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
                                        <td>{{ $d->tutor->name }}</td>
                                        <td>{{ $d->jenis_kelamin }}</td>
                                        <td>{{ $d->kabupaten }} {{ $d->kecamatan }} {{ $d->provinsi }} </td>
                                        <td>
                                            <button class="btn btn-sm btn-warning" style="color:white" >
                                                {{ $d->status }}</button>
                                        </td>
                                        <form action="{{ route('konfirmasiTutor', $d->id) }}" 
                                                enctype="multipart/form-data">
                                                {{ csrf_field() }}
                                                {{ method_field('PUT') }}
                                        <td class="d-flex">
                                                <a id="status" name="status" class="btn btn-sm btn-info mr-2"
                                                    data-toggle="tooltip" data-placement="top" title="Detail Tutor"
                                                    style="color:white" href="{{route('profileTutorAdmin', $d->id)}}">
                                                    <i class="fas fa-info-circle"></i></a>
                                              
                                                <button value="AKTIF" id="status" name="status"
                                                    class="btn btn-sm btn-success" data-toggle="tooltip"
                                                    data-placement="top" title="Setujui" type="submit"
                                                    style="text-align:center" onclick="return confirm('Anda yakin ingin menyetujui pendaftaran tutor?')"><i class="fas fa-check"></i>
                                                </button>
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
    $(document).ready(function () {
        $('#datakaryawan').DataTable({
            "autoWidth": false
        });
    });

    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
@endsection