@extends('base/script_page')
@section('content')
    <!-- LANDING PAGE -->
    <div id="home" class="parallax first-section" style="background-image:url('tema/uploads/bimbel.png');">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-14">
                </div>
                <div class="big-tagline">
                        <h2>Gabung bersama kami dan</h2>
                        <h2>menjadi juara!</h2>
                        <p class="lead"></p>
                        <a data-scroll href="#" class="btn btn-light btn-radius btn-brd" style="font-weight:bold"> GABUNG SEKARANG </a>
                    </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    @include('base/features_page')    
    <a href="#home" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
@endsection
   