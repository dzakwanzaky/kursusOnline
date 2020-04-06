@extends('dashboard_admin/baseTutor')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Daftar Tutor Tidak Aktif</h1>
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
                        <div class="card-body table-responsive-m" style="overflow-x:auto;">

                            <table class="table table-bordered table-striped table-responsive-md" id="tutor">
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
                                        <td>
                                            <button id="status" name="status" class="btn btn-sm btn-secondary"
                                                style="text-align:center">
                                                {{ $d->status }}</button>
                                        </td>
                                        <td class="d-flex">
                                            <a id="status" data-toggle="tooltip" data-placement="top"
                                                title="Detail Profil" name="status" class="btn btn-sm btn-info mr-2"
                                                style="color:white" href="{{route('profileTutorAdmin', $d->id)}}"><i
                                                    class="fas fa-info-circle"></i></a>

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
        $('#tutor').DataTable();
    });

    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
@endsection
