@extends('murid/base')
@section('content')
<!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Kehadiran Les</h1>
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
              @php $no = 1; @endphp
                @foreach($jadwal as $d)
                <form action="{{ route('absen.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
              <button class="btn btn-sm btn-success" style="color:white;float:right" href="{{url('presensi')}}">+ Presensi</button>
              <input type="text" value="{{$d->id}}" name="id_jadwal" style="display:none">    
              </form>          
              @endforeach
              <br>
              <br>
                <thead class="thead-dark">
                    <tr>
                        <th>Pertemuan Ke</th>
                        <th>Tanggal</th>
                        <th>Report</th> 
                        <th>Kehadiran</th>  
                    </tr>
                </thead>
                @php $no = 1; @endphp
                @foreach($data as $d)
                <tbody>
                        <tr>
                           <td>{{ $no++ }}</td>
                           <td>{{ $d->tanggal }}</td>
                           <td>{{ $d->report }}</td>
                          <td>{{ $d->kehadiran }} </td>       
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