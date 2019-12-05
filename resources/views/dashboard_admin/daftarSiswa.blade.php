@extends('dashboard_admin/base')
@section('content')
<!-- Content Wrapper. Contains page content -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12" style="background:white">
            <div class="box box-primary">
              <div class="box-header">
              <br />
              <h2 class="box-title">Daftar Siswa</h2>
              <form action="#" method="get">
                  <td>
                    <button type="submit" class="btn btn-flat btn-success">+ Tambah Siswa</button>
                  </td>
                </form>
             </div>
            </div>
           <br />
            <table class="table table-bordered table-striped table-responsive-sm" id="siswa"> 
              <thead>
                <tr class="table-secondary" style="text-align:center; text-transform: uppercase">
                  <th>No.</th>
                  <th>Nama</th>
                  <th>Kelas</th>
                  <th>Jadwal</th>
                  <th>Jenis Paket</th>
                  <th>Tutor</th>
                  <th>Biaya</th>
               </tr>
              </thead>
          </table>
         <br />        
        </div><!-- /.col -->
       <div class="col-sm-6">  
      </div><!-- /.col -->
     </div><!-- /.row -->
    </div><!-- /.container-fluid -->
   </div>
   <script
      src="https://code.jquery.com/jquery-3.4.1.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous"></script>
   @endsection
   @section('sweet')
       <script>
         $(document).ready( function () {
            $('#siswa').DataTable();
            } );
      </script>
   @endsection