@extends('dashboard_admin/base')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Manajemen Program</h1>
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
                        <div class="card-body table-responsive-m" style="overflow-x:auto;">

       
                            <form action="{{route('tambahProgram')}}"> <button class=" btn btn-md btn-success"
                                    style="float:right">Tambah Program</button></form>

                            <table class="table table-bordered table-striped table-responsive-md" id="program">
                                <thead class="thead-dark">
                                    <tr class="table-secondary" style="text-align:center; text-transform: uppercase">
                                        <th>No.</th>
                                        <th>Nama Program</th>
                                        <th>Keterangan</th>
                                        <th>Keterangan Rinci</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach($data as $d)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $d->program}}</td>
                                        <td>{{ $d->keterangan}}</td>
                                        <td>{{ $d->keterangan_rinci}}</td>
                                        <td class="d-flex">
                                        <a type="button" class="btn-sm btn-info mr-2"  data-toggle="tooltip" data-placement="top" title="Lihat Mapel" href="{{route('daftarMapel', $d->id)}}"><i class="far fa-eye"></i></a>
                                        <a href="{{route('program.edit',$d->id)}}" class="btn btn-sm btn-primary mr-2"
                                        data-toggle="tooltip"
                                                data-placement="top" title="Edit Program"><i class="far fa-edit"></i></a>
                                            <form action="{{ route('program.destroy', $d->id) }}" method="post" data-toggle="tooltip"
                                                data-placement="top" title="Hapus Program"
                                                class="destroy" onclick="return confirm('Anda yakin ingin menghapus data?')"> 
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <button type="submit" class="btn btn-sm btn-danger mr-2"
                                                    style="color:white"><i class="far fa-trash-alt"></i></button>
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
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
@section('sweet')
<script>
    $(document).ready(function () {
        $('#program').DataTable({
            "autoWidth": false
        });
    });

    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });
</script>
@endsection
