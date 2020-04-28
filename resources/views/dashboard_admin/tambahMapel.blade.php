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
                                            <h1>Tambah Mata Pelajaran</h1>
                                        </div>
                                        <div class="col-sm-6">
                                            <ol class="breadcrumb float-md-right" style="font-size:14px">
                                                <li class="breadcrumb-item">
                                                    <a href="javascript:history.back()">Daftar Mata Pelajaran</a>
                                                </li>
                                                <li class="breadcrumb-item active">
                                                    Tambah Mata Pelajaran
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
                                <div class="form-group">
                                    <form method="POST" action="{{ route('mapel.store')}}"
                                        enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <input style="display:none" id="id_program" name="id_program"
                                            value="{{ $id }}"></input>

                                        <div class="form-group">
                                            <label for="">Mata Pelajaran :</label>
                                            <input type="text" class="form-control" id="mapel" name="mapel" required>
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

                                </form>
                            </div>


                        </div>
                        <!-- /.col-md-6 -->

                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
        </div>



        <!-- /.content -->



    </div>
</div>


<!-- /.content-header -->
@endsection
@push('script')
<script>
    $('#add').click(function () {
        var html = ` <div class="form-group">
                        <label for="">Mata Pelajaran :</label>
                        <input type="text" class="form-control" id="mapel" name="mapel[]" style="float:left;width:95%" required>
                        <button type="button" name="remove" id="" class="btn btn-danger btn-md remove" style="float:right"><i class="far fa-trash-alt"></i></button>
                        
                    </div>  `
        $('#body').append(html);


    });
    $(document).on('click', '.remove', function () {
        $(this).closest("div").remove();
    });
</script>
@endpush
