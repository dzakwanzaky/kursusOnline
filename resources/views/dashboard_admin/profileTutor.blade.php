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
                                            <p style="font-size:24px">Profile Tutor</p>
                                        </div>
                                        <div class="col-sm-6">
                                            <ol class="breadcrumb float-md-right" style="font-size:14px">
                                                <li class="breadcrumb-item">
                                                    <a href="/tutor">Tutor</a>
                                                </li>
                                                <li class="breadcrumb-item active">
                                                    Profile Tutor
                                                </li>
                                            </ol>
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
                                    @if($d->foto==null)
                                    <img class="navbar-brand-full" src="{{('/tema/images/user.png')}}" width="300px"
                                        alt="upload foto" style="display:block; margin-left:auto; margin-right:auto;">
                                    @else
                                    <a href="{{ url('/data_file/'.$d->foto) }}" target="_blank">
                                        <img width="250px" src="{{ url('/data_file/'.$d->foto) }}"
                                            style="display:block; margin-left:auto; margin-right:auto;">
                                    </a>
                                    @endif
                                </div>
                                <hr class="photo">
                                <h4 class="font-weight-normal" style="text-align:center">{{ $d->tutor->name }}
                                </h4>
                                <h6 class="font-weight-normal" style="text-align:center">{{ $d->tutor->email }}
                                    </h4>
                                    <h6 class="font-weight-normal" style="text-align:center">
                                        {{ $d->tutor->phone }}</h6>
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
                                                    value="{{ $d->provinsi }} {{ $d->kabupaten }} {{ $d->kecamatan }}"
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
                                        <tr>
                                            <th>
                                                Pendidikan
                                                <input type="text" class="form-control" value="{{ $d->pendidikan }}"
                                                    style="margin-right:190px;background:white;border:none" disabled>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>
                                                Preferensi Mata Pelajaran
                                                <input type="text" class="form-control"
                                                    value="{{ $d->mata_pelajaran1 }} {{ $d->mata_pelajaran2 }} {{ $d->mata_pelajaran3 }} {{ $d->mata_pelajaran4 }} {{ $d->mata_pelajaran5 }} {{ $d->mata_pelajaran6 }} {{ $d->mata_pelajaran7 }} {{ $d->mata_pelajaran8 }} {{ $d->mata_pelajaran9 }}"
                                                    style="margin-right:190px;background:white;border:none" disabled>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>
                                                Preferensi Kelas
                                                <input type="text" class="form-control"
                                                    value="{{ $d->kelas1 }} {{ $d->kelas2 }} {{ $d->kelas3 }} {{ $d->kelas4 }}{{ $d->kelas5 }} {{ $d->kelas6 }} {{ $d->program }}"
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
                                <h4>Jadwal Tutor</h4>
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
                                            <td>{{ $d->invoice->kelas }}</td>
                                            <td>{{ $d->mata_pelajaran }}</td>
                                            <td>{{ $d->hari1 }} {{ $d->waktu_hari1 }}</td>
                                            <td id="hari2td">{{ $d->hari2 }} {{ $d->waktu_hari2 }}</td>
                                            <td>
                                            @if($d->status== 'MENUNGGU')
                                                <a class=" btn btn-sm btn-primary" style="color:white;">
                                                    <span>{{ $d->status }}</span>
                                                </a>
                                            @elseif($d->status== 'DIPILIH TUTOR')
                                                <a class=" btn btn-sm btn-warning" style="color:white;">
                                                    <span>{{ $d->status }}</span>
                                                </a>
                                                @elseif($d->status== 'AKTIF')
                                                <a class=" btn btn-sm btn-success" style="color:white;">
                                                    <span>{{ $d->status }}</span>
                                                @else
                                                <a class=" btn btn-sm btn-secondary" style="color:white;">
                                                    <span>{{ $d->status }}</span>
                                                </a>
                                            @endif
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
        $('#jadwal').DataTable();
    });

    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
@endsection
