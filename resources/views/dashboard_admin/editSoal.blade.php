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
            
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    @foreach($data as $d)
    <form method="POST" action="{{ route('soal.update', $d->id)}}" enctype="multipart/form-data">                 
                  {{ csrf_field() }}
                  {{ method_field('PUT') }}
    <!-- Main content -->
    <div id="content" class="content">
    <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">

              
      <input style="display:none" id="id_to" name="id_to" value="{{$d->id_to}}"></input>
      <div class="panel-body">
      <div>
          <b>Masukkan Nomor Soal :</b>
      </div>     
      <input type="text" class="form-control" id="nomor_soal" name="nomor_soal" style="width:12%" value="{{$d->id_to}}">

      <br>
      <div>
          <b>Masukkan Isi Soal :</b>
      </div>
            <textarea id="soal" name="soal" value="{{$d->soal}}">{{$d->soal}}</textarea>
      <br>
      <div>
          <b>Masukkan Pilihan Jawaban :</b>
      </div>
      
      <label>A
      <input type="text" class="form-control" id="option_a" name="option_a" value="{{$d->option_a}}">
      </label>

      <label>B
      <input type="text" class="form-control" id="option_b" name="option_b" value="{{$d->option_b}}">
      </label>

      <label>C
      <input type="text" class="form-control" id="option_c" name="option_c" value="{{$d->option_c}}">
      </label>

      <label>D
      <input type="text" class="form-control" id="option_d" name="option_d" value="{{$d->option_d}}">
      </label>

      <label>E
      <input type="text" class="form-control" id="option_e" name="option_e" value="{{$d->option_e}}">
      </label>

      <br>
      <br>
      <div>
          <b>Masukkan Jawaban Benar dan Pembahasan :</b>
      </div>
            <textarea id="jawaban" name="jawaban" value="{{$d->jawaban}}">{{$d->jawaban}}</textarea>

        </div>
      </div>
    </div>
  </div>
  </div>

<div id="body" class="content">

</div>

      <button type="submit" class="btn btn-primary d-block" style="width: 180px; border-radius:50px; margin-left:auto; margin-right:auto;">
                            Save
      </button>
      </form>
      @endforeach
      <br>
        </div>
      </div>



    <!-- /.content -->
    
  </div>

  <!-- /.content-wrapper -->
 
  @endsection
  @push('script')
  <script src="https://cdn.tiny.cloud/1/jj2iuwt16dheyzaquicjvu4dg0q2iae3aqb5530kmbud4hf7/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>
      tinymce.init({
        selector: "textarea",
      });
  </script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  
  @endpush