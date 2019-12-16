@extends('base/script_page')
@section('content')
    <!-- LANDING PAGE -->
    <div id="home" class="parallax first-section" style="background-image:url('tema/images/bimbel.jpg');">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-12">
                    <div class="row mb-4">
                        <div class="col-md-7">
                            <h3>Gabung bersama kami dan</h3>
                            <h3>menjadi juara!</h3>
                            <p class="lead"></p>
                            <a data-scroll href="/registerPilih" class="btn btn-light btn-radius btn-brd" style="font-weight:bold"> GABUNG SEKARANG! </a>
                        </div>
                    </div>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
    <div id="paket" class="section lb">
        <div class="container">
            <div class="section-title text-center">
                <h4>Program Inofa Course</h4>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-12">
                    <div class="tab-content">
                        <div class="tab-pane active fade show" id="tab1">
                            <div class="row text-center">
                                <div class="col-md-4" style="margin:140px 0 0 0;">
                                    <div class="pricing-table pricing-table-highlighted">
                                        <div class="pricing-table-header">
                                            <input id="murid_id" style="display:none" type="text" class="form-control" name="murid_id"
                                                    required autofocus>
                                            <h2>PAKET REGULER</h2>
                                            <h3>RP.2.000,00</h3>
                                        </div>
                                        <div class="pricing-table-space"></div>
                                        <div class="pricing-table-text">
                                        </div>
                                        <div class="pricing-table-features">
                                            <p><i class="fa fa-envelope-o"></i> <strong>250</strong> Email Addresses</p>
                                            <p><i class="fa fa-rocket"></i> <strong>125GB</strong> of Storage</p>
                                            <p><i class="fa fa-database"></i> <strong>140</strong> Databases</p>
                                            <p><i class="fa fa-link"></i> <strong>60</strong> Domains</p>
                                            <p><i class="fa fa-life-ring"></i> <strong>24/7 Unlimited</strong> Support</p>
                                        <br>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="pricing-table pricing-table-highlighted">
                                        <div class="pricing-table-header">
                                            <h2>PAKET PREMIUM</h2>
                                            <h3>Rp.2.000,00</h3>
                                        </div>
                                        <div class="pricing-table-space"></div>
                                        <div class="pricing-table-text">
                                        </div>
                                        <div class="pricing-table-features">
                                            <p><i class="fa fa-envelope-o"></i> <strong>150</strong> Email Addresses</p>
                                            <p><i class="fa fa-rocket"></i> <strong>65GB</strong> of Storage</p>
                                            <p><i class="fa fa-database"></i> <strong>60</strong> Databases</p>
                                            <p><i class="fa fa-link"></i> <strong>30</strong> Domains</p>
                                            <p><i class="fa fa-life-ring"></i> <strong>24/7 Unlimited</strong> Support</p>
                                            <br>
                                        </div>
                                     </div>
                                </div>

                                <div class="col-md-4" style="margin:140px 0 0 0;">
                                    <div class="pricing-table pricing-table-highlighted">
                                        <div class="pricing-table-header">
                                            <h2>PAKET GOLD</h2>
                                            <h3>RP.2.000,00</h3>
                                        </div>
                                        <div class="pricing-table-space"></div>
                                        <div class="pricing-table-text">
                                        </div>
                                        <div class="pricing-table-features">
                                            <p><i class="fa fa-envelope-o"></i> <strong>250</strong> Email Addresses</p>
                                            <p><i class="fa fa-rocket"></i> <strong>125GB</strong> of Storage</p>
                                            <p><i class="fa fa-database"></i> <strong>140</strong> Databases</p>
                                            <p><i class="fa fa-link"></i> <strong>60</strong> Domains</p>
                                            <p><i class="fa fa-life-ring"></i> <strong>24/7 Unlimited</strong> Support</p>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end row -->
                            <br>
                        </div><!-- end pane -->
                    </div><!-- end content -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
    <div id="bayar" class="section lb">
        <div class="container">
            <div class="section-title text-center">
                <h4>Cara Bayar Kursus di Inofa Course</h4><br>
                <li class="nav-item dropdown">
                <p style="text-align:left;margin-left:15%; margin-bottom: 10px;">Transfer Bank/Transfer Virtual Account</p>
                <a class="nav-link button4" data-toggle="dropdown" href="#" style="text-align:left">
                    <img src="https://bimbel.ruangguru.com/hubfs/Bank_Central_Asia.png" style="width:58px; margin-bottom: 10px;margin-top: 10px;">
                <br>Bank Transfer BCA
                </a>
                <div class="dropdown-menu">
                <ol>
                    <li>1. Masukkan kartu, pilih <b>bahasa</b>, dan masukkan PIN sesuai petunguk di layar</li>
                    <li>2. Pada menu utama, pilih <b>Transaksi Lainnya</b></li>
                    <li>3. Pilih <b>Transfer</b> dan pilih <b>ke rekening BCA</b></li>
                    <li>4. Masukkan nominal transfer sesuai dengan total tagihan transaksi di aplikasi Ruangguru</li>
                    <li>5. Masukkan nomor rekening BCA yang tertera di aplikasi Ruangguru sebagai tujuan transfer</li>
                </ol>
            </div>
            
            <a class="nav-link button4" data-toggle="dropdown" href="#" style="margin-buttom:10px; text-align:left">
                    <img src="https://bimbel.ruangguru.com/hubfs/Bank-Mandiri-Logo-Vector-Image.png" style="width:58px; margin-bottom: 10px;margin-top: 10px;">
                <br>Bank Transfer Mandiri
                </a>
                <div class="dropdown-menu dropdown-menu-lg">
                <ol>
                    <li>1. Masukkan kartu, pilih <b>bahasa</b>, dan masukkan PIN sesuai petunguk di layar</li>
                    <li>2. Pada menu utama, pilih <b>Transaksi Lainnya</b></li>
                    <li>3. Pilih <b>Transfer</b> dan pilih <b>ke rekening BCA</b></li>
                    <li>4. Masukkan nominal transfer sesuai dengan total tagihan transaksi di aplikasi Ruangguru</li>
                    <li>5. Masukkan nomor rekening BCA yang tertera di aplikasi Ruangguru sebagai tujuan transfer</li>
                </ol>
            </div>
            <a class="nav-link button4" data-toggle="dropdown" href="#" style="margin-buttom:10px; text-align:left">
                    <img src="https://bimbel.ruangguru.com/hubfs/BNI.png" style="width:58px; margin-bottom: 10px;margin-top: 10px;">
                <br>Bank Transfer BNI
                </a>
                <div class="dropdown-menu dropdown-menu-lg">
                <ol>
                    <li>1. Masukkan kartu, pilih <b>bahasa</b>, dan masukkan PIN sesuai petunguk di layar</li>
                    <li>2. Pada menu utama, pilih <b>Transaksi Lainnya</b></li>
                    <li>3. Pilih <b>Transfer</b> dan pilih <b>ke rekening BCA</b></li>
                    <li>4. Masukkan nominal transfer sesuai dengan total tagihan transaksi di aplikasi Ruangguru</li>
                    <li>5. Masukkan nomor rekening BCA yang tertera di aplikasi Ruangguru sebagai tujuan transfer</li>
                </ol>
            </div>
            <a class="nav-link button4" data-toggle="dropdown" href="#" style="margin-buttom:10px; text-align:left">
                    <img src="https://bimbel.ruangguru.com/hubfs/Logo_BRI.png" style="width:58px; margin-bottom: 10px;margin-top: 10px;">
                <br>Bank Transfer BRI
                </a>
                <div class="dropdown-menu dropdown-menu-lg">
                <ol>
                    <li>1. Masukkan kartu, pilih <b>bahasa</b>, dan masukkan PIN sesuai petunguk di layar</li>
                    <li>2. Pada menu utama, pilih <b>Transaksi Lainnya</b></li>
                    <li>3. Pilih <b>Transfer</b> dan pilih <b>ke rekening BCA</b></li>
                    <li>4. Masukkan nominal transfer sesuai dengan total tagihan transaksi di aplikasi Ruangguru</li>
                    <li>5. Masukkan nomor rekening BCA yang tertera di aplikasi Ruangguru sebagai tujuan transfer</li>
                </ol>
            </div>
            <li class="nav-item dropdown">
                <p style="text-align:left;margin-left:15%; margin-bottom: 10px;">Minimarket</p>
                <a class="nav-link button4" data-toggle="dropdown" href="#" style="text-align:left">
                    <img src="https://bimbel.ruangguru.com/hubfs/Indomaret.png" style="width:58px; margin-bottom: 10px;margin-top: 10px;">
                <br>Pembayaran Via Indomaret
                </a>
                <div class="dropdown-menu dropdown-menu-lg">
                <ol>
                    <li>1. Masukkan kartu, pilih <b>bahasa</b>, dan masukkan PIN sesuai petunguk di layar</li>
                    <li>2. Pada menu utama, pilih <b>Transaksi Lainnya</b></li>
                    <li>3. Pilih <b>Transfer</b> dan pilih <b>ke rekening BCA</b></li>
                    <li>4. Masukkan nominal transfer sesuai dengan total tagihan transaksi di aplikasi Ruangguru</li>
                    <li>5. Masukkan nomor rekening BCA yang tertera di aplikasi Ruangguru sebagai tujuan transfer</li>
                </ol>
            </div><!-- end title -->
            <li class="nav-item dropdown" style="margin-bottom:5%">
                <p style="text-align:left;margin-left:15%; margin-bottom: 10px;">GO-PAY</p>
                <a class="nav-link button4" data-toggle="dropdown" href="#" style="text-align:left">
                    <img src="https://bimbel.ruangguru.com/hubfs/Logo%20GoPay%20Vector%20CDR%20dan%20PNG.png" style="width:58px; margin-bottom: 10px;margin-top: 10px;">
                <br>Pembayaran Via GO-PAY
                </a>
                <div class="dropdown-menu dropdown-menu-lg">
                <ol>
                    <li>1. Masukkan kartu, pilih <b>bahasa</b>, dan masukkan PIN sesuai petunguk di layar</li>
                    <li>2. Pada menu utama, pilih <b>Transaksi Lainnya</b></li>
                    <li>3. Pilih <b>Transfer</b> dan pilih <b>ke rekening BCA</b></li>
                    <li>4. Masukkan nominal transfer sesuai dengan total tagihan transaksi di aplikasi Ruangguru</li>
                    <li>5. Masukkan nomor rekening BCA yang tertera di aplikasi Ruangguru sebagai tujuan transfer</li>
                </ol>
            </div><!-- end title -->
            </div>
        </div>
    </div>
    @include('base/features_page') 
    @include('base/footer_page')   
    <a href="#home" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
@endsection