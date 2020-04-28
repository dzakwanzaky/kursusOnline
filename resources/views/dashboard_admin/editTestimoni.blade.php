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
                                            <h1> Edit Testimoni Siswa</h1>
                                        </div>
                                        <div class="col-sm-6">
                                            <ol class="breadcrumb float-md-right" style="font-size:14px">
                                                <li class="breadcrumb-item">
                                                    <a href="/testimoni">Testimoni</a>
                                                </li>
                                                <li class="breadcrumb-item active">
                                                    Edit Testimoni
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
                                <form action="{{ route('testimoni.update', $d->id) }}" method="post"
                                    enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="">Nama Siswa :</label>
                                        <select id="murid_id" name="murid_id" class="form-control"
                                            value="{{$d->murid_id}}" required>
                                            <option value="{{ $d->murid_id }}">{{ $d->murid_id }} - {{ $d->user->name }}</option>
                                            @endforeach

                                            @foreach($siswa as $d)
                                            <option value="{{ $d->id }}">{{ $d->id }} - {{ $d->name }}</option>
                                            @endforeach
                                            </select>
                                    </div>
                                    @foreach($data as $d)

                                    <div class="form-group">
                                        <label for="">Isi :</label>
                                        <textarea type="text" class="form-control" id="isi" name="isi"
                                            value="{{ $d->isi}}">{{ $d->isi}}</textarea>
                                    </div>


                                    <div class="d-flex">
                                            <button type="submit" class="btn btn-primary d-block"
                                                style="width: 180px; border-radius:50px;margin-left:35%;"
                                                onclick="return confirm('Anda yakin data sudah benar?')">
                                                Simpan
                                            </button>
                                            &nbsp;&nbsp;&nbsp;
                                            <a class="btn btn-danger d-block" href="/testimoni"
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
