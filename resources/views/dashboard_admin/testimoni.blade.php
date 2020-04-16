@extends('dashboard_admin/base')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Testimoni Siswa</h1>
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


                            <form action="{{ url('testimoni/add') }}"> <button class=" btn btn-md btn-success"
                                    style="float:right">Tambah Testimoni</button></form>

                            <table class="table table-bordered table-striped table-responsive-md" id="program">
                                <thead class="thead-dark">
                                    <tr class="table-secondary" style="text-align:center; text-transform: uppercase">
                                        <th>No.</th>
                                        <th>Nama</th>
                                        <th>Isi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach($testi as $d)
                                    <tr style="text-align:center">
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $d->user->name }}</td>
                                        <td>{{ $d->isi }}</td>

                                        <td class="d-flex" style="text-align:center">
                                            <a class="btn btn-sm btn-info mr-2" data-toggle="tooltip"
                                                data-placement="top" title="Profil Siswa" style="color:white"
                                                href="{{route('profileSiswaAdmin', $d->murid_id)}}">
                                                <i class="fas fa-user-graduate"></i>
                                            </a>
                                            <a href="{{route('testimoni.edit',$d->id)}}"
                                                class="btn btn-sm btn-primary mr-2" data-toggle="tooltip"
                                                data-placement="top" title="Edit Testimoni"><i
                                                    class="far fa-edit"></i></a>

                                            <form action="{{route('testimoni.delete',$d->id)}}" data-toggle="tooltip"
                                                data-placement="top" title="Hapus Testimoni" class="destroy"
                                                onclick="return confirm('Anda yakin ingin menghapus data?')">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <button type="submit" class="btn btn-sm btn-danger mr-2"
                                                    style="color:white"><i class="far fa-trash-alt"></i></button>
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
        $('#program').DataTable();
    });

    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });
</script>
@endsection
