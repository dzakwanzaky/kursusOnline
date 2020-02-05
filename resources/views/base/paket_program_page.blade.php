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
                                        <input type="text" class="form-control" id="program" name="program" style="display:none" value="SD">

                                            <h2>SD</h2>
                                        </div>
                                        <div class="pricing-table-text">
                                            <p>KETERANGAN</p>
                                        </div>
                   
                                        <div class="pricing-table-sign-up">
                                            <a href="/pendaftaranProgram1">
                                                <button type="submit" class="btn btn-dark btn-radius btn-brd effect-1">PILIH</button>
                                            </a>
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

                                            <input type="text" class="form-control" id="program" name="program" style="display:none" value="SMP">

                                            <h2>SMP</h2>
                                        </div>
                                        <div class="pricing-table-space"></div>
                                        <div class="pricing-table-text">
                                            <p>KETERANGAN</p>
                                        </div>
                                      
                                        <div class="pricing-table-sign-up">
                                            <a href="/pendaftaranProgram2">
                                                <button type="submit" class="btn btn-dark btn-radius btn-brd effect-1">PILIH</button>
                                            </a>
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

                                            <input type="text" class="form-control" id="program" name="program" style="display:none" value="SMA">

                                            <h2>SMA</h2>
                                          
                                            </div>
                                            <div class="pricing-table-space"></div>
                                            <div class="pricing-table-text">
                                            <p>KETERANGAN</p>
                                            </div>
                                           
                                        <div class="pricing-table-sign-up">
                                            <a href="/pendaftaranProgram3">
                                                <button type="submit" class="btn btn-dark btn-radius btn-brd effect-1">PILIH</button>
                                            </a>
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

    <div id="pricing" class="section lb">
        <div class="container">

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
                                            
                                         <input type="text" class="form-control" id="program" name="program" style="display:none" value="SBMPTN">

                                            <h2>SBMPTN</h2>
                                        </div>
                                        <div class="pricing-table-text">
                                            <p>KETERANGAN</p>
                                        </div>

                                        <div class="pricing-table-sign-up">
                                            <a href="/pendaftaranProgram4">
                                                <button type="submit" class="btn btn-dark btn-radius btn-brd effect-1">PILIH</button>
                                            </a>
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

                                            <input type="text" class="form-control" id="program" name="program" style="display:none" value="Seleksi PTN">

                                            <h2>SELEKSI PTN</h2>
                                        </div>
                                        <div class="pricing-table-space"></div>
                                        <div class="pricing-table-text">
                                            <p>KETERANGAN</p>
                                        </div>
                                      
                                        <div class="pricing-table-sign-up">
                                            <a href="/pendaftaranProgram5">
                                                <button type="submit" class="btn btn-dark btn-radius btn-brd effect-1">PILIH</button>
                                            </a>
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

                                            <input type="text" class="form-control" id="program" name="program" style="display:none" value="CPNS">

                                            <h2>CPNS</h2>
                                          
                                            </div>
                                            <div class="pricing-table-space"></div>
                                            <div class="pricing-table-text">
                                            <p>KETERANGAN</p>
                                            </div>
                                           
                                        <div class="pricing-table-sign-up">
                                            <a href="/pendaftaranProgram6">
                                                <button type="submit" class="btn btn-dark btn-radius btn-brd effect-1">PILIH</button>
                                            </a>
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

    <div id="pricing" class="section lb">
        <div class="container">

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
                                            
                                         <input type="text" class="form-control" id="program" name="program" style="display:none" value="Bahasa Inggris">

                                            <h2>BAHASA INGGIRS</h2>
                                        </div>
                                        <div class="pricing-table-text">
                                            <p>KETERANGAN</p>
                                        </div>

                                        <div class="pricing-table-sign-up">
                                            <a href="/pendaftaranProgram7">
                                                <button type="submit" class="btn btn-dark btn-radius btn-brd effect-1">PILIH</button>
                                            </a>
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

                                            <input type="text" class="form-control" id="program" name="program" style="display:none" value="Komputer">

                                            <h2>KOMPUTER</h2>
                                        </div>
                                        <div class="pricing-table-space"></div>
                                        <div class="pricing-table-text">
                                            <p>KETERANGAN</p>
                                        </div>
                                      
                                        <div class="pricing-table-sign-up">
                                            <a href="/pendaftaranProgram8">
                                                <button type="submit" class="btn btn-dark btn-radius btn-brd effect-1">PILIH</button>
                                            </a>
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

                                            <input type="text" class="form-control" id="program" name="program" style="display:none" value="Mengaji">

                                            <h2>MENGAJI</h2>
                                          
                                        </div>
                                            <div class="pricing-table-space"></div>
                                            <div class="pricing-table-text">
                                            <p>KETERANGAN</p>
                                        </div>
                                           
                                        <div class="pricing-table-sign-up">
                                            <a href="/pendaftaranProgram8">
                                                <button type="submit" class="btn btn-dark btn-radius btn-brd effect-1">PILIH</button>
                                            </a>
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