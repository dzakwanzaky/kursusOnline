@extends('base/script_page')
@section('content')
<div id="support" class="section" style="background-image:url('tema/uploads/form_bg.jpg');">
        <div class="container">
            <div class="section-title text-center">
                <h3>Daftar Akun Imam Course</h3>
				<!-- <div class="info-box" data-toggle="tooltip" data-placement="right" title="Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.">
					<i class="fa fa-question-circle" aria-hidden="true"></i>
				</div> -->
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-6" style="margin:auto;">
                    <div class="contact_form">
                        <div id="message"></div>
                        <form id="contactform"  action="contact.php" name="contactform" method="post">
                            
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <input type="text" name="no_telp" id="no_telp" class="form-control" placeholder="No Telepon">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                                </div>
                                
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 text-center" style="margin:auto;">
                                    <button type="submit" value="daftar" id="daftar" class="btn btn-light btn-radius btn-brd grd1 ">Daftar</button>
                                </div>
                            
                        </form>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <section class="section nopad cac text-center">
        <a href="#"><h3>Interesting our awesome web design services? Just drop an email to us and get quote for free!</h3></a>
    </section>
@endsection