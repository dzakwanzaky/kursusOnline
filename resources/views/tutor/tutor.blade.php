@extends('tutor/base')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            @if(Auth::user()->data->status == 'MENUNGGU')
            <div class="col-sm-12">
                <h1 class="m-0 text-dark">Informasi!</h1><br>
                <div class="alert alert-light" style="font-size:14px;background-color:white;color:black">
                    <strong>Perhatian!</strong> Pastikan kontak anda selalu aktif
                    untuk menerima informasi lengkap tentang seleksi!
                </div>
                @else
                <div class="col-sm-12">
                    <h1 class="m-0 text-dark">Pendaftaran Jadwal Siswa</h1><br>
                    <div class="alert alert-light" style="font-size:14px;background-color:white;color:black">
                        <strong>INFO!</strong> Berikut data pengajuan dari murid yang mendaftar les.
                        Di kolom Status, silahkan klik tombol <button class="btn btn-sm btn-success"> <i
                                class="fas fa-check"></i> </button> , jika jadwal mengajar Anda sesuai dengan
                        jadwal yang diajukan dan tunggu hingga Pengelola menampilkan jadwal mengajar di halaman Jadwal
                        Mengajar.
                    </div>
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
                            <table class="table table-bordered table-striped table-responsive-sm" id="jadwal">
                                <thead class="thead-dark">
                                    <tr class="table-secondary" style="text-align:center; text-transform: uppercase">
                                        <th rowspan="2">No.</th>
                                        <th rowspan="2">Nama</th>
                                        <th rowspan="2">Jenis Kelamin</th>
                                        <th rowspan="2">Alamat</th>
                                        <th rowspan="2">Program</th>
                                        <th rowspan="2">Kategori</th>
                                        <th rowspan="2">Kelas</th>
                                        <th rowspan="2">Mata Pelajaran</th>
                                        <th colspan="2" style="border-bottom:1px solid;border-bottom-color:#dee2e6">Sesi
                                        </th>
                                        <th rowspan="2">Aksi</th>
                                    </tr>
                                    <tr class="table-secondary" style="text-align:center; text-transform: uppercase">
                                        <th>1</th>
                                        <th>2</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        @php $no = 1; @endphp
                                        @foreach($jadwal as $d)

                                        <td>{{ $no++ }}</td>
                                        <td>
                                            {{ $d->jadwal->name }}
                                        </td>
                                        <td>
                                            {{ $d->siswa->jenis_kelamin }}
                                        </td>
                                        <td>
                                            {{ $d->siswa->provinsi }},
                                            {{ $d->siswa->kabupaten }},
                                            {{ $d->siswa->kecamatan }},
                                            {{ $d->siswa->alamat_detail }}

                                        </td>
                                        <td>
                                            {{ $d->invoice->program->program }}
                                        </td>
                                        <td>
                                            {{ $d->invoice->kategori }}
                                        </td>
                                        <td>
                                            {{ $d->invoice->kelas->kelas }}
                                        </td>

                                        <td>{{ $d->mapel->mapel }}</td>
                                        <td>{{ $d->hari1 }} {{ $d->waktu_hari1 }}</td>
                                        <td>{{ $d->hari2 }} {{ $d->waktu_hari2 }}</td>

                                        <td class="d-flex">

                                            <form action="{{ route('pendaftaranSiswa.update', $d->id) }}" method="post"
                                                enctype="multipart/form-data" id="formStatus" name="formStatus">
                                                {{ csrf_field() }}
                                                {{ method_field('PUT') }}
                                                <input style="display:none" type="text" class="form-control"
                                                    id="tutor_id" name="tutor_id" value="{{ Auth::user()->id }}">

                                                <input style="display:none" type="text" class="form-control" id="status"
                                                    name="status" value="DIPILIH TUTOR">
                                                <!-- button update -->
                                                <button id="status" name="btnSubmit" data-toggle="tooltip"
                                                    data-placement="top" title="Ajukan" type="submit"
                                                    class=" btn btn-sm btn-success mr-2 accept" onclick="return confirm('Anda yakin ingin mengajukan jadwal?')"> <i
                                                        class="fas fa-check"></i>
                                                </button>

                                            </form>

                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>

                        </div>

                    </div>
                    @endif
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
            $('#jadwal').DataTable({
                "autoWidth": false
            });
        });

        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })

    </script>
 


    @endsection
