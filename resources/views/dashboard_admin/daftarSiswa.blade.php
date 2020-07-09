@extends('dashboard_admin/baseMurid')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark" style="float:left">Daftar Les Aktif</h1>
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
                            <table class="table table-bordered table-striped table-responsive-md" id="siswa">
                                <thead class="thead-dark">
                                    <tr class="table-secondary" style="text-align:center; text-transform: uppercase">

                                        <th>No.</th>
                                        <th>Nama</th>
                                        <th>Program</th>
                                        <th>Kelas</th>
                                        <th>Paket</th>
                                        <th>Status</th>
                                        <th>Bukti Pembayaran</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        @php $no = 1; @endphp
                                        @foreach($data as $d)
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $d->user->name }}</td>
                                        <td>{{ $d->program->program }}</td>
                                        <td>{{ $d->kelas->kelas}} </td>
                                         <td>{{$d->paket->nama_paket}} </td>
                                        <td>
                                            <button class=" btn btn-sm btn-success" style="text-align:center">
                                                {{ $d->status }}</button>
                                        </td>
                                        <td>
                                            @if($d->file==null)
                                            <button name="status" class=" btn btn-sm btn-danger"
                                                style="text-align:center">BELUM UPLOAD</button>
                                            @else
                                            <a href="{{ url('/data_file/'.$d->file) }}" target="_blank">
                                                {{ $d->file }}
                                            </a>
                                            @endif
                                        </td>
                                        <form action="{{route('status', $d->id)}}" enctype="multipart/form-data">
                                                {{ csrf_field() }}
                                        <td class="d-flex">
                                         
                                                <input style="display:none" value="TIDAK AKTIF" id="status"
                                                    name="status"></input>
                                                <a class="btn btn-sm btn-info mr-2" data-toggle="tooltip"
                                                    data-placement="top" title="Detail Siswa" style="color:white"
                                                    href="{{route('profileSiswaAdmin', $d->id)}}"> <i
                                                        class="fas fa-info-circle"></i></a>

                                                <button type="submit" class="btn btn-sm btn-danger mr-2"
                                                    data-toggle="tooltip" data-placement="top" title="Nonaktifkan Siswa"
                                                    style="text-align:center" onclick="return confirm('Anda yakin mau menonaktifkan siswa?')"><i class="far fa-trash-alt"></i></button>
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
        $('#siswa').DataTable({
            "autoWidth": false
        });
    });

    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
<script>
        var isiPesan = '{{Session::get('
        success ') }}';
        var exist = '{{Session::has('
        success ') }}';
        if (exist) {
            swal(
                'Sukses!',
                isiPesan,
                'success'
            )
        }
    </script>
@endsection
