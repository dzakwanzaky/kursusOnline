@extends('murid/base')
@section('content')
<!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Invoice</h1>
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
                        <th>No. Invoice</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Program</th>
                        <th>Lokasi</th>
                        <th>Status</th>
                        <th>Konfirmasi</th>
                        <th>Unduh</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    @php $no = 1; @endphp
                    @foreach($data as $d)
                        <td>{{ $no++ }}. </td>
                        <td># 
                        @foreach($invoice as $i)
                        {{ $i->invoice }}
                        @endforeach
                        </td>
                        <td>{{ Auth::user()->name }}</td>
                        <td>{{ $d->kelas }} SD</td>
                        <td>{{ $d->program }}</td>
                        <td>
                        @foreach($alamat as $a)
                        {{ $a->kecamatan }}, {{ $a->kota }}, {{ $a->provinsi }}
                        @endforeach
                        </td>
                        <td>
                          <a class=" btn btn-sm btn-danger" style="color:white;">
                            <span>Belum Konfirmasi</span>
                          </a>
                        </td>
                        <td>
                        <form action="/upload" method="POST" enctype="multipart/form-data">
					              {{ csrf_field() }}
                            <input type="file" name="file" style="float:left">
                            <input type="submit" value="Upload" class="btn btn-primary" style="float:right;font-size:10px">
                        </form>
                        </td>
                        <td>
                          <a href="invoicenya_pdf" class=" btn btn-sm btn-success" style="color:white;">
                            <span class="fa fa-download"></span>
                          </a>
                        </td>
                        @endforeach
                    </tr>
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