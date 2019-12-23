@extends('tutor/base')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0 text-dark">Manajemen Murid</h1><br>
            <p class="m-0 text-dark">Berikut data pengajuan dari murid yang mendaftar les. 
            Di kolom Status, silahkan klik tombol <b>WAITING</b>, jika jadwal mengajar Anda sesuai dengan 
            jadwal yang diajukan.</p>
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
              <table class="table table-responsive-lg table-bordered small" id="jadwal">
                <thead class="thead-dark">
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Program</th>
                        <th>Kelas</th>
                        <th>Mata Pelajaran</th>
                        <th>Hari Waktu</th>
                        <th>Hari Waktu</th>
                        <th>Hari Waktu</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    @php $no = 1; @endphp
                @foreach($data as $d)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>
                        {{ $d->nama_murid }}
                        </td>
                        <td>
                        Kota
                        {{ $d->datas->kota }}
                        Kecamatan
                        {{ $d->datas->kecamatan }}
                        Provinsi
                        {{ $d->datas->provinsi }}
                        </td>
                        <td>{{ $d->program }}</td>
                        <td>{{ $d->kelas }}</td>
                        <td>{{ $d->mata_pelajaran }}</td>
                        <td>{{ $d->hari1 }}, PUKUL {{ $d->waktu_hari1 }}</td>
                        <td>{{ $d->hari2 }}, PUKUL {{ $d->waktu_hari2 }}</td>
                        <td>{{ $d->hari3 }}, PUKUL {{ $d->waktu_hari3 }}</td>
              <form action="{{ route('pendaftaranSiswa.update', $d->id) }}" method="post" enctype="multipart/form-data">
		      	  {{ csrf_field() }}
			        {{ method_field('PUT') }}
             
						<input style="display:none" type="text" class="form-control" id="tutor_id" name="tutor_id" value="{{ Auth::user()->id }}">
            <input style="display:none" type="text" class="form-control" id="nama_tutor" name="nama_tutor" value="{{ Auth::user()->name }}">

                        <td>
                        <!-- <input id="tutor_id" style="display:none" type="text" class="form-control" name="tutor_id"
                            required autofocus
                            value="{{ Auth::user()->id }}" style="text-transform: capitalize">

                       <input id="nama_tutor" style="display:none" type="text" class="form-control" name="nama_tutor"
                            required autofocus
                            value="{{ Auth::user()->nama }}" style="text-transform: capitalize"> -->
                            
                        <button value="DIPILIH TUTOR" id="status" name="status" type="submit" class=" btn btn-sm btn-primary">{{ $d->status }}</button>
                        </td>
                        </form>
                    </tr>
                    @endforeach
                  
                </tbody>
                </table>
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
 
