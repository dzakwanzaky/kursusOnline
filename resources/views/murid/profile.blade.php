@extends('murid/base')
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-md-12 col-md-offset-6">
                <div class="box box-primary">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1>Profile Siswa</h1>
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
                        <i class="fas fa-user mr-2"></i>Foto Profile

                        <hr class="photo">
                        <div class="d-flex justify-content-center" style="overflow-x:auto;">
                            @if($d->file==null)
                            <img class="navbar-brand-full" src="{{('/tema/images/user.png')}}" width="300px"
                                alt="upload foto" style="display:block; margin-left:auto; margin-right:auto;">
                            @else
                            <a href="{{ url('/data_file/'.$d->file) }}" target="_blank">
                                <img width="250px" src="{{ url('/data_file/'.$d->file) }}"
                                    style="display:block; margin-left:auto; margin-right:auto;">
                            </a>
                            @endif
                        </div>
                        @endforeach
                        @foreach($user as $u)
                        <hr class="photo">
                        <h4 class="font-weight-normal" style="text-align:center" >{{ $u->id }} - {{ $u->name }}
                        </h4>
                        <h6 class="font-weight-normal" style="text-align:center">{{ $u->email }}
                            </h4>
                            <h6 class="font-weight-normal" style="text-align:center" value="{{ $u->phone }}">
                                {{ $u->phone }}</h6>
                            <br>
                            <a href="{{route('register.edit',$u->id)}}" class="btn-edit-info"
                                style="display:block; margin-left:auto; margin-right:auto;">Pengaturan Akun</a>

                            @endforeach
                            @foreach($data as $d)
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
                                        Alamat
                                        <input type="text" class="form-control"
                                            value="{{ $d->provinsi }} {{ $d->kabupaten }} {{ $d->kecamatan }}"
                                            style="margin-right:190px;background:white;border:none" disabled>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        Jenis Kelamin
                                        <input type="text" class="form-control" value="{{ $d->jenis_kelamin }}"
                                            style="margin-right:190px;background:white;border:none" disabled>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        Tanggal Lahir
                                        <input type="text" class="form-control" value="{{ $d->tanggal_lahir }}"
                                            style="margin-right:190px;background:white;border:none" disabled>
                                    </th>
                                </tr>
                            </tbody>
                        </table>
                        <div class="form-group">
                        </div>
                        <td>
                            <a href="{{route('dataSiswa.edit',$d->id)}}" class="btn-edit" style="margin-left:auto;">Edit
                                Profil</a>
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