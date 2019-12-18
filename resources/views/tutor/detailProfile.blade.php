@extends('tutor/base')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-md-12 col-md-offset-6" >
            <div class="box box-primary">
                <div class="container-fluid">
                <div class="row mb-2">
					  <div class="col-sm-6">
						  <p style="font-size:24px">Profile Murid</p>
					  </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-md-right" style="font-size:14px">
                                <li class="breadcrumb-item">
                                    <a href="/tutor">Murid</a>
                                </li>
                                <li class="breadcrumb-item active">
                                    Profile Murid
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
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
              <!-- @foreach($data as $d) -->
       
            <div class="form-group">
                          <div class="form-group">
                              <label for="">Foto :</label>
                              <a href="" target="_blank">
                                <img width="300px" src="">
                              </a>                   
            </div>

            <div class="form-group">
                  <label for="">Nama Lengkap :</label>
                  <input type="text" class="form-control" id="name" name="nama" value="{{ $d->nama_siswa }}" disabled >
            </div>

           <div class="form-group">
                  <label for="">Alamat :</label>
                  <input type="text" class="form-control" id="email" name="email" value="" disabled>
            </div>
<!-- @endforeach -->
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
    <script
      src="https://code.jquery.com/jquery-3.4.1.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous"></script>
  @endsection
