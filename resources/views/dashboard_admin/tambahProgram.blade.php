@extends('dashboard_admin/base')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <form method="POST" action="{{ route('program.store')}}" enctype="multipart/form-data">
        {{ csrf_field() }}
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
                                                <h1>Tambah Program</h1>
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


                                        <div class="form-group">
                                            <label for="">Nama Program :</label>
                                            <input type="text" class="form-control" id="program" name="program"
                                                required>
                                        </div>

                                        <div class="form-group">
                                            <label for="">Keterangan :</label>
                                            <textarea type="text" class="form-control" id="keterangan" name="keterangan"
                                                required>


                                            </textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Keterangan Rinci :</label>
                                            <textarea type="text" class="form-control" id="keterangan_rinci" name="keterangan_rinci"
                                                required>


                                            </textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Gambar :</label>
                                            <input type="file" class="form-control" id="avatar" name="avatar">
                                        </div>

                                    </div>
                                </div>


                            </div>
                            <!-- /.col-md-6 -->

                        </div>
                        <!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
            </div>


            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group">

                                        <button type="button" name="add" id="add" style="float:right"
                                            class="btn btn-success btn-md"><i class="fas fa-plus"></i>
                                        </button>


                                        <br>
                                        <div class="form-group">
                                            <label for="">Mata Pelajaran :</label>
                                            <input type="text" class="form-control" id="mapel" name="mapel[]"
                                                style="width:95%" required>
                                        </div>

                                        <div id="body">

                                        </div>


                                    </div>
                                </div>
                            </div>


                        </div>
                        <!-- /.col-md-6 -->

                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->

            <button type="submit" class="btn btn-primary d-block"
                style="width: 180px; border-radius:50px; margin-left:auto; margin-right:auto;"
                onclick="return confirm('Anda yakin data sudah benar?')">
                Simpan
            </button>
    </form>
    <br>
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
