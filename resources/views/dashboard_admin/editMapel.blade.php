@extends('dashboard_admin/base')
@section('content')
</script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 id="div1" name="div1" class="m-0 text-dark">Edit Mata Pelajaran</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-md-right" style="font-size:14px">
                        <li class="breadcrumb-item">
                            <a href="javascript:history.back()">Daftar Mata Pelajaran</a>
                        </li>
                        <li class="breadcrumb-item active">
                            Edit Mata Pelajaran
                        </li>
                    </ol>
                </div>
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
                            <div class="panel-body">
                            @foreach ($errors->all() as $error)
                                    <p class="text-danger">{{ $error }}</p>
                                    @endforeach
                                @foreach($data as $d)

                                <form method="POST" action="{{ route('mapel.update',$d->id)}}"
                                    enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    {{ method_field('PUT') }}
                                    <input style="display:none" id="id_to" name="id_program"
                                        value="{{$d->id_program}}"></input>


                                    <div class="card-body">
                                        <label>Mata Pelajaran</label>
                                        <input type="text" class="form-control" id="mapel" name="mapel"
                                            value="{{ $d->mapel }}" required>



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
                    </div>
                </div>
            </div>
            <br>

            </form>
            @endforeach
        </div>
    </div>
</div>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
@endsection
@section('sweet')
<script>



</script>
@endsection