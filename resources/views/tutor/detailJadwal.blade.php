@extends('tutor/base')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-md-12 col-md-offset-6">
                <div class="box box-primary">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0 text-dark">Profile Siswa</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-md-right" style="font-size:14px">
                                    <li class="breadcrumb-item">
                                        <a href="/jadwal">Jadwal Mengajar</a>
                                    </li>
                                    <li class="breadcrumb-item active">
                                        Profile Murid
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
                                                    <img class="navbar-brand-full" src="{{('/tema/images/user.png')}}"
                                                        width="300px" alt="upload foto"
                                                        style="display:block; margin-left:auto; margin-right:auto;">
                                                    @else
                                                    <a href="{{ url('/data_file/'.$d->file) }}" target="_blank">
                                                        <img width="250px" src="{{ url('/data_file/'.$d->file) }}"
                                                            style="display:block; margin-left:auto; margin-right:auto;">
                                                    </a>
                                                    @endif
                                                </div>
                                                <hr class="photo">
                                                <h4 class="font-weight-normal" style="text-align:center">
                                                    {{ $d->user->name }}
                                                </h4>
                                                <h6 class="font-weight-normal" style="text-align:center">
                                                    {{ $d->user->email }}
                                                    </h4>
                                                    <h6 class="font-weight-normal" style="text-align:center">
                                                        {{ $d->user->phone }}</h6>
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
                                                                    value="{{ $d->provinsi }}, {{ $d->kabupaten }}, {{ $d->kecamatan }}, {{ $d->alamat_detail }}"
                                                                    style="margin-right:190px;background:white;border:none"
                                                                    disabled>
                                                            </th>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                Jenis Kelamin
                                                                <input type="text" class="form-control"
                                                                    value="{{ $d->jenis_kelamin }}"
                                                                    style="margin-right:190px;background:white;border:none"
                                                                    disabled>
                                                            </th>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- /.col-md-6 -->
                                            @endforeach
                                       
                                  

                                    <!-- /.row -->
                                </div><!-- /.container-fluid -->
                            </div>
                            <!-- /.content -->
                        </div>
                    </div>
                </div>
                
                <!-- /.content -->
                <script src="https://code.jquery.com/jquery-3.4.1.min.js"
                    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous">
                </script>
                @endsection
