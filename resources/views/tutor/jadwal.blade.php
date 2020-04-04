@extends('tutor/base')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Jadwal Mengajar</h1>

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
                <div class="card-body table-responsive-sm" style="overflow-x:auto;">
                        <table class="table table-responsive-lg table-bordered medium" id="jadwal">
                            <thead class="thead-dark">
                                <tr class="table-secondary" style="text-align:center; text-transform: uppercase">
                                <th rowspan="2">No.</th>
                                    <th rowspan="2">Nama</th>
                                    <th rowspan="2">Alamat</th>
                                    <th rowspan="2">Program</th>
                                    <th rowspan="2">Kelas</th>
                                    <th rowspan="2">Mata Pelajaran</th>
                                    <th colspan="2">Sesi</th>
                                    <th rowspan="2">Aksi</th>
                                </tr>
                                <tr class="table-secondary" style="text-align:center; text-transform: uppercase">
                                    <th>1</th>
                                    <th style="border-right:1px solid">2</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @php $no = 1; @endphp
                                    @foreach($data as $d)

                                    <td>{{ $no++ }}</td>
                                    <td>
                                        {{ $d->jadwal->name }}
                                    </td>
                            
                                    <td>
                                        {{ $d->siswa->provinsi }},
                                        {{ $d->siswa->kabupaten }},
                                        {{ $d->siswa->kecamatan }},
                                        {{ $d->siswa->alamat_detail }}

                                    </td>
                                    <td>
                                        {{ $d->invoice->program }}
                                    </td>
                                    <td>
                                        {{ $d->invoice->kelas }}
                                    </td>
                                 
                                    <td>{{ $d->mata_pelajaran }}</td>
                                    <td>{{ $d->hari1 }} {{ $d->waktu_hari1 }}</td>
                                    <td>{{ $d->hari2 }} {{ $d->waktu_hari2 }}</td>
                                    <td>
                                    <a href="{{route('detailJadwal', $d->siswa->id)}}" type="button"  class="btn btn-sm btn-info mr-2" data-toggle="tooltip"
                                                    data-placement="top" title="Detail Jadwal" style="color:white">
                                        <i class="fas fa-info-circle"></i>
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
