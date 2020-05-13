@extends('murid/base')
@section('content')
<link rel="stylesheet" href="{{asset('/assets')}}/bootstrap/css/bootstrap.min.css">
<!-- Content Wrapper. Contains page content -->
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Jadwal Les</h1>
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
                                @foreach($data as $d)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $d->jadwal->name }}</td>
                                    <td>{{ $d->invoice->kelas->kelas }}</td>
                                    <td>{{ $d->mapel->mapel }}</td>
                                    <td>{{ $d->hari1 }} {{ $d->waktu_hari1 }}</td>
                                    <td id="hari2td">{{ $d->hari2 }} {{ $d->waktu_hari2 }}</td>
                                    <td>
                                        <button class="btn btn-sm btn-primary">{{$d->status}}</button>
                                    </td>
                                    <td>
                                        <a type="button" class="btn btn-sm btn-primary"
                                            href="{{route('absen.show', $d->id)}}">
                                            Lihat Kehadiran
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

<script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

@endsection
@section('sweet')
<script>
    $(document).ready(function () {
        $('#jadwal').DataTable();
    });
</script>


@endsection