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

                             @foreach($user as $u)
                            <div class="rounded" >
                            <img class="navbar-brand-full" src="{{$u->getAvatar()}}" width="180px" height="170px">
                        </div>
                            
                           
                        </div>
                       
                       
                        
                            <br>
                             <a href="/profilMurid/{{$u->id}}/edit" class="btn-edit"
                                style="display:block; margin-left:auto; margin-right:auto;">Edit Profil</a>
                                <br>

                           
                        
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
                                            value="{{ $u->name }}"
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
                                <tr>
                                    <th>
                                        Jenis Kelamin
                                        <input type="text" class="form-control" value="{{ $u->jenis_kelamin }}"
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