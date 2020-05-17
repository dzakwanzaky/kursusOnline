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
                                            <h1> Edit Paket</h1>
                                        </div>
                                        <div class="col-sm-6">
                                            <ol class="breadcrumb float-md-right" style="font-size:14px">
                                                <li class="breadcrumb-item">
                                                    <a href="/manajemenPaket">Manajemen Paket</a>
                                                </li>
                                                <li class="breadcrumb-item active">
                                                    Edit Paket
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
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                @foreach($data as $d)
                                <form action="{{ route('paket.update', $d->id) }}" method="post"
                                    enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    {{ method_field('PUT') }}
                                    <div class="form-group">
                                    @foreach ($errors->all() as $error)
                                    <p class="text-danger">{{ $error }}</p>
                                    @endforeach
                                    <div class="form-group">
                                            <label for="">Nama Paket :</label>
                                            <input type="text" class="form-control" id="nama_paket" name="nama_paket"
                                                value="{{ $d->nama_paket }}" required>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="">Program :</label>
                                            <select class="form-control" id="program_id" name="program_id" required>
                                                <option value="{{ $d->program_id }}">{{ $d->paket->program }}</option>
                                                @endforeach
                                                @foreach($program as $d)
                                                <option value="{{ $d->id }}">{{ $d->program }}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                        @foreach($data as $d)

                                        <div class="form-group">
                                            <label for="">Kategori :</label>
                                            <select class="form-control" id="kategori" name="kategori"  value="{{ $d->kategori }}" required>
                                            <option value="{{ $d->kategori }}">{{ $d->kategori }}</option>
                                                <option value="ONLINE">ONLINE</option>
                                                <option value="OFFLINE">OFFLINE</option>
                                            </select>    
                                        </div>

                                        <div class="form-group">
                                            <label for="">Jumlah Mata Pelajaran :</label>
                                            <input type="text" class="form-control" id="jumlah_mapel"
                                                name="jumlah_mapel" value="{{ $d->jumlah_mapel}}" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="">Jumlah Pertemuan :</label>
                                            <input type="text" class="form-control" id="jumlah_pertemuan"
                                                name="jumlah_pertemuan" value="{{ $d->jumlah_pertemuan}}" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="">Harga :</label>
                                            <input type="text" class="form-control" id="harga" name="harga"
                                                value="{{ $d->harga}}" required>
                                        </div>

                                        <div class="d-flex">
                                            <button type="submit" class="btn btn-primary d-block"
                                                style="width: 180px; border-radius:50px;margin-left:35%;"
                                                onclick="return confirm('Anda yakin data sudah benar?')">
                                                Simpan
                                            </button>
                                            &nbsp;&nbsp;&nbsp;
                                            <a class="btn btn-danger d-block" href="javascript:history.back()"
                                                style="width: 180px; border-radius:50px;"
                                                onclick="return confirm('Anda yakin ingin membatalkan?')">
                                                Batal
                                            </a>
                                        </div>

                                    </div>
                            </div>
                            @endforeach

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