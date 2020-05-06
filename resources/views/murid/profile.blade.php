@extends('murid/base')
@section('content')
<style type="text/css">
    .rounded img {
        border-radius: 50em;
    }
</style>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-md-12 col-md-offset-6">
                <div class="box box-primary">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1>Profil Siswa</h1>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
</div>
<!-- /.content-header -->
<!-- Main content -->
@php $no = 1; @endphp
@foreach($data as $d)
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <i class="fas fa-user mr-2"></i>Foto Profil

                        <hr class="photo">
                        <br>
                        <div class="d-flex justify-content-center" style="overflow-x:auto;">

                            @if($d->file==null)
                            <div class="rounded" >
                            <img class="navbar-brand-full" src="{{('/tema/images/default.png')}}" width="180px" height="180px">
                        </div>
                            @else
                            <a href="{{ url('/data_file/'.$d->file) }}" target="_blank">
                                <div class="rounded">
                                <img width="180px" height="180px" src="{{ url('/data_file/'.$d->file) }}">
                            </a>
                        </div>
                            @endif
                        </div>
                        @endforeach
                        @foreach($user as $u)
                        
                            <br>
                             <a href="{{route('dataSiswa.edit',$d->id)}}" class="btn-edit"
                                style="display:block; margin-left:auto; margin-right:auto;">Edit Profil</a>
                                <br>

                            @endforeach
                            @foreach($user as $s)
                    </div>
                </div>
            </div>
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <table class="w-100 table-responsive-md">
                            <tbody>
                                <tr>
                                    <th>
                                        <br>
                                     
                                        Nama Lengkap
                                        <input type="text" class="form-control"
                                            value="{{ $u->name }} "
                                            style="margin-right:190px;background:white;border:none" disabled>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        Nomor Telepon
                                        <input type="text" class="form-control" value="{{ $u->phone }}"
                                            style="margin-right:190px;background:white;border:none" disabled>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        Email
                                        <input type="text" class="form-control" value="{{ $u->email }}"
                                            style="margin-right:190px;background:white;border:none" disabled>
                                    </th>
                                </tr>
                            </tbody>
                        </table>
                        <div class="form-group">
                        </div>
                        <td>
                           
                        </td>

                    </div>
                    <!-- /.col-md-6 -->
                    @endforeach
                </div>
            </div>

            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->

    @endsection