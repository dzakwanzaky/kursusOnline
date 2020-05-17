@extends('dashboard_admin/base')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-md-12 col-md-offset-6">
                            <div class="box box-primary">
                                <div class="container-fluid">
                                    <div class="row mb-2">
                                        <div class="col-sm-6">
                                            <h1>Edit Profile</h1>
                                        </div>
                                        <div class="col-sm-6">
                                            <ol class="breadcrumb float-md-right" style="font-size:14px">
                                                <li class="breadcrumb-item">
                                                    <a href="/admin">Admin</a>
                                                </li>
                                                <li class="breadcrumb-item active">
                                                    Profile Admin
                                                </li>
                                            </ol>
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
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group">
                                    <!-- <a class="btn-edit" style="margin-left:auto;" href="/editAdmin">
                       Edit profile
                    </a> -->

                                    @php $no = 1; @endphp
                                    @foreach($data as $d)
                                    <form action="{{ route('register.update', $d->id) }}" method="post"
                                        enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        {{ method_field('PUT') }}
                                        @foreach ($errors->all() as $error)
                                    <p class="text-danger">{{ $error }}</p>
                                    @endforeach
                                        <div class="form-group">
                                            <label for="">Nama Lengkap :</label>
                                            <input type="text" class="form-control" id="name" name="name"
                                                value="{{$d->name}}" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="">No Telepon :</label>
                                            <input type="text" class="form-control" id="phone" name="phone"
                                                value="{{$d->phone}}" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="">Email :</label>
                                            <input type="text" class="form-control" id="email" name="email"
                                                value="{{$d->email}}" required>
                                        </div>
                                        <div class="d-flex">
                                        <button type="submit" class="btn btn-primary d-block"
                                            style="width: 180px; border-radius:50px;margin-left:35%;"
                                            onclick="return confirm('Anda yakin data sudah benar?')">
                                            Simpan
                                        </button>
                                        &nbsp;&nbsp;&nbsp;
                                        <a class="btn btn-danger d-block" href="javascript:history.back()"
                                            style="width: 180px; border-radius:50px;"
                                            onclick="return confirm('Anda yakin ingin membatalkan?')">
                                            Batal
                                        </a>
                                    </div>
                                </div>
                            </div>

                            @endforeach
                        </div>
                        <!-- /.col-md-6 -->

                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
    </div>
</div>
<!-- /.content-header -->
@endsection
