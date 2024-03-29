@extends('dashboard_admin/base')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 id="div1" name="div1" class="m-0 text-dark">Tambah Soal</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-md-right" style="font-size:14px">
                        <li class="breadcrumb-item">
                            <a href="javascript:history.back()">Daftar Soal</a>
                        </li>
                        <li class="breadcrumb-item active">
                            Tambah Soal
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
    <div id="content" class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">


                            <input style="display:none" id="id_to" name="id_to" value="{{ $id }}"></input>
                            <div class="text-center">
                                <div style="float:left;width:50%"><label for="" class="mr-4">TAMBAH MANUAL </label><br>
                                    <a>
                                        <br>
                                        Anda bisa menambahkan soal secara manual
                                        <br> melalui form yang tersedia.

                                        <br>
                                    </a>
                                    <br>
                                    <br>
                                    <button type="button" name="add" id="add" style="width:60%"
                                        class="btn btn-success center-block mr-4">Tambah</button>
                                </div>

                                <div id="unggah" style="float:right;width:50%"><label for="" class="ml-4">UNGGAH
                                        SOAL</label><br>
                                    <a class="ml-2">
                                        Anda bisa menambahkan soal
                                        <br>dengan melalui unggah berkas.
                                        <br>Unduh format berkas di sini.
                                        <br> <a href="{{('/file/template-soal.xlsx')}}" class="btn btn-sm btn-success"
                                            style="color:white;"><span class="fas fa-download mr-2"></span>Unduh</a>
                                    </a>
                                    <br>
                                    <br>
                                    <button type="button" name="add" id="add" style="width:60%"
                                        class="btn btn-primary center-block ml-4" target="_blank" data-toggle="modal"
                                        data-target="#importExcel">Unggah</button>
                                </div>

                                <div class="modal fade" id="importExcel" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <form method="post" action="{{ route('importExcel')}}"
                                            enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Upload Soal</h5>
                                                </div>
                                                <div class="modal-body">
                                                    <input style="display:none" id="id_to" name="id_to"
                                                        value="{{ $id }}"></input>

                                                    <label>Pilih file</label>
                                                    <div class="form-group">
                                                        <input type="file" name="file" required="required">
                                                    </div>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Upload</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <form method="POST" action="{{ route('soal.store')}}" enctype="multipart/form-data">
                {{ csrf_field() }}
                @foreach ($errors->all() as $error)
                                    <p class="text-danger">{{ $error }}</p>
                                    @endforeach
                <div id="body" class="content"></div>

        </div>

        <div class="d-flex" style="margin-left:40%;">
            <button id="button-sub" name="button-sub" type="submit" class="btn btn-primary"
                style="width: 180px; border-radius:50px;" onclick="return confirm('Anda yakin data sudah benar?')">
                Simpan
            </button>
            &nbsp;&nbsp;&nbsp;
            <a class="btn btn-danger d-block" href="javascript:history.back()" style="width: 180px; border-radius:50px;"
                onclick="return confirm('Anda yakin ingin membatalkan?')">
                Batal
            </a>

        </div>

        </form>
        <br>
    </div>
</div>

<!-- /.content-wrapper -->

@endsection
@push('script')
<script>
    $('#button-sub').hide();
</script>
<script src="{{ asset('/lte/plugins/tinymce/js/tinymce/tinymce.min.js') }}" defer></script>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
    $('#add').click(function () {
        var html =
            `<script src="{{ asset('/lte/plugins/tinymce/js/tinymce/tinymce.min.js') }}" defer><\/script>
            <script>tinymce.init({
                selector: "textarea",
                setup: function (editor) {
                editor.on('change', function () {
                editor.save();
            });
        },
            });
            <\/script>
            <div class="container-fluid"><div class="row"><div class="col-lg-12"><div class="card">
            <div class="card-body"><input style="display:none" id="id_to" name="id_to" value="{{ $id }}"></input>
            <button type="button" name="remove" id="" class="btn btn-danger btn-md remove" style="float:right">Hapus Soal</button>
            <div class="panel-body"><div><b>Masukkan Nomor Soal :</b></div>
            <input type="text" class="form-control" id="nomor_soal" name="nomor_soal[]" style="width:12%" placeholder="Nomor Soal">
            <br><div><b> Gambar : </b></div><input type="file" class="form-control" id="file" name="file[]">
            <br><div><b>Masukkan Isi Soal :</b></div><textarea id="test" name="soal[]"></textarea>
            <br><div><b>Masukkan Pilihan Jawaban :<b></div>
            <label>A<input type="text" class="form-control" id="option_a" name="option_a[]" required></label>
            <label>B<input type="text" class="form-control" id="option_b" name="option_b[]" required></label>
            <label>C<input type="text" class="form-control" id="option_c" name="option_c[]" required></label>
            <label>D<input type="text" class="form-control" id="option_d" name="option_d[]" required></label>
            <label>E<input type="text" class="form-control" id="option_e" name="option_e[]" required></label>
            <br><br><div><b>Masukkan Jawaban Benar<b></div>  
                                    <select id="jawaban" name="jawaban[]" class="form-control" required>
                                            <option value="">Jawaban Benar</option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                            <option value="D">D</option>
                                            <option value="E">E</option>
                                        </select>
            <br><div><b>Masukkan Pembahasan :</b></div><textarea id="testt" name="pembahasan[]"></textarea></div></div></div></div></div>`;
        $('#body').append(html);
        $('#button-sub').show();
    
        var index = 0;
        $('#textarea').attr("id", index++);
        console.log($(this).attr('id'));

    });

    $(document).on('click', '.remove', function () {
        $(this).closest("div").remove();
    });
</script>
@endpush