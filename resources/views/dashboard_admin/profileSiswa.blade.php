@extends('dashboard_admin/base')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-md-12 col-md-offset-6">
                            <div class="box box-primary">
                                <div class="container-fluid">
                                    <div class="row mb-2">
                                        <div class="col-sm-6">
                                            <h1>Detail Siswa</h1>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
        </div>
        <!-- /.content-header -->
        <!-- Main content -->
        @php $no = 1; @endphp
        @foreach($data as $d)
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-4">
                        <div class="card">
                            <div class="card-body">
                                <i class="fas fa-user mr-2"></i>Foto Profile

                                <hr class="photo">
                                <div class="d-flex justify-content-center" style="overflow-x:auto;">
                                    @if($d->file==null)
                                    <img class="navbar-brand-full" src="{{('/tema/images/user.png')}}" width="300px"
                                        alt="upload foto" style="display:block; margin-left:auto; margin-right:auto;">
                                    @else
                                    <a href="{{ url('/data_file/'.$d->file) }}" target="_blank">
                                        <img width="250px" src="{{ url('/data_file/'.$d->file) }}"
                                            style="display:block; margin-left:auto; margin-right:auto;">
                                    </a>
                                    @endif
                                </div>
                                <hr class="photo">
                                <h4 class="font-weight-normal" style="text-align:center">{{ $d->user->name }}
                                </h4>
                                <h6 class="font-weight-normal" style="text-align:center">{{ $d->user->email }}
                                    </h4>
                                    <h6 class="font-weight-normal" style="text-align:center">
                                        {{ $d->user->phone }}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="card">
                            <div class="card-body">
                                <table class="w-100 table-responsive-md">
                                    <tbody>
                                        <tr>
                                            <th>
                                                Alamat
                                                <input type="text" class="form-control"
                                                    value="{{ $d->provinsi }}, {{ $d->kabupaten }}, {{ $d->kecamatan }}, {{ $d->alamat_detail }}"
                                                    style="margin-right:190px;background:white;border:none" disabled>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>
                                                Jenis Kelamin
                                                <input type="text" class="form-control" value="{{ $d->jenis_kelamin }}"
                                                    style="margin-right:190px;background:white;border:none" disabled>
                                            </th>
                                        </tr>


                                    </tbody>
                                </table>
                                <div class="form-group">
                                </div>

                            </div>
                            <!-- /.col-md-6 -->

                        </div>
                        @endforeach
                        <div class="card">
                            <div class="card-body">
                                <h4>Jadwal Siswa</h4>
                                <table class="table table-responsive-lg table-bordered small" id="jadwal">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama</th>
                                            <th>Kelas</th>
                                            <th>Mata Pelajaran</th>
                                            <th>Sesi 1</th>
                                            <th id="hari2">Sesi 2</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $no = 1; @endphp
                                        @foreach($jadwal as $d)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $d->jadwal->name }}</td>
                                            <td>{{ $d->invoice->kelas->kelas }}</td>
                                            <td>{{ $d->mapel->mapel }}</td>
                                            <td>{{ $d->hari1 }} {{ $d->waktu_hari1 }}</td>
                                            <td id="hari2td">{{ $d->hari2 }} {{ $d->waktu_hari2 }}</td>
                                            <td>
                                                <a class=" btn btn-sm btn-primary" style="color:white;">
                                                    <span>{{ $d->status }}</span>
                                                </a>
                                            </td>
                                            <td>
                                                <a type="button" style="color:white" class="btn btn-sm btn-warning" data-toggle="tooltip"
                                                data-placement="top" title="Lihat Kehadiran"
                                                    href="{{route('kehadiranTutor', $d->id)}}">
                                                    <i class="fas fa-chart-bar"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.col-md-6 -->
                        </div>
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
    </div>
</div>


<!-- /.content-header -->
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
