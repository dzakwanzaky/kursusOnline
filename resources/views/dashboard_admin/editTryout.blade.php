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
                    <h1 id="div1" name="div1" class="m-0 text-dark">Edit Tryout</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-md-right" style="font-size:14px">
                        <li class="breadcrumb-item">
                            <a href="javascript:history.back()">Daftar Tryout</a>
                        </li>
                        <li class="breadcrumb-item active">
                            Edit Tryout
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
                                @foreach($data as $d)
                                <form method="POST" action="{{ route('tryout.update',$d->id)}}"
                                    enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    {{ method_field('PUT') }}


                                    <div class="card-body">
                                        <label style="float:left">Nama Tryout
                                            <input type="text" class="form-control-half" id="nama" name="nama"
                                                style="float:left" value="{{ $d->nama }}">
                                        </label>

                                        <label style="float:right">Jumlah Soal
                                            <input type="text" class="form-control-half" id="jumlah_soal"
                                                name="jumlah_soal" style="float:right" value="{{ $d->jumlah_soal }}">
                                        </label>
                                    </div>

                                    <div>
                                        <label for="">Program :</label>
                                        <select id="program" name="program_id" class="form-control" required>
                                            <option value="{{ $d->id }}">{{ $d->program->program }}</option>
                                            @endforeach
                                            @foreach($program as $d)
                                            <option value="{{ $d->id }}">{{ $d->program }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @foreach($data as $d)
                                    <div id="mapel-sd">
                                        <label for="">Mata Pelajaran :</label>
                                        <select id="mata_pelajaran" name="mapel_id" class="form-control" required>
                                        <option value="{{ $d->id }}">{{ $d->mapel->mapel }}</option>
                                        @endforeach
                                            @foreach($sd as $d)
                                            <option value="{{ $d->id }}">{{ $d->mapel }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    @foreach($data as $d)
                                    <div id="mapel-smp">
                                        <label for="">Mata Pelajaran :</label>
                                        <select id="mata_pelajaran" name="mapel_id" class="form-control" required>
                                        <option value="{{ $d->id }}">{{ $d->mapel->mapel }}</option>
                                        @endforeach
                                            @foreach($smp as $d)
                                            <option value="{{ $d->id }}">{{ $d->mapel }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    @foreach($data as $d)
                                    <div id="mapel-sma">
                                        <label for="">Mata Pelajaran :</label>
                                        <select id="mata_pelajaran" name="mapel_id" class="form-control" required>
                                        <option value="{{ $d->id }}">{{ $d->mapel->mapel }}</option>
                                            @endforeach
                                            @foreach($sma as $d)
                                            <option value="{{ $d->id }}">{{ $d->mapel }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    @foreach($data as $d)
                                    <div id="mapel-sbm">
                                        <label for="">Mata Pelajaran :</label>
                                        <select id="mata_pelajaran" name="mapel_id" class="form-control" required>
                                        <option value="{{ $d->id }}">{{ $d->mapel->mapel }}</option>
                                        @endforeach
                                            @foreach($sbm as $d)
                                            <option value="{{ $d->id }}">{{ $d->mapel }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <br>
                                    <br>

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
           
        </div>
    </div>
</div>
<!-- /.content -->

<!-- /.content-wrapper -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
@endsection
@section('sweet')
<script>
    $('#mapel-sd').hide();
    $('#mapel-smp').hide();
    $('#mapel-sma').hide();
    $('#mapel-sbm').hide();
    $(document).ready(function () {
        $("#program").change(function () {
            if ($(this).val() == "1") {
                $('#mapel-sd').show().find('input, textarea, select').prop('disabled', false);
                $('#mapel-smp').hide().find('input, textarea, select').prop('disabled', true);
                $('#mapel-sma').hide().find('input, textarea, select').prop('disabled', true);
                $('#mapel-sbm').hide().find('input, textarea, select').prop('disabled', true);
            } else if ($(this).val() == "2") {
                $('#mapel-sd').hide();
                $('#mapel-smp').show().find('input, textarea, select').prop('disabled', false);
                $('#mapel-sma').hide().find('input, textarea, select').prop('disabled', true);
                $('#mapel-sbm').hide().find('input, textarea, select').prop('disabled', true);
            } else if ($(this).val() == "3") {
                $('#mapel-sd').hide().find('input, textarea, select').prop('disabled', true);
                $('#mapel-smp').hide().find('input, textarea, select').prop('disabled', true);
                $('#mapel-sma').show().find('input, textarea, select').prop('disabled', false);
                $('#mapel-sbm').hide().find('input, textarea, select').prop('disabled', true);
            } else if ($(this).val() == "4") {
                $('#mapel-sd').hide().find('input, textarea, select').prop('disabled', true);
                $('#mapel-smp').hide().find('input, textarea, select').prop('disabled', true);
                $('#mapel-sma').hide().find('input, textarea, select').prop('disabled', true);
                $('#mapel-sbm').show().find('input, textarea, select').prop('disabled', false);
            } else {
                $('#mapel-sd').hide().find('input, textarea, select').prop('disabled', true);
                $('#mapel-smp').hide().find('input, textarea, select').prop('disabled', true);
                $('#mapel-sma').hide().find('input, textarea, select').prop('disabled', true);
                $('#mapel-sbm').hide().find('input, textarea, select').prop('disabled', true);
            }
        });
    });
    </script>
    @endsection