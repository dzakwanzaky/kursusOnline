@include('base/header_page0')
@extends('base/script_h')

<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/button')}}/paket.css">
</head>

<body>
    @foreach($data as $d)
    <section class="priching">
        <section class="heading">Paket Bimbingan Belajar {{$d->program}}</section>
        <div class="container">
            <div class="row">
                @foreach(($d->paket) as $d)

                <div class="col-sm-4">
                    <div class="price-table">
                        <div class="price-head">
                            <p>Paket</p>
                            <h4>{{$d->nama_paket}}</h4>
                            <h2><span class="supertext">Rp</span>
                                <h4i>{{$d->harga}}</h4i><span class="subtext">/Bulan</span>
                            </h2>
                        </div>
                        <div class="price-content">
                            <ul>
                                <li><span class="text">{{$d->jumlah_mapel}}&nbsp;</span>pilihan mapel</li>
                                <li><span class="text">60&nbsp;</span>menit durasi</li>
                                <li><span class="text">{{$d->jumlah_pertemuan}}&nbsp;</span>kali pertemuan</li>

                            </ul>
                        </div>
                        <div class="price-bottom">
                        </div>
                    </div>
                </div>

                @endforeach
            </div>
        </div>
    </section>





	@endforeach

    </div>
    </div>
    </section>

