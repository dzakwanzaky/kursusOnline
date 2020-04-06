@extends('dashboard_admin/baseMurid')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Daftar Siswa Tidak Aktif</h1>
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
                    <div class="card-body table-responsive-m"  style="overflow-x:auto;" >
                            <table class="table table-bordered table-striped table-responsive-md" id="siswa">
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
                                        <td>{{ $d->user->name }}</td>
                                        <td>{{ $d->jenis_kelamin }}</td>
                                        <td>{{ $d->kota }} {{ $d->kecamatan }} {{ $d->provinsi }} </td>

                                        <td>
                                            <input style="display:none" type="text" class="form-control" id="nama_siswa"
                                                name="nama_siswa" value="{{ $d->nama_siswa }}">
                                            <input style="display:none" type="text" class="form-control" id="provinsi"
                                                name="provinsi" value="{{ $d->provinsi }}">
                                            <input style="display:none" type="text" class="form-control" id="kota"
                                                name="kota" value="{{ $d->kota }}">
                                            <input style="display:none" type="text" class="form-control" id="kecamatan"
                                                name="kecamatan" value="{{ $d->kecamatan }}">
                                            <button class=" btn btn-sm btn-secondary" style="text-align:center">
                                                {{ $d->status }}</button>
                                        </td>
                                        <td style="text-align:center">
                                            <a class="btn btn-sm btn-info mr-2" data-toggle="tooltip"
                                                data-placement="top" title="Detail Siswa" style="color:white"
                                                href="{{route('profileSiswaAdmin', $d->id)}}"> <i
                                                    class="fas fa-info-circle"></i></a>
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
<script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
@endsection
@section('sweet')
<script>
    $(document).ready(function () {
        $('#siswa').DataTable();
    });

    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
@endsection