@extends('dashboard_admin/base')
@section('content')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 id="div1" name="div1" class="m-0 text-dark">Daftar Soal</h1>
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
              <div class="card-body table-responsive-sm" style="overflow-x:auto;">
              <table class="table table-bordered table-striped table-responsive-md" id="siswa">
              @foreach($datas as $d)
              <a href="{{route('tambahSoal', $d->id)}}"
              class="btn btn-md btn-success" style="float:right">Tambah Soal</a> 
             @endforeach
              <br>
              <br>
              <thead class="thead-dark">
                <tr class="table-secondary" style="text-align:center; text-transform: uppercase">
                        <th rowspan="2">No</th>
                        <th rowspan="2">Soal</th>
                        <th rowspan="2">Gambar</th>
                        <th colspan="5">Option</th>
                        <th rowspan="2">Jawaban</th>
                        <th rowspan="2">Aksi</th>
                </tr>
                <tr  class="table-secondary" style="text-align:center; text-transform: uppercase">
                        <th>A</th>
                        <th>B</th>
                        <th>C</th>
                        <th>D</th>
                        <th style="border-right:1px solid">E</th>
                </tr>
                </thead>
                <tbody>
                      
                    @php $no = 1; @endphp
                    @foreach($data as $d)
                    <tr>   
                        <td>{{ $d->nomor_soal }}</td>
                        <td>{!! $d->soal !!}</td>
                        <td>
                        <a href="{{ url('/data_file/'.$d->file) }}" target="_blank">
                          <img width="50px" src="{{ url('/data_file/'.$d->file) }}">
                        </a> 
                        </td>
                        <td>{{ $d->option_a }}</td>
                        <td>{{ $d->option_b }}</td>
                        <td>{{ $d->option_c }}</td>
                        <td>{{ $d->option_d }}</td>
                        <td>{{ $d->option_e }}</td>
                        <td>{!! $d->jawaban !!}</td>
                        <td class="d-flex">
                          <form action="{{ route('soal.destroy', $d->id) }}" method="post" class="destroy">
                          <a type="button" class="btn btn-sm btn-primary mr-2" href="{{route('soal.edit',$d->id)}}">Edit</a>
                          {{ csrf_field() }}
                          {{ method_field('DELETE') }}   
                          <button type="submit" class="btn btn-sm btn-danger mr-2" style="color:white" onclick="return confirm('Anda yakin akan menghapus soal?')">Hapus</button>
                          </form>
                        </td>
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
    </div>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  
  <script
      src="https://code.jquery.com/jquery-3.4.1.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous"></script>
  @endsection
  @push('script')
  <script>
         $(document).ready( function () {
           $('#siswa').DataTable({
            responsive: true
           });
           });
      </script>
  @endpush
