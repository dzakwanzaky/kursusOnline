@extends('dashboard_admin/base')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
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
                                            <p style="font-size:24px">Tambah Paket</p>
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
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group">
                                    <form method="POST" action="{{ route('paket.store')}}"
                                        enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        
                                        <div class="form-group">
                                            <label for="">Nama Paket :</label>
                                            <input type="text" class="form-control" id="nama_paket"
                                                name="nama_paket">
                                        </div>

                                        <div class="form-group">
                                            <label for="">Program :</label>
                                            <select class="form-control" id="program" name="program">
                                                <option value="">Program</option>

                                                @foreach($data as $d)
                                                <option value="{{ $d->program }}">{{ $d->program }}</option>
                                                @endforeach
                                            </select> 
                                        </div>

                                        <div class="form-group">
                                            <label for="">Pilih Kategori :</label>
                                            <select class="form-control" id="kategori" name="kategori">
                                                <option value="">Kategori</option>
                                                <option value="ONLINE">Online</option>
                                                <option value="OFFLINE">Offline</option>
                                            </select>    
                                        </div>

                                        <div class="form-group">
                                            <label for="">Jumlah Mata Pelajaran :</label>
                                            <input type="text" class="form-control" id="jumlah_mapel"
                                                name="jumlah_mapel">
                                        </div>

                                        <div class="form-group">
                                            <label for="">Jumlah Pertemuan :</label>
                                            <input type="text" class="form-control" id="jumlah_pertemuan"
                                                name="jumlah_pertemuan">
                                        </div>

                                        <div class="form-group">
                                            <label for="">Harga :</label>
                                            <input type="text" class="form-control" id="harga" name="harga">
                                        </div>
                                        <button type="submit" class="btn btn-primary d-block"
                                            style="width: 180px; border-radius:50px; margin-left:auto; margin-right:auto;"
                                            onclick="return confirm('Anda yakin data sudah benar?')">
                                            Simpan
                                        </button>
                                    </form>
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
    </div>
</div>
<!-- /.content-header -->
@endsection
