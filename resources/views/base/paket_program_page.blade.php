@include('base/header_page')
@extends('base/script_page')
@section('content')
<div id="pricing" class="section lb">
        <div class="container">
            <div class="section-title text-center">
                <h4>Program Inofa Course</h4>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-12">
                    <div class="tab-content">
                        <div class="tab-pane active fade show" id="tab1">
                            <div class="row text-center">
                                <div class="col-md-4">
                                    <div class="pricing-table pricing-table-highlighted">
                                        <div class="pricing-table-header">
                                        <form method="POST" action="{{  route('paketProgram.store')}}" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        {{ method_field('POST') }}
                                            <input id="murid_id" style="display:none" type="text" class="form-control" name="murid_id"
                                                    required autofocus
                                                    value="{{ Auth::user()->id }}" style="text-transform: capitalize">
                                                    
                                            <input type="number" class="form-control" id="invoice" name="invoice" style="display:none" value="<?php echo (rand(190000000,199999999)) ?>">
                                            
                                         @foreach($data1 as $d)
                                         <input type="text" class="form-control" id="program" name="program" style="display:none" value="{{ $d->program }}">
                                            <input type="number" class="form-control" id="harga" name="harga" style="display:none" value="{{ $d->harga }}">

                                            <h2>PAKET {{ $d->program }}</h2>
                                            <h3>{{ $d->harga }}</h3>
                                        </div>
                                        <div class="pricing-table-space"></div>
                                        <div class="pricing-table-text">
                                            <p>{{ $d->keterangan }}</p>
                                        </div>
                                        <div class="pricing-table-features">
                                            <p><i class="fa fa-rocket"></i> <strong>FASILITAS :</strong><p style="margin-left:18%">{{ $d->fasilitas }}
                                            <p><i class="fa fa-database"></i> <strong>DURASI :</strong><p style="margin-left:18%">{{ $d->durasi }}
                                            <p><i class="fa fa-link"></i> <strong>JUMLAH PERTEMUAN :</strong><p style="margin-left:18%">{{ $d->jumlah_pertemuan }}</p>
                                            <br>                                       </div>
                                            @endforeach

                                        <div class="pricing-table-sign-up">
                                            <a href="/pendaftaranSiswaReg">
                                                <button type="submit" class="btn btn-dark btn-radius btn-brd effect-1">Daftar Sekarang</button>
                                            </a>
                                            <!-- <a href="/pendaftaranSiswaGold" type="submit" class="btn btn-dark btn-radius btn-brd effect-1">Daftar Sekarang</a> -->
                                        </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="pricing-table pricing-table-highlighted">
                                        <div class="pricing-table-header">
                                        <form method="POST" action="{{ route('paketProgram.store')}}" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                
                                        <input id="murid_id" style="display:none" type="text" class="form-control" name="murid_id"
                                                required autofocus
                                                value="{{ Auth::user()->id }}" style="text-transform: capitalize">
                                        <input type="number" class="form-control" id="invoice" name="invoice" style="display:none" value="<?php echo (rand(190000000,199999999)) ?>">

                                            @foreach($data2 as $d)
                                            <input type="number" class="form-control" id="harga" name="harga" style="display:none" value="{{ $d->harga }}">
                                            <input type="text" class="form-control" id="program" name="program" style="display:none" value="{{ $d->program }}">

                                            <h2>PAKET {{ $d->program }}</h2>
                                            <h3>{{ $d->harga }}</h3>
                                        </div>
                                        <div class="pricing-table-space"></div>
                                        <div class="pricing-table-text">
                                            <p>{{ $d->keterangan }}</p>
                                        </div>
                                        <div class="pricing-table-features">
                                            <p><i class="fa fa-rocket"></i> <strong>FASILITAS :</strong><p style="margin-left:18%">{{ $d->fasilitas }}
                                            <p><i class="fa fa-database"></i> <strong>DURASI :</strong><p style="margin-left:18%">{{ $d->durasi }}
                                            <p><i class="fa fa-link"></i> <strong>JUMLAH PERTEMUAN :</strong><p style="margin-left:18%">{{ $d->jumlah_pertemuan }}</p>
                                            <br>                                       </div>
                                            @endforeach
                                        <div class="pricing-table-sign-up">
                                            <a href="/pendaftaranSiswaPrem">
                                                <button type="submit" class="btn btn-dark btn-radius btn-brd effect-1">Daftar Sekarang</button>
                                            </a>
                                            <!-- <a href="/pendaftaranSiswaGold" type="submit" class="btn btn-dark btn-radius btn-brd effect-1">Daftar Sekarang</a> -->
                                        </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="pricing-table pricing-table-highlighted">
                                        <div class="pricing-table-header">
                                        <form method="POST" action="{{ route('paketProgram.store')}}" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        {{ method_field('POST') }}
                                        <input id="murid_id" style="display:none" type="text" class="form-control" name="murid_id"
                                                required autofocus
                                                value="{{ Auth::user()->id }}" style="text-transform: capitalize">
                                        <input type="number" class="form-control" id="invoice" name="invoice" style="display:none" value="<?php echo (rand(190000000,199999999)) ?>">
                                        <input type="text" class="form-control" id="program" name="program" style="display:none" value="GOLD">

                                            @foreach($data3 as $d)
                                            <input type="number" class="form-control" id="harga" name="harga" style="display:none" value="{{ $d->harga }}">

                                            <h2>PAKET {{ $d->program }}</h2>
                                            <h3>{{ $d->harga }}</h3>
                                            </div>
                                            <div class="pricing-table-space"></div>
                                            <div class="pricing-table-text">
                                            <p>{{ $d->keterangan }}</p>
                                            </div>
                                            <div class="pricing-table-features">
                                            <p><i class="fa fa-rocket"></i> <strong>FASILITAS :</strong><p style="margin-left:18%">{{ $d->fasilitas }}
                                            <p><i class="fa fa-database"></i> <strong>DURASI :</strong><p style="margin-left:18%">{{ $d->durasi }}
                                            <p><i class="fa fa-link"></i> <strong>JUMLAH PERTEMUAN :</strong><p style="margin-left:18%">{{ $d->jumlah_pertemuan }}</p>
                                            <br>                                       </div>
                                            @endforeach
                                        <div class="pricing-table-sign-up">
                                            <a href="/pendaftaranSiswaGold">
                                                <button type="submit" class="btn btn-dark btn-radius btn-brd effect-1">Daftar Sekarang</button>
                                            </a>
                                            <!-- <a href="/pendaftaranSiswaGold" type="submit" class="btn btn-dark btn-radius btn-brd effect-1">Daftar Sekarang</a> -->
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div><!-- end row -->
                        </div><!-- end pane -->
                    </div><!-- end content -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
@endsection