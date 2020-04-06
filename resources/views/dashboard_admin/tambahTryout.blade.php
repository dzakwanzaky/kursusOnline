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
                    <h1 id="div1" name="div1" class="m-0 text-dark">Tambah Tryout</h1>
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
                    <div class="card">
                        <div class="card-body">
                            <div class="panel-body">
                                <form method="POST" action="{{ route('tryout.store')}}" enctype="multipart/form-data">
                                    {{ csrf_field() }}

                                    <div class="card-body">
                                        <div class="text-center{{ $errors->has('nama') ? ' has-error' : '' }}" style="float:left">
                                            <label>Nama Tryout</label>
                                            <input type="text" class="form-control-half" id="nama" name="nama"
                                                style="float:left" required>

                                            @if ($errors->has('nama'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('nama') }}</strong>
                                            </span>
                                            @endif

                                        </div>
                                        <div style="float:right">
                                            <label>Jumlah Soal</label>
                                            <input type="text" class="form-control-half" id="jumlah_soal"
                                                name="jumlah_soal" style="float:right" required>
                                        </div>


                                    </div>

                                    <div class="card-body">
                                        <label for="">Kategori :</label>
                                        <select id="kategori" name="kategori" class="form-control" required>
                                            <option value="">-Pilih Kategori-</option>
                                            <option value="SD">SD</option>
                                            <option value="SMP">SMP</option>
                                            <option value="SMA">SMA</option>
                                            <option value="SBMPTN">SBMPTN</option>
                                            <option value="STAN">STAN</option>
                                            <option value="UTUL UGM">UTUL UGM</option>
                                            <option value="CPNS">CPNS</option>
                                            <option value="KOMPUTER">KOMPUTER</option>
                                        </select>
                                   
                                   <br>
                                        <label for="">Mata Pelajaran :</label>
                                        <select id="mata_pelajaran" name="mata_pelajaran" class="form-control" required>
                                            <option value="">-Pilih Mata Pelajaran-</option>
                                            <option value="Matematika">Matematika</option>
                                            <option value="Fisika">Fisika</option>
                                            <option value="Kimia">Kimia</option>
                                            <option value="Biologi">Biologi</option>
                                            <option value="Ekonomi">Ekonomi</option>
                                            <option value="Sosiologi">Sosiologi</option>
                                            <option value="Geografi">Geografi</option>
                                            <option value="Sejarah">Sejarah</option>
                                            <option value="Bahasa Inggris">Bahasa Inggris</option>
                                            <option value="Bahasa Indonesia">Bahasa Indonesia</option>

                                        </select>
                                    </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <button type="submit" class="btn btn-primary d-block"
                style="width: 180px; border-radius:50px; margin-left:auto; margin-right:auto;" onclick="return confirm('Anda yakin data sudah benar?')">
                Simpan
            </button>
            </form>
        </div>
    </div>
    < <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
@endsection
@section('sweet')
<script>



</script>
@endsection
