@extends('dashboard_admin/baseTryout')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Pendaftaran Tryout Belum Aktif</h1>
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
                                <strong>INFO!</strong> Jika pembayaran sudah valid, klik tombol
                               <button  class="btn btn-sm btn-success">
                               <i class="fas fa-check"></i>
                               </button> 
                                untuk mengonfirmasi pembayaran.
                            </div>
                    <div class="card">
                        <div class="card-body table-responsive-m" style="overflow-x:auto;">
                         
                            <table class="table table-bordered table-striped table-responsive-md" id="datakaryawan">
                                <thead class="thead-dark">
                                    <tr class="table-secondary" style="text-align:center; text-transform: uppercase">
                                        <th>No.</th>
                                        <th>Nama</th>
                                        <th>No Telepon</th>
                                        <th>Asal Sekolah</th>
                                        <th>Program</th>
                                        <th>Email</th>
                                        <th>Bukti Pembayaran</th>
                                        <th>Status</th>
                                        <th>Aksi</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        @php $no = 1; @endphp
                                        @foreach($data as $d)
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $d->nama_lengkap }}</td>
                                        <td>{{ $d->no_telp }}</td>
                                        <td>{{ $d->asal_sekolah }}</td>
                                        <td>{{ $d->program->program }}</td>
                                        <td>{{ $d->email }}</td>
                                        <td>
                                            @if($d->file==null)
                                            <button name="status" class=" btn btn-sm btn-danger"
                                                style="text-align:center">BELUM UPLOAD</button>
                                            @else
                                            <a href="{{ url('/data_file/'.$d->file) }}" target="_blank">
                                                {{ $d->file }}
                                            </a>
                                            @endif

                                        <td>
                                            <button class="btn btn-sm btn-warning" value="{{ $d->status }}" style="color:white">
                                                {{ $d->status }}
                                            </button>

                                        </td>
                                        <td class="d-flex">
                                            <form action="{{ route('formulir.update', $d->id) }}" method="post"
                                                enctype="multipart/form-data">
                                                {{ csrf_field() }}
                                                {{ method_field('PUT') }}
                                                <button value="AKTIF" id="status" name="status"
                                                    class="btn btn-sm btn-success" data-toggle="tooltip"
                                                    data-placement="top" title="Konfirmasi" type="submit"
                                                    style="text-align:center" onclick="return confirm('Anda yakin ingin mengonfirmasi pendaftaran?')"><i class="fas fa-check"></i>
                                            </form>
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