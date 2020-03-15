@extends('murid/base')
@section('content')
<!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Jadwal Les</h1>
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
<<<<<<< HEAD
                    <tr>
                        <th>No.</th>
                        <th>Tutor</th>
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
                @foreach($data ?? '' as $d)
                    <tr>
                        <td>{{ $no++ }}. </td>
                        <td>{{ $d->nama_tutor }}</td>
                        <td>{{ $d->program }}</td>
                        <td>{{ $d->kelas }} SD</td>
                        <td>{{ $d->mata_pelajaran }}</td>
                        <td>{{ $d->hari1 }}, PUKUL {{ $d->waktu_hari1 }}</td>
                        <td>{{ $d->hari2 }}, PUKUL {{ $d->waktu_hari2 }}</td>
                        <td>{{ $d->hari3 }}, PUKUL {{ $d->waktu_hari3 }}</td>
                        <td>
                            <a class=" btn btn-sm btn-primary" style="color:white;">
                            <span>{{ $d->status }}</span>
                            </a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
                </table>
              </div>
            </div>

            
          </div>
          <!-- /.col-md-6 -->
          
=======
                <tr>
                        <th>No.</th>
                        <th>Nama Murid</th>
                        <th>Kelas</th>
                        <th>Mata Pelajaran</th>
                        <th>Sesi 1</th>   
                        <th id="hari2">Sesi 2</th>
                        <th id="hari3">Sesi 3</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>     
                    @php $no = 1; @endphp
                    @foreach($data as $d)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $d->nama_murid }}</td>
                        <td>{{ $d->kelas }}</td>
                        <td>{{ $d->mata_pelajaran }}</td>
                        <td>{{ $d->hari1 }} {{ $d->waktu_hari1 }}</td>
                        <td id="hari2td">{{ $d->hari2 }} {{ $d->waktu_hari2 }}</td>
                        <td id="hari3td">{{ $d->hari3 }} {{ $d->waktu_hari3 }}</td>
                        <td>
                        <button class="btn btn-sm btn-primary">{{$d->status}}</button>
                        </td>
                        <td>
                        <a type="button" class="btn btn-sm btn-primary" href="{{route('absen.show', $d->id)}}">
                        Lihat Kehadiran
                        </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
              </div>
            </div>          
          </div>
          <!-- /.col-md-6 --> 
>>>>>>> 1c70643a08e2a80d6522efdfca207d5cf00be57f
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
<<<<<<< HEAD
  <script
      src="https://code.jquery.com/jquery-3.4.1.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous"></script>
=======

  @endsection
  @section('sweet')
  <script>
         $(document).ready( function () {
           $('#jadwal').DataTable();
           });
  </script>
  <script>
      $(document).ready(function() {
        $('#hari3td').each(function(){
          if ($(this).text().trim().length == 0) {
            $('#hari3').hide();
            $('#hari3td').hide();
          }
        });
        $('#hari2td').each(function(){
          if ($(this).text().trim().length == 0) {
            $('#hari2').hide();
            $('#hari2td').hide();
          }
        });
      });
  </script>
>>>>>>> 1c70643a08e2a80d6522efdfca207d5cf00be57f
  @endsection