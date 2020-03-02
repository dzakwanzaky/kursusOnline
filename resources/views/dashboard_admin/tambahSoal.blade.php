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
 
    <!-- Main content -->
    <div id="content" class="content">
    <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">

              
      <input style="display:none" id="id_to" name="id_to" value="{{ $id }}"></input>
      <div class="panel-body">
      <button type="button" name="add" id="add" class="btn btn-success mr-2" style="float:right">+ Tambah Soal</button>       
      <button type="button" name="add" id="add" class="btn btn-primary mr-2" style="float:right" target="_blank" data-toggle="modal" data-target="#importExcel">+ Upload Soal</button>       

      <div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                      <form method="post" action="{{ route('importExcel')}}" enctype="multipart/form-data">
                      {{ csrf_field() }}
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Upload Soal</h5>
                            </div>
                            <div class="modal-body">
                            <input style="display:none" id="id_to" name="id_to" value="{{ $id }}"></input>

                              <label>Pilih file</label>
                              <div class="form-group">
                                <input type="file" name="file" required="required">
                              </div>
                        
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
<div id="body" class="content"></div> 

</div>

      <button type="submit" class="btn btn-primary d-block" style="width: 180px; border-radius:50px; margin-left:auto; margin-right:auto;">
                            Save
      </button>
      </form>
      <br>
        </div>
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
  <script> 
    $('#add').click(function(){
      var html = '<script src="https://cdn.tiny.cloud/1/jj2iuwt16dheyzaquicjvu4dg0q2iae3aqb5530kmbud4hf7/tinymce/5/tinymce.min.js" referrerpolicy="origin"><\/script><script>tinymce.init({selector: "textarea",});<\/script><div class="container-fluid"><div class="row"><div class="col-lg-12"><div class="card"><div class="card-body"><input style="display:none" id="id_to" name="id_to" value="{{ $id }}"></input><button type="button" name="remove" id="" class="btn btn-danger btn-md remove" style="float:right">Hapus Soal</button><div class="panel-body"><div><b>Masukkan Nomor Soal :</b></div><input type="text" class="form-control" id="nomor_soal" name="nomor_soal[]" style="width:12%" placeholder="Nomor Soal"><br><div><b> Gambar : </b></div><input type="file" class="form-control" id="file" name="file[]"><br><div><b>Masukkan Isi Soal :</b></div><textarea id="test" name="soal[]"></textarea><br><div><b>Masukkan Pilihan Jawaban :<b></div><label>A<input type="text" class="form-control" id="option_a" name="option_a[]"></label><label>B<input type="text" class="form-control" id="option_b" name="option_b[]"></label><label>C<input type="text" class="form-control" id="option_c" name="option_c[]"></label><label>D<input type="text" class="form-control" id="option_d" name="option_d[]"></label><label>E<input type="text" class="form-control" id="option_e" name="option_e[]"></label><br><br><div><b>Masukkan Jawaban Benar dan Pembahasan :</b></div><textarea id="asu" name="jawaban[]"></textarea></div></div></div></div></div>';
      $('#body').append(html);
      tinymce.init({selector: "#test",});
      tinymce.init({selector: "#asu",});
    });

    $(document).on('click', '.remove', function(){
      $(this).closest("div").remove();
    });

  </script>
  @endpush