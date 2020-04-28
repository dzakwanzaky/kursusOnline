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
                                            <h1> Edit Program</h1>
                                        </div>
                                        <div class="col-sm-6">
                                            <ol class="breadcrumb float-md-right" style="font-size:14px">
                                                <li class="breadcrumb-item">
                                                    <a href="/manajemenProgram">Manajemen Program</a>
                                                </li>
                                                <li class="breadcrumb-item active">
                                                    Edit Program
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
                                <form action="{{ route('program.update', $d->id) }}" method="post"
                                    enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    {{ method_field('PUT') }}
                                    <div class="form-group">

                                        <div class="form-group">
                                            <label for="">Nama Program :</label>
                                            <input type="text" class="form-control" id="program" name="program"
                                                value="{{ $d->program }}">
                                        </div>

                                        <div class="form-group">
                                            <label for="">Keterangan :</label>
                                            <input type="text" class="form-control" id="keterangan" name="keterangan"
                                                value="{{ $d->keterangan}}">
                                        </div>

                                        <div class="form-group">
                                            <label for="">Keterangan :</label>
                                            <input type="text" class="form-control" id="keterangan" name="keterangan"
                                                value="{{ $d->keterangan}}">
                                        </div>

                                        <div class="form-group">
                                            <label for="">Keterangan Rinci :</label>
                                            <input type="text" class="form-control" id="keterangan_rinci"
                                                name="keterangan_rinci" value="{{ $d->keterangan_rinci}}">
                                        </div>

                                        <div class="form-group">
                                            <label for="">Gambar :</label>
                                            @if($d->file==null)
                                            <img id="gambar" class="navbar-brand-full"
                                                src="{{('/tema/images/user.png')}}" width="300px" alt="upload foto"
                                                style="display:block; margin-left:auto; margin-right:auto;">
                                            @else
                                            <a href="{{ url('/data_file/'.$d->file) }}" target="_blank">
                                                <img id="gambar" width="250px" src="{{ url('/data_file/'.$d->file) }}"
                                                    style="display:block; margin-left:auto; margin-right:auto;">
                                            </a>
                                            @endif
                                            <br>
                                        <div>
                                            <label for="change_pic">Ganti Gambar</label>
                                            <br>
                                            <strong style=>Info!</strong> Maximum Size Upload : 2MB
                                            <input id="foto" class="form-control" name="file" type="file">
                                        </div>

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
@section('sweet')
<script>
    //buat profile
    $(function () {
        $("#foto").change(function () {
            readURL(this);
        });
    });

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#gambar').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
   
</script>
@endsection
