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
                        <th>Bukti Pembayaran</th>
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
                              
                        @foreach($invoice as $i)
                        <a href="{{ url('/data_file/'.$i->file) }} " target="_blank">
                           <img width="400px" src="{{ url('/data_file/'.$i->file) }}"  target="_blank">
                        </a>
                            @endforeach
                      @foreach($invoice as $i)
                      @if($i->bukti==null)
                        <a class="btn btn-sm btn-success" style="color:white;" target="_blank" data-toggle="modal" data-target="#importExcel">
                        <span class="fa fa-upload"></span>
                    </a>
                      @else
                      <p>Terupload</p>
                      @endif
                    @endforeach
                        </td>
                        <div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <form method="post" action="/upload" enctype="multipart/form-data">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Upload Bukti</h5>
                            </div>
                            <div class="modal-body">
                      
                        
                              {{ csrf_field() }}
                        
                              <label>Pilih file</label>
                              <div class="form-group">
                                <input type="file" name="file" required="required">
                              </div>
                        
                          <a class=" btn btn-sm btn-success" style="color:white;">
                            <!-- <input type="file" name="file"> -->
                            <span class="fa fa-upload"></span>
                            <input type="submit" value="Upload" class="btn btn-primary">
                          </a>
                        </form>
                        </td>
                        </form>
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